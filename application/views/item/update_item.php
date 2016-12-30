<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<h2> Create Item </h2>
	<?php 
		echo form_open_multipart('items/do_edit');
		echo form_label('Item Name');
		echo form_input('item_name', $result->item_name);
		echo br();
		echo form_label('Price');
		echo form_input('price', $result->price);
		echo br();
		echo form_label('Category');
		$options = array(
                  'short'  => 'short',
                  'party'    => 'party',
                );
		echo form_dropdown('category', $options, $result->category);
		echo br();
		echo form_hidden('item_id', $result->item_id);
		echo form_upload('thumbnail');
		echo br();
		echo form_submit('save', 'Save');
		
		//echo $errors;
	?>
</body>
</html>