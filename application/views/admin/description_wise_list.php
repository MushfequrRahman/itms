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
		height: 450px;
		overflow: auto;
		position: relative;
	}

	.paging-nav,
	#tableData {
		text-align: center;
	}

	th {
		position: sticky;
		top: 0;
		z-index: 3;
		font-size: 11px !important;
		text-align: center;
		border: 1px solid #cccccc !important;
	}

	.tablesorter-filter-row {
		position: sticky;
		top: 35px;
		z-index: 2;
	}

	td {
		font-size: 11px;
		font-weight: 600;
		text-align: center;
		border: 1px solid #cccccc !important;
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
		}).on("filterEnd sortEnd", function() {
			countVisibleRows();
		});


		// // Function to count visible rows
		// function countVisibleRows() {
		// 	var visibleRowsCount = $('#tableData tbody tr:visible').length;
		// 	$('#rowCount').text("No. Rows:" + visibleRowsCount);
		// }

		// // Initial count of visible rows
		// countVisibleRows();

		// // Filter rows with search input
		// //$('<input type="text" class="tablesorter-filter" placeholder="Search...">').insertBefore('#tableData');

		// $('.tablesorter-filter').on('keyup', function() {
		// 	var searchTerm = $(this).val().toLowerCase();
		// 	$('#tableData tbody tr').each(function() {
		// 		$(this).toggle($(this).text().toLowerCase().indexOf(searchTerm) > -1);
		// 	});
		// 	countVisibleRows(); // Update the count after filtering
		// });


		// Function to count visible rows
		function countVisibleRows() {
			var visibleRowsCount = $('#tableData tbody tr:visible').length;
			$('#rowCount').text("Rows: " + visibleRowsCount);
		}

		// Initial count of visible rows
		countVisibleRows(); // Start counting visible rows






		// Download selected rows and columns as Excel
		$("#downloadExcel").on("click", function() {
			var wb = XLSX.utils.book_new(); // Create a new workbook
			var ws_data = [];

			// Prepare header row based on selected columns
			var headers = [];
			$('#tableData thead th').each(function() {
				var $checkbox = $(this).find('.column-select');
				if ($checkbox.length === 0 || $checkbox.is(':checked')) {
					headers.push($(this).text());
				}
			});
			ws_data.push(headers); // Push headers as the first row

			// Add the selected rows
			$('#tableData tbody tr:visible').each(function() {
				var $checkbox = $(this).find('.row-select');
				if ($checkbox.is(':checked')) {
					var row = [];
					$(this).find('td').each(function(index) {
						var $colCheckbox = $(this).closest('table').find('thead th').eq(index).find('.column-select');
						if ($colCheckbox.length === 0 || $colCheckbox.is(':checked')) {
							row.push($(this).text());
						}
					});
					ws_data.push(row);
				}
			});

			// Create a worksheet from the data
			var ws = XLSX.utils.aoa_to_sheet(ws_data);
			XLSX.utils.book_append_sheet(wb, ws, "Selected Rows");

			// Export the Excel file
			XLSX.writeFile(wb, 'product_inventory.xlsx');
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
						<!-- <p id="rowCount"></p> -->
						<div class="row">
							<div class="col-md-12">
								<div class="box box-danger">
									<div class="box-header with-border">
										<h3 class="box-title">Product Details List(Inventory)</h3>
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

									<!-- <div class="box-body table-responsive no-padding table-container"> -->
									<!-- <div class="table-responsive no-padding table-container"> -->
									<div class="row padall">
										<div class="col-lg-12">
											<div class="row">
												<div class="col-md-6">
													<!-- <div class="float-left">
														<form action="<?php echo base_url() ?>Dashboard/product_inventory_list_xls" class="excel-upl" id="excel-upl" enctype="multipart/form-data" method="post" accept-charset="utf-8">
															<input type="radio" checked="checked" name="export_type" value="xlsx"> .xlsx
															<input type="radio" name="export_type" value="xls"> .xls
															<input type="radio" name="export_type" value="csv"> .csv
															<button type="submit" name="import" class="btn btn-primary btn-xs">Export</button>
														</form>
													</div> -->
												</div>
												<div class="col-md-6">
													<div class="float-right" style="text-align: right;">
														<button id="downloadExcel" class="btn btn-success btn-xs">Download As Excel</button>
														<!-- </div> -->
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- <div class="scrollable-table-wrapper"> -->
									<div class="table-responsive no-padding table-container">
										<table id="tableData" class="table table-hover tablesorter">
											<!-- <thead style="background:#91b9e6;position: sticky;top: 0;"> -->
											<thead>
												<tr>
													<th data-column="0"><input type="checkbox" class="column-select" data-col-index="1" checked><br />SL</th>
													<th data-column="1"><input type="checkbox" class="column-select" data-col-index="2" checked><br />A.Code</th>
													<th data-column="2"><input type="checkbox" class="column-select" data-col-index="3" checked><br />Factory</th>
													<th data-column="3"><input type="checkbox" class="column-select" data-col-index="4" checked><br />Device Name</th>
													<th data-column="4"><input type="checkbox" class="column-select" data-col-index="5" checked><br />Processor</th>
													<th data-column="5"><input type="checkbox" class="column-select" data-col-index="6" checked><br />Generation</th>
													<th data-column="6"><input type="checkbox" class="column-select" data-col-index="7" checked><br />RAM</th>
													<th data-column="7"><input type="checkbox" class="column-select" data-col-index="8" checked><br />SSD</th>
													<th data-column="8"><input type="checkbox" class="column-select" data-col-index="9" checked><br />HDD</th>
													<th data-column="9"><input type="checkbox" class="column-select" data-col-index="10" checked><br />IP</th>
													<th data-column="10"><input type="checkbox" class="column-select" data-col-index="11" checked><br />MAC</th>
													<th data-column="11"><input type="checkbox" class="column-select" data-col-index="12" checked><br />S/N</th>
													<th data-column="12"><input type="checkbox" class="column-select" data-col-index="13" checked><br />Price</th>
													<th data-column="13"><input type="checkbox" class="column-select" data-col-index="14" checked><br />Supplier</th>
													<th data-column="14"><input type="checkbox" class="column-select" data-col-index="15" checked><br />MPR</th>
													<th data-column="15"><input type="checkbox" class="column-select" data-col-index="16" checked><br />PO</th>
													<th data-column="16"><input type="checkbox" class="column-select" data-col-index="17" checked><br />Total Using</th>
													<th data-column="17"><input type="checkbox" class="column-select" data-col-index="18" checked><br />Original</th>
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
												foreach ($specs as $s): ?>
													<tr>
														<td style="vertical-align:middle;"><label class="checkbox-inline"><input type="checkbox" class="row-select" checked><?php echo $i++; ?></label></td>
														<td><?= $s['pacode'] ?></td>
														<td><?= $s['factoryid'] ?></td>
														<td><?= $s['device_name'] ?></td>
														<td><?= $s['processor'] ?></td>
														<td><?= $s['generation'] ?></td>
														<td><?= $s['ram'] ?></td>
														<td><?= $s['ssd'] ?></td>
														<td><?= $s['hdd'] ?></td>
														<td><?= $s['ip'] ?></td>
														<td><?= $s['mac'] ?></td>
														<td><?= $s['sn'] ?></td>
														<td><?= $s['pprice'] ?></td>
														<td><?= $s['supplier'] ?></td>
														<td><?= $s['mprid'] ?></td>
														<td><?= $s['po'] ?></td>
														<td><?= $s['totalusing'] ?></td>
														<td><?= $s['original'] ?></td>
													</tr>
												<?php endforeach; ?>
											</tbody>
										</table>
										<!-- </div> -->
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
	<script>
		$(document).ready(function() {
			$("#tableData").tablesorter();
		});
	</script>
</body>

</html>