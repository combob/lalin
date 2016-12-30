<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<h2> list of shop</h2>
	
	<?php echo anchor('Shops/addshop', 'Add Shop');?>
	<table> 
		<tr> 
			<th>No</th>
			<th>Shop Name</th>
			<!--<th>Banner</th>-->
			<th>category</th>
			<th>Action</th>
		</tr>
	
	<?php
		//echo anchor('Shops/addshop', 'Add New Shop');
		//echo br();
		$i = 1;
		foreach($result->result() as $value){
	?>
		<tr> 
			<td><?php echo $i;?></td>
			<td><?php echo $value->shop_name;?></td>
			<!--<td><img src="<?php echo base_url('uploads/'.$value->banner);?>"></td>-->
			<td><?php echo $value->category;?></td>
			<td> 
				<?php echo anchor('shops/delete/'.$value->shop_id, 'Delete');?>
				<?php echo anchor('shops/edit/'.$value->shop_id, 'Edit');?>
			</td>
		</tr>
	<?php
		$i++;
		}
	?>
	</table>
</body>
</html>