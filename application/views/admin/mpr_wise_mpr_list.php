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


		text-align: center;
	}

	th,
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
</style>
<script>
	$(function() {
		$("table").tablesorter({
			theme: 'blue',
			widgets: ['math', 'zebra', 'filter'],
			widgetOptions: {
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
	});
</script>
<script type='text/javascript'>
	//<![CDATA[
	$(document).ready(function() {
		$('.filter').multifilter()
	})
	//]]>
</script>

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
										<h3 class="box-title">MPR Details List</h3>
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

									<div class="box-body table-responsive no-padding">




										<div class="table-responsive">
											<table id="tableData" class="table table-hover table-bordered">
												<thead style="background:#91b9e6;">
													<tr>
														<th>SL</th>
														<th>MPR NO</th>
														<th>MPR Date</th>
														<th>Unit</th>
														<th>MPR Prepared By</th>
														<th>Category</th>
														<th>Group</th>
														<th>Sub Group</th>
														<th>Item</th>
														<th>Model</th>
														<th>Brand</th>
														<th>Qty</th>
														<th>Description</th>
														<th>Unit Price</th>
														<th>Total Price</th>
														<th>Remarks</th>
														<th>User</th>

													</tr>
												</thead>
												<tfoot>
													<tr>
														<th colspan="13">Totals</th>
														<th>&nbsp;</th>
														<th data-math="col-sum">col-sum</th>
														<th>&nbsp;</th>
														<th>&nbsp;</th>
														

													</tr>
												</tfoot>
												<tbody>
													<?php
													$i = 1;
													foreach ($ul as $row) { ?>
														<tr>

															<td style="vertical-align:middle;"><?php echo $i++; ?></td>
															<td style="vertical-align:middle;"><?php echo $row['mprid']; ?></td>
															<?php $mdate = date("d-m-Y", strtotime($row['mdate'])); ?>
															<td style="vertical-align:middle;"><?php echo $mdate; ?></td>
															<td style="vertical-align:middle;"><?php echo $row['fid']; ?></td>
															<td style="vertical-align:middle;"><?php echo $row['name'] . '--' . $row['departmentname'] . '--' . $row['designation']; ?></td>
															<td style="vertical-align:middle;"><?php echo $row['pcname']; ?></td>
															<td style="vertical-align:middle;"><?php echo $row['pgname']; ?></td>
															<td style="vertical-align:middle;"><?php echo $row['psgname']; ?></td>
															<td style="vertical-align:middle;"><?php echo $row['pname']; ?></td>
															<td style="vertical-align:middle;"><?php echo $row['item']; ?></td>
															<td style="vertical-align:middle;"><?php echo $row['brandname']; ?></td>
															<td style="vertical-align:middle;"><?php echo $row['qty'] . " " . $row['puom']; ?></td>
															<td style="vertical-align:middle;"><?php echo $row['description']; ?></td>
															<td style="vertical-align:middle;"><?php echo number_format($row['price'], 2, '.', ','); ?></td>
															<td style="vertical-align:middle;"><?php echo number_format($row['qty'] * $row['price'], 2, '.', ','); ?></td>
															<td style="vertical-align:middle;"><?php echo $row['remarks']; ?></td>
															<td style="vertical-align:middle;"><?php echo $row['uname']; ?></td>



														</tr>
													<?php } ?>
												</tbody>
											</table>
										</div>
										<!-- </div> -->
									</div>
								</div>
								<!--<script type="text/javascript">
									$(document).ready(function() {
									$('#tableData').paging({limit:50});
									});
								</script>-->
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
</body>

</html>