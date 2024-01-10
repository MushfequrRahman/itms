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
                  <h3 class="box-title">Buyer Insert</h3>
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
				 <form role="form" autocomplete="off" action="<?php echo base_url();?>Dashboard/buyer_insert" method="post" enctype="multipart/form-data">
                 <div class="form-group">
                  <label for="employeefile">Buyer Photo</label>
                  <input type="file" name="pic_file">
                </div>
				<div class="form-group">
					<label>Name<em>*</em></label>
					<input type="text" class="form-control" name="buyername" placeholder="Enter Buyer Name" value="<?php echo set_value('buyername'); ?>">
                    <?php echo form_error('buyername', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Origin<em>*</em></label>
					<select class="form-control" name="origin" id="origin">
                    	<option value="">Select....</option>
                        <option value="UK">UK</option>
                        <option value="USA">USA</option>
                        <option value="DE">DE</option>
                    	<option value="Fr">Fr</option>
                        <option value="UAE">UAE</option>
                        <option value="SE">SE</option>
                    </select>
                    <?php echo form_error('origin', '<div class="error">', '</div>');  ?>
				</div>
                
                <div class="form-group">
					<label>Local Address<em>*</em></label>
					<input type="text" class="form-control" name="local_address" placeholder="Local Address" value="<?php echo set_value('local_address'); ?>">
                    <?php echo form_error('local_address', '<div class="error">', '</div>');  ?>
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


