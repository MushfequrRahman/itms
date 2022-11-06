<style>
.error{color:red;}
em{color:red;}
</style>
<script type="text/javascript">
$(function () {
    jQuery(".pd").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery(".wd").datepicker({dateFormat: 'yy-mm-dd'});
	})
</script>
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
	      '<div class="row"><table class="table table-bordered table-striped text-center"><tr><td><input type="text" class="form-control" name="fsl[]' + counter + 
	      '" id="fsl' + counter + '" placeholder="' + 'Findings Serial' +'" ></td>' +
		  '<td><textarea class="form-control" rows="1" name="findings[]' + counter + 
	      '" id="findings' + counter + '" placeholder="' + 'Findings' +'" ></textarea></td>'+
		  '<td><textarea class="form-control" rows="1" name="observation[]' + counter + 
	      '" id="observation' + counter + '" placeholder="' + 'Observation' +'" ></textarea></td>'+
		  '</tr></table></div>');
            
	newTextBoxDiv.appendTo("#AuGroup");

				
	counter++;
	//console.log("#pd"+counter--);
	//jQuery("#pd"+counter--).datepicker({dateFormat: 'yy-mm-dd'});	
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
                  <h3 class="box-title">Cap Details Report</h3>
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
                
				 <form role="form" id="comment" autocomplete="off" action="<?php echo base_url();?>Dashboard/capfull_report" method="post" enctype="multipart/form-data">
                <div class="box-body ">
                       
						
						
                <!-- text input -->
                
                <div class="form-group">
					<label>Date<em>*</em></label>
					<input type="text" class="form-control pd" name="adate" id="adate" value="<?php echo date('d-m-Y'); ?>">
                    
				</div>
                <div class="form-group">
					<label>Unit<em>*</em></label>
					<select class="form-control" name="factoryname" id="factoryname">
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
                    <?php echo form_error('factoryname', '<div class="error">', '</div>');  ?>
                    
				</div>
                <div class="form-group">
					<label>Buyer<em>*</em></label>
					<select class="form-control" name="buyername" id="buyername">
                    	<option value="">Select....</option>
                        <?php
						foreach($bl as $row)
						{
					?>
                    		<option value="<?php echo $row['buyername'];?>"><?php echo $row['buyername'];?></option>
                    <?php
						}
					?>
                    </select>
                    <?php echo form_error('buyername', '<div class="error">', '</div>');  ?>
                    
				</div>
                <div class="form-group">
					<label>Audit Type<em>*</em></label>
					<select class="form-control" name="audittype" id="audittype">
                    	<option value="">Select....</option>
                        <?php
						foreach($alltype as $row)
						{
					?>
                    		<option value="<?php echo $row['audittyname'];?>"><?php echo $row['audittyname'];?></option>
                    <?php
						}
					?>
                    </select>
                    <?php echo form_error('audittype', '<div class="error">', '</div>');  ?>
				</div>
                
               
				
               
				
				
				
                
				
				
				

				 
				
				
                
  
               
               
    
                

             
                  <!-- /.users-list -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <input type="submit" class="btn btn-primary" id="btn" name="submit" value="SHOW" />
                </div>
				 </form>
                <!-- /.box-footer -->
              </div>
              <!--/.box -->
              <div id="ajax-content-container">
        </div>
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


