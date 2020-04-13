<?php
										include("./lib/dbcon.php");
										dbcon();			
										$type_asset = $_POST['type_asset'];
										$desc_asset = $_POST['desc_asset'];
										$dev_serial = $_POST['dev_serial'];
										$dev_brand = $_POST['dev_brand'];
										$dev_model = $_POST['dev_model'];
										$status_asset = $_POST['status_asset'];
										
						
										$query = mysql_query("select * from tbl_assets where dev_serial = '$dev_serial' ")or die(mysql_error());
										$count = mysql_num_rows($query);

										if ($count > 0){ ?>
										<script>
										alert('Warning Device Serial Number already Exist');
										window.location = "device_stocks.php";
										</script>
										<?php
										}else{
										mysql_query("insert into tbl_assets (type_asset,desc_asset,dev_serial,dev_brand,dev_model,status_asset) values('$type_asset','$desc_asset','$dev_serial','$dev_brand','$dev_model','$status_asset')")or die(mysql_error());
																				
										?>
										<script>
										window.location = "device_stocks.php";
										</script>
										<?php
										}										
										
										?>