<style>
  .error {
    color: red;
  }

  em {
    color: red;
  }

  label {
    font-size: 13px;
  }

  th {
    font-size: 13px;
  }
</style>
<script>
  $(function() {
    jQuery(".pd").datepicker({
      dateFormat: 'dd-mm-yy'
    });
  })
</script>
<?php
//$item = '';
$uom = '';
$product = '';
$brand = '';
// foreach ($il as $row) {
//   $item .= '<option value="' . $row["pcode"] . '">' . $row["item"] . '</option>';
// }
foreach ($ul as $row) {
  $uom .= '<option value="' . $row["puomid"] . '">' . $row["puom"] . '</option>';
}
foreach ($col as $row) {
  $product .= '<option value="' . $row["pcode"] . '">' . $row["pname"] . '</option>';
}
foreach ($bl as $row) {
  $brand .= '<option value="' . $row["brandid"] . '">' . $row["brandname"] . '</option>';
}
?>




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
                    <h3 class="box-title">MPR Create</h3>
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
                      <div class="row">

                        <div class="col-md-3">
                          <label>Unit Name<em>*</em></label>
                          <select class="form-control factoryid" name="factoryid" id="factoryid">
                            <option value="">Select....</option>
                            <?php
                            foreach ($fl as $row) {
                            ?>
                              <option value="<?php echo $row['factoryid']; ?>"><?php echo $row['factoryname']; ?></option>
                            <?php
                            }
                            ?>
                          </select>
                          <?php echo form_error('factoryid', '<div class="error">', '</div>');  ?>
                        </div>
                        <div class="col-md-3">
                          <label>Employment Type<em>*</em></label>
                          <select class="form-control etypeid" name="etypeid" id="etypeid">
                            <option value="">Select....</option>
                            <?php
                            foreach ($el as $row) {
                            ?>
                              <option value="<?php echo $row['etypeid']; ?>"><?php echo $row['etypename']; ?></option>
                            <?php
                            }
                            ?>
                          </select>
                          <?php echo form_error('etypeid', '<div class="error">', '</div>');  ?>
                        </div>
                        <div class="col-md-3">
                          <label>MPR Number<em>*</em></label>
                          <input type="text" class="form-control mprid" name="mprid" id="mprid" placeholder="Enter MPR Number">
                          <?php echo form_error('mpr', '<div class="error">', '</div>');  ?>
                        </div>


                        <div class="col-md-3">
                          <label>Department<em>*</em></label>
                          <select class="form-control departmentid" name="departmentid" id="departmentid">
                            <option value="">Select....</option>
                            <?php
                            foreach ($dep as $row) {
                            ?>
                              <option value="<?php echo $row['deptid']; ?>"><?php echo $row['departmentname']; ?></option>
                            <?php
                            }
                            ?>
                          </select>
                          <?php echo form_error('departmentid', '<div class="error">', '</div>');  ?>
                          </select>
                        </div>
                      </div>
                      <br />
                      <div class="row">

                        <div class="col-md-3">
                          <label>Name(Prepared By)<em>*</em></label>
                          <input type="text" class="form-control name" name="name" placeholder="Enter Name">
                          <?php echo form_error('name', '<div class="error">', '</div>');  ?>
                        </div>
                        <div class="col-md-3">
                          <label>Designation<em>*</em></label>
                          <select class="form-control designationid" name="designationid" id="designationid">
                            <option value="">Select....</option>
                            <?php
                            foreach ($des as $row) {
                            ?>
                              <option value="<?php echo $row['desigid']; ?>"><?php echo $row['designation']; ?></option>
                            <?php
                            }
                            ?>
                          </select>
                          <?php echo form_error('designationid', '<div class="error">', '</div>');  ?>
                        </div>
                        <div class="col-md-3">
                          <label>MPR Create Date<em>*</em></label>
                          <input type="text" class="form-control pd" readonly name="mprdate" id="mprdate" value="<?php echo date('d-m-Y'); ?>">
                        </div>
                        <div class="col-md-3">
                          <label>MPR Submission To IT<em>*</em></label>
                          <input type="text" class="form-control pd" readonly name="mprsdate" id="mprsdate" value="<?php echo date('d-m-Y'); ?>">
                        </div>
                      </div>
                      <br />
                      <div id="AuGroup">
                        <div class="row">
                          <table class="table table-bordered" id="item_table1">
                            <thead>
                              <tr>
                                <th style="text-align:center;">Product<em>*</em></th>
                                <th style="text-align:center;">Item/Model<em>*</em></th>
                                <th style="text-align:center;">Brand<em>*</em></th>
                                <th style="text-align:center;">Qty<em>*</em></th>
                                <th style="text-align:center;">Unit<em>*</em></th>
                                <th style="text-align:center;">Description</th>
                                <th style="text-align:center;">Unit Price</th>
                                <th style="text-align:center;">Remarks</th>
                                <th style="text-align:center;">User</th>
                                <th style="vertical-align:middle; text-align:center;"><button type="button" name="add" class="btn btn-success btn-xs add"><span class="glyphicon glyphicon-plus"></span></button></th>
                              </tr>
                            </thead>
                            <tbody></tbody>
                          </table>
                        </div>
                      </div>
                      <div class="box-footer text-center">
                        <!-- <input type="submit" class="btn btn-primary" name="submit" value="CREATE" /> -->
                        <label>&nbsp;</label>
                          <!-- <input type="submit" class="btn btn-primary " name="submit" id="btn" value="CREATE" /> -->
                          <div id="response"></div>
                      </div>
                    </form>
                  </div>
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
        html += '<td><select name="product[]" class="form-control product" data-item="' + count + '"><option value="">Product</option><?php echo $product; ?></select></td>';
        //html += '<td><input type="hidden" name="model[]" class="form-control model" id="model' + count + '" /></td>';
        html += '<td><select name="item[]" class="form-control item" id="item' + count + '"><option value="">Item</option></select></td>';
        html += '<td><select name="brand[]" class="form-control brand" id="brand' + count + '"><option value="">Brand</option><?php echo $brand; ?></select></td>';
        html += '<td><input type="text" name="qty[]" class="form-control qty" id="qty' + count + '" /></td>';
        html += '<td><select name="uom[]" class="form-control uom" id="uom' + count + '"><option value="">UOM</option><?php echo $uom; ?></select></td>';
        html += '<td><textarea class="form-control description" rows="1" name="description[]" id="description"></textarea></td>';
        html += '<td><input type="text" name="price[]" class="form-control price" id="price' + count + ' /></td>';
        html += '<td><input type="text" name="mo[]" class="form-control mo" id="mo' + count + '" /></td>';
        html += '<td><textarea class="form-control" rows="1" name="remarks[]" id="remarks"></textarea></td>';
        html += '<td><input type="text" name="uname[]" class="form-control uname" id="uname' + count + '" /></td>';
        
        html += '<td style="vertical-align:middle;"><button type="button" name="remove" class="btn btn-danger btn-xs remove"><span class="glyphicon glyphicon-remove"></span></button></td>';
        $('#item_table1').append(html);
      });

      $(document).on('click', '.remove', function() {
        $(this).closest('tr').remove();
      });

      $(document).on('change', '.product', function() {
        var pcode = $(this).val();
        var item = $(this).data('item');
        $.ajax({
          url: "<?php echo base_url(); ?>Dashboard/show_item",
          dataType: "json",
          method: "get",
          data: {
            pcode: pcode
          },
          success: function(data) {
            var html = '<option value="">Item</option>';


            html += data;

            $('#item' + item).html(html);
          }
        })
      });

      $('#insert_form').on('submit', function(event) {
        event.preventDefault();
        var error = '';
        $('.factoryid').each(function() {
          var count = 1;
          if ($(this).val() == '') {
            error += '<p>Enter Unit Name ' + count + ' Row</p>';
            return false;
          }
          count = count + 1;
        });

        $('.etypeid').each(function() {
          var count = 1;
          if ($(this).val() == '') {
            error += '<p>Enter Employment Type at ' + count + ' Row</p>';
            return false;
          }
          count = count + 1;
        });

        $('.departmentid').each(function() {
          var count = 1;
          if ($(this).val() == '') {
            error += '<p>Enter Department at ' + count + ' Row</p>';
            return false;
          }
          count = count + 1;
        });

        $('.name').each(function() {
          var count = 1;
          if ($(this).val() == '') {
            error += '<p>Enter Name at ' + count + ' Row</p>';
            return false;
          }
          count = count + 1;
        });

        $('.designationid').each(function() {
          var count = 1;
          if ($(this).val() == '') {
            error += '<p>Enter Designation at ' + count + ' Row</p>';
            return false;
          }
          count = count + 1;
        });

        $('.product').each(function() {
          var count = 1;
          if ($(this).val() == '') {
            error += '<p>Enter Product at ' + count + ' Row</p>';
            return false;
          }
          count = count + 1;
        });

        $('.item').each(function() {
          var count = 1;
          if ($(this).val() == '') {
            error += '<p>Enter Item at ' + count + ' Row</p>';
            return false;
          }
          count = count + 1;
        });

        $('.brand').each(function() {
          var count = 1;
          if ($(this).val() == '') {
            error += '<p>Enter Brand at ' + count + ' Row</p>';
            return false;
          }
          count = count + 1;
        });

        $('.qty').each(function() {
          var count = 1;

          if ($(this).val() == '') {
            error += '<p>Enter Qty at ' + count + ' row</p>';
            return false;
          }

          count = count + 1;

        });

        $('.uom').each(function() {

          var count = 1;

          if ($(this).val() == '') {
            error += '<p>Enter Uom at ' + count + ' Row</p> ';
            return false;
          }

          count = count + 1;

        });

        $('.price').each(function() {

          var count = 1;

          if ($(this).val() == '') {
            error += '<p>Enter Price at ' + count + ' Row</p> ';
            return false;
          }

          count = count + 1;

        });
        
        // $('.uname').each(function() {

        //   var count = 1;

        //   if ($(this).val() == '') {
        //     error += '<p>Enter Uname at ' + count + ' Row</p> ';
        //     return false;
        //   }

        //   count = count + 1;

        // });

        var form_data = $(this).serialize();
        //alert(form_data);
        //form_data = form_data.replaceAll(/["']/g, "");
        //form_data = form_data.replaceAll(/'/g,"\\'");
        

        if (error == '') {
          $('input[type="submit"]').attr('disabled', true);
          $.ajax({
            url: "<?php echo base_url(); ?>Dashboard/mpr_create",
            method: "post",
            data: form_data,
            success: function(data) {
              //alert(url);
              if (data == 'ok') {
                document.forms['insert_form'].reset();
                $('#item_table1').find('tr:gt(0)').remove();
                $('#error').html('<div class="alert alert-success">MPR Details Saved</div>');
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

  <script>
    $(document).ready(function() {
      $(document).on('keydown', ".price", function(event) {


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
      $(document).on('keydown', ".qty", function(event) {


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
      $(document).bind("contextmenu", function(e) {
        return false;
      });
    });
  </script>


  <script>
    $(document).ready(function() {

      $("#mprid").keyup(function(event) {

        var factoryid = $("#factoryid").val().trim();
        var mprid = $("#mprid").val().trim();

        if (mprid != '') {

          $.ajax({
            url: "<?php echo base_url(); ?>Dashboard/mpr_available",
            type: 'get',
            data: {
              factoryid: factoryid,
              mprid: mprid
            },
            success: function(response) {

              // Show response
              $("#response").html(response);

            }
          });
        } else {
          $("#response").html("<span style='color: red;'>Enter valid info</span>");
        }

      });

    });
  </script>

<script>
    $(document).ready(function() {

      $("#factoryid").change(function(event) {

        var factoryid = $("#factoryid").val().trim();
        var mprid = $("#mprid").val().trim();

        if (mprid != '') {

          $.ajax({
            url: "<?php echo base_url(); ?>Dashboard/mpr_available",
            type: 'get',
            data: {
              factoryid: factoryid,
              mprid: mprid
            },
            success: function(response) {

              // Show response
              $("#response").html(response);

            }
          });
        } else {
          $("#response").html("<span style='color: red;'>Enter valid info</span>");
        }

      });

    });
  </script>


</body>

</html>