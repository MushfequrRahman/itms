<style>
.error{color:red;}
em{color:red;}
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
                  						<h3 class="box-title">Product Category Insert</h3>
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
				 						<form role="form" autocomplete="off" action="<?php echo base_url();?>Dashboard/product_category_insert" method="post" enctype="multipart/form-data">
                  							<!-- <div class="form-group">
												<label>Code</label>
												<input type="text" class="form-control" name="pccode" placeholder="Enter Product Category Code">
                    							<?php echo form_error('pccode', '<div class="error">', '</div>');  ?>
											</div> -->
                							<div class="form-group">
												<label>Name</label>
												<input type="text" class="form-control" name="pcname" placeholder="Enter Product Category Name">
                    							<?php echo form_error('pcname', '<div class="error">', '</div>');  ?>
											</div>
                							<div class="box-footer text-center">
												<input type="submit" class="btn btn-primary" name="submit" value="Submit" />
											</div>
										</form>
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


