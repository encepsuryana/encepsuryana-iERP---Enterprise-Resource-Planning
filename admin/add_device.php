<?php include('header.php'); ?>
<?php include('session.php'); ?>
<body>
	<?php include('navbar.php'); ?>
	<div class="container-fluid">
		<div class="row-fluid">
			<?php include('Device_sidebar.php'); ?>

			<div class="span9" id="content">
				<div class="row-fluid">

					<!-- block -->
					<div class="block">
						<div class="navbar navbar-inner block-header">
							<div class="muted pull-left"><a id="return" data-placement="bottom" title="Klik untuk kembali" href="device_stocks.php"><i class="fa fa-arrow-left"></i> Back</a> / Add Device</div>

							<script type="text/javascript">
								$(document).ready(function(){
									$('#return').tooltip('show');
									$('#return').tooltip('hide');
								});
							</script>                          
						</div>

						<div class="block-content collapse in">	
							<div class="alert alert-success"><i class="icon-info-sign"></i> Please Fill in required details</div>						
							<form class="form-horizontal" method="post">											
								
								<div class="control-group">
									<label class="control-label" for="inputEmail">Device Name</label>
									<div class="controls">
										<select name="id_asset" class="chzn-select" required/>
										<option></option>
										<?php $tbl_asset_type=mysql_query("select * from tbl_asset_type")or die(mysql_error()); 
										while ($row=mysql_fetch_array($tbl_asset_type)){ 												
											?>
											<option value="<?php echo $row['id_asset']; ?>&nbspName&nbsp<?php echo $row['dev_name']; ?>"><?php echo $row['dev_name']; ?></option>
										<?php } ?>
									</select>
								</div>
							</div>


							<div class="control-group">
								<label class="control-label" for="inputPassword">Device Brand</label>
								<div class="controls">
									<input type="text" class="span8" name="dev_brand" id="inputPassword" placeholder="Device Brand" required>
								</div>
							</div>

							<div class="control-group">
								<label class="control-label" for="inputPassword">Inventory Code</label>
								<div class="controls">
									<input type="text" class="span8" name="dev_serial" id="inputPassword" placeholder="Device Serial Number" required>
								</div>
							</div>

							<div class="control-group">
								<label class="control-label" for="inputPassword">Device Model</label>
								<div class="controls">
									<input type="text" class="span8" name="dev_model" id="inputPassword" placeholder="Device Model" required>
								</div>
							</div>

							<div id="control-group">
								<div class="control-group">
									<label class="control-label" for="inputPassword"  placeholder="Device Status" >Device Status</label>
									<div class="controls">
										<select name="dev_status" class="chzn-select" required>										
											<option>New</option>																									
										</select>								
									</div>
								</div>
							</div>

							<div class="control-group">
								<label class="control-label" for="inputPassword">Description</label>
								<div class="controls">
									<textarea name="dev_desc" id="ckeditor_full"></textarea>
								</div>
							</div>

							<div class="control-group">
								<div class="controls">
									<button name="save" id="save" name="singlebutton" data-placement="right" title="Click here to Save your new data." class="btn btn-primary"><i class="icon-save"></i> Save</button>				
								</div>
							</div>
							<script type="text/javascript">
								$(document).ready(function(){
									$('#save').tooltip('show');
									$('#save').tooltip('hide');
								});
							</script>
						</form>
						<?php
						if (isset($_POST['save'])){
							$id_asset = $_POST['id_asset'];
							$dev_desc = $_POST['dev_desc'];
							$dev_serial = $_POST['dev_serial'];
							$dev_brand = $_POST['dev_brand'];
							$dev_model = $_POST['dev_model'];
							$dev_status = $_POST['dev_status'];


							$query = mysql_query("select * from tbl_assets where dev_serial = '$dev_serial' ")or die(mysql_error());
							$count = mysql_num_rows($query);

							if ($count > 0){ ?>
								<script>
									alert('Device Code Already Exist');
									window.location = "device_stocks.php";
								</script>
								<?php
							}else{
								mysql_query("insert into tbl_assets (id_asset,dev_desc,dev_serial,dev_brand,dev_model,dev_status) values('$id_asset','$dev_desc','$dev_serial','$dev_brand','$dev_model','$dev_status')")or die(mysql_error());
								mysql_query("insert into activity_log (date,username,action) values(NOW(),'$admin_username','Add device Detail id $id_asset')")or die(mysql_error());											
								?>
								<script>
									window.location = "device_stocks.php";
									$.jGrowl("Device Successfully added", { header: 'Device add' });
								</script>
								<?php
							}
						}
						?>

					</div>
				</div>
				<!-- /block -->
			</div>
		</div>
	</div>
	<?php include('footer.php'); ?>
</div>
<?php include('script.php'); ?>
</body>