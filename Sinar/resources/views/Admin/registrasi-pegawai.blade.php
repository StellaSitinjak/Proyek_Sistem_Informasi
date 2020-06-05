@extends('layouts.main')
@section('title', 'Daftar Akun')

@section('content')
<br><br><br><br>
<div class="container" style="margin-top:20px">
    <h2 class="text-center">Selamat Datang di Rumah Makan Sinar Minang Balige</h2>
    <div class="row">
        <div class="col-lg-12">
            <div class="col-md-10 offset-md-1">
                <form action="{{ url('/postWorker') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="row mt-4">
                        <div class="col-md-6">
                        <div class="form-group">
                                <label for="name"><b>Nama Lengkap</b></label>
                                <input type="text" placeholder="Enter Name" name="name" id="name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="birthdate"><b>Birthdate</b></label>
                                <input type="date" name="birthdate" id="birthdate" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="gender"><b>Gender</b></label>
                                <input name="gender" value="P" id="gender" type="radio" checked> Perempuan
                                <input name="gender" value="L" id="gender" type="radio"> Laki-Laki
                            </div>
                            <div class="form-group">
                                <label for="alamat"><b>Alamat</b></label>
                                <textarea rows="3" placeholder="Enter Address" id="alamat" name="alamat" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="phone"><b>no. Telepon</b></label>
                                <input type="text" placeholder="Enter Phone Number" id="phone" name="phone" class="form-control" value="" maxlength="12" minlength="12">
                            </div>
                        </div>

                        <div class="col-md-6 border-left">
                            <div class="form-group">
                                <label for="position"><b>Posisi</b></label>
                                <input name="position" value="Kasir" id="position" type="radio" checked> Kasir
                                <input name="position" value="Inventory/Chef" id="position" type="radio"> Inventory/Chef
                            </div>
                            <div class="form-group">
                                <label for="email"><b>Email</b></label>
                                <input type="text" placeholder="Enter Email" name="email" id="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="pass"><b>Password</b></label>
                            <input id="pass" class="form-control" maxlength="12" minlength="8" type="password" placeholder="Enter Password" name="pass" required>
                            </div>
                            <div class="form-group">
                                <label for="repass"><b>Repeat Password</b></label>
                                <input id="repass" class="form-control" maxlength="12" minlength="8" type="password" placeholder="Repeat Password" name="repass" required>
                            </div>
                            <div class="form-group" align="left">
                                <p>To create an account you have to agree our <a class="btn-link" href="#">Terms & Privacy</a>.</p> 
                            </div>
							<div class="col-md-12">
								<div class="submit-button text-center">
									<button class="btn btn-common" id="submit" type="submit">Daftar</button>
									<div id="msgSubmit" class="h3 text-center hidden"></div>
									<div class="clearfix"></div>
								</div>
							</div>
                            <!-- <div class="form-group">
                                <input class="btn btn-primary btn-common" type="submit" value="Daftar">
                            </div> -->
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<br><br><br><br>
@endsection