<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-01-31 05:45:53 --> Severity: Notice --> Undefined variable: variant C:\xampp\htdocs\maxvalue\application\views\business-upload.php 154
ERROR - 2022-01-31 05:45:53 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\maxvalue\application\views\business-upload.php 154
ERROR - 2022-01-31 05:45:53 --> Severity: Notice --> Undefined variable: variant C:\xampp\htdocs\maxvalue\application\views\business-upload.php 154
ERROR - 2022-01-31 05:45:53 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\maxvalue\application\views\business-upload.php 154
ERROR - 2022-01-31 07:10:27 --> Severity: Notice --> Undefined variable: variant C:\xampp\htdocs\maxvalue\application\views\incentive-upload.php 167
ERROR - 2022-01-31 07:10:27 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\maxvalue\application\views\incentive-upload.php 167
ERROR - 2022-01-31 07:10:29 --> Severity: error --> Exception: Too few arguments to function AdminController::single_view(), 1 passed in C:\xampp\htdocs\maxvalue\system\core\CodeIgniter.php on line 532 and exactly 2 expected C:\xampp\htdocs\maxvalue\application\controllers\AdminController.php 899
ERROR - 2022-01-31 07:11:23 --> Severity: Notice --> Undefined variable: type C:\xampp\htdocs\maxvalue\application\views\single-incentive.php 10
ERROR - 2022-01-31 07:11:23 --> Severity: Notice --> Undefined variable: type C:\xampp\htdocs\maxvalue\application\views\single-incentive.php 40
ERROR - 2022-01-31 07:11:23 --> Severity: Notice --> Undefined variable: type C:\xampp\htdocs\maxvalue\application\views\single-incentive.php 90
ERROR - 2022-01-31 07:13:43 --> Severity: Notice --> Undefined variable: type C:\xampp\htdocs\maxvalue\application\views\single-incentive.php 10
ERROR - 2022-01-31 07:13:43 --> Severity: Notice --> Undefined variable: type C:\xampp\htdocs\maxvalue\application\views\single-incentive.php 40
ERROR - 2022-01-31 07:13:43 --> Severity: Notice --> Undefined variable: type C:\xampp\htdocs\maxvalue\application\views\single-incentive.php 90
ERROR - 2022-01-31 07:15:51 --> Severity: Notice --> Undefined variable: type C:\xampp\htdocs\maxvalue\application\views\single-incentive.php 10
ERROR - 2022-01-31 07:15:51 --> Severity: Notice --> Undefined variable: type C:\xampp\htdocs\maxvalue\application\views\single-incentive.php 38
ERROR - 2022-01-31 07:16:09 --> Severity: Notice --> Undefined variable: type C:\xampp\htdocs\maxvalue\application\views\single-incentive.php 38
ERROR - 2022-01-31 07:53:53 --> Severity: Notice --> Undefined variable: variant C:\xampp\htdocs\maxvalue\application\views\business-upload.php 153
ERROR - 2022-01-31 07:53:53 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\maxvalue\application\views\business-upload.php 153
ERROR - 2022-01-31 07:53:53 --> Severity: Notice --> Undefined variable: variant C:\xampp\htdocs\maxvalue\application\views\business-upload.php 153
ERROR - 2022-01-31 07:53:53 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\maxvalue\application\views\business-upload.php 153
ERROR - 2022-01-31 07:54:01 --> Query error: Table 'gravigw4_maxvalue.tbl_canvas_details' doesn't exist - Invalid query: SELECT `tbl_business_details`.*, `tbl_canvas_details`.*, `tbl_customer_details`.*, `tbl_customer_bank_details`.*
FROM `tbl_business_details`
LEFT JOIN `tbl_canvas_details` ON `tbl_business_details`.`id`=`tbl_canvas_details`.`business_id`
LEFT JOIN `tbl_customer_details` ON `tbl_business_details`.`customer_id` = `tbl_customer_details`.`_id`
LEFT JOIN `tbl_customer_bank_details` ON `tbl_business_details`.`customer_id`=`tbl_customer_bank_details`.`customer_id`
WHERE `tbl_business_details`.`file_id` = '1'
AND `tbl_canvas_details`.`file_id` = '1'
ERROR - 2022-01-31 07:57:26 --> Query error: Table 'gravigw4_maxvalue.tbl_canvas_details' doesn't exist - Invalid query: SELECT `tbl_business_details`.*, `tbl_canvass_details`.*, `tbl_customer_details`.*, `tbl_customer_bank_details`.*
FROM `tbl_business_details`
LEFT JOIN `tbl_canvas_details` ON `tbl_business_details`.`id`=`tbl_canvass_details`.`business_id`
LEFT JOIN `tbl_customer_details` ON `tbl_business_details`.`customer_id` = `tbl_customer_details`.`_id`
LEFT JOIN `tbl_customer_bank_details` ON `tbl_business_details`.`customer_id`=`tbl_customer_bank_details`.`customer_id`
WHERE `tbl_business_details`.`file_id` = '1'
AND `tbl_canvass_details`.`file_id` = '1'
ERROR - 2022-01-31 07:57:51 --> Query error: Unknown column 'tbl_customer_details._id' in 'on clause' - Invalid query: SELECT `tbl_business_details`.*, `tbl_canvass_details`.*, `tbl_customer_details`.*, `tbl_customer_bank_details`.*
FROM `tbl_business_details`
LEFT JOIN `tbl_canvass_details` ON `tbl_business_details`.`id`=`tbl_canvass_details`.`business_id`
LEFT JOIN `tbl_customer_details` ON `tbl_business_details`.`customer_id` = `tbl_customer_details`.`_id`
LEFT JOIN `tbl_customer_bank_details` ON `tbl_business_details`.`customer_id`=`tbl_customer_bank_details`.`customer_id`
WHERE `tbl_business_details`.`file_id` = '1'
AND `tbl_canvass_details`.`file_id` = '1'
ERROR - 2022-01-31 08:10:42 --> Severity: Notice --> Trying to get property 'company_id' of non-object C:\xampp\htdocs\maxvalue\application\models\Admin_model.php 431
ERROR - 2022-01-31 08:10:42 --> Severity: Notice --> Trying to get property 'product_id' of non-object C:\xampp\htdocs\maxvalue\application\models\Admin_model.php 435
ERROR - 2022-01-31 08:10:42 --> Severity: Notice --> Trying to get property 'company_id' of non-object C:\xampp\htdocs\maxvalue\application\models\Admin_model.php 431
ERROR - 2022-01-31 08:10:42 --> Severity: Notice --> Trying to get property 'product_id' of non-object C:\xampp\htdocs\maxvalue\application\models\Admin_model.php 435
ERROR - 2022-01-31 08:10:42 --> Severity: Notice --> Trying to get property 'company_id' of non-object C:\xampp\htdocs\maxvalue\application\models\Admin_model.php 431
ERROR - 2022-01-31 08:10:42 --> Severity: Notice --> Trying to get property 'product_id' of non-object C:\xampp\htdocs\maxvalue\application\models\Admin_model.php 435
ERROR - 2022-01-31 08:10:42 --> Severity: Notice --> Trying to get property 'company_id' of non-object C:\xampp\htdocs\maxvalue\application\models\Admin_model.php 431
ERROR - 2022-01-31 08:10:42 --> Severity: Notice --> Trying to get property 'product_id' of non-object C:\xampp\htdocs\maxvalue\application\models\Admin_model.php 435
ERROR - 2022-01-31 08:10:42 --> Severity: Notice --> Trying to get property 'company_id' of non-object C:\xampp\htdocs\maxvalue\application\models\Admin_model.php 431
ERROR - 2022-01-31 08:10:42 --> Severity: Notice --> Trying to get property 'product_id' of non-object C:\xampp\htdocs\maxvalue\application\models\Admin_model.php 435
ERROR - 2022-01-31 08:10:42 --> Severity: Notice --> Trying to get property 'company_id' of non-object C:\xampp\htdocs\maxvalue\application\models\Admin_model.php 431
ERROR - 2022-01-31 08:10:42 --> Severity: Notice --> Trying to get property 'product_id' of non-object C:\xampp\htdocs\maxvalue\application\models\Admin_model.php 435
ERROR - 2022-01-31 08:10:42 --> Severity: Notice --> Trying to get property 'company_id' of non-object C:\xampp\htdocs\maxvalue\application\models\Admin_model.php 431
ERROR - 2022-01-31 08:10:42 --> Severity: Notice --> Trying to get property 'product_id' of non-object C:\xampp\htdocs\maxvalue\application\models\Admin_model.php 435
ERROR - 2022-01-31 08:10:42 --> Severity: Notice --> Trying to get property 'company_id' of non-object C:\xampp\htdocs\maxvalue\application\models\Admin_model.php 431
ERROR - 2022-01-31 08:10:42 --> Severity: Notice --> Trying to get property 'product_id' of non-object C:\xampp\htdocs\maxvalue\application\models\Admin_model.php 435
ERROR - 2022-01-31 08:10:42 --> Severity: Notice --> Trying to get property 'company_id' of non-object C:\xampp\htdocs\maxvalue\application\models\Admin_model.php 431
ERROR - 2022-01-31 08:10:42 --> Severity: Notice --> Trying to get property 'product_id' of non-object C:\xampp\htdocs\maxvalue\application\models\Admin_model.php 435
ERROR - 2022-01-31 08:10:42 --> Severity: Notice --> Trying to get property 'company_id' of non-object C:\xampp\htdocs\maxvalue\application\models\Admin_model.php 431
ERROR - 2022-01-31 08:10:42 --> Severity: Notice --> Trying to get property 'product_id' of non-object C:\xampp\htdocs\maxvalue\application\models\Admin_model.php 435
ERROR - 2022-01-31 08:15:57 --> Severity: Notice --> Undefined index: where C:\xampp\htdocs\maxvalue\application\models\Admin_model.php 452
ERROR - 2022-01-31 08:15:57 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp\htdocs\maxvalue\application\models\Admin_model.php 452
ERROR - 2022-01-31 08:15:57 --> Severity: Notice --> Undefined index: columnlist C:\xampp\htdocs\maxvalue\application\models\Admin_model.php 453
ERROR - 2022-01-31 08:15:57 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp\htdocs\maxvalue\application\models\Admin_model.php 453
ERROR - 2022-01-31 08:15:57 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\maxvalue\system\database\DB_query_builder.php 294
ERROR - 2022-01-31 08:15:57 --> Severity: Notice --> Undefined index: table C:\xampp\htdocs\maxvalue\application\models\Admin_model.php 454
ERROR - 2022-01-31 08:15:57 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp\htdocs\maxvalue\application\models\Admin_model.php 454
ERROR - 2022-01-31 08:15:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'IS NULL' at line 2 - Invalid query: SELECT *
WHERE  IS NULL
ERROR - 2022-01-31 08:15:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\maxvalue\system\core\Exceptions.php:271) C:\xampp\htdocs\maxvalue\system\core\Common.php 570
ERROR - 2022-01-31 08:17:12 --> Severity: Notice --> Undefined variable: filelist C:\xampp\htdocs\maxvalue\application\views\single-business.php 47
ERROR - 2022-01-31 09:48:41 --> Severity: Notice --> Undefined variable: details C:\xampp\htdocs\maxvalue\application\views\single-business.php 56
ERROR - 2022-01-31 09:48:41 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\maxvalue\application\views\single-business.php 56
ERROR - 2022-01-31 09:48:41 --> Severity: Notice --> Undefined variable: details C:\xampp\htdocs\maxvalue\application\views\single-business.php 57
ERROR - 2022-01-31 09:48:41 --> Severity: Notice --> Trying to get property 'company_id' of non-object C:\xampp\htdocs\maxvalue\application\views\single-business.php 57
ERROR - 2022-01-31 09:48:41 --> Severity: Notice --> Undefined variable: details C:\xampp\htdocs\maxvalue\application\views\single-business.php 58
ERROR - 2022-01-31 09:48:41 --> Severity: Notice --> Trying to get property 'product_id' of non-object C:\xampp\htdocs\maxvalue\application\views\single-business.php 58
ERROR - 2022-01-31 09:48:41 --> Severity: Notice --> Undefined variable: details C:\xampp\htdocs\maxvalue\application\views\single-business.php 59
ERROR - 2022-01-31 09:48:41 --> Severity: Notice --> Trying to get property 'filename' of non-object C:\xampp\htdocs\maxvalue\application\views\single-business.php 59
ERROR - 2022-01-31 09:48:41 --> Severity: Notice --> Undefined variable: details C:\xampp\htdocs\maxvalue\application\views\single-business.php 60
ERROR - 2022-01-31 09:48:41 --> Severity: Notice --> Trying to get property 'created_on' of non-object C:\xampp\htdocs\maxvalue\application\views\single-business.php 60
ERROR - 2022-01-31 09:48:41 --> Severity: Notice --> Undefined variable: details C:\xampp\htdocs\maxvalue\application\views\single-business.php 61
ERROR - 2022-01-31 09:48:41 --> Severity: Notice --> Trying to get property 'filesize' of non-object C:\xampp\htdocs\maxvalue\application\views\single-business.php 61
ERROR - 2022-01-31 09:48:41 --> Severity: Notice --> Undefined variable: details C:\xampp\htdocs\maxvalue\application\views\single-business.php 62
ERROR - 2022-01-31 09:48:41 --> Severity: Notice --> Trying to get property 'total_case' of non-object C:\xampp\htdocs\maxvalue\application\views\single-business.php 62
ERROR - 2022-01-31 09:48:41 --> Severity: Notice --> Undefined variable: details C:\xampp\htdocs\maxvalue\application\views\single-business.php 66
ERROR - 2022-01-31 09:48:41 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\maxvalue\application\views\single-business.php 66
ERROR - 2022-01-31 09:48:41 --> Severity: Notice --> Undefined variable: variant C:\xampp\htdocs\maxvalue\application\views\single-business.php 68
ERROR - 2022-01-31 09:48:41 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\maxvalue\application\views\single-business.php 68
ERROR - 2022-01-31 09:48:41 --> Severity: Notice --> Undefined variable: details C:\xampp\htdocs\maxvalue\application\views\single-business.php 70
ERROR - 2022-01-31 09:48:41 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\maxvalue\application\views\single-business.php 70
ERROR - 2022-01-31 09:56:32 --> Severity: Notice --> Undefined variable: details C:\xampp\htdocs\maxvalue\application\views\single-business.php 52
ERROR - 2022-01-31 09:56:32 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\maxvalue\application\views\single-business.php 52
ERROR - 2022-01-31 09:56:32 --> Severity: Notice --> Undefined variable: details C:\xampp\htdocs\maxvalue\application\views\single-business.php 53
ERROR - 2022-01-31 09:56:32 --> Severity: Notice --> Trying to get property 'company_id' of non-object C:\xampp\htdocs\maxvalue\application\views\single-business.php 53
ERROR - 2022-01-31 09:56:32 --> Severity: Notice --> Undefined variable: details C:\xampp\htdocs\maxvalue\application\views\single-business.php 54
ERROR - 2022-01-31 09:56:32 --> Severity: Notice --> Trying to get property 'product_id' of non-object C:\xampp\htdocs\maxvalue\application\views\single-business.php 54
ERROR - 2022-01-31 09:56:32 --> Severity: Notice --> Undefined variable: details C:\xampp\htdocs\maxvalue\application\views\single-business.php 55
ERROR - 2022-01-31 09:56:32 --> Severity: Notice --> Trying to get property 'filename' of non-object C:\xampp\htdocs\maxvalue\application\views\single-business.php 55
ERROR - 2022-01-31 09:56:32 --> Severity: Notice --> Undefined variable: details C:\xampp\htdocs\maxvalue\application\views\single-business.php 56
ERROR - 2022-01-31 09:56:32 --> Severity: Notice --> Trying to get property 'created_on' of non-object C:\xampp\htdocs\maxvalue\application\views\single-business.php 56
ERROR - 2022-01-31 09:56:32 --> Severity: Notice --> Undefined variable: details C:\xampp\htdocs\maxvalue\application\views\single-business.php 57
ERROR - 2022-01-31 09:56:32 --> Severity: Notice --> Trying to get property 'filesize' of non-object C:\xampp\htdocs\maxvalue\application\views\single-business.php 57
ERROR - 2022-01-31 09:56:32 --> Severity: Notice --> Undefined variable: details C:\xampp\htdocs\maxvalue\application\views\single-business.php 58
ERROR - 2022-01-31 09:56:32 --> Severity: Notice --> Trying to get property 'total_case' of non-object C:\xampp\htdocs\maxvalue\application\views\single-business.php 58
ERROR - 2022-01-31 09:56:32 --> Severity: Notice --> Undefined variable: details C:\xampp\htdocs\maxvalue\application\views\single-business.php 62
ERROR - 2022-01-31 09:56:32 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\maxvalue\application\views\single-business.php 62
ERROR - 2022-01-31 09:56:32 --> Severity: Notice --> Undefined variable: variant C:\xampp\htdocs\maxvalue\application\views\single-business.php 64
ERROR - 2022-01-31 09:56:32 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\maxvalue\application\views\single-business.php 64
ERROR - 2022-01-31 09:56:32 --> Severity: Notice --> Undefined variable: details C:\xampp\htdocs\maxvalue\application\views\single-business.php 66
ERROR - 2022-01-31 09:56:32 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\maxvalue\application\views\single-business.php 66
ERROR - 2022-01-31 09:57:29 --> Severity: Notice --> Undefined variable: details C:\xampp\htdocs\maxvalue\application\views\single-business.php 53
ERROR - 2022-01-31 09:57:29 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\maxvalue\application\views\single-business.php 53
ERROR - 2022-01-31 09:57:29 --> Severity: Notice --> Undefined variable: details C:\xampp\htdocs\maxvalue\application\views\single-business.php 54
ERROR - 2022-01-31 09:57:29 --> Severity: Notice --> Trying to get property 'company_id' of non-object C:\xampp\htdocs\maxvalue\application\views\single-business.php 54
ERROR - 2022-01-31 09:57:29 --> Severity: Notice --> Undefined variable: details C:\xampp\htdocs\maxvalue\application\views\single-business.php 55
ERROR - 2022-01-31 09:57:29 --> Severity: Notice --> Trying to get property 'product_id' of non-object C:\xampp\htdocs\maxvalue\application\views\single-business.php 55
ERROR - 2022-01-31 09:57:29 --> Severity: Notice --> Undefined variable: details C:\xampp\htdocs\maxvalue\application\views\single-business.php 56
ERROR - 2022-01-31 09:57:29 --> Severity: Notice --> Trying to get property 'filename' of non-object C:\xampp\htdocs\maxvalue\application\views\single-business.php 56
ERROR - 2022-01-31 09:57:29 --> Severity: Notice --> Undefined variable: details C:\xampp\htdocs\maxvalue\application\views\single-business.php 57
ERROR - 2022-01-31 09:57:29 --> Severity: Notice --> Trying to get property 'created_on' of non-object C:\xampp\htdocs\maxvalue\application\views\single-business.php 57
ERROR - 2022-01-31 09:57:29 --> Severity: Notice --> Undefined variable: details C:\xampp\htdocs\maxvalue\application\views\single-business.php 58
ERROR - 2022-01-31 09:57:29 --> Severity: Notice --> Trying to get property 'filesize' of non-object C:\xampp\htdocs\maxvalue\application\views\single-business.php 58
ERROR - 2022-01-31 09:57:29 --> Severity: Notice --> Undefined variable: details C:\xampp\htdocs\maxvalue\application\views\single-business.php 59
ERROR - 2022-01-31 09:57:29 --> Severity: Notice --> Trying to get property 'total_case' of non-object C:\xampp\htdocs\maxvalue\application\views\single-business.php 59
ERROR - 2022-01-31 09:57:29 --> Severity: Notice --> Undefined variable: details C:\xampp\htdocs\maxvalue\application\views\single-business.php 63
ERROR - 2022-01-31 09:57:29 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\maxvalue\application\views\single-business.php 63
ERROR - 2022-01-31 09:57:29 --> Severity: Notice --> Undefined variable: variant C:\xampp\htdocs\maxvalue\application\views\single-business.php 65
ERROR - 2022-01-31 09:57:29 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\maxvalue\application\views\single-business.php 65
ERROR - 2022-01-31 09:57:29 --> Severity: Notice --> Undefined variable: details C:\xampp\htdocs\maxvalue\application\views\single-business.php 67
ERROR - 2022-01-31 09:57:29 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\maxvalue\application\views\single-business.php 67
ERROR - 2022-01-31 09:59:18 --> Severity: Notice --> Undefined variable: details C:\xampp\htdocs\maxvalue\application\views\single-business.php 53
ERROR - 2022-01-31 09:59:18 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\maxvalue\application\views\single-business.php 53
ERROR - 2022-01-31 09:59:18 --> Severity: Notice --> Undefined variable: details C:\xampp\htdocs\maxvalue\application\views\single-business.php 54
ERROR - 2022-01-31 09:59:18 --> Severity: Notice --> Trying to get property 'company_id' of non-object C:\xampp\htdocs\maxvalue\application\views\single-business.php 54
ERROR - 2022-01-31 09:59:18 --> Severity: Notice --> Undefined variable: details C:\xampp\htdocs\maxvalue\application\views\single-business.php 55
ERROR - 2022-01-31 09:59:18 --> Severity: Notice --> Trying to get property 'product_id' of non-object C:\xampp\htdocs\maxvalue\application\views\single-business.php 55
ERROR - 2022-01-31 09:59:18 --> Severity: Notice --> Undefined variable: details C:\xampp\htdocs\maxvalue\application\views\single-business.php 56
ERROR - 2022-01-31 09:59:18 --> Severity: Notice --> Trying to get property 'filename' of non-object C:\xampp\htdocs\maxvalue\application\views\single-business.php 56
ERROR - 2022-01-31 09:59:18 --> Severity: Notice --> Undefined variable: details C:\xampp\htdocs\maxvalue\application\views\single-business.php 57
ERROR - 2022-01-31 09:59:18 --> Severity: Notice --> Trying to get property 'created_on' of non-object C:\xampp\htdocs\maxvalue\application\views\single-business.php 57
ERROR - 2022-01-31 09:59:18 --> Severity: Notice --> Undefined variable: details C:\xampp\htdocs\maxvalue\application\views\single-business.php 58
ERROR - 2022-01-31 09:59:18 --> Severity: Notice --> Trying to get property 'filesize' of non-object C:\xampp\htdocs\maxvalue\application\views\single-business.php 58
ERROR - 2022-01-31 09:59:18 --> Severity: Notice --> Undefined variable: details C:\xampp\htdocs\maxvalue\application\views\single-business.php 59
ERROR - 2022-01-31 09:59:18 --> Severity: Notice --> Trying to get property 'total_case' of non-object C:\xampp\htdocs\maxvalue\application\views\single-business.php 59
ERROR - 2022-01-31 09:59:18 --> Severity: Notice --> Undefined variable: details C:\xampp\htdocs\maxvalue\application\views\single-business.php 63
ERROR - 2022-01-31 09:59:18 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\maxvalue\application\views\single-business.php 63
ERROR - 2022-01-31 09:59:18 --> Severity: Notice --> Undefined variable: variant C:\xampp\htdocs\maxvalue\application\views\single-business.php 65
ERROR - 2022-01-31 09:59:18 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\maxvalue\application\views\single-business.php 65
ERROR - 2022-01-31 09:59:18 --> Severity: Notice --> Undefined variable: details C:\xampp\htdocs\maxvalue\application\views\single-business.php 67
ERROR - 2022-01-31 09:59:18 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\maxvalue\application\views\single-business.php 67
ERROR - 2022-01-31 11:17:15 --> Severity: Notice --> Undefined variable: variant C:\xampp\htdocs\maxvalue\application\views\business-upload.php 153
ERROR - 2022-01-31 11:17:15 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\maxvalue\application\views\business-upload.php 153
ERROR - 2022-01-31 11:17:15 --> Severity: Notice --> Undefined variable: variant C:\xampp\htdocs\maxvalue\application\views\business-upload.php 153
ERROR - 2022-01-31 11:17:15 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\maxvalue\application\views\business-upload.php 153
ERROR - 2022-01-31 11:20:41 --> Severity: Notice --> Undefined variable: variant C:\xampp\htdocs\maxvalue\application\views\incentive-upload.php 167
ERROR - 2022-01-31 11:20:41 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\maxvalue\application\views\incentive-upload.php 167
ERROR - 2022-01-31 11:20:43 --> Severity: Notice --> Undefined variable: companylist C:\xampp\htdocs\maxvalue\application\views\single-incentive.php 38
ERROR - 2022-01-31 11:20:43 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\maxvalue\application\views\single-incentive.php 38
ERROR - 2022-01-31 11:20:43 --> Severity: Notice --> Undefined variable: filelist C:\xampp\htdocs\maxvalue\application\views\single-incentive.php 135
ERROR - 2022-01-31 11:31:44 --> Severity: Notice --> Undefined variable: variant C:\xampp\htdocs\maxvalue\application\views\business-upload.php 153
ERROR - 2022-01-31 11:31:44 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\maxvalue\application\views\business-upload.php 153
ERROR - 2022-01-31 11:31:44 --> Severity: Notice --> Undefined variable: variant C:\xampp\htdocs\maxvalue\application\views\business-upload.php 153
ERROR - 2022-01-31 11:31:44 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\maxvalue\application\views\business-upload.php 153
ERROR - 2022-01-31 11:31:53 --> Severity: Notice --> Undefined variable: variant C:\xampp\htdocs\maxvalue\application\views\business-upload.php 153
ERROR - 2022-01-31 11:31:53 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\maxvalue\application\views\business-upload.php 153
ERROR - 2022-01-31 11:31:53 --> Severity: Notice --> Undefined variable: variant C:\xampp\htdocs\maxvalue\application\views\business-upload.php 153
ERROR - 2022-01-31 11:31:53 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\maxvalue\application\views\business-upload.php 153
ERROR - 2022-01-31 11:34:59 --> Severity: Notice --> Undefined variable: variant C:\xampp\htdocs\maxvalue\application\views\business-upload.php 153
ERROR - 2022-01-31 11:34:59 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\maxvalue\application\views\business-upload.php 153
ERROR - 2022-01-31 11:34:59 --> Severity: Notice --> Undefined variable: variant C:\xampp\htdocs\maxvalue\application\views\business-upload.php 153
ERROR - 2022-01-31 11:34:59 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\maxvalue\application\views\business-upload.php 153
