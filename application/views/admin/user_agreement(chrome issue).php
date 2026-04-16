<style>
  /* ================= GENERAL STYLES ================= */
  .wrapper {
    margin: 0 auto;
    width: 900px;
    padding: 5px;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
    page-break-after: always;
  }

  #tableData {
    width: 700px;
    border-collapse: collapse;
    table-layout: fixed;
    word-break: break-word;
  }

  #tableData,
  th,
  td {
    border: 1px solid black;
    padding: 4px;
    font-size: 10px;
    vertical-align: top;
  }

  th {
    text-align: center;
    font-size: 11px;
  }

  td {
    text-align: left;
    font-weight: bold;
    word-wrap: break-word;
    overflow-wrap: break-word;
  }

  #tableData td:nth-child(1) {
    width: 30%;
  }

  #tableData td:nth-child(2) {
    width: 70%;
  }

  .top {
    min-height: 180px;
    font-size: 18px;
  }

  .top1 {
    margin: auto;
    font-size: 12px;
    width: 700px;
    text-align: center;
    padding: 0 0 10px 0;
    border-bottom: 1px solid black;
  }

  .top2 {
    margin: 8px 0 0 0;
    font-size: 18px;
  }

  .content {
    margin: auto;
    width: 690px;
    min-height: 60px;
    border-bottom: 1px dashed black;
    overflow: hidden;
    box-sizing: border-box;
  }

  .content::after {
    content: "";
    display: block;
    clear: both;
  }

  .middle {
    margin: auto;
    width: 700px;
    min-height: 100px;
    box-sizing: border-box;
  }

  .agreement {
    margin: auto;
    width: 700px;
    font-size: 12px;
    line-height: 1.35;
  }

  .bottom-content {
    margin: 70px 0 0 0;
  }

  .bottom {
    margin: auto;
    width: 700px;
    min-height: 90px;
    font-size: 12px;
    font-weight: bold;
  }

  .bottom::after {
    content: "";
    display: block;
    clear: both;
  }

  .bottom1,
  .bottom2,
  .bottom3 {
    float: left;
    width: 227px;
    text-align: center;
    border-top: 1px solid black;
    margin: 2px;
    font-size: 10px;
  }

  .user-profile {
    display: inline;
    font-size: 12px;
    padding: 2px;
  }

  label {
    font-size: 12px;
    font-weight: 900;
  }

  .top2-content {
    width: 230px;
    float: left;
  }

  .top2-content-1 {
    width: 230px;
    float: left;
    text-align: center;
  }

  .top2-content-2 {
    width: 230px;
    float: right;
    text-align: right;
  }

  .print-btn {
    float: right;
    margin: 10px;
  }

  @page {
    size: A4;
    margin: 10mm;
  }

  @media print {
    body {
      margin: 0;
      font-family: Arial, sans-serif;
    }

    .wrapper {
      width: 186mm;
      margin: auto;
      page-break-after: always;
      page-break-inside: avoid;
    }

    #tableData {
      width: 100%;
      table-layout: fixed;
      word-break: break-word;
    }

    td {
      font-size: 9px;
      padding: 3px;
      vertical-align: top;
    }

    th {
      font-size: 10px;
    }

    .content,
    .middle,
    .agreement,
    .bottom {
      width: 100%;
    }

    .agreement {
      font-size: 10px;
      line-height: 1;
    }

    .bottom-content {
      margin-top: 20px;
    }

    .top {
      min-height: 160px;
    }

    .print-btn {
      display: none;
    }
  }
</style>

<script>
  function printSingleLPT(wrapperId) {
    var wrapper = document.getElementById(wrapperId);
    if (!wrapper) return;

    var wrapperClone = wrapper.cloneNode(true);
    var btn = wrapperClone.querySelector('.print-btn');
    if (btn) btn.remove();

    var printWindow = window.open('', '_blank', 'width=900,height=1200');

    var styles = '';
    document.querySelectorAll('style').forEach(function(styleTag) {
      styles += styleTag.innerHTML;
    });

    printWindow.document.write('<!DOCTYPE html><html><head><title>Print Laptop Agreement</title><style>' + styles + '</style></head><body>' + wrapperClone.outerHTML + '</body></html>');
    printWindow.document.close();

    setTimeout(function() {
      printWindow.focus();
      printWindow.print();
      printWindow.close();
    }, 500);
  }
</script>

<body>
  <?php
  error_reporting(0);
  date_default_timezone_set('Asia/Dhaka');

  $i = 1;
  foreach ($ul as $row):
    $uname = $row['name'];
  ?>
    <div class="wrapper" id="agreement<?php echo $i; ?>">
      <button class="print-btn" onclick="printSingleLPT('agreement<?php echo $i; ?>')">Print</button>

      <div class="top">
        <div class="top1">
          <h3>
            <img style="width:80px;height:35px;margin:0 15px 0 0;" src="<?php echo base_url() . 'assets/images/babylon.png'; ?>">
          </h3>
          <span><strong>BABYLON GROUP</strong></span>
          <br><br>
          <span><strong>2-B/1, Darus Salam Road, Mirpur, Dhaka-1216</strong></span>
        </div>

        <div class="top2">
          <p style="text-align:center;margin:15px 0;font-size:18px;">
            <strong>Babylon Information Technology Department</strong>
          </p>
          <p style="text-align:center;margin:15px 0;font-size:16px;">
            <strong>Laptop Handover Agreement</strong>
          </p>

          <div class="content">
            <div class="top2-content">
              <p class="user-profile"><label>Unit:</label> <?php echo $row['factoryid']; ?></p>
            </div>
            <div class="top2-content-1">
              <p class="user-profile"><label>ID:</label> <?php echo $row['userid']; ?></p>
            </div>
            <div class="top2-content-2">
              <p class="user-profile"><label>Name:</label> <?php echo $uname; ?></p>
            </div>
            <br>
            <div class="top2-content">
              <p class="user-profile"><label>Department:</label> <?php echo $row['departmentname']; ?></p>
            </div>
            <div class="top2-content-1">
              <p class="user-profile"><label>Designation:</label> <?php echo $row['designation']; ?></p>
            </div>
            <div class="top2-content-2">
              <p class="user-profile"><label>Email:</label> <?php echo $row['email']; ?></p>
            </div>
          </div>
        </div>

        <div class="middle">
          <p style="text-align:center;"><strong>Device Info</strong></p>
          <table id="tableData">
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
              <td>Laptop Bag</td>
              <td></td>
            </tr>
            <tr>
              <td>Domain/IP/MAC</td>
              <td><?php echo "/" . $row['ip'] . "/" . $row['mac']; ?></td>
            </tr>
            <tr>
              <td>Serial</td>
              <td><?php echo $row['sn']; ?></td>
            </tr>
            <?php
            $enddate = date("d-m-Y", strtotime("+" . $row['warranty'] . " days", strtotime($row['pdate'])));
            $now = time();
            $enddate_ts = strtotime($enddate);
            $datediff = $enddate_ts - $now;
            $remain = round($datediff / (60 * 60 * 24));
            if ($remain >= 0) {
              $remain = $remain . " Days Remaining";
            } else {
              $remain = "Expire";
            }
            ?>
            <tr>
              <td>Warranty</td>
              <td><?php echo $remain; ?></td>
            </tr>
            <tr>
              <td>Assign Date</td>
              <td><?php echo ($row['adate'] != '') ? date("d-m-Y", strtotime($row['adate'])) : ''; ?></td>
            </tr>
            <tr>
              <td>Usage</td>
              <td><?php echo ($row['apacode'] > 1) ? "Replacement" : "New"; ?></td>
            </tr>
          </table>
          <br>

          <div class="agreement">
            <p style="text-align:center;"><strong>Introduction</strong></p>
            <p>These are the terms and conditions for the Babylon Information Technology department IT Product service program. This agreement sets forth the conditions and responsibilities for the checkout of product. You agree to the Terms and Conditions hereinafter set forth.</p>

            <p style="text-align:center;"><strong>NATURE OF THIS AGREEMENT</strong></p>
            <p>You must return the product in the same condition you received it. The products are the property of the Babylon Group. The product must be returned during leave of the company by signing document, and pay any fees and charges incurred under this Agreement related to damage, missing parts or failure to return the product. You agree to defend, indemnify and hold Babylon Group harmless from and against any and all loss, liability or damages whatsoever during the custody. You will not attempt to repair the product without the consent of IT. Further, you agree to stop using the product if the operating system reports irreparable hardware failure and to inform the IT staff of the problem as soon as possible.</p>

            <p style="text-align:center;"><strong>TERMS AND CONDITIONS</strong></p>
            <p>1. IT reserves the right to permanently and/or from time to time, changes, modify, restrict, suspend and/or terminate this agreement.<br>
              2. Your Laptop is not transferable.<br>
              3. Hardware may not, in any way, be damaged, removed or adjusted. Doing so will be considered unauthorized use of IT equipment and may result in disciplinary action, fines, or other penalties.<br>
              4. If equipment is not operating properly, you agree to notify technical support immediately by phone or emailing: <strong>itinfo@babylon-bd.com</strong></p>

            <p style="text-align:center;"><strong>CHARGES AND FEES</strong></p>
            <p>You will be charged for any damages or failure to return product. Damages to be assessed by office of Information Technology. Any repairs will be performed by IT. All charges are subject to final audit. If errors are discovered, you will pay the corrected amount.</p>
          </div>
        </div>

        <div class="bottom-content">
          <div class="bottom">
            <div class="bottom1">
              <p style="text-align:center;font-size:10px;">Prepared by</p>
              <p style="text-align:center;font-size:10px;"><?php echo $this->session->userdata('name'); ?></p>
              <p style="text-align:center;font-size:10px;"><?php echo date('d-m-Y'); ?></p>
            </div>
            <div class="bottom2">
              <p style="text-align:center;font-size:10px;">Product Receiver</p>
              <p style="text-align:center;font-size:10px;"><?php echo $uname; ?></p>
              <p style="text-align:center;font-size:10px;"><?php echo date('d-m-Y'); ?></p>
            </div>
            <div class="bottom3">
              <p style="text-align:center;font-size:10px;">Department Head Seal & Sign</p>
            </div>
          </div>
        </div>

        <p style="text-align:center;font-size:10px;">This Is System Generated Document</p>
        <p style="text-align:center;font-size:10px;">Date: <?php echo date('d-m-Y'); ?> Time: <?php echo date('h:i:s A'); ?></p>
      </div>
    </div>
  <?php
    $i++;
  endforeach;
  ?>
</body>