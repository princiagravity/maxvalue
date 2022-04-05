
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
                           
                           <form id="get_business_report" method="POST" action="get_business_report" data-form="ajaxform" enctype="multipart/form-data">
                              <div class="form-row">
                               
                                 <div class="col">
                                 <label>Choose Company</label>
                                 <select class="form-control company_select" id="company_select" name="company_id" required>

                                 <option selected="" value="" disabled="">Select Company</option>

                                 <?php foreach($companylist as $index=>$value)
                                 {
                                    ?>

                                    <option value="<?php echo $index ?>"><?php echo $value;?></option>

                                    <?php

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
                              </div>
                              <div class="form-row pt-2">
                                 <div class="col">
                                  <label>Clearing Date&nbsp;&nbsp;From:</label>
                                    <input type="date" class="form-control datepicker" placeholder="From:" name="fromdate" id="fromdate" required>
                                 </div>
                                 <div class="col">
                                 <label> To:</label>
                                  <input type="date" class="form-control datepicker" placeholder="To:" name="todate" id="todate" required>
                               </div>
                              </div>
                              <div class="form-row pt-2 mt-5">
                               <div class="col">
                               <label>AVP:</label>
                               <select class="form-control" id="avp" name="avp">
                                 
                                 <option selected="" value="" >Choose AVP</option>
                                <option value="ALL">All</option>
                                <option value="NULL">NULL</option>
                                <?php
                                if($avplist)
                                {
                                    foreach($avplist as $detail)
                                    {
                                        ?>
                                        <option value="<?php echo $detail->name?>"><?php echo $detail->name?></option>
                                        <?php
                                    }
                                }
                                ?>
                                 
                               </select>
                               </div>
                               <div class="col">
                               <label>ZM:</label>
                               <select class="form-control" id="zm" name="zm">
                                 
                                 <option selected="" value="" >Choose ZM</option>
                                 <option value="ALL">All</option>
                                 <option value="NULL">NULL</option>
                                 <?php
                                if($zmlist)
                                {
                                    foreach($zmlist as $detail)
                                    {
                                        ?>
                                        <option value="<?php echo $detail->name?>"><?php echo $detail->name?></option>
                                        <?php
                                    }
                                }
                                ?>
                               </select>
                               </div>
                               <div class="col">
                               <label>Region:</label>
                               <select class="form-control" id="region" name="region">
                                 
                                 <option selected="" value="" >Choose Region</option>
                                 <option value="ALL">All</option>
                                 <option value="NULL">NULL</option>
                                 <?php
                                if($regionlist)
                                {
                                    foreach($regionlist as $detail)
                                    {
                                        ?>
                                        <option value="<?php echo $detail->name?>"><?php echo $detail->name?></option>
                                        <?php
                                    }
                                }
                                ?>
                               </select>
                               </div>
                               <div class="col">
                               <label>AM:</label>
                               <select class="form-control" id="am" name="am">
                                 
                                 <option selected="" value="" >Choose AM</option>
                                 <option value="ALL">All</option>
                                 <option value="NULL">NULL</option>
                                 <?php
                                if($amlist)
                                {
                                    foreach($amlist as $detail)
                                    {
                                        ?>
                                        <option value="<?php echo $detail->name?>"><?php echo $detail->name?></option>
                                        <?php
                                    }
                                }
                                ?>
                               </select>
                               </div>
                               <div class="col">
                               <label>Branch:</label>
                               <select class="form-control" id="branch" name="branch">
                                 
                                 <option selected="" value="" >Choose Branch</option>
                                 <option value="ALL">All</option>
                                 <option value="NULL">NULL</option>
                                 <?php
                                if($branchlist)
                                {
                                    foreach($branchlist as $detail)
                                    {
                                        ?>
                                        <option value="<?php echo $detail->name?>"><?php echo $detail->name?></option>
                                        <?php
                                    }
                                }
                                ?>
                               </select>
                               </div>
                              </div>
					
							  
							  	  <div class="form-row" style="padding-top:50px;">
                                 
                             
							
								  <div class="col">
                          <input type="hidden" name="status" value="Active">
            
                                      <button type="submit" class="btn btn-primary">Get Report</button>
                                 </div>
								
								 
                              </div>
							  
							  
							  
							   
                          
                              
                           </form>
                        </div>
                     </div></div>
            </div>
            <div class="row bus_report" style="display: none;">
               <div class="col-md-12">
                  <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title">Business Report</h4>
                        </div>
                      
                     </div>
                     <div class="iq-card-body">
                        <div class="table-responsive busreporttbl">
                          
                         </div>
                     </div>
                  </div>
               </div>
               
            </div>
            
         </div>
      </div>
  