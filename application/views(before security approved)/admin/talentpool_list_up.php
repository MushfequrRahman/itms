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
                  <h3 class="box-title">User Info Insert</h3>
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
                <?php foreach($ul as $row)
				{ ?>
				 <form role="form" action="<?php echo base_url();?>Dashboard/talentpoollup" method="post" enctype="multipart/form-data">
                 <div class="form-group">
					
					<input type="text" readonly class="form-control" name="talentpoolid" value="<?php echo $row['talentpoolid'];?>">
                    <?php echo form_error('talentpoolid', '<div class="error">', '</div>');  ?>
				</div>
                  <div class="form-group">
					<label>Factory Name<em>*</em></label>
					<select class="form-control" name="factoryid" id="factoryid">
                    	<option value="<?php echo $row['factoryid'];?>"><?php echo $row['factoryname'];?></option>
                        <?php
						foreach($allf as $row1)
						{
					?>
                    		<option value="<?php echo $row1['factoryid'];?>"><?php echo $row1['factoryname'];?></option>
                    <?php
						}
					?>
                    </select>
                    <?php echo form_error('factoryid', '<div class="error">', '</div>');  ?>
				</div>
                 <div class="form-group">
					<label>Division<em>*</em></label>
					<select class="form-control" name="divisionid" id="divisionid">
                    	<option value="<?php echo $row['divisionid']; ?>"><?php echo $row['divisionname']; ?></option>
                        
                    </select>
                    
				</div>
				<div class="form-group">
					<label>Department<em>*</em></label>
						<select class="form-control" name="departmentid" id="departmentid">
                    		<option value="<?php echo $row['deptid']; ?>"><?php echo $row['departmentname']; ?></option>
                        </select>
				</div>
                <div class="form-group">
					<label>Section<em>*</em></label>
						<select class="form-control" name="sectionid" id="sectionid">
                    		<option value="<?php echo $row['secid']; ?>"><?php echo $row['sectionname']; ?></option>
                        </select>
				</div>
                <div class="form-group">
					<label>Sub Section<em>*</em></label>
						<select class="form-control" name="subsectionid" id="subsectionid">
                    		<option value="<?php echo $row['subsecid']; ?>"><?php echo $row['subsectionname']; ?></option>
                        </select>
				</div>
                
                <div class="form-group">
					<label>Name(English)<em>*</em></label>
					<input type="text" class="form-control" name="ename" value="<?php echo $row['ename'];?>">
                    <?php echo form_error('ename', '<div class="error">', '</div>');  ?>
				</div>
               
                
                <div class="form-group">
					<label>Designation<em>*</em></label>
					<select class="form-control" name="parentdesignationid" id="parentdesignationid">
                    	<option value="<?php echo $row['parentdesignationid'];?>"><?php echo $row['eparentdesignation'];?></option>
                        <?php
						foreach($ul as $row2)
						{
					?>
                    		<option value="<?php echo $row2['parentdesignationid'];?>"><?php echo $row2['eparentdesignation'];?></option>
                    <?php
						}
					?>
                    </select>
                    <?php echo form_error('parentdesignationid', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Sub Designation<em>*</em></label>
						<select class="form-control" name="childdesignationid" id="childdesignationid">
                    		<option value="<?php echo $row['childdesignationid'];?>"><?php echo $row['echilddesignation'];?></option>
                        </select>
				</div>
				
                <div class="form-group">
					<label>Religion<em>*</em></label>
					<select class="form-control" name="religion" id="religion">
                    	<option value="<?php echo $row['religionid'];?>"><?php echo $row['religionname'];?></option>
                        <?php
						foreach($rul as $row3)
						{
					?>
                    		<option value="<?php echo $row3['religionid'];?>"><?php echo $row3['religionname'];?></option>
                    <?php
						}
					?>
                    </select>
                    <?php echo form_error('religionid', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Maritual Status<em>*</em></label>
					<select class="form-control" name="maritual" id="maritual">
                    	<option value="<?php echo $row['maritual'];?>"><?php echo $row['maritualstatus'];?></option>
                        <?php
						foreach($mul as $row4)
						{
					?>
                    		<option value="<?php echo $row4['maritual'];?>"><?php echo $row4['maritualstatus'];?></option>
                    <?php
						}
					?>
                    </select>
                    <?php echo form_error('maritualstatusid', '<div class="error">', '</div>');  ?>
				</div>
				<div class="form-group">
					<label>Gender<em>*</em></label>
					<select class="form-control" name="gender" id="gender">
                    	<option value="<?php echo $row['genderid'];?>"><?php echo $row['gender'];?></option>
                        <?php
						foreach($gul as $row5)
						{
					?>
                    		<option value="<?php echo $row5['genderid'];?>"><?php echo $row5['gender'];?></option>
                    <?php
						}
					?>
                    </select>
                    <?php echo form_error('genderid', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Salary<em>*</em></label>
					<input type="text" class="form-control" name="salary" value="<?php echo $row['salary'];?>">
                    <?php echo form_error('salary', '<div class="error">', '</div>');  ?>
				</div>
               
                <div class="form-group">
					<label>Personal Email<em>*</em></label>
					<input type="text" class="form-control" name="pemail" value="<?php echo $row['pemail'];?>">
                    <?php echo form_error('pemail', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Personal Mobile<em>*</em></label>
					<input type="text" class="form-control" name="pmobile" value="<?php echo $row['pmobile'];?>">
                    <?php echo form_error('pmobile', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>File No<em>*</em></label>
					<input type="text" class="form-control" name="fileno" value="<?php echo $row['fileno'];?>">
                    <?php echo form_error('fileno', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Status(0=Not Recruited || 1=Recruited)<em>*</em></label>
					<input type="text" class="form-control" name="tstatus" value="<?php echo $row['tstatus'];?>">
                    <?php echo form_error('tstatus', '<div class="error">', '</div>');  ?>
				</div>
               
               
				
				
				

				 
				
				
                
  
               
               
    
                

             
                  <!-- /.users-list -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <input type="submit" class="btn btn-primary" name="submit" value="Submit" />
                </div>
				 </form>
                 <?php } ?>	
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
<script type="text/javascript">
$(document).ready(function(){

    $('#parentdesignationid').change(function(event){
        event.preventDefault();
		var parentdesignationid = $('#parentdesignationid').val();

        $.ajax({
            type:'get',
            url:"<?php echo base_url(); ?>Dashboard/show_childdesignationname",
			dataType:"json",
                    data:{ parentdesignationid:parentdesignationid},
            success:function(res)
            	{
         		 	$('#childdesignationid').find('option').not(':first').remove();;
				 	// Add options
          			$.each(res,function(index,data){
				  	$('#childdesignationid').append('<option value="'+data['childdesignationid']+'">'+data['echilddesignation']+'</option>');
          			});
				}
        	});
    	});
	});
</script>

</body>
</html>


