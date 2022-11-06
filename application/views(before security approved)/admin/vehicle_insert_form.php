<style>
.error{color:red;}
em{color:red;}
</style>
<script type="text/javascript">
$(function () {
    jQuery(".pd").datepicker({dateFormat: 'dd-mm-yy'});
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
                  <h3 class="box-title">Vehicle Tracker Insert</h3>
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
				 <form role="form" autocomplete="off" action="<?php echo base_url();?>Dashboard/vehicle_insert" method="post" enctype="multipart/form-data">
                 <?php /*?><input type="hidden" name="userid" value="<?php echo $this->session->userdata('userid');?>"><?php */?>
                  
                
				
                
               
                <?php /*?><div class="form-group">
					<label>Factory<em>*</em></label>
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
				</div><?php */?>
                <div class="form-group">
					<label>Brand<em>*</em></label>
					<input type="text" class="form-control" name="brand" placeholder="Brand">
                    <?php echo form_error('brand', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Model<em>*</em></label>
					<input type="text" class="form-control" name="model" placeholder="Model">
                    <?php echo form_error('model', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Vehicle Number<em>*</em></label>
					<input type="text" class="form-control" name="vehichelno" placeholder="Vehicle No">
                    <?php echo form_error('vehicleno', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Vehicle Type<em>*</em></label>
					<input type="text" class="form-control" name="vtype" placeholder="Vehicle Type">
                    <?php echo form_error('vtype', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Register No<em>*</em></label>
					<input type="text" class="form-control" name="registerno" placeholder="Register No">
                    <?php echo form_error('registerno', '<div class="error">', '</div>');  ?>
				</div>
                
                <div class="form-group">
					<label>Register Year<em>*</em></label>
					<input type="text" class="form-control pd" name="regisyr" value="<?php echo date('d-m-Y');?>">
                    <?php echo form_error('regisyr', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Color<em>*</em></label>
					<input type="text" class="form-control" name="color" placeholder="Color">
                    <?php echo form_error('color', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>CC<em>*</em></label>
					<input type="text" class="form-control" name="cc" placeholder="CC">
                    <?php echo form_error('cc', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Engine No<em>*</em></label>
					<input type="text" class="form-control" name="engineno" placeholder="Engine No">
                    <?php echo form_error('engineno', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Chasis No<em>*</em></label>
					<input type="text" class="form-control" name="chasisno" placeholder="Chasis No">
                    <?php echo form_error('chasisno', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Tyre Size<em>*</em></label>
					<input type="text" class="form-control" name="tyresize" placeholder="Tyre Size">
                    <?php echo form_error('tyresize', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Wheel Size<em>*</em></label>
					<input type="text" class="form-control" name="wheelsize" placeholder="Wheel Size">
                    <?php echo form_error('wheelsize', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Weight<em>*</em></label>
					<input type="text" class="form-control" name="weight" placeholder="Weight">
                    <?php echo form_error('weight', '<div class="error">', '</div>');  ?>
				</div>
                <?php /*?><div class="form-group">
					<label>Fuel<em>*</em></label>
					<input type="text" class="form-control" name="fuel" placeholder="Fuel">
                    <?php echo form_error('fuel', '<div class="error">', '</div>');  ?>
				</div><?php */?>
                <div class="form-group">
					<label>Fuel<em>*</em></label>
					<select class="form-control" name="fuel" id="fuel">
                    	<option value="">Select....</option>
                        <?php
						foreach($vful as $row)
						{
					?>
                    		<option value="<?php echo $row['vfuid'];?>"><?php echo $row['fuel'];?></option>
                    <?php
						}
					?>
                    </select>
                    <?php echo form_error('fuel', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Seat No<em>*</em></label>
					<input type="text" class="form-control" name="seatno" placeholder="Seat No">
                    <?php echo form_error('seatno', '<div class="error">', '</div>');  ?>
				</div>
                <?php /*?><div class="form-group">
					<label>Insurance No<em>*</em></label>
					<input type="text" class="form-control" name="insuranceno" placeholder="Insurance No">
                    <?php echo form_error('insuranceno', '<div class="error">', '</div>');  ?>
				</div><?php */?>
                <?php /*?><div class="form-group">
					<label>Insurance No<em>*</em></label>
					<select class="form-control" name="insuranceno" id="insuranceno">
                    	<option value="">Select....</option>
                        <?php
						foreach($vil as $row)
						{
					?>
                    		<option value="<?php echo $row['viid'];?>"><?php echo $row['insurance'];?></option>
                    <?php
						}
					?>
                    </select>
                    <?php echo form_error('insuranceno', '<div class="error">', '</div>');  ?>
				</div><?php */?>
                <?php /*?><div class="form-group">
					<label>Tax Token<em>*</em></label>
					<input type="text" class="form-control" name="taxtoken" placeholder="Tax Token">
                    <?php echo form_error('taxtoken', '<div class="error">', '</div>');  ?>
				</div><?php */?>
                <?php /*?><div class="form-group">
					<label>Tax Token No<em>*</em></label>
					<select class="form-control" name="taxtoken" id="taxtoken">
                    	<option value="">Select....</option>
                        <?php
						foreach($vtl as $row)
						{
					?>
                    		<option value="<?php echo $row['vttid'];?>"><?php echo $row['taxtoken'];?></option>
                    <?php
						}
					?>
                    </select>
                    <?php echo form_error('taxtoken', '<div class="error">', '</div>');  ?>
				</div><?php */?>
                <?php /*?><div class="form-group">
					<label>Fitness<em>*</em></label>
					<input type="text" class="form-control" name="fitness" placeholder="Fitness">
                    <?php echo form_error('fitness', '<div class="error">', '</div>');  ?>
				</div><?php */?>
                <div class="form-group">
					<label>Price<em>*</em></label>
					<input type="text" class="form-control" name="price" placeholder="Price">
                    <?php echo form_error('price', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Owner ID<em>*</em></label>
					<input type="text" class="form-control" name="oid" placeholder="Owner ID">
                    <?php echo form_error('oid', '<div class="error">', '</div>');  ?>
				</div>
               <?php /*?> <div class="form-group">
					<label>User Unit<em>*</em></label>
					<input type="text" class="form-control" name="userunit" placeholder="User Unit">
                    <?php echo form_error('userunit', '<div class="error">', '</div>');  ?>
				</div><?php */?>
                <div class="form-group">
					<label>User Unit<em>*</em></label>
					<select class="form-control" name="userunit" id="userunit">
                    	<option value="">Select....</option>
                        <?php
						foreach($vrl as $row)
						{
					?>
                    		<option value="<?php echo $row['vroid'];?>"><?php echo $row['route'];?></option>
                    <?php
						}
					?>
                    </select>
                    <?php echo form_error('userunit', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Registration Unit Name<em>*</em></label>
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
					<label>Registration User Name<em>*</em></label>
					<input type="text" class="form-control" name="rid" placeholder="Register ID">
                    <?php echo form_error('rid', '<div class="error">', '</div>');  ?>
				</div>
               <!--<div class="form-group">
					<label>Person<em>*</em></label>
					<input type="radio" name="user" value="1">
                    
				</div>
                <div class="form-group">
					<label>Factory<em>*</em></label>
					
                    <input type="radio" name="factory" checked value="1">
				</div>-->
				
                
				
                
				
				
				

				 
				
				
                
  
               
               
    
                

             
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
         		 	$('#departmentid').find('option').not(':first').remove();;
				 	// Add options
          			$.each(res,function(index,data){
				  	$('#departmentid').append('<option value="'+data['deptid']+'">'+data['departmentname']+'</option>');
          			});
				}
        	});
    	});
	});
</script>

<script type="text/javascript">
$(document).ready(function(){

    $('#departmentid').change(function(event){
        event.preventDefault();
		var factoryid = $('#factoryid').val();
		var divisionid = $('#divisionid').val();
		var departmentid = $('#departmentid').val();
        $.ajax({
            type:'get',
            url:"<?php echo base_url(); ?>Dashboard/show_sectionname",
			dataType:"json",
                    data:{ factoryid:factoryid,divisionid:divisionid,departmentid:departmentid},
            success:function(res)
            	{
         		 	$('#sectionid').find('option').not(':first').remove();;
				 	// Add options
          			$.each(res,function(index,data){
				  	$('#sectionid').append('<option value="'+data['secid']+'">'+data['sectionname']+'</option>');
          			});
				}
        	});
    	});
	});
</script>

<script type="text/javascript">
$(document).ready(function(){

    $('#sectionid').change(function(event){
        event.preventDefault();
		var factoryid = $('#factoryid').val();
		var divisionid = $('#divisionid').val();
		var departmentid = $('#departmentid').val();
		var sectionid = $('#sectionid').val();
        $.ajax({
            type:'get',
            url:"<?php echo base_url(); ?>Dashboard/show_subsectionname",
			dataType:"json",
                    data:{ factoryid:factoryid,divisionid:divisionid,departmentid:departmentid,sectionid:sectionid},
            success:function(res)
            	{
         		 	$('#subsectionid').find('option').not(':first').remove();;
				 	// Add options
          			$.each(res,function(index,data){
				  	$('#subsectionid').append('<option value="'+data['subsecid']+'">'+data['subsectionname']+'</option>');
          			});
				}
        	});
    	});
	});
</script>

</body>
</html>


