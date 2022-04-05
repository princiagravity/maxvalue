 <!-- Wrapper Start -->
 <div class="wrapper">
      <!-- Sidebar  -->
      <div class="iq-sidebar">
         <div class="iq-sidebar-logo d-flex justify-content-between">
            <a href="<?php echo site_url('admin/dashboard'); ?>">
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
                     <!-- <li class="iq-menu-title"><i class="ri-separator"></i><span>Main</span></li>
                     <li>
                        <a href="<?php echo site_url('admin/dashboard')?>" class="iq-waves-effect collapsed"><i class="las la-home"></i><span>Dashboard</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>                 
                        
                     </li> 
					  <li><a href="<?php echo site_url('admin/orders')?>" class="iq-waves-effect"><i class="las la-sms"></i><span>Orders</span></a></li>
                     
                         <li>
                        <a href="#user-info" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="las la-user-tie"></i><span>Customers</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="user-info" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                          
                          
                           <li><a href="<?php echo site_url('admin/customer-registration')?>">Customer Add</a></li>
                           <li><a href="<?php echo site_url('admin/customers-list')?>">Customer List</a></li>
                        </ul>
                     </li>
					     <li>
                        <a href="#agent-info" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="las la-user-tie"></i><span>Agents</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="agent-info" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                          
                          
                           <li><a href="<?php echo site_url('admin/agent-registration')?>">Agent Add</a></li>
                           <li><a href="<?php echo site_url('admin/agents-list')?>">Agent List</a></li>
                        </ul>
                     </li>-->
					 
                    <!--  <li><a href="<?php //echo site_url('calendar')?>" class="iq-waves-effect"><i class="las la-calendar"></i><span>Calendar</span></a></li> -->
                    
                     <li>
                     <a href="#ecommerce" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-shopping-cart-line"></i><span>Upload Excel / CSV Files </span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="ecommerce" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                     <li><a href="<?php echo site_url('admin/Supra-NCD')?>">Supra-NCD</a></li>
                     <li><a href="<?php echo site_url('admin/Supra-Subdebt')?>">Supra-Subdebt</a></li>
                     <li><a href="<?php echo site_url('admin/Supra-Share')?>">Supra-Share</a></li>
                     <li><a href="<?php echo site_url('admin/Sanat-Multi-Trade-Share')?>">Sanat Multi Trade- Share</a></li>
                     <li><a href="<?php echo site_url('admin/Maxvalue-Credits-NCD')?>">Maxvalue Credits -NCD</a></li>
                     <li><a href="<?php echo site_url('admin/Maxvalue-Credits-Subdebt')?>">Maxvalue Credits -Subdebt</a></li>
                     <li><a href="<?php echo site_url('admin/Maxvalue-Credits-Share')?>">Maxvalue Credits -Share</a></li>
                     <li><a href="<?php echo site_url('admin/Maxvalue-Nidhi-FD')?>">Maxvalue Nidhi-FD</a></li>
                     <li><a href="<?php echo site_url('admin/CFCICI-Deposit')?>">CFCICI- Deposit</a></li>
                     <li><a href="<?php echo site_url('admin/CFCICI-Membership')?>">CFCICI- Membership</a></li>
                        </ul>
                     </li>
					 
					 <li>
                        <a href="#reports" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-shopping-cart-line"></i><span>Business Reports</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="reports" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                     
                     <li><a href="<?php echo site_url('admin/Supra-NCD-Reports')?>">Supra-NCD</a></li>
                     <li><a href="<?php echo site_url('admin/Supra-Subdebt-Reports')?>">Supra-Subdebt</a></li>
                     <li><a href="<?php echo site_url('admin/Supra-Share-Reports')?>">Supra-Share</a></li>
                     <li><a href="<?php echo site_url('admin/Sanat-Multi-Trade-Share-Reports')?>">Sanat Multi Trade- Share</a></li>
                     <li><a href="<?php echo site_url('admin/Maxvalue-Credits-NCD-Reports')?>">Maxvalue Credits -NCD</a></li>
                     <li><a href="<?php echo site_url('admin/Maxvalue-Credits-Subdebt-Reports')?>">Maxvalue Credits -Subdebt</a></li>
                     <li><a href="<?php echo site_url('admin/Maxvalue-Credits-Share-Reports')?>">Maxvalue Credits -Share</a></li>
                     <li><a href="<?php echo site_url('admin/Maxvalue-Nidhi-FD-Reports')?>">Maxvalue Nidhi-FD</a></li>
                     <li><a href="<?php echo site_url('admin/CFCICI-Deposit-Reports')?>">CFCICI- Deposit</a></li>
                     <li><a href="<?php echo site_url('admin/CFCICI-Membership-Reports')?>">CFCICI- Membership</a></li>
                           
                        </ul>
                     </li>
                     <li>
                        <a href="#content" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-shopping-cart-line"></i><span>Content</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="content" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           
                        <li><a href="<?php echo site_url('admin/add-company')?>">Add Company</a></li>
                        <li><a href="<?php echo site_url('admin/add-sub-company')?>">Add Sub Company</a></li>
                           <li><a href="<?php echo site_url('admin/add-branch')?>">Add Branch</a></li>
                           <li><a href="<?php echo site_url('admin/add-zm')?>">Add ZM</a></li>
                           <li><a href="<?php echo site_url('admin/add-avp')?>">Add AVP</a></li>
                           <li><a href="<?php echo site_url('admin/add-am')?>">Add AM</a></li>
                           <li><a href="<?php echo site_url('admin/add-region')?>">Add Region</a></li>
						   
                           
                        </ul>
                     </li>
                     <li>
                        <a href="<?php echo site_url('AdminController/user_logout')?>" class="iq-waves-effect collapsed"><i class="las la-on"></i><span>Logout</span></a>                 
                        
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
                  <a href="<?php echo site_url('admin/dashboard')?>" class="logo">
                  <img src="<?php echo base_url()?>images/admin/logo.gif" class="img-fluid" alt="">
                  <span>MAXEL</span>
                  </a>
               </div>
            </div>
            <div class="navbar-breadcrumb">
               <h5 class="mb-0">Pages Invoice</h5>
               <nav aria-label="breadcrumb">
                  <ul class="breadcrumb">
                     <li class="breadcrumb-item"><a href="<?php echo site_url('admin/dashboard')?>">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Pages Invoice</li>
                  </ul>
               </nav>
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