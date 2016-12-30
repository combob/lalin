<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<h2> list of brand</h2>
	
	<?php echo anchor('brands/add_brand', 'Add Brand');?>
	<table> 
		<tr> 
			<th>No</th>
			<th>Brand Name</th>
			<!--<th>Logo</th>-->
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
			<td><?php echo $value->brand_name;?></td>
			<!--<td><img src="<?php echo base_url('uploads/'.$value->banner);?>"></td>-->
			<td><?php echo $value->alias;?></td>
			<td><?php echo $value->description;?></td>
			<td> 
				<?php echo anchor('brands/delete/'.$value->brand_id, 'Delete');?>
				<?php echo anchor('brands/edit/'.$value->brand_id, 'Edit');?>
			</td>
		</tr>
	<?php
		$i++;
		}
	?>
	</table>
</body>
</html>