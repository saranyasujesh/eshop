@extends('layout.admintemplate')
@section('title','Banners')
@section('heading','Add New Banner')
@section('content')
    <div class="card">
           
                <div class="card-body">

                    @if (session('msg'))
                        <div class="text-danger text-center">
                            {{ session('msg') }}
                        </div>
                    @endif

                    <form action="{{ route('banner.save') }}" method="post" enctype="multipart/form-data">

                        @csrf

                        <div class="mb-3 row">
                            <label for="banner_heading" class="col-sm-2 col-form-label">Banner Heading</label>
                            <div class="col-sm-10">    
                                <input type="text" class="form-control @error('banner_heading') border-danger @enderror" id="heading" name="heading" value="{{ old('heading') }}">
                                @error('banner_heading')<p class="text-danger">{{ $message }}</p>@enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="category" class="col-sm-2 col-form-label">Category</label>
                            <div class="col-sm-10">
                                    <select class="form-control @error('category') border-danger @enderror" id="category" name="category">
                                        <option value="">Select</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->category_name }}"  {{ old('category')==$category->category_name ? "selected":"" }} >{{ $category->category_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('category')<p class="text-danger">{{ $message }}</p>@enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="description" class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                                <textarea cols="10" rows="5" class="form-control @error('description') border-danger @enderror" id="description" name="description"> {{ old('description') }} </textarea>
                                @error('description')<p class="text-danger">{{ $message }}</p>@enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="active" class="col-sm-2 col-form-label">Active ? </label>
                            <div class="col-sm-10">
                                <select class="form-control @error('active') border-danger @enderror" id="active" name="active">
                                        <option value="">Select</option>
                                        <option value="No">No</option>
                                        <option value="Yes">Yes</option>
                                </select>
                                @error('active')<p class="text-danger">{{ $message }}</p>@enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="banner_image" class="col-sm-2 col-form-label">Banner Image</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control @error('banner_image') border-danger @enderror" id="banner_image" name="banner_image">
                                @error('banner_image')<p class="text-danger">{{ $message }}</p>@enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-success" >Save</button>
                            </div>
                        </div>
                    </form>
            </div>
    </div>
@endsection