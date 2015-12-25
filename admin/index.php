<?php
session_start();
if(empty($_SESSION[admin])){
echo "<meta http-equiv='refresh' content='0; url=../index.php'>";
}
else{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../js/utilities.js"></script>
<script type="text/javascript" src="../js/slideshow.js"></script>
<link rel="shortcut icon" href="../images/icon.png" />
<title>ZenWalk Distro Clothing</title>
</head>

<body>
<?php
include('../koneksi.php');
?>
<div id="menu-atas">
<div id="atas"><div class="logo"><img src="../images/logo.png" /></div>
<div class="menu" id="nav">
	<ul>
    	<li><a href="index.php">Beranda</a></li>
    	<li><a href="product.php">Produk</a></li>
    	<li><a href="pesanan.php">Pesanan</a></li>
    	<li><a href="member.php">Member</a></li>
    	<li><a href="hubungi.php">Hubungi</a></li>
    	<li><a href="password.php">Password</a></li>
    	<li><a href="../logout.php">Log Out</a></li>
	</ul>
</div>
<div id="head">
<div id="imgSShow" align="center"><img src="../images/header.jpg" alt="large image" name="SLIDESIMG" id="SLIDESIMG" style="opacity: 1;"><script type="text/javascript" src="../js/slide-2.js"></script></div>
</div>
<div><img src="../images/bawah-head.png" /></div>
</div>
</div>
<div id="isi">
<div id="judul">Selamat Datang di Control Panel Admin</div>
ZenWalk Distro adalah creative clothing line yang menggabungkan clothing line, e-commerce, dengan kontes design kaos terbesar di Indonesia.<br /><br />
Lho, maksudnya gimana?<br /><br />
Jadi yang membuat kami berbeda adalah desain kaos tersebut benar-benar kami bebaskan ke kalian! Ya, betul sekali, kalianlah yang akan mendesain, dan kalianlah yang akan menentukan kaos mana yang akan kami buat dan jual. Lewat kontes yang kami adakan (sepanjang tahun, tanpa libur!), semua orang bisa mengirimkan desain ke kami melalui situs www.gantibaju.com, yang nantinya akan di-vote oleh semua pengunjung situs. Hasil voting itu, ditambah dengan penilaian juri-juri khusus yang kompeten di bidangnya, akan dijadikan acuan buat gantibaju.com untuk menentukan desain mana yang akan dicetak. Dan pemenangnya akan mendapatkan uang tunai + royalti dari penjualan kaos tersebut. Seru, kan?
</div>
</div>
</div>
<div id="menu-bawah">
<div id="footer">Copyright © ZenWalk Distro Clothing 2010. All Right Reserved<br />Jl. Jl. Jend Legian Kuta 40 | 
Telp: 0341-560823 fax :0341-562525 email : info@zenwalk-distro.com </div>
</div>
</body>
</html>
</body>
<?php
}
?>