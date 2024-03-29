<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class Ajax extends Controller
{
    public function products(Request $request){

        $query = Product::where('id','>',0);
        if($request->categories!=''){
            $query->whereIn('category',$request->categories);
        }
        if($request->minamount!=''){
            $query->where('reduced_price','>=',$request->minamount);
        }
        if($request->maxamount!=''){
            $query->where('reduced_price','<=',$request->maxamount);
        }
        if($request->brands!=''){
            $query->whereIn('brand',$request->brands);
        }

        if($request->sortby!=''){
            if($request->sortby==1){
                $query->orderBy('name','asc');
            }else if($request->sortby==2){
                $query->orderBy('name','desc');
            }else if($request->sortby==3){
                $query->orderBy('reduced_price','asc');
            }else if($request->sortby==4){
                $query->orderBy('reduced_price','desc');
            }
        }

        $products = $query->get();

        return view('product.result',compact('products'));
    }
}
