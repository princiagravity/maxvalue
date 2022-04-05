<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    public function __construct()
    {
        parent::__construct();
        $data = array();

		$this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->database();
        $this->load->model('admin_model');	 
		if ( ! $this->session->userdata('user_id') && !$this->session->userdata('user_id')==1)
		{ 
			// Allow some methods?
			$allowed = array(
				'index','user_login'
			);
			if ( ! in_array($this->router->fetch_method(), $allowed))
			{
				redirect('admin');
			}
		}
     }
     public function index()
     {
		if($this->session->userdata('user_id')==1 && $this->session->userdata('user_id'))
		{
			redirect('dashboard');
		}
		else
		{
			$this->load->view('header');
			$this->load->view('index');
			$this->load->view('footer');
		}
     }
	 public function user_login()
	 {
		 $username=$this->input->post('username');
		 $password=$this->input->post('password');
	 
		 $sucess=$this->admin_model->check_user_exist($username,$password);
		 if($sucess==1)
		 {
 
			 $response=array('success'=>$sucess,'redirect_url'=>base_url().'dashboard');
		 }
		 else
		 {
			 $response=array('success'=>$sucess,'redirect_url'=>'');
		 }
		 echo json_encode($response);
		 die();
	 }
 
	 public function user_logout()
	 {
		 $user_data = $this->session->all_userdata();
		 foreach ($user_data as $key => $value) {
				 $this->session->unset_userdata($key);
		 }
		 $this->session->sess_destroy();
		 redirect('admin');
	 }
	 public function dashboard()
	 {/* 
		$table_name='customer_details';
		$columns='id,user_id,first_name,last_name,date_of_joining';
		/* $where=" and created_by !='guest'"; */
		/*$limit=5;
		$data['customer_list']=$this->admin_model->get_lists($table_name,$columns,$limit);
		$table_name='agent_details';
		$columns='id,user_id,area_id,district_id,first_name,last_name';
		$limit=5;
		$data['agent_list']=$this->admin_model->get_lists($table_name,$columns,$limit);
		$table_name='order_details';
		$columns='id,customer_id,order_time,order_total,payment_type,delivery_type,items,area,status,parent_id,agent_id,created_by';
		$limit=100;
		$data['order_list']=$this->admin_model->get_lists($table_name,$columns,$limit);
		foreach($data['agent_list'] as $index=>$value)
		{
			$value->district_id=$this->admin_model->get_district_name($value->district_id);
			$value->area_id=$this->admin_model->get_area_name($value->area_id);
			
		}
		foreach($data['order_list'] as $index=>$value)
		{

			if($value->created_by=='guest')
			{
				$value->customer=$this->admin_model->get_customer_name($value->customer_id);
			}
			else
			{
			$value->customer=$this->admin_model->get_display_name($value->customer_id);
			}
			$value->area=$this->admin_model->get_area_name($value->area);
			
			if($value->agent_id==1)
			{
				$value->agent='Admin';
			}
			else
			if($value->agent_id =="")
			{
				$value->agent="Not Assigned";
			}
			else
			{
			$value->agent=$this->admin_model->get_display_name($value->agent_id);
			}
		}
		
		$data['dash_count']=$this->admin_model->get_dashboard_count(); */

		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('dashboard');
		$this->load->view('footer'); 
	 }
	 
	 public function main_page($main_page,$id="",$param1="",$param2="")
	 {
		 $data=array();
		 if($id)
		 {
			 $id=$id;
		 }
		 if($main_page=='customer-search')
		 {
			/* $data['agents']=$this->admin_model->get_all_agents();
			$data['agentrep']=$this->admin_model->get_agent_report(); */
			 /* if($id != "")
			 {
			 $single['table']='delivery_boy_details';
			 $single['columnlist']='*';
			 $single['where']='id='.$id;	
			 $single['type']='deliveryboy';
			 $data['update']=$this->admin_model->get_single_view($single);
			 }
			 $table_name='delivery_boy_details';
			 $columns='id,name,mobile,status';
			 $limit=100;
			 $data['del_boyslist']=$this->admin_model->get_lists($table_name,$columns,$limit);
  */
		 }
		 else if($main_page=='customers-list')
		 {

		 }
		 else if($main_page=='business-upload')
		 {

		 }
		 else if($main_page=='fresh-incentive')
		 {

		 }
		 else if($main_page=='renewal-incentive')
		 {

		 }
	
		 $this->load->view('header');
		 $this->load->view('navbar');
		 $this->load->view($main_page,$data);
		 $this->load->view('footer');
	 }

	 public function setting_page($product_name,$id="",$param1="",$param2="")
	 {
		 $data=array();
		 if($id)
		 {
			 $id=$id;
		 }
		 if($product_name)
		 {

			 if($id != "")
			 {
				$single['table']=array('customer_details','user_details');
				$single['columnlist']=array(array('*'),array('*'));
				$single['where']=array("user_id=".$id." and status!='Deleted'",'id='.$id." and status!='Deleted' and role='customer'");
				$single['type']='customer';
				$data['update']=$this->admin_model->get_single_view($single);
				/* print_r($data['update']); exit; */
			 }
		
			 $table_name='tbl_'.$product_name;
			 $columns='*';
			 $limit=1000;
			 $data['details']=$this->admin_model->get_lists($table_name,$columns,$limit);
			 $key_array=array();
			 $remcol = array('id','status','created_on','updated_on','created_by');
			 $i=0;
			 if($data['details'])
			 {
			 foreach($data['details'][0] as $index=>$value)
			 {
				if(! in_array($index, $remcol))
				{
				$key_array[$i]=ucfirst(str_replace('_', ' ', $index)); 
				$i++;
				}
			}
			$data['columns']=$key_array;
			}
			 $data['type']=$product_name;
			 
		 }
		
		 $this->load->view('header');
		 $this->load->view('navbar');
		 $this->load->view('import-file',$data);
		 $this->load->view('footer');
 
	 }

	 public function reports($product_report)
	 {
		 $data=array();
		 if($product_report=="sanat-multitrade-share-report")
		 {
			 $table="tbl_sanat_multitrade_share";
			 $data['avp']=$this->admin_model->get_distinct($table,'avp');
			 $data['am']=$this->admin_model->get_distinct($table,'am');
			 $data['zm']=$this->admin_model->get_distinct($table,'zm');
			 $data['region']=$this->admin_model->get_distinct($table,'region');
			 $data['branch']=$this->admin_model->get_distinct($table,'branch');
			/* ;
			 $columnlist='avp,am,zm,region,branch';
			 $where="";
			 $distinctlist=$this->admin_model->get_distinct_list($table,$columnlist,$where); */

		 }
		 $this->load->view('header');
		 $this->load->view('navbar');
		 $this->load->view(''.$product_report,$data);
		 $this->load->view('footer');
	 }

	

	 public function add_avp()
	 {
			 $data=array();
			 $data['name']=$this->input->post('name');
			 $data['status']=$this->input->post('status');
			 $result= $this->admin_model->insert_avp($data);
			 echo json_encode($result);
	 }
	 public function update_avp()
	 {
			 $data=array();
			 $data['id']=$this->input->post('id');
			 $data['name']=$this->input->post('name');
			 $data['status']=$this->input->post('status');
			 $result= $this->admin_model->update_avp($data);
			 echo json_encode($result);
	 }
	 public function add_zm()
	 {
			 $data=array();
			 $data['name']=$this->input->post('name');
			 $data['status']=$this->input->post('status');
			 $result= $this->admin_model->insert_zm($data);
			 echo json_encode($result);
	 }
	 public function update_zm()
	 {
			 $data=array();
			 $data['id']=$this->input->post('id');
			 $data['name']=$this->input->post('name');
			 $data['status']=$this->input->post('status');
			 $result= $this->admin_model->update_zm($data);
			 echo json_encode($result);
	 }
	 public function add_am()
	 {
			 $data=array();
			 $data['name']=$this->input->post('name');
			 $data['status']=$this->input->post('status');
			 $result= $this->admin_model->insert_am($data);
			 echo json_encode($result);
	 }
	 public function update_am()
	 {
			 $data=array();
			 $data['id']=$this->input->post('id');
			 $data['name']=$this->input->post('name');
			 $data['status']=$this->input->post('status');
			 $result= $this->admin_model->update_am($data);
			 echo json_encode($result);
	 }
	 public function add_branch()
	 {
			 $data=array();
			 $data['name']=$this->input->post('name');
			 $data['status']=$this->input->post('status');
			 $result= $this->admin_model->insert_branch($data);
			 echo json_encode($result);
	 }
	 public function update_branch()
	 {
			 $data=array();
			 $data['id']=$this->input->post('id');
			 $data['name']=$this->input->post('name');
			 $data['status']=$this->input->post('status');
			 $result= $this->admin_model->update_branch($data);
			 echo json_encode($result);
	 }
	 public function add_region()
	 {
			 $data=array();
			 $data['name']=$this->input->post('name');
			 $data['status']=$this->input->post('status');
			 $result= $this->admin_model->insert_region($data);
			 echo json_encode($result);
	 }
	 public function update_region()
	 {
			 $data=array();
			 $data['id']=$this->input->post('id');
			 $data['name']=$this->input->post('name');
			 $data['status']=$this->input->post('status');
			 $result= $this->admin_model->update_region($data);
			 echo json_encode($result);
	 }
	 public function upload_file()
	{
		if ($this->input->post('type')) {
			$path = 'uploads/';
			$msg=""; 
			require_once APPPATH . "/third_party/PHPExcel.php";
			$config['upload_path'] = $path;
			$config['allowed_types'] = 'xlsx|xls|csv';
			$config['remove_spaces'] = TRUE;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);       
			$table_name=$this->input->post('type');
			if($table_name=="supra_ncd")
			{
			$columnlist=array('application_date', 'branch', 'customer_name', 'marital_status', 'customer_address', 'customer_mobile', 'email_id', 'nominee_name', 'nominee_relation', 'pan_no', 'aadhar_no', 'product_scheme', 'investment_perion', 'interest', 'investment_amount', 'fund_transfer_date', 'cheque_utr_no', 'clearing_date', 'demat_participant', 'demat_ac_no', 'customer_name_in_bank', 'bank_name', 'bank_acoount_no', 'ifsc', 'canvasser_name','canvass_code', 'canvas_type', 'am', 'region', 'zm', 'avp', 'ncd_allotment_no', 'maturity_date'); 
			}
			else if($table_name=="supra_subdebt")
			{
			$columnlist=array('application_date', 'branch', 'customer_name', 'marital_status', 'customer_address', 'customer_mobile', 'email_id', 'nominee_name', 'nominee_relation', 'pan_no', 'aadhar_no', 'product_scheme', 'investment_perion', 'interest', 'investment_amount', 'fund_transfer_date', 'cheque_utr_no', 'clearing_date', 'demat_participant', 'demat_ac_no', 'customer_name_in_bank', 'bank_name', 'bank_acoount_no', 'ifsc', 'canvasser_name','canvass_code', 'canvas_type', 'am', 'region', 'zm', 'avp', 'ncd_allotment_no', 'maturity_date');
			}
			else if($table_name=="supra_share")
			{
			$columnlist=array('application_date', 'branch', 'customer_name', 'customer_address', 'customer_mobile', 'email_id', 'nominee_name', 'pan_no', 'aadhar_no', 'shares_purchased', 'investment_amount', 'fund_transfer_date', 'cheque_utr_no', 'clearing_date', 'demat_participant', 'demat_ac_no', 'customer_name_in_bank', 'bank_name', 'bank_acoount_no', 'ifsc', 'canvasser_name','canvass_code', 'canvas_type', 'am', 'region', 'zm', 'avp', 'share_no');
			}
			else if($table_name=="sanat_multitrade_share")
			{
			$columnlist=array('application_date', 'branch', 'customer_name', 'customer_address', 'customer_mobile', 'email_id', 'nominee_name', 'pan_no', 'aadhar_no', 'shares_purchased', 'investment_amount', 'fund_transfer_date', 'cheque_utr_no', 'clearing_date', 'demat_participant', 'demat_ac_no', 'customer_name_in_bank', 'bank_name', 'bank_acoount_no', 'ifsc', 'canvasser_name','canvass_code','canvass_code', 'canvas_type', 'am', 'region', 'zm', 'avp', 'share_no');
			}
			else if($table_name=="maxvalue_credits_ncd")
			{
				$columnlist=array('application_date', 'branch', 'customer_name', 'marital_status', 'customer_address', 'customer_mobile', 'email_id', 'nominee_name', 'nominee_relation', 'pan_no', 'aadhar_no', 'product_scheme', 'investment_perion', 'interest', 'investment_amount', 'fund_transfer_date', 'cheque_utr_no', 'clearing_date', 'demat_participant', 'demat_ac_no', 'customer_name_in_bank', 'bank_name', 'bank_acoount_no', 'ifsc', 'canvasser_name','canvass_code', 'canvas_type', 'am', 'region', 'zm', 'avp', 'ncd_allotment_no', 'maturity_date');
			}
			else if($table_name=="maxvalue_credits_subdebt")
			{
				$columnlist=array('application_date', 'branch', 'customer_name', 'marital_status', 'customer_address', 'customer_mobile', 'email_id', 'nominee_name', 'nominee_relation', 'pan_no', 'aadhar_no', 'product_scheme', 'investment_perion', 'interest', 'investment_amount', 'fund_transfer_date', 'cheque_utr_no', 'clearing_date', 'demat_participant', 'demat_ac_no', 'customer_name_in_bank', 'bank_name', 'bank_acoount_no', 'ifsc', 'canvasser_name','canvass_code', 'canvas_type', 'am', 'region', 'zm', 'avp', 'ncd_allotment_no', 'maturity_date');
			}
			else if($table_name=="maxvalue_credits_share")
			{
				$columnlist=array('application_date', 'branch', 'customer_name', 'customer_address', 'customer_mobile', 'email_id', 'nominee_name', 'pan_no', 'aadhar_no', 'shares_purchased', 'investment_amount', 'fund_transfer_date', 'cheque_utr_no', 'clearing_date', 'demat_participant', 'demat_ac_no', 'customer_name_in_bank', 'bank_name', 'bank_acoount_no', 'ifsc', 'canvasser_name','canvass_code', 'canvas_type', 'am', 'region', 'zm', 'avp', 'share_no');
			}
			else if($table_name=="maxvalue_nidhi_fd")
			{
				$columnlist=array('application_date', 'branch', 'customer_name', 'customer_address', 'customer_mobile', 'email_id', 'nominee_name', 'pan_no', 'aadhar_no', 'product_scheme', 'investment_perion', 'interest', 'investment_amount', 'fund_transfer_date', 'cheque_utr_no', 'clearing_date', 'bank_name', 'bank_acoount_no', 'ifsc', 'canvasser_name','canvass_code', 'canvas_type', 'am', 'region', 'zm', 'avp', 'fd_no', 'maturity_date');
			}
			else if($table_name=="cfcici_deposit")
			{
				$columnlist=array('application_date', 'branch', 'customer_name', 'customer_address', 'customer_mobile', 'nominee_name', 'pan_no', 'aadhar_no', 'product_scheme', 'investment_perion', 'shares_purchased', 'investment_amount', 'fund_transfer_date', 'cheque_utr_no', 'clearing_date', 'bank_name', 'bank_acoount_no', 'ifsc', 'canvasser_name','canvass_code', 'canvas_type', 'am', 'region', 'zm', 'avp', 'membership_id');
			}
			else if($table_name=="cfcici_membership")
			{
				$columnlist=array('application_date', 'branch', 'customer_name', 'customer_address', 'customer_mobile', 'nominee_name', 'pan_no', 'aadhar_no', 'product_scheme', 'investment_perion', 'interest', 'investment_amount', 'fund_transfer_date', 'cheque_utr_no', 'clearing_date', 'bank_name', 'bank_acoount_no', 'ifsc', 'canvasser_name','canvass_code', 'canvas_type', 'am', 'region', 'zm', 'avp', 'fd_no', 'maturity_date');
			}
			if (!$this->upload->do_upload('uploadFile')) {
			$error = array('error' => $this->upload->display_errors());
			} else {
			$data = array('upload_data' => $this->upload->data());
			}
			if(empty($error)){
			if (!empty($data['upload_data']['file_name'])) {
			$import_xls_file = $data['upload_data']['file_name'];
			} else {
			$import_xls_file = 0;
			}
			$inputFileName = $path . $import_xls_file;
			try {
			$inputFileType = PHPExcel_IOFactory::identify($inputFileName);
			$objReader = PHPExcel_IOFactory::createReader($inputFileType);
			$objPHPExcel = $objReader->load($inputFileName);
			$allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
			$flag = true;
			$i=0;
			$dtarray=array('application_date','clearing_date');
			foreach ($allDataInSheet as $value) {
			
				if($flag){
					$flag =false;
					continue;
					}
				  $j=0;
				foreach($value as $index=>$value)
				{    
					if(isset($columnlist[$j]) && $value!="")
					{ 

						if(in_array($columnlist[$j],$dtarray))
						{
							$value= date('Y-m-d',strtotime($value));
						}   
				$inserdata[$i][$columnlist[$j]]=$value;
					}
				$j++;
				}
			
			$i++;
			
			}      
			$result = $this->admin_model->scheme_insert($inserdata,$table_name);   
			$success=$result;
			if($result){	
			$msg="Imported successfully";
			}else{
				$msg= "ERROR !";
			}             
			} catch (Exception $e) {
			die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
			. '": ' .$e->getMessage());
			}
			}else{
				$msg=$msg." ".$error['error'];
			}
			}
			/* $this->load->view('import'); */
			echo json_encode(array('message'=>$msg,'success'=>$success));
		
	}
public function get_report_result()
	{
		$data['from']=$this->input->post('fromdate');
		$data['to']=$this->input->post('todate');
		$data['product']=$this->input->post('product');
		$data['avp']=$this->input->post('avp');
		$data['zm']=$this->input->post('zm');
		$data['region']=$this->input->post('region');
		$data['am']=$this->input->post('am');
		$data['branch']=$this->input->post('branch');
		/* print_r($data); exit; */
		$remcol=array('id','created_on','updated_on','created_by','status');
		$i=0;
		$key_array=$sum_key=array();
		$report_result=$this->admin_model->get_report($data);
	
		if($report_result)
		{
		foreach($report_result['report_details'][0] as $index=>$value)
		{
		   if(! in_array($index, $remcol))
		   {
		   $key_array[$i]=ucfirst(str_replace('_', ' ', $index)); 
		   $i++;
		   }
	   }
	   $i=0;
	   foreach($report_result['report_sum'] as $index=>$value)
	   {
		$sum_key[$i]=ucfirst(str_replace('_', ' ', $index));
		$i++;
	   }
	   }
	   	echo json_encode(array('result'=>$report_result,'det_keys'=>$key_array,'sum_keys'=>$sum_key));
	
	}
	
public function image_upload($image,$directory,$path_prefix)
{
		
		$this->load->library('upload');
		
		if (!is_dir('uploads/'.$directory)) {
			mkdir('uploads/'.$directory, 0777, TRUE);		   
		}
			$config['allowed_types'] = 'gif|jpg|jpeg|png|GIF|JPG|JPEG|PNG';
			$config['upload_path'] = 'uploads/'.$directory;
			$this->load->library('upload',$config);

			$ext = explode(".",$image['name']);
			$imagename=$path_prefix.'_'.strtotime('now').rand(0,9);
			$_FILES['file']['name']=$imagename.".".$ext[1];
			$_FILES['file']['type']=$image['type'];
			$_FILES['file']['tmp_name']=$image['tmp_name'];
			$_FILES['file']['size']=$image['size'];
			$this->upload->initialize($config);
			$this->upload->do_upload('file');
			$uploadData=$this->upload->data();
			$image_url=$uploadData['file_name'];
			return $image_url;
}



	public function single_view($type,$id)
	{
		$imagepath="";
		if($type=='category')
		{
			$page_name='update-category';
			$data['table']='product_category';
			$data['columnlist']=array('id','name','image_url','status');
			$data['where']='id='.$id;
			$imagepath="category-images";
		}
		
		else if($type=='area')
		{
			$page_name='update-area';
			$data['table']='area_master';
			$data['columnlist']=array('id','name','status');
			$data['where']='id='.$id;
		}
	
		else if($type=='district')
		{
			$page_name='update-district';
			$data['table']='district_master';
			$data['columnlist']=array('id','name','status');
			$data['where']='id='.$id;
		}
		else if($type=='package')
		{
			$page_name='update-package';
			$data['table']='package_details';
			$data['columnlist']=array('id','name','description','price','offer_price','mrp','image_url','status');
			$data['where']='id='.$id;
			$imagepath="package-images";
		}
		else if($type=='promocode')
		{
			$page_name='update-promocode';
			$data['table']='promocode_details';
			$data['columnlist']=array('id','promo_code','promo_category','value','no_of_usage','min_order','max_discount','status');
			$data['where']='id='.$id;
		}
		else if($type=='slider')
		{
			$page_name='update-slider';
			$data['table']='slider_details';
			$data['columnlist']=array('id','name','link','image_url','status');
			$data['where']='id='.$id;
			$imagepath="slider-images";
		}
		else if($type=='variants')
		{
			$page_name='update-variants';
			$data['table']='variants_master';
			$data['columnlist']=array('id','name','status');
			$data['where']='id='.$id;
		}
		else if($type=='products')
		{
			$page_name='product-update';
			$data['table']=array('product_details','product_secondary_details');
			$data['columnlist']=array(array('id','name','category_id','description','image_url','mrp','price','max_sale','status'),array('id','variants','mrp','price','max_sale'));
			$data['where']=array('id='.$id,"product_id=".$id." and status !='Deleted'");
			$imagepath="product-images";
		}
		else if($type=='offers')
		{	
			$page_name='update-offer';
			$data['table']='offer_details';
			$data['columnlist']=array('id','name','status','description','image_url');
			$data['where']='id='.$id;
			$imagepath="offer-images";

		}
		else if($type=='holidays')
		{	
			$page_name='update-holidays';
			$data['table']='holiday_details';
			$data['columnlist']=array('id','date','status','title');
			$data['where']='id='.$id;

		}
		
		$data['type']=$type;
		$result=$this->admin_model->get_single_view($data);

		$result['page_name']=$page_name;
		$result['image']=$imagepath;
		/* print_r($result); exit; */
		if(isset($result['data'][0]->category))
		{
			$result['data'][0]->category=$this->admin_model->get_category_name($result['data'][0]->category);
		}
		if(isset($result['data'][0]->area))
		{
			$result['data'][0]->area=$this->admin_model->get_area_name($result['data'][0]->area);
		}
		$result['type']=$data['type'];
		$this->load->view('header');
		$this->load->view('navbar');
        $this->load->view('single-view',$result);
		$this->load->view('footer');
	}
	public function delete_item()
	{
		$data=array();
		$redirect="";
		$type=$this->input->post('type');
		$data['id']=$this->input->post('id');
		if($type=="category")
		{
			$data['table']="product_category";
			$redirect=base_url().'product-category';
		}
	
		else if($type=="variants")
		{
			$data['table']="variants_master";
			$redirect=base_url().'add-variants';
		}
		else if($type=="area")
		{
			$data['table']="area_master";
			$redirect=base_url().'add-area';
		}
		else if($type=="district")
		{
			$data['table']="district_master";
			$redirect=base_url().'add-district';
		}
		else if($type=="package")
		{
			$data['table']="package_details";
			$redirect=base_url().'add-package';
		}
		
		else if($type=="slider")
		{
			$data['table']="slider_details";
			$redirect=base_url().'add-slider';
		}
	
		else if($type=="promocode")
		{
			$data['table']="promocode_details";
			$redirect=base_url().'add-promocode';
		}
		else if($type=="products")
		{
			$data['table']= "product_details";
			$redirect=base_url().'product-add';
		}
		else if($type=="offers")
		{
			$data['table']="offer_details";
			$redirect=base_url().'add-offer';
		}
		else if($type=="holidays")
		{
			$data['table']="holiday_details";
			$redirect=base_url().'add-holidays';
		}
		$result=$this->admin_model->delete_item($data);
		if($result)
		{
			$success=1;
		}
		else
		{
			$success=0;
		}
		echo json_encode(array('success'=>$success,'redirect_url'=>$redirect));

	
	}
	
	
	public function update_product_status()
	{
		$data['id']=$this->input->post('prod_id');
		$data['status']=$this->input->post('status');
		$this->admin_model->update_product_status($data);
	}

	public function is_username_email_existing()
	{
		$error=1;   
		$email_id=$this->input->post('email_id');
		$emailres=$this->admin_model->check_user_email_exist($email_id);
		
		$username=$this->input->post('username');
		$usernameres=$this->admin_model->check_username_exist($username);
      if($emailres==0 && $usernameres==0)
      {
         $error=0;
      }
		echo json_encode(array('email_id'=>$emailres,'username'=>$usernameres,'error'=>$error));
	}
	
	public function delete_user()
	{
		$success="";
		$user_id=$this->input->post('user_id');
		$role=$this->input->post('role');

		$other_table=$this->input->post('other_table');
		
		$result=$this->admin_model->delete_user($user_id,$role,$other_table);
		echo $result;
	}

	public function customer_profile($name,$customer_id)
	{
		$data['customer_details']=$this->admin_model->get_single_customer($customer_id);
		$this->load->view('header');
		$this->load->view('navbar');
        $this->load->view('user-profile',$data);
		$this->load->view('footer');
	}
	public function order_details($order_id)
	{
		$data=array();
		$data=$this->admin_model->get_single_order($order_id);
		$data['status_list']=$this->admin_model->get_status_list();
		$this->load->view('header');
		$this->load->view('order_details',$data);
		$this->load->view('footer');
	}

	public function update_order_details()
	{
		$data=array(
			'status'=>$this->input->post('status'),
			'id'=>$this->input->post('id')
		);
		$this->admin_model-> update_order_details($data);

	}

	public function download_receipt()
	{
		$data=array();
		$params=array('invoice_no','order_id','order_no','order_date','customer_name','customer_ph','remarks','customer_address','total_count','tax','tax_amount','order_total','agent','subtotal','discount','total_before_gst');
	
		foreach($params as $param)
		{
			$data[$param]=$this->input->post($param);
		}
		$items=$this->admin_model->get_carted_product_list($data['order_id']);
		/* $this->fpdf->Image(base_url().'images/user/1.jpg',31,1,20,10,'JPG'); */
		$this->fpdf->SetFont('Times','',5);
		/* $this->fpdf->Cell(65,2,'Near Port and Customs, Ajman, UAE',0,1,'C');
		$this->fpdf->Cell(65,2,'Tel:06-7474550, Mob:052 520 3040',0,1,'C');
		$this->fpdf->Cell(65,2,'fathimarose900@gmail.com',0,1,'C');
		$this->fpdf->Cell(65,2,'TRN : 100492247000003',0,1,'C'); */
		$this->fpdf->Cell(65,2,'TAX INVOICE',0,1,'C');
		$this->fpdf->Cell(65,1,'----------------------------------------------------------------------------------------------------',0,1);
		$this->fpdf->Cell(20,1,'',0,1);
		$this->fpdf->Cell(15,2,'Invoice No:',0,0);
		$this->fpdf->Cell(20,2,$data['invoice_no'],0,0);
		$this->fpdf->Cell(5,2,'Date:',0,0);
		$this->fpdf->Cell(20,2,$data['order_date'],0,1);
		$this->fpdf->Cell(15,2,'Customer Name:',0,0);
		$this->fpdf->MultiCell(25,2,$data['customer_name'],0,1);
		$this->fpdf->Cell(15,2,'Address:',0,0);
		$this->fpdf->MultiCell(25,2,$data['customer_address'],0,1);
		$this->fpdf->Cell(15,2,'Customer Mob:',0,0);
		$this->fpdf->Cell(25,2,$data['customer_ph'],0,1);

		$this->fpdf->Cell(65,1,'----------------------------------------------------------------------------------------------------',0,1);

		$this->fpdf->Cell(35,2,'Item',0,0);
		$this->fpdf->Cell(10,2,'Price',0,0);
		$this->fpdf->Cell(5,2,'Qty',0,0);
		$this->fpdf->Cell(10,2,'Total',0,1,'R');
		$this->fpdf->Cell(65,1,'----------------------------------------------------------------------------------------------------',0,1);
		if($items)
		{
			foreach($items as $index=>$value)
			{
				$this->fpdf->MultiCell(35,2,$value->product_name,0,0);
				$this->fpdf->Cell(10,2,$value->product_price,0,0);
				$this->fpdf->Cell(5,2,$value->product_count,0,0);
				$this->fpdf->Cell(10,2,$value->product_total,0,1,'R');

			}
		$this->fpdf->Cell(65,1,'----------------------------------------------------------------------------------------------------',0,1);
		$this->fpdf->Cell(10,1,'',0,1);
		$this->fpdf->Cell(50,2,'Subtotal:',0,0);
		$this->fpdf->Cell(10,2,$data['subtotal'],0,1,'R');
		$this->fpdf->Cell(50,2,'Discount:',0,0);
		$this->fpdf->Cell(10,2,'(-)'.$data['discount'],0,1,'R');
		$this->fpdf->Cell(50,2,'Total before GST:',0,0);
		$this->fpdf->Cell(10,2,$data['total_before_gst'],0,1,'R');
		$this->fpdf->Cell(50,2,'GST Incl.:',0,0);
		$this->fpdf->Cell(10,2,$data['tax_amount'],0,1,'R');
		
		
		
	
		
		$this->fpdf->Cell(65,1,'----------------------------------------------------------------------------------------------------',0,1); 
		$this->fpdf->SetFont('Times','B',6);
		$this->fpdf->Cell(15,2,'',0,0);
		$this->fpdf->Cell(40,2,'Total',0,0);
		$this->fpdf->Cell(5,2,$data['order_total'],0,1,'R');
		$this->fpdf->Cell(60,1,'--------------------------------------------------------------------------------------',0,1);
		$this->fpdf->SetFont('Times','I',4);
		$this->fpdf->Cell(10,2,'Remarks:',0,0);
		$this->fpdf->Cell(30,2,$data['remarks'],0,1);
		$this->fpdf->Cell(10,2,'Agent',0,0);
		$this->fpdf->Cell(30,2,$data['agent'],0,0);
		}



		$filename = $data['invoice_no'].'.pdf';

		if (!is_dir( 'pdfs/tax_invoice')) {
		mkdir('pdfs/tax_invoice', 0777, TRUE);		   
		}
		$this->fpdf->Output( 'pdfs/tax_invoice/'. $filename, 'F'); 
		echo json_encode(array(
		'path' => 'pdfs/tax_invoice/'. $filename,
		'url'  => base_url( 'pdfs/tax_invoice/' . $filename )
		));

	}
	public function get_order_report_result()
	{
		$data['from']=$this->input->post('fromdate');
		$data['to']=$this->input->post('todate');
		$data['agent_id']=$this->input->post('agent_id');
		$data['customer_id']=$this->input->post('customer_id');
		$data['payment_type']=$this->input->post('payment_type');
		/* print_r($data); exit; */
		$report_result=$this->admin_model->get_order_report($data);
		
		echo json_encode(array('result'=>$report_result));
	
	}
	public function get_customer_report_result()
	{
		$data['from']=$this->input->post('fromdate');
		$data['to']=$this->input->post('todate');
		$data['customer_id']=$this->input->post('customer_id');
		$report_result=$this->admin_model->get_customer_report($data);
		
		echo json_encode(array('result'=>$report_result));
	
	}
	public function get_agent_report_result()
	{
		$data['from']=$this->input->post('fromdate');
		$data['to']=$this->input->post('todate');
		$data['agent_id']=$this->input->post('agent_id');
		$report_result=$this->admin_model->get_agent_report($data);
		
		echo json_encode(array('result'=>$report_result));
	
	}
	public function get_collection_report_result()
	{
		$data['from']=$this->input->post('fromdate');
		$data['to']=$this->input->post('todate');
		$data['agent_id']=$this->input->post('agent_id');
		$report_result=$this->admin_model->get_collection_report($data);
		
		echo json_encode(array('result'=>$report_result));
	
	}
	
	public function get_agent_customers()
	{
		$agent_id=$this->input->post('agent_id');
		$customers=$this->admin_model->get_all_customers($agent_id);
		echo json_encode(array('customerslist'=>$customers));
	}

	public function get_product_list()
	{
		$table=$this->input->post('table');
		$table_name=$table;
		$columns='id,name';
		$productlist=$this->admin_model->get_lists($table_name,$columns);
		echo json_encode(array('productlist'=>$productlist));
	}

	
}
