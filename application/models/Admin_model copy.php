<?php 
class Admin_model extends CI_Model{	

	public function __construct(){ 
		$this->load->database();
	}
	public function scheme_insert($data,$cust_bank_data,$business_data,$canvas_data,$fileid) {
		$customer_ids=$business_ids=array();
		$this->db->trans_start();
		if($fileid)
		{
			$this->update_file_details($fileid,count($business_data));
		}
		if($data)
		{
			foreach($data as $cust)
			{
				if(isset($cust['pan_no']) && $cust['pan_no'] !='NULL')
				{
					$where=" pan_no='$cust[pan_no]'";
				}
				if(isset($cust['aadhar_no']) && $cust['aadhar_no'] !='NULL')
				{
					$where=" and aadhar_no='$cust[aadhar_no]'";
				}
				$custsel=$this->db->query("select id from tbl_customer_details where $where")->row();
				if($custsel)
				{
					$customer_ids[]=$custsel->id;
				}
				else
				{
				$res=$this->db->insert('tbl_customer_details',$cust);
				if($res)
				{
				$customer_ids[]=$this->db->insert_id();
				}
				else
				{
				$customer_ids[]=0;
				}
				}
			}
			if($customer_ids)
				{
					
					$j=0;
					foreach($customer_ids as $id)
					{
						if($cust_bank_data)
						$cust_bank_data[$j]['customer_id']=$id;
						
						if($business_data)
						$business_data[$j]['customer_id']=$id;
		
						if($canvas_data)
						$canvas_data[$j]['customer_id']=$id;
						$j++;
					}
				} 
		
				
		}
		if($cust_bank_data)
		{
			foreach($cust_bank_data as $bnkdata)
			{
				$custsel=$this->db->query("select count(*) as count from tbl_customer_bank_details where customer_id=$bnkdata[customer_id]")->row();
				if($custsel->count==0)
				{
					$res=$this->db->insert('tbl_customer_bank_details',$bnkdata);
				}
			}
		}
		if($business_data)
		{
			
			foreach($business_data as $bus)
			{
				$res=$this->db->insert('tbl_business_details',$bus);
				$business_ids[]=$this->db->insert_id();
			}
			if($business_ids)
			{
				$j=0;
				foreach($business_ids as $id)
				{
					if($canvas_data)
					$canvas_data[$j]['business_id']=$id;
					$j++;
				}
			}
		
		}
		if($canvas_data)
		{
			$res = $this->db->insert_batch('tbl_canvass_details',$canvas_data);
		}
		$this->db->trans_complete();
		if ($this->db->trans_status() === FALSE)
		{
			return 2;
		}
		else
		{
		return 1;
		}	
	
	}
	public function incentive_insert($incentive_data,$fileid)
	{
		$this->db->trans_start();
		if($fileid)
		{
			$this->update_file_details($fileid,count($incentive_data));
		}
		if($incentive_data)
		{
			foreach($incentive_data as $inc)
			{
				$res=$this->db->insert('tbl_incentive_details',$inc);
			}
		}
		$this->db->trans_complete();
		if ($this->db->trans_status() === FALSE)
		{
       return 2;
		}
		else
		{
		return 1;
		}	
		
	}
	public function insert_file_details($filedata)
	{
		$result= $this->db->insert('tbl_uploadfile_details',$filedata);
		return $this->db->insert_id();
	}
	public function update_file_details($fileid,$total_case)
	{
		$this->db->where('id', $fileid);
		$result= $this->db->update('tbl_uploadfile_details',array('total_case'=>$total_case));
		if($this->db->affected_rows() >= 0)
			return 1;
		else
			return 0;
	}
	public function insert_user($data=array())
	{
		$result= $this->db->insert('user_details',$data);
		return $this->db->insert_id();
	}
	public function update_user($data=array())
	{
		$this->db->where('id', $data['id']);
		$result= $this->db->update('user_details',$data);
		return $this->db->affected_rows();
	}
	public function insert_avp($data=array())
	{
		$result= $this->db->insert('tbl_avp_details',$data);
		return $this->db->insert_id();
	}
	public function update_avp($data=array())
	{
		$this->db->where('id', $data['id']);
		$result= $this->db->update('tbl_avp_details',$data);
		if($this->db->affected_rows()>=0)
		return 1;
		else
		return 0;
	}
	public function insert_zm($data=array())
	{
		$result= $this->db->insert('tbl_zm_details',$data);
		return $this->db->insert_id();
	}
	public function update_zm($data=array())
	{
		$this->db->where('id', $data['id']);
		$result= $this->db->update('tbl_zm_details',$data);
		if($this->db->affected_rows()>=0)
		return 1;
		else
		return 0;
	}
	public function insert_am($data=array())
	{
		$result= $this->db->insert('tbl_am_details',$data);
		return $this->db->insert_id();
	}
	public function update_am($data=array())
	{
		$this->db->where('id', $data['id']);
		$result= $this->db->update('tbl_am_details',$data);
		if($this->db->affected_rows()>=0)
		return 1;
		else
		return 0;
	}
	public function insert_region($data=array())
	{
		$result= $this->db->insert('tbl_region_details',$data);
		return $this->db->insert_id();
	}
	public function update_region($data=array())
	{
		$this->db->where('id', $data['id']);
		$result= $this->db->update('tbl_region_details',$data);
		if($this->db->affected_rows()>=0)
		return 1;
		else
		return 0;
	}
	public function insert_branch($data=array())
	{
		$result= $this->db->insert('tbl_branch_details',$data);
		return $this->db->insert_id();
	}
	public function update_branch($data=array())
	{
		$this->db->where('id', $data['id']);
		$result= $this->db->update('tbl_branch_details',$data);
		if($this->db->affected_rows()>=0)
		return 1;
		else
		return 0;
	}
	public function insert_canvasser($data=array())
	{
		$result= $this->db->insert('tbl_canvasser_details',$data);
		return $this->db->insert_id();
	}
	public function update_canvasser($data=array())
	{
		$this->db->where('id', $data['id']);
		$result= $this->db->update('tbl_canvasser_details',$data);
		if($this->db->affected_rows()>=0)
		return 1;
		else
		return 0;
	}
	public function insert_company($data=array())
	{
		$result= $this->db->insert('tbl_company_details',$data);
		return $this->db->insert_id();
	}
	public function update_company($data=array())
	{
		$this->db->where('id', $data['id']);
		$result= $this->db->update('tbl_company_details',$data);
		if($this->db->affected_rows()>=0)
		return 1;
		else
		return 0;
	}
	public function insert_product($data=array())
	{
		$result= $this->db->insert('tbl_product_details',$data);
		return $this->db->insert_id();
	}
	public function update_product($data=array())
	{
		$this->db->where('id', $data['id']);
		$result= $this->db->update('tbl_product_details',$data);
		if($this->db->affected_rows()>=0)
		return 1;
		else
		return 0;
	}
	public function get_company_name($id)
	{
		$query   = $this->db->query("SELECT name from tbl_company_details where id=$id");
		$results = $query->row();
		if($results)
		{
			return $results->name;
		}
		else
		{
			return null;
		}

	}
	public function get_product_name($id)
	{
		$query   = $this->db->query("SELECT name from tbl_product_details where id=$id");
		$results = $query->row();
		if($results)
		{
			return $results->name;
		}
		else
		{
			return null;
		}

	}
	public function customer_search($data)
	{
		$this->db->select('count(*) as total_case,sum(tbl_business_details.shares_purchased) as shares_purchased,sum(tbl_business_details.investment_amount) as investment_amount,tbl_customer_details.*,tbl_company_details.name as company,tbl_product_details.name as product')
		->from('tbl_business_details')
		->join('tbl_customer_details', 'tbl_customer_details.id=tbl_business_details.customer_id')
		->join('tbl_company_details','tbl_company_details.id=tbl_business_details.company_id','left')
		->join('tbl_product_details','tbl_product_details.id=tbl_business_details.product_id','left')
		->where('tbl_business_details.company_id',$data['company_id'])
		->where('tbl_business_details.customer_id',$data['customer_id'])
		->where('tbl_business_details.status !=','Deleted');
		 if($data['product_id'])
		$this->db->where('tbl_business_details.product_id',$data['product_id']);
		/* if($data['pan_no'])
		$this->db->like("REPLACE(tbl_customer_details.pan_no,' ','')",str_replace($data['pan_no'],' ',''),'none');
		if($data['aadhar_no'])
		$this->db->like("REPLACE(tbl_customer_details.aadhar_no,' ','')",str_replace($data['aadhar_no'],' ',''),'none');
		if($data['customer_mobile'])
		$this->db->like("REPLACE(tbl_customer_details.customer_mobile,' ','')",str_replace($data['customer_mobile'],' ',''),'none');
		if($data['email_id'])
		$this->db->like("REPLACE(tbl_customer_details.email_id,' ','')",str_replace($data['email_id'],' ',''),'none');
		
		$this->db->group_by("tbl_business_details.customer_id"); */
		
		$result=$this->db->get()->result();
		if($result)
		{
		foreach($result as $index=>$value)
		{
			if($value->total_case==0)
			{
				$result=array();
			}
		}
		}
		return $result;

	}

	public function check_customer_name($name)
	{
		if($name)
		{
			$res=$this->db->query("select id,customer_name from tbl_customer_details where customer_name like '%$name%' limit 5")->result();
			return $res;
		}
	}
	public function get_distinct_list($table,$columnlist,$where="")
	{
		$distinctlist=$this->db->query("select distinct $columnlist from $table $where ")->result();
		print_r($distinctlist);
			exit;
		foreach($distinctlist as $distinct)
		{
			print_r($distinct->avp);
			exit;
		}
	}
	public function get_distinct($table,$column)
	{
		$result=array();
		$result=$this->db->query("select distinct $column from $table where status !='Deleted'")->result();
		return $result;
	}
  
	public function check_user_exist($username,$password)
	{
	$sucess=1;        
	$query=$this->db->query("select id,display_name,username,email_id,role from user_details where username='$username' and password='$password' and role='admin'");
	$result=$query->row();
	if($result)
	{   
	$userdata=array(
		  
			'username'=>$result->username,
			'display_name'=>$result->display_name,
			'email_id'=>$result->email_id,
			'role'=>$result->role
	);

	$this->session->set_userdata('userdata',$userdata);
	$this->session->set_userdata('user_id',$result->id);
  
	$sucess=1;
	}
	else
	{
			$sucess=0;
	}

	return $sucess;
	}
	public function get_lists($table,$columns,$limit="",$orderby="")
	{
		if($limit !="")
		{
			$limit='limit '.$limit;
		}
		if($orderby=="")
		{
			$orderby=' order by created_on desc';
		}
	  
		$query   = $this->db->query("SELECT $columns from $table where status != 'Deleted' $orderby $limit");
		$results = $query->result();
		return $results;
	}
	
	public function get_product_list($company_id="")
	{
		$data=array();
		$where="";
		if($company_id !="")
		{
			$where=" and company_id=$company_id";
		}
		$query   = $this->db->query("SELECT id,name FROM tbl_product_details where status !='Deleted' $where");
		$results = $query->result();
		if($results)
		{
		foreach ($results as $row)
		{
		$data[$row->id]=$row->name;
		}
		}
	   return $data;

	}

	public function get_company_list()
	{
		$data=array();
		$query   = $this->db->query("SELECT id,name  FROM tbl_company_details where status !='Deleted'");
		$results = $query->result();
		if($results)
		{
		foreach ($results as $row)
		{
		$data[$row->id]=$row->name;
		}
		}
	   return $data;

	}

	public function get_dashboard_count()
	{
		$companies=$this->db->query("select  * from tbl_company_details where status !='Deleted'")->result();
		if($companies){
			foreach($companies as $index=>$value)
			{
				$value->productdet=$this->get_product_business($value->id);
			}
			return $companies;
		}

	}

	public function get_product_business($company_id)
	{
		$result=$this->db->query("select count(*) as count,tbl_product_details.name from tbl_business_details join tbl_product_details on tbl_product_details.id=tbl_business_details.product_id where tbl_business_details.company_id=$company_id and tbl_business_details.status !='Deleted' GROUP by tbl_business_details.product_id")->result();
		return $result;
	}

	public function get_singlefile_business_details($file_id)
	{
		$result=array();
		$this->db->select('tbl_business_details.*,tbl_canvass_details.*,tbl_customer_details.*,tbl_customer_bank_details.*')
        ->from('tbl_business_details') 
        ->join('tbl_canvass_details','tbl_business_details.id=tbl_canvass_details.business_id','left') 
        ->join('tbl_customer_details','tbl_business_details.customer_id = tbl_customer_details.id','left')
        ->join('tbl_customer_bank_details','tbl_business_details.customer_id=tbl_customer_bank_details.customer_id','left');
       
        $this->db->where('tbl_business_details.file_id',$file_id);
		$this->db->where('tbl_canvass_details.file_id',$file_id);
       
        $result['business_details']=$this->db->get()->result();

		$this->db->where("id=$file_id");
		$this->db->select('*');
		$result['file_details'] = $this->db->get('tbl_uploadfile_details')->row();
		if($result['file_details'])
		{
	
			if($result['file_details']->company_id)
			{
				$result['file_details']->company_id=$this->get_company_name($result['file_details']->company_id);
			}
			if($result['file_details']->product_id)
			{
				$result['file_details']->product_id=$this->get_product_name($result['file_details']->product_id);
			}
	
		}
		return $result;
	}
	public function get_singlefile_incentive_details($file_id)
	{
		$result=array();
		$this->db->where("file_id=$file_id");
		$this->db->select('*');
       
        $result['incentive_details']=$this->db->get('tbl_incentive_details')->result();

		$this->db->where("id=$file_id");
		$this->db->select('*');
		$result['file_details'] = $this->db->get('tbl_uploadfile_details')->row();
		if($result['file_details'])
		{
	
			if($result['file_details']->company_id)
			{
				$result['file_details']->company_id=$this->get_company_name($result['file_details']->company_id);
			}
			if($result['file_details']->product_id)
			{
				$result['file_details']->product_id=$this->get_product_name($result['file_details']->product_id);
			}
	
		}
		return $result;
	}


	public function get_single_view($data=array())
	{
		$result=array();
		if($data)
		{
		if($data['type']=='business')
		{
			$this->db->where($data['where'][0]);
			$this->db->select($data['columnlist'][0]);
			$query = $this->db->get($data['table'][0]);
			$result['data']=$query->result();

		   
			$this->db->where($data['where'][0]);
			$this->db->select($data['columnlist'][1]);
			$query = $this->db->get($data['table'][1]);
			$result['data2']=$query->result();

		}   
		else
		{ 
			$this->db->where($data['where']);
			$this->db->select($data['columnlist']);
			$query = $this->db->get($data['table']);
			$result['data']=$query->result();
		  
		}
		}
	  
		return $result;
	}
	
	

	public function get_display_name($user_id)
	{
		$query   = $this->db->query("SELECT display_name as name from user_details where id='$user_id'");
		$results = $query->row();
		if($results)
		{
			return $results->name;
		}
		else
		{
			return null;
		}

	}
	
	public function delete_item($data=array())
	{
		$this->db->where('id', $data['id']);
		$result= $this->db->update($data['table'],array('status'=>'Deleted'));
		return $result;

	}
		


	public function delete_uploaded_data($data=array())
	{	$result=0;
	
		if($data)
		{	
			if($data['type']=='business')
			{
			$result=$this->db->query("UPDATE tbl_business_details a,tbl_uploadfile_details b,tbl_canvass_details c SET a.status='Deleted',b.status='Deleted',c.status='Deleted' WHERE a.file_id=$data[id] and b.id=$data[id] and c.file_id=$data[id]");
			}
			else if($data['type']=='incentive')
			{

				$result=$this->db->query("UPDATE tbl_incentive_details a,tbl_uploadfile_details b SET a.status='Deleted',b.status='Deleted' WHERE a.file_id=$data[id] and b.id=$data[id]");
				
			}
			$res=$this->db->query("select filename from tbl_uploadfile_details where id=$data[id]")->row();
			if($res)
			{
			/* 	if(!unlink('uploads/'.$data['type'].'-upload/'.$res->filename))
				{
					$result=false;
				} */
				if(!rename('uploads/'.$data['type'].'-upload/'.$res->filename,'uploads/'.$data['type'].'-upload/'.$res->filename.'_deleted'))
				{
					$result=false;
				}
			}
			
			return $result;
		}
	
	}

	public function get_single_customer($id)
	{
		$result=$this->db->query("select tbl_customer_details.*,tbl_customer_bank_details.* from tbl_customer_details join tbl_customer_bank_details on tbl_customer_bank_details.customer_id=tbl_customer_details.id where tbl_customer_details.id=$id ")->row();
		if($result)
		return $result;
		else
		return 0;
	}

	public function check_user_email_exist($email="")
	{
		   $query=$this->db->query("select id from user_details where email_id='".$email."'");
		   $results=$query->row();
		   if($results)
		   {
				   return 1;
		   }
		   else
		   {
				   return 0;
		   }
	}
	public function check_username_exist($username="")
	{
		   $query=$this->db->query("select id from user_details where username='".$username."'");
		   $results=$query->row();
		   if($results)
		   {
				   return 1;
		   }
		   else
		   {
				   return 0;
		   }
	}
	public function delete_user($user_id,$role,$other_table="")
	{
		$sucess=1;
		$this->db->trans_start();
		$query=$this->db->query("update  user_details set status='Deleted' where id=".$user_id." and role='".$role."'");
		if($this->db->affected_rows()>0)
		{
			$sucess=1;
		}
		else
		{
			$sucess=0;
		}
		
		if($other_table)
		{
			$query=$this->db->query("update  ".$other_table." set status='Deleted' where user_id=".$user_id);
			if($this->db->affected_rows() >0)
			{
				$sucess=1;
			}
			else
			{
				$sucess=0;
			}
			
		}
		$this->db->trans_complete();
		echo $sucess;
		
	}
	public function get_business_report($data=array())
	{
		if($data)
		{
			$bus_sum=$this->db->select('count(*) as total_case,sum(tbl_business_details.shares_purchased) as shares_purchased,sum(tbl_business_details.investment_amount) as investment_amount,tbl_company_details.name as company,tbl_product_details.name as product');
			$bus_entries=$this->db->select('tbl_business_details.*,tbl_company_details.name as company,tbl_product_details.name as product');
		$this->db->from('tbl_business_details')
		->join('tbl_company_details','tbl_company_details.id=tbl_business_details.company_id')
		->join('tbl_product_details','tbl_product_details.id=tbl_business_details.product_id','left')
		->where('tbl_business_details.clearing_date >=', date('Y-m-d',strtotime($data['from'])))
		->where('tbl_business_details.clearing_date <=', date('Y-m-d',strtotime($data['to'])))
		->where('tbl_business_details.company_id',$data['company_id'])
		->where('tbl_business_details.product_id',$data['product_id'])
		->where('tbl_business_details.status !=','Deleted');

		
		if($data['avp'])
		{
			if($data['avp']=="ALL")
			$this->db->where("tbl_business_details.avp IN (SELECT name FROM tbl_avp_details )", NULL, FALSE);
			else
			$this->db->where("tbl_business_details.avp",$data['avp']);
			
		} 
		if($data['zm'])
		{
			if($data['zm']=="ALL")
			$this->db->where("tbl_business_details.zm IN (SELECT name FROM tbl_zm_details )", NULL, FALSE);
			else
			$this->db->where("tbl_business_details.zm",$data['zm']);
			
		} 
		if($data['region'])
		{
			if($data['region']=="ALL")
			$this->db->where("tbl_business_details.region IN (SELECT name FROM tbl_region_details )", NULL, FALSE);
			else
			$this->db->where("tbl_business_details.region",$data['region']);
			
		} 
		if($data['am'])
		{
			if($data['am']=="ALL")
			$this->db->where("tbl_business_details.am IN (SELECT name FROM tbl_am_details )", NULL, FALSE);
			else
			$this->db->where("tbl_business_details.am",$data['am']);
			
		} 
		if($data['branch'])
		{
			if($data['branch']=="ALL")
			$this->db->where("tbl_business_details.branch IN (SELECT name FROM tbl_branch_details )", NULL, FALSE);
			else
			$this->db->where("tbl_business_details.branch",$data['branch']);
			
		} 
	
		
		$result['business_sum']=$bus_sum->db->get()->result();
		$result['business_entries']=$bus_entries->db->get()->result();
		if($result)
		{
		foreach($result['business_sum'] as $index=>$value)
		{
			if($value->total_case==0)
			{
				$result['business_sum']=array();
			}
		}
		}
		return $result;
		}
	}
	public function get_incentive_report($data=array())
	{
		if($data)
		{
		$this->db->select('count(*) as total_case,sum(tbl_incentive_details.sum_of_business) as sum_of_business,sum(tbl_incentive_details.sum_of_payout_amount) as sum_of_payout_amount,tbl_company_details.name as company,tbl_product_details.name as product')
		->from('tbl_incentive_details')
		->join('tbl_company_details','tbl_company_details.id=tbl_incentive_details.company_id')
		->join('tbl_product_details','tbl_product_details.id=tbl_incentive_details.product_id','left')
		
		->where('tbl_incentive_details.company_id',$data['company_id'])
		->where('tbl_incentive_details.product_id',$data['product_id'])
		->where('tbl_incentive_details.status !=','Deleted')
		->where('tbl_incentive_details.incentive_type',$data['type']);
		$data['from']=explode("-",$data['from']);	
		if($data['from'] && $data['to']=="")
		{
			$this->db->where("tbl_incentive_details.month_id",$data['from'][1]);
			$this->db->where("tbl_incentive_details.year",$data['from'][0]);
		}	
		if($data['to'])
		{
		
			$data['to']=explode("-",$data['to']);
			$this->db->where("(tbl_incentive_details.month_id >=".$data['from'][1]." and tbl_incentive_details.year >=".$data['from'][0].") and (tbl_incentive_details.month_id <=".$data['to'][1]." and tbl_incentive_details.year <=".$data['to'][0].")");
		}
		if($data['region'])
		{
			if($data['region']=="ALL")
			$this->db->where("tbl_incentive_details.region IN (SELECT name FROM tbl_region_details )", NULL, FALSE);
			else
			$this->db->where("tbl_incentive_details.region",$data['region']);
			
		} 
		if($data['branch'])
		{
			if($data['branch']=="ALL")
			$this->db->where("tbl_incentive_details.branch IN (SELECT name FROM tbl_branch_details )", NULL, FALSE);
			else
			$this->db->where("tbl_incentive_details.branch",$data['branch']);
			
		} 
	
		
		$result=$this->db->get()->result();
		if($result)
		{
		foreach($result as $index=>$value)
		{
			if($value->total_case==0)
			{
				$result=array();
			}
		}
		}
		return $result;
		}
	}
	public function get_report($data=array())
	{
		$results=array();
	
			$where="status !='deleted'";
			if($data['from']=="")
			{
				$data['from']=date("Y-m-d");
			}
		
			if($data['to']=="")
			{
				$data['to']=date("Y-m-d");
			}
		
			$where="status !='deleted' and (clearing_date BETWEEN '".$data['from']."%' AND '".$data['to']."%')";
			if($data['zm'] !="")
			{
			$where=$where." and zm like '".$data['zm']."%'";    
			}
			if($data['am'] !="")
			{
			$where=$where." and am like '".$data['am']."%'";    
			}
			if($data['branch'] !="")
			{
			$where=$where." and branch like '".$data['branch']."%'";    
			}
			
			$results['report_details']=$this->db->query("select * from tbl_sanat_multitrade_share WHERE $where  limit 100")->result();
			$results['report_sum']=$this->db->query("select sum(shares_purchased) as total_shares_purchased,sum(investment_amount) as total_investment_amount,count(*) as total_customers from tbl_sanat_multitrade_share WHERE $where limit 100")->row();
	
		return $results;
	}
	public function get_collection_report($data=array(),$agent_id="")
	{
		$where="";
		if($agent_id !="")
		{
			$where=" and customer_details.agent_id=".$agent_id;
		}
		if(!$data)
		{
		$query1=$this->db->query("select sum(customer_details.payment_amount) as received,sum(package_details.offer_price) as total,sum(package_details.offer_price) - sum(customer_details.payment_amount) as pending from customer_details join package_details on package_details.id=customer_details.package_id  WHERE customer_details.status !='Deleted' $where limit 100 ");

		$query2=$this->db->query("select customer_details.id,customer_details.user_id,customer_details.payment_amount,customer_details.payment_status,package_details.offer_price from customer_details join package_details on package_details.id=customer_details.package_id where customer_details.status !='Deleted'$where limit 100 ");
		}
		else
		{
		   
			$where="customer_details.status !='Deleted'";
			if($data['from']=="")
			{
				$data['from']=date("Y-m-d");
			}
		  
			if($data['to']=="")
			{
				$data['to']=date("Y-m-d");
			}
		  
			$where="customer_details.status !='Deleted' and (customer_details.created_on BETWEEN '".$data['from']."%' AND '".$data['to']."%')";
			if($data['agent_id'] !="")
			{
			$where=$where." and customer_details.agent_id=".$data['agent_id'];    
			}
			
			$query1=$this->db->query("select sum(customer_details.payment_amount) as received,sum(package_details.offer_price) as total,sum(package_details.offer_price) - sum(customer_details.payment_amount) as pending from customer_details join package_details on package_details.id=customer_details.package_id  WHERE $where limit 100");
			$query2=$this->db->query("select customer_details.id,customer_details.user_id,customer_details.payment_amount,customer_details.payment_status,package_details.offer_price from customer_details join package_details on package_details.id=customer_details.package_id where $where limit 100");
		}
		$results['colltotals'] = $query1->result();
		$results['collectionlist']=$query2->result();
		if($results['collectionlist'])
		{
			foreach($results['collectionlist'] as $index=>$value)
		{
			$value->customer_name=$this->get_display_name($value->user_id);
		
		}
		}
		return $results;
	
	}


	
}