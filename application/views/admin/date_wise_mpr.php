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

  td {
    font-weight: 600;
    font-variant: small-caps;
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
<script>
  $(document).ready(function() {
    excel = new ExcelGen({
      "src_id": "tableData",
      "show_header": true
    });
    $("#generate-excel").click(function() {
      excel.generate();
    });
  });
</script>

<!-- /.box-header -->
<div class="box-body no-padding">
  <!-- <form action="<?php echo base_url() ?>Dashboard/date_wise_mpr_list_xls" class="excel-upl" id="excel-upl" enctype="multipart/form-data" method="post" accept-charset="utf-8">
    <div class="row padall">
      <div class="col-lg-12">
        <div class="float-right">
          <?php
          foreach ($ul as $row1) { ?>
            <?php /*?><input type="hidden" name="factoryid" value="<?php echo $row1['factoryid']; ?>" /><?php */ ?>
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
  </form> -->
  <button id="generate-excel" class="btn btn-danger btn pull-right">
    Generate Excel</button>

  <br /><br />
  <table id="tableData" class="table table-hover table-bordered">
    <thead style="background:#91b9e6;">
      <tr>
        <th>SL</th>
        <th>MPR NO</th>
        <th>Unit</th>
        <th>MPR Prepared By</th>
        <th>Department</th>
        <th>Designation</th>
        <th>Date</th>
        <th class="filter-false">Edit/Details</th>
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
          <td style="vertical-align:middle;"><?php echo $row['name']; ?></td>
          <td style="vertical-align:middle;"><?php echo $row['departmentname']; ?></td>
          <td style="vertical-align:middle;"><?php echo $row['designation']; ?></td>
          <?php $mdate = date("d-m-Y", strtotime($row['mdate'])); ?>
          <td style="vertical-align:middle;"><?php echo $mdate; ?></td>
          <td style="vertical-align:middle;"><a href="<?php echo base_url();?>Dashboard/mpr_list_up_form/<?php echo $bn=$row['smprid'];?>"><i class="fa fa-edit" style="font-size:20px"></i></a></td>


        </tr>
      <?php } ?>
    </tbody>

  </table>
</div>