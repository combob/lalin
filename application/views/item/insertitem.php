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
		echo form_label('Brand');
	?>
	<select  name="brand">
	<?php 
		foreach($result->result() as $bran){
				echo '<option value="'.$bran->brand_name.'">'.$bran->brand_name.'</option>';
		}
	?>
	</select>
	<br />
	<?php echo form_label('Category');?>
	<select name="category">
	<?php 
		foreach($posts->result() as $cate){
				echo '<option value="'.$cate->category_name.'">'.$cate->category_name.'</option>';
		}
	?>
	</select>
	<br />
	<?php echo form_label('Shop');?>
	<select name="shop">
	<?php 
		foreach($shop->result() as $shops){
				echo '<option value="'.$shops->shop_name.'">'.$shops->shop_name.'</option>';
		}
	?>
	</select>
	<?php
		echo br();
		echo form_label('Price');
		echo form_input('price');
		echo br();
		echo form_label('Description');
		echo form_textarea('description');
		echo br();
		echo form_upload('thumbnail');
		echo br();
		echo form_submit('save', 'Save');

		//echo $errors;
		
	?>

</body>
</html>