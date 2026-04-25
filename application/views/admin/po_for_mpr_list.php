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

  /* td{font-weight: 600; font-variant:small-caps;} */
</style>
<script>
  $('#insert_form').on('submit', function(e) {
    // ✅ শুধুমাত্র checked row-এর input enable রাখো
    $('#tableData tbody tr').each(function() {
      var checkbox = $(this).find('.checkbox');
      if (checkbox.is(':checked')) {
        $(this).find('input, select, textarea')
          .prop('disabled', false);
      } else {
        $(this).find('input, select, textarea')
          .not('.checkbox')
          .prop('disabled', true);
      }
    });
  });
</script>

<script type="text/javascript">
  $(function() {
    jQuery(".pd").datepicker({
      dateFormat: 'dd-mm-yy',
      autoclose: true,
      todayHighlight: true,
      changeMonth: true, // ✅ Month dropdown
      changeYear: true, // ✅ Year dropdown
      yearRange: '1950:2035'
    });
  })
</script>


<!-- /.box-header -->
<div class="box-body table-responsive no-padding">
  <form role="form" id="insert_form" autocomplete="off" method="post" action="<?php echo base_url(); ?>Dashboard/po_create" enctype="multipart/form-data">
    <table id="tableData" class="table table-hover table-bordered">
      <thead style="background:#91b9e6;">
        <tr>
          <input type="hidden" class="form-control" name="userid" id="userid" value="<?php echo $this->session->userdata('userid'); ?>">
        </tr>
        <tr>
          <th>SL</th>
          <th>Select</th>
          <th>MPR NO</th>
          <th>Unit</th>
          <th>Item</th>
          <th>Model</th>
          <th>Category</th>
          <th style="display:none;">Item Code</th>
          <th>Qty</th>
          <th>MPR Unit Price</th>
          <th>Date</th>
          <th>PO Qty</th>
          <th>PO Unit Price</th>
          <th>PO Price</th>
          <th>PO NO</th>
          <th>Qty</th>
          <th>PO Unit Price</th>
          <th>Supplier</th>
          <th>PO Date</th>
          <th>Description</th>
          <th>Remarks</th>
        </tr>
      </thead>
      <tbody>

        <?php
        $i = 1;
        foreach ($ul as $row) { ?>
          <tr>
            <td style="vertical-align:middle;"><?php echo $i++; ?></td>
            <td style="vertical-align:middle;"><input type="checkbox" class="checkbox" name="simprid[]" value="<?php echo $row['simprid']; ?>"></td>
            <td style="vertical-align:middle;"><input type="text" readonly class="form-control keep-enabled" name="mprid[]" value="<?php echo $row['mprid']; ?>"></td>
            <td style="vertical-align:middle;"><input type="text" readonly class="form-control" name="fid" value="<?php echo $row['fid']; ?>"></td>
            <td style="vertical-align:middle;"><?php echo $row['pname']; ?></td>
            <td style="vertical-align:middle;"><?php echo $row['item']; ?></td>
            <td style="vertical-align:middle;"><?php echo $row['pcname']; ?></td>
            <td style="vertical-align:middle; display:none;">
              <input type="text" readonly="readonly" class="form-control keep-enabled" name="item[]" value="<?php echo $row['simprid']; ?>" />
            </td>
            <!-- <td style="vertical-align:middle;"><?php echo $row['qty'] . " " . $row['puom']; ?></td> -->
            <td style="vertical-align:middle;"><input type="text" readonly class="form-control keep-enabled" name="qty[]" value="<?php echo $row['qty']; ?>"></td>
            <td style="vertical-align:middle;"><?php echo $row['price']; ?></td>
            <?php $mdate = date("d-m-Y", strtotime($row['mdate'])); ?>
            <td style="vertical-align:middle;"><?php echo $mdate; ?></td>
            <!-- <td style="vertical-align:middle;"><?php echo $row['prqty'] . " " . $row['puom']; ?></td> -->
            <td style="vertical-align:middle;"><input type="text" readonly class="form-control keep-enabled" name="prqty[]" value="<?php echo $row['prqty']; ?>"></td>
            <td style="vertical-align:middle;"><?php echo $row['pprice']; ?></td>
            <td style="vertical-align:middle;"><?php echo $row['tpprice']; ?></td>
            <td style="vertical-align:middle;"><input type="text" class="form-control" name="po[]" placeholder=" PO"></td>
            <td style="vertical-align:middle;"><input type="text"
                class="form-control pqty"
                name="pqty[]"
                placeholder="Qty"
                data-prqty="<?php echo $row['prqty']; ?>"
                data-qty="<?php echo $row['qty']; ?>"></td>
            <td style="vertical-align:middle;"><input type="text" class="form-control pprice" name="pprice[]" placeholder="Price"></td>
            <td style="vertical-align:middle;">
              <select class="form-control" name="supplier[]" id="supplier">
                <option value="">Select....</option>
                <?php
                foreach ($sl as $row1) {
                ?>
                  <option value="<?php echo $row1['supplierid']; ?>"><?php echo $row1['supplier']; ?></option>
                <?php
                }
                ?>
              </select>
              <?php echo form_error('supplierid', '<div class="error">', '</div>');  ?>
            </td>
            <td style="vertical-align:middle;"><input type="text" class="form-control pd keep-enabled" readonly name="podate[]" value="<?php echo date('d-m-Y'); ?>"></td>
            <td><textarea class="form-control" rows="1" name="description[]" id="description"><?php echo $row['description']; ?></textarea></td>
            <td><textarea class="form-control" rows="1" name="premarks[]" id="premarks"></textarea></td>
          </tr>
      </tbody>
    <?php } ?>
    </table>
    <div class="sbtn" style="text-align:center;">
      <input type="submit" class="btn btn-primary" name="submit" id="btn" value="Submit" />
    </div>
  </form>
</div>



<script>
  $(document).ready(function() {
    $(document).on('keydown', ".pqty", function(event) {


      if (event.shiftKey == true) {
        event.preventDefault();
      }

      if ((event.keyCode >= 48 && event.keyCode <= 57) || (event.keyCode >= 96 && event.keyCode <= 105) || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 37 || event.keyCode == 39 || event.keyCode == 46 || event.keyCode == 190) {

      } else {
        event.preventDefault();
      }

      if ($(this).val().indexOf('.') !== -1 && event.keyCode == 190)
        event.preventDefault();

    });
  });
</script>
<script>
  $(document).ready(function() {
    $(document).on('keydown', ".pprice", function(event) {


      if (event.shiftKey == true) {
        event.preventDefault();
      }

      if ((event.keyCode >= 48 && event.keyCode <= 57) || (event.keyCode >= 96 && event.keyCode <= 105) || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 37 || event.keyCode == 39 || event.keyCode == 46 || event.keyCode == 190) {

      } else {
        event.preventDefault();
      }

      if ($(this).val().indexOf('.') !== -1 && event.keyCode == 190)
        event.preventDefault();

    });
  });
</script>
<script>
  $(document).on('input', '.pqty', function() {
    let input = $(this);
    let enteredQty = parseFloat(input.val()) || 0;
    let prqty = parseFloat(input.data('prqty')) || 0;
    let mprqty = parseFloat(input.data('qty')) || 0;

    let total = enteredQty + prqty;

    if (total > mprqty) {
      alert("Total PO Qty (existing + entered) cannot exceed MPR Qty (" + mprqty + ")");
      input.val('');
      input.focus();
    }
  });
</script>

<script>
  $(document).ready(function() {
    // শুরুতে সব row disable করো
    $('#tableData tbody tr').each(function() {
      let checkbox = $(this).find('.checkbox');
      toggleRowInputs(checkbox);
    });

    // checkbox change হলে call করো
    $(document).on('change', '.checkbox', function() {
      toggleRowInputs($(this));
    });

    function toggleRowInputs(checkbox) {
      let row = checkbox.closest('tr');

      if (checkbox.is(':checked')) {
        // enable করো সব input/select/textarea কিন্তু checkbox বাদে
        row.find('input, select, textarea')
          .not('.checkbox, [readonly], .keep-enabled')
          .prop('disabled', false);
      } else {
        // disable করো সবকিছু checkbox বাদে, কিন্তু keep-enabled বাদে
        row.find('input, select, textarea')
          .not('.checkbox, .keep-enabled')
          .prop('disabled', true);
      }
    }


  });
</script>
<script>
  $(document).ready(function() {
    $('#tableData tbody tr').each(function() {
      var qty = parseFloat($(this).find('td:nth-child(9)').text()); // যেটা তুমি qty column হিসেবে দেখাবে
      var poQty = parseFloat($(this).find('td:nth-child(12)').text()); // po qty column

      if (qty == poQty) {
        $(this).find('.checkbox').prop('disabled', true);
        $(this).find('input, select, textarea').not('.checkbox, .keep-enabled').prop('disabled', true);
      }
    });
  });
</script>
<script>
  $(document).ready(function() {
    $('#insert_form').on('submit', function(e) {
      var checkedAny = false;
      var errorMessages = [];
      var hasError = false;

      $('#tableData tbody tr').each(function(index) {
        var rowNum = index + 1;
        var checkbox = $(this).find('.checkbox');

        // আগের error reset
        $(this).find('input, select').removeClass('input-error');
        $(this).removeClass('invalid-row');

        if (checkbox.is(':checked')) {
          checkedAny = true;

          var po = $(this).find('input[name="po[]"]').val().trim();
          var qty = $(this).find('input[name="pqty[]"]').val().trim();
          var pprice = $(this).find('input[name="pprice[]"]').val().trim();
          var supplier = $(this).find('select[name="supplier[]"]').val();

          if (!po) {
            errorMessages.push("Row " + rowNum + ": PO No required");
            $(this).find('input[name="po[]"]').addClass('input-error');
            hasError = true;
          }
          if (!qty) {
            errorMessages.push("Row " + rowNum + ": Qty required");
            $(this).find('input[name="pqty[]"]').addClass('input-error');
            hasError = true;
          }
          if (!pprice) {
            errorMessages.push("Row " + rowNum + ": Unit Price required");
            $(this).find('input[name="pprice[]"]').addClass('input-error');
            hasError = true;
          }
          if (!supplier) {
            errorMessages.push("Row " + rowNum + ": Supplier required");
            $(this).find('select[name="supplier[]"]').addClass('input-error');
            hasError = true;
          }

          if (hasError) $(this).addClass('invalid-row');
        }
      });

      if (!checkedAny) {
        alert("Please select at least one row.");
        e.preventDefault();
        return false;
      }

      if (errorMessages.length > 0) {
        alert(errorMessages.join("\n"));
        e.preventDefault();
        return false;
      }

      // ✅ Validation pass হলে form naturally submit হবে
    });
  });
</script>

<style>
  .input-error {
    border: 1px solid red !important;
    background-color: #ffe6e6;
  }

  .invalid-row {
    background-color: #fff2f2;
  }
</style>
<script>
  $(document).ready(function() {
    $('#tableData tbody tr').each(function() {
      var row = $(this);
      var checkbox = row.find('.checkbox');
      var pqtyInput = row.find('.pqty');

      // Data attribute থেকে মান নিচ্ছি
      var totalPoQty = parseFloat(pqtyInput.data('prqty')) || 0; // আগের PO Qty
      var mprQty = parseFloat(pqtyInput.data('qty')) || 0; // MPR Qty

      // যদি MPR Qty == Total PO Qty হয়, তাহলে disable
      if (totalPoQty >= mprQty && mprQty > 0) {
        checkbox.prop('disabled', true);
        row.addClass('disabled-row');

        // input/select disable করবো (checkbox ও readonly বাদে)
        row.find('input, select, textarea')
          .not('.checkbox, .keep-enabled, [readonly]')
          .prop('disabled', true);
      }
    });
  });
</script>

<style>
  .disabled-row {
    background-color: #f5f5f5;
    color: #777;
    opacity: 0.6;
  }
</style>