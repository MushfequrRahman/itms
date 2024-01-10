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
                  <h3 class="box-title">Section Insert</h3>
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
				 <form role="form" autocomplete="off" action="<?php echo base_url();?>Dashboard/section_insert" method="post" enctype="multipart/form-data">
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
					<label>Division<em>*</em></label>
					<select class="form-control" name="divisionid" id="divisionid">
                    	<option value="">Select....</option>
                        
                    </select>
                    
				</div>
				<div class="form-group">
					<label>Department<em>*</em></label>
						<select class="form-control" name="departmentid" id="departmentid">
                    		<option value="">Select....</option>
                        </select>
				</div>
                <div class="form-group">
					<label>Section<em>*</em></label>
					<input type="text" class="form-control" name="section" placeholder="Enter Section">
                    <?php echo form_error('section', '<div class="error">', '</div>');  ?>
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

    $('#factoryid').change(function(event){
        event.preventDefault();
		var factoryid = $('#factoryid').val();

        $.ajax({
            type:'get',
            url:"<?php echo base_url(); ?>Dashboard/show_divisionname",
			dataType:"json",
                    data:{ factoryid:factoryid},
            success:function(res)
            	{
         		 	$('#divisionid').find('option').not(':first').remove();;
				 	// Add options
          			$.each(res,function(index,data){
				  	$('#divisionid').append('<option value="'+data['divisionid']+'">'+data['divisionname']+'</option>');
          			});
				}
        	});
    	});
	});
</script>

<script type="text/javascript">
$(document).ready(function(){

    $('#divisionid').change(function(event){
        event.preventDefault();
		var factoryid = $('#factoryid').val();
		var divisionid = $('#divisionid').val();
        $.ajax({
            type:'get',
            url:"<?php echo base_url(); ?>Dashboard/show_departmentname",
			dataType:"json",
                    data:{ factoryid:factoryid,divisionid:divisionid},
            success:function(res)
            	{
         		 	//$('#departmentid').find('option');
					$('#departmentid').find('option').not(':first').remove();
				 	// Add options
          			$.each(res,function(index,data){
				  	$('#departmentid').append('<option value="'+data['deptid']+'">'+data['departmentname']+'</option>');
          			});
				}
        	});
    	});
	});
</script>

</body>
</html>


