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
th,td{font-size:14px;text-align:center;}
.border-div{border:1px solid #cccccc; margin:0 2px; padding:4px;}
/*.thumbnail{border:none;}*/
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
										<h3 class="box-title">CSR List</h3>
									</div>
									<div class="box-body">
										<div id="container">
											<?php 
												foreach($cl as $row)
													{ 
											?>
														<div class="row border-div">
															<div class="col-md-6">
																<div class="row">
																	<div class="col-md-3">
																		<p class="text-left"><strong><?php echo date("d-m-Y", strtotime($row['sdate']));?></strong></p>
																	</div>
                                                                    <div class="row">
																		<div class="col-md-9">
																			<a href="<?php echo base_url();?>Dashboard/csr_details_list/<?php echo $bn=$row['csrid'];?>"><p class="text-center"><strong><?php echo $row['csr'];?></strong></p></a>
																		</div>
                                                                    </div>
                                                                    <div class="row">
																		<div class="col-md-12">
																			<p class="text-center"><?php echo $row['csrdetails'];?></p>
																		</div>
                                                                    </div>
																</div>
															</div>
															<div class="col-md-6">
																<div class="thumbnail">
																	<img style="height:50%;" src="<?php echo base_url().'assets/uploads/csr/'.$row['csrimfile'];?>" alt="event image">
																</div>
															</div>
														</div>       
											<?php 		} 
											?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
</body>
</html>
