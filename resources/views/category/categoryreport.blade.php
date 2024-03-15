@extends('layout.admintemplate')
@section('title','Admins')
@section('heading','Category Report')
@section('content')
<link rel="stylesheet" href="{{ asset('public/template/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/template/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/template/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <div class="card">

        <div class="card-header">
            {!! buttonmenus(array(18)) !!}
        </div>

        <div class="card-body">
            @if (session('msg'))
                <div class="text-primary text-center">
                    {{ session('msg') }}
                </div>
            @endif
            <div class="xscroll">
                <table class="table table-bordered" id="sellerTable">
                    <thead>
                    <tr>
                        <th>Sl No</th>
                        <th>Category</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($category as $cat)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $cat->category_name }}</td>
                                <td>{!! actionmenus(encrypt($cat->id),array(19,20)) !!}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
@endsection
