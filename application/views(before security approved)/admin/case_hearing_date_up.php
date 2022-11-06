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
    jQuery(".pd").datepicker({dateFormat: 'yy-mm-dd'});
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
                  <h3 class="box-title">Hearing Date Case File</h3>
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
				 <form role="form" autocomplete="off" action="<?php echo base_url();?>Dashboard/hearing_date_case_file_insert" method="post" enctype="multipart/form-data">
                 	<input type="hidden" name="caseid" class="form-control" value="<?php echo $ul;?>">
                 	<div class="form-group">
						<label>Date<em>*</em></label>
                    	<input type="text" name="idate" class="form-control pd" value="<?php echo date("d-m-Y");?>">
                    	<?php /*?><?php echo form_error('idate', '<div class="error">', '</div>');  ?><?php */?>
					</div>
                    <div class="form-group">
                 		<label for="admissionfile">File</label>
                  		<input type="file" name="pic_file">
                	</div>
                 
                	
                    
                    
               </div>
                <!-- /.box-body -->
                	<div class="box-footer text-center">
                  		<input type="submit" class="btn btn-primary" name="submit" id="btn" value="Submit" />
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
     <table id="tableData" class="table table-hover table-bordered">
              <thead style="background:#91b9e6;">
                <tr>
                  <th>SL</th>
                  <th>ID</th>
                  <th>Case Number</th>
                  <th>Date</th>
                  <th>File</th>
                </tr>
                </thead>
                <tbody>
                <?php 
				$i=1;
				foreach($cl as $row)
				{ ?>
                <tr>
                  <td style="vertical-align:middle;"><?php echo $i++;?></td>
                  <td style="vertical-align:middle;"><?php echo $row['adcfid'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['casenumber'];?></td>
                  <td style="vertical-align:middle;"><?php echo date("d-m-Y", strtotime($row['hfdate']));?></td>
                  <?php
				  	if($row['hfile']=='')
					{
				  ?>
                  <td style="vertical-align:middle;">No File</td>
                  <?php
					}
					else
					{
				   ?>
                  <td style="vertical-align:middle;"><a target="_blank" href="<?php echo base_url().'assets/uploads/case/'.$row['hfile'];?>"><i class="fa fa-file"></i></a></td>
                  <?php
					}
					?>
                  
             	</tr>
                </tbody>
               <?php } ?>
              </table>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  
</div>
<!-- ./wrapper -->



</body>
</html>


