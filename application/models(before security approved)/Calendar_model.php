<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calendar_model extends CI_Model {


/*Read the data from DB */
	public function getEvents($userid)
	{
		
	$sql = "SELECT * FROM events WHERE events.date BETWEEN ? AND ? AND userid='$userid' OR departmental='1' OR unit='1' OR allu='1' ORDER BY events.date ASC";
	return $this->db->query($sql, array($_GET['start'], $_GET['end']))->result();

	}
	
	public function getEventsAdmin($userid)
	{
		
	$sql = "SELECT * FROM events WHERE events.date BETWEEN ? AND ? AND userid='$userid' OR managerial='1' OR departmental='1' OR unit='1' OR training='1' OR organization='1' OR allu='1' ORDER BY events.date ASC";
	return $this->db->query($sql, array($_GET['start'], $_GET['end']))->result();

	}
	
	public function getEventsManager($userid)
	{
		
	$sql = "SELECT * FROM events WHERE events.date BETWEEN ? AND ? AND userid='$userid' OR managerial='1' OR departmental='1' OR unit='1' OR training='1' OR allu='1' ORDER BY events.date ASC";
	return $this->db->query($sql, array($_GET['start'], $_GET['end']))->result();

	}
	
	public function getEventsTraining($userid)
	{
		
	$sql = "SELECT * FROM events WHERE events.date BETWEEN ? AND ? AND userid='$userid' OR departmental='1' OR unit='1' OR training='1' OR allu='1' ORDER BY events.date ASC";
	return $this->db->query($sql, array($_GET['start'], $_GET['end']))->result();

	}
	
	public function getEventsOrganization($userid)
	{
		
	$sql = "SELECT * FROM events WHERE events.date BETWEEN ? AND ? AND userid='$userid' OR organization='1' OR allu='1' ORDER BY events.date ASC";
	return $this->db->query($sql, array($_GET['start'], $_GET['end']))->result();

	}

/*Create new events */

	public function addEvent()
	{

	$sql = "INSERT INTO events (title,events.date, description, color, userid, self,managerial,departmental,unit,training,organization,allu) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
	$this->db->query($sql, array($_POST['title'], $_POST['date'], $_POST['description'], $_POST['color'], $_POST['userid'],'1', $_POST['managerialid'], $_POST['departmentalid'], $_POST['unitid'], $_POST['trainingid'], $_POST['organizationid'], $_POST['allid']));
		return ($this->db->affected_rows()!=1)?false:true;
	}

	/*Update  event */

	public function updateEvent($userid)
	{
		
		$sql="SELECT userid FROM events WHERE id='$_POST[id]'";
		$query=$this->db->query($sql);
		$result=$query->result_array();
		foreach($result as $row)
		{ 
			$cuid=$row['userid'];
		}
		if($userid==$cuid)
		{
			$sql = "UPDATE events SET title = ?, events.date = ?, description = ?, color = ?, managerial = ?, departmental= ?, unit= ?,training= ?, organization= ?, allu= ? WHERE id = ?";
	$this->db->query($sql, array($_POST['title'], $_POST['date'], $_POST['description'], $_POST['color'], $_POST['managerialid'], $_POST['departmentalid'], $_POST['unitid'], $_POST['trainingid'], $_POST['organizationid'], $_POST['allid'], $_POST['id']));
		return ($this->db->affected_rows()!=1)?false:true;
		}
		else
		{
			return false;
		}
	
	}


	/*Delete event */

	public function deleteEvent($userid)
	{

		$sql="SELECT userid FROM events WHERE id='$_GET[id]'";
		$query=$this->db->query($sql);
		$result=$query->result_array();
		foreach($result as $row)
		{ 
			$cuid=$row['userid'];
		}
		if($userid==$cuid)
		{
	$sql = "DELETE FROM events WHERE id = ?";
	$this->db->query($sql, array($_GET['id']));
		return ($this->db->affected_rows()!=1)?false:true;
		}
		else
		{
			return false;
		}
		
	}

	/*Update  event */

	public function dragUpdateEvent($userid)
	{
			$date=date('Y-m-d h:i:s',strtotime($_POST['date']));
			$sql="SELECT userid FROM events WHERE id='$_POST[id]'";
		$query=$this->db->query($sql);
		$result=$query->result_array();
		foreach($result as $row)
		{ 
			$cuid=$row['userid'];
		}
		if($userid==$cuid)
		{
			$sql = "UPDATE events SET  events.date = ? WHERE id = ?";
			$this->db->query($sql, array($date, $_POST['id']));
			return ($this->db->affected_rows()!=1)?false:true;
		}
		else
		{
			return false;
		}

	}






}