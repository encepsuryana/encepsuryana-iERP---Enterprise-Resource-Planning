
<div class="row-fluid">
  <!-- block -->
  <div class="block">
    <div class="navbar navbar-inner block-header">
      <div class="muted pull-left"><i class="icon-plus-sign icon-large"> Tambah Tipe Komputer</i></div>
    </div>
    <div class="block-content collapse in">
      <div class="span12">

       <!--------------------form------------------->
       <form method="post">
        <div class="control-group">
          <div class="controls">
            <input class="input focused" name="type_asset" id="focusedInput" type="text" placeholder = "Tipe Aset" required>
          </div>
        </div>

        <div class="control-group">
          <div class="controls">
            <button name="save" class="btn btn-info" id="save" data-placement="right" title="Klik untuk simpan"><i class="icon-plus-sign icon-large"> Simpan</i></button>
            <script type="text/javascript">
             $(document).ready(function(){
               $('#save').tooltip('show');
               $('#save').tooltip('hide');
             });
           </script>
         </div>
       </div>
     </form>

   </div>
 </div>
</div>
<!-- /block -->
</div>				 
<?php
if (isset($_POST['save'])){
  $type_asset = $_POST['type_asset'];

  $query = mysql_query("select * from tbl_asset_type where type_asset = '$type_asset'")or die(mysql_error());
  $count = mysql_num_rows($query);

  if ($count > 0){ ?>
    <script>
      alert('Davice Name Already Exist');
    </script>
    <?php
  }else{

    mysql_query("insert into tbl_asset_type (type_asset) values('$type_asset')")or die(mysql_error());

    mysql_query("insert into activity_log (date,user_admin,action) values(NOW(),'$admin_username','Add device Type $type_asset')")or die(mysql_error());
    ?>
    <script>
      window.location = "assets_type.php";
      $.jGrowl("Tipe Aset Successfully added", { header: 'Tipe Aset add' });
    </script>
    <?php
  }
}
?>