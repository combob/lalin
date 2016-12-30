<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<h2> list item </h2>
	<?php echo anchor('Items/additem', 'Add Item');?>
	<table> 
		<tr> 
			<th>No</th>
			<th>Item Name</th>
			<!--<th>Banner</th>-->
			<th>Price</th>
			<th>Category</th>
			<th>Action</th>
		</tr>
	
	<?php
		
		$i = 1;
		foreach($result->result() as $value){
	?>
		<tr> 
			<td><?php echo $i;?></td>
			<td><?php echo $value->item_name;?></td>
			<!--<td><img src="<?php echo base_url('uploads/'.$value->banner);?>"></td>-->
			<td><?php echo $value->price;?></td>
			<td><?php echo $value->category;?></td>
			<td> 
				<?php echo anchor('items/delete/'.$value->item_id, 'Delete');?>
				<?php echo anchor('items/edit/'.$value->item_id, 'Edit');?>
			</td>
		</tr>
	<?php
		$i++;
		}
	?>
	</table>
</body>
</html>