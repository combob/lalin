<?php include_once('header.php');?>
<!-- main signup content -->
	<!-- main signup content -->
    <div class="row">
    <!-- start left-side -->
    <div class="large-8 medium-8 small-12 columns signup-frm">   
      	<h5 class="top70">Create your account</h5>
      	<form data-abide>
	        <div class="row top50">
	          <div class="large-4 columns">
	            <label for="right-label" class="right inline">Username<span class="red"> *</span></label>
	          </div>
	          <div class="large-8 columns name-field">
	            <input type="text" name="username" placeholder="username" required pattern="[a-zA-Z]+">
	          </div>
	        </div>
       	</form>
    </div>



    <div class="large-8 medium-8 small-12 columns signup-frm">   
      	<h5 class="top70">Create your account</h5>
      	<?php 
			echo form_open('Logins/adduser');
		?>
    </div>






    <div class="row">
    <!-- start left-side -->
    <div class="large-8 medium-8 small-12 columns signup-frm">   
      	<h5 class="top70">Create your account</h5>
      	<?php 
		echo form_open('Logins/adduser');
		echo form_label('username');
		$username = array(
    		'name' => 'username',
			'id' => 'username',
			'value' => set_value('username'),
    		'placeholder' => 'Username'
    	);
		echo form_input('username', set_value('username'), $username);
		echo form_submit('submit', 'Sign Up');
		echo form_close();
	?>
    </div>   
  </div>
<?php include_once('footer.php');?>