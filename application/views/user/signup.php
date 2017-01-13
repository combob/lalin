    <!-- main signup content -->
    <div class="row">
    <!-- start left-side -->
    <div class="large-8 medium-8 small-12 columns signup-frm">   
      <h5 class="top70">Create your account</h5>
		<?php echo form_open('Logins/adduser', array('class' => 'data-abide'));?>
		<div class="row top50">
			<div class="large-4 columns">
			<?php 
				$u_name_label_attr = array(
					'class' => 'right inline',
					'for' => 'right-label',
				);
				echo form_label('First Name','right-label', $u_name_label_attr);
			?>
			</div>
          <div class="large-8 columns name-field">
			<?php
				$u_name_attr = array(
					'name' => 'fname',
					'placeholder' => 'First Name'
				);
				echo form_input($u_name_attr);
			?>
          </div>
        </div>
		<div class="row">
			<div class="large-4 columns">
			<?php 
				$u_name_label_attr = array(
					'class' => 'right inline',
					'for' => 'right-label',
				);
				echo form_label('Last Name','right-label', $u_name_label_attr);
			?>
			</div>
          <div class="large-8 columns name-field">
			<?php
				$u_name_attr = array(
					'name' => 'lname',
					'placeholder' => 'Last Name'
				);
				echo form_input($u_name_attr);
			?>
          </div>
        </div>
		<div class="row">
			<div class="large-4 columns">
			<?php 
				$u_name_label_attr = array(
					'class' => 'right inline',
					'for' => 'right-label',
				);
				echo form_label('Username','right-label', $u_name_label_attr);
			?>
			</div>
          <div class="large-8 columns name-field">
			<?php
				$u_name_attr = array(
					'name' => 'username',
					'placeholder' => 'Username'
				);
				echo form_input($u_name_attr);
			?>
          </div>
        </div>
		<div class="row">
          <div class="large-4 columns">
			<?php 
				$u_email_label_attr = array(
					'class' => 'right inline'
				);
				echo form_label('Email', 'right-label', $u_email_label_attr);
			?>
          </div>
          <div class="large-8 columns email-field">
			<?php 
				$u_email_attr = array(
					'type' => 'email',
					'name' => 'email',
					'placeholder' => 'Email'
				);
				echo form_input($u_email_attr);
			?>
          </div>
        </div>
		<div class="row">
          <div class="large-4 columns">
			<?php 
				$u_tel_label_attr = array(
					'class' => 'right inline'
				);
				echo form_label('Tel', 'Tel', $u_tel_label_attr);
			?>
          </div>
          <div class="large-8 columns email-field">
			<?php 
				$u_tel_attr = array(
					'type' => 'text',
					'name' => 'phone',
					'placeholder' => 'Phone Numer'
				);
				echo form_input($u_tel_attr);
			?>
          </div>
        </div>
		<div class="row top10">
          <div class="large-4 columns">
			<?php
				$u_pass_label_attr = array(
					'class' => 'right inline',
				);
				echo form_label('Create Password','right-label',$u_pass_label_attr);
			?>
          </div>
          <div class="large-8 columns password-field">
			<?php 
				$u_pass_attr = array(
					'name' => 'password',
					'id' => 'password',
					'placeholder' => 'Password'
				);
				echo form_password($u_pass_attr);
			?>
          </div>
        </div>
		<div class="row">
          <div class="large-4 columns">
			<?php 
				$u_repass_label_attr = array(
					'class' => 'right inline',
				);
				echo form_label('Re-enter Password', 'right-label', $u_repass_label_attr);
			?>
          </div>
          <div class="large-8 columns password-confirmation-field">
			<?php 
				$u_repass_attr = array(
					'name' => 'repassword',
					'data-abide' => 'password',
					'placeholder' => 'Re-enter Password'
				);
				echo form_password($u_repass_attr);
			?>
          </div>
        </div>
		<div class="row">
          <div class="large-4 columns">
			<?php 
				$secur_label_attr = array(
					'class' => 'right inline'
				);
				echo form_label('Security', 'Security', $secur_label_attr);
			?>
          </div>
          <div class="large-4 columns left">
            <div class="g-recaptcha" data-sitekey="6LeOeQgTAAAAAH2tu3WQ_FA5GqyM-f5mfNRpQ2ab"></div>
          </div>
        </div>
        <div class="row">
          <div class="large-4 columns">
            &nbsp;
          </div>
          <div class="large-4 columns left">
			<?php 
				$secur_attr = array(
					'name' => 'firt-name',
					'placeholder' => 'code'
				);
				echo form_input($secur_attr);
			?>
          </div>
        </div>
		<div class="row top20">
          <div class="large-8 columns right">
			<?php
				$submit = array(
					'type' => 'submit',
					'name' => 'create_account',
					'class' => 'tiny button',
					'value' => 'Create Account'
				);
				echo form_submit($submit);
			?>
          </div>
        </div>
		<?php echo form_close()?>
    </div>   
  </div>