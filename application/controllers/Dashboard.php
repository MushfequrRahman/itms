<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Spreadsheet
use PhpOffice\PhpSpreadsheet\Spreadsheet;

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//$this->load->library('session');

		if (!$this->session->userdata('userid')) {
			redirect('User_Login');
		}
	}
	public function index()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'Dashboard';
		$this->load->view('admin/head', $data);
		$userid = $this->session->userdata('userid');
		$usertype = $this->session->userdata('user_type');
		$factoryid = $this->session->userdata('factoryid');

		$query =  $this->db->query("SELECT fid,SUM(price*qty) AS price,
		COUNT(DISTINCT(mpr_insert_id.smprid)) AS tsmprid,
		qty FROM mpr_insert_id
		JOIN mpr_insert ON mpr_insert.smprid=mpr_insert_id.smprid
		WHERE MONTH(mdate)=MONTH(NOW()) AND YEAR(mdate)=YEAR(NOW())
		GROUP BY fid");
		$record = $query->result();
		$data = array();
		foreach ($record as $row) {

			$data['label'][] = $row->fid . '(' . $row->tsmprid . ')';

			$data['data'][] = (int) $row->price;
		}

		$data['chart_data'] = json_encode($data);
		$this->load->view('admin/toprightnav', $data);
		$this->load->view('admin/leftmenu');
		$this->load->view('admin/dashboard', $data);
	}
	public function factory_insert_form()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'Factory Insert';
		$this->load->view('admin/head', $data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$this->load->view('admin/factory_insert_form', $data);
	}
	public function fac_insert()
	{
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if ($this->input->post('submit')) {
			$facid = $this->form_validation->set_rules('facid', 'Factory ID', 'required');
			$facname = $this->form_validation->set_rules('facname', 'Factory Name', 'required');
			$fac_address = $this->form_validation->set_rules('fac_address', 'Factory Address', 'required');
			if ($this->form_validation->run() == FALSE) {
				$this->fac_insert_form();
			} else {
				$facid = $this->input->post('facid');
				$facname = $this->input->post('facname');
				$fac_address = $this->input->post('fac_address');
				$ins = $this->Admin->fac_insert($facid, $facname, $fac_address);
				if ($ins == TRUE) {
					$this->session->set_flashdata('Successfully', 'Successfully Inserted');
				} else {
					$this->session->set_flashdata('Successfully', 'Failed To Inserted');
				}
				redirect('Dashboard/factory_insert_form', 'refresh');
			}
		}
	}
	public function factory_list()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'Factory List';
		$this->load->view('admin/head', $data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['fl'] = $this->Admin->factory_list();
		$this->load->view('admin/factory_list', $data);
	}
	public function factory_list_up()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'Factory Info Update';
		$facid = $this->uri->segment(3);
		$this->load->view('admin/head', $data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		//$data['all_line']=$this->Admin->all_line();
		//$data['opskill']=$this->Admin->opskill($opid);
		$data['flup'] = $this->Admin->factory_list_up($facid);
		$this->load->view('admin/factory_list_up', $data);
	}
	public function flup()
	{
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if ($this->input->post('submit')) {
			$fid = $this->input->post('fid');
			$facid = $this->input->post('facid');
			$factoryname = $this->input->post('factoryname');
			$factory_address = $this->input->post('factory_address');

			$ins = $this->Admin->flup($fid, $facid, $factoryname, $factory_address);
			if ($ins == TRUE) {
				$this->session->set_flashdata('Successfully', 'Successfully Updated');
			} else {
				$this->session->set_flashdata('Successfully', 'Failed To Updated');
			}
			redirect('Dashboard/factory_list', 'refresh');
		}
	}
	public function department_insert_form()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'Department Insert';
		$this->load->view('admin/head', $data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$this->load->view('admin/department_insert_form', $data);
	}
	public function department_insert()
	{
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if ($this->input->post('submit')) {
			$department = $this->form_validation->set_rules('department', 'Department Name', 'required');
			if ($this->form_validation->run() == FALSE) {
				$this->department_insert_form();
			} else {
				$department = $this->input->post('department');
				$ins = $this->Admin->department_insert($department);

				if ($ins == TRUE) {
					$this->session->set_flashdata('Successfully', 'Successfully Inserted');
				} else {
					$this->session->set_flashdata('Successfully', 'Failed To Inserted');
				}
				redirect('Dashboard/department_insert_form', 'refresh');
			}
		}
	}
	public function department_list()
	{

		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'Department List';
		$this->load->view('admin/head', $data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['ul'] = $this->Admin->department_list();
		$this->load->view('admin/department_list', $data);
	}
	public function department_list_up()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'Department Info Update';
		$deptid = $this->uri->segment(3);
		$this->load->view('admin/head', $data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['dlup'] = $this->Admin->department_list_up($deptid);
		$this->load->view('admin/department_list_up', $data);
	}
	public function departmentlup()
	{
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if ($this->input->post('submit')) {
			$deptid = $this->input->post('deptid');
			$departmentname = $this->input->post('departmentname');

			$ins = $this->Admin->departmentlup($deptid, $departmentname);
			if ($ins == TRUE) {
				$this->session->set_flashdata('Successfully', 'Successfully Updated');
			} else {
				$this->session->set_flashdata('Successfully', 'Failed To Updated');
			}
			redirect('Dashboard/department_list', 'refresh');
		}
	}
	public function designation_insert_form()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'Designation Insert';
		$this->load->view('admin/head', $data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$this->load->view('admin/designation_insert_form', $data);
	}
	public function designation_insert()
	{
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if ($this->input->post('submit')) {
			$designation = $this->form_validation->set_rules('designation', 'Designation', 'required');
			if ($this->form_validation->run() == FALSE) {
				$this->designation_insert_form();
			} else {
				$designation = $this->input->post('designation');
				$ins = $this->Admin->designation_insert($designation);
				if ($ins == TRUE) {
					$this->session->set_flashdata('Successfully', 'Successfully Inserted');
				} else {
					$this->session->set_flashdata('Successfully', 'Failed To Inserted');
				}
				redirect('Dashboard/designation_insert_form', 'refresh');
			}
		}
	}
	public function designation_list()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'Designation List';
		$this->load->view('admin/head', $data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['ul'] = $this->Admin->designation_list();
		$this->load->view('admin/designation_list', $data);
	}
	public function designation_list_up()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'Designation Update';
		$designationid = $this->uri->segment(3);
		$this->load->view('admin/head', $data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['dlup'] = $this->Admin->designation_list_up($designationid);
		$this->load->view('admin/designation_list_up', $data);
	}
	public function designationlup()
	{
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if ($this->input->post('submit')) {
			$designation = $this->input->post('edesignation');
			$ins = $this->Admin->parentdesignationlup($designationid, $designation);
			if ($ins == TRUE) {
				$this->session->set_flashdata('Successfully', 'Successfully Updated');
			} else {
				$this->session->set_flashdata('Successfully', 'Failed To Updated');
			}
			redirect('Dashboard/designation_list', 'refresh');
		}
	}
	public function usertype_insert_form()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'User Type Insert';
		$this->load->view('admin/head', $data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$this->load->view('admin/usertype_insert_form', $data);
	}
	public function usertype_insert()
	{
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if ($this->input->post('submit')) {
			$usertype = $this->form_validation->set_rules('usertype', 'User type', 'required');
			if ($this->form_validation->run() == FALSE) {
				$this->usertype_insert_form();
			} else {
				$usertype = $this->input->post('usertype');
				$ins = $this->Admin->usertype_insert($usertype);

				if ($ins == TRUE) {
					$this->session->set_flashdata('Successfully', 'Successfully Inserted');
				} else {
					$this->session->set_flashdata('Successfully', 'Failed To Inserted');
				}
				redirect('Dashboard/usertype_insert_form', 'refresh');
			}
		}
	}
	public function usertype_list()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'User type List';
		$this->load->view('admin/head', $data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['ul'] = $this->Admin->usertype_list();
		$this->load->view('admin/usertype_list', $data);
	}
	public function usertype_list_up()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'User Type Update';
		$usertypeid = $this->uri->segment(3);
		$this->load->view('admin/head', $data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');

		$data['dlup'] = $this->Admin->usertype_list_up($usertypeid);
		$this->load->view('admin/usertype_list_up', $data);
	}
	public function usertypelup()
	{
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if ($this->input->post('submit')) {
			$usertypeid = $this->input->post('usertypeid');
			$usertype = $this->input->post('usertype');

			$ins = $this->Admin->usertypelup($usertypeid, $usertype);
			if ($ins == TRUE) {
				$this->session->set_flashdata('Successfully', 'Successfully Updated');
			} else {
				$this->session->set_flashdata('Successfully', 'Failed To Updated');
			}
			redirect('Dashboard/usertype_list', 'refresh');
		}
	}
	public function userstatus_insert_form()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'User Status Insert';
		$this->load->view('admin/head', $data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$this->load->view('admin/userstatus_insert_form', $data);
	}
	public function userstatus_insert()
	{
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if ($this->input->post('submit')) {
			$userstatus = $this->form_validation->set_rules('userstatus', 'User Status', 'required');
			if ($this->form_validation->run() == FALSE) {
				$this->userstatus_insert_form();
			} else {
				$userstatus = $this->input->post('userstatus');

				$ins = $this->Admin->userstatus_insert($userstatus);

				if ($ins == TRUE) {
					$this->session->set_flashdata('Successfully', 'Successfully Inserted');
				} else {
					$this->session->set_flashdata('Successfully', 'Failed To Inserted');
				}
				redirect('Dashboard/userstatus_insert_form', 'refresh');
			}
		}
	}
	public function userstatus_list()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'User Status List';
		$this->load->view('admin/head', $data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['ul'] = $this->Admin->userstatus_list();
		$this->load->view('admin/userstatus_list', $data);
	}
	public function userstatus_list_up()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'User Status Info Update';
		$userstatusid = $this->uri->segment(3);
		$this->load->view('admin/head', $data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['dlup'] = $this->Admin->userstatus_list_up($userstatusid);
		$this->load->view('admin/userstatus_list_up', $data);
	}
	public function userstatuslup()
	{
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if ($this->input->post('submit')) {
			$userstatusid = $this->input->post('userstatusid');
			$userstatus = $this->input->post('userstatus');

			$ins = $this->Admin->userstatuslup($userstatusid, $userstatus);
			if ($ins == TRUE) {
				$this->session->set_flashdata('Successfully', 'Successfully Updated');
			} else {
				$this->session->set_flashdata('Successfully', 'Failed To Updated');
			}
			redirect('Dashboard/userstatus_list', 'refresh');
		}
	}
	public function user_insert_form()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'User Info Insert';
		$this->load->view('admin/head', $data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['ul'] = $this->Admin->factory_list();
		$data['ul1'] = $this->Admin->department_list();
		$data['ul2'] = $this->Admin->designation_list();
		$data['ul3'] = $this->Admin->usertype_list();
		$this->load->view('admin/user_insert_form', $data);
	}
	public function user_insert()
	{
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if ($this->input->post('submit')) {
			$factoryid = $this->input->post('factoryid');
			$departmentid = $this->input->post('departmentid');
			$name = $this->input->post('name');
			$designationid = $this->input->post('designationid');
			$oemail = $this->input->post('oemail');
			$pmobile = $this->input->post('pmobile');
			$usertypeid = $this->input->post('usertypeid');
			$userid = $this->input->post('userid');
			$password = $this->input->post('password');
			$config['upload_path']          = APPPATH . '../assets/uploads/users';
			$config['allowed_types']        = 'jpg|jpeg|png';
			$config['max_size']             = 10000;
			$this->load->library('upload', $config);
			$this->upload->do_upload('pic_file');
			$upload_data = $this->upload->data();
			$pic_file = $upload_data['file_name'];
			$pic_file =  str_replace(' ', '_', $pic_file);
			$ins = $this->Admin->user_insert($factoryid, $departmentid, $designationid, $name, $oemail, $pmobile, $usertypeid, $userid, $password, $pic_file);
			if ($ins == TRUE) {
				$this->session->set_flashdata('Successfully', 'Successfully Inserted');
			} else {
				$this->session->set_flashdata('Successfully', 'Failed To Inserted');
			}
			redirect('Dashboard/user_insert_form', 'refresh');
		}
	}
	public function user_list()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'User List';
		$this->load->view('admin/head', $data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['fl'] = $this->Admin->factory_list();
		$this->load->view('admin/user_list', $data);
	}
	public function factorywise_user_list()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'User List';
		$factoryid = $this->input->post('factoryid');
		$data['ul'] = $this->Admin->factorywise_user_list($factoryid);
		$this->load->view('admin/factorywise_user_list', $data);
	}
	public function user_imglist_up()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'User Info Update';
		$urid = $this->uri->segment(3);
		$this->load->view('admin/head', $data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['elup'] = $this->Admin->user_list_up($urid);
		$this->load->view('admin/user_imglist_up', $data);
	}
	public function eimglup()
	{
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if ($this->input->post('submit')) {
			$urid = $this->input->post('urid');
			$config['upload_path']          = APPPATH . '../assets/uploads/users';
			$config['allowed_types']        = 'jpg|jpeg|png|bmp';
			$config['max_size']             = 10000;
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('pic_file')) {
				$error = array('error' => $this->upload->display_errors());
				//$this->load->view('upload_form', $error);
			}
			$upload_data = $this->upload->data();
			$pic_file = $upload_data['file_name'];
			$ins = $this->Admin->eimglup($urid, $pic_file);
			if ($ins == TRUE) {
				$this->session->set_flashdata('Successfully', 'Successfully Updated');
			} else {
				$this->session->set_flashdata('Successfully', 'Failed To Updated');
			}
			redirect('Dashboard/user_list', 'refresh');
		}
	}
	public function user_list_up()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'User Info Update';
		$userid = $this->uri->segment(3);
		$this->load->view('admin/head', $data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['ul'] = $this->Admin->factory_list();
		$data['ul1'] = $this->Admin->department_list();
		$data['ul2'] = $this->Admin->designation_list();
		$data['ul3'] = $this->Admin->usertype_list();
		$data['ul4'] = $this->Admin->userstatus_list();
		$data['ulup'] = $this->Admin->user_list_up($userid);
		$this->load->view('admin/user_list_up', $data);
	}
	public function ulup()
	{
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if ($this->input->post('submit')) {
			$factoryid = $this->input->post('factoryid');
			$departmentid = $this->input->post('departmentid');
			$name = $this->input->post('name');
			$designationid = $this->input->post('designationid');
			$email = $this->input->post('email');
			$mobile = $this->input->post('mobile');
			$usertypeid = $this->input->post('usertypeid');
			$userstatusid = $this->input->post('userstatusid');
			$userid = $this->input->post('userid');
			$password = $this->input->post('password');
			$indate = $this->input->post('indate');
			$userid = $this->input->post('userid');


			$ins = $this->Admin->ulup($factoryid, $departmentid, $designationid, $name, $email, $mobile, $usertypeid, $userstatusid, $userid, $password, $indate);
			if ($ins == TRUE) {
				$this->session->set_flashdata('Successfully', 'Successfully Updated');
			} else {
				$this->session->set_flashdata('Successfully', 'Failed To Updated');
			}
			redirect('Dashboard/user_list', 'refresh');
		}
	}

	public function user_transfer_form()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'User Transfer';
		$userid = $this->uri->segment(3);
		$this->load->view('admin/head', $data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['ul'] = $this->Admin->factory_list();
		$data['ul1'] = $this->Admin->department_list();
		$data['ul2'] = $this->Admin->designation_list();
		$data['ul3'] = $this->Admin->usertype_list();
		$data['ul4'] = $this->Admin->userstatus_list();
		$data['ulup'] = $this->Admin->user_list_up($userid);
		$this->load->view('admin/user_transfer_form', $data);
	}
	public function user_transfer()
	{
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if ($this->input->post('submit')) {
			$factoryid = $this->input->post('factoryid');
			$departmentid = $this->input->post('departmentid');
			$designationid = $this->input->post('designationid');
			$name = $this->input->post('name');
			$oemail = $this->input->post('oemail');
			$mobile = $this->input->post('mobile');
			$usertypeid = $this->input->post('usertypeid');
			$userstatusid = $this->input->post('userstatusid');
			$ruserid = $this->input->post('ruserid');
			$password = $this->input->post('password');
			$userid = $this->input->post('userid');
			$pic_file = $this->input->post('pic_file');


			$ins = $this->Admin->user_transfer($factoryid, $departmentid, $designationid, $name, $oemail, $mobile, $usertypeid, $userstatusid, $userid, $password, $ruserid, $pic_file);
			if ($ins == TRUE) {
				$this->session->set_flashdata('Successfully', 'Successfully Updated');
			} else {
				$this->session->set_flashdata('Successfully', 'Failed To Updated');
			}
			redirect('Dashboard/user_list', 'refresh');
		}
	}
	public function product_uom_insert_form()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'Product UOM Insert';
		$this->load->view('admin/head', $data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$this->load->view('admin/product_uom_insert_form', $data);
	}

	public function product_uom_insert()
	{
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if ($this->input->post('submit')) {
			$puom = $this->form_validation->set_rules('puom', 'Product UOM', 'required');
			if ($this->form_validation->run() == FALSE) {
				$this->product_uom_insert_form();
			} else {
				$puom = $this->input->post('puom');
				$ins = $this->Admin->product_uom_insert($puom);

				if ($ins == TRUE) {
					$this->session->set_flashdata('Successfully', 'Successfully Inserted');
				} else {
					$this->session->set_flashdata('Successfully', 'Failed To Inserted');
				}
				redirect('Dashboard/product_uom_insert_form', 'refresh');
			}
		}
	}
	public function supplier_insert_form()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'Supplier Insert';
		$this->load->view('admin/head', $data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$this->load->view('admin/supplier_insert_form', $data);
	}
	public function supplier_insert()
	{
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if ($this->input->post('submit')) {
			$supplier = $this->form_validation->set_rules('supplier', 'Supplier', 'required');
			if ($this->form_validation->run() == FALSE) {
				$this->supplier_insert_form();
			} else {
				$supplier = $this->input->post('supplier');
				$ins = $this->Admin->supplier_insert($supplier);

				if ($ins == TRUE) {
					$this->session->set_flashdata('Successfully', 'Successfully Inserted');
				} else {
					$this->session->set_flashdata('Successfully', 'Failed To Inserted');
				}
				redirect('Dashboard/supplier_insert_form', 'refresh');
			}
		}
	}
	public function supplier_list()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'Supplier List';
		$this->load->view('admin/head', $data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['ul'] = $this->Admin->supplier_list();
		$this->load->view('admin/supplier_list', $data);
	}
	public function product_uom_list()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'Product UOM List';
		$this->load->view('admin/head', $data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['ul'] = $this->Admin->product_uom_list();
		$this->load->view('admin/product_uom_list', $data);
	}
	public function product_uom_list_up()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'Product UOM Update';
		$puomid = $this->uri->segment(3);
		$this->load->view('admin/head', $data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['plup'] = $this->Admin->product_uom_list_up($puomid);
		$this->load->view('admin/product_uom_list_up', $data);
	}
	public function productuomlup()
	{
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if ($this->input->post('submit')) {
			$puomid = $this->input->post('puomid');
			$puom = $this->input->post('puom');

			$ins = $this->Admin->productuomlup($puomid, $puom);
			if ($ins == TRUE) {
				$this->session->set_flashdata('Successfully', 'Successfully Updated');
			} else {
				$this->session->set_flashdata('Successfully', 'Failed To Updated');
			}
			redirect('Dashboard/product_uom_list', 'refresh');
		}
	}
	public function product_capop_insert_form()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'Product Capax/OpexInsert';
		$this->load->view('admin/head', $data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$this->load->view('admin/product_capop_insert_form', $data);
	}
	public function product_capop_insert()
	{
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if ($this->input->post('submit')) {
			$puom = $this->form_validation->set_rules('pcapop', 'Product Capex/Opex', 'required');
			if ($this->form_validation->run() == FALSE) {
				$this->product_capop_insert_form();
			} else {
				$pcapop = $this->input->post('pcapop');
				$ins = $this->Admin->product_capop_insert($pcapop);

				if ($ins == TRUE) {
					$this->session->set_flashdata('Successfully', 'Successfully Inserted');
				} else {
					$this->session->set_flashdata('Successfully', 'Failed To Inserted');
				}
				redirect('Dashboard/product_capop_insert_form', 'refresh');
			}
		}
	}
	public function product_capop_list()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'Cap/OP List';
		$this->load->view('admin/head', $data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['ul'] = $this->Admin->product_capop_list();
		$this->load->view('admin/product_capop_list', $data);
	}
	public function product_category_insert_form()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'Product Category Insert';
		$this->load->view('admin/head', $data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$this->load->view('admin/product_category_insert_form', $data);
	}
	public function product_category_insert()
	{
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if ($this->input->post('submit')) {
			//$pccode=$this->form_validation->set_rules('pccode', 'Product Code', 'required');
			$pcname = $this->form_validation->set_rules('pcname', 'Product Name', 'required');
			if ($this->form_validation->run() == FALSE) {
				$this->product_category_insert_form();
			} else {
				//$pccode=$this->input->post('pccode');
				$pcname = $this->input->post('pcname');
				$ins = $this->Admin->product_category_insert($pcname);

				if ($ins == TRUE) {
					$this->session->set_flashdata('Successfully', 'Successfully Inserted');
				} else {
					$this->session->set_flashdata('Successfully', 'Failed To Inserted');
				}
				redirect('Dashboard/product_category_insert_form', 'refresh');
			}
		}
	}
	public function product_category_list()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'Product List';
		$this->load->view('admin/head', $data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['ul'] = $this->Admin->product_category_list();
		$this->load->view('admin/product_category_list', $data);
	}
	public function product_category_list_up()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'Product Update';
		$pccode = $this->uri->segment(3);
		$this->load->view('admin/head', $data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['plup'] = $this->Admin->product_category_list_up($pccode);
		$this->load->view('admin/product_category_list_up', $data);
	}
	public function productcategorylup()
	{
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if ($this->input->post('submit')) {
			$pccode = $this->input->post('pccode');
			$pcname = $this->input->post('pcname');

			$ins = $this->Admin->productcategorylup($pccode, $pcname);
			if ($ins == TRUE) {
				$this->session->set_flashdata('Successfully', 'Successfully Updated');
			} else {
				$this->session->set_flashdata('Successfully', 'Failed To Updated');
			}
			redirect('Dashboard/product_category_list', 'refresh');
		}
	}
	public function product_group_insert_form()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'Product Group Insert';
		$this->load->view('admin/head', $data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['ul'] = $this->Admin->product_category_list();
		$this->load->view('admin/product_group_insert_form', $data);
	}
	public function product_group_insert()
	{
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if ($this->input->post('submit')) {
			$pccode = $this->form_validation->set_rules('pccode', 'Product Code', 'required');
			$pgname = $this->form_validation->set_rules('pgname', 'Product Group Name', 'required');
			if ($this->form_validation->run() == FALSE) {
				$this->product_group_insert_form();
			} else {
				$pccode = $this->input->post('pccode');
				$pgname = $this->input->post('pgname');
				$ins = $this->Admin->product_group_insert($pccode, $pgname);

				if ($ins == TRUE) {
					$this->session->set_flashdata('Successfully', 'Successfully Inserted');
				} else {
					$this->session->set_flashdata('Successfully', 'Failed To Inserted');
				}
				redirect('Dashboard/product_group_insert_form', 'refresh');
			}
		}
	}
	public function product_group_list()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'Product Group List';
		$this->load->view('admin/head', $data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['ul'] = $this->Admin->product_group_list();
		$this->load->view('admin/product_group_list', $data);
	}
	public function product_subgroup_insert_form()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'Product Sub Group Insert';
		$this->load->view('admin/head', $data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['ul'] = $this->Admin->product_category_list();
		$this->load->view('admin/product_subgroup_insert_form', $data);
	}
	public function show_groupname()
	{
		$this->load->database();
		$this->load->model('Admin');
		$pccode = $this->input->get('pccode');
		$data = $this->Admin->show_groupname($pccode);
		echo json_encode($data);
	}
	public function product_subgroup_insert()
	{
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if ($this->input->post('submit')) {
			$pccode = $this->form_validation->set_rules('pccode', 'Product Category', 'required');
			$pgid = $this->form_validation->set_rules('pgid', 'Product Group Name', 'required');
			$psgname = $this->form_validation->set_rules('psgname', 'Product Sub Group Name', 'required');
			if ($this->form_validation->run() == FALSE) {
				$this->product_subgroup_insert_form();
			} else {
				$pccode = $this->input->post('pccode');
				$pgid = $this->input->post('pgid');
				$psgname = $this->input->post('psgname');
				$ins = $this->Admin->product_subgroup_insert($pccode, $pgid, $psgname);

				if ($ins == TRUE) {
					$this->session->set_flashdata('Successfully', 'Successfully Inserted');
				} else {
					$this->session->set_flashdata('Successfully', 'Failed To Inserted');
				}
				redirect('Dashboard/product_subgroup_insert_form', 'refresh');
			}
		}
	}
	public function product_subgroup_list()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'Product Sub Group List';
		$this->load->view('admin/head', $data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['ul'] = $this->Admin->product_subgroup_list();
		$this->load->view('admin/product_subgroup_list', $data);
	}
	public function product_insert_form()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'Product Insert';
		$this->load->view('admin/head', $data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['ul'] = $this->Admin->product_category_list();
		$this->load->view('admin/product_insert_form', $data);
	}
	public function show_subgroupname()
	{
		$this->load->database();
		$this->load->model('Admin');
		$pccode = $this->input->get('pccode');
		$pgid = $this->input->get('pgid');
		$data = $this->Admin->show_subgroupname($pccode, $pgid);
		echo json_encode($data);
	}
	public function product_insert()
	{
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if ($this->input->post('submit')) {
			$pccode = $this->form_validation->set_rules('pccode', 'Product Category', 'required');
			$pgid = $this->form_validation->set_rules('pgid', 'Product Group Name', 'required');
			$psgid = $this->form_validation->set_rules('psgid', 'Product Sub Group Name', 'required');
			$pcode = $this->form_validation->set_rules('pcode', 'Product Name', 'required');
			$pname = $this->form_validation->set_rules('pname', 'Product Name', 'required');
			if ($this->form_validation->run() == FALSE) {
				$this->product_insert_form();
			} else {
				$pccode = $this->input->post('pccode');
				$pgid = $this->input->post('pgid');
				$psgid = $this->input->post('psgid');
				$pcode = $this->input->post('pcode');
				$pname = $this->input->post('pname');
				$ins = $this->Admin->product_insert($pccode, $pgid, $psgid, $pcode, $pname);

				if ($ins == TRUE) {
					$this->session->set_flashdata('Successfully', 'Successfully Inserted');
				} else {
					$this->session->set_flashdata('Successfully', 'Failed To Inserted');
				}
				redirect('Dashboard/product_insert_form', 'refresh');
			}
		}
	}
	public function product_list()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'Product List';
		$this->load->view('admin/head', $data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['ul'] = $this->Admin->product_list();
		$this->load->view('admin/product_list', $data);
	}
	public function item_insert_form()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'Item Insert';
		$this->load->view('admin/head', $data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['ul'] = $this->Admin->product_list();
		$this->load->view('admin/item_insert_form', $data);
	}
	public function item_insert()
	{
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if ($this->input->post('submit')) {
			$pcode = $this->form_validation->set_rules('pcode', 'Product Code', 'required');
			$item = $this->form_validation->set_rules('item', 'Item', 'required');
			if ($this->form_validation->run() == FALSE) {
				$this->item_insert_form();
			} else {
				$pcode = $this->input->post('pcode');
				$item = $this->input->post('item');
				$ins = $this->Admin->item_insert($item, $pcode);

				if ($ins == TRUE) {
					$this->session->set_flashdata('Successfully', 'Successfully Inserted');
				} else {
					$this->session->set_flashdata('Successfully', 'Failed To Inserted');
				}
				redirect('Dashboard/item_insert_form', 'refresh');
			}
		}
	}
	public function item_list()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'Item List';
		$this->load->view('admin/head', $data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['ul'] = $this->Admin->item_list();
		$this->load->view('admin/item_list', $data);
	}
	public function brand_insert_form()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'Brand Insert';
		$this->load->view('admin/head', $data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$this->load->view('admin/brand_insert_form', $data);
	}
	public function brand_insert()
	{
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if ($this->input->post('submit')) {
			$brand = $this->form_validation->set_rules('brand', 'Brand', 'required');
			if ($this->form_validation->run() == FALSE) {
				$this->brand_insert_form();
			} else {
				$brand = $this->input->post('brand');
				$ins = $this->Admin->brand_insert($brand);

				if ($ins == TRUE) {
					$this->session->set_flashdata('Successfully', 'Successfully Inserted');
				} else {
					$this->session->set_flashdata('Successfully', 'Failed To Inserted');
				}
				redirect('Dashboard/brand_insert_form', 'refresh');
			}
		}
	}
	public function brand_list()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'Brand List';
		$this->load->view('admin/head', $data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['ul'] = $this->Admin->brand_list();
		$this->load->view('admin/brand_list', $data);
	}
	public function product_details_insert_form()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'Product Details Insert';
		$this->load->view('admin/head', $data);
		$pcode = $this->uri->segment(3);
		$data['pd'] = $pcode;
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['sul'] = $this->Admin->supplier_list();
		$data['ul'] = $this->Admin->product_uom_list();
		$data['il'] = $this->Admin->item_list_code($pcode);
		//$data['ul1']=$this->Admin->product_capop_list();
		$data['fl'] = $this->Admin->factory_list();
		//$data['al']=$this->Admin->antivirus();
		//		$data['il']=$this->Admin->internet();
		//$data['sl']=$this->Admin->product_group_list();
		//$data['sgl']=$this->Admin->product_subgroup_list();
		$this->load->view('admin/product_details_insert_form', $data);
	}
	public function product_details_insert()
	{
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if ($this->input->post('submit')) {
			$pcode = $this->form_validation->set_rules('pcode', 'Product Code', 'required');
			if ($this->form_validation->run() == FALSE) {
				$this->product_list();
			} else {
				$pcode = $this->input->post('pcode');
				$factoryid = $this->input->post('factoryid');
				$supplierid = $this->input->post('supplierid');
				//$pgid=$this->input->post('pgid');
				//$psgid=$this->input->post('psgid');
				$mpr = $this->input->post('mpr');
				//$brand=$this->input->post('brand');
				//					$hdd=$this->input->post('hdd');
				//					$monitor=$this->input->post('monitor');
				//					$ups=$this->input->post('ups');
				//					$ip=$this->input->post('ip');
				//					$mb=$this->input->post('mb');
				$sn = $this->input->post('sn');
				//					$processor=$this->input->post('processor');
				//					$ram=$this->input->post('ram');
				//					$os=$this->input->post('os');
				//					$ms=$this->input->post('ms');
				//					$avid=$this->input->post('avid');
				//					$iid=$this->input->post('iid');
				$item = $this->input->post('item');
				$description = $this->input->post('description');
				$pr = $this->input->post('price');
				$puomid = $this->input->post('puomid');
				$pqty = $this->input->post('pqty');
				//$vendor=$this->input->post('vendor');
				//$pcapop=$this->input->post('pcapop');
				$warranty = $this->input->post('warranty');
				$pr = $this->input->post('pr');
				$pdate = $this->input->post('pdate');
				$ins = $this->Admin->product_details_insert($pcode, $factoryid, $supplierid, $mpr, $sn, $item, $description, $pqty, $puomid, $warranty, $pr, $pdate);

				if ($ins == TRUE) {
					$this->session->set_flashdata('Successfully', 'Successfully Inserted');
				} else {
					$this->session->set_flashdata('Successfully', 'Failed To Inserted');
				}
				redirect('Dashboard/product_list', 'refresh');
			}
		}
	}
	public function product_details_list()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'Product Details List';
		$this->load->view('admin/head', $data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		//$data['al']=$this->Admin->antivirus();
		//		$data['il']=$this->Admin->internet();
		$data['ul'] = $this->Admin->product_details_list();
		$this->load->view('admin/product_details_list', $data);
	}
	public function product_details_list_up()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'Product Details Update';
		$pacode = $this->uri->segment(3);
		$this->load->view('admin/head', $data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['fl'] = $this->Admin->factory_list();
		$data['ul'] = $this->Admin->product_uom_list();
		$data['sl'] = $this->Admin->supplier_list();
		//$data['al']=$this->Admin->antivirus();
		//$data['il']=$this->Admin->internet();
		$data['plup'] = $this->Admin->product_details_list_up($pacode);
		$this->load->view('admin/product_details_list_up', $data);
	}
	public function productdetailslup()
	{
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if ($this->input->post('submit')) {
			$pacode = $this->input->post('pacode');
			// $factoryid=$this->input->post('factoryid');
			$supplierid = $this->input->post('supplierid');
			$sn = $this->input->post('sn');
			$description = $this->input->post('description');
			$price = $this->input->post('price');
			$pqty = $this->input->post('pqty');
			$puomid = $this->input->post('puomid');
			$warranty = $this->input->post('warranty');
			$pdate = $this->input->post('pdate');

			$ins = $this->Admin->productdetailslup($pacode, $supplierid, $sn, $description, $price, $pqty, $puomid, $warranty, $pdate);
			if ($ins == TRUE) {
				$this->session->set_flashdata('Successfully', 'Successfully Updated');
			} else {
				$this->session->set_flashdata('Successfully', 'Failed To Updated');
			}
			redirect('Dashboard/product_details_list', 'refresh');
		}
	}
	public function product_inventory_list_up()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'Product Details Update';
		$pdiid = $this->uri->segment(3);
		$this->load->view('admin/head', $data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['fl'] = $this->Admin->factory_list();
		//$data['ul']=$this->Admin->product_uom_list();
		//$data['al']=$this->Admin->antivirus();
		//$data['il']=$this->Admin->internet();
		$data['plup'] = $this->Admin->product_inventory_list_up($pdiid);
		$this->load->view('admin/product_inventory_list_up', $data);
	}
	public function productinventorylup()
	{
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if ($this->input->post('submit')) {
			$piv = $this->input->post('piv');
			//$factoryid=$this->input->post('factoryid');
			$sn = $this->input->post('sn');
			$description = $this->input->post('description');
			$iqty = $this->input->post('iqty');
			$warranty = $this->input->post('warranty');
			$pdate = $this->input->post('pdate');

			$ins = $this->Admin->productinventorylup($piv, $sn, $description, $iqty, $warranty, $pdate);
			if ($ins == TRUE) {
				$this->session->set_flashdata('Successfully', 'Successfully Updated');
			} else {
				$this->session->set_flashdata('Successfully', 'Failed To Updated');
			}
			redirect('Dashboard/product_inventory_list', 'refresh');
		}
	}
	public function product_transfer_form()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'Product Transfer';
		$pacode = $this->uri->segment(3);
		$this->load->view('admin/head', $data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['fl'] = $this->Admin->factory_list();
		$data['pacode'] = $pacode;
		$data['plup'] = $this->Admin->product_transfer($pacode);
		$this->load->view('admin/product_transfer_form', $data);
	}
	public function producthistorylup()
	{
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if ($this->input->post('submit')) {
			//$pccode=$this->input->post('pccode');
			$pacode = $this->input->post('pacode');
			$factoryid = $this->input->post('factoryid');
			$ins = $this->Admin->producthistorylup($factoryid, $pacode);
			if ($ins == TRUE) {
				$this->session->set_flashdata('Successfully', 'Successfully Transfered');
			} else {
				$this->session->set_flashdata('Successfully', 'Failed To Transfered');
			}
			redirect('Dashboard/product_inventory_list', 'refresh');
		}
	}
	public function product_assign_form()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'User Insert';
		$pacode = $this->uri->segment(3);
		$this->load->view('admin/head', $data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		//$data['ul']=$this->Admin->product_uom_list();
		$data['pacode'] = $pacode;
		$this->load->view('admin/product_assign_form', $data);
	}
	public function product_assign_insert()
	{
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if ($this->input->post('submit')) {
			$userid = $this->form_validation->set_rules('userid', 'User ID', 'required');
			if ($this->form_validation->run() == FALSE) {
				$this->product_inventory_list();
			} else {
				$pacode = $this->input->post('pacode');
				$userid = $this->input->post('userid');
				$adate = $this->input->post('adate');

				$ins = $this->Admin->product_assign_insert($pacode, $userid, $adate);

				if ($ins == TRUE) {
					$this->session->set_flashdata('Successfully', 'Successfully Assinged');
				} else {
					$this->session->set_flashdata('Successfully', 'Failed To Assigned');
				}
				redirect('Dashboard/product_inventory_list', 'refresh');
			}
		}
	}
	public function product_return_form()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'Product Return';
		$pacode = $this->uri->segment(3);
		$this->load->view('admin/head', $data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		//$data['ul']=$this->Admin->product_uom_list();
		$data['pacode'] = $pacode;
		$this->load->view('admin/product_return_form', $data);
	}
	public function product_return_insert()
	{
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if ($this->input->post('submit')) {
			$pacode = $this->form_validation->set_rules('pacode', 'Product ID', 'required');
			if ($this->form_validation->run() == FALSE) {
				$this->product_details_list();
			} else {
				$remarks = $this->input->post('remarks');
				$pacode = $this->input->post('pacode');
				//$userid=$this->input->post('userid');
				$rdate = $this->input->post('rdate');

				$ins = $this->Admin->product_return_insert($pacode, $remarks, $rdate);

				if ($ins == TRUE) {
					$this->session->set_flashdata('Successfully', 'Successfully Returned');
				} else {
					$this->session->set_flashdata('Successfully', 'Failed To Returned');
				}
				redirect('Dashboard/product_inventory_list', 'refresh');
			}
		}
	}
	public function item_release_form()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'Item Release';
		$pacode = $this->uri->segment(3);
		$this->load->view('admin/head', $data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['pacode'] = $pacode;
		$data['ul'] = $this->Admin->item_release_type_list();
		$this->load->view('admin/item_release_form', $data);
	}
	public function item_release_insert()
	{
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if ($this->input->post('submit')) {
			$pacode = $this->form_validation->set_rules('pacode', 'Product ID', 'required');
			$irid = $this->form_validation->set_rules('irid', 'Release Type', 'required');
			if ($this->form_validation->run() == FALSE) {
				$this->product_details_list();
			} else {
				$remarks = $this->input->post('remarks');
				$irid = $this->input->post('irid');
				$pacode = $this->input->post('pacode');
				//$userid=$this->input->post('userid');
				$ddate = $this->input->post('ddate');

				$ins = $this->Admin->item_release_insert($pacode, $irid, $remarks, $ddate);

				if ($ins == TRUE) {
					$this->session->set_flashdata('Successfully', 'Successfully Released');
				} else {
					$this->session->set_flashdata('Successfully', 'Failed To Released');
				}
				redirect('Dashboard/product_inventory_list', 'refresh');
			}
		}
	}
	public function item_release_type_insert_form()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'Release Type Insert';
		$this->load->view('admin/head', $data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$this->load->view('admin/item_release_type_insert_form', $data);
	}
	public function item_release_type_insert()
	{
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if ($this->input->post('submit')) {
			$release = $this->form_validation->set_rules('release', 'Item Release Type', 'required');
			if ($this->form_validation->run() == FALSE) {
				$this->item_release_type_insert_form();
			} else {
				$release = $this->input->post('release');

				$ins = $this->Admin->item_release_type_insert($release);

				if ($ins == TRUE) {
					$this->session->set_flashdata('Successfully', 'Successfully Inserted');
				} else {
					$this->session->set_flashdata('Successfully', 'Failed To Inserted');
				}
				redirect('Dashboard/item_release_type_insert_form', 'refresh');
			}
		}
	}
	public function item_release_type_list()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'Item Release Type List';
		$this->load->view('admin/head', $data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['ul'] = $this->Admin->item_release_type_list();
		$this->load->view('admin/item_release_type_list', $data);
	}
	public function mpr_create_form()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'MPR Create';
		$this->load->view('admin/head', $data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		//$data['il']=$this->Admin->item_list();
		$data['ul'] = $this->Admin->product_uom_list();
		$data['fl'] = $this->Admin->factory_list();
		$data['dep'] = $this->Admin->department_list();
		$data['des'] = $this->Admin->designation_list();
		$data['col'] = $this->Admin->product_list();
		$data['bl'] = $this->Admin->brand_list();
		$this->load->view('admin/mpr_create_form', $data);
	}
	public function mpr_available()
	{
		$this->load->database();
		$this->load->model('Admin');
		$factoryid = $this->input->get('factoryid');
		$mprid = $this->input->get('mprid');
		$mprid = $factoryid . $mprid;
		$sql = "SELECT COUNT(mprid) AS mprid FROM mpr_insert_id WHERE mprid='$mprid'";
		$query = $this->db->query($sql);
		$query = $query->result_array();
		foreach ($query as $row) {
			$mprid = $row['mprid'];
		}
		if ($mprid > 0) {

			//$response = "<span style='color: red;'>This Info Already Inserted.</span>";
			$response = '<span style="color: red;">This Info Already Inserted.</span><br/><input type="submit" class="btn btn-primary" name="submit" value="Submit" disabled="disabled" />';
			//$sql = "INSERT INTO test VALUES ('$colorcode')";
			//$query = $this->db->query($sql);
		} else {
			//$response = "<span style='color: green;'>Available.</span>";
			$response = '<span style="color: green;">Available.</span><br/><input type="submit" class="btn btn-primary" name="submit" value="Submit" />';
		}

		echo $response;
		die;
	}
	public function show_itemname()
	{
		$this->load->database();
		$this->load->model('Admin');
		$pcode = $this->input->get('pcode');
		$data = $this->Admin->show_item($pcode);
		echo json_encode($data);
	}
	public function show_item()
	{
		$this->load->database();
		$this->load->model('Admin');
		$pcode = $this->input->get('pcode');
		$data = $this->Admin->show_item($pcode);
		$output = '';
		foreach ($data as $row) {
			$output .= '<option value="' . $row["itemcode"] . '">' . $row["item"] . '</option>';
		}
		echo json_encode($output);
	}
	public function mpr_create()
	{
		date_default_timezone_set('Asia/Dhaka');
		$mprdate = $this->input->post('mprdate');
		$mprdate = date("Y-m-d", strtotime($mprdate));
		$fmy = strtotime($mprdate);
		$month = date("F", $fmy);
		$year = date("Y", $fmy);
		$d = date('Y-m-d');
		$t = date("H:i:s");
		$d1 = str_replace("-", "", $d);
		$t1 = str_replace(":", "", $t);
		$ccid = $d1 . $t1;

		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		//if ($this->input->get('submit')) {
		$userid = $this->input->post('userid');
		$mprid = $this->input->post('mprid');
		$factoryid = $this->input->post('factoryid');
		$mprid = $factoryid . $mprid;
		$departmentid = $this->input->post('departmentid');
		$name = $this->input->post('name');
		$designationid = $this->input->post('designationid');
		//$mprdate = $this->input->get('mprdate');
		$product = $this->input->post('product');
		$item = $this->input->post('item');
		$brand = $this->input->post('brand');
		$qty = $this->input->post('qty');
		$uom = $this->input->post('uom');
		$description = $this->input->post('description');
		$description =  str_replace("'", "\'", $description);
		$price = $this->input->post('price');
		$remarks = $this->input->post('remarks');
		$remarks =  str_replace("'", "\'", $remarks);
		$uname = $this->input->post('uname');

		$sql1 = "INSERT INTO mpr_insert_id VALUES ('$ccid','$userid','$mprid','$factoryid','$departmentid','$name','$designationid','$mprdate','$month','$year','0')";
		$query1 = $this->db->query($sql1);


		for ($i = 0; $i < count($item); $i++) {
			$data["i"] = $i;
			$data["ccid"] = $ccid;
			$data["ccid1"] = $ccid . $i;
			$data["userid"] = $userid;
			$data["mprid"] = $mprid;
			$data["factoryid"] = $factoryid;
			$data["departmentid"] = $departmentid;
			$data["name"] = $name;
			$data["designationid"] = $designationid;
			$data["mprdate"] = $mprdate;
			$data["product"] = $product[$i];
			$data["item"] = $item[$i];
			$data["brand"] = $brand[$i];
			$data["qty"] = $qty[$i];
			$data["uom"] = $uom[$i];
			$data["description"] = $description[$i];
			$data["price"] = $price[$i];
			$data["remarks"] = $remarks[$i];
			$data["uname"] = $uname[$i];
			$ins = $this->Admin->mpr_create($data);
		}
		if ($ins) {
			echo  "ok";
		} else {
			echo  "error";
		}
	}
	public function date_wise_mpr_form()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'MPR Create List';
		$this->load->view('admin/head', $data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$this->load->view('admin/date_wise_mpr_form', $data);
	}
	public function date_wise_mpr()
	{
		$this->load->database();
		$this->load->model('Admin');
		//$factoryid = $this->input->post('factoryid');
		$pd = $this->input->post('pd');
		$wd = $this->input->post('wd');
		$data['pd'] = $pd;
		$data['wd'] = $wd;
		$data['ul'] = $this->Admin->date_wise_mpr($pd, $wd);
		$this->load->view('admin/date_wise_mpr', $data);
	}
	public function mpr_list_up_form()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'MPR Update';
		$this->load->view('admin/head', $data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		//$data['il']=$this->Admin->item_list();
		$smprid = $this->uri->segment(3);
		$data['ul'] = $this->Admin->product_uom_list();
		$data['fl'] = $this->Admin->factory_list();
		$data['dep'] = $this->Admin->department_list();
		$data['des'] = $this->Admin->designation_list();
		$data['col'] = $this->Admin->product_list();
		$data['bl'] = $this->Admin->brand_list();
		$data['ml'] = $this->Admin->single_mpr_id($smprid);
		$data['mll'] = $this->Admin->single_mpr($smprid);
		$this->load->view('admin/mpr_list_up_form', $data);
	}
	public function mpr_list_update()
	{
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if ($this->input->post('submit')) {
			$simprid = $this->input->post('simprid');
			$product = $this->input->post('product');
			$item = $this->input->post('item');
			$brand = $this->input->post('brand');
			$qty = $this->input->post('qty');
			$uom = $this->input->post('uom');
			$description = $this->input->post('description');
			$description =  str_replace("'", "\'", $description);
			$price = $this->input->post('price');
			$remarks = $this->input->post('remarks');
			$remarks =  str_replace("'", "\'", $remarks);
			$uname = $this->input->post('uname');
			for ($i = 0; $i < count($simprid); $i++) {
				$data["i"] = $i;
				$data["simprid"] = $simprid[$i];
				$data["product"] = $product[$i];
				$data["item"] = $item[$i];
				$data["brand"] = $brand[$i];
				$data["qty"] = $qty[$i];
				$data["uom"] = $uom[$i];
				$data["description"] = $description[$i];
				$data["price"] = $price[$i];
				$data["remarks"] = $remarks[$i];
				$data["uname"] = $uname[$i];
				$ins = $this->Admin->mpr_list_update($data);
			}
			if ($ins == TRUE) {
				$this->session->set_flashdata('Successfully', 'Successfully Updated');
			} else {
				$this->session->set_flashdata('Successfully', 'Failed To Updated');
			}
			redirect('Dashboard/date_wise_mpr_form', 'refresh');
		}
	}
	public function mpr_list_add_form()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'MPR ADD';
		$this->load->view('admin/head', $data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		//$data['il']=$this->Admin->item_list();
		$smprid = $this->uri->segment(3);
		$data['ul'] = $this->Admin->product_uom_list();
		$data['fl'] = $this->Admin->factory_list();
		$data['dep'] = $this->Admin->department_list();
		$data['des'] = $this->Admin->designation_list();
		$data['col'] = $this->Admin->product_list();
		$data['bl'] = $this->Admin->brand_list();
		$data['ml'] = $this->Admin->single_mpr_id($smprid);
		$data['mll'] = $this->Admin->single_mpr($smprid);
		$data['smprid'] = $smprid;
		$this->load->view('admin/mpr_list_add_form', $data);
	}
	public function mpr_list_add()
	{
		date_default_timezone_set('Asia/Dhaka');
		$mprdate = $this->input->get('mprdate');
		$mprdate = date("Y-m-d", strtotime($mprdate));
		$d = date('Y-m-d');
		$t = date("H:i:s");
		$d1 = str_replace("-", "", $d);
		$t1 = str_replace(":", "", $t);
		$ccid = $d1 . $t1;

		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		// if ($this->input->post('submit')) {
		$smprid = $this->input->post('smprid');
		$product = $this->input->post('product');
		$item = $this->input->post('item');
		$brand = $this->input->post('brand');
		$qty = $this->input->post('qty');
		$uom = $this->input->post('uom');
		$description = $this->input->post('description');
		$description =  str_replace("'", "\'", $description);
		$price = $this->input->post('price');
		$remarks = $this->input->post('remarks');
		$remarks =  str_replace("'", "\'", $remarks);
		$uname = $this->input->post('uname');
		for ($i = 0; $i < count($product); $i++) {
			$data["i"] = $i;
			$data["ccid"] = $ccid . $i;
			$data["smprid"] = $smprid;
			$data["product"] = $product[$i];
			$data["item"] = $item[$i];
			$data["brand"] = $brand[$i];
			$data["qty"] = $qty[$i];
			$data["uom"] = $uom[$i];
			$data["description"] = $description[$i];
			$data["price"] = $price[$i];
			$data["remarks"] = $remarks[$i];
			$data["uname"] = $uname[$i];
			$ins = $this->Admin->mpr_list_add($data);
		}
		if ($ins) {
			echo  "ok";
		} else {
			echo  "error";
		}
		// }
	}
	public function date_wise_mpr_list_form()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'MPR List';
		$this->load->view('admin/head', $data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$this->load->view('admin/date_wise_mpr_list_form', $data);
	}
	public function date_wise_mpr_list()
	{
		$this->load->database();
		$this->load->model('Admin');
		//$factoryid = $this->input->post('factoryid');
		$pd = $this->input->post('pd');
		$wd = $this->input->post('wd');
		$data['pd'] = $pd;
		$data['wd'] = $wd;
		$data['ul'] = $this->Admin->date_wise_mpr_list($pd, $wd);
		$this->load->view('admin/date_wise_mpr_list', $data);
	}
	public function date_wise_mpr_list_xls()
	{
		$this->load->database();
		$this->load->model('Admin');
		//$factoryid = $this->input->post('factoryid');
		$pd = $this->input->post('pd');
		$wd = $this->input->post('wd');
		$extension = $this->input->post('export_type');
		if (!empty($extension)) {
			$extension = $extension;
		} else {
			$extension = 'xlsx';
		}
		$this->load->helper('download');
		$data = array();
		$data['title'] = 'Export Excel Sheet';
		// get employee list
		$empInfo = $this->Admin->date_wise_mpr_list($pd, $wd);
		$fileName = 'date_wise_mpr_list-' . time();
		$spreadsheet = new Spreadsheet();
		$sheet = $spreadsheet->getActiveSheet();

		$sheet->setCellValue('A1', 'MPR NO');
		$sheet->setCellValue('B1', 'Unit');
		$sheet->setCellValue('C1', 'MPR Prepared By');
		$sheet->setCellValue('D1', 'Category');
		$sheet->setCellValue('E1', 'Item');
		$sheet->setCellValue('F1', 'Model');
		$sheet->setCellValue('G1', 'Brand');
		$sheet->setCellValue('H1', 'Qty');
		$sheet->setCellValue('I1', 'Description');
		$sheet->setCellValue('J1', 'Unit Price');
		$sheet->setCellValue('K1', 'Total Price');
		$sheet->setCellValue('L1', 'Remarks');
		$sheet->setCellValue('M1', 'User');
		$sheet->setCellValue('N1', 'Date');

		// 
		$rowCount = 2;
		foreach ($empInfo as $element) {
			$sheet->setCellValue('A' . $rowCount, $element['mprid']);
			$sheet->setCellValue('B' . $rowCount, $element['fid']);
			$sheet->setCellValue('C' . $rowCount, $element['name'] . '--' . $element['departmentname'] . '--' . $element['designation']);
			$sheet->setCellValue('D' . $rowCount, $element['pcname']);
			$sheet->setCellValue('E' . $rowCount, $element['pname']);
			$sheet->setCellValue('F' . $rowCount, $element['item']);
			$sheet->setCellValue('G' . $rowCount, $element['brandname']);
			$sheet->setCellValue('H' . $rowCount, $element['qty'] . ' ' . $element['puom']);
			$sheet->setCellValue('I' . $rowCount, $element['description']);
			$sheet->setCellValue('J' . $rowCount, $element['price']);
			$sheet->setCellValue('K' . $rowCount, $element['qty'] * $element['price']);
			$sheet->setCellValue('L' . $rowCount, $element['remarks']);
			$sheet->setCellValue('M' . $rowCount, $element['uname']);
			$sheet->setCellValue('N' . $rowCount, $element['mdate']);


			$rowCount++;
		}

		if ($extension == 'csv') {
			$writer = new \PhpOffice\PhpSpreadsheet\Writer\Csv($spreadsheet);
			$fileName = $fileName . '.csv';
		} elseif ($extension == 'xlsx') {
			$writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
			$fileName = $fileName . '.xlsx';
		} else {
			$writer = new \PhpOffice\PhpSpreadsheet\Writer\Xls($spreadsheet);
			$fileName = $fileName . '.xls';
		}

		$this->output->set_header('Content-Type: application/vnd.ms-excel');
		$this->output->set_header("Content-type: application/csv");
		$this->output->set_header('Cache-Control: max-age=0');
		$writer->save(ROOT_UPLOAD_PATH . $fileName);
		//redirect(HTTP_UPLOAD_PATH.$fileName); 
		$filepath = file_get_contents(ROOT_UPLOAD_PATH . $fileName);
		force_download($fileName, $filepath);
	}
	public function mpr_wise_mpr_list()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'Product Details List';
		$this->load->view('admin/head', $data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$mprid = $this->uri->segment(3);
		$data['ul'] = $this->Admin->mpr_wise_mpr_list($mprid);
		$this->load->view('admin/mpr_wise_mpr_list', $data);
	}
	public function po_create_form()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'PO Create';
		$this->load->view('admin/head', $data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['il'] = $this->Admin->product_category_list();
		$data['ul'] = $this->Admin->product_uom_list();
		$this->load->view('admin/po_create_form', $data);
	}
	public function po_create()
	{
		date_default_timezone_set('Asia/Dhaka');
		//$podate = $this->input->post('podate');
		//$podate = date("Y-m-d", strtotime($podate));
		$d = date('Y-m-d');
		$t = date("H:i:s");
		$d1 = str_replace("-", "", $d);
		$t1 = str_replace(":", "", $t);
		$ccid = $d1 . $t1;


		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if ($this->input->post('submit')) {
			$userid = $this->input->post('userid');
			$mprid = $this->input->post('mprid');
			$fid = $this->input->post('fid');
			$po = $this->input->post('po');
			//$po = $fid.$po;
			$supplier = $this->input->post('supplier');
			$podate = $this->input->post('podate');
			$item = $this->input->post('item');
			$pqty = $this->input->post('pqty');
			$premarks = $this->input->post('premarks');
			$pprice = $this->input->post('pprice');
			$pstatus = $this->input->post('pstatus');

			$sql1 = "INSERT INTO po_insert_id VALUES ('$ccid','$mprid')";
			$query1 = $this->db->query($sql1);

			for ($i = 0; $i < count($item); $i++) {
				$data["i"] = $i;
				$data["ccid"] = $ccid;
				$data["ccid1"] = $ccid . $i;
				$data["userid"] = $userid;
				$data["mprid"] = $mprid;
				$data["po"] = $po[$i];
				$data["supplier"] = $supplier[$i];
				$data["podate"] = $podate[$i];
				$data["item"] = $item[$i];
				$data["pqty"] = $pqty[$i];
				$data["premarks"] = $premarks[$i];
				$data["pprice"] = $pprice[$i];
				$data["pstatus"] = $pstatus[$i];
				$ins = $this->Admin->po_create($data);
				//var_dump($data);
			}

			if ($ins == TRUE) {
				$this->session->set_flashdata('Successfully', 'Successfully Inserted');
			} else {
				$this->session->set_flashdata('Successfully', 'Failed To Inserted');
			}
			redirect('Dashboard/po_from_mpr_form', 'refresh');
		}
	}
	public function date_wise_po_list_form()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'PO List';
		$this->load->view('admin/head', $data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$this->load->view('admin/date_wise_po_list_form', $data);
	}
	public function date_wise_po_list()
	{
		$this->load->database();
		$this->load->model('Admin');
		//$factoryid = $this->input->post('factoryid');
		$pd = $this->input->post('pd');
		$wd = $this->input->post('wd');
		$data['pd'] = $pd;
		$data['wd'] = $wd;
		$data['ul'] = $this->Admin->date_wise_po_list($pd, $wd);
		$this->load->view('admin/date_wise_po_list', $data);
	}
	//public function date_wise_po_list_xls()
	//	{
	//		$this->load->database();
	//		$this->load->model('Admin');
	//		//$factoryid = $this->input->post('factoryid');
	//		$pd = $this->input->post('pd');
	//		$wd = $this->input->post('wd');
	//		$extension = $this->input->post('export_type');
	//		if (!empty($extension)) {
	//			$extension = $extension;
	//		} else {
	//			$extension = 'xlsx';
	//		}
	//		$this->load->helper('download');
	//		$data = array();
	//		$data['title'] = 'Export Excel Sheet';
	//		// get employee list
	//		$empInfo = $this->Admin->date_wise_po_list($pd, $wd);
	//		$fileName = 'date_wise_po_list-' . time();
	//		$spreadsheet = new Spreadsheet();
	//		$sheet = $spreadsheet->getActiveSheet();
	//
	//		$sheet->setCellValue('A1', 'MPR NO');
	//		$sheet->setCellValue('B1', 'Unit');
	//		$sheet->setCellValue('C1', 'MPR Prepared By');
	//		$sheet->setCellValue('D1', 'Item');
	//		$sheet->setCellValue('E1', 'Model');
	//		$sheet->setCellValue('F1', 'Type');
	//		$sheet->setCellValue('G1', 'Qty');
	//		$sheet->setCellValue('H1', 'Description');
	//		$sheet->setCellValue('I1', 'Unit Price');
	//		$sheet->setCellValue('J1', 'Total Price');
	//		$sheet->setCellValue('K1', 'Remarks');
	//		$sheet->setCellValue('L1', 'User');
	//		$sheet->setCellValue('M1', 'Date');
	//
	//		// 
	//		$rowCount = 2;
	//		foreach ($empInfo as $element) {
	//			$sheet->setCellValue('A' . $rowCount, $element['mprid']);
	//			$sheet->setCellValue('B' . $rowCount, $element['fid']);
	//			$sheet->setCellValue('C' . $rowCount, $element['name'].'--'.$element['departmentname'].'--'.$element['designation']);
	//			$sheet->setCellValue('D' . $rowCount, $element['pcname']);
	//			$sheet->setCellValue('E' . $rowCount, $element['model']);
	//			$sheet->setCellValue('F' . $rowCount, $element['pcapop']);
	//			$sheet->setCellValue('G' . $rowCount, $element['qty']." ".$row['puom']);
	//			$sheet->setCellValue('H' . $rowCount, $element['description']);
	//			$sheet->setCellValue('I' . $rowCount, $element['price']);
	//			$sheet->setCellValue('J' . $rowCount, $element['qty']*$element['price']);
	//			$sheet->setCellValue('K' . $rowCount, $element['remarks']);
	//			$sheet->setCellValue('L' . $rowCount, $element['uname']);
	//			$sheet->setCellValue('M' . $rowCount, $element['mdate']);
	//
	//
	//			$rowCount++;
	//		}
	//
	//		if ($extension == 'csv') {
	//			$writer = new \PhpOffice\PhpSpreadsheet\Writer\Csv($spreadsheet);
	//			$fileName = $fileName . '.csv';
	//		} elseif ($extension == 'xlsx') {
	//			$writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
	//			$fileName = $fileName . '.xlsx';
	//		} else {
	//			$writer = new \PhpOffice\PhpSpreadsheet\Writer\Xls($spreadsheet);
	//			$fileName = $fileName . '.xls';
	//		}
	//
	//		$this->output->set_header('Content-Type: application/vnd.ms-excel');
	//		$this->output->set_header("Content-type: application/csv");
	//		$this->output->set_header('Cache-Control: max-age=0');
	//		$writer->save(ROOT_UPLOAD_PATH . $fileName);
	//		//redirect(HTTP_UPLOAD_PATH.$fileName); 
	//		$filepath = file_get_contents(ROOT_UPLOAD_PATH . $fileName);
	//		force_download($fileName, $filepath);
	//	}
	public function po_from_mpr_form()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'MPR List For PO';
		$this->load->view('admin/head', $data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$this->load->view('admin/po_from_mpr_form', $data);
	}
	public function po_for_mpr_list()
	{
		$this->load->database();
		$this->load->model('Admin');
		$mprid = $this->input->post('mprid');
		//$pd = $this->input->post('pd');
		//		$wd = $this->input->post('wd');
		$data['ul'] = $this->Admin->po_for_mpr_list($mprid);
		$data['sl'] = $this->Admin->supplier_list();
		$this->load->view('admin/po_for_mpr_list', $data);
	}
	public function receive_from_mpr_form()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'Receive List';
		$this->load->view('admin/head', $data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$this->load->view('admin/receive_from_mpr_form', $data);
	}
	public function receive_for_mpr_list()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'Receive List';
		$this->load->view('admin/head', $data);
		$mprid = $this->input->post('mprid');
		//$pd = $this->input->post('pd');
		//		$wd = $this->input->post('wd');
		$data['ul'] = $this->Admin->receive_for_mpr_list($mprid);
		$this->load->view('admin/receive_for_mpr_list', $data);
	}
	public function receive_create()
	{
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		//if ($this->input->post('submit')) {
		$userid = $this->input->post('userid');
		$mprid = $this->input->post('mprid');
		$fid = $this->input->post('fid');
		$item = $this->input->post('item');
		$sipoid = $this->input->post('sipoid');
		$po = $this->input->post('po');
		$grn = $this->input->post('grn');
		//$grn = $fid . $grn;
		$rqty = $this->input->post('rqty');
		$rdate = $this->input->post('rdate');
		$invoice = $this->input->post('invoice');
		$cdate = $this->input->post('cdate');
		$rremarks = $this->input->post('rremarks');
		$ins = $this->Admin->receive_create($userid, $mprid, $item, $sipoid, $po, $grn, $rqty, $rdate, $invoice, $cdate, $rremarks);
		if ($ins) {
			echo  "ok";
		} else {
			echo  "error";
		}
		//}
	}
	public function mpr_wise_receive_list_form()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'Receive List';
		$this->load->view('admin/head', $data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$this->load->view('admin/mpr_wise_receive_list_form', $data);
	}
	public function mpr_wise_receive_list()
	{
		$this->load->database();
		$this->load->model('Admin');
		$mprid = $this->input->post('mprid');
		//$pd = $this->input->post('pd');
		//		$wd = $this->input->post('wd');
		$data['ul'] = $this->Admin->mpr_wise_receive_list($mprid);
		$this->load->view('admin/mpr_wise_receive_list', $data);
	}
	public function mpr_wise_sreceive_list_form()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'Receive List';
		$this->load->view('admin/head', $data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$this->load->view('admin/mpr_wise_sreceive_list_form', $data);
	}
	public function mpr_wise_sreceive_list()
	{
		$this->load->database();
		$this->load->model('Admin');
		$mprid = $this->input->post('mprid');
		//$pd = $this->input->post('pd');
		//		$wd = $this->input->post('wd');
		$data['ul'] = $this->Admin->mpr_wise_sreceive_list($mprid);
		$this->load->view('admin/mpr_wise_sreceive_list', $data);
	}
	public function date_wise_receive_form()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'Receive List';
		$this->load->view('admin/head', $data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$this->load->view('admin/date_wise_receive_form', $data);
	}
	public function date_wise_receive_list()
	{
		$this->load->database();
		$this->load->model('Admin');
		//$factoryid = $this->input->post('factoryid');
		$pd = $this->input->post('pd');
		$wd = $this->input->post('wd');
		$data['pd'] = $pd;
		$data['wd'] = $wd;
		$data['ul'] = $this->Admin->date_wise_receive_list($pd, $wd);
		$this->load->view('admin/date_wise_receive_list', $data);
	}
	public function product_inventory_insert_form()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'Product Inventory Insert';
		$sipoid = $this->uri->segment(3);
		$this->load->view('admin/head', $data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$data['ul'] = $this->Admin->product_inventory_view($sipoid);
		$data['ul2'] = $this->Admin->product_inventory_view1($sipoid);
		$data['ul1'] = $this->Admin->receive_qty($sipoid);
		$data['fl'] = $this->Admin->factory_list();
		$data['sipoid'] = $sipoid;
		$data['pcode'] = $pcode;
		$this->load->view('admin/product_inventory_insert_form', $data);
	}
	public function product_inventory()
	{
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin');
		if ($this->input->post('submit')) {
			$pcode = $this->form_validation->set_rules('pcode', 'Serial Number', 'required');
			//$iqty=$this->form_validation->set_rules('iqty', 'Quantity', 'required');
			if ($this->form_validation->run() == FALSE) {
				$this->mpr_wise_receive_list_form();
			} else {
				$pcode = $this->input->post('pcode');
				$sipoid = $this->input->post('sipoid');
				$factoryid = $this->input->post('factoryid');
				$sn = $this->input->post('sn');
				$description = $this->input->post('description');
				$pdate = $this->input->post('pdate');
				$iqty = $this->input->post('iqty');
				$warranty = $this->input->post('warranty');
				$ins = $this->Admin->product_inventory_insert($pcode, $sipoid, $factoryid, $sn, $description, $pdate, $iqty, $warranty);

				if ($ins == TRUE) {
					$this->session->set_flashdata('Successfully', 'Successfully Inserted');
				} else {
					$this->session->set_flashdata('Successfully', 'Failed To Inserted');
				}
				redirect('Dashboard/mpr_wise_receive_list_form', 'refresh');
			}
		}
	}
	public function product_inventory_list()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title'] = 'Product Details List';
		$this->load->view('admin/head', $data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		//$data['al']=$this->Admin->antivirus();
		//		$data['il']=$this->Admin->internet();
		$data['ul'] = $this->Admin->product_inventory_list();
		$this->load->view('admin/product_inventory_list', $data);
	}

	public function product_inventory_list_xls()
	{
		$this->load->database();
		$this->load->model('Admin');
		//$factoryid = $this->input->post('factoryid');
		// $pd = $this->input->post('pd');
		// $wd = $this->input->post('wd');
		$extension = $this->input->post('export_type');
		if (!empty($extension)) {
			$extension = $extension;
		} else {
			$extension = 'xlsx';
		}
		$this->load->helper('download');
		$data = array();
		$data['title'] = 'Export Excel Sheet';
		// get employee list
		$empInfo = $this->Admin->product_inventory_list();
		$fileName = 'product_inventory_list-' . time();
		$spreadsheet = new Spreadsheet();
		$sheet = $spreadsheet->getActiveSheet();

		$sheet->setCellValue('A1', 'Code');
		$sheet->setCellValue('B1', 'Factory');
		$sheet->setCellValue('C1', 'Supplier');
		$sheet->setCellValue('D1', 'Category');
		$sheet->setCellValue('E1', 'Group');
		$sheet->setCellValue('F1', 'Sub Group');
		$sheet->setCellValue('G1', 'MPR');
		$sheet->setCellValue('H1', 'Name');
		$sheet->setCellValue('I1', 'Serial Number');
		$sheet->setCellValue('J1', 'Item');
		$sheet->setCellValue('K1', 'Description');
		$sheet->setCellValue('L1', 'PO Price');
		$sheet->setCellValue('M1', 'Qty');
		$sheet->setCellValue('N1', 'Purchase Date');
		$sheet->setCellValue('O1', 'Warranty');
		$sheet->setCellValue('P1', 'End Date');
		$sheet->setCellValue('Q1', 'Remaining Day');
		$sheet->setCellValue('R1', 'Status/Return');
		$sheet->setCellValue('S1', 'UserID');
		$sheet->setCellValue('T1', 'UserName');
		$sheet->setCellValue('U1', 'UserDepartment');
		$sheet->setCellValue('V1', 'Given Date');

		// 
		$rowCount = 2;
		foreach ($empInfo as $element) {
			$sheet->setCellValue('A' . $rowCount, $element['pacode']);
			$sheet->setCellValue('B' . $rowCount, $element['factoryid']);
			$sheet->setCellValue('C' . $rowCount, $element['supplier']);
			$sheet->setCellValue('D' . $rowCount, $element['pcname']);
			$sheet->setCellValue('E' . $rowCount, $element['pgname']);
			$sheet->setCellValue('F' . $rowCount, $element['psgname']);
			$sheet->setCellValue('G' . $rowCount, $element['mprid']);
			$sheet->setCellValue('H' . $rowCount, $element['pname']);
			$sheet->setCellValue('I' . $rowCount, $element['sn']);
			$sheet->setCellValue('J' . $rowCount, $element['item']);
			$sheet->setCellValue('K' . $rowCount, $element['description']);
			$sheet->setCellValue('L' . $rowCount, number_format($element['pprice'], 2, '.', ','));
			$sheet->setCellValue('M' . $rowCount, $element['iqty'] . " " . $element['puom']);
			$sheet->setCellValue('N' . $rowCount, date("d-m-Y", strtotime($element['pdate'])));

			$convert = $element['warranty']; // days you want to convert
			$years = ($convert / 365); // days / 365 days
			$years = floor($years); // Remove all decimals
			$month = ($convert % 365) / 30.5; // I choose 30.5 for Month (30,31) ;)
			$month = floor($month); // Remove all decimals
			$days = ($convert % 365) % 30.5; // the rest of days

			$sheet->setCellValue('O' . $rowCount,  $years . ' years - ' . $month . ' month - ' . $days . ' days');
			$sheet->setCellValue('P' . $rowCount, date("d-m-Y", strtotime("+" . $element['warranty'] . " days", strtotime($element['pdate']))));

			$enddate = date("d-m-Y", strtotime("+" . $element['warranty'] . " days", strtotime($element['pdate'])));
			$now = time(); // or your date as well
			$enddate = strtotime($enddate);
			$datediff = $enddate - $now;
			$remain = round($datediff / (60 * 60 * 24));

			$sheet->setCellValue('Q' . $rowCount, $remain);

			if ($element['pastatus'] == 1) {
				$sheet->setCellValue('R' . $rowCount, "Using");
			} elseif ($element['pastatus'] == 0) {
				$sheet->setCellValue('R' . $rowCount, "Free");
			} elseif ($element['pastatus'] == 2) {
				$sheet->setCellValue('R' . $rowCount, $element['releasetype']);
			}
			if ($element['pastatus'] == 1) {
				$sheet->setCellValue('S' . $rowCount, $element['userid']);
			} 
			else {
				$sheet->setCellValue('S' . $rowCount, "");
			}
			if ($element['pastatus'] == 1) {
				$sheet->setCellValue('T' . $rowCount, $element['name']);
			}
			else {
				$sheet->setCellValue('T' . $rowCount, "");
			}
			if ($element['pastatus'] == 1) {
				$sheet->setCellValue('U' . $rowCount, $element['departmentname']);
			}
			else {
				$sheet->setCellValue('U' . $rowCount, "");
			}
			if ($element['pastatus'] == 1) {
				$sheet->setCellValue('V' . $rowCount, date("d-m-Y", strtotime($element['adate'])));
			}
			else {
				$sheet->setCellValue('V' . $rowCount, "");
			}
			
			


			$rowCount++;
		}

		if ($extension == 'csv') {
			$writer = new \PhpOffice\PhpSpreadsheet\Writer\Csv($spreadsheet);
			$fileName = $fileName . '.csv';
		} elseif ($extension == 'xlsx') {
			$writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
			$fileName = $fileName . '.xlsx';
		} else {
			$writer = new \PhpOffice\PhpSpreadsheet\Writer\Xls($spreadsheet);
			$fileName = $fileName . '.xls';
		}

		$this->output->set_header('Content-Type: application/vnd.ms-excel');
		$this->output->set_header("Content-type: application/csv");
		$this->output->set_header('Cache-Control: max-age=0');
		$writer->save(ROOT_UPLOAD_PATH . $fileName);
		//redirect(HTTP_UPLOAD_PATH.$fileName); 
		$filepath = file_get_contents(ROOT_UPLOAD_PATH . $fileName);
		force_download($fileName, $filepath);
	}
}
