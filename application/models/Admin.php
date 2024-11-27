<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Model
{
	public function fac_insert($facid, $facname, $fac_address)
	{
		$sql = "SELECT * FROM factory WHERE factoryid='$facid'";
		$query = $this->db->query($sql);
		if ($query->num_rows() == 1) {
			return false;
		} else {
			$sql = "INSERT INTO factory VALUES ('$facid','$facname','$fac_address')";
			$query = $this->db->query($sql);
			return $query;
		}
	}
	public function factory_list()
	{
		$query = "SELECT * FROM factory";
		$result = $this->db->query($query);
		return $result->result_array();
	}
	public function factory_list_up($facid)
	{
		$sql1 = "SELECT * FROM factory WHERE factoryid='$facid'";
		$query1 = $this->db->query($sql1);
		$result = $query1->result_array();
		return $result;
	}
	public function flup($fid, $facid, $factoryname, $factory_address)
	{
		$sql = "UPDATE factory SET factoryid='$facid',factoryname='$factoryname',factory_address='$factory_address' WHERE factoryid='$fid'";
		$query = $this->db->query($sql);
	}
	public function department_insert($department)
	{
		$sql = "SELECT * FROM department WHERE departmentname='$department'";
		$query = $this->db->query($sql);
		if ($query->num_rows() == 1) {
			return false;
		} else {
			$sql = "INSERT INTO department VALUES ('','$department')";
			$query = $this->db->query($sql);
			return $query;
		}
	}

	public function department_list()
	{
		$query = "SELECT * FROM department ORDER BY departmentname ASC";
		$result = $this->db->query($query);
		return $result->result_array();
	}
	public function department_list_up($deptid)
	{
		$sql1 = "SELECT * FROM department 
		
		WHERE deptid='$deptid'";
		$query1 = $this->db->query($sql1);
		$result = $query1->result_array();
		return $result;
	}
	public function departmentlup($deptid, $departmentname)
	{
		$sql = "UPDATE department SET deptid='$deptid',departmentname='$departmentname' WHERE deptid='$deptid'";
		$query = $this->db->query($sql);
	}

	public function designation_insert($designation)
	{
		$sql = "SELECT * FROM designation WHERE designation='$designation'";
		$query = $this->db->query($sql);
		if ($query->num_rows() == 1) {
			return false;
		} else {
			$sql = "INSERT INTO designation VALUES ('','$designation')";
			$query = $this->db->query($sql);
			return $query;
		}
	}
	public function designation_list()
	{
		$query = "SELECT * FROM designation ORDER BY designation ASC";
		$result = $this->db->query($query);
		return $result->result_array();
	}
	public function designation_list_up($designationid)
	{
		$sql1 = "SELECT * FROM designation WHERE designationid='$designationid'";
		$query1 = $this->db->query($sql1);
		$result = $query1->result_array();
		return $result;
	}
	public function designationlup($designationid, $designation)
	{

		$sql = "UPDATE designation SET designation='$designation' WHERE designationid='$designationid'";
		$query = $this->db->query($sql);
	}
	public function usertype_insert($usertype)
	{
		$sql = "SELECT * FROM usertype WHERE usertype='$usertype'";
		$query = $this->db->query($sql);
		if ($query->num_rows() == 1) {
			return false;
		} else {
			$sql = "INSERT INTO usertype VALUES ('','$usertype')";
			$query = $this->db->query($sql);
			return $query;
		}
	}
	public function usertype_list()
	{
		$query = "SELECT * FROM usertype";
		$result = $this->db->query($query);
		return $result->result_array();
	}
	public function usertype_list_up($usertypeid)
	{
		$sql1 = "SELECT * FROM usertype WHERE usertypeid='$usertypeid'";
		$query1 = $this->db->query($sql1);
		$result = $query1->result_array();
		return $result;
	}
	public function usertypelup($usertypeid, $usertype)
	{

		$sql = "UPDATE usertype SET usertype='$usertype' WHERE usertypeid='$usertypeid'";
		$query = $this->db->query($sql);
	}


	public function user_insert($factoryid, $departmentid, $name, $designationid, $oemail, $pmobile, $usertypeid, $userid, $password, $pic_file)
	{
		$sql = "SELECT * FROM user WHERE userid='$userid'";
		$query = $this->db->query($sql);
		if ($query->num_rows() == 1) {
			return false;
		} else {
			$sql = "INSERT INTO user VALUES ('$factoryid','$departmentid','$name','$designationid','$oemail','$pmobile','$usertypeid','$userid','$userid','$password','$pic_file','1','0000-00-00')";
			$query = $this->db->query($sql);

			$sql1 = "INSERT INTO ruser VALUES ('$userid')";
			$query1 = $this->db->query($sql1);
			return $query;
		}
	}
	public function factorywise_user_list($factoryid)
	{
		$query = "SELECT * FROM user 
		LEFT JOIN factory ON factory.factoryid=user.factoryid
		LEFT JOIN department ON department.deptid=user.departmentid
		LEFT JOIN designation ON designation.desigid=user.designationid
		LEFT JOIN userstatus ON userstatus.userstatusid=user.ustatus
		WHERE user.factoryid='$factoryid' ORDER BY user.userid";
		$result = $this->db->query($query);
		return $result->result_array();
	}
	public function user_list_up($userid)
	{
		$sql1 = "SELECT * FROM user 
		LEFT JOIN factory ON factory.factoryid=user.factoryid
		LEFT JOIN department ON department.deptid=user.departmentid
		LEFT JOIN designation ON designation.desigid=user.designationid
		LEFT JOIN usertype ON usertype.usertypeid=user.user_type
		LEFT JOIN userstatus ON userstatus.userstatusid=user.ustatus
		WHERE userid='$userid'";
		$query1 = $this->db->query($sql1);
		$result = $query1->result_array();
		return $result;
	}
	public function ulup($factoryid, $departmentid, $designationid, $name, $email, $mobile, $usertypeid, $userstatusid, $userid, $password, $indate)
	{
		$indate = date("Y-m-d", strtotime($indate));
		$sql = "UPDATE user SET factoryid='$factoryid',departmentid='$departmentid',designationid='$designationid',name='$name',email='$email',mobile='$mobile',user_type='$usertypeid',password='$password',ustatus='$userstatusid',indate='$indate' WHERE userid='$userid'";
		return $query = $this->db->query($sql);
	}
	public function user_transfer($factoryid, $departmentid, $designationid, $name, $oemail, $mobile, $usertypeid, $userstatusid, $userid, $password, $ruserid, $pic_file)
	{
		$sql = "SELECT * FROM user WHERE userid='$userid'";
		$query = $this->db->query($sql);
		if ($query->num_rows() == 1) {
			return false;
		} else {
			$sql = "INSERT INTO user VALUES ('$factoryid','$departmentid','$designationid','$name','$oemail','$mobile','$usertypeid','$userid','$ruserid','$password','$pic_file','1','0000-00-00')";
			$query = $this->db->query($sql);
			return $query;
		}
	}

	public function userstatus_insert($userstatus)
	{
		$sql = "SELECT * FROM userstatus WHERE userstatus='$userstatus'";
		$query = $this->db->query($sql);
		if ($query->num_rows() == 1) {
			return false;
		} else {
			$sql = "INSERT INTO userstatus VALUES ('','$userstatus')";
			$query = $this->db->query($sql);
			return $query;
		}
	}
	public function userstatus_list()
	{
		$query = "SELECT * FROM userstatus";
		$result = $this->db->query($query);
		return $result->result_array();
	}
	public function userstatus_list_up($userstatusid)
	{
		$sql1 = "SELECT * FROM userstatus WHERE userstatusid='$userstatusid'";
		$query1 = $this->db->query($sql1);
		$result = $query1->result_array();
		return $result;
	}
	public function userstatuslup($userstatusid, $userstatus)
	{
		$sql = "UPDATE userstatus SET userstatus='$userstatus' WHERE userstatusid='$userstatusid'";
		$query = $this->db->query($sql);
	}
	public function eimglup($urid, $pic_file)
	{
		$sql = "UPDATE user SET image='$pic_file' WHERE urid='$urid'";
		return $query = $this->db->query($sql);
	}
	public function product_uom_insert($puom)
	{
		$sql = "SELECT * FROM product_uom_insert WHERE puom='$puom'";
		$query = $this->db->query($sql);
		if ($query->num_rows() == 1) {
			return false;
		} else {
			$sql = "INSERT INTO product_uom_insert VALUES ('','$puom')";
			$query = $this->db->query($sql);
			return $query;
		}
	}
	public function product_uom_list()
	{
		$query = "SELECT * FROM product_uom_insert";
		$result = $this->db->query($query);
		return $result->result_array();
	}
	public function product_uom_list_up($puomid)
	{
		$sql1 = "SELECT * FROM product_uom_insert WHERE puomid='$puomid'";
		$query1 = $this->db->query($sql1);
		$result = $query1->result_array();
		return $result;
	}
	public function productuomlup($puomid, $puom)
	{
		$sql = "UPDATE product_uom_insert SET puom='$puom' WHERE puomid='$puomid'";
		return $query = $this->db->query($sql);
	}
	public function product_capop_insert($pcapop)
	{
		$sql = "SELECT * FROM product_capop_insert WHERE pcapop='$pcapop'";
		$query = $this->db->query($sql);
		if ($query->num_rows() == 1) {
			return false;
		} else {
			$sql = "INSERT INTO product_capop_insert VALUES ('','$pcapop')";
			$query = $this->db->query($sql);
			return $query;
		}
	}
	public function product_capop_list()
	{
		$query = "SELECT * FROM product_capop_insert";
		$result = $this->db->query($query);
		return $result->result_array();
	}
	public function supplier_insert($supplier)
	{
		$sql = "SELECT * FROM supplier_insert WHERE supplier='$supplier'";
		$query = $this->db->query($sql);
		if ($query->num_rows() == 1) {
			return false;
		} else {
			$sql = "INSERT INTO supplier_insert VALUES ('','$supplier')";
			$query = $this->db->query($sql);
			return $query;
		}
	}
	public function supplier_list()
	{
		$query = "SELECT * FROM supplier_insert ORDER BY supplier ASC";
		$result = $this->db->query($query);
		return $result->result_array();
	}
	public function product_category_insert($pcname)
	{
		$d = date('Y-m-d');
		$t = date("H:i:s");
		$d1 = str_replace("-", "", $d);
		$t1 = str_replace(":", "", $t);
		$ccid = $d1 . $t1;
		$sql = "SELECT * FROM product_category_insert WHERE pccode='$ccid' OR pcname='$pcname'";
		$query = $this->db->query($sql);
		if ($query->num_rows() == 1) {
			return false;
		} else {
			$sql = "INSERT INTO product_category_insert VALUES ('$ccid','$pcname')";
			$query = $this->db->query($sql);
			return $query;
		}
	}
	public function product_category_list()
	{
		$query = "SELECT * FROM product_category_insert";
		$result = $this->db->query($query);
		return $result->result_array();
	}
	public function product_category_list_up($pccode)
	{
		$sql1 = "SELECT * FROM product_category_insert WHERE pccode='$pccode'";
		$query1 = $this->db->query($sql1);
		$result = $query1->result_array();
		return $result;
	}
	public function productcategorylup($pccode, $pcname)
	{
		$sql = "UPDATE product_category_insert SET pcname='$pcname' WHERE pccode='$pccode'";
		return $query = $this->db->query($sql);
	}
	public function product_group_insert($pccode, $pgname)
	{
		$d = date('Y-m-d');
		$t = date("H:i:s");
		$d1 = str_replace("-", "", $d);
		$t1 = str_replace(":", "", $t);
		$ccid = $d1 . $t1;

		$sql = "SELECT * FROM product_group_insert WHERE pgname='$pgname'";
		$query = $this->db->query($sql);
		if ($query->num_rows() == 1) {
			return false;
		} else {
			$sql = "INSERT INTO product_group_insert VALUES ('$ccid','$pccode','$pgname')";
			$query = $this->db->query($sql);
			return $query;
		}
	}
	public function product_group_list()
	{
		$query = "SELECT * FROM product_group_insert
		JOIN product_category_insert ON product_category_insert.pccode=product_group_insert.pccode";
		$result = $this->db->query($query);
		return $result->result_array();
	}
	public function show_groupname($pccode)
	{
		$query = "SELECT pgid,pgname FROM product_group_insert WHERE pccode='$pccode' ORDER BY pgname ASC";
		$result = $this->db->query($query);
		return $result->result_array();
	}
	public function product_subgroup_insert($pccode, $pgid, $psgname)
	{
		$d = date('Y-m-d');
		$t = date("H:i:s");
		$d1 = str_replace("-", "", $d);
		$t1 = str_replace(":", "", $t);
		$ccid = $d1 . $t1;

		$sql = "SELECT * FROM product_subgroup_insert WHERE psgname='$psgname'";
		$query = $this->db->query($sql);
		if ($query->num_rows() == 1) {
			return false;
		} else {
			$sql = "INSERT INTO product_subgroup_insert VALUES ('$ccid','$pccode','$pgid','$psgname')";
			$query = $this->db->query($sql);
			return $query;
		}
	}
	public function product_subgroup_list()
	{
		$query = "SELECT * FROM product_subgroup_insert
		JOIN product_group_insert ON product_group_insert.pgid=product_subgroup_insert.pgid
		JOIN product_category_insert ON product_category_insert.pccode=product_subgroup_insert.pccode";
		$result = $this->db->query($query);
		return $result->result_array();
	}
	public function show_subgroupname($pccode, $pgid)
	{
		$query = "SELECT psgid,psgname FROM product_subgroup_insert WHERE pccode='$pccode' AND pgid='$pgid' ORDER BY psgname ASC";
		$result = $this->db->query($query);
		return $result->result_array();
	}
	public function product_insert($pccode, $pgid, $psgid, $pcode, $pname)
	{
		// $d = date('Y-m-d');
		// $t = date("H:i:s");
		// $d1 = str_replace("-", "", $d);
		// $t1 = str_replace(":", "", $t);
		// $ccid = $d1 . $t1;

		$sql = "SELECT * FROM product_insert WHERE pcode='$pcode'";
		$query = $this->db->query($sql);
		if ($query->num_rows() == 1) {
			return false;
		} else {
			$sql = "INSERT INTO product_insert VALUES ('$pcode','$pccode','$pgid','$psgid','$pname')";
			$query = $this->db->query($sql);
			return $query;
		}
	}
	public function product_list()
	{
		$query = "SELECT * FROM product_insert
		JOIN product_category_insert ON product_category_insert.pccode=product_insert.pccode
		JOIN product_group_insert ON product_group_insert.pgid=product_insert.pgid
		JOIN product_subgroup_insert ON product_subgroup_insert.psgid=product_insert.psgid
		ORDER BY pname ASC";
		$result = $this->db->query($query);
		return $result->result_array();
	}
	public function item_insert($item, $pcode)
	{
		date_default_timezone_set('Asia/Dhaka');
		$d = date('Y-m-d');
		$t = date("H:i:s");
		$d1 = str_replace("-", "", $d);
		$t1 = str_replace(":", "", $t);
		$ccid = $d1 . $t1;

		$sql = "SELECT * FROM item_insert WHERE item='$item' AND pcode='$pcode'";
		$query = $this->db->query($sql);
		if ($query->num_rows() == 1) {
			return false;
		} else {
			$sql = "INSERT INTO item_insert VALUES ('$ccid','$item','$pcode')";
			$query = $this->db->query($sql);
			return $query;
		}
	}
	public function item_list()
	{
		$query = "SELECT product_insert.pcode,pname,item FROM product_insert
		JOIN item_insert ON item_insert.pcode=product_insert.pcode";
		$result = $this->db->query($query);
		return $result->result_array();
	}
	public function item_list_code($pcode)
	{
		$query = "SELECT product_insert.pcode,pname,item FROM product_insert
		JOIN item_insert ON item_insert.pcode=product_insert.pcode
		WHERE product_insert.pcode='$pcode'";
		$result = $this->db->query($query);
		return $result->result_array();
	}
	public function item_release_type_insert($release)
	{
		date_default_timezone_set('Asia/Dhaka');
		$d = date('Y-m-d');
		$t = date("H:i:s");
		$d1 = str_replace("-", "", $d);
		$t1 = str_replace(":", "", $t);
		$ccid = $d1 . $t1;

		$sql = "SELECT * FROM item_release_type_insert WHERE releasetype='$release'";
		$query = $this->db->query($sql);
		if ($query->num_rows() == 1) {
			return false;
		} else {
			$sql = "INSERT INTO item_release_type_insert VALUES ('$ccid','$release')";
			$query = $this->db->query($sql);
			return $query;
		}
	}
	public function item_release_type_list()
	{
		$query = "SELECT * FROM item_release_type_insert";
		$result = $this->db->query($query);
		return $result->result_array();
	}
	public function brand_insert($brand)
	{
		date_default_timezone_set('Asia/Dhaka');
		$d = date('Y-m-d');
		$t = date("H:i:s");
		$d1 = str_replace("-", "", $d);
		$t1 = str_replace(":", "", $t);
		$ccid = $d1 . $t1;

		$sql = "SELECT * FROM brand_insert WHERE brandname='$brand'";
		$query = $this->db->query($sql);
		if ($query->num_rows() == 1) {
			return false;
		} else {
			$sql = "INSERT INTO brand_insert VALUES ('$ccid','$brand')";
			$query = $this->db->query($sql);
			return $query;
		}
	}
	public function brand_list()
	{
		$query = "SELECT * FROM brand_insert ORDER BY brandname ASC";
		$result = $this->db->query($query);
		return $result->result_array();
	}
	public function product_details_insert($pcode, $factoryid, $supplierid, $mpr, $sn, $item, $description, $pqty, $puomid, $warranty, $pr, $pdate)
	{
		//$pdate = date("Y-m-d", strtotime($pdate));
		date_default_timezone_set('Asia/Dhaka');
		$pdate = date("Y-m-d", strtotime($pdate));
		$d = date('Y-m-d');
		$t = date("H:i:s");
		$d1 = str_replace("-", "", $d);
		$t1 = str_replace(":", "", $t);
		$ccid = $d1 . $t1;

		//$sql1 = "SELECT MAX(pdiid) AS pdiid FROM product_details_insert";
		//		$query1 = $this->db->query($sql1);
		//		$result = $query1->result_array();
		//		foreach ($result as $row) {
		//			$pdiid = $row['pdiid'];
		//			$pcode = $pdiid + 1;
		//		}

		$sql1a = "SELECT MAX(pcidnum) AS pcidnum FROM product_asset_code WHERE pcode='$pcode' AND pafid='$factoryid' ";
		$query1a = $this->db->query($sql1a);
		$result1a = $query1a->result_array();
		foreach ($result1a as $row) {
			$pcidnum = $row['pcidnum'];
			$pcidnum = $pcidnum + 1;
		}

		//$pcode = $pccode . '-' . $pcode;

		$pacode = $factoryid . '-' . $pcode . '-' . $pcidnum;
		$sqla = "INSERT INTO product_asset_code VALUES ('$pacode','$factoryid','$pcode','$pcidnum')";
		$querya = $this->db->query($sqla);

		$sql = "INSERT INTO product_details_insert VALUES ('$pacode','$pcode','$factoryid','$supplierid','$mpr','$sn','$item','$description','$pqty','$puomid','$warranty','$pr','$pdate','','','','0')";
		$query = $this->db->query($sql);

		$sql1 = "INSERT INTO product_history_insert VALUES ('$ccid','$pacode','$factoryid','1')";
		$query1 = $this->db->query($sql1);
		return [$query1, $querya, $query];
	}

	public function product_details_list()
	{
		$query = "SELECT product_details_insert.pacode,product_history_insert.factoryid,supplier,
		mpr,sn,item,description,pqty,puom,warranty,price,pdate,adate,rdate,
		ddate,dremarks,item_release_type_insert.irid,releasetype,
		pcname,
		pgname,psgname,product_details_insert.userid,user.name,pastatus
		FROM product_details_insert
		JOIN product_insert ON product_insert.pcode=product_details_insert.pcode
		LEFT JOIN product_uom_insert ON product_uom_insert.puomid=product_details_insert.puomid
		JOIN  product_history_insert ON product_history_insert.pacode=product_details_insert.pacode
		LEFT JOIN  supplier_insert ON supplier_insert.supplierid=product_details_insert.supplierid
		JOIN  product_category_insert ON product_category_insert.pccode=product_insert.pccode
		JOIN  product_group_insert ON product_group_insert.pgid=product_insert.pgid
		JOIN  product_subgroup_insert ON product_subgroup_insert.psgid=product_insert.psgid
		LEFT JOIN user ON user.userid=product_details_insert.userid
		LEFT JOIN item_release_insert ON item_release_insert.pacode=product_details_insert.pacode
		LEFT JOIN item_release_type_insert ON item_release_type_insert.irid=item_release_insert.irid
		WHERE product_history_insert.phstatus='1'";
		$result = $this->db->query($query);
		return $result->result_array();
	}
	public function product_details_list_up($pacode)
	{
		$sql1 = "SELECT product_details_insert.pacode,
		product_details_insert.pcode,pcname,sn,
		description,price,pqty,puom,product_details_insert.puomid,
		warranty,pdate,product_history_insert.factoryid,supplier_insert.supplierid,supplier_insert.supplier 
		FROM product_details_insert
		JOIN product_insert ON product_insert.pcode=product_details_insert.pcode
		JOIN product_uom_insert ON product_uom_insert.puomid=product_details_insert.puomid
		JOIN supplier_insert ON supplier_insert.supplierid=product_details_insert.supplierid
		JOIN product_category_insert ON product_category_insert.pccode=product_insert.pccode
		JOIN product_group_insert ON product_group_insert.pgid=product_insert.pgid
		JOIN product_subgroup_insert ON product_subgroup_insert.psgid=product_insert.psgid
		JOIN product_ihistory_insert ON product_ihistory_insert.pacode=product_inventory_insert.pacode
		WHERE product_ihistory_insert.pacode='$pacode' AND product_ihistory_insert.phstatus='1'";
		$query1 = $this->db->query($sql1);
		$result = $query1->result_array();
		return $result;
	}
	public function productdetailslup($pacode, $supplierid, $sn, $description, $price, $pqty, $puomid, $warranty, $pdate)
	{
		$pdate = date("Y-m-d", strtotime($pdate));
		$sql = "UPDATE product_details_insert SET 	supplierid='$supplierid',sn='$sn',description='$description',price='$price',pqty='$pqty',puomid='$puomid',warranty='$warranty',pdate='$pdate' 
		WHERE pacode='$pacode'";

		// $sql1 = "UPDATE product_history_insert SET factoryid='$factoryid'
		// WHERE pacode='$pacode'";
		$this->db->query($sql);
		return $query = $this->db->query($sql);
	}
	public function producthistorylup($factoryid, $pacode)
	{
		date_default_timezone_set('Asia/Dhaka');
		$d = date('Y-m-d');
		$t = date("H:i:s");
		$d1 = str_replace("-", "", $d);
		$t1 = str_replace(":", "", $t);
		$ccid = $d1 . $t1;

		// $sql = "UPDATE product_history_insert SET phstatus='0'
		// WHERE pacode='$pacode' AND phstatus='1'";
		// $this->db->query($sql);

		// $sql1 = "INSERT INTO product_history_insert VALUES ('$ccid','$pacode','$factoryid','1')";
		// $query1 = $this->db->query($sql1);
		// return $query1;

		// $sql0 = "UPDATE product_details_insert SET factoryid='$factoryid'
		// WHERE pacode='$pacode'";
		// $this->db->query($sql0);

		$sql0 = "UPDATE product_inventory SET ifid='$factoryid'
				WHERE pacode='$pacode'";
		$this->db->query($sql0);

		$sql = "UPDATE product_ihistory_insert SET phstatus='0'
				WHERE pacode='$pacode' AND phstatus='1'";
		$this->db->query($sql);

		$sql1 = "INSERT INTO product_ihistory_insert VALUES ('$ccid','$pacode','$factoryid','1')";
		$query1 = $this->db->query($sql1);
		return $query1;
	}
	public function product_inventory_list_up($pdiid)
	{
		$sql = "SELECT * FROM product_inventory WHERE pacode='$pdiid'";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}
	public function productinventorylup($piv, $sn, $description, $iqty, $warranty, $pdate)
	{
		$pdate = date("Y-m-d", strtotime($pdate));
		$sql = "UPDATE product_inventory SET sn='$sn',idescription='$description',iqty='$iqty',warranty='$warranty',pdate='$pdate' 
		WHERE piv='$piv'";
		return $query = $this->db->query($sql);
	}
	public function product_assign_insert($pacode, $userid, $adate)
	{
		date_default_timezone_set('Asia/Dhaka');
		$d = date('Y-m-d');
		$t = date("H:i:s");
		$d1 = str_replace("-", "", $d);
		$t1 = str_replace(":", "", $t);
		$ccid = $d1 . $t1;


		$adate = date("Y-m-d", strtotime($adate));
		$sql = "INSERT INTO product_assign_insert VALUES ('$ccid','$pacode','$userid','$adate','0000-00-00','','1')";
		$query = $this->db->query($sql);
		// $sql1 = "UPDATE product_details_insert SET adate='$adate',userid='$userid',pastatus='1' 
		// WHERE pacode='$pacode'";
		$sql1 = "UPDATE product_inventory SET adate='$adate',userid='$userid',pastatus='1' 
				WHERE pacode='$pacode'";
		$this->db->query($sql1);
		return $query;
	}
	public function product_return_insert($pacode, $remarks, $rdate)
	{
		$rdate = date("Y-m-d", strtotime($rdate));
		$sql = "UPDATE product_assign_insert SET rdate='$rdate',rremarks='$remarks',astatus='0' 
		WHERE pacode='$pacode'";

		// $sql1 = "UPDATE product_details_insert SET userid='',rdate='$rdate',pastatus='0' 
		// WHERE pacode='$pacode'";
		// $this->db->query($sql1);

		$sql1 = "UPDATE product_inventory SET userid='',rdate='$rdate',pastatus='0' 
				WHERE pacode='$pacode'";
		$this->db->query($sql1);
		return $query = $this->db->query($sql);
	}
	public function item_release_insert($pacode, $irid, $remarks, $ddate)
	{
		date_default_timezone_set('Asia/Dhaka');
		$d = date('Y-m-d');
		$t = date("H:i:s");
		$d1 = str_replace("-", "", $d);
		$t1 = str_replace(":", "", $t);
		$ccid = $d1 . $t1;

		$ddate = date("Y-m-d", strtotime($ddate));

		$sql = "UPDATE product_inventory SET pastatus='2' 
		WHERE pacode='$pacode'";
		$this->db->query($sql);

		$sql1 = "INSERT INTO item_release_insert VALUES ('$ccid','$pacode','$irid','$remarks','$ddate')";
		return $this->db->query($sql1);

		$sql2 = "UPDATE product_inventory SET userid='',rdate='$ddate',pastatus='0' 
				WHERE pacode='$pacode'";
		$this->db->query($sql1);
		return $query = $this->db->query($sql2);
	}
	public function antivirus()
	{
		$query = "SELECT * FROM antivirus";
		$result = $this->db->query($query);
		return $result->result_array();
	}
	public function internet()
	{
		$query = "SELECT * FROM internet";
		$result = $this->db->query($query);
		return $result->result_array();
	}
	public function show_item($pcode)
	{
		$query = "SELECT itemcode,item FROM item_insert WHERE pcode='$pcode'";
		$result = $this->db->query($query);
		return $result->result_array();
	}
	public function mpr_create($data)
	{
		// date_default_timezone_set('Asia/Dhaka');
		// $data['mprdate'] = date("Y-m-d", strtotime($data['mprdate']));
		// $d = date('Y-m-d');
		// $t = date("H:i:s");
		// $d1 = str_replace("-", "", $d);
		// $t1 = str_replace(":", "", $t);
		// $ccid = $d1 . $t1;

		// $d2 = date('Y-m-d');
		// $t2 = date("H:i:s");
		// $d21 = str_replace("-", "", $d2);
		// $t21 = str_replace(":", "", $t2);
		// $ccid1 = $d21 . $t21;
		// $ccid1 = $ccid1 . $data['i'];

		// $sql1 = "INSERT INTO mpr_insert_id VALUES ('$ccid','$data[userid]','$data[mprid]','$data[factoryid]','$data[departmentid]','$data[name]','$data[designationid]','$data[mprdate]','0')";
		// $query1 = $this->db->query($sql1);

		$sql = "INSERT INTO mpr_insert VALUES ('$data[ccid]','$data[ccid1]','$data[product]','$data[item]','$data[brand]','$data[qty]','$data[uom]','$data[description]','$data[price]','$data[remarks]','$data[uname]','0')";
		return $query = $this->db->query($sql);
	}
	public function date_wise_mpr($pd, $wd)
	{
		$pd = date("Y-m-d", strtotime($pd));
		$wd = date("Y-m-d", strtotime($wd));
		$query = "SELECT mprid,mdate,fid,name,departmentname,designation,smprid FROM mpr_insert_id 
			
			
			JOIN department ON department.deptid=mpr_insert_id.mdeptid
			JOIN designation ON designation.desigid=mpr_insert_id.mdesigid
			WHERE mdate between '$pd' AND '$wd' ORDER BY mpr_insert_id.mprid";
		$result = $this->db->query($query);
		return $result->result_array();
	}
	public function date_wise_mpr_list($pd, $wd)
	{
		$pd = date("Y-m-d", strtotime($pd));
		$wd = date("Y-m-d", strtotime($wd));
		$query = "SELECT mprid,mdate,fid,name,departmentname,designation,pcname,
		pgname,psgname,pname,item,brandname,qty,puom,description,price,remarks,uname
		 FROM mpr_insert 
		JOIN mpr_insert_id ON mpr_insert.smprid=mpr_insert_id.smprid
		JOIN product_uom_insert ON product_uom_insert.puomid=mpr_insert.uom
		JOIN product_insert ON product_insert.pcode=mpr_insert.mpcode
		JOIN item_insert ON item_insert.itemcode=mpr_insert.model
		LEFT JOIN brand_insert ON brand_insert.brandid=mpr_insert.brandid
		JOIN product_category_insert ON product_category_insert.pccode=product_insert.pccode
		JOIN  product_group_insert ON product_group_insert.pgid=product_insert.pgid
		JOIN  product_subgroup_insert ON product_subgroup_insert.psgid=product_insert.psgid
		JOIN department ON department.deptid=mpr_insert_id.mdeptid
		JOIN designation ON designation.desigid=mpr_insert_id.mdesigid
		WHERE mdate between '$pd' AND '$wd' ORDER BY mpr_insert_id.mprid";
		$result = $this->db->query($query);
		return $result->result_array();
	}
	public function mpr_wise_mpr_list($mprid)
	{
		$query = "SELECT mprid,mdate,fid,name,
		departmentname,designation,pcname,pgname,psgname,pname,item,brandname,qty,puom,description,price,
		remarks,uname
		 FROM mpr_insert 
		JOIN mpr_insert_id ON mpr_insert.smprid=mpr_insert_id.smprid
		JOIN product_uom_insert ON product_uom_insert.puomid=mpr_insert.uom
		JOIN product_insert ON product_insert.pcode=mpr_insert.mpcode
		JOIN item_insert ON item_insert.itemcode=mpr_insert.model
		LEFT JOIN brand_insert ON brand_insert.brandid=mpr_insert.brandid
		JOIN product_category_insert ON product_category_insert.pccode=product_insert.pccode
		JOIN  product_group_insert ON product_group_insert.pgid=product_insert.pgid
		JOIN  product_subgroup_insert ON product_subgroup_insert.psgid=product_insert.psgid
		JOIN department ON department.deptid=mpr_insert_id.mdeptid
		JOIN designation ON designation.desigid=mpr_insert_id.mdesigid
		WHERE  mpr_insert_id.mprid='$mprid'";
		$result = $this->db->query($query);
		return $result->result_array();
	}

	public function single_mpr_id($smprid)
	{
		$query = "SELECT * FROM mpr_insert_id 
		JOIN department ON department.deptid=mpr_insert_id.mdeptid
		JOIN designation ON designation.desigid=mpr_insert_id.mdesigid
		WHERE mpr_insert_id.smprid='$smprid'";
		$result = $this->db->query($query);
		return $result->result_array();
	}
	public function single_mpr($smprid)
	{
		$query = "SELECT * FROM mpr_insert 
		
		JOIN product_uom_insert ON product_uom_insert.puomid=mpr_insert.uom
		JOIN product_insert ON product_insert.pcode=mpr_insert.mpcode
		JOIN item_insert ON item_insert.itemcode=mpr_insert.model
		LEFT JOIN brand_insert ON brand_insert.brandid=mpr_insert.brandid
		JOIN product_category_insert ON product_category_insert.pccode=product_insert.pccode
		WHERE mpr_insert.smprid='$smprid'";
		$result = $this->db->query($query);
		return $result->result_array();
	}
	public function mpr_list_update($data)
	{
		$sql = "update mpr_insert SET mpcode='$data[product]',model='$data[item]',brandid='$data[brand]',qty='$data[qty]',uom='$data[uom]',description='$data[description]',price='$data[price]',remarks='$data[remarks]',uname='$data[uname]' WHERE simprid='$data[simprid]'";
		return $query = $this->db->query($sql);
	}
	public function mpr_list_add($data)
	{
		//date_default_timezone_set('Asia/Dhaka');
		//$data['mprdate'] = date("Y-m-d", strtotime($data['mprdate']));
		// $d = date('Y-m-d');
		// $t = date("H:i:s");
		// $d1 = str_replace("-", "", $d);
		// $t1 = str_replace(":", "", $t);
		// $ccid = $d1 . $t1;
		// $ccid = $ccid . $data['i'];

		$sql = "INSERT INTO mpr_insert VALUES ('$data[smprid]','$data[ccid]','$data[product]','$data[item]','$data[brand]','$data[qty]','$data[uom]','$data[description]','$data[price]','$data[remarks]','$data[uname]','0')";
		return $query = $this->db->query($sql);
	}
	public function po_create($data)
	{
		// date_default_timezone_set('Asia/Dhaka');
		$data['podate'] = date("Y-m-d", strtotime($data['podate']));
		// $d = date('Y-m-d');
		// $t = date("H:i:s");
		// $d1 = str_replace("-", "", $d);
		// $t1 = str_replace(":", "", $t);
		// $ccid = $d1 . $t1;

		// $d2 = date('Y-m-d');
		// $t2 = date("H:i:s");
		// $d21 = str_replace("-", "", $d2);
		// $t21 = str_replace(":", "", $t2);
		// $ccid1 = $d21 . $t21;
		// $ccid1 = $ccid1 . $data['i'];

		// $sql1 = "INSERT INTO po_insert_id VALUES ('$ccid','$data[mprid]')";
		// $query1 = $this->db->query($sql1);

		$sql = "INSERT INTO po_insert VALUES ('$data[ccid]','$data[ccid1]','$data[userid]','$data[mprid]','$data[po]','$data[item]','$data[pqty]','$data[premarks]','$data[pprice]','$data[supplier]','$data[podate]','$data[pstatus]')";
		$query = $this->db->query($sql);

		$sqld = "DELETE FROM  po_insert WHERE pqty='0'";
		$queryd = $this->db->query($sqld);

		$sql1 = "SELECT simprid FROM po_insert WHERE simprid='$data[item]'";
		$query1 = $this->db->query($sql1);
		$query1 = $query1->result_array();
		//echo "<br/>";
		foreach ($query1 as $row) {
			$simprid = $row['simprid'];
			$sql2 = "UPDATE mpr_insert SET mstatus='1' WHERE simprid='$simprid'";
			$query2 = $this->db->query($sql2);
		}
		return $query;
	}

	//public function date_wise_po_list($pd, $wd)
	//	{
	//		$pd= date("Y-m-d", strtotime($pd));
	//		$wd= date("Y-m-d", strtotime($wd));
	//		$query="SELECT * FROM po_insert 
	//		JOIN po_insert_id ON po_insert.spoid=po_insert_id.spoid
	//		JOIN product_uom_insert ON product_uom_insert.puomid=po_insert.uom
	//		JOIN mpr_insert ON mpr_insert.simprid=po_insert.simprid
	//		JOIN product_category_insert ON product_category_insert.pccode=mpr_insert.item
	//		JOIN user ON user.userid=mpr_insert.cuserid
	//		JOIN department ON department.deptid=user.departmentid
	//		JOIN designation ON designation.desigid=user.designationid
	//		WHERE mdate between '$pd' AND '$wd' ORDER BY mpr_insert.mprid";
	//		$result=$this->db->query($query);
	//		return $result->result_array();
	//	}
	//public function date_wise_po_list($pd, $wd)
	//	{
	//		$pd= date("Y-m-d", strtotime($pd));
	//		$wd= date("Y-m-d", strtotime($wd));
	//		$query="SELECT * FROM po_insert 
	//		JOIN po_insert_id ON po_insert.spoid=po_insert_id.spoid
	//		
	//		JOIN mpr_insert ON mpr_insert.simprid=po_insert.simprid
	//		JOIN product_uom_insert ON product_uom_insert.puomid=mpr_insert.uom
	//		JOIN product_category_insert ON product_category_insert.pccode=mpr_insert.item
	//		JOIN department ON department.deptid=mpr_insert.mdeptid
	//		JOIN designation ON designation.desigid=mpr_insert.mdesigid
	//		WHERE mdate between '$pd' AND '$wd' AND pstatus='1' ORDER BY mpr_insert.mprid";
	//		$result=$this->db->query($query);
	//		return $result->result_array();
	//	}
	public function date_wise_po_list($pd, $wd)
	{
		$pd = date("Y-m-d", strtotime($pd));
		$wd = date("Y-m-d", strtotime($wd));
		$query = "SELECT mpr_insert_id.mprid,mdate,mpr_insert_id.fid,name,departmentname,designation,
		pcname,pgname,psgname,pname,item,mpr_insert.qty,product_uom_insert.puom,description,price,po,pdate,pqty,
		pprice,pqty,pprice,premarks,supplier_insert.supplier,sipoid,pstatus
		 FROM po_insert 
		JOIN po_insert_id ON po_insert.spoid=po_insert_id.spoid
		JOIN mpr_insert ON mpr_insert.simprid=po_insert.simprid
		JOIN mpr_insert_id ON mpr_insert_id.mprid=po_insert.mprid
		JOIN item_insert ON item_insert.itemcode=mpr_insert.model
		JOIN po_qty_remaining ON po_qty_remaining.simprid=po_insert.simprid
		JOIN product_uom_insert ON product_uom_insert.puomid=mpr_insert.uom
		
		JOIN department ON department.deptid=mpr_insert_id.mdeptid
		JOIN designation ON designation.desigid=mpr_insert_id.mdesigid
		JOIN supplier_insert ON supplier_insert.supplierid=po_insert.supplier
		WHERE pdate between '$pd' AND '$wd' ORDER BY mpr_insert_id.mprid";
		$result = $this->db->query($query);
		return $result->result_array();
	}

	public function po_for_mpr_list($mprid)
	{
		$query = "SELECT mpr_insert_id.mprid,mpr_insert_id.fid,product_insert.pname,item,
		mpr_insert.simprid,product_category_insert.pcname,
		mpr_insert.qty,product_uom_insert.puom,description,price,remarks,uname,mdate,
		prqty,tpprice,pprice 
		FROM mpr_insert 
		JOIN mpr_insert_id ON mpr_insert.smprid=mpr_insert_id.smprid
		JOIN item_insert ON item_insert.itemcode=mpr_insert.model
		JOIN product_uom_insert ON product_uom_insert.puomid=mpr_insert.uom
		JOIN product_insert ON product_insert.pcode=mpr_insert.mpcode
		JOIN product_category_insert ON product_category_insert.pccode=product_insert.pccode
		JOIN department ON department.deptid=mpr_insert_id.mdeptid
		JOIN designation ON designation.desigid=mpr_insert_id.mdesigid
		LEFT JOIN po_insert ON po_insert.simprid=mpr_insert.simprid
		LEFT JOIN po_qty_remaining ON po_qty_remaining.simprid=po_insert.simprid
		WHERE mpr_insert_id.mprid='$mprid'
		GROUP BY mpr_insert.simprid";
		$result = $this->db->query($query);
		return $result->result_array();
	}
	public function single_po($sipoid)
	{
		$pd = date("Y-m-d", strtotime($pd));
		$wd = date("Y-m-d", strtotime($wd));
		$query = "SELECT mpr_insert_id.mprid,mdate,mpr_insert_id.fid,name,departmentname,designation,
		pcname,pgname,psgname,pname,item,mpr_insert.qty,product_uom_insert.puom,description,price,po,pdate,pqty,
		pprice,pqty,pprice,premarks,supplier_insert.supplier,sipoid,po_insert.spoid,po_insert.simprid,supplierid
		 FROM po_insert 
		JOIN po_insert_id ON po_insert.spoid=po_insert_id.spoid
		JOIN mpr_insert ON mpr_insert.simprid=po_insert.simprid
		JOIN mpr_insert_id ON mpr_insert_id.mprid=po_insert.mprid
		JOIN item_insert ON item_insert.itemcode=mpr_insert.model
		JOIN po_qty_remaining ON po_qty_remaining.simprid=po_insert.simprid
		JOIN product_uom_insert ON product_uom_insert.puomid=mpr_insert.uom
		
		JOIN department ON department.deptid=mpr_insert_id.mdeptid
		JOIN designation ON designation.desigid=mpr_insert_id.mdesigid
		JOIN supplier_insert ON supplier_insert.supplierid=po_insert.supplier
		WHERE sipoid='$sipoid'";
		$result = $this->db->query($query);
		return $result->result_array();
	}
	public function po_list_update($spoid, $sipoid, $userid, $mprid, $po, $simprid, $pqty, $premarks, $pprice, $supplier, $podate)
	{
		date_default_timezone_set('Asia/Dhaka');
		$d = date('Y-m-d');
		$t = date("H:i:s");
		$d1 = str_replace("-", "", $d);
		$t1 = str_replace(":", "", $t);
		$ccid = $d1 . $t1;

		$podate = date("Y-m-d", strtotime($podate));
		$sql = "update po_insert SET po='$po',pqty='$pqty',premarks='$premarks',pprice='$pprice',supplier='$supplier',pdate='$podate' WHERE sipoid='$sipoid'";

		$sqlr = "update receive_insert SET po='$po' WHERE sipoid='$sipoid'";

		$sql1 = "INSERT INTO po_insert_edit_log VALUES ('$ccid','$spoid','$sipoid','$userid','$mprid','$po','$simprid','$pqty','$premarks','$pprice','$supplier','$podate',CURDATE(),CURTIME())";
		$query1 = $this->db->query($sql1);
		$queryr = $this->db->query($sqlr);
		return $query = $this->db->query($sql);
	}
	public function po_list_log($sipoid)
	{
		$query = "SELECT mpr_insert_id.mprid,mdate,mpr_insert_id.fid,name,departmentname,designation,
		pcname,pgname,psgname,pname,item,mpr_insert.qty,product_uom_insert.puom,description,price,po,pdate,pqty,
		pprice,pqty,pprice,premarks,supplier_insert.supplier,sipoid,
		po_insert_edit_log.spoid,po_insert_edit_log.simprid,supplierid,
		pedate,petime
		 FROM po_insert_edit_log 
		JOIN po_insert_id ON po_insert_edit_log.spoid=po_insert_id.spoid
		JOIN mpr_insert ON mpr_insert.simprid=po_insert_edit_log.simprid
		JOIN mpr_insert_id ON mpr_insert_id.mprid=po_insert_edit_log.mprid
		JOIN item_insert ON item_insert.itemcode=mpr_insert.model
		JOIN po_qty_remaining ON po_qty_remaining.simprid=po_insert_edit_log.simprid
		JOIN product_uom_insert ON product_uom_insert.puomid=mpr_insert.uom
		
		JOIN department ON department.deptid=mpr_insert_id.mdeptid
		JOIN designation ON designation.desigid=mpr_insert_id.mdesigid
		JOIN supplier_insert ON supplier_insert.supplierid=po_insert_edit_log.supplier
		WHERE sipoid='$sipoid'";
		$result = $this->db->query($query);
		return $result->result_array();
	}
	public function receive_for_mpr_list($mprid)
	{

		$query = "SELECT mpr_insert_id.mprid,mpr_insert_id.fid,item,fid,po_insert.po,
		product_category_insert.pcname,pname,
				po_insert.simprid,po_insert.spoid,
				po_insert.sipoid,
				mpr_insert.qty,product_uom_insert.puom,description,price,remarks,uname,mdate,
				pqty,pprice,SUM(rqty) AS rqty
				FROM po_insert 
				JOIN po_insert_id ON po_insert.spoid=po_insert_id.spoid
				JOIN mpr_insert_id ON mpr_insert_id.mprid=po_insert_id.mprid
				JOIN mpr_insert ON mpr_insert.simprid=po_insert.simprid
				JOIN item_insert ON item_insert.itemcode=mpr_insert.model
				LEFT JOIN receive_insert ON receive_insert.sipoid=po_insert.sipoid
				
				JOIN product_uom_insert ON product_uom_insert.puomid=mpr_insert.uom
				JOIN product_insert ON product_insert.pcode=mpr_insert.mpcode
				JOIN product_category_insert ON product_category_insert.pccode=product_insert.pccode
				JOIN department ON department.deptid=mpr_insert_id.mdeptid
				JOIN designation ON designation.desigid=mpr_insert_id.mdesigid
		WHERE po_insert.po='$mprid'
		GROUP BY po_insert.sipoid";
		$result = $this->db->query($query);
		return $result->result_array();
	}

	public function receive_create($userid, $mprid, $item, $sipoid, $po, $grn, $rqty, $rdate, $invoice, $cdate, $rremarks)
	{
		date_default_timezone_set('Asia/Dhaka');
		$rdate = date("Y-m-d", strtotime($rdate));
		$cdate = date("Y-m-d", strtotime($cdate));
		$d = date('Y-m-d');
		$t = date("H:i:s");
		$d1 = str_replace("-", "", $d);
		$t1 = str_replace(":", "", $t);
		$ccid = $d1 . $t1;

		$d2 = date('Y-m-d');
		$t2 = date("H:i:s");
		$d21 = str_replace("-", "", $d2);
		$t21 = str_replace(":", "", $t2);
		$ccid1 = $d21 . $t21;
		//$ccid1 = $ccid1 . $data['i'];

		$sql1 = "INSERT INTO receive_insert_id VALUES ('$ccid','$mprid','$grn')";
		$query1 = $this->db->query($sql1);
		//if($data['pstatus']!=3)
		//		{
		$sql = "INSERT INTO receive_insert VALUES ('$ccid','$ccid1','$userid','$mprid','$item','$sipoid','$po','$grn','$rqty','$rremarks','$rdate','$invoice','$cdate')";

		$sql2 = "UPDATE po_insert SET pstatus='1' WHERE sipoid='$sipoid'";
		$query2 = $this->db->query($sql2);
		//}
		//else
		//		{
		//			$sql="INSERT INTO po_insert VALUES ('$ccid','$ccid1','$data[userid]','$data[mprid]','','$data[item]','$data[pqty]','$data[premarks]','','','','$data[pstatus]')";
		//		}
		//		
		//		$sql2="UPDATE mpr_insert SET mstatus='$data[pstatus]' WHERE simprid='$data[item]'";
		//$query2=$this->db->query($sql2);

		return $query = $this->db->query($sql);
	}
	public function mpr_wise_receive_list($mprid)
	{

		//$query = "SELECT mpr_insert.mprid,fid,pcname,model,pcapop,po_insert.simprid,po_insert.spoid,receive_insert.po,
		//		mpr_insert.qty,puom,description,price,remarks,uname,mdate,
		//		pqty, pprice,grn,rqty,mdate,pdate,rdate,description,remarks,premarks,uname
		// 		FROM mpr_insert 
		//		JOIN po_insert ON po_insert.simprid=mpr_insert.simprid
		//		JOIN receive_insert ON receive_insert.simprid=mpr_insert.simprid
		//		JOIN product_uom_insert ON product_uom_insert.puomid=mpr_insert.uom
		//		JOIN product_category_insert ON product_category_insert.pccode=mpr_insert.item
		//		JOIN product_capop_insert ON product_capop_insert.pcoid=mpr_insert.type
		//		WHERE receive_insert.mprid='$mprid' AND po_insert.po!='' AND grn!=''";

		//$query = "SELECT mpr_insert.mprid,fid,pcname,model,pcapop,receive_insert.po,
		//		mpr_insert.qty,puom,description,price,remarks,uname,mdate,
		//		 grn,rqty,mdate,rdate,description,remarks,uname,receive_insert.simprid,receive_insert.sipoid
		// 		FROM mpr_insert 
		//		
		//		JOIN receive_insert ON receive_insert.simprid=mpr_insert.simprid
		//		JOIN product_uom_insert ON product_uom_insert.puomid=mpr_insert.uom
		//		JOIN product_category_insert ON product_category_insert.pccode=mpr_insert.item
		//		JOIN product_capop_insert ON product_capop_insert.pcoid=mpr_insert.type
		//		WHERE receive_insert.mprid='$mprid' AND grn!=''";
		$query = "SELECT mpr_wise_receive_list_view.mprid AS mprid,fid,pccode,item,pcname,model,
		mpr_wise_receive_list_view.po AS po,qty,puom,price,remarks,uname,mdate,grn,invoice,
		rqty,rdate,description,mpr_wise_receive_list_view.simprid AS simprid,mpr_wise_receive_list_view.sipoid AS sipoid,pcode,
		pname,pqty,pprice,iqty
 		FROM mpr_wise_receive_list_view 
		
		JOIN po_insert ON po_insert.sipoid=mpr_wise_receive_list_view.sipoid

		LEFT JOIN product_inventory_view ON product_inventory_view.sipoid=po_insert.sipoid
		WHERE mpr_wise_receive_list_view.mprid='$mprid'";
		$result = $this->db->query($query);
		return $result->result_array();
	}

	public function date_wise_receive_list($pd, $wd)
	{

		$pd = date("Y-m-d", strtotime($pd));
		$wd = date("Y-m-d", strtotime($wd));


		$query = "SELECT mpr_insert_id.mprid,fid,uname,pcname,pname,item,qty,puom,
		description,remarks,mdate,msdate,po_insert.po,pqty,pprice,grn,rqty,rdate,iqty,supplier_insert.supplier,
		invoice,DATEDIFF(CURDATE(),msdate) AS cday
		FROM mpr_insert_id 
		JOIN mpr_insert ON mpr_insert.smprid=mpr_insert_id.smprid
		LEFT JOIN po_insert ON po_insert.simprid=mpr_insert.simprid
		LEFT JOIN supplier_insert ON supplier_insert.supplierid=po_insert.supplier
		LEFT JOIN receive_insert ON receive_insert.sipoid=po_insert.sipoid
		LEFT JOIN product_inventory_view ON product_inventory_view.sipoid=po_insert.sipoid
		JOIN item_insert ON item_insert.itemcode=mpr_insert.model
		JOIN product_uom_insert ON product_uom_insert.puomid=mpr_insert.uom
						JOIN product_insert ON product_insert.pcode=mpr_insert.mpcode
						JOIN product_category_insert ON product_category_insert.pccode=product_insert.pccode
						JOIN department ON department.deptid=mpr_insert_id.mdeptid
						JOIN designation ON designation.desigid=mpr_insert_id.mdesigid
		WHERE rdate between '$pd' AND '$wd' 
		ORDER BY mpr_insert_id .mprid";
		$result = $this->db->query($query);
		return $result->result_array();
	}
	public function date_wise_remaining_list($pd, $wd)
	{

		$pd = date("Y-m-d", strtotime($pd));
		$wd = date("Y-m-d", strtotime($wd));


		// $query = "SELECT mpr_insert_id.mprid,fid,uname,pcname,pname,item,qty,puom,
		// description,remarks,mdate,msdate,po_insert.po,pqty,pprice,grn,rqty,rdate,iqty,supplier_insert.supplier,
		// invoice,DATEDIFF(CURDATE(),msdate) AS cday
		// FROM mpr_insert_id 
		// JOIN mpr_insert ON mpr_insert.smprid=mpr_insert_id.smprid
		// LEFT JOIN po_insert ON po_insert.simprid=mpr_insert.simprid
		// LEFT JOIN supplier_insert ON supplier_insert.supplierid=po_insert.supplier
		// LEFT JOIN receive_insert ON receive_insert.sipoid=po_insert.sipoid
		// LEFT JOIN product_inventory_view ON product_inventory_view.sipoid=po_insert.sipoid
		// JOIN item_insert ON item_insert.itemcode=mpr_insert.model
		// JOIN product_uom_insert ON product_uom_insert.puomid=mpr_insert.uom
		// JOIN product_insert ON product_insert.pcode=mpr_insert.mpcode
		// JOIN product_category_insert ON product_category_insert.pccode=product_insert.pccode
		// JOIN department ON department.deptid=mpr_insert_id.mdeptid
		// JOIN designation ON designation.desigid=mpr_insert_id.mdesigid
		// WHERE mdate between '$pd' AND '$wd' 
		// ORDER BY mpr_insert_id .mprid";
		// $result = $this->db->query($query);
		// return $result->result_array();


		$query = "SELECT mpr_insert_id.mprid,fid,uname,pcname,pname,item,qty,puom,
		description,remarks,mdate,msdate,SUM(pqty) AS pqty,SUM(rqty) AS rqty,
		DATEDIFF(CURDATE(),msdate) AS cday
		FROM mpr_insert_id 
		JOIN mpr_insert ON mpr_insert.smprid=mpr_insert_id.smprid
		LEFT JOIN po_insert ON po_insert.simprid=mpr_insert.simprid
		LEFT JOIN receive_insert ON receive_insert.simprid=mpr_insert.simprid
		
		JOIN item_insert ON item_insert.itemcode=mpr_insert.model
		JOIN product_uom_insert ON product_uom_insert.puomid=mpr_insert.uom
		JOIN product_insert ON product_insert.pcode=mpr_insert.mpcode
		JOIN product_category_insert ON product_category_insert.pccode=product_insert.pccode
		JOIN department ON department.deptid=mpr_insert_id.mdeptid
		JOIN designation ON designation.desigid=mpr_insert_id.mdesigid
		WHERE mdate between '$pd' AND '$wd'
		GROUP BY mpr_insert.simprid 
		ORDER BY mpr_insert_id .mprid";
		$result = $this->db->query($query);
		return $result->result_array();
	}
	public function mpr_wise_remaining($mprid)
	{

		// $query = "SELECT mpr_insert_id.mprid,fid,uname,pcname,pname,item,qty,puom,
		// description,remarks,mdate,msdate,po_insert.po,pqty,pprice,grn,rqty,rdate,iqty,supplier_insert.supplier,
		// invoice,DATEDIFF(CURDATE(),msdate) AS cday
		// FROM mpr_insert_id 
		// JOIN mpr_insert ON mpr_insert.smprid=mpr_insert_id.smprid
		// LEFT JOIN po_insert ON po_insert.simprid=mpr_insert.simprid
		// LEFT JOIN supplier_insert ON supplier_insert.supplierid=po_insert.supplier
		// LEFT JOIN receive_insert ON receive_insert.sipoid=po_insert.sipoid
		// LEFT JOIN product_inventory_view ON product_inventory_view.sipoid=po_insert.sipoid
		// JOIN item_insert ON item_insert.itemcode=mpr_insert.model
		// JOIN product_uom_insert ON product_uom_insert.puomid=mpr_insert.uom
		// 				JOIN product_insert ON product_insert.pcode=mpr_insert.mpcode
		// 				JOIN product_category_insert ON product_category_insert.pccode=product_insert.pccode
		// 				JOIN department ON department.deptid=mpr_insert_id.mdeptid
		// 				JOIN designation ON designation.desigid=mpr_insert_id.mdesigid
		// WHERE mpr_insert_id .mprid='$mprid' 
		// ORDER BY mpr_insert_id .mprid";
		// $result = $this->db->query($query);
		// return $result->result_array();

		$query = "SELECT mpr_insert_id.mprid,fid,uname,pcname,pname,item,qty,puom,
		description,remarks,mdate,msdate,SUM(pqty) AS pqty,SUM(rqty) AS rqty,
		DATEDIFF(CURDATE(),msdate) AS cday
		FROM mpr_insert_id 
		JOIN mpr_insert ON mpr_insert.smprid=mpr_insert_id.smprid
		LEFT JOIN po_insert ON po_insert.simprid=mpr_insert.simprid
		LEFT JOIN receive_insert ON receive_insert.simprid=mpr_insert.simprid
		
		JOIN item_insert ON item_insert.itemcode=mpr_insert.model
		JOIN product_uom_insert ON product_uom_insert.puomid=mpr_insert.uom
		JOIN product_insert ON product_insert.pcode=mpr_insert.mpcode
		JOIN product_category_insert ON product_category_insert.pccode=product_insert.pccode
		JOIN department ON department.deptid=mpr_insert_id.mdeptid
		JOIN designation ON designation.desigid=mpr_insert_id.mdesigid
		WHERE mpr_insert_id .mprid='$mprid'
		GROUP BY mpr_insert.simprid 
		ORDER BY mpr_insert_id .mprid";
		$result = $this->db->query($query);
		return $result->result_array();
	}
	public function mpr_wise_inventory_details($mprid)
	{

		$query = "SELECT  mpr_insert_id.mprid,fid,uname,pcname,pname,item,qty,puom,
		description,remarks,mdate,msdate,po_insert.po,
		pqty,pprice,pacode,sn,grn,warranty,rqty,receive_insert.rdate,iqty,supplier_insert.supplier,
		invoice
		FROM product_inventory 
		JOIN po_insert ON po_insert.sipoid=product_inventory.sipoid
		JOIN mpr_insert ON mpr_insert.simprid=po_insert.simprid
		JOIN receive_insert ON receive_insert.simprid=mpr_insert.simprid
		JOIN mpr_insert_id ON mpr_insert_id.smprid=mpr_insert.smprid
		JOIN item_insert ON item_insert.itemcode=mpr_insert.model
		JOIN supplier_insert ON supplier_insert.supplierid=po_insert.supplier
		JOIN product_uom_insert ON product_uom_insert.puomid=mpr_insert.uom
		JOIN product_insert ON product_insert.pcode=mpr_insert.mpcode
		JOIN product_category_insert ON product_category_insert.pccode=product_insert.pccode
		JOIN  product_group_insert ON product_group_insert.pgid=product_insert.pgid
		JOIN  product_subgroup_insert ON product_subgroup_insert.psgid=product_insert.psgid
		WHERE mpr_insert_id .mprid='$mprid' 
		ORDER BY mpr_insert_id .mprid";
		$result = $this->db->query($query);
		return $result->result_array();
	}

	public function mpr_wise_sreceive_list($mprid)
	{
		$query = "SELECT * FROM po_qty_remaining 
				LEFT JOIN receive_qty_remaining ON
				po_qty_remaining.simprid=receive_qty_remaining.simprid
				WHERE mprid='$mprid'";
		$result = $this->db->query($query);
		return $result->result_array();
	}
	public function product_inventory_view($sipoid)
	{
		$querytt = "SELECT sipoid,fid,pcode FROM mpr_wise_receive_list_view WHERE sipoid='$sipoid'";
		$resulttt = $this->db->query($querytt);
		$resulttt = $resulttt->result_array();
		foreach ($resulttt as $rowtt) {
			$simprid = $rowtt['sipoid'];
		}

		$query = "SELECT * FROM product_inventory_view
				  WHERE sipoid='$simprid'";
		$result = $this->db->query($query);
		return $result->result_array();
	}
	public function product_inventory_view1($sipoid)
	{
		$querytt = "SELECT fid,pcode FROM mpr_wise_receive_list_view WHERE sipoid='$sipoid'";
		$resulttt = $this->db->query($querytt);
		return $resulttt = $resulttt->result_array();
	}
	public function receive_qty($sipoid)
	{

		$query = "SELECT SUM(rqty) AS rqty FROM receive_insert
				  WHERE sipoid='$sipoid' GROUP BY sipoid";
		$result = $this->db->query($query);
		return $result->result_array();
	}
	//public function receive_qty_remaining($pcode)
	//	{
	//		$querytt="SELECT simprid FROM mpr_wise_receive_list_view WHERE sipoid='$pcode'";
	//		$resulttt=$this->db->query($querytt);
	//		$resulttt=$resulttt->result_array();
	//		foreach($resulttt as $rowtt)
	//		{
	//			$simprid=$rowtt['simprid'];
	//			
	//		}
	//		
	//		$query = "SELECT * FROM receive_qty_remaining
	//				WHERE simprid='$simprid'";
	//		$result = $this->db->query($query);
	//		return $result->result_array();
	//	}
	public function product_inventory_insert($pcode, $sipoid, $factoryid, $sn, $description, $pdate, $iqty, $warranty)
	{
		date_default_timezone_set('Asia/Dhaka');
		$pdate = date("Y-m-d", strtotime($pdate));
		$d = date('Y-m-d');
		$t = date("H:i:s");
		$d1 = str_replace("-", "", $d);
		$t1 = str_replace(":", "", $t);
		$ccid = $d1 . $t1;

		$sql1a = "SELECT MAX(pcidnum) AS pcidnum FROM product_asset_code WHERE pafid='$factoryid' AND pcode='$pcode' ";
		$query1a = $this->db->query($sql1a);
		$result1a = $query1a->result_array();
		foreach ($result1a as $row) {
			$pcidnum = $row['pcidnum'];
			$pcidnum = $pcidnum + 1;
		}

		$pacode = $factoryid . '-' . $pcode . '-' . $pcidnum;

		$sqla = "INSERT INTO product_asset_code VALUES ('$pacode','$factoryid','$pcode','$pcidnum')";

		$sql = "INSERT INTO product_inventory VALUES ('$ccid','$sipoid','$factoryid','$pacode','$sn','$description','$iqty','$warranty','$pdate','','','','0')";

		$sqll = "INSERT INTO product_ihistory_insert VALUES ('$ccid','$pacode','$factoryid','1')";


		$querya = $this->db->query($sqla);
		$query = $this->db->query($sql);
		return $queryl = $this->db->query($sqll);
	}
	public function product_inventory_list()
	{
		$query = "SELECT  product_inventory.pacode,product_ihistory_insert.factoryid,
		supplier_insert.supplier,
		mpr_insert_id.mprid,sn,description,item,
		iqty,puom,warranty,price,pprice,
		po_insert.pdate,adate,rdate,
		ddate,dremarks,item_release_type_insert.irid,releasetype,
		pcname,pname,
		pgname,psgname,product_inventory.userid,user.name,departmentname,pastatus
		FROM product_inventory 
		JOIN po_insert ON po_insert.sipoid=product_inventory.sipoid
		JOIN mpr_insert ON mpr_insert.simprid=po_insert.simprid
		JOIN mpr_insert_id ON mpr_insert_id.smprid=mpr_insert.smprid
		JOIN item_insert ON item_insert.itemcode=mpr_insert.model
		JOIN supplier_insert ON supplier_insert.supplierid=po_insert.supplier
		JOIN product_uom_insert ON product_uom_insert.puomid=mpr_insert.uom
		JOIN product_insert ON product_insert.pcode=mpr_insert.mpcode
		JOIN product_category_insert ON product_category_insert.pccode=product_insert.pccode
		JOIN  product_group_insert ON product_group_insert.pgid=product_insert.pgid
		JOIN  product_subgroup_insert ON product_subgroup_insert.psgid=product_insert.psgid
		JOIN  product_ihistory_insert ON product_ihistory_insert.pacode=product_inventory.pacode
		LEFT JOIN item_release_insert ON item_release_insert.pacode=product_inventory.pacode
		LEFT JOIN item_release_type_insert ON item_release_type_insert.irid=item_release_insert.irid
		LEFT JOIN user ON user.userid=product_inventory.userid
		LEFT JOIN department ON department.deptid=user.departmentid
		WHERE product_ihistory_insert.phstatus='1'";
		$result = $this->db->query($query);
		return $result->result_array();
	}
	public function product_transfer($pacode)
	{
		$query = "SELECT  ifid,pacode FROM product_inventory WHERE pacode='$pacode'";
		$result = $this->db->query($query);
		return $result->result_array();
	}
}
