
      <!-- Page Content  -->
      <div id="content-page" class="content-page">
         <div class="container-fluid">
            <?php $company_id="";?>
        <div class="row">
               
               <div class="col-lg-12">
                   <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">MIS Report</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           
                           <form id="get_mis_report" method="POST" action="get_mis_report" data-form="ajaxform" enctype="multipart/form-data">
                           <div class="form-row pt-2">
                                 <div class="col">
                                  <label>Clearing Date&nbsp;&nbsp;From:</label>
                                    <input type="date" class="form-control datepicker" placeholder="From:" name="fromdate" id="fromdate" required>
                                 </div>
                                 <div class="col">
                                 <label> To:</label>
                                  <input type="date" class="form-control datepicker" placeholder="To:" name="todate" id="todate" required>
                               </div>
                               <div class="col">
                               <label>Choose Category</label>
                               <select class="form-control" id="staffcategory" name="staffcategory" required>
                                 
                                 <option selected="" value="" >Choose One</option>
                                <option value="avp">AVP</option>
                                <option value="zm">ZM</option> 
                                <option value="region">RM</option> 
                                <option value="am">AM</option> 
                               </select>
                               </div>
                              </div>
                              <div class="form-row mt-3">
                              <div class="col">
                               <label>Choose Staff/Branch</label>
                               <select class="form-control" id="stafflist" name="stafflist" required>
                                 <option selected="" value="" >Choose One</option>
                                <option value="" disabled>Choose Category First</option>
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
            <div class="row mis_report" style="display: none;">
               <div class="col-md-12">
                  <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title">MIS Report</h4>
                        </div>
                      
                     </div>
                     <div class="iq-card-body">
                        <div class="table-responsive misreporttbl">
                          
                         </div>
                     </div>
                  </div>
               </div>
               
            </div>
            
         </div>
      </div>
  