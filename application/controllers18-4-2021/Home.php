<?php

defined('BASEPATH') OR exit('No direct script access allowed');
//require 'PHPMailer/PHPMailer.php';

class Home extends CI_Controller {

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
	//public function index()
//	{
//		$this->load->database();
//		$this->load->model('Home_Model');
//		$data['title']='Time AND Action Plan';
//		$this->load->view('head',$data);
//		$this->load->view('toprightnav');
//		$this->load->view('leftmenu');
//		$data['all_order_count']=$this->Home_Model->all_order_count();
//		$data['all_colour_count']=$this->Home_Model->all_colour_count();
//		$data['all_pp_count']=$this->Home_Model->all_ppsample_count();
//		$data['all_buyer']=$this->Home_Model->tna_status();
//		$this->load->view('home',$data);
//		//$this->load->view('footer');
//	}
	
	//public function search()
//	{
//		$data['title']='User Login';
//		$this->load->view('head',$data);
//		$this->load->view('toprightnav');
//		
//		$this->load->view('home',$data);
//	}
//	public function creadits()
//	{
//		$data['title']='Creadits';
//		$this->load->view('head',$data);
//		$this->load->view('toprightnav');
//		$this->load->view('leftmenu');
//		$this->load->view('creadits',$data);
//	}
	
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
        
        $mail->setFrom('hris@babylonit.com', 'License Expire Notification');
        //$mail->addReplyTo('info@example.com', 'Test');
        
        // Add a recipient
        $mail->addAddress('arifhrd@babylon-bd.com');
        
        // Add cc or bcc 
        $mail->addCC('akbar@babylon-bd.com');
        $mail->addBCC('hris@babylon-bd.com');
        
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
		</tr></table>".
		"<br/>".
		"<p>This is auto generated mail,no need to reply";
		
        $mail->Body = $mailContent;
        
        // Send email
        if(!$mail->send()){
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
			
        }else{
            echo 'Message has been sent';
        }
			
		
    }
	
	/////////////////////////////////////////////////////////////CALENDAR///////////////////////////////////////////////////////////////
	
	/*Home page Calendar view  */
	public function calendar()
	{
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='Challan Receive';
		
		$this->load->view('head',$data);
		$this->load->view('toprightnav');
		$this->load->view('leftmenu');
		$this->load->view('calendar',$data);
	}
	
	/*Get all Events */

	public function getEvents()
	{
		$this->load->database();
		$this->load->model('Admin');
		$this->load->view('head',$data);
		$result=$this->Admin->getEvents();
		echo json_encode($result);

	}
	/*Add new event */
	public function addEvent()
	{
		$this->load->database();
		$this->load->model('Admin');
		$result=$this->Admin->addEvent();
		echo $result;
	}
	/*Update Event */
	public function updateEvent()
	{
		$result=$this->Admin->updateEvent();
		echo $result;
	}
	/*Delete Event*/
	public function deleteEvent()
	{
		$this->load->database();
		$this->load->model('Admin');
		$result=$this->Admin->deleteEvent();
		echo $result;
	}
	public function dragUpdateEvent()
	{	
		$this->load->database();
		$this->load->model('Admin');
		$result=$this->Admin->dragUpdateEvent();
		echo $result;
	}

	
	
}
