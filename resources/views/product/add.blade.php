@extends('layout.admintemplate')
@section('title','Admins')
@section('heading','Add Product')
@section('content')
<link rel="stylesheet" href="{{ asset('public/template/plugins/summernote/summernote-bs4.min.css') }}">
<div class="card"> 
    <form action="{{ route('product.save') }}" method="post" enctype="multipart/form-data">
        @csrf  
        <div class="card-body">
            @if (session('msg'))
                <div class="text-danger text-center">
                    {{ session('msg') }}
                </div>
            @endif

            <div class="row">
                <div class="col-12 col-sm-2">
                    <div class="form-group">
                        <label for="code" class="required">Code</label>
                        <input type="text" class="form-control @error('code') border-danger @enderror" id="code" name="code" value="{{ old('code') }}">
                        @error('code')<p class="text-danger">{{ $message }}</p>@enderror
                    </div>
                </div>
                <div class="col-12 col-sm-2">
                    <div class="form-group">
                        <label for="name" class="required">Name</label>
                        <input type="text" class="form-control @error('name') border-danger @enderror" id="name" name="name" value="{{ old('name') }}">
                        @error('name')<p class="text-danger">{{ $message }}</p>@enderror
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="form-group">
                        <label for="company" class="required">Company Name</label>
                        <select class="form-control @error('company') border-danger @enderror" id="company" name="company">
                            <option value="">Select</option>
                            @foreach($slr as $seller)
                                <option value="{{ $seller->id }}"  {{ old('company')==$seller->company ? "selected":"" }} >{{ $seller->company }}</option>
                            @endforeach
                        </select>
                        @error('company')<p class="text-danger">{{ $message }}</p>@enderror
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="form-group">
                        <label for="category" class="required">Category</label>
                        <select class="form-control @error('category') border-danger @enderror" id="category" name="category">
                            <option value="">Select</option>
                            @foreach($cat as $category)
                                <option value="{{ $category->id }}"  {{ old('category')==$category->category_name ? "selected":"" }} >{{ $category->category_name }}</option>
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
                        <select class="form-control @error('brand') border-danger @enderror" id="brand" name="brand">
                            <option value="">Select</option>
                            @foreach($brn as $brand)
                                <option value="{{ $brand->id }}"  {{ old('brand')==$brand->brand_name ? "selected":"" }} >{{ $brand->brand_name }}</option>
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
                                    <input type="text" class="form-control @error('color_name') border-danger @enderror" id="color_name" name="color_name" value="{{ old('color_name') }}">
                                    @error('color_name')<p class="text-danger">{{ $message }}</p>@enderror
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <input type="color" class="form-control @error('color') border-danger @enderror" id="color" name="color" value="{{ old('color') }}">
                                    @error('color')<p class="text-danger">{{ $message }}</p>@enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="form-group">
                        <label for="quantity" class="required">Quantity</label>
                        <input type="text" class="form-control @error('quantity') border-danger @enderror" id="quantity" name="quantity" value="{{ old('quantity') }}">
                        @error('quantity')<p class="text-danger">{{ $message }}</p>@enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-2">
                    <div class="form-group">
                        <label for="aprice" class="required">MRP</label>
                        <input type="text" class="form-control @error('aprice') border-danger @enderror" id="aprice" name="aprice" value="{{ old('aprice') }}">
                        @error('aprice')<p class="text-danger">{{ $message }}</p>@enderror
                    </div>
                </div>
                <div class="col-12 col-sm-2">
                    <div class="form-group">
                        <label for="rprice" class="required">Price</label>
                        <input type="text" class="form-control @error('rprice') border-danger @enderror" id="rprice" name="rprice" value="{{ old('rprice') }}">
                        @error('rprice')<p class="text-danger">{{ $message }}</p>@enderror
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="form-group">
                        <label for="main_image">Image</label>
                        <input type="file" class="form-control @error('main_image') border-danger @enderror" id="main_image" name="main_image">
                        @error('main_image')<p class="text-danger">{{ $message }}</p>@enderror
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="form-group">
                        <label for="images">Gallery</label>
                        <input type="file" class="form-control @error('images') border-danger @enderror" id="images" name="images[]" multiple>
                        @error('images')<p class="text-danger">{{ $message }}</p>@enderror
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="col-12">
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" class="form-control @error('description') border-danger @enderror" rows="1">{{ old('description') }}</textarea>
                        @error('description')<p class="text-danger">{{ $message }}</p>@enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-4">
                    <div class="form-group">
                        <label for="trending_item"> Trending Item</label>
                        <input type="checkbox" class="form-control @error('trending_item') border-danger @enderror" id="trending_item" name="trending_item" value="Yes" >
                        @error('trending_item')<p class="text-danger">{{ $message }}</p>@enderror
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="form-group">
                        <label for="hot_item"> Hot Item</label>
                        <input type="checkbox" class="form-control @error('hot_item') border-danger @enderror" id="hot_item" name="hot_item" value="Yes">
                        @error('hot_item')<p class="text-danger">{{ $message }}</p>@enderror
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="form-group">
                        <label for="best_seller"> Best Seller</label>
                        <input type="checkbox" class="form-control @error('best_seller') border-danger @enderror" id="best_seller" name="best_seller" value="Yes">
                        @error('best_seller')<p class="text-danger">{{ $message }}</p>@enderror
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="form-group">
                        <label for="deal_of_the_day"> Deal of the Day</label>
                        <input type="checkbox" class="form-control @error('deal_of_the_day') border-danger @enderror" id="deal_of_the_day" name="deal_of_the_day" value="Yes">
                        @error('deal_of_the_day')<p class="text-danger">{{ $message }}</p>@enderror
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