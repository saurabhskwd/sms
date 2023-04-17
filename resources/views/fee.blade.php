@extends('layouts.app')
@section('title')
   pay fee
@endsection
@yield('menubar')
@section('content')
    <form method="POST" action="/payfee">
        @csrf
        <label for="feedate">Date</label>
        <input type="date" name="feedate" class="form-control"/>
        <label for="studentname">Name</label>
        <input type="text" name="studentname" class="form-control"/>
        <label for="father">father</label>
        <input type="text" name="father" class="form-control">
        <label for="amount">ammount</label>
        <input type="text" name="amount" id="amount" class="form-control">
        <label for="inwords">In words</label>
        <input type="inwords" name="inwords" id="inword" class="form-control"/>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
    </div>
    @include('sweetalert::alert')
    @endsection

<script src="/digittowords.js"></script>