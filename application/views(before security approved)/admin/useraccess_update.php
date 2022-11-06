<style type="text/css">

.paging-nav {
  text-align: right;
  padding-top: 2px;
}

.paging-nav a {
  margin: auto 1px;
  text-decoration: none;
  display: inline-block;
  padding: 1px 7px;
  background: #91b9e6;
  color: white;
  border-radius: 3px;
}

.paging-nav .selected-page {
  background: #187ed5;
  font-weight: bold;
}

.paging-nav,
#tableData {
  
 
  text-align:center;
}
th,td{font-size:12px;text-align:center;}
</style>
<script>
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
</script>
<body>
<div class="wrapper">



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
    <!-- Main content -->
    <section class="content">
<div id="myModal" class="modal fade">
    <div class="modal-dialog" style="width:1350px;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">User Access Update</h5>
                <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
                <?php /*?><a onclick="location.href='<?php echo base_url();?>Dashboard/cap_insert_form';" data-dismiss="modal">&times;</a><?php */?>
                <button type="button" onClick="location.href='<?php echo base_url();?>Dashboard/useraccess_update_form';" class="close" data-dismiss="modal">&times;</button>
                <?php /*?><a href="<?php echo base_url();?>Dashboard/cap_insert_form" class="close" data-dismiss="modal">&times </a><?php */?>
            </div>
            <div class="modal-body">
                <!-- /.box-header -->
                <?php
                foreach($ual as $row)
				{ ?>
            <div class="box-body table-responsive no-padding">
             	<form role="form" autocomplete="off" action="<?php echo base_url();?>Dashboard/useraccesslup" method="post" enctype="multipart/form-data">
                
                 							<div class="form-group">
												
												<input type="hidden" class="form-control" name="userid" value="<?php echo $row['userid'];?>">
                    							
											</div>
                							<table id="tableData" class="table table-hover table-bordered">
              									<thead style="background:#91b9e6;">
              										<tr>
                                                    	<th colspan="2">BASIC INFO</th>
                                                    </tr>
                									<tr>
                  										<th>BASCI INFO READ</th>
                  										<th>BASCI INFO WRITE</th>
                  									</tr>
                								</thead>
                								<tbody>
                									<tr>
                                                    <?php if($row['basicinfo_read']==1)
													{?>
														<td><input type="checkbox" name="bsre" checked="checked" value="<?php echo $row['basicinfo_read'];?>"></td>
                                                        <?php
													}
													else
													{
													?>
                                                    	<td><input type="checkbox" name="bsre" value="1"></td>
                                                    <?php
													}
													?>
                                                    <?php if($row['basicinfo_write']==1)
													{?>
                    									<td><input type="checkbox" name="bswr" checked="checked" value="<?php echo $row['basicinfo_write'];?>"></td>
                                                     <?php
													}
													else
													{
													?>
                                                    <td><input type="checkbox" name="bswr" value="1"></td>
                                                    <?php
													}
													?>
                									</tr>
                								</tbody>
                							</table>
                							<table id="tableData" class="table table-hover table-bordered">
              									<thead style="background:#91b9e6;">
              										<tr>
                                                    	<th colspan="2">TASK TRACKER</th>
                                                    </tr>
                									<tr>
                 	 									<th>TASK TRACKER READ</th>
                  										<th>TASK TRACKER WRITE</th>
                  									</tr>
                								</thead>
                								<tbody>
                									<tr>
                                                    <?php if($row['tasktracker_read']==1)
													{?>
														<td><input type="checkbox" name="tsre" checked="checked" value="<?php echo $row['tasktracker_read'];?>"></td>
                                                    <?php
													}
													else
													{
													?>
                                                    	<td><input type="checkbox" name="tsre" value="1"></td>
                                                    <?php
													}
													?>
                                                     <?php if($row['tasktracker_write']==1)
													{?>
                    									<td><input type="checkbox" name="tswr" checked="checked" value="<?php echo $row['tasktracker_write'];?>"></td>
                                                    <?php
													}
													else
													{
													?>
                                                      	<td><input type="checkbox" name="tswr" value="1"></td>
                                                     <?php
													}
													?>
                									</tr>
                								</tbody>
                							</table>
											<table id="tableData" class="table table-hover table-bordered">
              									<thead style="background:#91b9e6;">
              										<tr>
                                                    	<th colspan="2">LICENSE TRACKER</th>
                                                    </tr>
                									<tr>
                  										<th>LICENSE TRACKER READ</th>
                  										<th>LICENSE TRACKER WRITE</th>
                  									</tr>
                								</thead>
                								<tbody>
                									<tr>
                                                    <?php if($row['licensetracker_read']==1)
													{?>
														<td><input type="checkbox" name="lsre" checked="checked" value="<?php echo $row['licensetracker_read'];?>"></td>
                                                    <?php
													}
													else
													{
														?>
                                                     	<td><input type="checkbox" name="lsre" value="1"></td>
                                                     <?php
													}
													?>
                                                    <?php if($row['licensetracker_write']==1)
													{?>
                    									<td><input type="checkbox" name="lswr" checked="checked" value="1"></td>
                                                        <?php
													}
													else
													{
													?>
                                                    	<td><input type="checkbox" name="lswr" value="1"></td>
                                                     <?php
													}
													?>
                									</tr>
                								</tbody>
                							</table>
                                            <table id="tableData" class="table table-hover table-bordered">
              									<thead style="background:#91b9e6;">
              										<tr>
                                                    	<th colspan="2">NOTICE ALBUM</th>
                                                    </tr>
                									<tr>
                  										<th>NOTICE ALBUM READ</th>
                  										<th>NOTICE ALBUM WRITE</th>
                  									</tr>
                								</thead>
                								<tbody>
                									<tr>
                                                    <?php if($row['noticealbum_read']==1)
													{?>
														<td><input type="checkbox" name="nare" checked="checked" value="<?php echo$row['noticealbum_read'];?>"></td>
                                                     <?php
													}
													else
													{
													?>
                                                    	<td><input type="checkbox" name="nare" value="1"></td>
                                                    <?php
													}
													?>
                                                     <?php if($row['noticealbum_write']==1)
													{?>
                    									<td><input type="checkbox" name="nawr" checked="checked" value="<?php echo $row['noticealbum_write'];?>"></td>
                                                     <?php
													}
													else
													{
													?>
                                                    <td><input type="checkbox" name="nawr" value="1"></td>
                                                    <?php
													}
													?>
                									</tr>
                								</tbody>
                							</table>
                                            <table id="tableData" class="table table-hover table-bordered">
              									<thead style="background:#91b9e6;">
              										<tr>
                                                    	<th colspan="2">POLICY ALBUM</th>
                                                    </tr>
                									<tr>
                  										<th>POLICY ALBUM READ</th>
                  										<th>POLICY ALBUM WRITE</th>
                  									</tr>
                								</thead>
                								<tbody>
                									<tr>
                                                    <?php if($row['policyalbum_read']==1)
													{?>
														<td><input type="checkbox" name="pare" checked="checked" value="<?php echo $row['policyalbum_read'];?>"></td>
                                                     <?php
													}
													else
													{
													?>
                                                    <td><input type="checkbox" name="pare" value="1"></td>
                                                    <?php
													}
													?>
                                                    <?php if($row['policyalbum_write']==1)
													{?>
                    									<td><input type="checkbox" name="pawr" checked="checked" value="<?php echo $row['policyalbum_write'];?>"></td>
                                                     <?php
													}
													else
													{
													?>
                                                    	<td><input type="checkbox" name="pawr" value="1"></td>
                                                    <?php
													}
													?>
                									</tr>
                								</tbody>
                							</table>
                                            <table id="tableData" class="table table-hover table-bordered">
              									<thead style="background:#91b9e6;">
              										<tr>
                                                    	<th colspan="2">EVENT ALBUM</th>
                                                    </tr>
                									<tr>
                  										<th>EVENT ALBUM READ</th>
                  										<th>EVENT ALBUM WRITE</th>
                  									</tr>
                								</thead>
                								<tbody>
                									<tr>
                                                     <?php if($row['eventalbum_read']==1)
													{?>
														<td><input type="checkbox" name="eare" checked="checked" value="<?php echo $row['eventalbum_read'];?>"></td>
                                                     <?php
													}
													else
													{
													?>
                                                    <td><input type="checkbox" name="eare" value="1"></td>
                                                    <?php
													}
													?>
                                                    <?php if($row['eventalbum_write']==1)
													{?>
                    									<td><input type="checkbox" name="eawr" checked="checked" value="<?php echo $row['eventalbum_write'];?>"></td>
                                                    <?php
													}
													else
													{
													?>
                                                    	<td><input type="checkbox" name="eawr" value="1"></td>
                                                    <?php
													}
													?>
                									</tr>
                								</tbody>
                							</table>
                                            <table id="tableData" class="table table-hover table-bordered">
              									<thead style="background:#91b9e6;">
              										<tr>
                                                    	<th colspan="2">TRAINING MANAGEMENT</th>
                                                    </tr>
                									<tr>
                  										<th>TRAINING READ</th>
                  										<th>TRAINING WRITE</th>
                  									</tr>
                								</thead>
                								<tbody>
                									<tr>
                                                    <?php if($row['training_read']==1)
													{?>
														<td><input type="checkbox" name="trre" checked="checked" value="<?php echo $row['training_read'];?>"></td>
                                                     <?php
													}
													else
													{
													?>
                                                    	<td><input type="checkbox" name="trre" value="1"></td>
                                                    <?php
													}
													?>
                                                    <?php if($row['training_write']==1)
													{?>
                    									<td><input type="checkbox" name="trwr" checked="checked" value="<?php echo $row['training_write'];?>"></td>
                                                    <?php
													}
													else
													{
													?>
                                                    	<td><input type="checkbox" name="trwr" value="1"></td>
                                                    <?php
													}
													?>
                									</tr>
                								</tbody>
                							</table>
                                            <table id="tableData" class="table table-hover table-bordered">
              									<thead style="background:#91b9e6;">
              										<tr>
                                                    	<th colspan="2">SWOT</th>
                                                    </tr>
                									<tr>
                  										<th>SWOT READ</th>
                  										<th>SWOT WRITE</th>
                  									</tr>
                								</thead>
                								<tbody>
                									<tr>
                                                    <?php if($row['swot_read']==1)
													{?>
														<td><input type="checkbox" name="swotre" checked="checked" value="<?php echo $row['swot_read'];?>"></td>
                                                    <?php
													}
													else
													{
													?>
                                                    	<td><input type="checkbox" name="swotre" value="1"></td>
                                                    <?php
													}
													?>
                                                     <?php if($row['swot_write']==1)
													{?>
                    									<td><input type="checkbox" name="swotwr" checked="checked" value="<?php echo $row['swot_write'];?>"></td>
                                                    <?php
													}
													else
													{
													?>
                                                    	<td><input type="checkbox" name="swotwr" value="1"></td>
                                                    <?php
													}
													?>
                									</tr>
                								</tbody>
                							</table>
                                            <table id="tableData" class="table table-hover table-bordered">
              									<thead style="background:#91b9e6;">
              										<tr>
                                                    	<th colspan="2">EMPLOYEE OBSERVATION</th>
                                                    </tr>
                									<tr>
                  										<th>EMPLOYEE OBSERVATION READ</th>
                  										<th>EMPLOYEE OBSERVATION WRITE</th>
                  									</tr>
                								</thead>
                								<tbody>
                									<tr>
                                                     <?php if($row['eobservation_read']==1)
													{?>
														<td><input type="checkbox" name="eore" checked="checked" value="<?php echo $row['eobservation_read'];?>"></td>
                                                     <?php
													}
													else
													{
													?>
                                                    	<td><input type="checkbox" name="eore" value="1"></td>
                                                    <?php
													}
													?>
                                                    <?php if($row['eobservation_write']==1)
													{?>
                    									<td><input type="checkbox" name="eowr" checked="checked" value="1"></td>
                                                    <?php
													}
													else
													{
													?>
                                                    	<td><input type="checkbox" name="eowr" value="1"></td>
                                                    <?php
													}
													?>
                									</tr>
                								</tbody>
                							</table>
                                            <table id="tableData" class="table table-hover table-bordered">
              									<thead style="background:#91b9e6;">
              										<tr>
                                                    	<th colspan="5">MATERIAL MOVEMENT</th>
                                                    </tr>
                									<tr>
                  										<th>MATERIAL MOVEMENT READ</th>
                  										<th>MATERIAL MOVEMENT WRITE</th>
                                                        <th>MATERIAL MOVEMENT All UNIT READ</th>
                                                        <th>MATERIAL MOVEMENT CHALLAN CREATE</th>
                  									</tr>
                								</thead>
                								<tbody>
                									<tr>
                                                    <?php if($row['materialmovement_read']==1)
													{?>
														<td><input type="checkbox" name="mmre" checked="checked" value="<?php echo $row['materialmovement_read'];?>"></td>
                                                    <?php
													}
													else
													{
													?>
                                                    	<td><input type="checkbox" name="mmre" value="1"></td>
                                                    <?php
													}
													?>
                                                    <?php if($row['materialmovement_write']==1)
													{?>
                    									<td><input type="checkbox" name="mmwr" checked="checked" value="<?php echo $row['materialmovement_write'];?>"></td>
                                                    <?php
													}
													else
													{
													?>
                                                    	<td><input type="checkbox" name="mmwr" value="1"></td>
                                                    <?php
													}
													?>
                                                    <?php if($row['materialmovement_allunit_read']==1)
													{?>
                    									<td><input type="checkbox" name="mmallure" checked="checked" value="<?php echo $row['materialmovement_allunit_read'];?>"></td>
                                                    <?php
													}
													else
													{
													?>
                                                    	<td><input type="checkbox" name="mmallure" value="1"></td>
                                                    <?php
													}
													?>
                                                    <?php if($row['materialmovement_challan_create']==1)
													{?>
                    									<td><input type="checkbox" name="mmchac" checked="checked" value="<?php echo $row['materialmovement_challan_create'];?>"></td>
                                                    <?php
													}
													else
													{
													?>
                                                    	<td><input type="checkbox" name="mmchac" value="1"></td>
                                                    <?php
													}
													?>
                									</tr>
                								</tbody>
                							</table>
                                            <table id="tableData" class="table table-hover table-bordered">
              									<thead style="background:#91b9e6;">
              										<tr>
                                                    	<th colspan="2">HR</th>
                                                    </tr>
                									<tr>
                  										<th>HR READ</th>
                  										<th>HR WRITE</th>
                  									</tr>
                								</thead>
                								<tbody>
                									<tr>
                                                    <?php if($row['hr_read']==1)
													{?>
														<td><input type="checkbox" name="hrre" checked="checked" value="<?php echo $row['hr_read'];?>"></td>
                                                    <?php
													}
													else
													{
													?>
                                                    	<td><input type="checkbox" name="hrre" value="1"></td>
                                                    <?php
													}
													?>
                                                    <?php if($row['hr_write']==1)
													{?>
                    									<td><input type="checkbox" name="hrwr" checked="checked" value="<?php echo $row['hr_write'];?>"></td>
                                                    <?php
													}
													else
													{
													?>
                                                    	<td><input type="checkbox" name="hrwr" value="1"></td>
                                                    <?php
													}
													?>
                									</tr>
                								</tbody>
                							</table>
                                            <table id="tableData" class="table table-hover table-bordered">
              									<thead style="background:#91b9e6;">
              										<tr>
                                                    	<th colspan="2">CALENDAR</th>
                                                    </tr>
                									<tr>
                  										<th>CALENDAR READ</th>
                  										<th>CALENDAR WRITE</th>
                  									</tr>
                								</thead>
                								<tbody>
                									<tr>
                                                    <?php if($row['calendar_read']==1)
													{?>
														<td><input type="checkbox" name="care" checked="checked" value="<?php $row['calendar_read'];?>"></td>
                                                    <?php
													}
													else
													{
													?>
                                                    	<td><input type="checkbox" name="care" value="1"></td>
                                                    <?php
													}
													?>
                                                    <?php if($row['calendar_write']==1)
													{?>
                    									<td><input type="checkbox" name="cawr" checked="checked" value="<?php echo $row['calendar_write'];?>"></td>
                                                    <?php
													}
													else
													{
													?>
                                                    <td><input type="checkbox" name="cawr" value="1"></td>
                                                    <?php
													}
													?>
                									</tr>
                								</tbody>
                							</table>
                                            <table id="tableData" class="table table-hover table-bordered">
              									<thead style="background:#91b9e6;">
              										<tr>
                                                    	<th colspan="2">COMPLIANCE REPORT-CAP</th>
                                                    </tr>
                									<tr>
                  										<th>COMPLIANCE REPORT-CAP READ</th>
                  										<th>COMPLIANCE REPORT-CAP WRITE</th>
                  									</tr>
                								</thead>
                								<tbody>
                									<tr>
                                                    <?php if($row['compliancecap_read']==1)
													{?>
														<td><input type="checkbox" name="capre" checked="checked" value="<?php echo $row['compliancecap_read'];?>"></td>
                                                     <?php
													}
													else
													{
													?>
                                                    	<td><input type="checkbox" name="capre" value="1"></td>
                                                    <?php
													}
													?>
                                                    <?php if($row['compliancecap_write']==1)
													{?>
                    									<td><input type="checkbox" name="capwr" checked="checked" value="<?php echo $row['compliancecap_write'];?>"></td>
                                                    <?php
													}
													else
													{
													?>
                                                    	<td><input type="checkbox" name="capwr" value="1"></td>
                                                    <?php
													}
													?>
                									</tr>
                								</tbody>
                							</table>
                                            <table id="tableData" class="table table-hover table-bordered">
              									<thead style="background:#91b9e6;">
              										<tr>
                                                    	<th colspan="2">SCORE CARD</th>
                                                    </tr>
                									<tr>
                  										<th>SCORE CARD READ</th>
                  										<th>SCORE CARD WRITE</th>
                  									</tr>

                								</thead>
                								<tbody>
                									<tr>
                                                     <?php if($row['scorecard_read']==1)
													{?>
														<td><input type="checkbox" name="scre" checked="checked" value="<?php echo $row['scorecard_read'];?>"></td>
                                                    <?php
													}
													else
													{
													?>
                                                    	<td><input type="checkbox" name="scre" value="1"></td>
                                                    <?php
													}
													?>
                                                    <?php if($row['scorecard_write']==1)
													{?>
                    									<td><input type="checkbox" name="scwr" checked="checked" value="<?php echo $row['scorecard_write'];?>"></td>
                                                    <?php
													}
													else
													{
													?>
                                                    	<td><input type="checkbox" name="scwr" value="1"></td>
                                                    <?php
													}
													?>
                									</tr>
                								</tbody>
                							</table>
                                            <table id="tableData" class="table table-hover table-bordered">
              									<thead style="background:#91b9e6;">
              										<tr>
                                                    	<th colspan="2">DISCIPLINARY ACTION</th>
                                                    </tr>
                									<tr>
                  										<th>DISCIPLINARY ACTION READ</th>
                  										<th>DISCIPLINARY ACTION WRITE</th>
                  									</tr>
                								</thead>
                								<tbody>
                									<tr>
                                                    <?php if($row['dcaction_read']==1)
													{?>
														<td><input type="checkbox" name="dcre" checked="checked" value="<?php echo $row['dcaction_read'];?>"></td>
                                                    <?php
													}
													else
													{
													?>
                                                    	<td><input type="checkbox" name="dcre" value="1"></td>
                                                    <?php
													}
													?>
                                                    <?php if($row['dcaction_write']==1)
													{?>
                    									<td><input type="checkbox" name="dcwr" checked="checked" value="<?php echo $row['dcaction_write'];?>"></td>
                                                    <?php
													}
													else
													{
													?>
                                                    	<td><input type="checkbox" name="dcwr" value="1"></td>
                                                    <?php
													}
													?>
                									</tr>
                								</tbody>
                							</table>
                                            <table id="tableData" class="table table-hover table-bordered">
              									<thead style="background:#91b9e6;">
              										<tr>
                                                    	<th colspan="2">SUGGESSION BOX</th>
                                                    </tr>
                									<tr>
                  										<th>SUGGESSION BOX READ</th>
                  										<th>SUGGESSION BOX WRITE</th>
                  									</tr>
                								</thead>
                								<tbody>
                									<tr>
                                                     <?php if($row['suggessionbox_read']==1)
													{?>
														<td><input type="checkbox" name="sbre" checked="checked" value="<?php echo $row['suggessionbox_read'];?>"></td>
                                                     <?php
													}
													else
													{
													?>
                                                    	<td><input type="checkbox" name="sbre" value="1"></td>
                                                    <?php
													}
													?>
                                                    <?php if($row['suggessionbox_write']==1)
													{?>
                    									<td><input type="checkbox" name="sbwr" checked="checked" value="<?php echo $row['suggessionbox_write'];?>"></td>
                                                    <?php
													}
													else
													{
													?>
                                                    	<td><input type="checkbox" name="sbwr" value="1"></td>
                                                    <?php
													}
													?>
                									</tr>
                								</tbody>
                							</table>
                                            <table id="tableData" class="table table-hover table-bordered">
              									<thead style="background:#91b9e6;">
              										<tr>
                                                    	<th colspan="2">PRODUCTION</th>
                                                    </tr>
                									<tr>
                  										<th>PRODUCTION READ</th>
                  										<th>PRODUCTION WRITE</th>
                  									</tr>
                								</thead>
                								<tbody>
                									<tr>
                                                     <?php if($row['production_read']==1)
													{?>
														<td><input type="checkbox" name="prre" checked="checked" value="<?php echo $row['production_read'];?>"></td>
                                                     <?php
													}
													else
													{
													?>
                                                    	<td><input type="checkbox" name="prre" value="1"></td>
                                                    <?php
													}
													?>
                                                    <?php if($row['production_write']==1)
													{?>
                    									<td><input type="checkbox" name="prwr" checked="checked" value="<?php echo $row['production_write'];?>"></td>
                                                    <?php
													}
													else
													{
													?>
                                                    	<td><input type="checkbox" name="prwr" value="1"></td>
                                                    <?php
													}
													?>
                									</tr>
                								</tbody>
                							</table>
                                            <table id="tableData" class="table table-hover table-bordered">
              									<thead style="background:#91b9e6;">
              										<tr>
                                                    	<th colspan="2">VEHICLE TRACKER</th>
                                                    </tr>
                									<tr>
                  										<th>VEHICLE TRACKER READ</th>
                  										<th>VEHICLE TRACKER WRITE</th>
                  									</tr>
                								</thead>
                								<tbody>
                									<tr>
                                                     <?php if($row['vehicletracker_read']==1)
													{?>
														<td><input type="checkbox" name="vtre" checked="checked" value="<?php echo $row['vehicletracker_read'];?>"></td>
                                                     <?php
													}
													else
													{
													?>
                                                    	<td><input type="checkbox" name="vtre" value="1"></td>
                                                    <?php
													}
													?>
                                                    <?php if($row['vehicletracker_write']==1)
													{?>
                    									<td><input type="checkbox" name="vtwr" checked="checked" value="<?php echo $row['vehicletracker_write'];?>"></td>
                                                    <?php
													}
													else
													{
													?>
                                                    	<td><input type="checkbox" name="vtwr" value="1"></td>
                                                    <?php
													}
													?>
                									</tr>
                								</tbody>
                							</table>
                                            <table id="tableData" class="table table-hover table-bordered">
              									<thead style="background:#91b9e6;">
              										<tr>
                                                    	<th colspan="2">IDEA HARBOR</th>
                                                    </tr>
                									<tr>
                  										<th>IDEA HARBOR READ</th>
                  										<th>IDEA HARBOR WRITE</th>
                  									</tr>
                								</thead>
                								<tbody>
                									<tr>
                                                     <?php if($row['ideaharbor_read']==1)
													{?>
														<td><input type="checkbox" name="ihre" checked="checked" value="<?php echo $row['ideaharbor_read'];?>"></td>
                                                     <?php
													}
													else
													{
													?>
                                                    	<td><input type="checkbox" name="ihre" value="1"></td>
                                                    <?php
													}
													?>
                                                    <?php if($row['ideaharbor_write']==1)
													{?>
                    									<td><input type="checkbox" name="ihwr" checked="checked" value="<?php echo $row['ideaharbor_write'];?>"></td>
                                                    <?php
													}
													else
													{
													?>
                                                    	<td><input type="checkbox" name="ihwr" value="1"></td>
                                                    <?php
													}
													?>
                									</tr>
                								</tbody>
                							</table>
                                            <table id="tableData" class="table table-hover table-bordered">
              									<thead style="background:#91b9e6;">
              										<tr>
                                                    	<th colspan="2">OD (Org.Development) Message</th>
                                                    </tr>
                									<tr>
                  										<th>OD READ</th>
                  										<!--<th>IDEA HARBOR WRITE</th>-->
                  									</tr>
                								</thead>
                								<tbody>
                									<tr>
                                                     <?php if($row['od_read']==1)
													{?>
														<td><input type="checkbox" name="odre" checked="checked" value="<?php echo $row['od_read'];?>"></td>
                                                     <?php
													}
													else
													{
													?>
                                                    	<td><input type="checkbox" name="odre" value="1"></td>
                                                    <?php
													}
													?>
                                                    
                									</tr>
                								</tbody>
                							</table>
                                            <table id="tableData" class="table table-hover table-bordered">
              									<thead style="background:#91b9e6;">
              										<tr>
                                                    	<th colspan="2">BLOOD GROUP</th>
                                                    </tr>
                									<tr>
                  										<th>BLOOD GROUP READ</th>
                  										<th>BLOOD GROUP WRITE</th>
                  									</tr>
                								</thead>
                								<tbody>
                									<tr>
                                                     <?php if($row['bloodgroup_read']==1)
													{?>
														<td><input type="checkbox" name="bldgre" checked="checked" value="<?php echo $row['bloodgroup_read'];?>"></td>
                                                     <?php
													}
													else
													{
													?>
                                                    	<td><input type="checkbox" name="bldgre" value="1"></td>
                                                    <?php
													}
													?>
                                                    <?php if($row['bloodgroup_write']==1)
													{?>
                    									<td><input type="checkbox" name="bldgwr" checked="checked" value="<?php echo $row['bloodgroup_write'];?>"></td>
                                                    <?php
													}
													else
													{
													?>
                                                    	<td><input type="checkbox" name="bldgwr" value="1"></td>
                                                    <?php
													}
													?>
                									</tr>
                								</tbody>
                							</table>
                                            <table id="tableData" class="table table-hover table-bordered">
              									<thead style="background:#91b9e6;">
              										<tr>
                                                    	<th colspan="2">RECRUITMENT GROUP</th>
                                                    </tr>
                									<tr>
                  										<th>RECRUITMENT READ</th>
                  										<th>RECRUITMENT WRITE</th>
                  									</tr>
                								</thead>
                								<tbody>
                									<tr>
                                                     <?php if($row['recruitment_read']==1)
													{?>
														<td><input type="checkbox" name="recruitmentre" checked="checked" value="<?php echo $row['recruitment_read'];?>"></td>
                                                     <?php
													}
													else
													{
													?>
                                                    	<td><input type="checkbox" name="recruitmentre" value="1"></td>
                                                    <?php
													}
													?>
                                                    <?php if($row['recruitment_write']==1)
													{?>
                    									<td><input type="checkbox" name="recruitmentwr" checked="checked" value="<?php echo $row['recruitment_write'];?>"></td>
                                                    <?php
													}
													else
													{
													?>
                                                    	<td><input type="checkbox" name="recruitmentwr" value="1"></td>
                                                    <?php
													}
													?>
                									</tr>
                								</tbody>
                							</table>
                                            <table id="tableData" class="table table-hover table-bordered">
              									<thead style="background:#91b9e6;">
              										<tr>
                                                    	<th colspan="2">INDUSTRIAL RELATION</th>
                                                    </tr>
                									<tr>
                  										<th>INDUSTRIAL RELATION READ</th>
                  										<th>INDUSTRIAL RELATION WRITE</th>
                  									</tr>
                								</thead>
                								<tbody>
                									<tr>
                                                     <?php if($row['ir_read']==1)
													{?>
														<td><input type="checkbox" name="irre" checked="checked" value="<?php echo $row['ir_read'];?>"></td>
                                                     <?php
													}
													else
													{
													?>
                                                    	<td><input type="checkbox" name="irre" value="1"></td>
                                                    <?php
													}
													?>
                                                    <?php if($row['ir_write']==1)
													{?>
                    									<td><input type="checkbox" name="irwr" checked="checked" value="<?php echo $row['ir_write'];?>"></td>
                                                    <?php
													}
													else
													{
													?>
                                                    	<td><input type="checkbox" name="irwr" value="1"></td>
                                                    <?php
													}
													?>
                									</tr>
                								</tbody>
                							</table>
                                            <table id="tableData" class="table table-hover table-bordered">
              									<thead style="background:#91b9e6;">
              										<tr>
                                                    	<th colspan="2">BASL</th>
                                                    </tr>
                									<tr>
                  										<th>BASL READ</th>
                  										<th>BASL WRITE</th>
                  									</tr>
                								</thead>
                								<tbody>
                									<tr>
                                                     <?php if($row['basl_read']==1)
													{?>
														<td><input type="checkbox" name="baslre" checked="checked" value="<?php echo $row['basl_read'];?>"></td>
                                                     <?php
													}
													else
													{
													?>
                                                    	<td><input type="checkbox" name="baslre" value="1"></td>
                                                    <?php
													}
													?>
                                                    <?php if($row['basl_write']==1)
													{?>
                    									<td><input type="checkbox" name="baslwr" checked="checked" value="<?php echo $row['basl_write'];?>"></td>
                                                    <?php
													}
													else
													{
													?>
                                                    	<td><input type="checkbox" name="baslwr" value="1"></td>
                                                    <?php
													}
													?>
                									</tr>
                								</tbody>
                							</table>
                                            <table id="tableData" class="table table-hover table-bordered">
              									<thead style="background:#91b9e6;">
              										<tr>
                                                    	<th colspan="2">ADMIN</th>
                                                    </tr>
                									<tr>
                  										<th>ADMIN READ</th>
                  										<th>ADMIN WRITE</th>
                  									</tr>
                								</thead>
                								<tbody>
                									<tr>
                                                     <?php if($row['admin_read']==1)
													{?>
														<td><input type="checkbox" name="adminre" checked="checked" value="<?php echo $row['admin_read'];?>"></td>
                                                     <?php
													}
													else
													{
													?>
                                                    	<td><input type="checkbox" name="adminre" value="1"></td>
                                                    <?php
													}
													?>
                                                    <?php if($row['admin_write']==1)
													{?>
                    									<td><input type="checkbox" name="adminwr" checked="checked" value="<?php echo $row['admin_write'];?>"></td>
                                                    <?php
													}
													else
													{
													?>
                                                    	<td><input type="checkbox" name="adminwr" value="1"></td>
                                                    <?php
													}
													?>
                									</tr>
                								</tbody>
                							</table>
                						</div>
                                       
                						<div class="box-footer text-center">
                  							<input type="submit" class="btn btn-primary" name="submit" value="Submit" />
                						</div>
				 						</form>
                                         <?php
				}
				?>
            </div>
            
            </div>
    </div>
</div>
</div>
    </div>
</div>
</body>
</html>
         
