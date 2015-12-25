<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/highslide.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/utilities.js"></script>
<script type="text/javascript" src="js/highslide-with-html.js"></script>
<script type="text/javascript" src="js/slideshow.js"></script>
<link rel="shortcut icon" href="images/icon.png" />
<script type="text/javascript">
hs.graphicsDir = 'http://localhost/distro/images/';
hs.outlineType = 'rounded-white';
hs.wrapperClassName = 'draggable-header';
</script>
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
<div id="pesan">
<?php
if(empty($_SESSION[namamember])){
?>
	<script type="text/javascript">
		alert("Anda belum Log In...!!!\nUntuk melakukan pembelian/pemesanan, anda diwajibkan untuk Log In terbelih dahulu.\nJika belum menjadi member, silahkan mendaftar terlebih dahulu...!!!");
	</script>
<?php
	echo "<meta http-equiv='refresh' content='0; url=registrasi.php'>";
}
else{
$query=mysql_query("select * from tbl_barang where id_barang='$_GET[id_barang]'");
$no=1;
while($r=mysql_fetch_array($query)){
$nama=$r['nama_barang'];
$harga=$r['harga'];
$ket=$r['keterangan'];
$id=$r['id_barang'];
$gbr=$r['gambar'];
}
$query2=mysql_query("select * from tbl_member where user='$_SESSION[namamember]'");
$no=1;
while($q=mysql_fetch_array($query2)){
$id_m=$q['id_member'];
}
echo"<div id='judul'>Pesan $nama</div>";
echo"<img src='barang/$gbr' class='gambar2' width='170'>
<table>
<tr><td width='100' valign='top'>Nama Produk</td><td valign='top' width='5'>:</td><td><b>$nama</b></td></tr>
<tr><td width='100' valign='top'>Harga Produk</td><td valign='top' width='5'>:</td><td><b>$harga</b></td></tr>
<tr><td width='100' valign='top'>Keterangan</td><td valign='top' width='5'>:</td><td>$ket</td></tr>
</table>";
echo"<form method='post' action='simpan-pesanan.php'>Banyak : <select name='banyak' class='submitButton'>";
for($i=1;$i<=30;$i++)
{
echo"<option value='$i'>$i</option>";
}
echo"</select> Ukuran : <select name='ukuran' class='submitButton'><option value='xl'>XL</option><option value='l'>L</option><option value='m'>M</option><option value='s'>S</option></select>";
echo"<input type='hidden' value='$id' name='id_barang'><input type='hidden' value='$id_m' name='id_member'> <input type='submit' value='Simpan & Kirim' class='submitButton4'></form>";
}
?>
</div>
<div id="judul">Lihat Juga Produk Yang Lainnya</div>
<?php
$q=mysql_query("select * from tbl_barang where id_barang!='$id' order by RAND()LIMIT 3");
while($r=mysql_fetch_array($q))
{
echo"<div id='sub-barang'><div class='jdl-brg'>$r[nama_barang]</div><img src='barang/$r[gambar]' width='80' class='gambar'><div id='harga'><i>Harga Rp.$r[harga]</i>
<a href='pesan.php?id_barang=$r[id_barang]'><div  class='submitButton3'>Buy This Item</div></a><a href='detail.php?id_barang=$r[id_barang]' onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\"><div  class='submitButton3'>Review Item</div></a>
</div></div>";
}
?>
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