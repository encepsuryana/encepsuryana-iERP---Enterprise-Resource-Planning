<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
    <body id="home">
		<?php include('navbar_client.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('damage_slidebar.php'); ?>
			
				<div class="span9" id="content">
                     <div class="row-fluid">					 
					 <h2 id="sc" align="center"><image src="../admin/images/sclogo.png" width="45%" height="45%"/></h2>
				<?php	
	             $count_item=mysql_query("select * from tbl_assets 
				 LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
				 where status_asset = 'damage' OR status_asset = 'Damage' ORDER BY tbl_assets.id DESC ");
	             $count = mysql_num_rows($count_item);
                 ?>	 
				   <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                             <div class="muted pull-left"><i class="icon-remove-sign"></i> Damage device Stock (s) List</div>
                          <div class="muted pull-right">
								Number of Device: <span class="badge badge-info"><?php  echo $count; ?></span>
							 </div>
						  </div>
						  
                <h4 id="sc">Damage device Stock List
					<div align="right" id="sc">Date:
						<?php
                            $date = new DateTime();
                            echo $date->format('l, F jS, Y');
                         ?></div>
				 </h4>   							  
 <br />															
 <div class="container-fluid">
   <div class="row-fluid"> 
   <div class="empty">
	   <div class="pull-right">	    
	     <a href="print_damage.php" class="btn btn-info" id="print" data-placement="left" title="Click to Print"><i class="icon-print icon-large"></i> Print List</a> 
		 <script type="text/javascript">
		$(document).ready(function(){
		$('#print').tooltip('show');
		$('#print').tooltip('hide');
		});
		</script> 
       </div>
   </div>
</div>
</div>
	
<div class="block-content collapse in">
    <div class="span12">
	<form action="" method="post">
  	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
		<thead>		
		        <tr>			        
					<th class="empty"></th>
					<th>Tipe Aset</th>
					<th>Device Description </th>
					<th>Kode Asset </th>
			        <th>Device Brand  </th>
					<th>Device Model  </th>
					<th>Device Status  </th>					
                    <th>location Name </th>
					<th class="empty"></th>
		    </tr>
		</thead>
<tbody>
<!-----------------------------------Content------------------------------------>
<?php
		$device_query = mysql_query("select * from tbl_assets			
		                     LEFT JOIN tbl_location_details ON tbl_assets.id = tbl_location_details.id		
		                     LEFT JOIN tbl_location ON tbl_location_details.id_location = tbl_location.id_location
							 LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
							 where status_asset = 'damage' ORDER BY tbl_location_details.ld_id DESC")or die(mysql_error());
		while($row = mysql_fetch_array($device_query)){
		$id = $row['id'];
		$id_location = $row['id_location'];
		$status_asset = $row['status_asset'];
		?>
										
		<tr>
		<td class="empty">
			<i class="icon-remove-sign"></i>
		</td>
			<td><?php echo $row['type_asset']; ?></td>
			<td><?php echo $row['desc_asset']; ?></td>
			<td><?php echo $row['dev_serial']; ?></td>
			<td><?php echo $row['dev_brand']; ?></td>
			<td><?php echo $row['dev_model']; ?></td>
			<td><?php
			   $device_query1 = mysql_query("select * from tbl_assets ")or die(mysql_error());
		       $dev=mysql_fetch_assoc($device_query1);
		       if($row['status_asset']=='Damage')
		       {
			   echo '<div class="alert alert-danger"><i class="icon-remove-sign"></i><strong>'.$row['status_asset'].'</strong></div>';
		       }		       
		       else
			   {
			   echo '<div class="alert alert-warning"><i class="icon-wrench"></i> <strong>'.$row['status_asset'].'</strong></div>';
		       };
			  ?></td>
			  
			<td><?php echo $row['stdev_location_name']; ?></td>
			
			<?php include('modal_damage.php'); ?>
			<?php include('toolttip_edit_delete.php'); ?>
			<?php if ($status_asset == 'Repaired' ){ ?>
			<td><a class="btn btn-success">Repaired</a></td>	
			<?php }else if ($status_asset == 'Damage' ) { ?>
			<td><a rel="tooltip" title="Repair" id="e<?php echo $id; ?>" href="#repair<?php echo $id; ?>" data-toggle="modal" class="btn btn-success"><div class="hide">Damage</div>Repair</a></td>
			<?php }else{ ?>			
			<?php } ?>
			<td><a rel="tooltip" title="Dump" id="t<?php echo $id; ?>" href="#Dump<?php echo $id; ?>" data-toggle="modal" class="btn btn-danger">DUMP</a></td>
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

	
<?php include('footer.php'); ?>
</div>
<?php include('script.php'); ?>
 </body>
</html>