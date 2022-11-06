<script type="text/javascript">
$(function () {
    jQuery(".pd").datepicker({dateFormat: 'yy-mm-dd'});
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
              <li class="active"><a href="#activity" data-toggle="tab">Buyer Details</a></li>
            
             
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
               
               <?php foreach($blup as $row)
				{ ?>
              <form role="form" action="<?php echo base_url();?>Dashboard/blup" method="post" enctype="multipart/form-data">
              <input type="hidden" class="form-control" name="buyer" value="<?php echo $row['buyername']; ?>">
              <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" name="buyername" value="<?php echo $row['buyername']; ?>">
                  <?php echo form_error('buyername', '<div class="error">', '</div>');  ?>
                </div>
				
				<div class="form-group">
					<label>Origin</label>
					<input type="text" class="form-control" name="origin" value="<?php echo $row['origin']; ?>">
                    <?php echo form_error('origin', '<div class="error">', '</div>');  ?>
				</div>
				<div class="form-group">
					<label>Local Address</label>
					<input type="text" class="form-control" name="local_address" value="<?php echo $row['local_address']; ?>">
                    <?php echo form_error('local_address', '<div class="error">', '</div>');  ?>
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


