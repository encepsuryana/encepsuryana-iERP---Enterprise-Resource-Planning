 <?php
 include('./lib/dbcon.php'); 
 dbcon(); 
 include('session.php');
 
 
 if (isset($_POST['change'])) {
 	

 	$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
 	$image_name = addslashes($_FILES['image']['name']);
 	$image_size = getimagesize($_FILES['image']['tmp_name']);

 	move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/" . $_FILES["image"]["name"]);
 	$pict_admin = "uploads/" . $_FILES["image"]["name"];
 	
 	mysql_query("update tbl_admin set pict_admin = '$pict_admin' where id_admin  = '$session_id' ")or die(mysql_error());
 	
 	?>
 	
 	<script>
 		window.location = "dashboard.php";  
 	</script>

 	<?php     }  ?>