
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
              <li class="active"><a href="#activity" data-toggle="tab">Child Designation Details</a></li>
            
             
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
               
               <?php foreach($dlup as $row)
				{ ?>
              <form role="form" action="<?php echo base_url();?>Dashboard/childdesignationlup" method="post" enctype="multipart/form-data">
              
              <div class="form-group">
                  <label>ID</label>
                  <input type="text" class="form-control" readonly name="childdesignationid" value="<?php echo $row['childdesignationid']; ?>">
                  
                </div>
				
				<div class="form-group">
					<label>Parent Designation</label>
					<input type="text" class="form-control" readonly name="parentdesignation" value="<?php echo $row['eparentdesignation']; ?>">
                    <?php echo form_error('parentdesignation', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Child Designation</label>
					<input type="text" class="form-control" name="echilddesignation" value="<?php echo $row['echilddesignation']; ?>">
                    <?php echo form_error('echilddesignation', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Child Designation</label>
					<input type="text" class="form-control" name="bchilddesignation" value="<?php echo $row['bchilddesignation']; ?>">
                    <?php echo form_error('bchilddesignation', '<div class="error">', '</div>');  ?>
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


