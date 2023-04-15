<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fee Details</title>
    @push('script')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
    @endpush
    <link href="//cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
    <script src="//cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>

</head>
<body>
    <div>
    @extends('layouts.app')
    @section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">List of Fee</div>
            <div class="card-body">
                {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
                {{ $dataTable->table() }}
                
            </div>
        </div>
    </div>
    @endsection
</body>
</html>
