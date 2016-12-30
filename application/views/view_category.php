<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<h2> list category </h2>
	<?php echo anchor('Categories/add_category', 'Add Category');?>
	<table> 
		<tr> 
			<th>No</th>
			<th>Category Name</th>
			<!--<th>Banner</th>-->
			<th>Alias</th>
			<th>Description</th>
			<th>Action</th>
		</tr>
	
	<?php
		$i = 1;
		foreach($result->result() as $value){
	?>
		<tr> 
			<td><?php echo $i;?></td>
			<td><?php echo $value->category_name;?></td>
			<!--<td><img src="<?php echo base_url('uploads/'.$value->banner);?>"></td>-->
			<td><?php echo $value->alias;?></td>
			<td><?php echo $value->description;?></td>
			<td> 
				<?php echo anchor('Categories/delete/'.$value->cate_id, 'Delete');?>
				<?php echo anchor('Categories/edit/'.$value->cate_id, 'Edit');?>
			</td>
		</tr>
	<?php
		$i++;
		}
	?>
	</table>
</body>
</html>