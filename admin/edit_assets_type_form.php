<div class="row-fluid">				  
   <a href="assets_type.php" class="btn btn-info" id="add" data-placement="right" title="Click to Add Client" ><i class="icon-plus-sign icon-large"></i> Add Tipe Aset</a>
   <script type="text/javascript">
	$(document).ready(function(){
	$('#add').tooltip('show');
	$('#add').tooltip('hide');
	});
	</script> 
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-pencil icon-large"></i> Edit Tipe Aset</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<?php
								$query = mysql_query("select * from tbl_asset_type where id_asset = '$get_id'")or die(mysql_error());
								$row = mysql_fetch_array($query);
								?>
								
								 <!-- --------------------form ---------------------->						
								<form method="post">
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['type_asset']; ?>" name="type_asset" id="focusedInput" type="text" placeholder = "Tipe Aset" required>
                                          </div>
                                        </div>
										
											<div class="control-group">
                                          <div class="controls">
												<button name="update" class="btn btn-success" id="update" data-placement="right" title="Click to Update"><i class="icon-save icon-large"> Update</i></button>
                                                <script type="text/javascript">
	                                            $(document).ready(function(){
	                                            $('#update').tooltip('show');
	                                            $('#update').tooltip('hide');
	                                            });
	                                            </script>
                                          </div>
                                        </div>
                                </form>
										
					</div>
                </div>
            </div>
              <!-- /block -->
      </div>
<?php		
if (isset($_POST['update'])){

$type_asset = $_POST['type_asset'];

mysql_query("update tbl_asset_type set type_asset = '$type_asset'  where id_asset = '$get_id' ")or die(mysql_error());

mysql_query("insert into activity_log (date,user_admin,action) values(NOW(),'$admin_username','Edit Device Type $type_asset')")or die(mysql_error());	
?>
<script>
  window.location = "assets_type.php";
 $.jGrowl("Tipe Aset Successfully Update", { header: 'Tipe Aset Update' });  
</script>
<?php
}
?>