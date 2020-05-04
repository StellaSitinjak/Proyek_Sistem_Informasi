<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <title>RM. Sinar Minang Balige</title>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
        </style>
</head>

<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="#">Perpustakaan</a>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
            <a class="nav-link" href="/">Login Pengunjung</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="/buku">Data Buku</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="/anggota">Data Anggota</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="/pustakawan">Data Pustakawan</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="/transaksi">Transaksi Buku</a>
        </li>
        <!-- <li class="nav-item active">
            <a class="nav-link" href="/buku/borrow">Pinjam Buku</a>
        </li> -->
        <li class="nav-item active">
            <a class="nav-link" href="/transaksi/ruangan">Booking Ruangan</a>
        </li>
    </ul>
</nav>

<div class="container text-center" style="margin-top:20px">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form method="post">
                <h1 class="h3 mb-3 font-weight-normal">Masukkan Identitas Anda</h1>
                <div class="form-group">
                    <input type="text" name="id-pengunjung" class="form-control" placeholder="NIM"  maxlength="8" required autofocus>
                </div>
                    <div class="form-group">
                        <button class="btn btn-sm btn-primary btn-block" type="submit">Simpan</button>
                    </div>
                <input type="hidden" name="action" value="tell-name">
            </form>
        </div>
    </div>
</div>

</body>

</html>