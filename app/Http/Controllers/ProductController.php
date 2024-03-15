<?php

namespace App\Http\Controllers;

use App\DataTables\ProductsDataTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\Product;
use App\Models\Seller;
use App\Models\Category;
use App\Models\Brand;
use Exception;

class ProductController extends Controller
{
    public function report(ProductsDataTable $dataTable)
    {
        return $dataTable->render('product.report');
    }

    public function view($pid)
    {
        $product = Product::find(decrypt($pid));
        return view('product.view',compact('product'));
        
    }

    public function add()
    {
        $slr=Seller::all();
        $brn=Brand::all();
        $cat=Category::all();
        return view('product.add',compact('slr','brn','cat'));
    }

    public function save(Request $request){

        $validate = $request->validate([
            'name' => ['required'],
            'company' => ['required'],
            'category' => ['required'],
            'brand' => ['required'],
            'quantity' => ['required','numeric'],
            'aprice' => ['required','numeric'],
            'rprice' => ['required','numeric'],
            'description' => ['nullable'],
            'main_image' => ['nullable','image'],
            'images.*' => ['nullable','image']
        ]);

        
        $file_name = 'no_image.png';
        if($request->hasFile('main_image')){
            $im=$request->file('main_image');
            $ext = $im->extension();
            $file_name = "product_".time().".".$ext;
            $im->storeAs('public/products/main_images/',$file_name);
        }

        $filename2="no_image.png";
        if($request->hasFile('images')){
            $filename2="@@";
            $i=0; $fl="";
            foreach($request->images as $file){ $i++;
                $ext = $file->extension();
                $fl = "product_".time()."_".$i.".".$ext;
                $file->storeAs('public/products/',$fl);

                $filename2 .= $fl."@@";
            }
        }

        $product = Product::create([
            'name' => $request->name,
            'company' => $request->company,
            'category' => $request->category,
            'brand' => $request->brand,
            'color_name' => $request->color_name,
            'color' => $request->color,
            'quantity' => $request->quantity,
            'actual_price' => $request->aprice,
            'reduced_price' => $request->rprice,
            'description' => $request->description,
            'main_image' => $file_name,
            'images' => $filename2
        ]);
        if($product){
            $msg_array = 'Product Added Successfully';
        }else{
            $msg_array = 'Product not Added';
        }

        return redirect()->route('product.add')->with('msg',$msg_array);
    } 

    public function edit($pid)
    {
        $slr = Seller::all();
        $cat = Category::all();
        $brn = Brand::all();
        $prd = Product::find(decrypt($pid));
        return view('product.edit',compact('prd','slr','cat','brn'));
    }

    public function update(Request $request)
    {
        $validate = $request->validate([
            'name' => ['required'],
            'company' => ['required'],
            'category' => ['required'],
            'brand' => ['required'],
            'quantity' => ['required','numeric'],
            'aprice' => ['required','numeric'],
            'rprice' => ['required','numeric'],
            'description' => ['nullable'],
            'main_image' => ['nullable','image'],
            'images.*' => ['nullable','image']
        ]);

        $prd = Product::find(decrypt($request->pid));

        if($request->hasFile('main_image')){
            $im=$request->file('main_image');
            $ext = $im->extension();
            $file_name = "product_".time().".".$ext;
            $im->storeAs('public/products/main_images/',$file_name);
        }else{
            $file_name=$prd->main_image;
        }

        if($request->hasFile('images')){
            $filename2="@@";
            $i=0; $fl="";
            foreach($request->images as $file){ $i++;
                $ext = $file->extension();
                $fl = "product_".time()."_".$i.".".$ext;
                $file->storeAs('public/products/',$fl);

                $filename2 .= $fl."@@";
            }
        }
        else{
            $filename2=$prd->images;
        }

        $update = $prd->update([
            'name' => $request->name,
            'company' => $request->company,
            'category' => $request->category,
            'brand' => $request->brand,
            'color_name' => $request->color_name,
            'color' => $request->color,
            'quantity' => $request->quantity,
            'actual_price' => $request->aprice,
            'reduced_price' => $request->rprice,
            'description' => $request->description,
            'main_image' => $file_name,
            'images' => $filename2
        ]);
           
        if($update){
            $msg_array = 'Product Updated Successfully';
        }else{
            $msg_array = 'Product not Updated';
        }
        return redirect()->route('product.edit',encrypt($prd->id))->with('msg',$msg_array);
    }
    public function imgdelete($pid){

        $pd = Product::find(decrypt($pid));
       
        $update = $pd->update([
            'main_image' => ''
        ]);
        if($update){
            $msg_array = 'Image Deleted Successfully';
        }else{
            $msg_array = 'Image Could not be Deleted';
        }
        return redirect()->route('product.edit',encrypt($pd->id))->with('msg',$msg_array);
    }

    public function itemdelete($pid,$image){
        try{
            $product = Product::find(decrypt($pid));
            $gallery = array_filter(explode('@@',$product->images));
            $key = array_search($image,$gallery);
            if($key){
                unset($gallery[$key]);
            }
            $imgstring = '';
            if(!empty($gallery)){
                $imgstring = implode('@@',$gallery);
            }
            $update = $product->update(['images' => $imgstring]);
            if($update){
                $msg_array = 'Image Deleted Successfully';
            }else{
                $msg_array = 'Image Could not be Deleted';
            }
            return redirect()->route('product.edit',$pid)->with('msg',$msg_array);
        }catch(Exception $e){
            return redirect()->route('product.edit',$pid)->with('msg','Failed to delete image');
        }
    }

    public function delete($pid)
    {
        $prd = Product::find(decrypt($pid));

        $update = $prd->delete();
        if($update){
            $msg_array = 'Product Deleted Successfully';
        }else{
            $msg_array = 'Product not Deleted';
        }
        return redirect()->route('products')->with('msg',$msg_array); 
    }

}
