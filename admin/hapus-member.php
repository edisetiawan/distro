<?php
session_start();
include('../koneksi.php');
if (empty($_SESSION[admin])){
	echo "<meta http-equiv='refresh' content='0; url=../index.php'>";
}
else{
$query=mysql_query("delete from tbl_member where id_member='$_GET[id_member]'") or die (mysql_error());
	echo "<meta http-equiv='refresh' content='0; url=member.php'>";
}
?>