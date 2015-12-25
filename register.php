<?php
session_start();
if(!empty($_SESSION[namamember])){
?>
	<script type="text/javascript">
		alert("Anda sudah Log In...!!! Tidak berhak mendaftar kembali...!!");
	</script>
<?php
	echo "<meta http-equiv='refresh' content='0; url=index.php'>";
}
else{
include('koneksi.php');
$nama=$_POST['nama'];
$user=md5($_POST['user']);
$pass=$_POST['pass'];
mysql_query("insert into tbl_member (user,pass,nama) values ('$nama','$user','$pass')");
?>
	<script type="text/javascript">
		alert("Pesan Terkirim...!!! Sekarang anda bisa Log In...!!");
	</script>
<?php
	echo "<meta http-equiv='refresh' content='0; url=index.php'>";
}
?>