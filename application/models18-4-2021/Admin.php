<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Model {

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
	
	
	//public function dashboard_status()
//	{
//		$sql1="SELECT * FROM opinfo WHERE opstatus=0";
//		$query1=$this->db->query($sql1);
//		$result=$query1->result_array();
//		return $result;
//	}
//	public function all_op_count()
//	{
//		$sql1="SELECT count(opid) AS opcount FROM opinfo WHERE opstatus=0";
//		$query1=$this->db->query($sql1);
//		$result=$query1->result_array();
//		return $result;
//	}
	
	
	
	
	
	
	public function show_divisionname($factoryid)
	{
		$query="SELECT divisionid,divisionname FROM division WHERE factoryid='$factoryid' ORDER BY divisionname ASC";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function show_departmentname($factoryid,$divisionid)
	{
		$query="SELECT deptid,departmentname FROM department WHERE factoryid='$factoryid' AND divisionid='$divisionid' ORDER BY departmentname ASC";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function show_sectionname($factoryid,$divisionid,$departmentid)
	{
		$query="SELECT secid,sectionname FROM section WHERE factoryid='$factoryid' AND divisionid='$divisionid' AND departmentid='$departmentid' ORDER BY sectionname ASC";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function show_subsectionname($factoryid,$divisionid,$departmentid,$sectionid)
	{
		$query="SELECT subsecid,subsectionname FROM subsection WHERE factoryid='$factoryid' AND divisionid='$divisionid' AND departmentid='$departmentid' AND sectionid='$sectionid' ORDER BY subsectionname ASC";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	
	public function show_childdesignationname($parentdesignationid)
	{
		$query="SELECT childdesignationid,echilddesignation FROM childdesignation WHERE parentdesignationid='$parentdesignationid' ORDER BY echilddesignation ASC";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	
	
	
	
	
	
	
	
	
	
	
	public function fac_insert($facid,$facname,$fac_address)
	{
		$sql="SELECT * FROM factory WHERE factoryid='$facid'";
		$query=$this->db->query($sql);
		if($query->num_rows()==1)
		{
			return false;
		}
		else
		{
		$sql="INSERT INTO factory VALUES ('$facid','$facname','$fac_address')";
		$query=$this->db->query($sql);
		return $query;
		}
	}
	public function factory_list()
	{
		$query="SELECT * FROM factory";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function factory_list_up($facid)
	{
		$sql1="SELECT * FROM factory
		
		
		WHERE factoryid='$facid'";
		$query1=$this->db->query($sql1);
		$result=$query1->result_array();
		return $result;
	}
	public function flup($fid,$facid,$factoryname,$factory_address)
	{
		
		$sql="UPDATE factory SET factoryid='$facid',factoryname='$factoryname',factory_address='$factory_address' WHERE factoryid='$fid'";
		$query=$this->db->query($sql);
	}
	public function division_insert($diviname,$factoryid)
	{
		$sql="SELECT divisionname,factoryid FROM division WHERE divisionname='$diviname' AND factoryid='$factoryid'";
		$query=$this->db->query($sql);
		if($query->num_rows()==1)
		{
			return false;
		}
		else
		{
		$sql="INSERT INTO division VALUES ('','$diviname','$factoryid')";
		$query=$this->db->query($sql);
		return $query;
		}
	}
	public function division_list()
	{
		$query="SELECT * FROM division 
		JOIN factory ON
		factory.factoryid=division.factoryid ORDER BY factory.factoryid ASC";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function division_list_up($divisionid)
	{
		$sql1="SELECT * FROM division
		JOIN factory ON
		factory.factoryid=division.factoryid
		
		WHERE divisionid='$divisionid'";
		$query1=$this->db->query($sql1);
		$result=$query1->result_array();
		return $result;
	}
	public function dlup($divisionid,$divisionname)
	{
		
		$sql="UPDATE division SET divisionid='$divisionid',divisionname='$divisionname' WHERE divisionid='$divisionid'";
		$query=$this->db->query($sql);
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
 	public function department_insert($factoryid,$divisionid,$department)
	{
		$sql="SELECT * FROM department WHERE factoryid='$factoryid' AND divisionid='$divisionid' AND departmentname='$department'";
		$query=$this->db->query($sql);
		if($query->num_rows()==1)
		{
			return false;
		}
		else
		{
		$sql="INSERT INTO department VALUES ('','$factoryid','$divisionid','$department')";
		$query=$this->db->query($sql);
		return $query;
		}
	}
	
	public function department_list()
	{
		$query="SELECT * FROM department 
		JOIN factory ON
		factory.factoryid=department.factoryid
		JOIN division ON
		division.divisionid=department.divisionid AND
		division.factoryid=department.factoryid";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function department_list_up($deptid)
	{
		$sql1="SELECT * FROM department 
		JOIN factory ON
		factory.factoryid=department.factoryid
		JOIN division ON
		division.divisionid=department.divisionid AND
		division.factoryid=department.factoryid
		
		WHERE deptid='$deptid'";
		$query1=$this->db->query($sql1);
		$result=$query1->result_array();
		return $result;
	}
	public function departmentlup($deptid,$departmentname)
	{
		
		$sql="UPDATE department SET deptid='$deptid',departmentname='$departmentname' WHERE deptid='$deptid'";
		$query=$this->db->query($sql);
	}
	
    public function section_insert($factoryid,$divisionid,$departmentid,$section)
	{
		$sql="SELECT * FROM section WHERE factoryid='$factoryid' AND divisionid='$divisionid' AND departmentid='$departmentid' AND sectionname='$section'";
		$query=$this->db->query($sql);
		if($query->num_rows()==1)
		{
			return false;
		}
		else
		{
		$sql="INSERT INTO section VALUES ('','$factoryid','$divisionid','$departmentid','$section')";
		$query=$this->db->query($sql);
		return $query;
		}
	}
	public function section_list()
	{
		$query="SELECT * FROM section 
		JOIN factory ON
		factory.factoryid=section.factoryid
		JOIN division ON
		division.divisionid=section.divisionid AND
		division.factoryid=section.factoryid
		JOIN department ON
		department.deptid=section.departmentid AND
		department.factoryid=section.factoryid AND
		department.divisionid=section.divisionid";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function section_list_up($secid)
	{
		$sql1="SELECT * FROM section 
		JOIN factory ON
		factory.factoryid=section.factoryid
		JOIN division ON
		division.divisionid=section.divisionid AND
		division.factoryid=section.factoryid
		JOIN department ON
		department.deptid=section.departmentid AND
		department.factoryid=section.factoryid AND
		department.divisionid=section.divisionid
		
		WHERE secid='$secid'";
		$query1=$this->db->query($sql1);
		$result=$query1->result_array();
		return $result;
	}
	public function sectionlup($secid,$sectionname)
	{
		
		$sql="UPDATE section SET secid='$secid',sectionname='$sectionname' WHERE secid='$secid'";
		$query=$this->db->query($sql);
	}
	public function subsection_insert($factoryid,$divisionid,$departmentid,$sectionid,$subsection)
	{
		$sql="SELECT * FROM subsection WHERE factoryid='$factoryid' AND divisionid='$divisionid' AND departmentid='$departmentid' AND sectionid='$sectionid' AND subsectionname='$subsection'";
		$query=$this->db->query($sql);
		if($query->num_rows()==1)
		{
			return false;
		}
		else
		{
		$sql="INSERT INTO subsection VALUES ('','$factoryid','$divisionid','$departmentid','$sectionid','$subsection')";
		$query=$this->db->query($sql);
		return $query;
		}
	}
	
	public function subsection_list()
	{
		$query="SELECT * FROM subsection 
		JOIN factory ON
		factory.factoryid=subsection.factoryid
		JOIN division ON
		division.divisionid=subsection.divisionid AND
		division.factoryid=subsection.factoryid
		JOIN department ON
		department.deptid=subsection.departmentid AND
		department.factoryid=subsection.factoryid AND
		department.divisionid=subsection.divisionid
		JOIN section ON
		section.departmentid=subsection.departmentid AND
		section.factoryid=subsection.factoryid AND
		section.divisionid=subsection.divisionid AND
		section.secid=subsection.sectionid
		";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function subsection_list_up($subsecid)
	{
		$sql1="SELECT * FROM subsection 
		JOIN factory ON
		factory.factoryid=subsection.factoryid
		JOIN division ON
		division.divisionid=subsection.divisionid AND
		division.factoryid=subsection.factoryid
		JOIN department ON
		department.deptid=subsection.departmentid AND
		department.factoryid=subsection.factoryid AND
		department.divisionid=subsection.divisionid
		JOIN section ON
		section.departmentid=subsection.departmentid AND
		section.factoryid=subsection.factoryid AND
		section.divisionid=subsection.divisionid AND
		section.secid=subsection.sectionid
		
		WHERE subsecid='$subsecid'";
		$query1=$this->db->query($sql1);
		$result=$query1->result_array();
		return $result;
	}
	public function subsectionlup($subsecid,$subsectionname)
	{
		
		$sql="UPDATE subsection SET subsecid='$subsecid',subsectionname='$subsectionname' WHERE subsecid='$subsecid'";
		$query=$this->db->query($sql);
	}
	public function religion_insert($religionname)
	{
		$sql="SELECT * FROM religion WHERE religionname='$religionname'";
		$query=$this->db->query($sql);
		if($query->num_rows()==1)
		{
			return false;
		}
		else
		{
		$sql="INSERT INTO religion VALUES ('','$religionname')";
		$query=$this->db->query($sql);
		return $query;
		}
	}
	public function religion_list()
	{
		$query="SELECT * FROM religion";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function religion_list_up($religionid)
	{
		$sql1="SELECT * FROM religion WHERE religionid='$religionid'";
		$query1=$this->db->query($sql1);
		$result=$query1->result_array();
		return $result;
	}
	public function religionlup($religionid,$religionname)
	{
		
		$sql="UPDATE religion SET religionname='$religionname' WHERE religionid='$religionid'";
		$query=$this->db->query($sql);
	}
	public function gender_insert($gender)
	{
		$sql="SELECT * FROM gender WHERE gender='$gender'";
		$query=$this->db->query($sql);
		if($query->num_rows()==1)
		{
			return false;
		}
		else
		{
		$sql="INSERT INTO gender VALUES ('','$gender')";
		$query=$this->db->query($sql);
		return $query;
		}
	}
	public function gender_list()
	{
		$query="SELECT * FROM gender";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function gender_list_up($genderid)
	{
		$sql1="SELECT * FROM gender WHERE genderid='$genderid'";
		$query1=$this->db->query($sql1);
		$result=$query1->result_array();
		return $result;
	}
	public function genderlup($genderid,$gender)
	{
		
		$sql="UPDATE gender SET gender='$gender' WHERE genderid='$genderid'";
		$query=$this->db->query($sql);
	}
	public function maritualstatus_insert($maritualstatus)
	{
		$sql="SELECT * FROM maritualstatus WHERE maritualstatus='$maritualstatus'";
		$query=$this->db->query($sql);
		if($query->num_rows()==1)
		{
			return false;
		}
		else
		{
		$sql="INSERT INTO maritualstatus VALUES ('','$maritualstatus')";
		$query=$this->db->query($sql);
		return $query;
		}
	}
	public function maritualstatus_list()
	{
		$query="SELECT * FROM maritualstatus";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function maritualstatus_list_up($maritualstatusid)
	{
		$sql1="SELECT * FROM maritualstatus WHERE maritualstatusid='$maritualstatusid'";
		$query1=$this->db->query($sql1);
		$result=$query1->result_array();
		return $result;
	}
	public function maritualstatuslup($maritualstatusid,$maritualstatus)
	{
		
		$sql="UPDATE maritualstatus SET maritualstatus='$maritualstatus' WHERE maritualstatusid='$maritualstatusid'";
		$query=$this->db->query($sql);
	}
	public function parentdesignation_insert($eparentdesignation,$bparentdesignation)
	{
		$sql="SELECT * FROM parentdesignation WHERE eparentdesignation='$eparentdesignation' AND bparentdesignation='$bparentdesignation'";
		$query=$this->db->query($sql);
		if($query->num_rows()==1)
		{
			return false;
		}
		else
		{
		$sql="INSERT INTO parentdesignation VALUES ('','$eparentdesignation','$bparentdesignation')";
		$query=$this->db->query($sql);
		return $query;
		}
	}
	public function parentdesignation_list()
	{
		$query="SELECT * FROM parentdesignation";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function parentdesignation_list_up($parentdesignationid)
	{
		$sql1="SELECT * FROM parentdesignation WHERE parentdesignationid='$parentdesignationid'";
		$query1=$this->db->query($sql1);
		$result=$query1->result_array();
		return $result;
	}
	public function parentdesignationlup($parentdesignationid,$eparentdesignation,$bparentdesignation)
	{
		
		$sql="UPDATE parentdesignation SET eparentdesignation='$eparentdesignation',bparentdesignation='$bparentdesignation' WHERE parentdesignationid='$parentdesignationid'";
		$query=$this->db->query($sql);
	}
	public function childdesignation_insert($parentdesignationid,$echilddesignation,$bchilddesignation)
	{
		$sql="SELECT * FROM childdesignation WHERE echilddesignation='$echilddesignation' AND bchilddesignation='$bchilddesignation'";
		$query=$this->db->query($sql);
		if($query->num_rows()==1)
		{
			return false;
		}
		else
		{
		$sql="INSERT INTO childdesignation VALUES ('','$parentdesignationid','$echilddesignation','$bchilddesignation')";
		$query=$this->db->query($sql);
		return $query;
		}
	}
	public function childdesignation_list()
	{
		$query="SELECT * FROM childdesignation JOIN parentdesignation ON
		parentdesignation.parentdesignationid=childdesignation.parentdesignationid";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
   public function childdesignation_list_up($childdesignationid)
	{
		$sql1="SELECT * FROM childdesignation JOIN parentdesignation ON
		parentdesignation.parentdesignationid=childdesignation.parentdesignationid WHERE childdesignationid='$childdesignationid'";
		$query1=$this->db->query($sql1);
		$result=$query1->result_array();
		return $result;
	}
   public function childdesignationlup($childdesignationid,$echilddesignation,$bchilddesignation)
	{
		
		$sql="UPDATE childdesignation SET echilddesignation='$echilddesignation',bchilddesignation='$bchilddesignation' WHERE childdesignationid='$childdesignationid'";
		$query=$this->db->query($sql);
	}
  public function usertype_insert($usertype)
	{
		$sql="SELECT * FROM usertype WHERE usertype='$usertype'";
		$query=$this->db->query($sql);
		if($query->num_rows()==1)
		{
			return false;
		}
		else
		{
		$sql="INSERT INTO usertype VALUES ('','$usertype')";
		$query=$this->db->query($sql);
		return $query;
		}
	}
	public function usertype_list()
	{
		$query="SELECT * FROM usertype";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function usertype_list_up($usertypeid)
	{
		$sql1="SELECT * FROM usertype WHERE usertypeid='$usertypeid'";
		$query1=$this->db->query($sql1);
		$result=$query1->result_array();
		return $result;
	}
	public function usertypelup($usertypeid,$usertype)
	{
		
		$sql="UPDATE usertype SET usertype='$usertype' WHERE usertypeid='$usertypeid'";
		$query=$this->db->query($sql);
	}
	public function user_insert($factoryid,$divisionid,$departmentid,$sectionid,$subsectionid,$location,$ename,$bname,$parentdesignationid,$childdesignationid,$religion,$maritual,$dobdate,$dojdate,$hdistrict,$epermanentaddress,$bpermanentaddress,$epresentaddress,$bpresentaddress,$nid,$bloodgroup,$gender,$salary,$efficiency,$imark,$oemail,$pemail,$pmobile,$emobile,$usertypeid,$userid,$password,$pic_file)
	{
		$sql="SELECT * FROM user WHERE userid='$userid'";
		$query=$this->db->query($sql);
		if($query->num_rows()==1)
		{
			return false;
		}
		else
		{
		$sql="INSERT INTO user VALUES ('$factoryid','$divisionid','$departmentid','$sectionid','$subsectionid','$location','$ename','$bname','$parentdesignationid','$childdesignationid','$religion','$maritual','$dobdate','$dojdate','$hdistrict','$epermanentaddress','$bpermanentaddress','$epresentaddress','$bpresentaddress','$nid','$bloodgroup','$gender','$salary','$efficiency','$imark','$oemail','$pemail','$pmobile','$emobile','$usertypeid','$userid','$password','$pic_file')";
		$query=$this->db->query($sql);
		return $query;
		}
	}
	public function user_list()
	{
		$query="SELECT * FROM user
		JOIN factory ON factory.factoryid=user.factoryid
		JOIN division ON division.divisionid=user.divisionid 
		JOIN department ON department.deptid=user.departmentid
		JOIN section ON section.secid=user.sectionid
		JOIN subsection ON subsection.subsecid=user.subsectionid
		LEFT JOIN religion ON religion.religionid=user.religion
		LEFT JOIN maritualstatus ON maritualstatus.maritualstatusid=user.maritual
		LEFT JOIN gender ON gender.genderid=user.gender
		JOIN usertype ON usertype.usertypeid=user.user_type";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function user_list_up($userid)
	{
		$sql1="SELECT * FROM user
		JOIN factory ON factory.factoryid=user.factoryid
		JOIN division ON division.divisionid=user.divisionid 
		JOIN department ON department.deptid=user.departmentid
		JOIN section ON section.secid=user.sectionid
		JOIN subsection ON subsection.subsecid=user.subsectionid
		LEFT JOIN parentdesignation ON parentdesignation.parentdesignationid=user.parentdesignationid
		LEFT JOIN childdesignation ON childdesignation.childdesignationid=user.childdesignationid
		LEFT JOIN religion ON religion.religionid=user.religion
		LEFT JOIN maritualstatus ON maritualstatus.maritualstatusid=user.maritual
		LEFT JOIN gender ON gender.genderid=user.gender
		JOIN usertype ON usertype.usertypeid=user.user_type WHERE userid='$userid'";
		$query1=$this->db->query($sql1);
		$result=$query1->result_array();
		return $result;
	}
	public function eimglup($userid,$pic_file)
	{
		
		$sql="UPDATE user SET image='$pic_file' WHERE userid='$userid'";
		$query=$this->db->query($sql);
	}
	public function ulup($factoryid,$divisionid,$departmentid,$sectionid,$subsectionid,$location,$ename,$bname,$parentdesignationid,$childdesignationid,$religion,$maritual,$dobdate,$dojdate,$hdistrict,$epermanentaddress,$bpermanentaddress,$epresentaddress,$bpresentaddress,$nid,$bloodgroup,$gender,$salary,$efficiency,$imark,$oemail,$pemail,$pmobile,$emobile,$usertypeid,$userid,$password)
	{
		
		$sql="UPDATE user SET factoryid='$factoryid',divisionid='$divisionid',departmentid='$departmentid',sectionid='$sectionid',subsectionid='$subsectionid',location='$location',ename='$ename',bname='$bname',parentdesignationid='$parentdesignationid',childdesignationid='$childdesignationid',religion='$religion',maritual='$maritual',dob='$dobdate',doj='$dojdate',hdistrict='$hdistrict',epermanentaddress='$epermanentaddress',bpermanentaddress='$bpermanentaddress',epresentaddress='$epresentaddress',bpresentaddress='$bpresentaddress',nid='$nid',blodgroup='$bloodgroup',gender='$gender',salary='$salary',efficiency='$efficiency',identification='$imark',oemail='$oemail',pemail='$pemail',pmobile='$pmobile',emobile='$emobile',user_type='$usertypeid',password='$password' WHERE userid='$userid'";
		$query=$this->db->query($sql);
	}
	public function createtask_insert($userid,$tasktypeid,$taskname,$taskdescription,$createdate,$deadline)
	{
		
	
	$createdate = date("Y-m-d", strtotime($createdate));
	$deadline = date("Y-m-d", strtotime($deadline));
	$d=date('Y-m-d');
	$t= date("h:i:sa");
	$d=str_replace("-","",$d);
	$t=str_replace(":","",$t);
	$ctid=$d.$t;
		$sql="INSERT INTO createtask VALUES ('$ctid','$userid','$tasktypeid','$taskname','$taskdescription','$createdate','$deadline',1)";
		$query=$this->db->query($sql);
		return $query;
		//}
	}
	public function task_list()
	{
		$query="SELECT * FROM createtask
		JOIN user ON user.userid=createtask.userid
		
		LEFT JOIN tasktype ON tasktype.tasktypeid=createtask.tasktypeid
		WHERE createtaskstatus='1'";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function completed_task_list()
	{
		$query="SELECT * FROM assignee_task_list_view JOIN user ON user.userid=assignee_task_list_view.assignerid
JOIN task_assignee_completed_view ON task_assignee_completed_view.createtaskid=assignee_task_list_view.createtaskid WHERE assigneestatus=0 ORDER BY assigneetlid DESC";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function completed_task_list_user($userid)
	{
		$query="SELECT * FROM assignee_task_list_view JOIN user ON user.userid=assignee_task_list_view.assignerid
JOIN task_assignee_completed_view ON task_assignee_completed_view.createtaskid=assignee_task_list_view.createtaskid
		 WHERE assigneeid='$userid' AND assigneestatus='0' ORDER BY assigneetlid DESC";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function task_details_update($createtaskid)
	{
		
		$sql="UPDATE createtask SET createtaskstatus='0' WHERE createtaskid='$createtaskid'";
		$query=$this->db->query($sql);
	}
	public function taskassignee_select($factoryid,$divisionid,$departmentid,$sectionid,$subsectionid)
	{
		$query="SELECT userid,ename FROM user WHERE factoryid='$factoryid' AND divisionid='$divisionid' AND departmentid='$departmentid' AND sectionid='$sectionid' AND subsectionid='$subsectionid'";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function assignee_task_list_update($assigneetlid)
	{
		
		$sql="UPDATE assignee_task_list SET assigneestatus='2',assignee_submitted_date=CURDATE() WHERE assigneetlid='$assigneetlid'";
		$query=$this->db->query($sql);
	}
	public function task_completed_insert($assigneetlid,$rating,$comments,$completeddate)
	{
		
		$completeddate = date("Y-m-d", strtotime($completeddate));
		$sql="UPDATE assignee_task_list SET assigneestatus='0',assigner_close_date='$completeddate',ratings='$rating',comments='$comments' WHERE assigneetlid='$assigneetlid'";
		$query=$this->db->query($sql);
	}
	public function taskassignee_select_insert($data)
	{
		$d=date('Y-m-d');
		$t= date("h:i:sa");
		$d=str_replace("-","",$d);
		$t=str_replace(":","",$t);
		$ctaid=$d.$t;
		$sql="SELECT * FROM task_assignee WHERE createtaskid='$data[createtaskid]' AND auserid='$data[userid]'";
		$query=$this->db->query($sql);
		
		if($query->num_rows()==1)
			{
				return false;
			}
		else
			{
				
				$sql="INSERT INTO task_assignee VALUES ('$data[createtaskid]','$data[userid]')";
				$query=$this->db->query($sql);
				return true;
			}
	}
	public function task_details($createtaskid)
	{
		$query="SELECT * FROM createtask
		JOIN user ON user.userid=createtask.userid
		
		JOIN task_assignee_view ON task_assignee_view.createtaskid=createtask.createtaskid
		WHERE createtask.createtaskid='$createtaskid'";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function task_details_individual($userid,$createtaskid)
	{
		$query="SELECT * FROM task_assignee_view
		WHERE userid='$userid' AND createtaskid='$createtaskid'";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function assignee_task_list($userid,$createtaskid)
	{
		$query="SELECT * FROM assignee_task_list JOIN task_assignee_view

ON assignee_task_list.createtaskid=task_assignee_view.createtaskid
		WHERE task_assignee_view.userid='$userid' AND task_assignee_view.createtaskid='$createtaskid' AND assignee_task_list.assigneestatus='1' OR assignee_task_list.assigneestatus='2' GROUP BY task_assignee_view.createtaskid ORDER BY assigneetlid DESC";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function assignee_task_list1($userid)
	{
		$query="SELECT * FROM assignee_task_list JOIN task_assignee_view

ON assignee_task_list.assigneeid=task_assignee_view.userid
AND assignee_task_list.createtaskid=task_assignee_view.createtaskid
		WHERE assignee_task_list.assigneeid='$userid' AND (assignee_task_list.assigneestatus='1' OR assignee_task_list.assigneestatus='2') ORDER BY assigneetlid DESC";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function task_details_individual_insert($assignerid,$assigneeid,$createtaskid,$taskname,$taskdescription,$createdate,$deadline,$pic_file)
	{
		$createdate = date("Y-m-d", strtotime($createdate));
		$deadline = date("Y-m-d", strtotime($deadline));
		$d=date('Y-m-d');
		$t= date("h:i:sa");
		$d=str_replace("-","",$d);
		$t=str_replace(":","",$t);
		$astaid=$d.$t;
		$sql="INSERT INTO assignee_task_list VALUES ('$astaid','$assignerid','$assigneeid','$createtaskid','$taskname','$taskdescription','$createdate','$deadline','$pic_file','1','','','','')";
		$query=$this->db->query($sql);
		return true;
			
	}
	public function task_comments_insert($assignerid,$createtaskid,$assigneeid,$assigneetlid,$taskcomments,$commentsuserid)
	{
		
		$d=date('Y-m-d');
		$t= date("h:i:sa");
		$d=str_replace("-","",$d);
		$t=str_replace(":","",$t);
		$tcid=$d.$t;
		$sql="INSERT INTO task_comments VALUES ('$tcid','$assignerid','$createtaskid','$assigneeid','$assigneetlid','$taskcomments','$commentsuserid',CURDATE(),CURTIME())";
		$query=$this->db->query($sql);
		return true;
			
	}
	public function task_comments_list($assignerid,$createtaskid,$assigneeid,$assigneetlid)
	{
		$query="SELECT * FROM task_comments WHERE assignerid='$assignerid' AND createtaskid='$createtaskid' AND userid='$assigneeid' AND assigneetlid='$assigneetlid'";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function user_task_complete_list($userid)
	{
		//$query="SELECT COUNT(assigneeid) AS totaltask,SUM(ratings) AS ratings FROM assignee_task_list WHERE assigneeid='$userid'";
		$query="SELECT  userid,ename,SUM(ratings) AS ratings,(SELECT COUNT(assigneeid) FROM assignee_task_list WHERE assigneestatus='1' AND assigneeid='$userid') AS ongoing,(SELECT COUNT(assigneeid) FROM assignee_task_list WHERE assigneestatus='2' AND assigneeid='$userid') AS submitted,(SELECT COUNT(assigneeid) FROM assignee_task_list WHERE assigneestatus='0' AND assigneeid='$userid') AS completed 
		FROM assignee_task_list 
		JOIN user ON user.userid=assignee_task_list.assigneeid
		WHERE assigneeid='$userid' GROUP BY assigneeid";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function date_wise_total_task_complete_list($pd,$wd)
	{
		$pd = date("Y-m-d", strtotime($pd));
		$wd = date("Y-m-d", strtotime($wd));
		$query="SELECT userid,ename,SUM(ratings) as ratings,
		SUM(CASE WHEN assigneestatus = 1 THEN 1 ELSE 0 END) as ongoing,
		SUM(CASE WHEN assigneestatus = 2 THEN 1 ELSE 0 END) as submitted,
		SUM(CASE WHEN assigneestatus = 0 THEN 1 ELSE 0 END) as completed 
		FROM assignee_task_list
		JOIN user ON
		user.userid=assignee_task_list.assigneeid
		WHERE assigner_close_date BETWEEN '$pd' AND '$wd' 
		GROUP BY assigneeid";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function license_insert($factoryid,$divisionid,$departmentid,$licensetypeid,$licensename,$reauthority,$issuedate,$renewaldate,$processtime,$regulatoryfee,$misexp,$pic_file)
	{
		$issuedate = date("Y-m-d", strtotime($issuedate));
		$issuedate=$issuedate;
		$renewaldate = date("Y-m-d", strtotime($renewaldate));
		$renewaldate=$renewaldate;
		$sql="INSERT INTO license VALUES ('','$factoryid','$licensename','$reauthority','$divisionid','$departmentid','$licensetypeid','$issuedate','$renewaldate','$processtime','$regulatoryfee','$misexp','$pic_file')";
				$query=$this->db->query($sql);
				return true;
			
	}
	public function license_list()
	{
		$query="SELECT * FROM license
		
		JOIN factory ON factory.factoryid=license.factoryid
		JOIN division ON division.divisionid=license.divisionid 
		JOIN department ON department.deptid=license.departmentid
		LEFT JOIN licensetype ON licensetype.licensetypeid=license.licensetypeid ORDER BY factory.factoryid";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function license_list_up($licenseid)
	{
		$sql1="SELECT * FROM license
		
		JOIN factory ON factory.factoryid=license.factoryid
		JOIN division ON division.divisionid=license.divisionid 
		JOIN department ON department.deptid=license.departmentid WHERE licenseid='$licenseid'";
		$query1=$this->db->query($sql1);
		$result=$query1->result_array();
		return $result;
	}
	public function licenselup($licenseid,$factoryid,$divisionid,$departmentid,$licensename,$reauthority,$issuedate,$renewaldate,$processtime,$regulatoryfee,$misexp)
	{
		
		$issuedate = date("Y-m-d", strtotime($issuedate));
$issuedate=$issuedate;
$renewaldate = date("Y-m-d", strtotime($renewaldate));
$renewaldate=$renewaldate;
		$sql="UPDATE license SET factoryid='$factoryid',divisionid='$divisionid',departmentid='$departmentid',licensename='$licensename',reauthority='$reauthority',issuedate='$issuedate',renewaldate='$renewaldate',processingtime='$processtime',regulatoryfee='$regulatoryfee',misexp='$misexp' WHERE licenseid='$licenseid'";
		$query=$this->db->query($sql);
	}
	public function licensetype_insert($licensetype)
	{
		$sql="SELECT * FROM licensetype WHERE licensetype='$licensetype'";
		$query=$this->db->query($sql);
		if($query->num_rows()==1)
		{
			return false;
		}
		else
		{
		$sql="INSERT INTO licensetype VALUES ('','$licensetype')";
		$query=$this->db->query($sql);
		return $query;
		}
	}
	public function licensetype_list()
	{
		$query="SELECT * FROM licensetype";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function notice_insert($pic_file,$unit,$noticename)
	{
		
		$sql="INSERT INTO notice_album VALUES ('','$unit','$noticename','$pic_file',CURDATE())";
		$query=$this->db->query($sql);
		return $query;
		
	}
	public function notice_list()
	{
		$query="SELECT * FROM notice_album ORDER BY ndate DESC";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function policy_insert($pic_file,$unit,$policyname)
	{
		
		$sql="INSERT INTO policy_album VALUES ('','$unit','$policyname','$pic_file',CURDATE())";
		$query=$this->db->query($sql);
		return $query;
		
	}
	public function policy_list()
	{
		$query="SELECT * FROM policy_album ORDER BY pdate DESC";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function eventalbum_insert($data)
	{
		
		$sql="INSERT INTO eventalbum_insert VALUES ('','$data[eventname]','$data[pic_file]','$data[edate]')";
		$query=$this->db->query($sql);
		return $query;
		
	}
	//public function event_list()
//	{
//		$query="SELECT DISTINCT(eventname) AS eventname FROM eventalbum_insert ORDER BY edate DESC";
//		$result=$this->db->query($query);
//		return $result->result_array();
//		
//	}
	public function event_list()
	{
		$query="SELECT * FROM eventalbum_insert GROUP BY eventname,edate ORDER BY edate DESC";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function event_list_show($eventname)
	{
		$query="SELECT * FROM eventalbum_insert WHERE eventname='$eventname' ORDER BY edate DESC";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function trainingtype_insert($trainingtype)
	{
		$sql="SELECT * FROM trainingtype WHERE trainingtype='$trainingtype'";
		$query=$this->db->query($sql);
		if($query->num_rows()==1)
		{
			return false;
		}
		else
		{
		$sql="INSERT INTO trainingtype VALUES ('','$trainingtype')";
		$query=$this->db->query($sql);
		return $query;
		}
	}
	public function trainingtype_list()
	{
		$query="SELECT * FROM trainingtype";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function trainingcategory_insert($trainingcategory)
	{
		$sql="SELECT * FROM trainingcategory WHERE trainingcategory='$trainingcategory'";
		$query=$this->db->query($sql);
		if($query->num_rows()==1)
		{
			return false;
		}
		else
		{
		$sql="INSERT INTO trainingcategory VALUES ('','$trainingcategory')";
		$query=$this->db->query($sql);
		return $query;
		}
	}
	public function trainingcategory_list()
	{
		$query="SELECT * FROM trainingcategory";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function training_material_insert($data)
	{
		
		$sql="INSERT INTO trainingmaterial_insert VALUES ('','$data[trainingtypeid]','$data[trainingname]','$data[trainingcategoryid]','$data[pic_file]','$data[tdate]')";
		$query=$this->db->query($sql);
		return $query;
		
	}
	public function trainingmaterial_list()
	{
		$query="SELECT * FROM trainingmaterial_insert GROUP BY trainingname,tdate ORDER BY trainingmaterialid ASC";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function trainingmaterial_list_show($trainingid)
	{
		$query="SELECT * FROM trainingmaterial_insert WHERE trainingmaterialid='$trainingid' ORDER BY tdate DESC";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function tasktype_insert($tasktype)
	{
		$sql="SELECT * FROM tasktype WHERE tasktype='$tasktype'";
		$query=$this->db->query($sql);
		if($query->num_rows()==1)
		{
			return false;
		}
		else
		{
		$sql="INSERT INTO tasktype VALUES ('','$tasktype')";
		$query=$this->db->query($sql);
		return $query;
		}
	}
	public function tasktype_list()
	{
		$query="SELECT * FROM tasktype";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function strength_insert($data)
	{
		$data['sdate'] = date("Y-m-d", strtotime($data['sdate']));
		$sql="INSERT INTO swot_insert VALUES ('','$data[factoryid]','$data[userid]','strength','$data[sdate]','$data[sbyid]','$data[sdetails]','1')";
		$query=$this->db->query($sql);
		return $query;
		
	}
	public function weakness_insert($data)
	{
		$data['wdate'] = date("Y-m-d", strtotime($data['wdate']));
		$sql="INSERT INTO swot_insert VALUES ('','$data[factoryid]','$data[userid]','weakness','$data[wdate]','$data[wbyid]','$data[wdetails]','1')";
		$query=$this->db->query($sql);
		return $query;
		
	}
	public function opportunity_insert($data)
	{
		$data['odate'] = date("Y-m-d", strtotime($data['odate']));
		$sql="INSERT INTO swot_insert VALUES ('','$data[factoryid]','$data[userid]','opportunity','$data[odate]','$data[obyid]','$data[odetails]','1')";
		$query=$this->db->query($sql);
		return $query;
		
	}
	public function threat_insert($data)
	{
		$data['tdate'] = date("Y-m-d", strtotime($data['tdate']));
		$sql="INSERT INTO swot_insert VALUES ('','$data[factoryid]','$data[userid]','threat','$data[tdate]','$data[tbyid]','$data[tdetails]','1')";
		$query=$this->db->query($sql);
		return $query;
		
	}
	public function swot_pending_list()
	{
		$query="SELECT * FROM swot_insert WHERE sstatus='1'";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function swot_list_up($sid)
	{
		$sql="UPDATE swot_insert SET sstatus='0' WHERE sid='$sid'";
		$query=$this->db->query($sql);
	}
	public function swot_delete($sid)
	{
		$sql="DELETE FROM  swot_insert WHERE sid='$sid'";
		$query=$this->db->query($sql);
	}
	public function user_swot_list($userid)
	{
		$query="SELECT * FROM swot_insert WHERE userid='$userid' ORDER BY sdate";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function eobservation_insert($data)
	{
		$data['odate'] = date("Y-m-d", strtotime($data['odate']));
		$sql="INSERT INTO eobservation_insert VALUES ('','$data[factoryid]','$data[userid]','$data[odate]','$data[obyid]','$data[odetails]','1')";
		$query=$this->db->query($sql);
		return $query;
		
	}
	public function eobservation_pending_list()
	{
		$query="SELECT * FROM eobservation_insert WHERE ostatus='1'";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function eobservation_list_up($oid)
	{
		$sql="UPDATE eobservation_insert SET ostatus='0' WHERE oid='$oid'";
		$query=$this->db->query($sql);
	}
	public function eobservation_delete($oid)
	{
		$sql="DELETE FROM  eobservation_insert WHERE oid='$oid'";
		$query=$this->db->query($sql);
	}
	public function euser_observation_list($userid)
	{
		$query="SELECT * FROM eobservation_insert WHERE userid='$userid' ORDER BY odate";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function insertRecord($data)
	{
		$sql="INSERT INTO user VALUES ('$data[factoryid]','$data[divisionid]','$data[departmentid]','$data[sectionid]','$data[subsectionid]','$data[location]','$data[ename]','$data[bname]','$data[parentdesignationid]','$data[childdesignationid]','$data[religion]','$data[maritual]','$data[dobdate]','$data[dojdate]','$data[hdistrict]','$data[epermanentaddress]','$data[bpermanentaddress]','$data[epresentaddress]','$data[bpresentaddress]','$data[nid]','$data[bloodgroup]','$data[gender]','$data[salary]','$data[efficiency]','$data[imark]','$data[oemail]','$data[pemail]','$data[pmobile]','$data[emobile]','$data[usertypeid]','$data[userid]','$data[password]','$data[image]')";
		$query=$this->db->query($sql);
		return $query;
    }
	public function challan_create($sfactoryid,$rfactoryid,$location,$item,$sqty,$unit)
	{
		
		$d=date('Y-m-d');
		$t= date("h:i:sa");
		$d=str_replace("-","",$d);
		$t=str_replace(":","",$t);
		$ccid=$d.$t;
		$sql="INSERT INTO challan_insert VALUES ('$ccid','$sfactoryid','$rfactoryid','$location','$item','$sqty','$unit',CURDATE(),CURTIME(),'','','','1')";
		$query=$this->db->query($sql);
		return $query;
		
	}
	public function challan_list()
	{
		$query="SELECT * FROM challan_insert ORDER BY ccid DESC";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function factory_challan_list($factoryid)
	{
		$query="SELECT * FROM challan_insert WHERE sent_factoryid='$factoryid' OR receive_factoryid='$factoryid' ORDER BY ccid DESC";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function challan_receive($ccid,$rqty)
	{
		$sql="UPDATE challan_insert SET rqty='$rqty',rdate=CURDATE(),rtime=CURTIME(),status='0' WHERE ccid='$ccid'";
		$query=$this->db->query($sql);
	}
	
	public function auditparty_insert($auditparty)
	{
		$sql="SELECT * FROM auditparty WHERE apname='$auditparty'";
		$query=$this->db->query($sql);
		if($query->num_rows()==1)
		{
			return false;
		}
		else
		{
		$sql="INSERT INTO auditparty VALUES ('$auditparty')";
		$query=$this->db->query($sql);
		return $query;
		}
	}
	public function auditparty_list()
	{
		$query="SELECT * FROM auditparty";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function audittype_list()
	{
		$query="SELECT * FROM audittype";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function auditscope_list()
	{
		$query="SELECT * FROM auditscope";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function audittype_insert($audittype)
	{
		$sql="SELECT * FROM audittype WHERE audittyname='$audittype'";
		$query=$this->db->query($sql);
		if($query->num_rows()==1)
		{
			return false;
		}
		else
		{
		$sql="INSERT INTO audittype VALUES ('$audittype')";
		$query=$this->db->query($sql);
		return $query;
		}
	}
	public function auditscope_insert($auditscope)
	{
		$sql="SELECT * FROM auditscope WHERE auditscopename='$auditscope'";
		$query=$this->db->query($sql);
		if($query->num_rows()==1)
		{
			return false;
		}
		else
		{
		$sql="INSERT INTO auditscope VALUES ('$auditscope')";
		$query=$this->db->query($sql);
		return $query;
		}
	}
	public function preauditinfo_insert($data)
	{
		$sql="SELECT * FROM preauditinfo WHERE factoryname='$data[factoryname]' AND buyername='$data[buyername]' AND auditparty='$data[auditparty]' AND audittype='$data[audittype]' AND auditscope='$data[auditscope]' AND fsl='$data[fsl]' AND auditdate='$data[adate]'";
		$query=$this->db->query($sql);
		//$cid=$data['ordername'].$data['colour_id'];
		if($query->num_rows()==1)
			{
				return false;
			}
		else
			{
				
				$sql="INSERT INTO preauditinfo VALUES ('','$data[factoryname]','$data[buyername]','$data[auditparty]','$data[audittype]','$data[auditscope]','$data[fsl]','$data[findings]','$data[observation]','$data[adate]',0)";
				$query=$this->db->query($sql);
				return true;
			}
	}
	public function preauditinfo_pdfinsert($factoryname,$buyername,$audittype,$pdf_file,$adate)
	{
		$sql1="SELECT * FROM preauditinfopdf WHERE  factoryname='$factoryname' AND buyername='$buyername' AND audittype='$audittype' AND preaudate='$adate'";
		$query1=$this->db->query($sql1);
		//$cid=$data['ordername'].$data['colour_id'];
		if($query1->num_rows()==1)
			{
				return false;
			}
		else
			{
				
				$sql2="INSERT INTO preauditinfopdf VALUES ('','$factoryname','$buyername','$audittype','$pdf_file','$adate')";
				$query2=$this->db->query($sql2);
				return true;
			}
	}
	public function capinfo_report($adate,$factoryname,$buyername,$audittype)
	{
		$query="SELECT * FROM preauditinfo WHERE auditdate='$adate' AND factoryname='$factoryname' AND buyername='$buyername' AND audittype='$audittype'  AND status=0";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function capinfo_report_insert($data)
	{
		$sql1="UPDATE preauditinfo SET status=1 WHERE preaid='$data[chpreaid]'";
		$query1=$this->db->query($sql1);
		$sql="INSERT INTO capreport VALUES ('','$data[preaid]','$data[cap]','$data[pr]','$data[pd]','$data[wd]','$data[pic_file]','',0)";
		$query=$this->db->query($sql);
		
		$query3="SELECT * FROM preauditinfo WHERE preaid='$data[preaid]' AND status=0";
		$result3=$this->db->query($query3);
		$re=$result3->result_array();
		foreach($re as $row3)
		{
			$va=$row3['preaid'];
			$sql2="DELETE FROM capreport WHERE preaid='$va'";
		$query2=$this->db->query($sql2);
		}
		
		
		
		return $query;
		
	}
	public function capfile_upload($adate,$factoryname,$buyername,$audittype)
	{
		$query="SELECT COUNT(preauditinfo.preaid) AS cpreaid,COUNT(capreport.preaid) AS capreaid,preauditinfo.buyername,preauditinfo.factoryname,preauditinfo.auditparty,preauditinfo.audittype,preauditinfo.auditscope,preauditinfo.auditdate FROM preauditinfo 
		LEFT JOIN capreport ON
		preauditinfo.preaid=capreport.preaid
		WHERE auditdate='$adate' AND factoryname='$factoryname' AND buyername='$buyername' AND audittype='$audittype'";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function capstatus_report($adate,$factoryname,$buyername,$audittype)
	{
		$query="SELECT preauditinfo.preaid,preauditinfo.factoryname,preauditinfo.buyername,preauditinfo.auditparty,preauditinfo.audittype,preauditinfo.auditscope,preauditinfo.fsl,preauditinfo.findings,preauditinfo.observation,preauditinfo.auditdate,capreport.cap,capreport.pr,capreport.tardate,capreport.comdate,capreport.capimage,capreport.ratings,capreport.status,user.name 
		FROM preauditinfo 
		LEFT JOIN capreport ON
		preauditinfo.preaid=capreport.preaid
		LEFT JOIN user ON
		user.userid=capreport.pr
		WHERE preauditinfo.factoryname='$factoryname' AND preauditinfo.buyername='$buyername' AND preauditinfo.audittype='$audittype' AND preauditinfo.auditdate='$adate' ORDER BY preauditinfo.fsl";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function cap_status_insert($data)
	{
		$sql="UPDATE capreport SET ratings='$data[ratings]',status='$data[status]' WHERE preaid='$data[preaid]'";
		$query=$this->db->query($sql);
		return $query;
	}
	public function capfile_upload_insert($factoryname,$buyername,$audittype,$auditdate,$pdf_file)
	{
		$sql="SELECT * FROM capreportpdf WHERE factoryname='$factoryname' AND buyername='$buyername' AND audittype='$audittype' AND auditdate='$auditdate'";
		$query=$this->db->query($sql);
		//$cid=$data['ordername'].$data['colour_id'];
		if($query->num_rows()==1)
			{
				return false;
			}
		else
			{
				
				$sql="INSERT INTO capreportpdf VALUES ('','$factoryname','$buyername','$audittype','$pdf_file','$auditdate')";
				$query=$this->db->query($sql);
				return true;
			}
	}
	public function capfull_report($adate,$factoryname,$buyername,$audittype)
	{
		$query="SELECT preauditinfo.preaid,preauditinfo.factoryname,preauditinfo.buyername,preauditinfo.auditparty,preauditinfo.audittype,preauditinfo.auditscope,preauditinfo.fsl,preauditinfo.findings,preauditinfo.observation,preauditinfo.auditdate,preauditinfopdf.preauditpdf,capreport.cap,capreport.pr,capreport.tardate,capreport.comdate,capreport.capimage,capreport.ratings,capreport.status,capreportpdf.pdffile,user.name 
		FROM preauditinfo 
		LEFT JOIN capreport ON
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
		WHERE preauditinfo.factoryname='$factoryname' AND preauditinfo.buyername='$buyername' AND preauditinfo.audittype='$audittype' AND preauditinfo.auditdate='$adate' ORDER BY preauditinfo.fsl";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function preauditfile_report($adate,$factoryname,$buyername,$audittype)
	{
		$query="SELECT preauditpdf FROM preauditinfopdf 
		
		WHERE factoryname='$factoryname' AND buyername='$buyername' AND audittype='$audittype' AND preaudate='$adate'";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function capauditfile_report($adate,$factoryname,$buyername,$audittype)
	{
		$query="SELECT pdffile FROM capreportpdf 
		
		WHERE factoryname='$factoryname' AND buyername='$buyername' AND audittype='$audittype' AND auditdate='$adate'";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function buyer_insert($pic_file,$buyername,$origin,$local_address)
	{
		$sql="SELECT * FROM buyer WHERE buyername='$buyername'";
		$query=$this->db->query($sql);
		if($query->num_rows()==1)
		{
			return false;
		}
		else
		{
		$sql="INSERT INTO buyer VALUES ('$buyername','$origin','$local_address','$pic_file')";
		$query=$this->db->query($sql);
		return $query;
		}
	}
	public function bimglup($buyername,$pic_file)
	{
		
		$sql="UPDATE buyer SET image='$pic_file' WHERE buyername='$buyername'";
		$query=$this->db->query($sql);
	}
	public function buyer_list()
	{
		$query="SELECT * FROM buyer";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function buyer_list_up($buyername)
	{
		$sql1="SELECT * FROM buyer WHERE buyername='$buyername'";
		$query1=$this->db->query($sql1);
		$result=$query1->result_array();
		return $result;
	}
	public function blup($buyer,$buyername,$origin,$local_address)
	{
		
		$sql="UPDATE buyer SET buyername='$buyername',origin='$origin',local_address='$local_address' WHERE buyername='$buyer'";
		$query=$this->db->query($sql);
	}
	
	
}
