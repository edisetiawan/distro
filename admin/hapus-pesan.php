<?php
session_start();
include('../koneksi.php');
if (empty($_SESSION[admin])){
	echo "<meta http-equiv='refresh' content='0; url=../index.php'>";
}
else{
$query=mysql_query("delete from tbl_hubungi where id_hubungi='$_GET[id_hubungi]'") or die (mysql_error());
	echo "<meta http-equiv='refresh' content='0; url=hubungi.php'>";
}
?>