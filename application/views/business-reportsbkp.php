
      <!-- Page Content  -->
      <div id="content-page" class="content-page">
         <div class="container-fluid">
		 <?php 
       
      /* print_r($orders['orderlists']); exit; */
       ?>
            <div class="row">
               
               <div class="col-lg-12">
                   <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Customer Report</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                          
                           <form id="get_report_result" method="POST" action="" data-form="ajaxform" enctype="multipart/form-data">
                              <div class="form-row">
                                 <div class="col">
                                  <label>Clearing Date&nbsp;&nbsp;From:</label>
                                    <input type="date" class="form-control datepicker" placeholder="From:" name="fromdate">
                                 </div>
                                 <div class="col">
                                 <label> To:</label>
                                  <input type="date" class="form-control datepicker" placeholder="To:" name="todate">
                               </div>
                                
                                 <div class="col">
                               <label>Product:</label>
                               <select class="form-control" id="exampleFormControlSelect1" name="product">
                                 
                                  <option selected="" value="" >Choose Product</option>
                                 <option value="supra_ncd">Supra-NCD</option>  
                                 <option value="supra_subdebt">Supra-Subdebt</option>
                                 <option value="supra_share">Supra-Share</option>
                                 <option value="sanat_multitrade_share">Sanat Multi Trade- Share</option>
                                 <option value="maxvalue_credits_ncd">Maxvalue Credits -NCD</option>
                                 <option value="maxvalue_credits_subdebt">Maxvalue Credits -Subdebt</option>
                                 <option value="maxvalue_credits_share">Maxvalue Credits -Share</option>
                                 <option value="maxvalue_nidhi_fd">Maxvalue Nidhi-FD</option>
                                 <option value="cfcici_deposit">CFCICI- Deposit</option>
                                 <option value="cfcici_membership">CFCICI- Membership</option>  
                

                               </select>
                               </div>
                              </div>
                              <div class="form-row pt-2 mt-5">
                               <div class="col">
                               <label>AVP:</label>
                               <select class="form-control" id="exampleFormControlSelect1" name="avp">
                                 
                                 <option selected="" value="" >Choose AVP</option>
                                 <option value="supra_ncd">Name1</option>  
                                 <option value="supra_subdebt">Name2</option>
                                 
                               </select>
                               </div>
                               <div class="col">
                               <label>ZM:</label>
                               <select class="form-control" id="exampleFormControlSelect1" name="zm">
                                 
                                 <option selected="" value="" >Choose ZM</option>
                                 <option value="supra_ncd">Name1</option>  
                                 <option value="supra_subdebt">Name2</option>
                                 <option value="supra_subdebt">Name3</option>
                                 <option value="supra_subdebt">Name4</option>
                                 <option value="supra_subdebt">Name5</option>
                                 
                               </select>
                               </div>
                               <div class="col">
                               <label>Region:</label>
                               <select class="form-control" id="exampleFormControlSelect1" name="region">
                                 
                                 <option selected="" value="" >Choose ZM</option>
                                 <option value="supra_ncd">region1</option>  
                                 <option value="supra_subdebt">region2</option>
                                 <option value="supra_subdebt">region3</option>
                               </select>
                               </div>
                               <div class="col">
                               <label>AM:</label>
                               <select class="form-control" id="exampleFormControlSelect1" name="am">
                                 
                                 <option selected="" value="" >Choose AM</option>
                                 <option value="supra_ncd">ABM</option>
                                 <option value="supra_ncd">Name1</option>  
                                 <option value="supra_subdebt">Name2</option>
                                 <option value="supra_subdebt">Name3</option>
                               </select>
                               </div>
                               <div class="col">
                               <label>Branch:</label>
                               <select class="form-control" id="exampleFormControlSelect1" name="branch">
                                 
                                 <option selected="" value="" >Choose Branch</option>
                                 <option value="supra_ncd">Branch1</option>  
                                 <option value="supra_subdebt">Branch2</option>
                                 <option value="supra_subdebt">Branch3</option>
                                 <option value="Omassery">Omassery</option>
                               </select>
                               </div>
                              </div>
				
							  
							  	  <div class="form-row" style="padding-top:50px;">
                                 
                             
							
								  <div class="col">
                         
                              <button type="submit" class="btn btn-primary">Search</button>
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
                           <h4 class="card-title">Report List</h4>
                        </div>
                      
                     </div>
                     <div class="reporttable">
                     <div class="iq-card-body">
                     <div class="table-responsive">
                     <table class="table mb-0 table-borderless">
                             <thead>
                               <tr>
                                 <th scope="col">#</th>  
                               </tr>
                             </thead>
                            <tbody>
                           
                               <tr>
                                 <td>Nothing To Display</td>
                                 
                                                         
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
  