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
		$pagetitle['pagetitle']="Dashboard";
		$this->load->view('header');
		$this->load->view('navbar',$pagetitle);
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
			$data['companylist']=$this->admin_model->get_company_list();
			$pagetitle['pagetitle']='Customer Search';
		 }
		 else if($main_page=='customers-list')
		 {
			$table_name='tbl_customer_details';
			$columns='id,customer_name,customer_address,customer_mobile,email_id';
			$limit=500;
			$data['customerslist']=$this->admin_model->get_lists($table_name,$columns,$limit);
			$pagetitle['pagetitle']='Customers List';
			//redirect('under-construction');
		 }
		 else if($main_page=='canvasser-search')
		 {
			$data['companylist']=$this->admin_model->get_company_list();
			$pagetitle['pagetitle']='Canvasser Search';
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
			$table_name='tbl_uploadfile_details';
			$columns='id,company_id,product_id,filename,filesize,created_on,total_case';
			$where=" and upload_type='business' and total_case !='' and status !='Deleted'";
			$limit=100;
			$data['filelist']=$this->admin_model->get_lists($table_name,$columns,$limit,$where);
			$data['filelist']=$this->admin_model->get_lists($table_name,$columns,$limit,$where);
			foreach($data['filelist'] as $index=>$value)
			{
				if($value->company_id)
				{
				$value->company_id=$this->admin_model->get_company_name($value->company_id);
				}
				if($value->product_id)
				{
				$value->product_id=$this->admin_model->get_product_name($value->product_id);
				}
			}
			$pagetitle['pagetitle']='Business Upload';
			
		 }
		 else if($main_page=='incentive-upload')
		 {
			if($id != "")
			{
			$single['table']='tbl_incentive_details';
			$single['columnlist']='*';
			$single['where']='id='.$id;	
			$single['type']='incentive';
			$data['update']=$this->admin_model->get_single_view($single);
			}
			$data['companylist']=$this->admin_model->get_company_list();
			$data['productlist']=$this->admin_model->get_product_list();
			$table_name='tbl_uploadfile_details';
			$columns='id,company_id,product_id,filename,filesize,created_on,total_case,month_id,year';
			$where=" and upload_type='incentive' and total_case !='' and status !='Deleted'";
			$limit=1000;
			$data['filelist']=$this->admin_model->get_lists($table_name,$columns,$limit,$where);
			foreach($data['filelist'] as $index=>$value)
			{
				if($value->company_id)
				{
				$value->company_id=$this->admin_model->get_company_name($value->company_id);
				}
				if($value->product_id)
				{
				$value->product_id=$this->admin_model->get_product_name($value->product_id);
				}
				if($value->month_id)
				{
					$value->month_id= (DateTime::createFromFormat('!m', $value->month_id))->format('F');
				}
			}
			$pagetitle['pagetitle']='Incentive Upload';
		 }
		 else if($main_page=='renewal-incentive')
		 {
			redirect('under-construction');
		 }
		
		 $this->load->view('header');
		 $this->load->view('navbar', $pagetitle);
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
			$pagetitle['pagetitle']='Add Company';

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
			$pagetitle['pagetitle']='Add Product';
		
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
			$pagetitle['pagetitle']='Add AVP';
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
			$pagetitle['pagetitle']='Add ZM';
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
			$pagetitle['pagetitle']='Add Region';
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
			$pagetitle['pagetitle']='Add AM';
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
			$pagetitle['pagetitle']='Add Branch';
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
			$pagetitle['pagetitle']='Add Canvasser';
		}
   
		$this->load->view('header');
		$this->load->view('navbar',$pagetitle);
		$this->load->view($setting_page,$data);
		$this->load->view('footer');
	 }

	 public function report_page($report_page,$type="")
	 {
		$data=array();
		$data['companylist']=$this->admin_model->get_company_list();
		if($report_page=="business-report")
		{
		$selectors=array('avp','zm','region','branch','am');
		foreach($selectors as $detail)
		{
			$table_name='tbl_'.$detail.'_details';
			$columns='id,name';
			$data[$detail.'list']=$this->admin_model->get_lists($table_name,$columns);
		}
		$pagetitle['pagetitle']='Business Report';
		}
		else if($report_page=="incentive-report")
		{
			if($type !="")
			{
			$data['type']=$type;
			}
			$pagetitle['pagetitle']='Incentive Report -'.$data['type'];
			$selectors=array('region','branch');
		foreach($selectors as $detail)
		{
			$table_name='tbl_'.$detail.'_details';
			$columns='id,name';
			$data[$detail.'list']=$this->admin_model->get_lists($table_name,$columns);
		}
			
			//redirect('under-construction');
		}
		else if($report_page=="mis-report")
		{
			$pagetitle['pagetitle']='MIS Report';
			//redirect('under-construction');
		}
		$this->load->view('header');
		$this->load->view('navbar',$pagetitle);
		$this->load->view($report_page,$data);
		$this->load->view('footer');
	 }

	 public function under_construction()
	 {
		$pagetitle['pagetitle']='Under Construction';
		$this->load->view('header');
		$this->load->view('navbar',$pagetitle);
		$this->load->view('under-construction');
		$this->load->view('footer'); 
	 }
	
	 public function add_avp()
	 {
			 $data=array();
			 $data['name']=$this->input->post('name');
			 $data['status']=$this->input->post('status');
			 $result= $this->admin_model->insert_avp($data);
			 echo $this->bindresponse($result,'insert');
	 }
	 public function update_avp()
	 {
			 $data=array();
			 $data['id']=$this->input->post('id');
			 $data['name']=$this->input->post('name');
			 $data['status']=$this->input->post('status');
			 $result= $this->admin_model->update_avp($data);
			 echo $this->bindresponse($result,'update');
	 }
	 public function add_zm()
	 {
			 $data=array();
			 $data['name']=$this->input->post('name');
			 $data['status']=$this->input->post('status');
			 $result= $this->admin_model->insert_zm($data);
			 echo $this->bindresponse($result,'insert');
	 }
	 public function update_zm()
	 {
			 $data=array();
			 $data['id']=$this->input->post('id');
			 $data['name']=$this->input->post('name');
			 $data['status']=$this->input->post('status');
			 $result= $this->admin_model->update_zm($data);
			 echo $this->bindresponse($result,'update');
	 }
	 public function add_am()
	 {
			 $data=array();
			 $data['name']=$this->input->post('name');
			 $data['status']=$this->input->post('status');
			 $result= $this->admin_model->insert_am($data);
			 echo $this->bindresponse($result,'insert');
	 }
	 public function update_am()
	 {
			 $data=array();
			 $data['id']=$this->input->post('id');
			 $data['name']=$this->input->post('name');
			 $data['status']=$this->input->post('status');
			 $response=$this->admin_model->update_am($data);
			 echo $this->bindresponse($response,'update');
	 }
	 public function add_branch()
	 {
			 $data=array();
			 $data['name']=$this->input->post('name');
			 $data['status']=$this->input->post('status');
			 $result= $this->admin_model->insert_branch($data);
			 echo $this->bindresponse($result,'insert');
	 }
	 public function update_branch()
	 {
			 $data=array();
			 $data['id']=$this->input->post('id');
			 $data['name']=$this->input->post('name');
			 $data['status']=$this->input->post('status');
			 $result= $this->admin_model->update_branch($data);
			 echo $this->bindresponse($result,'update');
	 }
	 public function add_region()
	 {
			 $data=array();
			 $data['name']=$this->input->post('name');
			 $data['status']=$this->input->post('status');
			 $result= $this->admin_model->insert_region($data);
			 echo $this->bindresponse($result,'insert');
	 }
	 public function update_region()
	 {
			 $data=array();
			 $data['id']=$this->input->post('id');
			 $data['name']=$this->input->post('name');
			 $data['status']=$this->input->post('status');
			 $result= $this->admin_model->update_region($data);
			 echo $this->bindresponse($result,'update');
	 }
	 public function add_canvasser()
	 {
			 $data=array();
			 $data['name']=$this->input->post('name');
			 $data['status']=$this->input->post('status');
			 $result= $this->admin_model->insert_canvasser($data);
			 echo $this->bindresponse($result,'insert');
	 }
	 public function update_canvasser()
	 {
			 $data=array();
			 $data['id']=$this->input->post('id');
			 $data['name']=$this->input->post('name');
			 $data['status']=$this->input->post('status');
			 $result= $this->admin_model->update_canvasser($data);
			 echo $this->bindresponse($result,'update');
	 }
	 public function add_company()
	 {
		$data=array();
		$data['name']=$this->input->post('name');
		$data['status']=$this->input->post('status');
		$result= $this->admin_model->insert_company($data);
		echo $this->bindresponse($result,'insert');
	 }
	 public function update_company()
	 {
		$data=array();
		$data['id']=$this->input->post('id');
		$data['name']=$this->input->post('name');
		$data['status']=$this->input->post('status');
		$result= $this->admin_model->update_company($data);
		echo $this->bindresponse($result,'update');
	 }
	 public function add_product()
	 {
		$data=array();
		$data['name']=$this->input->post('name');
		$data['company_id']=$this->input->post('company_id');
		$data['status']=$this->input->post('status');
		$result= $this->admin_model->insert_product($data);
		echo $this->bindresponse($result,'insert');
	 }
	 public function update_product()
	 {
		$data=array();
		$data['id']=$this->input->post('id');
		$data['name']=$this->input->post('name');
		$data['company_id']=$this->input->post('company_id');
		$data['status']=$this->input->post('status');
		$result= $this->admin_model->update_product($data);
		echo $this->bindresponse($result,'update');
	 }
	 public function bindresponse($response,$process)
	 {
		 $flag=0;
		 if($process=="insert" && $response){$flag=1; return json_encode(array('msg'=>'Added Successfull !!','type'=>'success','success'=>1));}
		 if($process=="insert" && !$response){$flag=1; return json_encode(array('msg'=>'Adding Failed !!','type'=>'error','success'=>0));}
		 if($process=="update" && $response){ $flag=1;return json_encode(array('msg'=>'Updation Successfull !!','type'=>'success','success'=>1));}
		 if($process=="update" && $response<=0){$flag=1; return json_encode(array('msg'=>'Updation Failed !!','type'=>'error','success'=>0));}
		 if(!$flag)
		 {
			return json_encode(array('msg'=>'Some Technical Error Occured','type'=>'error','success'=>0));
		 }
	 }
	 public function business_upload()
	{
		if (!is_dir('uploads/business-upload')) {
			mkdir('uploads/business-upload', 0777, TRUE);		   
		}
			$path = 'uploads/business-upload/';
			$msg=""; 
			$success=0;
		
			if(substr_count($path.$_FILES['uploadFile']['name'],'.') == 1 && !preg_match('/[\'^£$%&*()}{@#~?><>,|=+¬]/', $path.$_FILES['uploadFile']['name'])) 
			{
			if(!file_exists($path.$_FILES['uploadFile']['name']))
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
			$file=true;
			$dtarray=array('application_date','clearing_date');
			$cust_col=$cust_col_name=$cust_bnk_col=$cust_bnk_col_name=$bus_det_col=$bus_det_col_name=$canvas_col=$canvas_col_name=array();
			foreach($allDataInSheet[1] as $index=>$value)
			{
				if($value)
				{
				$value=strtolower(str_replace(" ", "_", trim($value)));
			
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
				else
				{
					$success=0;
					$msg="The file trying to upload not matching the requirements.. Please check the column names";
					unlink('uploads/business-upload/'.$data['upload_data']['file_name']);
					$file=false;
					break;
				}
			
			}
			else
			{
				$success=0;
				$msg="Please Arrange Column Name at the Top Of The page";
				unlink('uploads/business-upload/'.$data['upload_data']['file_name']);
				$file=false;
				break;
			}
				
			}
		
			$company_id=$this->input->post('company_id');
			$product_id=$this->input->post('product_id');
			$filedata=array(
				'company_id'=>$company_id,
				'product_id'=>$product_id,
				'filename'=>$data['upload_data']['file_name'],
				'filesize'=>$data['upload_data']['file_size'],
				'upload_type'=>'business'
			);
			if($file)
			{
			$fileid=$this->admin_model->insert_file_details($filedata);
			}
			$cust_val=$bnk_val=$bus_val=$can_val=array();
			$custval=$bnkval=$busval=$canval=0;
			
			$flag=true;
			/* print_r($allDataInSheet); exit; */
			if($canvas_col && $bus_det_col && $cust_bnk_col && $cust_col)
			{
			foreach ($allDataInSheet as $value) {
			
				if($flag){
					$flag =false;
					continue;
					}
					$flagval=false;
				foreach($value as $index=>$value)
				{  if($value)
					{
						$flagval=true;
					if(in_array($index,$cust_col))
					{
						$key = array_search ($index, $cust_col);
						$cust_val[$custval][$cust_col_name[$key]]=$value;
						
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
				else
				{
					$flagval=false;
				}
			
				}
				if(isset($bus_val[$busval]))
				{
				$bus_val[$busval]['company_id']=$company_id;
				$bus_val[$busval]['product_id']=$product_id;
				$bus_val[$busval]['file_id']=$fileid;
				}
				if(isset($can_val[$canval]))
				{
				$can_val[$canval]['file_id']=$fileid;
				}
				if($flagval==true)
				{$custval++;
			
				$bnkval++;
			
				$busval++;
				$canval++;
				}
			
			} 
			$success = $this->admin_model->scheme_insert($cust_val,$bnk_val,$bus_val,$can_val,$fileid);   
			if($success==1){	
			$msg="File Uploaded successfully";
			}else if($success==2){
				$msg= "ERROR ! Something Went Wrong.. Please Check the file trying to upload";
				$success=0;
			} else
			{
				$success=0;
				$msg="ERROR ! File Uploading Failed";
			}
			}   
		
			} catch (Exception $e) {
			$msg='Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
			. '": ' .$e->getMessage();
			$success=0;
			die();
			
			}
			}else{
				$msg=$msg." ".$error['error'];
				$success=0;
			}
		
		}
			else
			{
				$msg="File With Same name already Exist";
			}
		}
		else
		{
			$msg="Please Remove Special Charcters Like '/.[\'^£$%&*()}{@#~?><>,|=+¬]/' From the Filename and try again!";
		}
		
			echo json_encode(array('message'=>$msg,'success'=>$success));
		
	}
	public function incentive_upload()
	{
		if (!is_dir('uploads/incentive-upload')) {
			mkdir('uploads/incentive-upload', 0777, TRUE);		   
		}
			$path = 'uploads/incentive-upload/';
			$msg=""; 
			$success=0;
			if(substr_count($path.$_FILES['uploadFile']['name'],'.') == 1 && !preg_match('/[\'^£$%&*()}{@#~?><>,|=+¬]/', $path.$_FILES['uploadFile']['name'])) 
				{
			if(!file_exists($path.$_FILES['uploadFile']['name']))
			{
			require_once APPPATH . "/third_party/PHPExcel.php";
			$config['upload_path'] = $path;
			$config['allowed_types'] = 'xlsx|xls|csv';
			$config['remove_spaces'] = TRUE;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);       
			
			if (!$this->upload->do_upload('uploadFile')) {
			$msg =  $this->upload->display_errors();
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
			$incentivedet=array('branch','canvas_name','canvas_code','canv_type','sum_of_business','sum_of_payout_amount','pan_no','bank','ac_no','ifsc','region','company','remarks');
			
			$flag = true;
			$i=0;
			/* $dtarray=array('application_date','clearing_date'); */
			$inc_det_col=$inc_det_col_name=array();
			$file=true;
			foreach($allDataInSheet[1] as $index=>$value)
			{
				
				if($value)
				{
				$value=strtolower(str_replace(" ", "_", trim($value)));
				
				if(in_array($value,$incentivedet))
				{
					array_push($inc_det_col,$index);
					array_push($inc_det_col_name,$value);
				}
				else
				{
					$success=0;
					$msg="The file trying to upload not matching the requirements.. Please check the column names";
					unlink('uploads/incentive-upload/'.$data['upload_data']['file_name']);
					$file=false;
					break;
				}
				}
				else
				{
					$success=0;
					$msg="Please Arrange Column Name at the Top Of The page";
					unlink('uploads/incentive-upload/'.$data['upload_data']['file_name']);
					$file=false;
					break;
				}
				
			}
			$company_id=$this->input->post('company_id');
			$product_id=$this->input->post('product_id');
			$month_id=$this->input->post('month_id');
			$year=$this->input->post('year');
			$filedata=array(
				'company_id'=>$company_id,
				'product_id'=>$product_id,
				'month_id'=>$month_id,
				'year'=>$year,
				'filename'=>$data['upload_data']['file_name'],
				'filesize'=>$data['upload_data']['file_size'],
				'upload_type'=>'incentive'
			);
			if($file)
			{
			$fileid=$this->admin_model->insert_file_details($filedata);
			}
			$inc_val=array();
			$incval=0;
			
			$incentive_type=$this->input->post('incentive_type');
			$flag=true;
			$valueval=false;
			/* print_r($allDataInSheet); exit; */
			if($inc_det_col)
			{
			foreach ($allDataInSheet as $value) {
			
				if($flag){
					$flag =false;
					continue;
					}
				foreach($value as $index=>$value)
				{  if($value)
					{
						$valueval=true;
				
					if(in_array($index,$inc_det_col))
					{
						$key = array_search ($index, $inc_det_col);
					
						$inc_val[$incval][$inc_det_col_name[$key]]=$value;
					
						
					}
				}
				else
				{
					$valueval=false;
				}
			
				}
				if(isset($inc_val[$incval]))
				{
				$inc_val[$incval]['company_id']=$company_id;
				$inc_val[$incval]['product_id']=$product_id;
				$inc_val[$incval]['month_id']=$month_id;
				$inc_val[$incval]['year']=$year;
				$inc_val[$incval]['incentive_type']=$incentive_type;
				$inc_val[$incval]['file_id']=$fileid;
				
				}
				if($valueval==true)
				{
				$incval++;
				}
			
			} 
			$success = $this->admin_model->incentive_insert($inc_val,$fileid);   
			if($success==1){	
			$msg="File Uploaded successfully";
			}else if($success==2){
				$msg= "ERROR ! Something Went Wrong.. Please Check the file trying to upload";
				$success=0;
			} else
			{
				$msg="ERROR ! File Uploading Failed";
				$success=0;
			}
			}
			} catch (Exception $e) {
				$success=0;
				$msg='Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
				. '": ' .$e->getMessage();
				die();
			}
			}else{
				$msg=$msg." ".$error['error'];
				$success=0;
			}
		
		}
			else
			{
				$msg="File With Same name already Exist";
			}
		}
		else
		{
			$msg="Please Remove Special Charcters Like '/.[\'^£$%&*()}{@#~?><>,|=+¬]/' From the Filename and try again!";
		}
		
			echo json_encode(array('message'=>$msg,'success'=>$success));
		
	}
	public function customer_search()
	{
		$data['customer_name']=$this->input->post('customer_name');
		$data['customer_mobile']=$this->input->post('customer_mobile');
		$data['pan_no']=$this->input->post('pan_no');
		$data['aadhar_no']=$this->input->post('aadhar_no');
	
		$response=$this->admin_model->check_customer_name($data);
		echo json_encode($response);
	}
	public function check_customer_name()
	{
		$data['customer_mobile']=$data['pan_no']=$data['aadhar_no']="";
		$data['customer_name']=$this->input->post('key');
		$response=$this->admin_model->check_customer_name($data);
		echo json_encode($response);
	}
	public function customer_report()
	{
		$custid=$this->input->post('custid');
		if($custid)
		{
		$response=$this->admin_model->customer_report($custid);
		echo json_encode($response);
		}
	}
	public function get_business_report()
	{
		$data['company_id']=$this->input->post('company_id');
		$data['product_id']=$this->input->post('product_id');
		$data['from']=$this->input->post('fromdate');
		$data['to']=$this->input->post('todate');
		$data['avp']=$this->input->post('avp');
		$data['zm']=$this->input->post('zm');
		$data['region']=$this->input->post('region');
		$data['am']=$this->input->post('am');
		$data['branch']=$this->input->post('branch');
		$response=$this->admin_model->get_business_report($data);
		echo json_encode($response);
	}
	public function get_mis_report()
	{
		$data['category']=$this->input->post('staffcategory');
		$data['fromdate']=$this->input->post('fromdate');
		$data['todate']=$this->input->post('todate');
		$data['stafflist']=$this->input->post('stafflist');
		$response=$this->admin_model->get_mis_report($data);
		echo json_encode($response);
	}
	public function get_incentive_report()
	{
		$data['company_id']=$this->input->post('company_id');
		$data['product_id']=$this->input->post('product_id');
		$data['from']=$this->input->post('frommonth');
		$data['to']=$this->input->post('tomonth');
		$data['region']=$this->input->post('region');
		$data['branch']=$this->input->post('branch');
		$data['type']=$this->input->post('type');
		$response=$this->admin_model->get_incentive_report($data);
		echo json_encode($response);
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
	public function get_stafflist()
	{
		$data['category']=$this->input->post('staffcat');
		$data['fromdate']=$this->input->post('fromdate');
		$data['todate']=$this->input->post('todate');
		$response=$this->admin_model->get_stafflist($data);
		echo json_encode($response);
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
		
		if($type=='business')
		{
			$page_name='single-business';
			$data['business']=$this->admin_model->get_singlefile_business_details($id);
			$pagetitle['pagetitle']="Single Business Details";
		}
		
		else if($type=='incentive')
		{
			$page_name='single-incentive';
			$data['incentive']=$this->admin_model->get_singlefile_incentive_details($id);
			$pagetitle['pagetitle']="Single Incentive Details";
		}
		else if($type=='customer')
		{
			$page_name='single-customer';
			$data['customerdetails']=$this->admin_model->get_single_customer($id);
			$pagetitle['pagetitle']="Single Customer Details";
			/* print_r($data); exit; */
		}

		$this->load->view('header');
		$this->load->view('navbar',$pagetitle);
        $this->load->view($page_name,$data);
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

	public function delete_uploaded_data()
	{
		$success=0;
		$data=array();
		$redirect= base_url()."business-upload";
		$data['type']=$this->input->post('type');
		if($data['type']=="incentive")
		$redirect= base_url()."incentive-upload";
	
		$data['id']=$this->input->post('id');
		
		$result=$this->admin_model->delete_uploaded_data($data);
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
