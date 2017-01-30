
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
                    <h3>Manage Items <a class="tiny button" href="<?php echo base_url();?>Items/additem">Add New</a></h3>
                    <div class="manage-list">
                    <table class="table_form">
                      <thead>
                        <tr>
                          <th width="50">N°</th>
                          <th width="200">Item Name</th>
                          <th width="150">Thumbnail</th>
                          <th width="150">Price</th>
                          <th width="150">Categories</th>
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
                          <td><?php echo $value->item_name;?></td>
                          <td>
							<img src="<?php echo base_url('uploads/thumbnail/'.$value->img_one);?>">
                            
                          </td>
                          <td>$ <?php echo $value->price;?></td>
                          <td><?php echo $value->category;?></td>
                          <td>
                            <div class="button_edit active"></div>
                          </td>
                          <td>
                            <?php echo anchor('items/edit/'.$value->item_id, 'Edit');?>|
							<?php echo anchor('items/delete/'.$value->item_id, 'Delete');?>
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