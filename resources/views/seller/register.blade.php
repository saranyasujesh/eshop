@extends('layout.hometemplate')
@section('title','Users')
@section('heading','Add New Seller')
@section('content')
    <div class="row">
        <div class="col-12 p-5">
            <div class="card">
            <h2>Add New Seller</h2>
                <div class="card-body">

                    @if (session('msg'))
                        <div class="text-danger text-center">
                            {{ session('msg') }}
                        </div>
                    @endif

                    <form action="{{ route('seller.save') }}" method="post">

                        @csrf

                        <div class="mb-3 row">
                            <label for="name" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('name') border-danger @enderror" id="name" name="name" value="{{ old('name') }}">
                                    @error('name')<p class="text-danger">{{ $message }}</p>@enderror
                                </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="company" class="col-sm-2 col-form-label">Company Name</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control @error('company') border-danger @enderror" id="company" name="company" value="{{ old('company') }}">
                                @error('company')<p class="text-danger">{{ $message }}</p>@enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="place" class="col-sm-2 col-form-label">Place</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control @error('place') border-danger @enderror" id="place" name="place" value="{{ old('place') }}">
                                @error('place')<p class="text-danger">{{ $message }}</p>@enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="address" class="col-sm-2 col-form-label">Address</label>
                                <div class="col-sm-10">
                                <textarea name="address" id="address" class="form-control @error('address') border-danger @enderror" cols="15" rows="5">{{ old('address') }}</textarea>
                                @error('address')<p class="text-danger">{{ $message }}</p>@enderror
                                </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="pin" class="col-sm-2 col-form-label">Pin Code</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('pin') border-danger @enderror" id="pin" name="pin" value="{{ old('pin') }}">
                                    @error('pin')<p class="text-danger">{{ $message }}</p>@enderror
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

                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary" >Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection