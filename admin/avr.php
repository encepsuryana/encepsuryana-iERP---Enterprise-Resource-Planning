<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('Device_sidebar.php'); ?>
			
				<div class="span9" id="content">
                     <div class="row-fluid">
					 <a href="add_device.php" class="btn btn-info"  id="add" data-placement="right" title="Click to Add Device" ><i class="icon-plus-sign icon-large"></i> Add Device</a>
					  <script type="text/javascript">
		              $(document).ready(function(){
		              $('#add').tooltip('show');
		              $('#add').tooltip('hide');
		              });
		             </script>
					 <h2 id="sc" align="center"><image src="images/sclogo.png" width="45%" height="45%"/></h2>
				<?php	
	             $count_item=mysql_query("select * from tbl_assets 
				 LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
				 where type_asset = 'AVR' OR type_asset = 'A.V.R'
			     OR type_asset = 'automatic Voltage Regulator' OR type_asset = 'automatic Voltage Reactor' OR type_asset = 'automatic_Voltage_Regulator' OR type_asset = 'automatic-Voltage-Regulator'
			     OR type_asset = 'avrs' OR type_asset = 'automatic v.r' OR type_asset = 'automatic voltage R.' OR type_asset = 'avregulator'
			     OR type_asset = 'automatic Voltage Reactor' OR type_asset = 'automatic-Voltage-Reactor' OR type_asset = 'automaticVoltageReactor'  OR type_asset = 'automaticVoltageRegulator'
			     OR type_asset = 'automtic Voltge Reactor'  OR type_asset = 'automtic Voltge Regulator'
		         ORDER BY tbl_assets.id DESC");
	             $count = mysql_num_rows($count_item);
                 ?>	
				   <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                             <div class="muted pull-left"><i class="icon-reorder icon-large"></i> Power Cord (s) List</div>
							  <div class="muted pull-right">
								Number of Power Cord (s): <span class="badge badge-info"><?php  echo $count; ?></span>
							 </div>
                          </div>
						  
				<h4 id="sc">AVR (s) List
					<div align="right" id="sc">Date:
						<?php
                            $date = new DateTime();
                            echo $date->format('l, F jS, Y');
                         ?></div>
				 </h4>		  
						  
						  
 <div class="container-fluid">
 <div class="row-fluid">						 
 <br/>
	<div class="pull-left">
			    <ul class="nav nav-pills">
				<li class="">
					<a href="device_stocks.php">All</a>
				</li>
					
			  <?php	
	           $count_item=mysql_query("select * from tbl_assets 
			   LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
			   where type_asset = 'Keyboard' OR type_asset = 'keyboard' OR type_asset = 'KEYBOARD'
			   OR type_asset = 'kyboard' OR type_asset = 'kboard' OR type_asset = 'kbard' OR type_asset = 'kbord'OR type_asset = 'kbrd' OR type_asset = '(keyboard)'
			   OR type_asset = '(kbrd)'
			   ORDER BY tbl_assets.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>					
				<li class="">
					<a href="Keyboard.php">Keyboard&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
				<?php	
	           $count_item=mysql_query("select * from tbl_assets 
			   LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
			   where type_asset = 'Mouse' OR type_asset = 'mouse'
               OR type_asset = 'muse' OR type_asset = 'mose'OR type_asset = 'mse' OR type_asset = 'MOUSE' OR type_asset = '(Mouse)'
			    OR type_asset = 'Mouse/PS2' OR type_asset = 'Mouse/USB' OR type_asset = 'Mouse(PS2)' OR type_asset = 'Mouse(USB)' 
				OR type_asset = 'Mouse-PS2' OR type_asset = 'Mouse-USB' OR type_asset = 'Mouse PS2' OR type_asset = 'Mouse USB'   
			   ORDER BY tbl_assets.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="Mouse.php">Mouse&nbsp;<span class="label label-default"> <?php echo $count;?></span></a></a>
				</li>
				
			   <?php	
	           $count_item=mysql_query("select * from tbl_assets 
			   LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
			   where type_asset = 'Monitor' OR type_asset = 'monitor'
               OR type_asset = 'montor' OR type_asset = 'monitr' OR type_asset = 'mnitor' OR type_asset = 'mntr' OR type_asset = 'MNTR'
			   OR type_asset = '(monitor)' OR type_asset = '(montor)'
			   ORDER BY tbl_assets.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="monitor.php">Monitor&nbsp;<span class="label label-default"> <?php echo $count;?></span></a></a></a>
				</li>
				
			 <?php	
	           $count_item=mysql_query("select * from tbl_assets 
			   LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
			   where type_asset = 'Central Processing unit (CPU)' OR type_asset = 'central processing unit' OR type_asset = 'central_processing_unit'
			   OR type_asset = 'cpu' OR type_asset = 'c_p_u' OR type_asset = 'c.p.u.'   OR type_asset = 'cntral prcessing unit' OR type_asset = 'centrl procesing unit' OR type_asset = 'central processing nit'
			   OR type_asset = 'cenRal processing unt' OR type_asset = 'cetral processin unit' OR type_asset = 'cetral_processin_unit' OR type_asset = 'centralprocessingunit' OR type_asset = 'CENTRAL PROCESSING UNIT'
			   OR type_asset = '(CPU)' OR type_asset = '(Central Processing unit (CPU))'
			   ORDER BY tbl_assets.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="cpu.php">CPU&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
			 <?php	
	           $count_item=mysql_query("select * from tbl_assets 
			   LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
			   where type_asset = 'Power Supply' OR type_asset = 'power supply'
			   OR type_asset = 'pwer supply' OR type_asset = 'power spply' OR type_asset = 'pwer suply' OR type_asset = 'poer Suply'
			   OR type_asset = 'powersupply' OR type_asset = 'power_supply' OR type_asset = 'power.supply' OR type_asset = 'pwer.spply'
			   OR type_asset = '(power supply)' OR type_asset = '(powersupply)' OR type_asset = '(power_supply)' OR type_asset = '(power-supply)'
			   OR type_asset = 'POWER SUPPLY'
			   ORDER BY tbl_assets.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="power_supply.php">Power Supply&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
				<?php	
	           $count_item=mysql_query("select * from tbl_assets 
			   LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
			   where type_asset = 'Video Graphic Accelerator (VGA)' OR type_asset = 'VGA'
			   OR type_asset = '(VGA)' OR type_asset = 'Video.Graphic.Accelerator' OR type_asset = 'Video-Graphic-Accelerator' OR type_asset = 'Video_Graphic_Accelerator'
			   OR type_asset = 'VideoGraphicAccelerator' OR type_asset = 'Video Graphic' OR type_asset = 'Vedio Graphic Acelerator' OR type_asset = 'VIDEO GRAPHIC ACCELATOR'
			   OR type_asset = 'VIDEO+GRAPHIC+ACCELATOR' OR type_asset = 'vido grphic' OR type_asset = 'viDo gRphic Accelarator'OR type_asset = 'video graphic accelarator'
			   OR type_asset = 'vedeo graphic' OR type_asset = 'video graphic accelerator' OR type_asset = 'videographicaccelerator'OR type_asset = 'vedio graphic accelerator'
			   ORDER BY tbl_assets.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="vga.php">VGA Ports&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
				<?php	
	           $count_item=mysql_query("select * from tbl_assets 
			   LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
			   where type_asset = 'Power Cords' OR type_asset = 'power cord'
			   OR type_asset = 'power_cord' OR type_asset = '(power cord)' OR type_asset = 'power.cord' OR type_asset = '(pwer crd)'
			   OR type_asset = 'powr coRd' OR type_asset = 'ower cord' OR type_asset = 'power cordss' OR type_asset = 'pwer crd'
			   OR type_asset = 'POWER CORD' OR type_asset = 'poer cd' OR type_asset = 'powe cor'  OR type_asset = 'powercord'
			   OR type_asset = 'powe cor'  OR type_asset = 'power-cord'
			   ORDER BY tbl_assets.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="power_cords.php">Power Cord&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
				<?php	
	           $count_item=mysql_query("select * from tbl_assets 
			   LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
			   where type_asset = 'AVR' OR type_asset = 'A.V.R'
			   OR type_asset = 'automatic Voltage Regulator' OR type_asset = 'automatic Voltage Reactor' OR type_asset = 'automatic_Voltage_Regulator' OR type_asset = 'automatic-Voltage-Regulator'
			   OR type_asset = 'avrs' OR type_asset = 'automatic v.r' OR type_asset = 'automatic voltage R.' OR type_asset = 'avregulator'
			   OR type_asset = 'automatic Voltage Reactor' OR type_asset = 'automatic-Voltage-Reactor' OR type_asset = 'automaticVoltageReactor'  OR type_asset = 'automaticVoltageRegulator'
			   OR type_asset = 'automtic Voltge Reactor'  OR type_asset = 'automtic Voltge Regulator'
		       ORDER BY tbl_assets.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="active">
				<a href="avr.php">AVR&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
				</ul>
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
					<th>Kode Asset</th>
			        <th>Device Brand  </th>
					<th>Device Model  </th>
					<th>Device Status  </th>	
                <th class="empty"></th>					
		    </tr>
		</thead>
<tbody>
<!-----------------------------------Content------------------------------------>
	
		<?php
	    $device_query = mysql_query("select * from tbl_assets 
		LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
		where type_asset = 'AVR' OR type_asset = 'A.V.R'
			   OR type_asset = 'automatic Voltage Regulator' OR type_asset = 'automatic Voltage Reactor' OR type_asset = 'automatic_Voltage_Regulator' OR type_asset = 'automatic-Voltage-Regulator'
			   OR type_asset = 'avrs' OR type_asset = 'automatic v.r' OR type_asset = 'automatic voltage R.' OR type_asset = 'avregulator'
			   OR type_asset = 'automatic Voltage Reactor' OR type_asset = 'automatic-Voltage-Reactor' OR type_asset = 'automaticVoltageReactor'  OR type_asset = 'automaticVoltageRegulator'
			   OR type_asset = 'automtic Voltge Reactor'  OR type_asset = 'automtic Voltge Regulator'
		       ORDER BY tbl_assets.id DESC") or die(mysql_error());
	    while ($row = mysql_fetch_array($device_query)) {
		$id = $row['id'];
		$id_asset = $row['id_asset'];
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
												
			<?php include('toolttip_edit_delete.php'); ?>												
			<td class="empty" width="80"><a rel="tooltip"  title="Edit Device" id="e<?php echo $id; ?>" href="device_edit.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil"> Edit</i> </a></td>
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