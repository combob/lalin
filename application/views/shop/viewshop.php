	<script type="text/javascript"> 
						function changeimg(){
							var status = document.getElementsByClassName("status")[0];
							
							if(status.src.match("<?php echo base_url('uploads/no.png');?>")){
								status.src = "<?php echo base_url('uploads/yes.png');?>";
							}else{
								status.src = "<?php echo base_url('uploads/no.png');?>";
							}
						}
					</script>
	<!-- manage item     -->
    <div class="row bottom70">
        <div class="large-12 columns top20">
          <div class="dashboard-noborder">
            <div class="row">
              <!-- start dash-left -->
                        <!-- start dash-right -->
            <div class="large-12 columns">
              <div class="dash-right admin-panel">
                <div class="row">
                  <div class="large-12 columns">
                    <h3>Manage Shops <a class="tiny button" href="<?php echo base_url();?>Shops/addshop">Add New</a></h3>
                    <div class="manage-list">
                    <table class="table_form">
                      <thead>
                        <tr>
                          <th width="50">N°</th>
                          <th width="200">Shop Name</th>
                          <th width="150">Banner</th>
                          <th width="150">Category</th>
                          <th width="80" class="center">Status</th>
                          <th width="150">Action</th>
                        </tr>
                      </thead>
                      <tbody>
						<?php
							$i = 1;
							foreach($result->result() as $value){
						?>
                        <tr>
                          <td>
                            <?php echo $i;?><input type="hidden" id="deleteProId1" name="pro_id" value="1"> 
                            <input type="hidden" id="main_imagep91.jpg" name="main_image" value="p91.jpg">
                          </td>
                          <td><?php echo $value->shop_name;?></td>
                          <td>
							<img src="<?php echo base_url('uploads/banner/'.$value->banner);?>">
                          </td>
                          <td><?php echo $value->category;?></td>
                          <td>
                            <div class="button_edit active">
								<img class="status" onclick="changeimg(this)" src="<?php echo base_url('uploads/yes.png');?>">
							</div>
                          </td>
                          <td>
                            <?php echo anchor('shops/edit/'.$value->shop_id, 'Edit');?>|
                            <?php echo anchor('shops/delete/'.$value->shop_id, 'Delete');?>
                          </td>
                        </tr> 
						<?php
							$i++;
							}
						?>
                      </tbody>
                    </table>
					
                    </div> 
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>
      </div>
    </div>