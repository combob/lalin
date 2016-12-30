<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php 
		
		echo form_open('Logins/adduser');
		echo form_label('First Name');
		echo form_input('fname');
		echo br();
		echo form_label('Last Name');
		echo form_input('lname');
		echo br();
		echo form_label('Username');
		echo form_input('username');
		echo br();
		echo form_label('Password');
		echo form_password('password');
		echo br();
		echo form_label('Re-Password');
		echo form_password('repassword');
		echo br();
		echo form_label('Phone Number');
		echo form_input('phone');
		echo br();
		echo form_label('Email');
		echo form_input('gmail');
		echo br();
		echo form_submit('submit', 'Sign Up');
		echo form_close();
	
	?>
</body>
</html>