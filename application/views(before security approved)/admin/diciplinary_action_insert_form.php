<style>
.error{color:red;}
em{color:red;}
</style>
<script type="text/javascript">
$(function () {
    jQuery(".pd").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery(".wd").datepicker({dateFormat: 'yy-mm-dd'});
	//jQuery("#pd_2").datepicker({dateFormat: 'dd-mm-yy'});
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
                  <h3 class="box-title">Disciplinary Action</h3>
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
                <div class="box-body">
				 <form role="form" autocomplete="off" action="<?php echo base_url();?>Dashboard/diciplinary_action_insert" method="post" enctype="multipart/form-data">
                 <?php $userid=$this->session->userdata('userid'); ?>
                 <input type="hidden" class="form-control" name="userid" id="userid" value="<?php echo $userid; ?>">
                 <div class="form-group">
					<label>Date<em>*</em></label>
                 	<input type="text" class="form-control pd" name="dadate" placeholder="Enter Date">
                </div>
                <div class="form-group">
					<label>Factory Name<em>*</em></label>
					<select class="form-control" name="factoryid" id="factoryid">
                    	<option value="">Select....</option>
                        <?php
						foreach($allf as $row)
						{
					?>
                    		<option value="<?php echo $row['factoryid'];?>"><?php echo $row['factoryname'];?></option>
                    <?php
						}
					?>
                    </select>
                    <?php echo form_error('factoryid', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>ID Of Reporter<em>*</em></label>
					<input type="text" class="form-control" name="nameofreporterid" placeholder="Reporter ID">
                    <?php echo form_error('nameofreporterid', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Primary Investigation By<em>*</em></label>
					<input type="text" class="form-control" name="primaryinvestigationbyid" placeholder="Investigation By ID">
                    <?php echo form_error('primaryinvestigationbyid', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Date Of Primary Investigation<em>*</em></label>
                 	<input type="text" class="form-control pd" name="pidate" placeholder="Enter Date">
                </div>
                <div class="form-group">
					<label>Accused ID<em>*</em></label>
					<input type="text" class="form-control" name="accusedid" placeholder="Accused ID">
                    <?php echo form_error('accusedid', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Victim ID<em>*</em></label>
					<input type="text" class="form-control" name="victimid" placeholder="Victim ID">
                    <?php echo form_error('victimid', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Incident Details<em>*</em></label>
					 <textarea class="form-control"  name="abusedforneg" rows="5" id="abusedforneg"></textarea>
                    <?php echo form_error('abusedforneg', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Date OF Info Fac.Head/HOD<em>*</em></label>
                 	<input type="text" class="form-control pd" name="doinfachoddate" placeholder="Enter Date">
                </div>
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


