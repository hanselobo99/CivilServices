@extends('Layout.index')
@section('content')
    <h5 class="text-center mt-2 mb-3">User Login Form</h5>
    <div class="row">
        <div class="col-6 offset-3">
            <form class="signin-form mb-3" action="{{route('Staff.Login')}}" method="post">
                @csrf
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email">
                    @error('email')
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
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" value="1">
                    <label class="form-check-label">
                        Remember me
                    </label>
                </div>
                <div class="form-group">
                    <a href="{{route('User.RegisterPage')}}" >Register</a> / <a href="#" class="trigger-forget-form">Forget
                        password?</a>
                </div>
                <input type="submit" name="logsubmit" class="btn btn-primary mt-2" value="Signin">
            </form>
        </div>
    </div>

@endsection
