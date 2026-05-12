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

  /* Keep original tablesorter header styling */
  th {
    position: sticky;
    top: 0;
    z-index: 10;
    font-size: 11px !important;
    text-align: center;
    border: 1px solid #cccccc !important;
    white-space: nowrap;
  }

  /* Filter row (tablesorter filter row) styling - keeping original */
  .tablesorter-filter-row {
    position: sticky;
    top: 32px;
    z-index: 9;
  }

  .tablesorter-filter-row th {
    position: sticky;
    top: 32px;
    padding: 4px 2px;
  }

  .tablesorter-filter-row input.tablesorter-filter {
    width: 100%;
    min-width: 60px;
    padding: 4px 2px;
    font-size: 10px;
    border: 1px solid #ddd;
    border-radius: 3px;
    box-sizing: border-box;
  }

  /* Ensure proper stacking context */
  .table-container table {
    border-collapse: separate;
    border-spacing: 0;
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
    z-index: 9999 !important;
  }

  .highlight-row {
    background-color: #d4edda !important;
    transition: background-color 0.5s ease;
  }

  .modal-lg {
    max-width: 800px;
  }

  .datepicker {
    cursor: pointer;
    background-color: #fff;
  }

  .btn-download-excel {
    background: linear-gradient(45deg, #00a65a, #00c06f);
    border: none;
    color: #fff;
    font-size: 12px;
    font-weight: 600;
    padding: 8px 16px;
    border-radius: 4px;
    cursor: pointer;
    transition: all .3s ease;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
  }

  .btn-download-excel i {
    margin-right: 5px;
    font-size: 13px;
  }

  .btn-download-excel:hover {
    background: linear-gradient(45deg, #008d4c, #00a65a);
    transform: translateY(-1px);
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.20);
  }

  .btn-download-excel:focus {
    outline: none;
  }

  /* Header inline styles - keeps original tablesorter appearance */
  .th-inline-content {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    white-space: nowrap;
  }

  .th-inline-content input {
    margin: 0;
  }

  .th-inline-content span {
    font-weight: bold;
  }

  /* Preserve tablesorter theme colors */
  .tablesorter-blue .tablesorter-header {
    background-color: #f9f9f9;
  }

  .tablesorter-blue .tablesorter-header-inner {
    padding: 0;
  }
</style>

<script>
  $(function() {

    $("table").tablesorter({
      theme: 'blue',
      widgets: ['math', 'zebra', 'filter'],
      widgetOptions: {

        // FILTER
        filter_hideFilters: false,
        filter_columnFilters: true,
        filter_saveFilters: false,
        filter_reset: '.reset-filter',

        // MATH
        math_data: 'math',
        math_ignore: [0, 1],
        math_none: 'N/A',

        math_complete: function($cell, wo, result, value, arry) {

          var txt = '<span class="align-decimal">' +
            (value === wo.math_none ? '' : ' ') +
            result + '</span>';

          if ($cell.attr('data-math') === 'all-sum') {
            return txt + ' (Sum of ' + arry.length + ' cells)';
          }

          return txt;
        },

        math_completed: function(c) {

          console.log(
            'math calculations complete',
            c.$table.find('[data-math="all-sum"]:first').text()
          );

        },

        math_mask: '#,##0.00',
        math_prefix: '',
        math_suffix: '',
        math_event: 'recalculate',
        math_priority: ['row', 'above', 'below', 'col'],
        math_rowFilter: ''
      }

    }).on("filterEnd sortEnd", function() {

      countVisibleRows();

    });

    // =========================
    // COUNT VISIBLE ROWS
    // =========================
    function countVisibleRows() {

      var visibleRowsCount = $('#tableData tbody tr:visible').length;

      $('#rowCount').text("Rows: " + visibleRowsCount);

    }

    countVisibleRows();

    // =========================
    // DOWNLOAD EXCEL
    // =========================
    // $("#downloadExcel").on("click", function() {

    //   var wb = XLSX.utils.book_new();

    //   var ws_data = [];

    //   // =========================
    //   // HEADER
    //   // =========================
    //   var headers = [];

    //   $('#tableData thead tr:first-child th').each(function() {

    //     var $checkbox = $(this).find('.column-select');

    //     if ($checkbox.length === 0 || $checkbox.is(':checked')) {

    //       var headerText = $(this).find('.header-text').text();

    //       if (!headerText) {

    //         headerText = $(this).text().trim();

    //       }

    //       headers.push(headerText);
    //     }

    //   });

    //   ws_data.push(headers);

    //   // =========================
    //   // BODY ROWS
    //   // =========================
    //   $('#tableData tbody tr:visible').each(function() {

    //     var $rowCheckbox = $(this).find('.row-select');

    //     if ($rowCheckbox.is(':checked')) {

    //       var row = [];

    //       $(this).find('td').each(function(index) {

    //         var $colCheckbox = $('#tableData thead tr:first-child th')
    //           .eq(index)
    //           .find('.column-select');

    //         if ($colCheckbox.length === 0 || $colCheckbox.is(':checked')) {

    //           var cellText = '';

    //           // =========================
    //           // FIX SL COLUMN
    //           // =========================
    //           if (index === 0) {

    //             cellText = $(this)
    //               .clone()
    //               .find('input')
    //               .remove()
    //               .end()
    //               .text()
    //               .trim();

    //           } else {

    //             cellText = $(this).text().trim();

    //           }

    //           row.push(cellText);

    //         }

    //       });

    //       ws_data.push(row);

    //     }

    //   });

    //   // =========================
    //   // EXPORT
    //   // =========================
    //   var ws = XLSX.utils.aoa_to_sheet(ws_data);

    //   XLSX.utils.book_append_sheet(wb, ws, "Selected Rows");

    //   XLSX.writeFile(wb, 'date_wise_po_list.xlsx');

    // });


    // =========================
    // DOWNLOAD EXCEL - Using data-col-index (Most Reliable!)
    // =========================
    $("#downloadExcel").on("click", function() {

      var wb = XLSX.utils.book_new();
      var ws_data = [];

      // =========================
      // GET VISIBLE COLUMNS USING data-col-index
      // =========================
      var columns = [];

      $('#tableData thead tr:first-child th').each(function() {
        var $checkbox = $(this).find('.column-select');
        if ($checkbox.length === 0 || $checkbox.is(':checked')) {
          var headerText = $(this).find('.header-text').text();
          if (!headerText) {
            headerText = $(this).text().trim();
          }

          // Get the actual column index from data-col-index
          var colIndex = $(this).data('col-index');
          if (colIndex === undefined) {
            // Fallback to regular index if data-col-index not found
            colIndex = $(this).index();
          }

          columns.push({
            domIndex: $(this).index(), // Position in DOM
            dataIndex: colIndex, // Actual data column index
            header: headerText
          });
        }
      });

      // Sort columns by data-col-index to maintain correct order
      columns.sort(function(a, b) {
        return a.dataIndex - b.dataIndex;
      });

      // Add headers
      ws_data.push(columns.map(c => c.header));

      // =========================
      // COLLECT SAMPLE DATA FOR TYPE DETECTION
      // =========================
      var sampleData = [];
      $('#tableData tbody tr:visible').each(function() {
        if ($(this).find('.row-select').is(':checked')) {
          var rowData = [];
          columns.forEach(function(col) {
            var $td = $(this).find('td').eq(col.domIndex);
            var cellValue = $td.text().trim();

            // Clean SL column (first column)
            if (col.dataIndex === 1) { // data-col-index="1" is SL
              cellValue = $td.clone().find('input').remove().end().text().trim();
            }
            rowData.push(cellValue);
          }.bind(this));
          sampleData.push(rowData);
        }
      });

      // =========================
      // AUTO-DETECT COLUMN TYPES FROM SAMPLE DATA
      // =========================
      var columnTypes = detectColumnTypesFromData(sampleData);

      // =========================
      // FORMAT ALL DATA WITH DETECTED TYPES
      // =========================
      var formattedData = [columns.map(c => c.header)];

      for (var i = 0; i < sampleData.length; i++) {
        var formattedRow = [];
        for (var j = 0; j < sampleData[i].length; j++) {
          var rawValue = sampleData[i][j];
          var type = columnTypes[j];
          formattedRow.push(formatValueByType(rawValue, type));
        }
        formattedData.push(formattedRow);
      }

      // =========================
      // CREATE WORKSHEET
      // =========================
      var ws = XLSX.utils.aoa_to_sheet(formattedData);

      // =========================
      // APPLY EXCEL CELL FORMATTING
      // =========================
      applyAutoFormatting(ws, columnTypes);

      // =========================
      // AUTO-SET COLUMN WIDTHS
      // =========================
      setDynamicColumnWidths(ws, formattedData, columnTypes);

      // =========================
      // EXPORT FILE
      // =========================
      XLSX.utils.book_append_sheet(wb, ws, "Selected Rows");
      XLSX.writeFile(wb, 'date_wise_po_list.xlsx');
    });

    // =========================
    // DETECT COLUMN TYPES FROM ACTUAL DATA
    // =========================
    function detectColumnTypesFromData(sampleData) {
      if (!sampleData.length) return [];

      var types = [];

      for (var col = 0; col < sampleData[0].length; col++) {
        var dateCount = 0;
        var numberCount = 0;
        var currencyCount = 0;
        var quantityWithUnitCount = 0;
        var totalCells = 0;

        // Analyze up to first 50 rows
        for (var row = 0; row < Math.min(sampleData.length, 50); row++) {
          var value = sampleData[row][col];
          if (!value || value === '') continue;

          totalCells++;

          // Check if it's a date (DD-MM-YYYY format)
          if (/^\d{1,2}-\d{1,2}-\d{4}$/.test(value)) {
            dateCount++;
          }
          // Check if it's quantity with unit (e.g., "10 PCS")
          else if (/^[\d,]+(?:\.\d+)?\s+[A-Za-z]+$/.test(value)) {
            quantityWithUnitCount++;
          }
          // Check if it's currency (has commas and 2 decimal places)
          else if (/^[\d,]+\.\d{2}$/.test(value)) {
            currencyCount++;
          }
          // Check if it's a plain number
          else if (/^[\d,]+(?:\.\d+)?$/.test(value)) {
            numberCount++;
          }
        }

        // Determine type based on majority
        if (totalCells === 0) {
          types[col] = 'text';
        } else if (dateCount > totalCells * 0.5) {
          types[col] = 'date';
        } else if (quantityWithUnitCount > totalCells * 0.3) {
          types[col] = 'quantity';
        } else if (currencyCount > totalCells * 0.3) {
          types[col] = 'currency';
        } else if (numberCount > totalCells * 0.3) {
          types[col] = 'number';
        } else {
          types[col] = 'text';
        }
      }

      return types;
    }

    // =========================
    // FORMAT VALUE BY TYPE
    // =========================
    function formatValueByType(value, type) {
      if (!value || value === '') return '';

      switch (type) {
        case 'date':
          var dateMatch = value.match(/^(\d{1,2})-(\d{1,2})-(\d{4})$/);
          if (dateMatch) {
            var dateObj = new Date(dateMatch[3], dateMatch[2] - 1, dateMatch[1]);
            if (!isNaN(dateObj.getTime())) {
              return (dateObj - new Date(1899, 11, 30)) / (24 * 60 * 60 * 1000);
            }
          }
          return value;

        case 'currency':
          var cleanNum = value.replace(/,/g, '');
          if (!isNaN(cleanNum) && cleanNum !== '') {
            return parseFloat(cleanNum);
          }
          return value;

        case 'quantity':
          var qtyMatch = value.match(/^([\d,]+(?:\.\d+)?)/);
          if (qtyMatch) {
            var qtyNum = qtyMatch[1].replace(/,/g, '');
            if (!isNaN(qtyNum)) {
              return parseFloat(qtyNum);
            }
          }
          return value;

        case 'number':
          var numValue = value.replace(/,/g, '');
          if (!isNaN(numValue) && numValue !== '') {
            return parseFloat(numValue);
          }
          return value;

        default:
          return value;
      }
    }

    // =========================
    // APPLY EXCEL CELL FORMATTING
    // =========================
    function applyAutoFormatting(ws, columnTypes) {
      if (!ws['!ref']) return;

      var range = XLSX.utils.decode_range(ws['!ref']);

      for (var colNum = 0; colNum < columnTypes.length; colNum++) {
        var columnType = columnTypes[colNum];

        for (var rowNum = range.s.r + 1; rowNum <= range.e.r; rowNum++) {
          var cellAddress = XLSX.utils.encode_cell({
            r: rowNum,
            c: colNum
          });
          var cell = ws[cellAddress];

          if (cell && cell.t === 'n') {
            switch (columnType) {
              case 'date':
                cell.z = 'dd-mm-yyyy';
                break;
              case 'currency':
                cell.z = '#,##0.00';
                break;
              case 'quantity':
                cell.z = '#,##0';
                break;
              case 'number':
                if (Math.floor(cell.v) === cell.v) {
                  cell.z = '#,##0';
                } else {
                  cell.z = '#,##0.00';
                }
                break;
            }
          }
        }
      }
    }

    // =========================
    // DYNAMIC COLUMN WIDTHS
    // =========================
    function setDynamicColumnWidths(ws, formattedData, columnTypes) {
      if (!formattedData || formattedData.length === 0) return;

      var colWidths = [];

      for (var colNum = 0; colNum < formattedData[0].length; colNum++) {
        var maxWidth = 10;
        var columnType = columnTypes[colNum];

        // Check header width
        if (formattedData[0] && formattedData[0][colNum]) {
          maxWidth = Math.max(maxWidth, String(formattedData[0][colNum]).length + 2);
        }

        // Check data rows
        for (var rowNum = 1; rowNum < Math.min(formattedData.length, 100); rowNum++) {
          if (formattedData[rowNum] && formattedData[rowNum][colNum] !== undefined && formattedData[rowNum][colNum] !== '') {
            var cellValue = String(formattedData[rowNum][colNum]);
            var cellLength = cellValue.length;

            if (columnType === 'date') {
              cellLength = 12;
            } else if (columnType === 'currency') {
              cellLength = Math.max(cellLength, 15);
            }

            if (cellLength > maxWidth) {
              maxWidth = Math.min(cellLength + 2, 50);
            }
          }
        }

        colWidths.push({
          wch: maxWidth
        });
      }

      ws['!cols'] = colWidths;
    }

  });
</script>

<div class="box-body">
  <div class="row padall">
    <div class="col-lg-12">
      <div class="row">
        <div class="col-md-6">
          <div class="float-left">
          </div>
        </div>
        <div class="col-md-6">
          <div class="float-right" style="text-align: right;">
            <button id="downloadExcel" class="btn-download-excel">
              <i class="fa fa-file-excel-o"></i>
              Excel
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="table-responsive no-padding table-container">
    <table id="tableData" class="table table-hover tablesorter tablesorter-blue">
      <thead>
        <tr>
          <th data-column="0" class="tablesorter-header">
            <div class="th-inline-content">
              <input type="checkbox" class="column-select" data-col-index="1" checked>
              <span class="header-text">SL</span>
            </div>
          </th>
          <th data-column="1" class="tablesorter-header">
            <div class="th-inline-content">
              <input type="checkbox" class="column-select" data-col-index="2" checked>
              <span class="header-text">MPR NO</span>
            </div>
          </th>
          <th data-column="2" class="tablesorter-header">
            <div class="th-inline-content">
              <input type="checkbox" class="column-select" data-col-index="3" checked>
              <span class="header-text">MPR Date</span>
            </div>
          </th>
          <th data-column="3" class="tablesorter-header">
            <div class="th-inline-content">
              <input type="checkbox" class="column-select" data-col-index="4" checked>
              <span class="header-text">Unit</span>
            </div>
          </th>
          <th data-column="4" class="tablesorter-header">
            <div class="th-inline-content">
              <input type="checkbox" class="column-select" data-col-index="5" checked>
              <span class="header-text">Employment Type</span>
            </div>
          </th>
          <th data-column="5" class="tablesorter-header">
            <div class="th-inline-content">
              <input type="checkbox" class="column-select" data-col-index="6" checked>
              <span class="header-text">MPR Issued By</span>
            </div>
          </th>
          <th data-column="6" class="tablesorter-header">
            <div class="th-inline-content">
              <input type="checkbox" class="column-select" data-col-index="7" checked>
              <span class="header-text">User</span>
            </div>
          </th>
          <th data-column="7" class="tablesorter-header">
            <div class="th-inline-content">
              <input type="checkbox" class="column-select" data-col-index="8" checked>
              <span class="header-text">Category</span>
            </div>
          </th>
          <th data-column="8" class="tablesorter-header">
            <div class="th-inline-content">
              <input type="checkbox" class="column-select" data-col-index="9" checked>
              <span class="header-text">Group</span>
            </div>
          </th>
          <th data-column="9" class="tablesorter-header">
            <div class="th-inline-content">
              <input type="checkbox" class="column-select" data-col-index="10" checked>
              <span class="header-text">Sub Group</span>
            </div>
          </th>
          <th data-column="10" class="tablesorter-header">
            <div class="th-inline-content">
              <input type="checkbox" class="column-select" data-col-index="11" checked>
              <span class="header-text">Product</span>
            </div>
          </th>
          <th data-column="11" class="tablesorter-header">
            <div class="th-inline-content">
              <input type="checkbox" class="column-select" data-col-index="12" checked>
              <span class="header-text">Item/Model</span>
            </div>
          </th>
          <th data-column="12" class="tablesorter-header">
            <div class="th-inline-content">
              <input type="checkbox" class="column-select" data-col-index="13" checked>
              <span class="header-text">MPR Qty</span>
            </div>
          </th>
          <th data-column="13" class="tablesorter-header">
            <div class="th-inline-content">
              <input type="checkbox" class="column-select" data-col-index="14" checked>
              <span class="header-text">MPR Description</span>
            </div>
          </th>
          <th data-column="14" class="tablesorter-header">
            <div class="th-inline-content">
              <input type="checkbox" class="column-select" data-col-index="15" checked>
              <span class="header-text">MPR Unit Price</span>
            </div>
          </th>
          <th data-column="15" class="tablesorter-header">
            <div class="th-inline-content">
              <input type="checkbox" class="column-select" data-col-index="16" checked>
              <span class="header-text">Total Price</span>
            </div>
          </th>
          <th data-column="16" class="tablesorter-header">
            <div class="th-inline-content">
              <input type="checkbox" class="column-select" data-col-index="17" checked>
              <span class="header-text">PO NO</span>
            </div>
          </th>
          <th data-column="17" class="tablesorter-header">
            <div class="th-inline-content">
              <input type="checkbox" class="column-select" data-col-index="18" checked>
              <span class="header-text">PO Date</span>
            </div>
          </th>
          <th data-column="18" class="tablesorter-header">
            <div class="th-inline-content">
              <input type="checkbox" class="column-select" data-col-index="19" checked>
              <span class="header-text">PO Qty</span>
            </div>
          </th>
          <th data-column="19" class="tablesorter-header">
            <div class="th-inline-content">
              <input type="checkbox" class="column-select" data-col-index="20" checked>
              <span class="header-text">PO Unit Price</span>
            </div>
          </th>
          <th data-column="20" class="tablesorter-header">
            <div class="th-inline-content">
              <input type="checkbox" class="column-select" data-col-index="21" checked>
              <span class="header-text">Total PO Price</span>
            </div>
          </th>
          <th data-column="21" class="tablesorter-header">
            <div class="th-inline-content">
              <input type="checkbox" class="column-select" data-col-index="22" checked>
              <span class="header-text">PO Description</span>
            </div>
          </th>
          <th data-column="22" class="tablesorter-header">
            <div class="th-inline-content">
              <input type="checkbox" class="column-select" data-col-index="23" checked>
              <span class="header-text">PO Remarks</span>
            </div>
          </th>
          <th data-column="23" class="tablesorter-header">
            <div class="th-inline-content">
              <input type="checkbox" class="column-select" data-col-index="24" checked>
              <span class="header-text">Supplier</span>
            </div>
          </th>
          <?php if ($this->session->userdata('user_type') != '3' && $this->session->userdata('user_type') != '4') { ?>
            <th data-column="24" class="tablesorter-header">
              <div class="th-inline-content">
                <input type="checkbox" class="column-select" data-col-index="25" checked>
                <span class="header-text">Edit</span>
              </div>
            </th>
            <th data-column="25" class="tablesorter-header filter-false">
              <div class="th-inline-content">
                <input type="checkbox" class="column-select" data-col-index="26" checked>
                <span class="header-text">PO Log</span>
              </div>
            </th>
          <?php } ?>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th id="rowCount"></th>
          <th colspan="17">Totals</th>
          <th>&nbsp;</th>
          <th data-math="col-sum">col-sum</th>
          <th data-math="col-sum">col-sum</th>
          <th>&nbsp;</th>
          <th>&nbsp;</th>
          <th>&nbsp;</th>
          <?php if ($this->session->userdata('user_type') != '3' && $this->session->userdata('user_type') != '4') { ?>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
          <?php } ?>
        </tr>
      </tfoot>
      <tbody>
        <?php
        $i = 1;
        foreach ($ul as $row) { ?>
          <tr data-sipoid="<?php echo isset($row['sipoid']) ? $row['sipoid'] : ''; ?>">
            <td style="vertical-align:middle;">
              <label class="checkbox-inline">
                <input type="checkbox" class="row-select" checked><?php echo $i++; ?>
              </label>
            </td>
            <td style="vertical-align:middle;"><?php echo isset($row['mprid']) ? $row['mprid'] : ''; ?></td>
            <?php $mdate = isset($row['mdate']) ? date("d-m-Y", strtotime($row['mdate'])) : ''; ?>
            <td style="vertical-align:middle;"><?php echo $mdate; ?></td>
            <td style="vertical-align:middle;"><?php echo isset($row['fid']) ? $row['fid'] : ''; ?></td>
            <td style="vertical-align:middle;"><?php echo isset($row['etypename']) ? $row['etypename'] : ''; ?></td>
            <td style="vertical-align:middle;"><?php echo isset($row['name']) ? $row['name'] . '--' . ($row['departmentname'] ?? '') . '--' . ($row['designation'] ?? '') : ''; ?></td>
            <td style="vertical-align:middle;"><?php echo isset($row['uname']) ? $row['uname'] : ''; ?></td>
            <td style="vertical-align:middle;"><?php echo isset($row['pcname']) ? $row['pcname'] : ''; ?></td>
            <td style="vertical-align:middle;"><?php echo isset($row['pgname']) ? $row['pgname'] : ''; ?></td>
            <td style="vertical-align:middle;"><?php echo isset($row['psgname']) ? $row['psgname'] : ''; ?></td>
            <td style="vertical-align:middle;"><?php echo isset($row['pname']) ? $row['pname'] : ''; ?></td>
            <td style="vertical-align:middle;"><?php echo isset($row['item']) ? $row['item'] : ''; ?></td>
            <td style="vertical-align:middle;"><?php echo isset($row['qty']) ? $row['qty'] . " " . ($row['puom'] ?? '') : ''; ?></td>
            <td style="vertical-align:middle;"><?php echo isset($row['description']) ? $row['description'] : ''; ?></td>
            <td style="vertical-align:middle;"><?php echo isset($row['price']) ? $row['price'] : ''; ?></td>
            <td style="vertical-align:middle;"><?php echo isset($row['qty']) && isset($row['price']) ? $row['qty'] * $row['price'] : ''; ?></td>
            <td style="vertical-align:middle;" class="po-number"><?php echo isset($row['po']) ? $row['po'] : ''; ?></td>
            <?php $pdate = isset($row['pdate']) ? date("d-m-Y", strtotime($row['pdate'])) : ''; ?>
            <td style="vertical-align:middle;" class="po-date"><?php echo $pdate; ?></td>
            <td style="vertical-align:middle;" class="po-qty"><?php echo isset($row['pqty']) ? $row['pqty'] . " " . ($row['puom'] ?? '') : ''; ?></td>
            <td style="vertical-align:middle;" class="po-price"><?php echo isset($row['pprice']) ? number_format($row['pprice'], 2, '.', ',') : ''; ?></td>
            <td style="vertical-align:middle;" class="po-total-price"><?php echo isset($row['pqty']) && isset($row['pprice']) ? number_format($row['pqty'] * $row['pprice'], 2, '.', ',') : ''; ?></td>
            <td style="vertical-align:middle;" class="po-description"><?php echo isset($row['podescription']) ? $row['podescription'] : ''; ?></td>
            <td style="vertical-align:middle;" class="po-remarks"><?php echo isset($row['premarks']) ? $row['premarks'] : ''; ?></td>
            <td style="vertical-align:middle;" class="supplier-name"><?php echo isset($row['supplier']) ? $row['supplier'] : ''; ?></td>
            <?php if ($this->session->userdata('user_type') != '3' && $this->session->userdata('user_type') != '4') { ?>
              <?php if (isset($row['pstatus']) && $row['pstatus'] == '0') { ?>
                <td style="vertical-align:middle;">
                  <button type="button"
                    class="btn btn-primary btn-sm edit-po-btn"
                    data-spoid="<?php echo isset($row['spoid']) ? $row['spoid'] : ''; ?>"
                    data-sipoid="<?php echo isset($row['sipoid']) ? $row['sipoid'] : ''; ?>"
                    data-mprid="<?php echo isset($row['mprid']) ? $row['mprid'] : ''; ?>"
                    data-simprid="<?php echo isset($row['simprid']) ? $row['simprid'] : ''; ?>"
                    data-po="<?php echo isset($row['po']) ? htmlspecialchars($row['po']) : ''; ?>"
                    data-podate="<?php echo isset($row['pdate']) ? date("d-m-Y", strtotime($row['pdate'])) : ''; ?>"
                    data-pqty="<?php echo isset($row['pqty']) ? $row['pqty'] : ''; ?>"
                    data-pprice="<?php echo isset($row['pprice']) ? $row['pprice'] : ''; ?>"
                    data-premarks="<?php echo isset($row['premarks']) ? htmlspecialchars($row['premarks']) : ''; ?>"
                    data-supplier="<?php echo $row['supplierid']; ?>"
                    data-supplier-name="<?php echo htmlspecialchars($row['supplier']); ?>">
                    <i class="fa fa-edit"></i> Edit
                  </button>
                </td>
              <?php } else { ?>
                <td style="vertical-align:middle;"><button type="button"
                    class="btn btn-success btn-sm edit-po-btn"
                    data-spoid="<?php echo isset($row['spoid']) ? $row['spoid'] : ''; ?>"
                    data-sipoid="<?php echo isset($row['sipoid']) ? $row['sipoid'] : ''; ?>"
                    data-mprid="<?php echo isset($row['mprid']) ? $row['mprid'] : ''; ?>"
                    data-simprid="<?php echo isset($row['simprid']) ? $row['simprid'] : ''; ?>"
                    data-po="<?php echo isset($row['po']) ? htmlspecialchars($row['po']) : ''; ?>"
                    data-podate="<?php echo isset($row['pdate']) ? date("d-m-Y", strtotime($row['pdate'])) : ''; ?>"
                    data-pqty="<?php echo isset($row['pqty']) ? $row['pqty'] : ''; ?>"
                    data-pprice="<?php echo isset($row['pprice']) ? $row['pprice'] : ''; ?>"
                    data-premarks="<?php echo isset($row['premarks']) ? htmlspecialchars($row['premarks']) : ''; ?>"
                    data-supplier="<?php echo $row['supplierid']; ?>"
                    data-supplier-name="<?php echo htmlspecialchars($row['supplier']); ?>">
                    <i class="fa fa-edit"></i> Received
                  </button></td>
              <?php } ?>
              <td style="vertical-align:middle;">
                <a target="_blank" class="btn btn-sm btn-default log-history-btn" href="<?php echo base_url(); ?>Dashboard/po_list_log/<?php echo isset($row['sipoid']) ? $row['sipoid'] : ''; ?>">
                  <i class="fa fa-history"></i>Log
                </a>
              </td>
            <?php } ?>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>


  <!-- Modal for Editing PO -->
  <div class="modal fade" id="editPOModal" tabindex="-1" role="dialog" aria-labelledby="editPOModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editPOModalLabel">Edit PO</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="editPOForm" method="post">
          <div class="modal-body">
            <div id="modal-validation-errors" class="alert alert-danger" style="display: none;"></div>
            <div id="modal-success-message" class="alert alert-success" style="display: none;"></div>

            <input type="hidden" name="spoid" id="modal_spoid">
            <input type="hidden" name="sipoid" id="modal_sipoid">
            <input type="hidden" name="mprid" id="modal_mprid">
            <input type="hidden" name="simprid" id="modal_simprid">
            <input type="hidden" name="userid" id="modal_userid" value="<?php echo $this->session->userdata('userid'); ?>">

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>PO Number <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="po" id="modal_po" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>PO Date <span class="text-danger">*</span></label>
                  <input type="text" class="form-control datepicker" name="podate" id="modal_podate" autocomplete="off" readonly required>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Qty <span class="text-danger">*</span></label>
                  <input type="number" step="1" class="form-control" name="pqty" id="modal_pqty" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Price <span class="text-danger">*</span></label>
                  <input type="number" step="0.01" class="form-control" name="pprice" id="modal_pprice" required>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Supplier <span class="text-danger">*</span></label>
                  <select class="form-control" name="supplier" id="modal_supplier" required>
                    <option value="">Select Supplier</option>
                    <?php foreach ($sl as $sup): ?>
                      <option value="<?php echo $sup['supplierid']; ?>"><?php echo $sup['supplier']; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Remarks</label>
                  <textarea class="form-control" rows="3" name="premarks" id="modal_premarks"></textarea>
                </div>
              </div>
            </div>


          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary" id="btnSavePO">Save Changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function() {

    // =========================
    // DATEPICKER
    // =========================
    function initDatepicker() {

      $('#modal_podate').datepicker('destroy');

      $('#modal_podate').datepicker({
        dateFormat: 'dd-mm-yy',
        changeMonth: true,
        changeYear: true,
        yearRange: '1950:2035'
      });
    }

    initDatepicker();

    // =========================
    // EDIT BUTTON CLICK
    // =========================
    $(document).on('click', '.edit-po-btn', function(e) {

      e.preventDefault();

      // clear old messages
      $('#modal-validation-errors').hide().html('');
      $('#modal-success-message').hide().html('');

      // button
      var btn = $(this);

      // get data from button
      var spoid = btn.attr('data-spoid');
      var sipoid = btn.attr('data-sipoid');
      var mprid = btn.attr('data-mprid');
      var simprid = btn.attr('data-simprid');

      var po = btn.attr('data-po');
      var podate = btn.attr('data-podate');
      var pqty = btn.attr('data-pqty');
      var pprice = btn.attr('data-pprice');
      var premarks = btn.attr('data-premarks');

      var supplierId = btn.attr('data-supplier');
      var supplierName = btn.attr('data-supplier-name');

      // hidden fields
      $('#modal_spoid').val(spoid);
      $('#modal_sipoid').val(sipoid);
      $('#modal_mprid').val(mprid);
      $('#modal_simprid').val(simprid);

      // form fields
      $('#modal_po').val(po);
      $('#modal_podate').val(podate);
      $('#modal_pqty').val(pqty);
      $('#modal_pprice').val(pprice);
      $('#modal_premarks').val(premarks);

      // =========================
      // REPLACE "SELECT SUPPLIER"
      // =========================

      if (supplierId != '' && supplierName != '') {

        $('#modal_supplier option:first')
          .val(supplierId)
          .text(supplierName);

        $('#modal_supplier').val(supplierId);
      }

      // debug
      console.log('Supplier ID:', supplierId);
      console.log('Supplier Name:', supplierName);

      // open modal
      $('#editPOModal').modal('show');

    });

    // =========================
    // FORM SUBMIT AJAX
    // =========================
    $('#editPOForm').on('submit', function(e) {

      e.preventDefault();

      $('#btnSavePO')
        .prop('disabled', true)
        .text('Saving...');

      $('#modal-validation-errors').hide().html('');
      $('#modal-success-message').hide().html('');

      var formData = $(this).serialize();


      var sipoid = $('#modal_sipoid').val();

      $.ajax({

        url: '<?php echo base_url(); ?>Dashboard/po_list_update_ajax',

        type: 'POST',

        data: formData,

        dataType: 'json',

        success: function(response) {

          if (response.status == 'success') {

            $('#modal-success-message')
              .show()
              .html(response.message);

            // =========================
            // UPDATE TABLE ROW
            // =========================

            var row = $('tr[data-sipoid="' + sipoid + '"]');

            if (row.length > 0) {

              // =========================
              // GET NEW VALUES
              // =========================

              var newPo = $('#modal_po').val();
              var newPodate = $('#modal_podate').val();
              var newPqty = $('#modal_pqty').val();
              var newPprice = $('#modal_pprice').val();
              var newPremarks = $('#modal_premarks').val();

              var supplierId = $('#modal_supplier').val();
              var supplierName = $('#modal_supplier option:selected').text();

              // =========================
              // GET UOM
              // =========================

              var uomText = row.find('.po-qty').text();

              var uom = '';

              if (uomText.indexOf(' ') > -1) {

                uom = uomText.split(' ')[1];

              }

              // =========================
              // CALCULATE TOTAL
              // =========================

              var totalPrice = parseFloat(newPqty) * parseFloat(newPprice);

              // =========================
              // UPDATE TABLE CELLS
              // =========================

              row.find('.po-number').text(newPo);

              row.find('.po-date').text(newPodate);

              row.find('.po-qty').text(newPqty + ' ' + uom);

              // PRICE
              row.find('.po-price')
                .attr('data-math', parseFloat(newPprice))
                .text(
                  parseFloat(newPprice).toLocaleString('en-US', {
                    minimumFractionDigits: 2,
                    maximumFractionDigits: 2
                  })
                );

              // TOTAL PRICE
              row.find('.po-total-price')
                .attr('data-math', totalPrice)
                .text(
                  totalPrice.toLocaleString('en-US', {
                    minimumFractionDigits: 2,
                    maximumFractionDigits: 2
                  })
                );

              // REMARKS
              row.find('.po-remarks').text(newPremarks);

              // SUPPLIER
              row.find('.supplier-name').text(supplierName);

              // =========================
              // UPDATE BUTTON DATA
              // =========================

              var editBtn = row.find('.edit-po-btn');

              editBtn.attr('data-po', newPo);
              editBtn.attr('data-podate', newPodate);
              editBtn.attr('data-pqty', newPqty);
              editBtn.attr('data-pprice', newPprice);
              editBtn.attr('data-premarks', newPremarks);

              editBtn.attr('data-supplier', supplierId);
              editBtn.attr('data-supplier-name', supplierName);

              // =========================
              // UPDATE TABLESORTER
              // =========================

              $("#tableData")
                .trigger("update")
                .trigger("recalculate");

              // =========================
              // HIGHLIGHT ROW
              // =========================

              row.addClass('highlight-row');

              setTimeout(function() {

                row.removeClass('highlight-row');

              }, 2000);

            }

            // =========================
            // CLOSE MODAL
            // =========================

            setTimeout(function() {

              $('#editPOModal').modal('hide');

              $('#btnSavePO')
                .prop('disabled', false)
                .text('Save Changes');

            }, 1200);

          } else {

            $('#modal-validation-errors')
              .show()
              .html(response.message);

            $('#btnSavePO')
              .prop('disabled', false)
              .text('Save Changes');

          }

        },

        error: function(xhr) {

          var errorMsg = 'Something went wrong';

          if (xhr.responseJSON && xhr.responseJSON.message) {
            errorMsg = xhr.responseJSON.message;
          }

          $('#modal-validation-errors')
            .show()
            .html(errorMsg);

          $('#btnSavePO')
            .prop('disabled', false)
            .text('Save Changes');
        }

      });

    });

    // =========================
    // MODAL CLOSE RESET
    // =========================
    $('#editPOModal').on('hidden.bs.modal', function() {

      $('#modal-validation-errors').hide().html('');
      $('#modal-success-message').hide().html('');

      $('#editPOForm')[0].reset();

      $('#btnSavePO')
        .prop('disabled', false)
        .text('Save Changes');

    });

  });
</script>