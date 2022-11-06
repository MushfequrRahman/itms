<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_Model extends CI_Model {

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
	
	
	public function all_order_count()
	{
		$sql1="SELECT count(ordername) AS ordercount FROM ordername WHERE ship_status=0";
		$query1=$this->db->query($sql1);
		$result=$query1->result_array();
		return $result;
	}
	public function all_colour_count()
	{
		$sql1="SELECT count(ordername) AS colourcount FROM colours WHERE ship_status=0";
		$query1=$this->db->query($sql1);
		$result=$query1->result_array();
		return $result;
	}
	public function all_ppsample_count()
	{
		$sql1="SELECT count(colourid) AS ppcount FROM ppsample WHERE status=0";
		$query1=$this->db->query($sql1);
		$result=$query1->result_array();
		return $result;
	}
	public function tna_status()
	{
		//$sql="SELECT * FROM jobno JOIN colours ON jobno.jobno=colours.jobno";
		//$sql="SELECT ordername.buyername,ordername.jobno,ordername.stylename,ordername.ordername,ordername.odate,colours.colourname,(ppsample.cdate) AS ppcdate,ppsample.pprdate,ppsample.pprtime,(fabreceive.cdate) AS fabcdate,fabreceive.fabrdate,accessories.accdate,accessories.accrdate,(tcutting.cdate) AS tcdate,tcutting.tcrdate,(tprinting.cdate) AS tpcdate,tprinting.tprdate,(tinput.cdate) AS ticdate,tinput.tirdate,(toutput.cdate) AS tocdate,toutput.tordate,trailreport.trrdate,trailreport.trrtime,(bcutting.cdate) AS bcdate,(bcutting.bcrdate) AS bcrdate
//		FROM ordername LEFT JOIN colours ON ordername.ordername=colours.ordername
//LEFT JOIN jobno ON jobno.jobno=colours.jobno
//LEFT JOIN ppsample ON ppsample.ppsid=colours.cid
//LEFT JOIN fabreceive ON fabreceive.jobno=jobno.jobno
//LEFT JOIN accessories ON accessories.aid=colours.cid
//LEFT JOIN tcutting ON tcutting.tcid=colours.cid
//LEFT JOIN tprinting ON tprinting.tpid=colours.cid
//LEFT JOIN tinput ON tinput.tiid=colours.cid
//LEFT JOIN toutput ON toutput.toid=colours.cid
//LEFT JOIN trailreport ON trailreport.trid=colours.cid
//LEFT JOIN bcutting ON bcutting.bcid=colours.cid";
//$sql="SELECT ordername.buyername,ordername.jobno,ordername.stylename,ordername.ordername,ordername.odate,colours.fsdate,DATEDIFF(fsdate,odate) AS ldtime,colours.colourname,(ppsample.ppcdate) AS ppcdate,ppsample.pprdate,ppsample.pprtime,
//DATEDIFF(pprdate,ppcdate) AS ppdif,(fabreceive.fabcdate) AS fabcdate,fabreceive.fabrdate,DATEDIFF(fabrdate,fabcdate) AS fabdif,accessories.accdate,accessories.accrdate,DATEDIFF(accrdate,accdate) AS accdif,(tcutting.tccdate) AS tccdate,tcutting.tcrdate,DATEDIFF(tcrdate,tccdate) AS tcdif,(tprinting.tpcdate) AS tpcdate,tprinting.tprdate,DATEDIFF(tprdate,tpcdate) AS tpdif,(tinput.ticdate) AS ticdate,tinput.tirdate,DATEDIFF(tirdate,ticdate) AS tidif,(toutput.tocdate) AS tocdate,toutput.tordate,DATEDIFF(tordate,tocdate) AS todif,trailreport.trrdate,trailreport.trrtime,DATEDIFF(trrdate,tordate) AS tsdif,(bcutting.bccdate) AS bccdate,(bcutting.bcrdate) AS bcrdate,DATEDIFF(bcrdate,bccdate) AS bcdif
//		FROM ordername LEFT JOIN colours ON ordername.ordername=colours.ordername
//LEFT JOIN jobno ON jobno.jobno=colours.jobno
//LEFT JOIN ppsample ON ppsample.ppsid=colours.cid
//LEFT JOIN fabreceive ON fabreceive.jobno=jobno.jobno
//LEFT JOIN accessories ON accessories.aid=colours.cid
//LEFT JOIN tcutting ON tcutting.tcid=colours.cid
//LEFT JOIN tprinting ON tprinting.tpid=colours.cid
//LEFT JOIN tinput ON tinput.tiid=colours.cid
//LEFT JOIN toutput ON toutput.toid=colours.cid
//LEFT JOIN trailreport ON trailreport.trid=colours.cid
//LEFT JOIN bcutting ON bcutting.bcid=colours.cid";
$sql="SELECT ordername.buyername,ordername.jobno,ordername.stylename,ordername.ordername,ordername.odate,colours.fsdate,colours.fsqty,colours.emblishment,colours.type,DATEDIFF(fsdate,odate) AS ldtime,colours.colourname,(ppsample.ppcdate) AS ppcdate,ppsample.pprdate,ppsample.pprtime,
DATEDIFF(pprdate,ppcdate) AS ppdif,(fabreceive.fabcdate) AS fabcdate,fabreceive.fabrdate,DATEDIFF(fabrdate,fabcdate) AS fabdif,accessories.accdate,accessories.accrdate,DATEDIFF(accrdate,accdate) AS accdif,(tcutting.tccdate) AS tccdate,tcutting.tcrdate,DATEDIFF(tcrdate,tccdate) AS tcdif,(tprinting.tpcdate) AS tpcdate,tprinting.tprdate,DATEDIFF(tprdate,tpcdate) AS tpdif,(tinput.ticdate) AS ticdate,tinput.tirdate,DATEDIFF(tirdate,ticdate) AS tidif,(toutput.tocdate) AS tocdate,toutput.tordate,DATEDIFF(tordate,tocdate) AS todif,trailreport.trrdate,trailreport.trrtime,DATEDIFF(trrdate,tordate) AS tsdif,(bcutting.bccdate) AS bccdate,(bcutting.bcrdate) AS bcrdate,DATEDIFF(bcrdate,bccdate) AS bcdif
		FROM ordername LEFT JOIN colours ON ordername.ordername=colours.ordername
LEFT JOIN jobno ON jobno.jobno=colours.jobno
LEFT JOIN ppsample ON ppsample.ppsid=colours.cid
LEFT JOIN fabreceive ON fabreceive.fabid=colours.cid
LEFT JOIN accessories ON accessories.aid=colours.cid
LEFT JOIN tcutting ON tcutting.tcid=colours.cid
LEFT JOIN tprinting ON tprinting.tpid=colours.cid
LEFT JOIN tinput ON tinput.tiid=colours.cid
LEFT JOIN toutput ON toutput.toid=colours.cid
LEFT JOIN trailreport ON trailreport.trid=colours.cid
LEFT JOIN bcutting ON bcutting.bcid=colours.cid
WHERE ordername.ship_status=0";
		$query=$this->db->query($sql);
		
		
		return $query->result_array();
		
	}
	
	
	
}
