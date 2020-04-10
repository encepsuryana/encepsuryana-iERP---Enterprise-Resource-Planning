<?php
include('./lib/dbcon.php'); 
dbcon(); 
if (isset($_POST['delete_location'])){
	$id=$_POST['selector'];
	$N = count($id);
	for($i=0; $i < $N; $i++)
	{
		$result = mysql_query("DELETE FROM tbl_location where id_location='$id[$i]'");
	}
	header("location: location.php");
}
?>