<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('assets_type_sidebar.php'); ?>
				<div class="span3" id="adduser">
				<?php include('edit_assets_type_form.php'); ?>		   			
				</div>
				<?php	
	             $count_type_asset=mysql_query("select * from tbl_asset_type");
	             $count = mysql_num_rows($count_type_asset);
                 ?>	
                <div class="span6" id="">
                     <div class="row-fluid">
                        <!-- block -->
					<div class="empty">
                          <div class="alert alert-success alert-dismissable">
                             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                             <i class="icon-info-sign"></i>  <strong>Note!:</strong> Select the checbox if you want to delete?
                          </div>
                    </div>
					 
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-folder-open-alt"></i> Tipe Aset (s) List</div>
								<div class="muted pull-right">
								Number of Tipe Aset: <span class="badge badge-info"><?php  echo $count; ?></span>
							 </div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form action="delete_client.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
									<a data-placement="right" title="Click to Delete check item"  data-toggle="modal" href="#client_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"> Delete</i></a>
									<script type="text/javascript">
									 $(document).ready(function(){
									 $('#delete').tooltip('show');
									 $('#delete').tooltip('hide');
									 });
									</script>
									<?php include('modal_delete.php'); ?>
										<thead>
										  <tr>
												<th></th>
												<th>Tipe Aset</th>																							
												<th></th>
										   </tr>
										</thead>
										<tbody>
													<?php
													$tbl_asset_type_query = mysql_query("select * from tbl_asset_type")or die(mysql_error());
													while($row = mysql_fetch_array($tbl_asset_type_query)){
													$id = $row['id_asset'];
													?>
									
												<tr>
												<td width="30">
												<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
												</td>

												<td><?php echo $row['type_asset']; ?></td>
											
												<?php include('toolttip_edit_delete.php'); ?>															
												<td width="75">
												<a rel="tooltip"  title="Edit Client" id="e<?php echo $id; ?>" href="edit_assets_type.php<?php echo '?id='.$id; ?>"  data-toggle="modal" class="btn btn-success"><i class="icon-pencil icon-large"> Edit</i></a>
												</td>
		
									
												</tr>
												<?php } ?>
										</tbody>
									</table>
									</form>
                                </div>
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