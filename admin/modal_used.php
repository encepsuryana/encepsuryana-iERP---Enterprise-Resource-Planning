	<div id="repair<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
			<h3 id="myModalLabel">Maintenance Asset</h3>
		</div>
		<div class="modal-body">
			<div class="alert alert-success">Apakah ingin melakukan maintenance?</div>
		</div>
		<div class="modal-footer">
			<a class="btn btn-success" href="repair.php<?php echo '?id='.$id; ?>">Ya</a>
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Batal</button>
		</div>
	</div>
	
	
	<div id="Dump<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
			<h3 id="myModalLabel">Asset Rusak/Tidak digunakan</h3>
		</div>
		<div class="modal-body">
			<div class="alert alert-danger">Apakah asset ini rusak?</div>
		</div>
		<div class="modal-footer">
			<a class="btn btn-danger" href="dump.php<?php echo '?id='.$id; ?>">Ya</a>
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Batal</button>
		</div>
	</div>
	

