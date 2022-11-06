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
                  <h3 class="box-title">Challanges Insert</h3>
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
				 <form role="form" autocomplete="off" action="<?php echo base_url();?>Dashboard/challanges_insert" method="post" enctype="multipart/form-data">
                 <?php /*?><input type="hidden" name="userid" value="<?php echo $this->session->userdata('userid');?>"><?php */?>
                 <div class="form-group">
					<label>Type<em>*</em></label>
					<select class="form-control" name="issuetypeid" id="issuetypeid">
                    	<option value="">Select....</option>
                        <?php
						foreach($il as $row)
						{
					?>
                    		<option value="<?php echo $row['issuetypeid'];?>"><?php echo $row['issuetype'];?></option>
                    <?php
						}
					?>
                    </select>
                    <?php echo form_error('issuetypeid', '<div class="error">', '</div>');  ?>
				 </div>
                 <div class="form-group">
					<label>Details<em>*</em></label>
					 <textarea class="form-control"  name="details" rows="5" id="details"></textarea>
                    <?php echo form_error('details', '<div class="error">', '</div>');  ?>
				 </div>
                 <div class="form-group">
					<label>Zone<em>*</em></label>
					 <input type="text" class="form-control" name="zone" placeholder="Enter Zone">
                    <?php echo form_error('zone', '<div class="error">', '</div>');  ?>
				 </div>
                 <div class="form-group">
					<label>Place<em>*</em></label>
					 <input type="text" class="form-control" name="place" placeholder="Enter Place">
                    <?php echo form_error('place', '<div class="error">', '</div>');  ?>
				 </div>
                 <div class="form-group">
					<label>Desired Result<em>*</em></label>
					 <textarea class="form-control"  name="dl" rows="5" id="dl"></textarea>
                    <?php echo form_error('dl', '<div class="error">', '</div>');  ?>
				 </div>
                 <div class="form-group">
					<label>FPR(First Person Responsible)<em>*</em></label>
					 <input type="text" class="form-control" name="fpr" placeholder="Enter User ID">
                    <?php echo form_error('fpr', '<div class="error">', '</div>');  ?>
				 </div>
				 <div class="form-group">
					<label>Present Status<em>*</em></label>
					 <textarea class="form-control"  name="ps" rows="5" id="ps"></textarea>
                    <?php echo form_error('ps', '<div class="error">', '</div>');  ?>
				 </div>
                 <div class="form-group">
					<label>Issue History<em>*</em></label>
					 <textarea class="form-control"  name="ih" rows="5" id="ih"></textarea>
                    <?php echo form_error('ih', '<div class="error">', '</div>');  ?>
				 </div>
                 <div class="form-group">
					<label>Remarks<em>*</em></label>
					 <textarea class="form-control"  name="remarks" rows="5" id="remarks"></textarea>
                    <?php echo form_error('remarks', '<div class="error">', '</div>');  ?>
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


