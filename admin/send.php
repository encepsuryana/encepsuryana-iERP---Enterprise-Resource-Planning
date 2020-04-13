<?php
include('./lib/dbcon.php'); 
dbcon();
include('session.php');
$id=$_POST['selector'];
$id_location  = $_POST['id_location'];


if ($id == '' ){ 
	header("location: device_location.php");
	?>
	

<?php }else{
	
	$query = mysql_query("select * from tbl_location_details order by ld_id DESC")or die(mysql_error());
	$row = mysql_fetch_array($query);
	$ld_id  = $row['ld_id'];
	

	$N = count($id);
	for($i=0; $i < $N; $i++)
	{
		$oras = strtotime("now");
		$ora = date("Y-m-d",$oras);
		mysql_query("insert tbl_location_details (id,id_location,date_deployment) values('$id[$i]','$id_location','$ora')")or die(mysql_error());
		mysql_query("insert into activity_log (date,user_admin,action) values(NOW(),'$admin_username','Assign Device id $id[$i] to location id $id_location')")or die(mysql_error());		
	}
	header("location: device_location.php");
}  
?>




