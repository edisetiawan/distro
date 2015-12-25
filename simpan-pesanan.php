<?php
session_start();
if(empty($_SESSION[namamember])){
?>
	<script type="text/javascript">
		alert("Anda tak berhak masuk ke halaman ini...!!!");
	</script>
<?php
	echo "<meta http-equiv='refresh' content='0; url=index.php'>";
}
else{
include('koneksi.php');
$id_b=$_POST['id_barang'];
$id_m=$_POST['id_member'];
$u=$_POST['ukuran'];
$b=$_POST['banyak'];
mysql_query("insert into tbl_pesanan (id_barang,id_member,ukuran,banyak) values ('$id_b','$id_m','$u','$b')");
?>
	<script type="text/javascript">
		alert("Pesan Terkirim...!!!");
	</script>
<?php
	echo "<meta http-equiv='refresh' content='0; url=index.php'>";
}
?>