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
	 {
		$data['dash_count']=$this->admin_model->get_dashboard_count(); 
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('dashboard',$data);
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
			 redirect('under-construction');
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
			redirect('under-construction');
		 }
		 else if($main_page=='business-upload')
		 {
			if($id != "")
			{
			$single['table']='tbl_business_details';
			$single['columnlist']='*';
			$single['where']='id='.$id;	
			$single['type']='business';
			$data['update']=$this->admin_model->get_single_view($single);
			}
			$data['companylist']=$this->admin_model->get_company_list();
			$data['productlist']=$this->admin_model->get_product_list();
			$table_name='tbl_business_details';
			$columns='id,application_date';
			$limit=100;
			$data['businesslist']=$this->admin_model->get_lists($table_name,$columns,$limit);
			
		 }
		 else if($main_page=='fresh-incentive')
		 {
			redirect('under-construction');
		 }
		 else if($main_page=='renewal-incentive')
		 {
			redirect('under-construction');
		 }
	
		 $this->load->view('header');
		 $this->load->view('navbar');
		 $this->load->view($main_page,$data);
		 $this->load->view('footer');
	 }

	 public function setting_page($setting_page,$id="",$param1="",$param2="")
	 {
		$data=array();
		if($id)
		{
			$id=$id;
		}
		if($setting_page=='add-company')
		{
			if($id != "")
			{
			$single['table']='tbl_company_details';
			$single['columnlist']='*';
			$single['where']='id='.$id;	
			$single['type']='company';
			$data['update']=$this->admin_model->get_single_view($single);
			}
			$table_name='tbl_company_details';
			$columns='id,name';
			$limit=100;
			$data['companylist']=$this->admin_model->get_lists($table_name,$columns,$limit);

		}
		else if($setting_page=='add-product')
		{
			if($id != "")
			{
			$single['table']='tbl_product_details';
			$single['columnlist']='*';
			$single['where']='id='.$id;	
			$single['type']='company';
			$data['update']=$this->admin_model->get_single_view($single);
			}
		
			$data['companylist']=$this->admin_model->get_company_list();

			$table_name='tbl_product_details';
			$columns='id,name,company_id';
			$limit=100;
			$data['productlist']=$this->admin_model->get_lists($table_name,$columns,$limit);
			if($data['productlist'])
			{
			foreach($data['productlist'] as $index=>$value)
			{
				$value->company_name=$this->admin_model->get_company_name($value->company_id);
			}
			}
		
		}
		else if($setting_page=='add-avp')
		{
			if($id != "")
			{
			$single['table']='tbl_avp_details';
			$single['columnlist']='*';
			$single['where']='id='.$id;	
			$single['type']='avp';
			$data['update']=$this->admin_model->get_single_view($single);
			}

			$table_name='tbl_avp_details';
			$columns='id,name';
			$limit=100;
			$data['avplist']=$this->admin_model->get_lists($table_name,$columns,$limit);
		}
		else if($setting_page=='add-zm')
		{
			if($id != "")
			{
			$single['table']='tbl_zm_details';
			$single['columnlist']='*';
			$single['where']='id='.$id;	
			$single['type']='zm';
			$data['update']=$this->admin_model->get_single_view($single);
			}

			$table_name='tbl_zm_details';
			$columns='id,name';
			$limit=100;
			$data['zmlist']=$this->admin_model->get_lists($table_name,$columns,$limit);
		}
		else if($setting_page=='add-region')
		{
			if($id != "")
			{
			$single['table']='tbl_region_details';
			$single['columnlist']='*';
			$single['where']='id='.$id;	
			$single['type']='region';
			$data['update']=$this->admin_model->get_single_view($single);
			}

			$table_name='tbl_region_details';
			$columns='id,name';
			$limit=100;
			$data['regionlist']=$this->admin_model->get_lists($table_name,$columns,$limit);
		}
		else if($setting_page=='add-am')
		{
			if($id != "")
			{
			$single['table']='tbl_am_details';
			$single['columnlist']='*';
			$single['where']='id='.$id;	
			$single['type']='am';
			$data['update']=$this->admin_model->get_single_view($single);
			}

			$table_name='tbl_am_details';
			$columns='id,name';
			$limit=100;
			$data['amlist']=$this->admin_model->get_lists($table_name,$columns,$limit);
		}
		else if($setting_page=='add-branch')
		{
			if($id != "")
			{
			$single['table']='tbl_branch_details';
			$single['columnlist']='*';
			$single['where']='id='.$id;	
			$single['type']='branch';
			$data['update']=$this->admin_model->get_single_view($single);
			}

			$table_name='tbl_branch_details';
			$columns='id,name';
			$limit=300;
			$data['branchlist']=$this->admin_model->get_lists($table_name,$columns,$limit);
		}
		else if($setting_page=='add-canvasser')
		{
			if($id != "")
			{
			$single['table']='tbl_canvasser_details';
			$single['columnlist']='*';
			$single['where']='id='.$id;	
			$single['type']='canvasser';
			$data['update']=$this->admin_model->get_single_view($single);
			}

			$table_name='tbl_canvasser_details';
			$columns='id,name';
			$limit=100;
			$data['canvasserlist']=$this->admin_model->get_lists($table_name,$columns,$limit);
		}
   
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view($setting_page,$data);
		$this->load->view('footer');
	 }

	 public function under_construction()
	 {
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('under-construction');
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
	 public function add_canvasser()
	 {
			 $data=array();
			 $data['name']=$this->input->post('name');
			 $data['status']=$this->input->post('status');
			 $result= $this->admin_model->insert_canvasser($data);
			 echo json_encode($result);
	 }
	 public function update_canvasser()
	 {
			 $data=array();
			 $data['id']=$this->input->post('id');
			 $data['name']=$this->input->post('name');
			 $data['status']=$this->input->post('status');
			 $result= $this->admin_model->update_canvasser($data);
			 echo json_encode($result);
	 }
	 public function add_company()
	 {
		$data=array();
		$data['name']=$this->input->post('name');
		$data['status']=$this->input->post('status');
		$result= $this->admin_model->insert_company($data);
		echo json_encode($result);
	 }
	 public function update_company()
	 {
		$data=array();
		$data['id']=$this->input->post('id');
		$data['name']=$this->input->post('name');
		$data['status']=$this->input->post('status');
		$result= $this->admin_model->update_company($data);
		echo json_encode($result);
	 }
	 public function add_product()
	 {
		$data=array();
		$data['name']=$this->input->post('name');
		$data['company_id']=$this->input->post('company_id');
		$data['status']=$this->input->post('status');
		$result= $this->admin_model->insert_product($data);
		echo json_encode($result);
	 }
	 public function update_product()
	 {
		$data=array();
		$data['id']=$this->input->post('id');
		$data['name']=$this->input->post('name');
		$data['company_id']=$this->input->post('company_id');
		$data['status']=$this->input->post('status');
		$result= $this->admin_model->update_product($data);
		echo json_encode($result);
	 }
	 public function business_upload()
	{
			$path = 'uploads/';
			$msg=""; 
			$success=0;
			if(file_exists($path.$_FILES['uploadFile']['name']))
			{
			require_once APPPATH . "/third_party/PHPExcel.php";
			$config['upload_path'] = $path;
			$config['allowed_types'] = 'xlsx|xls|csv';
			$config['remove_spaces'] = TRUE;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);       
			
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
			
			$customerdet=array('customer_name','customer_address','customer_mobile','marital_status	
			','email_id','nominee_name','pan_no','aadhar_no','nominee_relation','membership_id');
			$custbankdet=array('name_in_bank','bank_name','bank_ac_no','ifsc');
			$businessdet=array('application_date','branch','share_no','shares_purchased','investment_period','investment_amount','fund_transfer_date','cheque_utr_no','clearing_date','demat_participant','demat_ac_no','avp','zm','region','am','product_scheme','interest','ncd_allot_no','maturity_date','fd_no');
			$canvassdet=array('canvasser_name','canvas_code','canvas_type');		
	
			$flag = true;
			$i=0;
			$dtarray=array('application_date','clearing_date');
			$cust_col=$cust_col_name=$cust_bnk_col=$cust_bnk_col_name=$bus_det_col=$bus_det_col_name=$canvas_col=$canvas_col_name=array();
		/* 	if(!$matches  = preg_grep('/[\'^£$%&*()}{@#~?><>,|=+¬-]/',$allDataInSheet[1]))
				{ */
			foreach($allDataInSheet[1] as $index=>$value)
			{
				$value=strtolower(str_replace(" ", "_", $value));
				if(in_array($value,$customerdet))
				{
					array_push($cust_col,$index);
					array_push($cust_col_name,$value);
				}
				else if(in_array($value,$custbankdet))
				{
					array_push($cust_bnk_col,$index);
					array_push($cust_bnk_col_name,$value);
				}
				else if(in_array($value,$businessdet))
				{
					array_push($bus_det_col,$index);
					array_push($bus_det_col_name,$value);
				}
				else if(in_array($value,$canvassdet))
				{
					array_push($canvas_col,$index);
					array_push($canvas_col_name,$value);
				}
				
			}
		
			$cust_val=$bnk_val=$bus_val=$can_val=$insert_data=array();
			$custval=$bnkval=$busval=$canval=0;
			$company_id=$this->input->post('company_id');
			$product_id=$this->input->post('product_id');
			$flag=true;
			/* print_r($allDataInSheet); exit; */
			foreach ($allDataInSheet as $value) {
			
				if($flag){
					$flag =false;
					continue;
					}
				
				foreach($value as $index=>$value)
				{  if($value)
					{
					if(in_array($index,$cust_col))
					{
						$key = array_search ($index, $cust_col);
						$insert_data['cust_val'][$custval][$cust_col_name[$key]]=$value;
						
					}
					else if(in_array($index,$cust_bnk_col))
					{
						$key = array_search ($index, $cust_bnk_col);
						$bnk_val[$bnkval][$cust_bnk_col_name[$key]]=$value;
						
					}
					else if(in_array($index,$bus_det_col))
					{
						$key = array_search ($index, $bus_det_col);
						if(in_array($bus_det_col_name[$key],$dtarray))
						{
						$bus_val[$busval][$bus_det_col_name[$key]]=date('Y-m-d',strtotime($value));
						}
						else
						{
						$bus_val[$busval][$bus_det_col_name[$key]]=$value;
						}
						
					}
					else if(in_array($index,$canvas_col))
					{
						$key = array_search ($index, $canvas_col);
						$can_val[$canval][$canvas_col_name[$key]]=$value;
						
					}
				}
			
				}
			
				$custval++;
			
				$bnkval++;
				if(isset($bus_val[$busval]))
				{
				$bus_val[$busval]['company_id']=$company_id;
				$bus_val[$busval]['product_id']=$product_id;
				}
				$busval++;
				$canval++;
			
			} 
		   
			$result = $this->admin_model->scheme_insert($cust_val,$bnk_val,$bus_val,$can_val);   
			
			exit;
			$success=$result;
			if($result){	
			$msg="Imported successfully";
			}else{
				$msg= "ERROR !";
			} 
		/* }
		else
		{
			$msg="Please Correct Column Format Before Uploading File Eg:'Application Date' as 'application_date'";
		}    */         
			} catch (Exception $e) {
			die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
			. '": ' .$e->getMessage());
			}
			}else{
				$msg=$msg." ".$error['error'];
			}
		
		}
			else
			{
				$msg="File With Same name already Exist";
			}
		
			/* $this->load->view('import'); */
			//echo json_encode(array('message'=>$msg,'success'=>$success));
		
	}
// 	public function strmodify($string)
// 	{
// 		return lcwords(str_replace("_", " ", $string));
// 	}
// /* 	Then in just use the above function as follows: */
	
// 	$states=array_map("modify", $old_states);
// 	}
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
	
	
		
		$data['type']=$type;
		$result=$this->admin_model->get_single_view($data);

		$result['page_name']=$page_name;
		$result['image']=$imagepath;
		/* print_r($result); exit; */
	/* 	if(isset($result['data'][0]->category))
		{
			$result['data'][0]->category=$this->admin_model->get_category_name($result['data'][0]->category);
		}
		if(isset($result['data'][0]->area))
		{
			$result['data'][0]->area=$this->admin_model->get_area_name($result['data'][0]->area);
		} */
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
		if($type=="company")
		{
			$data['table']="tbl_company_details";
			$redirect=base_url().'add-company';
		}
		else if($type=="product")
		{
			$data['table']="tbl_product_details";
			$redirect=base_url().'add-product';
		}
		else if($type=="avp")
		{
			$data['table']="tbl_avp_details";
			$redirect=base_url().'add-avp';
		}
		else if($type=="zm")
		{
			$data['table']="tbl_zm_details";
			$redirect=base_url().'add-zm';
		}
		else if($type=="region")
		{
			$data['table']="tbl_region_details";
			$redirect=base_url().'add-region';
		}
		
		else if($type=="am")
		{
			$data['table']="tbl_am_details";
			$redirect=base_url().'add-am';
		}
	
		else if($type=="branch")
		{
			$data['table']="tbl_branch_details";
			$redirect=base_url().'add-branch';
		}
		else if($type=="canvasser")
		{
			$data['table']="tbl_canvasser_details";
			$redirect=base_url().'add-canvasser';
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
//For maxvalue
	public function get_product_list()
	{
		$productlist=array();
		$company_id=$this->input->post('id');
		if($company_id)
		$productlist=$this->admin_model->get_product_list($company_id);
		echo json_encode($productlist);
	}

	
}
