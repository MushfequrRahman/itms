<style>
  .wrapper {
    margin: 0 auto;
    width: 900px;

  }

  #tableData {
    width: 700px;
  }

  #tableData,
  th,
  td {
    text-align: center;
    border-collapse: collapse;
    border: 1px solid black;
    padding: 4px;
    margin: auto;
  }

  th {
    font-size: 12px;
    text-align: center;
  }


  td {
    font-size: 10px;
    text-align: left;
    word-wrap: break-word;
    overflow-wrap: break-word;
    padding: 4px;
    font-weight: bold;
  }



  .top {
    /* width: 700px; */
    height: 190px;
    font-size: 18px;

  }

  .top1 {
    margin: auto;
    font-size: 12px;
    width: 700px;
    text-align: center;
    padding: 0 0 14px 0;
    border-bottom: 1px solid black;

  }

  .top2 {
    /* margin: auto; */
    /* width: 690px; */
    margin: 10px 0 0 0;
    font-size: 18px;
  }

  .content {
    margin: auto;
    width: 690px;
    min-height: 65px;
    border-bottom: 1px dashed black;
  }

  .text-left {
    float: left;
    width: 233px;
    font-size: 12px;
    text-align: left;


  }

  .text-middle {
    float: left;
    width: 233px;
    font-size: 12px;
    text-align: center;

  }

  .text-right {
    float: right;
    width: 115px;
    font-size: 12px;
    text-align: center;

  }

  .text-bottom {
    font-size: 10px;
    margin: 0 0 30px 0;
  }

  .middle {
    margin: auto;
    width: 700px;
    min-height: 100px;
  }

  .agreement {
    margin: auto;
    width: 700px;
    font-size: 12px;
  }

  .bottom-content {
    margin: 85px 0 0 0;
  }

  .bottom {
    margin: auto;
    width: 700px;
    min-height: 100px;
    font-size: 12px;
    font-weight: bold;

  }

  .bottom1 {
    float: left;
    width: 227px;
    text-align: left;
    border-top: 1px solid black;
    margin: 2px;
  }

  .bottom2 {
    float: left;
    width: 227px;
    text-align: center;
    border-top: 1px solid black;
    margin: 2px;
  }

  .bottom3 {
    float: left;
    width: 227px;
    text-align: right;
    border-top: 1px solid black;
    margin: 2px;
  }

  .bottom4 {
    float: left;
    width: 140px;
    text-align: right;
  }

  .bottom5 {
    float: left;
    width: 140px;
    text-align: right;
  }

  #background {
    position: absolute;
    z-index: 0;
    background: white;
    display: block;
    min-height: 50%;
    min-width: 50%;
    top: 80%;
    left: -170%;
  }

  #bg-text {
    color: lightgrey;
    font-size: 70px;
    transform: rotate(300deg);
    -webkit-transform: rotate(300deg);
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

  /* #watermark {
    position: fixed;
    top: 50%;
    left: 30%;
    z-index: -1;
    opacity: 0.1;
    font-size: 50px;
    color: #000;
    transform: rotate(-30deg);
    -webkit-transform: rotate(-30deg);
    white-space: nowrap;
    pointer-events: none;
  } */
</style>

<body>
  <?php
  error_reporting(0);
  date_default_timezone_set('Asia/Dhaka'); ?>
  <!-- <div id="watermark">BABYLON GROUP(IT)</div> -->
  <div class="wrapper">
    <div class="top">
      <div class="top1">
        <h3><img style="width:80px; height:35px; margin:0 15px 0 0;" src="<?php echo base_url() . 'assets/images/babylon.png'; ?>" alt="logo"></h3>
        <span><strong>BABYLON GROUP</strong></span>
        <br />
        <br />
        <span><strong>2-B/1, Darus Salam Road, Mirpur, Dhaka-1216</strong></span>
      </div>

      <div class="top2">
        <p style="text-align:center;margin:15px 0; font-size: 18px;"><strong>Babylon Information Technology Department</strong></p>
        <p style="text-align:center;margin:15px 0; font-size: 16px;"><strong>Laptop Handover Agreement</strong></p>
        <div class="content">
          
          <?php
          $i = 1;
          foreach ($ul as $row) { ?>
            <div class="top2-content">
              <p class="user-profile"><label>Unit:</label><span><?php echo $row['factoryid']; ?></span></p>
            </div>
            <div class="top2-content-1">
              <p class="user-profile"><label>ID:</label><span><?php echo $row['userid']; ?></span></p>
            </div>
            <div class="top2-content-2">
              <p class="user-profile"><label>Name:</label><span><?php echo $uname = $row['name']; ?></span></p>
            </div>
            <br />
            <div class="top2-content">
              <p class="user-profile"><label>Department:</label><span><?php echo $row['departmentname']; ?></span></p>
            </div>
            <div class="top2-content-1">
              <p class="user-profile"><label>Designation:</label><span><?php echo $row['designation']; ?></span></p>
            </div>
            <div class="top2-content-2">
              <p class="user-profile"><label>Email:</label><span><?php echo $row['email']; ?></span></p>
            </div>
          <?php } ?>
        </div>
      </div>
      <div class="middle">
        <p style="text-align:center;"><strong>Device Info</strong></p>
        <table id="tableData">
          <tbody>
            <?php
            $i = 1;
            foreach ($ul as $row) { ?>
              <tr>
                <!-- <td style="vertical-align:middle;"><?php echo $i++; ?></td> -->
                <td style="vertical-align:middle;">MPR</td>
                <td style="vertical-align:middle;"><?php echo $row['mprid']; ?></td>
              </tr>

              <tr>
                <td style="vertical-align:middle;">PO</td>
                <td style="vertical-align:middle;"><?php echo $row['po']; ?></td>
              </tr>

              <tr>
                <td style="vertical-align:middle;">Purchase Date</td>
                <td style="vertical-align:middle;"><?php echo date("d-m-Y", strtotime($row['pdate'])); ?></td>
              </tr>

              <tr>
                <td style="vertical-align:middle;">GRN</td>
                <td style="vertical-align:middle;"><?php echo $row['grn']; ?></td>
              </tr>

              <tr>
                <td style="vertical-align:middle;">Asset Code</td>
                <td style="vertical-align:middle;"><?php echo $row['pacode']; ?></td>
              </tr>
              <tr>
                <td style="vertical-align:middle;">Product</td>
                <td style="vertical-align:middle;"><?php echo $row['pname']; ?></td>
              </tr>
              <tr>
                <td style="vertical-align:middle;">Model</td>
                <td style="vertical-align:middle;"><?php echo $row['item']; ?></td>
              </tr>
              <tr>
                <td style="vertical-align:middle;">Technical Specification</td>
                <td style="vertical-align:middle;"><?php echo $row['idescription']; ?></td>
              </tr>
              <tr>
                <td style="vertical-align:middle;">Laptop Bag</td>
                <td style="vertical-align:middle;"></td>
              </tr>
              <tr>
                <td style="vertical-align:middle;">Domain/IP/MAC</td>
                <td style="vertical-align:middle;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "/".$row['ip']; ?>/<?php echo $row['mac']; ?></td>
              </tr>
              <!-- <tr>
                <td style="vertical-align:middle;">IP</td>
                <td style="vertical-align:middle;"><?php echo $row['ip']; ?></td>
              </tr>
              <tr>
                <td style="vertical-align:middle;">MAC</td>
                <td style="vertical-align:middle;"><?php echo $row['mac']; ?></td>
              </tr> -->
              <tr>
                <td style="vertical-align:middle;">Serial</td>
                <td style="vertical-align:middle;"><?php echo $row['sn']; ?></td>
              </tr>
              <tr>
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

                <?php $enddate = date("d-m-Y", strtotime("+" . $row['warranty'] . " days", strtotime($row['pdate']))); ?>

                <?php
                $now = time(); // or your date as well
                $enddate = strtotime($enddate);
                $datediff = $enddate - $now;
                $remain = round($datediff / (60 * 60 * 24));
                if ($remain >= 0) {
                  $remain = $remain . " " . "Days Reamining";
                } else {
                  $remain = "Expire";
                }
                ?>
                <td style="vertical-align:middle;">Warranty</td>
                <td style="vertical-align:middle;"><?php echo $remain; ?></td>
              </tr>
              <tr>
                <td style="vertical-align:middle;">Assign Date</td>
                <td style="vertical-align:middle;"><?php
                                                    if ($row['adate'] != '') {
                                                      echo date("d-m-Y", strtotime($row['adate']));
                                                    } else {
                                                      echo "";
                                                    }
                                                    ?></td>
              <tr>
                <td style="vertical-align:middle;">Usage</td>
                <?php
                if ($row['apacode'] > 1) {
                  $usage = "Replacement";
                } else {
                  $usage = "New";
                }
                ?>
                <td style="vertical-align:middle;"><?php echo $usage; ?></td>
              </tr>
              </tr>
            <?php } ?>
          </tbody>
        </table>
        <br />
        
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
      </div>
      <div class="bottom-content">
        <div class="bottom">
          <div class="bottom1">
            <p style="text-align:center; font-size:10px;">Prepared by</p>
            <p style="text-align:center; font-size:10px;"><?php echo $name = $this->session->userdata('name'); ?></p>
            <p style="text-align:center; font-size:10px;"><?php echo date('d-m-Y'); ?></p>

          </div>
          <div class="bottom2">
            <p style="text-align:center; font-size:10px;">Product Receiver</p>
            <p style="text-align:center; font-size:10px;"><?php echo $uname; ?></p>
            <p style="text-align:center; font-size:10px;"><?php echo date('d-m-Y'); ?></p>

          </div>
          <div class="bottom3">
            <p style="text-align:center; font-size:10px;">Department Head Seal & Sign</p>
            <p style="text-align:center; font-size:10px;">&nbsp;</p>
            <p style="text-align:center; font-size:10px;">&nbsp;</p>
</div>
        </div>
      </div>
     
     
      <p style="text-align:center; font-size:10px;">This Is System Generated Document</p>
      <p style="text-align:center; font-size:10px;"><?php echo "Date:" . date('d-m-Y') . " & " . "Time:" . date("h:i:sa"); ?></p>
    </div>
  </div>
</body>

</html>