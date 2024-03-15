<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class Brands extends Controller
{
    public function report()
    {
        $brr= Brand::all();
        return view('brand.report',compact('brr'));
    }
    public function add()
    {
        return view('brand.add');
    }
    public function save(Request $request){

        $validate = $request->validate([
            'brand_name' => ['required']
        ]);

        $cat= Brand::create([
            'brand_name' => $request->brand_name
        ]);
        if($cat){
            $msg_array = 'Brand Added Successfully';
        }else{
            $msg_array = 'Brand not Added';
        }
        return redirect()->route('brand.add')->with('msg',$msg_array);
    } 

    public function edit($bid)
    {
        $brn = Brand::find(decrypt($bid));
        return view('brand.edit',compact('brn'));
    }

    public function update(Request $request)
    {
        $validate = $request->validate([
            'brand_name' => ['required']
        ]);

        $brn = Brand::find(decrypt($request->bid));

        $update = $brn->update([
            'brand_name' => $request->brand_name
        ]);
           
        if($update){
            $msg_array = 'Brand Updated Successfully';
        }else{
            $msg_array = 'Brand not Updated';
        }
        return redirect()->route('brand.edit',encrypt($brn->id))->with('msg',$msg_array);
    }

    public function delete($bid)
    {
        $brn = Brand::find(decrypt($bid));

        $update = $brn->delete();
        if($update){
            $msg_array = 'Brand Deleted Successfully';
        }else{
            $msg_array = 'Brand not Deleted';
        }
        return redirect()->route('brands')->with('msg',$msg_array); 
    }

}
