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
	?>
	<select  name="category">
	<?php 
		foreach($posts->result() as $category){
				echo '<option value="'.$category->category_name.'">'.$category->category_name.'</option>';
		}
	?>
	</select>
	<?php
		echo br();
		echo form_label('Description');
		echo form_textarea('description');
		echo br();
		echo form_upload('pro_img');
		echo br();
		
		// input for shop's information
		echo '<hr />';
		echo '<h2> Contact Information </h2>';
		echo br();
		echo form_label('Name');
		echo form_input('contact_name');
		echo br();
		echo form_label('Phone');
		echo form_input('contact_phone');
		echo br();
		echo form_label('Email');
		echo form_input('contact_email');
		echo br();
		echo form_label('Address');
		echo form_textarea('contact_address');
		echo br();
		echo form_submit('save', 'Save');
		
		echo $errors;
		echo form_close()
	?>
</body>
</html>