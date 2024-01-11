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
</style>


<!-- /.box-header -->
<div class="box-body table-responsive no-padding">
  <?php /*?><form action="<?php echo base_url() ?>Dashboard/date_wise_po_list_xls" class="excel-upl" id="excel-upl" enctype="multipart/form-data" method="post" accept-charset="utf-8">
    <div class="row padall">
      <div class="col-lg-12">
        <div class="float-right">
          <?php
          foreach ($ul as $row1) { ?>
            
            <input type="hidden" name="pd" value="<?php echo $pd; ?>" />
            <input type="hidden" name="wd" value="<?php echo $wd; ?>" />
          <?php
          }
          ?>
          <input type="radio" checked="checked" name="export_type" value="xlsx"> .xlsx
          <input type="radio" name="export_type" value="xls"> .xls
          <input type="radio" name="export_type" value="csv"> .csv
          <button type="submit" name="import" class="btn btn-primary btn-xs">Export</button>
        </div>
      </div>
    </div>
  </form><?php */ ?>
  <table id="tableData" class="table table-hover table-bordered">
    <thead style="background:#91b9e6;">
      <tr>
        <th>SL</th>
        <th>MPR NO</th>

        <th>Unit</th>
        <th>MPR Issued By</th>
        <th>Category</th>
        <th>Item</th>
        <th>Model</th>

        <!--<th>Item Code</th>-->
        <th>MPR Qty</th>
        <th>MPR Description</th>
        <th>Unit Price</th>
        <th>Total Price</th>
        <th>MPR Date</th>
        <th>PO NO</th>
        <th>PO Qty</th>
        <th>PO Price</th>
        <th>PO Remarks</th>
        <th>Supplier</th>

        <th>PO Date</th>
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
          <td style="vertical-align:middle;"><?php echo $row['name'] . '--' . $row['departmentname'] . '--' . $row['designation']; ?></td>
          <td style="vertical-align:middle;"><?php echo $row['pcname']; ?></td>

          <?php /*?><td style="vertical-align:middle;"><?php echo $row['name'];?></td><?php */ ?>
          <td style="vertical-align:middle;"><?php echo $row['pname']; ?></td>
          <td style="vertical-align:middle;"><?php echo $row['item']; ?></td>

          <?php /*?><td style="vertical-align:middle;"><?php echo $row['simprid'];?></td><?php */ ?>
          <td style="vertical-align:middle;"><?php echo $row['qty'] . " " . $row['puom']; ?></td>
          <td style="vertical-align:middle;"><?php echo $row['description']; ?></td>
          <td style="vertical-align:middle;"><?php echo $row['price']; ?></td>
          <td style="vertical-align:middle;"><?php echo $row['qty'] * $row['price']; ?></td>
          <?php $mdate = date("d-m-Y", strtotime($row['mdate'])); ?>
          <td style="vertical-align:middle;"><?php echo $mdate; ?></td>
          <td style="vertical-align:middle;"><?php echo $row['po']; ?></td>
          <td style="vertical-align:middle;"><?php echo $row['pqty'] . " " . $row['puom']; ?></td>
          <td style="vertical-align:middle;"><?php echo $row['pprice']; ?></td>
          <td style="vertical-align:middle;"><?php echo $row['premarks']; ?></td>
          <td style="vertical-align:middle;"><?php echo $row['supplier']; ?></td>

          <?php $pdate = date("d-m-Y", strtotime($row['pdate'])); ?>
          <td style="vertical-align:middle;"><?php echo $pdate; ?></td>

        </tr>
    </tbody>
  <?php } ?>
  </table>
</div>