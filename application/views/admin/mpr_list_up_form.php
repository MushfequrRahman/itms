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
                    <form role="form" id="insert_form" autocomplete="off" method="post" action="<?php echo base_url();?>Dashboard/mpr_list_update" enctype="multipart/form-data">
                    <!-- <form role="form" name="insert_form" id="insert_form" autocomplete="off" method="post" enctype="multipart/form-data"> -->
                      <input type="hidden" class="form-control" name="userid" id="userid" value="<?php echo $this->session->userdata('userid'); ?>">
                      <?php
                      foreach ($ml as $row) {
                      ?>
                        <div class="row">
                          <div class="col-md-4">
                            <label>MPR Number<em>*</em></label>
                            <input type="text" class="form-control mprid" readonly name="mprid" id="mprid" value="<?php echo $row['mprid']; ?>">
                            <?php echo form_error('mpr', '<div class="error">', '</div>');  ?>
                          </div>

                          <div class="col-md-4">
                            <label>Unit Name<em>*</em></label>
                            <select class="form-control" readonly name="factoryid" id="factoryid">
                              <option value="<?php echo $row['fid']; ?>"><?php echo $row['fid']; ?></option>

                            </select>
                            <?php echo form_error('factoryid', '<div class="error">', '</div>');  ?>
                          </div>
                          <div class="col-md-4">
                            <label>Department<em>*</em></label>
                            <select class="form-control" readonly name="departmentid" id="departmentid">
                              <option value="<?php echo $row['deptid']; ?>"><?php echo $row['departmentname']; ?></option>

                              <?php echo form_error('departmentid', '<div class="error">', '</div>');  ?>
                            </select>
                          </div>
                        </div>
                        <br />
                        <div class="row">

                          <div class="col-md-4">
                            <label>Name<em>*</em></label>
                            <input type="text" class="form-control" readonly name="name" value="<?php echo $row['name']; ?>">
                            <?php echo form_error('name', '<div class="error">', '</div>');  ?>
                          </div>
                          <div class="col-md-4">
                            <label>Designation<em>*</em></label>
                            <select class="form-control" readonly name="designationid" id="designationid">
                              <option value="<?php echo $row['desigid']; ?>"><?php echo $row['designation']; ?></option>

                            </select>
                            <?php echo form_error('designationid', '<div class="error">', '</div>');  ?>
                          </div>
                          <div class="col-md-4">
                            <label>MPR Create Date<em>*</em></label>
                            <input type="text" class="form-control" readonly name="mprdate" id="mprdate" value="<?php echo date('d-m-Y'); ?>">
                            <!--<input type="date" class="form-control" name="mprdate" id="mprdate">-->
                            <?php /*?><?php echo form_error('dobdate', '<div class="error">', '</div>');  ?><?php */ ?>
                          </div>
                        </div>
                      <?php
                      }
                      ?>
                      <br />
                      <div id="AuGroup">
                        <div class="row">
                          <table class="table table-bordered" id="item_table1">
                            <thead>
                              <tr>
                              <th style="text-align:center;display:none;">&nbsp;</th>
                                <th style="text-align:center;">Product<em>*</em></th>
                                <th style="text-align:center;">Item/Model<em>*</em></th>
                                <th style="text-align:center;">Brand<em>*</em></th>
                                <th style="text-align:center;">Qty<em>*</em></th>
                                <th style="text-align:center;">Unit<em>*</em></th>
                                <th style="text-align:center;">Description</th>
                                <th style="text-align:center;">Unit Price</th>
                                <th style="text-align:center;">Remarks</th>
                                <th style="text-align:center;">User</th>

                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              $i = 1;
                              foreach ($mll as $row) { ?>
                                <tr>
                                  <td style="vertical-align:middle; display:none;"><input type="text" class="form-control" name="simprid[]" value="<?php echo $row['simprid']; ?>"></td>
                                  <td style="vertical-align:middle;">
                                    <select class="form-control product" name="product[]" id="product_<?php echo $i++; ?>">
                                      <option value="<?php echo $row['pcode']; ?>"><?php echo $row['pname']; ?></option>
                                      <?php
                                      foreach ($col as $row1) {
                                      ?>
                                        <option value="<?php echo $row1['pcode']; ?>"><?php echo $row1['pname']; ?></option>
                                      <?php
                                      }
                                      ?>
                                    </select>
                                  </td>
                                  <td style="vertical-align:middle;">
                                    <select class="form-control item" name="item[]" id="item_<?php echo $i++; ?>">
                                      <option value="<?php echo $row['model']; ?>"><?php echo $row['item']; ?></option>

                                    </select>
                                  </td>
                                  <td style="vertical-align:middle;">
                                  <select class="form-control brand" name="brand[]" id="brand">
                                      <option value="<?php echo $row['brandid']; ?>"><?php echo $row['brandname']; ?></option>
                                      <?php
                                      foreach ($bl as $row2) {
                                      ?>
                                        <option value="<?php echo $row2['brandid']; ?>"><?php echo $row2['brandname']; ?></option>
                                      <?php
                                      }
                                      ?>
                                    </select>
                                </td>
                                  <td style="vertical-align:middle;"><input type="text" class="form-control qty" name="qty[]" value="<?php echo $row['qty']; ?>"></td>
                                  
                                  <td style="vertical-align:middle;">
                                  <select class="form-control brand" name="uom[]" id="uom">
                                      <option value="<?php echo $row['uom']; ?>"><?php echo $row['puom']; ?></option>
                                      <?php
                                      foreach ($ul as $row3) {
                                      ?>
                                        <option value="<?php echo $row3['puomid']; ?>"><?php echo $row3['puom']; ?></option>
                                      <?php
                                      }
                                      ?>
                                    </select>
                                </td>
                                <td style="vertical-align:middle;"><input type="text" class="form-control" name="description[]" value="<?php echo $row['description']; ?>"></td>
                                <td style="vertical-align:middle;"><input type="text" class="form-control price" name="price[]" value="<?php echo $row['price']; ?>"></td>
                                <td style="vertical-align:middle;"><input type="text" class="form-control" name="remarks[]" value="<?php echo $row['remarks']; ?>"></td>
                                <td style="vertical-align:middle;"><input type="text" class="form-control" name="uname[]" value="<?php echo $row['uname']; ?>"></td> 
                                  
                                  
                                  
                                </tr>
                            </tbody>
                          <?php } ?>
                          </tbody>
                          </table>
                        </div>
                      </div>
                      <div class="box-footer text-center">
                        <input type="submit" class="btn btn-primary" name="submit" value="EDIT" />
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

  <script type="text/javascript">
    $(document).ready(function() {

      $('#product_1').change(function(event) {
        event.preventDefault();
        var pcode = $('#product_1').val();

        $.ajax({
          type: 'get',
          url: "<?php echo base_url(); ?>Dashboard/show_itemname",
          dataType: "json",
          data: {
            pcode: pcode
          },
          success: function(res) {
            $('#item_2').find('option').remove();
            // Add options
            $.each(res, function(index, data) {
              $('#item_2').append('<option value="' + data['itemcode'] + '">' + data['item'] + '</option>');
            });
          }
        });
      });
    });
  </script>

  <script type="text/javascript">
    $(document).ready(function() {

      $('#product_3').change(function(event) {
        event.preventDefault();
        var pcode = $('#product_3').val();

        $.ajax({
          type: 'get',
          url: "<?php echo base_url(); ?>Dashboard/show_itemname",
          dataType: "json",
          data: {
            pcode: pcode
          },
          success: function(res) {
            $('#item_4').find('option').remove();
            // Add options
            $.each(res, function(index, data) {
              $('#item_4').append('<option value="' + data['itemcode'] + '">' + data['item'] + '</option>');
            });
          }
        });
      });
    });
  </script>

  <script type="text/javascript">
    $(document).ready(function() {

      $('#product_5').change(function(event) {
        event.preventDefault();
        var pcode = $('#product_5').val();

        $.ajax({
          type: 'get',
          url: "<?php echo base_url(); ?>Dashboard/show_itemname",
          dataType: "json",
          data: {
            pcode: pcode
          },
          success: function(res) {
            $('#item_6').find('option').remove();
            // Add options
            $.each(res, function(index, data) {
              $('#item_6').append('<option value="' + data['itemcode'] + '">' + data['item'] + '</option>');
            });
          }
        });
      });
    });
  </script>

  <script type="text/javascript">
    $(document).ready(function() {

      $('#product_7').change(function(event) {
        event.preventDefault();
        var pcode = $('#product_7').val();

        $.ajax({
          type: 'get',
          url: "<?php echo base_url(); ?>Dashboard/show_itemname",
          dataType: "json",
          data: {
            pcode: pcode
          },
          success: function(res) {
            $('#item_8').find('option').remove();
            // Add options
            $.each(res, function(index, data) {
              $('#item_8').append('<option value="' + data['itemcode'] + '">' + data['item'] + '</option>');
            });
          }
        });
      });
    });
  </script>

  <script type="text/javascript">
    $(document).ready(function() {

      $('#product_9').change(function(event) {
        event.preventDefault();
        var pcode = $('#product_9').val();

        $.ajax({
          type: 'get',
          url: "<?php echo base_url(); ?>Dashboard/show_itemname",
          dataType: "json",
          data: {
            pcode: pcode
          },
          success: function(res) {
            $('#item_10').find('option').remove();
            // Add options
            $.each(res, function(index, data) {
              $('#item_10').append('<option value="' + data['itemcode'] + '">' + data['item'] + '</option>');
            });
          }
        });
      });
    });
  </script>

  <script type="text/javascript">
    $(document).ready(function() {

      $('#product_11').change(function(event) {
        event.preventDefault();
        var pcode = $('#product_11').val();

        $.ajax({
          type: 'get',
          url: "<?php echo base_url(); ?>Dashboard/show_itemname",
          dataType: "json",
          data: {
            pcode: pcode
          },
          success: function(res) {
            $('#item_12').find('option').remove();
            // Add options
            $.each(res, function(index, data) {
              $('#item_12').append('<option value="' + data['itemcode'] + '">' + data['item'] + '</option>');
            });
          }
        });
      });
    });
  </script>

  <script type="text/javascript">
    $(document).ready(function() {

      $('#product_13').change(function(event) {
        event.preventDefault();
        var pcode = $('#product_13').val();

        $.ajax({
          type: 'get',
          url: "<?php echo base_url(); ?>Dashboard/show_itemname",
          dataType: "json",
          data: {
            pcode: pcode
          },
          success: function(res) {
            $('#item_14').find('option').remove();
            // Add options
            $.each(res, function(index, data) {
              $('#item_14').append('<option value="' + data['itemcode'] + '">' + data['item'] + '</option>');
            });
          }
        });
      });
    });
  </script>

  <script type="text/javascript">
    $(document).ready(function() {

      $('#product_15').change(function(event) {
        event.preventDefault();
        var pcode = $('#product_15').val();

        $.ajax({
          type: 'get',
          url: "<?php echo base_url(); ?>Dashboard/show_itemname",
          dataType: "json",
          data: {
            pcode: pcode
          },
          success: function(res) {
            $('#item_16').find('option').remove();
            // Add options
            $.each(res, function(index, data) {
              $('#item_16').append('<option value="' + data['itemcode'] + '">' + data['item'] + '</option>');
            });
          }
        });
      });
    });
  </script>

  <script type="text/javascript">
    $(document).ready(function() {

      $('#product_17').change(function(event) {
        event.preventDefault();
        var pcode = $('#product_17').val();

        $.ajax({
          type: 'get',
          url: "<?php echo base_url(); ?>Dashboard/show_itemname",
          dataType: "json",
          data: {
            pcode: pcode
          },
          success: function(res) {
            $('#item_18').find('option').remove();
            // Add options
            $.each(res, function(index, data) {
              $('#item_18').append('<option value="' + data['itemcode'] + '">' + data['item'] + '</option>');
            });
          }
        });
      });
    });
  </script>

  <script type="text/javascript">
    $(document).ready(function() {

      $('#product_19').change(function(event) {
        event.preventDefault();
        var pcode = $('#product_19').val();

        $.ajax({
          type: 'get',
          url: "<?php echo base_url(); ?>Dashboard/show_itemname",
          dataType: "json",
          data: {
            pcode: pcode
          },
          success: function(res) {
            $('#item_20').find('option').remove();
            // Add options
            $.each(res, function(index, data) {
              $('#item_20').append('<option value="' + data['itemcode'] + '">' + data['item'] + '</option>');
            });
          }
        });
      });
    });
  </script>

  <script type="text/javascript">
    $(document).ready(function() {

      $('#product_21').change(function(event) {
        event.preventDefault();
        var pcode = $('#product_21').val();

        $.ajax({
          type: 'get',
          url: "<?php echo base_url(); ?>Dashboard/show_itemname",
          dataType: "json",
          data: {
            pcode: pcode
          },
          success: function(res) {
            $('#item_22').find('option').remove();
            // Add options
            $.each(res, function(index, data) {
              $('#item_22').append('<option value="' + data['itemcode'] + '">' + data['item'] + '</option>');
            });
          }
        });
      });
    });
  </script>

  <script type="text/javascript">
    $(document).ready(function() {

      $('#product_23').change(function(event) {
        event.preventDefault();
        var pcode = $('#product_23').val();

        $.ajax({
          type: 'get',
          url: "<?php echo base_url(); ?>Dashboard/show_itemname",
          dataType: "json",
          data: {
            pcode: pcode
          },
          success: function(res) {
            $('#item_24').find('option').remove();
            // Add options
            $.each(res, function(index, data) {
              $('#item_24').append('<option value="' + data['itemcode'] + '">' + data['item'] + '</option>');
            });
          }
        });
      });
    });
  </script>

  <script type="text/javascript">
    $(document).ready(function() {

      $('#product_25').change(function(event) {
        event.preventDefault();
        var pcode = $('#product_25').val();

        $.ajax({
          type: 'get',
          url: "<?php echo base_url(); ?>Dashboard/show_itemname",
          dataType: "json",
          data: {
            pcode: pcode
          },
          success: function(res) {
            $('#item_26').find('option').remove();
            // Add options
            $.each(res, function(index, data) {
              $('#item_26').append('<option value="' + data['itemcode'] + '">' + data['item'] + '</option>');
            });
          }
        });
      });
    });
  </script>

  <script type="text/javascript">
    $(document).ready(function() {

      $('#product_27').change(function(event) {
        event.preventDefault();
        var pcode = $('#product_27').val();

        $.ajax({
          type: 'get',
          url: "<?php echo base_url(); ?>Dashboard/show_itemname",
          dataType: "json",
          data: {
            pcode: pcode
          },
          success: function(res) {
            $('#item_28').find('option').remove();
            // Add options
            $.each(res, function(index, data) {
              $('#item_28').append('<option value="' + data['itemcode'] + '">' + data['item'] + '</option>');
            });
          }
        });
      });
    });
  </script>

  <script type="text/javascript">
    $(document).ready(function() {

      $('#product_29').change(function(event) {
        event.preventDefault();
        var pcode = $('#product_29').val();

        $.ajax({
          type: 'get',
          url: "<?php echo base_url(); ?>Dashboard/show_itemname",
          dataType: "json",
          data: {
            pcode: pcode
          },
          success: function(res) {
            $('#item_30').find('option').remove();
            // Add options
            $.each(res, function(index, data) {
              $('#item_30').append('<option value="' + data['itemcode'] + '">' + data['item'] + '</option>');
            });
          }
        });
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


</body>

</html>