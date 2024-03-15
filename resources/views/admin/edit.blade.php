@extends('layout.admintemplate')
@section('title','Admins')
@section('heading','Edit Administrator')
@section('content')
    <div class="card">
        <div class="card-body">
            @if (session('msg'))
                <div class="text-danger text-center">
                    {{ session('msg') }}
                </div>
            @endif
            <form action="{{ route('admin.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="aid" value="{{ encrypt($adm->id) }}">
                <div class="mb-3 row">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control @error('name') border-danger @enderror" id="name" name="name" value="{{ old('name') ?? $adm->name }}">
                        @error('name')<p class="text-danger">{{ $message }}</p>@enderror
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="role" class="col-sm-2 col-form-label">Role</label>
                    <div class="col-sm-10">
                        @php $roleId = old('role') ?? $adm->role_id @endphp
                        <select name="role" id="role" class="form-control @error('role') border-danger @enderror">
                            <option value="">Select</option>
                            @foreach($roles as $role)
                                <option value="{{ $role->id }}" {{ $roleId==$role->id ? "selected":"" }}>{{ $role->role_name }}</option>
                            @endforeach
                        </select>
                        @error('role')<p class="text-danger">{{ $message }}</p>@enderror
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control @error('email') border-danger @enderror" id="email" name="email" value="{{ old('email') ?? $adm->email }}">
                        @error('email')<p class="text-danger">{{ $message }}</p>@enderror
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="contactno" class="col-sm-2 col-form-label">Contact Number</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control @error('contactno') border-danger @enderror" id="contactno" name="contactno" value="{{ old('contactno') ?? $adm->contactno }}">
                        @error('contactno')<p class="text-danger">{{ $message }}</p>@enderror
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="photo" class="col-sm-2 col-form-label">Upload Photo</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control @error('photo') border-danger @enderror" id="photo" name="photo">
                        @error('photo')<p class="text-danger">{{ $message }}</p>@enderror
                        @if($adm->photo)
                            <div class="row p-2">
                                <div class="col-8">
                                    <img src="{{ url('storage/app/public/admin/'.$adm->photo) }}" width="100px" height="80px">
                                </div>
                                <div class="col-4">
                                    <a href="{{ route('image.delete',[encrypt($adm->id)]) }}" class="btn btn-sm btn-danger">Delete</a>
                                </div>
                            </div>
                        @endif
                    </div>
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
@endsection