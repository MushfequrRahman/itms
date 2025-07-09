<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <div class="content-wrapper">
      <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="col-md-12">
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#activity" data-toggle="tab">Product Details</a></li>
                </ul>
                <div class="tab-content">
                  <?php foreach ($plup as $row) { ?>
                    <form role="form" action="<?php echo base_url(); ?>Dashboard/productinventorylup" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                        <input type="hidden" class="form-control" name="piv" value="<?php echo $row['piv']; ?>">
                      </div>
                      <div class="form-group">
                        <label>S/N</label>
                        <input type="text" class="form-control" name="sn" value="<?php echo $row['sn']; ?>">
                        <?php echo form_error('sn', '<div class="error">', '</div>');  ?>
                      </div>
                      <div class="form-group">
                        <label>IP</label>
                        <input type="text" class="form-control" name="ip" value="<?php echo $row['ip']; ?>">
                        <?php echo form_error('ip', '<div class="error">', '</div>');  ?>
                      </div>
                      <div class="form-group">
                        <label>MAC</label>
                        <input type="text" class="form-control" name="mac" value="<?php echo $row['mac']; ?>">
                        <?php echo form_error('mac', '<div class="error">', '</div>');  ?>
                      </div>
                      <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="description" rows="5" id="description"><?php echo $row['idescription']; ?></textarea>
                        <?php echo form_error('description', '<div class="error">', '</div>');  ?>
                      </div>

                      <div class="form-group">
                        <label>Qty</label>
                        <input type="text" class="form-control" name="iqty" value="<?php echo $row['iqty']; ?>">
                        <?php echo form_error('iqty', '<div class="error">', '</div>');  ?>
                      </div>
                      <div class="form-group">
                        <label>Warranty</label>
                        <input type="text" class="form-control" name="warranty" value="<?php echo $row['warranty']; ?>">
                        <?php echo form_error('warranty', '<div class="error">', '</div>');  ?>
                      </div>
                      <div class="form-group">
                        <label>Purchase Date</label>
                        <?php $pdate = date("d-m-Y", strtotime($row['pdate'])); ?>
                        <input type="text" class="form-control pd" readonly name="pdate" value="<?php echo $pdate; ?>">
                        <?php echo form_error('pdate', '<div class="error">', '</div>');  ?>
                      </div>
                </div>
                <div class="box-footer text-center">
                  <input type="submit" class="btn btn-primary" name="submit" value="Submit" />
                </div>
                </form>

              <?php } ?>
              </div>
            </div>
          </div>
        </div>
    </div>
    </section>
  </div>
  </div>
  <script type="text/javascript">
    $(function() {
      jQuery(".pd").datepicker({
        dateFormat: 'dd-mm-yy'
      });
    })
  </script>