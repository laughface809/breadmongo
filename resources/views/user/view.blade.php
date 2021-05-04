@extends('user.layout')

@section('content')
    <div class="row">
        <div class="col-lg-11">
            <h2>Laravel 8 CRUD Example</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="{{ url('user') }}"> Back</a>
        </div>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>First Name:</th>
            <td>{{ $user->firstname }}</td>
        </tr>
        <tr>
            <th>Last Name:</th>
            <td>{{ $user->lastname }}</td>
        </tr>
        <tr>
            <th>Address:</th>
            <td>{{ $user->address }}</td>
        </tr>
        <tr>
            <th>Phone:</th>
            <td>{{ $user->phone }}</td>
        </tr>
        <tr>
            <th>Date Of Birth:</th>
            <td>{{ $user->dateofbirth }}</td>
        </tr>
        <tr>
            <th>Gender:</th>
            <td>{{ $user->gender }}</td>
        </tr>
        <tr>
            <th>Photos:</th>
            <td>{{ $user->photos }}</td>
        </tr>
    </table>
@endsection
