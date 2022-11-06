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
                  <h3 class="box-title">Tax Token Info Insert</h3>
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
				 <form role="form" autocomplete="off" action="<?php echo base_url();?>Dashboard/vtaxtoken_insert" method="post" enctype="multipart/form-data">
                 <div class="form-group">
					<label>Tax Token Number<em>*</em></label>
                 	<input type="text" class="form-control" name="taxtoken" placeholder="Tax Token Number">
                	<?php echo form_error('taxtoken', '<div class="error">', '</div>');  ?>
				</div>
                 <div class="form-group">
					<label>Vehicle Number<em>*</em></label>
                 	<input type="text" class="form-control" name="vehicleno" placeholder="Vehicle Number">
                	<?php echo form_error('vehicleno', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Company Address<em>*</em></label>
                 	<input type="text" class="form-control" name="caddress" placeholder="Company Address">
                	<?php echo form_error('caddress', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Cost<em>*</em></label>
                 	<input type="text" class="form-control" name="cost" placeholder="Cost">
                	<?php echo form_error('cost', '<div class="error">', '</div>');  ?>
				</div> 
                <div class="form-group">
					<label>Issue Date<em>*</em></label>
                 	<input type="text" class="form-control pd" name="idate" value="<?php echo date('d-m-Y');?>">
                	<?php echo form_error('idate', '<div class="error">', '</div>');  ?>
				</div>
               	<div class="form-group">
					<label>Expire Date<em>*</em></label>
                 	<input type="text" class="form-control pd" name="edate" value="<?php echo date('d-m-Y');?>">
                	<?php echo form_error('edate', '<div class="error">', '</div>');  ?>
				</div>
				
                
				<div class="form-group">
                  <label for="employeefile">File</label>
                  <input type="file" name="pic_file">
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






</body>
</html>


