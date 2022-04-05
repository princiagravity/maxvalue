
      <!-- Page Content  -->
      <div id="content-page" class="content-page">
         <div class="container-fluid">
            <?php $company_id="";?>
        <div class="row">
               
               <div class="col-lg-12">
                   <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title"> Business Upload</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           
                           <form id="business_upload" method="POST" action="business_upload" data-form="ajaxform" enctype="multipart/form-data">
                              <div class="form-row">
                               
                                 <div class="col">
                                 <label>Choose Company</label>
                                 <select class="form-control company_select" id="company_select" name="company_id" required>

                              <?php if($company_id =="")

                                 {?>

                                 <option selected="" value="" disabled="">Select Company</option>

                                 <?php

                                 }



                                 ?>

                                 <?php foreach($companylist as $index=>$value)

                                 {

                                    if($company_id == $index)

                                    {

                                       ?>

                                       <option value="<?php echo $index ?>" selected><?php echo $value;?></option>

                                       <?php

                                    }

                                    else

                                    {

                                    ?>

                                    <option value="<?php echo $index ?>"><?php echo $value;?></option>

                                    <?php

                                    }

                                 }?>

                              

                              </select>
                                 </div>
                                 <div class="col">
                                 <label>Choose Product</label>
                                 <select class="form-control product_select" id="product_select" name="product_id" required>
                                     <option selected disabled value="">Choose One</option>
                                     <option disabled value="">Choose Company First</option>
                                 </select>
                                 </div>
                                 <div class="col">
                                 <label>Excel / CSV File</label>
                                 <input type="file" name="uploadFile" value="" required  class="form-control"/>
                                 </div>
                              </div>
					
							  
							  	  <div class="form-row" style="padding-top:50px;">
                                 
                             
							
								  <div class="col">
                          <input type="hidden" name="status" value="Active">
                           <input type="hidden" name="type" value="<?php echo ""; ?>">
                                      <button type="submit" class="btn btn-primary">Upload</button>
                                 </div>
								
								 
                              </div>
							  
							  
							  
							   
                          
                              
                           </form>
                        </div>
                     </div></div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title">Business Uploads</h4>
                        </div>
                      
                     </div>
                     <div class="iq-card-body">
                        <div class="table-responsive">
                           <table class="table mb-0 table-borderless">
                             <thead>
                               <tr>
                                 <th scope="col">#</th>
                                 <th scope="col">Company</th>
                                 <th scope="col">Product</th>
                                 <th scope="col">File Name</th>
                                 <th scope="col">Uploaded On</th>
                                 <th scope="col">File Size</th>
                                 <th scope="col">Total Case</th>
                                 <th></th>
                               </tr>
                             </thead>
                             <tbody>
                             <?php 
                                 $i=1;
                                 if($filelist)
                                 {
                                 foreach($filelist as $details)
                                 {
                                ?>
                               <tr>
                                 <td><?php echo $i;?><input type="hidden" id="id" name="id" value="<?php echo $details->id;?>"></td>
                                 <td><?php echo $details->company_id;?></td>
                                 <td><?php echo $details->product_id;?></td>
                                 <td><?php echo $details->filename;?></td>
                                 <td><?php echo date('d-m-Y h:i:s', strtotime($details->created_on))?></td>
                                 <td><?php echo $details->filesize;?></td>
                                 <td><?php echo $details->total_case;?></td>
                       
								 <td>
                         <span class="table-remove"><button type="button"
                                       class="btn iq-bg-danger btn-rounded btn-sm my-0"><a href=" <?php echo site_url(('single-business/'.$details->id))?>">View</a></button></span>
                                   <!--     <span class="table-remove"><button type="button"
                                       class="btn iq-bg-danger btn-rounded btn-sm my-0"><a href="<?php echo site_url(('admin/update-variants/'.$variant->id))?>">Update</a></button></span> -->
                                       <span class="table-remove"><input type="hidden" name="delitem" class="delitem" value="<?php echo $details->filename;?>">
                                       <input type="hidden" name="deltype" class="deltype" value="business">
                                       <input type="hidden" name="delid" class="delid" value="<?php echo $details->id;?>"><button type="button"
                                       class="btn iq-bg-danger btn-rounded btn-sm my-0 delete_item">Delete</button></span>
                                 </td> 
                               </tr>
                               <?php $i++; }}
                               
                               else
                               { ?>
                               <tr><td colspan="6">No Data Uploaded</td></tr>
                               <?php }
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
  