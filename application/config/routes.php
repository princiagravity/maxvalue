<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller']                        = 'AdminController';
$route['404_override']                              = 'AdminController/dashboard';
$route['under-construction']                        = 'AdminController/under_construction';


$route['admin']                                     =   'AdminController/index';
$route['login']                                     =   'AdminController/index';
$route['dashboard']                                 =   'AdminController/dashboard';
$route['logout']                                    =   'AdminController/user_logout';

$route['customer-search']                           =   'AdminController/main_page/customer-search';
$route['customers-list']                            =   'AdminController/main_page/customers-list';
$route['business-upload']                           =   'AdminController/main_page/business-upload';
$route['incentive-upload']                          =   'AdminController/main_page/incentive-upload';
/* $route['renewal-incentive']                         =   'AdminController/main_page/renewal-incentive'; */

$route['add-company']                               =   'AdminController/setting_page/add-company';
$route['update-company/(:any)']                     =   'AdminController/setting_page/add-company/$1';
$route['add-product']                               =   'AdminController/setting_page/add-product';
$route['update-product/(:any)']                     =   'AdminController/setting_page/add-product/$1';
$route['add-avp']                                   =   'AdminController/setting_page/add-avp';
$route['update-avp/(:any)']                         =   'AdminController/setting_page/add-avp/$1';
$route['add-zm']                                    =   'AdminController/setting_page/add-zm';
$route['update-zm/(:any)']                          =   'AdminController/setting_page/add-zm/$1';
$route['add-region']                                =   'AdminController/setting_page/add-region';
$route['update-region/(:any)']                      =   'AdminController/setting_page/add-region/$1';
$route['add-am']                                    =   'AdminController/setting_page/add-am';
$route['update-am/(:any)']                          =   'AdminController/setting_page/add-am/$1';
$route['add-branch']                                =   'AdminController/setting_page/add-branch';
$route['update-branch/(:any)']                      =   'AdminController/setting_page/add-branch/$1';
$route['add-canvasser']                             =   'AdminController/setting_page/add-canvasser';
$route['update-canvasser/(:any)']                   =   'AdminController/setting_page/add-canvasser/$1';
$route['delete_item']                               =   'AdminController/delete_item';
$route['delete_uploaded_data']                      =   'AdminController/delete_uploaded_data';
$route['single-business/(:any)']                    =   'AdminController/single_view/business/$1';
$route['single-incentive/(:any)']                   =   'AdminController/single_view/incentive/$1';
$route['single-customer/(:any)']                    =   'AdminController/single_view/customer/$1';

$route['business-report']                           =   'AdminController/report_page/business-report';
$route['incentive-fresh-report']                    =   'AdminController/report_page/incentive-report/fresh';
$route['incentive-renewal-report']                  =   'AdminController/report_page/incentive-report/renewal';
$route['mis-report']                                =   'AdminController/report_page/mis-report';

$route['admin/add-region']                          = 'AdminController/get_page/add-region';
$route['admin/update-region/(:any)']                = 'AdminController/get_page/add-region/$1';
$route['admin/add-am']                              = 'AdminController/get_page/add-am';
$route['admin/update-am/(:any)']                    = 'AdminController/get_page/add-am/$1';
$route['admin/add-branch']                          = 'AdminController/get_page/add-branch';
$route['admin/update-branch/(:any)']                = 'AdminController/get_page/add-branch/$1';
$route['admin/add-zm']                              = 'AdminController/get_page/add-zm';
$route['admin/update-zm/(:any)']                    = 'AdminController/get_page/add-zm/$1';
$route['admin/add-avp']                             = 'AdminController/get_page/add-avp';
$route['admin/update-avp/(:any)']                   = 'AdminController/get_page/add-avp/$1';







