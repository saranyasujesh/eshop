@extends('layout.admintemplate')
@section('title','Admins')
@section('heading','Edit Brand')
@section('content')
    <div class="card">
        <div class="card-body">
            @if (session('msg'))
                <div class="text-danger text-center">
                    {{ session('msg') }}
                </div>
            @endif
            <form action="{{ route('brand.update') }}" method="post">
                @csrf
                <input type="hidden" name="bid" value="{{ encrypt($brn->id) }}">
                <div class="mb-3 row">
                    <label for="brand_name" class="col-sm-2 col-form-label">Brand Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control @error('brand_name') border-danger @enderror" id="brand_name" name="brand_name" value="{{ old('brand_name') ?? $brn->brand_name }}">
                        @error('brand_name')<p class="text-danger">{{ $message }}</p>@enderror
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-success" >Update</button>
                        <a href="{{ route('brands') }}" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection