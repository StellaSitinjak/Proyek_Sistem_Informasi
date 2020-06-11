@extends('layouts.main')
@section('title', 'Masuk Ke Akun')
@section('head', 'Rumah Makan Sinar Minang Balige')

@section('content')
<div class="col-lg-12">
<br><br>
<div class="container" style="margin-top:20px">
    <div class="heading-title text-center">
        <h2>Masuk ke Akun</h2>
        <!-- <p> Tentukan seleramu </p> -->
    </div>
    <div class="row" align="center">
        <div class="col-md-10 offset-md-1">
            @if(\Session::has('alert'))
                <div class="alert alert-danger">
                    <div>{{Session::get('alert')}}</div>
                </div>
            @endif
            @if(\Session::has('alert-success'))
                <div class="alert alert-success">
                    <div>{{Session::get('alert-success')}}</div>
                </div>
            @endif
            <form action="{{ url('/loginPost') }}" method="POST">
                {{ csrf_field() }}
                <div class="row-md-4">
                    <div class="col-md-6 border">
                        <div class="form-group">
                            <label for="email"><b>Email</b></label>
                            <input type="text" placeholder="Enter Email" name="email" id="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="password"><b>Password</b></label>
                            <input id="password" class="form-control" maxlength="12" minlength="8" type="password" placeholder="Enter Password" name="password" required>
                        </div>
                        <div class="form-group" align="left">
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember me 
                            <hr>
                            <a class="btn-link" href="#">Forgot Your Password?</a>
                        </div>
                        <div class="form-group">
                            <input class="btn btn-primary btn-common" type="submit" value="Masuk">
                        </div>
                    </div>
                </div>
                <input type="hidden" name="action" value="Masuk">
            </form>
        </div>
    </div>
</div>
<br><br><br><br>
</div>
@endsection