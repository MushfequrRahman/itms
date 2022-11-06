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
		$data['title']='Dashboard';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$userid=$this->session->userdata('userid');
		$data['tid']=$this->Admin->assignee_task_list1($userid);
		//$data['dstatus']=$this->Admin->dashboard_status();
		$this->load->view('admin/dashboard',$data);
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
					$userid=$this->input->post('userid');
					$password=$this->input->post('password');
					$config['upload_path']          = APPPATH. '../assets/uploads/users';
					$config['allowed_types']        = 'jpg|png';
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
				
				$ins=$this->Admin->user_insert($factoryid,$divisionid,$departmentid,$sectionid,$subsectionid,$location,$ename,$bname,$parentdesignationid,$childdesignationid,$religion,$maritual,$dobdate,$dojdate,$hdistrict,$epermanentaddress,$bpermanentaddress,$epresentaddress,$bpresentaddress,$nid,$bloodgroup,$gender,$salary,$efficiency,$imark,$oemail,$pemail,$pmobile,$emobile,$usertypeid,$userid,$password,$pic_file);
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
		$data['ul']=$this->Admin->user_list();
		$this->load->view('admin/user_list',$data);
				
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
					$config['allowed_types']        = 'jpg|png';
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
			$ins=$this->Admin->ulup($factoryid,$divisionid,$departmentid,$sectionid,$subsectionid,$location,$ename,$bname,$parentdesignationid,$childdesignationid,$religion,$maritual,$dobdate,$dojdate,$hdistrict,$epermanentaddress,$bpermanentaddress,$epresentaddress,$bpresentaddress,$nid,$bloodgroup,$gender,$salary,$efficiency,$imark,$oemail,$pemail,$pmobile,$emobile,$usertypeid,$userid,$password);
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
	 public function createtask_insert_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Create Task';
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
	public function task_list()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Task List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['tl']=$this->Admin->task_list();
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
		$data['tid']=$this->Admin->completed_task_list();
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
		$data['title']='Factory Insert';
		//$this->load->view('admin/head',$data);
//		$this->load->view('admin/toprightnav');
//		$this->load->view('admin/leftmenu');
		$userid = $this->input->post('userid');
		$data['utl']=$this->Admin->user_task_complete_list($userid);
		//$query=$this->db->query("SELECT COUNT(assigneeid) AS totaltask,SUM(ratings) AS ratings FROM assignee_task_list WHERE assigneeid='$userid' AND assigneestatus=0");
//		$record = $query->result();
//		$data = array();
//		foreach($record as $row) 
//			{
//				$data['label'][] = $row->totaltask;
//				$data['data'][] = (int) $row->ratings;
//			}
//		$data['chart_data'] = json_encode($data);
//	  	$data['chart_data1'] =$record;
		$this->load->view('admin/user_task_complete',$data);
				
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
		$data['ll']=$this->Admin->license_list();
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
					$divisionid=$this->input->post('divisionid');
					$departmentid=$this->input->post('departmentid');
					//$sectionid=$this->input->post('sectionid');
					//$subsectionid=$this->input->post('subsectionid');
					$licensename=$this->input->post('licensename');
					$reauthority=$this->input->post('reauthority');
					$issuedate=$this->input->post('issuedate');
					$renewaldate=$this->input->post('renewaldate');
					$processtime=$this->input->post('processtime');
					$regulatoryfee=$this->input->post('regulatoryfee');
					$misexp=$this->input->post('misexp');
			$ins=$this->Admin->licenselup($licenseid,$factoryid,$divisionid,$departmentid,$licensename,$reauthority,$issuedate,$renewaldate,$processtime,$regulatoryfee,$misexp);
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
			
			if($this->form_validation->run()==FALSE)
				{
					$this->policy_album_form();
				}
			else
				{
					
					$unit=$this->input->post('unit');
					
					$policyname=$this->input->post('policyname');
					
					$config['upload_path']          = APPPATH. '../assets/uploads/policy';
					$config['allowed_types']        = 'jpg|png|pdf|doc|docx';
					$config['max_size']             = 5000000;
					$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('pic_file')){
				$error = array('error' => $this->upload->display_errors());
				//$this->load->view('upload_form', $error);
			}
					$upload_data = $this->upload->data();
					$pic_file = $upload_data['file_name'];
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
						$_FILES['file']['error'] = $_FILES['pic_file']['error'][$i];
						$_FILES['file']['size'] = $_FILES['pic_file']['size'][$i];
 						$config['upload_path'] = APPPATH. '../assets/uploads/event'; 
          				$config['allowed_types'] = 'jpg|png';
						$config['max_size'] = '5000000';
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
										$data['userid']=$filedata[30];
										$data['password']=$filedata[31];
										$data['image']=$filedata[32];
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
	public function challan_create_form()
	 {
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Challan Create';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['allf']=$this->Admin->factory_list();
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
			$rfactoryid=$this->form_validation->set_rules('rfactoryid', 'Receive Factory Name', 'required');
			
			if($this->form_validation->run()==FALSE)
				{
					$this->challan_create_form();
				}
			else
				{
					$sfactoryid=$this->input->post('sfactoryid');
					$rfactoryid=$this->input->post('rfactoryid');
					$location=$this->input->post('location');
					$item=$this->input->post('item');
					$sqty=$this->input->post('sqty');
					$unit=$this->input->post('unit');
					$ins=$this->Admin->challan_create($sfactoryid,$rfactoryid,$location,$item,$sqty,$unit);
			
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
	public function challan_list()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Challan List';
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['ul']=$this->Admin->challan_list();
		$this->load->view('admin/challan_list',$data);
				
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
			$origin=$this->form_validation->set_rules('origin', 'Origin', 'required');
			
			$local_address=$this->form_validation->set_rules('local_address', 'Local Address', 'required');
			
			if($this->form_validation->run()==FALSE)
				{
					$this->buyer_insert_form();
				}
			else
				{
					$buyername=$this->input->post('buyername');
					$origin=$this->input->post('origin');
					$local_address=$this->input->post('local_address');
					
					
					$config['upload_path']          = APPPATH. '../assets/uploads/buyer';
					$config['allowed_types']        = 'jpg|png';
					$config['max_size']             = 10000;
					$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('pic_file')){
				$error = array('error' => $this->upload->display_errors());
				//$this->load->view('upload_form', $error);
			}
			$upload_data = $this->upload->data();
			$pic_file = $upload_data['file_name'];
					$ins=$this->Admin->buyer_insert($pic_file,$buyername,$origin,$local_address);
			
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
		$buyername= urldecode($this->uri->segment(3));
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		//$data['all_line']=$this->Admin->all_line();
		//$data['opskill']=$this->Admin->opskill($opid);
		$data['blup']=$this->Admin->buyer_list_up($buyername);
		$this->load->view('admin/buyer_list_up',$data);
	 }
	 public function blup()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			$buyer=$this->input->post('buyer');
			$buyername=$this->input->post('buyername');
			$origin=$this->input->post('origin');
			$local_address=$this->input->post('local_address');
			
			$ins=$this->Admin->blup($buyer,$buyername,$origin,$local_address);
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
		$buyername= $this->uri->segment(3);
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		//$data['alld']=$this->Admin->empdept_list();
		//$data['opskill']=$this->Admin->opskill($opid);
		$data['bimglup']=$this->Admin->buyer_list_up($buyername);
		$this->load->view('admin/buyer_imglist_up',$data);
	 }
	 public function bimglup()
	 {
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if($this->input->post('submit'))
		{
			$buyername=$this->input->post('buyername');
			$config['upload_path']          = APPPATH. '../assets/uploads/buyer';
					$config['allowed_types']        = 'jpg|png';
					$config['max_size']             = 10000;
					$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('pic_file')){
				$error = array('error' => $this->upload->display_errors());
				//$this->load->view('upload_form', $error);
			}
			$upload_data = $this->upload->data();
			$pic_file = $upload_data['file_name'];
			$ins=$this->Admin->bimglup($buyername,$pic_file);
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
	


    
}
