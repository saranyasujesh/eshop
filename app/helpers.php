<?php
use Illuminate\Support\Facades\DB;
function adminmenus() {
    $role = auth()->guard('admin')->user()->role_id;
    $menus = DB::table("access")->join('menus','access.menu_id','=','menus.id')->where('role_id',$role)->where('parent_id',0)->where('menu_type','navigation')->whereNull('access.deleted_at')->where('menus.status',1)->orderBy('menu_order')->get();
    $output='<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">';
    foreach ($menus as $menu) {
        $route = $menu->menu_route ? route($menu->menu_route):'#';
        $output.= '<li class="nav-item">
        <a href="'.$route.'" class="nav-link">
          <i class="nav-icon '.$menu->menu_icon.'"></i>
          <p>'.$menu->title.'</p>
        </a>
        </li>';
    }

    return $output;
}

function actionmenus($id,$menus=array()){
  $role = auth()->guard('admin')->user()->role_id;
  $output='';
  if($menus){
    $actions = DB::table("access")->join('menus','access.menu_id','=','menus.id')->where('role_id',$role)->where('menu_type','actions')->whereIn('menus.id', $menus)->whereNull('access.deleted_at')->where('menus.status',1)->get();
    foreach ($actions as $action) {
      $warning = '';
      if($action->menu_warning=='Y'){
        $warning = 'onclick="return confirm(\'Are you sure want to continue ?\')"';
      }

      $output.='<a href="'.route($action->menu_route,$id).'" title="'.$action->title.'" '.$warning.'><i class="'.$action->menu_icon.' '.$action->menu_class.' text-lg"></i></a>&nbsp;&nbsp;';
    }
  }

  return $output;
}

function buttonmenus($menus=array()){
  $role = auth()->guard('admin')->user()->role_id;
  $output='';
  if($menus){
    $actions = DB::table("access")->join('menus','access.menu_id','=','menus.id')->where('role_id',$role)->where('menu_type','button')->whereIn('menus.id', $menus)->whereNull('access.deleted_at')->where('menus.status',1)->get();
    foreach ($actions as $action) {
      $output.='<a href="'.route($action->menu_route).'" title="'.$action->title.'" class="'.$action->menu_class.'">'.$action->title.'</a>&nbsp;&nbsp;';
    }
  }

  return $output;
}

function statuschange($id,$menus=array()){
  $role = auth()->guard('admin')->user()->role_id;
  $output='';
  if($menus){
    $actions = DB::table("access")->join('menus','access.menu_id','=','menus.id')->where('role_id',$role)->where('menu_type','actions')->whereIn('menus.id', $menus)->whereNull('access.deleted_at')->where('menus.status',1)->get();
    foreach ($actions as $action) {
      $output.='<a href="'.route($action->menu_route,$id).'" title="'.$action->title.'"><i class="'.$action->menu_icon.' '.$action->menu_class.' text-lg"></i></a>&nbsp;&nbsp;';
    }
  }

  return $output;
}

?>