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
            height: 400px; /* Set the height for vertical scrolling */
            overflow-y: auto;
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

  td {
    font-weight: 600;
    font-variant: small-caps;
  }
</style>
<script type="text/javascript">
  $(function() {
    jQuery(".pd").datepicker({
      dateFormat: 'dd-mm-yy'
    });
  })
</script>
<script>
  $(function() {
    $("table").tablesorter({
      theme: 'blue',
      widgets: ['math', 'zebra', 'filter'],
      widgetOptions: {
        math_data: 'math', // data-math attribute
        math_ignore: [0, 1],
        math_none: 'N/A', // no matching math elements found (text added to cell)
        math_complete: function($cell, wo, result, value, arry) {
          var txt = '<span class="align-decimal">' +
            (value === wo.math_none ? '' : ' ') +
            result + '</span>';
          if ($cell.attr('data-math') === 'all-sum') {
            // when the "all-sum" is processed, add a count to the end
            return txt + ' (Sum of ' + arry.length + ' cells)';
          }
          return txt;
        },
        math_completed: function(c) {
          // c = table.config
          // called after all math calculations have completed
          console.log('math calculations complete', c.$table.find('[data-math="all-sum"]:first').text());
        },
        // see "Mask Examples" section
        math_mask: '#,##0.00',
        math_prefix: '', // custom string added before the math_mask value (usually HTML)
        math_suffix: '', // custom string added after the math_mask value
        // event triggered on the table which makes the math widget update all data-math cells (default shown)
        math_event: 'recalculate',
        // math calculation priorities (default shown)... rows are first, then column above/below,
        // then entire column, and lastly "all" which is not included because it should always be last
        math_priority: ['row', 'above', 'below', 'col'],
        // set row filter to limit which table rows are included in the calculation (v2.25.0)
        // e.g. math_rowFilter : ':visible:not(.filtered)' (default behavior when math_rowFilter isn't set)
        // or math_rowFilter : ':visible'; default is an empty string
        math_rowFilter: ''
      }
    });
  });
</script>

<!-- /.box-header -->
<div class="box-body table-responsive no-padding table-container">

  <table id="tableData" class="table table-hover table-bordered">
    <thead style="background:#91b9e6;">
      <tr>

        <?php /*?><td colspan="2" style="vertical-align:middle;"><input type="text" class="form-control" name="po" placeholder="PO No"></td>
              <td colspan="2" style="vertical-align:middle;"><input type="text" class="form-control" name="supplier" placeholder="Supplier"></td>
              <td colspan="2" style="vertical-align:middle;"><input type="text" class="form-control pd" readonly name="podate" value="<?php echo date('d-m-Y'); ?>"></td><?php */ ?>
      </tr>
      <tr>
        <th>SL</th>
        <!--<th>Select</th>-->
        <th>MPR NO</th>
        <th>Unit</th>
        <th>Employment Type</th>
        <th>User</th>
        <!--<th>MPR Prepared By</th>-->
        <th>Category</th>
        <th>Product</th>
        <th>Item/Model</th>

        <!--<th>Item Code</th>-->
        <th>MPR Qty</th>
        <th>Description</th>
        <th>Remarks</th>
        <th>MPR Date</th>
        <!--<th>Description</th>-->
        <!--<th>MPR Price</th>-->
        <!--<th>Remarks</th>-->
        <!--<th>User</th>
                  <th>Date</th>-->
        <th>PO</th>
        <th>Supplier</th>
        <th>Invoice</th>
        <th>PO Qty</th>
        <th>Total Price</th>
        <!-- <th>Remarks</th>
                  <th>Date</th> -->
        <!--<th>PO NO</th>-->
        <th>GRN</th>
        <th>Receive Qty</th>
        <th>Received Date</th>
        <th>Inventory Qty</th>
        <!-- <th>Po Status</th> -->
        <th>Status</th>
        <!--<th>PO Qty</th>
                  <th>PO Qty Price</th>
                  
                  <th>Supplier</th>
                  <th>Date</th>
                  <th>Remarks</th>-->
        <!--<th>Status</th>-->
      </tr>
    </thead>
    <tfoot>
      <tr>
        <th colspan="13">Totals</th>

        <!-- <th data-math="col-sum">col-sum</th> -->

        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
      </tr>
    </tfoot>
    <tbody>

      <?php
      $i = 1;
      foreach ($ul as $row) { ?>
        <tr>

          <td style="vertical-align:middle;"><?php echo $i++; ?></td>
          <?php /*?><td style="vertical-align:middle;"><input type="checkbox" class="checkbox" name="simprid[]" value="<?php echo $row['simprid']; ?>"></td><?php */ ?>
          <!-- <td style="vertical-align:middle;"><a target="_blank" href="<?php echo base_url(); ?>Dashboard/product_inventory_insert_form/<?php echo $row['sipoid']; ?>"><?php echo $row['mprid']; ?></a></td> -->
          <td style="vertical-align:middle;"><?php echo $row['mprid']; ?></td>
          <td style="vertical-align:middle;"><?php echo $row['fid']; ?></td>
          <td style="vertical-align:middle;"><?php echo $row['etypename']; ?></td>
          <td style="vertical-align:middle;"><?php echo $row['uname']; ?></td>
          <?php /*?><td style="vertical-align:middle;"><?php echo $row['name'].'--'.$row['departmentname'].'--'.$row['designation'];?></td><?php */ ?>
          <td style="vertical-align:middle;"><?php echo $row['pcname']; ?></td>
          <td style="vertical-align:middle;"><?php echo $row['pname']; ?></td>
          <td style="vertical-align:middle;"><?php echo $row['item']; ?></td>


          <td style="vertical-align:middle;"><?php echo $row['qty'] . " " . $row['puom']; ?></td>
          <td style="vertical-align:middle;"><?php echo $row['description']; ?></td>
          <td style="vertical-align:middle;"><?php echo $row['remarks']; ?></td>
          <td style="vertical-align:middle;"><?php echo date("d-m-Y", strtotime($row['mdate'])); ?></td>
          <?php /*?><td style="vertical-align:middle;"><?php echo $row['description'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['price'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['remarks'];?></td><?php */ ?>
          <?php /*?><td style="vertical-align:middle;"><?php echo $row['po'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['pqty']." ".$row['puom'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['pprice'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['premarks'];?></td>
                  <td style="vertical-align:middle;"><?php echo date("d-m-Y", strtotime($row['pdate']));?></td><?php */ ?>
          <?php /*?><td style="vertical-align:middle;"><?php echo $row['po'];?></td><?php */ ?>
          <?php /*?><td style="vertical-align:middle;"><?php echo $row['uname'];?></td><?php */ ?>

          <?php /*?><?php $mdate=date("d-m-Y", strtotime($row['mdate']));?>
                  <td style="vertical-align:middle;"><?php echo $mdate;?></td><?php */ ?>
          <td style="vertical-align:middle;"><?php echo $row['po']; ?></td>
          <td style="vertical-align:middle;"><?php echo $row['supplier']; ?></td>
          <td style="vertical-align:middle;"><?php echo $row['invoice']; ?></td>
          <td style="vertical-align:middle;"><?php echo $row['pqty'] . " " . $row['puom']; ?></td>
          <td style="vertical-align:middle;"><?php echo $row['pqty'] * $row['pprice']; ?></td>
          <td style="vertical-align:middle;"><?php echo $row['grn']; ?></td>
          <td style="vertical-align:middle;"><?php echo $row['rqty'] . " " . $row['puom']; ?></td>
          <td style="vertical-align:middle;">
            <?php
            if ($row['rdate'] != '') {
              echo date("d-m-Y", strtotime($row['rdate']));
            } else {
              echo "";
            }
            ?>

            <!-- <?php echo date("d-m-Y", strtotime($row['rdate'])); ?> -->
          </td>
          <td style="vertical-align:middle;"><?php echo $row['iqty'] . " " . $row['puom']; ?></td>
          <!-- <td style="vertical-align:middle;">
            <?php
            if ($row['po'] != '') {
              echo "Created";
            } else {
              echo "Remaining";
            }
            ?></td> -->
          <td style="vertical-align:middle;">
            <?php
            if (($row['rqty'] < $row['pqty'])) {
              echo "pending";
            } elseif ($row['pqty'] == '') {
              echo "Remaining";
            } else {
              echo "Received";
            }
            ?></td>
        </tr>
      <?php } ?>
    </tbody>


  </table>
  <script>
        $(document).ready(function () {
            $("#tableData").tablesorter();
        });
    </script>

</div>