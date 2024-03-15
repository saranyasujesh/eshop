@extends('layout.admintemplate')
@section('title','Admins')
@section('heading','Administrator')
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
            @csrf
                <div class="card p-3 text-primary-emphasis bg-primary-subtle border border-success-subtle rounded-3" style="max-width: 18rem;">
                    <div class="card-header text-primary bg-primary-subtle"><b>
                        Details</b>
                    </div>
                    <div class="card-body"> 
                        <img src="{{ url('storage/app/public/admin/'.$adm->photo) }}" width="200px" height="150px">
                        <table border="0" align="center" class="--bs-primary-bg-subtle">
                            <tr>
                                <th>ID : </label></th>
                                <th>{{ $adm->id }}</label></th>
                            </tr>
                            <tr>
                                <th>Name : </label></th>
                                <th>{{ $adm->name }}</label></th>
                            </tr>
                            <tr>
                                <th>Role : </label></th>
                                <th>{{ $adm->role->role_name }}</label></th>
                            </tr>
                            <tr>
                                <th>Email : </label></th>
                                <th>{{ $adm->email }}</label></th>
                            </tr>
                            <tr>
                                <th>Contact No : </label></th>
                                <th>{{ $adm->contactno }}</label></th>
                            </tr>
                        </table>
                    </div>
                </div>
                <a href="{{ route('admins') }}" class="btn btn-primary">Back</a>     
            </form>
        </div>
    </div>
@endsection