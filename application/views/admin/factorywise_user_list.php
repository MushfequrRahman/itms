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
		font-size: 12px;
		text-align: center;
	}

	div.scrollable-table-wrapper {
		height: 1000px;
		overflow: auto;
	}

	.header {
		position: sticky;
		top: 0;
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

<!-- /.box-header -->
<div class="box-body table-responsive no-padding">


	<div class="scrollable-table-wrapper">
		<table id="tableData" class="table table-hover table-bordered">
			<thead style="background:#91b9e6;position: sticky;top: 0;">
				<tr>
					<th>SL</th>
					<!-- <th>Image</th> -->

					<th>ID</th>
					<th>Name</th>
					<th>Factory</th>
					<th>Type</th>
					<th>Department</th>
					<th>Designation</th>
					<th>Email</th>
					<th>Mobile</th>
					<th>Assign</th>
					<th>Return</th>
					<th>Agreement</th>
					<th>Status</th>
					<th>History</th>
					<th>Edit</th>
					<!-- <th>Transfer</th> -->
				</tr>
			</thead>
			<tbody>
				<?php
				$i = 1;
				foreach ($ul as $row) { ?>
					<tr>
						<td style="vertical-align:middle;"><?php echo $i++; ?></td>
						<?php /*?><td><img class="profile-user-img img-responsive img-thumbnail" src="<?php echo base_url().'assets/uploads/employee/'.$row['image'];?>" alt="User profile picture"></td><?php */ ?>
						<!-- <td style="vertical-align:middle;"><a href="<?php echo base_url(); ?>Dashboard/user_imglist_up/<?php echo $bn = $row['userid']; ?>"><img class="profile-user-img img-responsive img-thumbnail" src="<?php echo base_url() . 'assets/uploads/users/' . $row['image']; ?>" alt="User profile picture"></a></td> -->

						<!-- <td style="vertical-align:middle;"><a target="_blank" href="<?php echo base_url(); ?>Dashboard/user_profile/<?php echo $bn = $row['userid']; ?>"><?php echo $row['userid']; ?></a></td> -->
						<td style="vertical-align:middle;"><?php echo $row['userid']; ?></td>

						<td style="vertical-align:middle;"><?php echo $row['name']; ?></td>
						<td style="vertical-align:middle;"><?php echo $row['factoryname']; ?></td>
						<td style="vertical-align:middle;"><?php echo $row['etypename']; ?></td>
						<td style="vertical-align:middle;"><?php echo $row['departmentname']; ?></td>
						<td style="vertical-align:middle;"><?php echo $row['designation']; ?></td>
						<td style="vertical-align:middle;"><?php echo $row['email']; ?></td>
						<td style="vertical-align:middle;"><?php echo $row['mobile']; ?></td>
						<?php if ($row['userstatusid'] == '1') {
						?>
							<td style="vertical-align:middle;"><a target="_blank" href="<?php echo base_url(); ?>Dashboard/product_inventory_list_for_assign/<?php echo $bn = $row['userid']; ?>/<?php echo $bn = $row['factoryid']; ?>"><i class="fa fa-tasks" aria-hidden="true"></i>
								</a></td>
							<td style="vertical-align:middle;"><a target="_blank" href="<?php echo base_url(); ?>Dashboard/product_inventory_list_for_return/<?php echo $bn = $row['userid']; ?>"><i class="fa fa-undo" aria-hidden="true"></i>
								</a></td>
							<td style="vertical-align:middle;"><a target="_blank" href="<?php echo base_url(); ?>Dashboard/user_agreement/<?php echo $row['userid']; ?>/<?php echo $row['factoryid']; ?>"><i class="fa fa-file-text" aria-hidden="true"></i>

								</a></td>
							<td style="vertical-align:middle;"><?php echo $row['userstatus']; ?></td>
							<td style="vertical-align:middle;"><a href="<?php echo base_url(); ?>Dashboard/user_product_using_history/<?php echo $bn = $row['userid']; ?>"><i class="fa fa-history" style="font-size:14px"></i></a></td>
							<td style="vertical-align:middle;"><a href="<?php echo base_url(); ?>Dashboard/user_list_up/<?php echo $bn = $row['userid']; ?>"><i class="fa fa-edit" style="font-size:24px"></i></a></td>
							
							<!-- <td style="vertical-align:middle;"><a href="<?php echo base_url(); ?>Dashboard/user_transfer_form/<?php echo $bn = $row['userid']; ?>"><i class="fa fa-exchange" aria-hidden="true"></i>
								</a></td> -->
						<?php

						} else {
						?>
							<td style="vertical-align:middle;"></td>
							<td style="vertical-align:middle;"></td>
							<td style="vertical-align:middle;"></td>
							<td style="vertical-align:middle;"><?php echo $row['userstatus']; ?></td>
							<td style="vertical-align:middle;"><a href="<?php echo base_url(); ?>Dashboard/user_product_using_history/<?php echo $bn = $row['userid']; ?>"><i class="fa fa-history" style="font-size:14px"></i></a></td>
							<td style="vertical-align:middle;"><a href="<?php echo base_url(); ?>Dashboard/user_list_up/<?php echo $bn = $row['userid']; ?>"><i class="fa fa-edit" style="font-size:24px"></i></a></td>
							<td style="vertical-align:middle;"></td>
						<?php

						}
						?>

					</tr>
			</tbody>
		<?php } ?>
		</table>
	</div>
</div>

<!-- /.box-body -->