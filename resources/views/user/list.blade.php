@extends('user.layout')

@section('content')
    <div class="row">
        <div class="col-lg-11">
            <h2>Test Code</h2>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Date Of Birth</th>
            <th>Gender</th>
            <th>Photos</th>
            <th width="280px">Action</th>
        </tr>
        @php
            $i = 0;
        @endphp
        @foreach ($users as $user)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $user->firstname }}</td>
                <td>{{ $user->lastname }}</td>
                <td>{{ $user->address }}</td>
                <td>{{ $user->phone }}</td>
                <td>{{ $user->dateofbirth }}</td>
                <td>{{ $user->gender }}</td>
                <td><img src="{{ $user->photos }}" style="max-width: 100px" /> </td>
                <td>
                    <form action="{{ route('user.destroy',$user->id) }}" method="POST">
                        <a class="btn btn-success" href="{{ route('user.create') }}">Add</a>
                        <a class="btn btn-info" href="{{ route('user.show',$user->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('user.edit',$user->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
