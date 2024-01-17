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
										<h3 class="box-title">Product Details List</h3>
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
									<div class="row">
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
									<br />
									<div class="box-body table-responsive no-padding">
										<div class="scrollable-table-wrapper">
											<table id="tableData" class="table table-hover table-bordered">
												<thead style="background:#91b9e6;position: sticky;top: 0;">
													<tr>
														<th>SL</th>
														<th>Code/Assign</th>
														<th>Factory</th>
														<th>Supplier</th>
														<th>Category</th>
														<th>Group</th>
														<th>Sub Group</th>
														<th>MPR</th>
														<th>Name</th>
														<th>Serial Number</th>
														<th>Item</th>
														<th>Description</th>
														<th>PO Price</th>
														<th>Qty</th>
														<th>Purchase Date</th>
														<th>Warranty</th>
														<th>End Date</th>
														<th>Remaining Day</th>
														<th>Status/Return</th>
														<th>UserID</th>
														<th>UserName</th>
														<th>UserDepartment</th>
														<th>Given Date</th>
														<th>Edit</th>
														<th>Transfer</th>
														<th>Release</th>
													</tr>
												</thead>
												<tbody>
													<?php
													$i = 1;
													foreach ($ul as $row) {
													?>
														<tr>
															<td style="vertical-align:middle;"><?php echo $i++; ?></td>
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
															<td style="vertical-align:middle;"><?php echo $row['mprid']; ?></td>
															<td style="vertical-align:middle;"><?php echo $row['pname']; ?></td>

															<td style="vertical-align:middle;"><?php echo $row['sn']; ?></td>

															<td style="vertical-align:middle;"><?php echo $row['item']; ?></td>
															<td style="vertical-align:middle;"><?php echo $row['description']; ?></td>
															<td style="vertical-align:middle;"><?php echo $row['pprice']; ?></td>
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
										</div>
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