<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Seller;
use App\Models\User;

class Sellers extends Controller
{
    public function register(){
        return view('seller.register');
    }

    public function shome(){

        return view('seller.sellerhome');
    }

    public function login(){
        
            return view('seller.login');
       
    }
    public function logaction(Request $request){

        $validate = $request->validate([
            'uname' => ['required'],
            'pword' => ['required']
        ]);

        $username = $request->uname;
        $password = $request->pword;

        $input = ['username'=>$username,'password'=>$password];

        if(auth()->guard('seller')->attempt($input)){
            return redirect()->route('seller.home')->with('msg','Success');
        }else{
            return redirect()->route('login')->with('msg','Invalid Username or Password');
        }
    }

    public function save(Request $request){

        $validate = $request->validate([
            'name' => ['required'],
            'company' => ['required'],
            'place' => ['required'],
            'address' => ['required'],
            'pin' => ['required','numeric'],
            'email' => ['required', 'email','unique:users,email'],
            'contactno' => ['required','numeric']
            
        ]);

        $user = Seller::create([
            'name' => $request->name,
            'company' => $request->company,
            'place' => $request->place,
            'address' => $request->address,
            'pin' => $request->pin,
            'email' => $request->email,
            'contactno' => $request->contactno,
            'username'=> $request->email,
            'password'=> bcrypt($request->contactno),
        ]);
        

        if($user){
            $msg_array = 'Seller Added Successfully';
        }else{
            $msg_array = 'Seller Could not be Added';
        }
        return redirect()->route('seller.register')->with('msg',$msg_array);
    } 



    public function approve($sid){
        $seller = Seller::find(decrypt($sid));

        if($seller){
            $update = $seller->update(['status'=>'Approved']);
            if($update){
                $msg_array = 'Seller Approved Successfully';
            }else{
                $msg_array = 'Seller Could not be Approved';
            }
        }else{
            $msg_array = 'Seller Could not be Approved';
        }

        return redirect()->route('seller.report')->with('msg',$msg_array);
    }
    public function reject($sid){
        $seller = Seller::find(decrypt($sid));

        if($seller){
            $update = $seller->update(['status'=>'Rejected']);
            if($update){
                $msg_array = 'Seller Rejected Successfully';
            }else{
                $msg_array = 'Seller Could not be Rejected';
            }
        }else{
            $msg_array = 'Seller Could not be Rejected';
        }

        return redirect()->route('seller.report')->with('msg',$msg_array);
    }
    
    public function logout()
    {
//        auth()->guard('seller')->logout();

        return redirect()->route('login');

    }
}
