<?php
include('admin/lib/dbcon.php');
dbcon(); 
session_start();	
$username = $_POST['username'];
$password = $_POST['password'];

/*................................................ tbl_admin .....................................................*/
$query = "SELECT * FROM tbl_admin WHERE user_admin='$username' AND pass_admin='$password'";
$result = mysql_query($query)or die(mysql_error());
$row = mysql_fetch_array($result);
$num_row = mysql_num_rows($result);

/*...................................................Staff Teknis ..............................................*/
$query_client = mysql_query("SELECT * FROM client WHERE username='$username' AND password='$password'")or die(mysql_error());
$num_row_client = mysql_num_rows($query_client);
$row_client = mysql_fetch_array($query_client);

if( $num_row > 0 ) { 
	$_SESSION['id']=$row['id_admin'];
	echo 'true_admin';
	
	mysql_query("insert into user_log (username,login_date,id_admin)values('$username',NOW(),".$row['id_admin'].")")or die(mysql_error());
	
}else if ($num_row_client > 0){
	$_SESSION['client']=$row_client['client_id'];
	echo 'true';
	
	mysql_query("insert into user_log (username,login_date,client_id)values('$username',NOW(),".$row_client['client_id'].")")or die(mysql_error());
	
}else{ 
	echo 'false';
}	

?>