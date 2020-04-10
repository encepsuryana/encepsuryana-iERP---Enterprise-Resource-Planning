<?php 
	$my_device = mysql_query("select * from tbl_location_details    
	LEFT JOIN tbl_assets ON tbl_location_details.id = tbl_assets.id
	LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
	where NOT EXISTS 
    (select * from tbl_location_details where dev_status='Dump')
    and id_location = '$id_location' ")or die(mysql_error());
	$count_yes = mysql_num_rows($my_device);
?>

<?php 
	$my_device = mysql_query("select * from tbl_location_details    
	LEFT JOIN tbl_assets ON tbl_location_details.id = tbl_assets.id
	LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
	where NOT EXISTS 
    (select * from tbl_location_details where dev_status='Dump')
    and id_location =''")or die(mysql_error());
	$count_no = mysql_num_rows($my_device);
?>

<?php $not_count = $count_yes -  $count_no; ?>