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
	public function show_openernname($factoryid)
	{
		$query="SELECT opener.openerid,user.ename FROM opener 
		JOIN user ON user.userid=opener.openerid
		WHERE opener.factoryid='$factoryid' 
		ORDER BY opener.openerid ASC";
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
		division.factoryid=department.factoryid ORDER BY factory.factoryid ASC";
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
		department.divisionid=section.divisionid ORDER BY factory.factoryid ASC";
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
		section.secid=subsection.sectionid ORDER BY factory.factoryid ASC
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
	public function productunit_insert($productunitname)
	{
		$sql="SELECT * FROM productunit WHERE productunitname='$productunitname'";
		$query=$this->db->query($sql);
		if($query->num_rows()==1)
		{
			return false;
		}
		else
		{
		$sql="INSERT INTO productunit VALUES ('','$productunitname')";
		$query=$this->db->query($sql);
		return $query;
		}
	}
	public function productunit_list()
	{
		$query="SELECT * FROM productunit";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function productunit_list_up($productunitid)
	{
		$sql1="SELECT * FROM productunit WHERE productunitid='$productunitid'";
		$query1=$this->db->query($sql1);
		$result=$query1->result_array();
		return $result;
	}
	public function productunitlup($productunitid,$productunitname)
	{
		
		$sql="UPDATE productunit SET productunitname='$productunitname' WHERE productunitid='$productunitid'";
		$query=$this->db->query($sql);
	}
	public function producttype_insert($producttype)
	{
		$sql="SELECT * FROM producttype WHERE producttype='$producttype'";
		$query=$this->db->query($sql);
		if($query->num_rows()==1)
		{
			return false;
		}
		else
		{
		$sql="INSERT INTO producttype VALUES ('','$producttype')";
		$query=$this->db->query($sql);
		return $query;
		}
	}
	public function producttype_list()
	{
		$query="SELECT * FROM producttype";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function producttype_list_up($producttypeid)
	{
		$sql1="SELECT * FROM producttype WHERE producttypeid='$producttypeid'";
		$query1=$this->db->query($sql1);
		$result=$query1->result_array();
		return $result;
	}
	public function producttypelup($producttypeid,$producttype)
	{
		
		$sql="UPDATE producttype SET producttype='$producttype' WHERE producttypeid='$producttypeid'";
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
	public function useraccess_insert($userid,$bsre,$bswr,$tsre,$tswr,$lsre,$lswr,$nare,$nawr,$pare,$pawr,$eare,$eawr,$trre,$trwr,$swotre,$swotwr,$eore,$eowr,$mmre,$mmwr,$mmallure,$hrre,$hrwr,$care,$cawr,$capre,$capwr,$scre,$scwr,$dcre,$dcwr,$sbre,$sbwr)
	{
		$sql="SELECT * FROM user_access WHERE userid='$userid'";
		$query=$this->db->query($sql);
		if($query->num_rows()==1)
		{
			return false;
		}
		else
		{
		$sql="INSERT INTO user_access VALUES ('$userid','$bsre','$bswr','$tsre','$tswr','$lsre','$lswr','$nare','$nawr','$pare','$pawr','$eare','$eawr','$trre','$trwr','$swotre','$swotwr','$eore','$eowr','$mmre','$mmwr','$mmallure','$hrre','$hrwr','$care','$cawr','$capre','$capwr','$scre','$scwr','$dcre','$dcwr','$sbre','$sbwr')";
		$query=$this->db->query($sql);
		return $query;
		}
	}
	public function useraccess_update($userid)
	{
		$sql1="SELECT * FROM user_access WHERE userid='$userid'";
		$query1=$this->db->query($sql1);
		$result=$query1->result_array();
		return $result;
	}
	public function useraccesslup($userid,$bsre,$bswr,$tsre,$tswr,$lsre,$lswr,$nare,$nawr,$pare,$pawr,$eare,$eawr,$trre,$trwr,$swotre,$swotwr,$eore,$eowr,$mmre,$mmwr,$mmallure,$hrre,$hrwr,$care,$cawr,$capre,$capwr,$scre,$scwr,$dcre,$dcwr,$sbre,$sbwr)
	{
		$sql1="UPDATE user_access SET 
		basicinfo_read='$bsre',basicinfo_write='$bswr',tasktracker_read='$tsre',tasktracker_write='$tswr',licensetracker_read='$lsre',licensetracker_write='$lswr',noticealbum_read='$nare',noticealbum_write='$nawr',policyalbum_read='$pare',policyalbum_write='$pawr',eventalbum_read='$eare',eventalbum_write='$eawr',training_read='$trre',training_write='$trwr',swot_read='$swotre',swot_write='$swotwr',eobservation_read='$eore',eobservation_write='$eowr',materialmovement_read='$mmre',materialmovement_write='$mmwr',materialmovement_allunit_read='$mmallure',hr_read='$hrre',hr_write='$hrwr',calendar_read='$care',calendar_write='$cawr',compliancecap_read='$capre',compliancecap_write='$capwr',scorecard_read='$scre',scorecard_write='$scwr',dcaction_read='$dcre',dcaction_write='$dcwr',suggessionbox_read='$sbre',suggessionbox_write='$sbwr'
		WHERE userid='$userid'";
		return $query1=$this->db->query($sql1);
		//$result=$query1->result_array();
		
	}
	public function user_insert($factoryid,$divisionid,$departmentid,$sectionid,$subsectionid,$location,$ename,$bname,$parentdesignationid,$childdesignationid,$religion,$maritual,$dobdate,$dojdate,$hdistrict,$epermanentaddress,$bpermanentaddress,$epresentaddress,$bpresentaddress,$nid,$bloodgroup,$gender,$salary,$efficiency,$imark,$oemail,$pemail,$pmobile,$emobile,$usertypeid,$servicetypeid,$userid,$password,$pic_file)
	{
		$userid1=$factoryid.$userid;
		$sql="SELECT * FROM user WHERE userid='$userid1'";
		$query=$this->db->query($sql);
		if($query->num_rows()==1)
		{
			return false;
		}
		else
		{
		$puserid=$userid;
		//$userid=$factoryid.$userid;
		$ruserid=$userid;		
		$sql="INSERT INTO user VALUES ('$factoryid','$divisionid','$departmentid','$sectionid','$subsectionid','$location','$ename','$bname','$parentdesignationid','$childdesignationid','$religion','$maritual','$dobdate','$dojdate','$hdistrict','$epermanentaddress','$bpermanentaddress','$epresentaddress','$bpresentaddress','$nid','$bloodgroup','$gender','$salary','$efficiency','$imark','$oemail','$pemail','$pmobile','$emobile','$usertypeid','$servicetypeid','$puserid','$userid','$ruserid','$password','$pic_file','1')";
		$query=$this->db->query($sql);
		$sql1="INSERT INTO rootuser VALUES ('$ruserid')";
		$query1=$this->db->query($sql1);
		return $query;
		}
	}
	public function tuser_insert($factoryid,$divisionid,$departmentid,$sectionid,$subsectionid,$location,$ename,$bname,$parentdesignationid,$childdesignationid,$religion,$maritual,$dobdate,$dojdate,$hdistrict,$epermanentaddress,$bpermanentaddress,$epresentaddress,$bpresentaddress,$nid,$bloodgroup,$gender,$salary,$efficiency,$imark,$oemail,$pemail,$pmobile,$emobile,$usertypeid,$servicetypeid,$userid,$tuserid,$password)
	{
		$sql="SELECT * FROM user WHERE userid='$tuserid'";
		$query=$this->db->query($sql);
		if($query->num_rows()==1)
		{
			return false;
		}
		else
		{
		$sql1="SELECT image FROM user WHERE userid='$userid'";
		$query1=$this->db->query($sql1);
		$query1=$query1->result_array();
		foreach($query1 as $row)
		{
			$pic_file=$row['image'];
		}
		$puserid=$tuserid;
		$tuserid=$factoryid.$tuserid;
		$ruserid=$userid;		
		$sql2="INSERT INTO user VALUES ('$factoryid','$divisionid','$departmentid','$sectionid','$subsectionid','$location','$ename','$bname','$parentdesignationid','$childdesignationid','$religion','$maritual','$dobdate','$dojdate','$hdistrict','$epermanentaddress','$bpermanentaddress','$epresentaddress','$bpresentaddress','$nid','$bloodgroup','$gender','$salary','$efficiency','$imark','$oemail','$pemail','$pmobile','$emobile','$usertypeid','$servicetypeid','$puserid','$tuserid','$ruserid','$password','$pic_file','1')";
		$query2=$this->db->query($sql2);
		$sql3="UPDATE user SET ustatus='3' WHERE userid='$userid'";
		$query3=$this->db->query($sql3);
		return $query2;
		}
	}
	public function factorywise_user_list($factoryid)
	{
		//$query="SELECT * FROM user
//		LEFT JOIN factory ON factory.factoryid=user.factoryid
//		LEFT JOIN division ON division.divisionid=user.divisionid 
//		LEFT JOIN department ON department.deptid=user.departmentid
//		LEFT JOIN section ON section.secid=user.sectionid
//		LEFT JOIN subsection ON subsection.subsecid=user.subsectionid
//		LEFT JOIN religion ON religion.religionid=user.religion
//		LEFT JOIN maritualstatus ON maritualstatus.maritualstatusid=user.maritual
//		LEFT JOIN gender ON gender.genderid=user.gender
//		LEFT JOIN usertype ON usertype.usertypeid=user.user_type
//		LEFT JOIN servicetype ON servicetype.servicetypeid=user.service_type
//		LEFT JOIN userstatus ON userstatus.userstatusid=user.ustatus
//		WHERE user.factoryid='$factoryid' ORDER BY userid";
$query="SELECT user.factoryid,user.userid,factory.factoryname,division.divisionname,(user.divisionid) AS diviid,user.departmentid,department.deptid,department.departmentname,user.sectionid,section.sectionname,user.subsectionid,subsection.subsectionname,user.location,user.ename,user.bname,user.parentdesignationid,user.childdesignationid,user.religion,user.maritual,user.dob,user.doj,user.hdistrict,user.epermanentaddress,user.bpermanentaddress,user.epresentaddress,user.bpresentaddress,user.nid,user.blodgroup,user.gender,user.salary,user.efficiency,user.identification,user.oemail,user.pemail,user.pmobile,user.emobile,user.user_type,user.service_type,user.puserid,user.ruserid,user.password,user.ustatus,usertype.usertypeid,usertype.usertype,servicetype.servicetypeid,servicetype.servicetype,userstatus.userstatusid,userstatus.userstatus,religion.religionid,religion.religionname,maritualstatus.maritualstatusid,maritualstatus.maritualstatus,gender.genderid,gender.gender,user.password,parentdesignation.eparentdesignation,parentdesignation.parentdesignationid,parentdesignation.bparentdesignation,childdesignation.childdesignationid,childdesignation.echilddesignation,childdesignation.bchilddesignation,user.image  FROM user
		LEFT JOIN factory ON factory.factoryid=user.factoryid
		LEFT JOIN division ON division.divisionid=user.divisionid 
		LEFT JOIN department ON department.deptid=user.departmentid
		LEFT JOIN section ON section.secid=user.sectionid
		LEFT JOIN subsection ON subsection.subsecid=user.subsectionid
		LEFT JOIN parentdesignation ON parentdesignation.parentdesignationid=user.parentdesignationid
		LEFT JOIN childdesignation ON childdesignation.childdesignationid=user.childdesignationid
		LEFT JOIN religion ON religion.religionid=user.religion
		LEFT JOIN maritualstatus ON maritualstatus.maritualstatusid=user.maritual
		LEFT JOIN gender ON gender.genderid=user.gender
		LEFT JOIN usertype ON usertype.usertypeid=user.user_type 
		LEFT JOIN servicetype ON servicetype.servicetypeid=user.service_type
		LEFT JOIN userstatus ON userstatus.userstatusid=user.ustatus
		WHERE user.factoryid='$factoryid' ORDER BY user.userid";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function user_list_up($userid)
	{
		$sql1="SELECT user.factoryid,user.userid,factory.factoryname,division.divisionname,(user.divisionid) AS diviid,user.departmentid,department.deptid,department.departmentname,user.sectionid,section.sectionname,user.subsectionid,subsection.subsectionname,user.location,user.ename,user.bname,user.parentdesignationid,user.childdesignationid,user.religion,user.maritual,user.dob,user.doj,user.hdistrict,user.epermanentaddress,user.bpermanentaddress,user.epresentaddress,user.bpresentaddress,user.nid,user.blodgroup,user.gender,user.salary,user.efficiency,user.identification,user.oemail,user.pemail,user.pmobile,user.emobile,user.user_type,user.service_type,user.puserid,user.ruserid,user.password,user.ustatus,usertype.usertypeid,usertype.usertype,servicetype.servicetypeid,servicetype.servicetype,userstatus.userstatusid,userstatus.userstatus,religion.religionid,religion.religionname,maritualstatus.maritualstatusid,maritualstatus.maritualstatus,gender.genderid,gender.gender,user.password,parentdesignation.eparentdesignation,parentdesignation.parentdesignationid,parentdesignation.bparentdesignation,childdesignation.childdesignationid,childdesignation.echilddesignation,childdesignation.bchilddesignation  FROM user
		LEFT JOIN factory ON factory.factoryid=user.factoryid
		LEFT JOIN division ON division.divisionid=user.divisionid 
		LEFT JOIN department ON department.deptid=user.departmentid
		LEFT JOIN section ON section.secid=user.sectionid
		LEFT JOIN subsection ON subsection.subsecid=user.subsectionid
		LEFT JOIN parentdesignation ON parentdesignation.parentdesignationid=user.parentdesignationid
		LEFT JOIN childdesignation ON childdesignation.childdesignationid=user.childdesignationid
		LEFT JOIN religion ON religion.religionid=user.religion
		LEFT JOIN maritualstatus ON maritualstatus.maritualstatusid=user.maritual
		LEFT JOIN gender ON gender.genderid=user.gender
		LEFT JOIN usertype ON usertype.usertypeid=user.user_type 
		LEFT JOIN servicetype ON servicetype.servicetypeid=user.service_type
		LEFT JOIN userstatus ON userstatus.userstatusid=user.ustatus
		WHERE userid='$userid'";
		$query1=$this->db->query($sql1);
		$result=$query1->result_array();
		return $result;
	}
	public function servicetype_insert($servicetype)
	{
		$sql="SELECT * FROM servicetype WHERE servicetype='$servicetype'";
		$query=$this->db->query($sql);
		if($query->num_rows()==1)
		{
			return false;
		}
		else
		{
		$sql="INSERT INTO servicetype VALUES ('','$servicetype')";
		$query=$this->db->query($sql);
		return $query;
		}
	}
	public function servicetype_list()
	{
		$query="SELECT * FROM servicetype";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function servicetype_list_up($servicetypeid)
	{
		$sql1="SELECT * FROM servicetype WHERE servicetypeid='$servicetypeid'";
		$query1=$this->db->query($sql1);
		$result=$query1->result_array();
		return $result;
	}
	public function servicetypelup($servicetypeid,$servicetype)
	{
		
		$sql="UPDATE servicetype SET servicetype='$servicetype' WHERE servicetypeid='$servicetypeid'";
		$query=$this->db->query($sql);
	}
	public function userstatus_insert($userstatus)
	{
		$sql="SELECT * FROM userstatus WHERE userstatus='$userstatus'";
		$query=$this->db->query($sql);
		if($query->num_rows()==1)
		{
			return false;
		}
		else
		{
		$sql="INSERT INTO userstatus VALUES ('','$userstatus')";
		$query=$this->db->query($sql);
		return $query;
		}
	}
	public function userstatus_list()
	{
		$query="SELECT * FROM userstatus";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function userstatus_list_up($userstatusid)
	{
		$sql1="SELECT * FROM userstatus WHERE userstatusid='$userstatusid'";
		$query1=$this->db->query($sql1);
		$result=$query1->result_array();
		return $result;
	}
	public function userstatuslup($userstatusid,$userstatus)
	{
		
		$sql="UPDATE userstatus SET userstatus='$userstatus' WHERE userstatusid='$userstatusid'";
		$query=$this->db->query($sql);
	}
	public function eimglup($userid,$pic_file)
	{
		
		$sql="UPDATE user SET image='$pic_file' WHERE userid='$userid'";
		return $query=$this->db->query($sql);
	}
	public function ulup($factoryid,$divisionid,$departmentid,$sectionid,$subsectionid,$location,$ename,$bname,$parentdesignationid,$childdesignationid,$religion,$maritual,$dobdate,$dojdate,$hdistrict,$epermanentaddress,$bpermanentaddress,$epresentaddress,$bpresentaddress,$nid,$bloodgroup,$gender,$salary,$efficiency,$imark,$oemail,$pemail,$pmobile,$emobile,$usertypeid,$serviceypeid,$userstatusid,$userid,$password)
	{
		
		$sql="UPDATE user SET factoryid='$factoryid',divisionid='$divisionid',departmentid='$departmentid',sectionid='$sectionid',subsectionid='$subsectionid',location='$location',ename='$ename',bname='$bname',parentdesignationid='$parentdesignationid',childdesignationid='$childdesignationid',religion='$religion',maritual='$maritual',dob='$dobdate',doj='$dojdate',hdistrict='$hdistrict',epermanentaddress='$epermanentaddress',bpermanentaddress='$bpermanentaddress',epresentaddress='$epresentaddress',bpresentaddress='$bpresentaddress',nid='$nid',blodgroup='$bloodgroup',gender='$gender',salary='$salary',efficiency='$efficiency',identification='$imark',oemail='$oemail',pemail='$pemail',pmobile='$pmobile',emobile='$emobile',user_type='$usertypeid',service_type='$serviceypeid',ustatus='$userstatusid',password='$password' WHERE userid='$userid'";
		$query=$this->db->query($sql);
	}
	public function usercv_insert($userid,$pic_file)
	{
		
		$sql="SELECT * FROM user_cv WHERE userid='$userid'";
		$query=$this->db->query($sql);
		if($query->num_rows()==1)
		{
			return false;
		}
		else
		{
			
		$sql="INSERT INTO user_cv VALUES ('$userid','$pic_file')";
		$query=$this->db->query($sql);
		return $query;
		}
	}
	public function user_profile($userid)
	{
		
		$sql="SELECT user_cv.userid,user_cv.cv,user.ename,swot_insert.swot_type,swot_insert.sdetails,eobservation_insert.odetails,diciplinary_action_insert.accusedid,diciplinary_action_insert.disposal,diciplinary_action_insert.remarks FROM user_cv 
		LEFT JOIN user ON user.userid=user_cv.userid
		LEFT JOIN swot_insert ON swot_insert.userid=user_cv.userid
		LEFT JOIN eobservation_insert ON eobservation_insert.userid=user_cv.userid
		LEFT JOIN diciplinary_action_insert ON diciplinary_action_insert.accusedid=user_cv.userid
		WHERE user_cv.userid='$userid'";
		$result=$this->db->query($sql);
		return $result->result_array();
		
	}
	public function createtask_insert($userid,$tasktypeid,$taskname,$taskdescription,$createdate,$deadline)
	{
		
	
	$createdate = date("Y-m-d", strtotime($createdate));
	$deadline = date("Y-m-d", strtotime($deadline));
	$d=date('Y-m-d');
	$t= date("h:i:s");
	$d=str_replace("-","",$d);
	$t=str_replace(":","",$t);
	$ctid=$d.$t;
		$sql="INSERT INTO createtask VALUES ('$ctid','$userid','$tasktypeid','$taskname','$taskdescription','$createdate','$deadline',1)";
		$query=$this->db->query($sql);
		return $query;
		//}
	}
	public function task_list($userid)
	{
		$query="SELECT * FROM createtask
		JOIN user ON user.userid=createtask.userid
		
		LEFT JOIN tasktype ON tasktype.tasktypeid=createtask.tasktypeid
		WHERE createtaskstatus='1' AND createtask.userid='$userid' ORDER BY createdate DESC";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function task_list_all()
	{
		$query="SELECT * FROM createtask
		JOIN user ON user.userid=createtask.userid
		
		LEFT JOIN tasktype ON tasktype.tasktypeid=createtask.tasktypeid
		WHERE createtaskstatus='1' ORDER BY createdate DESC";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function taskassignee_select_insert($data)
	{
		$d=date('Y-m-d');
		$t= date("h:i:s");
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
	public function completed_task_list_all()
	{
		$query="SELECT * FROM assignee_task_list_view 
		JOIN user ON user.userid=assignee_task_list_view.assignerid
		JOIN task_assignee_completed_view ON task_assignee_completed_view.createtaskid=assignee_task_list_view.createtaskid AND
		task_assignee_completed_view.auserid=assignee_task_list_view.assigneeid
		WHERE assigneestatus=0 ORDER BY assigneetlid DESC";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	
	public function completed_task_list($userid)
	{
		$query="SELECT * FROM assignee_task_list_view 
		JOIN user ON user.userid=assignee_task_list_view.assignerid
		JOIN task_assignee_completed_view ON task_assignee_completed_view.createtaskid=assignee_task_list_view.createtaskid AND
		task_assignee_completed_view.auserid=assignee_task_list_view.assigneeid
		WHERE 	assignerid='$userid' AND assigneestatus=0 ORDER BY assigneetlid DESC";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function completed_task_list_user($userid)
	{
		$query="SELECT * FROM assignee_task_list_view 
		JOIN user ON user.userid=assignee_task_list_view.assignerid
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
		$query="SELECT userid,ename FROM user WHERE factoryid='$factoryid' AND divisionid='$divisionid' AND departmentid='$departmentid' AND sectionid='$sectionid' AND ustatus!='2'";
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
		$query="SELECT * FROM assignee_task_list 
		JOIN task_assignee_view
		ON assignee_task_list.createtaskid=task_assignee_view.createtaskid AND
		assignee_task_list.assigneeid=task_assignee_view.userid
		WHERE task_assignee_view.userid='$userid' AND task_assignee_view.createtaskid='$createtaskid' AND (assignee_task_list.assigneestatus='1' OR 		assignee_task_list.assigneestatus='2') 
		ORDER BY assigneetlid DESC";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
//public function assignee_task_list($userid,$createtaskid)
//	{
//		$query="SELECT * FROM assignee_task_list 
//		
//		WHERE assigneeid='$userid' AND createtaskid='$createtaskid' AND assigneestatus='1' OR assigneestatus='2' 
//		 ORDER BY assigneetlid DESC";
//		$result=$this->db->query($query);
//		return $result->result_array();
//		
//	}
	public function assignee_task_list1($userid)
	{
		$query="SELECT * FROM assignee_task_list JOIN task_assignee_view

ON assignee_task_list.assigneeid=task_assignee_view.userid
AND assignee_task_list.createtaskid=task_assignee_view.createtaskid
		WHERE assignee_task_list.assigneeid='$userid' AND (assignee_task_list.assigneestatus='1' OR assignee_task_list.assigneestatus='2') ORDER BY assigneetlid DESC";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function assignee_task_listadmin()
	{
		$query="SELECT * FROM assignee_task_list JOIN task_assignee_view

ON assignee_task_list.assigneeid=task_assignee_view.userid
AND assignee_task_list.createtaskid=task_assignee_view.createtaskid
		WHERE assignee_task_list.assigneestatus='1' OR assignee_task_list.assigneestatus='2' ORDER BY assigneetlid DESC";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function user_allontask($userid)
	{
		$query="SELECT * FROM assignee_task_list WHERE assigneeid='$userid' AND assigneestatus IN('1','2') ORDER BY assigneetlid DESC";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function task_details_individual_insert($assignerid,$assigneeid,$createtaskid,$taskname,$taskdescription,$createdate,$deadline,$pic_file)
	{
		$createdate = date("Y-m-d", strtotime($createdate));
		$deadline = date("Y-m-d", strtotime($deadline));
		$d=date('Y-m-d');
		$t= date("h:i:s");
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
		$t= date("h:i:s");
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
	public function user_task_list_all()
	{
		
		$query="SELECT userid,ename,SUM(ratings) as ratings,
		SUM(CASE WHEN assigneestatus = 1 THEN 1 ELSE 0 END) as ongoing,
		SUM(CASE WHEN assigneestatus = 2 THEN 1 ELSE 0 END) as submitted,
		SUM(CASE WHEN assigneestatus = 0 THEN 1 ELSE 0 END) as completed 
		FROM assignee_task_list
		JOIN user ON
		user.userid=assignee_task_list.assigneeid 
		GROUP BY assigneeid";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function user_task_list($userid)
	{
		
		$query="SELECT userid,ename,SUM(ratings) as ratings,
		SUM(CASE WHEN assigneestatus = 1 THEN 1 ELSE 0 END) as ongoing,
		SUM(CASE WHEN assigneestatus = 2 THEN 1 ELSE 0 END) as submitted,
		SUM(CASE WHEN assigneestatus = 0 THEN 1 ELSE 0 END) as completed 
		FROM assignee_task_list
		JOIN user ON
		user.userid=assignee_task_list.assigneeid
		WHERE assignerid='$userid' 
		GROUP BY assigneeid";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function user_task_complete_list($userid)
	{
		//$query="SELECT COUNT(assigneeid) AS totaltask,SUM(ratings) AS ratings FROM assignee_task_list WHERE assigneeid='$userid'";
		$query="SELECT  userid,ename,
		SUM(ratings) AS ratings,
		(SELECT COUNT(assigneeid) FROM assignee_task_list WHERE assigneestatus='1' AND assigneeid='$userid') AS ongoing,
		(SELECT COUNT(assigneeid) FROM assignee_task_list WHERE assigneestatus='2' AND assigneeid='$userid' AND assignee_submitted_date <= deadline) AS wsubmitted,
		(SELECT COUNT(assigneeid) FROM assignee_task_list WHERE assigneestatus='2' AND assigneeid='$userid' AND assignee_submitted_date > deadline) AS osubmitted,
		(SELECT COUNT(assigneeid) FROM assignee_task_list WHERE assigneestatus='0' AND assigneeid='$userid') AS completed 
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
		LEFT JOIN licensetype ON licensetype.licensetypeid=license.licensetypeid ORDER BY license.licensetypeid";
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
		$query="SELECT * FROM eventalbum_insert GROUP BY eventname,edate ORDER BY  STR_TO_DATE(edate,'%d-%m-%Y') DESC";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function event_list_show($eventname)
	{
		$query="SELECT * FROM eventalbum_insert WHERE eventname='$eventname' ORDER BY eaid ASC";
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
		
		$sql="INSERT INTO user1 VALUES ('$data[factoryid]','$data[divisionid]','$data[departmentid]','$data[sectionid]','$data[subsectionid]','$data[location]','$data[ename]','$data[bname]','$data[parentdesignationid]','$data[childdesignationid]','$data[religion]','$data[maritual]','$data[dobdate]','$data[dojdate]','$data[hdistrict]','$data[epermanentaddress]','$data[bpermanentaddress]','$data[epresentaddress]','$data[bpresentaddress]','$data[nid]','$data[bloodgroup]','$data[gender]','$data[salary]','$data[efficiency]','$data[imark]','$data[oemail]','$data[pemail]','$data[pmobile]','$data[emobile]','$data[usertypeid]','$data[servicetypeid]','$data[puserid]','$data[userid]','$data[ruserid]','$data[password]','$data[image]','$data[ustatus]')";
		$query=$this->db->query($sql);
		return $query;
    }
	public function challan_create($sfactoryid,$manualid,$userid,$buyerid,$rfactoryid,$producttypeid,$item,$sqty,$unit,$cdate)
	{
		date_default_timezone_set('Asia/Dhaka');
		$cdate=date("Y-m-d", strtotime($cdate));
		$d=date('Y-m-d');
		$t= date("H:i:s");
		$d=str_replace("-","",$d);
		$t=str_replace(":","",$t);
		$ccid=$d.$t;
		$sql="INSERT INTO challan_insert VALUES ('$ccid','$manualid','$userid','$sfactoryid','$buyerid','$rfactoryid','$producttypeid','$item','$sqty','$unit','$cdate',CURTIME(),'','','','1')";
		$query=$this->db->query($sql);
		return $query;
		
	}
	public function challan_list()
	{
		$query="SELECT * FROM challan_insert 
		JOIN productunit ON challan_insert.unit=productunit.productunitid
		JOIN producttype ON challan_insert.product_type=producttype.producttypeid
		LEFT JOIN buyer ON challan_insert.buyerid=buyer.bid
		ORDER BY ccid DESC";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function factory_challan_pending_list($factoryid)
	{
		$query="SELECT * FROM challan_insert 
		JOIN productunit ON challan_insert.unit=productunit.productunitid
		JOIN producttype ON challan_insert.product_type=producttype.producttypeid
		LEFT JOIN buyer ON challan_insert.buyerid=buyer.bid
		WHERE (sent_factoryid='$factoryid' OR receive_factoryid='$factoryid') AND status='1' ORDER BY ccid DESC";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function date_wise_challan_list($factoryid,$pd,$wd)
	{
		$pd=date("Y-m-d", strtotime($pd));
		$wd=date("Y-m-d", strtotime($wd));
		$query="SELECT * FROM challan_insert 
		JOIN productunit ON challan_insert.unit=productunit.productunitid
		JOIN producttype ON challan_insert.product_type=producttype.producttypeid
		LEFT JOIN buyer ON challan_insert.buyerid=buyer.bid 
		WHERE (sent_factoryid='$factoryid' OR receive_factoryid='$factoryid') AND (sdate BETWEEN '$pd' AND '$wd') ORDER BY ccid DESC";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function date_wise_allunit_challan_list($factoryid,$pd,$wd)
	{
		$pd=date("Y-m-d", strtotime($pd));
		$wd=date("Y-m-d", strtotime($wd));
		$query="SELECT * FROM challan_insert 
		JOIN productunit ON challan_insert.unit=productunit.productunitid
		JOIN producttype ON challan_insert.product_type=producttype.producttypeid
		LEFT JOIN buyer ON challan_insert.buyerid=buyer.bid 
		WHERE sent_factoryid='$factoryid' AND (sdate BETWEEN '$pd' AND '$wd') ORDER BY sent_factoryid ASC";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function factory_challan_list($factoryid)
	{
		$query="SELECT * FROM challan_insert
		JOIN productunit ON challan_insert.unit=productunit.productunitid
		JOIN producttype ON challan_insert.product_type=producttype.producttypeid
		LEFT JOIN buyer ON challan_insert.buyerid=buyer.bid  
		WHERE sent_factoryid='$factoryid' OR receive_factoryid='$factoryid' ORDER BY ccid DESC";
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
	public function buyer_insert($pic_file,$buyername,$cc,$local_address)
	{
		$sql="SELECT * FROM buyer WHERE buyername='$buyername'";
		$query=$this->db->query($sql);
		if($query->num_rows()==1)
		{
			return false;
		}
		else
		{
		$sql="INSERT INTO buyer VALUES ('','$buyername','$cc','$local_address','$pic_file')";
		$query=$this->db->query($sql);
		return $query;
		}
	}
	public function bimglup($bid,$pic_file)
	{
		
		$sql="UPDATE buyer SET image='$pic_file' WHERE bid='$bid'";
		$query=$this->db->query($sql);
	}
	public function buyer_list()
	{
		$query="SELECT * FROM buyer";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function buyer_list_up($bid)
	{
		$sql1="SELECT * FROM buyer 
		JOIN country ON buyer.origin=country.country_code
		WHERE bid='$bid'";
		$query1=$this->db->query($sql1);
		$result=$query1->result_array();
		return $result;
	}
	public function blup($bid,$buyername,$cc,$local_address)
	{
		
		$sql="UPDATE buyer SET buyername='$buyername',origin='$cc',local_address='$local_address' WHERE bid='$bid'";
		$query=$this->db->query($sql);
	}
	public function country_insert($cc,$cna)
	{
		$sql="SELECT * FROM country WHERE country_code='$cc'";
		$query=$this->db->query($sql);
		if($query->num_rows()==1)
		{
			return false;
		}
		else
		{
		$sql="INSERT INTO country VALUES ('$cc','$cna')";
		$query=$this->db->query($sql);
		return $query;
		}
	}
	public function country_list()
	{
		$query="SELECT * FROM country";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function country_list_up($cc)
	{
		$sql1="SELECT * FROM country WHERE country_code='$cc'";
		$query1=$this->db->query($sql1);
		$result=$query1->result_array();
		return $result;
	}
	public function countrylup($cc,$cna)
	{
		
		$sql="UPDATE country SET country_name='$cna' WHERE country_code='$cc'";
		$query=$this->db->query($sql);
	}
	public function buyerwf_insert($data)
	{
		//$d=date('Y-m-d');
//		$t= date("h:i:s");
//		$d=str_replace("-","",$d);
//		$t=str_replace(":","",$t);
//		$ctaid=$d.$t;
		$sql="SELECT * FROM buyerwf WHERE bid='$data[bid]' AND factoryid='$data[factoryid]'";
		$query=$this->db->query($sql);
		
		if($query->num_rows()==1)
			{
				return false;
			}
		else
			{
				$data['vdate'] = date("Y-m-d", strtotime($data['vdate']));
				$sql="INSERT INTO buyerwf VALUES ('','$data[bid]','$data[factoryid]','$data[vdate]','$data[chk]')";
				$query=$this->db->query($sql);
				return true;
			}
	}
	public function buyerwf_list()
	{
		$query="SELECT * FROM buyerwf JOIN
		buyer ON buyerwf.bid=buyer.bid
		ORDER BY buyer.buyername,buyerwf.factoryid";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function buyerwf_list_up($bid)
	{
		$sql1="SELECT * FROM buyerwf JOIN
		buyer ON buyerwf.bid=buyer.bid
		
		WHERE bwfid='$bid' ORDER BY buyer.buyername,buyerwf.factoryid";
		$query1=$this->db->query($sql1);
		$result=$query1->result_array();
		return $result;
	}
	public function bwflup($bwfid,$vdate)
	{
		$vdate = date("Y-m-d", strtotime($vdate));
		$sql="UPDATE buyerwf SET vdate='$vdate' WHERE bwfid='$bwfid'";
		return $query=$this->db->query($sql);
	}
	public function factorywise_ssupervisor_list($factoryid)
	{
		
$query="SELECT user.factoryid,user.userid,factory.factoryname,division.divisionname,(user.divisionid) AS diviid,user.departmentid,department.deptid,department.departmentname,user.sectionid,section.sectionname,user.subsectionid,subsection.subsectionname,user.location,user.ename,user.bname,user.parentdesignationid,user.childdesignationid,user.religion,user.maritual,user.dob,user.doj,user.hdistrict,user.epermanentaddress,user.bpermanentaddress,user.epresentaddress,user.bpresentaddress,user.nid,user.blodgroup,user.gender,user.salary,user.efficiency,user.identification,user.oemail,user.pemail,user.pmobile,user.emobile,user.user_type,user.service_type,user.puserid,user.ruserid,user.password,user.ustatus,usertype.usertypeid,usertype.usertype,servicetype.servicetypeid,servicetype.servicetype,userstatus.userstatusid,userstatus.userstatus,religion.religionid,religion.religionname,maritualstatus.maritualstatusid,maritualstatus.maritualstatus,gender.genderid,gender.gender,user.password,parentdesignation.eparentdesignation,parentdesignation.parentdesignationid,parentdesignation.bparentdesignation,childdesignation.childdesignationid,childdesignation.echilddesignation,childdesignation.bchilddesignation,user.image  FROM user
		LEFT JOIN factory ON factory.factoryid=user.factoryid
		LEFT JOIN division ON division.divisionid=user.divisionid 
		LEFT JOIN department ON department.deptid=user.departmentid
		LEFT JOIN section ON section.secid=user.sectionid
		LEFT JOIN subsection ON subsection.subsecid=user.subsectionid
		LEFT JOIN parentdesignation ON parentdesignation.parentdesignationid=user.parentdesignationid
		LEFT JOIN childdesignation ON childdesignation.childdesignationid=user.childdesignationid
		LEFT JOIN religion ON religion.religionid=user.religion
		LEFT JOIN maritualstatus ON maritualstatus.maritualstatusid=user.maritual
		LEFT JOIN gender ON gender.genderid=user.gender
		LEFT JOIN usertype ON usertype.usertypeid=user.user_type 
		LEFT JOIN servicetype ON servicetype.servicetypeid=user.service_type
		LEFT JOIN userstatus ON userstatus.userstatusid=user.ustatus
		WHERE user.factoryid='$factoryid' AND user.user_type='7' AND ustatus='1' ORDER BY user.userid";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function sscore_card_insert($data)
	{
		$cdate= date("Y-m-d", strtotime($data['cdate']));
		$cdate=str_replace("-","",$cdate);
		$d=date('Y-m-d');
		$t= date("h:i:s");
		$d=str_replace("-","",$d);
		//$t=str_replace(":","",$t);
		$sscid=$data['userid'].$cdate;
		$sql="INSERT INTO sscore_card_insert VALUES ('$sscid','$data[factoryid]','$data[userid]','$data[subsectionid]','$data[efficiency]','$data[varience]','$data[cutt2shiploss]','$data[wmcratio]','$data[dhusf]','$data[fivesscore]','$data[wto]','$data[woabsentism]','$data[ontpre]','$data[wofeedback]','$data[sleave]','$data[sabsent]','$data[slate]','$cdate')";
		$query=$this->db->query($sql);
		return $query;
		
	}
	public function date_wise_totalsscorecard($factoryid,$pd,$wd)
	{
		$pd = date("Y-m-d", strtotime($pd));
		$wd = date("Y-m-d", strtotime($wd));
		$query="SELECT user.factoryid,user.userid,user.ename,subsection.subsectionname,sscore_card_insert.efficiency,sscore_card_insert.varience,sscore_card_insert.cutt2shiploss,sscore_card_insert.wmcratio,sscore_card_insert.dhusf,sscore_card_insert.fivesscore,sscore_card_insert.wto,sscore_card_insert.woabsentism,sscore_card_insert.ontpre,sscore_card_insert.wofeedback,sscore_card_insert.cdate,sscore_card_insert.sleave,sscore_card_insert.sabsent,sscore_card_insert.slate FROM sscore_card_insert
		JOIN user ON sscore_card_insert.userid=user.userid
		LEFT JOIN subsection ON sscore_card_insert.subsectionid=subsection.subsecid
		
		WHERE cdate BETWEEN '$pd' AND '$wd' AND sscore_card_insert.factoryid='$factoryid' AND user.user_type='7'";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function date_wise_totalsummarysscorecard($factoryid,$pd,$wd)
	{
		$pd = date("Y-m-d", strtotime($pd));
		$wd = date("Y-m-d", strtotime($wd));
		$query="SELECT COUNT(cdate) AS wod,user.factoryid,user.userid,user.ename,subsection.subsectionname,
		SUM(sscore_card_insert.efficiency) AS efficiency,
		SUM(sscore_card_insert.varience) AS varience,
		SUM(sscore_card_insert.cutt2shiploss) AS cutt2shiploss,
		SUM(sscore_card_insert.wmcratio) AS wmcratio,
		SUM(sscore_card_insert.dhusf) AS dhusf,
		SUM(sscore_card_insert.fivesscore) AS fivesscore,
		SUM(sscore_card_insert.wto) AS wto,
		SUM(sscore_card_insert.woabsentism) AS woabsentism,
		SUM(sscore_card_insert.ontpre) AS ontpre,
		SUM(sscore_card_insert.wofeedback) AS wofeedback,
		sleave,sabsent,slate
		 
		FROM sscore_card_insert
		JOIN user ON sscore_card_insert.userid=user.userid
		LEFT JOIN subsection ON sscore_card_insert.subsectionid=subsection.subsecid
		
		WHERE cdate BETWEEN '$pd' AND '$wd' AND sscore_card_insert.efficiency !='' AND sscore_card_insert.factoryid='$factoryid' AND user.user_type='7' 
		GROUP BY user.userid";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function date_wise_individualsummarysscorecard($userid,$pd,$wd)
	{
		$pd = date("Y-m-d", strtotime($pd));
		$wd = date("Y-m-d", strtotime($wd));
		$query="SELECT  COUNT(cdate) AS wod,cdate,user.factoryid,user.userid,user.ename,subsection.subsectionname,
		SUM(sscore_card_insert.efficiency) AS efficiency,
		SUM(sscore_card_insert.varience) AS varience,
		SUM(sscore_card_insert.cutt2shiploss) AS cutt2shiploss,
		SUM(sscore_card_insert.wmcratio) AS wmcratio,
		SUM(sscore_card_insert.dhusf) AS dhusf,
		SUM(sscore_card_insert.fivesscore) AS fivesscore,
		SUM(sscore_card_insert.wto) AS wto,
		SUM(sscore_card_insert.woabsentism) AS woabsentism,
		SUM(sscore_card_insert.ontpre) AS ontpre,
		SUM(sscore_card_insert.wofeedback) AS wofeedback,
		SUM(sleave) AS sleave,
		SUM(sabsent) AS sabsent,
		SUM(slate) AS slate,image
		 
		FROM sscore_card_insert
		JOIN user ON sscore_card_insert.userid=user.userid
		LEFT JOIN subsection ON sscore_card_insert.subsectionid=subsection.subsecid
		
		WHERE cdate BETWEEN '$pd' AND '$wd' AND sscore_card_insert.efficiency !='' AND sscore_card_insert.userid='$userid' AND user.user_type='7' 
		GROUP BY user.userid";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function date_wise_individualsummarysscorecard1($userid,$pd,$wd)
	{
		$pd = date("Y-m-d", strtotime($pd));
		$wd = date("Y-m-d", strtotime($wd));
		$query="SELECT COUNT(disposal) AS disposal FROM diciplinary_action_insert WHERE doacde BETWEEN '$pd' AND '$wd' AND accusedid='$userid' AND disposal !='5'";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function date_wise_individualsummarysscorecard2($userid,$pd,$wd)
	{
		$pd = date("Y-m-d", strtotime($pd));
		$wd = date("Y-m-d", strtotime($wd));
		$query="SELECT COUNT(cc) AS cco,
					   COUNT(at) AS ato,
		               COUNT(lo) AS loo,
		               COUNT(de) AS deo,
		               COUNT(re) AS reo,
					   SUM(cc) AS cc,
					   SUM(at) AS at,
					   SUM(lo) AS lo,
					   SUM(de) AS de,
					   SUM(re) AS re
		 FROM sshod_insert WHERE shdate BETWEEN '$pd' AND '$wd' AND userid='$userid'";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function date_wise_individualsummarysscorecardchart($userid,$pd,$wd)
	{
		$pd = date("Y-m-d", strtotime($pd));
		$wd = date("Y-m-d", strtotime($wd));
		$query="SELECT  cdate,
		efficiency,
		varience,
		cutt2shiploss,
		wmcratio,
		dhusf,
		fivesscore,
		wto,
		woabsentism,
		ontpre,
		wofeedback
		 
		FROM sscore_card_insert
		
		
		WHERE cdate BETWEEN '$pd' AND '$wd' AND userid='$userid' AND efficiency !='' AND dhusf !='' AND fivesscore !='' AND woabsentism !='' AND ontpre !='' ORDER BY cdate
		 ";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function sshod_insert($userid,$cc,$at,$lo,$de,$re,$shdate)
	{
		$shdate= date("Y-m-d", strtotime($shdate));
		$shdate=str_replace("-","",$shdate);
//		$d=date('Y-m-d');
		$t= date("h:i:s");
//		$d=str_replace("-","",$d);
		//$t=str_replace(":","",$t);
		$sscid=$userid.$shdate;
		$sql="INSERT INTO sshod_insert VALUES ('$sscid','$userid','$cc','$at','$lo','$de','$re','$shdate')";
		$query=$this->db->query($sql);
		return $query;
		
	}
	public function monthname()
	{
		
		$query="SELECT DISTINCT(mn) AS mn FROM sscore_card_insert_mview";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function yearname()
	{
		
		$query="SELECT DISTINCT(yr) AS yr FROM sscore_card_insert_mview";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function year_wise_individualsummarysscorecard($userid,$yr)
	{
		
		$query="SELECT *
		 
		FROM sscore_card_insert_maview
		JOIN user ON sscore_card_insert_maview.userid=user.userid
		LEFT JOIN subsection ON sscore_card_insert_maview.subsectionid=subsection.subsecid
		
		WHERE yr='$yr' AND sscore_card_insert_maview.userid='$userid' AND user.user_type='7' GROUP BY user.userid
		";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function year_wise_individualsummarysscorecard1($userid,$yr)
	{
		
		$query="SELECT COUNT(yr) AS wod,SUM(sleave) AS sleave,SUM(sabsent) AS sabsent,SUM(slate) AS slate,SUM(aefficiency) AS efficiency,SUM(adhusf) AS dhusf,SUM(awoabsentism) AS woabsentism,SUM(awmcratio) AS wmcratio,SUM(afivesscore) AS fivesscore,SUM(aontpre) AS ontpre,mn,yr,aefficiency,adhusf,awoabsentism,awmcratio,afivesscore,aontpre
		 
		FROM sscore_card_insert_maview
		
		
		WHERE yr='$yr' AND userid='$userid' 
		";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function year_wise_individualsummarysscorecard2($userid,$yr)
	{
		
		$query="SELECT COUNT(dy) AS wod,SUM(disposal) AS disposal FROM diciplinary_action_insert_mview WHERE dy='$yr' AND accusedid='$userid'";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function year_wise_individualsummarysscorecard3($userid,$year)
	{
		
		$query="SELECT COUNT(hoy) AS cco,
					   
					   SUM(cc) AS cc,
					   SUM(at) AS at,
					   SUM(lo) AS lo,
					   SUM(de) AS de,
					   SUM(re) AS re
		 FROM sshod_insert_mview WHERE hoy ='$year' AND userid='$userid'";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function year_wise_individualsummarysscorecardchart($userid,$yr)
	{
		
		$query="SELECT mn,yr,aefficiency,adhusf,awoabsentism,awmcratio,afivesscore,aontpre
		 
		FROM sscore_card_insert_maview
		
		
		WHERE yr='$yr' AND userid='$userid' ORDER BY FIELD(mn,'January','February','March','April','May','June','July','August','September','October','November','December') 
		";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function factorywise_ssupervisor_list_update($factoryid,$pd)
	{
	$pd= date("Y-m-d", strtotime($pd));	
	$query="SELECT 	sscore_card_insert.factoryid,sscore_card_insert.userid,user.image,user.ename,subsection.subsectionname,sscore_card_insert.efficiency,sscore_card_insert.varience,sscore_card_insert.cutt2shiploss,sscore_card_insert.wmcratio,sscore_card_insert.dhusf,sscore_card_insert.fivesscore,sscore_card_insert.wto,sscore_card_insert.woabsentism,sscore_card_insert.ontpre,sscore_card_insert.wofeedback,sscore_card_insert.sleave,sscore_card_insert.sabsent,sscore_card_insert.slate,sscore_card_insert.cdate
			FROM sscore_card_insert
			JOIN user ON
			user.userid=sscore_card_insert.userid
			JOIN subsection ON
			subsection.subsecid=sscore_card_insert.subsectionid
			WHERE sscore_card_insert.factoryid='$factoryid' AND sscore_card_insert.cdate='$pd' ORDER BY sscore_card_insert.userid";
			$result=$this->db->query($query);
			return $result->result_array();
		
	}
	public function sscore_card_update($data)
	{
		
		$sql="UPDATE sscore_card_insert SET efficiency='$data[efficiency]',varience='$data[varience]',cutt2shiploss='$data[cutt2shiploss]',wmcratio='$data[wmcratio]',dhusf='$data[dhusf]',fivesscore='$data[fivesscore]',wto='$data[wto]',woabsentism='$data[woabsentism]',ontpre='$data[ontpre]',wofeedback='$data[wofeedback]',sleave='$data[sleave]',sabsent='$data[sabsent]',slate='$data[slate]' WHERE userid='$data[userid]' AND cdate='$data[cdate]'";
		$query=$this->db->query($sql);
		return $query;
		
	}
	public function diciplinary_action_insert($dadate,$userid,$factoryid,$nameofreporterid,$primaryinvestigationbyid,$pidate,$accusedid,$victimid,$abusedforneg,$doinfachoddate)
	{
		date_default_timezone_set('Asia/Dhaka');
		if($dadate!='')
			{
				$dadate= date("Y-m-d", strtotime($dadate));
			}
		else
			{
				$dadate='';
			}
		if($dadate!='')
			{
				$pidate= date("Y-m-d", strtotime($pidate));
			}
		else
			{
				$pidate='';
			}
		if($dadate!='')
			{
				$doinfachoddate= date("Y-m-d", strtotime($doinfachoddate));
			}
		else
			{
				$doinfachoddate='';
			}
		
		
		$d=date('Y-m-d');
		$t= date("h:i:s");
		$d=str_replace("-","",$d);
		$t=str_replace(":","",$t);
		$dcaid=$d.$t;
		$sql="INSERT INTO diciplinary_action_insert VALUES ('$dcaid','$userid','$dadate','$factoryid','$nameofreporterid','$primaryinvestigationbyid','$pidate','$accusedid','$victimid','$abusedforneg','$doinfachoddate','','','','','','','','','','','','','','','','','','1')";
		$query=$this->db->query($sql);
		return $query;
		
	}
	public function dfacheadcomments_insert($commentsname)
	{
		$sql="SELECT * FROM dfacheadcomments_insert WHERE dfacheadcomments='$commentsname'";
		$query=$this->db->query($sql);
		if($query->num_rows()==1)
		{
			return false;
		}
		else
		{
		$sql="INSERT INTO dfacheadcomments_insert VALUES ('','$commentsname')";
		$query=$this->db->query($sql);
		return $query;
		}
	}
	
	public function dfacheadcomments_list()
	{
		$query="SELECT * FROM dfacheadcomments_insert";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function dfacheadcomments_list_up($dfacheadcommentsid)
	{
		$sql1="SELECT * FROM dfacheadcomments_insert WHERE dfacheadcommentsid='$dfacheadcommentsid'";
		$query1=$this->db->query($sql1);
		$result=$query1->result_array();
		return $result;
	}
	public function dfacheadcommentslup($dfacheadcommentsid,$dfacheadcomments)
	{
		
		$sql="UPDATE dfacheadcomments_insert SET dfacheadcomments='$dfacheadcomments' WHERE dfacheadcommentsid='$dfacheadcommentsid'";
		$query=$this->db->query($sql);
	}
	public function dcatype_insert($dcatype)
	{
		$sql="SELECT * FROM dcatype WHERE dcatype='$dcatype'";
		$query=$this->db->query($sql);
		if($query->num_rows()==1)
		{
			return false;
		}
		else
		{
		$sql="INSERT INTO dcatype VALUES ('','$dcatype')";
		$query=$this->db->query($sql);
		return $query;
		}
	}
	public function dcatype_list()
	{
		$query="SELECT * FROM dcatype";
		$result=$this->db->query($query);
		return $result->result_array();
	}
	public function dcatype_list_up($dcatypeid)
	{
		$sql1="SELECT * FROM dcatype WHERE dcatypeid='$dcatypeid'";
		$query1=$this->db->query($sql1);
		$result=$query1->result_array();
		return $result;
	}
	public function dcatypelup($dcatypeid,$dcatype)
	{
		
		$sql="UPDATE dcatype SET dcatype='$dcatype' WHERE dcatypeid='$dcatypeid'";
		$query=$this->db->query($sql);
	}
	public function dcadistype_insert($distype)
	{
		$sql="SELECT * FROM dcadistype WHERE distype='$distype'";
		$query=$this->db->query($sql);
		if($query->num_rows()==1)
		{
			return false;
		}
		else
		{
		$sql="INSERT INTO dcadistype VALUES ('','$distype')";
		$query=$this->db->query($sql);
		return $query;
		}
	}
	public function dcadistype_list()
	{
		$query="SELECT * FROM dcadistype";
		$result=$this->db->query($query);
		return $result->result_array();
	}
	public function dcadistype_list_up($dcadistypeid)
	{
		$sql1="SELECT * FROM dcadistype WHERE distypeid='$dcadistypeid'";
		$query1=$this->db->query($sql1);
		$result=$query1->result_array();
		return $result;
	}
	public function dcadistypelup($dcadistypeid,$dcadistype)
	{
		
		$sql="UPDATE dcadistype SET distype='$dcadistype' WHERE distypeid='$dcadistypeid'";
		$query=$this->db->query($sql);
	}
	public function dcapending_list()
	{
		$query="SELECT (SELECT ename FROM user WHERE user.userid=diciplinary_action_insert.nameofreporterid) AS nameofreporter,
		(SELECT ename FROM user WHERE user.userid=diciplinary_action_insert.primaryinvestigationbyid) AS primaryinvestigationbyname,
		(SELECT ename FROM user WHERE user.userid=diciplinary_action_insert.accusedid) AS accusedname,
		(SELECT ename FROM user WHERE user.userid=diciplinary_action_insert.victimid) AS victimname,
		dcaid,dadate,factoryid,nameofreporterid,primaryinvestigationbyid,pidate,accusedid,victimid,abusedforneg,doinfachoddate,dcastatus
		FROM diciplinary_action_insert 
		
		WHERE dcastatus IN('1','2')";
		$result=$this->db->query($query);
		return $result->result_array();
	}
	public function dcaaction_inquiry($dcaid)
	{
		$query="SELECT (SELECT ename FROM user WHERE user.userid=diciplinary_action_insert.nameofreporterid) AS nameofreporter,
		(SELECT ename FROM user WHERE user.userid=diciplinary_action_insert.primaryinvestigationbyid) AS primaryinvestigationbyname,
		(SELECT ename FROM user WHERE user.userid=diciplinary_action_insert.accusedid) AS accusedname,
		(SELECT ename FROM user WHERE user.userid=diciplinary_action_insert.victimid) AS victimname,
		dcaid,dadate,factoryid,nameofreporterid,primaryinvestigationbyid,pidate,accusedid,victimid,abusedforneg,doinfachoddate
		FROM diciplinary_action_insert 
		
		WHERE dcaid='$dcaid'";
		$result=$this->db->query($query);
		return $result->result_array();
	}
	public function diciplinary_inquiry_insert($dcaid,$dflid,$dcatypeid,$actiondate,$accrdate,$vicrdate,$inqoff,$letoinqoffdate,$inqdate,$letoacudate,$inqredate,$inqcom,$docu)
	{
		if($actiondate!='')
			{
				$actiondate= date("Y-m-d", strtotime($actiondate));
			}
		else
			{
				$actiondate='';
			}
		if($accrdate!='')
			{
				$accrdate= date("Y-m-d", strtotime($accrdate));
			}
		else
			{
				$accrdate='';
			}
		if($vicrdate!='')
			{
				$vicrdate= date("Y-m-d", strtotime($vicrdate));
			}
		else
			{
				$vicrdate='';
			}
		if($letoinqoffdate!='')
			{
				$letoinqoffdate= date("Y-m-d", strtotime($letoinqoffdate));
			}
		else
			{
				$letoinqoffdate='';
			}
		if($inqdate!='')
			{
				$inqdate= date("Y-m-d", strtotime($inqdate));
			}
		else
			{
				$inqdate='';
			}
		if($letoacudate!='')
			{
				$letoacudate= date("Y-m-d", strtotime($letoacudate));
			}
		else
			{
				$letoacudate='';
			}
		if($inqredate!='')
			{
				$inqredate= date("Y-m-d", strtotime($inqredate));
			}
		else
			{
				$inqredate='';
			}
		
		$query="UPDATE diciplinary_action_insert SET dflid='$dflid',dcatypeid='$dcatypeid',actiondate='$actiondate',accrdate='$accrdate',vicrdate='$vicrdate',inqoff='$inqoff',letoinqoffdate='$letoinqoffdate',inqdate='$inqdate',letoacudate='$letoacudate',inqredate='$inqredate',inqcom='$inqcom',actiontypedocu='$docu',dcastatus='2'
		
		WHERE dcaid='$dcaid'";
		return $result=$this->db->query($query);
	}
	public function dcaaction_after_inquiry($dcaid)
	{
		$query="SELECT (SELECT ename FROM user WHERE user.userid=diciplinary_action_insert.nameofreporterid) AS nameofreporter,
		(SELECT ename FROM user WHERE user.userid=diciplinary_action_insert.primaryinvestigationbyid) AS primaryinvestigationbyname,
		(SELECT ename FROM user WHERE user.userid=diciplinary_action_insert.accusedid) AS accusedname,
		(SELECT ename FROM user WHERE user.userid=diciplinary_action_insert.victimid) AS victimname,
		(SELECT ename FROM user WHERE user.userid=diciplinary_action_insert.inqoff) AS inqoffname,
		dcaid,dadate,factoryid,nameofreporterid,primaryinvestigationbyid,pidate,accusedid,victimid,abusedforneg,doinfachoddate,actiondate,accrdate,vicrdate,inqoff,letoinqoffdate,inqdate,letoacudate,inqredate,inqcom,dfacheadcomments,dcatype
		FROM diciplinary_action_insert 
		LEFT JOIN dfacheadcomments_insert ON dfacheadcomments_insert.dfacheadcommentsid=diciplinary_action_insert.dflid
		LEFT JOIN dcatype ON dcatype.dcatypeid=diciplinary_action_insert.dcatypeid
		
		WHERE dcaid='$dcaid'";
		$result=$this->db->query($query);
		return $result->result_array();
	}
	public function diciplinary_after_inquiry_insert($dcaid,$apme,$disposal,$doacde,$remarks,$docu)
	{
		if($doacde!='')
			{
				$doacde= date("Y-m-d", strtotime($doacde));
			}
		else
			{
				$doacde='';
			}
		
		
		$query="UPDATE diciplinary_action_insert SET apme='$apme',disposal='$disposal',disposaldocu='$docu',doacde='$doacde',remarks='$remarks',dcastatus='0'
		
		WHERE dcaid='$dcaid'";
		return $result=$this->db->query($query);
	}
	public function date_wise_dcacompletelist($pd,$wd)
	{
		$pd= date("Y-m-d", strtotime($pd));
		$wd= date("Y-m-d", strtotime($wd));
		$query="SELECT (SELECT ename FROM user WHERE user.userid=diciplinary_action_insert.nameofreporterid) AS nameofreporter,
		(SELECT ename FROM user WHERE user.userid=diciplinary_action_insert.primaryinvestigationbyid) AS primaryinvestigationbyname,
		(SELECT ename FROM user WHERE user.userid=diciplinary_action_insert.accusedid) AS accusedname,
		(SELECT ename FROM user WHERE user.userid=diciplinary_action_insert.victimid) AS victimname,
		(SELECT ename FROM user WHERE user.userid=diciplinary_action_insert.inqoff) AS inqoffname,
		dcaid,dadate,factoryid,nameofreporterid,primaryinvestigationbyid,pidate,accusedid,victimid,abusedforneg,doinfachoddate,actiondate,accrdate,vicrdate,inqoff,letoinqoffdate,inqdate,letoacudate,inqredate,inqcom,dfacheadcomments,dcatype,apme,disposal,doacde,remarks,actiontypedocu,disposaldocu,dcastatus
		FROM diciplinary_action_insert 
		JOIN dfacheadcomments_insert ON dfacheadcomments_insert.dfacheadcommentsid=diciplinary_action_insert.dflid
		JOIN dcatype ON dcatype.dcatypeid=diciplinary_action_insert.dcatypeid
		
		WHERE dadate BETWEEN ('$pd' AND '$wd') AND dcastatus='0'";
		$result=$this->db->query($query);
		return $result->result_array();
	}
	public function opener_insert($factoryid,$openerid)
	{
		
		$sql="INSERT INTO opener VALUES ('$openerid','$factoryid')";
		$query=$this->db->query($sql);
		return $query;
	}
	public function opener_list()
	{
		$query="SELECT * FROM opener
		JOIN user ON user.userid=opener.openerid";
		$result=$this->db->query($query);
		return $result->result_array();
	}
	public function fpr_insert($factoryid,$fprid)
	{
		
		$sql="INSERT INTO fpr VALUES ('$fprid','$factoryid')";
		$query=$this->db->query($sql);
		return $query;
	}
	public function fpr_list()
	{
		$query="SELECT * FROM fpr
		JOIN user ON user.userid=fpr.fprid";
		$result=$this->db->query($query);
		return $result->result_array();
	}
	public function grading_insert($grading)
	{
		
		$sql="INSERT INTO grading VALUES ('','$grading')";
		$query=$this->db->query($sql);
		return $query;
	}
	public function grading_list()
	{
		$query="SELECT * FROM grading";
		$result=$this->db->query($query);
		return $result->result_array();
	}
	public function suggession_insert($sudate,$userid,$factoryid,$openerid1,$openerid2,$openerid3,$openerid4,$box,$location,$nameby,$details,$pic_file)
	{
		date_default_timezone_set('Asia/Dhaka');
		$sudate = date("Y-m-d", strtotime($sudate));
		$d=date('Y-m-d');
		$t= date("H:i:s");
		$d=str_replace("-","",$d);
		$t=str_replace(":","",$t);
		$suid=$d.$t;
		$sql="INSERT INTO suggession VALUES ('$suid','$sudate','$userid','$factoryid','$openerid1','$openerid2','$openerid3','$openerid4','$box','$location','$nameby','$details','$pic_file','','','','','','','1')";
		$query=$this->db->query($sql);
		return $query;
	}
	public function supending_list_all()
	{
		$query="SELECT (SELECT ename FROM user WHERE user.userid=suggession.openerid1) AS opener1,
		(SELECT ename FROM user WHERE user.userid=suggession.openerid2) AS opener2,
		(SELECT ename FROM user WHERE user.userid=suggession.openerid3) AS opener3,
		(SELECT ename FROM user WHERE user.userid=suggession.openerid4) AS opener4,
		(SELECT ename FROM user WHERE user.userid=suggession.fprid) AS fpr,
		suid,sudate,factoryid,openerid1,openerid2,openerid3,openerid4,box,location,nameby,details,pic_file,sustatus,grading,suggession.graid,fprid
		FROM suggession 
		LEFT JOIN grading ON
		grading.graid=suggession.graid
		
		WHERE sustatus IN('1','2') ORDER BY factoryid";
		$result=$this->db->query($query);
		return $result->result_array();
	}
	public function supending_list($userid,$factoryid)
	{
		$query="SELECT (SELECT ename FROM user WHERE user.userid=suggession.openerid1) AS opener1,
		(SELECT ename FROM user WHERE user.userid=suggession.openerid2) AS opener2,
		(SELECT ename FROM user WHERE user.userid=suggession.openerid3) AS opener3,
		(SELECT ename FROM user WHERE user.userid=suggession.openerid4) AS opener4,
		(SELECT ename FROM user WHERE user.userid=suggession.fprid) AS fpr,
		suid,sudate,factoryid,openerid1,openerid2,openerid3,openerid4,box,location,nameby,details,pic_file,sustatus,grading,suggession.graid,fprid
		FROM suggession 
		LEFT JOIN grading ON
		grading.graid=suggession.graid
		
		WHERE sustatus IN('1','2') AND factoryid='$factoryid' AND fprid='$userid' ORDER BY factoryid";
		$result=$this->db->query($query);
		return $result->result_array();
	}
	public function suggession_inquiry($suid)
	{
		$query="SELECT (SELECT ename FROM user WHERE user.userid=suggession.openerid1) AS opener1,
		(SELECT ename FROM user WHERE user.userid=suggession.openerid2) AS opener2,
		
		suid,sudate,factoryid,openerid1,openerid2,box,location,nameby,details,pic_file,sustatus
		FROM suggession
		
		WHERE suid='$suid'";
		$result=$this->db->query($query);
		return $result->result_array();
	}
	public function suggession_inquiry_insert($suid,$corrective,$graid,$fprid,$inqday)
	{
		$query="SELECT sudate FROM suggession WHERE suid='$suid'";
		$result=$this->db->query($query);
		$row=$result->result_array();
		foreach($row as $val)
		{
			$sudate=$val['sudate'];
		}
		$targetdate=date('Y-m-d', strtotime('+'. $inqday .'day', strtotime($sudate)));
		$query="UPDATE suggession SET corrective='$corrective',graid='$graid',fprid='$fprid',targetdate='$targetdate',sustatus='2'
		
		WHERE suid='$suid'";
		return $result=$this->db->query($query);
	}
	public function suggession_after_inquiry($suid)
	{
		$query="SELECT (SELECT ename FROM user WHERE user.userid=suggession.openerid1) AS opener1,
		(SELECT ename FROM user WHERE user.userid=suggession.openerid2) AS opener2,
		(SELECT ename FROM user WHERE user.userid=suggession.fprid) AS fpr,
		suid,sudate,factoryid,openerid1,openerid2,box,location,nameby,details,pic_file,corrective,grading,fprid,targetdate,sustatus
		FROM suggession
		JOIN grading ON grading.graid=suggession.graid
		
		WHERE suid='$suid'";
		$result=$this->db->query($query);
		return $result->result_array();
	}
	public function suggession_after_inquiry_insert($suid,$fudate,$remarks)
	{
		$fudate= date("Y-m-d", strtotime($fudate));
		$query="UPDATE suggession SET followupdate='$fudate',remarks='$remarks',sustatus='0'
		
		WHERE suid='$suid'";
		return $result=$this->db->query($query);
	}
	public function date_wise_sucompletelist($factoryid,$pd,$wd)
	{
		$pd= date("Y-m-d", strtotime($pd));
		$wd= date("Y-m-d", strtotime($wd));
		$query="SELECT (SELECT ename FROM user WHERE user.userid=suggession.openerid1) AS opener1,
		(SELECT ename FROM user WHERE user.userid=suggession.openerid2) AS opener2,
		(SELECT ename FROM user WHERE user.userid=suggession.openerid3) AS opener3,
		(SELECT ename FROM user WHERE user.userid=suggession.openerid4) AS opener4,
		(SELECT ename FROM user WHERE user.userid=suggession.fprid) AS fpr,
		suid,sudate,factory.factoryid,openerid1,openerid2,openerid3,openerid4,box,location,nameby,details,pic_file,corrective,grading,suggession.graid,fprid,targetdate,followupdate,remarks,sustatus,factoryname
		FROM suggession
		JOIN grading ON grading.graid=suggession.graid
		JOIN factory ON factory.factoryid=suggession.factoryid
		
		WHERE factory.factoryid='$factoryid' AND sudate BETWEEN ('$pd' AND '$wd') AND sustatus='0'";
		$result=$this->db->query($query);
		return $result->result_array();
	}
	public function date_wise_susummarylist($pd,$wd)
	{
		$pd= date("Y-m-d", strtotime($pd));
		$wd= date("Y-m-d", strtotime($wd));
		$query="SELECT factoryid,
		SUM(CASE WHEN sustatus = 1 THEN 1 ELSE 0 END) as waiting,
		SUM(CASE WHEN sustatus = 2 THEN 1 ELSE 0 END) as running,
		SUM(CASE WHEN sustatus = 0 THEN 1 ELSE 0 END) as completed 
		FROM suggession
		
		
		WHERE sudate BETWEEN '$pd' AND '$wd'
		GROUP BY factoryid";
		$result=$this->db->query($query);
		return $result->result_array();
	}
	
}
