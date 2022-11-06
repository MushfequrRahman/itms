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
																<!--<label class="col-md-4 control-label" for="type">Type</label>-->
																<div class="col-md-12">
																	<!--<select class="form-control input-md" name="type" id="type">
																		<option value="1">Managerial</option>
																		<option value="2">Departmental</option>
																		<option value="3">Unit</option>
																		<option value="4">Training</option>
																		<option value="5">Organization</option>
																		<option value="6">All</option>
																	</select>-->
                                                                     <div class="form-check">
  																		<input class="form-check-input" name="managerialid" type="checkbox" value="1" id="managerialid">
  																		<label class="form-check-label" >Managerial</label>
																	
  																		<input class="form-check-input" name="departmentalid" type="checkbox" value="1" id="departmentalid">
  																		<label class="form-check-label" >Departmental</label>
                                                                        
                                                                        <input class="form-check-input" name="unitid" type="checkbox" value="1" id="unitid">
  																		<label class="form-check-label" >Unit</label>
                                                                        
                                                                        <input class="form-check-input" name="trainingid" type="checkbox" value="1" id="trainingid">
  																		<label class="form-check-label" >Training</label>
                                                                        
                                                                        <input class="form-check-input" name="organizationid" type="checkbox" value="1" id="organizationid">
  																		<label class="form-check-label" >Organization</label>
                                                                        <input class="form-check-input" name="allid" type="checkbox" value="1" id="allid">
  																		<label class="form-check-label" >All</label>
																	</div>
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
    
    
    <script>
    $(function(){

    var currentDate; // Holds the day clicked when adding a new event
    var currentEvent; // Holds the event object when editing an event

    $('#color').colorpicker(); // Colopicker
    $('#time').timepicker({
        minuteStep: 5,
        showInputs: false,
        disableFocus: true,
        showMeridian: false
    });  // Timepicker

    //var base_url='http://127.0.0.1/harmonizer/calendar'; // Here i define the base_url
var base_url="<?php echo base_url(); ?>calendar";
    // Fullcalendar
    $('#calendar').fullCalendar({
        timeFormat: 'H(:mm)',
        header: {
            left: 'prev, next, today',
            center: 'title',
             right: 'month, basicWeek, basicDay'
        },
        // Get all events stored in database

        eventLimit: true, // allow "more" link when too many events
        events: base_url+'/getEvents',

        // Handle Day Click
        dayClick: function(date, event, view) {
            currentDate = date.format();
            // Open modal to add event
            modal({
                // Available buttons when adding
                buttons: {
                    add: {
                        id: 'add-event', // Buttons id
                        css: 'btn-success', // Buttons class
                        label: 'Add' // Buttons label
                    }
                },
                title: 'Add Event (' + date.format() + ')' // Modal title
            });
        },
   
          editable: true, // Make the event draggable true 
         eventDrop: function(event, delta, revertFunc) {  

            
               $.post(base_url+'/dragUpdateEvent',{                            
                id:event.id,
                date: event.start.format()
            }, function(result){
                if(result)
                {
                alert('Updated');
                }
                else
                {
                    alert('Try Again later!')
                }

            });



          },
        // Event Mouseover
        eventMouseover: function(calEvent, jsEvent, view){

            var tooltip = '<div class="event-tooltip">' + calEvent.description + '</div>';
            $("body").append(tooltip);

            $(this).mouseover(function(e) {
                $(this).css('z-index', 10000);
                $('.event-tooltip').fadeIn('500');
                $('.event-tooltip').fadeTo('10', 1.9);
            }).mousemove(function(e) {
                $('.event-tooltip').css('top', e.pageY + 10);
                $('.event-tooltip').css('left', e.pageX + 20);
            });
        },
        eventMouseout: function(calEvent, jsEvent) {
            $(this).css('z-index', 8);
            $('.event-tooltip').remove();
        },
        // Handle Existing Event Click
        eventClick: function(calEvent, jsEvent, view) {
            // Set currentEvent variable according to the event clicked in the calendar
            currentEvent = calEvent;

            // Open modal to edit or delete event
            modal({
                // Available buttons when editing
                buttons: {
                    delete: {
                        id: 'delete-event',
                        css: 'btn-danger',
                        label: 'Delete'
                    },
                    update: {
                        id: 'update-event',
                        css: 'btn-success',
                        label: 'Update'
                    }
                },
                title: 'Edit Event "' + calEvent.title + '"',
                event: calEvent
            });
        }

    });

    // Prepares the modal window according to data passed
    function modal(data) {
        // Set modal title
        $('.modal-title').html(data.title);
        // Clear buttons except Cancel
        $('.modal-footer button:not(".btn-default")').remove();
        // Set input values
        $('#title').val(data.event ? data.event.title : '');
        if( ! data.event) {
            // When adding set timepicker to current time
            var now = new Date();
            var time = now.getHours() + ':' + (now.getMinutes() < 10 ? '0' + now.getMinutes() : now.getMinutes());
        } else {
            // When editing set timepicker to event's time
            var time = data.event.date.split(' ')[1].slice(0, -3);
            time = time.charAt(0) === '0' ? time.slice(1) : time;
        }
        $('#time').val(time);
        $('#description').val(data.event ? data.event.description : '');
        $('#color').val(data.event ? data.event.color : '#3a87ad');
        // Create Butttons
        $.each(data.buttons, function(index, button){
            $('.modal-footer').prepend('<button type="button" id="' + button.id  + '" class="btn ' + button.css + '">' + button.label + '</button>')
        })
        //Show Modal
        $('.modal').modal('show');
    }

    // Handle Click on Add Button
    $('.modal').on('click', '#add-event',  function(e){
        if(validator(['title', 'description'])) {
			if($('#managerialid').prop('checked')) {
    		var managerialid= $('#managerialid').val()
			} else {
   			var  managerialid=0
			}
			if($('#departmentalid').prop('checked')) {
    		var departmentalid= $('#departmentalid').val()
			} else {
   			var  departmentalid=0
			}
			if($('#unitid').prop('checked')) {
    		var unitid= $('#unitid').val()
			} else {
   			var  unitid=0
			}
			if($('#trainingid').prop('checked')) {
    		var trainingid= $('#trainingid').val()
			} else {
   			var  trainingid=0
			}
			if($('#organizationid').prop('checked')) {
    		var organizationid= $('#organizationid').val()
			} else {
   			var  organizationid=0
			}
			if($('#allid').prop('checked')) {
    		var allid= $('#allid').val()
			} else {
   			var  allid=0
			}
            $.post(base_url+'/addEvent', {
                title: $('#title').val(),
                description: $('#description').val(),
                color: $('#color').val(),
				userid: $('#userid').val(),
				managerialid:managerialid,
				departmentalid:departmentalid,
				unitid:unitid,
				trainingid:trainingid,
				organizationid:organizationid,
				allid:allid,
				//managerialid: $('#managerialid').val(),
				//departmentalid: $('#departmentalid').val(),
//				unitid: $('#unitid').val(),
//				trainingid: $('#trainingid').val(),
//				organizationid: $('#organizationid').val(),
//				allid: $('#allid').val(),
                date: currentDate + ' ' + getTime()
            }, function(result){
                $('.modal').modal('hide');
                $('#calendar').fullCalendar("refetchEvents");
            });
        }
    });


    // Handle click on Update Button
    $('.modal').on('click', '#update-event',  function(e){
        if(validator(['title', 'description'])) {
			if($('#managerialid').prop('checked')) {
    		var managerialid= $('#managerialid').val()
			} else {
   			var  managerialid=0
			}
			if($('#departmentalid').prop('checked')) {
    		var departmentalid= $('#departmentalid').val()
			} else {
   			var  departmentalid=0
			}
			if($('#unitid').prop('checked')) {
    		var unitid= $('#unitid').val()
			} else {
   			var  unitid=0
			}
			if($('#trainingid').prop('checked')) {
    		var trainingid= $('#trainingid').val()
			} else {
   			var  trainingid=0
			}
			if($('#organizationid').prop('checked')) {
    		var organizationid= $('#organizationid').val()
			} else {
   			var  organizationid=0
			}
			if($('#allid').prop('checked')) {
    		var allid= $('#allid').val()
			} else {
   			var  allid=0
			}
            $.post(base_url+'/updateEvent', {
                id: currentEvent._id,
                title: $('#title').val(),
                description: $('#description').val(),
                color: $('#color').val(),
				//userid: $('#userid').val(),
				managerialid:managerialid,
				departmentalid:departmentalid,
				unitid:unitid,
				trainingid:trainingid,
				organizationid:organizationid,
				allid:allid,
                date: currentEvent.date.split(' ')[0]  + ' ' +  getTime()
            }, function(result){
                $('.modal').modal('hide');
                $('#calendar').fullCalendar("refetchEvents");
            });
        }
    });



    // Handle Click on Delete Button
    $('.modal').on('click', '#delete-event',  function(e){
        $.get(base_url+'/deleteEvent?id=' + currentEvent._id, function(result){
            $('.modal').modal('hide');
            $('#calendar').fullCalendar("refetchEvents");
        });
    });


    // Get Formated Time From Timepicker
    function getTime() {
        var time = $('#time').val();
        return (time.indexOf(':') == 1 ? '0' + time : time) + ':00';
    }

    // Dead Basic Validation For Inputs
    function validator(elements) {
        var errors = 0;
        $.each(elements, function(index, element){
            if($.trim($('#' + element).val()) == '') errors++;
        });
        if(errors) {
            $('.error').html('Please insert title and description');
            return false;
        }
        return true;
    }
});
</script>
</body>
</html>
