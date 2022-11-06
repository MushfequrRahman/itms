<style>
.error{color:red;}
em{color:red;}
#tableData {
  
 
  text-align:center;
}
th,td{font-size:14px;text-align:center;}
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
                  <h3 class="box-title">CSR File</h3>
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
                <h3 class="text-center">Image</h3>
                <div class="box-body ">
				 <form role="form" autocomplete="off" action="<?php echo base_url();?>Dashboard/csrimage_insert" method="post" enctype="multipart/form-data">
                 	<input type="hidden" name="csrid" class="form-control" value="<?php echo $ul;?>">
                 	<div class="form-group">
						<label>Date<em>*</em></label>
                    	<input type="text" name="sdate" class="form-control pd" value="<?php echo date("d-m-Y");?>">
                    	<?php /*?><?php echo form_error('idate', '<div class="error">', '</div>');  ?><?php */?>
					</div>
                    <div class="form-group">
                 		<label for="admissionfile">File</label>
                  		<input type="file" name="pic_file">
                	</div>
             	
                <!-- /.box-body -->
                	<div class="box-footer text-center">
                  		<input type="submit" class="btn btn-primary" name="submit" id="btn" value="Submit" />
                	</div>
				 </form>
                 </div>
                 <h3 class="text-center">Comments</h3>
                 <div class="box-body ">
				 <form role="form" autocomplete="off" action="<?php echo base_url();?>Dashboard/csrnotice_insert" method="post" enctype="multipart/form-data">
                 	<input type="hidden" name="csrid" class="form-control" value="<?php echo $ul;?>">
                 	<div class="form-group">
						<label>Date<em>*</em></label>
                    	<input type="text" name="sdate" class="form-control pd" value="<?php echo date("d-m-Y");?>">
                    	<?php /*?><?php echo form_error('idate', '<div class="error">', '</div>');  ?><?php */?>
					</div>
                    <div class="form-group">
						<label>Comments<em>*</em></label>
                    	<input type="text" name="csrcomments" class="form-control" placeholder="Enter Comments....">
                    	<?php /*?><?php echo form_error('idate', '<div class="error">', '</div>');  ?><?php */?>
					</div>
             	
                <!-- /.box-body -->
                	<div class="box-footer text-center">
                  		<input type="submit" class="btn btn-primary" name="submit" id="btn" value="Submit" />
                	</div>
				 </form>
                 </div>
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


