
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
              <li class="active"><a href="#activity" data-toggle="tab">User Details</a></li>
            
             
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
               
               <?php foreach($dlup as $row)
				{ ?>
              <form role="form" autocomplete="off" action="<?php echo base_url();?>Dashboard/baslagriuserlup" method="post" enctype="multipart/form-data">
                 
                <div class="form-group">
					<label>User ID<em>*</em></label>
					<input type="text" class="form-control" readonly name="userid" value="<?php echo $row['userid'];?>">
                    <?php echo form_error('userid', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>User Name<em>*</em></label>
					<input type="text" class="form-control" readonly value="<?php echo $row['ename'];?>">
                    <?php echo form_error('userid', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Region Name<em>*</em></label>
					<select class="form-control" name="regionid" id="regionid">
                    	<option value="<?php echo $row['regionid'];?>"><?php echo $row['regionname'];?></option>
                        <?php
						foreach($rl as $row1)
						{
					?>
                    		<option value="<?php echo $row1['regionid'];?>"><?php echo $row1['regionname'];?></option>
                    <?php
						}
					?>
                    </select>
                    <?php echo form_error('regionid', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Area Name<em>*</em></label>
					<select class="form-control" name="areaid" id="areaid">
                    	<option value="<?php echo $row['areaid'];?>"><?php echo $row['areaname'];?></option>
                        <?php /*?><?php
						foreach($al as $row2)
						{
					?>
                    		<option value="<?php echo $row2['areaid'];?>"><?php echo $row2['areaname'];?></option>
                    <?php
						}
					?><?php */?>
                    </select>
                    <?php echo form_error('areaid', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Territory Name<em>*</em></label>
					<select class="form-control" name="territoryid" id="territoryid">
                    	<option value="<?php echo $row['territoryid'];?>"><?php echo $row['territoryname'];?></option>
                        <?php /*?><?php
						foreach($al as $row2)
						{
					?>
                    		<option value="<?php echo $row2['areaid'];?>"><?php echo $row2['areaname'];?></option>
                    <?php
						}
					?><?php */?>
                    </select>
                    <?php echo form_error('areaid', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Position Name<em>*</em></label>
					<select class="form-control" name="positionid" id="positionid">
                    	<option value="<?php echo $row['positionid'];?>"><?php echo $row['positionname'];?></option>
                        <?php
						foreach($pl as $row2)
						{
					?>
                    		<option value="<?php echo $row2['positionid'];?>"><?php echo $row2['positionname'];?></option>
                    <?php
						}
					?>
                    </select>
                    <?php echo form_error('positionid', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Work Area Name<em>*</em></label>
					<select class="form-control" name="baslagriwlid" id="baslagriwlid">
                    	<option value="<?php echo $row['baslagriwlid'];?>"><?php echo $row['name'];?></option>
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
					//$('#areaid').find('option').remove();
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
					$('#territoryid').find('option').not(':first').remove();
				 	// Add options
          			$.each(res,function(index,data){
				  	$('#territoryid').append('<option value="'+data['territoryid']+'">'+data['territoryname']+'</option>');
          			});
				}
        	});
    	});
	});
</script>
</body>
</html>

