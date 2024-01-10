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
                                        <form role="form" action="<?php echo base_url(); ?>Dashboard/product_dispose_insert" method="post" enctype="multipart/form-data">
                                            <div class="form-group">

                                                <input type="hidden" class="form-control" readonly name="pacode" value="<?php echo $pacode; ?>">
                                            </div>
                                            
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label>Remarks</label>
                                                    <textarea class="form-control" name="remarks" rows="5" id="remarks"></textarea>
                                                    <?php echo form_error('remarks', '<div class="error">', '</div>');  ?>
                                                </div>
                                                <div class="form-group">
                                                    <label>Dispose Date</label>
                                                    <input type="text" class="form-control pd" readonly name="ddate" value="<?php echo date('d-m-Y'); ?>">
                                                    <?php /*?><?php echo form_error('dobdate', '<div class="error">', '</div>');  ?><?php */ ?>
                                                </div>
                                            </div>
                                </div>
                                <div class="box-footer text-center">
                                    <input type="submit" class="btn btn-primary" name="submit" value="Submit" />
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
    <script type="text/javascript">
        $(function() {
            jQuery(".pd").datepicker({
                dateFormat: 'dd-mm-yy'
            });
        })
    </script>