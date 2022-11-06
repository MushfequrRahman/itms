<script type="text/javascript">
$(function () {
    jQuery(".pd").datepicker({dateFormat: 'dd-mm-yy'});
	})
</script> 
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

 
  <!-- Left side column. contains the logo and sidebar -->
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
 

    <!-- Main content -->
   <section class="content">

      <div class="row">
        <div class="col-md-12">

          <!-- Profile Image -->
         
         
          
          <!-- /.box -->

          <!-- About Me Box -->
        
          <!-- /.box -->
        
        <!-- /.col -->
        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">License Details</a></li>
            
             
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
               
               <?php foreach($llup as $row)
				{ ?>
              <form role="form" action="<?php echo base_url();?>Dashboard/licenselup" method="post" enctype="multipart/form-data">
              <input type="hidden" class="form-control" name="licenseid" value="<?php echo $row['licenseid']; ?>">
              <div class="form-group">
					<label>Factory</label>
					<select class="form-control" name="factoryid" id="factoryid">
                    	<option value="">Select....</option>
                        <?php
						foreach($fl as $row3)
						{
					?>
                    		<option value="<?php echo $row3['factoryid'];?>"><?php echo $row3['factoryname'];?></option>
                    <?php
						}
					?>
                    </select>
                    <?php echo $row['factoryname']; ?>
                    <?php echo form_error('factoryid', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>License Name<em>*</em></label>
					<input type="text" class="form-control" name="licensename" value="<?php echo $row['licensename'];?>">
                    <?php echo form_error('licensename', '<div class="error">', '</div>');  ?>
				</div>
                
                <div class="form-group">
					<label>Regulatory Authority<em>*</em></label>
					<input type="text" class="form-control" name="reauthority" value="<?php echo $row['reauthority'];?>">
                    <?php echo form_error('reauthority', '<div class="error">', '</div>');  ?>
				</div>
                
                <div class="form-group">
					<label>Division<em>*</em></label>
					<select class="form-control" name="divisionid" id="divisionid">
                    	<option value="">Select....</option>
                        
                    </select>
                    <?php echo $row['divisionname']; ?>
				</div>
             	<div class="form-group">
					<label>Department<em>*</em></label>
						<select class="form-control" name="departmentid" id="departmentid">
                    		<option value="">Select....</option>
                        </select>
				</div>
                <?php echo $row['departmentname']; ?>
                <div class="form-group">
					<label>Issue Date<em>*</em></label>
                    <?php $issuedate = date("d-m-Y", strtotime($row['issuedate']));?>
					<input type="text" class="form-control pd" name="issuedate" value="<?php echo $issuedate;?>">
                    <?php /*?><?php echo form_error('dobdate', '<div class="error">', '</div>');  ?><?php */?>
				</div>
                <?php $renewaldate = date("d-m-Y", strtotime($renewaldate=$row['renewaldate']));?>
                <div class="form-group">
					<label>Next Renewal Date<em>*</em></label>
					<input type="text" class="form-control pd" name="renewaldate" value="<?php echo $renewaldate;?>">
                    <?php /*?><?php echo form_error('dobdate', '<div class="error">', '</div>');  ?><?php */?>
				</div>
				 <div class="form-group">
					<label>Processing Time<em>*</em></label>
					<input type="text" class="form-control" name="processtime" value="<?php echo $row['processingtime'];?>">
                    <?php echo form_error('processtime', '<div class="error">', '</div>');  ?>
				</div>
				 <div class="form-group">
					<label>Regulatory Fee<em>*</em></label>
					<input type="text" class="form-control" name="regulatoryfee" value="<?php echo $row['regulatoryfee'];?>">
                    <?php echo form_error('regulatoryfee', '<div class="error">', '</div>');  ?>
				</div>
                 <div class="form-group">
					<label>Mi. Exp<em>*</em></label>
					<input type="text" class="form-control" name="misexp" value="<?php echo $row['misexp'];?>">
                    <?php echo form_error('misexp', '<div class="error">', '</div>');  ?>
				</div>
                
                
                
                
                
				
                
                
               
               
               
				
                
				
				
				
				
               
    
                

             
                  <!-- /.users-list -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <input type="submit" class="btn btn-primary" name="submit" value="Submit" />
                </div>
				 </form>
					
				<?php } ?>	
              </div>
             

              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
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
