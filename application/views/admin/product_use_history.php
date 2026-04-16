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

	@media print {
		.no-print {
			display: none !important;
		}

		@media print {
			@page {
				size: A4;
				margin: 10mm;
			}
		}
	}
</style>




<body class="hold-transition skin-blue sidebar-mini">

	<div class="wrapper">
		<div class="content-wrapper">
			<section class="content">

				<div class="row">
					<div class="col-md-12">

						<div class="box box-danger">

							<div class="box-header with-border">
								<h3 class="box-title">Product Using History</h3>


							</div>

							<div class="box-body">

								<?php
date_default_timezone_set('Asia/Dhaka');

$device = $ul[0]; // ✅ ONLY ONE DEVICE
?>

<div class="agreement-wrapper" id="agreement1" style="border:1px solid #ccc; padding:15px;">

    <!-- Print Button -->
    <div class="no-print" style="text-align:right;">
        <button onclick="printSingleLPT('agreement1')">Print</button>
    </div>

    <!-- Header -->
    <div style="text-align:center;">
        <img style="width:80px;height:35px;" src="<?php echo base_url().'assets/images/babylon.png'; ?>">
        <h3>BABYLON GROUP</h3>
        <p>Mirpur, Dhaka</p>
        <h4>Device Health Info</h4>
    </div>

    <!-- ✅ DEVICE INFO (ONCE ONLY) -->
    <table width="100%" cellpadding="5" cellspacing="0">
        <tr><td>MPR</td><td><?php echo $device['mprid']; ?></td></tr>
        <tr><td>PO</td><td><?php echo $device['po']; ?></td></tr>
        <tr><td>Purchase Date</td><td><?php echo date("d-m-Y", strtotime($device['pdate'])); ?></td></tr>
        <tr><td>Asset Code</td><td><?php echo $device['pacode']; ?></td></tr>
        <tr><td>Product</td><td><?php echo $device['pname']; ?></td></tr>
        <tr><td>Model</td><td><?php echo $device['item']; ?></td></tr>
        <tr><td>Specification</td><td><?php echo $device['idescription']; ?></td></tr>
        <tr><td>IP/MAC</td><td><?php echo $device['ip'].' / '.$device['mac']; ?></td></tr>
        <tr><td>Serial</td><td><?php echo $device['sn']; ?></td></tr>

        <?php
        $enddate = strtotime("+" . $device['warranty'] . " days", strtotime($device['pdate']));
        $remain = round(($enddate - time()) / (60 * 60 * 24));
        $remain = ($remain >= 0) ? $remain . " Days Remaining" : "Expire";
        ?>

        <tr><td>Warranty</td><td><?php echo $remain; ?></td></tr>
        <tr><td>Assign Date</td><td><?php echo date("d-m-Y", strtotime($device['adate'])); ?></td></tr>
    </table>

    <!-- ✅ USAGE HISTORY -->
    <h4 style="text-align:center;">Device Use Info</h4>

    <table width="100%" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>SL</th>
                <th>Asset Code</th>
                <th>User ID</th>
                <th>User Name</th>
                <th>Given Date</th>
                <th>Return Date</th>
                <th>Status</th>
            </tr>
        </thead>

        <tbody>
            <?php $i = 1; foreach ($ul as $row): ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $row['pacode']; ?></td>
                <td><?php echo $row['userid']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo date("d-m-Y", strtotime($row['adate'])); ?></td>

                <td>
                    <?php echo ($row['rdate'] != '0000-00-00') 
                        ? date("d-m-Y", strtotime($row['rdate'])) 
                        : ''; ?>
                </td>

                <td>
                    <?php
                    if ($row['astatus'] == 1) echo "Using";
                    elseif ($row['astatus'] == 0) echo "Used";
                    else echo $row['releasetype'];
                    ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!-- Footer -->
    <div style="text-align:center; margin-top:20px;">
        <p>Date: <?php echo date('d-m-Y'); ?></p>
        <p>This is system generated document</p>
    </div>

</div>

							</div>
						</div>

					</div>
				</div>

			</section>
		</div>
	</div>

</body>
<script>
	function printSingleLPT(divId) {

		var content = document.getElementById(divId).innerHTML;

		var myWindow = window.open('', '', 'width=900,height=700');

		myWindow.document.write(`
        <html>
        <head>
            <title>Print</title>
            <style>
                body {
                    font-family: Arial;
                    padding: 20px;
                }
                table {
                    width: 100%;
                    border-collapse: collapse;
                }
                td, th {
                    border: 1px solid #000;
                    padding: 5px;
                    text-align: center;
                    font-size: 11px;
                }
                h3, h4, p {
                    text-align: center;
                }
                .no-print {
                    display: none;
                }
            </style>
        </head>
        <body>
            ${content}
        </body>
        </html>
    `);

		myWindow.document.close();
		myWindow.focus();
		myWindow.print();
	}
</script>

</html>