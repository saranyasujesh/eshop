<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Banner;
use Illuminate\Support\Facades\Storage;

class Banners extends Controller
{
    public function report()
    {
        $banners= Banner::all();
        return view('banner.report',compact('banners'));
    }
    public function add()
    {
        $categories= Category::all();
        return view('banner.add',compact('categories'));
    }
    public function save(Request $request){

        $validate = $request->validate([
            'category' => ['required','unique:banners,category'],
            'heading' => ['required'],
            'description' => ['required'],
            'active' => ['required'],
            'banner_image' => ['required','image']
        ]);

        $file_name ="";
        if($request->hasFile('banner_image')){
            $im=$request->file('banner_image');
            $ext = $im->extension();
            $file_name = "banner_".time().".".$ext;
            $im->storeAs('public/banner/',$file_name);
        }

        $ban= Banner::create([
            'heading' => $request->heading,
            'category' => $request->category,
            'description' => $request->description,
            'active' => $request->active,
            'banner_image' => $file_name
        ]);
        if($ban){
            if($ban->active=='Yes'){
                Banner::where('id','!=',$ban->id)->update(['active'=>'No']);
            }
            $msg_array = 'Banner Added Successfully';
        }else{
            $msg_array = 'Banner not Added';
        }
        return redirect()->route('banner.add')->with('msg',$msg_array);
    } 


    public function edit($bid)
    {
        $ban = Banner::find(decrypt($bid));
        return view('banner.edit',compact('ban'));
    }

    public function update(Request $request)
    {
        $validate = $request->validate([
            'heading' => ['required'],
            'description' => ['required'],
            'active' => ['required']
        ]);
        $ban = Banner::find(decrypt($request->bid));

        if($request->hasFile('banner_image')){
            $im=$request->file('banner_image');
            $ext = $im->extension();
            $file_name = "banner_".time().".".$ext;
            $im->storeAs('public/banner/',$file_name);
        }else{
            $file_name=$ban->banner_image;
        }

        $update = $ban->update([
            'category' => $request->category,
            'heading' => $request->heading,
            'description' => $request->description,
            'active' => $request->active,
            'banner_image' => $file_name
        ]);
           
        if($update){
            $msg_array = 'Banner Updated Successfully';
        }else{
            $msg_array = 'Banner not Updated';
        }
        return redirect()->route('banner.edit',encrypt($ban->id))->with('msg',$msg_array);
    }

    public function delete($bid)
    {
        $ban = Banner::find(decrypt($bid));

        $update = $ban->delete();
        if($update){
            $msg_array = 'Banner Deleted Successfully';
        }else{
            $msg_array = 'Banner not Deleted';
        }
        return redirect()->route('banner.report')->with('msg',$msg_array); 
    }
}
