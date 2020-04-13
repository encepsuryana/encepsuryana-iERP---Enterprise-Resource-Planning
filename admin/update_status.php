<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
					<?php include('newdevice_slidebar.php'); ?>
		
						<div class="span9" id="content">
		                    <div class="row-fluid">
									
		                        <!-- block -->
		                        <div id="" class="block">
		                            <div class="navbar navbar-inner block-header">
		                                <div class="muted pull-left">Update Status</div>
										<div class="muted pull-right"><a id="return" data-placement="left" title="Klik untuk kembali" href="Newdevice.php"><i class="icon-arrow-left"></i> Back</a>
										</div>
										<script type="text/javascript">
										$(document).ready(function(){
										$('#return').tooltip('show');
										$('#return').tooltip('hide');
										});
										</script>  
		                            </div>
									
									
									 
		                            <div class="block-content collapse in">
									
								    <div class="container-fluid">
                                     <div class="row-fluid">
			 					     <div class="alert alert-danger">
                                     <strong>Note!</strong> Update Status of device didn't display in the New device list.
                                     </div>
									 </div>
									 </div>
									 
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
											<label class="control-label" for="inputPassword"  placeholder="Device Status" >Device Status</label>
											<div class="controls">
											<select value="" name="status_asset" required>
													<option><?php echo $row['status_asset']; ?></option>																										
													<option>Use</option>
												</select>								
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
										$status_asset = $_POST['status_asset'];																
									
										mysql_query("update tbl_assets set 
										            id_asset = '$id_asset',																		
													status_asset = '$status_asset'
													where id = '$get_id' ")or die(mysql_error());
													
										mysql_query("insert into activity_log (date,user_admin,action) values(NOW(),'$admin_username','Update Status $type_asset to $status_asset')")or die(mysql_error());			
										?>
										<script>
										window.location = "newdevice.php";
										$.jGrowl("Device Status Successfully Update", { header: 'Device Status Update' });
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
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>

</html>