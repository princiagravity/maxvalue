
      <!-- Page Content  -->
      <div id="content-page" class="content-page dashboard">
         <div class="container-fluid">
            <div class="row">
               
               <div class="col-lg-12">
                  <div class="row">
                     <?php foreach($dash_count as $detail){?>
                     <div class="col-sm-4">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                           <div class="iq-card-body tasks-box">
                              <div class="d-flex align-items-center">                                 
                               <!--   <a href="#" class="iq-icon-box rounded-circle iq-bg-primary mr-3">
                                    <i class="ri-file-shield-line"></i>
                                 </a> -->
                                 <div>
                                    <h3><?php echo $detail->name?></h3>
                                    <div class="row">
                                    <?php foreach($detail->productdet as $prod){?>
                                       <div class="col-sm-4">
                                    <h6 class="text-danger"><?php echo $prod->name ?></h6>
                                    <h4 class="text-secondary"> <?php echo $prod->count?></h4>
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
   