<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Login extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guuseride/general/urls.html
	 */
	public function index()
		{
			if($this->session->userdata('userid')!='')
				{
					redirect('Dashboard');
				}
			if(!$this->session->userdata('userid'))
				{
					$this->load->database();
					$this->load->model('Login_Model');
					$data['title']='HARMONIZER';
					$this->load->view('admin/head',$data);
					//$data['allf']=$this->Login_Model->factory_list();
					$this->load->view('admin/login_form',$data);
				}
	 	}
	
	
	public function login_form()
		{
			if($this->session->userdata('userid')!='')
			{
				redirect('Dashboard');
			}
			if(!$this->session->userdata('userid'))
			{
				$data['title']='Login';
				$this->load->view('admin/head',$data);
				$data['allf']=$this->Login_Model->factory_list();
				$this->load->view('admin/login_form',$data);
			}
			
		 }
	 
	 public function login()
		{
			$this->load->database();
			$this->load->library('form_validation');
			$this->load->model('Login_Model');
			if($this->input->post('submit'))
				{
					$userid=$this->form_validation->set_rules('userid','User ID','required');
					$password=$this->form_validation->set_rules('password','Password','required');
					//$user_type=$this->form_validation->set_rules('user_type','User Type','required');
					//$unit=$this->form_validation->set_rules('unit','Unit','required');
					if($this->form_validation->run()==FALSE)
						{
							$data['title']='HARMONIZER';
							$this->load->view('admin/head',$data);
							$data['allf']=$this->Login_Model->factory_list();
							$this->load->view('admin/login_form',$data);
						}
					else
						{
							$userid=$this->input->post('userid');
							$password=$this->input->post('password');
							//$user_type=$this->input->post('user_type');
							//$unit=$this->input->post('unit');
							$result=$this->Login_Model->login($userid,$password);
							if($result)
								{
									//$arr=print_r($result);
									//echo $arr[0]['name'];
									//foreach($result as $row)
//									{
//										$ename=$row['ename'];
//									$user_type=$row['user_type'];
//									$factoryid=$row['factoryid'];
//									$pic=$row['image'];
//									$accessid=$row['accessid'];
//									$session_data = array(  
//                          			'userid'     =>     $userid,
//									'user_type'     =>     $user_type,
//									'factoryid'     =>     $factoryid,
//									'ename'     =>     $ename,
//									'pic'     =>     $pic,
//									'accessid'     =>     $accessid
//                     				);
//									$this->session->set_userdata($session_data);  
//									}
									$ename=$result[0]['ename'];
									$user_type=$result[0]['user_type'];
									$factoryid=$result[0]['factoryid'];
									$pic=$result[0]['image'];
									$basicinfo_read=$result[0]['basicinfo_read'];
									$basicinfo_write=$result[0]['basicinfo_write'];
									$licensetracker_read=$result[0]['licensetracker_read'];
									$licensetracker_write=$result[0]['licensetracker_write'];
									$tasktracker_read=$result[0]['tasktracker_read'];
									$tasktracker_write=$result[0]['tasktracker_write'];
									$noticealbum_read=$result[0]['noticealbum_read'];
									$noticealbum_write=$result[0]['noticealbum_write'];
									$policyalbum_read=$result[0]['policyalbum_read'];
									$policyalbum_write=$result[0]['policyalbum_write'];
									$eventalbum_read=$result[0]['eventalbum_read'];
									$eventalbum_write=$result[0]['eventalbum_write'];
									$training_read=$result[0]['training_read'];
									$training_write=$result[0]['training_write'];
									$swot_read=$result[0]['swot_read'];
									$swot_write=$result[0]['swot_write'];
									$eobservation_read=$result[0]['eobservation_read'];
									$eobservation_write=$result[0]['eobservation_write'];
									$materialmovement_read=$result[0]['materialmovement_read'];
									$materialmovement_write=$result[0]['materialmovement_write'];
									$materialmovement_allunit_read=$result[0]['materialmovement_allunit_read'];
									$materialmovement_challan_create=$result[0]['materialmovement_challan_create'];
									$hr_read=$result[0]['hr_read'];
									$hr_write=$result[0]['hr_write'];
									$calendar_read=$result[0]['calendar_read'];
									$calendar_write=$result[0]['calendar_write'];
									$compliancecap_read=$result[0]['compliancecap_read'];
									$compliancecap_write=$result[0]['compliancecap_write'];
									$scorecard_read=$result[0]['scorecard_read'];
									$scorecard_write=$result[0]['scorecard_write'];
									$dcaction_read=$result[0]['dcaction_read'];
									$dcaction_write=$result[0]['dcaction_write'];
									$suggessionbox_read=$result[0]['suggessionbox_read'];
									$suggessionbox_write=$result[0]['suggessionbox_write'];
									$production_read=$result[0]['production_read'];
									$production_write=$result[0]['production_write'];
									$vehicletracker_read=$result[0]['vehicletracker_read'];
									$vehicletracker_write=$result[0]['vehicletracker_write'];
									$ideaharbor_read=$result[0]['ideaharbor_read'];
									$ideaharbor_write=$result[0]['ideaharbor_write'];
									$od_read=$result[0]['od_read'];
									$bloodgroup_read=$result[0]['bloodgroup_read'];
									$bloodgroup_write=$result[0]['bloodgroup_write'];
									$recruitment_read=$result[0]['recruitment_read'];
									$recruitment_write=$result[0]['recruitment_write'];
									$ir_read=$result[0]['ir_read'];
									$ir_write=$result[0]['ir_write'];
									$basl_read=$result[0]['basl_read'];
									$basl_write=$result[0]['basl_write'];
									$admin_read=$result[0]['admin_read'];
									$admin_write=$result[0]['admin_write'];
									$session_data = array(  
                          			'userid'     =>     $userid,
									'user_type'     =>     $user_type,
									'factoryid'     =>     $factoryid,
									'ename'     =>     $ename,
									'pic'     =>     $pic,
									'basicinfo_read'     =>     $basicinfo_read,
									'basicinfo_write'     =>     $basicinfo_write,
									'licensetracker_read'     =>     $licensetracker_read,
									'licensetracker_write'     =>     $licensetracker_write,
									'tasktracker_read'     =>     $tasktracker_read,
									'tasktracker_write'     =>     $tasktracker_write,
									'noticealbum_read'     =>     $noticealbum_read,
									'noticealbum_write'     =>     $noticealbum_write,
									'policyalbum_read'     =>     $policyalbum_read,
									'policyalbum_write'     =>     $policyalbum_write,
									'eventalbum_read'     =>     $eventalbum_read,
									'eventalbum_write'     =>     $eventalbum_write,
									'training_read'     =>     $training_read,
									'training_write'     =>     $training_write,
									'swot_read'     =>     $swot_read,
									'swot_write'     =>     $swot_write,
									'eobservation_read'     =>     $eobservation_read,
									'eobservation_write'     =>     $eobservation_write,
									'materialmovement_read'     =>     $materialmovement_read,
									'materialmovement_write'     =>     $materialmovement_write,
									'materialmovement_allunit_read'     =>     $materialmovement_allunit_read,
									'materialmovement_challan_create'     =>     $materialmovement_challan_create,
									'hr_read'     =>     $hr_read,
									'hr_write'     =>     $hr_write,
									'calendar_read'     =>     $calendar_read,
									'calendar_write'     =>     $hr_write,
									'compliancecap_read'     =>     $compliancecap_read,
									'compliancecap_write'     =>     $compliancecap_write,
									'scorecard_read'     =>     $scorecard_read,
									'scorecard_write'     =>     $scorecard_write,
									'dcaction_read'     =>     $dcaction_read,
									'dcaction_write'     =>     $dcaction_write,
									'suggessionbox_read'     =>     $suggessionbox_read,
									'suggessionbox_write'     =>     $suggessionbox_write,
									'production_read'     =>     $production_read,
									'production_write'     =>     $production_write,
									'vehicletracker_read'     =>     $vehicletracker_read,
									'vehicletracker_write'     =>     $vehicletracker_write,
									'ideaharbor_read'     =>     $ideaharbor_read,
									'ideaharbor_write'     =>     $ideaharbor_write,
									'od_read'     =>     $od_read,
									'bloodgroup_read'     =>     $bloodgroup_read,
									'bloodgroup_write'     =>     $bloodgroup_write,
									'recruitment_read'     =>     $recruitment_read,
									'recruitment_write'     =>     $recruitment_write,
									'ir_read'     =>     $ir_read,
									'ir_write'     =>     $ir_write,
									'basl_read'     =>     $basl_read,
									'basl_write'     =>     $basl_write,
									'admin_read'     =>     $admin_read,
									'admin_write'     =>     $admin_write
                     				);  
                     				$this->session->set_userdata($session_data);
								 	redirect('User_Login');
					 				//$this->load->view('login_view');
								}
						 	else
								{
									$this->session->set_flashdata('error', 'Invaluserid User ID and Password');
									$data['title']='HARMONIZER';
									$this->load->view('admin/head',$data);
									$data['allf']=$this->Login_Model->factory_list();
									$this->load->view('admin/login_form',$data);
								}
						 }
					}
			}
		
		public function logout()  
      		{  
		   		//$this->session->sess_destroy();
		   		$this->session->unset_userdata('userid');  
           		redirect('User_Login');  
      		} 
			
			
}
