<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @push('script')
        {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
       
    @endpush
    <link href="//cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
<script src="//cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
</head>
@extends('layouts.app')
    @section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Manage Students</div>
            <div class="card-body">
                {{ $dataTable->table() }}
                {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
            </div>
        </div>
    </div>
@endsection
</html>


