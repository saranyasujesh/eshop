@extends('layout.hometemplate')
@section('title','Home')
@section('heading','Login')
@section('content')

<div class="row">
    <div class="col-12 col-sm-6 p-5">
        <div class="card">
        <h2>Seller Login</h2>

            <div class="card-body">
            @if (session('msg'))
                <div class="text-danger text-center">
                    {{ session('msg') }}
                </div>
            @endif
            <form action="{{ route('seller.logaction') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control @error('uname') border-danger @enderror" name="uname" value="{{ old('uname') }}">
                                @error('uname')<p class="text-danger">{{ $message }}</p>@enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control @error('pword') border-danger @enderror" name="pword" value="{{ old('pword') }}">
                                @error('pword')<p class="text-danger">{{ $message }}</p>@enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary float-right">
                                <a href="{{ route('seller.register') }}" class="btn btn-success">Register Now</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection