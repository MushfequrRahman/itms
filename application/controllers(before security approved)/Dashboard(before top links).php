<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
		 //$this->load->library('session');
		
			if(!$this->session->userdata('userid'))
				{
					redirect('User_Login');
				}
	 }
	 public function index()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$this->load->model('Calendar_model');
		$data['title']='Dashboard';
		$this->load->view('admin/head',$data);
		$userid=$this->session->userdata('userid');
		$usertype=$this->session->userdata('user_type');
		$factoryid=$this->session->userdata('factoryid');
		$data['ts']=$this->Admin->tasksstatus($userid);
		$this->load->view('admin/toprightnav',$data);
		$this->load->view('admin/leftmenu');
		
		
		if($usertype==1)
		{
			$data['pcr']=$this->Admin->cutting_prev_report();
			$data['psr']=$this->Admin->sewing_prev_report();
			$data['pfr']=$this->Admin->finishing_prev_report();
			$data['tid']=$this->Admin->assignee_task_listadmin();
			$this->load->view('admin/dashboard',$data);
		}
		elseif($usertype==11)
		{
			//redirect('Calendar');
			$this->load->view('admin/op_mm_dashboard');
		}
		elseif($usertype==2 || $usertype==3 || $usertype==4)
		{
			$data['pcr']=$this->Admin->cutting_prev_report();
			$data['psr']=$this->Admin->sewing_prev_report();
			$data['pfr']=$this->Admin->finishing_prev_report();
			$data['tid']=$this->Admin->assignee_task_list1($userid);
			$this->load->view('admin/dashboard',$data);
		}
		elseif($usertype==5 || $usertype==10)
		{
			$data['ul']=$this->Admin->factory_challan_pending_list($factoryid);
			$this->load->view('admin/security_dashboard',$data);
		}
		
	 }
	
	public function show_divisionname()
	{
		$this->load->database();
		$this->load->model('Admin');
		$factoryid = $this->input->get('factoryid');
		$data=$this->Admin->show_divisionname($factoryid);
		echo json_encode($data); 
	}
	public function show_departmentname()
	{
		$this->load->database();
		$this->load->model('Admin');
		$factoryid = $this->input->get('factoryid');
		$divisionid = $this->input->get('divisionid');
		$data=$this->Admin->show_departmentname($factoryid,$divisionid);
		echo json_encode($data); 
	}
	public function show_sectionname()
	{
		$this->load->database();
		$this->load->model('Admin');
		$factoryid = $this->input->get('factoryid');
		$divisionid = $this->input->get('divisionid');
		$departmentid = $this->input->get('departmentid');
		$data=$this->Admin->show_sectionname($factoryid,$divisionid,$departmentid);
		echo json_encode($data); 
	}
	public function show_subsectionname()
	{
		$this->load->database();
		$this->load->model('Admin');
		$factoryid = $this->input->get('factoryid');
		$divisionid = $this->input->get('divisionid');
		$departmentid = $this->input->get('departmentid');
		$sectionid = $this->input->get('sectionid');
		$data=$this->Admin->show_subsectionname($factoryid,$divisionid,$departmentid,$sectionid);
		echo json_encode($data); 
	}
	
	public function show_childdesignationname()
	{
		$this->load->database();
		$this->load->model('Admin');
		$parentdesignationid = $this->input->get('parentdesignationid');
		$data=$this->Admin->show_childdesignationname($parentdesignationid);
		echo json_encode($data); 
	}
	public function show_challan_factoryname()
	{
		$this->load->database();
		$this->load->model('Admin');
		$factoryid = $this->input->get();
		$data=$this->Admin->factory_list();
		echo json_encode($data); 
	}
	public function show_challan_buyername()
	{
		$this->load->database();
		$this->load->model('Admin');
		$bid = $this->input->get();
		$data=$this->Admin->buyer_list();
		echo json_encode($data); 
	}
	public function show_opener()
	{
		$this->load->database();
		$this->load->model('Admin');
		$factoryid = $this->input->get('factoryid');
		$data=$this->Admin->show_openernname($factoryid);
		echo json_encode($data); 
	}
	public function factory_insert_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Factory Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$this->load->view('admin/factory_insert_form',$data);
				
	 }
	 
	 public function fac_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			$facid=$this->form_validation->set_rules('facid', 'Factory ID', 'required');
			$facname=$this->form_validation->set_rules('facname', 'Factory Name', 'required');
			
			$fac_address=$this->form_validation->set_rules('fac_address', 'Factory Address', 'required');
			
			if($this->form_validation->run()==FALSE)
				{
					$this->fac_insert_form();
				}
			else
				{
					$facid=$this->input->post('facid');
					$facname=$this->input->post('facname');
					$fac_address=$this->input->post('fac_address');
					
					
					
			
			
					$ins=$this->Admin->fac_insert($facid,$facname,$fac_address);
			
					if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/factory_insert_form','refresh');
				}
		}
	}
	public function factory_list()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Factory List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['fl']=$this->Admin->factory_list();
		$this->load->view('admin/factory_list',$data);
				
	 }
	 public function factory_list_up()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Factory Info Update';
		$facid= $this->uri->segment(3);
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		//$data['all_line']=$this->Admin->all_line();
		//$data['opskill']=$this->Admin->opskill($opid);
		$data['flup']=$this->Admin->factory_list_up($facid);
		$this->load->view('admin/factory_list_up',$data);
	 }
	 public function flup()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			$fid=$this->input->post('fid');
			$facid=$this->input->post('facid');
			$factoryname=$this->input->post('factoryname');
			$factory_address=$this->input->post('factory_address');
			
			$ins=$this->Admin->flup($fid,$facid,$factoryname,$factory_address);
			if($ins==TRUE)
				{
					$this->session->set_flashdata('Successfully','Successfully Updated');
				}
			else
				{
					$this->session->set_flashdata('Successfully','Failed To Updated');
				}
					redirect('Dashboard/factory_list','refresh');
				
		}
	 }
	 public function division_insert_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Division Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['allf']=$this->Admin->factory_list();
		$this->load->view('admin/division_insert_form',$data);
				
	 }
	 public function division_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			//$diviid=$this->form_validation->set_rules('diviid', 'Division ID', 'required');
			$diviname=$this->form_validation->set_rules('diviname', 'Division Name', 'required');
			
			//$fac_address=$this->form_validation->set_rules('fac_address', 'Factory Address', 'required');
			
			if($this->form_validation->run()==FALSE)
				{
					$this->division_insert_form();
				}
			else
				{
					//$diviid=$this->input->post('diviid');
					$diviname=$this->input->post('diviname');
					$factoryid=$this->input->post('factoryid');
					
					
					
			
			
					$ins=$this->Admin->division_insert($diviname,$factoryid);
			
					if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/division_insert_form','refresh');
				}
		}
	}
	public function division_list()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Division List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['fl']=$this->Admin->division_list();
		$this->load->view('admin/division_list',$data);
				
	 } 
	
	 public function division_list_up()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Division Info Update';
		$divisionid= $this->uri->segment(3);
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		//$data['all_line']=$this->Admin->all_line();
		//$data['opskill']=$this->Admin->opskill($opid);
		$data['dlup']=$this->Admin->division_list_up($divisionid);
		$this->load->view('admin/division_list_up',$data);
	 } 
	public function dlup()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			$divisionid=$this->input->post('divisionid');
			$divisionname=$this->input->post('divisionname');
			
			$ins=$this->Admin->dlup($divisionid,$divisionname);
			if($ins==TRUE)
				{
					$this->session->set_flashdata('Successfully','Successfully Updated');
				}
			else
				{
					$this->session->set_flashdata('Successfully','Failed To Updated');
				}
					redirect('Dashboard/division_list','refresh');
				
		}
	 }
	 public function department_insert_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Department Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['allf']=$this->Admin->factory_list();
		$data['alld']=$this->Admin->division_list();
		$this->load->view('admin/department_insert_form',$data);
				
	 }
	
	  public function department_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			$department=$this->form_validation->set_rules('department', 'Department Name', 'required');
			
			
			if($this->form_validation->run()==FALSE)
				{
					$this->department_insert_form();
				}
			else
				{
					$factoryid=$this->input->post('factoryid');
					$divisionid=$this->input->post('divisionid');
					$department=$this->input->post('department');
					$ins=$this->Admin->department_insert($factoryid,$divisionid,$department);
			
					if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/department_insert_form','refresh');
				}
		}
	}
	
	
	
	  
	public function department_list()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Department List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['ul']=$this->Admin->department_list();
		$this->load->view('admin/department_list',$data);
				
	 }
	 public function department_list_up()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Department Info Update';
		$deptid= $this->uri->segment(3);
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		
		$data['dlup']=$this->Admin->department_list_up($deptid);
		$this->load->view('admin/department_list_up',$data);
	 } 
	 public function departmentlup()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			$deptid=$this->input->post('deptid');
			$departmentname=$this->input->post('departmentname');
			
			$ins=$this->Admin->departmentlup($deptid,$departmentname);
			if($ins==TRUE)
				{
					$this->session->set_flashdata('Successfully','Successfully Updated');
				}
			else
				{
					$this->session->set_flashdata('Successfully','Failed To Updated');
				}
					redirect('Dashboard/department_list','refresh');
				
		}
	 }
	
  public function section_insert_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Department Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['allf']=$this->Admin->factory_list();
		$data['alld']=$this->Admin->division_list();
		$this->load->view('admin/section_insert_form',$data);
				
	 }
  public function section_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			$section=$this->form_validation->set_rules('section', 'Section Name', 'required');
			
			
			if($this->form_validation->run()==FALSE)
				{
					$this->section_insert_form();
				}
			else
				{
					$factoryid=$this->input->post('factoryid');
					$divisionid=$this->input->post('divisionid');
					$departmentid=$this->input->post('departmentid');
					$section=$this->input->post('section');
					$ins=$this->Admin->section_insert($factoryid,$divisionid,$departmentid,$section);
			
					if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/section_insert_form','refresh');
				}
		}
	}
	public function section_list()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Section List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['ul']=$this->Admin->section_list();
		$this->load->view('admin/section_list',$data);
				
	 }
	 public function section_list_up()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Section Info Update';
		$secid= $this->uri->segment(3);
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		
		$data['dlup']=$this->Admin->section_list_up($secid);
		$this->load->view('admin/section_list_up',$data);
	 }
	 public function sectionlup()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			$secid=$this->input->post('secid');
			$sectionname=$this->input->post('sectionname');
			
			$ins=$this->Admin->sectionlup($secid,$sectionname);
			if($ins==TRUE)
				{
					$this->session->set_flashdata('Successfully','Successfully Updated');
				}
			else
				{
					$this->session->set_flashdata('Successfully','Failed To Updated');
				}
					redirect('Dashboard/section_list','refresh');
				
		}
	 } 
	public function subsection_insert_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Department Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['allf']=$this->Admin->factory_list();
		$data['alld']=$this->Admin->division_list();
		$this->load->view('admin/subsection_insert_form',$data);
				
	 }
	public function subsection_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			$subsection=$this->form_validation->set_rules('subsection', 'Sub Section Name', 'required');
			
			
			if($this->form_validation->run()==FALSE)
				{
					$this->subsection_insert_form();
				}
			else
				{
					$factoryid=$this->input->post('factoryid');
					$divisionid=$this->input->post('divisionid');
					$departmentid=$this->input->post('departmentid');
					$sectionid=$this->input->post('sectionid');
					$subsection=$this->input->post('subsection');
					$ins=$this->Admin->subsection_insert($factoryid,$divisionid,$departmentid,$sectionid,$subsection);
			
					if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/subsection_insert_form','refresh');
				}
		}
	}
	
   public function subsection_list()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Sub Section List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['ul']=$this->Admin->subsection_list();
		$this->load->view('admin/subsection_list',$data);
				
	 }
  public function subsection_list_up()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Section Info Update';
		$subsecid= $this->uri->segment(3);
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		
		$data['dlup']=$this->Admin->subsection_list_up($subsecid);
		$this->load->view('admin/subsection_list_up',$data);
	 }
	public function subsectionlup()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			$subsecid=$this->input->post('subsecid');
			$subsectionname=$this->input->post('subsectionname');
			
			$ins=$this->Admin->subsectionlup($subsecid,$subsectionname);
			if($ins==TRUE)
				{
					$this->session->set_flashdata('Successfully','Successfully Updated');
				}
			else
				{
					$this->session->set_flashdata('Successfully','Failed To Updated');
				}
					redirect('Dashboard/subsection_list','refresh');
				
		}
	 } 
   public function religion_insert_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Religion Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$this->load->view('admin/religion_insert_form',$data);
				
	 }
   public function religion_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			$religionname=$this->form_validation->set_rules('religionname', 'Religion Name', 'required');
			
			
			if($this->form_validation->run()==FALSE)
				{
					$this->religion_insert_form();
				}
			else
				{
					$religionname=$this->input->post('religionname');
					
					$ins=$this->Admin->religion_insert($religionname);
			
					if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/religion_insert_form','refresh');
				}
		}
	}
	public function religion_list()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Religion List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['ul']=$this->Admin->religion_list();
		$this->load->view('admin/religion_list',$data);
				
	 }
   public function religion_list_up()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Religion Info Update';
		$religionid= $this->uri->segment(3);
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		
		$data['dlup']=$this->Admin->religion_list_up($religionid);
		$this->load->view('admin/religion_list_up',$data);
	 }
	public function religionlup()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			$religionid=$this->input->post('religionid');
			$religionname=$this->input->post('religionname');
			
			$ins=$this->Admin->religionlup($religionid,$religionname);
			if($ins==TRUE)
				{
					$this->session->set_flashdata('Successfully','Successfully Updated');
				}
			else
				{
					$this->session->set_flashdata('Successfully','Failed To Updated');
				}
					redirect('Dashboard/religion_list','refresh');
				
		}
	 }
	 
	public function gender_insert_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Gender Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$this->load->view('admin/gender_insert_form',$data);
				
	 }
	public function gender_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			$gender=$this->form_validation->set_rules('gender', 'Gender', 'required');
			
			
			if($this->form_validation->run()==FALSE)
				{
					$this->religion_insert_form();
				}
			else
				{
					$gender=$this->input->post('gender');
					
					$ins=$this->Admin->gender_insert($gender);
			
					if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/gender_insert_form','refresh');
				}
		}
	}
	public function gender_list()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Gender List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['ul']=$this->Admin->gender_list();
		$this->load->view('admin/gender_list',$data);
				
	 }
	public function gender_list_up()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Gender Info Update';
		$genderid= $this->uri->segment(3);
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		
		$data['dlup']=$this->Admin->gender_list_up($genderid);
		$this->load->view('admin/gender_list_up',$data);
	 }
	public function genderlup()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			$genderid=$this->input->post('genderid');
			$gender=$this->input->post('gender');
			
			$ins=$this->Admin->genderlup($genderid,$gender);
			if($ins==TRUE)
				{
					$this->session->set_flashdata('Successfully','Successfully Updated');
				}
			else
				{
					$this->session->set_flashdata('Successfully','Failed To Updated');
				}
					redirect('Dashboard/gender_list','refresh');
				
		}
	 }
	public function maritualstatus_insert_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Maritual Status Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$this->load->view('admin/maritualstatus_insert_form',$data);
				
	 } 
	public function maritualstatus_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			$maritualstatus=$this->form_validation->set_rules('maritualstatus', 'Maritual Status', 'required');
			
			
			if($this->form_validation->run()==FALSE)
				{
					$this->maritualstatus_insert_form();
				}
			else
				{
					$maritualstatus=$this->input->post('maritualstatus');
					
					$ins=$this->Admin->maritualstatus_insert($maritualstatus);
			
					if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/maritualstatus_insert_form','refresh');
				}
		}
	}
	public function maritualstatus_list()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Maritual Status List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['ul']=$this->Admin->maritualstatus_list();
		$this->load->view('admin/maritualstatus_list',$data);
				
	 }
   public function maritualstatus_list_up()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Maritual Status Update';
		$maritualstatusid= $this->uri->segment(3);
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		
		$data['dlup']=$this->Admin->maritualstatus_list_up($maritualstatusid);
		$this->load->view('admin/maritualstatus_list_up',$data);
	 }
	public function maritualstatuslup()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			$maritualstatusid=$this->input->post('maritualstatusid');
			$maritualstatus=$this->input->post('maritualstatus');
			
			$ins=$this->Admin->maritualstatuslup($maritualstatusid,$maritualstatus);
			if($ins==TRUE)
				{
					$this->session->set_flashdata('Successfully','Successfully Updated');
				}
			else
				{
					$this->session->set_flashdata('Successfully','Failed To Updated');
				}
					redirect('Dashboard/maritualstatus_list','refresh');
				
		}
	 }
	 public function parentdesignation_insert_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Parent Designation Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$this->load->view('admin/parentdesignation_insert_form',$data);
				
	 } 
    public function parentdesignation_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			$eparentdesignation=$this->form_validation->set_rules('eparentdesignation', 'Designation', 'required');
			$bparentdesignation=$this->form_validation->set_rules('bparentdesignation', 'Designation', 'required');
			
			if($this->form_validation->run()==FALSE)
				{
					$this->parentdesignation_insert_form();
				}
			else
				{
					$eparentdesignation=$this->input->post('eparentdesignation');
					$bparentdesignation=$this->input->post('bparentdesignation');
					
					$ins=$this->Admin->parentdesignation_insert($eparentdesignation,$bparentdesignation);
			
					if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/parentdesignation_insert_form','refresh');
				}
		}
	}
   public function parentdesignation_list()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Maritual Status List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['ul']=$this->Admin->parentdesignation_list();
		$this->load->view('admin/parentdesignation_list',$data);
				
	 }
	public function parentdesignation_list_up()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Parent Designation Update';
		$parentdesignationid= $this->uri->segment(3);
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		
		$data['dlup']=$this->Admin->parentdesignation_list_up($parentdesignationid);
		$this->load->view('admin/parentdesignation_list_up',$data);
	 } 
	public function parentdesignationlup()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			$parentdesignationid=$this->input->post('parentdesignationid');
			$eparentdesignation=$this->input->post('eparentdesignation');
			$bparentdesignation=$this->input->post('bparentdesignation');
			
			$ins=$this->Admin->parentdesignationlup($parentdesignationid,$eparentdesignation,$bparentdesignation);
			if($ins==TRUE)
				{
					$this->session->set_flashdata('Successfully','Successfully Updated');
				}
			else
				{
					$this->session->set_flashdata('Successfully','Failed To Updated');
				}
					redirect('Dashboard/parentdesignation_list','refresh');
				
		}
	 }
	 public function childdesignation_insert_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Child Designation Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['ul']=$this->Admin->parentdesignation_list();
		$this->load->view('admin/childdesignation_insert_form',$data);
				
	 }
	 public function childdesignation_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			$parentdesignationid=$this->form_validation->set_rules('parentdesignationid', 'Parent Designation', 'required');
			$echilddesignation=$this->form_validation->set_rules('echilddesignation', 'Child Designation', 'required');
			$bchilddesignation=$this->form_validation->set_rules('bchilddesignation', 'Child Designation', 'required');
			
			
			if($this->form_validation->run()==FALSE)
				{
					$this->childdesignation_insert_form();
				}
			else
				{
					$parentdesignationid=$this->input->post('parentdesignationid');
					$echilddesignation=$this->input->post('echilddesignation');
					$bchilddesignation=$this->input->post('bchilddesignation');
					
					$ins=$this->Admin->childdesignation_insert($parentdesignationid,$echilddesignation,$bchilddesignation);
			
					if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/childdesignation_insert_form','refresh');
				}
		}
	}
	public function childdesignation_list()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Child Status List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['ul']=$this->Admin->childdesignation_list();
		$this->load->view('admin/childdesignation_list',$data);
				
	 }
   public function childdesignation_list_up()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Child Designation Update';
		$childdesignationid= $this->uri->segment(3);
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		
		$data['dlup']=$this->Admin->childdesignation_list_up($childdesignationid);
		$this->load->view('admin/childdesignation_list_up',$data);
	 }
	public function childdesignationlup()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			$childdesignationid=$this->input->post('childdesignationid');
			$echilddesignation=$this->input->post('echilddesignation');
			$bchilddesignation=$this->input->post('bchilddesignation');
			
			$ins=$this->Admin->childdesignationlup($childdesignationid,$echilddesignation,$bchilddesignation);
			if($ins==TRUE)
				{
					$this->session->set_flashdata('Successfully','Successfully Updated');
				}
			else
				{
					$this->session->set_flashdata('Successfully','Failed To Updated');
				}
					redirect('Dashboard/childdesignation_list','refresh');
				
		}
	 }
	 public function usertype_insert_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='User Type Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$this->load->view('admin/usertype_insert_form',$data);
				
	 }
	 public function usertype_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			$usertype=$this->form_validation->set_rules('usertype', 'User type', 'required');
			 
			
			
			if($this->form_validation->run()==FALSE)
				{
					$this->usertype_insert_form();
				}
			else
				{
					$usertype=$this->input->post('usertype');
					
					
					$ins=$this->Admin->usertype_insert($usertype);
			
					if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/usertype_insert_form','refresh');
				}
		}
	}
	public function usertype_list()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='User type List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['ul']=$this->Admin->usertype_list();
		$this->load->view('admin/usertype_list',$data);
				
	 }
	 public function usertype_list_up()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='User Type Update';
		$usertypeid= $this->uri->segment(3);
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		
		$data['dlup']=$this->Admin->usertype_list_up($usertypeid);
		$this->load->view('admin/usertype_list_up',$data);
	 }
	 public function usertypelup()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			$usertypeid=$this->input->post('usertypeid');
			$usertype=$this->input->post('usertype');
			
			$ins=$this->Admin->usertypelup($usertypeid,$usertype);
			if($ins==TRUE)
				{
					$this->session->set_flashdata('Successfully','Successfully Updated');
				}
			else
				{
					$this->session->set_flashdata('Successfully','Failed To Updated');
				}
					redirect('Dashboard/usertype_list','refresh');
				
		}
	 }
	 public function servicetype_insert_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Service Type Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$this->load->view('admin/servicetype_insert_form',$data);
				
	 }
	 public function servicetype_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			$servicetype=$this->form_validation->set_rules('servicetype', 'Service Type', 'required');
			
			
			if($this->form_validation->run()==FALSE)
				{
					$this->servicetype_insert_form();
				}
			else
				{
					$servicetype=$this->input->post('servicetype');
					
					$ins=$this->Admin->servicetype_insert($servicetype);
			
					if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/servicetype_insert_form','refresh');
				}
		}
	}
	public function servicetype_list()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Service Type List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['ul']=$this->Admin->servicetype_list();
		$this->load->view('admin/servicetype_list',$data);
				
	 }
	 public function servicetype_list_up()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Service Type Info Update';
		$servicetypeid= $this->uri->segment(3);
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		
		$data['dlup']=$this->Admin->servicetype_list_up($servicetypeid);
		$this->load->view('admin/servicetype_list_up',$data);
	 }
	 public function servicetypelup()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			$servicetypeid=$this->input->post('servicetypeid');
			$servicetype=$this->input->post('servicetype');
			
			$ins=$this->Admin->servicetypelup($servicetypeid,$servicetype);
			if($ins==TRUE)
				{
					$this->session->set_flashdata('Successfully','Successfully Updated');
				}
			else
				{
					$this->session->set_flashdata('Successfully','Failed To Updated');
				}
					redirect('Dashboard/servicetype_list','refresh');
				
		}
	 }
	 public function userstatus_insert_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='User Status Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$this->load->view('admin/userstatus_insert_form',$data);
				
	 }
	 public function userstatus_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			$userstatus=$this->form_validation->set_rules('userstatus', 'User Status', 'required');
			
			
			if($this->form_validation->run()==FALSE)
				{
					$this->userstatus_insert_form();
				}
			else
				{
					$userstatus=$this->input->post('userstatus');
					
					$ins=$this->Admin->userstatus_insert($userstatus);
			
					if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/userstatus_insert_form','refresh');
				}
		}
	}
	public function userstatus_list()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='User Status List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['ul']=$this->Admin->userstatus_list();
		$this->load->view('admin/userstatus_list',$data);
				
	 }
	 public function userstatus_list_up()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='User Status Info Update';
		$userstatusid= $this->uri->segment(3);
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		
		$data['dlup']=$this->Admin->userstatus_list_up($userstatusid);
		$this->load->view('admin/userstatus_list_up',$data);
	 }
	 public function userstatuslup()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			$userstatusid=$this->input->post('userstatusid');
			$userstatus=$this->input->post('userstatus');
			
			$ins=$this->Admin->userstatuslup($userstatusid,$userstatus);
			if($ins==TRUE)
				{
					$this->session->set_flashdata('Successfully','Successfully Updated');
				}
			else
				{
					$this->session->set_flashdata('Successfully','Failed To Updated');
				}
					redirect('Dashboard/userstatus_list','refresh');
				
		}
	 }
	 public function useraccess_insert_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='User Access Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$this->load->view('admin/useraccess_insert_form',$data);
				
	 }
	 public function useraccess_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			$userid=$this->form_validation->set_rules('userid', 'User ID', 'required');
			
			
			if($this->form_validation->run()==FALSE)
				{
					$this->useraccess_insert_form();
				}
			else
				{
					$userid=$this->input->post('userid');
					$bsre=$this->input->post('bsre');
					$bswr=$this->input->post('bswr');
					$tsre=$this->input->post('tsre');
					$tswr=$this->input->post('tswr');
					$lsre=$this->input->post('lsre');
					$lswr=$this->input->post('lswr');
					$nare=$this->input->post('nare');
					$nawr=$this->input->post('nawr');
					$pare=$this->input->post('pare');
					$pawr=$this->input->post('pawr');
					$eare=$this->input->post('eare');
					$eawr=$this->input->post('eawr');
					$trre=$this->input->post('trre');
					$trwr=$this->input->post('trwr');
					$swotre=$this->input->post('swotre');
					$swotwr=$this->input->post('swotwr');
					$eore=$this->input->post('eore');
					$eowr=$this->input->post('eowr');
					$mmre=$this->input->post('mmre');
					$mmwr=$this->input->post('mmwr');
					$mmallure=$this->input->post('mmallure');
					$hrre=$this->input->post('hrre');
					$hrwr=$this->input->post('hrwr');
					$care=$this->input->post('care');
					$cawr=$this->input->post('cawr');
					$capre=$this->input->post('capre');
					$capwr=$this->input->post('capwr');
					$scre=$this->input->post('scre');
					$scwr=$this->input->post('scwr');
					$dcre=$this->input->post('dcre');
					$dcwr=$this->input->post('dcwr');
					$sbre=$this->input->post('sbre');
					$sbwr=$this->input->post('sbwr');
					$prre=$this->input->post('prre');
					$prwr=$this->input->post('prwr');
					$vtre=$this->input->post('vtre');
					$vtwr=$this->input->post('vtwr');
					$ihre=$this->input->post('ihre');
					$ihwr=$this->input->post('ihwr');
					
					$ins=$this->Admin->useraccess_insert($userid,$bsre,$bswr,$tsre,$tswr,$lsre,$lswr,$nare,$nawr,$pare,$pawr,$eare,$eawr,$trre,$trwr,$swotre,$swotwr,$eore,$eowr,$mmre,$mmwr,$mmallure,$hrre,$hrwr,$care,$cawr,$capre,$capwr,$scre,$scwr,$dcre,$dcwr,$sbre,$sbwr,$prre,$prwr,$vtre,$vtwr,$ihre,$ihwr);
			
					if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/useraccess_insert_form','refresh');
				}
		}
	}
	public function useraccess_update_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='User Access Update';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$this->load->view('admin/useraccess_update_form',$data);
				
	 }
	 public function useraccess_update()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='User Access';
		$this->load->view('admin/head',$data);
		$userid = $this->input->post('userid');
		$data['ual']=$this->Admin->useraccess_update($userid);
		$this->load->view('admin/useraccess_update',$data);
				
	 }
	 public function useraccesslup()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			//$userid=$this->form_validation->set_rules('userid', 'User ID', 'required');
//			
//			
//			if($this->form_validation->run()==FALSE)
//				{
//					$this->useraccess_insert_form();
//				}
//			else
//				{
					$userid=$this->input->post('userid');
					$bsre=$this->input->post('bsre');
					$bswr=$this->input->post('bswr');
					$tsre=$this->input->post('tsre');
					$tswr=$this->input->post('tswr');
					$lsre=$this->input->post('lsre');
					$lswr=$this->input->post('lswr');
					$nare=$this->input->post('nare');
					$nawr=$this->input->post('nawr');
					$pare=$this->input->post('pare');
					$pawr=$this->input->post('pawr');
					$eare=$this->input->post('eare');
					$eawr=$this->input->post('eawr');
					$trre=$this->input->post('trre');
					$trwr=$this->input->post('trwr');
					$swotre=$this->input->post('swotre');
					$swotwr=$this->input->post('swotwr');
					$eore=$this->input->post('eore');
					$eowr=$this->input->post('eowr');
					$mmre=$this->input->post('mmre');
					$mmwr=$this->input->post('mmwr');
					$mmallure=$this->input->post('mmallure');
					$hrre=$this->input->post('hrre');
					$hrwr=$this->input->post('hrwr');
					$care=$this->input->post('care');
					$cawr=$this->input->post('cawr');
					$capre=$this->input->post('capre');
					$capwr=$this->input->post('capwr');
					$scre=$this->input->post('scre');
					$scwr=$this->input->post('scwr');
					$dcre=$this->input->post('dcre');
					$dcwr=$this->input->post('dcwr');
					$sbre=$this->input->post('sbre');
					$sbwr=$this->input->post('sbwr');
					$prre=$this->input->post('prre');
					$prwr=$this->input->post('prwr');
					$vtre=$this->input->post('vtre');
					$vtwr=$this->input->post('vtwr');
					$ihre=$this->input->post('ihre');
					$ihwr=$this->input->post('ihwr');
					
					$ins=$this->Admin->useraccesslup($userid,$bsre,$bswr,$tsre,$tswr,$lsre,$lswr,$nare,$nawr,$pare,$pawr,$eare,$eawr,$trre,$trwr,$swotre,$swotwr,$eore,$eowr,$mmre,$mmwr,$mmallure,$hrre,$hrwr,$care,$cawr,$capre,$capwr,$scre,$scwr,$dcre,$dcwr,$sbre,$sbwr,$prre,$prwr,$vtre,$vtwr,$ihre,$ihwr);
			
					if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Updated');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Updated');
						}
					redirect('Dashboard/useraccess_update_form','refresh');
				//}
		}
	}  
	 public function user_insert_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='User Info Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['allf']=$this->Admin->factory_list();
		$data['pul']=$this->Admin->parentdesignation_list();
		$data['rul']=$this->Admin->religion_list();
		$data['mul']=$this->Admin->maritualstatus_list();
		$data['gul']=$this->Admin->gender_list();
		$data['uul']=$this->Admin->usertype_list();
		$data['sl']=$this->Admin->servicetype_list();
		$this->load->view('admin/user_insert_form',$data);
				
	 }
	 public function user_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			//$factoryid=$this->form_validation->set_rules('factoryid', 'Factory Name', 'required');
//			$divisionid=$this->form_validation->set_rules('divisionid', 'Division Name', 'required');
//			$departmentid=$this->form_validation->set_rules('departmentid', 'Department Name', 'required');
//			$sectionid=$this->form_validation->set_rules('sectionid', 'Section Name', 'required');
//			$subsectionid=$this->form_validation->set_rules('subsectionid', 'Sub Section Name', 'required');
//			$location=$this->form_validation->set_rules('location', 'location Name', 'required');
//			$ename=$this->form_validation->set_rules('ename', 'User Name', 'required');
//			$bname=$this->form_validation->set_rules('bname', 'User Name', 'required');
//			$parentdesignationid=$this->form_validation->set_rules('parentdesignation', 'Designation', 'required');
//			$childdesignationid=$this->form_validation->set_rules('childdesignation', 'Designation', 'required');
//			$religion=$this->form_validation->set_rules('religion', 'Religion', 'required');
//			$maritual=$this->form_validation->set_rules('maritual', 'Maritual', 'required');
//			$hdistrict=$this->form_validation->set_rules('hdistrict', 'Home District', 'required');
//			$epermanentaddress=$this->form_validation->set_rules('epermanenraddress', 'Permanent Address', 'required');
//			$bpermanentaddress=$this->form_validation->set_rules('bpermanenraddress', 'Permanent Address', 'required');
//			$epresentaddress=$this->form_validation->set_rules('epresentaddress', 'Present Address', 'required');
//			$bpresentaddress=$this->form_validation->set_rules('bpresentaddress', 'Present Address', 'required');
//			$nid=$this->form_validation->set_rules('nid', 'National ID', 'required');
//			$bloodgroup=$this->form_validation->set_rules('bloodgroup', 'Blood Group', 'required');
//			$gender=$this->form_validation->set_rules('gender', 'Gender', 'required');
//			$salary=$this->form_validation->set_rules('salary', 'Salary', 'required');
//			$efficiency=$this->form_validation->set_rules('efficiency', 'Efficiency', 'required');
//			$imark=$this->form_validation->set_rules('imark', 'Identification Mark', 'required');
//			$oemail=$this->form_validation->set_rules('oemail', 'Office Email', 'required');
//			$pemail=$this->form_validation->set_rules('pemail', 'Personal Email', 'required');
//			$pmobile=$this->form_validation->set_rules('pmobile', 'Personal Mobile', 'required');
//			$emobile=$this->form_validation->set_rules('emobile', 'Emergency Mobile', 'required');
//			$userid=$this->form_validation->set_rules('userid', 'User ID', 'required');
//			$usertypeid=$this->form_validation->set_rules('usertypeid', 'User type', 'required');
			 
			
			
			//if($this->form_validation->run()==FALSE)
//				{
//					$this->user_insert_form();
//				}
//			else
//				{
					$factoryid=$this->input->post('factoryid');
					$divisionid=$this->input->post('divisionid');
					$departmentid=$this->input->post('departmentid');
					$sectionid=$this->input->post('sectionid');
					$subsectionid=$this->input->post('subsectionid');
					$location=$this->input->post('location');
					$ename=$this->input->post('ename');
					$bname=$this->input->post('bname');
					$parentdesignationid=$this->input->post('parentdesignationid');
					$childdesignationid=$this->input->post('childdesignationid');
					$religion=$this->input->post('religion');
					$maritual=$this->input->post('maritual');
					$dobdate=$this->input->post('dobdate');
					$dojdate=$this->input->post('dojdate');
					$hdistrict=$this->input->post('hdistrict');
					$epermanentaddress=$this->input->post('epermanentaddress');
					$bpermanentaddress=$this->input->post('bpermanentaddress');
					$epresentaddress=$this->input->post('epresentaddress');
					$bpresentaddress=$this->input->post('bpresentaddress');
					$nid=$this->input->post('nid');
					$bloodgroup=$this->input->post('bloodgroup');
					$gender=$this->input->post('gender');
					$salary=$this->input->post('salary');
					$efficiency=$this->input->post('efficiency');
					$imark=$this->input->post('imark');
					$oemail=$this->input->post('oemail');
					$pemail=$this->input->post('pemail');
					$pmobile=$this->input->post('pmobile');
					$emobile=$this->input->post('emobile');
					$usertypeid=$this->input->post('usertypeid');
					$servicetypeid=$this->input->post('servicetypeid');
					$userid=$this->input->post('userid');
					$password=$this->input->post('password');
					$config['upload_path']          = APPPATH. '../assets/uploads/users';
					$config['allowed_types']        = 'jpg|jpeg|png|bmp';
					$config['max_size']             = 10000;
					$this->load->library('upload', $config);
					$this->upload->do_upload('pic_file');
					//if ( ! $this->upload->do_upload('pic_file')){
//                $error = array('error' => $this->upload->display_errors());
//                $this->load->view('upload_form', $error);
//            }else{
                //file is uploaded successfully
                //now get the file uploaded data 
                $upload_data = $this->upload->data();
                //get the uploaded file name
                $pic_file= $upload_data['file_name'];
				$pic_file;
				
				$ins=$this->Admin->user_insert($factoryid,$divisionid,$departmentid,$sectionid,$subsectionid,$location,$ename,$bname,$parentdesignationid,$childdesignationid,$religion,$maritual,$dobdate,$dojdate,$hdistrict,$epermanentaddress,$bpermanentaddress,$epresentaddress,$bpresentaddress,$nid,$bloodgroup,$gender,$salary,$efficiency,$imark,$oemail,$pemail,$pmobile,$emobile,$usertypeid,$servicetypeid,$userid,$password,$pic_file);
            //}
			//if ( ! $this->upload->do_upload('pic_file')){
				//$error = array('error' => $this->upload->display_errors());
				//$this->load->view('upload_form', $error);
			//}
			//$upload_data = $this->upload->data();
			//echo $pic_file = $upload_data['file_name'];
					
					//$ins=$this->Admin->user_insert($factoryid,$divisionid,$departmentid,$sectionid,$subsectionid,$location,$ename,$bname,$parentdesignationid,$childdesignationid,$religion,$maritual,$dobdate,$dojdate,$hdistrict,$epermanentaddress,$bpermanentaddress,$epresentaddress,$bpresentaddress,$nid,$bloodgroup,$gender,$salary,$efficiency,$imark,$oemail,$pemail,$pmobile,$emobile,$usertype,$userid,$password,$pic_file);
			
					if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/user_insert_form','refresh');
				//}
		}
	}
	 public function user_list()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='User List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['fl']=$this->Admin->factory_list();
		$this->load->view('admin/user_list',$data);
				
	 }
	 public function factorywise_user_list()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='User List';
		$factoryid = $this->input->post('factoryid');
		$data['ul']=$this->Admin->factorywise_user_list($factoryid);
		$this->load->view('admin/factorywise_user_list',$data);
				
	 }
	  
	  public function user_imglist_up()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='User Info Update';
		$userid= $this->uri->segment(3);
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		//$data['alld']=$this->Admin->empdept_list();
		//$data['opskill']=$this->Admin->opskill($opid);
		$data['elup']=$this->Admin->user_list_up($userid);
		$this->load->view('admin/user_imglist_up',$data);
	 }
	 public function eimglup()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			$userid=$this->input->post('userid');
			$config['upload_path']          = APPPATH. '../assets/uploads/users';
					$config['allowed_types']        = 'jpg|jpeg|png|bmp';
					$config['max_size']             = 10000;
					$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('pic_file')){
				$error = array('error' => $this->upload->display_errors());
				//$this->load->view('upload_form', $error);
			}
			$upload_data = $this->upload->data();
			$pic_file = $upload_data['file_name'];
			$ins=$this->Admin->eimglup($userid,$pic_file);
			if($ins==TRUE)
				{
					$this->session->set_flashdata('Successfully','Successfully Updated');
				}
			else
				{
					$this->session->set_flashdata('Successfully','Failed To Updated');
				}
					redirect('Dashboard/user_list','refresh');
				
		}
	 }
	 public function user_list_up()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='User Info Update';
		$userid= $this->uri->segment(3);
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['fl']=$this->Admin->factory_list();
		$data['dl']=$this->Admin->division_list();
		$data['pul']=$this->Admin->parentdesignation_list();
		$data['rul']=$this->Admin->religion_list();
		$data['mul']=$this->Admin->maritualstatus_list();
		$data['gul']=$this->Admin->gender_list();
		$data['uul']=$this->Admin->usertype_list();
		$data['sl']=$this->Admin->servicetype_list();
		$data['usl']=$this->Admin->userstatus_list();
		$data['ulup']=$this->Admin->user_list_up($userid);
		$this->load->view('admin/user_list_up',$data);
	 }
	 public function ulup()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			$userid=$this->input->post('userid');
			$tuserid=$this->input->post('tuserid');
			$factoryid=$this->input->post('factoryid');
			$divisionid=$this->input->post('divisionid');
					$departmentid=$this->input->post('departmentid');
					$sectionid=$this->input->post('sectionid');
					$subsectionid=$this->input->post('subsectionid');
					$location=$this->input->post('location');
					$ename=$this->input->post('ename');
					$bname=$this->input->post('bname');
					$parentdesignationid=$this->input->post('parentdesignationid');
					$childdesignationid=$this->input->post('childdesignationid');
					$religion=$this->input->post('religion');
					$maritual=$this->input->post('maritual');
					$dobdate=$this->input->post('dobdate');
					$dojdate=$this->input->post('dojdate');
					$hdistrict=$this->input->post('hdistrict');
					$epermanentaddress=$this->input->post('epermanentaddress');
					$bpermanentaddress=$this->input->post('bpermanentaddress');
					$epresentaddress=$this->input->post('epresentaddress');
					$bpresentaddress=$this->input->post('bpresentaddress');
					$nid=$this->input->post('nid');
					$bloodgroup=$this->input->post('bloodgroup');
					$gender=$this->input->post('gender');
					$salary=$this->input->post('salary');
					$efficiency=$this->input->post('efficiency');
					$imark=$this->input->post('imark');
					$oemail=$this->input->post('oemail');
					$pemail=$this->input->post('pemail');
					$pmobile=$this->input->post('pmobile');
					$emobile=$this->input->post('emobile');
					$password=$this->input->post('password');
					$usertypeid=$this->input->post('usertypeid');
					$servicetypeid=$this->input->post('servicetypeid');
					$userstatusid=$this->input->post('userstatusid');
					$indate=$this->input->post('indate');
					//Active OR Inactive
					if($userstatusid==1 || $userstatusid==2)
					{
						$ins=$this->Admin->ulup($factoryid,$divisionid,$departmentid,$sectionid,$subsectionid,$location,$ename,$bname,$parentdesignationid,$childdesignationid,$religion,$maritual,$dobdate,$dojdate,$hdistrict,$epermanentaddress,$bpermanentaddress,$epresentaddress,$bpresentaddress,$nid,$bloodgroup,$gender,$salary,$efficiency,$imark,$oemail,$pemail,$pmobile,$emobile,$usertypeid,$servicetypeid,$userstatusid,$userid,$password,$indate);
						//if($ins==TRUE)
//				{
//					$this->session->set_flashdata('Successfully','Successfully Updated');
//				}
//			else
//				{
//					$this->session->set_flashdata('Successfully','Failed To Updated');
//				}
					//redirect('Dashboard/user_list','refresh');
					}
					//Transfer
					elseif($userstatusid==3)
					{
						$ins=$this->Admin->tuser_insert($factoryid,$divisionid,$departmentid,$sectionid,$subsectionid,$location,$ename,$bname,$parentdesignationid,$childdesignationid,$religion,$maritual,$dobdate,$dojdate,$hdistrict,$epermanentaddress,$bpermanentaddress,$epresentaddress,$bpresentaddress,$nid,$bloodgroup,$gender,$salary,$efficiency,$imark,$oemail,$pemail,$pmobile,$emobile,$usertypeid,$servicetypeid,$userid,$tuserid,$password);
						//if($ins==TRUE)
//				{
//					$this->session->set_flashdata('Successfully','Successfully Updated');
//				}
//			else
//				{
//					$this->session->set_flashdata('Successfully','Failed To Updated');
//				}
					//redirect('Dashboard/user_list','refresh');
					}
			redirect('Dashboard/user_list','refresh');
				
		}
	 }
	 public function user_cv_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='User CV Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		
		$this->load->view('admin/user_cv_form',$data);
				
	 }
	 public function usercv_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			$userid=$this->form_validation->set_rules('userid', 'User ID', 'required');

			 
			
			
			if($this->form_validation->run()==FALSE)
				{
					$this->user_insert_form();
				}
			else
				{
					
					$userid=$this->input->post('userid');
					$config['upload_path']          = APPPATH. '../assets/uploads/users_cv';
					$config['allowed_types']        = 'jpg|jpeg|png|pdf';
					$config['max_size']             = 10000;
					$this->load->library('upload', $config);
					$this->upload->do_upload('pic_file');
				}
				$upload_data = $this->upload->data();
               	$pic_file= $upload_data['file_name'];
				$ins=$this->Admin->usercv_insert($userid,$pic_file);
            	if($ins==TRUE)
					{
						$this->session->set_flashdata('Successfully','Successfully Inserted');
					}
				else
					{
						$this->session->set_flashdata('UnSuccessfully','Failed To Inserted');
					}
			redirect('Dashboard/user_cv_form','refresh');
				
		}
	}
	public function user_profile()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='User Profile';
		$userid= $this->uri->segment(3);
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['up']=$this->Admin->user_profile($userid);
		$this->load->view('admin/user_profile',$data);
		
	}
	 public function createtask_insert_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Group Create Task';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['allf']=$this->Admin->factory_list();
		$data['alld']=$this->Admin->division_list();
		$data['allty']=$this->Admin->tasktype_list();
		$this->load->view('admin/createtask_insert_form',$data);
				
	 }
	 public function createtask_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			$taskname=$this->form_validation->set_rules('taskname', 'Task Name', 'required');
			
			
			if($this->form_validation->run()==FALSE)
				{
					$this->createtask_insert_form();
				}
			else
				{
					$userid=$this->input->post('userid');
					//$factoryid=$this->input->post('factoryid');
//					$divisionid=$this->input->post('divisionid');
//					$departmentid=$this->input->post('departmentid');
//					$sectionid=$this->input->post('sectionid');
//					$subsectionid=$this->input->post('subsectionid');
					$tasktypeid=$this->input->post('tasktypeid');
					$taskname=$this->input->post('taskname');
					$taskdescription=$this->input->post('taskdescription');
					$createdate=$this->input->post('createdate');
					$deadline=$this->input->post('deadline');
					$ins=$this->Admin->createtask_insert($userid,$tasktypeid,$taskname,$taskdescription,$createdate,$deadline);
			
					if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/task_list','refresh');
				}
		}
	}
	public function screatetask_insert_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Single Create Task';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['allf']=$this->Admin->factory_list();
		$data['alld']=$this->Admin->division_list();
		$data['allty']=$this->Admin->tasktype_list();
		$this->load->view('admin/screatetask_insert_form',$data);
				
	 }
	public function screatetask_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			$taskname=$this->form_validation->set_rules('taskname', 'Task Name', 'required');
			
			
			if($this->form_validation->run()==FALSE)
				{
					$this->screatetask_insert_form();
				}
			else
				{
					$userid=$this->input->post('userid');
					//$factoryid=$this->input->post('factoryid');
//					$divisionid=$this->input->post('divisionid');
//					$departmentid=$this->input->post('departmentid');
//					$sectionid=$this->input->post('sectionid');
//					$subsectionid=$this->input->post('subsectionid');
					$tasktypeid=$this->input->post('tasktypeid');
					$auserid=$this->input->post('auserid');
					$taskname=$this->input->post('taskname');
					$taskdescription=$this->input->post('taskdescription');
					$createdate=$this->input->post('createdate');
					$deadline=$this->input->post('deadline');
					$config['upload_path']          = APPPATH. '../assets/uploads/task';
					$config['allowed_types']        = 'jpg|png|pdf|docx|doc|xls';
					$config['max_size']             = 10000;
					$this->load->library('upload', $config);
					 $this->upload->do_upload('pic_file');
					//if ( ! $this->upload->do_upload('pic_file')){
                //$error = array('error' => $this->upload->display_errors());
                //$this->load->view('upload_form', $error);
            //}else{
                //file is uploaded successfully
                //now get the file uploaded data 
                $upload_data = $this->upload->data();
                //get the uploaded file name
                $pic_file= $upload_data['file_name'];
				
					$ins=$this->Admin->screatetask_insert($userid,$tasktypeid,$auserid,$taskname,$taskdescription,$createdate,$deadline,$pic_file);
			
					if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/task_list','refresh');
				}
		}
	}
	public function task_list()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Task List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$userid=$this->session->userdata('userid');
		$usertype=$this->session->userdata('user_type');
		if($usertype==1)
		{
			$data['tl']=$this->Admin->task_list_all();
		}
		else
		{
		$data['tl']=$this->Admin->task_list($userid);
		}
		$this->load->view('admin/task_list',$data);
				
	 }
	 public function completed_task_list()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Completed Task List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$usertype=$this->session->userdata('user_type');
		$userid=$this->session->userdata('userid');
		if($usertype==1)
		{
			$data['tid']=$this->Admin->completed_task_list_all();
		}
		else
		{
		$data['tid']=$this->Admin->completed_task_list($userid);
		}
		$this->load->view('admin/completed_task_list',$data);
				
	 }
	 public function completed_task_list_user()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Completed Task List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$userid=$this->session->userdata('userid');
		$data['tid']=$this->Admin->completed_task_list_user($userid);
		$this->load->view('admin/completed_task_list',$data);
				
	 }
	public function task_details_update()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Task Assignee List';
		$createtaskid= $this->uri->segment(3);
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$ins=$this->Admin->task_details_update($createtaskid);
		if($ins==TRUE)
				{
					$this->session->set_flashdata('Successfully','Successfully Updated');
				}
			else
				{
					$this->session->set_flashdata('Successfully','Failed To Updated');
				}
					redirect('Dashboard/task_list','refresh');
		
		
	}
	public function task_assignee_list()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Task Assignee List';
		$data['createtaskid']= $this->uri->segment(3);
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['allf']=$this->Admin->factory_list();
		$this->load->view('admin/task_assignee_list',$data);
		
	}
	public function assignee_task_list_update()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Task Assignee List';
		$assigneetlid= $this->uri->segment(3);
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$ins=$this->Admin->assignee_task_list_update($assigneetlid);
		if($ins==TRUE)
				{
					$this->session->set_flashdata('Successfully','Successfully Updated');
				}
			else
				{
					$this->session->set_flashdata('Successfully','Failed To Updated');
				}
					redirect('Dashboard','refresh');
		
		
	}
	public function task_completed_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Task Assignee List';
		$data['assigneetlid']= $this->uri->segment(3);
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$this->load->view('admin/task_completed_form',$data);
		//$ins=$this->Admin->assignee_task_list_update_admin($assigneetlid);
//		if($ins==TRUE)
//				{
//					$this->session->set_flashdata('Successfully','Successfully Updated');
//				}
//			else
//				{
//					$this->session->set_flashdata('Successfully','Failed To Updated');
//				}
//					redirect('Dashboard/task_list','refresh');
		
		
	}
	public function task_completed_insert()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Task Assignee List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$assigneetlid = $this->input->post('assigneetlid');
		$rating = $this->input->post('rating');
		$comments = $this->input->post('comments');
		$completeddate= $this->input->post('completeddate');
		$ins=$this->Admin->task_completed_insert($assigneetlid,$rating,$comments,$completeddate);
		if($ins==TRUE)
				{
					$this->session->set_flashdata('Successfully','Successfully Updated');
				}
			else
				{
					$this->session->set_flashdata('Successfully','Failed To Updated');
				}
					redirect('Dashboard/task_list','refresh');
		
		
	}
	public function taskassignee_select()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Task Assignee List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['createtaskid'] = $this->input->post('createtaskid');
		$factoryid = $this->input->post('factoryid');
		$divisionid = $this->input->post('divisionid');
		$departmentid = $this->input->post('departmentid');
		$sectionid = $this->input->post('sectionid');
		$subsectionid = $this->input->post('subsectionid');
		$data['ts']=$this->Admin->taskassignee_select($factoryid,$divisionid,$departmentid,$sectionid,$subsectionid);
		$this->load->view('admin/taskassignee_select',$data);
	}
	public function taskassignee_select_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		$createtaskid=$this->input->post('createtaskid');
		$userid=$this->input->post('userid');
		for($i=0;$i<count($userid);$i++)
					{
						$data["createtaskid"]=$createtaskid[$i];
						$data["userid"]=$userid[$i];
						
						$ins=$this->Admin->taskassignee_select_insert($data);
						
					}
					
		
	    redirect('Dashboard/task_list','refresh');
				
		
	}
	public function task_details()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Task Assignee List';
		$createtaskid= $this->uri->segment(3);
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['td']=$this->Admin->task_details($createtaskid);
		$this->load->view('admin/task_details',$data);
		
	}
	public function task_details_individual_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Task Assignee List';
		$userid= $this->uri->segment(3);
		$createtaskid= $this->uri->segment(4);
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['tid']=$this->Admin->task_details_individual($userid,$createtaskid);
		$this->load->view('admin/task_details_individual_form',$data);
		
	}
	public function task_details_individual_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			$taskname=$this->form_validation->set_rules('taskname', 'Task Name', 'required');
			
			
			if($this->form_validation->run()==FALSE)
				{
					$this->task_details_individual_form();
				}
			else
				{
					
					$assignerid=$this->input->post('assignerid');
					$assigneeid=$this->input->post('assigneeid');
					$createtaskid=$this->input->post('createtaskid');
					$taskname=$this->input->post('taskname');
					$taskdescription=$this->input->post('taskdescription');
					$createdate=$this->input->post('createdate');
					$deadline=$this->input->post('deadline');
					
					$config['upload_path']          = APPPATH. '../assets/uploads/task';
					$config['allowed_types']        = 'jpg|png|pdf|docx|doc|xls';
					$config['max_size']             = 10000;
					$this->load->library('upload', $config);
					 $this->upload->do_upload('pic_file');
					//if ( ! $this->upload->do_upload('pic_file')){
                //$error = array('error' => $this->upload->display_errors());
                //$this->load->view('upload_form', $error);
            //}else{
                //file is uploaded successfully
                //now get the file uploaded data 
                $upload_data = $this->upload->data();
                //get the uploaded file name
                $pic_file= $upload_data['file_name'];
				$pic_file;
					$ins=$this->Admin->task_details_individual_insert($assignerid,$assigneeid,$createtaskid,$taskname,$taskdescription,$createdate,$deadline,$pic_file);
			//}
			
					if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/task_list','refresh');
				}
		}
	}
	public function assignee_task_list()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Task Assignee List';
		$userid= $this->uri->segment(3);
		$createtaskid= $this->uri->segment(4);
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['tid']=$this->Admin->assignee_task_list($userid,$createtaskid);
		$this->load->view('admin/assignee_task_list',$data);
		
	}
	public function task_comments_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Task Comments Form';
		$assignerid= $this->uri->segment(3);
		$createtaskid= $this->uri->segment(4);
		$assigneeid= $this->uri->segment(5);
		$assigneetlid= $this->uri->segment(6);
		$data['assignerid1']= $this->uri->segment(3);
		$data['createtaskid1']= $this->uri->segment(4);
		$data['userid1']= $this->uri->segment(5);
		$data['assigneetlid1']= $this->uri->segment(6);
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['tc']=$this->Admin->task_comments_list($assignerid,$createtaskid,$assigneeid,$assigneetlid);
		$this->load->view('admin/task_comments_form',$data);
				
	 }
	 public function task_comments_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		$assignerid=$this->input->post('assignerid');
		$createtaskid=$this->input->post('createtaskid');
		$assigneeid=$this->input->post('assigneeid');
		$assigneetlid=$this->input->post('assigneetlid');
		$taskcomments=$this->input->post('taskcomments');
		$commentsuserid=$this->input->post('commentsuserid');
		$ins=$this->Admin->task_comments_insert($assignerid,$createtaskid,$assigneeid,$assigneetlid,$taskcomments,$commentsuserid);
	}
	public function task_comments_show()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		$assignerid=$this->input->post('assignerid');
		$createtaskid=$this->input->post('createtaskid');
		$assigneeid=$this->input->post('assigneeid');
		$assigneetlid=$this->input->post('assigneetlid');
		$ins=$this->Admin->task_comments_list($assignerid,$createtaskid,$assigneeid,$assigneetlid);
	}
	public function user_task_list()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='User Task List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$usertype=$this->session->userdata('user_type');
		$userid=$this->session->userdata('userid');
		if($usertype==1)
		{
			$data['utl']=$this->Admin->user_task_list_all();
		}
		else
		{
		$data['utl']=$this->Admin->user_task_list($userid);
		}
		$this->load->view('admin/user_task_list',$data);
				
	 }
	public function user_task_complete_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='User Completed Task';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$this->load->view('admin/user_task_complete_form',$data);
				
	 }
	 public function user_allontask()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Task Assignee List';
		$userid= $this->uri->segment(3);
		
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['tid']=$this->Admin->user_allontask($userid);
		$this->load->view('admin/user_allontask',$data);
		
	}
	 public function date_wise_total_completed_task_list_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Date Wise Completed Task';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$this->load->view('admin/date_wise_total_completed_task_list_form',$data);
				
	 }
	 public function date_wise_total_task_complete_list()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Date Wise Completed Task';
		//$this->load->view('admin/head',$data);
//		$this->load->view('admin/toprightnav');
//		$this->load->view('admin/leftmenu');
		$pd = $this->input->post('pd');
		$wd = $this->input->post('wd');
		$data['utl']=$this->Admin->date_wise_total_task_complete_list($pd,$wd);
		
		$this->load->view('admin/date_wise_total_completed_task',$data);
	 }
	 public function user_task_complete_list()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='User Task Complete List';
		//$this->load->view('admin/head',$data);
//		$this->load->view('admin/toprightnav');
//		$this->load->view('admin/leftmenu');
		$userid = $this->input->post('userid');
		$data['utl']=$this->Admin->user_task_complete_list($userid);
		
		$this->load->view('admin/user_task_complete',$data);
				
	 }
	 public function user_task_list_summary()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='User Task Complete List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$userid= $this->uri->segment(3);
		$data['utl']=$this->Admin->user_task_complete_list($userid);
		
		$this->load->view('admin/user_task_list_summary',$data);
				
	 }
	 public function licensename_insert_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='License Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		//$data['allf']=$this->Admin->factory_list();
//		$data['alld']=$this->Admin->division_list();
		$data['alllt']=$this->Admin->licensetype_list();
		$this->load->view('admin/licensename_insert_form',$data);
				
	 }
	public function licensename_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			$licensename=$this->form_validation->set_rules('licensename', 'License Name', 'required');
			
			
			if($this->form_validation->run()==FALSE)
				{
					$this->licensename_insert_form();
				}
			else
				{
					
					$licensename=$this->input->post('licensename');
					$licensetypeid=$this->input->post('licensetypeid');
					
					$config['upload_path']          = APPPATH. '../assets/uploads/license';
					$config['allowed_types']        = 'jpg|png|jpeg';
					$config['max_size']             = 10000;
					$this->load->library('upload', $config);
					 $this->upload->do_upload('pic_file');
					//if ( ! $this->upload->do_upload('pic_file')){
                //$error = array('error' => $this->upload->display_errors());
                //$this->load->view('upload_form', $error);
            //}else{
                //file is uploaded successfully
                //now get the file uploaded data 
                $upload_data = $this->upload->data();
                //get the uploaded file name
                $pic_file= $upload_data['file_name'];
				$pic_file;
					$ins=$this->Admin->licensename_insert($licensename,$licensetypeid,$pic_file);
			//}
			
					if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/licensename_insert_form','refresh');
				}
		}
	}
	public function licensename_list()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='License List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		
		$data['ll']=$this->Admin->licensename_list();
		
		$this->load->view('admin/licensename_list',$data);
				
	 }
	public function license_insert_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='License Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['allf']=$this->Admin->factory_list();
		$data['ln']=$this->Admin->licensename_list();
		$data['alld']=$this->Admin->division_list();
		$data['alllt']=$this->Admin->licensetype_list();
		$this->load->view('admin/license_insert_form',$data);
				
	 }
	 public function license_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			$factoryid=$this->form_validation->set_rules('factoryid', 'Factory Name', 'required');
			
			
			if($this->form_validation->run()==FALSE)
				{
					$this->license_insert_form();
				}
			else
				{
					//$userid=$this->input->post('userid');
					$factoryid=$this->input->post('factoryid');
					$divisionid=$this->input->post('divisionid');
					$departmentid=$this->input->post('departmentid');
					$licensetypeid=$this->input->post('licensetypeid');
					//$subsectionid=$this->input->post('subsectionid');
					$licensename=$this->input->post('licensename');
					$reauthority=$this->input->post('reauthority');
					$issuedate=$this->input->post('issuedate');
					$renewaldate=$this->input->post('renewaldate');
					$processtime=$this->input->post('processtime');
					$regulatoryfee=$this->input->post('regulatoryfee');
					$misexp=$this->input->post('misexp');
					$config['upload_path']          = APPPATH. '../assets/uploads/license';
					$config['allowed_types']        = 'jpg|png|pdf|docx|doc|xls';
					$config['max_size']             = 10000;
					$this->load->library('upload', $config);
					 $this->upload->do_upload('pic_file');
					//if ( ! $this->upload->do_upload('pic_file')){
                //$error = array('error' => $this->upload->display_errors());
                //$this->load->view('upload_form', $error);
            //}else{
                //file is uploaded successfully
                //now get the file uploaded data 
                $upload_data = $this->upload->data();
                //get the uploaded file name
                $pic_file= $upload_data['file_name'];
				$pic_file;
					$ins=$this->Admin->license_insert($factoryid,$divisionid,$departmentid,$licensetypeid,$licensename,$reauthority,$issuedate,$renewaldate,$processtime,$regulatoryfee,$misexp,$pic_file);
			//}
			
					if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/license_insert_form','refresh');
				}
		}
	}
	public function license_list()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='License List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$factoryid=$this->session->userdata('factoryid');
		if($factoryid=='HO')
		{
		$data['ll']=$this->Admin->license_list();
		$data['ls']=$this->Admin->license_susummarylist();
		}
		else
		{
			$data['ll']=$this->Admin->factorywise_license_list($factoryid);
			$data['ls']=$this->Admin->factorywise_license_susummarylist($factoryid);
		}
		$this->load->view('admin/license_list',$data);
				
	 }
	 public function license_list_up()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='License Info Update';
		$licenseid= $this->uri->segment(3);
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['fl']=$this->Admin->factory_list();
		
		$data['llup']=$this->Admin->license_list_up($licenseid);
		$this->load->view('admin/license_list_up',$data);
	 }
	 public function licenselup()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			//$userid=$this->input->post('userid');
					$licenseid=$this->input->post('licenseid');
					$factoryid=$this->input->post('factoryid');
					//$divisionid=$this->input->post('divisionid');
					//$departmentid=$this->input->post('departmentid');
					//$sectionid=$this->input->post('sectionid');
					//$subsectionid=$this->input->post('subsectionid');
					//$licensename=$this->input->post('licensename');
					$reauthority=$this->input->post('reauthority');
					$issuedate=$this->input->post('issuedate');
					$renewaldate=$this->input->post('renewaldate');
					$processtime=$this->input->post('processtime');
					$regulatoryfee=$this->input->post('regulatoryfee');
					$misexp=$this->input->post('misexp');
			$ins=$this->Admin->licenselup($licenseid,$factoryid,$reauthority,$issuedate,$renewaldate,$processtime,$regulatoryfee,$misexp);
			if($ins==TRUE)
				{
					$this->session->set_flashdata('Successfully','Successfully Updated');
				}
			else
				{
					$this->session->set_flashdata('Successfully','Failed To Updated');
				}
					redirect('Dashboard/license_list','refresh');
				
		}
	 }
	 public function licensetype_insert_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='User Type Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$this->load->view('admin/licensetype_insert_form',$data);
				
	 }
	 public function licensetype_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			$licensetype=$this->form_validation->set_rules('licensetype', 'License type', 'required');
			 
			
			
			if($this->form_validation->run()==FALSE)
				{
					$this->licensetype_insert_form();
				}
			else
				{
					$licensetype=$this->input->post('licensetype');
					
					
					$ins=$this->Admin->licensetype_insert($licensetype);
			
					if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/licensetype_insert_form','refresh');
				}
		}
	}
	public function licensetype_list()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='User type List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['ul']=$this->Admin->licensetype_list();
		$this->load->view('admin/licensetype_list',$data);
				
	 }
	 public function licensefile_list_up()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='User Info Update';
		$licenseid= $this->uri->segment(3);
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		//$data['alld']=$this->Admin->empdept_list();
		//$data['opskill']=$this->Admin->opskill($opid);
		$data['elup']=$this->Admin->license_list_up($licenseid);
		$this->load->view('admin/licensefile_up',$data);
	 }
	 public function licensefilelup()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			$licenseid=$this->input->post('licenseid');
			$config['upload_path']          = APPPATH. '../assets/uploads/license';
					$config['allowed_types']        = 'jpg|jpeg|png|pdf';
					$config['max_size']             = 10000;
					$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('pic_file')){
				$error = array('error' => $this->upload->display_errors());
				//$this->load->view('upload_form', $error);
			}
			$upload_data = $this->upload->data();
			$pic_file = $upload_data['file_name'];
			$pic_file =  str_replace(' ', '_', $pic_file);
			$ins=$this->Admin->licensefilelup($licenseid,$pic_file);
			if($ins==TRUE)
				{
					$this->session->set_flashdata('Successfully','Successfully Updated');
				}
			else
				{
					$this->session->set_flashdata('Successfully','Failed To Updated');
				}
					redirect('Dashboard/license_list','refresh');
				
		}
	 }
	public function send(){
		$this->load->database();
		
		$this->load->model('Admin');
        // Load PHPMailer library
        $this->load->library('phpmailer_lib');
        
        // PHPMailer object
        $mail = $this->phpmailer_lib->load();
        
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host     = 'mail.babylonit.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'hris@babylonit.com';
        $mail->Password = 'Hris@babylon';
        $mail->SMTPSecure = 'ssl';
        $mail->Port     = 465;
        
        $mail->setFrom('hris@babylonit.com', 'Test');
        //$mail->addReplyTo('info@example.com', 'Test');
        
        // Add a recipient
        $mail->addAddress('mushfeq.jobs@gmail.com');
        
        // Add cc or bcc 
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');
        
        // Email subject
        $mail->Subject = 'License Expire Notification';
        
        // Set email format to HTML
        $mail->isHTML(true);
        
        
		$sql1="SELECT DATEDIFF(renewaldate,CURDATE()) AS remaining,factory.factoryid,licensename,issuedate,renewaldate FROM license
		
		JOIN factory ON factory.factoryid=license.factoryid
		JOIN division ON division.divisionid=license.divisionid 
		JOIN department ON department.deptid=license.departmentid";
		$query1=$this->db->query($sql1);
		$result=$query1->result_array();
		$fac= array();
		$lname = array();
		$issu = array();
		$rene = array();
		$re = array();
		foreach($result as $row)
		{
			if($row['remaining'] < 60)
			{
		$fac[] =$row['factoryid'];
		$lname[] =$row['licensename'];
		$issu[] =$row['issuedate'];
		$rene[] =$row['renewaldate'];
		$re[] =$row['remaining'];
			}
		}
		
		$fac=implode(' <br/>', $fac);
		$lname=implode(' <br/>', $lname);
		$issu=implode(' <br/>', $issu);
		$rene=implode(' <br/>', $rene);
		$re=implode('<br/> ', $re);
		
		
		
		
		// Email body content
        $mailContent = "<h1>License Tracker</h1>".
		"<table id='tableData' class='table table-hover table-bordered'>
		<tr style='border: 1px solid #000000'>
		<th style='border: 1px solid #000000'>Factory</th>
		<th style='border: 1px solid #000000'>Name</th>
		<th style='border: 1px solid #000000'>Issue Date</th>
		<th style='border: 1px solid #000000'>Renewal Date</th>
		<th style='border: 1px solid #000000'>Remaining</th>
		</tr>
		<tr style='border: 1px solid #000000'>
		<td style='border: 1px solid #000000'>".$fac."</td>
		<td style='border: 1px solid #000000'>".$lname."</td>
		<td style='border: 1px solid #000000'>".$issu."</td>
		<td style='border: 1px solid #000000'>".$rene."</td>
		<td style='border: 1px solid #000000'>".$re."</td>
		</tr></table>";
        $mail->Body = $mailContent;
        
        // Send email
        if(!$mail->send()){
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
			
        }else{
            echo 'Message has been sent';
        }
			
		
    }
	public function notice_album_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Notice Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['allf']=$this->Admin->factory_list();
		$this->load->view('admin/notice_album_form',$data);
				
	 }
	public function notice_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			
			$unit=$this->form_validation->set_rules('unit', 'Unit', 'required');
			$noticename=$this->form_validation->set_rules('noticename', 'Notice Name', 'required');
			
			if($this->form_validation->run()==FALSE)
				{
					$this->notice_album_form();
				}
			else
				{
					
					$unit=$this->input->post('unit');
					$noticename=$this->input->post('noticename');
					
					$config['upload_path']          = APPPATH. '../assets/uploads/notice';
					$config['allowed_types']        = 'jpg|png|pdf|doc|docx';
					$config['max_size']             = 10000;
					$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('pic_file')){
				$error = array('error' => $this->upload->display_errors());
				//$this->load->view('upload_form', $error);
			}
					$upload_data = $this->upload->data();
					$pic_file = $upload_data['file_name'];
					$ins=$this->Admin->notice_insert($pic_file,$unit,$noticename);
			
					if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/notice_album_form','refresh');
				}
		}
	}
	public function notice_list()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Notice List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['ul']=$this->Admin->notice_list();
		$this->load->view('admin/notice_list',$data);
				
	 }
	public function policy_album_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Policy Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['allf']=$this->Admin->factory_list();
		//$data['alld']=$this->Admin->department_list();
//		$data['allp']=$this->Admin->process_list();
//		$data['ul']=$this->Admin->user_list();
		$this->load->view('admin/policy_album_form',$data);
				
	 }
	public function policy_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			
			$unit=$this->form_validation->set_rules('unit', 'Unit', 'required');
			$policyname=$this->form_validation->set_rules('policyname', 'Policy Name', 'required');
			$pic_file=$this->form_validation->set_rules('pic_file', 'File', 'required');
			if($this->form_validation->run()==FALSE)
				{
					$this->policy_album_form();
				}
			else
				{
					
					$unit=$this->input->post('unit');
					
					$policyname=$this->input->post('policyname');
					
					$config['upload_path']          = APPPATH. '../assets/uploads/policy';
					$config['allowed_types']        = 'jpg|png|jpeg|doc|docx|pdf';
					$config['max_size']             = 5000000;
					$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('pic_file')){
				$error = array('error' => $this->upload->display_errors());
				//$this->load->view('upload_form', $error);
			}
					$upload_data = $this->upload->data();
					$pic_file = $upload_data['file_name'];
					$pic_file =  str_replace(' ', '_', $pic_file);
					$ins=$this->Admin->policy_insert($pic_file,$unit,$policyname);
			
					if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/policy_album_form','refresh');
				}
		}
	}
   public function policy_list()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Policy List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['ul']=$this->Admin->policy_list();
		$this->load->view('admin/policy_list',$data);
				
	 }
  public function event_album_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Event Info Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		//$data['allf']=$this->Admin->factory_list();
//		$data['alld']=$this->Admin->department_list();
//		$data['allp']=$this->Admin->process_list();
//		$data['ul']=$this->Admin->user_list();
		$this->load->view('admin/event_album_form',$data);
				
	 }
   public function eventalbum_insert()
	{
		error_reporting(0);
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			$eventname=$this->form_validation->set_rules('eventname', 'Event Name', 'required');
			
			if($this->form_validation->run()==FALSE)
			{
				$this->event_album_form();
			}
			else
			{
				$eventname=$this->input->post('eventname');
				$edate=$this->input->post('edate');
				//$pic_file=$this->input->post('pic_file');
				
			$count = count($_FILES['pic_file']['name']);
				
				for($i=0;$i<$count;$i++)
					{
						$data["eventname"]=$eventname;
						$data["edate"]=$edate;
						
						$_FILES['file']['name'] = $_FILES['pic_file']['name'][$i];
         				$_FILES['file']['type'] = $_FILES['pic_file']['type'][$i];
						$_FILES['file']['tmp_name'] = $_FILES['pic_file']['tmp_name'][$i];
						//$_FILES['file']['error'] = $_FILES['pic_file']['error'][$i];
						$_FILES['file']['size'] = $_FILES['pic_file']['size'][$i];
 						$config['upload_path'] = APPPATH. '../assets/uploads/event'; 
          				$config['allowed_types'] = 'jpg|png|jpeg';
						$config['max_size'] = '5000000';
		  				$config['file_name'] = $_FILES['pic_file']['name'][$i];
						$config['file_name']=time().$config['file_name'];
						$config['file_name'] =  str_replace(' ', '_', $config['file_name']);
						$pic_file = $upload_data['pic_file'];
						$this->load->library('upload',$config); 
						$this->upload->initialize($config);
						$this->upload->do_upload('file');
						//if(!$this->upload->do_upload('file')){
						//$error = array('error' => $this->upload->display_errors());
            			$uploadData = $this->upload->data();
						$filename = $uploadData['file_name'];
						$data['totalFiles'][] = $filename;	
		  			//}
						
						//$data["pic_file"]=$pic_file;
						$data['pic_file']=$config['file_name'];
						//echo $data['pic_file'];
						
						$ins=$this->Admin->eventalbum_insert($data);
					}
					
			if($ins==TRUE)
			{
				$this->session->set_flashdata('Successfully','Successfully Inserted');
			}
			else
			{
				 $this->session->set_flashdata('Successfully','Failed To Inserted');
			}
			redirect('Dashboard/event_album_form','refresh');
			}
		}
	}
	 public function event_list()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Event Info';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['alle']=$this->Admin->event_list();

		$this->load->view('admin/event_list',$data);
				
	 }
	 public function event_list_show()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Event Info';
		//$this->load->view('admin/head',$data);
//		$this->load->view('admin/toprightnav');
//		$this->load->view('admin/leftmenu');
//$eventname= $this->uri->segment(3);
		$eventname=$this->input->post('eventname');
		$data['alle']=$this->Admin->event_list_show($eventname);

		$this->load->view('admin/event_list_show',$data);
				
	 }
	 public function training_material_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Training Material Info Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		//$data['allf']=$this->Admin->factory_list();
//		$data['alld']=$this->Admin->department_list();
//		$data['allp']=$this->Admin->process_list();
//		$data['ul']=$this->Admin->user_list();
		$data['ul']=$this->Admin->trainingtype_list();
		$data['ul1']=$this->Admin->trainingcategory_list();
		$this->load->view('admin/training_material_form',$data);
				
	 }
	 public function trainingmaterial_insert()
	{
		error_reporting(0);
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			$trainingname=$this->form_validation->set_rules('trainingname', 'Training Name', 'required');
			
			if($this->form_validation->run()==FALSE)
			{
				$this->training_material_form();
			}
			else
			{
				$trainingtypeid=$this->input->post('trainingtypeid');
				$trainingname=$this->input->post('trainingname');
				$trainingcategoryid=$this->input->post('trainingcategoryid');
				$tdate=$this->input->post('tdate');
				//$pic_file=$this->input->post('pic_file');
				
			$count = count($_FILES['pic_file']['name']);
				
				for($i=0;$i<$count;$i++)
					{
						$data["trainingtypeid"]=$trainingtypeid;
						$data["trainingname"]=$trainingname;
						$data["trainingcategoryid"]=$trainingcategoryid;
						$data["tdate"]=$tdate;
						
						$_FILES['file']['name'] = $_FILES['pic_file']['name'][$i];
         				$_FILES['file']['type'] = $_FILES['pic_file']['type'][$i];
						$_FILES['file']['tmp_name'] = $_FILES['pic_file']['tmp_name'][$i];
						$_FILES['file']['error'] = $_FILES['pic_file']['error'][$i];
						$_FILES['file']['size'] = $_FILES['pic_file']['size'][$i];
 						$config['upload_path'] = APPPATH. '../assets/uploads/training'; 
          				$config['allowed_types'] = 'mp4|pdf';
						$config['max_size'] = '157286400';
		  				$config['file_name'] = $_FILES['pic_file']['name'][$i];
						$config['file_name']=time().$config['file_name'];
						//$pic_file = $upload_data['pic_file'];
						$this->load->library('upload',$config); 
						$this->upload->initialize($config);
						if(!$this->upload->do_upload('file')){
						$error = array('error' => $this->upload->display_errors());
            			$uploadData = $this->upload->data();
						$filename = $uploadData['file_name'];
						$data['totalFiles'][] = $filename;	
		  			}
						
						//$data["pic_file"]=$pic_file;
						$data['pic_file']=$config['file_name'];
						//echo $data['pic_file'];
						
						$ins=$this->Admin->training_material_insert($data);
					}
					
			if($ins==TRUE)
			{
				$this->session->set_flashdata('Successfully','Successfully Inserted');
			}
			else
			{
				 $this->session->set_flashdata('Successfully','Failed To Inserted');
			}
			redirect('Dashboard/training_material_form','refresh');
			}
		}
	}
	 public function trainingtype_insert_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Training Type Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$this->load->view('admin/trainingtype_insert_form',$data);
				
	 }
	 public function trainingtype_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			$trainingtype=$this->form_validation->set_rules('trainingtype', 'Training type', 'required');
			 
			
			
			if($this->form_validation->run()==FALSE)
				{
					$this->trainingtype_insert_form();
				}
			else
				{
					$trainingtype=$this->input->post('trainingtype');
					
					
					$ins=$this->Admin->trainingtype_insert($trainingtype);
			
					if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/trainingtype_insert_form','refresh');
				}
		}
	}
	public function trainingtype_list()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Training type List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['ul']=$this->Admin->trainingtype_list();
		$this->load->view('admin/trainingtype_list',$data);
				
	 }
	 
	 public function trainingcategory_insert_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Training Category Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$this->load->view('admin/trainingcategory_insert_form',$data);
				
	 }
	 public function trainingcategory_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			$trainingtype=$this->form_validation->set_rules('trainingcategory', 'Training Category', 'required');
			 
			
			
			if($this->form_validation->run()==FALSE)
				{
					$this->trainingcategory_insert_form();
				}
			else
				{
					$trainingcategory=$this->input->post('trainingcategory');
					
					
					$ins=$this->Admin->trainingcategory_insert($trainingcategory);
			
					if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/trainingcategory_insert_form','refresh');
				}
		}
	}
	public function trainingcategory_list()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Training type List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['ul']=$this->Admin->trainingcategory_list();
		$this->load->view('admin/trainingcategory_list',$data);
				
	 }
	  public function trainingmaterial_list()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Training Info';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['ul']=$this->Admin->trainingmaterial_list();

		$this->load->view('admin/trainingmaterial_list',$data);
				
	 }
	 public function trainingmaterial_list_show()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Training Info';
		//$this->load->view('admin/head',$data);
//		$this->load->view('admin/toprightnav');
//		$this->load->view('admin/leftmenu');
//$eventname= $this->uri->segment(3);
		$trainingid=$assignerid= $this->uri->segment(3);
		$data['alle']=$this->Admin->trainingmaterial_list_show($trainingid);

		$this->load->view('admin/trainingmaterial_list_show',$data);
				
	 }
	 public function tasktype_insert_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Training Type Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$this->load->view('admin/tasktype_insert_form',$data);
				
	 }
	 public function tasktype_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			$tasktype=$this->form_validation->set_rules('tasktype', 'Task type', 'required');
			 
			
			
			if($this->form_validation->run()==FALSE)
				{
					$this->tasktype_insert_form();
				}
			else
				{
					$tasktype=$this->input->post('tasktype');
					
					
					$ins=$this->Admin->tasktype_insert($tasktype);
			
					if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/tasktype_insert_form','refresh');
				}
		}
	}
	public function tasktype_list()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Task type List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['ul']=$this->Admin->tasktype_list();
		$this->load->view('admin/tasktype_list',$data);
				
	 }
	 public function swot_insert_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='SWOT Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['allf']=$this->Admin->factory_list();
		$this->load->view('admin/swot_insert_form',$data);
				
	 }
	 public function swot_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('strength'))
		{
			$userid=$this->form_validation->set_rules('userid', 'user ID', 'required');
			if($this->form_validation->run()==FALSE)
				{
					$this->swot_insert_form();
				}
			else
				{
					$factoryid=$this->input->post('factoryid');
					$userid=$this->input->post('userid');
					$sdate=$this->input->post('sdate');
					$sbyid=$this->input->post('sbyid');
					$sdetails=$this->input->post('sdetails');
					for($i=0;$i<count($sbyid);$i++)
					{
						$data["factoryid"]=$factoryid;
						$data["userid"]=$userid;
						$data["sdate"]=$sdate[$i];
						$data["sbyid"]=$sbyid[$i];
						$data["sdetails"]=$sdetails[$i];
						$ins=$this->Admin->strength_insert($data);
					}
					if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/swot_insert_form','refresh');
				}
		}
		if($this->input->post('weakness'))
		{
			$userid=$this->form_validation->set_rules('userid', 'user ID', 'required');
			if($this->form_validation->run()==FALSE)
				{
					$this->swot_insert_form();
				}
			else
				{
					$factoryid=$this->input->post('factoryid');
					$userid=$this->input->post('userid');
					$wdate=$this->input->post('wdate');
					$wbyid=$this->input->post('wbyid');
					$wdetails=$this->input->post('wdetails');
					for($i=0;$i<count($wbyid);$i++)
					{
						$data["factoryid"]=$factoryid;
						$data["userid"]=$userid;
						$data["wdate"]=$wdate[$i];
						$data["wbyid"]=$wbyid[$i];
						$data["wdetails"]=$wdetails[$i];
						$ins=$this->Admin->weakness_insert($data);
					}
					if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/swot_insert_form','refresh');
				}
		}
		if($this->input->post('opportunity'))
		{
			$userid=$this->form_validation->set_rules('userid', 'user ID', 'required');
			if($this->form_validation->run()==FALSE)
				{
					$this->swot_insert_form();
				}
			else
				{
					$factoryid=$this->input->post('factoryid');
					$userid=$this->input->post('userid');
					$odate=$this->input->post('odate');
					$obyid=$this->input->post('obyid');
					$odetails=$this->input->post('odetails');
					for($i=0;$i<count($obyid);$i++)
					{
						$data["factoryid"]=$factoryid;
						$data["userid"]=$userid;
						$data["odate"]=$odate[$i];
						$data["obyid"]=$obyid[$i];
						$data["odetails"]=$odetails[$i];
						$ins=$this->Admin->opportunity_insert($data);
					}
					if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/swot_insert_form','refresh');
				}
		}
		if($this->input->post('threat'))
		{
			$userid=$this->form_validation->set_rules('userid', 'user ID', 'required');
			if($this->form_validation->run()==FALSE)
				{
					$this->swot_insert_form();
				}
			else
				{
					$factoryid=$this->input->post('factoryid');
					$userid=$this->input->post('userid');
					$tdate=$this->input->post('tdate');
					$tbyid=$this->input->post('tbyid');
					$tdetails=$this->input->post('tdetails');
					for($i=0;$i<count($tbyid);$i++)
					{
						$data["factoryid"]=$factoryid;
						$data["userid"]=$userid;
						$data["tdate"]=$tdate[$i];
						$data["tbyid"]=$tbyid[$i];
						$data["tdetails"]=$tdetails[$i];
						$ins=$this->Admin->threat_insert($data);
					}
					if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/swot_insert_form','refresh');
				}
		}
	}
	public function swot_pending_list()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='SWot List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['spl']=$this->Admin->swot_pending_list();
		$this->load->view('admin/swot_pending_list',$data);
				
	 }
	 public function swot_list_up()
	 {
		$this->load->database();
		$this->load->model('Admin');
		
		$sid=$this->uri->segment(3);
		$ins=$this->Admin->swot_list_up($sid);
		if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/swot_pending_list','refresh');
				
	 } 
	 public function swot_delete()
	 {
		$this->load->database();
		$this->load->model('Admin');
		
		$sid=$this->uri->segment(3);
		$ins=$this->Admin->swot_delete($sid);
		if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/swot_pending_list','refresh');
				
	 }
	 public function user_swot_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='User SWOT List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$this->load->view('admin/user_swot_form',$data);
				
	 }
	 public function user_swot_list()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='User SWOT List';
		
		$userid = $this->input->post('userid');
		$data['usl']=$this->Admin->user_swot_list($userid);
		$this->load->view('admin/user_swot_list',$data);
				
	 }
	 public function eobservation_insert_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Employee Observation Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['allf']=$this->Admin->factory_list();
		$this->load->view('admin/eobservation_insert_form',$data);
				
	 }
	 public function eobservation_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('observation'))
		{
			$userid=$this->form_validation->set_rules('userid', 'user ID', 'required');
			if($this->form_validation->run()==FALSE)
				{
					$this->eobservation_insert_form();
				}
			else
				{
					$factoryid=$this->input->post('factoryid');
					$userid=$this->input->post('userid');
					$odate=$this->input->post('odate');
					$obyid=$this->input->post('obyid');
					$odetails=$this->input->post('odetails');
					for($i=0;$i<count($obyid);$i++)
					{
						$data["factoryid"]=$factoryid;
						$data["userid"]=$userid;
						$data["odate"]=$odate[$i];
						$data["obyid"]=$obyid[$i];
						$data["odetails"]=$odetails[$i];
						$ins=$this->Admin->eobservation_insert($data);
					}
					if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/eobservation_insert_form','refresh');
				}
		}
	}
	public function eobservation_pending_list()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Employee Observation List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['spl']=$this->Admin->eobservation_pending_list();
		$this->load->view('admin/eobservation_pending_list',$data);
				
	 }
	public function eobservation_list_up()
	 {
		$this->load->database();
		$this->load->model('Admin');
		
		$oid=$this->uri->segment(3);
		$ins=$this->Admin->eobservation_list_up($oid);
		if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/eobservation_pending_list','refresh');
				
	 }
	 public function eobservation_delete()
	 {
		$this->load->database();
		$this->load->model('Admin');
		
		$oid=$this->uri->segment(3);
		$ins=$this->Admin->eobservation_delete($oid);
		if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/eobservation_pending_list','refresh');
				
	 }
	 public function euser_observation_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='User Observation List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$this->load->view('admin/euser_observation_form',$data);
				
	 }
	 public function euser_observation_list()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Employee Observation List';
		
		$userid = $this->input->post('userid');
		$data['usl']=$this->Admin->euser_observation_list($userid);
		$this->load->view('admin/euser_observation_list',$data);
				
	 }
	 
	 
	 
	
	public function user_import_excel()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Employee Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['allf']=$this->Admin->factory_list();
		$this->load->view('admin/user_import_excel',$data);
				
	 }
	
	
	
	 public function user_importexcel()
	{
		$this->load->database();
		$this->load->model('Admin');
    	if($this->input->post('upload') != NULL )
		{ 
       		$data = array(); 
       		if(!empty($_FILES['file']['name']))
			{ 
         		// Set preference 
        		$config['upload_path'] = 'assets/uploads/employee/csv/'; 
         		$config['allowed_types'] = 'csv'; 
         		$config['max_size'] = '1000'; // max_size in kb 
         		$config['file_name'] = $_FILES['file']['name'];
				// Load upload library 
         		$this->load->library('upload',$config); 
 				// File upload
        	 	if($this->upload->do_upload('file'))
			 		{ 
            			// Get data about the file
            			$uploadData = $this->upload->data(); 
           				$filename = $uploadData['file_name'];
						// Reading file
            			$file = fopen("assets/uploads/employee/csv/".$filename,"r");
            			$i = 0;
           				$headerLine = true;
            			while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) 
							{
               					$num = count($filedata );
			   					if($headerLine) 
									{ 
										$headerLine = false; 
									}
							
        						else 
									{
			   							$data['factoryid']=$filedata[0];
										$data['divisionid']=$filedata[1];
										$data['departmentid']=$filedata[2];
										$data['sectionid']=$filedata[3];
										$data['subsectionid']=$filedata[4];
										$data['location']=$filedata[5];
										$data['ename']=$filedata[6];
										$data['bname']=$filedata[7];
										$data['parentdesignationid']=$filedata[8];
										$data['childdesignationid']=$filedata[9];
										$data['religion']=$filedata[10];
										$data['maritual']=$filedata[11];
										$data['dobdate']=$filedata[12];
										$data['dojdate']=$filedata[13];
										$data['hdistrict']=$filedata[14];
										$data['epermanentaddress']=$filedata[15];
										$data['bpermanentaddress']=$filedata[16];
										$data['epresentaddress']=$filedata[17];
										$data['bpresentaddress']=$filedata[18];
										$data['nid']=$filedata[19];
										$data['bloodgroup']=$filedata[20];
										$data['gender']=$filedata[21];
										$data['salary']=$filedata[22];
										$data['efficiency']=$filedata[23];
										$data['imark']=$filedata[24];
										$data['oemail']=$filedata[25];
										$data['pemail']=$filedata[26];
										$data['pmobile']=$filedata[27];
										$data['emobile']=$filedata[28];
										$data['usertypeid']=$filedata[29];
										$data['servicetypeid']=$filedata[30];
										$data['puserid']=$filedata[31];
										$data['userid']=$filedata[32];
										$data['ruserid']=$filedata[33];
										$data['password']=$filedata[34];
										$data['image']=$filedata[35];
										$data['ustatus']=$filedata[36];
										$ins=$this->Admin->insertRecord($data);
										if($ins==TRUE)
											{
												$this->session->set_flashdata('Successfully','Successfully Inserted');
											}
										else
											{
				 								$this->session->set_flashdata('Successfully','Failed To Inserted');
											}
										
									}
               				}
			   			$i++;
						redirect('Dashboard/emp_import_excel','refresh');
         		}
            	fclose($file);
			}
   		}
  	}
	public function productunit_insert_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Product Unit Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$this->load->view('admin/productunit_insert_form',$data);
				
	 }
	 public function productunit_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			$productunitname=$this->form_validation->set_rules('productunitname', 'Product Unit Name', 'required');
			
			
			if($this->form_validation->run()==FALSE)
				{
					$this->religion_insert_form();
				}
			else
				{
					$productunitname=$this->input->post('productunitname');
					
					$ins=$this->Admin->productunit_insert($productunitname);
			
					if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/productunit_insert_form','refresh');
				}
		}
	}
	public function productunit_list()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Product Unit List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['ul']=$this->Admin->productunit_list();
		$this->load->view('admin/productunit_list',$data);
				
	 }
	 public function productunit_list_up()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Product Unit Update';
		$productunitid= $this->uri->segment(3);
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		
		$data['dlup']=$this->Admin->productunit_list_up($productunitid);
		$this->load->view('admin/productunit_list_up',$data);
	 }
	public function productunitlup()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			$productunitid=$this->input->post('productunitid');
			$productunitname=$this->input->post('productunitname');
			
			$ins=$this->Admin->productunitlup($productunitid,$productunitname);
			if($ins==TRUE)
				{
					$this->session->set_flashdata('Successfully','Successfully Updated');
				}
			else
				{
					$this->session->set_flashdata('Successfully','Failed To Updated');
				}
					redirect('Dashboard/productunit_list','refresh');
				
		}
	 }
	 public function producttype_insert_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Product Unit Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$this->load->view('admin/producttype_insert_form',$data);
				
	 }
	 public function producttype_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			$productunitname=$this->form_validation->set_rules('producttype', 'Product Type', 'required');
			
			
			if($this->form_validation->run()==FALSE)
				{
					$this->religion_insert_form();
				}
			else
				{
					$producttype=$this->input->post('producttype');
					
					$ins=$this->Admin->producttype_insert($producttype);
			
					if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/producttype_insert_form','refresh');
				}
		}
	}
	public function producttype_list()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Product Type List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['ul']=$this->Admin->producttype_list();
		$this->load->view('admin/producttype_list',$data);
				
	 }
	 public function producttype_list_up()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Product Type Update';
		$producttypeid= $this->uri->segment(3);
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		
		$data['dlup']=$this->Admin->producttype_list_up($producttypeid);
		$this->load->view('admin/producttype_list_up',$data);
	 }
	 public function producttypelup()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			$producttypeid=$this->input->post('producttypeid');
			$producttype=$this->input->post('producttype');
			
			$ins=$this->Admin->producttypelup($producttypeid,$producttype);
			if($ins==TRUE)
				{
					$this->session->set_flashdata('Successfully','Successfully Updated');
				}
			else
				{
					$this->session->set_flashdata('Successfully','Failed To Updated');
				}
					redirect('Dashboard/producttype_list','refresh');
				
		}
	 }
	public function challan_create_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Challan Create';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['allf']=$this->Admin->factory_list();
		$data['pul']=$this->Admin->productunit_list();
		$data['ptl']=$this->Admin->producttype_list();
		$this->load->view('admin/challan_create_form',$data);
	}
	public function challan_create()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			$sfactoryid=$this->form_validation->set_rules('sfactoryid', 'Sent Factory Name', 'required');
			//$rfactoryid=$this->form_validation->set_rules('rfactoryid', 'Receive Factory Name', 'required');
			
			if($this->form_validation->run()==FALSE)
				{
					$this->challan_create_form();
				}
			else
				{
					$sfactoryid=$this->input->post('sfactoryid');
					$manualid=$this->input->post('manualid');
					$userid=$this->input->post('userid');
					$buyerid=$this->input->post('buyerid');
					$rfactoryid=$this->input->post('rfactoryid');
					$location=$this->input->post('location');
					$producttypeid=$this->input->post('producttypeid');
					$item=$this->input->post('item');
					$sqty=$this->input->post('sqty');
					$unit=$this->input->post('unit');
					$cdate=$this->input->post('cdate');
					$ins=$this->Admin->challan_create($sfactoryid,$manualid,$userid,$buyerid,$rfactoryid,$producttypeid,$item,$sqty,$unit,$cdate);
			
					if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/challan_create_form','refresh');
				}
		}
	}
	public function date_wise_challan_list_form()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Challan List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		//$data['ul']=$this->Admin->challan_list();
		$this->load->view('admin/date_wise_challan_list_form',$data);
				
	 }
	 public function date_wise_challan_list()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Challan List';
		//$this->load->view('admin/head',$data);
//		$this->load->view('admin/toprightnav');
//		$this->load->view('admin/leftmenu');
		$factoryid=$this->input->post('factoryid');
		$pd=$this->input->post('pd');
		$wd=$this->input->post('wd');
		$data['ul']=$this->Admin->date_wise_challan_list($factoryid,$pd,$wd);
		$this->load->view('admin/date_wise_challan_list',$data);
	 }
	 public function date_wise_allunit_challan_list_form()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Challan List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['allf']=$this->Admin->factory_list();
		$this->load->view('admin/date_wise_allunit_challan_list_form',$data);
				
	 }
	 public function date_wise_allunit_challan_list()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Challan List';
		//$this->load->view('admin/head',$data);
//		$this->load->view('admin/toprightnav');
//		$this->load->view('admin/leftmenu');
		$factoryid=$this->input->post('factoryid');
		$pd=$this->input->post('pd');
		$wd=$this->input->post('wd');
		$data['ul']=$this->Admin->date_wise_allunit_challan_list($factoryid,$pd,$wd);
		$this->load->view('admin/date_wise_allunit_challan_list',$data);
	 }
	 public function factory_challan_list()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Challan List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$factoryid=$this->session->userdata('factoryid');
		$data['ul']=$this->Admin->factory_challan_list($factoryid);
		$this->load->view('admin/factory_challan_list',$data);
				
	 }
	 public function factory_challan_receive_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Challan Receive';
		$data['ccid']= $this->uri->segment(3);
		$data['sqty']= $this->uri->segment(4);
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$this->load->view('admin/factory_challan_receive_form',$data);
				
	 }
	 public function challan_receive()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			//$sfactoryid=$this->form_validation->set_rules('sfactoryid', 'Sent Factory Name', 'required');
//			$rfactoryid=$this->form_validation->set_rules('rfactoryid', 'Receive Factory Name', 'required');
//			
//			if($this->form_validation->run()==FALSE)
//				{
//					$this->challan_create_form();
//				}
//			else
//				{
					$ccid=$this->input->post('ccid');
					
					$rqty=$this->input->post('rqty');
					
					$ins=$this->Admin->challan_receive($ccid,$rqty);
			
					if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/factory_challan_list','refresh');
				//}
		}
	}
	
	public function auditparty_insert_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Audit Party Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		//$data['allf']=$this->Admin->factory_list();
		$this->load->view('admin/auditparty_insert_form',$data);
				
	 }
	
	  public function auditparty_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			$auditparty=$this->form_validation->set_rules('auditparty', 'Audit Party', 'required');
			
			
			if($this->form_validation->run()==FALSE)
				{
					$this->auditparty_insert_form();
				}
			else
				{
					$auditparty=$this->input->post('auditparty');
					
					
					
					
			
			
					$ins=$this->Admin->auditparty_insert($auditparty);
			
					if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/auditparty_insert_form','refresh');
				}
		}
	}
	public function auditparty_list()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Audit Party List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['bl']=$this->Admin->auditparty_list();
		$this->load->view('admin/auditparty_list',$data);
				
	 }
	public function audittype_insert_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Audit Type Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		//$data['allf']=$this->Admin->factory_list();
		//$data['bl']=$this->Admin->buyer_list();
		//$data['allap']=$this->Admin->auditparty_list();
		$this->load->view('admin/audittype_insert_form',$data);
				
	 }
	 public function audittype_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			$audittype=$this->form_validation->set_rules('audittype', 'Audit Type', 'required');
			
			
			if($this->form_validation->run()==FALSE)
				{
					$this->auditparty_insert_form();
				}
			else
				{
					$audittype=$this->input->post('audittype');
					
					
					
					
			
			
					$ins=$this->Admin->audittype_insert($audittype);
			
					if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/audittype_insert_form','refresh');
				}
		}
	}
	public function audittype_list()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Audit Party List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['bl']=$this->Admin->audittype_list();
		$this->load->view('admin/audittype_list',$data);
				
	 }
	public function auditscope_insert_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Audit Scope Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		//$data['allf']=$this->Admin->factory_list();
		//$data['bl']=$this->Admin->buyer_list();
		//$data['allap']=$this->Admin->auditparty_list();
		$this->load->view('admin/auditscope_insert_form',$data);
				
	 }
	 public function auditscope_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			$auditscope=$this->form_validation->set_rules('auditscope', 'Audit Scope', 'required');
			
			
			if($this->form_validation->run()==FALSE)
				{
					$this->auditscope_insert_form();
				}
			else
				{
					$auditscope=$this->input->post('auditscope');
					
					
					
					
			
			
					$ins=$this->Admin->auditscope_insert($auditscope);
			
					if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/auditscope_insert_form','refresh');
				}
		}
	}
	public function auditscope_list()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Audit Scope List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['bl']=$this->Admin->auditscope_list();
		$this->load->view('admin/auditscope_list',$data);
				
	 }
	 public function preaudit_insert_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Pre Audit Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['allf']=$this->Admin->factory_list();
		$data['bl']=$this->Admin->buyer_list();
		$data['alltype']=$this->Admin->audittype_list();
		$data['allscope']=$this->Admin->auditscope_list();
		$data['allap']=$this->Admin->auditparty_list();
		$this->load->view('admin/preaudit_insert_form',$data);
				
	 }
	public function preauditinfo_insert()
	{
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			$factoryname=$this->form_validation->set_rules('factoryname', 'Factory Name', 'required');
			$buyername=$this->form_validation->set_rules('buyername', 'Buyer Name', 'required');
			$auditparty=$this->form_validation->set_rules('auditparty', 'Audit Party', 'required');
			$audittype=$this->form_validation->set_rules('audittype', 'Audit Type', 'required');
			$auditscope=$this->form_validation->set_rules('auditscope', 'Audit Scope', 'required');
			$fsl=$this->form_validation->set_rules('fsl[]', 'Finding Serial', 'required');
			$findings=$this->form_validation->set_rules('findings[]', 'Findings', 'required');
			$observation=$this->form_validation->set_rules('observation[]', 'Observation', 'required');
			//$ship_date=$this->form_validation->set_rules('ship_date[]', 'Ship Date', 'required');
			if($this->form_validation->run()==FALSE)
			{
				$this->preaudit_insert_form();
			}
			else
			{
				$factoryname=$this->input->post('factoryname');
				$adate=$this->input->post('adate');
				$buyername=$this->input->post('buyername');
				$auditparty=$this->input->post('auditparty');
				$audittype=$this->input->post('audittype');
				$auditscope=$this->input->post('auditscope');
				$fsl=$this->input->post('fsl');
				$findings=$this->input->post('findings');
				$observation=$this->input->post('observation');
				$config['upload_path']          = APPPATH. '../assets/uploads/preaudit';
					$config['allowed_types']        = 'jpg|png';
					$config['max_size']             = 10000;
					$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('pic_file')){
				$error = array('error' => $this->upload->display_errors());
				//$this->load->view('upload_form', $error);
			}
			$upload_data = $this->upload->data();
			$pdf_file = $upload_data['file_name'];
				
				for($i=0;$i<count($fsl);$i++)
					{
						$data["factoryname"]=$factoryname;
						$data["adate"]=$adate;
						$data["buyername"]=$buyername;
						$data["auditparty"]=$auditparty;
						$data["audittype"]=$audittype;
						$data["auditscope"]=$auditscope;
						//$data["pdf_file"]=$pdf_file;
						$data["fsl"]=$fsl[$i];
						$data["findings"]=$findings[$i];
						$data["observation"]=$observation[$i];
						//$data["fscolour_qty"]=$fscolour_qty[$i];
						//$data["ship_date"]=$ship_date[$i];
						$ins=$this->Admin->preauditinfo_insert($data);
						//$ins1=$this->Admin->preauditinfo_pdfinsert($data);
					}
					$ins1=$this->Admin->preauditinfo_pdfinsert($factoryname,$buyername,$audittype,$pdf_file,$adate);
			if($ins==TRUE)
			{
				$this->session->set_flashdata('Successfully','Successfully Inserted');
			}
			else
			{
				 $this->session->set_flashdata('Successfully','Failed To Inserted');
			}
			redirect('Dashboard/preaudit_insert_form','refresh');
			}
		}
	}
	public function cap_insert_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Cap Info Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['allf']=$this->Admin->factory_list();
		$data['bl']=$this->Admin->buyer_list();
		$data['alltype']=$this->Admin->audittype_list();
		//$data['allscope']=$this->Admin->auditscope_list();
		//$data['allap']=$this->Admin->auditparty_list();
		$this->load->view('admin/cap_insert_form',$data);
				
	 }
	public function capinfo_report()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Cap Info List';
		$this->load->view('admin/head',$data);
		//$this->load->view('admin/toprightnav');
		//$this->load->view('admin/leftmenu');
		$adate = $this->input->post('adate');
		$factoryname = $this->input->post('factoryname');
		$buyername = $this->input->post('buyername');
		$audittype = $this->input->post('audittype');
		//$result['rows']=$this->Home_Model->search_value();
		$data['cr']=$this->Admin->capinfo_report($adate,$factoryname,$buyername,$audittype);
		$data['ul']=$this->Admin->user_list();
		$this->load->view('admin/capinfo_report',$data);
		//$this->load->view('admin/cap_insert_form',$data);
				
	 }
	 public function capinfo_report_insert()
	{
		error_reporting(0);
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			
				$chpreaid=$this->input->post('chpreaid');
				$preaid=$this->input->post('preaid');
				$cap=$this->input->post('cap');
				$pr=$this->input->post('pr');
				$pd=$this->input->post('pd');
				$wd=$this->input->post('wd');
				
				
				for($i=0;$i<count($preaid);$i++)
					{
						$data["chpreaid"]=$chpreaid[$i];
						$data["preaid"]=$preaid[$i];
						$data["cap"]=$cap[$i];
						$data["pr"]=$pr[$i];
						$data["pd"]=$pd[$i];
						$data["wd"]=$wd[$i];
						$_FILES['file']['name'] = $_FILES['pic_file']['name'][$i];
         				$_FILES['file']['type'] = $_FILES['pic_file']['type'][$i];
						$_FILES['file']['tmp_name'] = $_FILES['pic_file']['tmp_name'][$i];
						$_FILES['file']['error'] = $_FILES['pic_file']['error'][$i];
						$_FILES['file']['size'] = $_FILES['pic_file']['size'][$i];
 						$config['upload_path'] = APPPATH. '../assets/uploads/capreport'; 
          				$config['allowed_types'] = 'jpg|jpeg|png|gif';
						$config['max_size'] = '100000';
		  				$config['file_name'] = $_FILES['pic_file']['name'][$i];
						$config['file_name']=time().$config['file_name'];
						//$pic_file = $upload_data['pic_file'];
						$this->load->library('upload',$config); 
						$this->upload->initialize($config);
						if(!$this->upload->do_upload('file')){
						$error = array('error' => $this->upload->display_errors());
            			$uploadData = $this->upload->data();
						$filename = $uploadData['file_name'];
						$data['totalFiles'][] = $filename;	
		  			}
						
						//$data["pic_file"]=$pic_file;
						$data['pic_file']=$config['file_name'];
						$ins=$this->Admin->capinfo_report_insert($data);
					}
			if($ins==TRUE)
			{
				$this->session->set_flashdata('Successfully','Successfully Inserted');
			}
			else
			{
				 $this->session->set_flashdata('Successfully','Failed To Inserted');
			}
			redirect('Dashboard/cap_insert_form','refresh');
			//}
		}
	}
	public function cap_status_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Cap Info Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['allf']=$this->Admin->factory_list();
		$data['bl']=$this->Admin->buyer_list();
		$data['alltype']=$this->Admin->audittype_list();
		//$data['allscope']=$this->Admin->auditscope_list();
		//$data['allap']=$this->Admin->auditparty_list();
		$this->load->view('admin/cap_status_form',$data);
				
	 }
	 public function capstatus_report()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Cap Info List';
		$this->load->view('admin/head',$data);
		//$this->load->view('admin/toprightnav');
		//$this->load->view('admin/leftmenu');
		$adate = $this->input->post('adate');
		$buyername = $this->input->post('buyername');
		$factoryname = $this->input->post('factoryname');
		$audittype= $this->input->post('audittype');
		//$result['rows']=$this->Home_Model->search_value();
		$data['cr']=$this->Admin->capstatus_report($adate,$factoryname,$buyername,$audittype);
		$this->load->view('admin/capstatus_report',$data);
		//$this->load->view('admin/cap_insert_form',$data);
				
	 }
	 public function capfile_insert_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Cap Info Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['allf']=$this->Admin->factory_list();
		$data['bl']=$this->Admin->buyer_list();
		$data['alltype']=$this->Admin->audittype_list();
		//$data['allscope']=$this->Admin->auditscope_list();
		//$data['allap']=$this->Admin->auditparty_list();
		$this->load->view('admin/capfile_insert_form',$data);
				
	 }
	 public function capfile_upload()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Cap Info List';
		$this->load->view('admin/head',$data);
		//$this->load->view('admin/toprightnav');
		//$this->load->view('admin/leftmenu');
		$adate = $this->input->post('adate');
		$factoryname = $this->input->post('factoryname');
		$buyername = $this->input->post('buyername');
		$audittype = $this->input->post('audittype');
		//$result['rows']=$this->Home_Model->search_value();
		$data['cr']=$this->Admin->capfile_upload($adate,$factoryname,$buyername,$audittype);
		$data['ul']=$this->Admin->user_list();
		$this->load->view('admin/capfile_upload',$data);
		//$this->load->view('admin/cap_insert_form',$data);
				
	 }
	 public function cap_status_insert()
	{
		error_reporting(0);
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			
				
				$preaid=$this->input->post('preaid');
				$ratings=$this->input->post('ratings');
				$status=$this->input->post('status');
				
				
				
				for($i=0;$i<count($preaid);$i++)
					{
						
						$data["preaid"]=$preaid[$i];
						$data["ratings"]=$ratings[$i];
						$data["status"]=$status[$i];
						
						$ins=$this->Admin->cap_status_insert($data);
					}
			if($ins==TRUE)
			{
				$this->session->set_flashdata('Successfully','Successfully Inserted');
			}
			else
			{
				 $this->session->set_flashdata('Successfully','Failed To Inserted');
			}
			redirect('Dashboard/cap_status_form','refresh');
			//}
		}
	}
	public function capfile_upload_insert()
	{
		error_reporting(0);
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			
				$factoryname=$this->input->post('factoryname');
				$buyername=$this->input->post('buyername');
				$audittype=$this->input->post('audittype');
				$auditdate=$this->input->post('auditdate');
				
				
				
				
$_FILES['file']['name'] = $_FILES['pic_file']['name'];
          $_FILES['file']['type'] = $_FILES['pic_file']['type'];

          $_FILES['file']['tmp_name'] = $_FILES['pic_file']['tmp_name'];

          $_FILES['file']['error'] = $_FILES['pic_file']['error'];

          $_FILES['file']['size'] = $_FILES['pic_file']['size'];
 $config['upload_path'] = APPPATH. '../assets/uploads/capreport'; 
          $config['allowed_types'] = 'jpg|pdf';

          $config['max_size'] = '100000';
		  
$config['file_name'] = $_FILES['pic_file']['name'];
$config['file_name']=time().$config['file_name'];
			//$pic_file = $upload_data['pic_file'];
						
					          $this->load->library('upload',$config); 
							  $this->upload->initialize($config);

    

          if(!$this->upload->do_upload('file')){
$error = array('error' => $this->upload->display_errors());
            $uploadData = $this->upload->data();

            $pdf_file = $uploadData['file_name'];
			
		  }
						
						
						
						//$data['pic_file']=$config['file_name'];
						
						
						
						$ins=$this->Admin->capfile_upload_insert($factoryname,$buyername,$audittype,$auditdate,$pdf_file);
					
			if($ins==TRUE)
			{
				$this->session->set_flashdata('Successfully','Successfully Inserted');
			}
			else
			{
				 $this->session->set_flashdata('Successfully','Failed To Inserted');
			}
			redirect('Dashboard/capfile_insert_form','refresh');
			//}
		}
	}
	public function cap_fullr_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Cap Info Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['allf']=$this->Admin->factory_list();
		$data['bl']=$this->Admin->buyer_list();
		$data['alltype']=$this->Admin->audittype_list();
		//$data['allscope']=$this->Admin->auditscope_list();
		//$data['allap']=$this->Admin->auditparty_list();
		$this->load->view('admin/cap_fullr_form',$data);
				
	 }
	 public function capfull_report()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Cap Details Report';
		$this->load->view('admin/head',$data);
		//$this->load->view('admin/toprightnav');
		//$this->load->view('admin/leftmenu');
		$adate = $this->input->post('adate');
		$buyername = $this->input->post('buyername');
		$factoryname = $this->input->post('factoryname');
		$audittype= $this->input->post('audittype');
		//$result['rows']=$this->Home_Model->search_value();
		$data['cr']=$this->Admin->capfull_report($adate,$factoryname,$buyername,$audittype);
		$data['cr1']=$this->Admin->preauditfile_report($adate,$factoryname,$buyername,$audittype);
		$data['cr2']=$this->Admin->capauditfile_report($adate,$factoryname,$buyername,$audittype);
		$this->load->view('admin/capfull_report',$data);
	}
	public function chart_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Cap Info Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['allf']=$this->Admin->factory_list();
		$data['bl']=$this->Admin->buyer_list();
		$data['alltype']=$this->Admin->audittype_list();
		//$data['allscope']=$this->Admin->auditscope_list();
		//$data['allap']=$this->Admin->auditparty_list();
		$this->load->view('admin/chart_form',$data);
	}
	public function bar_chart() {

   $this->load->database();
		$this->load->model('Admin');
		$data['title']='Cap Info Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$adate = $this->input->post('adate');
		$buyername = $this->input->post('buyername');
		$factoryname = $this->input->post('factoryname');
		$audittype= $this->input->post('audittype');
		//$data['cr']=$this->Admin->bar_chart($adate,$factoryname,$buyername,$audittype);
      	//$query =  $this->db->query("SELECT preaid,ratings FROM capreport"); 
		$query=$this->db->query("SELECT preauditinfo.preaid,preauditinfo.factoryname,preauditinfo.buyername,preauditinfo.auditparty,preauditinfo.audittype,preauditinfo.auditscope,preauditinfo.fsl,preauditinfo.findings,preauditinfo.observation,preauditinfo.auditdate,preauditinfopdf.preauditpdf,capreport.cap,capreport.pr,capreport.tardate,capreport.comdate,capreport.capimage,capreport.ratings,capreport.status,capreportpdf.pdffile,user.name 
		FROM preauditinfo 
		 JOIN capreport ON
		preauditinfo.preaid=capreport.preaid
		LEFT JOIN user ON
		user.userid=capreport.pr
		LEFT JOIN preauditinfopdf ON
		preauditinfopdf.factoryname=preauditinfo.factoryname AND
		preauditinfopdf.buyername=preauditinfo.buyername AND
		preauditinfopdf.audittype=preauditinfo.audittype AND
		preauditinfopdf.preaudate=preauditinfo.auditdate
		LEFT JOIN capreportpdf ON
		capreportpdf.factoryname=preauditinfo.factoryname AND
		capreportpdf.buyername=preauditinfo.buyername AND
		capreportpdf.audittype=preauditinfo.audittype AND
		capreportpdf.auditdate=preauditinfo.auditdate
		WHERE preauditinfo.factoryname='$factoryname' AND preauditinfo.buyername='$buyername' AND preauditinfo.audittype='$audittype' AND preauditinfo.auditdate='$adate' ORDER BY preauditinfo.fsl");
		$record = $query->result();
		$data = array();
		foreach($record as $row) 
			{
				$data['label'][] = $row->auditscope;
				$data['data'][] = (int) $row->ratings;
			}
		$data['chart_data'] = json_encode($data);
	  	$data['chart_data1'] =$record;
		$this->load->view('admin/chart',$data);
	}
	public function buyer_insert_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Buyer Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['cl']=$this->Admin->country_list();
		$this->load->view('admin/buyer_insert_form',$data);
				
	 }
	 public function buyer_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			$buyername=$this->form_validation->set_rules('buyername', 'Buyer Name', 'required');
			$cc=$this->form_validation->set_rules('cc', 'Origin', 'required');
			
			$local_address=$this->form_validation->set_rules('local_address', 'Local Address', 'required');
			
			if($this->form_validation->run()==FALSE)
				{
					$this->buyer_insert_form();
				}
			else
				{
					$buyername=$this->input->post('buyername');
					$cc=$this->input->post('cc');
					$local_address=$this->input->post('local_address');
					
					
					$config['upload_path']          = APPPATH. '../assets/uploads/buyer';
					$config['allowed_types']        = 'jpg|png';
					$config['max_size']             = 10000;
					$this->load->library('upload', $config);
					$this->upload->do_upload('pic_file');
			//if ( ! $this->upload->do_upload('pic_file')){
//				$error = array('error' => $this->upload->display_errors());
//				//$this->load->view('upload_form', $error);
//			}
			$upload_data = $this->upload->data();
			$pic_file = $upload_data['file_name'];
					$ins=$this->Admin->buyer_insert($pic_file,$buyername,$cc,$local_address);
			
					if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/buyer_insert_form','refresh');
				}
		}
	}
	public function buyer_list()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Buyer List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['bl']=$this->Admin->buyer_list();
		$this->load->view('admin/buyer_list',$data);
				
	 }
	 public function buyer_list_up()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Buyer Info Update';
		$bid= urldecode($this->uri->segment(3));
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		//$data['all_line']=$this->Admin->all_line();
		//$data['opskill']=$this->Admin->opskill($opid);
		$data['cl']=$this->Admin->country_list();
		$data['blup']=$this->Admin->buyer_list_up($bid);
		$this->load->view('admin/buyer_list_up',$data);
	 }
	 public function blup()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			$bid=$this->input->post('bid');
			$buyername=$this->input->post('buyername');
			$cc=$this->input->post('cc');
			$local_address=$this->input->post('local_address');
			
			$ins=$this->Admin->blup($bid,$buyername,$cc,$local_address);
			if($ins==TRUE)
				{
					$this->session->set_flashdata('Successfully','Successfully Updated');
				}
			else
				{
					$this->session->set_flashdata('Successfully','Failed To Updated');
				}
					redirect('Dashboard/buyer_list','refresh');
				
		}
	 }
	  public function buyer_imglist_up()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Buyer Info Update';
		$bid= $this->uri->segment(3);
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		//$data['alld']=$this->Admin->empdept_list();
		//$data['opskill']=$this->Admin->opskill($opid);
		$data['bimglup']=$this->Admin->buyer_list_up($bid);
		$this->load->view('admin/buyer_imglist_up',$data);
	 }
	 public function bimglup()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			$bid=$this->input->post('bid');
			$config['upload_path']          = APPPATH. '../assets/uploads/buyer';
					$config['allowed_types']        = 'jpg|jpeg|png';
					$config['max_size']             = 10000;
					$this->load->library('upload', $config);
					$this->upload->do_upload('pic_file');
			//if ( ! $this->upload->do_upload('pic_file')){
//				$error = array('error' => $this->upload->display_errors());
//				//$this->load->view('upload_form', $error);
//			}
			$upload_data = $this->upload->data();
			$pic_file = $upload_data['file_name'];
			$ins=$this->Admin->bimglup($bid,$pic_file);
			if($ins==TRUE)
				{
					$this->session->set_flashdata('Successfully','Successfully Updated');
				}
			else
				{
					$this->session->set_flashdata('Successfully','Failed To Updated');
				}
					redirect('Dashboard/buyer_list','refresh');
				
		}
	 }
	 public function country_insert_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Country Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$this->load->view('admin/country_insert_form',$data);
				
	 }
	 public function country_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			$cc=$this->form_validation->set_rules('cc', 'Country Code', 'required');
			$cna=$this->form_validation->set_rules('cna', 'Country Name', 'required');
			
			
			
			if($this->form_validation->run()==FALSE)
				{
					$this->country_insert_form();
				}
			else
				{
					$cc=$this->input->post('cc');
					$cna=$this->input->post('cna');
					$ins=$this->Admin->country_insert($cc,$cna);
			
					if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/country_insert_form','refresh');
				}
		}
	}
	public function country_list()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Country List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['cl']=$this->Admin->country_list();
		$this->load->view('admin/country_list',$data);
				
	 }
	 public function country_list_up()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Country Info Update';
		$cc= urldecode($this->uri->segment(3));
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		//$data['all_line']=$this->Admin->all_line();
		//$data['opskill']=$this->Admin->opskill($opid);
		$data['clup']=$this->Admin->country_list_up($cc);
		$this->load->view('admin/country_list_up',$data);
	 }
	 public function countrylup()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			$cc=$this->input->post('cc');
			$cna=$this->input->post('cna');
			
			
			$ins=$this->Admin->countrylup($cc,$cna);
			if($ins==TRUE)
				{
					$this->session->set_flashdata('Successfully','Successfully Updated');
				}
			else
				{
					$this->session->set_flashdata('Successfully','Failed To Updated');
				}
					redirect('Dashboard/country_list','refresh');
				
		}
	 }
	 public function buyerwf_insert_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Buyer Wise Factory Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['bl']=$this->Admin->buyer_list();
		$data['fl']=$this->Admin->factory_list();
		$this->load->view('admin/buyerwf_insert_form',$data);
				
	 }
	 public function buyerwf_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			//$bid=$this->form_validation->set_rules('bid', 'Buyer Name', 'required');
			
			
			//if($this->form_validation->run()==FALSE)
//				{
//					$this->buyerwf_insert_form();
//				}
//			else
//				{
					$bid=$this->input->post('bid');
					$afl=$this->input->post('afl');
					$akl=$this->input->post('akl');
					$atl=$this->input->post('atl');
					$bcl=$this->input->post('bcl');
					$bgl=$this->input->post('bgl');
					$bpl=$this->input->post('bpl');
					$btl=$this->input->post('btl');
					$bwl=$this->input->post('bwl');
					$jel=$this->input->post('jel');
					$ins=$this->Admin->buyerwf_insert($bid,$afl,$akl,$atl,$bcl,$bgl,$bpl,$btl,$bwl,$jel);
					//for($i=0;$i<count($chk);$i++)
//					{
//						$data["bid"]=$bid;
//						$data["chk"]=$chk[$i];
//						$data["factoryid"]=$factoryid[$i];
//						$data["vdate"]=$vdate[$i];
//						$ins=$this->Admin->buyerwf_insert($data);
//						
//					}
					
			
					if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/buyerwf_insert_form','refresh');
				//}
		}
	}
	public function buyerwf_list()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Buyer List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['bl']=$this->Admin->buyerwf_list();
		//$data['fl']=$this->Admin->dbuyerwf_list();
		$this->load->view('admin/buyerwf_list',$data);
				
	 }
	 public function buyerwf_list_up()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Buyer Info Update';
		$bid= urldecode($this->uri->segment(3));
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		//$data['all_line']=$this->Admin->all_line();
		//$data['opskill']=$this->Admin->opskill($opid);
		//$data['cl']=$this->Admin->country_list();
		$data['bwflup']=$this->Admin->buyerwf_list_up($bid);
		$this->load->view('admin/buyerwf_list_up',$data);
	 }
	 public function bwflup()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			$bwfid=$this->input->post('bwfid');
			$vdate=$this->input->post('vdate');
			
			
			
			$ins=$this->Admin->bwflup($bwfid,$vdate);
			if($ins==TRUE)
				{
					$this->session->set_flashdata('Successfully','Successfully Updated');
				}
			else
				{
					$this->session->set_flashdata('Successfully','Failed To Updated');
				}
					redirect('Dashboard/buyerwf_list','refresh');
				
		}
	 }
	 public function buyerwcer_insert_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Buyer Wise Certificate';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['fl']=$this->Admin->factory_list();
		$data['bl']=$this->Admin->buyer_list();
		$data['li']=$this->Admin->licensename_list();
		$this->load->view('admin/buyerwcer_insert_form',$data);
				
	 }
	 public function buyerwcer_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			$factoryid=$this->form_validation->set_rules('factoryid', 'Factory Name', 'required');
			//$bid=$this->form_validation->set_rules('bid', 'Buyer Name', 'required');
			$licensename=$this->form_validation->set_rules('licensename', 'License Name', 'required');
			
			if($this->form_validation->run()==FALSE)
				{
					$this->buyerwcer_insert_form();
				}
			else
				{
					$factoryid=$this->input->post('factoryid');
					$licensename=$this->input->post('licensename');
					$bid=$this->input->post('bid');
					//$mo=$this->input->post('mo');
					//foreach($mo as $val)
//						{
//							$data["mo"]=$val;
//						};
					for($i=0;$i<count($bid);$i++)
					{
						$data["factoryid"]=$factoryid;
						$data["licensename"]=$licensename;
						$data["bid"]=$bid[$i];
						//$data["mo"]=$mo[$i];
						$ins=$this->Admin->buyerwcer_insert($data);
						//print_r($bid)."<br/>";
						//print_r($mo)."<br/>";
						
					}
					//$ins=$this->Admin->buyerwcer_insert($data);
//					foreach($mo as $val)
//						{
//							$data["mo"]=$val;
//						}
					
			//var_dump($major);
					if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/buyerwcer_insert_form','refresh');
				}
		}
	}
	public function buyerwcer_list()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Buyer List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['afl']=$this->Admin->buyerwcer_listafl();
		$data['akl']=$this->Admin->buyerwcer_listakl();
		$data['atl']=$this->Admin->buyerwcer_listatl();
		$data['bcl']=$this->Admin->buyerwcer_listbcl();
		$data['bgl']=$this->Admin->buyerwcer_listbgl();
		$data['bpl']=$this->Admin->buyerwcer_listbpl();
		$data['bgl']=$this->Admin->buyerwcer_listbgl();
		$data['btl']=$this->Admin->buyerwcer_listbtl();
		$data['bwl']=$this->Admin->buyerwcer_listbwl();
		$data['jel']=$this->Admin->buyerwcer_listjel();
		//$data['fl']=$this->Admin->dbuyerwf_list();
		$this->load->view('admin/buyerwcer_list',$data);
				
	 }
	 public function ssupervisor_list()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Supervisor List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['fl']=$this->Admin->factory_list();
		$this->load->view('admin/ssupervisor_list',$data);
				
	 }
	 public function factorywise_ssupervisor_list()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='User List';
		$factoryid = $this->input->post('factoryid');
		$data['ul']=$this->Admin->factorywise_ssupervisor_list($factoryid);
		$this->load->view('admin/factorywise_ssupervisor_list',$data);
				
	 }
	public function sscore_card_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			//$userid=$this->form_validation->set_rules('userid', 'user ID', 'required');
//			if($this->form_validation->run()==FALSE)
//				{
//					$this->factorywise_supervisor_list();
//				}
//			else
//				{
					$factoryid=$this->input->post('factoryid');
					$userid=$this->input->post('userid');
					$subsectionid=$this->input->post('subsectionid');
					$efficiency=$this->input->post('efficiency');
					$varience=$this->input->post('varience');
					$cutt2shiploss=$this->input->post('cutt2shiploss');
					$wmcratio=$this->input->post('wmcratio');
					$dhusf=$this->input->post('dhusf');
					$fivesscore=$this->input->post('fivesscore');
					$wto=$this->input->post('wto');
					$woabsentism=$this->input->post('woabsentism');
					$ontpre=$this->input->post('ontpre');
					$wofeedback=$this->input->post('wofeedback');
					$sleave=$this->input->post('sleave');
					$sabsent=$this->input->post('sabsent');
					$slate=$this->input->post('slate');
					$cdate=$this->input->post('cdate');
					
					for($i=0;$i<count($userid);$i++)
					{
						$data["factoryid"]=$factoryid[$i];
						$data["userid"]=$userid[$i];
						$data["subsectionid"]=$subsectionid[$i];
						$data["efficiency"]=$efficiency[$i];
						$data["varience"]=$varience[$i];
						$data["cutt2shiploss"]=$cutt2shiploss[$i];
						$data["wmcratio"]=$wmcratio[$i];
						$data["dhusf"]=$dhusf[$i];
						$data["fivesscore"]=$fivesscore[$i];
						$data["wto"]=$wto[$i];
						$data["woabsentism"]=$woabsentism[$i];
						$data["ontpre"]=$ontpre[$i];
						$data["wofeedback"]=$wofeedback[$i];
						$data["sleave"]=$sleave[$i];
						$data["sabsent"]=$sabsent[$i];
						$data["slate"]=$slate[$i];
						$data["cdate"]=$cdate;
						
						$ins=$this->Admin->sscore_card_insert($data);
					}
					if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/ssupervisor_list','refresh');
				}
		//}
	 }
	 public function sscorecard_import_excel()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Employee Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['allf']=$this->Admin->factory_list();
		$this->load->view('admin/sscorecard_import_excel',$data);
				
	 }
	
	
	
	 public function sscorecard_importexcel()
	{
		$this->load->database();
		$this->load->model('Admin');
    	if($this->input->post('upload') != NULL )
		{ 
       		$data = array(); 
       		if(!empty($_FILES['file']['name']))
			{ 
         		// Set preference 
        		$config['upload_path'] = 'assets/uploads/sscorecard/csv/'; 
         		$config['allowed_types'] = 'csv'; 
         		$config['max_size'] = '1000'; // max_size in kb 
         		$config['file_name'] = $_FILES['file']['name'];
				// Load upload library 
         		$this->load->library('upload',$config); 
 				// File upload
        	 	if($this->upload->do_upload('file'))
			 		{ 
            			// Get data about the file
            			$uploadData = $this->upload->data(); 
           				$filename = $uploadData['file_name'];
						// Reading file
            			$file = fopen("assets/uploads/sscorecard/csv/".$filename,"r");
            			$i = 0;
           				$headerLine = true;
            			while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) 
							{
               					$num = count($filedata );
			   					if($headerLine) 
									{ 
										$headerLine = false; 
									}
							
        						else 
									{
			   							$data['sscid']=$filedata[0];
										$data['factoryid']=$filedata[1];
										$data['userid']=$filedata[2];
										$data['subsectionid']=$filedata[3];
										$data['efficiency']=$filedata[4];
										$data['varience']=$filedata[5];
										$data['cutt2shiploss']=$filedata[6];
										$data['wmcratio']=$filedata[7];
										$data['dhusf']=$filedata[8];
										$data['fivesscore']=$filedata[9];
										$data['wto']=$filedata[10];
										$data['woabsentism']=$filedata[11];
										$data['ontpre']=$filedata[12];
										$data['wofeedback']=$filedata[13];
										$data['sleave']=$filedata[14];
										$data['sabsent']=$filedata[15];
										$data['slate']=$filedata[16];
										$data['cdate']=$filedata[17];
										
										$ins=$this->Admin->sscorecardinsertRecord($data);
										if($ins==TRUE)
											{
												$this->session->set_flashdata('Successfully','Successfully Inserted');
											}
										else
											{
				 								$this->session->set_flashdata('Successfully','Failed To Inserted');
											}
										
									}
               				}
			   			$i++;
						redirect('Dashboard/sscorecard_import_excel','refresh');
         		}
            	fclose($file);
			}
   		}
  	}
	 public function sshod_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			$cc=$this->form_validation->set_rules('cc', 'Command & Control', 'numeric|less_than_equal_to[5]');
			$at=$this->form_validation->set_rules('at', 'Attitude', 'numeric|less_than_equal_to[5]');
			$lo=$this->form_validation->set_rules('lo', 'Loyality', 'numeric|less_than_equal_to[5]');
			$de=$this->form_validation->set_rules('de', 'Dependency', 'numeric|less_than_equal_to[5]');
			$re=$this->form_validation->set_rules('re', 'Responsibility', 'numeric|less_than_equal_to[5]');
			if($this->form_validation->run()==FALSE)
				{
					$this->date_wise_individualsummarysscorecard_form();
				}
			else
				{
					$userid=$this->input->post('userid');
					$cc=$this->input->post('cc');
					$at=$this->input->post('at');
					$lo=$this->input->post('lo');
					$de=$this->input->post('de');
					$re=$this->input->post('re');
					$shdate=$this->input->post('shdate');
					
					
						
						$ins=$this->Admin->sshod_insert($userid,$cc,$at,$lo,$de,$re,$shdate);
					
					if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/date_wise_individualsummarysscorecard_form','refresh');
				}
		}
	 }
	 public function date_wise_totalsscorecard_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Date Wise Score Card';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['allf']=$this->Admin->factory_list();
		$this->load->view('admin/date_wise_totalsscorecard_form',$data);
				
	 }
	 public function date_wise_totalsscorecard()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Date Wise Score Card';
		$factoryid = $this->input->post('factoryid');
		$pd = $this->input->post('pd');
		$wd = $this->input->post('wd');
		$data['utl']=$this->Admin->date_wise_totalsscorecard($factoryid,$pd,$wd);
		
		$this->load->view('admin/date_wise_total_sscorecard',$data);
	 }
	 public function date_wise_totalsummarysscorecard_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Date Wise Score Card';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['allf']=$this->Admin->factory_list();
		$this->load->view('admin/date_wise_totalsummarysscorecard_form',$data);
				
	 }
	  public function date_wise_totalsummarysscorecard()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Date Wise Score Card';
		$factoryid = $this->input->post('factoryid');
		$pd = $this->input->post('pd');
		$wd = $this->input->post('wd');
		$data['pd']=$pd;
		$data['wd']=$wd;
		$data['utl']=$this->Admin->date_wise_totalsummarysscorecard($factoryid,$pd,$wd);
		
		$this->load->view('admin/date_wise_total_summarysscorecard',$data);
	 }
	 public function date_wise_individualsummarysscorecard_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Date Wise Score Card';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		//$data['allf']=$this->Admin->factory_list();
		$this->load->view('admin/date_wise_individualsummarysscorecard_form',$data);
				
	 }
	  public function date_wise_individualsummarysscorecard()
	 {
		error_reporting(0);
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Date Wise Score Card';
		$userid = $this->input->post('userid');
		$pd = $this->input->post('pd');
		$wd = $this->input->post('wd');
		$data['pd']=$pd;
		$data['wd']=$wd;
		$data['utl']=$this->Admin->date_wise_individualsummarysscorecard($userid,$pd,$wd);
		$data['utl1']=$this->Admin->date_wise_individualsummarysscorecard1($userid,$pd,$wd);
		
		$this->load->view('admin/date_wise_individual_summarysscorecard',$data);
	 }
	 public function date_wise_individualssc_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Date Wise Score Card';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		//$data['allf']=$this->Admin->factory_list();
		$this->load->view('admin/date_wise_individualssc_form',$data);
				
	 }
	 public function date_wise_individualssc()
	 {
		error_reporting(0);
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Date Wise Score Card';
		$userid = $this->input->post('userid');
		$pd = $this->input->post('pd');
		$wd = $this->input->post('wd');
		$data['pd']=$pd;
		$data['wd']=$wd;
		$data['utl']=$this->Admin->date_wise_individualsummarysscorecard($userid,$pd,$wd);
		$data['utl1']=$this->Admin->date_wise_individualsummarysscorecard1($userid,$pd,$wd);
		$data['utl2']=$this->Admin->date_wise_individualsummarysscorecard2($userid,$pd,$wd);
		$data['utl3']=$this->Admin->date_wise_individualsummarysscorecardchart($userid,$pd,$wd);
		$this->load->view('admin/date_wise_individual_ssc',$data);
	 }
	 public function year_wise_individualssc_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Year Wise Score Card';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		//$data['allf']=$this->Admin->factory_list();
		$data['allm']=$this->Admin->monthname();
		$data['ally']=$this->Admin->yearname();
		$this->load->view('admin/year_wise_individualssc_form',$data);
				
	 }
	 public function year_wise_individualssc()
	 {
		error_reporting(0);
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Year Wise Score Card';
		$userid = $this->input->post('userid');
		$yr = $this->input->post('yr');
		//$pd = $this->input->post('pd');
//		$wd = $this->input->post('wd');
		$data['yr']=$yr;
//		$data['wd']=$wd;
		$data['utl1']=$this->Admin->year_wise_individualsummarysscorecard($userid,$yr);
		$data['utl']=$this->Admin->year_wise_individualsummarysscorecard1($userid,$yr);
		$data['utl2']=$this->Admin->year_wise_individualsummarysscorecard2($userid,$yr);
		$data['utl3']=$this->Admin->year_wise_individualsummarysscorecard3($userid,$yr);
		$data['utl4']=$this->Admin->year_wise_individualsummarysscorecardchart($userid,$yr);
		$this->load->view('admin/year_wise_individual_ssc',$data);
	 }
	 public function date_wise_ssc_update_form()
	 {
	
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Supervisor List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['fl']=$this->Admin->factory_list();
		$this->load->view('admin/date_wise_ssc_update_form',$data);
				
	 }
	 public function factorywise_ssupervisor_list_update()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Date Wise Sewing Score List';
		$factoryid = $this->input->post('factoryid');
		$pd = $this->input->post('pd');
		$data['ul']=$this->Admin->factorywise_ssupervisor_list_update($factoryid,$pd);
		$this->load->view('admin/factorywise_ssupervisor_list_update',$data);
				
	 }
	 public function sscore_card_update()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			//$userid=$this->form_validation->set_rules('userid', 'user ID', 'required');
//			if($this->form_validation->run()==FALSE)
//				{
//					$this->factorywise_supervisor_list();
//				}
//			else
//				{
					$factoryid=$this->input->post('factoryid');
					$userid=$this->input->post('userid');
					//$subsectionid=$this->input->post('subsectionid');
					$efficiency=$this->input->post('efficiency');
					$varience=$this->input->post('varience');
					$cutt2shiploss=$this->input->post('cutt2shiploss');
					$wmcratio=$this->input->post('wmcratio');
					$dhusf=$this->input->post('dhusf');
					$fivesscore=$this->input->post('fivesscore');
					$wto=$this->input->post('wto');
					$woabsentism=$this->input->post('woabsentism');
					$ontpre=$this->input->post('ontpre');
					$wofeedback=$this->input->post('wofeedback');
					$sleave=$this->input->post('sleave');
					$sabsent=$this->input->post('sabsent');
					$slate=$this->input->post('slate');
					$cdate=$this->input->post('cdate');
					
					for($i=0;$i<count($userid);$i++)
					{
						$data["factoryid"]=$factoryid[$i];
						$data["userid"]=$userid[$i];
						//$data["subsectionid"]=$subsectionid[$i];
						$data["efficiency"]=$efficiency[$i];
						$data["varience"]=$varience[$i];
						$data["cutt2shiploss"]=$cutt2shiploss[$i];
						$data["wmcratio"]=$wmcratio[$i];
						$data["dhusf"]=$dhusf[$i];
						$data["fivesscore"]=$fivesscore[$i];
						$data["wto"]=$wto[$i];
						$data["woabsentism"]=$woabsentism[$i];
						$data["ontpre"]=$ontpre[$i];
						$data["wofeedback"]=$wofeedback[$i];
						$data["sleave"]=$sleave[$i];
						$data["sabsent"]=$sabsent[$i];
						$data["slate"]=$slate[$i];
						$data["cdate"]=$cdate;
						
						$ins=$this->Admin->sscore_card_update($data);
					}
					if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Updated');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Updated');
						}
					redirect('Dashboard/date_wise_ssc_update_form','refresh');
				}
		//}
	 }
	 public function diciplinary_action_insert_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Disciplinary Action';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['allf']=$this->Admin->factory_list();
		$this->load->view('admin/diciplinary_action_insert_form',$data);
				
	 }
	 
	 public function diciplinary_action_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			//$auditscope=$this->form_validation->set_rules('auditscope', 'Audit Scope', 'required');
//			
//			
//			if($this->form_validation->run()==FALSE)
//				{
//					$this->auditscope_insert_form();
//				}
//			else
//				{
					$userid=$this->input->post('userid');
					$dadate=$this->input->post('dadate');
					$factoryid=$this->input->post('factoryid');
					$nameofreporterid=$this->input->post('nameofreporterid');
					$primaryinvestigationbyid=$this->input->post('primaryinvestigationbyid');
					$pidate=$this->input->post('pidate');
					$accusedid=$this->input->post('accusedid');
					$victimid=$this->input->post('victimid');
					$abusedforneg=$this->input->post('abusedforneg');
					$doinfachoddate=$this->input->post('doinfachoddate');
					$ins=$this->Admin->diciplinary_action_insert($dadate,$userid,$factoryid,$nameofreporterid,$primaryinvestigationbyid,$pidate,$accusedid,$victimid,$abusedforneg,$doinfachoddate);
			
					if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/diciplinary_action_insert_form','refresh');
				//}
		}
	}
	public function add_dfacheadcomments_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Disciplinary Action';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		//$data['allf']=$this->Admin->factory_list();
		$this->load->view('admin/add_dfacheadcomments_form',$data);
				
	 }
	 public function dfacheadcomments_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			$commentsname=$this->input->post('commentsname');
			$ins=$this->Admin->dfacheadcomments_insert($commentsname);
			if($ins==TRUE)
				{
					$this->session->set_flashdata('Successfully','Successfully Inserted');
				}
			else
				{
					$this->session->set_flashdata('Successfully','Failed To Inserted');
				}
			redirect('Dashboard/add_dfacheadcomments_form','refresh');
		}
	}
    public function dfacheadcomments_list()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Comments OF Fac.Head/HOD List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['ul']=$this->Admin->dfacheadcomments_list();
		$this->load->view('admin/dfacheadcomments_list',$data);
				
	 }
	 public function dfacheadcomments_list_up()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Comments OF Fac.Head/HOD Update';
		$dfacheadcommentsid= $this->uri->segment(3);
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		
		$data['dlup']=$this->Admin->dfacheadcomments_list_up($dfacheadcommentsid);
		$this->load->view('admin/dfacheadcomments_list_up',$data);
	 }
	 public function dfacheadcommentslup()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			$dfacheadcommentsid=$this->input->post('dfacheadcommentsid');
			$dfacheadcomments=$this->input->post('dfacheadcomments');
			
			$ins=$this->Admin->dfacheadcommentslup($dfacheadcommentsid,$dfacheadcomments);
			if($ins==TRUE)
				{
					$this->session->set_flashdata('Successfully','Successfully Updated');
				}
			else
				{
					$this->session->set_flashdata('Successfully','Failed To Updated');
				}
					redirect('Dashboard/dfacheadcomments_list','refresh');
				
		}
	 }
	 public function add_dcatype_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Disciplinary Action Type';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		//$data['allf']=$this->Admin->factory_list();
		$this->load->view('admin/add_dcatype_form',$data);
	}
	public function dcatype_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			$dcatype=$this->input->post('dcatype');
			$ins=$this->Admin->dcatype_insert($dcatype);
			if($ins==TRUE)
				{
					$this->session->set_flashdata('Successfully','Successfully Inserted');
				}
			else
				{
					$this->session->set_flashdata('Successfully','Failed To Inserted');
				}
			redirect('Dashboard/add_dcatype_form','refresh');
		}
	}
	public function dcatype_list()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Action Type List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['ul']=$this->Admin->dcatype_list();
		$this->load->view('admin/dcatype_list',$data);
	}
	public function dcatype_list_up()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Action Type Update';
		$dcatypeid= $this->uri->segment(3);
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		
		$data['dlup']=$this->Admin->dcatype_list_up($dcatypeid);
		$this->load->view('admin/dcatype_list_up',$data);
	 }
	 public function dcatypelup()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			$dcatypeid=$this->input->post('dcatypeid');
			$dcatype=$this->input->post('dcatype');
			
			$ins=$this->Admin->dcatypelup($dcatypeid,$dcatype);
			if($ins==TRUE)
				{
					$this->session->set_flashdata('Successfully','Successfully Updated');
				}
			else
				{
					$this->session->set_flashdata('Successfully','Failed To Updated');
				}
					redirect('Dashboard/dcatype_list','refresh');
				
		}
	 }
	 public function add_dcadisposal_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Disciplinary Disposal Type';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		//$data['allf']=$this->Admin->factory_list();
		$this->load->view('admin/add_dcadisposal_form',$data);
	}
	public function dcadisposal_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			$distype=$this->input->post('distype');
			$ins=$this->Admin->dcadistype_insert($distype);
			if($ins==TRUE)
				{
					$this->session->set_flashdata('Successfully','Successfully Inserted');
				}
			else
				{
					$this->session->set_flashdata('Successfully','Failed To Inserted');
				}
			redirect('Dashboard/add_dcadisposal_form','refresh');
		}
	}
	public function dcadistype_list()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Disposal Type List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['ul']=$this->Admin->dcadistype_list();
		$this->load->view('admin/dcadistype_list',$data);
	}
	public function dcadistype_list_up()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Disposal Type Update';
		$dcadistypeid= $this->uri->segment(3);
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		
		$data['dlup']=$this->Admin->dcadistype_list_up($dcadistypeid);
		$this->load->view('admin/dcadistype_list_up',$data);
	 }
	 public function dcadistypelup()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			$dcadistypeid=$this->input->post('dcadistypeid');
			$dcadistype=$this->input->post('dcadistype');
			
			$ins=$this->Admin->dcadistypelup($dcadistypeid,$dcadistype);
			if($ins==TRUE)
				{
					$this->session->set_flashdata('Successfully','Successfully Updated');
				}
			else
				{
					$this->session->set_flashdata('Successfully','Failed To Updated');
				}
					redirect('Dashboard/dcadistype_list','refresh');
				
		}
	 }
	 public function dcapending_list()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Pending List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['ul']=$this->Admin->dcapending_list();
		$this->load->view('admin/dcapending_list',$data);
	}
	public function dcaaction_inquiry()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Disciplinary Action';
		$dcaid= $this->uri->segment(3);
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['dfl']=$this->Admin->dfacheadcomments_list();
		$data['dcl']=$this->Admin->dcatype_list();
		$data['ul']=$this->Admin->dcaaction_inquiry($dcaid);
		$this->load->view('admin/dcaaction_inquiry',$data);
	 }
	public function diciplinary_inquiry_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			$dcaid=$this->input->post('dcaid');
			$dflid=$this->input->post('dflid');
			$dcatypeid=$this->input->post('dcatypeid');
			$actiondate=$this->input->post('actiondate');
			$accrdate=$this->input->post('accrdate');
			$vicrdate=$this->input->post('vicrdate');
			$inqoff=$this->input->post('inqoff');
			$letoinqoffdate=$this->input->post('letoinqoffdate');
			$inqdate=$this->input->post('inqdate');
			$letoacudate=$this->input->post('letoacudate');
			$inqredate=$this->input->post('inqredate');
			$inqcom=$this->input->post('inqcom');
			$config['upload_path']          = APPPATH. '../assets/uploads/dcaction';
			$config['allowed_types']        = 'jpg|jpeg|png';
			$config['max_size']             = 10000;
			$this->load->library('upload', $config);
			$this->upload->do_upload('pic_file');
			$upload_data = $this->upload->data();
            $docu= $upload_data['file_name'];
			$ins=$this->Admin->diciplinary_inquiry_insert($dcaid,$dflid,$dcatypeid,$actiondate,$accrdate,$vicrdate,$inqoff,$letoinqoffdate,$inqdate,$letoacudate,$inqredate,$inqcom,$docu);
			if($ins==TRUE)
				{
					$this->session->set_flashdata('Successfully','Successfully Inserted');
				}
			else
				{
					$this->session->set_flashdata('Successfully','Failed To Inserted');
				}
			redirect('Dashboard/dcapending_list','refresh');
		}
	}
	public function dcaaction_after_inquiry()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Disciplinary Action';
		$dcaid= $this->uri->segment(3);
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		//$data['dfl']=$this->Admin->dfacheadcomments_list();
		//$data['dcl']=$this->Admin->dcatype_list();
		$data['dl']=$this->Admin->dcadistype_list();
		$data['ul']=$this->Admin->dcaaction_after_inquiry($dcaid);
		$this->load->view('admin/dcaaction_after_inquiry',$data);
	 }
	 public function diciplinary_after_inquiry_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			$dcaid=$this->input->post('dcaid');
			$apme=$this->input->post('apme');
			$disposal=$this->input->post('disposal');
			$doacde=$this->input->post('doacde');
			$remarks=$this->input->post('remarks');
			$config['upload_path']          = APPPATH. '../assets/uploads/dcaction';
			$config['allowed_types']        = 'jpg|jpeg|png';
			$config['max_size']             = 10000;
			$this->load->library('upload', $config);
			$this->upload->do_upload('pic_file');
			$upload_data = $this->upload->data();
            $docu= $upload_data['file_name'];
			$ins=$this->Admin->diciplinary_after_inquiry_insert($dcaid,$apme,$disposal,$doacde,$remarks,$docu);
			if($ins==TRUE)
				{
					$this->session->set_flashdata('Successfully','Successfully Inserted');
				}
			else
				{
					$this->session->set_flashdata('Successfully','Failed To Inserted');
				}
			redirect('Dashboard/dcapending_list','refresh');
		}
	}
	public function date_wise_dcacomplete_list_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Date Wise Completed List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['allf']=$this->Admin->factory_list();
		$this->load->view('admin/date_wise_dcacomplete_list_form',$data);
				
	 }
	 public function date_wise_dcacompletelist()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Date Wise Completed List';
		//$factoryid = $this->input->post('factoryid');
		$pd = $this->input->post('pd');
		$wd = $this->input->post('wd');
		$data['utl']=$this->Admin->date_wise_dcacompletelist($pd,$wd);
		
		$this->load->view('admin/date_wise_dcacompletelist',$data);
	 }
	 public function opener_insert_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Opener Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['allf']=$this->Admin->factory_list();
		$this->load->view('admin/opener_insert_form',$data);
	 }
	 public function opener_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			$factoryid=$this->input->post('factoryid');
			$openerid=$this->input->post('openerid');
			$ins=$this->Admin->opener_insert($factoryid,$openerid);
			if($ins==TRUE)
				{
					$this->session->set_flashdata('Successfully','Successfully Inserted');
				}
			else
				{
					$this->session->set_flashdata('Successfully','Failed To Inserted');
				}
			redirect('Dashboard/opener_insert_form','refresh');
		}
	}
	public function opener_list()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Opener List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['ol']=$this->Admin->opener_list();
		$this->load->view('admin/opener_list',$data);
	}
	public function fpr_insert_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='FPR Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['allf']=$this->Admin->factory_list();
		$this->load->view('admin/fpr_insert_form',$data);
	}
	public function fpr_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			$factoryid=$this->input->post('factoryid');
			$fprid=$this->input->post('fprid');
			$ins=$this->Admin->fpr_insert($factoryid,$fprid);
			if($ins==TRUE)
				{
					$this->session->set_flashdata('Successfully','Successfully Inserted');
				}
			else
				{
					$this->session->set_flashdata('Successfully','Failed To Inserted');
				}
			redirect('Dashboard/fpr_insert_form','refresh');
		}
	}
	public function fpr_list()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='FPR List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['fprl']=$this->Admin->fpr_list();
		$this->load->view('admin/fpr_list',$data);
	}
	public function grading_insert_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Grading Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$this->load->view('admin/grading_insert_form',$data);
	}
	public function grading_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			$grading=$this->input->post('grading');
			$ins=$this->Admin->grading_insert($grading);
			if($ins==TRUE)
				{
					$this->session->set_flashdata('Successfully','Successfully Inserted');
				}
			else
				{
					$this->session->set_flashdata('Successfully','Failed To Inserted');
				}
			redirect('Dashboard/grading_insert_form','refresh');
		}
	}
	public function grading_list()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Grading List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['gl']=$this->Admin->grading_list();
		$this->load->view('admin/grading_list',$data);
	}
	public function suggession_insert_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Suggession Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['allf']=$this->Admin->factory_list();
		$data['ol']=$this->Admin->opener_list();
		$this->load->view('admin/suggession_insert_form',$data);
	 }
	public function suggession_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			$sudate=$this->input->post('sudate');
			$userid=$this->input->post('userid');
			$factoryid=$this->input->post('factoryid');
			$openerid1=$this->input->post('openerid1');
			$openerid2=$this->input->post('openerid2');
			$openerid3=$this->input->post('openerid3');
			$openerid4=$this->input->post('openerid4');
			$box=$this->input->post('box');
			$location=$this->input->post('location');
			$nameby=$this->input->post('nameby');
			$details=$this->input->post('details');
			$config['upload_path']          = APPPATH. '../assets/uploads/suggession';
			$config['allowed_types']        = 'jpg|jpeg|png|mp3|mp4|wav';
			$config['max_size']             = 10000;
			$this->load->library('upload', $config);
			$this->upload->do_upload('pic_file');
			$upload_data = $this->upload->data();
            $pic_file= $upload_data['file_name'];
			$ins=$this->Admin->suggession_insert($sudate,$userid,$factoryid,$openerid1,$openerid2,$openerid3,$openerid4,$box,$location,$nameby,$details,$pic_file);
			if($ins==TRUE)
				{
					$this->session->set_flashdata('Successfully','Successfully Inserted');
				}
			else
				{
					$this->session->set_flashdata('Successfully','Failed To Inserted');
				}
			redirect('Dashboard/suggession_insert_form','refresh');
		}
	}
	public function supending_list()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Pending List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$userid=$this->session->userdata('userid');
		$factoryid=$this->session->userdata('factoryid');
		if($this->session->userdata('user_type')==1)
		{
			$data['ul']=$this->Admin->supending_list_all();
			$this->load->view('admin/supending_list',$data);
		}
		else
		{
			$data['ul']=$this->Admin->supending_list($userid,$factoryid);
			$this->load->view('admin/supending_list',$data);
		}
		
	}
	public function suggession_inquiry()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Suggession Inquiry';
		$suid= $this->uri->segment(3);
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['gl']=$this->Admin->grading_list();
		$data['fprl']=$this->Admin->fpr_list();
		$data['ul']=$this->Admin->suggession_inquiry($suid);
		$this->load->view('admin/suggession_inquiry',$data);
	 }
	 public function suggession_inquiry_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			$suid=$this->input->post('suid');
			$corrective=$this->input->post('corrective');
			$graid=$this->input->post('graid');
			$fprid=$this->input->post('fprid');
			$inqday=$this->input->post('inqday');
			
			$ins=$this->Admin->suggession_inquiry_insert($suid,$corrective,$graid,$fprid,$inqday);
			if($ins==TRUE)
				{
					$this->session->set_flashdata('Successfully','Successfully Inserted');
				}
			else
				{
					$this->session->set_flashdata('Successfully','Failed To Inserted');
				}
			redirect('Dashboard/supending_list','refresh');
		}
	}
	public function suggession_after_inquiry()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Suggession Box';
		$suid= $this->uri->segment(3);
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		//$data['dfl']=$this->Admin->dfacheadcomments_list();
		//$data['dcl']=$this->Admin->dcatype_list();
		$data['ul']=$this->Admin->suggession_after_inquiry($suid);
		$this->load->view('admin/suggession_after_inquiry',$data);
	 } 
	public function suggession_after_inquiry_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			$suid=$this->input->post('suid');
			$fudate=$this->input->post('fudate');
			$remarks=$this->input->post('remarks');
			$ins=$this->Admin->suggession_after_inquiry_insert($suid,$fudate,$remarks);
			if($ins==TRUE)
				{
					$this->session->set_flashdata('Successfully','Successfully Inserted');
				}
			else
				{
					$this->session->set_flashdata('Successfully','Failed To Inserted');
				}
			redirect('Dashboard/supending_list','refresh');
		}
	}
	public function date_wise_sucomplete_list_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Date Wise Completed List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		if($this->session->userdata('user_type')==1)
		{
			$data['allf']=$this->Admin->factory_list();
			$this->load->view('admin/date_wise_sucomplete_list_form',$data);
		}
		else
		{
			//$data['allf']=$this->Admin->factory_list();
			$this->load->view('admin/date_wise_sucomplete_list_form',$data);
		}
		//$data['allf']=$this->Admin->factory_list();
		//$this->load->view('admin/date_wise_sucomplete_list_form',$data);
				
	 }
	 public function date_wise_sucompletelist()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Date Wise Completed List';
		$factoryid = $this->input->post('factoryid');
		$pd = $this->input->post('pd');
		$wd = $this->input->post('wd');
		if($this->session->userdata('user_type')==1)
		{
		$data['utl']=$this->Admin->date_wise_sucompletelist_all($factoryid,$pd,$wd);
		$this->load->view('admin/date_wise_sucompletelist',$data);
		}
		else
		{
		$data['utl']=$this->Admin->date_wise_sucompletelist_all($factoryid,$pd,$wd);
		$this->load->view('admin/date_wise_sucompletelist',$data);
		}
	 }
	 public function date_wise_susummary_list_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Date Wise Summary List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		//$data['allf']=$this->Admin->factory_list();
		$this->load->view('admin/date_wise_susummary_list_form',$data);
				
	 }
	 public function date_wise_susummarylist()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Date Wise Summary List';
		//$factoryid = $this->input->post('factoryid');
		$pd = $this->input->post('pd');
		$wd = $this->input->post('wd');
		$data['utl']=$this->Admin->date_wise_susummarylist($pd,$wd);
		
		$this->load->view('admin/date_wise_susummarylist',$data);
	 }
	public function cutting_insert_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Cutting Quantity Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['allf']=$this->Admin->factory_list();
		//$data['ol']=$this->Admin->opener_list();
		$this->load->view('admin/cutting_insert_form',$data);
	 }
	public function cutting_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			$userid=$this->input->post('userid');
			$factoryid=$this->input->post('factoryid');
			$cqty=$this->input->post('cqty');
			$cdate=$this->input->post('cdate');
			
			$ins=$this->Admin->cutting_insert($userid,$factoryid,$cqty,$cdate);
			if($ins==TRUE)
				{
					$this->session->set_flashdata('Successfully','Successfully Inserted');
				}
			else
				{
					$this->session->set_flashdata('Successfully','Failed To Inserted');
				}
			redirect('Dashboard/cutting_insert_form','refresh');
		}
	}
	public function sewing_insert_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Sewing Quantity Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['allf']=$this->Admin->factory_list();
		//$data['ol']=$this->Admin->opener_list();
		$this->load->view('admin/sewing_insert_form',$data);
	 }
	public function sewing_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			$userid=$this->input->post('userid');
			$factoryid=$this->input->post('factoryid');
			$sqty=$this->input->post('sqty');
			$sdate=$this->input->post('sdate');
			
			$ins=$this->Admin->sewing_insert($userid,$factoryid,$sqty,$sdate);
			if($ins==TRUE)
				{
					$this->session->set_flashdata('Successfully','Successfully Inserted');
				}
			else
				{
					$this->session->set_flashdata('Successfully','Failed To Inserted');
				}
			redirect('Dashboard/sewing_insert_form','refresh');
		}
	}
	public function finishing_insert_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Finishing Quantity Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['allf']=$this->Admin->factory_list();
		//$data['ol']=$this->Admin->opener_list();
		$this->load->view('admin/finishing_insert_form',$data);
	 }
	public function finishing_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			$userid=$this->input->post('userid');
			$factoryid=$this->input->post('factoryid');
			$fqty=$this->input->post('fqty');
			$fdate=$this->input->post('fdate');
			
			$ins=$this->Admin->finishing_insert($userid,$factoryid,$fqty,$fdate);
			if($ins==TRUE)
				{
					$this->session->set_flashdata('Successfully','Successfully Inserted');
				}
			else
				{
					$this->session->set_flashdata('Successfully','Failed To Inserted');
				}
			redirect('Dashboard/finishing_insert_form','refresh');
		}
	}
	public function date_wise_cutting_report_form()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Cutting Report';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['allf']=$this->Admin->factory_list();
		$this->load->view('admin/date_wise_cutting_report_form',$data);
				
	 }
	 public function date_wise_cutting_report()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Cutting Report';
		//$this->load->view('admin/head',$data);
//		$this->load->view('admin/toprightnav');
//		$this->load->view('admin/leftmenu');
		$factoryid=$this->input->post('factoryid');
		$pd=$this->input->post('pd');
		$wd=$this->input->post('wd');
		$data['ul']=$this->Admin->date_wise_cutting_report($factoryid,$pd,$wd);
		$this->load->view('admin/date_wise_cutting_report',$data);
	 }
	 public function date_wise_sewing_report_form()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Sewing Report';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['allf']=$this->Admin->factory_list();
		$this->load->view('admin/date_wise_sewing_report_form',$data);
				
	 }
	 public function date_wise_sewing_report()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Sewing Report';
		//$this->load->view('admin/head',$data);
//		$this->load->view('admin/toprightnav');
//		$this->load->view('admin/leftmenu');
		$factoryid=$this->input->post('factoryid');
		$pd=$this->input->post('pd');
		$wd=$this->input->post('wd');
		$data['ul']=$this->Admin->date_wise_sewing_report($factoryid,$pd,$wd);
		$this->load->view('admin/date_wise_sewing_report',$data);
	 }
	  public function date_wise_finishing_report_form()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Finishing Report';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['allf']=$this->Admin->factory_list();
		$this->load->view('admin/date_wise_finishing_report_form',$data);
				
	 }
	 public function date_wise_finishing_report()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Finishing Report';
		//$this->load->view('admin/head',$data);
//		$this->load->view('admin/toprightnav');
//		$this->load->view('admin/leftmenu');
		$factoryid=$this->input->post('factoryid');
		$pd=$this->input->post('pd');
		$wd=$this->input->post('wd');
		$data['ul']=$this->Admin->date_wise_finishing_report($factoryid,$pd,$wd);
		$this->load->view('admin/date_wise_finishing_report',$data);
	 }
	 public function vehicle_insert_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Vehicle Info Insert';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		//$data['allf']=$this->Admin->factory_list();
		//$data['ol']=$this->Admin->opener_list();
		$this->load->view('admin/vehicle_insert_form',$data);
	 }
	 public function vehicle_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			$reid=$this->input->post('reid');
			$user=$this->input->post('user');
			$factory=$this->input->post('factory');
			$cdate=$this->input->post('cdate');
			
			$ins=$this->Admin->vehicle_insert($name,$user,$factory);
			if($ins==TRUE)
				{
					$this->session->set_flashdata('Successfully','Successfully Inserted');
				}
			else
				{
					$this->session->set_flashdata('Successfully','Failed To Inserted');
				}
			redirect('Dashboard/vehicle_insert_form','refresh');
		}
	}
	public function idea_insert_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Idea Harbor';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		//$data['allf']=$this->Admin->factory_list();
		//$data['alld']=$this->Admin->division_list();
		//$data['allty']=$this->Admin->tasktype_list();
		$this->load->view('admin/idea_insert_form',$data);
				
	 }
	 public function idea_insert()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			
			$idea=$this->form_validation->set_rules('idea', 'Idea', 'required');
			
			
			if($this->form_validation->run()==FALSE)
				{
					$this->ideainsert_form();
				}
			else
				{
					$userid=$this->input->post('userid');
					
					$idea=$this->input->post('idea');
					
					$config['upload_path']          = APPPATH. '../assets/uploads/idea';
					$config['allowed_types']        = 'jpg|png|jpeg|pdf';
					$config['max_size']             = 10000;
					$this->load->library('upload', $config);
					 $this->upload->do_upload('pic_file');
					//if ( ! $this->upload->do_upload('pic_file')){
                //$error = array('error' => $this->upload->display_errors());
                //$this->load->view('upload_form', $error);
            //}else{
                //file is uploaded successfully
                //now get the file uploaded data 
                $upload_data = $this->upload->data();
                //get the uploaded file name
                $pic_file= $upload_data['file_name'];
				$pic_file =  str_replace(' ', '_', $pic_file);
				
					$ins=$this->Admin->idea_insert($userid,$idea,$pic_file);
			
					if($ins==TRUE)
						{
							$this->session->set_flashdata('Successfully','Successfully Inserted');
						}
					else
						{
							$this->session->set_flashdata('Successfully','Failed To Inserted');
						}
					redirect('Dashboard/idea_insert_form','refresh');
				}
		}
	}
	public function date_wise_idea_list_form()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Idea List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		//$data['allf']=$this->Admin->factory_list();
		$this->load->view('admin/date_wise_idea_list_form',$data);
				
	 }
	 public function date_wise_idea_list()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Idea List';
		//$this->load->view('admin/head',$data);
//		$this->load->view('admin/toprightnav');
//		$this->load->view('admin/leftmenu');
		//$factoryid=$this->input->post('factoryid');
		$pd=$this->input->post('pd');
		$wd=$this->input->post('wd');
		$data['ul']=$this->Admin->date_wise_idea_list($pd,$wd);
		$this->load->view('admin/date_wise_idea_list',$data);
	 }
}
