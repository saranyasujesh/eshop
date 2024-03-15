@extends('layout.admintemplate')
@section('title','Admins')
@section('heading','Brand Report')
@section('content')
<link rel="stylesheet" href="{{ asset('public/template/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/template/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/template/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <div class="card">

        <div class="card-header">
            {!! buttonmenus(array(24)) !!}
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
                        <th>Brand</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($brr as $brn)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $brn->brand_name }}</td>
                                <td>{!! actionmenus(encrypt($brn->id),array(25,26)) !!}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
@endsection
