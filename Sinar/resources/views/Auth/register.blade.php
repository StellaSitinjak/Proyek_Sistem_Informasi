@extends('layouts.main')
@section('title', 'Daftar Akun')
@section('head', 'Rumah Makan Sinar Minang Balige')

@section('content')
<div class="container" style="margin-top:20px">
    <br><br>
    <div class="heading-title text-center">
        <h2>Daftar Akun</h2>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="col-md-10 offset-md-1">
                <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Nama</label>
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                            </div>

                            <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
                                <label for="alamat" class="col-md-4 control-label">Alamat</label>
                                    <input id="alamat" type="text" class="form-control" name="alamat" required autofocus>
                            </div>

                            <div class="form-group{{ $errors->has('birthdate') ? ' has-error' : '' }}">
                                <label for="birthdate" class="col-md-4 control-label">Tanggal Lahir</label>
                                    <input id="birthdate" type="date" class="form-control" name="birthdate" required autofocus>
                            </div>

                            <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                                <label for="gender" class="col-md-4 control-label">Jenis Kelamin</label>
                                <br>
                                    <input name="gender" value="P" id="gender" type="radio" checked> Perempuan
                                    <input name="gender" value="L" id="gender" type="radio"> Laki-Laki
                            </div>

                            <div class="form-group{{ $errors->has('noHP') ? ' has-error' : '' }}">
                                <label for="phone" class="col-md-4 control-label">no. Telepon</label>
                                    <input id="phone" type="text" class="form-control" name="phone" required autofocus>
                            </div>
                        </div>

                        <div class="col-md-6 border-left">
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
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
                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
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
