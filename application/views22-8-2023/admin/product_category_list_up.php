
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
              <li class="active"><a href="#activity" data-toggle="tab">Product Category</a></li>
            
             
            </ul>
            <div class="tab-content">
              
               
               <?php foreach($plup as $row)
				{ ?>
              <form role="form" action="<?php echo base_url();?>Dashboard/productcategorylup" method="post" enctype="multipart/form-data">
              
              <div class="form-group">
                  
                  <input type="hidden" class="form-control" name="pccode" value="<?php echo $row['pccode']; ?>">
                  
                </div>
				
				<div class="form-group">
					<label>Name</label>
					<input type="text" class="form-control" name="pcname" value="<?php echo $row['pcname']; ?>">
                    <?php echo form_error('pcname', '<div class="error">', '</div>');  ?>
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


