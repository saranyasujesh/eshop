@extends('layout.admintemplate')
@section('title','Products')
@section('heading','View Product')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <div class="row form-group">
                        <div class="col-5">Image : </div>
                        <div class="col-7 text-danger"><img src="{{ url('storage/app/public/products/main_images/'.$product->main_image) }}" width="150px" height="100px"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col-5">Product Name : </div>
                        <div class="col-7 text-danger">{{ $product->name }}</div>
                    </div>
                    <div class="row form-group">
                        <div class="col-5">Company Name : </div>
                        <div class="col-7 text-danger">{{ $product->company }}</div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="row form-group">
                        <div class="col-5">Category : </div>
                        <div class="col-7 text-danger">{{ $product->category }}</div>
                    </div>
                    <div class="row form-group">
                        <div class="col-5">Brand : </div>
                        <div class="col-7 text-danger">{{ $product->brand }}</div>
                    </div>
                    <div class="row form-group">
                        <div class="col-5">Color : </div>
                        <div class="col-7 text-danger">
                            <input type="color" value="{{ $product->color }}" disabled> {{ $product->color_name}}
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-5">MRP : </div>
                        <div class="col-7 text-danger">{{ number_format($product->actual_price,2) }}</div>
                    </div>
                    <div class="row form-group">
                        <div class="col-5">Price : </div>
                        <div class="col-7 text-danger">{{ number_format($product->reduced_price,2) }}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <a href="{{ route('products') }}" class="btn btn-primary">Back</a>
        </div>
    </div>
@endsection