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

	.table-container {
		height: 1000px;
		/* Set the height for vertical scrolling */
		overflow-y: auto;
	}

	.paging-nav,
	#tableData {


		text-align: center;
	}

	th {
		font-size: 10px;
		text-align: center;
		border: 1px solid #cccccc !important;
	}

	td {
		font-size: 11px;
		text-align: center;
		border: 1px solid #cccccc !important;
	}

	div.scrollable-table-wrapper {
		height: 500px;
		overflow: auto;
	}

	.header {
		position: sticky;
		top: 0;
	}

	.text-right-input {
		text-align: right;
		width: 100%;
		padding: 0 10px 0 0;
	}

	input[type="checkbox"] {
		width: 12px;
		height: 12px;
	}
</style>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.5/xlsx.full.min.js"></script> -->
<script>
	$(function() {
		$("table").tablesorter({
			theme: 'blue',
			widgets: ['math', 'zebra', 'filter'],
			widgetOptions: {
				filter_hideFilters: false, // Ensures filters are shown even if column is hidden
				filter_ignoreCase: true,
				math_data: 'math', // data-math attribute
				math_ignore: [0, 1],
				math_none: 'N/A', // no matching math elements found (text added to cell)
				math_complete: function($cell, wo, result, value, arry) {
					var txt = '<span class="align-decimal">' +
						(value === wo.math_none ? '' : ' ') +
						result + '</span>';
					if ($cell.attr('data-math') === 'all-sum') {
						// when the "all-sum" is processed, add a count to the end
						return txt + ' (Sum of ' + arry.length + ' cells)';
					}
					return txt;
				},
				math_completed: function(c) {
					// c = table.config
					// called after all math calculations have completed
					console.log('math calculations complete', c.$table.find('[data-math="all-sum"]:first').text());
				},
				// see "Mask Examples" section
				math_mask: '#,##0.00',
				math_prefix: '', // custom string added before the math_mask value (usually HTML)
				math_suffix: '', // custom string added after the math_mask value
				// event triggered on the table which makes the math widget update all data-math cells (default shown)
				math_event: 'recalculate',
				// math calculation priorities (default shown)... rows are first, then column above/below,
				// then entire column, and lastly "all" which is not included because it should always be last
				math_priority: ['row', 'above', 'below', 'col'],
				// set row filter to limit which table rows are included in the calculation (v2.25.0)
				// e.g. math_rowFilter : ':visible:not(.filtered)' (default behavior when math_rowFilter isn't set)
				// or math_rowFilter : ':visible'; default is an empty string
				math_rowFilter: ''
			}
		});

		$('th[data-hidden-column="true"], td:nth-child(7)').addClass('hidden-column');
		$('th[data-hidden-column="true"], td:nth-child(8)').addClass('hidden-column');
		$('th[data-hidden-column="true"], td:nth-child(9)').addClass('hidden-column');
		$('th[data-hidden-column="true"], td:nth-child(10)').addClass('hidden-column');
		$('th[data-hidden-column="true"], td:nth-child(11)').addClass('hidden-column');
		$('th[data-hidden-column="true"], td:nth-child(12)').addClass('hidden-column');
	});
</script>
<script type="text/javascript">
	$(function() {
		jQuery(".pd").datepicker({
			dateFormat: 'dd-mm-yy'
		});
	})
</script>

<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<div class="content-wrapper">
			<section class="content">
				<div class="row">
					<div class="col-md-12">
						<!-- <p id="rowCount"></p> -->


						<div class="row">
							<div class="col-md-12">
								<div class="box box-danger">
									<div class="box-header with-border">
										<h3 class="box-title">Product Assign</h3>
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
									<form role="form" autocomplete="off" action="<?php echo base_url(); ?>Dashboard/product_multiple_assign_insert" method="post" enctype="multipart/form-data">
										<div class="table-responsive no-padding">
											<div class="row">
												<div class="col-sm-6 col-md-6 col-lg-6">
													<label>User ID</label>
													<input type="text" class="form-control" name="userid" readonly value="<?php echo $userid; ?>">
												</div>
												<div class="col-sm-6 col-md-6 col-lg-6">
													<label>Assign Date</label>
													<input type="text" class="form-control pd"  name="adate" value="<?php echo date('d-m-Y'); ?>">

												</div>
											</div>
											<br />
											<br />
											<table id="tableData" class="table table-hover table-bordered">
												<thead style="background:#91b9e6;">
													<tr>
														<th>SL</th>
														<th>Purchased For</th>
														<th>MPR</th>
														<th>Asset Code</th>
														<th>Factory</th>
														<th>MPR Type</th>
														<th>Product</th>
														<th>Item</th>
														<th>Serial</th>
														<th>Description</th>

													</tr>
												</thead>
												<tfoot>
													<tr>
														<th>&nbsp;</th>
														<th>&nbsp;</th>
														<th>&nbsp;</th>
														<th>&nbsp;</th>
														<th>&nbsp;</th>
														<th>&nbsp;</th>
														<th>&nbsp;</th>
														<th>&nbsp;</th>
														<th>&nbsp;</th>
														<th>&nbsp;</th>
													</tr>
												</tfoot>
												<tbody>
													<?php
													$i = 1;
													foreach ($ul as $row) { ?>
														<tr>
															<td style="vertical-align:middle;"><input type="checkbox" class="check-all" name="pacode[]" value="<?php echo $row['pacode']; ?>"><?php echo $i++; ?></td>
															<td style="vertical-align:middle;"><?php echo $row['uname']; ?></td>
															<td style="vertical-align:middle;"><?php echo $row['mprid']; ?></td>
															<td style="vertical-align:middle;"><?php echo $row['pacode']; ?></td>
															<td style="vertical-align:middle;"><?php echo $row['factoryid']; ?></td>
															<td style="vertical-align:middle;"><?php echo $row['etypename']; ?></td>
															<td style="vertical-align:middle;"><?php echo $row['pname']; ?></td>
															<td style="vertical-align:middle;"><?php echo $row['item']; ?></td>
															<td style="vertical-align:middle;"><?php echo $row['sn']; ?></td>
															<td style="vertical-align:middle;"><?php echo $row['description']; ?></td>

														</tr>
													<?php } ?>
												</tbody>
											</table>
											<div class="box-footer text-center">
												<input type="submit" class="btn btn-primary" name="submit" value="Submit" />
											</div>
										</div>
									</form>
									<script>
										$(document).ready(function() {
											// When any "check-all" checkbox is clicked
											$('.check-all').change(function() {
												// Get the parent row (tr) and find all item-checkboxes in that row
												const checked = $(this).is(':checked');
												$(this).closest('tr').find('.item-checkbox').prop('checked', checked);
											});

											// Optional: If any item-checkbox is unchecked, uncheck the check-all checkbox
											$('.item-checkbox').change(function() {
												const allChecked = $(this).closest('tr').find('.item-checkbox').length === $(this).closest('tr').find('.item-checkbox:checked').length;
												$(this).closest('tr').find('.check-all').prop('checked', allChecked);
											});
										});
									</script>

									<script type="text/javascript">
										$(".btn").click(function() {

											if ($('.check-all').filter(':checked').length < 1) {

												alert("Please Check at least one Color Box");

												return false;

											}
											//  else{

											//      alert("Proceed");

											//  }

										});
									</script>
</body>

</html>