@extends('layout.admintemplate')
@section('title','Products')
@section('heading','Products')
@section('content')
    <div class="card">
        <div class="card-header">
            {!! buttonmenus(array(22)) !!}
        </div>
        <div class="card-body">
            {{ $dataTable->table() }}
        </div>
    </div>
@endsection
@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush