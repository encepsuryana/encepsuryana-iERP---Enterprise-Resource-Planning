<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php $id_location = $_GET['id_location']; ?>
<?php $get_id = $_GET['id']; ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('device_location_slidebar.php'); ?>
		
						<div class="span9" id="content">
		                    <div class="row-fluid">
								
                          <div class="empty">
			 	             <div class="alert alert-success">
                              <strong>they will redirect move to the location you select</strong>
                            </div>
			               </div>
						   
						    <?php $location_query = mysql_query("select * from tbl_location	                     
	                         where id_location = '$id_location'")or die(mysql_error());
	                         $location_row = mysql_fetch_array($location_query);
	                        ?>	
		                        <!-- block -->
		                        <div id="" class="block">
		                            <div class="navbar navbar-inner block-header">
		                                <div class="muted pull-left">From:&nbsp;<?php echo $location_row['stdev_location_name']; ?>Transfer Device</div>
										<div class="muted pull-right">
										<a id="return" data-placement="left" title="Klik untuk kembali" href="mydevice.php<?php echo '?id_location='.$id_location; ?>"><i class="icon-arrow-left"></i> Back</a>
										</div>
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
											<label class="control-label" for="inputEmail">Device Name</label>
											<div class="controls">			
												<select id="qtype" name="id_asset" readonly="readonly" required>

													<option value="<?php echo $row['id_asset']; ?>" ><?php echo $row['dev_name']; ?></option>
													<?php
													$device_query = mysql_query("select * from tbl_asset_type")or die(mysql_error());
													while($query_device_row = mysql_fetch_array($device_query)){
													$dev_name = $row['dev_name'];
													?>
													<option value="<?php echo $query_device_row['id_asset']; ?>"><?php echo $query_device_row['dev_name'];  ?></option>
													<?php } ?>

												</select>
											</div>
										</div>
												
										<div class="control-group">
		                                  <label class="control-label" for="inputEmail">Move TO</label>
			                                <div class="controls">
				                            <select name="id_location" class="" required/>
				                            <option></option>
			                                 <?php $result =  mysql_query("select * from tbl_location")or die(mysql_error()); 
			                                  while ($row=mysql_fetch_array($result)){ ?>
				                             <option value="<?php echo $row['id_location']; ?>&nbspName&nbsp<?php echo $row['stdev_location_name']; ?>"><?php echo $row['stdev_location_name']; ?></option>
				                             <?php } ?>
				                           </select>
		                                </div>
	                                   </div>
										
								
										<div class="control-group">
										<div class="controls">
										
										<button id="move" data-placement="right" title="Click to Move Device" name="transfer" type="submit" class="btn btn-warning"><i class="icon-move"></i> Move</button>
										</div>
										</div>
										<script type="text/javascript">
										$(document).ready(function(){
										$('#move').tooltip('show');
										$('#move').tooltip('hide');
										});
										</script>  
										</form>
										
										<?php
										if (isset($_POST['transfer'])){	
										$oras = strtotime("now");
										$ora = date("Y-m-d",$oras);
										$id_location = $_POST['id_location'];										
										mysql_query("update tbl_location_details set
										            date_deployment = '$ora',
													id_location = '$id_location'													
													where id = '$get_id' ")or die(mysql_error());
													
										mysql_query("insert into activity_log (date,user_admin,action) values(NOW(),'$admin_username','transfer Device  $dev_name to location id $id_location')")or die(mysql_error());			
										?>
										<script>
										window.location = "mydevice.php<?php echo '?id_location='.$id_location; ?>"; 
										$.jGrowl("Device Transfer Successfully", { header: 'Device Transfer' });
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