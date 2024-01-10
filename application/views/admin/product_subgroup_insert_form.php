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
										<h3 class="box-title">Product Sub Group Insert</h3>
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
										<form role="form" autocomplete="off" action="<?php echo base_url(); ?>Dashboard/product_subgroup_insert" method="post" enctype="multipart/form-data">

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
												<label>Name</label>
												<input type="text" class="form-control" name="psgname" placeholder="Enter Product Sub Group Name">
												<?php echo form_error('psgname', '<div class="error">', '</div>');  ?>
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
						//$('#divisionid').find('option');
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

</body>

</html>