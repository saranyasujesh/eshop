@extends('layout.admintemplate')
@section('title','Banners')
@section('heading','Edit Banner')
@section('content')
    <div class="card">
        <div class="card-body">
            @if (session('msg'))
                <div class="text-danger text-center">
                    {{ session('msg') }}
                </div>
            @endif
            <form action="{{ route('banner.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="bid" value="{{ encrypt($ban->id) }}">

                <div class="mb-3 row">
                    <label for="heading" class="col-sm-2 col-form-label">Heading</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control @error('heading') border-danger @enderror" id="heading" name="heading" value="{{ old('heading') ?? $ban->heading }}">
                        @error('heading')<p class="text-danger">{{ $message }}</p>@enderror
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="category" class="col-sm-2 col-form-label">Category</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control @error('category') border-danger @enderror" id="category" name="category" value="{{ $ban->category }}" readonly>
                        @error('category')<p class="text-danger">{{ $message }}</p>@enderror
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="description" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        <textarea cols="10" rows="5" class="form-control @error('description') border-danger @enderror" id="description" name="description"> {{ old('description') ?? $ban->description }} </textarea>
                        @error('description')<p class="text-danger">{{ $message }}</p>@enderror
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="active" class="col-sm-2 col-form-label">Active ?</label>
                    <div class="col-sm-10">
                    @php $active = old('active') ?? $ban->active @endphp
                        <select class="form-control @error('active') border-danger @enderror" id="active" name="active">
                            <option value="">Select</option>
                            @if($ban->active=='Yes')
                                <option value="Yes"  {{ "selected"}} >Yes</option>
                                <option value="No">No</option>
                            @else 
                                <option value="No"  {{ "selected"}} >No</option>
                                <option value="Yes">Yes</option>
                            @endif
                        </select>
                        @error('active')<p class="text-danger">{{ $message }}</p>@enderror
                    </div>
                </div>

                        <div class="mb-3 row">
                            <label for="banner_image" class="col-sm-2 col-form-label">Banner Image</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control @error('banner_image') border-danger @enderror" id="banner_image" name="banner_image">
                                @error('banner_image')<p class="text-danger">{{ $message }}</p>@enderror
                                @if($ban->banner_image)
                                    <div class="row p-2">
                                         <div class="col-8">
                                            <img src="{{ url('storage/app/public/banner/'.$ban->banner_image) }}" width="100px" height="80px">
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-success" >Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection