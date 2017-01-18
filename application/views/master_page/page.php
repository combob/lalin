
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
                    <h3>Manage Items <a class="tiny button" href="http://dalin-pc/mekong/add-new-products">Add New</a></h3>
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
                                          <tr>
                          <td>
                            1                       <input type="hidden" id="deleteProId1" name="pro_id" value="1"> 
                            <input type="hidden" id="main_imagep91.jpg" name="main_image" value="p91.jpg">
                          </td>
                          <td>AAAAAAAAAAAAAAAAAA</td>
                          <td>
                            <img src="http://dalin-pc/mekong/wp-content/themes/ict4gshop/uploads/products/p91.jpg">
                          </td>
                          <td>14.89</td>
                          <td>Electronics1</td>
                          <td>
                            <div class="button_edit active"></div>
                          </td>
                          <td>
                            <a href="#">Edit |</a>
                            <input type="submit" class="delete_pro" name="delete_pro" value="Delete" id="delete1" data-even = '1' >
                          </td>
                        </tr>

                        <script type="text/javascript">
                        $(document).ready(function() {
                          $("#delete1" ).click(function() {
                            var productid = $("#deleteProId1").val(); 
                            var productImage = $("#main_imagep91.jpg").val();
                            var dataString = "productid="+ productid+"&productImage=" + productImage;;
                            var $tr = $(this).closest('tr');
                            $.ajax
                                 ({
                                  type: "GET",
                                  url: "http://dalin-pc/mekong/wp-content/themes/ict4gshop/custom/delete-product.php", 
                                  data: dataString,
                                  success: function(msg) {
                                    //on success, hide  element user wants to delete.
                                            $tr.find('td').fadeOut(1000,'swing',function(){ 
                                                $tr.remove();                    
                                            });
                                  },
                                  error:function (xhr, ajaxOptions, thrownError){
                                            //On error, we alert user
                                            alert(thrownError);
                                        }
                            });
                          });
                        });
                      </script>

                                          
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