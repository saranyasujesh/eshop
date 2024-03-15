@extends('layout.admintemplate')
@section('title','Admins')
@section('heading','Registered Sellers')
@section('content')
    <link rel="stylesheet" href="{{ asset('public/template/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/template/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/template/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <div class="card">
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
                        <th>Name</th>
                        <th>Company Name</th>
                        <th>Place</th>
                        <th>Address</th>
                        <th>Pin Code</th>
                        <th>Email</th>
                        <th>Contact No</th>
                        <th>Username</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($sellers as $slr)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $slr->name }}</td>
                                <td>{{ $slr->company }}</td>
                                <td>{{ $slr->place }}</td>
                                <td>{{ $slr->address }}</td>
                                <td>{{ $slr->pin }}</td>
                                <td>{{ $slr->email }}</td>
                                <td>{{ $slr->contactno }}</td>
                                <td>{{ $slr->username }}</td>
                                <td>{{ $slr->status }}</td>
                                <td>
                                    @if($slr->status=='Approved')
                                        <p class="text-success">Approved</p>
                                    @elseif($slr->status=='Rejected')
                                        <p class="text-danger">Rejected</p>
                                    @else
                                        {!! statuschange(encrypt($slr->id),array(11,12)) !!}
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="{{ asset('public/template/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('public/template/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('public/template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script>
        $(function () {
            $("#sellerTable").DataTable({
                "responsive": true,
                "lengthChange": false, 
                "autoWidth": false,
                "buttons": ["excel", "pdf", "print"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>
@endsection
