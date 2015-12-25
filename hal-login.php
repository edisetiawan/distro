<?php
session_start();
if(!empty($_SESSION[admin])){
echo "<meta http-equiv='refresh' content='0; url=admin/index.php'>";
}
else{
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
<form method="post" action="log-admin.php">
<table align="center">
<tr><td width="100">Username Admin</td><td width="20">:</td><td><input type="text" class="input" size="50" name="user" /> *</td></tr>
<tr><td width="100">Password Admin</td><td width="20">:</td><td><input type="password" class="input" size="50" name="pass" /> *</td></tr>
<tr><td width="100"></td><td width="20"></td><td><input type="submit" class="submitButton" value="Masuk"/> <input type="reset" class="submitButton" value="Hapus"/></td></tr>
</table>
</form>
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