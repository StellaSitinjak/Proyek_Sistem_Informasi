@extends('layouts.main')
@section('title', 'Menu')

@section('content')
<!-- Start All Pages -->
<div class="all-page-title page-breadcrumb">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-12">
                <h1>Rumah Makan Sinar Minang Balige</h1>
            </div>
        </div>
    </div>
</div>
<!-- End All Pages -->

<!-- Start Menu -->
<div class="menu-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading-title text-center">
                    <h2>Our Menu</h2>
                    <p> Tentukan seleramu </p>
                </div>
            </div>
        </div>
        <div class="row inner-menu-box">
            <br><br>
            <table border="0" width="100%" height="85%">
                <tr>
                    <h1><b><font color=#d65106>Makanan</b></h1></font>
                    <br>
                    <td width="25%" align="center" class="zoom"><img src="{{ asset('image/img-01.jpg') }}" width="85%"></td>
                    <td width="25%" align="center" class="zoom"><img src="{{ asset('image/img-02.jpg') }}" width="85%"></td>
                    <td width="25%" align="center" class="zoom"><img src="{{ asset('image/menu-3.jpg') }}" width="85%"></td>
                    <td width="25%" align="center" class="zoom"><img src="{{ asset('image/menu-4.jpg') }}" width="85%"></td>
                </tr>
                <tr>
                    <td align=center><b><font size="3" color="black">Rendang khas Padang</font></b></td>
                    <td align=center><b><font size="3" color="black">Sate Padang</font></b></td>
                    <td align=center><b><font size="3" color="black">Nasi Campur Padang</font></b></td>
                    <td align=center><b><font size="3" color="black">Ikan Bakar Bumbu </font></b></td>
                </tr>
                <tr>
                    <td align="center">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                    </td>
                    <td align="center">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                    </td>
                    <td align="center">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                    </td>
                    <td align="center">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                    </td>
                <tr>
                    <td align=center><font size="3" color="black">Rp 35.000</font></td>
                    <td align=center><font size="3" color="black">Rp 18.000</font></td>
                    <td align=center><font size="3" color="black">Rp 25.000</font></td>
                    <td align=center><font size="3" color="black">Rp 24.000</font></td>
                </tr>
                <tr>
                    <td align=center><a class="button" href="#"> <b>Pesan</b></td></a>
                    <td align=center><a class="button" href="#"> <b>Pesan</b></td></a>
                    <td align=center><a class="button" href="#"> <b>Pesan</b></td></a>
                    <td align=center><a class="button" href="#"> <b>Pesan</b></td></a>
                </tr>
                <tr>
                    <tr>
                        <td><br><h1><b><font color=#d65106> Minuman </h1></b> </font> <br></td>
                    </tr>
                    <td width="25%" align="center" class="zoom"><img src="{{ asset('image/drink-1.jpg') }}" width="85%"></td>
                    <td width="25%" align="center" class="zoom"><img src="{{ asset('image/drink-2.jpeg') }}" width="85%"></td>
                    <td width="25%" align="center" class="zoom"><img src="{{ asset('image/drink-3.jpg') }}" width="85%"></td>
                    <td width="25%" align="center" class="zoom"><img src="{{ asset('image/drink-4.jpg') }}" width="85%"></td>
                </tr>
                <tr>
                    <td align=center><b><font size="3" color="black">Lemon Tea Minang</font></b></td>
                    <td align=center><b><font size="3" color="black">Orange juice + lime </font></b></td>
                    <td align=center><b><font size="3" color="black">Manggo breeze</font></b></td>
                    <td align=center><b><font size="3" color="black">Dalgona khas Minang</font></b></td>
                </tr>
                <tr>
                    <td align="center">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                    </td>
                    <td align="center">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                    </td>
                    <td align="center">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                    </td>
                    <td align="center">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                    </td>
                <tr>
                    <td align=center><font size="3" color="black">Rp 12.000</font></td>
                    <td align=center><font size="3" color="black">Rp 15.000</font></td>
                    <td align=center><font size="3" color="black">Rp 19.000</font></td>
                    <td align=center><font size="3" color="black">Rp 17.000</font></td>
                </tr>
                <tr>
                    <td align=center><a class="button" href="#"> <b>Pesan</b></td></a>
                    <td align=center><a class="button" href="#"> <b>Pesan</b></td></a>
                    <td align=center><a class="button" href="#"> <b>Pesan</b></td></a>
                    <td align=center><a class="button" href="#"> <b>Pesan</b></td></a>
                </tr>
                <tr>
                    <tr>
                        <td>
                            <br>
                            <h1> <b><font color=#d65106>Kue </h1></b> </font> <br>
                        </td>
                    </tr>
                    <td width="25%" align="center" class="zoom"><img src="{{ asset('image/kue-1.jpg') }}" width="85%"></td>
                    <td width="25%" align="center" class="zoom"><img src="{{ asset('image/kue-2.jpg') }}" width="85%"></td>
                    <td width="25%" align="center" class="zoom"><img src="{{ asset('image/kue-3.jpg') }}" width="85%"></td>
                    <td width="25%" align="center" class="zoom"><img src="{{ asset('image/kue-4.jpg') }}" width="85%"></td>
                </tr>
                <tr>
                    <td align=center><b><font size="3" color="black">Lapis ketan srikaya</font></b></td>
                    <td align=center><b><font size="3" color="black">Lemang ungu </font></b></td>
                    <td align=center><b><font size="3" color="black">Pie gula merah</font></b></td>
                    <td align=center><b><font size="3" color="black">Kue Apem</font></b></td>
                </tr>
                <tr>
                    <td align="center">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                    </td>
                    <td align="center">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                    </td>
                    <td align="center">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                    </td>
                    <td align="center">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                    </td>
                <tr>
                    <td align=center><font size="3" color="black">Rp 5.000</font></td>
                    <td align=center><font size="3" color="black">Rp 6.000</font></td>
                    <td align=center><font size="3" color="black">Rp 7.000</font></td>
                    <td align=center><font size="3" color="black">Rp 6.500</font></td>
                </tr>
                <tr>
                    <td align=center><a class="button" href="#"> <b>Pesan</b></td></a>
                    <td align=center><a class="button" href="#"> <b>Pesan</b></td></a>
                    <td align=center><a class="button" href="#"> <b>Pesan</b></td></a>
                    <td align=center><a class="button" href="#"> <b>Pesan</b></td></a>
                </tr>
                <tr>
                    <td>
                        <br>
                        <h1> <b><font color=#d65106> Tambahan Buah</b> </font></h1> <br>
                    </td>
                </tr>
                <td width="25%" align="center" class="zoom"><img src="{{ asset('image/fruit-1.jpg') }}" width="85%"></td>
                <td width="25%" align="center" class="zoom"><img src="{{ asset('image/fruit-2.png') }}" width="85%"></td>
                </tr>
                <tr>
                    <td align=center><b><font size="3" color="black">Fresh Fruit</font></b></td>
                    <td align=center><b><font size="3" color="black">VIP Fruit</font></b></td>
                </tr>
                <tr>
                    <td align=center><font size="3" color="black">Rp 25.000</font></td>
                    <td align=center><font size="3" color="black">Rp 32.000</font></td>
                </tr>
                <tr>
                    <td align=center><a class="button" href="#"> <b>Pesan</b></td></a>
                    <td align=center><a class="button" href="#"> <b>Pesan</b></td></a>
                </tr>
            </tr>
        </tr>
    </table>
</div>
@endsection