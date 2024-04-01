<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Deal;
use App\Models\Brand;
use App\Models\Product;

class Customers extends Controller
{
    public function main_page()
    {
        $categories = Category::all();
        $banner = Banner::where('active','Yes')->first();
        $deal = Deal::where('active','Yes')->first();
        $bnr = Banner::where('active','No')->first();
        $hotitems = Product::where('hot_item','Yes')->get()->take(10);
        return view('customer.home',compact('categories','banner','hotitems','bnr','deal'));
    }
    public function shop()
    {
        $categories = Category::all();
        $brands = Brand::all();
        return view('customer.shop',compact('categories','brands'));
    }

    public function cart()
    {
        $categories = Category::all();
        return view('customer.cart',compact('categories'));
    }

    public function checkout()
    {
        $categories = Category::all();
        return view('customer.checkout',compact('categories'));
    }
}
