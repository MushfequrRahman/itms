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
.bg-success{padding:15px;}
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
                  						<h3 class="box-title">CSR Details List</h3>
									</div>
                					<div class="box-body">
             							<div id="container">
                     					<?php 
											foreach($cl1 as $row)
												{ 
										?>
                							<div class="row">
                            					<div class="col-md-12">
                            						<div class="row">
                            							<div class="col-md-12">
                                                        	<p class="text-left"><strong><?php echo "DATE:".date("d-m-Y", strtotime($row['sdate']));?></strong></p>
                            								<p class="text-center"><strong><?php echo $row['csr'];?></strong></p>
                            							</div>
                            							<div class="col-md-12">
                            								<p class="text-center"><?php echo $row['csrdetails'];?></p>
                            							</div>
                            						</div>
                            					</div>
                            				</div>       
                            
                           				<?php 
												} 
										?>
                           					<div class="row">
                            					<div class="col-md-12">
                         							<div class="page-header">
                         								<h4 class="text-center bg-success"><strong>Gallery</strong></h4> 
                         							</div>
                                                </div>
                            						<?php 
														foreach($cl2 as $row)
															{ 
													?>
                												<div class="col-md-3">
                													<div class="thumbnail">
                            											<img src="<?php echo base_url().'assets/uploads/csr/'.$row['csrimfile'];?>" alt="event image">
                            										</div>   
                            									</div>
                           							<?php 
															} 
													?>
                           					</div> 
                         					<div class="row"> 
                         						<div class="col-md-12">
                         							<div class="page-header">
                         								<h4 class="text-center bg-success"><strong>History</strong></h4> 
                         							</div>
                                                </div>
                          						<?php 
													foreach($cl3 as $row)
														{ 
												?>
                											<div class="col-md-12">
                                                            	<blockquote class="blockquote">
                            										<p><?php echo $row['csrcomments'];?></p>
                                                                    <footer class="blockquote-footer text-right"><?php echo "DATE:".date("d-m-Y", strtotime($row['csrcodate']));?></footer>
                                                                </blockquote>
                            								</div>
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
				</div>
			</section>
		</div>
	</div>
</body>
</html>
