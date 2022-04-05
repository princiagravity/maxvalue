
      <!-- Page Content  -->
      <div id="content-page" class="content-page">
         <div class="container-fluid">
            <?php $company_id="";?>
        <div class="row">
               
               <div class="col-lg-12">
                   <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title"> Business Details</h4>
                           </div>
                        </div>
                        <div class="container justify-content-center">
                       <?php 
                        $dtcolumn=array('updated_on','status','id','file_id','customer_id','bank_details_id','upload_type');
                       if($business['file_details']){
                          
                           foreach($business['file_details'] as $index=>$value)
                           {
                            if(!in_array($index,$dtcolumn))
                            {
                            if($index=='company_id')
                            $index='Company';
                            if($index=='product_id')
                            $index='Product';
                            if($index=='created_on')
                            {
                            $index='Uploaded On';
                            $value=date('d-m-Y',strtotime($value));
                            }
                           ?>
                            <div class="form-row p-1">
                           <div class="col-4"><h6><?php echo ucfirst(str_replace('_',' ',$index))." :";?></h6></div>
                           <div class="col-3"><h6><?php echo " ".ucfirst(str_replace('_',' ',$value));?></h6></div>
                           </div>
                           <?php
                            }
                           }
                        
                       }?>
                        </div>
                     </div></div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                 
                     <div class="iq-card-body">
                        <div class="table-responsive">
                           <table class="table mb-0 table-borderless">
                           
                             <?php 
                                 $i=1;
                                array_push($dtcolumn,'company_id','product_id','created_on');
                                 if($business['business_details'])
                                 {
                                    
                                ?>
                                  <thead>
                                 <tr>
                                 <th scope="col">#</th>
                                <?php foreach($business['business_details'][0] as $index=>$value)
                                {
                                    if(!in_array($index,$dtcolumn)){?>
                                 <th scope="col"><?php echo ucfirst(str_replace('_',' ',$index));?></th>
                                 <?php } }?>
                               </tr>
                             </thead>
                          
                             <tbody>
                                 <?php 
                                 $i=1;
                                 $datearray=array('application_date','clearing_date');
                                 foreach($business['business_details'] as $business)
                                 {
                                     ?>
                                    <tr>
                                    <td><?php echo $i;?></td>
                                     <?php
                                     foreach($business as $index=>$value)
                                     {
                                         if(!in_array($index,$dtcolumn))
                                         {
                                             if(in_array($index,$datearray))
                                                $value=date('d-m-Y',strtotime($value));
                                         ?>
                                        <td><?php echo $value;?></td>
                                        <?php
                                         }
                                     }
                                     ?>
                                    </tr>
                                     <?php
                                      $i++;
                                 } ?>
                              
                               <?php
                                  }
                               else
                               { ?>
                               <tr><td colspan="6">No Data Available</td></tr>
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
  