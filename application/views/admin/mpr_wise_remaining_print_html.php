<style>
  .wrapper {
    /* margin: 0 auto;
    width: 700px; */

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
    width: 140px;
    text-align: left;
    /*text-decoration: overline;*/

  }

  .bottom2 {
    float: left;
    width: 140px;
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
      <p style="text-align:center;"><strong>MPR Wise Product Status</strong></p>
      <table id="tableData">
        <thead>
          <tr>
            <th>SL</th>
            <th>MPR NO</th>
            <th>Unit</th>
            <th>User</th>
            <th>Category</th>
            <th>Product</th>
            <th>Item/Model</th>
            <th>MPR Qty</th>
            <th>Description</th>
            <!-- <th>Remarks</th> -->
            <th>MPR Submission Date</th>
            <!-- <th>PO</th> -->
            <!-- <th>Supplier</th> -->
            <!-- <th>Invoice</th> -->
            <th>PO Qty</th>
            <!-- <th>Total Price</th> -->
            <!-- <th>GRN</th> -->
            <th>Receive Qty</th>
            <!-- <th>Received Date</th>
            <th>Inventory Qty</th> -->
            <th>Status</th>
            <th>Count Days</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = 1;
          $ttotal = 0;
          foreach ($ul as $row) { ?>
            <tr>
              <td><?php echo $i++; ?></td>
              <?php /*?><td style="vertical-align:middle;"><input type="checkbox" class="checkbox" name="simprid[]" value="<?php echo $row['simprid']; ?>"></td><?php */ ?>
              <!-- <td style="vertical-align:middle;"><a target="_blank" href="<?php echo base_url(); ?>Dashboard/product_inventory_insert_form/<?php echo $row['sipoid']; ?>"><?php echo $row['mprid']; ?></a></td> -->
              <td style="vertical-align:middle;"><?php echo $row['mprid']; ?></td>
              <td style="vertical-align:middle;"><?php echo $row['fid']; ?></td>
              <td style="vertical-align:middle;"><?php echo $row['uname']; ?></td>
              <?php /*?><td style="vertical-align:middle;"><?php echo $row['name'].'--'.$row['departmentname'].'--'.$row['designation'];?></td><?php */ ?>
              <td style="vertical-align:middle;"><?php echo $row['pcname']; ?></td>
              <td style="vertical-align:middle;"><?php echo $row['pname']; ?></td>
              <td style="vertical-align:middle;"><?php echo $row['item']; ?></td>
              <td style="vertical-align:middle;"><?php echo $row['qty'] . " " . $row['puom']; ?></td>
              <td style="vertical-align:middle;"><?php echo $row['description']; ?></td>
              <!-- <td style="vertical-align:middle;"><?php echo $row['remarks']; ?></td> -->
              <?php if ($row['msdate'] == '0000-00-00') {
              ?>
                <td style="vertical-align:middle;">0000-00-00</td>
              <?php
              } else {
              ?>
                <td style="vertical-align:middle;"><?php echo date("d-m-Y", strtotime($row['msdate'])); ?></td>
              <?php
              }

              ?>

              <!-- <td style="vertical-align:middle;"><?php echo $row['po']; ?></td> -->
              <!-- <td style="vertical-align:middle;"><?php echo $row['supplier']; ?></td> -->
              <!-- <td style="vertical-align:middle;"><?php echo $row['invoice']; ?></td> -->
              <td style="vertical-align:middle;"><?php echo $row['pqty'] . " " . $row['puom']; ?></td>
              <!-- <td style="vertical-align:middle;"><?php echo $total = $row['pqty'] * $row['pprice']; ?></td> -->
              <!-- <td style="vertical-align:middle;"><?php echo $row['grn']; ?></td> -->
              <td style="vertical-align:middle;"><?php echo $row['rqty'] . " " . $row['puom']; ?></td>
              <!-- <td style="vertical-align:middle;">
                <?php
                if ($row['rdate'] != '') {
                  echo date("d-m-Y", strtotime($row['rdate']));
                } else {
                  echo "";
                }
                ?>


              </td> -->
              <!-- <td style="vertical-align:middle;"><?php echo $row['iqty']; ?></td> -->
              <!-- <td style="vertical-align:middle;">
                <?php
                if ($row['po'] != '') {
                  echo "Created";
                } else {
                  echo "Pending";
                }
                ?></td> -->
              <td style="vertical-align:middle;">
                <?php
                if (($row['rqty'] < $row['pqty'])) {
                  echo "Remaining";
                } elseif ($row['pqty'] == '') {
                  echo "Pending";
                } else {
                  echo "Received";
                }
                ?></td>
              <td style="vertical-align:middle;"><?php echo $row['cday']; ?></td>
            </tr>
          <?php
            //$ttotal += $total;
          } ?>
        </tbody>
        <!-- <tr>
        <td colspan="14" style="vertical-align:middle;"><strong>Total Taka:</strong></td>
        <td><strong><?php echo $ttotal; ?></strong></td>
        </tr> -->
      </table>
      <br />
      <br />

      <p style="text-align:center;"><strong>MPR Wise Inventory Status</strong></p>
      <table id="tableData">
        <thead>
          <tr>
            <th>SL</th>
            <th>MPR NO</th>
            <th>Unit</th>
            <th>User</th>
            <th>Category</th>
            <th>Product</th>
            <th>Item/Model</th>
            <th>MPR Qty</th>
            
            <th>MPR Submission Date</th>
            <th>PO</th>
            <th>Supplier</th>
            
            <th>PO Qty</th>
            <th>PO Price</th>
            <!-- <th>Total Price</th> -->
            <th>Invoice</th>
            <th>GRN</th>
            <th>Warranty</th>
            <th>Serial</th>
            <th>Asset Code</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = 1;
          $ttotal = 0;
          foreach ($ul1 as $row) { ?>
            <tr>
              <td><?php echo $i++; ?></td>
              <?php /*?><td style="vertical-align:middle;"><input type="checkbox" class="checkbox" name="simprid[]" value="<?php echo $row['simprid']; ?>"></td><?php */ ?>
              <!-- <td style="vertical-align:middle;"><a target="_blank" href="<?php echo base_url(); ?>Dashboard/product_inventory_insert_form/<?php echo $row['sipoid']; ?>"><?php echo $row['mprid']; ?></a></td> -->
              <td style="vertical-align:middle;"><?php echo $row['mprid']; ?></td>
              <td style="vertical-align:middle;"><?php echo $row['fid']; ?></td>
              <td style="vertical-align:middle;"><?php echo $row['uname']; ?></td>
              <?php /*?><td style="vertical-align:middle;"><?php echo $row['name'].'--'.$row['departmentname'].'--'.$row['designation'];?></td><?php */ ?>
              <td style="vertical-align:middle;"><?php echo $row['pcname']; ?></td>
              <td style="vertical-align:middle;"><?php echo $row['pname']; ?></td>
              <td style="vertical-align:middle;"><?php echo $row['item']; ?></td>
              <td style="vertical-align:middle;"><?php echo $row['qty'] . " " . $row['puom']; ?></td>
              
              <?php if ($row['msdate'] == '0000-00-00') {
              ?>
                <td style="vertical-align:middle;">0000-00-00</td>
              <?php
              } else {
              ?>
                <td style="vertical-align:middle;"><?php echo date("d-m-Y", strtotime($row['msdate'])); ?></td>
              <?php
              }

              ?>

              <td style="vertical-align:middle;"><?php echo $row['po']; ?></td>
              <td style="vertical-align:middle;"><?php echo $row['supplier']; ?></td>
              
              <td style="vertical-align:middle;"><?php echo $row['pqty'] . " " . $row['puom']; ?></td>
              
              <td style="vertical-align:middle;"><?php echo  $total=$row['pprice']; ?></td>
              <!-- <td style="vertical-align:middle;"><?php echo $row['pqty']; ?></td> -->
              <td style="vertical-align:middle;"><?php echo $row['invoice']; ?></td>
              <td style="vertical-align:middle;"><?php echo $row['grn']; ?></td>
              <td style="vertical-align:middle;"><?php echo $row['warranty']; ?></td>
              <td style="vertical-align:middle;"><?php echo $row['sn']; ?></td>
              <td style="vertical-align:middle;"><?php echo $row['pacode']; ?></td>
              
            </tr>
          <?php 
        $ttotal += $total;
        } ?>
        </tbody>
        <tr>
        <td colspan="12" style="vertical-align:middle;"><strong>Total Taka:</strong></td>
        <td><strong><?php echo $ttotal; ?></strong></td>
        </tr>
      </table>
    </div>
<br/>
<br/>
    <p style="text-align:center; font-size:10px;">This Is System Generated Document</p>
    <p style="text-align:center; font-size:10px;"><?php echo "Date:" . date('d-m-Y') . " & " . "Time:" . date("h:i:sa"); ?></p>
  </div>
</body>

</html>