<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>
<body>
	<?php include('navbar.php'); ?>
	<div class="container-fluid">
		<div class="row-fluid">
			<?php include('Device_sidebar.php'); ?>

			<div class="span9" id="content">
				<div class="row-fluid">
					<a href="add_device.php" class="btn btn-info"  id="add" data-placement="right" title="Click to Add Device" ><i class="fa fa-arrow-left"></i> Add Device</a>

					<script type="text/javascript">
						$(document).ready(function(){
							$('#add').tooltip('show');
							$('#add').tooltip('hide');
						});
					</script> 
					<!-- block -->
					<div id="" class="block">
						<div class="navbar navbar-inner block-header">
							<div class="muted pull-left"><a id="return" data-placement="bottom" title="Klik untuk kembali" href="device_stocks.php"><i class="fa fa-arrow-left"></i> Back</a> / Edit Device</div>
							<script type="text/javascript">
								$(document).ready(function(){
									$('#return').tooltip('show');
									$('#return').tooltip('hide');
								});
							</script>     
						</div>
						<div class="block-content collapse in">									

							<?php
							$query = mysql_query("select * from tbl_assets 
								LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
								where id = '$get_id'")or die(mysql_error());
							$row = mysql_fetch_array($query);
							?>

							<form class="form-horizontal" method="post">

								<div class="control-group">
									<label class="control-label" for="inputEmail">Tipe Aset</label>
									<div class="controls">			
										<select id="qtype" name="id_asset" required>

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
									<label class="control-label" for="inputPassword">Device Brand</label>
									<div class="controls">
										<input type="text" class="span8" value="<?php echo $row['dev_brand']; ?>" name="dev_brand" id="inputPassword" placeholder="Device Brand" required>
									</div>
								</div>

								<div class="control-group">
									<label class="control-label" for="inputPassword">Kode Asset</label>
									<div class="controls">
										<input type="text" class="span8" value="<?php echo $row['dev_serial']; ?>" name="dev_serial" id="inputPassword" placeholder="Device Serial Number" required>
									</div>
								</div>

								<div class="control-group">
									<label class="control-label" for="inputPassword">Device Model</label>
									<div class="controls">
										<input type="text" class="span8" value="<?php echo $row['dev_model']; ?>" name="dev_model" id="inputPassword" placeholder="Device Model" required>
									</div>
								</div>

								<div id="hide">
									<div class="control-group">
										<label class="control-label" for="inputPassword"  placeholder="Device Status" >Device Status</label>
										<div class="controls">
											<select value="" name="status_asset" required>
												<option><?php echo $row['status_asset']; ?></option>													
											</select>								
										</div>
									</div>
								</div>

								<div class="control-group">
									<label class="control-label" for="inputPassword">Description</label>
									<div class="controls">
										<textarea name="desc_asset" id="ckeditor_full">
											<?php echo $row['desc_asset']; ?>
										</textarea>
									</div>
								</div>

								<div class="control-group">
									<div class="controls">
										
										<button id="update" data-placement="right" title="Click to update" name="update" type="submit" class="btn btn-info"><i class="icon-save icon-large"></i> Update</button>
									</div>
								</div>
								<script type="text/javascript">
									$(document).ready(function(){
										$('#update').tooltip('show');
										$('#update').tooltip('hide');
									});
								</script> 
							</form>

							<?php
							if (isset($_POST['update'])){
								$id_asset = $_POST['id_asset'];
								$desc_asset = $_POST['desc_asset'];
								$dev_serial = $_POST['dev_serial'];
								$dev_brand = $_POST['dev_brand'];
								$dev_model = $_POST['dev_model'];
								$status_asset = $_POST['status_asset'];



								mysql_query("update tbl_assets set id_asset = '$id_asset' ,
									desc_asset = '$desc_asset',
									dev_serial  = '$dev_serial',
									dev_brand = '$dev_brand',
									dev_model = '$dev_model',
									status_asset = '$status_asset'
									where id = '$get_id' ")or die(mysql_error());

								mysql_query("insert into activity_log (date,user_admin,action) values(NOW(),'$admin_username','Edit device info $type_asset')")or die(mysql_error());
								?>
								<script>										
									window.location = "device_stocks.php";
									$.jGrowl("Device Successfully Update", { header: 'Device update' });
								</script>
								<?php
							}


							?>


						</div>
					</div>
					<!-- /block -->
				</div>
			</div>
		</div>
		<script>
			jQuery(document).ready(function(){
				jQuery("#opt11").hide();
				jQuery("#opt12").hide();
				jQuery("#opt13").hide();		

				jQuery("#qtype").change(function(){	
					var x = jQuery(this).val();			
					if(x == '1') {
						jQuery("#opt11").show();
						jQuery("#opt12").hide();
						jQuery("#opt13").hide();
					} else if(x == '2') {
						jQuery("#opt11").hide();
						jQuery("#opt12").show();
						jQuery("#opt13").hide();
					}
				});

			});
		</script>
		<?php include('footer.php'); ?>
	</div>
	<?php include('script.php'); ?>
</body>

</html>