@extends('layouts.main')
@section('title', 'Masuk Ke Akun')
@section('head', 'Rumah Makan Sinar Minang Balige')

@section('content')
<div class="col-lg-12">
<br><br>
<div class="container" style="margin-top:20px">
    <div class="heading-title text-center">
        <h2>Masuk ke Akun</h2>
    </div>
    <div class="row" align="center">
        <div class="col-md-10 offset-md-1">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                    <div class="row-md-4">
                    <div class="col-md-6 border">
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                    <hr>
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                    </a>
                                </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                            </div>
                        </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br><br>
@endsection
