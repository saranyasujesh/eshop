@extends('layout.admintemplate')
@section('title','Deal Of The Day')
@section('heading','Deals Report')
@section('content')
<link rel="stylesheet" href="{{ asset('public/template/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/template/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/template/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <div class="card">

        <div class="card-header">
            {!! buttonmenus(array(38)) !!}
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
                        <th>Image</th>
                        <th>Sub Heading</th>
                        <th>Heading</th>
                        <th>Product Id</th>
                        <th>Description</th>
                        <th>Actual Price</th>
                        <th>Reduced Price</th>
                        <th>Time Period</th>
                        <th>Active</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($deals as $dl)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                @if($dl->image)    
                                    <img src="{{ url('storage/app/public/deal/'.$dl->image) }}" width="150px" height="100px">
                                @endif
                                </td>
                                <td>{{ $dl->sub_heading }}</td>
                                <td>{{ $dl->heading }}</td>
                                <td>{{ $dl->product_id }}</td>
                                <td>{{ $dl->description }}</td>
                                <td>{{ $dl->actual_price }}</td>
                                <td>{{ $dl->reduced_price }}</td>
                                <td>{{ $dl->time_period }}</td>
                                <td>{{ $dl->active }}</td>
                                <td>{!! actionmenus(encrypt($dl->id),array(35,36)) !!}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
@endsection
