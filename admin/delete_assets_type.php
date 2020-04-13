<?php
include('./lib/dbcon.php');
dbcon();
if (isset($_POST['delete_type_asset'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysql_query("DELETE FROM tbl_asset_type where id_asset='$id[$i]'");
}
header("location: assets_type.php");
}
?>