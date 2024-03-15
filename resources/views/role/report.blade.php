@extends('layout.admintemplate')
@section('title','Roles')
@section('heading','Roles')
@section('content')
    <div class="card">
        <div class="card-header">
            {!! buttonmenus(array(16)) !!}
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Sl No</th>
                    <th>Role Name</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($roles as $key => $role)
                        <tr>
                            <td>{{ $key+$roles->firstItem() }}</td>
                            <td>{{ $role->role_name }}</td>
                            <td>{!! actionmenus(encrypt($role->id),array(13,14,15)) !!}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="row">
                <div class="col-12">
                    {{ $roles->links('vendor.pagination.bootstrap-5') }}
                </div>
            </div>
        </div>
    </div>
@endsection