<style>
  .error {
    color: red;
  }

  em {
    color: red;
  }
</style>

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
                    <h3 class="box-title">MPR List For PO</h3>
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
                  <div class="box-body ">
                    <div class="form-group">
                      <label>MPR No<em>*</em></label>
                      <input type="text" class="form-control" id="mprid" placeholder="Enter MPR No">
                      <div class="box-footer text-center">
                        <input type="submit" class="btn btn-primary" name="submit" id="btn" value="Submit" />
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="ajax-content-container">
        </div>
      </section>
    </div>
  </div>
  <script>
    $(document).ready(function() {
      $("#btn").click(function(event) {
        event.preventDefault();
        //var pd= $("#pd").val();
        //			var wd= $("#wd").val();
        var mprid = $("#mprid").val();
        $.ajax({
          type: 'post',
          url: '<?php echo base_url(); ?>Dashboard/po_for_mpr_list',
          dataType: "text",
          data: {
            mprid: mprid
          },
          success: function(data) {
            $('#ajax-content-container').html(data);

          },
          error: function() {
            alert('error!');
          }

        });
      });
    });
  </script>


</body>

</html>