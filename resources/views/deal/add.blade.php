@extends('layout.admintemplate')
@section('title','Deal Of The Day')
@section('heading','Add New Deal')
@section('content')
    <div class="card">
           
                <div class="card-body">

                    @if (session('msg'))
                        <div class="text-danger text-center">
                            {{ session('msg') }}
                        </div>
                    @endif

                    <form action="{{ route('deal.save') }}" method="post" enctype="multipart/form-data">

                        @csrf

                        <div class="mb-3 row">
                            <label for="deal_heading" class="col-sm-2 col-form-label">Deal Heading</label>
                            <div class="col-sm-10">    
                                <input type="text" class="form-control @error('deal_heading') border-danger @enderror" id="deal_heading" name="deal_heading" value="{{ old('deal_heading') }}">
                                @error('deal_heading')<p class="text-danger">{{ $message }}</p>@enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="product_id" class="col-sm-2 col-form-label">Product Code</label>
                            <div class="col-sm-10">
                                    <select class="form-control @error('product_id') border-danger @enderror" id="product_id" name="product_id">
                                        <option value="">Select</option>
                                        @foreach($products as $product)
                                            <option value="{{ $product->id }}">{{ $product->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('product_id')<p class="text-danger">{{ $message }}</p>@enderror
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
                            <label for="actual_price" class="col-sm-2 col-form-label">Actual Price</label>
                            <div class="col-sm-10">    
                                <input type="text" class="form-control @error('actual_price') border-danger @enderror" id="actual_price" name="actual_price" value="{{ old('actual_price') }}">
                                @error('actual_price')<p class="text-danger">{{ $message }}</p>@enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="reduced_price" class="col-sm-2 col-form-label">Reduced Price</label>
                            <div class="col-sm-10">    
                                <input type="text" class="form-control @error('reduced_price') border-danger @enderror" id="reduced_price" name="reduced_price" value="{{ old('reduced_price') }}">
                                @error('reduced_price')<p class="text-danger">{{ $message }}</p>@enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="image" class="col-sm-2 col-form-label">Upload Image</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control @error('image') border-danger @enderror" id="image" name="image">
                                @error('image')<p class="text-danger">{{ $message }}</p>@enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="time_period" class="col-sm-2 col-form-label">Time Period</label>
                            <div class="col-sm-10">    
                                <input type="datetime-local" class="form-control @error('time_period') border-danger @enderror" id="time_period" name="time_period" value="{{ old('time_period') }}">
                                @error('time_period')<p class="text-danger">{{ $message }}</p>@enderror
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

                        

                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-success" >Save</button>
                            </div>
                        </div>
                    </form>
            </div>
    </div>
@endsection