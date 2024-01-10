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
                  						<h3 class="box-title">Product Details Insert</h3>
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
				 						<form role="form" autocomplete="off" action="<?php echo base_url();?>Dashboard/product_details_insert" method="post" enctype="multipart/form-data">
                  							<div class="form-group">
												<label>Code</label>
												<input type="text" class="form-control" readonly name="pccode" value="<?php echo $pd;?>">
                    							<?php echo form_error('pcode', '<div class="error">', '</div>');  ?>
											</div>
                                            <div class="form-group">
												<label>Unit</label>
												<select class="form-control" name="factoryid" id="factoryid">
                    								<option value="">Select....</option>
                        							<?php
														foreach($fl as $row)
															{
													?>
                    											<option value="<?php echo $row['factoryid'];?>"><?php echo $row['factoryname'];?></option>
                    								<?php
															}
													?>
                    							</select>
                    								<?php echo form_error('factoryid', '<div class="error">', '</div>');  ?>
											</div>
                							<div class="form-group">
												<label>Brand/Model</label>
												<input type="text" class="form-control" name="brand" placeholder="Enter Brand/Model">
                    							<?php echo form_error('brand', '<div class="error">', '</div>');  ?>
											</div>
                                            <div class="form-group">
												<label>Description</label>
					 							<textarea class="form-control"  name="description" rows="5" id="description"></textarea>
                    							<?php echo form_error('description', '<div class="error">', '</div>');  ?>
											</div>
                                            <div class="form-group">
												<label>Purchase Value</label>
												<input type="text" class="form-control" name="price" placeholder="Enter Purchase value(Only Digit)">
                    							<?php echo form_error('price', '<div class="error">', '</div>');  ?>
											</div>
                                            <div class="form-group">
												<label>Purchase Date</label>
												<input type="text" class="form-control pd" name="pdate" value="<?php echo date('d-m-Y');?>">
                    							<?php /*?><?php echo form_error('dobdate', '<div class="error">', '</div>');  ?><?php */?>
											</div>
                                            <div class="form-group">
												<label>Qty</label>
												<input type="text" class="form-control" name="pqty" Placeholder="Enter Qty">
                    							<?php /*?><?php echo form_error('dobdate', '<div class="error">', '</div>');  ?><?php */?>
											</div>
                                            <div class="form-group">
												<label>UOM</label>
												<select class="form-control" name="puomid" id="puomid">
                    								<option value="">Select....</option>
                        							<?php
														foreach($ul as $row)
															{
													?>
                    											<option value="<?php echo $row['puomid'];?>"><?php echo $row['puom'];?></option>
                    								<?php
															}
													?>
                    							</select>
                    								<?php echo form_error('puomid', '<div class="error">', '</div>');  ?>
											</div>
                                            <div class="form-group">
												<label>Vendor</label>
												<input type="text" class="form-control" name="vendor" placeholder="Enter Vendor">
                    							<?php echo form_error('vendor', '<div class="error">', '</div>');  ?>
											</div>
                                            <div class="form-group">
												<label>Capex/Opex</label>
												<select class="form-control" name="pcapop" id="pcapop">
                    								<option value="">Select....</option>
                        							<?php
														foreach($ul1 as $row)
															{
													?>
                    											<option value="<?php echo $row['pcoid'];?>"><?php echo $row['pcapop'];?></option>
                    								<?php
															}
													?>
                    							</select>
                    								<?php echo form_error('puomid', '<div class="error">', '</div>');  ?>
											</div>
                                            <div class="form-group">
												<label>Warranty</label>
												<input type="text" class="form-control" name="warranty" placeholder="Enter Warranty(Day)">
                    							<?php echo form_error('vendor', '<div class="error">', '</div>');  ?>
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


