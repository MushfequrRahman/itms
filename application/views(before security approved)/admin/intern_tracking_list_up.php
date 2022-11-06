<script type="text/javascript">
$(function () {
    jQuery(".pd").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery(".wd").datepicker({dateFormat: 'dd-mm-yy'});
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
              <li class="active"><a href="#activity" data-toggle="tab">Intern Tracking List</a></li>
            
             
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
               
               <?php foreach($ul as $row)
				{ ?>
              <form role="form" action="<?php echo base_url();?>Dashboard/interntrackinglup" method="post" enctype="multipart/form-data">
              	<input type="hidden" class="form-control" name="itid" value="<?php echo $row['itid']; ?>">
              
              	<?php /*?><div class="form-group">
                  <label>ID</label>
                  <input type="text" class="form-control" name="factoryid" value="<?php echo $row['factoryid']; ?>">
                  
                </div><?php */?>
                <div class="form-group">
					<label>Factory Name<em>*</em></label>
					<select class="form-control" name="factoryid" id="factoryid">
                    	<option value="<?php echo $row['factoryid'];?>"><?php echo $row['factoryname'];?></option>
                        <?php
						foreach($fl as $row1)
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
					<label>Name</label>
					<input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>">
                    <?php echo form_error('name', '<div class="error">', '</div>');  ?>
				</div>
                <?php /*?><div class="form-group">
					<label>Department</label>
					<input type="text" class="form-control" name="did" value="<?php echo $row['departmentname']; ?>">
                    <?php echo form_error('did', '<div class="error">', '</div>');  ?>
				</div><?php */?>
                <div class="form-group">
					<label>Department<em>*</em></label>
					<select class="form-control" name="did" id="factoryid">
                    	<option value="<?php echo $row['deptid'];?>"><?php echo $row['departmentname'];?></option>
                        <?php
						foreach($dl as $row2)
						{
					?>
                    		<option value="<?php echo $row2['deptid'];?>"><?php echo $row2['departmentname'];?></option>
                    <?php
						}
					?>
                    </select>
                    <?php echo form_error('deptid', '<div class="error">', '</div>');  ?>
				 </div>
                <div class="form-group">
					<label>Start Date</label>
					<input type="text" class="form-control pd" name="sdate" value="<?php echo $row['sdate']; ?>">
                    <?php echo form_error('sdate', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Duration</label>
					<input type="text" class="form-control" name="duration" value="<?php echo $row['duration']; ?>">
                    <?php echo form_error('duration', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Major Subject</label>
					<input type="text" class="form-control" name="msubject" value="<?php echo $row['msubject']; ?>">
                    <?php echo form_error('msubject', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>University</label>
					<input type="text" class="form-control" name="uni" value="<?php echo $row['uni']; ?>">
                    <?php echo form_error('uni', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Mobile</label>
					<input type="text" class="form-control" name="mobile" value="<?php echo $row['mobile']; ?>">
                    <?php echo form_error('mobile', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Report Submission Date<em>*</em></label>
					<input type="text" class="form-control pd" name="rdate" value="<?php echo $row['rdate']; ?>">
                    
				</div>
                <div class="form-group">
					<label>Thesis Submission Date<em>*</em></label>
					<input type="text" class="form-control pd" name="tsdate" value="<?php echo $row['tsdate']; ?>">
                    
				</div>
                <div class="form-group">
					<label>Thesis Submission Date<em>*</em></label>
					<input type="text" class="form-control pd" name="icidate" value="<?php echo $row['icidate']; ?>">
                    
				</div>
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


