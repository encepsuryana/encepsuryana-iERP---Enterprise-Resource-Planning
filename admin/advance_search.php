<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php
$type_asset = $_POST['type_asset'];
$dev_serial = $_POST['dev_serial'];
$stdev_location_name = $_POST['stdev_location_name'];
?>
<body>
	<?php include('navbar.php'); ?>
	<div class="container-fluid">
		<div class="row-fluid">
			<?php include('advance_search_slidebar.php'); ?>
			<div class="span9" id="content">
				<div class="row-fluid">
					
					<div class="empty">
						<div class="alert alert-success">
							<strong> Advance Search Result List</strong>
						</div>
					</div>
					
					<h2 id="sc" align="center"><image src="images/sclogo.png" width="45%" height="45%"/></h2>
					<?php	
					$count_item=mysql_query("select * from tbl_assets			
						LEFT JOIN tbl_location_details ON tbl_assets.id = tbl_location_details.id		
						LEFT JOIN tbl_location ON tbl_location_details.id_location = tbl_location.id_location
						LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
						where type_asset LIKE '%$type_asset%' 
						and stdev_location_name LIKE '%$stdev_location_name%'
						and dev_serial LIKE '%$dev_serial%'");
					$count = mysql_num_rows($count_item);
					?>	 
					<div id="block_bg" class="block">
						<div class="navbar navbar-inner block-header">
							<div class="muted pull-left"><i class="icon-reorder icon-large"></i> Device Search Result List</div>
							<div class="muted pull-right">
								Number of Search Device : <span class="badge badge-info"><?php  echo $count; ?></span>
							</div>
						</div>
						
						<h4 id="sc">Device List 
							<div align="right" id="sc">Date:
								<?php
								$date = new DateTime();
								echo $date->format('l, F jS, Y');
								?></div>
							</h4>						  
							
							<br/>
							
							<div class="block-content collapse in">
								<div class="span12">
									<form action="" method="post">
										<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
											<thead>		
												<tr>			        
													<th class="empty"></th>
													<th>Tipe Aset</th>
													<th>Device Description </th>
													<th>Device Serial Number  </th>
													<th>Device Brand  </th>
													<th>Device Model  </th>
													<th>Device Status  </th>
													<th>location Name </th>
													
												</tr>
											</thead>
											<tbody>
												<?php
												$search_query = mysql_query("select * from tbl_assets			
													LEFT JOIN tbl_location_details ON tbl_assets.id = tbl_location_details.id		
													LEFT JOIN tbl_location ON tbl_location_details.id_location = tbl_location.id_location
													LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
													where type_asset LIKE '%$type_asset%' 
													and stdev_location_name LIKE '%$stdev_location_name%'
													and dev_serial LIKE '%$dev_serial%'")or die(mysql_error());
												while($row = mysql_fetch_array($search_query)){
													$id = $row['id'];
													$id_location = $row['id_location'];	
													?>
													<tr>
														<td><?php
														$device_query2 = mysql_query("select * from tbl_assets ")or die(mysql_error());
														$dev=mysql_fetch_assoc($device_query2);
														if($row['status_asset']=='New')
														{
															echo '<i class="icon-check"></i><div id="hide"><strong>'.$row['status_asset'].'</strong></div>';
														}
														else if($row['status_asset']=='Used')
														{
															echo '<i class="icon-ok"></i><div id="hide"><strong>'.$row['status_asset'].'</strong></div>';
														}
														else if($row['status_asset']=='Repaired')
														{
															echo '<i class="icon-wrench"></i><div id="hide"><strong>'.$row['status_asset'].'</strong></div>';
														}
														else
														{
															echo '<i class="icon-remove-sign"></i><div id="hide"><strong>'.$row['status_asset'].'</strong></div>';
														};
														?>
													</td>
													<td><?php echo $row['type_asset']; ?></td>
													<td><?php echo $row['desc_asset']; ?></td>
													<td><?php echo $row['dev_serial']; ?></td>
													<td><?php echo $row['dev_brand']; ?></td>
													<td><?php echo $row['dev_model']; ?></td>
													<td><?php
													$device_query1 = mysql_query("select * from tbl_assets ")or die(mysql_error());
													$dev=mysql_fetch_assoc($device_query1);
													if($row['status_asset']=='New')
													{
														echo '<div class="alert alert-success"><i class="icon-check"></i><strong>'.$row['status_asset'].'</strong></div>';
													}
													else if($row['status_asset']=='Used')
													{
														echo '<div class="alert alert-warning"><i class="icon-ok"></i><strong>'.$row['status_asset'].'</strong></div>';
													}
													else if($row['status_asset']=='Repaired')
													{
														echo '<div class="alert alert-warning"><i class="icon-wrench"></i><strong>'.$row['status_asset'].'</strong></div>';
													}
													else
													{
														echo '<div class="alert alert-danger"><i class="icon-remove-sign"></i><strong>'.$row['status_asset'].'</strong></div>';
													};
													?></td>
													<td><?php echo $row['stdev_location_name']; ?></td>
													
												</tr>
												
											<?php } ?>   

										</tbody>
									</table>
								</form>		
								
								
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>	
		<?php include('footer.php'); ?>
	</div>
	<?php include('script.php'); ?>
</body>
</html>