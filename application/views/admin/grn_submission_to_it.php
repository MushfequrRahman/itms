<style>
  .wrapper {
    margin: 0 auto;
    width: 700px;

  }

  #tableData {
    /* width: 690px; */
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
    text-align: center;
  }

  td {
    word-wrap: break-word;
    overflow-wrap: break-word;
  }

  .top {
    /* width: 700px; */
    height: 150px;
    font-size: 22px;

  }

  .top1 {
    /* margin: auto; */
    font-size: 12px;
    /* width: 700px; */
    text-align: center;

  }

  /* .top2 {
    
    width: 600px;
    font-size: 18px;
    
  } */

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
    /* margin: 10px 0 0 0;
    width: 700px; */
  }

  .bottom {
    margin: 20px 0 0 0;
    width: 700px;
    font-size: 12px;
  }

  .bottom1 {
    float: left;
    width: 350px;
    text-align: left;
    /*text-decoration: overline;*/

  }

  .bottom2 {
    float: left;
    width: 350px;
    text-align: center;
    /*text-decoration: overline;*/

  }

  .bottom3 {
    float: left;
    width: 140px;
    text-align: right;
    /*text-decoration: overline;*/

  }

  .bottom4 {
    float: left;
    width: 140px;
    text-align: right;
    /*text-decoration: overline;*/

  }

  .bottom5 {
    float: left;
    width: 140px;
    text-align: right;
    /*text-decoration: overline;*/

  }

  /*.text-bottom span strong {
    border-bottom: 2px dotted black;
  }*/
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
</style>

<body>
  <?php date_default_timezone_set('Asia/Dhaka'); ?>
  <div class="wrapper">
    <div class="top">
      <div class="top1">
        <h3><img style="width:80px; height:35px; margin:0 15px 0 0;" src="<?php echo base_url() . 'assets/images/babylon.png'; ?>" alt="logo"></h3>
        <span><strong>BABYLON GROUP</strong></span>
        <br />
        <br />
        <span><strong>2-B/1, Darus Salam Road, Mirpur, Dhaka-1216</strong></span>
      </div>
    </div>
    <div class="middle">
      <p style="text-align:center;"><strong>GRN Submission To IT</strong></p>
      <table id="tableData">
        <thead>
          <tr>
            <th>SL</th>
            <th>MPR NO</th>
            <th>Unit</th>
            <th>User</th>
            <th>Product</th>
            <!-- <th>Item/Model</th> -->
            <th>PO</th>
            <th>PO Date</th>
            <th>Supplier</th>
            <th>GRN</th>
            <th>Received Date</th>
            <!-- <th>Invoice</th> -->
            <!-- <th>PO Qty</th> -->
            <th>Total Price</th>

            <!-- <th>Receive Qty</th> -->

          </tr>
        </thead>
        <tbody>
          <?php
          $i = 1;
          foreach ($ul as $row) { ?>
            <tr>
              <td style="vertical-align:middle;"><?php echo $i++; ?></td>
              <td style="vertical-align:middle;"><?php echo $row['mprid']; ?></td>
              <td style="vertical-align:middle;"><?php echo $row['fid']; ?></td>
              <td style="vertical-align:middle;"><?php echo $row['uname']; ?></td>
              <td style="vertical-align:middle;"><?php echo $row['pname']; ?></td>
              <!-- <td style="vertical-align:middle;"><?php echo $row['item']; ?></td> -->
              <td style="vertical-align:middle;"><?php echo $row['po']; ?></td>
              <td style="vertical-align:middle;">
                <?php
                if ($row['pdate'] != '') {
                  echo date("d-m-Y", strtotime($row['pdate']));
                } else {
                  echo "";
                }
                ?>
              </td>
              <td style="vertical-align:middle;"><?php echo $row['supplier']; ?></td>
              <!-- <td style="vertical-align:middle;"><?php echo $row['invoice']; ?></td> -->
              <!-- <td style="vertical-align:middle;"><?php echo $row['pqty'] . " " . $row['puom']; ?></td> -->

              <td style="vertical-align:middle;"><?php echo $row['grn']; ?></td>
              <td style="vertical-align:middle;">
                <?php
                if ($row['rdate'] != '') {
                  echo date("d-m-Y", strtotime($row['rdate']));
                } else {
                  echo "";
                }
                ?>
              </td>
              <td style="vertical-align:middle;"><?php echo $row['pqty'] * $row['pprice']; ?></td>
              <!-- <td style="vertical-align:middle;"><?php echo $row['rqty'] . " " . $row['puom']; ?></td> -->

              <!-- <td style="vertical-align:middle;">
            </td> -->
            </tr>
          <?php } ?>
        </tbody>
      </table>
      <br />
      <br />
      <div class="bottom">
      <div class="bottom1">
        <p style="text-align:center; font-size:10px; float:left;">Prepared by</p>
      </div>
      <div class="bottom2">
        <p style="text-align:center; font-size:10px; float:right;">Receiver Signature & Seal</p>
      </div>
    </div>

    </div>
    

    <br />
    <br />
    <p style="text-align:center; font-size:10px;">This Is System Generated Document</p>
    <p style="text-align:center; font-size:10px;"><?php echo "Date:" . date('d-m-Y') . " & " . "Time:" . date("h:i:sa"); ?></p>
  </div>
</body>

</html>