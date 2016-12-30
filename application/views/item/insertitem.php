<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<h2> Create Item </h2>
	<?php 
		echo form_open_multipart('items/insert');
		echo form_label('Item Name');
		echo form_input('item_name');
		echo br();
		echo form_label('Price');
		echo form_input('price');
		echo br();
		echo form_label('Category');
		$options = array(
                  'short'  => 'short',
                  'party'    => 'party',
                );
		echo form_dropdown('category', $options);
		echo br();
		echo form_upload('thumbnail');
		echo br();
		echo form_submit('save', 'Save');
		
		//echo $errors;
		
	?>
</body>
</html>