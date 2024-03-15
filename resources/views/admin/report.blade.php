@extends('layout.admintemplate')
@section('title','Admins')
@section('heading','Admins')
@section('content')
    <div class="card">
        <div class="card-header">
            {!! buttonmenus(array(9)) !!}
        </div>
        <div class="card-body">
            @if (session('msg'))
                <div class="text-danger text-center">
                    {{ session('msg') }}
                </div>
            @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Sl No</th>
                        <th>Name</th>
                        <th>Role</th>
                        <th>Image</th>
                        <th>Contact No</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                   <tbody>
                       @foreach($admins as $key => $admin)
                        <tr>
                            <td>{{ $key+$admins->firstItem() }}</td>
                            <td>{{ $admin->name }}</td>
                            <td>{{ $admin->role->role_name }}</td>
                            <td>
                                @if($admin->photo)    
                                    <img src="{{ url('storage/app/public/admin/'.$admin->photo) }}" width="150px" height="100px">
                                @endif
                            </td>
                            <td>{{ $admin->contactno }}</td>
                            <td>{{ $admin->email }}</td>
                            <td>{!! actionmenus(encrypt($admin->id),array(6,7,8)) !!}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            <div class="row">
                    {{ $admins->links('vendor.pagination.bootstrap-5') }}
            </div>
        </div>
    </div>
@endsection