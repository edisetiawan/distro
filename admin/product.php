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
$batas=8;
$paging=$_GET['paging'];
if(empty($paging))
	{
	$posisi=0;
	$paging=1;
	}

else{
	$posisi=($paging-1) * $batas;
	}
$query=mysql_query("select * from tbl_barang order by id_barang desc limit $posisi,$batas");

while($r=mysql_fetch_array($query))
{
echo"<div id='sub-barang'><div class='jdl-brg'>$r[nama_barang]</div><img src='../barang/$r[gambar]' width='90' class='gambar'><div id='harga'><i>Harga Rp.$r[harga]</i>
<a href='edit.php?id_barang=$r[id_barang]' onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\"><div  class='submitButton3'>Update Item</div></a><a href='hapus-barang.php?id_barang=$r[id_barang]'><div  class='submitButton3'>Hapus Item</div></a>
</div></div>";
}

//penomoran
echo "<tr><td colspan='2' valign='top' align='center'>";
$query2=mysql_query("select * from tbl_barang");
$jumlah_data=mysql_num_rows($query2);
$jumlah_halaman=ceil($jumlah_data/$batas);
echo"<div id='paging'>";
if (1 != $paging){//tanda != berarti perintah akan dijalankan jika $paging tidak sama dengan 1, copyright all teknik paging by go_blind_hacker, powered by V-boys_studio
	$back=$paging-1;
	echo "<div id='kotak-paging'><a href='product.php?paging=$back'><b>Back</b></a></div>";
	}
	else{
	echo"<div id='kotak-paging'>Back</div>";
	}
	
if ($paging != $jumlah_halaman){
	$next=$paging+1;
	echo" <div id='kotak-paging'><a href='product.php?paging=$next'>  <b>Next</b></a></div>";
	}
	else
	{
	echo "<div id='kotak-paging'>Next</div>";
	}
echo"<a href='tambah-barang.php'><div id='kotak-tambah'>Tambah Produk Baru</div></a>";
echo"</div>";
?>
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