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
                <form class="form-horizontal" method="POST" action="/registerPost-pegawai">
                    {{ csrf_field() }}

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label"><b>Nama</b></label>
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                            </div>

                            <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
                                <label for="alamat" class="col-md-4 control-label"><b>Alamat</b></label>
                                <textarea rows="3" id="alamat" name="alamat" class="form-control" required autofocus></textarea>
                            </div>

                            <div class="form-group{{ $errors->has('birthdate') ? ' has-error' : '' }}">
                                <label for="birthdate" class="col-md-4 control-label"><b>Tanggal Lahir</b></label>
                                    <input id="birthdate" type="date" class="form-control" name="birthdate" required autofocus>
                            </div>

                            <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                                <label for="gender" class="col-md-4 control-label"><b>Jenis Kelamin</b></label>
                                <br>
                                <div class="row">
                                    <div class="col text-center">
                                        <input name="gender" value="P" id="gender" type="radio" checked> Perempuan
                                    </div>
                                    <div class="col text-center">
                                        <input name="gender" value="L" id="gender" type="radio"> Laki-Laki
                                    </div>
                                    <div class="col text-center">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('noHP') ? ' has-error' : '' }}">
                                <label for="phone" class="col-md-4 control-label"><b>no. Telepon</b></label>
                                    <input id="phone" type="text" class="form-control" name="phone" required autofocus>
                            </div>
                        </div>

                        <div class="col-md-6 border-left">
                            <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                                <label for="role" class="col-md-4 control-label"><b>Jabatan</b></label>
                                <br>
                                <div class="row">
                                    <div class="col text-center">
                                        <input name="role" value="Kasir" id="role" type="radio" checked> Kasir
                                    </div>
                                    <div class="col text-center">
                                        <input name="role" value="Inventory/Chef" id="role" type="radio"> Inventory/Chef
                                    </div>
                                    <div class="col text-center">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label"><b>E-Mail Address</b></label>
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label"><b>Password</b></label>
                                    <input id="password" type="password" class="form-control" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-6 control-label"><b>Confirm Password</b></label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>

							<div class="col-md-12">
								<div class="submit-button text-center">
									<button class="btn btn-common" id="submit" type="submit">Daftar</button>
									<div id="msgSubmit" class="h3 text-center hidden"></div>
									<div class="clearfix"></div>
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
