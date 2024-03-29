@extends('layout.admintemplate')
@section('title','Banners')
@section('heading','Banners Report')
@section('content')
<link rel="stylesheet" href="{{ asset('public/template/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/template/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/template/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <div class="card">

        <div class="card-header">
            {!! buttonmenus(array(34)) !!}
        </div>

        <div class="card-body">
            @if (session('msg'))
                <div class="text-primary text-center">
                    {{ session('msg') }}
                </div>
            @endif
            <div class="xscroll">
                <table class="table table-bordered" id="bannerTable">
                    <thead>
                    <tr>
                        <th>Sl No</th>
                        <th>Banner Image</th>
                        <th>Heading</th>
                        <th>Category</th>
                        <th>Description</th>
                        <th>Active</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($banners as $ban)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                @if($ban->banner_image)    
                                    <img src="{{ url('storage/app/public/banner/'.$ban->banner_image) }}" width="150px" height="100px">
                                @endif
                                </td>
                                <td>{{ $ban->heading }}</td>
                                <td>{{ $ban->category }}</td>
                                <td>{{ $ban->description }}</td>
                                <td>{{ $ban->active }}</td>
                                <td>{!! actionmenus(encrypt($ban->id),array(35,36)) !!}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
@endsection
