@extends('user.layout')

@section('content')
    <div class="row">
        <div class="col-lg-11">
            <h2>Add New User</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="{{ url('user') }}"> Back</a>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="txtFirstName">First Name:</label>
            <input type="text" class="form-control" id="txtFirstName" placeholder="Enter First Name" name="txtFirstName">
        </div>
        <div class="form-group">
            <label for="txtLastName">Last Name:</label>
            <input type="text" class="form-control" id="txtLastName" placeholder="Enter Last Name" name="txtLastName">
        </div>
        <div class="form-group">
            <label for="txtAddress">Address:</label>
            <textarea class="form-control" id="txtAddress" name="txtAddress" rows="10" placeholder="Enter Address"></textarea>
        </div>
        <div class="form-group">
            <label for="txtPhone">Phone:</label>
            <input type="tel" class="form-control" id="txtPhone" name="txtPhone" rows="10" placeholder="Enter Phone">
        </div>
        <div class="form-group">
            <label for="txtDateOfBirth">Date Of Birth:</label>
            <input type="date" class="form-control" id="txtDateOfBirth" name="txtDateOfBirth" rows="10" placeholder="Enter Phone">
        </div>
        <div class="form-group">
            <label for="txtGender">Gender:</label>
                <select class="form-control" id="txtGender" name="txtGender" rows="10">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
        </div>
        <div class="form-group">
            <label for="txtPhotos">Photos:</label>
                <input type="text" class="form-control" id="txtPhotos" name="txtPhotos" rows="10" placeholder="Photo URL on Github">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
@endsection
