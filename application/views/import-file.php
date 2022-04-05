
      <!-- Page Content  -->
      <div id="content-page" class="content-page">
         <div class="container-fluid">
        <div class="row">
               
               <div class="col-lg-12">
                   <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title"> Upload File</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           
                           <form id="upload_file" method="POST" action="upload_file" data-form="ajaxform" enctype="multipart/form-data">
                              <div class="form-row">
                               
                                 <div class="col">
                                 <label>Excel / CSV File</label>
                                 <input type="file" name="uploadFile" value="" required  class="form-control"/>
                                 </div>
								
                              </div>
					
							  
							  	  <div class="form-row" style="padding-top:50px;">
                                 
                             
							
								  <div class="col">
                          <input type="hidden" name="status" value="Active">
                           <input type="hidden" name="type" value="<?php echo $type; ?>">
                          <!--<input type="hidden" name="old_image" value="<?php echo $image_url;?>"> -->
                                      <button type="submit" class="btn btn-primary">Upload</button>
                              <!-- <button type="submit" class="btn iq-bg-danger">cancel</button> -->
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
                           <h4 class="card-title">Uploads</h4>
                        </div>
                      
                     </div>
                     <div class="iq-card-body">
                        <div class="table-responsive">
                           <table class="table mb-0 table-borderless">
                             <thead>
                               <tr>
                               <th scope="col">#</th>
                                  <?php if($details)
                                  {
                                    foreach($columns as $col){
                                       ?>
                                       <th scope="col"><?php echo $col;?></th>
                                       <?php
                                    } ?>
                                 <?php }?>
                               </tr>
                             </thead>
                             <tbody>
                             <?php 
                                 $i=1;
                                 if($details)
                                 {
                                 foreach($details as $detail)
                                 {
                                ?>
                               <tr>
                                 <td><?php echo $i;?><input type="hidden" id="id" name="id" value="<?php echo $detail->id;?>"></td>
                                 <td><?php echo $detail->application_date;?></td>
                                 <td><?php echo $detail->branch;?></td>
                                 <td><?php echo $detail->customer_name;?></td>
                                 <td><?php echo $detail->customer_address;?></td>
                                 <td><?php echo $detail->customer_mobile;?></td>
                                 <td><?php echo $detail->email_id;?></td>
                                 <td><?php echo $detail->nominee_name;?></td>
                                 <td><?php echo $detail->pan_no;?></td>
                                 <td><?php echo $detail->aadhar_no;?></td>
                                 <td><?php echo $detail->shares_purchased;?></td>
                                 <td><?php echo $detail->investment_amount;?></td>
                                 <td><?php echo $detail->fund_transfer_date;?></td>
                                 <td><?php echo $detail->cheque_utr_no;?></td>
                                 <td><?php echo $detail->clearing_date;?></td>
                                 <td><?php echo $detail->demat_participant;?></td>
                                 <td><?php echo $detail->demat_ac_no;?></td>
                                 <td><?php echo $detail->customer_name_in_bank;?></td>
                                 <td><?php echo $detail->bank_name;?></td>
                                 <td><?php echo $detail->bank_acoount_no;?></td>
                                 <td><?php echo $detail->ifsc;?></td>
                                 <td><?php echo $detail->canvasser_name;?></td>
                                 <td><?php echo $detail->canvass_code;?></td>
                                 <td><?php echo $detail->canvas_type;?></td>
                                 <td><?php echo $detail->am;?></td>
                                 <td><?php echo $detail->region;?></td>
                                 <td><?php echo $detail->zm;?></td>
                                 <td><?php echo $detail->avp;?></td>
                                 <td><?php echo $detail->share_no;?></td>
                               
								 
								 <td>
                        <!--  <span class="table-remove"><button type="button"
                                       class="btn iq-bg-danger btn-rounded btn-sm my-0"><a href="<?php echo site_url(('admin/single-view/offers/'.$offer->id))?>">View</a></button></span>
                                       <span class="table-remove"><button type="button"
                                       class="btn iq-bg-danger btn-rounded btn-sm my-0"><a href="<?php echo site_url(('admin/update-offer/'.$offer->id))?>">Update</a></button></span>
                                       <span class="table-remove"><input type="hidden" name="deltype" class="deltype" value="offers">
                                       <input type="hidden" name="delid" class="delid" value="<?php echo $offer->id;?>"><button type="button"
                                       class="btn iq-bg-danger btn-rounded btn-sm my-0 delete_item">Delete</button></span> -->
                                 </td>
                               </tr>
                               <?php $i++; }} else{?>
                                <tr><td>Previous List Not Available</tr>
                                  <?php }?>
				
                               
                             </tbody>
                           </table>
                         </div>
                     </div>
                  </div>
               </div>
               
            </div>
            
         </div>
      </div>
  