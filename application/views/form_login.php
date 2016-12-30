<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php 
		echo form_open('Logins/check_users');
		echo form_label('Gmail');
		echo form_input('gmail', set_value('gmail'));
		echo form_error('gmail');
		echo br();
		echo form_label('Password');
		echo form_password('password');
		echo form_error('password');
		echo br();
		echo form_submit('submit', 'Login');
		echo form_close();
		
		echo anchor('Logins/signup', 'Sign Up');
		echo $error;
	?>
</body>
</html>