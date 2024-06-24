<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


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

    public function login()
    {
        $categories = Category::all();
        return view('customer.login',compact('categories'));
    }

    public function logaction(Request $request){

        $validate = $request->validate([
            'uname' => ['required'],
            'pword' => ['required']
        ]);

        $username = $request->uname;
        $password = $request->pword;

        $input = ['username'=>$username,'password'=>$password];

        if(auth()->guard('customer')->attempt($input)){
            return redirect()->route('main')->with('msg','Success');
        }else{
            return redirect()->route('log')->with('msg','Invalid Username or Password');
        }
    }

    public function register(){
        $categories = Category::all();
        return view('customer.register',compact('categories'));
    }

    public function save(Request $request){

        $validate = $request->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'address' => ['required'],
            'district' => ['required'],
            'state' => ['required'],
            'country' => ['required'],
            'pincode' => ['required','numeric'],
            'mobile' => ['required','numeric'],
            'email' => ['required', 'email','unique:customers,email'] 
        ]);

        if($request->hasFile('photo')){
            $im=$request->file('photo');
            $ext = $im->extension();
            $file_name = "customer_".time().".".$ext;
            $im->storeAs('public/customer/',$file_name);
        }
        else
        {
            $file_name = "no_image.png";
        }


        $cust = DB::table('customers')->insert([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'address' => $request->address,
            'district' => $request->district,
            'state' => $request->state,
            'country' => $request->country,
            'pincode' => $request->pincode,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'username'=> $request->email,
            'password'=> bcrypt($request->mobile),
            'photo'=> $file_name
        ]);

        if($cust){
            $msg_array = 'Customer Added Successfully';
        }else{
            $msg_array = 'Customer Could not be Added';
        }
        return redirect()->route('customer.register')->with('msg',$msg_array);
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
