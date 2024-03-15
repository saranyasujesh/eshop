<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Support\Collection;

use App\Models\Admin;
use App\Models\Seller;
use App\Models\Role;

class Admins extends Controller
{
    public function adminhome()
    {
        return view('admin.adminhome');
    }
    public function login(){
        
        return view('admin.login');
   
    }
    public function logaction(Request $request){

        $validate = $request->validate([
            'uname' => ['required'],
            'pword' => ['required']
        ]);

        $email = $request->uname;
        $password = $request->pword;

        $input = ['email'=>$email,'password'=>$password];

        if(auth()->guard('admin')->attempt($input)){
            return redirect()->route('admin.home');
        }else{
            return redirect()->route('login')->with('msg','Invalid Username or Password');
        }
    }

    public function add(){
        $roles = Role::all();
        return view('admin.add',compact('roles'));
    }

    public function save(Request $request){

        $validate = $request->validate([
            'name' => ['required'],
            'role' => ['required'],
            'email' => ['required', 'email','unique:users,email'],
            'contactno' => ['required','numeric'],
            'photo' => ['nullable']
        ]);

        $file_name = 'admin.png';
        if($request->hasFile('photo')){
            $im=$request->file('photo');
            $ext = $im->extension();
            $file_name = "admin_".time().".".$ext;
            $im->storeAs('public/admin/',$file_name);
        }

        $user = Admin::create([
            'name' => $request->name,
            'role_id' => $request->role,
            'email' => $request->email,
            'contactno' => $request->contactno,
            'password'=> bcrypt($request->contactno),
            'photo' => $file_name
        ]);
        if($user){
            $msg_array = 'Admin Added Successfully';
        }else{
            $msg_array = 'Admin Could not be Added';
        }
        return redirect()->route('admin.add')->with('msg',$msg_array);
    } 
    

    public function sellersreport()
    {
        $sellers = Seller::all();
        return view('admin.sellersreport',compact('sellers'));
    }

    public function logout()
    {
        auth()->guard('admin')->logout();

        return redirect()->route('login');
    }

    public function report(){
        $admins=Admin::paginate(5);
        return view('admin.report',compact('admins'));
    }

    public function view($aid)
    {
        $adm = Admin::find(decrypt($aid));
        return view('admin.view',compact('adm')); 
    }
    public function edit($aid)
    {
        $adm = Admin::find(decrypt($aid));
        $roles = Role::all();
        return view('admin.edit',compact('adm','roles'));
    }

    public function update(Request $request)
    {
        $validate = $request->validate([
            'name' => ['required'],
            'role' => ['required'],
            'email' => ['required', 'email','unique:users,email'],
            'contactno' => ['required','numeric'],
            'photo' => ['nullable']
        ]);

        $admin = Admin::find(decrypt($request->aid));

        if($request->hasFile('photo')){
            $im=$request->file('photo');
            $ext = $im->extension();
            $file_name = "admin_".time().".".$ext;
            $im->storeAs('public/admin/',$file_name);
        }else{
            $file_name=$admin->photo;
        }

        $update = $admin->update([
            'name' => $request->name,
            'role_id' => $request->role,
            'email' => $request->email,
            'contactno' => $request->contactno,
            'password' => bcrypt($request->contactno),
            'photo' => $file_name
        ]);
           
        if($update){
            $msg_array = 'Admin details Updated Successfully';
        }else{
            $msg_array = 'Admin details Could not be Updated';
        }
        return redirect()->route('admin.edit',encrypt($admin->id))->with('msg',$msg_array);
    }

    public function image_delete($aid){

        $ad = Admin::find(decrypt($aid));
       
        $update = $ad->update([
            'photo' => 'admin.png'
        ]);
        if($update){
            $msg_array = 'Image Deleted Successfully';
        }else{
            $msg_array = 'Image Could not be Deleted';
        }
        return redirect()->route('admin.edit',encrypt($ad->id))->with('msg',$msg_array);
    }


    public function delete($aid)
    {
        $admin = Admin::find(decrypt($aid));

        $update = $admin->delete();
        if($update){
            $msg_array = 'Admin Deleted Successfully';
        }else{
            $msg_array = 'Admin Could not be Deleted';
        }
        return redirect()->route('admins')->with('msg',$msg_array); 
    }
}