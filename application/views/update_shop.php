<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php 
		echo form_open_multipart('shops/do_edit');
		echo form_label('Shop Name');
		echo form_input('shop_name', $result->shop_name);
		echo br();
		$data = array();
		echo form_label('Category');
		$options = array(
                  'small'  => 'Small Shirt',
                  'med'    => 'Medium Shirt',
                  'large'   => 'Large Shirt',
                  'xlarge' => 'Extra Large Shirt',
                );
		echo form_dropdown('category', $options, $result->category);
		echo br();
		echo form_hidden('shop_id', $result->shop_id);
		echo form_upload('banner');
		echo br();
		echo form_submit('save', 'Save');
		//echo form_close();
		
	?>
</body>
</html>