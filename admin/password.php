<?php
session_start();
if(empty($_SESSION[admin])){
echo "<meta http-equiv='refresh' content='0; url=../index.php'>";
}
else{
include('../koneksi.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<link href="../css/highslide.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../js/utilities.js"></script>
<script type="text/javascript" src="../js/slideshow.js"></script>
<script type="text/javascript" src="../js/highslide-with-html.js"></script>
<link rel="shortcut icon" href="../images/icon.png" />
<title>ZenWalk Distro Clothing</title>
<script type="text/javascript">
hs.graphicsDir = 'http://localhost/distro/images/';
hs.outlineType = 'rounded-white';
hs.wrapperClassName = 'draggable-header';
</script>
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
<?php
include('../koneksi.php');
$query=mysql_query("select * from tbl_user where user='$_SESSION[admin]'");
while($r=mysql_fetch_array($query))
{
$user=$r['user'];
$id=$r['id_user'];
}
?>
<form method="post" action="update-password.php">
<table>
<tr><td width="100">Username</td><td width="20">:</td><td><input type="text" class="input" size="50" name="user" readonly="readonly" value="<?php echo $user; ?>"/> *</td></tr>
<tr><td width="100">Password Baru</td><td width="20">:</td><td><input type="text" class="input" size="50" name="pass" /> *</td></tr>
<tr><td width="100"></td><td width="20"></td><td><input type="hidden" name="id" value="<?php echo $id; ?>" /><input type="submit" class="submitButton" value="Ganti Password"/> <input type="reset" class="submitButton" value="Hapus"/></td></tr>
</table>
</form>
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