<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id_location']; ?><!-----------------------------------get device location details------------------------------------>
    <body>
		<?php include('navbar.php') ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('device_location_slidebar.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
					 <a href="device_location.php" class="btn btn-info"  id="return" data-placement="right" title="Klik untuk kembali" ><i class="icon-arrow-left icon-large"></i> Back</a>
					  <script type="text/javascript">
		              $(document).ready(function(){
		              $('#return').tooltip('show');
		              $('#return').tooltip('hide');
		              });
		             </script>
					  <!-----------------------------------sc logo for print------------------------------------>
						<h2 id="sc" align="center"><image src="images/sclogo.png" width="45%" height="45%"/></h2>
						
						<?php $location_query = mysql_query("select * from tbl_location	                     
	                     where id_location = '$get_id'")or die(mysql_error());
	                     $location_row = mysql_fetch_array($location_query);
	                    ?>
						
        <!-------------------------------block ------------------------------>
            <div id="block_bg" class="block">
                  <div class="navbar navbar-inner block-header">							
							  <div class="muted pull-left"><i class="icon-building"></i>  <?php echo $location_row['stdev_location_name']; ?> </div>
							  
                 <div id="" class="muted pull-right">
				<?php 
				$my_device = mysql_query("select * from tbl_location_details    
	            LEFT JOIN tbl_assets ON tbl_location_details.id = tbl_assets.id
				LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
				where NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'Power Supply'      and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'power supply'    and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
			    and dev_name = 'pwer supply'    and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'power spply'     and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'pwer suply'     and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'poer Suply'      and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
			    and dev_name = 'powersupply'    and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'power_supply'    and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'power.supply'   and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'pwer.spply'      and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
			    and dev_name = '(power supply)' and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = '(powersupply)'   and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = '(power_supply)' and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = '(power-supply)'  and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
			    and dev_name = 'POWER SUPPLY'   and id_location = '$get_id' ")or die(mysql_error());
				$count_my_device = mysql_num_rows($my_device);?>
			    Power Supply List: <span class="badge badge-info"><?php echo $count_my_device; ?></span>
				</div>
								
         </div>
							
<!-----------------------------------for Print display visible------------------------------------>	
<h4 id="sc">Location:<?php echo $location_row['stdev_location_name']; ?> Power Supply List
<div align="right" id="sc">Date:
<?php
 $date = new DateTime();
 echo $date->format('l, F jS, Y');
 ?></div>
</h4>
							
 <div class="container-fluid">
 <div class="row-fluid">						 
 <br/>
  <!-----------------------------------device categorized by their location details using nav pills------------------------------------>
	<div class="pull-left">
			    <ul class="nav nav-pills">
				<?php	
	            $my_device = mysql_query("select * from tbl_location_details	                                                    
                LEFT JOIN tbl_assets ON tbl_location_details.id = tbl_assets.id 
				LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
				where NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
                 and id_location = '$get_id' ")or die(mysql_error());
			    $count = mysql_num_rows($my_device);
			    ?>
				<li class="">
				<a href= 'mydevice.php<?php echo '?id_location='.$get_id; ?>')">All&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
					
				</li>
				
			<?php	
	          $my_keyboard = mysql_query("select * from tbl_location_details    
	          LEFT JOIN tbl_assets ON tbl_location_details.id = tbl_assets.id
			  LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
			  where NOT EXISTS 
             (select * from tbl_location_details where dev_status='Dump')
			  and dev_name = 'Keyboard'  and id_location = '$get_id'
			  OR NOT EXISTS 
             (select * from tbl_location_details where dev_status='Dump')
			  and dev_name = 'keyboard'    and id_location = '$get_id'
			  OR NOT EXISTS 
             (select * from tbl_location_details where dev_status='Dump')
		      and dev_name = 'kyboard'   and id_location = '$get_id' 
			  OR NOT EXISTS 
             (select * from tbl_location_details where dev_status='Dump')
			  and dev_name = 'kboard'      and id_location = '$get_id'
			  OR NOT EXISTS 
             (select * from tbl_location_details where dev_status='Dump')
			  and dev_name = 'kbard'      and id_location = '$get_id' 
			  OR NOT EXISTS 
             (select * from tbl_location_details where dev_status='Dump')
			  and dev_name = 'kbord'       and id_location = '$get_id' 
			  OR NOT EXISTS 
             (select * from tbl_location_details where dev_status='Dump')
			  and dev_name = 'kbrd'      and id_location = '$get_id' 
			  OR NOT EXISTS 
             (select * from tbl_location_details where dev_status='Dump')
			  and dev_name = '(keyboard)'  and id_location = '$get_id' 
			  OR NOT EXISTS 
             (select * from tbl_location_details where dev_status='Dump')
			  and dev_name = '(kbrd)'    and id_location = '$get_id' ")or die(mysql_error());
			  $count = mysql_num_rows($my_keyboard);
			  ?>
              					
				<li class="">			
				    <a href= 'myKeyboard.php<?php echo '?id_location='.$get_id; ?>')">Keyboard&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>					
				</li>
				
				<?php	
	            $my_mouse = mysql_query("select * from tbl_location_details    
	            LEFT JOIN tbl_assets ON tbl_location_details.id = tbl_assets.id
				LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
				where NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump') 
			    and dev_name = 'Mouse'        and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'mouse'      and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
                and dev_name = 'muse'      and id_location = '$get_id' 
				OR NOT EXISTS 
               (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'mose'       and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'mse'       and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'MOUSE'      and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = '(Mouse)'   and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'Mouse/PS2'  and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'Mouse/USB' and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'Mouse(PS2)' and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'Mouse(USB)'and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'Mouse-PS2'  and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'Mouse-USB' and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'Mouse PS2'  and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'Mouse USB' and id_location = '$get_id' 
				")or die(mysql_error());
			    $count = mysql_num_rows($my_mouse);
               ?>
				<li class="">			
				    <a href= 'mymouse.php<?php echo '?id_location='.$get_id; ?>')">Mouse&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>					
				</li>				
				
			  <?php	
	            $my_monitor = mysql_query("select * from tbl_location_details    
	            LEFT JOIN tbl_assets ON tbl_location_details.id = tbl_assets.id
				LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
				where NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'Monitor'     and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'monitor'   and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
                and dev_name = 'montor'   and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'monitr'    and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'mnitor'   and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'mntr'      and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'MNTR'     and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = '(monitor)' and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = '(montor)' and id_location = '$get_id' ")or die(mysql_error());
			    $count = mysql_num_rows($my_monitor);
               ?>
			   
				<li class="">			
				    <a href= 'mymonitor.php<?php echo '?id_location='.$get_id; ?>')">Monitor&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>					
				</li>
				
				 <?php	
	            $my_cpu = mysql_query("select * from tbl_location_details    
	            LEFT JOIN tbl_assets ON tbl_location_details.id = tbl_assets.id
				LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
				where NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump') 
			    and dev_name = 'Central Processing unit (CPU)'   and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'central processing unit'          and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'central_processing_unit'      and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'cpu'       and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
			    and dev_name = 'c_p_u'                        and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'c.p.u.'                           and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'cntral prcessing unit'        and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'centrl procesing unit'            and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'central processing nit'       and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'cenRal processing unt'            and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
			    and dev_name = 'cetral processin unit'        and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'cetral_processin_unit'            and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'centralprocessingunit'        and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = '(CPU)'                            and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'CENTRAL PROCESSING UNIT'      and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = '(Central Processing unit (CPU))'  and id_location = '$get_id' ")or die(mysql_error());
			    $count = mysql_num_rows($my_cpu);
               ?>
				<li class="">			
				    <a href= 'mycpu.php<?php echo '?id_location='.$get_id; ?>')">CPU&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>					
				</li>
				
               <?php	
	            $my_power_supply = mysql_query("select * from tbl_location_details    
	            LEFT JOIN tbl_assets ON tbl_location_details.id = tbl_assets.id
				LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
				where NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'Power Supply'      and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'power supply'    and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
			    and dev_name = 'pwer supply'    and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'power spply'     and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'pwer suply'     and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'poer Suply'      and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
			    and dev_name = 'powersupply'    and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'power_supply'    and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'power.supply'   and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'pwer.spply'      and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
			    and dev_name = '(power supply)' and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = '(powersupply)'   and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = '(power_supply)' and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = '(power-supply)'  and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
			    and dev_name = 'POWER SUPPLY'   and id_location = '$get_id' ")or die(mysql_error());
			    $count = mysql_num_rows($my_power_supply);
               ?>			
				<li class="active">			
				    <a href= 'mypower_supply.php<?php echo '?id_location='.$get_id; ?>')">Power Supply&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>					
				</li>
				
				<?php	
	            $my_vga = mysql_query("select * from tbl_location_details    
	            LEFT JOIN tbl_assets ON tbl_location_details.id = tbl_assets.id
				LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
				where NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
			    and dev_name = 'Video Graphic Accelerator (VGA)'   and id_location = '$get_id' 
				 OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'VGA'                         and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
			    and dev_name = '(VGA)'                          and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'Video.Graphic.Accelerator'   and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'Video-Graphic-Accelerator'      and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'Video_Graphic_Accelerator'   and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
			    and dev_name = 'VideoGraphicAccelerator'        and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'Video Graphic'               and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'Vedio Graphic Acelerator'       and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'VIDEO GRAPHIC ACCELATOR'     and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
			    and dev_name = 'VIDEO+GRAPHIC+ACCELATOR'        and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'vido grphic'                 and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'viDo gRphic Accelarator'        and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'video graphic accelarator'   and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
			    and dev_name = 'vedeo graphic'                  and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'video graphic accelerator'   and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'videographicaccelerator'        and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'vedio graphic accelerator'   and id_location = '$get_id'")or die(mysql_error());
			    $count = mysql_num_rows($my_vga);
               ?>
				<li class="">			
				    <a href= 'myvga.php<?php echo '?id_location='.$get_id; ?>')">VGA&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>					
				</li>
				
				<?php	
	            $my_vga = mysql_query("select * from tbl_location_details    
	            LEFT JOIN tbl_assets ON tbl_location_details.id = tbl_assets.id
				LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
				where NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump') 
			    and dev_name = 'Power Cords'       and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump') 
				and dev_name = 'power cord'    and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump') 
			    and dev_name = 'power_cord'     and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = '(power cord)'  and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
			    and dev_name = 'power.cord'     and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = '(pwer crd)'    and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
			    and dev_name = 'powr coRd'      and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'ower cord'     and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
			    and dev_name = 'power cordss'   and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'pwer crd'      and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
			    and dev_name = 'POWER CORD'     and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'poer cd'       and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
			    and dev_name = 'powe cor'       and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'powercord'     and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
			    and dev_name = 'powe cor'       and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'power-cord'    and id_location = '$get_id'")or die(mysql_error());
			    $count = mysql_num_rows($my_vga);
               ?>				
				<li class="">			
				    <a href= 'mypower_cord.php<?php echo '?id_location='.$get_id; ?>')">Power Cord&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>					
				</li>
				
				<?php	
	            $my_avr = mysql_query("select * from tbl_location_details    
	            LEFT JOIN tbl_assets ON tbl_location_details.id = tbl_assets.id
				LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
				where NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				 and dev_name = 'AVR'                           and id_location = '$get_id'
				 OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				 and dev_name = 'A.V.R'                          and id_location = '$get_id'
				 OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
                and dev_name = 'automatic Voltage Regulator'   and id_location = '$get_id'   
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'automatic Voltage Reactor'      and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
                and dev_name = 'automatic_Voltage_Regulator'   and id_location = '$get_id'   
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'automatic-Voltage-Regulator'    and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
                and dev_name = 'avrs'                          and id_location = '$get_id'   
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'automatic v.r'                  and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
                and dev_name = 'automatic voltage R.'          and id_location = '$get_id'   
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'avregulator'                    and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
                and dev_name = 'automatic Voltage Reactor'     and id_location = '$get_id'   
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'automatic-Voltage-Reactor'      and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
                and dev_name = 'automaticVoltageReactor'       and id_location = '$get_id'   
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'automaticVoltageRegulator'      and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
                and dev_name = 'automtic Voltge Reactor'       and id_location = '$get_id'   
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'automtic Voltge Regulator'      and id_location = '$get_id'
			    ")or die(mysql_error());
			    $count = mysql_num_rows($my_avr);
               ?>				
				<li class ="">			
				    <a href= 'myavr.php<?php echo '?id_location='.$get_id; ?>')">AVR&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>					
				</li>
				
				</ul>
	</div>
</div>
</div>

<div class="block-content collapse in">
<div class="span12">
	<form action="" method="post"><!-----------------------------------table form------------------------------------>
  	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
		<thead>		
		        <tr>			        
					<th class="empty"></th>
					<th>Device Name</th>
					<th>Device Description </th>
					<th>Inventory Code</th>
			        <th>Device Brand  </th>
					<th>Device Model  </th>
					<th>Date Assign   </th>	
					<th>Device Status </th> 				
                    <th>Location Name </th>
					<th class="empty">Manage Device</th>
		    </tr>
		</thead>
<tbody>
<!-----------------------------------Content------------------------------------>									
 <?php
$my_device = mysql_query("select * from tbl_location_details    
	            LEFT JOIN tbl_assets ON tbl_location_details.id = tbl_assets.id
				LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
				where NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'Power Supply'      and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'power supply'    and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
			    and dev_name = 'pwer supply'    and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'power spply'     and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'pwer suply'     and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'poer Suply'      and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
			    and dev_name = 'powersupply'    and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'power_supply'    and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'power.supply'   and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = 'pwer.spply'      and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
			    and dev_name = '(power supply)' and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = '(powersupply)'   and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = '(power_supply)' and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
				and dev_name = '(power-supply)'  and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where dev_status='Dump')
			    and dev_name = 'POWER SUPPLY'   and id_location = '$get_id' ")or die(mysql_error());
while($row = mysql_fetch_array($my_device)){
$id = $row['id'];
		                                               
?>
<tr>
		<td><?php
			   $device_query2 = mysql_query("select * from tbl_assets ")or die(mysql_error());
		       $dev=mysql_fetch_assoc($device_query2);
		       if($row['dev_status']=='New')
		       {
			   echo '<i class="icon-check"></i><div id="hide"><strong>'.$row['dev_status'].'</strong></div>';
		       }
		       else if($row['dev_status']=='Used')
			   {
			   echo '<i class="icon-ok"></i><div id="hide"><strong>'.$row['dev_status'].'</strong></div>';
		       }
			   else if($row['dev_status']=='Repaired')
			   {
			   echo '<i class="icon-wrench"></i><div id="hide"><strong>'.$row['dev_status'].'</strong></div>';
		       }
		       else
			   {
			   echo '<i class="icon-remove-sign"></i><div id="hide"><strong>'.$row['dev_status'].'</strong></div>';
		       };
			  ?>
		</td>
			<td><?php echo $row['dev_name']; ?></td>
			<td><?php echo $row['dev_desc']; ?></td>
			<td><?php echo $row['dev_serial']; ?></td>
			<td><?php echo $row['dev_brand']; ?></td>
			<td><?php echo $row['dev_model']; ?></td>
			<td><?php echo $row['date_deployment']; ?></td>
			<td><?php
			   $my_device1 = mysql_query("select * from tbl_assets ")or die(mysql_error());
		       $dev=mysql_fetch_assoc($my_device1);
		       if($row['dev_status']=='New')
		       {
			   echo '<div class="alert alert-success"><i class="icon-check"></i><strong>'.$row['dev_status'].'</strong></div>';
		       }
		       else if($row['dev_status']=='Used')
			   {
			   echo '<div class="alert alert-warning"><i class="icon-ok"></i><strong>'.$row['dev_status'].'</strong></div>';
		       }
			    else if($row['dev_status']=='Repaired')
			   {
			   echo '<div class="alert alert-warning"><i class="icon-wrench"></i><strong>'.$row['dev_status'].'</strong></div>';
		       }
		       else
			   {
			   echo '<div class="alert alert-danger"><i class="icon-remove-sign"></i><strong>'.$row['dev_status'].'</strong></div>';
		       };
			  ?></td>
			<td><?php echo $location_row['stdev_location_name']; ?></td>
												
			<?php include('toolttip_edit_delete.php'); ?>
			<td width="185" class="empty"><a rel="tooltip"  title="Transfer Device" id="e<?php echo $id; ?>" href="transfer.php<?php echo '?id='.$id; ?>&<?php echo 'id_location='.$get_id; ?>" class="btn btn-warning"><i class="icon-move"></i> Transfer </a>
			<a rel="tooltip"  title="Update Status" id="t<?php echo $id; ?>" href="devlps_update_status.php<?php echo '?id='.$id; ?>&<?php echo 'id_location='.$get_id; ?>" class="btn btn-success"><i class="icon-upload-alt"></i> Status</a></td>
		</tr>
											
	<?php } ?>   
</tbody>
</table>
</form>	
 <!---------------------------------------------------- /block --------------------------------------------->
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