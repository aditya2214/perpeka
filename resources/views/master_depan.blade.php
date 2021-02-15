<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>PERPEKA</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="depan/css/style.css" type="text/css" media="all" />
<!-- <link rel="stylesheet" href="depan/css/jquery.jcarousel.css" type="text/css" media="all" /> -->
<!-- <link rel="shortcut icon" type="image/x-icon" href="depan/css/images/favicon.ico" /> -->
<!-- <script type="text/javascript" src="depan/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="depan/js/jquery.jcarousel.min.js"></script>
<script type="text/javascript" src="depan/js/func.js"></script> -->
<!--[if IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->
@livewireStyles
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
<link href="depan/album/album.css" rel="stylesheet">


</head>
<body>
<!-- START PAGE SOURCE -->
<div id="wrapper">
    <div id="header">
        <div class="shell">
            <h1 id="logo" class="left">
                <a href="{{ url ('/') }}">
                    <img src="{{ asset ('logo/logo.jpeg') }}" style="width:50px;" alt=""> PERPEKA<span style="position:relative;left:58px; top:-15px; color:black"><b>PERKUMPULAN PENGUSAHA ELEKTRONIK DAN KOMPONEN KARAWANG</b> </span>
                </a>
            </h1>
        <div class="socials right">
            <ul>
            </ul>
        </div>
        </div>
    </div>
    <br>
    <div class="nav-holder" >
        <div class="shell" style="width:100% text-align:center;  " >
        <div id="navigation" class="left">
            <ul>
                <li><a href="#" style="font-size:12px;">HISTORI</a></li>
                <li><a href="{{ url ('perpeka_visi_misi') }}" style="font-size:12px;">VISI/MISI</a></li>
                <li><a href="{{ url ('perpeka_struktur_organisasi') }}" style="font-size:12px;">STRUKTUR ORGANISASI</a></li>
                <li><a href="{{ url ('perpeka_kontak') }}" style="font-size:12px;">KONTAK</a></li>
                <li><a href="#" style="font-size:12px;">REGULASI</a></li>
                <li><a href="#" style="font-size:12px;">ARTIKEL</a></li>
                <li><a href="{{ url ('perpeka_foto') }}" style="font-size:12px;">FOTO</a></li>
                <li><a href="#" style="font-size:12px;">BERITA</a></li>
                <li><a href="{{ url ('perpeka_data_statistik') }}" style="font-size:12px;">DATA STATISTIK</a></li>
            </ul>
        </div>
        <!-- <div class="search right">
            <form action="#" method="post">
            <input type="text" class="field blink left" value="Search here ..." />
            <input type="submit" class="button notext left" value="Submit" />
            </form>
        </div> -->
        <div class="cl">&nbsp;</div>
        </div>
    </div>

    @yield('content')

    <div class="footer fixed-bottom">
    <div class="shell">
        <p class="rf text-left"><a href="{{ url ('login') }}" style="color:white"><i class="fas fa-sign-in-alt"></i>&nbsp;Login</a>&nbsp;&nbsp;&nbsp; Design by <a href="https://www.myprofil261097.epizy.com/" target="_blank">Developer Perpeka</a></p>
        <div style="clear:both;"></div>
    </div>
    </div>
</div>
<!-- END PAGE SOURCE -->
</body>
@livewireScripts
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>