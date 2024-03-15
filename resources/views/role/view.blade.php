@extends('layout.admintemplate')
@section('title','Roles')
@section('heading','View Role')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-4">
                    <label for="name">Role Name</label>
                    <input type="text" class="form-control" id="name" readonly>
                </div>
            </div>
            <div class="row">
                @if($menus)
                    @foreach($menus as $menu)
                        <div class="col-12 col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="icheck-primary d-inline">
                                        <input type="checkbox" id="menu-{{ $menu->id }}" {{ $access->contains('menu_id',$menu->id) ? 'checked':'' }} disabled>
                                        <label for="menu-{{ $menu->id }}"> {{ $menu->title }}</label>
                                    </div>
                                    @if($menu->submenus->count()>0)
                                        @foreach($menu->submenus as $submenu)
                                            <div class="row">
                                                <div class="icheck-primary d-inline ml-3">
                                                    <input type="checkbox" id="menu-{{ $submenu->id }}" {{ $access->contains('menu_id',$submenu->id) ? 'checked':'' }} disabled>
                                                    <label for="menu-{{ $submenu->id }}"> {{ $submenu->title }}</label>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="row">
                <div class="col-12">
                    <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection