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
                  						<h3 class="box-title">Product Returnt</h3>
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
										<form role="form" autocomplete="off" action="<?php echo base_url();?>Dashboard/product_return_insert" method="post" enctype="multipart/form-data">
                 							<div class="form-group">
												
												<input type="hidden" class="form-control" name="pacode" value="<?php echo $pacode;?>">
                    							
											</div>
                                            <?php /*?><div class="form-group">
												<label>UserID Insert<em>*</em></label>
												<input type="text" class="form-control" name="userid" placeholder="Enter UserID">
                    							<?php echo form_error('userid', '<div class="error">', '</div>');  ?>
											</div><?php */?>
											<div class="form-group">
												<label>Remarks</label>
					 							<textarea class="form-control"  name="remarks" rows="5" id="remarks"></textarea>
                    							<?php echo form_error('remarks', '<div class="error">', '</div>');  ?>
											</div>
                                            <div class="form-group">
												<label>Return Date</label>
												<input type="text" class="form-control pd" readonly name="rdate" value="<?php echo date('d-m-Y');?>">
                    							<?php /*?><?php echo form_error('dobdate', '<div class="error">', '</div>');  ?><?php */?>
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
<script type="text/javascript">
$(function () {
    jQuery(".pd").datepicker({dateFormat: 'dd-mm-yy'});
	})
</script>
</body>
</html>


