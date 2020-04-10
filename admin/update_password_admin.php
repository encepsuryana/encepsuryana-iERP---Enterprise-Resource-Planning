 <?php
 include('./lib/dbcon.php'); 
 dbcon(); 
 include('session.php');
 $new_password  = $_POST['new_password'];
 mysql_query("update tbl_admin set pass_admin = '$new_password' where id_admin = '$session_id'")or die(mysql_error());
 ?>