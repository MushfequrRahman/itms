<style>
  .error {
    color: red;
  }

  em {
    color: red;
  }
</style>
<?php
$item = '';
$uom = '';
foreach ($il as $row) {
  $item .= '<option value="' . $row["pccode"] . '">' . $row["pcname"] . '</option>';
}
foreach ($ul as $row) {
  $uom .= '<option value="' . $row["puomid"] . '">' . $row["puom"] . '</option>';
}
?>


<script type="text/javascript">
  $(function() {
    jQuery(".pd").datepicker({
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
                  <div class="box-header with-border">
                    <h3 class="box-title">PO Create</h3>
                    <?php /*?><div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12">
							<?php if($responce = $this->session->flashdata('Successfully')): ?>
								<div class="text-center">
									<div class="alert alert-success text-center"><?php echo $responce;?></div>
								</div>
							<?php endif;?>
						</div>
					</div><?php */ ?>
                  </div>
                  <div class="box-body">
                    <span style="text-align:center" id="error"></span>
                    <div style="text-align:center" id="item_table"></div>
                    <?php /*?><form role="form" id="insert_form" autocomplete="off" method="post" action="<?php echo base_url();?>Dashboard/challanm_create" enctype="multipart/form-data"><?php */ ?>
                    <form role="form" name="insert_form" id="insert_form" autocomplete="off" method="post" enctype="multipart/form-data">
                      <input type="hidden" class="form-control" name="userid" id="userid" value="<?php echo $this->session->userdata('userid'); ?>">
                      <div class="form-group">
                        <label>MPR Number<em>*</em></label>
                        <input type="text" class="form-control mprid" name="mprid" id="mprid" placeholder="Enter MPR Number">
                        <?php echo form_error('mpr', '<div class="error">', '</div>');  ?>
                      </div>
                      <div class="form-group">
                        <label>PO Number<em>*</em></label>
                        <input type="text" class="form-control" name="po" id="po" placeholder="Enter PO Number">
                        <?php echo form_error('po', '<div class="error">', '</div>');  ?>
                      </div>
                      <div class="form-group">
                        <label>Supplier<em>*</em></label>
                        <input type="text" class="form-control" name="supplier" id="supplier" placeholder="Enter Supplier">
                        <?php echo form_error('po', '<div class="error">', '</div>');  ?>
                      </div>
                      <div class="form-group">
                        <label>PO Create Date</label>
                        <input type="text" class="form-control pd" readonly name="podate" value="<?php echo date('d-m-Y'); ?>">
                        <?php /*?><?php echo form_error('dobdate', '<div class="error">', '</div>');  ?><?php */ ?>
                      </div>
                      <div id="AuGroup">
                        <div class="row">
                          <table class="table table-bordered" id="item_table1">
                            <thead>
                              <tr>
                                <th style="text-align:center;">Item Code</th>
                                <th style="text-align:center;">PO Qty</th>
                                <th style="text-align:center;">Unit</th>
                                <th style="text-align:center;">Description</th>
                                <th style="text-align:center;">Unit Price</th>
                                <th style="vertical-align:middle; text-align:center;"><button type="button" name="add" class="btn btn-success btn-xs add"><span class="glyphicon glyphicon-plus"></span></button></th>
                              </tr>
                            </thead>
                            <tbody></tbody>
                          </table>
                        </div>
                      </div>
                  </div>
                  <div class="box-footer text-center">
                    <input type="submit" class="btn btn-primary" name="submit" value="CREATE" />
                  </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>


  <script>
    $(document).ready(function() {

      var count = 0;

      $(document).on('click', '.add', function() {
        count++;
        var html = '';
        html += '<tr>';
        html += '<td><input type="text" name="item[]" class="form-control item" id="item' + count + '" /></td>';
        html += '<td><input type="text" name="qty[]" class="form-control qty" id="qty' + count + '" /></td>';
        html += '<td><select name="uom[]" class="form-control uom" id="uom' + count + '"><option value="">UOM</option><?php echo $uom; ?></select></td>';
        html += '<td><textarea class="form-control" rows="1" name="description[]" id="description"></textarea></td>';
        html += '<td><input type="text" name="price[]" class="form-control price" id="price' + count + '" /></td>';
        html += '<td style="vertical-align:middle;"><button type="button" name="remove" class="btn btn-danger btn-xs remove"><span class="glyphicon glyphicon-remove"></span></button></td>';
        $('tbody').append(html);
      });

      $(document).on('click', '.remove', function() {
        $(this).closest('tr').remove();
      });

      $('#insert_form').on('submit', function(event) {
        event.preventDefault();
        var error = '';
        $('.item').each(function() {
          var count = 1;
          if ($(this).val() == '') {
            error += '<p>Enter Item at ' + count + ' Row</p>';
            return false;
          }
          count = count + 1;
        });

        $('.qty').each(function() {
          var count = 1;

          if ($(this).val() == '') {
            error += '<p>Select Qty at ' + count + ' row</p>';
            return false;
          }

          count = count + 1;

        });

        $('.uom').each(function() {

          var count = 1;

          if ($(this).val() == '') {
            error += '<p>Select Uom at ' + count + ' Row</p> ';
            return false;
          }

          count = count + 1;

        });



        $('.price').each(function() {

          var count = 1;

          if ($(this).val() == '') {
            error += '<p>Select Price at ' + count + ' Row</p> ';
            return false;
          }

          count = count + 1;

        });

        var form_data = $(this).serialize();
        //alert(form_data);

        if (error == '') {
          $.ajax({
            url: "<?php echo base_url(); ?>Dashboard/po_create",
            method: "get",
            data: form_data,
            success: function(data) {
              //alert(url);
              if (data == 'ok') {
                document.forms['insert_form'].reset();
                $('#item_table1').find('tr:gt(0)').remove();
                $('#error').html('<div class="alert alert-success">PO Details Saved</div>');
                window.setTimeout(function() {
                  location.reload()
                }, 3000)
              }
            }
          });
        } else {
          $('#error').html('<div class="alert alert-danger">' + error + '</div>');
        }

      });

    });
  </script>
</body>

</html>