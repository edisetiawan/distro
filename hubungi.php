<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/utilities.js"></script>
<script type="text/javascript" src="js/slideshow.js"></script>
<link rel="shortcut icon" href="images/icon.png" />
<title>ZenWalk Distro Clothing</title>
</head>

<body>
<?php
include('koneksi.php');
?>
<div id="menu-atas">
<div id="atas"><div class="logo"><img src="images/logo.png" /></div>
<div class="menu" id="nav">
	<ul>
    	<li><a href="index.php">Beranda</a></li>
    	<li><a href="about.php">Tentang Kami</a></li>
    	<li><a href="product.php">Produk Kami</a></li>
    	<li><a href="galeri.php">Galeri</a></li>
    	<li><a href="hubungi.php">Hubungi Kami</a></li>
    	<li><a href="hal-login.php">Login Admin</a></li>
	</ul>
</div>
<div id="head">
<div id="imgSShow" align="center"><img src="images/header.jpg" alt="large image" name="SLIDESIMG" id="SLIDESIMG" style="opacity: 1;"><script type="text/javascript" src="js/slide-2.js"></script></div>
</div>
<div><img src="images/bawah-head.png" /></div>
</div>
</div>
<div id="isi">
<div id="kiri">
<div id="judul">Hubungi Kami</div>
Menemukan masalah dengan situs ZenWalk Distro?<br />
Atau kamu pingin menanyakan sesuatu terkait kemungkinan kerjasama dengan kami?<br />
Jangan ragu-ragu, silakan hubungi kami melalui form kontak yang ada di bawah ini, dan kami akan merespon secepatnya.<br /><br />
<form method="post" action="kirim-pesan.php">
<table>
<tr><td width="100">Nama</td><td width="20">:</td><td><input type="text" class="input" size="50" name="nama" /> *</td></tr>
<tr><td width="100">Email</td><td width="20">:</td><td><input type="text" class="input" size="50" name="email" /> *</td></tr>
<tr><td width="100">Alamat</td><td width="20">:</td><td><input type="text" class="input" size="50" name="alamat" /> *</td></tr>
<tr><td width="100" valign="top">Pesan</td><td width="20" valign="top">:</td><td><textarea name="pesan" cols="40" rows="8" class="input"></textarea></td></tr>
<tr><td width="100"></td><td width="20"></td><td><input type="submit" class="submitButton" value="Kirim Pesan"/> <input type="reset" class="submitButton" value="Hapus"/></td></tr>
</table>
</form><br />
* Wajib diisi dan gak boleh kosong...!!! :D<br />
</div>
<div id="kanan">

<?php
if(empty($_SESSION['namamember'])){
?>
<div id="judul">Member Log In</div>
<div id="widget">
<form method="post" action="log-member.php">
<table>
<tr><td>Username</td><td>:</td><td><input type="text" name="user" class="input" size="25"/></td></tr>
<tr><td>Password</td><td>:</td><td><input type="password" name="pass" class="input" size="25"/></td></tr>
<tr><td></td><td></td><td><input type="submit" value="Masuk" class="submitButton" /> <input type="reset" value="Hapus" class="submitButton" /></td></tr>
</table>
</form>
<a href="registrasi.php"><div class="submitButton2">Gak Punya Akun? Daftar Akun Baru</div></a>
</div>
<?php
}
else{
?>
<div id="judul">Selamat Datang</div>
<div id="widget">
<?php
$d=date('d');
$m=date('m');
$y=date('Y');
?>
<img src="images/user-icon.jpg" class="gambar2" />
Halo "<b><?php echo"$_SESSION[nama]"; ?></b>"<br />
Login Tanggal : <?php echo "$d-$m-$y"; ?><br /><br /><br /><br /><br />
<a href="logout.php"><div class="submitButton2">Keluar</div></a>
</div>
<?php
}
?>

<div id="judul">Toko Offline Kami</div>
<div id="widget">
<li class="li-class">Bandung</li>
<li class="li-class-no">Jl. Titimplik no.29
Kec. Coblong, Dipati Ukur</li>
<li class="li-class">Jakarta</li>
<li class="li-class-no">Mazee, fX Lifestyle X'enter lt 6
Jl. Jend Sudirman, Pintu 1 Senayan</li>
<li class="li-class">Denpasar</li>
<li class="li-class-no">ZenWalk Distro Clothing
Jl. Jend Legian Kuta 40</li>
<a href="hubungi.php"><div class="submitButton2">Ada Masalah? Hubungi Kami aja..!!</div></a>
</div>

<div id="judul">Temukan Kami di :</div>
<div id="widget">
<img src="images/facebook.gif" class="image" width="30"/><strong>Facebook</strong><br />Zenwalk Distro Clothing<br /><br />
</div>

</div>
</div>
</div>
<div id="menu-bawah">
<div id="footer">Copyright � ZenWalk Distro Clothing 2010. All Right Reserved<br />Jl. Jl. Jend Legian Kuta 40 | 
Telp: 0341-560823 fax :0341-562525 email : info@zenwalk-distro.com </div>
</div>
</body>
</html>