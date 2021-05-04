@extends('user.layout')

@section('content')
    <div class="row">
        <div class="col-lg-11">
            <h2>Update Student</h2>
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
    <form method="post" action="{{ route('user.update',$user->id) }}" >
        @method('PATCH')
        @csrf
        <div class="form-group">
            <label for="txtFirstName">First Name:</label>
            <input type="text" class="form-control" id="txtFirstName" placeholder="Enter First Name" name="txtFirstName" value="{{ $user->firstname }}">
        </div>
        <div class="form-group">
            <label for="txtLastName">Last Name:</label>
            <input type="text" class="form-control" id="txtLastName" placeholder="Enter Last Name" name="txtLastName" value="{{ $user->lastname }}">
        </div>
        <div class="form-group">
            <label for="txtAddress">Address:</label>
            <textarea class="form-control" id="txtAddress" name="txtAddress" rows="10" placeholder="Enter Address">{{ $user->address }}</textarea>
        </div>
        <div class="form-group">
            <label for="txtPhone">Phone:</label>
            <input type="text" class="form-control" id="txtPhone" name="txtPhone" rows="10" placeholder="Enter Address" value="{{ $user->phone }}">
        </div>
        <div class="form-group">
            <label for="txtDateOfBirth">Date Of Birth:</label>
            <input type="text" class="form-control" id="txtDateOfBirth" name="txtDateOfBirth" rows="10" placeholder="Enter Address" value="{{ $user->dateofbirth }}">
        </div>
        <div class="form-group">
            <label for="txtGender">Current Gender: {{ $user->gender }}</label>
            <select class="form-control" id="txtGender" name="txtGender" rows="10">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>
        <div class="form-group">
            <label for="txtPhotos">Photos:</label>
            <img src="{{ $user->photos }}" style="max-width: 100px" /><br><br>
            <input type="text" class="form-control" id="txtPhotos" name="txtPhotos" rows="10" placeholder="Photo URL on Github" value="{{ $user->photos }}">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
@endsection
