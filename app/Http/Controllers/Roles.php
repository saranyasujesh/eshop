<?php

namespace App\Http\Controllers;

use App\Models\Access;
use App\Models\Admin;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Role;

class Roles extends Controller
{
    public function report(){
        $roles = Role::paginate(10);
        return view("role.report",compact("roles"));
    }

    public function add(){
        $menus = Menu::where('parent_id',0)->with('submenus')->get();
        
        return view("role.add",compact("menus"));
    }

    public function save(Request $request){
        $request->validate([
            'name' => 'required|unique:roles,role_name',
            'posted' => 'array|present',
        ]);

        $role = Role::create([
            'role_name' => $request->name,
        ]);

        if($role){
            foreach($request->posted as $mid){
                $access = DB::table('access')->insert([
                    'role_id' => $role->id,
                    'menu_id' => $mid
                ]);
            }

            $msg_array = 'Role Added Successfully';
        }else{
            $msg_array = 'Role Could not be Added';
        }
        return redirect()->route('role.add')->with('msg',$msg_array);
    }

    public function view($rid){
        $role = Role::find(decrypt($rid));
        $menus = Menu::where('parent_id',0)->with('submenus')->get();
        $access = Access::where('role_id',decrypt($rid))->get();
        
        return view('role.view',compact('role','menus','access'));
    }

    public function edit($rid){
        $role = Role::find(decrypt($rid));
        $menus = Menu::where('parent_id',0)->with('submenus')->get();
        $access = Access::where('role_id',decrypt($rid))->get();
        
        return view('role.edit',compact('role','menus','access'));
    }

    public function update(Request $request){
        $request->validate([
            'name' => 'required|unique:roles,role_name,'.decrypt($request->role_id),
            'posted' => 'array|present',
        ]);

        $role = Role::find(decrypt($request->role_id));

        if($role->update(['role_name'=>$request->name])){
            Access::where('role_id',decrypt($request->role_id))->delete();
            foreach($request->posted as $mid){
                $access = Access::create([
                    'role_id' => $role->id,
                    'menu_id' => $mid
                ]);
            }

            $msg_array = 'Role Updated Successfully';
        }else{
            $msg_array = 'Role Could not be Updated';
        }
        return redirect()->route('roles')->with('msg',$msg_array);
    }

    public function delete($rid){
        $admins = Admin::where('role_id',decrypt($rid))->get();
        if($admins->count()==0){
            if(Role::find(decrypt($rid))->delete()){
                Access::where('role_id',decrypt($rid))->delete();
                $msg_array = 'Role Deleted Successfully';
            }else{
                $msg_array = 'Role Could not be Deleted';
            }
        }else{
            $msg_array = 'Role Could not be Deleted';
        }

        return redirect()->route('roles')->with('msg',$msg_array);
    }
}
