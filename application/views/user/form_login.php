	<!-- main login content -->
    <div class="row bottom70">
    <!-- start left-side -->
    <div class="large-7 medium-6 small-12 columns signup-frm top70">   
      <img src="<?php echo base_url();?>/assets/img/e-credit-banner.jpg">
    </div>
    <!-- start right-side -->
    <div class="large-5 medium-6 small-12 columns login-form top50">
    	<?php 
    		$u_email_attr = array(
			 	'name' => 'u_email',
			 	'id' => 'u_email',
			 	'value' => set_value('u_email'),
    		'placeholder' => 'Email'
			);
			echo form_open('Logins/check_users');
			echo form_label('Email');
			echo form_input('u_email', set_value('u_email'), $u_email_attr);
			echo form_error('u_email');
			$u_password_attr = array(
    		'name' => 'u_password',
			 	'id' => 'u_password',
			 	'value' => set_value('u_password'),
    		'placeholder' => 'Password'
    	);
			echo form_label('Password');
			echo form_password('u_password', set_value('u_password'), $u_password_attr);
			echo form_error('u_password');
			$u_sign_attr = array(
        'id' => 'sing_in',
  			'class' => 'button expand'
    	);
			echo form_submit('submit', 'Sign In', $u_sign_attr);
			echo form_close();
			echo $error;
		?>
		<div class="row">
            <div class="large-12 columns join-link">
              <?php echo anchor('Logins/signup', 'Join Free');?>
            </div>
          </div>
          <div class="row">
            <div class="large-12 columns">
              <div class="xloginPartnerWrapper">
                <span>Sign in with:</span>
              </div>
            </div>
          </div>
    </div>  
  </div>