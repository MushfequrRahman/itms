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
		$sql1="SELECT * FROM factory WHERE factoryid='$facid'";
		$query1=$this->db->query($sql1);
		$result=$query1->result_array();
		return $result;
	}
	public function flup($fid,$facid,$factoryname,$factory_address)
	{
		$sql="UPDATE factory SET factoryid='$facid',factoryname='$factoryname',factory_address='$factory_address' WHERE factoryid='$fid'";
		$query=$this->db->query($sql);
	}
	public function department_insert($department)
	{
		$sql="SELECT * FROM department WHERE departmentname='$department'";
		$query=$this->db->query($sql);
		if($query->num_rows()==1)
		{
			return false;
		}
		else
		{
		$sql="INSERT INTO department VALUES ('','$department')";
		$query=$this->db->query($sql);
		return $query;
		}
	}
	
	public function department_list()
	{
		$query="SELECT * FROM department";
		$result=$this->db->query($query);
		return $result->result_array();
	}
	public function department_list_up($deptid)
	{
		$sql1="SELECT * FROM department 
		
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
	
   public function designation_insert($designation)
	{
		$sql="SELECT * FROM designation WHERE designation='$designation'";
		$query=$this->db->query($sql);
		if($query->num_rows()==1)
		{
			return false;
		}
		else
		{
		$sql="INSERT INTO designation VALUES ('','$designation')";
		$query=$this->db->query($sql);
		return $query;
		}
	}
	public function designation_list()
	{
		$query="SELECT * FROM designation";
		$result=$this->db->query($query);
		return $result->result_array();
		
	}
	public function designation_list_up($designationid)
	{
		$sql1="SELECT * FROM designation WHERE designationid='$designationid'";
		$query1=$this->db->query($sql1);
		$result=$query1->result_array();
		return $result;
	}
	public function designationlup($designationid,$designation)
	{
		
		$sql="UPDATE designation SET designation='$designation' WHERE designationid='$designationid'";
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
	
	
	public function user_insert($factoryid,$departmentid,$name,$designationid,$oemail,$pmobile,$usertypeid,$userid,$password,$pic_file)
	{
		$sql="SELECT * FROM user WHERE userid='$userid'";
		$query=$this->db->query($sql);
		if($query->num_rows()==1)
		{
			return false;
		}
		else
		{
			$sql="INSERT INTO user VALUES ('$factoryid','$departmentid','$name','$designationid','$oemail','$pmobile','$usertypeid','$userid','$userid','$password','$pic_file','1','0000-00-00')";
			$query=$this->db->query($sql);
			
			$sql1="INSERT INTO ruser VALUES ('$userid')";
			$query1=$this->db->query($sql1);
			return $query;
		}
	}
	public function factorywise_user_list($factoryid)
	{
		$query="SELECT * FROM user 
		LEFT JOIN factory ON factory.factoryid=user.factoryid
		LEFT JOIN department ON department.deptid=user.departmentid
		LEFT JOIN designation ON designation.desigid=user.designationid
		LEFT JOIN userstatus ON userstatus.userstatusid=user.ustatus
		WHERE user.factoryid='$factoryid' ORDER BY user.userid";
		$result=$this->db->query($query);
		return $result->result_array();
	}
	public function user_list_up($userid)
	{
		$sql1="SELECT * FROM user 
		LEFT JOIN factory ON factory.factoryid=user.factoryid
		LEFT JOIN department ON department.deptid=user.departmentid
		LEFT JOIN designation ON designation.desigid=user.designationid
		LEFT JOIN usertype ON usertype.usertypeid=user.user_type
		LEFT JOIN userstatus ON userstatus.userstatusid=user.ustatus
		WHERE userid='$userid'";
		$query1=$this->db->query($sql1);
		$result=$query1->result_array();
		return $result;
	}
	public function ulup($factoryid,$departmentid,$designationid,$name,$email,$mobile,$usertypeid,$userstatusid,$userid,$password,$indate)
	{
		$indate= date("Y-m-d", strtotime($indate));
		$sql="UPDATE user SET factoryid='$factoryid',departmentid='$departmentid',designationid='$designationid',name='$name',email='$email',mobile='$mobile',user_type='$usertypeid',password='$password',ustatus='$userstatusid',indate='$indate' WHERE userid='$userid'";
		return $query=$this->db->query($sql);
	}
	public function user_transfer($factoryid,$departmentid,$designationid,$name,$oemail,$mobile,$usertypeid,$userstatusid,$userid,$password,$ruserid,$pic_file)
	{
		$sql="SELECT * FROM user WHERE userid='$userid'";
		$query=$this->db->query($sql);
		if($query->num_rows()==1)
		{
			return false;
		}
		else
		{
			$sql="INSERT INTO user VALUES ('$factoryid','$departmentid','$designationid','$name','$oemail','$mobile','$usertypeid','$userid','$ruserid','$password','$pic_file','1','0000-00-00')";
			$query=$this->db->query($sql);
			return $query;
		}
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
	public function eimglup($urid,$pic_file)
	{
		$sql="UPDATE user SET image='$pic_file' WHERE urid='$urid'";
		return $query=$this->db->query($sql);
	}
	public function product_uom_insert($puom)
	{
		$sql="SELECT * FROM product_uom_insert WHERE puom='$puom'";
		$query=$this->db->query($sql);
		if($query->num_rows()==1)
		{
			return false;
		}
		else
		{
			$sql="INSERT INTO product_uom_insert VALUES ('','$puom')";
			$query=$this->db->query($sql);
			return $query;
		}
	}
	public function product_uom_list()
	{
		$query="SELECT * FROM product_uom_insert";
		$result=$this->db->query($query);
		return $result->result_array();
	}
	public function product_uom_list_up($puomid)
	{
		$sql1="SELECT * FROM product_uom_insert WHERE puomid='$puomid'";
		$query1=$this->db->query($sql1);
		$result=$query1->result_array();
		return $result;
	}
	public function productuomlup($puomid,$puom)
	{
		$sql="UPDATE product_uom_insert SET puom='$puom' WHERE puomid='$puomid'";
		return $query=$this->db->query($sql);
	}
	public function product_capop_insert($pcapop)
	{
		$sql="SELECT * FROM product_capop_insert WHERE pcapop='$pcapop'";
		$query=$this->db->query($sql);
		if($query->num_rows()==1)
		{
			return false;
		}
		else
		{
			$sql="INSERT INTO product_capop_insert VALUES ('','$pcapop')";
			$query=$this->db->query($sql);
			return $query;
		}
	}
	public function product_capop_list()
	{
		$query="SELECT * FROM product_capop_insert";
		$result=$this->db->query($query);
		return $result->result_array();
	}
	public function product_category_insert($pccode,$pcname)
	{
		$sql="SELECT * FROM product_category_insert WHERE pccode='$pccode' OR pcname='$pcname'";
		$query=$this->db->query($sql);
		if($query->num_rows()==1)
		{
			return false;
		}
		else
		{
		$sql="INSERT INTO product_category_insert VALUES ('$pccode','$pcname')";
		$query=$this->db->query($sql);
		return $query;
		}
	}
	public function product_category_list()
	{
		$query="SELECT * FROM product_category_insert";
		$result=$this->db->query($query);
		return $result->result_array();
	}
	public function product_category_list_up($pccode)
	{
		$sql1="SELECT * FROM product_category_insert WHERE pccode='$pccode'";
		$query1=$this->db->query($sql1);
		$result=$query1->result_array();
		return $result;
	}
	public function productcategorylup($pccode,$pcname)
	{
		$sql="UPDATE product_category_insert SET pcname='$pcname' WHERE pccode='$pccode'";
		return $query=$this->db->query($sql);
	}
	public function product_details_insert($pccode,$factoryid,$brand,$description,$price,$pqty,$puomid,$vendor,$pcapop,$warranty,$pdate)
	{
		$pdate= date("Y-m-d", strtotime($pdate));
		$sql1="SELECT MAX(pdiid) AS pdiid FROM product_details_insert";
		$query1=$this->db->query($sql1);
		$result=$query1->result_array();
		foreach($result as $row)
			{
				$pdiid=$row['pdiid'];
				$pcode=$pdiid+1;
			}
		
		$pcode=$pccode.'-'.$pcode;
		$sql="INSERT INTO product_details_insert VALUES ('','$pccode','$pcode','$brand','$description','$price','$pqty','$puomid','$vendor','$pcapop','$warranty','$pdate','','','','0')";
		$query=$this->db->query($sql);
		
		$sql1="INSERT INTO product_history_insert VALUES ('','$pccode','$pcode','$factoryid','1')";
		$query1=$this->db->query($sql1);
		return $query1;
	}
	public function product_details_list()
	{
		$query="SELECT pdiid,product_category_insert.pccode,product_details_insert.pcode,pcname,brand,description,price,pqty,puom,vendor,warranty,pdate,pastatus,adate,product_details_insert.userid,name,image 
		FROM product_details_insert
		LEFT JOIN product_category_insert ON product_category_insert.pccode=product_details_insert.pccode
		LEFT JOIN product_uom_insert ON product_uom_insert.puomid=product_details_insert.puomid
		LEFT JOIN user ON user.userid=product_details_insert.userid";
		$result=$this->db->query($query);
		return $result->result_array();
	}
	public function product_details_list_up($pdiid)
	{
		$sql1="SELECT pdiid,product_category_insert.pccode,product_details_insert.pcode,pcname,brand,description,price,pqty,puom,product_details_insert.puomid,vendor,warranty,pdate,factoryid 
		FROM product_details_insert
		LEFT JOIN product_category_insert ON product_category_insert.pccode=product_details_insert.pccode
		LEFT JOIN product_uom_insert ON product_uom_insert.puomid=product_details_insert.puomid
		LEFT JOIN product_history_insert ON product_history_insert.pcode=product_details_insert.pcode
		WHERE pdiid='$pdiid' AND phstatus='1'";
		$query1=$this->db->query($sql1);
		$result=$query1->result_array();
		return $result;
	}
	public function productdetailslup($pdiid,$factoryid,$pcode,$brand,$description,$price,$pqty,$puomid,$vendor,$warranty,$pdate)
	{
		$pdate= date("Y-m-d", strtotime($pdate));
		$sql="UPDATE product_details_insert SET 	brand='$brand',description='$description',price='$price',pqty='$pqty',puomid='$puomid',vendor='$vendor',warranty='$warranty',pdate='$pdate' 
		WHERE pdiid='$pdiid'";
		
		$sql1="UPDATE product_history_insert SET factoryid='$factoryid'
		WHERE pcode='$pcode'";
		$this->db->query($sql1);
		return $query=$this->db->query($sql);
	}
	public function producthistorylup($factoryid,$pccode,$pcode)
	{
		$sql="UPDATE product_history_insert SET phstatus='0'
		WHERE pcode='$pcode' AND phstatus='1'";
		$this->db->query($sql);
		
		$sql1="INSERT INTO product_history_insert VALUES ('','$pccode','$pcode','$factoryid','1')";
		$query1=$this->db->query($sql1);
		return $query1;
	}
	public function product_assign_insert($pcode,$userid,$adate)
	{
		$adate= date("Y-m-d", strtotime($adate));
		$sql="INSERT INTO product_assign_insert VALUES ('','$pcode','$userid','$adate','0000-00-00','1')";
		$query=$this->db->query($sql);
		$sql1="UPDATE product_details_insert SET adate='$adate',userid='$userid',pastatus='1' 
		WHERE pcode='$pcode'";
		$this->db->query($sql1);
		return $query;
	}
	public function product_return_insert($pcode,$rdate)
	{
		$rdate= date("Y-m-d", strtotime($rdate));
		$sql="UPDATE product_assign_insert SET rdate='$rdate',astatus='0' 
		WHERE pcode='$pcode'";
		$sql1="UPDATE product_details_insert SET userid='',rdate='$rdate',pastatus='0' 
		WHERE pcode='$pcode'";
		$this->db->query($sql1);
		return $query=$this->db->query($sql);
	}
	
}
