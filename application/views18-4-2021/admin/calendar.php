<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
        <link href='//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.1.1/fullcalendar.min.css' rel='stylesheet' />
        <link href='//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.1.1/fullcalendar.print.css' rel='stylesheet' media='print' />
        <link href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css" rel="stylesheet" />
        
        <link href="<?php echo base_url();?>assets/admin/css/bootstrap-colorpicker.min.css" rel="stylesheet" />
        <link href="<?php echo base_url();?>assets/admin/css/bootstrap-timepicker.min.css" rel="stylesheet" />

        <script src='//cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.3/moment.min.js'></script>
        <?php /*?><script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script><?php */?>
        <?php /*?><script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script><?php */?>
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.1.1/fullcalendar.min.js"></script>

        <script src='<?php echo base_url();?>assets/admin/js/bootstrap-colorpicker.min.js'></script>
        <script src='<?php echo base_url();?>assets/admin/js/bootstrap-timepicker.min.js'></script>
        <?php /*?><script src='<?php echo base_url();?>assets/admin/js/main.js'></script><?php */?>
<style type="text/css">
.fc th {padding: 10px 0px;vertical-align: middle;background:#F2F2F2;}
.fc-day-grid-event>.fc-content {padding: 4px;}
#calendar {max-width: 900px;margin: 0 auto;}
.error {color: #ac2925;margin-bottom: 15px;}
.event-tooltip {width:150px;background: rgba(0, 0, 0, 0.85);color:#FFF;padding:10px;position:absolute;z-index:10001;-webkit-border-radius: 4px;
-moz-border-radius: 4px;border-radius: 4px;cursor: pointer;font-size: 11px;}
.modal-header{background-color: #3A87AD;color: #fff;}
</style>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
    <!-- Left side column. contains the logo and sidebar -->
  	<!-- Content Wrapper. Contains page content -->
  		<div class="content-wrapper">
    	<!-- Content Header (Page header) -->
    	<!-- Main content -->
    		<section class="content">
     		<!-- Main row -->
      			<div class="row">
       			 <!-- Left col -->
        			<div class="col-md-12">
      					<div class="row">
           				<!-- /.col -->
							<div class="col-md-12">
              				<!-- USERS LIST -->
              					<div class="box box-danger">
                					<div class="box-header with-border">
                  						<h3 class="box-title">Calendar</h3>
										<div class="row">
											<div class="col-sm-12 col-md-12 col-lg-12">
                        						<?php $userid=$this->session->userdata('userid');?>
												<?php /*?><?php if($responce = $this->session->flashdata('Successfully')): ?>
													<div class="text-center">
														<div class="alert alert-success text-center"><?php echo $responce;?></div>
													</div>
												<?php endif;?><?php */?>
											</div>
										</div>
              						</div>
                					<!-- /.box-header -->
            						<div class="box-body table-responsive no-padding">
             							<!--<div class="container">-->
            								<!--<div class="row clearfix">
                								<div class="col-md-12 column">-->
                        							<div id='calendar'></div>
                								<!--</div>
            								</div>-->
        								<!--</div>-->
        								<div class="modal fade">
            								<div class="modal-dialog">
                								<div class="modal-content">
                    								<div class="modal-header">
                        								<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        								<h4 class="modal-title"></h4>
                    								</div>
                    								<div class="modal-body">
                        								<div class="error"></div>
                        								<form class="form-horizontal" id="crud-form">
															<input id="userid" name="userid" type="hidden" class="form-control input-md" value="<?php echo $userid;?>" />	
															<div class="form-group">
																<label class="col-md-4 control-label" for="title">Title</label>
																<div class="col-md-4">
																	<input id="title" name="title" type="text" class="form-control input-md" />
																</div>
															</div>
															<div class="form-group">
																<label class="col-md-4 control-label" for="time">Time</label>
																<div class="col-md-4 input-append bootstrap-timepicker">
																	<input id="time" name="time" type="text" class="form-control input-md" />
																</div>
															</div>
															<div class="form-group">
																<label class="col-md-4 control-label" for="description">Description</label>
																<div class="col-md-4">
																	<textarea class="form-control" id="description" name="description"></textarea>
																</div>
															</div>
															<div class="form-group">
																<label class="col-md-4 control-label" for="color">Color</label>
																<div class="col-md-4">
																	<input id="color" name="color" type="text" class="form-control input-md" />
																	<span class="help-block">Click to pick a color</span>
																</div>
															</div>
															<div class="form-group">
																<label class="col-md-4 control-label" for="type">Type</label>
																<div class="col-md-4">
																	<select class="form-control input-md" name="type" id="type">
																		<option value="1">Managerial</option>
																		<option value="2">Departmental</option>
																		<option value="3">Unit</option>
																		<option value="4">Training</option>
																		<option value="5">Organization</option>
																		<option value="6">All</option>
																	</select>
																</div>
															</div>	
														</form>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- /.box-body -->
								</div>
								<!-- /.box-footer -->
							</div>
							<!--/.box -->
						</div>
						<!-- /.col -->
					</div>
					<!-- /.row -->
					<!-- /.box -->
				</div>
				<!-- /.col -->
				<!-- /.col -->
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->
	</div>
	<!-- ./wrapper -->
</body>
</html>
