<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<h2> Create brand </h2>
	<?php 
		echo form_open_multipart('brands/insert');
		echo form_label('Brand Name');
		echo form_input('brand_name');
		echo br();
		echo form_label('Alias');
		echo form_input('alias');
		echo br();
		echo form_label('Description');
		echo form_textarea('description');
		echo br();
		echo form_upload('logo');
		echo br();
		echo form_submit('save', 'Save');
		
	?>
</body>
</html>