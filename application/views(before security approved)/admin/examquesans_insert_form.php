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
	      '<div class="row"><table class="table table-bordered table-striped text-center"><tr><td><input type="text" class="form-control" name="ans[]' + counter + 
	      '" id="ans' + counter + '" placeholder="' + 'Answer' +'" ></td>' +
		  '<td><input type="text" class="form-control" name="marks[]' + counter + 
	      '" id="marks' + counter + '" placeholder="' + 'Marks' +'" ></td>'+
		  
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
                  <h3 class="box-title">Exam Question Answer Insert</h3>
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
                	<table id="tableData" class="table table-hover table-bordered">
              		<thead style="background:#91b9e6;">
                	<tr>
                  
                  <th>Question</th>
                  
                </tr>
                </thead>
                <tbody>
                <?php 
				$i=1;
				foreach($el as $row)
				{ ?>
                <tr>
                  
                 
                  <td style="vertical-align:middle;"><?php echo $row['examques'];?></td>
                  
                  
                </tr>
                </tbody>
               <?php } ?>
              </table>
				 <form role="form" autocomplete="off" action="<?php echo base_url();?>Dashboard/examquesans_insert" method="post" enctype="multipart/form-data">
                 
                <input type="hidden" name="exnid" value="<?php echo $row['exnid'];?>">
                <input type="hidden" name="exquesid" value="<?php echo $row['examquesid'];?>">
                
                <div id="AuGroup">
									<div class="row">
                                    	<h4 class="text-center">Exam Question Answer</h4>
											<table class="table table-bordered table-striped text-center">
												<tr>
													<th><input type='button' value='Add Button' id='addau' class='btn btn-success'></th>
													
                                                    <th><input type='button' value='Remove Button' id='removeau' class='btn btn-danger'></th>
												</tr>
												<tr>
													<td><input type="text" class="form-control" name="ans[]" id="pd_" placeholder="Answer">
														<?php echo form_error('ans[]', '<div class="error">', '</div>');  ?>
													</td>
													<td><input type="text" class="form-control" name="marks[]" placeholder="Marks">
															<?php echo form_error('marks[]', '<div class="error">', '</div>');  ?>
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


</body>
</html>


