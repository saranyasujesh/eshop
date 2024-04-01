<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Deal;
use Illuminate\Support\Facades\Storage;

class Deals extends Controller
{
    public function report()
    {
        $deals= Deal::all();
        return view('deal.report',compact('deals'));
    }
    public function add()
    {
        $products= Product::all();
        return view('deal.add',compact('products'));
    }

    public function save(Request $request){

        $validate = $request->validate([
            'product_id' => ['required'],
            'deal_heading' => ['required'],
            'description' => ['required'],
            'actual_price' => ['required'],
            'reduced_price' => ['required'],
            'time_period' => ['required'],
            'active' => ['required'],
            'image' => ['required','image']
        ]);

        $file_name ="";
        if($request->hasFile('image')){
            $im=$request->file('image');
            $ext = $im->extension();
            $file_name = "deal_".time().".".$ext;
            $im->storeAs('public/deal/',$file_name);
        }

        $dl= Deal::create([
            'sub_heading' => 'DEAL OF THE DAY',
            'heading' => $request->deal_heading,
            'product_id' => $request->product_id,
            'description' => $request->description,
            'actual_price' => $request->actual_price,
            'reduced_price' => $request->reduced_price,
            'time_period' => $request->time_period,
            'active' => $request->active,
            'image' => $file_name
        ]);
        if($dl){
            if($dl->active=='Yes'){
                Deal::where('id','!=',$dl->id)->update(['active'=>'No']);
            }
            $msg_array = 'New Deal Added Successfully';
        }else{
            $msg_array = 'New Deal not Added';
        }
        return redirect()->route('deal.add')->with('msg',$msg_array);
    } 

}
