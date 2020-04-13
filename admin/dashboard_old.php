<?php  include('header.php'); ?>
<?php  include('session.php'); ?>
<body>
	<?php include('navbar.php') ?>
	<div class="container-fluid">
		<div class="row-fluid">
			<?php include('dashboard_slidebar.php'); ?>		
			<div class="span9" id="content">
				<div class="row-fluid">
					<?php $query= mysql_query("select * from tbl_admin where id_admin = '$session_id'")or die(mysql_error());
					$row = mysql_fetch_array($query);			
					?>
					<div class="col-lg-12">
						<div class="alert alert-success alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<img id="avatar1" class="img-responsive" src="<?php echo $row['pict_admin']; ?>"><strong> Welcome!</strong> <?php echo $user_row['firstname']." ".$user_row['lastname'];  ?>
						</div>
					</div>
					
					<!-- block -->
					<div id="block_bg" class="block">
						<div class="navbar navbar-inner block-header">
							<div class="muted pull-left"><i class="icon-dashboard">&nbsp;</i>Dashboard Data Number</div>
							<div class="muted pull-right"><i class="icon-time"></i>&nbsp;<?php include('time.php'); ?></div>
						</div>
						<div class="block-content collapse in">
							<div class="span12">
								
								<?php 
								$stocks = mysql_query("select * from tbl_assets
									LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset")or die(mysql_error());
								$stocks = mysql_num_rows($stocks);
								?>
								
								<div class="span3">
									<div class="chart" data-percent="<?php echo $stocks; ?>"><?php echo $stocks; ?></div>
									<div class="chart-bottom-heading"><strong>All Device Stock (s)</strong>

									</div>
								</div>
								
								<?php 
								$new = mysql_query("select * from tbl_assets 
									LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
									where status_asset = 'New' ORDER BY tbl_assets.id DESC")or die(mysql_error());
								$new = mysql_num_rows($new);
								?>
								
								<div class="span3">
									<div class="chart" data-percent="<?php echo $new; ?>"><?php echo $new; ?></div>
									<div class="chart-bottom-heading"><strong> New Device (s) </strong>

									</div>
								</div>
								
								<?php 
								$damage = mysql_query("select * from tbl_assets 
									LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
									where status_asset = 'damage' OR status_asset = 'Damage' ORDER BY tbl_assets.id DESC")or die(mysql_error());
								$damage = mysql_num_rows($damage);
								?>
								
								<div class="span3">
									<div class="chart" data-percent="<?php echo $damage; ?>"><?php echo $damage; ?></div>
									<div class="chart-bottom-heading"><strong> Damage Device (s) </strong>

									</div>
								</div>
								
								<?php 
								$device_location = mysql_query("select * from tbl_location_details")or die(mysql_error());
								$device_location = mysql_num_rows($device_location);
								?>
								
								<div class="span3">
									<div class="chart" data-percent="<?php echo $device_location; ?>"><?php echo $device_location; ?></div>
									<div class="chart-bottom-heading"><strong> Device (s) Assign </strong>

									</div>
								</div>
								
								<?php 
								$keyboard = mysql_query("select * from tbl_assets 
									LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
									where type_asset = 'Keyboard' OR type_asset = 'keyboard' OR type_asset = 'KEYBOARD'
									OR type_asset = 'kyboard' OR type_asset = 'kboard' OR type_asset = 'kbard' OR type_asset = 'kbord'OR type_asset = 'kbrd' OR type_asset = '(keyboard)'
									OR type_asset = '(kbrd)' ")or die(mysql_error());
								$keyboard = mysql_num_rows($keyboard);
								?>
								
								<div class="span3">
									<div class="chart" data-percent="<?php echo $keyboard; ?>"><?php echo $keyboard; ?></div>
									<div class="chart-bottom-heading"><strong>Keyboard</strong>

									</div>
								</div>
								
								<?php 
								$Mouse = mysql_query("select * from tbl_assets 
									LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
									where type_asset = 'Mouse' OR type_asset = 'mouse'
									OR type_asset = 'muse' OR type_asset = 'mose'OR type_asset = 'mse' OR type_asset = 'MOUSE' OR type_asset = '(Mouse)'
									OR type_asset = 'Mouse/PS2' OR type_asset = 'Mouse/USB' OR type_asset = 'Mouse(PS2)' OR type_asset = 'Mouse(USB)' 
									OR type_asset = 'Mouse-PS2' OR type_asset = 'Mouse-USB' OR type_asset = 'Mouse PS2' OR type_asset = 'Mouse USB' 
									ORDER BY tbl_assets.id DESC")or die(mysql_error());
								$Mouse = mysql_num_rows($Mouse);
								?>
								
								<div class="span3">
									<div class="chart" data-percent="<?php echo $Mouse; ?>"><?php echo $Mouse; ?></div>
									<div class="chart-bottom-heading"><strong>Mouse</strong>

									</div>
								</div>
								
								<?php 
								$Monitor = mysql_query("select * from tbl_assets 
									LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
									where type_asset = 'Monitor' OR type_asset = 'monitor'
									OR type_asset = 'montor' OR type_asset = 'monitr' OR type_asset = 'mnitor' OR type_asset = 'mntr' OR type_asset = 'MNTR'
									OR type_asset = '(monitor)' OR type_asset = '(montor)' ")or die(mysql_error());
								$Monitor = mysql_num_rows($Monitor);
								?>
								
								<div class="span3">
									<div class="chart" data-percent="<?php echo $Monitor; ?>"><?php echo $Monitor; ?></div>
									<div class="chart-bottom-heading"><strong>Monitor</strong>

									</div>
								</div>



								
								<?php 
								$CPU = mysql_query("select * from tbl_assets 
									LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
									where type_asset = 'Central Processing unit (CPU)' 
									OR type_asset = 'central processing unit' OR type_asset = 'central_processing_unit'
									OR type_asset = 'cpu' OR type_asset = 'c_p_u' OR type_asset = 'c.p.u.'   
									OR type_asset = 'cntral prcessing unit' OR type_asset = 'centrl procesing unit'
									OR type_asset = 'central processing nit'
									OR type_asset = 'cenRal processing unt' OR type_asset = 'cetral processin unit' OR type_asset = 'cetral_processin_unit' 
									OR type_asset = 'centralprocessingunit' OR type_asset = 'CENTRAL PROCESSING UNIT'
									OR type_asset = '(CPU)' OR type_asset = '(Central Processing unit (CPU))' ")or die(mysql_error());
								$CPU = mysql_num_rows($CPU);
								?>
								
								<div class="span3">
									<div class="chart" data-percent="<?php echo $CPU; ?>"><?php echo $CPU; ?></div>
									<div class="chart-bottom-heading"><strong>Central Processing unit (CPU)</strong>

									</div>
								</div>
								
								<?php 
								$power_supply = mysql_query("select * from tbl_assets 
									LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
									where type_asset = 'Power Supply' OR type_asset = 'power supply'
									OR type_asset = 'pwer supply' OR type_asset = 'power spply' OR type_asset = 'pwer suply' OR type_asset = 'poer Suply'
									OR type_asset = 'powersupply' OR type_asset = 'power_supply' OR type_asset = 'power.supply' OR type_asset = 'pwer.spply'
									OR type_asset = '(power supply)' OR type_asset = '(powersupply)' OR type_asset = '(power_supply)' 
									OR type_asset = '(power-supply)' OR type_asset = 'POWER SUPPLY' ")or die(mysql_error());
								$power_supply = mysql_num_rows($power_supply);
								?>
								
								<div class="span3">
									<div class="chart" data-percent="<?php echo $power_supply;?>"><?php echo $power_supply;?></div>
									<div class="chart-bottom-heading"><strong>Power Supply</strong>

									</div>
								</div>
								
								<?php 
								$vga = mysql_query("select * from tbl_assets 
									LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
									where type_asset = 'Video Graphic Accelerator (VGA)' OR type_asset = 'VGA'
									OR type_asset = '(VGA)' OR type_asset = 'Video.Graphic.Accelerator' OR type_asset = 'Video-Graphic-Accelerator' OR type_asset = 'Video_Graphic_Accelerator'
									OR type_asset = 'VideoGraphicAccelerator' OR type_asset = 'Video Graphic' OR type_asset = 'Vedio Graphic Acelerator' OR type_asset = 'VIDEO GRAPHIC ACCELATOR'
									OR type_asset = 'VIDEO+GRAPHIC+ACCELATOR' OR type_asset = 'vido grphic' OR type_asset = 'viDo gRphic Accelarator' OR type_asset = 'video graphic accelarator' OR type_asset = 'vedio graphic accelerator'
									OR type_asset = 'vedeo graphic' OR type_asset = 'video graphic accelerator'")or die(mysql_error());
								$vga = mysql_num_rows($vga);
								?>
								
								<div class="span3">
									<div class="chart" data-percent="<?php echo $vga; ?>"><?php echo $vga; ?></div>
									<div class="chart-bottom-heading"><strong>Video Graphic Accelerator (VGA)</strong>

									</div>
								</div>
								
								<?php 
								$power_cords = mysql_query("select * from tbl_assets 
									LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
									where type_asset = 'Power Cords' OR type_asset = 'power cord'
									OR type_asset = 'power_cord' OR type_asset = '(power cord)' OR type_asset = 'power.cord' OR type_asset = '(pwer crd)'
									OR type_asset = 'powr coRd' OR type_asset = 'ower cord' OR type_asset = 'power cordss' OR type_asset = 'pwer crd'
									OR type_asset = 'POWER CORD' OR type_asset = 'poer cd' OR type_asset = 'powe cor'  OR type_asset = 'powercord'
									OR type_asset = 'powe cor'  OR type_asset = 'power-cord'")or die(mysql_error());
								$power_cords = mysql_num_rows($power_cords);
								?>
								
								<div class="span3">
									<div class="chart" data-percent="<?php echo $power_cords; ?>"><?php echo $power_cords; ?></div>
									<div class="chart-bottom-heading"><strong>Power Cord (s)</strong>

									</div>
								</div>
								
							</div>
						</div>
						<!-- /block -->
						
					</div>
				</div>
				
			</div>
		</div>
		
		<?php include('footer.php'); ?>
	</div>
	<?php include('script.php'); ?>
</body>
<embed src="../sound/wlcome.mp3" controller="true" autoplay="true" autostart="True" width="0" height="0" />	