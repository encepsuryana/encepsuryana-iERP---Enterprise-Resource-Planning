<?php
include('./lib/dbcon.php');
dbcon();
if (isset($_POST['delete_dev_name'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysql_query("DELETE FROM tbl_asset_type where id_asset='$id[$i]'");
}
header("location: dev_name.php");
}
?>