@extends('Layout.index')
@section('content')
    <h5 class="text-center mt-2 mb-3">Login Form</h5>
    <div class="row">
        <div class="col-6 offset-3">
            <h5 class="text-center mt-2 mb-3">Registration Form</h5>
            <form class="register-form mb-3" method="post" action="{{route('Staff.Register')}}">
                @csrf
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" value="{{old('email')}}" >
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username" value="{{old('username')}}" >
                    @error('username')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password">
                    @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" class="form-control" name="confirmpassword" >
                    @error('confirmpassword')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <input type="submit" name="registersubmit" class="btn btn-primary mt-2" value="Register">
            </form>
        </div>
    </div>

@endsection
