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
                  <h3 class="box-title">Policy Insert</h3>
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
				 <form role="form" autocomplete="off" action="<?php echo base_url();?>Dashboard/policy_insert" method="post" enctype="multipart/form-data">
                 
              
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
					<label>Policy Type<em>*</em></label>
					<select class="form-control" name="ptid" id="ptid">
                    	<option value="">Select....</option>
                        <?php
						foreach($ul as $row)
						{
					?>
                    		<option value="<?php echo $row['ptid'];?>"><?php echo $row['policytype'];?></option>
                    <?php
						}
					?>
                    </select>
                    <?php echo form_error('ptid', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Policy Class<em>*</em></label>
					<select class="form-control" name="pcid" id="pcid">
                    	<option value="">Select....</option>
                        <?php
						foreach($pcl as $row)
						{
					?>
                    		<option value="<?php echo $row['pcid'];?>"><?php echo $row['policyclass'];?></option>
                    <?php
						}
					?>
                    </select>
                    <?php echo form_error('pcid', '<div class="error">', '</div>');  ?>
				</div>
               
                <div class="form-group">
					<label>Name<em>*</em></label>
					<input type="text" class="form-control" name="policyname" placeholder="Enter Policy Name">
                    <?php echo form_error('policyname', '<div class="error">', '</div>');  ?>
				</div>
                
				<div class="form-group">
                  <label for="employeefile">Policy File</label>
                  <input type="file" name="pic_file">
                  <span>jpg|png|jpeg|pdf|doc</span>
                  <?php echo form_error('pic_file', '<div class="error">', '</div>');  ?>
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


