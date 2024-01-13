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
										<h3 class="box-title">Product Insert</h3>
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
										<form role="form" autocomplete="off" action="<?php echo base_url(); ?>Dashboard/product_insert" method="post" enctype="multipart/form-data">

											<div class="form-group">
												<label>Category<em>*</em></label>
												<select class="form-control" name="pccode" id="pccode">
													<option value="">Select....</option>
													<?php
													foreach ($ul as $row) {
													?>
														<option value="<?php echo $row['pccode']; ?>"><?php echo $row['pcname']; ?></option>
													<?php
													}
													?>
												</select>
												<?php echo form_error('pccode', '<div class="error">', '</div>');  ?>
											</div>
											<div class="form-group">
												<label>Group<em>*</em></label>
												<select class="form-control" name="pgid" id="pgid">
													<option value="">Select....</option>
                                                </select>
												<?php echo form_error('pgid', '<div class="error">', '</div>');  ?>
											</div>
                                            <div class="form-group">
												<label>Sub Group<em>*</em></label>
												<select class="form-control" name="psgid" id="psgid">
													<option value="">Select....</option>
                                                </select>
												<?php echo form_error('psgid', '<div class="error">', '</div>');  ?>
											</div>
											<div class="form-group">
												<label>Product Code<em>*</em></label>
												<input type="text" class="form-control" name="pcode" placeholder="Enter Product Code">
												<?php echo form_error('pcode', '<div class="error">', '</div>');  ?>
											</div>
											<div class="form-group">
												<label>Product<em>*</em></label>
												<input type="text" class="form-control" name="pname" placeholder="Enter Product Name">
												<?php echo form_error('pname', '<div class="error">', '</div>');  ?>
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
		$(document).ready(function() {

			$('#pccode').change(function(event) {
				event.preventDefault();
				var pccode = $('#pccode').val();

				$.ajax({
					type: 'get',
					url: "<?php echo base_url(); ?>Dashboard/show_groupname",
					dataType: "json",
					data: {
						pccode: pccode
					},
					success: function(res) {
						//$('#pgid').find('option');
						$('#pgid').find('option').not(':first').remove();
						// Add options
						$.each(res, function(index, data) {
							$('#pgid').append('<option value="' + data['pgid'] + '">' + data['pgname'] + '</option>');
						});
					}
				});
			});
		});
	</script>
    <script type="text/javascript">
		$(document).ready(function() {

			$('#pgid').change(function(event) {
				event.preventDefault();
				var pccode = $('#pccode').val();
				var pgid = $('#pgid').val();
				$.ajax({
					type: 'get',
					url: "<?php echo base_url(); ?>Dashboard/show_subgroupname",
					dataType: "json",
					data: {
						pccode: pccode,pgid:pgid
					},
					success: function(res) {
						//$('#psgid').find('option');
						$('#psgid').find('option').not(':first').remove();
						// Add options
						$.each(res, function(index, data) {
							$('#psgid').append('<option value="' + data['psgid'] + '">' + data['psgname'] + '</option>');
						});
					}
				});
			});
		});
	</script>

</body>

</html>