<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<h2> edit category </h2>
	<?php  
		echo form_open_multipart('categories/do_edit');
		
		echo form_label('Category Name');
		$options = array(
                  'small'  => 'Small Shirt',
                  'med'    => 'Medium Shirt',
                  'large'   => 'Large Shirt',
                  'xlarge' => 'Extra Large Shirt',
                );
		echo form_dropdown('category_name', $options, $result->category_name);
		echo br();
		echo form_label('Alias');
		echo form_input('alias', $result->alias);
		echo br();
		echo form_label('Description');
		echo form_input('description', $result->description);
		echo br();
		echo form_hidden('cate_id', $result->cate_id);
		echo form_upload('image');
		echo br();
		echo form_submit('save', 'Save');

	?>
</body>
</html>