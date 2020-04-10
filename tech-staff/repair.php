<?php
include('../admin/lib/dbcon.php');
dbcon(); 
include('session.php');
$get_id = $_GET['id'];
 
	$query = mysql_query("select * from tbl_assets 
		LEFT JOIN device_name ON tbl_assets.id_asset=device_name.id_asset
		where id = '$get_id'")or die(mysql_error());
		$row = mysql_fetch_array($query);
?>
<div class="hide">									
	<form class="form-horizontal" method="post">
									 
	<div class="control-group">
	  <label class="control-label" for="inputEmail">Device Name</label>
		<div class="controls">			
			<select id="qtype" name="id_asset" readonly="readonly" required>

			<option value="<?php echo $row['id_asset']; ?>" ><?php echo $row['dev_name']; ?></option>
				<?php
				$device_query = mysql_query("select * from device_name")or die(mysql_error());
				while($query_device_row = mysql_fetch_array($device_query)){
				$dev_name = $row['dev_name'];
				?>
				<option value="<?php echo $query_device_row['id_asset']; ?>"><?php echo $query_device_row['dev_name'];  ?></option>
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
mysql_query("update tbl_assets set dev_status='Repaired' where id = '$get_id'")or die(mysql_error());
mysql_query("insert into notification (fullname,notification,date_of_notification,link) 
			value('$client_fullname','Repair $dev_name, Serial Number: $dev_serial' ,NOW(), 'device_stocks.php')")or die(mysql_error());					
header('location:damage.php');
?>	