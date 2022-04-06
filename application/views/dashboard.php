
      <!-- Page Content  -->
      <div id="content-page" class="content-page dashboard">
         <div class="container-fluid">
            <div class="row">
               
               <div class="col-lg-12">
                  <div class="row">
                     <?php foreach($dash_count as $detail){?>
                     <div class="col-sm-6">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                           <div class="iq-card-body tasks-box">
                              <div class="d-flex align-items-center">                                 
                               <!--   <a href="#" class="iq-icon-box rounded-circle iq-bg-primary mr-3">
                                    <i class="ri-file-shield-line"></i>
                                 </a> -->
                                 <div>
                                    <h3 class="text-success mb-1"><?php echo strtoupper($detail->name);?></h3>
                                    <div class="row">
                                    <?php foreach($detail->productdet as $prod){?>
                                    <div class="col-6 border rounded mr-2 mb-2 shadow">
                                    <h7 class="text-danger"><u><?php echo strtoupper($prod->name); ?></u></h7>
                                  
                                    <div class="text-secondary p-1 rounded "><?php echo 'Rs.'.$prod->bussum?></div>
                                    
                                    <p class="text-dark"> <?php echo"TC: ".$prod->count?></p>
                                   
                                    
                                       </div>
                                      
                                   
                                    <?php }?>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <?php }?>
                  <!--    <div class="col-sm-4">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                           <div class="iq-card-body tasks-box">
                              <div class="d-flex align-items-center">                                 
                                 <a href="#" class="iq-icon-box rounded-circle iq-bg-success mr-3">
                                    <i class="ri-check-line"></i>
                                 </a>
                                 <div>
                                    <h6>Pending Orders:</h6>
                                    <h3>0</h3>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div> 
                     <div class="col-sm-4">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                           <div class="iq-card-body tasks-box">
                              <div class="d-flex align-items-center">                                 
                                 <a href="#" class="iq-icon-box rounded-circle iq-bg-info mr-3">
                                    <i class="ri-ball-pen-line"></i>
                                 </a>
                                 <div>
                                    <h6>In Progress:</h6>
                                    <h3>0</h3>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-4">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                           <div class="iq-card-body tasks-box">
                              <div class="d-flex align-items-center">                                 
                                 <a href="#" class="iq-icon-box rounded-circle iq-bg-danger mr-3">
                                    <i class="ri-close-line"></i>
                                 </a>
                                 <div>
                                    <h6>Delivery Boys:</h6>
                                    <h3>0</h3>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                    -->
                  </div>
               </div>
            </div>
          
          
            
         </div>
      </div>
   