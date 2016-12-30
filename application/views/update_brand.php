<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<h2> Create brand </h2>
	<?php 
		echo form_open_multipart('brands/do_edit');
		echo form_label('Brand Name');
		echo form_input('brand_name', $result->brand_name);
		echo br();
		echo form_label('Alias');
		echo form_input('alias', $result->alias);
		echo br();
		echo form_label('Description');
		echo form_textarea('description', $result->description);
		echo br();
		echo form_hidden('brand_id', $result->brand_id);
		echo form_upload('logo');
		echo br();
		echo form_submit('save', 'Save');
		
	?>
</body>
</html>