@extends('layouts.app')
@section('title')
   Student Detail Entry
@endsection

@section('content')
    <div>
        <form method="POST" action='/store'>
            @csrf
        
        <table>
            <tr><th><td>Students Detial entry</td></th></tr>
            <tr><td><input type="hidden"/></td></tr>
            <tr><td>Name</td><td><input type="TEXT" class="form-control" name="sname"/></td></tr>
            <tr><td>Father</td><td><input type="TEXT" class="form-control" name="fname"/></td></tr>
            <tr><td>Mother</td><td><input type="TEXT" class="form-control" name="mname"/></td></tr>
            <tr><td>Adhar</td><td><input type="TEXT" class="form-control" name="adhar"/></td></tr>
            <tr><td>address</td><td><textarea name="address" class="form-control"></textarea></td></tr>
            <tr><td>gender</td>
                <td>
                    <select name="gender" class="form-control">
                        <option >Male</option>
                        <option >Female</option>
                    </select>
                </td>
            </tr>
            <tr><td>Category</td>
                <td>
                    <select name="category" class="form-control">
                        <option>General</option>
                        <option>OBC</option>
                        <option>SC</option>
                        <option>ST</option>
                    </select>
                </td>
            </tr>
            <tr><td>Date of Birth</td><td><input type="date" name="dob" class="form-control"/></td></tr>
            <tr><td>Phone</td><td><input type="TEXT" name="phone" class="form-control"/></td></tr>
            <tr><td>Email</td><td><input type="email" name="email" class="form-control" /></td></tr>
            <tr><td>Class</td>
                <td>
                    <select name="class" class="form-control">
                        <option>PGDCA</option>
                        <option>DCA</option>
                        <option>SC</option>
                        <option>COPA</option>
                    </select>
                </td></tr>
            <tr><td>SESSION</td><td><input type="TEXT" name="session" class="form-control"/></td></tr>
        </table>
        <button type="submit" class="btn btn-success btn-md"> Save</button>
        </form>
    </div>
    @include('sweetalert::alert')
@endsection