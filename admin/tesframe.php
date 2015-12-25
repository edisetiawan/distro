<link href="../css/style.css" rel="stylesheet" type="text/css" />
<link href="../css/highslide.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../js/highslide-with-html.js"></script>
<link rel="shortcut icon" href="../images/icon.png" />
<title>ZenWalk Distro Clothing</title>
<script type="text/javascript">
hs.graphicsDir = 'http://localhost/distro/images/';
hs.outlineType = 'rounded-white';
hs.wrapperClassName = 'draggable-header';
</script>
<a href='edit.php?id_barang=$r[id_barang]' onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\"><div  class='submitButton3'>Update Item</div></a></br></br></br>
<?
include('../koneksi.php');
$query=mysql_query("select * from tbl_barang order by id_barang desc");

while($r=mysql_fetch_array($query))
{
echo"
<a href='edit.php?id_barang=$r[id_barang]' onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\"><div  class='submitButton3'>Update Item</div></a>
";
}
?>