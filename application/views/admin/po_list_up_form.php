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
                    <h3 class="box-title">PO Edit</h3>
                    <div class="row">
											<div class="col-sm-12 col-md-12 col-lg-12">
												<?php if ($responce = $this->session->flashdata('Successfully')) : ?>
													<div class="text-center">
														<div class="alert alert-success text-center"><?php echo $responce; ?></div>
													</div>
												<?php endif; ?>
											</div>
										</div>
                  </div>
                  <div class="box-body">
                    <?php
                    // Display validation errors if any exist
                    if ($this->session->flashdata('validation_errors')) {
                      echo '<div class="error">';
                      echo $this->session->flashdata('validation_errors');
                      echo '</div>';
                    }
                    ?>
                    <form role="form" id="insert_form" autocomplete="off" method="post" action="<?php echo base_url(); ?>Dashboard/po_list_update" enctype="multipart/form-data">
                      <!-- <form role="form" name="insert_form" id="insert_form" autocomplete="off" method="post" enctype="multipart/form-data"> -->
                      <input type="hidden" class="form-control" name="userid" id="userid" value="<?php echo $this->session->userdata('userid'); ?>">

                      <?php
                      foreach ($pl as $row) {
                      ?>
                        <input type="hidden" class="form-control" name="spoid" id="spoid" value="<?php echo $row['spoid']; ?>">
                        <input type="hidden" class="form-control" name="sipoid" id="sipoid" value="<?php echo $row['sipoid']; ?>">
                        <input type="hidden" class="form-control" name="mprid" id="mprid" value="<?php echo $row['mprid']; ?>">
                        <input type="hidden" class="form-control" name="simprid" id="simprid" value="<?php echo $row['simprid']; ?>">
                        <div class="row">
                          <div class="col-md-4">
                            <label>PO Number<em>*</em></label>
                            <input type="text" class="form-control mprid" name="po" id="po" value="<?php echo $row['po']; ?>">
                            <?php echo form_error('po', '<div class="error">', '</div>');  ?>
                          </div>

                          <div class="col-md-4">
                            <label>PO Date<em>*</em></label>
                            <input type="text" class="form-control pd" readonly name="podate" id="podate" value="<?php echo date("d-m-Y", strtotime($row['pdate'])); ?>">
                            <?php echo form_error('factoryid', '<div class="error">', '</div>');  ?>
                          </div>
                          <div class="col-md-4">
                            <label>Qty<em>*</em></label>
                            <input type="text" class="form-control" name="pqty" id="pqty" value="<?php echo $row['pqty']; ?>">
                            </select>
                          </div>
                        </div>
                        <br />
                        <div class="row">
                          <div class="col-md-4">
                            <label>Price<em>*</em></label>
                            <input type="text" class="form-control" name="pprice" value="<?php echo $row['pprice']; ?>">
                            <?php echo form_error('pprice', '<div class="error">', '</div>');  ?>
                          </div>
                          <div class="col-md-4">
                            <label>Remarks</label>
                            <textarea class="form-control" rows="1" name="premarks" id="premarks"><?php echo $row['premarks']; ?></textarea>
                            <?php echo form_error('premarks', '<div class="error">', '</div>');  ?>
                          </div>
                          <div class="col-md-4">
                            <label>Supplier<em>*</em></label>
                            <select class="form-control" name="supplier" id="supplier">
                              <option value="<?php echo $row['supplierid']; ?>"><?php echo $row['supplier']; ?></option>
                              <?php
                              foreach ($sl as $row) {
                              ?>
                                <option value="<?php echo $row['supplierid']; ?>"><?php echo $row['supplier']; ?></option>
                              <?php
                              }
                              ?>
                            </select>
                          </div>
                        </div>
                      <?php
                      }
                      ?>

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




</body>

</html>