
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
                    <h3>Manage Brands<a class="tiny button" href="<?php echo base_url();?>brands/add_brand">Add New</a></h3>
                    <div class="manage-list">
                    <table class="table_form">
                      <thead>
                        <tr>
                          <th width="50">N°</th>
                          <th width="200">Brand Name</th>
                          <th width="150">Logo</th>
                          <th width="150">Alias</th>
                          <th width="150">Description</th>
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
                          <td><?php echo $value->brand_name;?></td>
                          <td>
							<img src="<?php echo base_url('uploads/logo/'.$value->logo);?>">
                          </td>
                          <td><?php echo $value->alias;?></td>
                          <td><?php echo $value->description;?></td>
                          <td>
                            <div class="button_edit active"></div>
                          </td>
                          <td>
                            <?php echo anchor('brands/edit/'.$value->brand_id, 'Edit');?>|
                            <?php echo anchor('brands/delete/'.$value->brand_id, 'Delete');?>
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
