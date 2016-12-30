<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<h2> add category</h2>
	<?php 
		echo form_open_multipart('categories/insert');
		
		echo form_label('Category Name');
		$options = array(
                  'small'  => 'Small Shirt',
                  'med'    => 'Medium Shirt',
                  'large'   => 'Large Shirt',
                  'xlarge' => 'Extra Large Shirt',
                );
		echo form_dropdown('category_name', $options);
		echo br();
		echo form_label('Alias');
		echo form_input('alias');
		echo br();
		echo form_label('Description');
		echo form_input('description');
		echo br();
		echo form_upload('image');
		echo br();
		echo form_submit('save', 'Save');
		
		echo $errors;
		
	?> 
</body>
</html>