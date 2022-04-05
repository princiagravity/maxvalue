
      <!-- Page Content  -->
      <div id="content-page" class="content-page">
         <div class="container-fluid">
            <?php $company_id="";?>
        <div class="row">
               
               <div class="col-lg-12">
                   <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title"> Incentive Report - <?php echo $type;?></h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           
                           <form id="get_incentive_report" method="POST" action="get_incentive_report" data-form="ajaxform" enctype="multipart/form-data">
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
                                  <label>Month&nbsp;&nbsp;From:</label>
                                    <input type="month" class="form-control datepicker" placeholder="From:" name="frommonth" id="frommonth" required>
                                 </div>
                                 <div class="col">
                                 <label> To:(Optional)</label>
                                  <input type="month" class="form-control datepicker" placeholder="To:" name="tomonth" id="tomonth">
                               </div>
                              </div>
                              <div class="form-row pt-2 mt-5">
                               
                             
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
                          <input type="hidden" name="type" value="<?php echo $type;?>" id="inctype">
                                      <button type="submit" class="btn btn-primary">Get Report</button>
                                 </div>
								
								 
                              </div>  
                           </form>
                        </div>
                     </div></div>
            </div>
            <div class="row incentive_report" style="display: none;">
               <div class="col-md-12">
                  <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title">Incentive Report</h4>
                        </div>
                      
                     </div>
                     <div class="iq-card-body">
                        <div class="table-responsive incentivereporttbl">
                          
                         </div>
                     </div>
                  </div>
               </div>
               
            </div>
            
         </div>
      </div>
  