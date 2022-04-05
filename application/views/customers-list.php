<div id="content-page" class="content-page">

<div class="container-fluid">
<div class="row">

<div class="col-md-12">

   <div class="iq-card iq-card-block iq-card-stretch iq-card-height">

      <div class="iq-card-header d-flex justify-content-between">

         <div class="iq-header-title">

            <h4 class="card-title">Customers</h4>

         </div>

       

      </div>

      <div class="iq-card-body">

         <div class="table-responsive">

            <table class="table mb-0 table-borderless">

              <thead>

                <tr>

                  <th scope="col">#</th>

                  <th scope="col">Name</th>

                 <!--  <th>Address</th> -->

          <th scope="col">Mobile No</th>
          <th scope="col">Email_id</th>
          <th scope="col"></th> 
                </tr>

              </thead>

              

              <tbody>

              <?php 

                  $i=1;

                  foreach($customerslist as $detail)

                  {

                 ?>

                <tr>

                  <td><?php echo $i;?><input type="hidden" id="id" name="id" value="<?php echo $detail->id;?>"></td>

                  <td><?php echo $detail->customer_name;?></td>

                  <!-- <td><?php echo $detail->customer_address;?></td> -->
                    <td><?php echo $detail->customer_mobile;?></td>
                    <td><?php echo $detail->email_id;?></td>
                  <td>

          <span class="table-remove"><button type="button"

                        class="btn iq-bg-danger btn-rounded btn-sm my-0"><a href="<?php echo site_url(('single-customer/'.$detail->id))?>">View</a></button></span>

                        <!-- <span class="table-remove"><button type="button"

                        class="btn iq-bg-danger btn-rounded btn-sm my-0"><a href="<?php echo site_url(('AdminController/view_pages/add-product/'.$detail->id))?>">Update</a></button></span>

                        <span class="table-remove"><input type="hidden" name="deltype" class="deltype" value="products">

                        <input type="hidden" name="delid" class="delid" value="<?php echo $detail->id;?>"><button type="button"

                        class="btn iq-bg-danger btn-rounded btn-sm my-0 delete_item">Delete</button></span>

                        

                        <span class="table-remove"><input type="hidden" name="prodid" class="up_prodid" value="<?php echo $detail->id;?>"> --> 
                  </td> 

                </tr>

                <?php $i++; }?>

                

              

              </tbody>

            </table>

          </div>

      </div>

   </div>

</div>



</div>



</div>

</div>