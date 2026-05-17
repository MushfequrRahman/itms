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
		height: 750px;
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
		background: #f9f9f9;
	}

	.tablesorter-filter-row {
		position: sticky;
		top: 35px;
		z-index: 2;
	}

	.tablesorter-filter-row th {
		background: #f9f9f9;
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

	.btn-download-excel {
		background: linear-gradient(45deg, #00a65a, #00c06f);
		border: none;
		color: #fff;
		font-size: 12px;
		font-weight: 600;
		padding: 8px 16px;
		border-radius: 4px;
		cursor: pointer;
		transition: all .3s ease;
		box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
	}

	.btn-download-excel i {
		margin-right: 5px;
		font-size: 13px;
	}

	.btn-download-excel:hover {
		background: linear-gradient(45deg, #008d4c, #00a65a);
		transform: translateY(-1px);
		box-shadow: 0 4px 10px rgba(0, 0, 0, 0.20);
	}

	.btn-download-excel:focus {
		outline: none;
	}

	.edit-product-btn {
		background: #f39c12;
		border: none;
		color: white;
		padding: 4px 8px;
		border-radius: 3px;
		font-size: 11px;
		cursor: pointer;
		transition: all 0.2s;
	}

	.edit-product-btn:hover {
		background: #e67e22;
	}

	.action-link {
		display: inline-block;
		padding: 4px 8px;
		border-radius: 3px;
		font-size: 11px;
		text-decoration: none;
		font-weight: 600;
	}

	.action-transfer {
		background: #00c0ef;
		color: white;
	}

	.action-release {
		background: #dd4b39;
		color: white;
	}

	.action-view {
		background: #0074B4;
		color: white;
		border-radius: 50%;
		padding: 8px 12px;
		display: inline-block;
	}

	.modal-header {
		background: #3c8dbc;
		color: white;
		border-radius: 3px 3px 0 0;
	}

	.modal-header .close {
		color: white;
		opacity: 0.8;
	}

	.modal-header .close:hover {
		opacity: 1;
	}

	.form-group label {
		font-weight: 600;
		font-size: 12px;
	}

	.highlight-row {
		background-color: #d4edda !important;
		transition: background-color 0.5s ease;
	}

	#ui-datepicker-div {
		z-index: 9999 !important;
	}

	.padall {
		padding: 10px 15px;
	}

	.float-right {
		float: right;
	}

	.box-body {
		padding: 0;
	}

	.row-select,
	.column-select {
		margin-right: 3px;
	}
</style>

<script>
	$(function() {
		$("#tableData").tablesorter({
			theme: 'blue',
			widgets: ['zebra', 'filter'],
			widgetOptions: {
				filter_columnFilters: true,
				filter_placeholder: {
					search: 'Search'
				},
				filter_reset: '.reset-filter'
			}
		}).on("filterEnd sortEnd", function() {
			updateStats();
		});

		function updateStats() {
			var visibleRowsCount = $('#tableData tbody tr:visible').length;
			$('#rowCount').text("Rows: " + visibleRowsCount);

			var totalPrice = 0;
			$('#tableData tbody tr:visible').each(function() {
				var priceText = $(this).find('td').eq(15).text().replace(/,/g, '');
				var price = parseFloat(priceText);
				if (!isNaN(price)) {
					totalPrice += price;
				}
			});
			$('#totalPoPriceFooter').text(totalPrice.toLocaleString('en-US', {
				minimumFractionDigits: 2,
				maximumFractionDigits: 2
			}));
		}

		updateStats();

		// $('.column-select').on('change', function() {
		// 	var colIndex = $(this).closest('th').index();
		// 	var isChecked = $(this).is(':checked');

		// 	$('#tableData tbody tr').each(function() {
		// 		$(this).find('td').eq(colIndex).toggle(isChecked);
		// 	});
		// 	$('#tableData thead th').eq(colIndex).toggle(isChecked);
		// 	$('#tableData tfoot th').eq(colIndex).toggle(isChecked);

		// 	setTimeout(function() {
		// 		updateStats();
		// 	}, 100);
		// });



		$("#downloadExcel").on("click", function() {
			var wb = XLSX.utils.book_new();
			var ws_data = [];
			var headers = [];

			$('#tableData thead th').each(function() {
				var $checkbox = $(this).find('.column-select');
				if ($checkbox.length === 0 || $checkbox.is(':checked')) {
					headers.push($(this).text().replace(/\n/g, ' ').trim());
				}
			});
			ws_data.push(headers);

			$('#tableData tbody tr:visible').each(function() {
				var $checkbox = $(this).find('.row-select');
				if ($checkbox.length === 0 || $checkbox.is(':checked')) {
					var row = [];
					$(this).find('td').each(function(index) {
						var $colCheckbox = $('#tableData thead th').eq(index).find('.column-select');
						if ($colCheckbox.length === 0 || $colCheckbox.is(':checked')) {
							row.push($(this).text().trim());
						}
					});
					ws_data.push(row);
				}
			});

			var ws = XLSX.utils.aoa_to_sheet(ws_data);
			XLSX.utils.book_append_sheet(wb, ws, "Product Inventory");
			XLSX.writeFile(wb, 'product_inventory_' + new Date().toISOString().slice(0, 19) + '.xlsx');
		});
	});
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
										<h3 class="box-title">Product Details List (Inventory)</h3>
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

									<div class="row padall">
										<div class="col-lg-12">
											<div class="row">
												<div class="col-md-6">
													<span id="rowCount" style="background: #6c757d; color: white; padding: 5px 12px; border-radius: 3px; font-size: 12px;">
														<i class="fa fa-list"></i> Rows: 0
													</span>
												</div>
												<div class="col-md-6">
													<div class="float-right">
														<button id="downloadExcel" class="btn-download-excel">
															<i class="fa fa-file-excel-o"></i> Excel
														</button>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="table-responsive no-padding table-container">
										<table id="tableData" class="table table-hover tablesorter">
											<thead>
												<tr>
													<th><input type="checkbox" class="column-select" checked><br />SL</th>
													<th><input type="checkbox" class="column-select" checked><br />PUR.For</th>
													<th><input type="checkbox" class="column-select" checked><br />A.Code</th>
													<th><input type="checkbox" class="column-select" checked><br />Factory</th>
													<th><input type="checkbox" class="column-select" checked><br />Supplier</th>
													<th><input type="checkbox" class="column-select" checked><br />Category</th>
													<th><input type="checkbox" class="column-select" checked><br />Group</th>
													<th><input type="checkbox" class="column-select" checked><br />S.Group</th>
													<th><input type="checkbox" class="column-select" checked><br />MPR</th>
													<th><input type="checkbox" class="column-select" checked><br />Product</th>
													<th><input type="checkbox" class="column-select" checked><br />Model</th>
													<th><input type="checkbox" class="column-select" checked><br />Description</th>
													<th><input type="checkbox" class="column-select" checked><br />S/N</th>
													<th><input type="checkbox" class="column-select" checked><br />IP</th>
													<th><input type="checkbox" class="column-select" checked><br />MAC</th>
													<th><input type="checkbox" class="column-select" checked><br />PO Price</th>
													<th><input type="checkbox" class="column-select" checked><br />Qty</th>
													<th><input type="checkbox" class="column-select" checked><br />Pur.Date</th>
													<th><input type="checkbox" class="column-select" checked><br />Warranty</th>
													<th><input type="checkbox" class="column-select" checked><br />E.Date</th>
													<th><input type="checkbox" class="column-select" checked><br />Rem.Day</th>
													<th><input type="checkbox" class="column-select" checked><br />Status</th>
													<th><input type="checkbox" class="column-select" checked><br />U.ID</th>
													<th><input type="checkbox" class="column-select" checked><br />U.Name</th>
													<th><input type="checkbox" class="column-select" checked><br />U.Dept</th>
													<th><input type="checkbox" class="column-select" checked><br />U.Desig</th>
													<th><input type="checkbox" class="column-select" checked><br />G.Date</th>
													<?php if ($this->session->userdata('user_type') != '3' && $this->session->userdata('user_type') != '4') { ?>
														<th class="filter-false"><input type="checkbox" class="column-select" checked><br />Edit</th>
														<th class="filter-false"><input type="checkbox" class="column-select" checked><br />Transfer</th>
														<th class="filter-false"><input type="checkbox" class="column-select" checked><br />Release</th>
													<?php } ?>
													<th><input type="checkbox" class="column-select" checked><br />T.Using</th>
												</tr>
											</thead>
											<tfoot>
												<tr>
													<th colspan="15" style="text-align:right; font-weight:700;">Total PO Price:</th>
													<th id="totalPoPriceFooter" style="background:#e2e8f0; font-weight:700;">0.00</th>
													<th colspan="11">&nbsp;</th>
													<?php if ($this->session->userdata('user_type') != '3' && $this->session->userdata('user_type') != '4') { ?>
														<th colspan="3">&nbsp;</th>
													<?php } ?>
													<th>&nbsp;</th>
												</tr>
											</tfoot>
											<tbody>
												<?php
												$i = 1;
												foreach ($ul as $row) {
													$warrantyDays = $row['warranty'];
													$years = floor($warrantyDays / 365);
													$months = floor(($warrantyDays % 365) / 30.5);
													$days = floor(($warrantyDays % 365) % 30.5);
													$warrantyDisplay = $years . ' years - ' . $months . ' month - ' . $days . ' days';

													$enddate = date("d-m-Y", strtotime("+" . $warrantyDays . " days", strtotime($row['pdate'])));
													$now = time();
													$enddate_ts = strtotime($enddate);
													$datediff = $enddate_ts - $now;
													$remain = round($datediff / (60 * 60 * 24));

													$statusText = '';
													$statusStyle = '';
													if ($row['pastatus'] == 1) {
														$statusText = "Using";
														$statusStyle = 'background:#FFD662;';
													} elseif ($row['pastatus'] == 0) {
														$statusText = "Free";
														$statusStyle = 'background:#819830; color:white;';
													} elseif ($row['pastatus'] == 2) {
														$statusText = $row['releasetype'];
														$statusStyle = 'background:#dd4b39; color:white;';
													}
												?>
													<tr data-piv="<?php echo $row['piv']; ?>">
														<td><label class="checkbox-inline"><input type="checkbox" class="row-select" checked> <?php echo $i++; ?></label></td>
														<td><?php echo $row['uname']; ?></td>
														<td style="background:<?php echo ($row['pastatus'] == 1 || $row['pastatus'] == 2) ? '#FFD662' : '#819830'; ?>"><?php echo $row['pacode']; ?></td>
														<td><?php echo $row['factoryid']; ?></td>
														<td><?php echo $row['supplier']; ?></td>
														<td style="background:#29B5DB;"><?php echo $row['pcname']; ?></td>
														<td><?php echo $row['pgname']; ?></td>
														<td><a href="<?php echo base_url(); ?>Dashboard/description_wise_list/<?php echo $row['psgid']; ?>"><?php echo $row['psgname']; ?></a></td>
														<td><a href="<?php echo base_url(); ?>Dashboard/mpr_wise_mpr_list/<?php echo $row['mprid']; ?>"><?php echo $row['mprid']; ?></a></td>
														<td><?php echo $row['pname']; ?></td>
														<td><?php echo $row['item']; ?></td>
														<td><?php echo $row['idescription']; ?></td>
														<td><?php echo $row['sn']; ?></td>
														<td><?php echo $row['ip']; ?></td>
														<td><?php echo $row['mac']; ?></td>
														<td><?php echo number_format($row['pprice'], 2, '.', ','); ?></td>
														<td><?php echo $row['iqty'] . " " . $row['puom']; ?></td>
														<td><?php echo date("d-m-Y", strtotime($row['pdate'])); ?></td>
														<td><?php echo $warrantyDisplay; ?></td>
														<td><?php echo $enddate; ?></td>
														<td style="background:<?php echo ($remain >= 0) ? '#819830' : '#FF473D'; ?>; color:white;"><?php echo ($remain >= 0) ? $remain : "End Of Warranty"; ?></td>
														<td style="<?php echo $statusStyle; ?>"><?php echo $statusText; ?></td>
														<td style="background:<?php echo ($row['pastatus'] == 1) ? '#FFD662' : '#819830'; ?>"><?php echo $row['userid']; ?></td>
														<td style="background:<?php echo ($row['pastatus'] == 1) ? '#FFD662' : '#819830'; ?>"><?php echo $row['name']; ?></td>
														<td style="background:<?php echo ($row['pastatus'] == 1) ? '#FFD662' : '#819830'; ?>"><?php echo $row['departmentname']; ?></td>
														<td style="background:<?php echo ($row['pastatus'] == 1) ? '#FFD662' : '#819830'; ?>"><?php echo $row['designation']; ?></td>
														<td style="background:<?php echo ($row['pastatus'] == 1) ? '#FFD662' : '#819830'; ?>"><?php echo ($row['pastatus'] == 1 && $row['adate']) ? date("d-m-Y", strtotime($row['adate'])) : '&nbsp;'; ?></td>
														<?php if ($this->session->userdata('user_type') != '3' && $this->session->userdata('user_type') != '4') { ?>
															<td>
																<?php if ($row['pastatus'] != 2) { ?>
																	<button class="edit-product-btn"
																		data-pacode="<?php echo $row['pacode']; ?>"
																		data-sn="<?php echo htmlspecialchars($row['sn']); ?>"
																		data-ip="<?php echo htmlspecialchars($row['ip']); ?>"
																		data-mac="<?php echo htmlspecialchars($row['mac']); ?>"
																		data-description="<?php echo htmlspecialchars($row['idescription']); ?>"
																		data-iqty="<?php echo $row['iqty']; ?>"
																		data-warranty="<?php echo $row['warranty']; ?>"
																		data-pdate="<?php echo $row['pdate']; ?>">
																		<i class="fa fa-edit"></i>
																	</button>
																<?php } else {
																	echo $row['releasetype'];
																} ?>
															</td>
															<td>
																<?php if ($row['pastatus'] == 0) { ?>
																	<!-- <a href="<?php echo base_url(); ?>Dashboard/product_transfer_form/<?php echo $row['pacode']; ?>" class="action-link action-transfer"><i class="fa fa-exchange"></i></a> -->
																	<button type="button"
																		class="action-link action-transfer transfer-product-btn"
																		data-pacode="<?php echo $row['pacode']; ?>"
																		data-factoryid="<?php echo $row['factoryid']; ?>">
																		<i class="fa fa-exchange"></i>
																	</button>
																<?php } elseif ($row['pastatus'] == 1) {
																	echo "Using";
																} else {
																	echo $row['releasetype'];
																} ?>
															</td>
															<td>
																<?php if ($row['pastatus'] == 0) { ?>
																	<!-- <a href="<?php echo base_url(); ?>Dashboard/item_release_form/<?php echo $row['pacode']; ?>" class="action-link action-release"><i class="fa fa-trash"></i></a> -->
																	<button type="button"
																		class="action-link action-release release-product-btn"
																		data-pacode="<?php echo $row['pacode']; ?>">
																		<i class="fa fa-trash"></i>
																	</button>
																<?php } elseif ($row['pastatus'] == 2) {
																	echo $row['releasetype'];
																} else {
																	echo "&nbsp;";
																} ?>
															</td>
														<?php } ?>
														<td><a class="action-view" href="<?php echo base_url(); ?>Dashboard/product_use_history/<?php echo $row['pacode']; ?>"><?php echo $row['totalusing']; ?></a></td>
													</tr>
												<?php } ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>

	<!-- Edit Modal -->
	<div class="modal fade" id="editModal" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title"><i class="fa fa-edit"></i> Edit Product Details</h4>
				</div>
				<form id="editForm">
					<div class="modal-body">
						<input type="hidden" name="pacode" id="editPacode">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>S/N</label>
									<input type="text" class="form-control" name="sn" id="editSn">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>IP</label>
									<input type="text" class="form-control" name="ip" id="editIp">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>MAC</label>
									<input type="text" class="form-control" name="mac" id="editMac">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Quantity</label>
									<input type="number" class="form-control" name="iqty" id="editIqty">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Warranty (Days)</label>
									<input type="number" class="form-control" name="warranty" id="editWarranty">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Purchase Date</label>
									<input type="text" class="form-control datepicker" name="pdate" id="editPdate" readonly>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label>Description</label>
									<textarea class="form-control" name="description" id="editDescription" rows="3"></textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<button type="submit" class="btn btn-primary" id="btnUpdateProduct">Update Product</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Transfer Modal -->
	<div class="modal fade" id="transferModal" tabindex="-1" role="dialog" data-backdrop="static">
		<div class="modal-dialog">
			<div class="modal-content">

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						<span>&times;</span>
					</button>

					<h4 class="modal-title">
						<i class="fa fa-exchange"></i> Product Transfer
					</h4>
				</div>

				<form id="transferForm">

					<div class="modal-body">

						<input type="hidden" name="pacode" id="transferPacode">

						<div class="form-group">
							<label>Factory</label>

							<select class="form-control" name="factoryid" id="transferFactoryid">

								<?php foreach ($fl as $f) { ?>

									<option value="<?php echo $f['factoryid']; ?>">
										<?php echo $f['factoryid']; ?>
									</option>

								<?php } ?>

							</select>
						</div>

					</div>

					<div class="modal-footer">

						<button type="button" class="btn btn-default" data-dismiss="modal">
							Cancel
						</button>

						<button type="submit" class="btn btn-primary" id="btnTransfer">
							Transfer
						</button>

					</div>

				</form>

			</div>
		</div>
	</div>

	<div class="modal fade" id="releaseModal" tabindex="-1" role="dialog" data-backdrop="static">
		<div class="modal-dialog">
			<div class="modal-content">

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						<span>&times;</span>
					</button>
					<h4 class="modal-title">
						<i class="fa fa-trash"></i> Item Release
					</h4>
				</div>

				<form id="releaseForm">

					<div class="modal-body">

						<input type="hidden" name="pacode" id="releasePacode">

						<div class="form-group">
							<label>Dispose Date</label>
							<input type="text"
								class="form-control"
								name="ddate"
								value="<?php echo date('d-m-Y'); ?>"
								readonly>
						</div>

						<div class="form-group">
							<label>Release Type</label>
							<select class="form-control" name="irid" id="releaseIrid" required>
								<option value="">-- Select Release Type --</option>
								<?php foreach ($rl as $r) { ?>
									<option value="<?php echo $r['irid']; ?>">
										<?php echo $r['releasetype']; ?>
									</option>
								<?php } ?>
							</select>
						</div>

						<div class="form-group">
							<label>Remarks</label>
							<textarea class="form-control"
								name="remarks"
								rows="3"
								placeholder="Optional remarks"></textarea>
						</div>

					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">
							Cancel
						</button>

						<button type="submit" class="btn btn-danger" id="btnRelease">
							Release
						</button>
					</div>

				</form>

			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
	<script src="https://cdn.sheetjs.com/xlsx-0.20.2/package/dist/xlsx.full.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	<script>
		$(document).ready(function() {
			$(".datepicker").datepicker({
				dateFormat: 'dd-mm-yy',
				changeMonth: true,
				changeYear: true
			});

			var currentRow = null;
			var currentButton = null;

			$(document).on('click', '.edit-product-btn', function() {
				currentButton = $(this);
				currentRow = currentButton.closest('tr');

				// Get values from the button's data attributes (which will now be updated after edit)
				$('#editPacode').val(currentButton.data('pacode'));
				$('#editSn').val(currentButton.data('sn') || '');
				$('#editIp').val(currentButton.data('ip') || '');
				$('#editMac').val(currentButton.data('mac') || '');
				$('#editDescription').val(currentButton.data('description') || '');
				$('#editIqty').val(currentButton.data('iqty') || 0);
				$('#editWarranty').val(currentButton.data('warranty') || '');

				var pdate = currentButton.data('pdate');
				if (pdate && pdate !== '0000-00-00') {
					var d = new Date(pdate);
					if (!isNaN(d.getTime())) {
						$('#editPdate').val(('0' + d.getDate()).slice(-2) + '-' + ('0' + (d.getMonth() + 1)).slice(-2) + '-' + d.getFullYear());
					}
				}
				$('#editModal').modal('show');
			});

			function updateStats() {
				var visibleRowsCount = $('#tableData tbody tr:visible').length;
				$('#rowCount').text("Rows: " + visibleRowsCount);

				var totalPrice = 0;
				$('#tableData tbody tr:visible').each(function() {
					var priceText = $(this).find('td').eq(15).text().replace(/,/g, '');
					var price = parseFloat(priceText);
					if (!isNaN(price)) {
						totalPrice += price;
					}
				});
				$('#totalPoPriceFooter').text(totalPrice.toLocaleString('en-US', {
					minimumFractionDigits: 2,
					maximumFractionDigits: 2
				}));
			}

			$('#editForm').on('submit', function(e) {
				e.preventDefault();
				var formData = $(this).serialize();
				var $btn = $('#btnUpdateProduct');
				$btn.prop('disabled', true).text('Updating...');

				$.ajax({
					url: '<?php echo base_url(); ?>Dashboard/productinventorylup_ajax',
					type: 'POST',
					data: formData,
					dataType: 'json',
					success: function(res) {
						if (res.status == 'success') {
							if (currentRow && currentRow.length > 0) {
								var uom = currentRow.find('td').eq(16).text().split(' ')[1] || '';
								var warrantyDays = parseInt($('#editWarranty').val()) || 0;
								var years = Math.floor(warrantyDays / 365);
								var months = Math.floor((warrantyDays % 365) / 30.5);
								var days = Math.floor((warrantyDays % 365) % 30.5);

								// Update the row cells
								currentRow.find('td').eq(12).text($('#editSn').val());
								currentRow.find('td').eq(13).text($('#editIp').val());
								currentRow.find('td').eq(14).text($('#editMac').val());
								currentRow.find('td').eq(11).text($('#editDescription').val());
								currentRow.find('td').eq(16).text($('#editIqty').val() + ' ' + uom);
								currentRow.find('td').eq(18).text(years + ' years - ' + months + ' month - ' + days + ' days');
								currentRow.find('td').eq(17).text($('#editPdate').val());

								// IMPORTANT: Update the button's data attributes for next edit
								if (currentButton && currentButton.length > 0) {
									currentButton.data('sn', $('#editSn').val());
									currentButton.data('ip', $('#editIp').val());
									currentButton.data('mac', $('#editMac').val());
									currentButton.data('description', $('#editDescription').val());
									currentButton.data('iqty', $('#editIqty').val());
									currentButton.data('warranty', $('#editWarranty').val());
									currentButton.data('pdate', $('#editPdate').val());

									// Also update the button's data attributes using attr() for persistence
									currentButton.attr('data-sn', $('#editSn').val());
									currentButton.attr('data-ip', $('#editIp').val());
									currentButton.attr('data-mac', $('#editMac').val());
									currentButton.attr('data-description', $('#editDescription').val());
									currentButton.attr('data-iqty', $('#editIqty').val());
									currentButton.attr('data-warranty', $('#editWarranty').val());

									// Convert date format for attribute
									var pdateVal = $('#editPdate').val();
									if (pdateVal) {
										var parts = pdateVal.split('-');
										if (parts.length == 3) {
											var dbDate = parts[2] + '-' + parts[1] + '-' + parts[0];
											currentButton.attr('data-pdate', dbDate);
											currentButton.data('pdate', dbDate);
										}
									}
								}

								currentRow.addClass('highlight-row');
								setTimeout(function() {
									currentRow.removeClass('highlight-row');
								}, 2000);
								updateStats();
							}

							Swal.fire({
								icon: 'success',
								title: 'Success!',
								text: res.message,
								timer: 1500,
								showConfirmButton: false
							});
							$('#editModal').modal('hide');
							currentRow = null;
							currentButton = null;
						} else {
							Swal.fire({
								icon: 'error',
								title: 'Error!',
								text: res.message
							});
						}
						$btn.prop('disabled', false).text('Update Product');
					},
					error: function(xhr) {
						console.log(xhr.responseText);
						Swal.fire({
							icon: 'error',
							title: 'Error!',
							text: 'Could not connect to server.'
						});
						$btn.prop('disabled', false).text('Update Product');
					}
				});
			});

			$('#editModal').on('hidden.bs.modal', function() {
				$('#editForm')[0].reset();
				$('#btnUpdateProduct').prop('disabled', false).text('Update Product');
				currentRow = null;
				currentButton = null;
			});



			var transferRow = null;

			$(document).on('click', '.transfer-product-btn', function() {

				transferRow = $(this).closest('tr');

				var pacode = $(this).data('pacode');
				var factoryid = $(this).data('factoryid');

				$('#transferPacode').val(pacode);
				$('#transferFactoryid').val(factoryid);

				$('#transferModal').modal('show');
			});

			var transferRow = null;

			$(document).on('click', '.transfer-product-btn', function() {

				transferRow = $(this).closest('tr');

				var pacode = $(this).data('pacode');
				var factoryid = $(this).data('factoryid');

				$('#transferPacode').val(pacode);
				$('#transferFactoryid').val(factoryid);

				$('#transferModal').modal('show');
			});

			$('#transferForm').on('submit', function(e) {

				e.preventDefault();

				var formData = $(this).serialize();

				$('#btnTransfer')
					.prop('disabled', true)
					.text('Transferring...');

				$.ajax({

					url: '<?php echo base_url(); ?>Dashboard/producthistorylup_ajax',

					type: 'POST',

					data: formData,

					dataType: 'json',

					success: function(res) {

						if (res.status == 'success') {

							if (transferRow) {

								var newFactory = $('#transferFactoryid').val();

								// Update table column instantly
								transferRow.find('td').eq(3).text(newFactory);

								// Update button data
								var transferButton = transferRow.find('.transfer-product-btn');

								transferButton.data('factoryid', newFactory);
								transferButton.attr('data-factoryid', newFactory);

								transferRow.addClass('highlight-row');

								setTimeout(function() {
									transferRow.removeClass('highlight-row');
								}, 2000);
							}

							Swal.fire({
								icon: 'success',
								title: 'Success!',
								text: res.message,
								timer: 1500,
								showConfirmButton: false
							});

							$('#transferModal').modal('hide');

						} else {

							Swal.fire({
								icon: 'error',
								title: 'Error!',
								text: res.message
							});
						}

						$('#btnTransfer')
							.prop('disabled', false)
							.text('Transfer');
					},

					error: function() {

						Swal.fire({
							icon: 'error',
							title: 'Error!',
							text: 'Server Error'
						});

						$('#btnTransfer')
							.prop('disabled', false)
							.text('Transfer');
					}
				});
			});
		});
	</script>
	<script>
		$(document).ready(function() {

			let releaseRow = null;

			// ==============================
			// OPEN MODAL
			// ==============================
			$(document).on('click', '.release-product-btn', function() {

				releaseRow = $(this).closest('tr');

				let pacode = $(this).data('pacode');

				$('#releasePacode').val(pacode);
				$('#releaseIrid').val('');
				$('#releaseModal').modal('show');
			});

			// ==============================
			// SUBMIT RELEASE FORM
			// ==============================
			$('#releaseForm').on('submit', function(e) {
				e.preventDefault();

				let formData = $(this).serialize();

				$('#btnRelease')
					.prop('disabled', true)
					.text('Releasing...');

				$.ajax({
					url: '<?php echo base_url(); ?>Dashboard/item_release_insert_ajax',
					type: 'POST',
					data: formData,
					dataType: 'json',

					success: function(res) {

						if (res.status === 'success') {

							if (releaseRow) {

								let type = res.releasetype || '';

								// ==============================
								// UPDATE STATUS CELL (21 index)
								// ==============================
								releaseRow.find('td').eq(21)
									.text(type)
									.css({
										//"background": "#dd4b39",
										"color": "#000",
										//"font-weight": "600"
									});

									releaseRow.find('td').eq(27)
									.text(type)
									.css({
										//"background": "#dd4b39",
										"color": "#000",
										//"font-weight": "600"
									});

									releaseRow.find('td').eq(28)
									.text(type)
									.css({
										//"background": "#dd4b39",
										"color": "#000",
										//"font-weight": "600"
									});

									releaseRow.find('td').eq(29)
									.text(type)
									.css({
										//"background": "#dd4b39",
										"color": "#000",
										//"font-weight": "600"
									});

								// ==============================
								// REMOVE ACTION BUTTONS
								// ==============================
								//releaseRow.find('.release-product-btn').remove();
								//releaseRow.find('.transfer-product-btn').remove();

								// highlight effect
								releaseRow.addClass('highlight-row');

								setTimeout(function() {
									releaseRow.removeClass('highlight-row');
								}, 1500);
							}

							Swal.fire({
								icon: 'success',
								title: 'Released Successfully',
								text: res.message,
								timer: 1500,
								showConfirmButton: false
							});

							$('#releaseModal').modal('hide');

						} else {

							Swal.fire({
								icon: 'error',
								title: 'Failed',
								text: res.message
							});
						}

						$('#btnRelease')
							.prop('disabled', false)
							.text('Release');
					},

					error: function() {

						Swal.fire({
							icon: 'error',
							title: 'Server Error',
							text: 'Please try again'
						});

						$('#btnRelease')
							.prop('disabled', false)
							.text('Release');
					}

				});
			});

			// ==============================
			// RESET MODAL AFTER CLOSE
			// ==============================
			$('#releaseModal').on('hidden.bs.modal', function() {

				$('#releaseForm')[0].reset();
				$('#btnRelease').prop('disabled', false).text('Release');
				releaseRow = null;
			});

		});
	</script>
</body>

</html>