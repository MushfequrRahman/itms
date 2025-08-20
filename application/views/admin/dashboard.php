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
		font-size: 10px;
		text-align: center;
	}

	.info-box-number {
		display: block;
		font-weight: bold;
		font-size: 12px;
	}

	.fayellow {
		color: #FF6;
	}

	.fared {
		color: #900;
	}

	.faorange {
		color: #F90;
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

<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<div class="content-wrapper">
			<section class="content-header">
				<h1>Dashboard</h1>
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-12">
								<div class="box box-danger">
									<div class="box-header with-border">
										<?php $this->session->userdata('userid'); ?>
										<?php $this->session->userdata('user_type'); ?>
										<h3 class="box-title"></h3>
										<div class="row">
											<div class="col-lg-3 col-xs-6">
												<!-- small box -->
												<div class="small-box bg-aqua">
													<div class="inner">
														<?php
														foreach ($mprl as $row) { ?>
															<h4><?php echo number_format($row['price'], 2, '.', ','); ?></h4>
														<?php
														}
														?>

														<p>MPR</p>
													</div>
													<div class="icon">
														<i class="ion ion-bag"></i>
													</div>
													<!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
												</div>
											</div>
											<div class="col-lg-3 col-xs-6">
												<!-- small box -->
												<div class="small-box bg-yellow">
													<div class="inner">
														<?php
														foreach ($col as $row) {
															if ($row['pcname'] == 'Capex') {
																$capex = $row['price'];
															} else {
																$opex = $row['price'];
															} ?>

														<?php
														}
														?>
														<h4><?php echo number_format($capex, 2, '.', ','); ?>/<?php echo number_format($opex, 2, '.', ','); ?></h4>
														<p>Capex/Opex(MPR)</p>
													</div>
													<div class="icon">
														<i class="ion ion-person-add"></i>
													</div>
													<!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
												</div>
											</div>
											<div class="col-lg-3 col-xs-6">
												<!-- small box -->
												<div class="small-box bg-red">
													<div class="inner">
														<?php
														foreach ($el as $row) {
															if ($row['etypename'] == 'Head Office') {
																$h = $row['price'];
															} else {
																$f = $row['price'];
															} ?>

														<?php
														}
														?>
														<h4><?php echo number_format($h, 2, '.', ','); ?>/<?php echo number_format($f, 2, '.', ','); ?></h4>

														<p>Head Office/Factory(MPR)</p>
													</div>
													<div class="icon">
														<i class="ion ion-pie-graph"></i>
													</div>
													<!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
												</div>
											</div>
											<div class="col-lg-3 col-xs-6">
												<!-- small box -->
												<div class="small-box bg-green">
													<div class="inner">
														<?php
														foreach ($pl as $row) { ?>
															<h4><?php echo number_format($row['pot'], 2, '.', ','); ?></h4>
														<?php
														}
														?>

														<p>PO</p>
													</div>
													<div class="icon">
														<i class="ion ion-stats-bars"></i>
													</div>
													<!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="chart-container" style="position: relative;">
													<canvas id="my_Chart"></canvas>
												</div>
											</div>
											<div class="col-md-6">
												<div class="chart-container" style="position: relative;">
													<canvas id="my_Chart1"></canvas>
												</div>
											</div>
										</div>
										<div class="row" style="margin:50px 0 0 0;">
											<div class="col-md-12">
												<div class="chart-container" style="position: relative;">
													<canvas id="my_Chart2" width="1000" height="400"></canvas>
												</div>
											</div>
										</div>
										<div class="row" style="margin:50px 0 0 0;">
											<div class="col-md-12">
												<h4 class="text-center">Unit-Wise Computer Status</h4>
												<table class="table table-bordered table-striped table-hover">
													<thead style="background-color: #999999;">
														<tr>
															<th>Unit</th>
															<th>Free Desktop</th>
															<th>Using Desktop</th>
															<th>Total Desktop</th>
															<th>Free Laptop</th>
															<th>Using Laptop</th>
															<th>Total Laptop</th>
														</tr>
													</thead>
													<tbody style="font-size:12px;font-weight:bold;">
														<?php
														// Initialize totals
														$total_free_desktop = 0;
														$total_using_desktop = 0;
														$total_desktop = 0;
														$total_free_laptop = 0;
														$total_using_laptop = 0;
														$total_laptop = 0;

														foreach ($computer as $r) {
															echo "<tr>";
															echo "<td>{$r['ifid']}</td>";
															echo "<td>{$r['desktop_free']}</td>";
															echo "<td>{$r['desktop_using']}</td>";
															echo "<td>{$r['total_desktop']}</td>";
															echo "<td>{$r['laptop_free']}</td>";
															echo "<td>{$r['laptop_using']}</td>";
															echo "<td>{$r['total_laptop']}</td>";
															echo "</tr>";

															// Sum totals
															$total_free_desktop += $r['desktop_free'];
															$total_using_desktop += $r['desktop_using'];
															$total_desktop += $r['total_desktop'];
															$total_free_laptop += $r['laptop_free'];
															$total_using_laptop += $r['laptop_using'];
															$total_laptop += $r['total_laptop'];
														}
														?>
														<!-- Total Row -->
														<tr style="font-weight:bold;">
															<td>Total</td>
															<td><?php echo $total_free_desktop; ?></td>
															<td><?php echo $total_using_desktop; ?></td>
															<td><?php echo $total_desktop; ?></td>
															<td><?php echo $total_free_laptop; ?></td>
															<td><?php echo $total_using_laptop; ?></td>
															<td><?php echo $total_laptop; ?></td>
														</tr>
													</tbody>
												</table>

											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</section>
		</div>
	</div>

	<script>
		// Data define for bar chart
		var cData = JSON.parse(`<?php echo $chart_data; ?>`);
		var myData = {
			//labels: ["Std OP", "Ex OP", "Pr OP", "Run Mach", "Std Hel", "Ex Hel", "Pr Hel","Std WS","Pr Manpower","Ex WS","Lv OP","Lv Hel","Ab OP","Ab Hel","Op > Helper","Op Ab%","Hel Ab%","OP Rec","Op Sep"],
			labels: cData.label,
			datasets: [{
				label: "Monthly Unit Wise MPR",
				fill: false,
				backgroundColor: ['#008000', '#AFE1AF', '#023020', '#50C878', '#4F7942', '#228B22', '#7CFC00', '#008000', '#355E3B', '#00A36C', '#2AAA8A', '#4CBB17', '#90EE90', '#32CD32'],
				borderColor: 'black',
				//data: [85, 60,70, 50, 18, 20, 45, 30, 20],
				data: cData.data,
			}]
		};
		// Options to display value on top of bars
		var myoption = {
			tooltips: {
				enabled: true
			},
			hover: {
				animationDuration: 1
			},
			animation: {
				duration: 1,
				onComplete: function() {
					var chartInstance = this.chart,
						ctx = chartInstance.ctx;
					ctx.textAlign = 'center';
					ctx.fillStyle = "rgba(0, 0, 0, 1)";
					ctx.textBaseline = 'bottom';
					this.data.datasets.forEach(function(dataset, i) {
						var meta = chartInstance.controller.getDatasetMeta(i);
						meta.data.forEach(function(bar, index) {
							var data = dataset.data[index];
							ctx.fillText(data, bar._model.x, bar._model.y - 5);
						});
					});
				}
			}
		};
		//Code to drow Chart
		var ctx = document.getElementById('my_Chart').getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar', // Define chart type
			data: myData, // Chart data
			options: myoption // Chart Options [This is optional paramenter use to add some extra things in the chart].
		});
	</script>


	<!-- PO Chart -->
	<script>
		var cData1 = JSON.parse(`<?php echo $chart_data1; ?>`);
		var myData1 = {
			labels: cData1.label,
			datasets: [{
				label: "Monthly Unit Wise PO",
				fill: false,
				backgroundColor: [
					'#008000', '#AFE1AF', '#023020', '#50C878', '#4F7942',
					'#228B22', '#7CFC00', '#008000', '#355E3B', '#00A36C',
					'#2AAA8A', '#4CBB17', '#90EE90', '#32CD32'
				],
				borderColor: 'black',
				data: cData1.data1, // <-- এখানে data1
			}]
		};

		var myoption1 = {
			tooltips: {
				enabled: true
			},
			hover: {
				animationDuration: 1
			},
			animation: {
				duration: 1,
				onComplete: function() {
					var chartInstance = this.chart,
						ctx = chartInstance.ctx;
					ctx.textAlign = 'center';
					ctx.fillStyle = "rgba(0, 0, 0, 1)";
					ctx.textBaseline = 'bottom';
					this.data.datasets.forEach(function(dataset, i) {
						var meta = chartInstance.controller.getDatasetMeta(i);
						meta.data.forEach(function(bar, index) {
							var data = dataset.data[index];
							ctx.fillText(data, bar._model.x, bar._model.y - 5);
						});
					});
				}
			}
		};

		var ctx1 = document.getElementById('my_Chart1').getContext('2d');
		var myChart1 = new Chart(ctx1, {
			type: 'bar',
			data: myData1,
			options: myoption1
		});
	</script>


	<script>
		var cData2 = JSON.parse(`<?php echo $chart_data2; ?>`);

		var myData2 = {
			labels: cData2.label,
			datasets: [{
					label: "Total Desktop",
					backgroundColor: "#36A2EB",
					data: cData2.total_desktop
				},
				{
					label: "Total Laptop",
					backgroundColor: "#FFCE56",
					data: cData2.total_laptop
				},
				{
					label: "Using Desktop",
					backgroundColor: "#4BC0C0",
					data: cData2.desktop_using
				},
				{
					label: "Free Desktop",
					backgroundColor: "#9966FF",
					data: cData2.desktop_free
				},
				{
					label: "Using Laptop",
					backgroundColor: "#FF9F40",
					data: cData2.laptop_using
				},
				{
					label: "Free Laptop",
					backgroundColor: "#C9CBCF",
					data: cData2.laptop_free
				}
			]
		};

		var ctx = document.getElementById("my_Chart2").getContext("2d");
		var myChart2 = new Chart(ctx, {
			type: 'bar',
			data: myData2,
			options: {
				responsive: true,
				legend: { // v2.4.0 এ সরাসরি options.legend
					position: 'top'
				},
				title: { // v2.4.0 এ সরাসরি options.title
					display: true,
					text: 'Unit-Wise Computer Graph',
					fontSize: 18
				},
				scales: {
					yAxes: [{ // v2.4.0 এ yAxes ব্যবহার করতে হবে
						ticks: {
							beginAtZero: true
						}
					}]
				}
			}
		});
	</script>

</body>

</html>