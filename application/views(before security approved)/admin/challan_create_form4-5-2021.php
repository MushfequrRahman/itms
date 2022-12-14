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
                  <h3 class="box-title">Challan Create</h3>
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
				 <form role="form" autocomplete="off" action="<?php echo base_url();?>Dashboard/challan_create" method="post" enctype="multipart/form-data">
                <input type="hidden" class="form-control" name="userid" value="<?php echo $this->session->userdata('userid');?>">
                <div class="form-group">
					<label>Sent Factory Name<em>*</em></label>
                    <input type="text" class="form-control" readonly name="sfactoryid" value="<?php echo $this->session->userdata('factoryid');?>">
					<?php /*?><select class="form-control" name="sfactoryid" id="sfactoryid">
                    	<option value="">Select....</option>
                        <?php
						foreach($allf as $row)
						{
					?>
                    		<option value="<?php echo $row['factoryid'];?>"><?php echo $row['factoryname'];?></option>
                    <?php
						}
					?>
                    </select><?php */?>
                    <?php echo form_error('sfactoryid', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Challan Number<em>*</em></label>
					<input type="text" class="form-control" name="manualid" placeholder="Enter Challan Number">
                    <?php echo form_error('manualid', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Destination Factory Name<em>*</em></label>
					<select class="form-control" name="rfactoryid" id="rfactoryid">
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
                    <?php echo form_error('rfactoryid', '<div class="error">', '</div>');  ?>
				</div>		
                <!--<div class="form-group">
					<label>Location<em>*</em></label>
					<input type="text" class="form-control" name="location" placeholder="Enter Location">
                    <?php echo form_error('diviname', '<div class="error">', '</div>');  ?>
				</div>-->
                <div class="form-group">
					<label>Product Type<em>*</em></label>
					<select class="form-control" name="producttypeid" id="producttypeid">
                    	<option value="">Select....</option>
                        <?php
						foreach($ptl as $row)
						{
					?>
                    		<option value="<?php echo $row['producttypeid'];?>"><?php echo $row['producttype'];?></option>
                    <?php
						}
					?>
                    </select>
                    <?php echo form_error('producttypeid', '<div class="error">', '</div>');  ?>
				</div>		
                <div class="form-group">
					<label>Item<em>*</em></label>
					<input type="text" class="form-control" name="item" placeholder="Enter Item Name">
                    <?php echo form_error('item', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Quantity<em>*</em></label>
					<input type="text" class="form-control" name="sqty" placeholder="Enter Quantity">
                    <?php echo form_error('qty', '<div class="error">', '</div>');  ?>
				</div>
                <?php /*?><div class="form-group">
					<label>Unit<em>*</em></label>
					<input type="text" class="form-control" name="unit" placeholder="Kg/Yards/Pcs......">
                    <?php echo form_error('unit', '<div class="error">', '</div>');  ?>
				</div><?php */?>
                <div class="form-group">
					<label>UOM<em>*</em></label>
					<select class="form-control" name="unit" id="unit">
                    	<option value="">Select....</option>
                        <?php
						foreach($pul as $row)
						{
					?>
                    		<option value="<?php echo $row['productunitid'];?>"><?php echo $row['productunitname'];?></option>
                    <?php
						}
					?>
                    </select>
                    <?php echo form_error('productunitnam', '<div class="error">', '</div>');  ?>
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


