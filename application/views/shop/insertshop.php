<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<h2> Create Shop </h2>
	<?php 
		echo form_open_multipart('shops/insert');
		echo form_label('Shop Name');
		echo form_input('shop_name');
		echo br();
		echo form_label('Category');
		$options = array(
                  'small'  => 'Small Shirt',
                  'med'    => 'Medium Shirt',
                  'large'   => 'Large Shirt',
                  'xlarge' => 'Extra Large Shirt',
                );
		echo form_dropdown('category', $options);
		echo br();
		echo form_upload('pro_img');
		echo br();
		echo form_submit('save', 'Save');
		
		echo $errors;
		
	?>
</body>
</html>