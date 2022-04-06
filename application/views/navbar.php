 <!-- Wrapper Start -->
 <div class="wrapper">
      <!-- Sidebar  -->
      <div class="iq-sidebar">
         <div class="iq-sidebar-logo d-flex justify-content-between">
            <a href="<?php echo site_url('dashboard'); ?>">
            <img src="<?php echo base_url()?>images/admin/logo.gif" class="img-fluid" alt="">
            <span>MAXVALUE</span>
            </a>
            <div class="iq-menu-bt align-self-center">
               <div class="wrapper-menu">
                  <div class="line-menu half start"></div>
                  <div class="line-menu"></div>
                  <div class="line-menu half end"></div>
               </div>
            </div>
         </div>
         <div id="sidebar-scrollbar">
               <nav class="iq-sidebar-menu">
                  <ul id="iq-sidebar-toggle" class="iq-menu">
                     <li class="iq-menu-title"><i class="ri-separator"></i><span>Main</span></li>
                     <li>
                        <a href="<?php echo site_url('dashboard')?>" class="iq-waves-effect collapsed"><i class="ri-code-line"></i><span>Dashboard</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>                 
                        
                     </li>
					
                         <li>
                        <a href="#user-info" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-user-3-line"></i>
<span>Customers</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="user-info" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                          
                          
                           <li><a href="<?php echo site_url('customer-search')?>">Customer Search</a></li>
                           <li><a href="<?php echo site_url('customers-list')?>">Customers List</a></li>
                        </ul>
                     </li>
					
                     <li>
                        <a href="#canvas-info" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-user-3-line"></i>
<span>Canvassers</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="canvas-info" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                          
                          
                           <li><a href="<?php echo site_url('canvasser-search')?>">Canvasser Search</a></li>
                        </ul>
                     </li>
                     <li><a href="<?php echo site_url('business-upload')?>" class="iq-waves-effect"><i class="ri-chat-upload-line"></i><span>Business Upload</span></a></li>
                     <li><a href="<?php echo site_url('incentive-upload')?>" class="iq-waves-effect"><i class="ri-chat-upload-line"></i><span>Incentive Upload</span></a></li>
                    <!--  <li>
                        <a href="#incentive-upload" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-chat-upload-line"></i><span>Incentive Upload</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="incentive-upload" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                          
                          
                           <li><a href="<?php echo site_url('fresh-incentive')?>">Fresh</a></li>
                           <li><a href="<?php echo site_url('renewal-incentive')?>">Renewal</a></li>
                        </ul> 
                     </li>-->
                    
                     <li>
                     <a href="#ecommerce" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-settings-2-fill"></i><span>Settings</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="ecommerce" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                     <li><a href="<?php echo site_url('add-company')?>">Add Company</a></li>
                     <li><a href="<?php echo site_url('add-product')?>">Add Product</a></li>
                     <li><a href="<?php echo site_url('add-avp')?>">Add AVP</a></li>
                     <li><a href="<?php echo site_url('add-zm')?>">Add ZM</a></li>
						   <li><a href="<?php echo site_url('add-region')?>">Add Region</a></li>
                     <li><a href="<?php echo site_url('add-am')?>">Add AM</a></li>
                     <li><a href="<?php echo site_url('add-branch')?>">Add Branch</a></li>
                     <li><a href="<?php echo site_url('add-canvasser')?>">Add Canvasser</a></li>
                   
                     </ul>
                     </li>
					 
					 <li>
                        <a href="#reports" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-file-chart-fill"></i><span>Reports</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="reports" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="<?php echo site_url('business-report')?>">Business Reports</a></li>
                           <li>
                        <a href="#incentive-report" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><span>Incentive Reports</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="incentive-report" class="iq-submenu collapse" data-parent="#reports">
                          
                          
                           <li><a href="<?php echo site_url('incentive-fresh-report')?>">Fresh</a></li>
                           <li><a href="<?php echo site_url('incentive-renewal-report')?>">Renewal</a></li>
                        </ul>
                     </li>
						   <li><a href="<?php echo site_url('mis-report')?>">MIS Reports</a></li>
						   <!-- <li><a href="<?php echo site_url('customer-reports')?>">Customer Reports</a></li> -->
						   
                           
                        </ul>
                     </li>
                     <li>
                        <a href="<?php echo site_url('logout')?>" class="iq-waves-effect collapsed"><i class="ri-logout-box-line"></i><span>Logout</span></a>                 
                        
                     </li>
					 
                  </ul>
               </nav>
               <div class="p-3"></div>
            </div>
      </div>
      <!-- TOP Nav Bar -->
      <div class="iq-top-navbar">
         <div class="iq-navbar-custom">
            <div class="iq-sidebar-logo">
               <div class="top-logo">
                  <a href="<?php echo site_url('dashboard')?>" class="logo">
                  <img src="<?php echo base_url()?>images/admin/logo.gif" class="img-fluid" alt="">
                  <span>MAXEL</span>
                  </a>
               </div>
            </div>
            <div class="navbar-breadcrumb">
               <h5 class="mb-0"><?php echo $pagetitle;?></h5>
               <!-- <nav aria-label="breadcrumb">
                  <ul class="breadcrumb">
                     <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard')?>">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Pages Invoice</li>
                  </ul>
               </nav> -->
            </div>
             <nav class="navbar navbar-expand-lg navbar-light p-0">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="ri-menu-3-line"></i>
                  </button>
                  <div class="iq-menu-bt align-self-center">
                     <div class="wrapper-menu">
                        <div class="line-menu half start"></div>
                        <div class="line-menu"></div>
                        <div class="line-menu half end"></div>
                     </div>
                  </div>
                 
                 
               </nav>
         </div>
      </div>
      <!-- TOP Nav Bar END -->