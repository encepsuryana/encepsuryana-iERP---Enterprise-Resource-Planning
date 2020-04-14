<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('damage_slidebar.php'); ?>
			
				<div class="span9" id="content">
                     <div class="row-fluid">					 
					 <h2 id="sc" align="center"><image src="images/sclogo.png" width="45%" height="45%"/></h2>
				<?php	
	             $count_item=mysql_query("select * from tbl_assets 
				 LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
				 where status_asset = 'damage' and type_asset = 'Video Graphic Accelerator (VGA)' OR status_asset = 'damage' and type_asset = 'VGA' OR status_asset = 'damage' and type_asset = '(VGA)'
			     OR status_asset = 'damage' and type_asset = 'Video.Graphic.Accelerator' OR status_asset = 'damage' and type_asset = 'Video-Graphic-Accelerator' OR status_asset = 'damage' and type_asset = 'Video_Graphic_Accelerator'
			     OR status_asset = 'damage' and type_asset = 'VideoGraphicAccelerator' OR status_asset = 'damage' and type_asset = 'Video Graphic' OR status_asset = 'damage' and type_asset = 'Vedio Graphic Acelerator' OR status_asset = 'damage' and type_asset = 'VIDEO GRAPHIC ACCELATOR'
			     OR status_asset = 'damage' and type_asset = 'VIDEO+GRAPHIC+ACCELATOR' OR status_asset = 'damage' and type_asset = 'vido grphic' OR status_asset = 'damage' and type_asset = 'viDo gRphic Accelarator'
				 OR status_asset = 'New' and type_asset = 'vedeo graphic' OR status_asset = 'damage' and type_asset = 'video graphic accelerator'OR status_asset = 'damage' and type_asset = 'vedio graphic accelerator'
				 ORDER BY tbl_assets.id DESC ");
	             $count = mysql_num_rows($count_item);
                 ?>	 
				   <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                             <div class="muted pull-left"><i class="icon-remove-sign"></i> Damage Video Graphic Accelerator (VGA) (s) List</div>
                          <div class="muted pull-right">
								Number of Device: <span class="badge badge-info"><?php  echo $count; ?></span>
							 </div>
						  </div>
						  
				<h4 id="sc">Damage Video Graphic Accelerator (VGA) (s) List
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
					<a href="damage.php">All</a>
				</li>
				
			  <?php	
	           $count_item=mysql_query("select * from tbl_assets 
			   LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
			   where type_asset = 'Keyboard' and status_asset = 'damage' OR type_asset = 'keyboard'  and status_asset = 'damage'
			   OR type_asset = 'KEYBOARD'  and status_asset = 'damage' OR type_asset = 'kyboard'  and status_asset = 'damage' OR type_asset = 'kboard'  and status_asset = 'damage'
			   OR type_asset = 'kbard'  and status_asset = 'damage'  OR type_asset = 'kbord'  and status_asset = 'damage' OR type_asset = 'kbrd' and status_asset = 'damage'
			   OR type_asset = '(keyboard)'  and status_asset = 'damage' OR type_asset = '(kbrd)'  and status_asset = 'damage'
			   ORDER BY tbl_assets.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>							
				<li class="">
					<a href="damage_keyboard.php">Keyboard&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				         				
			<?php	
	           $count_item=mysql_query("select * from tbl_assets 
			   LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
			   where 
			      status_asset = 'damage'    and type_asset = 'mouse'       OR status_asset = 'damage'  and type_asset = 'Mouse'       OR status_asset = 'damage' and type_asset = 'muse'
			   OR status_asset = 'damage'    and type_asset = 'mose'        OR status_asset = 'damage'  and type_asset = 'mse'         OR status_asset = 'damage' and type_asset = 'MOUSE' 
			   OR status_asset = 'damage'    and type_asset = '(Mouse)'
			   OR status_asset = 'damage'    and type_asset = 'Mouse/PS2'    OR status_asset = 'damage'  and type_asset = 'Mouse/USB'  OR status_asset = 'damage' and type_asset = 'Mouse(PS2)' 
			   OR status_asset = 'damage'    and type_asset = 'Mouse(USB)'   OR status_asset = 'damage'  and type_asset = 'Mouse-PS2'  OR status_asset = 'damage' and type_asset = 'Mouse-USB'  
			   OR status_asset = 'damage'    and type_asset = 'Mouse PS2'    OR status_asset = 'damage'  and type_asset = 'Mouse USB' 
			   ORDER BY tbl_assets.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="damage_mouse.php">Mouse&nbsp;<span class="label label-default"> <?php echo $count;?></span></a></a>
				</li>
				
			 <?php	
	           $count_item=mysql_query("select * from tbl_assets 
			   LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
			   where status_asset = 'damage' and type_asset = 'monitor' OR status_asset = 'damage' and type_asset = 'montor'
			   OR status_asset = 'damage' and type_asset = 'Monitor' OR status_asset = 'damage' and type_asset = 'monitr' OR status_asset = 'damage' and type_asset = 'mnitor'
			   OR status_asset = 'damage' and type_asset = 'mntr' OR status_asset = 'damage' and type_asset = 'MNTR' OR status_asset = 'damage' and type_asset = '(monitor)'
			   OR status_asset = 'damage' and type_asset = '(montor)'
			   ORDER BY tbl_assets.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="damage_monitor.php">Monitor&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
			 <?php	
	           $count_item=mysql_query("select * from tbl_assets 
			   LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
			   where status_asset = 'damage' and type_asset = 'Central Processing unit (CPU)' OR status_asset = 'damage' and type_asset = 'central processing unit'
			   OR status_asset = 'damage' and type_asset = 'central_processing_unit' OR status_asset = 'damage' and type_asset = 'cpu' OR status_asset = 'damage' and type_asset = 'c_p_u' OR status_asset = 'damage' and type_asset = 'c.p.u.'
			   OR status_asset = 'damage' and type_asset = 'cntral prcessing unit' OR status_asset = 'damage' and type_asset = 'centrl procesing unit' OR status_asset = 'damage' and type_asset = 'central processing nit'
			   OR status_asset = 'damage' and type_asset = 'cenRal processing unt' OR status_asset = 'damage' and type_asset = 'cetral processin unit' OR status_asset = 'damage' and type_asset = 'cetral_processin_unit'
			   OR status_asset = 'damage' and type_asset = 'centralprocessingunit' OR status_asset = 'damage' and type_asset = 'CENTRAL PROCESSING UNIT' OR status_asset = 'damage' and type_asset = '(CPU)' 
			   OR status_asset = 'damage' and type_asset = '(Central Processing unit (CPU))'
			   ORDER BY tbl_assets.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="damage_cpu.php">CPU&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
								
			 <?php	
	           $count_item=mysql_query("select * from tbl_assets 
			   LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
			   where status_asset = 'damage' and type_asset = 'Power supply' OR status_asset = 'damage' and type_asset = 'power supply' 
			   OR status_asset = 'damage' and type_asset = 'pwer supply' OR status_asset = 'damage' and type_asset = 'power spply' OR status_asset = 'damage' and type_asset = 'pwer suply'
			   OR status_asset = 'damage' and type_asset = 'poer Suply'  OR status_asset = 'damage' and type_asset = 'powersupply' OR status_asset = 'damage' and type_asset = 'power_supply'
			   OR status_asset = 'damage' and type_asset = 'power.supply' OR status_asset = 'damage' and type_asset = 'pwer.spply' OR status_asset = 'damage' and type_asset = '(power supply)'
			   OR status_asset = 'damage' and type_asset = '(powersupply)' OR status_asset = 'damage' and type_asset = '(power_supply)'  OR status_asset = 'damage' and type_asset = '(power-supply)'
			   OR status_asset = 'damage' and type_asset = 'POWER SUPPLY'
			   ORDER BY tbl_assets.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="damage_power_supply.php">Power Supply&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
				<?php	
	           $count_item=mysql_query("select * from tbl_assets 
			   LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
			   where status_asset = 'damage' and type_asset = 'Video Graphic Accelerator (VGA)' OR status_asset = 'damage' and type_asset = 'VGA' OR status_asset = 'damage' and type_asset = '(VGA)'
			   OR status_asset = 'damage' and type_asset = 'Video.Graphic.Accelerator' OR status_asset = 'damage' and type_asset = 'Video-Graphic-Accelerator' OR status_asset = 'damage' and type_asset = 'Video_Graphic_Accelerator'
			   OR status_asset = 'damage' and type_asset = 'VideoGraphicAccelerator' OR status_asset = 'damage' and type_asset = 'Video Graphic' OR status_asset = 'damage' and type_asset = 'Vedio Graphic Acelerator' OR status_asset = 'damage' and type_asset = 'VIDEO GRAPHIC ACCELATOR'
			   OR status_asset = 'damage' and type_asset = 'VIDEO+GRAPHIC+ACCELATOR' OR status_asset = 'damage' and type_asset = 'vido grphic' OR status_asset = 'damage' and type_asset = 'viDo gRphic Accelarator'
			   OR status_asset = 'New' and type_asset = 'vedeo graphic' OR status_asset = 'damage' and type_asset = 'video graphic accelerator'OR status_asset = 'damage' and type_asset = 'vedio graphic accelerator'
			   ORDER BY tbl_assets.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="active">
				<a href="damage_vga.php">VGA Ports&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
				<?php	
	           $count_item=mysql_query("select * from tbl_assets 
			   LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
			   where status_asset = 'damage' and type_asset = 'Power cords' OR status_asset = 'damage' and type_asset = 'power cord' OR status_asset = 'damage' and type_asset = 'power_cord'
			   OR status_asset = 'damage' and type_asset = '(power cord)' OR status_asset = 'damage' and type_asset = 'power.cord' OR status_asset = 'damage' and type_asset = '(pwer crd)' OR status_asset = 'damage' and type_asset = 'powr coRd'
			   OR status_asset = 'damage' and type_asset = 'ower cord' OR status_asset = 'damage' and type_asset = 'power cordss' OR status_asset = 'damage' and type_asset = 'pwer crd' OR status_asset = 'damage' and type_asset = 'POWER CORD'
			   OR status_asset = 'damage' and type_asset = 'poer cd' OR status_asset = 'damage' and type_asset = 'powe cor'OR status_asset = 'damage' and type_asset = 'powercord'OR status_asset = 'damage' and type_asset = 'power-cord'
			   ORDER BY tbl_assets.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="damage_power_cords.php">Power Cord&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
				<?php	
	           $count_item=mysql_query("select * from tbl_assets 
			   LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
			   where 
			   status_asset = 'damage'    and type_asset = 'AVR'                          OR status_asset = 'damage'     and type_asset = 'A.V.R' 
			OR status_asset = 'damage'    and type_asset = 'automatic Voltage Regulator'  OR status_asset = 'damage'     and type_asset = 'automatic Voltage Reactor' 
		    OR status_asset = 'damage'    and type_asset = 'automatic_Voltage_Regulator'  OR status_asset = 'damage'     and type_asset = 'automatic-Voltage-Regulator' 
			OR status_asset = 'damage'    and type_asset = 'avrs'                         OR status_asset = 'damage'     and type_asset = 'automatic v.r' 
			OR status_asset = 'damage'    and type_asset = 'automatic voltage R.'         OR status_asset = 'damage'     and type_asset = 'avregulator' 
			OR status_asset = 'damage'    and type_asset = 'automatic Voltage Reactor'    OR status_asset = 'damage'     and type_asset = 'automatic-Voltage-Reactor' 
			OR status_asset = 'damage'    and type_asset = 'automaticVoltageReactor'      OR status_asset = 'damage'     and type_asset = 'automaticVoltageRegulator'
			OR status_asset = 'damage'    and type_asset = 'automtic Voltge Reactor'      OR status_asset = 'damage'     and type_asset = 'automtic Voltge Regulator'
			   ORDER BY tbl_assets.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="damage_avr.php">AVR&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
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
			   where status_asset = 'damage' and type_asset = 'Video Graphic Accelerator (VGA)' OR status_asset = 'damage' and type_asset = 'VGA' OR status_asset = 'damage' and type_asset = '(VGA)'
			   OR status_asset = 'damage' and type_asset = 'Video.Graphic.Accelerator' OR status_asset = 'damage' and type_asset = 'Video-Graphic-Accelerator' OR status_asset = 'damage' and type_asset = 'Video_Graphic_Accelerator'
			   OR status_asset = 'damage' and type_asset = 'VideoGraphicAccelerator' OR status_asset = 'damage' and type_asset = 'Video Graphic' OR status_asset = 'damage' and type_asset = 'Vedio Graphic Acelerator' OR status_asset = 'damage' and type_asset = 'VIDEO GRAPHIC ACCELATOR'
			   OR status_asset = 'damage' and type_asset = 'VIDEO+GRAPHIC+ACCELATOR' OR status_asset = 'damage' and type_asset = 'vido grphic' OR status_asset = 'damage' and type_asset = 'viDo gRphic Accelarator'
		ORDER BY tbl_assets.id DESC")or die(mysql_error());
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
			<td></td>
			<?php } ?>									
			
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