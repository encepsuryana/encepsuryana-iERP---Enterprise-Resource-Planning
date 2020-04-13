<?php
include('./lib/dbcon.php'); 
dbcon(); 
include('session.php');
$get_id = $_GET['id'];
 
	$query = mysql_query("select * from tbl_assets 
		LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
		where id = '$get_id'")or die(mysql_error());
		$row = mysql_fetch_array($query);
?>
<div class="hide">									
	<form class="form-horizontal" method="post">
									 
	<div class="control-group">
	  <label class="control-label" for="inputEmail">Tipe Aset</label>
		<div class="controls">			
			<select id="qtype" name="id_asset" readonly="readonly" required>

			<option value="<?php echo $row['id_asset']; ?>" ><?php echo $row['type_asset']; ?></option>
				<?php
				$device_query = mysql_query("select * from tbl_asset_type")or die(mysql_error());
				while($query_device_row = mysql_fetch_array($device_query)){
				$type_asset = $row['type_asset'];
				?>
				<option value="<?php echo $query_device_row['id_asset']; ?>"><?php echo $query_device_row['type_asset'];  ?></option>
				<?php } ?>

				</select>
			</div>
      </div>
<div class="control-group">
	  <label class="control-label" for="inputEmail">Device Serial</label>
		<div class="controls">			
			<select id="qtype" name="dev_serial" readonly="readonly" required>

			<option value="<?php echo $row['id']; ?>" ><?php echo $row['dev_serial']; ?></option>
				<?php
				$device_query = mysql_query("select * from tbl_assets")or die(mysql_error());
				while($query_device_row = mysql_fetch_array($device_query)){
				$dev_serial = $row['dev_serial'];
				?>
				<option value="<?php echo $query_device_row['id']; ?>"><?php echo $query_device_row['dev_serial'];  ?></option>
				<?php } ?>

				</select>
			</div>
      </div>	  
</form>
</div>
<?php 
mysql_query("update tbl_assets set status_asset='Repaired' where id = '$get_id'")or die(mysql_error());
mysql_query("insert into activity_log (date,user_admin,action) values(NOW(),'$admin_username','Repair Device $type_asset Inventory Code:$dev_serial')")or die(mysql_error());						
header('location:damage.php');
?>	