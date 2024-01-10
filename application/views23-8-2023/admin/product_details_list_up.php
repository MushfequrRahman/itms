<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<div class="content-wrapper">
			<section class="content">
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-12">
							<div class="nav-tabs-custom">
								<ul class="nav nav-tabs">
									<li class="active"><a href="#activity" data-toggle="tab">Product Details</a></li>
								</ul>
								<div class="tab-content">
									<?php foreach ($plup as $row) { ?>
										<form role="form" action="<?php echo base_url(); ?>Dashboard/productdetailslup" method="post" enctype="multipart/form-data">
											<div class="form-group">
												<input type="hidden" class="form-control" name="pacode" value="<?php echo $row['pacode']; ?>">
											</div>
											<!-- <div class="form-group">
												<label>Code</label>
												<input type="text" class="form-control" readonly name="pcode" value="<?php echo $row['pcode']; ?>">
											</div> -->
											<!-- <div class="form-group">
												<label>Name</label>
												<input type="text" class="form-control" readonly name="pcname" value="<?php echo $row['pcname']; ?>">
											</div> -->
											<!-- <div class="form-group">
												<label>Factory</label>
												<select class="form-control" name="factoryid" id="factoryid">
													<option value="<?php echo $row['factoryid']; ?>"><?php echo $row['factoryid']; ?></option>
													<?php
													foreach ($fl as $row1) {
													?>
														<option value="<?php echo $row1['factoryid']; ?>"><?php echo $row1['factoryid']; ?></option>
													<?php
													}
													?>
												</select>
												<?php echo form_error('factoryid', '<div class="error">', '</div>');  ?>
											</div> -->
											<div class="form-group">
												<label>Supplier</label>
												<select class="form-control" name="supplierid" id="supplierid">
													<option value="<?php echo $row['supplierid']; ?>"><?php echo $row['supplier']; ?></option>
													<?php
													foreach ($sl as $row1) {
													?>
														<option value="<?php echo $row1['supplierid']; ?>"><?php echo $row1['supplier']; ?></option>
													<?php
													}
													?>
												</select>
												<?php /*?><?php echo $row['factoryname']; ?><?php */ ?>
												<?php echo form_error('supplierid', '<div class="error">', '</div>');  ?>
											</div>
											
											<div class="form-group">
												<label>Serial Number</label>
												<input type="text" class="form-control" name="sn" value="<?php echo $row['sn']; ?>">
												<?php echo form_error('sn', '<div class="error">', '</div>');  ?>
											</div>
											<div class="form-group">
												<label>Description</label>
												<textarea class="form-control" name="description" rows="5" id="description"><?php echo $row['description']; ?></textarea>
												<?php echo form_error('description', '<div class="error">', '</div>');  ?>
											</div>
											<div class="form-group">
												<label>Price</label>
												<input type="text" class="form-control" name="price" value="<?php echo $row['price']; ?>">
												<?php echo form_error('price', '<div class="error">', '</div>');  ?>
											</div>
											<div class="form-group">
												<label>Qty</label>
												<input type="text" class="form-control" name="pqty" value="<?php echo $row['pqty']; ?>">
												<?php echo form_error('pqty', '<div class="error">', '</div>');  ?>
											</div>
											<div class="form-group">
												<label>UOM</label>
												<select class="form-control" name="puomid" id="puomid">
													<option value="<?php echo $row['puomid']; ?>"><?php echo $row['puom']; ?></option>
													<?php
													foreach ($ul as $row1) {
													?>
														<option value="<?php echo $row1['puomid']; ?>"><?php echo $row1['puom']; ?></option>
													<?php
													}
													?>
												</select>
											</div>
											
											<div class="form-group">
												<label>Warranty</label>
												<input type="text" class="form-control" name="warranty" value="<?php echo $row['warranty']; ?>">
												<?php echo form_error('warranty', '<div class="error">', '</div>');  ?>
											</div>
											<div class="form-group">
												<label>Purchase Date</label>
												<?php $pdate = date("d-m-Y", strtotime($row['pdate'])); ?>
												<input type="text" readonly class="form-control pd" readonly name="pdate" value="<?php echo $pdate; ?>">
												<?php echo form_error('pdate', '<div class="error">', '</div>');  ?>
											</div>
								</div>
								<div class="box-footer text-center">
									<input type="submit" class="btn btn-primary" name="submit" value="Submit" />
								</div>
								</form>
							<?php } ?>
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