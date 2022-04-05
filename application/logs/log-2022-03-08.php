<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-03-08 07:28:12 --> Severity: Notice --> Undefined property: CI_DB_mysqli_driver::$db C:\xampp\htdocs\maxvalue\application\models\Admin_model.php 739
ERROR - 2022-03-08 07:28:12 --> Severity: error --> Exception: Call to a member function get() on null C:\xampp\htdocs\maxvalue\application\models\Admin_model.php 739
ERROR - 2022-03-08 07:29:26 --> Severity: Notice --> Undefined property: CI_DB_mysqli_driver::$db C:\xampp\htdocs\maxvalue\application\models\Admin_model.php 739
ERROR - 2022-03-08 07:29:26 --> Severity: error --> Exception: Call to a member function get() on null C:\xampp\htdocs\maxvalue\application\models\Admin_model.php 739
ERROR - 2022-03-08 07:31:08 --> Query error: No tables used - Invalid query: SELECT *
ERROR - 2022-03-08 07:53:09 --> Severity: error --> Exception: Object of class CI_DB_mysqli_driver could not be converted to string C:\xampp\htdocs\maxvalue\application\models\Admin_model.php 706
ERROR - 2022-03-08 07:55:12 --> Severity: Notice --> Undefined property: CI_DB_mysqli_driver::$from('tbl_business_details') C:\xampp\htdocs\maxvalue\application\models\Admin_model.php 706
ERROR - 2022-03-08 07:55:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '->join('tbl_company_details', 'tbl_company_details.id=tbl_business_details.co...' at line 2 - Invalid query: SELECT count(*) as total_case, sum(tbl_business_details.shares_purchased) as shares_purchased, sum(tbl_business_details.investment_amount) as investment_amount, `tbl_company_details`.`name` as `company`, `tbl_product_details`.`name` as `product`
FROM ->join('tbl_company_details', 'tbl_company_details.id=tbl_business_details.company_id')->join('tbl_product_details', 'tbl_product_details.id=tbl_business_details.product_id', 'left')->where('tbl_business_details.clearing_date >=', date('Y-m-d', strtotime(2018-01-01)))
			->where('tbl_business_details.clearing_date <=', date('Y-m-d', strtotime(2022-03-08)))
			->where('tbl_business_details.company_id', 2)
			->where('tbl_business_details.product_id', 6)
			->where('tbl_business_details.status !=', 'Deleted')
ERROR - 2022-03-08 08:27:57 --> Severity: error --> Exception: Object of class CI_DB_mysqli_driver could not be converted to string C:\xampp\htdocs\maxvalue\application\models\Admin_model.php 745
ERROR - 2022-03-08 09:29:35 --> Query error: Unknown table 'gravigw4_maxvalue.tbl_business_details' - Invalid query: SELECT `tbl_business_details`.*, `tbl_company_details`.`name` as `company`, `tbl_product_details`.`name` as `product`
ERROR - 2022-03-08 09:32:38 --> Query error: Unknown table 'gravigw4_maxvalue.tbl_business_details' - Invalid query: SELECT `tbl_business_details`.*
ERROR - 2022-03-08 09:33:26 --> Query error: No tables used - Invalid query: SELECT *
ERROR - 2022-03-08 09:34:06 --> Query error: Unknown table 'gravigw4_maxvalue.tbl_business_details' - Invalid query: SELECT `tbl_business_details`.*, `tbl_company_details`.`name` as `company`, `tbl_product_details`.`name` as `product`
ERROR - 2022-03-08 09:42:52 --> Query error: Not unique table/alias: 'tbl_business_details' - Invalid query: SELECT count(*) as total_case, sum(tbl_business_details.shares_purchased) as shares_purchased, sum(tbl_business_details.investment_amount) as investment_amount, `tbl_company_details`.`name` as `company`, `tbl_product_details`.`name` as `product`, `tbl_business_details`.*, `tbl_company_details`.`name` as `company`, `tbl_product_details`.`name` as `product`
FROM (`tbl_business_details`, `tbl_business_details`)
JOIN `tbl_company_details` ON `tbl_company_details`.`id`=`tbl_business_details`.`company_id`
LEFT JOIN `tbl_product_details` ON `tbl_product_details`.`id`=`tbl_business_details`.`product_id`
JOIN `tbl_company_details` ON `tbl_company_details`.`id`=`tbl_business_details`.`company_id`
LEFT JOIN `tbl_product_details` ON `tbl_product_details`.`id`=`tbl_business_details`.`product_id`
WHERE `tbl_business_details`.`clearing_date` >= '2018-01-09'
AND `tbl_business_details`.`clearing_date` <= '2022-03-07'
AND `tbl_business_details`.`company_id` = '2'
AND `tbl_business_details`.`product_id` = '6'
AND `tbl_business_details`.`status` != 'Deleted'
AND `tbl_business_details`.`clearing_date` >= '2018-01-09'
AND `tbl_business_details`.`clearing_date` <= '2022-03-07'
AND `tbl_business_details`.`company_id` = '2'
AND `tbl_business_details`.`product_id` = '6'
AND `tbl_business_details`.`status` != 'Deleted'
AND tbl_business_details.avp IN (SELECT name FROM tbl_avp_details )
ERROR - 2022-03-08 10:08:25 --> Query error: Unknown column 'tbl_business_details.product_id6' in 'where clause' - Invalid query: select count(*) as total_case,sum(tbl_business_details.shares_purchased) as shares_purchased,sum(tbl_business_details.investment_amount) as investment_amount,tbl_company_details.name as company,tbl_product_details.name as product from tbl_business_details join tbl_company_details on tbl_company_details.id=tbl_business_details.company_id left join tbl_product_details on tbl_product_details.id=tbl_business_details.product_id where tbl_business_details.clearing_date >=2018-01-09 and tbl_business_details.clearing_date <=2022-03-07 and tbl_business_details.company_id=2 and tbl_business_details.product_id6 and tbl_business_details.status !='Deleted'  and tbl_business_details.avp IN (SELECT name FROM tbl_avp_details )
ERROR - 2022-03-08 12:53:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'not null and tbl_business_details.clearing_date <='2022-03-09' not null and t...' at line 1 - Invalid query: select tbl_business_details.*,tbl_company_details.name as company,tbl_product_details.name as product from tbl_business_details join tbl_company_details on tbl_company_details.id=tbl_business_details.company_id left join tbl_product_details on tbl_product_details.id=tbl_business_details.product_id where tbl_business_details.clearing_date >='2018-01-07' not null and tbl_business_details.clearing_date <='2022-03-09' not null and tbl_business_details.company_id=2 not null and tbl_business_details.product_id=6 not null and tbl_business_details.status !='Deleted' not null 
