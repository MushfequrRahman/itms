<style>
.error{color:red;}
em{color:red;}
</style>
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
	      '<div class="row"><table class="table table-bordered table-striped text-center"><tr><td><input type="text" class="form-control" name="exq[]' + counter + 
	      '" id="exq' + counter + '" placeholder="' + 'Exam Question' +'" ></td>'+
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
                  <h3 class="box-title">Exam Question Insert</h3>
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
				 <form role="form" autocomplete="off" action="<?php echo base_url();?>Dashboard/examques_insert" method="post" enctype="multipart/form-data">
                 
                <div class="form-group">
					<label>Exam Name<em>*</em></label>
					<select class="form-control" name="exnid" id="exnid">
                    	<option value="">Select....</option>
                        <?php
						foreach($el as $row)
						{
					?>
                    		<option value="<?php echo $row['exnid'];?>"><?php echo $row['examname'];?></option>
                    <?php
						}
					?>
                    </select>
                    <?php echo form_error('exnid', '<div class="error">', '</div>');  ?>
				</div>
                
                <div id="AuGroup">
									<div class="row">
                                    	<h4 class="text-center">Exam Question</h4>
											<table class="table table-bordered table-striped text-center">
												<tr>
													<th><input type='button' value='Add Button' id='addau' class='btn btn-success'>
                                                    &nbsp;&nbsp;<input type='button' value='Remove Button' id='removeau' class='btn btn-danger'></th>
													
												</tr>
												<tr>
													<td><input type="text" class="form-control" name="exq[]" id="exq" placeholder="Exam Question">
														<?php echo form_error('exq[]', '<div class="error">', '</div>');  ?>
													</td>
													
                                                 </tr>
											</table>
									</div>
								</div>
           		<!-- /.users-list -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <input type="submit" class="btn btn-primary" name="submit" value="Submit" />
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
<script type="text/javascript">
$(document).ready(function(){

    $('#floorname').change(function(event){
        event.preventDefault();
		var floorname = $('#floorname').val();

        $.ajax({
            type:'get',
            url:"<?php echo base_url(); ?>Dashboard/show_linename",
			dataType:"json",
                    data:{ floorname:floorname},
            success:function(res)
            	{
         		 	$('#linename').find('option').remove();
				 	// Add options
          			$.each(res,function(index,data){
				  	$('#linename').append('<option value="'+data['linename']+'">'+data['linename']+'</option>');
          			});
				}
        	});
    	});
	});
</script>

</body>
</html>


