<?php
include('../koneksi.php');
$p=md5($_POST[pass]);
$query=mysql_query("update tbl_user set pass='$p' where id_user='$_POST[id]'") or die (mysql_error());
	echo "<meta http-equiv='refresh' content='0; url=password.php'>";
?>