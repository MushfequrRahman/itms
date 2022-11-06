
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
              <li class="active"><a href="#activity" data-toggle="tab">Gender Details</a></li>
            
             
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
               
               <?php foreach($ul as $row)
				{ ?>
              <form role="form" action="<?php echo base_url();?>Dashboard/informationcollectlup" method="post" enctype="multipart/form-data">
              	<input type="hidden" class="form-control" name="incid" value="<?php echo $row['incid']; ?>">
              
              <div class="form-group">
                  <label>ID</label>
                  <input type="text" class="form-control" name="userid" value="<?php echo $row['userid']; ?>">
                  
                </div>
				
				<div class="form-group">
					<label>Box</label>
					<input type="text" class="form-control" name="box" value="<?php echo $row['box']; ?>">
                    <?php echo form_error('box', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Name</label>
					<input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>">
                    <?php echo form_error('name', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Mobile</label>
					<input type="text" class="form-control" name="mobile" value="<?php echo $row['mobile']; ?>">
                    <?php echo form_error('mobile', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Mobile</label>
					<input type="text" class="form-control" name="pfactory" value="<?php echo $row['pfactory']; ?>">
                    <?php echo form_error('pfactory', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Designation</label>
					<input type="text" class="form-control" name="designation" value="<?php echo $row['designation']; ?>">
                    <?php echo form_error('designation', '<div class="error">', '</div>');  ?>
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


