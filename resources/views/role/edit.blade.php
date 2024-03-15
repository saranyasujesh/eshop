@extends('layout.admintemplate')
@section('title','Roles')
@section('heading','Edit Role')
@section('content')
    <div class="card">
        <div class="card-body">
            @if(session('msg'))
                <div class="text-danger text-center">
                    {{ session('msg') }}
                </div>
            @endif
            <form method="post" action="{{ route('role.update') }}">
                @csrf
                <input type="hidden" name="role_id" value="{{ encrypt($role->id) }}">
                <div class="row">
                    <div class="col-4">
                        <label for="name">Role Name</label>
                        <input type="text" class="form-control @error('name') border-danger @enderror" name="name" id="name" value="{{ old('name') ?? $role->role_name }}">
                        @error('name')<p class="text-danger">{{ $message }}</p>@enderror
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-4">
                        <div class="icheck-primary d-inline">
                            <input type="checkbox" id="checkAll">
                            <label for="checkAll"> Check All</label>
                            @error('posted')<p class="text-danger">{{ $message }}</p>@enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    @if($menus)
                        @foreach($menus as $menu)
                            <div class="col-12 col-sm-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="icheck-primary d-inline">
                                            <input type="checkbox" class="checkSub mainItem" id="menu-{{ $menu->id }}" name="posted[]" value="{{ $menu->id }}" {{ $access->contains('menu_id',$menu->id) ? 'checked':'' }}>
                                            <label for="menu-{{ $menu->id }}"> {{ $menu->title }}</label>
                                        </div>
                                        @if($menu->submenus->count()>0)
                                            @foreach($menu->submenus as $submenu)
                                                <div class="row">
                                                    <div class="icheck-primary d-inline ml-3">
                                                        <input type="checkbox" class="checkSub subItem-{{ $menu->id }}" id="menu-{{ $submenu->id }}" name="posted[]" value="{{ $submenu->id }}" {{ $access->contains('menu_id',$submenu->id) ? 'checked':'' }}>
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
                        <button type="submit" class="btn btn-success" >Update</button>
                        <a href="{{ route('admins') }}" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        $("#checkAll").on('click', function(){
            if($(this).is(":checked")){
                $(".checkSub").prop('checked',true);
            }else{
                $(".checkSub").prop('checked',false);
            }
        });

        $(".mainItem").on('click', function(){
            var mid = $(this).val();
            if($(this).is(":checked")){
                $(".subItem-"+mid).prop('checked',true);
            }else{
                $(".subItem-"+mid).prop('checked',false);
            }
        });
    </script>
@endsection