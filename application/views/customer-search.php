
      <!-- Page Content  -->
      <style>
         .custsearch li:hover{
            cursor:pointer;
            background-color:rgba(0,0,0,0.5);
            color: #fff;
         }
      </style>
      <div id="content-page" class="content-page">
         <div class="container-fluid">
         <?php 
       $id=$name=$lbl_name="";
       
     
       ?>
     
         
            <div class="row">
               
               <div class="col-lg-12">
                   <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Customer Search</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                          
                           <form id="customer_search" method="POST" action="customer_search" data-form="ajaxform" enctype="multipart/form-data">
                              <div class="form-row">
                             <!--  <div class="col">
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
                                 </div> -->
                               <!--   <div class="col">
                                 <label>Choose Product</label>
                                 <select class="form-control product_select" id="product_select" name="product_id" >
                                     <option selected disabled value="">Choose One</option>
                                     <option disabled value="">Choose Company First</option>
                                 </select>
                                 </div> -->
                              </div>
                              <div class="form-row">
                                 <div class="col">
                                  <label>Enter Customer Name</label>
                                    <input type="text" class="form-control chk_customername" placeholder="Customer Name" id="customer_name" name="customer_name" value="">
                                    <input type="hidden" name="cust_name" id="cust_name" value="">
                                 </div>
                                 <div class="col">
                                  <label>Mobile No</label>
                                    <input type="text" class="form-control" placeholder="Mobile no" name="customer_mobile" value="">
                                 </div>
                                <!--  <div class="col">
                                  <label>Email ID</label>
                                    <input type="text" class="form-control" placeholder="Email ID" name="email_id" value="">
                                 </div> -->
                                  <div class="col">
                                  <label>PAN No</label>
                                    <input type="text" class="form-control" placeholder="PAN No" name="pan_no" value="">
                                 </div>
                                 <div class="col">
                                  <label>AADHAR No</label>
                                    <input type="text" class="form-control" placeholder="AADHAR No" name="aadhar_no" value="">
                                 </div>
							
                              </div>
							
							  
							  	  <div class="form-row" style="padding-top:50px;">
                                 
                             
						  <div class="col">
                          <input type="hidden" name="status" value="Active">
                          <input type="hidden" name="formvalid" id="formvalid" value="0">
                          <input type="hidden" name="cust_id" id="cust_id" value="">
                                      <button type="submit" class="btn btn-primary">Search</button>
                              <!-- <button type="submit" class="btn iq-bg-danger">cancel</button> -->
                                 </div>
								
								 
                              </div>
							  
							  
							  
							   
                          
                              
                           </form>
                        </div>
                     </div></div>
            </div>
            <div class="row custsearchresult" style="display: none;">
               <div class="col-md-12">
                  <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title">Customer Details</h4>
                        </div>
                      
                     </div>
                     <div class="iq-card-body">
                        <div class="table-responsive custsearchtbl">
                         
                         </div>
                     </div>
                  </div>
               </div>
               
            </div>
            <div class="row custsearchreport" style="display: none;overflow-y:scroll;height:525px;">
               <div class="col-md-12">
                  <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title">Customer Search Result</h4>
                        </div>
                      
                     </div>
                     <div class="iq-card-body">
                        <div class="table-responsive custreporttbl">
                         
                         </div>
                     </div>
                  </div>
               </div>
               
            </div>
            
         </div>
      </div>
  