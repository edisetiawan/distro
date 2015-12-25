<?php
include('../koneksi.php');
$lokasi_file=$_FILES[gambar][tmp_name];
if(empty($lokasi_file))
{
$query=mysql_query("update tbl_barang set nama_barang='$_POST[nama]', harga='$_POST[harga]', keterangan='$_POST[keterangan]' where id_barang='$_POST[id]'") or die (mysql_error());
echo"Sukses melakukan update data..!!";
}
else{
$lokasi_file=$_FILES[gambar][tmp_name];
$nama_file=$_FILES[gambar][name];
move_uploaded_file($lokasi_file,"../barang/$nama_file");
$query=mysql_query("update tbl_barang set nama_barang='$_POST[nama]', harga='$_POST[harga]', keterangan='$_POST[keterangan]', gambar='$nama_file' where id_barang='$_POST[id]'") or die (mysql_error());
echo"Sukses melakukan update data..!!";
}
?>