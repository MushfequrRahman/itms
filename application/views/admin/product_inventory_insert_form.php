<style>
	.error {
		color: red;
	}

	em {
		color: red;
	}
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
										<h3 class="box-title">Product Inventory Insert</h3>
										<div class="row">
											<div class="col-sm-12 col-md-12 col-lg-12">
												<?php if ($responce = $this->session->flashdata('Successfully')) : ?>
													<div class="text-center">
														<div class="alert alert-success text-center"><?php echo $responce; ?></div>
													</div>
												<?php endif; ?>
											</div>
										</div>
									</div>
									<div class="box-body">
										<form role="form" autocomplete="off" action="<?php echo base_url(); ?>Dashboard/product_inventory" method="post" enctype="multipart/form-data">
											<div class="form-group">
												<?php
												foreach ($ul as $roww) {
													$roww['iqty'];
												}
												?>
												<?php
												foreach ($ul1 as $rowww) {
													$rowww['rqty'];
												}
												?>
												<?php
												foreach ($ul2 as $row2) {
													$fid = $row2['fid'];
													$pcode = $row2['pcode'];
												}
												?>
												<?php
												foreach ($ul3 as $row3) {
													$podescription = $row3['podescription'];
													}
												?>
												<?php
												foreach ($ul4 as $row4) {
													$cdate = $row4['cdate'];
													}
												?>

												<input type="hidden" class="form-control" readonly name="pcode" value="<?php echo $pcode; ?>">
												<input type="hidden" class="form-control" readonly name="sipoid" value="<?php echo $sipoid; ?>">
												<input type="hidden" class="form-control" readonly name="grnrid" value="<?php echo $grnrid; ?>">
											</div>

											<?php
											if ($roww['iqty'] <= $rowww['rqty']) {
											?>
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
											</div><?php */ ?>
												<div class="form-group">
													<label>Unit</label>
													<input type="text" class="form-control" readonly name="factoryid" value="<?php echo $fid; ?>">
													<?php echo form_error('factoryid', '<div class="error">', '</div>');  ?>
												</div>
												<div class="form-group">
													<label>Serial Number</label>
													<input type="text" class="form-control" name="sn" placeholder="Enter Serial Number">
													<?php echo form_error('sn', '<div class="error">', '</div>');  ?>
												</div>
												<div class="form-group">
													<label>IP Address</label>
													<input type="text" class="form-control" name="ip" placeholder="Enter IP Address">
													
												</div>
												<div class="form-group">
													<label>MAC Address</label>
													<input type="text" class="form-control" name="mac" placeholder="Enter Mac Address">
													
												</div>
												<div class="form-group">
													<label>Description</label>
													<textarea class="form-control" name="description" rows="5" id="description"><?php echo $podescription; ?></textarea>
													<?php echo form_error('description', '<div class="error">', '</div>');  ?>
												</div>
												<?php /*?><div class="form-group">
												<label>Purchase Value</label>
												<input type="text" class="form-control" name="price" placeholder="Enter Purchase value(Only Digit)">
                    							<?php echo form_error('price', '<div class="error">', '</div>');  ?>
											</div><?php */ ?>
												<div class="form-group">
													<!-- <label>Purchase/Invoice Date</label> -->
													<input type="hidden" class="form-control pd" readonly name="pdate" value="<?php echo date("d-m-Y", strtotime($cdate)); ?>">
													<?php /*?><?php echo form_error('dobdate', '<div class="error">', '</div>');  ?><?php */ ?>
												</div>
												<div class="form-group">
													<label>Qty</label>
													<input type="text" class="form-control" name="iqty" Placeholder="Enter Qty">
													<?php echo form_error('iqty', '<div class="error">', '</div>');  ?>
												</div>
												<?php /*?><div class="form-group">
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
											</div><?php */ ?>
												<div class="form-group">
													<label>Warranty</label>
													<input type="text" class="form-control" name="warranty" placeholder="Enter Warranty(Day)">
													<?php echo form_error('vendor', '<div class="error">', '</div>');  ?>
												</div>
												<div class="box-footer text-center">
													<input type="submit" class="btn btn-primary" name="submit" value="Submit" />
												</div>
											<?php
											} else {
											?>
												<div class="form-group">
													<label>Serial Number</label>
													<input type="text" class="form-control" readonly name="sn" placeholder="Enter Serial Number">
													<?php echo form_error('sn', '<div class="error">', '</div>');  ?>
												</div>
												<div class="form-group">
													<label>Description</label>
													<textarea class="form-control" readonly name="description" rows="5" id="description"></textarea>
													<?php echo form_error('description', '<div class="error">', '</div>');  ?>
												</div>
												<?php /*?><div class="form-group">
												<label>Purchase Value</label>
												<input type="text" class="form-control" name="price" placeholder="Enter Purchase value(Only Digit)">
                    							<?php echo form_error('price', '<div class="error">', '</div>');  ?>
											</div><?php */ ?>
												<div class="form-group">
													<label>Purchase Date</label>
													<input type="text" class="form-control pd" readonly name="pdate" value="<?php echo date('d-m-Y'); ?>">
													<?php /*?><?php echo form_error('dobdate', '<div class="error">', '</div>');  ?><?php */ ?>
												</div>
												<div class="form-group">
													<label>Qty</label>
													<input type="text" class="form-control" readonly name="pqty" Placeholder="Enter Qty">
													<?php /*?><?php echo form_error('dobdate', '<div class="error">', '</div>');  ?><?php */ ?>
												</div>
												<?php /*?><div class="form-group">
												<label>UOM</label>
												<select class="form-control" readonly name="puomid" id="puomid">
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
											</div><?php */ ?>
												<div class="form-group">
													<label>Warranty</label>
													<input type="text" class="form-control" readonly name="warranty" placeholder="Enter Warranty(Day)">
													<?php echo form_error('vendor', '<div class="error">', '</div>');  ?>
												</div>
											<?php
											}
											?>

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
		$(function() {
			jQuery(".pd").datepicker({
				dateFormat: 'dd-mm-yy'
			});
		})
	</script>
</body>

</html>