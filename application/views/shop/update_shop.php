<!--
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
		
	?>-->

	<!-- add item process -->
    <div class="row bottom70">
		<div class="large-12 columns top20">
			<div class="dashboard-noborder">
				<?php echo form_open_multipart('shops/do_edit', array('id' => 'fromedit'));?>
					<h5 class="top20">Product Information</h5>
						<div class="row">
							<div class="large-8 columns??">
								<div class="row top30">
									<div class="large-4 columns">
										<label for="right-label" class="right inline"><span class="red"> * </span>Shop Name</label>
									</div>
									<div class="large-8 columns name-field">
										<input type="text" name="shop_name" placeholder="Shop Name" value="<?php echo $result->shop_name;?>" required>
									</div>
								</div>
								
								<div class="row">
									<div class="large-4 columns">
										<label for="right-label" class="right inline"><span class="red"> * </span>Category</label>
									</div>
									<div class="large-8 columns name-field">
										<select  name="category">
											<?php 
												foreach($posts->result() as $category){
													echo '<option value="'.$category->category_name.'">'.$category->category_name.'</option>';
												}
											?>
										</select>
									</div>
								</div>
							  
								<div class="row top10">
									<div class="large-4 columns">
										<label for="right-label" class="right inline">Description</label>
									</div>
									<div class="large-8 columns name-field">
										<textarea rows="8" name="description" placeholder="Description"><?php echo $result->description?></textarea>
									</div>
								</div>
								
								<div class="row">
									<div class="large-4 columns">
										<label for="right-label" class="right inline"><span class="red"> * </span>Product Photo</label>
									</div>
									<div class="large-8 columns name-field">
										<div class="plupload">
											<div class="row" id="multi-upload">
												<div id="img_block" class="large-3 columns name-field pro_file left">
													<div class="product_img_3 addmore">
														<img src="img/no-image.png">
													</div>
													<input type="file" name="product_img[]" id="product_img_3" rowNum="3" onchange="readURLmat(this);" title="" />
												</div>
												
												<script type="text/javascript">
													function readURLmat(input) {
														if (input.files && input.files[0]) {
															var reader = new FileReader();
															var rowNum=$(input).attr('rowNum');
															reader.onload = function (i) {
																$('.product_img_'+rowNum+'.addmore').html('<a class="delete remove_uploaded" id="delete'+rowNum+'"></a><img class="showimg" id="img'+rowNum+'" width="100" height="87" src="'+i.target.result+'">');      
																	$('#delete'+rowNum).on('click', function(){
																		$('#img'+rowNum).remove();
																		$('#delete'+rowNum).remove();
																		$('.product_img_'+rowNum+'.addmore').prepend('<img src="http://dalin-pc/mekong/wp-content/themes/ict4gshop/img/no-image.png"/>');
																	});
															};
															reader.readAsDataURL(input.files[0]);
														}
													} 
												</script>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
		
					<div class="dashed top50"></div>
					<h5 class="top20">Contact Information</h5>
						<div class="row">
							<div class="large-8 columns??">
								<div class="row top30">
									<div class="large-4 columns">
										<label for="right-label" class="right inline"><span class="red"> * </span>Name</label>
									</div>
									<div class="large-8 columns name-field">
										<input type="text" name="contact_name" placeholder="Contact Name" value="<?php echo $result->contact_name;?>" required>
									</div>
								</div>
							
								<div class="row top">
									<div class="large-4 columns">
										<label for="right-label" class="right inline"><span class="red"> * </span>Phone</label>
									</div>
									<div class="large-8 columns name-field">
										<input type="text" name="contact_phone" placeholder="Phone" value="<?php echo $result->contact_phone;?>" required>
									</div>
								</div>
								
								<div class="row top">
									<div class="large-4 columns">
										<label for="right-label" class="right inline"><span class="red"> * </span>Email</label>
									</div>
									<div class="large-8 columns name-field">
										<input type="text" name="contact_email" placeholder="Email" value="<?php echo $result->contact_email;?>" required>
									</div>
								</div>
								
								<div class="row top10">
									<div class="large-4 columns">
										<label for="right-label" class="right inline">Address</label>
									</div>
									<div class="large-8 columns name-field">
										<textarea rows="8" name="contact_address" placeholder="Address" required><?php echo $result->contact_address;?></textarea>
									</div>
								</div>
							</div> 
						</div>
						<?php echo form_hidden('shop_id', $result->shop_id);?>
					<div class="dashed top50"></div>
		   
					<div class="large-8 columns??"></div>
						<div class="row top20">
							<div class="large-8 columns right">
							  <input type="submit" name="add_item" class="tiny button" value="Create Shop">
							</div>
						</div> 
				
				<?php echo form_close();?>
			</div>
		</div>
	</div>