<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id_location']; ?>
    <body id="home">
		<?php include('navbar_client.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('device_location_sidebar.php'); ?>
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
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'Monitor'     and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'monitor'   and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
                and type_asset = 'montor'   and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'monitr'    and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'mnitor'   and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'mntr'      and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'MNTR'     and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = '(monitor)' and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = '(montor)' and id_location = '$get_id' ")or die(mysql_error());
				$count_my_device = mysql_num_rows($my_device);?>
				Monitor List: <span class="badge badge-info"><?php echo $count_my_device; ?></span>
				</div>
								
           </div>
							
<!-----------------------------------for Print display visible------------------------------------>							
<h4 id="sc">Location:<?php echo $location_row['stdev_location_name']; ?>  Monitor List
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
                (select * from tbl_location_details where status_asset='Dump')
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
             (select * from tbl_location_details where status_asset='Dump')
			  and type_asset = 'Keyboard'  and id_location = '$get_id'
			  OR NOT EXISTS 
             (select * from tbl_location_details where status_asset='Dump')
			  and type_asset = 'keyboard'    and id_location = '$get_id'
			  OR NOT EXISTS 
             (select * from tbl_location_details where status_asset='Dump')
		      and type_asset = 'kyboard'   and id_location = '$get_id' 
			  OR NOT EXISTS 
             (select * from tbl_location_details where status_asset='Dump')
			  and type_asset = 'kboard'      and id_location = '$get_id'
			  OR NOT EXISTS 
             (select * from tbl_location_details where status_asset='Dump')
			  and type_asset = 'kbard'      and id_location = '$get_id' 
			  OR NOT EXISTS 
             (select * from tbl_location_details where status_asset='Dump')
			  and type_asset = 'kbord'       and id_location = '$get_id' 
			  OR NOT EXISTS 
             (select * from tbl_location_details where status_asset='Dump')
			  and type_asset = 'kbrd'      and id_location = '$get_id' 
			  OR NOT EXISTS 
             (select * from tbl_location_details where status_asset='Dump')
			  and type_asset = '(keyboard)'  and id_location = '$get_id' 
			  OR NOT EXISTS 
             (select * from tbl_location_details where status_asset='Dump')
			  and type_asset = '(kbrd)'    and id_location = '$get_id' ")or die(mysql_error());
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
                (select * from tbl_location_details where status_asset='Dump') 
			    and type_asset = 'Mouse'        and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'mouse'      and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
                and type_asset = 'muse'      and id_location = '$get_id' 
				OR NOT EXISTS 
               (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'mose'       and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'mse'       and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'MOUSE'      and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = '(Mouse)'   and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'Mouse/PS2'  and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'Mouse/USB' and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'Mouse(PS2)' and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'Mouse(USB)'and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'Mouse-PS2'  and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'Mouse-USB' and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'Mouse PS2'  and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'Mouse USB' and id_location = '$get_id' 
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
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'Monitor'     and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'monitor'   and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
                and type_asset = 'montor'   and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'monitr'    and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'mnitor'   and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'mntr'      and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'MNTR'     and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = '(monitor)' and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = '(montor)' and id_location = '$get_id' ")or die(mysql_error());
			    $count = mysql_num_rows($my_monitor);
               ?>
			   
				<li class="active">			
				    <a href= 'mymonitor.php<?php echo '?id_location='.$get_id; ?>')">Monitor&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>					
				</li>
				
				 <?php	
	            $my_cpu = mysql_query("select * from tbl_location_details    
	            LEFT JOIN tbl_assets ON tbl_location_details.id = tbl_assets.id
				LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
				where NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump') 
			    and type_asset = 'Central Processing unit (CPU)'   and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'central processing unit'          and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'central_processing_unit'      and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'cpu'       and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
			    and type_asset = 'c_p_u'                        and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'c.p.u.'                           and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'cntral prcessing unit'        and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'centrl procesing unit'            and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'central processing nit'       and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'cenRal processing unt'            and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
			    and type_asset = 'cetral processin unit'        and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'cetral_processin_unit'            and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'centralprocessingunit'        and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = '(CPU)'                            and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'CENTRAL PROCESSING UNIT'      and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = '(Central Processing unit (CPU))'  and id_location = '$get_id' ")or die(mysql_error());
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
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'Power Supply'      and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'power supply'    and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
			    and type_asset = 'pwer supply'    and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'power spply'     and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'pwer suply'     and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'poer Suply'      and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
			    and type_asset = 'powersupply'    and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'power_supply'    and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'power.supply'   and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'pwer.spply'      and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
			    and type_asset = '(power supply)' and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = '(powersupply)'   and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = '(power_supply)' and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = '(power-supply)'  and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
			    and type_asset = 'POWER SUPPLY'   and id_location = '$get_id' ")or die(mysql_error());
			    $count = mysql_num_rows($my_power_supply);
               ?>			
				<li class="">			
				    <a href= 'mypower_supply.php<?php echo '?id_location='.$get_id; ?>')">Power Supply&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>					
				</li>
				
				<?php	
	            $my_vga = mysql_query("select * from tbl_location_details    
	            LEFT JOIN tbl_assets ON tbl_location_details.id = tbl_assets.id
				LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
				where NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
			    and type_asset = 'Video Graphic Accelerator (VGA)'   and id_location = '$get_id' 
				 OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'VGA'                         and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
			    and type_asset = '(VGA)'                          and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'Video.Graphic.Accelerator'   and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'Video-Graphic-Accelerator'      and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'Video_Graphic_Accelerator'   and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
			    and type_asset = 'VideoGraphicAccelerator'        and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'Video Graphic'               and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'Vedio Graphic Acelerator'       and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'VIDEO GRAPHIC ACCELATOR'     and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
			    and type_asset = 'VIDEO+GRAPHIC+ACCELATOR'        and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'vido grphic'                 and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'viDo gRphic Accelarator'        and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'video graphic accelarator'   and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
			    and type_asset = 'vedeo graphic'                  and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'video graphic accelerator'   and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'videographicaccelerator'        and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'vedio graphic accelerator'   and id_location = '$get_id'")or die(mysql_error());
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
                (select * from tbl_location_details where status_asset='Dump') 
			    and type_asset = 'Power Cords'       and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump') 
				and type_asset = 'power cord'    and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump') 
			    and type_asset = 'power_cord'     and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = '(power cord)'  and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
			    and type_asset = 'power.cord'     and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = '(pwer crd)'    and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
			    and type_asset = 'powr coRd'      and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'ower cord'     and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
			    and type_asset = 'power cordss'   and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'pwer crd'      and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
			    and type_asset = 'POWER CORD'     and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'poer cd'       and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
			    and type_asset = 'powe cor'       and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'powercord'     and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
			    and type_asset = 'powe cor'       and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'power-cord'    and id_location = '$get_id'")or die(mysql_error());
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
                (select * from tbl_location_details where status_asset='Dump')
				 and type_asset = 'AVR'                           and id_location = '$get_id'
				 OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				 and type_asset = 'A.V.R'                          and id_location = '$get_id'
				 OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
                and type_asset = 'automatic Voltage Regulator'   and id_location = '$get_id'   
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'automatic Voltage Reactor'      and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
                and type_asset = 'automatic_Voltage_Regulator'   and id_location = '$get_id'   
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'automatic-Voltage-Regulator'    and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
                and type_asset = 'avrs'                          and id_location = '$get_id'   
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'automatic v.r'                  and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
                and type_asset = 'automatic voltage R.'          and id_location = '$get_id'   
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'avregulator'                    and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
                and type_asset = 'automatic Voltage Reactor'     and id_location = '$get_id'   
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'automatic-Voltage-Reactor'      and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
                and type_asset = 'automaticVoltageReactor'       and id_location = '$get_id'   
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'automaticVoltageRegulator'      and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
                and type_asset = 'automtic Voltge Reactor'       and id_location = '$get_id'   
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'automtic Voltge Regulator'      and id_location = '$get_id'
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
					<th>Tipe Aset</th>
					<th>Device Description </th>
					<th>Kode Asset</th>
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
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'Monitor'     and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'monitor'   and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
                and type_asset = 'montor'   and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'monitr'    and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'mnitor'   and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'mntr'      and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = 'MNTR'     and id_location = '$get_id' 
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = '(monitor)' and id_location = '$get_id'
				OR NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
				and type_asset = '(montor)' and id_location = '$get_id' ")or die(mysql_error());
while($row = mysql_fetch_array($my_device)){
$id = $row['id'];
		                                               
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
			<td><?php echo $row['date_deployment']; ?></td>
			<td><?php
			   $my_device1 = mysql_query("select * from tbl_assets ")or die(mysql_error());
		       $dev=mysql_fetch_assoc($my_device1);
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
			<td><?php echo $location_row['stdev_location_name']; ?></td>
												
			<?php include('toolttip_edit_delete.php'); ?>
			<td width="80" class="empty"><a rel="tooltip"  title="Update Status" id="e<?php echo $id; ?>" href="devlmtr_update_status.php<?php echo '?id='.$id; ?>&<?php echo 'id_location='.$get_id; ?>" class="btn btn-success"><i class="icon-upload-alt"></i> Status</a></td>
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