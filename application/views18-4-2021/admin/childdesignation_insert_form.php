<style>
.error{color:red;}
em{color:red;}
</style>

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
                  <h3 class="box-title">Child Designation Insert</h3>
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
				 <form role="form" autocomplete="off" action="<?php echo base_url();?>Dashboard/childdesignation_insert" method="post" enctype="multipart/form-data">
                 
                
                <div class="form-group">
					<label>Parent Designation Name<em>*</em></label>
					<select class="form-control" name="parentdesignationid" id="parentdesignationid">
                    	<option value="">Select....</option>
                        <?php
						foreach($ul as $row)
						{
					?>
                    		<option value="<?php echo $row['parentdesignationid'];?>"><?php echo $row['eparentdesignation'];?></option>
                    <?php
						}
					?>
                    </select>
                    <?php echo form_error('parentdesignationid', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Child Designation Name (English)<em>*</em></label>
					<input type="text" class="form-control" name="echilddesignation" placeholder="Enter Child Designation Name">
                    <?php echo form_error('echilddesignation', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>পদবী (বাংলা)<em>*</em></label>
					<input type="text" class="form-control" name="bchilddesignation" placeholder="পদবী">
                    <?php echo form_error('bchilddesignation', '<div class="error">', '</div>');  ?>
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


