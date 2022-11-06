<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calendar extends CI_Controller {

		function __construct()
    {
        // Call the Model constructor
        parent::__construct();

        if(!$this->session->userdata('userid'))
				{
					redirect('User_Login');
				}
		$this->load->model('Calendar_model');
    }


	/*Home page Calendar view  */
	//Public function index()
//	{
//		//$this->load->view('home');
//		//$this->load->database();
////		$this->load->model('Admin');
//		$data['title']='Challan Receive';
//		
//		$this->load->view('admin/head',$data);
//		$this->load->view('admin/toprightnav');
//		$this->load->view('admin/leftmenu');
//		$this->load->view('admin/calendar',$data);
//	}
	public function calendar()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Calendar';
		
		$this->load->view('admin/head',$data);
		$this->load->view('admin/toprightnav');
		$this->load->view('admin/leftmenu');
		$this->load->view('admin/calendar',$data);
	}

	/*Get all Events */

	public function getEvents()
	{
		$this->load->database();
		$userid=$this->session->userdata('userid');
		$user_type=$this->session->userdata('user_type');
		if($user_type=="1")
		{
			$result=$this->Calendar_model->getEventsAdmin($userid);
			echo json_encode($result);
		}
		elseif($user_type=="2")
		{
			$result=$this->Calendar_model->getEvents($userid);
			echo json_encode($result);
		}
		
	}
	/*Add new event */
	public function addEvent()
	{
		$this->load->database();
		$result=$this->Calendar_model->addEvent();
		echo $result;
	}
	/*Update Event */
	public function updateEvent()
	{
		$this->load->database();
		$result=$this->Calendar_model->updateEvent();
		echo $result;
	}
	/*Delete Event*/
	public function deleteEvent()
	{
		$this->load->database();
		$result=$this->Calendar_model->deleteEvent();
		echo $result;
	}
	public function dragUpdateEvent()
	{	
		$this->load->database();
		$result=$this->Calendar_model->dragUpdateEvent();
		echo $result;
	}



}
