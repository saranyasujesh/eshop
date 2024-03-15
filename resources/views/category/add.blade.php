@extends('layout.admintemplate')
@section('title','Admins')
@section('heading','Add New Category')
@section('content')
    <div class="card">
           
                <div class="card-body">

                    @if (session('msg'))
                        <div class="text-danger text-center">
                            {{ session('msg') }}
                        </div>
                    @endif

                    <form action="{{ route('category.save') }}" method="post">

                        @csrf

                        <div class="mb-3 row">
                            <label for="category_name" class="col-sm-2 col-form-label">Category Name</label>
                                <div class="col-sm-10">
                                
                                <input type="text" class="form-control @error('category_name') border-danger @enderror" id="category_name" name="category_name" value="{{ old('category_name') }}">
                                @error('category_name')<p class="text-danger">{{ $message }}</p>@enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-success" >Save</button>
                                <a href="{{ route('category.report') }}" class="btn btn-primary">Back</a>
                            </div>
                        </div>
                    </form>
            </div>
    </div>
@endsection