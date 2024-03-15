<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\category;

class Categories extends Controller
{
    public function categoryreport()
    {
        $category= Category::all();
        return view('category.categoryreport',compact('category'));
    }
    public function add()
    {
        return view('category.add');
    }
    public function save(Request $request){

        $validate = $request->validate([
            'category_name' => ['required']
        ]);

        $cat= Category::create([
            'category_name' => $request->category_name
        ]);
        if($cat){
            $msg_array = 'Category Added Successfully';
        }else{
            $msg_array = 'Category not Added';
        }
        return redirect()->route('category.add')->with('msg',$msg_array);
    } 


    public function edit($cid)
    {
        $cat = Category::find(decrypt($cid));
        return view('category.edit',compact('cat'));
    }

    public function update(Request $request)
    {
        $validate = $request->validate([
            'category_name' => ['required']
        ]);

        $cat = Category::find(decrypt($request->cid));

        $update = $cat->update([
            'category_name' => $request->category_name
        ]);
           
        if($update){
            $msg_array = 'Category Updated Successfully';
        }else{
            $msg_array = 'Category not Updated';
        }
        return redirect()->route('category.edit',encrypt($cat->id))->with('msg',$msg_array);
    }

    public function delete($cid)
    {
        $cat = Category::find(decrypt($cid));

        $update = $cat->delete();
        if($update){
            $msg_array = 'Category Deleted Successfully';
        }else{
            $msg_array = 'Category not Deleted';
        }
        return redirect()->route('category.report')->with('msg',$msg_array); 
    }
}
