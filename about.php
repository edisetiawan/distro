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
<div id="judul">Tentang Kami, ZenWalk Distro</div>
<h1>Apa sih ZenWalk Distro itu???</h1>
ZenWalk Distro adalah creative clothing line yang menggabungkan clothing line, e-commerce, dengan kontes design kaos terbesar di Indonesia.<br /><br />
Lho, maksudnya gimana?<br /><br />
Jadi yang membuat kami berbeda adalah desain kaos tersebut benar-benar kami bebaskan ke kalian! Ya, betul sekali, kalianlah yang akan mendesain, dan kalianlah yang akan menentukan kaos mana yang akan kami buat dan jual. Lewat kontes yang kami adakan (sepanjang tahun, tanpa libur!), semua orang bisa mengirimkan desain ke kami melalui situs www.gantibaju.com, yang nantinya akan di-vote oleh semua pengunjung situs. Hasil voting itu, ditambah dengan penilaian juri-juri khusus yang kompeten di bidangnya, akan dijadikan acuan buat gantibaju.com untuk menentukan desain mana yang akan dicetak. Dan pemenangnya akan mendapatkan uang tunai + royalti dari penjualan kaos tersebut. Seru, kan?<br /><br />
Mungkin kalian pernah dengar beberapa situs serupa yang sudah tenar lebih dahulu di luar negeri, tapi satu hal yang membuat gantibaju.com unik adalah, nuansa Indonesia yang selalu kita dorong di setiap desain-desainnya. Hanya desain-desain keren yang memiliki nuansa Indonesia yang kita terima untuk mengikuti kontesnya. Kami yakin desainer lokal tidak akan kalah dengan desainer luar, dan bila diberikan kesempatan yang sama, bisa menghasilkan karya yang lebih hebat lagi!<br /><br />
<h1>WOW Keren, Gimana cara Ikutnya???</h1>
Gampang banget! Kalau kamu senang dan bisa mendesain kaos, silakan baca dulu aturan pengirimannya  dengan jelas, karena kami tidak akan menerima desain yang tidak sesuai dengan aturan-aturan yang sudah kami buat. Kamu juga bisa download blanko desain yang sudah kami sediakan untuk memudahkan pembuatan karya. Kamu tinggal mengakses halaman Kirim Desainmu  di atas, nanti ada formulir yang bisa kamu isi untuk mulai mengirim desain kamu. Nanti kalau desain kamu ternyata memang keren dan memenuhi syarat, kamu bisa melihat desain kamu nampang dan siap di-voting di halaman Voting Desain Terbaru.<br /><br />
<h1>Lalu, Kalau udah ikutan, Dapet Apa???</h1>
Setiap bulannya, gantibaju.com akan mencetak maksimal 10 desain untuk dijadikan kaos. Setiap pemenang akan memperoleh hadiah 1 juta rupiah ditambah royalti 10% dari hasil penjualan kaos yang dibuat dengan desainnya! Disamping itu, nama desainer pemenang juga akan menempel di setiap kaos gantibaju.com yang dibuat menggunakan desainnya, jadi kamu bisa nebeng tenar lewat penjualan kaos gantibaju.com yang ada di seluruh Indonesia. Mantap, kan?<br /><br />
</div>
<div id="kanan">

<?php
if(empty($_SESSION[namamember])){
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
<div id="footer">Copyright © ZenWalk Distro Clothing 2010. All Right Reserved<br />Jl. Jl. Jend Legian Kuta 40 | 
Telp: 0341-560823 fax :0341-562525 email : info@zenwalk-distro.com </div>
</div>
</body>
</html>