<style>
body{
	background-image:url(images/bg-body.jpg);
	background-repeat:repeat-x;
	background-attachment:fixed;
	background-position:bottom;
	font-family:Arial, Helvetica, sans-serif;
	font-size:11px;
}
h2{
	font-size:14px;
	padding:0px;
	margin:0px;
	font-weight:bold;
	color:#666666;
}
h3{
	font-size:11px;
	font-weight:normal;
	color:#666666;
	margin-top:0px;
	margin-bottom:10px;
}
.gambar{
padding:5px;
background-color:#CCCCCC;
border:1px dashed #000;
	-moz-border-radius:4px;
	-khtml-border-radius: 4px;
	-webkit-border-radius: 4px;
	margin:5px;
	float:left;
}
.input{
-moz-border-radius:4px;
-khtml-border-radius: 4px;
-webkit-border-radius: 4px;
font-size:12px;
background-color:#FFFFFF;
border:1pt dashed #999999;
padding:4px;
font-family:arial;
}
table{
font-size:12px;
}
.submitButton{
	color:#fff;
	font-size:12px;
	height:28px;
	font-weight:bold;
	-moz-border-radius:4px;
	-khtml-border-radius: 4px;
	-webkit-border-radius: 4px;
	border:1px solid #cccccc;
	background-color:#FF3300;
	cursor:pointer;
	text-align:center;
}
.submitButton:hover{
	background-position:bottom;
	border-color:#dddddd;
	color:#0000;
	background-color:#FF0033;
}
</style>
<?php
include('../koneksi.php');
$query=mysql_query("select * from tbl_barang where id_barang='$_GET[id_barang]'");
$no=1;
while($r=mysql_fetch_array($query)){
echo"<form method='post' action='update-barang.php' enctype='multipart/form-data'><table>";
echo"<tr><td width='80'>Nama Barang</td><td> : </td><td><input type='text' name='nama' value='$r[nama_barang]' class='input' size='40'></td></tr>";
echo"<tr><td width='80'>Harga Barang</td><td> : </td><td><input type='text' name='harga' value='$r[harga]' class='input' size='40'></td></tr>";
echo"<tr><td width='80' valign='top'>Keterangan</td><td valign='top'> : </td><td><textarea name='keterangan' cols='40' rows='5' class='input'>$r[keterangan]</textarea></td></tr>";
echo"<tr><td width='80'>Gambar</td><td> : </td><td><input type='file' name='gambar' class='input' size='20'></td></tr>";
echo"<tr><td width='80'</td><td></td><td><input type='submit' class='submitButton' value='Update'><input type='hidden' name='id' value='$r[id_barang]'></td></tr>";
echo"</table></form>";
}
?>
