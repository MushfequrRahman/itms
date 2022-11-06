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
              <li class="active"><a href="#activity" data-toggle="tab">Case Details</a></li>
            
             
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
               
               <?php foreach($ul as $row)
				{ ?>
              <form role="form" action="<?php echo base_url();?>Dashboard/caselup" method="post" enctype="multipart/form-data">
              <input type="hidden" class="form-control" name="caseid" value="<?php echo $row['caseid']; ?>">
              <div class="form-group">
						<label>Incident Date<em>*</em></label>
                    	<input type="text" name="idate" class="form-control pd" value="<?php echo date("d-m-Y", strtotime($row['idate']));?>">
                    	<?php /*?><?php echo form_error('idate', '<div class="error">', '</div>');  ?><?php */?>
					</div>
                    <div class="form-group">
						<label>Factory<em>*</em></label>
						<select class="form-control" name="factoryid" id="factoryid">
                    		<option value="<?php echo $row['factoryid'];?>"><?php echo $row['factoryid'];?></option>
                        	<?php
								foreach($allf as $row1)
								{
							?>
                    				<option value="<?php echo $row1['factoryid'];?>"><?php echo $row1['factoryname'];?></option>
                    		<?php
								}
							?>
                    	</select>
                    	<?php /*?><?php echo form_error('factoryid', '<div class="error">', '</div>');  ?><?php */?>
					</div>
                 
                	<div class="form-group">
						<label>Opponent/Party<em>*</em></label>
						<input type="text" class="form-control" name="opponent" id="opponent" value="<?php echo $row['opponent'];?>">
					</div>
                    <div class="form-group">
						<label>Lawyer Name<em>*</em></label>
						<input type="text" class="form-control" name="lawyer" id="lawyer" value="<?php echo $row['lawyer'];?>">
					</div>
                    <div class="form-group">
						<label>Case Details<em>*</em></label>
					 	<textarea class="form-control"  name="casedetails" rows="5" id="casedetails"><?php echo $row['casedetails'];?></textarea>
                    </div>
                    <div class="form-group">
						<label>Court Name<em>*</em></label>
						<input type="text" class="form-control" name="courtname" id="courtname" value="<?php echo $row['courtname'];?>">
					</div>
                    <div class="form-group">
						<label>Case Type<em>*</em></label>
						<select class="form-control" name="casetypeid" id="casetypeid">
                    		<option value="<?php echo $row['casetypeid'];?>"><?php echo $row['casetype'];?></option>
                        	<?php
								foreach($cl as $row2)
								{
							?>
                    				<option value="<?php echo $row2['casetypeid'];?>"><?php echo $row2['casetype'];?></option>
                    		<?php
								}
							?>
                    	</select>
                    	
					</div>
                    <div class="form-group">
						<label>Case Number<em>*</em></label>
						<input type="text" class="form-control" name="casenumber" id="casenumber" value="<?php echo $row['casenumber'];?>">
					</div>
                    <div class="form-group">
						<label>Admission Date<em>*</em></label>
                    	<input type="text" name="adate" class="form-control pd" value="<?php echo date("d-m-Y", strtotime($row['adate']));?>">
                    	<?php /*?><?php echo form_error('idate', '<div class="error">', '</div>');  ?><?php */?>
					</div>
                    <div class="form-group">
						<label>Case Status<em>*</em></label>
						<input type="text" class="form-control" name="cstatus" id="cstatus" value="<?php echo $row['cstatus'];?>">
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


