<style>
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
<script type="text/javascript">
  $(function() {
    jQuery(".pd").datepicker({
      dateFormat: 'dd-mm-yy'
    });
    jQuery(".wd").datepicker({
      dateFormat: 'dd-mm-yy'
    });
  })
</script>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <div class="content-wrapper">
      <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-12">
                <div class="box box-danger">
                  <div class="box-body ">
                    <div class="table-responsive">
                      <table id="tableData" class="table table-hover table-bordered">
                        <thead style="background:#91b9e6;">
                          <tr>
                            <th>SL</th>
                            <th>MPR NO</th>
                            <th>MPR Date</th>
                            <th>Unit</th>
                            <th>MPR Issued By</th>
                            <th>Category</th>
                            <th>Group</th>
                            <th>Sub Group</th>
                            <th>Product</th>
                            <th>Item/Model</th>
                            <th>MPR Qty</th>
                            <th>MPR Description</th>
                            <th>MPR Unit Price</th>
                            <th>Total Price</th>
                            <th>PO NO</th>
                            <th>PO Date</th>
                            <th>PO Qty</th>
                            <th>PO Unit Price</th>
                            <th>Total PO Price</th>
                            <th>PO Remarks</th>
                            <th>Supplier</th>
                            <th>Edit Date</th>
                            <th>Edit Time</th>
                          </tr>
                        </thead>
                        <tfoot>
                          <tr>
                            <th colspan="17">Totals</th>
                            <th>&nbsp;</th>
                            <th data-math="col-sum">col-sum</th>
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
                              <td style="vertical-align:middle;"><?php echo $row['mprid']; ?></td>
                              <?php $mdate = date("d-m-Y", strtotime($row['mdate'])); ?>
                              <td style="vertical-align:middle;"><?php echo $mdate; ?></td>
                              <td style="vertical-align:middle;"><?php echo $row['fid']; ?></td>
                              <td style="vertical-align:middle;"><?php echo $row['name'] . '--' . $row['departmentname'] . '--' . $row['designation']; ?></td>
                              <td style="vertical-align:middle;"><?php echo $row['pcname']; ?></td>
                              <td style="vertical-align:middle;"><?php echo $row['pgname']; ?></td>
                              <td style="vertical-align:middle;"><?php echo $row['psgname']; ?></td>
                              <td style="vertical-align:middle;"><?php echo $row['pname']; ?></td>
                              <td style="vertical-align:middle;"><?php echo $row['item']; ?></td>
                              <td style="vertical-align:middle;"><?php echo $row['qty'] . " " . $row['puom']; ?></td>
                              <td style="vertical-align:middle;"><?php echo $row['description']; ?></td>
                              <td style="vertical-align:middle;"><?php echo $row['price']; ?></td>
                              <td style="vertical-align:middle;"><?php echo $row['qty'] * $row['price']; ?></td>

                              <td style="vertical-align:middle;"><?php echo $row['po']; ?></td>
                              <?php $pdate = date("d-m-Y", strtotime($row['pdate'])); ?>
                              <td style="vertical-align:middle;"><?php echo $pdate; ?></td>
                              <td style="vertical-align:middle;"><?php echo $row['pqty'] . " " . $row['puom']; ?></td>
                              <td style="vertical-align:middle;"><?php echo number_format($row['pprice'], 2, '.', ','); ?></td>
                              <td style="vertical-align:middle;"><?php echo number_format($row['pqty'] * $row['pprice'], 2, '.', ','); ?></td>
                              <td style="vertical-align:middle;"><?php echo $row['premarks']; ?></td>
                              <td style="vertical-align:middle;"><?php echo $row['supplier']; ?></td>
                              <td style="vertical-align:middle;"><?php echo date("d-m-Y", strtotime($row['pedate'])); ?></td>
                              <td style="vertical-align:middle;"><?php echo $row['petime']; ?></td>
                            </tr>
                          <?php } ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </section>
    </div>
  </div>
  <!-- ./wrapper -->


</body>

</html>