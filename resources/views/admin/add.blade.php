@extends('layout.admintemplate')
@section('title','Admins')
@section('heading','Add New Administrator')
@section('content')
    <div class="card">
           
                <div class="card-body">

                    @if (session('msg'))
                        <div class="text-danger text-center">
                            {{ session('msg') }}
                        </div>
                    @endif

                    <form action="{{ route('admin.save') }}" method="post" enctype="multipart/form-data">

                        @csrf

                        <div class="mb-3 row">
                            <label for="name" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                
                                <input type="text" class="form-control @error('name') border-danger @enderror" id="name" name="name" value="{{ old('name') }}">
                                @error('name')<p class="text-danger">{{ $message }}</p>@enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="role" class="col-sm-2 col-form-label">Role</label>
                            <div class="col-sm-10">
                                <select name="role" id="role" class="form-control @error('role') border-danger @enderror">
                                    <option value="">Select</option>
                                    @foreach($roles as $role)
                                        <option value="{{ $role->id }}" {{ old('role')==$role->id ? "selected":"" }}>{{ $role->role_name }}</option>
                                    @endforeach
                                </select>
                                @error('role')<p class="text-danger">{{ $message }}</p>@enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('email') border-danger @enderror" id="email" name="email" value="{{ old('email') }}">
                                    @error('email')<p class="text-danger">{{ $message }}</p>@enderror
                                </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="contactno" class="col-sm-2 col-form-label">Contact Number</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('contactno') border-danger @enderror" id="contactno" name="contactno" value="{{ old('contactno') }}">
                                    @error('contactno')<p class="text-danger">{{ $message }}</p>@enderror
                                </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="photo" class="col-sm-2 col-form-label">Upload Photo</label>
                                <div class="col-sm-10">
                                <input type="file" class="form-control @error('photo') border-danger @enderror" id="photo" name="photo">
                                @error('photo')<p class="text-danger">{{ $message }}</p>@enderror
                                </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-success" >Save</button>
                                <a href="{{ route('admins') }}" class="btn btn-primary">Back</a>
                            </div>
                        </div>
                    </form>
            </div>
    </div>
@endsection