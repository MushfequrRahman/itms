<style>
    body {
        font-family: Arial;
    }

    .wrapper {
        width: 900px;
        margin: auto;
    }

    .agreement-page {
        width: 900px;
        margin: auto;
        page-break-after: always;
        border: 1px solid #ccc;
        padding: 20px;
        margin-bottom: 40px;
    }

    .print-btn {
        float: right;
        margin-bottom: 10px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    table,
    th,
    td {
        border: 1px solid black;
    }

    th {
        font-size: 12px;
        padding: 5px;
    }

    td {
        font-size: 11px;
        padding: 5px;
    }

    .header {
        text-align: center;
        border-bottom: 1px solid black;
        padding-bottom: 10px;
    }

    .profile-row {
        display: flex;
        justify-content: space-between;
        margin-top: 5px;
    }

    .section-title {
        text-align: center;
        font-weight: bold;
        margin: 15px 0;
    }

    .bottom {
        margin-top: 80px;
        display: flex;
        justify-content: space-between;
    }

    .bottom div {
        width: 30%;
        text-align: center;
        border-top: 1px solid black;
        padding-top: 5px;
        font-size: 11px;
    }

    @media print {
        .print-btn {
            display: none;
        }
    }
</style>


<script>
    function printAgreement(id) {

        var content = document.getElementById(id).innerHTML;

        var myWindow = window.open('', '', 'width=900,height=1000');

        myWindow.document.write('<html><head><title>Print</title>');
        myWindow.document.write('</head><body>');
        myWindow.document.write(content);
        myWindow.document.write('</body></html>');

        myWindow.document.close();
        myWindow.print();

    }
</script>


<body>

    <?php
    $i = 1;
    foreach ($ul as $row) {
    ?>

        <div class="agreement-page" id="agreement<?php echo $i; ?>">

            <button class="print-btn" onclick="printAgreement('agreement<?php echo $i; ?>')">
                Print
            </button>


            <div class="header">

                <img style="width:80px;height:35px;" src="<?php echo base_url() . 'assets/images/babylon.png'; ?>">

                <h3>BABYLON GROUP</h3>

                <p>2-B/1, Darus Salam Road, Mirpur, Dhaka-1216</p>

                <h4>Babylon Information Technology Department</h4>

                <h4>Laptop Handover Agreement</h4>

            </div>


            <div class="profile-row">
                <div><b>Unit:</b> <?php echo $row['factoryid']; ?></div>
                <div><b>ID:</b> <?php echo $row['userid']; ?></div>
                <div><b>Name:</b> <?php echo $row['name']; ?></div>
            </div>

            <div class="profile-row">
                <div><b>Department:</b> <?php echo $row['departmentname']; ?></div>
                <div><b>Designation:</b> <?php echo $row['designation']; ?></div>
                <div><b>Email:</b> <?php echo $row['email']; ?></div>
            </div>


            <div class="section-title">Device Info</div>

            <table>

                <tr>
                    <td>MPR</td>
                    <td><?php echo $row['mprid']; ?></td>
                </tr>

                <tr>
                    <td>PO</td>
                    <td><?php echo $row['po']; ?></td>
                </tr>

                <tr>
                    <td>Purchase Date</td>
                    <td><?php echo date("d-m-Y", strtotime($row['pdate'])); ?></td>
                </tr>

                <tr>
                    <td>GRN</td>
                    <td><?php echo $row['grn']; ?></td>
                </tr>

                <tr>
                    <td>Asset Code</td>
                    <td><?php echo $row['pacode']; ?></td>
                </tr>

                <tr>
                    <td>Product</td>
                    <td><?php echo $row['pname']; ?></td>
                </tr>

                <tr>
                    <td>Model</td>
                    <td><?php echo $row['item']; ?></td>
                </tr>

                <tr>
                    <td>Technical Specification</td>
                    <td><?php echo $row['idescription']; ?></td>
                </tr>

                <tr>
                    <td>Domain/IP/MAC</td>
                    <td><?php echo $row['ip'] . ' / ' . $row['mac']; ?></td>
                </tr>

                <tr>
                    <td>Serial</td>
                    <td><?php echo $row['sn']; ?></td>
                </tr>

                <tr>
                    <td>Assign Date</td>
                    <td>

                        <?php
                        if ($row['adate'] != '') {
                            echo date("d-m-Y", strtotime($row['adate']));
                        }
                        ?>

                    </td>
                </tr>

            </table>


            <div class="agreement">
                <p style="text-align:center;"><strong>Introduction</strong></p>
                <p>These are the terms and conditions for the Babylon Information Technology department IT Product service program. This agreement sets forth the conditions and responsibilities for the checkout of product. You agree to the Terms and Conditions hereinafter set forth.
                </p>
                <p style="text-align:center;"><strong>NATURE OF THIS AGREEMENT</strong></p>
                <p>You must return the product in the same condition you received it. The products are the property of the Babylon Group. The product must be returned during leave of the company by signing document, and pay any fees and charges incurred under this Agreement related to damage, missing parts or failure to return the product. You agree to defend, indemnify and hold Babylon Group harmless from and against any and all loss, liability or damages whatsoever during the custody. You will not attempt to repair the product without the consent of IT. Further, you agree to stop using the product if the operating system reports irreparable hardware failure and to inform the IT staff of the problem as soon as possible.
                </p>
                <p style="text-align:center;"><strong>TERMS AND CONDITIONS</strong></p>
                <p>1. IT reserves the right to permanently and/or from time to time, changes, modify, restrict, suspend and/or terminate this agreement.
                    <br />
                    2. Your Laptop is not transferable.
                    <br />
                    3. Hardware may not, in any way, be damaged, removed or adjusted. Doing so will be considered unauthorized use of IT equipment and may result in disciplinary action, fines, or other penalties.
                    <br />
                    4. If equipment is not operating properly, you agree to notify technical support immediately by phone or emailing: <strong>itinfo@babylon-bd.com</strong>
                    <br />
                </p>
                <p style="text-align:center;"><strong>CHARGES AND FEES
                    </strong></p>
                <p>You will be charged for any damages or failure to return product. Damages to be assessed by office of Information Technology.
                    Any repairs will be performed by IT.
                    All charges are subject to final audit. If errors are discovered, you will pay the corrected amount.

                </p>
            </div>



            <div class="bottom">

                <div>

                    Prepared By<br>

                    <?php echo $this->session->userdata('name'); ?><br>

                    <?php echo date('d-m-Y'); ?>

                </div>


                <div>

                    Product Receiver<br>

                    <?php echo $row['name']; ?><br>

                    <?php echo date('d-m-Y'); ?>

                </div>


                <div>

                    Department Head<br>

                    &nbsp;

                </div>


            </div>


            <p style="text-align:center;font-size:10px;margin-top:40px;">

                System Generated Document

            </p>

            <p style="text-align:center;font-size:10px;">

                Date: <?php echo date('d-m-Y'); ?>

                Time: <?php echo date('h:i:s A'); ?>

            </p>


        </div>

    <?php
        $i++;
    }
    ?>

</body>