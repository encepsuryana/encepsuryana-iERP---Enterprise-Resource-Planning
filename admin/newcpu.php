<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('newdevice_slidebar.php'); ?>
			
				<div class="span9" id="content">
                     <div class="row-fluid">
					 				
				<h2 id="sc" align="center"><image src="images/sclogo.png" width="45%" height="45%"/></h2>
				<?php	
	             $count_item=mysql_query("select * from tbl_assets 
				 LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
				 where NOT EXISTS 
	             (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)	   
	             and status_asset = 'New' and type_asset = 'Central Processing unit (CPU)'
		         OR NOT EXISTS 
	            (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		         and status_asset = 'New' and type_asset = 'central processing unit'
		         OR NOT EXISTS 
	            (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		         and status_asset = 'New' and type_asset = 'central_processing_unit'
		         OR NOT EXISTS 
	            (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		         and status_asset = 'New' and type_asset = 'cpu'
		         OR NOT EXISTS 
	            (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		         and status_asset = 'New' and type_asset = 'c_p_u'
		        OR NOT EXISTS 
	           (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		        and status_asset = 'New' and type_asset = 'c.p.u.'
		        OR NOT EXISTS 
	            (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		        and status_asset = 'New' and type_asset = 'cntral prcessing unit'
		        OR NOT EXISTS 
	            (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		        and status_asset = 'New' and type_asset = 'centrl procesing unit'
		        OR NOT EXISTS 
	           (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		       and status_asset = 'New' and type_asset = 'central processing nit'
		       OR NOT EXISTS 
	           (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		       and status_asset = 'New' and type_asset = 'cenRal processing unt'
		       OR NOT EXISTS 
	           (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		       and status_asset = 'New' and type_asset = 'cetral processin unit'
		       OR NOT EXISTS 
	           (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		       and status_asset = 'New' and type_asset = 'cetral_processin_unit'
		       OR NOT EXISTS 
	           (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		       and status_asset = 'New' and type_asset = 'centralprocessingunit'
		       OR NOT EXISTS 
	          (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		       and status_asset = 'New' and type_asset = 'CENTRAL PROCESSING UNIT'
		       OR NOT EXISTS 
	           (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		       and status_asset = 'New' and type_asset = '(CPU)'
		       OR NOT EXISTS 
	           (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		       and status_asset = 'New' and type_asset = '(Central Processing unit (CPU))'
				 ORDER BY tbl_assets.id DESC ");
	             $count = mysql_num_rows($count_item);
                 ?>	
				   <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                             <div class="muted pull-left"><i class="icon-check"></i>&nbsp;New Central Processing Unit (s) List</div>
							 <div class="muted pull-right">
								Number of New Central Processing Unit (s): <span class="badge badge-info"><?php  echo $count; ?></span>
							 </div>
                          </div>
						  
				<h4 id="sc">New Central Processing Unit (s) List
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
					<a href="newdevice.php">All</a>
				</li>
				
			  <?php	
	           $count_item=mysql_query("select * from tbl_assets 
			   LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
			   where NOT EXISTS 
	           (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)	   
	           and status_asset = 'New' and type_asset = 'Keyboard'
		
		        OR NOT EXISTS 
	            (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		        and status_asset = 'New' and type_asset = 'kyboard'
		        OR NOT EXISTS 
	            (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		        and status_asset = 'New' and type_asset = 'kboard'
		        OR NOT EXISTS 
	            (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		        and status_asset = 'New' and type_asset = 'kbard'
		        OR NOT EXISTS 
	            (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		        and status_asset = 'New' and type_asset = 'kbord'
		        OR NOT EXISTS 
	            (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		        and status_asset = 'New' and type_asset = 'kbrd'
		        OR NOT EXISTS 
	            (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		        and status_asset = 'New' and type_asset = '(keyboard)'
		        OR NOT EXISTS 
	            (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		        and status_asset = 'New' and type_asset = '(kbrd)'
			   ORDER BY tbl_assets.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>					
				<li class="">
					<a href="newKeyboard.php">Keyboard&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				         				
			<?php	
	           $count_item=mysql_query("select * from tbl_assets 
			   LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
			   where NOT EXISTS 
	          (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)	   
	          and status_asset = 'New' and type_asset = 'mouse'
		
		      OR NOT EXISTS 
	          (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		      and status_asset = 'New' and type_asset = 'mose'		       
		      OR NOT EXISTS 
	          (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		      and status_asset = 'New' and type_asset = 'mse'
		      OR NOT EXISTS 
	          (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		      and status_asset = 'New' and type_asset = '(Mouse)'
		      OR NOT EXISTS 
	         (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		      and status_asset = 'New' and type_asset = 'Mouse/PS2'
		      OR NOT EXISTS 
	         (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		      and status_asset = 'New' and type_asset = 'Mouse/USB'
		      OR NOT EXISTS 
	         (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		      and status_asset = 'New' and type_asset = 'Mouse(PS2)'
		      OR NOT EXISTS 
	          (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		      and status_asset = 'New' and type_asset = 'Mouse(USB)'
		      OR NOT EXISTS 
	          (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		      and status_asset = 'New' and type_asset = 'Mouse-PS2'
		      OR NOT EXISTS 
	          (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		      and status_asset = 'New' and type_asset = 'Mouse-USB'
		      OR NOT EXISTS 
	          (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		      and status_asset = 'New' and type_asset = 'Mouse PS2'
		      OR NOT EXISTS 
	         (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		      and status_asset = 'New' and type_asset = 'Mouse USB' 
			   ORDER BY tbl_assets.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="newmouse.php">Mouse&nbsp;<span class="label label-default"> <?php echo $count;?></span></a></a>
				</li>
				
			 <?php	
	           $count_item=mysql_query("select * from tbl_assets 
			   LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
			   where NOT EXISTS 
	             (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)	   
	             and status_asset = 'New' and type_asset = 'monitor'
		         OR NOT EXISTS 
	             (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		         and status_asset = 'New' and type_asset = 'montor'
		         OR NOT EXISTS 
	             (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		         and status_asset = 'New' and type_asset = 'monitr'
		         OR NOT EXISTS 
	             (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		         and status_asset = 'New' and type_asset = 'mnitor'
		         OR NOT EXISTS 
	             (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		         and status_asset = 'New' and type_asset = 'mntr'
		         OR NOT EXISTS 
	             (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		         and status_asset = 'New' and type_asset = 'MNTR'
		         OR NOT EXISTS 
	             (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		         and status_asset = 'New' and type_asset = '(monitor)'
		         OR NOT EXISTS 
	             (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		         and status_asset = 'New' and type_asset = '(montor)'
			   ORDER BY tbl_assets.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="newmonitor.php">Monitor&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
				<?php	
	           $count_item=mysql_query("select * from tbl_assets 
			   LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
			   where NOT EXISTS 
	             (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)	   
	             and status_asset = 'New' and type_asset = 'Central Processing unit (CPU)'
		         OR NOT EXISTS 
	            (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		         and status_asset = 'New' and type_asset = 'central processing unit'
		         OR NOT EXISTS 
	            (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		         and status_asset = 'New' and type_asset = 'central_processing_unit'
		         OR NOT EXISTS 
	            (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		         and status_asset = 'New' and type_asset = 'cpu'
		         OR NOT EXISTS 
	            (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		         and status_asset = 'New' and type_asset = 'c_p_u'
		        OR NOT EXISTS 
	           (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		        and status_asset = 'New' and type_asset = 'c.p.u.'
		        OR NOT EXISTS 
	            (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		        and status_asset = 'New' and type_asset = 'cntral prcessing unit'
		        OR NOT EXISTS 
	            (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		        and status_asset = 'New' and type_asset = 'centrl procesing unit'
		        OR NOT EXISTS 
	           (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		       and status_asset = 'New' and type_asset = 'central processing nit'
		       OR NOT EXISTS 
	           (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		       and status_asset = 'New' and type_asset = 'cenRal processing unt'
		       OR NOT EXISTS 
	           (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		       and status_asset = 'New' and type_asset = 'cetral processin unit'
		       OR NOT EXISTS 
	           (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		       and status_asset = 'New' and type_asset = 'cetral_processin_unit'
		       OR NOT EXISTS 
	           (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		       and status_asset = 'New' and type_asset = 'centralprocessingunit'
		       OR NOT EXISTS 
	          (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		       and status_asset = 'New' and type_asset = 'CENTRAL PROCESSING UNIT'
		       OR NOT EXISTS 
	           (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		       and status_asset = 'New' and type_asset = '(CPU)'
		       OR NOT EXISTS 
	           (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		       and status_asset = 'New' and type_asset = '(Central Processing unit (CPU))'
			   ORDER BY tbl_assets.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="active">
				<a href="newcpu.php">CPU&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
								
			  <?php	
	           $count_item=mysql_query("select * from tbl_assets 
			   LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
			   where NOT EXISTS 
	          (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)	   
	           and status_asset = 'New' and type_asset = 'Power supply'
		      OR NOT EXISTS 
	          (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		      and status_asset = 'New' and type_asset = 'power supply'
		      OR NOT EXISTS 
	          (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		      and status_asset = 'New' and type_asset = 'pwer supply'
		      OR NOT EXISTS 
	          (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		      and status_asset = 'New' and type_asset = 'power spply'
		      OR NOT EXISTS 
	          (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		      and status_asset = 'New' and type_asset = 'pwer suply'
		      OR NOT EXISTS 
	          (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		      and status_asset = 'New' and type_asset = 'poer Suply'
		       OR NOT EXISTS 
	          (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		      and status_asset = 'New' and type_asset = 'powersupply'
		      OR NOT EXISTS 
	          (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		      and status_asset = 'New' and type_asset = 'power_supply'
		       OR NOT EXISTS 
	           (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		       and status_asset = 'New' and type_asset = 'power.supply'
		       OR NOT EXISTS 
	           (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		       and status_asset = 'New' and type_asset = 'pwer.spply'
		       OR NOT EXISTS 
	          (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		       and status_asset = 'New' and type_asset = '(power supply)'
		       OR NOT EXISTS 
	          (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		       and status_asset = 'New' and type_asset = '(powersupply)'
		       OR NOT EXISTS 
	           (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		       and status_asset = 'New' and type_asset = '(power_supply)'
		       OR NOT EXISTS 
	           (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		        and status_asset = 'New' and type_asset = '(power-supply)'
		        OR NOT EXISTS 
	            (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		        and status_asset = 'New' and type_asset = 'POWER SUPPLY'
			   ORDER BY tbl_assets.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="newpower_supply.php">Power Supply&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
				<?php	
	           $count_item=mysql_query("select * from tbl_assets 
			   LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
			   where NOT EXISTS 
	           (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)	   
	           and status_asset = 'New' and type_asset = 'Video Graphic Accelerator (VGA)'
		       OR NOT EXISTS 
	           (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		       and status_asset = 'New' and type_asset = 'VGA'
		       OR NOT EXISTS 
	           (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		       and status_asset = 'New' and type_asset = '(VGA)'
		       OR NOT EXISTS 
	          (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		       and status_asset = 'New' and type_asset = 'Video.Graphic.Accelerator'
		      OR NOT EXISTS 
	          (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		       and status_asset = 'New' and type_asset = 'Video-Graphic-Accelerator'
		      OR NOT EXISTS 
	          (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		       and status_asset = 'New' and type_asset = 'Video_Graphic_Accelerator'
		       OR NOT EXISTS 
	          (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		       and status_asset = 'New' and type_asset = 'VideoGraphicAccelerator'
		       OR NOT EXISTS 
	           (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		       and status_asset = 'New' and type_asset = 'Video Graphic'
		       OR NOT EXISTS 
	          (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		       and status_asset = 'New' and type_asset = 'Vedio Graphic Acelerator'
		       OR NOT EXISTS 
	          (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		       and status_asset = 'New' and type_asset = 'VIDEO GRAPHIC ACCELATOR'
		       OR NOT EXISTS 
	          (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		      and status_asset = 'New' and type_asset = 'VIDEO+GRAPHIC+ACCELATOR'
		      OR NOT EXISTS 
	          (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		      and status_asset = 'New' and type_asset = 'vido grphic'
		      OR NOT EXISTS 
	          (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		      and status_asset = 'New' and type_asset = 'viDo gRphic Accelarator'
		      OR NOT EXISTS 
	          (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		      and status_asset = 'New' and type_asset = 'vedeo graphic'
		      OR NOT EXISTS 
	          (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		      and status_asset = 'New' and type_asset = 'video graphic accelerator'
		      OR NOT EXISTS 
	          (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		      and status_asset = 'New' and type_asset = 'vedio graphic accelerator'
			   ORDER BY tbl_assets.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="newvga.php">VGA Ports&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
				<?php	
	           $count_item=mysql_query("select * from tbl_assets 
			   LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
			   where NOT EXISTS 
	             (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)	   
	             and status_asset = 'New' and type_asset = 'Power cords'
		         OR NOT EXISTS 
	            (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		        and status_asset = 'New' and type_asset = 'Power cord'
		        OR NOT EXISTS 
	            (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		        and status_asset = 'New' and type_asset = 'power_cord'
		        OR NOT EXISTS 
	           (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		        and status_asset = 'New' and type_asset = '(power cord)'
		        OR NOT EXISTS 
	            (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		        and status_asset = 'New' and type_asset = 'power.cord'
		        OR NOT EXISTS 
	            (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		        and status_asset = 'New' and type_asset = '(pwer crd)'
		        OR NOT EXISTS 
	            (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		        and status_asset = 'New' and type_asset = 'powr coRd'
		        OR NOT EXISTS 
	            (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		        and status_asset = 'New' and type_asset = 'ower cord'
		        OR NOT EXISTS 
	            (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		        and status_asset = 'New' and type_asset = 'power cordss'
		        OR NOT EXISTS 
	           (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		        and status_asset = 'New' and type_asset = 'pwer crd'
		        OR NOT EXISTS 
	           (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		        and status_asset = 'New' and type_asset = 'POWER CORD'
		        OR NOT EXISTS 
	            (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		        and status_asset = 'New' and type_asset = 'poer cd'
		        OR NOT EXISTS 
	            (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		        and status_asset = 'New' and type_asset = 'powe cor'
		        OR NOT EXISTS 
	            (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		        and status_asset = 'New' and type_asset = 'powercord'
		        OR NOT EXISTS 
	            (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		         and status_asset = 'New' and type_asset = 'power-cord'
			   ORDER BY tbl_assets.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="newpower_cords.php">Power Cord&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
					<?php	
	           $count_item=mysql_query("select * from tbl_assets 
			   LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
			    where NOT EXISTS 
	           (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)	   
	           and status_asset = 'New' and type_asset = 'AVR'
		       OR NOT EXISTS 
	           (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		       and status_asset = 'New' and type_asset = 'A.V.R'
		       OR NOT EXISTS 
	           (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		       and status_asset = 'New' and type_asset = 'automatic Voltage Regulator'
		       OR NOT EXISTS 
	           (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		       and status_asset = 'New' and type_asset = 'automatic Voltage Reactor'
		       OR NOT EXISTS 
	           (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		       and status_asset = 'New' and type_asset = 'automatic_Voltage_Regulator'
		       OR NOT EXISTS 
	           (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		       and status_asset = 'New' and type_asset = 'automatic-Voltage-Regulator'
		       OR NOT EXISTS 
	           (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		       and status_asset = 'New' and type_asset = 'avrs'
		       OR NOT EXISTS 
	           (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		       and status_asset = 'New' and type_asset = 'automatic v.r'
		       OR NOT EXISTS 
	           (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		       and status_asset = 'New' and type_asset = 'automatic voltage R.'
		       OR NOT EXISTS 
	           (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		        and status_asset = 'New' and type_asset = 'avregulator'
		       OR NOT EXISTS 
	           (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		       and status_asset = 'New' and type_asset = 'automatic Voltage Reactor'
		       OR NOT EXISTS 
	           (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		       and status_asset = 'New' and type_asset = 'automatic-Voltage-Reactor'
		       OR NOT EXISTS 
	           (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		       and status_asset = 'New' and type_asset = 'automaticVoltageReactor'
		       OR NOT EXISTS 
	           (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		       and status_asset = 'New' and type_asset = 'automaticVoltageRegulator'
		       OR NOT EXISTS 
	           (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		       and status_asset = 'New' and type_asset = 'automtic Voltge Reactor'
		       OR NOT EXISTS 
	           (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		       and status_asset = 'New' and type_asset = 'automtic Voltge Regulator'
			   ORDER BY tbl_assets.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="newavr.php">AVR&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
				</ul>
	</div>
</div>
</div>
		
<div class="block-content collapse in">
<div class="span12">
<form id="send" method="post">	
<div class="empty">
	<div class="control-group">
		 <label class="control-label" for="inputEmail">Location Name</label>
			 <div class="controls">
				  <select name="id_location" class="chzn-select" required/>
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
		<button  class="btn btn-primary" id="snd" data-placement="right" title="Click to Send"><i class="icon-share"> Assign Location</i></button>
         <script type="text/javascript">
	     $(document).ready(function(){
	     $('#snd').tooltip('show');
	     $('#snd').tooltip('hide');
	     });
	    </script>
		 		
	  </div>
 </div>
</div>                      
  	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
		<thead>		
		        <tr>
				<th class="empty"></th>
					<th>Tipe Aset</th>
					<th>Device Description </th>
					<th>Inventory Code</th>
			        <th>Device Brand  </th>
					<th>Device Model  </th>
					<th>Device Status  </th>	                						
		    </tr>
		</thead>
<tbody>
<!-----------------------------------Content------------------------------------>
	
		<?php
	    $device_query = mysql_query("select * from tbl_assets 
		LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
		where NOT EXISTS 
	    (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)	   
	     and status_asset = 'New' and type_asset = 'Central Processing unit (CPU)'
		 OR NOT EXISTS 
	    (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		 and status_asset = 'New' and type_asset = 'central processing unit'
		 OR NOT EXISTS 
	    (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		 and status_asset = 'New' and type_asset = 'central_processing_unit'
		 OR NOT EXISTS 
	    (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		 and status_asset = 'New' and type_asset = 'cpu'
		 OR NOT EXISTS 
	    (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		 and status_asset = 'New' and type_asset = 'c_p_u'
		 OR NOT EXISTS 
	    (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		 and status_asset = 'New' and type_asset = 'c.p.u.'
		 OR NOT EXISTS 
	    (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		 and status_asset = 'New' and type_asset = 'cntral prcessing unit'
		 OR NOT EXISTS 
	    (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		 and status_asset = 'New' and type_asset = 'centrl procesing unit'
		 OR NOT EXISTS 
	    (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		 and status_asset = 'New' and type_asset = 'central processing nit'
		 OR NOT EXISTS 
	    (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		 and status_asset = 'New' and type_asset = 'cenRal processing unt'
		 OR NOT EXISTS 
	    (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		 and status_asset = 'New' and type_asset = 'cetral processin unit'
		 OR NOT EXISTS 
	    (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		 and status_asset = 'New' and type_asset = 'cetral_processin_unit'
		 OR NOT EXISTS 
	    (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		 and status_asset = 'New' and type_asset = 'centralprocessingunit'
		 OR NOT EXISTS 
	    (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		 and status_asset = 'New' and type_asset = 'CENTRAL PROCESSING UNIT'
		 OR NOT EXISTS 
	    (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		 and status_asset = 'New' and type_asset = '(CPU)'
		 OR NOT EXISTS 
	    (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		 and status_asset = 'New' and type_asset = '(Central Processing unit (CPU))'
		 
		ORDER BY tbl_assets.id DESC") or die(mysql_error());
	    while ($row = mysql_fetch_array($device_query)) {
		$id = $row['id'];
		?>
										
		<tr>
		<td width="30" class="empty">
			<input id="" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>&nbspName&nbsp<?php echo $type_asset; ?>" >
		</td>
			<td><?php echo $row['type_asset']; ?></td>
			<td><?php echo $row['desc_asset']; ?></td>
			<td><?php echo $row['dev_serial']; ?></td>
			<td><?php echo $row['dev_brand']; ?></td>
			<td><?php echo $row['dev_model']; ?></td>
			<td><div class="alert alert-success"><i class="icon-check"></i><strong><?php echo $row['status_asset']; ?></strong></div></td>												
		</tr>
											
	<?php } ?>   

</tbody>
</table>
</form>		
<script>
		jQuery(document).ready(function(){
		jQuery("#send").submit(function(e){
			e.preventDefault();{												
			var formData = jQuery(this).serialize();
			$.ajax({
			type: "POST",
			url: "send.php",
			data: formData,
			success: function(html){
					
			$.jGrowl("Device Successfully Assign", { header: 'Device Assign' });
			var delay = 500;
			setTimeout(function(){ window.location = 'device_location.php'  }, delay);  
						
			}
												
		 });
			
	   }
	});
});
</script>		
			  		
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