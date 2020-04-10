   <div class="row-fluid">
    <!-- block -->
    <div class="block">
      <div class="navbar navbar-inner block-header">
        <div class="muted pull-left"><i class="icon-plus-sign icon-large"> Tambah Pengguna</i></div>
      </div>
      <div class="block-content collapse in">
        <div class="span12">
          <form method="post">
            <div class="control-group">
              <div class="controls">
                <input class="input focused" name="firstnm_admin" id="focusedInput" type="text" placeholder = "Nama Depan" required>
              </div>
            </div>

            <div class="control-group">
              <div class="controls">
                <input class="input focused" name="lastnm_admin" id="focusedInput" type="text" placeholder = "Nama Belakang" required>
              </div>
            </div>

            <div class="control-group">
              <div class="controls">
                <input class="input focused" name="user_admin" id="focusedInput" type="text" placeholder = "Username" required>
              </div>
            </div>

            <div class="control-group">
              <div class="controls">
                <input class="input focused" name="pass_admin" id="focusedInput" type="password" placeholder = "Password" required>
              </div>
            </div>

            <div class="control-group">
              <div class="controls">
                <button name="save" class="btn btn-info" id="save" data-placement="right" title="Klik untuk simpan"><i class="icon-plus-sign icon-large"> Save</i></button>
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
  $firstnm_admin = $_POST['firstnm_admin'];
  $lastnm_admin  = $_POST['lastnm_admin'];
  $user_admin    = $_POST['user_admin'];
  $pass_admin    = $_POST['pass_admin'];

  $query = mysql_query("select * from tbl_admin where user_admin = '$user_admin' and pass_admin = '$pass_admin' and firstnm_admin = '$firstnm_admin' and pass_admin = '$pass_admin' ")or die(mysql_error());
  $count = mysql_num_rows($query);

  if ($count > 0){ ?>
    <script>
      alert('Data Already Exist');
    </script>
    <?php
  }else{
    mysql_query("insert into tbl_admin (user_admin,pass_admin,firstnm_admin,lastnm_admin,pict_admin) values('$user_admin','$pass_admin','$firstnm_admin','$lastnm_admin','images/NO-IMAGE-AVAILABLE.jpg')")or die(mysql_error());

    mysql_query("insert into activity_log (date,user_admin,action) values(NOW(),'$admin_username','Add User Admin $firstnm_admin')")or die(mysql_error());
    ?>
    <script>
      window.location = "admin_user.php";
      $.jGrowl("User Admin Successfully added", { header: 'User Admin add' });
    </script>
    <?php
  }
}
?>