   <div class="row-fluid">
     <a href="admin_user.php" class="btn btn-info" id="add" data-placement="right" title="Click to Add System User" ><i class="icon-plus-sign icon-large"></i> Add System user</a>
     <script type="text/javascript">
       $(document).ready(function(){
         $('#add').tooltip('show');
         $('#add').tooltip('hide');
       });
     </script>
     <!-- block -->
     <div class="block">
      <div class="navbar navbar-inner block-header">
        <div class="muted pull-left"><i class="icon-pencil icon-large"></i> Edit System User</div>
      </div>
      <div class="block-content collapse in">
        <div class="span12">
          <?php
          $query = mysql_query("select * from tbl_admin where id_admin = '$get_id'")or die(mysql_error());
          $row = mysql_fetch_array($query);
          ?>
          <form method="post">
            <div class="control-group">
              <div class="controls">
                <input class="input focused" value="<?php echo $row['firstnm_admin']; ?>" name="firstnm_admin" id="focusedInput" type="text" placeholder = "Nama Depan" required>
              </div>
            </div>
            
            <div class="control-group">
              <div class="controls">
                <input class="input focused" value="<?php echo $row['lastnm_admin']; ?>"  name="lastnm_admin" id="focusedInput" type="text" placeholder = "Nama Belakang" required>
              </div>
            </div>
            
            <div class="control-group">
              <div class="controls">
                <input class="input focused" value="<?php echo $row['user_admin']; ?>"  name="user_admin" id="focusedInput" type="text" placeholder = "user_admin" required>
              </div>
            </div>
            
            <div class="control-group">
              <div class="controls">
                <button name="update" class="btn btn-success" id="update" data-placement="right" title="Click to Update"><i class="icon-save icon-large"></i> Update</button>
                <script type="text/javascript">
                 $(document).ready(function(){
                   $('#update').tooltip('show');
                   $('#update').tooltip('hide');
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
 if (isset($_POST['update'])){

  $firstnm_admin = $_POST['firstnm_admin'];
  $lastnm_admin = $_POST['lastnm_admin'];
  $user_admin = $_POST['user_admin'];


  mysql_query("update tbl_admin set user_admin = '$user_admin'  , firstnm_admin = '$firstnm_admin' , lastnm_admin = '$lastnm_admin' where id_admin = '$get_id' ")or die(mysql_error());
  mysql_query("insert into activity_log (date,user_admin,action) values(NOW(),'$admin_username','Edit system User $firstnm_admin')")or die(mysql_error());	
  ?>
  <script>
    window.location = "admin_user.php"; 
    $.jGrowl("System User Successfully Update", { header: 'System User Update' });
  </script>
  <?php
}
?>