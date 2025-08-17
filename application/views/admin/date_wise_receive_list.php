<!-- <style type="text/css">
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
    height: 400px;
    /* Set the height for vertical scrolling */
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
</style> -->
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
    top: 70px;
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

  #ui-datepicker-div {
    z-index: 3 !important;
  }
</style>
<script type="text/javascript">
  $(function() {
    jQuery(".pd").datepicker({
      dateFormat: 'dd-mm-yy'
    });
  })
</script>
<!-- <script>
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
</script> -->

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
    }).on("filterEnd sortEnd", function() {
      countVisibleRows();
    });


    // // Function to count visible rows
    // function countVisibleRows() {
    // 	var visibleRowsCount = $('#tableData tbody tr:visible').length;
    // 	$('#rowCount').text("No. Rows:" + visibleRowsCount);
    // }

    // // Initial count of visible rows
    // countVisibleRows();

    // // Filter rows with search input
    // //$('<input type="text" class="tablesorter-filter" placeholder="Search...">').insertBefore('#tableData');

    // $('.tablesorter-filter').on('keyup', function() {
    // 	var searchTerm = $(this).val().toLowerCase();
    // 	$('#tableData tbody tr').each(function() {
    // 		$(this).toggle($(this).text().toLowerCase().indexOf(searchTerm) > -1);
    // 	});
    // 	countVisibleRows(); // Update the count after filtering
    // });


    // Function to count visible rows
    function countVisibleRows() {
      var visibleRowsCount = $('#tableData tbody tr:visible').length;
      $('#rowCount').text("Rows: " + visibleRowsCount);
    }

    // Initial count of visible rows
    countVisibleRows(); // Start counting visible rows






    // Download selected rows and columns as Excel
    $("#downloadExcel").on("click", function() {
      var wb = XLSX.utils.book_new(); // Create a new workbook
      var ws_data = [];

      // Prepare header row based on selected columns
      var headers = [];
      $('#tableData thead th').each(function() {
        var $checkbox = $(this).find('.column-select');
        if ($checkbox.length === 0 || $checkbox.is(':checked')) {
          headers.push($(this).text());
        }
      });
      ws_data.push(headers); // Push headers as the first row

      // Add the selected rows
      $('#tableData tbody tr:visible').each(function() {
        var $checkbox = $(this).find('.row-select');
        if ($checkbox.is(':checked')) {
          var row = [];
          $(this).find('td').each(function(index) {
            var $colCheckbox = $(this).closest('table').find('thead th').eq(index).find('.column-select');
            if ($colCheckbox.length === 0 || $colCheckbox.is(':checked')) {
              row.push($(this).text());
            }
          });
          ws_data.push(row);
        }
      });

      // Create a worksheet from the data
      var ws = XLSX.utils.aoa_to_sheet(ws_data);
      XLSX.utils.book_append_sheet(wb, ws, "Selected Rows");

      // Export the Excel file
      XLSX.writeFile(wb, 'date_wise_receive_list.xlsx');
    });
  });
</script>

<!-- /.box-header -->
<div class="box-body">
  <div class="row padall">
    <div class="col-lg-12">
      <div class="row">
        <div class="col-md-6">
          <div class="float-left">
            <?php if ($this->session->userdata('user_type') == '3') {
            } else {
            ?>
              <a target="_blank" href="<?php echo base_url(); ?>Dashboard/grn_submission_to_it/<?php echo $pd; ?>/<?php echo $wd; ?>/<?php echo $userid; ?>">GRN Submission To IT</a>
            <?php
            }
            ?>
          </div>
        </div>
        <div class="col-md-6">
          <div class="float-right" style="text-align: right;">
            <button id="downloadExcel" class="btn btn-success btn-xs">Download As Excel</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="table-responsive no-padding table-container">
    <!-- <table id="tableData" class="table table-hover table-bordered tablesorter"> -->
    <table id="tableData" class="table table-hover tablesorter">
      <thead>
        <tr>
          <th data-column="0"><input type="checkbox" class="column-select" data-col-index="1" checked><br />SL</th>
          <!--<th>Select</th>-->
          <th data-column="1"><input type="checkbox" class="column-select" data-col-index="2" checked><br />MPR NO</th>
          <th data-column="2"><input type="checkbox" class="column-select" data-col-index="3" checked><br />Unit</th>
          <th data-column="3"><input type="checkbox" class="column-select" data-col-index="4" checked><br />Employment Type</th>
          <th data-column="4"><input type="checkbox" class="column-select" data-col-index="5" checked><br />User</th>
          <!--<th>MPR Prepared By</th>-->
          <th data-column="5"><input type="checkbox" class="column-select" data-col-index="6" checked><br />Category</th>
          <th data-column="6"><input type="checkbox" class="column-select" data-col-index="7" checked><br />Product</th>
          <th data-column="7"><input type="checkbox" class="column-select" data-col-index="8" checked><br />Item/Model</th>

          <!--<th>Item Code</th>-->
          <th data-column="8"><input type="checkbox" class="column-select" data-col-index="9" checked><br />MPR Qty</th>
          <th data-column="9"><input type="checkbox" class="column-select" data-col-index="10" checked><br />Description</th>
          <th data-column="10"><input type="checkbox" class="column-select" data-col-index="11" checked><br />Remarks</th>
          <th data-column="11"><input type="checkbox" class="column-select" data-col-index="12" checked><br />MPR Date</th>
          <th data-column="12"><input type="checkbox" class="column-select" data-col-index="13" checked><br />MPR Submission Date</th>
          <!--<th>Description</th>-->
          <!--<th>MPR Price</th>-->
          <!--<th>Remarks</th>-->
          <!--<th>User</th>
                  <th>Date</th>-->
          <th data-column="13"><input type="checkbox" class="column-select" data-col-index="14" checked><br />PO</th>
          <th data-column="14"><input type="checkbox" class="column-select" data-col-index="15" checked><br />Supplier</th>
          <th data-column="15"><input type="checkbox" class="column-select" data-col-index="16" checked><br />Invoice</th>
          <th data-column="16"><input type="checkbox" class="column-select" data-col-index="17" checked><br />PO Qty</th>
          <th data-column="17"><input type="checkbox" class="column-select" data-col-index="18" checked><br />Total Price</th>
          <!-- <th>Remarks</th>
                  <th>Date</th> -->
          <!--<th>PO NO</th>-->
          <th data-column="18"><input type="checkbox" class="column-select" data-col-index="19" checked><br />GRN</th>
          <th data-column="19"><input type="checkbox" class="column-select" data-col-index="20" checked><br />Receive Qty</th>
          <th data-column="20"><input type="checkbox" class="column-select" data-col-index="21" checked><br />Received Date</th>
          <th data-column="21"><input type="checkbox" class="column-select" data-col-index="22" checked><br />Inventory Qty</th>
          <!-- <th>Po Status</th> -->
          <!-- <th data-column="22"><input type="checkbox" class="column-select" data-col-index="23" checked><br />Status</th> -->
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
          <th id="rowCount"></th>
          <th colspan="16">Totals</th>
          <th data-math="col-sum">col-sum</th>
          <th>&nbsp;</th>
          <th>&nbsp;</th>
          <th>&nbsp;</th>
          <th>&nbsp;</th>
          <!-- <th>&nbsp;</th> -->
          <!-- <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th> -->
        </tr>
      </tfoot>
      <tbody>
        <?php
        $i = 1;
        foreach ($ul as $row) { ?>
          <tr>

            <td style="vertical-align:middle;"><label class="checkbox-inline"><input type="checkbox" class="row-select" checked><?php echo $i++; ?></label></td>
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


            <td style="vertical-align:middle;"><a target="_blank" href="<?php echo base_url(); ?>Dashboard/grn_submission_to_it_mpr_item_wise/<?php echo $row['simprid']; ?>/<?php echo $userid; ?>"><?php echo $row['qty'] . " " . $row['puom']; ?></a></td>
            <td style="vertical-align:middle;"><?php echo $row['description']; ?></td>
            <td style="vertical-align:middle;"><?php echo $row['remarks']; ?></td>
            <td style="vertical-align:middle;"><?php echo date("d-m-Y", strtotime($row['mdate'])); ?></td>
            <td style="vertical-align:middle;"><?php echo date("d-m-Y", strtotime($row['msdate'])); ?></td>
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
            <!-- <td style="vertical-align:middle;">
              <?php
              if (($row['rqty'] < $row['pqty'])) {
                echo "pending";
              } elseif ($row['pqty'] == '') {
                echo "Remaining";
              } else {
                echo "Received";
              }
              ?></td> -->
          </tr>
        <?php } ?>
      </tbody>


    </table>
  </div>
  <script>
    $(document).ready(function() {
      $("#tableData").tablesorter();
    });
  </script>

</div>