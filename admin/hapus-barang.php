<?php
session_start();
include('../koneksi.php');
if (empty($_SESSION[admin])){
	echo "<meta http-equiv='refresh' content='0; url=../index.php'>";
}
else{
$query=mysql_query("delete from tbl_barang where id_barang='$_GET[id_barang]'") or die (mysql_error());
	echo "<meta http-equiv='refresh' content='0; url=product.php'>";
}
?>