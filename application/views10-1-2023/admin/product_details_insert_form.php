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
                                            <?php /*?><div class="form-group">
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
											</div><?php */?>
                                            <div class="form-group">
												<label>MPR Number</label>
												<input type="text" class="form-control" name="mpr" placeholder="Enter MPR Number">
                    							<?php echo form_error('mpr', '<div class="error">', '</div>');  ?>
											</div>
                							<?php /*?><div class="form-group">
												<label>Brand/Model</label>
												<input type="text" class="form-control" name="brand" placeholder="Enter Brand/Model">
                    							<?php echo form_error('brand', '<div class="error">', '</div>');  ?>
											</div><?php */?>
                                            <?php /*?><div class="form-group">
												<label>Hard Drive</label>
												<input type="text" class="form-control" name="hdd" placeholder="Enter Hard Drive">
                    							<?php echo form_error('hdd', '<div class="error">', '</div>');  ?>
											</div><?php */?>
                                            <?php /*?><div class="form-group">
												<label>Monitor</label>
												<input type="text" class="form-control" name="monitor" placeholder="Enter Monitor">
                    							<?php echo form_error('monitor', '<div class="error">', '</div>');  ?>
											</div><?php */?>
                                            <?php /*?><div class="form-group">
												<label>UPS</label>
												<input type="text" class="form-control" name="ups" placeholder="Enter UPS">
                    							<?php echo form_error('ups', '<div class="error">', '</div>');  ?>
											</div><?php */?>
                                            <?php /*?><div class="form-group">
												<label>IP Address</label>
												<input type="text" class="form-control" name="ip" placeholder="Enter IP Address">
                    							<?php echo form_error('ip', '<div class="error">', '</div>');  ?>
											</div><?php */?>
                                            <?php /*?><div class="form-group">
												<label>Mother Board</label>
												<input type="text" class="form-control" name="mb" placeholder="Enter Mother Board">
                    							<?php echo form_error('mb', '<div class="error">', '</div>');  ?>
											</div><?php */?>
                                            <div class="form-group">
												<label>Serial Number</label>
												<input type="text" class="form-control" name="sn" placeholder="Enter Serial Number">
                    							<?php echo form_error('sn', '<div class="error">', '</div>');  ?>
											</div>
                                            <?php /*?><div class="form-group">
												<label>Processor</label>
												<input type="text" class="form-control" name="processor" placeholder="Enter Processor">
                    							<?php echo form_error('processor', '<div class="error">', '</div>');  ?>
											</div><?php */?>
                                            <?php /*?><div class="form-group">
												<label>RAM</label>
												<input type="text" class="form-control" name="ram" placeholder="Enter RAM">
                    							<?php echo form_error('brand', '<div class="error">', '</div>');  ?>
											</div><?php */?>
                                            <?php /*?><div class="form-group">
												<label>OS</label>
												<input type="text" class="form-control" name="os" placeholder="Enter OS">
                    							<?php echo form_error('os', '<div class="error">', '</div>');  ?>
											</div><?php */?>
                                            <?php /*?><div class="form-group">
												<label>MS Office</label>
												<input type="text" class="form-control" name="ms" placeholder="Enter MS Office Version">
                    							<?php echo form_error('brand', '<div class="error">', '</div>');  ?>
											</div><?php */?>
                                            <?php /*?><div class="form-group">
												<label>Antivirus</label>
												<select class="form-control" name="avid" id="avid">
                    								<option value="">Select....</option>
                        							<?php
														foreach($al as $row)
															{
													?>
                    											<option value="<?php echo $row['avid'];?>"><?php echo $row['status'];?></option>
                    								<?php
															}
													?>
                    							</select>
                    								<?php echo form_error('avid', '<div class="error">', '</div>');  ?>
											</div><?php */?>
                                            <?php /*?><div class="form-group">
												<label>Internet</label>
												<select class="form-control" name="iid" id="iid">
                    								<option value="">Select....</option>
                        							<?php
														foreach($il as $row)
															{
													?>
                    											<option value="<?php echo $row['iid'];?>"><?php echo $row['status'];?></option>
                    								<?php
															}
													?>
                    							</select>
                    								<?php echo form_error('iid', '<div class="error">', '</div>');  ?>
											</div><?php */?>
                                            <div class="form-group">
												<label>Description</label>
					 							<textarea class="form-control"  name="description" rows="5" id="description"></textarea>
                    							<?php echo form_error('description', '<div class="error">', '</div>');  ?>
											</div>
                                            <?php /*?><div class="form-group">
												<label>Purchase Value</label>
												<input type="text" class="form-control" name="price" placeholder="Enter Purchase value(Only Digit)">
                    							<?php echo form_error('price', '<div class="error">', '</div>');  ?>
											</div><?php */?>
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
                                            <?php /*?><div class="form-group">
												<label>Vendor</label>
												<input type="text" class="form-control" name="vendor" placeholder="Enter Vendor">
                    							<?php echo form_error('vendor', '<div class="error">', '</div>');  ?>
											</div><?php */?>
                                            <?php /*?><div class="form-group">
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
											</div><?php */?>
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


