<style>
.error{color:red;}
em{color:red;}
</style>
<script type="text/javascript">
$(function () {
    jQuery(".pd").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery(".wd").datepicker({dateFormat: 'yy-mm-dd'});
	//jQuery("#pd_2").datepicker({dateFormat: 'dd-mm-yy'});
	})
</script>
<script type="text/javascript">
$(function () {
    jQuery("#pd_1").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#pd_2").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#pd_3").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#pd_4").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#pd_5").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#pd_6").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#pd_7").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#pd_8").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#pd_9").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#pd_10").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#pd_11").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#pd_12").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#pd_13").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#pd_14").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#pd_15").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#pd_16").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#pd_17").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#pd_18").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#pd_19").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#pd_20").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#pd_21").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#pd_22").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#pd_23").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#pd_24").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#pd_25").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#pd_26").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#pd_27").datepicker({dateFormat: 'dd-mm-yy'});
	})
</script>

<!--STRENGTH-->


<script type="text/javascript">

$(document).ready(function(){

    var counter = 2;
		
    $("#addau").click(function () {
				
	if(counter>100){
            alert("Only 100 rollboxes allow");
            return false;
	}   
		
	var newTextBoxDiv = $(document.createElement('div'))
	     .attr("id", 'AuDiv' + counter);

	newTextBoxDiv.after().html(
	      '<div class="row"><table class="table table-bordered table-striped text-center"><tr><td><input type="text" class="form-control pd" name="odate[]' + counter + 
	      '" id="pd_' + counter + '" value="' + '' +'" ></td>' +
		  '<td><input type="text" class="form-control" name="obyid[]' + counter + 
	      '" id="obyid' + counter + '" placeholder="' + 'By ID' +'" ></td>'+
		  '<td><textarea class="form-control" rows="1" name="odetails[]' + counter + 
	      '" id="odetails' + counter + '" placeholder="' + 'Observation Details' +'" ></textarea></td>'+
		  '</tr></table></div>');
            
	newTextBoxDiv.appendTo("#AuGroup");

				
	counter++;
	//console.log("#pd_"+counter--);
	//jQuery("#pd_"+counter--).datepicker({dateFormat: 'yy-mm-dd'});	
     });

     $("#removeau").click(function () {
	if(counter==1){
          alert("No more textbox to remove");
          return false;
       }   
        
	counter--;
			
        $("#AuDiv" + counter).remove();
			
     });
		
     
  });
</script>




 	 	 		 	 	 	 
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   	<!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
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
                  			<h3 class="box-title">Observation Insert</h3>
							<div class="row">
								<div class="col-sm-12 col-md-12 col-lg-12">
									<?php if($responce = $this->session->flashdata('Successfully')): ?>
									<div class="text-center">
										<div class="alert alert-success text-center"><?php echo $responce;?></div>
									</div>
									<?php endif;?>
								</div>
							</div>
             			</div>
                <!-- /.box-header -->
                		<div class="box-body ">
				 			<form role="form" autocomplete="off" action="<?php echo base_url();?>Dashboard/eobservation_insert" method="post" enctype="multipart/form-data">
                 
                				<div class="form-group">
									<label>Factory Name<em>*</em></label>
									<select class="form-control" name="factoryid" id="factoryid">
                    					<option value="">Select....</option>
                        				<?php
											foreach($allf as $row)
												{
										?>
                    								<option value="<?php echo $row['factoryid'];?>"><?php echo $row['factoryname'];?></option>
                    					<?php
												}
										?>
                    				</select>
                    				<?php echo form_error('factoryid', '<div class="error">', '</div>');  ?>
								</div>	
                				<div class="form-group">
									<label>User ID<em>*</em></label>
									<input type="text" class="form-control" name="userid" placeholder="Enter User ID">
                    				<?php echo form_error('userid', '<div class="error">', '</div>');  ?>
								</div>
            					<div id="AuGroup">
									<div class="row">
                                    	<h4 class="text-center">OBSERVATION</h4>
											<table class="table table-bordered table-striped text-center">
												<tr>
													<th><input type='button' value='Add Button' id='addau' class='btn btn-success'></th>
													<th>&nbsp;</th>
                                                    <th><input type='button' value='Remove Button' id='removeau' class='btn btn-danger'></th>
												</tr>
												<tr>
													<td><input type="text" class="form-control pd" name="odate[]" id="pd_" value="<?php echo date('d-m-Y'); ?>">
														<?php echo form_error('odate[]', '<div class="error">', '</div>');  ?>
													</td>
													<td><input type="text" class="form-control" name="obyid[]" placeholder="By ID">
															<?php echo form_error('obyid[]', '<div class="error">', '</div>');  ?>
													</td>
													<td><textarea class="form-control" rows="1" name="odetails[]" placeholder="Observation Details"></textarea>
															<?php echo form_error('odetails[]', '<div class="error">', '</div>');  ?>
													</td>
                                                 </tr>
											</table>
									</div>
								</div>
                				<div class="box-footer text-center">
                  					<input type="submit" class="btn btn-primary" name="observation" value="Submit" />
                				</div>
                				
                                    
                                    
				 </form>
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
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  
</div>
<!-- ./wrapper -->


</body>
</html>


