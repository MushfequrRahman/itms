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
                  <h3 class="box-title">User Insert</h3>
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
				 <form role="form" autocomplete="off" action="<?php echo base_url();?>Dashboard/baslagriuser_insert" method="post" enctype="multipart/form-data">
                 
                <div class="form-group">
					<label>User ID<em>*</em></label>
					<input type="text" class="form-control" name="userid" placeholder="Enter User ID">
                    <?php echo form_error('userid', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Region Name<em>*</em></label>
					<select class="form-control" name="regionid" id="regionid">
                    	<option value="">Select....</option>
                        <?php
						foreach($rl as $row)
						{
					?>
                    		<option value="<?php echo $row['regionid'];?>"><?php echo $row['regionname'];?></option>
                    <?php
						}
					?>
                    </select>
                    <?php echo form_error('regionid', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Area Name<em>*</em></label>
					<select class="form-control" name="areaid" id="areaid">
                    	<option value="">Select....</option>
                        <?php /*?><?php
						foreach($al as $row)
						{
					?>
                    		<option value="<?php echo $row['areaid'];?>"><?php echo $row['areaname'];?></option>
                    <?php
						}
					?><?php */?>
                    </select>
                    <?php echo form_error('areaid', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Teritorry Name<em>*</em></label>
					<select class="form-control" name="teritorryid" id="teritorryid">
                    	<option value="">Select....</option>
                        <?php /*?><?php
						foreach($al as $row)
						{
					?>
                    		<option value="<?php echo $row['areaid'];?>"><?php echo $row['areaname'];?></option>
                    <?php
						}
					?><?php */?>
                    </select>
                    <?php echo form_error('teritorryid', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Position Name<em>*</em></label>
					<select class="form-control" name="positionid" id="positionid">
                    	<option value="">Select....</option>
                        <?php
						foreach($pl as $row)
						{
					?>
                    		<option value="<?php echo $row['positionid'];?>"><?php echo $row['positionname'];?></option>
                    <?php
						}
					?>
                    </select>
                    <?php echo form_error('positionid', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Work Area Name<em>*</em></label>
					<select class="form-control" name="baslagriwlid" id="baslagriwlid">
                    	<option value="">Select....</option>
                        <?php
						foreach($wl as $row)
						{
					?>
                    		<option value="<?php echo $row['baslagriwlid'];?>"><?php echo $row['name'];?></option>
                    <?php
						}
					?>
                    </select>
                    <?php echo form_error('baslagriwlid', '<div class="error">', '</div>');  ?>
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

    $('#regionid').change(function(event){
        event.preventDefault();
		var regionname = $('#regionid').val();

        $.ajax({
            type:'get',
            url:"<?php echo base_url(); ?>Dashboard/show_areaname",
			dataType:"json",
                    data:{ regionname:regionname},
            success:function(res)
            	{
         		 	$('#areaid').find('option').not(':first').remove();
				 	// Add options
          			$.each(res,function(index,data){
				  	$('#areaid').append('<option value="'+data['areaid']+'">'+data['areaname']+'</option>');
          			});
				}
        	});
    	});
	});
</script>
<script type="text/javascript">
$(document).ready(function(){

    $('#areaid').change(function(event){
        event.preventDefault();
		var regionname = $('#regionid').val();
		var areaname = $('#areaid').val();
        $.ajax({
            type:'get',
            url:"<?php echo base_url(); ?>Dashboard/show_territoryname",
			dataType:"json",
                    data:{ regionname:regionname,areaname:areaname},
            success:function(res)
            	{
         		 	//$('#areaid').find('option').not(':first').remove();
					$('#teritorryid').find('option').not(':first').remove();
				 	// Add options
          			$.each(res,function(index,data){
				  	$('#teritorryid').append('<option value="'+data['territoryid']+'">'+data['territoryname']+'</option>');
          			});
				}
        	});
    	});
	});
</script>
</body>
</html>


