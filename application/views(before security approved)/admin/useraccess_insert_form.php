<style>
.error{color:red;}
em{color:red;}
#tableData {
  
 
  text-align:center;
}
th,td{font-size:11px;text-align:center;}
</style>

<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<div class="content-wrapper">
    		<section class="content">
    			<div class="row">
        			<div class="col-md-12">
      					<div class="row">
           					<div class="col-md-12">
              					<div class="box box-danger">
     	 							<div class="box-header with-border">
                  						<h3 class="box-title">User Access Insert</h3>
										<div class="row">
											<div class="col-sm-12 col-md-12 col-lg-12">
												<?php if($responce = $this->session->flashdata('Successfully')): ?>
												<div class="text-center">
													<div class="alert alert-success text-center"><?php echo $responce;?></div>
												</div>
												<?php endif;?>
											</div>
										</div>
              						</div>
                					<div class="box-body">
				 						<form role="form" autocomplete="off" action="<?php echo base_url();?>Dashboard/useraccess_insert" method="post" enctype="multipart/form-data">
                 							<div class="form-group">
												<label>User ID<em>*</em></label>
												<input type="text" class="form-control" name="userid" placeholder="Enter User ID">
                    							<?php echo form_error('userid', '<div class="error">', '</div>');  ?>
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
														<td><input type="checkbox" name="bsre" value="1"></td>
                    									<td><input type="checkbox" name="bswr" value="1"></td>
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
														<td><input type="checkbox" name="tsre" value="1"></td>
                    									<td><input type="checkbox" name="tswr" value="1"></td>
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
														<td><input type="checkbox" name="lsre" value="1"></td>
                    									<td><input type="checkbox" name="lswr" value="1"></td>
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
														<td><input type="checkbox" name="nare" value="1"></td>
                    									<td><input type="checkbox" name="nawr" value="1"></td>
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
														<td><input type="checkbox" name="pare" value="1"></td>
                    									<td><input type="checkbox" name="pawr" value="1"></td>
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
														<td><input type="checkbox" name="eare" value="1"></td>
                    									<td><input type="checkbox" name="eawr" value="1"></td>
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
														<td><input type="checkbox" name="trre" value="1"></td>
                    									<td><input type="checkbox" name="trwr" value="1"></td>
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
														<td><input type="checkbox" name="swotre" value="1"></td>
                    									<td><input type="checkbox" name="swotwr" value="1"></td>
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
														<td><input type="checkbox" name="eore" value="1"></td>
                    									<td><input type="checkbox" name="eowr" value="1"></td>
                									</tr>
                								</tbody>
                							</table>
                                            <table id="tableData" class="table table-hover table-bordered">
              									<thead style="background:#91b9e6;">
              										<tr>
                                                    	<th colspan="4">MATERIAL MOVEMENT</th>
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
														<td><input type="checkbox" name="mmre" value="1"></td>
                    									<td><input type="checkbox" name="mmwr" value="1"></td>
                                                        <td><input type="checkbox" name="mmallure" value="1"></td>
                                                        <td><input type="checkbox" name="mmchac" value="1"></td>
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
														<td><input type="checkbox" name="hrre" value="1"></td>
                    									<td><input type="checkbox" name="hrwr" value="1"></td>
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
														<td><input type="checkbox" name="care" value="1"></td>
                    									<td><input type="checkbox" name="cawr" value="1"></td>
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
														<td><input type="checkbox" name="capre" value="1"></td>
                    									<td><input type="checkbox" name="capwr" value="1"></td>
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
														<td><input type="checkbox" name="scre" value="1"></td>
                    									<td><input type="checkbox" name="scwr" value="1"></td>
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
														<td><input type="checkbox" name="dcre" value="1"></td>
                    									<td><input type="checkbox" name="dcwr" value="1"></td>
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
														<td><input type="checkbox" name="sbre" value="1"></td>
                    									<td><input type="checkbox" name="sbwr" value="1"></td>
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
														<td><input type="checkbox" name="prre" value="1"></td>
                    									<td><input type="checkbox" name="prwr" value="1"></td>
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
														<td><input type="checkbox" name="vtre" value="1"></td>
                    									<td><input type="checkbox" name="vtwr" value="1"></td>
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
														<td><input type="checkbox" name="ihre" value="1"></td>
                    									<td><input type="checkbox" name="irwr" value="1"></td>
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
														<td><input type="checkbox" name="odre" value="1"></td>
                    									<!--<td><input type="checkbox" name="irwr" value="1"></td>-->
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
														<td><input type="checkbox" name="bldgre" value="1"></td>
                    									<td><input type="checkbox" name="bldgwr" value="1"></td>
                									</tr>
                								</tbody>
                							</table>
                                            <table id="tableData" class="table table-hover table-bordered">
              									<thead style="background:#91b9e6;">
              										<tr>
                                                    	<th colspan="2">RECRUITMENT</th>
                                                    </tr>
                									<tr>
                  										<th>RECRUITMENT READ</th>
                  										<th>RECRUITMENT WRITE</th>
                  									</tr>
                								</thead>
                								<tbody>
                									<tr>
														<td><input type="checkbox" name="recruitmentre" value="1"></td>
                    									<td><input type="checkbox" name="recruitmentwr" value="1"></td>
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
														<td><input type="checkbox" name="irre" value="1"></td>
                    									<td><input type="checkbox" name="irwr" value="1"></td>
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
														<td><input type="checkbox" name="baslre" value="1"></td>
                    									<td><input type="checkbox" name="baslwr" value="1"></td>
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
														<td><input type="checkbox" name="adminre" value="1"></td>
                    									<td><input type="checkbox" name="adminwr" value="1"></td>
                									</tr>
                								</tbody>
                							</table>
                						</div>
                						<div class="box-footer text-center">
                  							<input type="submit" class="btn btn-primary" name="submit" value="Submit" />
                						</div>
				 						</form>
               
              </div>
              <!--/.box -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->

        
          <!-- /.box -->
        </div>
        <!-- /.col -->

        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  
</div>
<!-- ./wrapper -->


</body>
</html>


