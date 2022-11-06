<style>
.error{color:red;}
em{color:red;}
</style>
<script type="text/javascript">
$(function () {
    jQuery(".pd").datepicker({dateFormat: 'yy-mm-dd'});
	jQuery(".wd").datepicker({dateFormat: 'dd-mm-yy'});
	})
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
                  <h3 class="box-title">Notice Insert</h3>
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
				 <form role="form" autocomplete="off" action="<?php echo base_url();?>Dashboard/notice_insert" method="post" enctype="multipart/form-data">
                 
               <?php /*?> <div class="form-group">
					<label>ID<em>*</em></label>
					<input type="text" class="form-control" name="userid" placeholder="Enter User ID" value="<?php echo set_value('userid'); ?>">
                    <?php echo form_error('userid', '<div class="error">', '</div>');  ?>
				</div><?php */?>
                <div class="form-group">
					<label>Unit<em>*</em></label>
					<select class="form-control" name="unit" id="unit">
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
                    <?php echo form_error('unit', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Name<em>*</em></label>
					<input type="text" class="form-control" name="noticename" placeholder="Enter Notice Name">
                    <?php echo form_error('empname', '<div class="error">', '</div>');  ?>
				</div>
                <?php /*?><div class="form-group">
					<label>Password<em>*</em></label>
					<input type="text" class="form-control" name="password" placeholder="Enter Employee password">
                    <?php echo form_error('password', '<div class="error">', '</div>');  ?>
				</div><?php */?>
                <?php /*?><div class="form-group">
					<label>Email<em>*</em></label>
					<input type="text" class="form-control" name="email" placeholder="Enter Employee Email">
                    <?php echo form_error('email', '<div class="error">', '</div>');  ?>
				</div><?php */?>
                <?php /*?><div class="form-group">
					<label>Mobile<em>*</em></label>
					<input type="text" class="form-control" name="mobile" placeholder="Enter Employee Mobile Num">
                    <?php echo form_error('mobile', '<div class="error">', '</div>');  ?>
				</div><?php */?>
                <?php /*?><div class="form-group">
					<label>Designation<em>*</em></label>
					<select class="form-control" name="designation" id="deignation">
                    	<option value="">Select....</option>
                        <option value="Jr Executive">Jr Executive</option>
                        <option value="Executive">Executive</option>
                        <option value="Sr Executive">Sr Executive</option>
                    </select>
                    <?php echo form_error('designation', '<div class="error">', '</div>');  ?>
				</div><?php */?>
				<?php /*?><div class="form-group">
					<label>User Type<em>*</em></label>
					<select class="form-control" name="user_type" id="user_type">
                    	<option value="">Select....</option>
                        <option value="Super-Admin">Super Admin</option>
                        <option value="Admin">Admin</option>
                        <option value="User">User</option>
                    </select>
                    <?php echo form_error('user_type', '<div class="error">', '</div>');  ?>
				</div><?php */?>
				<div class="form-group">
                  <label for="employeefile">Notice File</label>
                  <input type="file" name="pic_file">
                  <span>jpg|png|pdf|doc</span>
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


