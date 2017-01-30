<!--
	<h2> Create brand </h2>
	<?php 
		echo form_open_multipart('brands/insert');
		echo form_label('Brand Name');
		echo form_input('brand_name');
		echo br();
		echo form_label('Alias');
		echo form_input('alias');
		echo br();
		echo form_label('Description');
		echo form_textarea('description');
		echo br();
		echo form_upload('logo');
		echo br();
		echo form_submit('save', 'Save');
		
	?>
-->
	
	<!-- add item process -->
    <div class="row bottom70">
    <div class="large-12 columns top20">
      <div class="dashboard-noborder">
		<?php echo form_open_multipart('brands/insert', array('id' => 'fromedit'));?>
          <h5 class="top20">Brand Information</h5>
          <div class="row">
            <div class="large-8 columns??">
                <div class="row top30">
                  <div class="large-4 columns">
                      <label for="right-label" class="right inline"><span class="red"> * </span>Brand Name</label>
                  </div>
                  <div class="large-8 columns name-field">
                      <input type="text" name="brand_name" placeholder="Brand Name" required>
                  </div>
                </div>
               
                <div class="row">
                  <div class="large-4 columns">
                      <label for="right-label" class="right inline"><span class="red"> * </span>Alias</label>
                  </div>
                  <div class="large-8 columns name-field">
                      <input type="text" name="alias" placeholder="alias" required />
                  </div>
                </div>
              
                <div class="row top10">
                  <div class="large-4 columns">
                      <label for="right-label" class="right inline">Description</label>
                  </div>
                  <div class="large-8 columns name-field">
                      <textarea rows="8" name="description" placeholder="Description" required></textarea>
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
							<input type="file" name="logo" id="product_img_3" rowNum="3" onchange="readURLmat(this);" title="" />
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
                  <input type="submit" name="add_item" class="tiny button" value="Add New Brand">
                </div>
              </div> 
          </div>  
        <?php echo form_close();?>
      </div>
  </div>
</div>