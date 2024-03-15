@extends('layout.admintemplate')
@section('title','Admins')
@section('heading','Edit Product')
@section('content')
<link rel="stylesheet" href="{{ asset('public/template/plugins/summernote/summernote-bs4.min.css') }}">
<div class="card"> 
    <form action="{{ route('product.update') }}" method="post" enctype="multipart/form-data">
    @csrf
                <input type="hidden" name="pid" value="{{ encrypt($prd->id) }}">
        <div class="card-body">
            @if (session('msg'))
                <div class="text-danger text-center">
                    {{ session('msg') }}
                </div>
            @endif
            <div class="row">
                <div class="col-12 col-sm-4">
                    <div class="form-group">
                        <label for="name" class="required">Name</label>
                        <input type="text" class="form-control @error('name') border-danger @enderror" id="name" name="name" value="{{ old('name') ?? $prd->name }}">
                        @error('name')<p class="text-danger">{{ $message }}</p>@enderror
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="form-group">
                        <label for="company" class="required">Company Name</label>
                        @php $company = old('company') ?? $prd->company @endphp
                        <select class="form-control @error('company') border-danger @enderror" id="company" name="company">
                            <option value="">Select</option>
                            @foreach($slr as $seller)
                                <option value="{{ $seller->company }}"  {{ $company==$seller->company ? "selected":"" }} >{{ $seller->company }}</option>
                                @endforeach
                        </select>
                        @error('company')<p class="text-danger">{{ $message }}</p>@enderror
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="form-group">
                        <label for="category" class="required">Category</label>
                        @php $category = old('category') ?? $prd->category @endphp
                        <select class="form-control @error('category') border-danger @enderror" id="category" name="category">
                            <option value="">Select</option>
                            @foreach($cat as $cate)
                                <option value="{{ $cate->category_name }}"  {{ $category==$cate->category_name ? "selected":"" }} >{{ $cate->category_name }}</option>
                            @endforeach
                        </select>
                        @error('category')<p class="text-danger">{{ $message }}</p>@enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-4">
                    <div class="form-group">
                        <label for="brand" class="required">Brand</label>
                        @php $brand = old('brand') ?? $prd->brand @endphp

                        <select class="form-control @error('brand') border-danger @enderror" id="brand" name="brand">
                            <option value="">Select</option>
                            @foreach($brn as $bd)
                                <option value="{{ $bd->brand_name }}"  {{ $brand==$bd->brand_name ? "selected":"" }} >{{ $bd->brand_name }}</option>
                            @endforeach
                        </select>
                        @error('brand')<p class="text-danger">{{ $message }}</p>@enderror
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="form-group">
                        <label for="color_name">Color</label>
                        <div class="row">
                            <div class="col-9">
                                <div class="form-group">
                                    <input type="text" class="form-control @error('color_name') border-danger @enderror" id="color_name" name="color_name" value="{{ old('color_name') ?? $prd->color_name }}">
                                    @error('color_name')<p class="text-danger">{{ $message }}</p>@enderror
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <input type="color" class="form-control @error('color') border-danger @enderror" id="color" name="color" value="{{ old('color') ?? $prd->color }}">
                                    @error('color')<p class="text-danger">{{ $message }}</p>@enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="form-group">
                        <label for="quantity" class="required">Quantity</label>
                        <input type="text" class="form-control @error('quantity') border-danger @enderror" id="quantity" name="quantity" value="{{ old('quantity') ?? $prd->quantity }}">
                        @error('quantity')<p class="text-danger">{{ $message }}</p>@enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-2">
                    <div class="form-group">
                        <label for="aprice" class="required">MRP</label>
                        <input type="text" class="form-control @error('aprice') border-danger @enderror" id="aprice" name="aprice" value="{{ old('aprice') ?? $prd->actual_price  }}">
                        @error('aprice')<p class="text-danger">{{ $message }}</p>@enderror
                    </div>
                </div>
                <div class="col-12 col-sm-2">
                    <div class="form-group">
                        <label for="rprice" class="required">Price</label>
                        <input type="text" class="form-control @error('rprice') border-danger @enderror" id="rprice" name="rprice" value="{{ old('rprice') ?? $prd->reduced_price }}">
                        @error('rprice')<p class="text-danger">{{ $message }}</p>@enderror
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="form-group">
                        <label for="main_image">Image</label>
                        <input type="file" class="form-control @error('main_image') border-danger @enderror" id="main_image" name="main_image">
                        @error('main_image')<p class="text-danger">{{ $message }}</p>@enderror
                        @if($prd->main_image)
                            <div class="row p-2">
                                <div class="col-8">
                                    <img src="{{ url('storage/app/public/products/main_images/'.$prd->main_image) }}" width="100px" height="80px">
                                </div>
                                <div class="col-4">
                                    <a href="{{ route('imgdelete',[encrypt($prd->id)]) }}" class="btn btn-sm btn-danger">Delete</a>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="form-group">
                        <label for="images">Gallery</label>
                        <input type="file" class="form-control @error('images') border-danger @enderror" id="images" name="images[]" multiple>
                        @error('images')<p class="text-danger">{{ $message }}</p>@enderror
                        @if($prd->images)
                            @php $imgs = array_filter(explode('@@',$prd->images)) @endphp
                            @foreach($imgs as $img)
                                <div class="row p-2">
                                    <div class="col-8">
                                        <img src="{{ url('storage/app/public/products/'.$img) }}" width="100px" height="80px">
                                    </div>
                                    <div class="col-4">
                                         <a href="{{ route('itemdelete',[encrypt($prd->id),$img]) }}" class="btn btn-sm btn-danger">Delete</a>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="col-12">
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" class="form-control @error('description') border-danger @enderror" rows="1">{{ old('description') ?? $prd->description  }}</textarea>
                        @error('description')<p class="text-danger">{{ $message }}</p>@enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary" >Save</button>
        </div>
    </form>
</div>
<script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#description' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@endsection