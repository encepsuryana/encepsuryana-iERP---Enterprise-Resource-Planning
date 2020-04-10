<?php
include('./lib/dbcon.php');
dbcon();
if (isset($_POST['delete_user'])){
	$id=$_POST['selector'];
	$N = count($id);
	for($i=0; $i < $N; $i++)
	{
		$result = mysql_query("DELETE FROM tbl_admin where id_admin='$id[$i]'");
	}
	header("location: admin_user.php");
}
?>