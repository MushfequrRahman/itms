<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <div class="content-wrapper">
      <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="col-md-12">
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#activity" data-toggle="tab">Product</a></li>
                </ul>
                <div class="tab-content">
                  <?php foreach ($plup as $row) { ?>
                    <form role="form" action="<?php echo base_url(); ?>Dashboard/producthistorylup" method="post" enctype="multipart/form-data">
                      <div class="form-group">

                        <input type="hidden" class="form-control" readonly name="pacode" value="<?php echo $row['pacode']; ?>">
                      </div>
                      <?php /*?><div class="form-group">
					              <label>Code</label>
					              <input type="text" class="form-control" readonly name="pcode" value="<?php echo $row['piv']; ?>">
                        </div><?php */ ?>
                      <div class="form-group">
                        <label>Factory</label>
                        <select class="form-control" name="factoryid" id="factoryid">
                          <option value="<?php echo $row['factoryid']; ?>"><?php echo $row['factoryid']; ?></option>
                          <?php
                          foreach ($fl as $row1) {
                          ?>
                            <option value="<?php echo $row1['factoryid']; ?>"><?php echo $row1['factoryid']; ?></option>
                          <?php
                          }
                          ?>
                        </select>
                        <?php /*?><?php echo $row['factoryname']; ?><?php */ ?>
                        <?php echo form_error('factoryid', '<div class="error">', '</div>');  ?>
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