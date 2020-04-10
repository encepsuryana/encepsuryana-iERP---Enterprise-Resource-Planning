			
<form id="login_form1" class="form-signin" method="post">
	<h3 class="form-signin-heading">
		<i class="icon-lock"></i> Silahkan Login
	</h3>
	<input type="text" class="input-block-level" id="username" name="username" placeholder="Username" required>
	<input type="password" class="input-block-level" id="password" name="password" placeholder="Password" required>
	<div class="text-right">
		<button data-placement="left" title="Click Here to Sign In" id="signin" name="login" class="btn btn-info" type="submit"><i class="icon-signin icon-large"></i> Sign in</button>
	</div>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#signin').tooltip('show');
			$('#signin').tooltip('hide');
		});
	</script>		
</form>
<script>
	jQuery(document).ready(function(){
		jQuery("#login_form1").submit(function(e){
			e.preventDefault();
			var formData = jQuery(this).serialize();
			$.ajax({
				type: "POST",
				url: "login.php",
				data: formData,
				success: function(html){
					if(html=='true_admin')
					{
						$.jGrowl("Silahkan tunggu......", { sticky: true });
						$.jGrowl("Wilujeng sumping - iERP (Enterprise Resource Planning)", { header: 'Access Granted' });
						var delay = 1000;
						setTimeout(function(){ window.location = 'admin/dashboard.php'  }, delay);  
					}else if (html == 'true'){
						$.jGrowl("Wilujeng sumping - iERP (Enterprise Resource Planning)", { header: 'Access Granted' });
						var delay = 1000;
						setTimeout(function(){ window.location = 'tech-staff/dashboard_client.php'  }, delay);  
					}else {
						$.jGrowl("Silahkan periksa username and Password anda!", { header: 'Login Failed' });
					}
				}
			});
			return false;
		});
	});
</script>
