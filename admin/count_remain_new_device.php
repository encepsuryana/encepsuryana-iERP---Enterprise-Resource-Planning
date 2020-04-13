				
	 				<?php $query_yes_new = mysql_query("select * from tbl_assets		            
		             where NOT EXISTS 
	                (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		             and status_asset='new' ORDER BY tbl_assets.id DESC")or die(mysql_error());
					$count_no_new = mysql_num_rows($query_yes_new);

		
		            ?>
					<?php $query_no_new = mysql_query("select * from tbl_assets		            
		            where NOT EXISTS 
	                (select * from tbl_location_details where tbl_assets.id = tbl_location_details.id)
		            and status_asset='none' ORDER BY tbl_assets.id DESC")or die(mysql_error());
					$count_yes_new = mysql_num_rows($query_no_new);
					
		            ?>
					
					<?php $not_read_new = $count_no_new -  $count_yes_new; ?>
