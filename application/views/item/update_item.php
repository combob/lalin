<!--
	<h2> Create Item </h2>
	<?php 
		echo form_open_multipart('items/do_edit');
		echo form_label('Item Name');
		echo form_input('item_name', $result->item_name);
		echo br();
		echo form_label('Price');
		echo form_input('price', $result->price);
		echo br();
		echo form_label('Category');
		$options = array(
                  'short'  => 'short',
                  'party'    => 'party',
                );
		echo form_dropdown('category', $options, $result->category);
		echo br();
		echo form_hidden('item_id', $result->item_id);
		echo form_upload('thumbnail');
		echo br();
		echo form_submit('save', 'Save');
		
		//echo $errors;
	
	?>
	-->
	
	<div class="row bottom70"> 
		<div class="large-12 columns top20"> 
			<div class="dashboard-moborder"> 
				<?php echo form_open_multipart('items/do_edit', array('id' => 'fromedit'));?> 
					<h5 class="top20"> Product Information </h5>
					<div class="row"> 
						<div class="large-8 columns??"> 
							<div class="row top30">
								<div class="large-4 columns">
									<label for="right-label" class="right inline"><span class="red"> * </span>Product Name</label>
								</div>
								<div class="large-8 columns name-field">
									<input type="text" name="item_name" placeholder="Product Name" value="<?php echo $result->item_name;?>" required>
								</div>
							</div>
							
							<div class="row">
								<div class="large-4 columns">
									<label for="right-label" class="right inline"><span class="red"> * </span>Category</label>
								</div>
								<div class="large-8 columns name-field"> 
									<select name="category">
										<?php 
											foreach($category->result() as $cate){
													echo '<option selected="'.$result->category.'" value="'.$cate->category_name.'">'.$cate->category_name.'</option>';
											}
										?>
									</select>
								</div>
							</div>
							
							<div class="row">
								<div class="large-4 columns">
								  <label for="right-label" class="right inline"><span class="red"> * </span>Brand</label>
								</div>
								<div class="large-8 columns name-field">
									<select  name="brand">
										<?php 
											foreach($brand->result() as $bran){
													echo '<option selected="'.$result->brand.'" value="'.$bran->brand_name.'">'.$bran->brand_name.'</option>';
											}
										?>
									</select>
								</div>
							</div>
							
							<div class="row">
								<div class="large-4 columns">
									<label for="right-label" class="right inline"><span class="red"> * </span>Price</label>
								</div>
								<div class="large-8 columns name-field">
									<input type="text" name="price" placeholder="Price" value="<?php echo $result->price;?>" required />
								</div>
							</div>
							
							<div class="row">
								<div class="large-4 columns">
								  <label for="right-label" class="right inline"><span class="red"> * </span>Add to shop</label>
								</div>
								<div class="large-8 columns name-field">
									<select name="shop">
										<?php 
											foreach($shop->result() as $shops){
													echo '<option selected="'.$result->shop.'" value="'.$shops->shop_name.'">'.$shops->shop_name.'</option>';
											}
										?>
									</select>
								</div>
							</div>
							
							<div class="row top5">
									<div class="large-4 columns">&nbsp;</div>
									<div class="large-8 columns name-field">
										<input type="hidden" value="0" name="best_seller"  />
										<input type="checkbox" name="best_seller" id="pro_popular" value="1" />
										<span> &nbsp;Best Seller</span>
									</div>
							</div>
							
							<div class="row top10">
								<div class="large-4 columns">
									<label for="right-label" class="right inline">Description</label>
								</div>
								<div class="large-8 columns name-field">
									<textarea rows="8" name="description" placeholder="Description"><?php echo $result->description;?></textarea>
								</div>
							</div>
							
							<?php echo form_hidden('item_id', $result->item_id);?>
							<div class="row">
								<div class="large-4 columns">
									<label for="right-label" class="right inline"><span class="red"> * </span>Product Photo</label>
								</div>
								<div class="large-8 columns name-field">
									<div class="plupload">
										<div class="row" id="multi-upload">
											<div id="img_block" class="large-3 columns name-field pro_file">
												<div class="product_img">
													<img src="img/no-image.png">
												</div>
												<input type="file" name="product_main_img" id="product_main_img" onchange="readURL(this);" title="" />
											</div>
											
											<div id="img_block" class="large-3 columns name-field pro_file left">
												<div class="product_img_1 addmore">
													<img src="img/no-image.png">
												</div>
												<input type="file" name="product_img[]" id="product_img_1" rowNum="1" onchange="readURLmat(this);" title="" />
											</div>
											<div id="img_block" class="large-3 columns name-field pro_file left">
												<div class="product_img_2 addmore">
													<img src="img/no-image.png">
												</div>
												<input type="file" name="product_img[]" id="product_img_2" rowNum="2" onchange="readURLmat(this);" title="" />
											</div>
											
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
					<div class="row">
						<div class="large-8 columns??"></div>
						<div class="row top20">
							<div class="large-8 columns right">
								<input type="submit" name="add_item" class="tiny button" value="Save">
							</div>
						</div> 
					</div> 
				<?php echo form_close()?>
			</div>
		</div>
	</div>