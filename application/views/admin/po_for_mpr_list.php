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
<script type="text/javascript">
  $(function() {
    jQuery(".pd").datepicker({
      dateFormat: 'dd-mm-yy'
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
          <?php /*?><td colspan="2" style="vertical-align:middle;"><input type="text" class="form-control" name="po" placeholder="PO No"></td>
              <td colspan="2" style="vertical-align:middle;"><input type="text" class="form-control" name="supplier" placeholder="Supplier"></td>
              <td colspan="2" style="vertical-align:middle;"><input type="text" class="form-control pd" readonly name="podate" value="<?php echo date('d-m-Y'); ?>"></td><?php */ ?>
        </tr>
        <tr>
          <th>SL</th>
          <!--<th>Select</th>-->
          <th>MPR NO</th>
          <th>Unit</th>
          <!--<th>MPR Prepared By</th>-->
          <th>Item</th>
          <th>Model</th>
          <th>Category</th>
          <th style="display:none;">Item Code</th>
          <th>Qty</th>
          <!-- <th>Description</th> -->
          <th>MPR Unit Price</th>
          <!-- <th>Remarks</th> -->
          <!-- <th>User</th> -->
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
          <!--<th>Status</th>-->
        </tr>
      </thead>
      <tbody>

        <?php
        $i = 1;
        foreach ($ul as $row) { ?>
          <tr>

            <td style="vertical-align:middle;"><?php echo $i++; ?></td>
            <?php /*?><td style="vertical-align:middle;"><input type="checkbox" class="checkbox" name="simprid[]" value="<?php echo $row['simprid']; ?>"></td><?php */ ?>
            <td style="vertical-align:middle;"><input type="text" readonly class="form-control" name="mprid" value="<?php echo $row['mprid']; ?>"></td>
            <td style="vertical-align:middle;"><input type="text" readonly class="form-control" name="fid" value="<?php echo $row['fid']; ?>"></td>
            <?php /*?><td style="vertical-align:middle;"><?php echo $row['name'].'--'.$row['departmentname'].'--'.$row['designation'];?></td><?php */ ?>
            <td style="vertical-align:middle;"><?php echo $row['pname']; ?></td>
            <td style="vertical-align:middle;"><?php echo $row['item']; ?></td>
            <td style="vertical-align:middle;"><?php echo $row['pcname']; ?></td>
            <td style="vertical-align:middle; display:none;"><input type="text" readonly="readonly" class="form-control" name="item[]" value="<?php echo $row['simprid']; ?>" /></td>
            <td style="vertical-align:middle;"><?php echo $row['qty'] . " " . $row['puom']; ?></td>
            <!-- <td style="vertical-align:middle;"><?php echo $row['description']; ?></td> -->
            <td style="vertical-align:middle;"><?php echo $row['price']; ?></td>
            <!-- <td style="vertical-align:middle;"><?php echo $row['remarks']; ?></td> -->
            <!-- <td style="vertical-align:middle;"><?php echo $row['uname']; ?></td> -->

            <?php $mdate = date("d-m-Y", strtotime($row['mdate'])); ?>
            <td style="vertical-align:middle;"><?php echo $mdate; ?></td>
            <td style="vertical-align:middle;"><?php echo $row['prqty'] . " " . $row['puom']; ?></td>
            <td style="vertical-align:middle;"><?php echo $row['pprice']; ?></td>
            <td style="vertical-align:middle;"><?php echo $row['tpprice']; ?></td>
            <?php
            if ($row['prqty'] < $row['qty']) {
            ?>
              <td style="vertical-align:middle;"><input type="text" class="form-control" name="po[]" placeholder=" PO"></td>
              <td style="vertical-align:middle;"><input type="text"
       class="form-control pqty"
       name="pqty[]"
       placeholder="Qty"
       data-prqty="<?php echo $row['prqty']; ?>"
       data-qty="<?php echo $row['qty']; ?>"></td>
              <td style="vertical-align:middle;"><input type="text" class="form-control pprice" name="pprice[]" placeholder="Price"></td>

              <!--<td style="vertical-align:middle;"><input type="text" class="form-control" name="supplier[]" placeholder=" supplier"></td>-->
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
              <td style="vertical-align:middle;"><input type="text" class="form-control pd" readonly name="podate[]" value="<?php echo date('d-m-Y'); ?>"></td>
              <td><textarea class="form-control" rows="1" name="description[]" id="description"><?php echo $row['description']; ?></textarea></td>
              <td><textarea class="form-control" rows="1" name="premarks[]" id="premarks"></textarea></td>
              <?php /*?><td><select class="form-control" name="pstatus[]" id="pstatus">
                        <option value="1">Done</option>
                        <option value="2">Remaining</option>
                        <option value="3">Pending</option>
                    </select>
                    </td><?php */ ?>
            <?php
            } else {

            ?>
              <td style="vertical-align:middle;"><input type="text" class="form-control" readonly name="po[]" placeholder=" PO"></td>
              <td style="vertical-align:middle;"><input type="text" class="form-control" readonly name="pqty[]" placeholder="Qty"></td>
              <td style="vertical-align:middle;"><input type="text" class="form-control" readonly name="pprice[]" placeholder="Price"></td>

              <td style="vertical-align:middle;"><input type="text" class="form-control" readonly name="supplier[]" placeholder=" supplier"></td>
              <td style="vertical-align:middle;"><input type="text" class="form-control pd" disabled name="podate[]" value="<?php echo date('d-m-Y'); ?>"></td>
              <td><textarea class="form-control" readonly rows="1" name="description[]" id="description"><?php echo $row['description']; ?></textarea></td>
              <td><textarea class="form-control" readonly rows="1" name="premarks[]" id="premarks"></textarea></td>
            <?php
            }
            ?>
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
  $(document).ready(function () {
    $('#insert_form').on('submit', function (e) {
      // প্রতিটি row চেক করবো
      $('#tableData tbody tr').each(function () {
        var qty = $(this).find('input[name="pqty[]"]').val();

        // যদি qty ফাঁকা বা 0 হয়, তাহলে row-টা DOM থেকে মুছে ফেলবো
        if (!qty || qty == 0) {
          $(this).remove();
        }
      });
    });
  });
</script>


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
  $(document).on('input', '.pqty', function () {
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