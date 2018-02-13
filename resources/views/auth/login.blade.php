@extends('core.layout.userbase_app')

@section('content')
<div class="container">
    <div class="col-md-4 col-md-offset-4 box">
        <h1 class="text-center text-danger margin-bottom-md">Login</h1>
        <hr>
        <form id="loginForm" method="post" action="{{ route('login') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Masukkan Email" name="email" value="{{ old('email') }}">
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Masukkan Password" name="password" value="{{ old('password') }}">
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <button id="loginButton" class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
            </div>
            <div class="form-group text-center">
                <p>Belum punya akun? <a href="{{ route('register') }}">Daftar</a></p>
                <hr>
                <a class="btn btn-default" href="#"><i class="fa fa-home"></i> Home</a>
            </div>
        </form>
    </div>
</div>
@endsection
