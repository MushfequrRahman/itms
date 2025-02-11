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
            height: 1000px; /* Set the height for vertical scrolling */
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
									<!-- <div class="row">
										<div class='filters'>
											<div class="col-md-2">
												<div class='filter-container'>
													<input autocomplete='off' class='filter form-control' name='Factory' placeholder='Factory' data-col='Factory' />
												</div>
											</div>
											<div class="col-md-2">
												<div class='filter-container'>
													<input autocomplete='off' class='filter form-control' name='Name' placeholder='Name' data-col='Name' />
												</div>
											</div>
											<div class="col-md-2">
												<div class='filter-container'>
													<input autocomplete='off' class='filter form-control' name='Item' placeholder='Item' data-col='Item' />
												</div>
											</div>
											<div class="col-md-2">
												<div class='filter-container'>
													<input autocomplete='off' class='filter form-control' name='Status/Return' placeholder='Status/Return' data-col='Status/Return' />
												</div>
											</div>
											<div class="col-md-2">
												<div class='filter-container'>
													<input autocomplete='off' class='filter form-control' name='UserID' placeholder='UserID' data-col='UserID' />
												</div>
											</div>
											<div class="col-md-2">
												<div class='filter-container'>
													<input autocomplete='off' class='filter form-control' name='UserName' placeholder='UserName' data-col='UserName' />
												</div>
											</div>
										</div>
									</div>
									<br /> -->
									<div class="box-body table-responsive no-padding table-container">

										<div class="row padall">
											<div class="col-lg-12">
												<div class="row">
													<div class="col-md-6">
														<div class="float-left">
															<form action="<?php echo base_url() ?>Dashboard/product_inventory_list_xls" class="excel-upl" id="excel-upl" enctype="multipart/form-data" method="post" accept-charset="utf-8">
																<input type="radio" checked="checked" name="export_type" value="xlsx"> .xlsx
																<input type="radio" name="export_type" value="xls"> .xls
																<input type="radio" name="export_type" value="csv"> .csv
																<button type="submit" name="import" class="btn btn-primary btn-xs">Export</button>
															</form>
														</div>
													</div>
													<div class="col-md-6">
														<div class="float-right" style="text-align: right;">
															<button id="downloadExcel" class="btn btn-success btn-xs">Download As Excel</button>
														</div>
													</div>
												</div>

											</div>
										</div>




										<!-- <div class="scrollable-table-wrapper"> -->
										<table id="tableData" class="table table-hover tablesorter">
											<!-- <thead style="background:#91b9e6;position: sticky;top: 0;"> -->
											<thead>
												<tr>
													<th data-column="0"><input type="checkbox" class="column-select" data-col-index="1" checked><br />SL</th>
													<th data-column="1"><input type="checkbox" class="column-select" data-col-index="2" checked><br />Assign</th>
													<th data-column="2"><input type="checkbox" class="column-select" data-col-index="3" checked><br />Factory</th>
													<th data-column="3"><input type="checkbox" class="column-select" data-col-index="4" checked><br />Supplier</th>
													<th data-column="4"><input type="checkbox" class="column-select" data-col-index="5" checked><br />Category</th>
													<th data-column="5"><input type="checkbox" class="column-select" data-col-index="6" checked><br />Group</th>
													<th data-column="6"><input type="checkbox" class="column-select" data-col-index="7" checked><br />S/Group</th>
													<th data-column="7"><input type="checkbox" class="column-select" data-col-index="8" checked><br />MPR</th>
													<th data-column="8"><input type="checkbox" class="column-select" data-col-index="9" checked><br />Name</th>
													<th data-column="9"><input type="checkbox" class="column-select" data-col-index="10" checked><br />S/N</th>
													<th data-column="10"><input type="checkbox" class="column-select" data-col-index="11" checked><br />Product</th>
													<th data-column="11"><input type="checkbox" class="column-select" data-col-index="12" checked><br />Description</th>
													<th data-column="12"><input type="checkbox" class="column-select" data-col-index="13" checked><br />PO Price</th>
													<th data-column="13"><input type="checkbox" class="column-select" data-col-index="14" checked><br />Qty</th>
													<th data-column="14"><input type="checkbox" class="column-select" data-col-index="15" checked><br />Pur.Date</th>
													<th data-column="15"><input type="checkbox" class="column-select" data-col-index="16" checked><br />Warranty</th>
													<th data-column="16"><input type="checkbox" class="column-select" data-col-index="17" checked><br />E.Date</th>
													<th data-column="17"><input type="checkbox" class="column-select" data-col-index="18" checked><br />Rem.Day</th>
													<th data-column="18"><input type="checkbox" class="column-select" data-col-index="19" checked><br />Status</th>
													<th data-column="19"><input type="checkbox" class="column-select" data-col-index="20" checked><br />UserID</th>
													<th data-column="20"><input type="checkbox" class="column-select" data-col-index="21" checked><br />U.Name</th>
													<th data-column="21"><input type="checkbox" class="column-select" data-col-index="22" checked><br />U.Dept</th>
													<th data-column="22"><input type="checkbox" class="column-select" data-col-index="23" checked><br />G.Date</th>
													<th class="filter-false"><input type="checkbox" class="column-select" data-col-index="24" checked><br />Edit</th>
													<th class="filter-false"><input type="checkbox" class="column-select" data-col-index="25" checked><br />Transfer</th>
													<th class="filter-false"><input type="checkbox" class="column-select" data-col-index="26" checked><br />Release</th>
												</tr>
											</thead>
											<tfoot>
												<tr>
													<th id="rowCount"></th>
													<th colspan="10">Totals</th>
													<th id="rowCount"></th>
													<th data-math="col-sum">col-sum</th>
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
												foreach ($ul as $row) {
												?>
													<tr>
														<td style="vertical-align:middle;"><label class="checkbox-inline"><input type="checkbox" class="row-select" checked><?php echo $i++; ?></label></td>
														<?php
														if ($row['pastatus'] == 1 || $row['pastatus'] == 2) {
														?>
															<td style="vertical-align:middle;"><?php echo $row['pacode']; ?></td>
														<?php
														} else {
														?>
															<td style="vertical-align:middle;"><a href="<?php echo base_url(); ?>Dashboard/product_assign_form/<?php echo $bn = $row['pacode']; ?>"><?php echo $row['pacode']; ?></a></td>
														<?php
														}
														?>
														<td style="vertical-align:middle;"><?php echo $row['factoryid']; ?></td>
														<td style="vertical-align:middle;"><?php echo $row['supplier']; ?></td>
														<td style="vertical-align:middle;"><?php echo $row['pcname']; ?></td>
														<td style="vertical-align:middle;"><?php echo $row['pgname']; ?></td>
														<td style="vertical-align:middle;"><?php echo $row['psgname']; ?></td>
														<td style="vertical-align:middle;"><a href="<?php echo base_url(); ?>Dashboard/mpr_wise_mpr_list/<?php echo $bn = $row['mprid']; ?>"><?php echo $row['mprid']; ?></a></td>
														<td style="vertical-align:middle;"><?php echo $row['pname']; ?></td>

														<td style="vertical-align:middle;"><?php echo $row['sn']; ?></td>

														<td style="vertical-align:middle;"><?php echo $row['item']; ?></td>
														<td style="vertical-align:middle;"><?php echo $row['description']; ?></td>
														<td style="vertical-align:middle;"><?php echo number_format($row['pprice'], 2, '.', ','); ?></td>
														<td style="vertical-align:middle;"><?php echo $row['iqty'] . " " . $row['puom']; ?></td>
														<?php /*?><td style="vertical-align:middle;"><?php echo $row['vendor'];?></td><?php */ ?>
														<td style="vertical-align:middle;"><?php echo date("d-m-Y", strtotime($row['pdate'])); ?></td>
														<?php
														$convert = $row['warranty']; // days you want to convert
														$years = ($convert / 365); // days / 365 days
														$years = floor($years); // Remove all decimals
														$month = ($convert % 365) / 30.5; // I choose 30.5 for Month (30,31) ;)
														$month = floor($month); // Remove all decimals
														$days = ($convert % 365) % 30.5; // the rest of days
														// Echo all information set
														//echo 'DAYS RECEIVE : '.$convert.' days<br>';
														//echo $years.' years - '.$month.' month - '.$days.' days';
														?>
														<td style="vertical-align:middle;"><?php echo $years . ' years - ' . $month . ' month - ' . $days . ' days'; ?></td>
														<?php $enddate = date("d-m-Y", strtotime("+" . $row['warranty'] . " days", strtotime($row['pdate']))); ?>
														<td style="vertical-align:middle;"><?php echo $enddate; ?></td>
														<?php
														$now = time(); // or your date as well
														$enddate = strtotime($enddate);
														$datediff = $enddate - $now;
														$remain = round($datediff / (60 * 60 * 24));
														?>
														<td style="vertical-align:middle;"><?php echo $remain; ?></td>
														<?php
														if ($row['pastatus'] == 1) {
														?>
															<td style="vertical-align:middle;"><a href="<?php echo base_url(); ?>Dashboard/product_return_form/<?php echo $bn = $row['pacode']; ?>">Using</a></td>
														<?php
														} elseif ($row['pastatus'] == 0) {
														?>
															<td style="vertical-align:middle;">Free</td>
														<?php
														} elseif ($row['pastatus'] == 2) {
														?>
															<td style="vertical-align:middle;"><?php echo $row['releasetype']; ?></td>
														<?php
														}
														?>
														<?php
														if ($row['pastatus'] == 1) {
														?>
															<td style="vertical-align:middle;"><?php echo  $row['userid']; ?></td>
															<td style="vertical-align:middle;"><?php echo  $row['name']; ?></td>
															<td style="vertical-align:middle;"><?php echo  $row['departmentname']; ?></td>
														<?php
														} else {
														?>
															<td style="vertical-align:middle;">&nbsp;</td>
															<td style="vertical-align:middle;">&nbsp;</td>
															<td style="vertical-align:middle;">&nbsp;</td>
														<?php
														}
														?>



														<?php
														if ($row['pastatus'] == 1) {
														?>
															<td style="vertical-align:middle;"><?php echo date("d-m-Y", strtotime($row['adate'])); ?></td>
														<?php
														} else {
														?>
															<td style="vertical-align:middle;">&nbsp;</td>
														<?php
														}
														?>
														<?php
														if ($row['pastatus'] == 2) {
														?>
															<td style="vertical-align:middle;"><?php echo $row['releasetype']; ?></td>
														<?php
														} else {
														?>
															<td style="vertical-align:middle;"><a href="<?php echo base_url(); ?>Dashboard/product_inventory_list_up/<?php echo $bn = $row['pacode']; ?>"><i class="fa fa-edit" style="font-size:16px"></i></a></td>
														<?php
														}
														?>
														<?php
														if ($row['pastatus'] == 2) {
														?>
															<td style="vertical-align:middle;"><?php echo $row['releasetype']; ?></td>
														<?php
														} else {
														?>
															<td style="vertical-align:middle;"><a href="<?php echo base_url(); ?>Dashboard/product_transfer_form/<?php echo $bn = $row['pacode']; ?>"><i class="fa fa-exchange" aria-hidden="true"></i></a></td>
														<?php
														}
														?>
														<?php
														if ($row['pastatus'] == 0) {
														?>
															<td style="vertical-align:middle;"><a href="<?php echo base_url(); ?>Dashboard/item_release_form/<?php echo $bn = $row['pacode']; ?>"><i class="fa fa-trash" style="font-size:16px"></i></a></td>
														<?php
														} elseif ($row['pastatus'] == 2) {
														?>
															<td style="vertical-align:middle;"><?php echo $row['releasetype']; ?></td>
														<?php
														} else {
														?>
															<td style="vertical-align:middle;">&nbsp;</td>
														<?php
														}
														?>
													</tr>
												<?php
												}
												?>
											</tbody>
										</table>
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
	<script>
        $(document).ready(function () {
            $("#tableData").tablesorter();
        });
    </script>
</body>

</html>