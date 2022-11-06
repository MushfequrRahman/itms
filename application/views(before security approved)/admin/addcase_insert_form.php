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
                  <h3 class="box-title">Add Case</h3>
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
				 <form role="form" autocomplete="off" action="<?php echo base_url();?>Dashboard/addcase_insert" method="post" enctype="multipart/form-data">
                 	<div class="form-group">
						<label>Incident Date<em>*</em></label>
                    	<input type="text" name="idate" class="form-control pd" value="<?php echo date("d-m-Y");?>">
                    	<?php /*?><?php echo form_error('idate', '<div class="error">', '</div>');  ?><?php */?>
					</div>
                    <div class="form-group">
						<label>Factory<em>*</em></label>
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
                    	<?php /*?><?php echo form_error('factoryid', '<div class="error">', '</div>');  ?><?php */?>
					</div>
                 
                	<div class="form-group">
						<label>Opponent/Party<em>*</em></label>
						<input type="text" class="form-control" name="opponent" id="opponent" placeholder="Enter Opponent/Party">
					</div>
                    <div class="form-group">
						<label>Lawyer Name<em>*</em></label>
						<input type="text" class="form-control" name="lawyer" id="lawyer" placeholder="Enter Lawyer Name">
					</div>
                    <div class="form-group">
						<label>Case Details<em>*</em></label>
					 	<textarea class="form-control"  name="casedetails" rows="5" id="casedetails"></textarea>
                    </div>
                    <div class="form-group">
						<label>Court Name<em>*</em></label>
						<input type="text" class="form-control" name="courtname" id="courtname" placeholder="Enter Court Name">
					</div>
                    <div class="form-group">
						<label>Case Type<em>*</em></label>
						<select class="form-control" name="casetypeid" id="casetypeid">
                    		<option value="">Select....</option>
                        	<?php
								foreach($cl as $row)
								{
							?>
                    				<option value="<?php echo $row['casetypeid'];?>"><?php echo $row['casetype'];?></option>
                    		<?php
								}
							?>
                    	</select>
                    	
					</div>
                    <div class="form-group">
						<label>Case Number<em>*</em></label>
						<input type="text" class="form-control" name="casenumber" id="casenumber" placeholder="Enter Case Number">
					</div>
                    <div class="form-group">
						<label>Admission Date<em>*</em></label>
                    	<input type="text" name="adate" class="form-control pd" value="<?php echo date("d-m-Y");?>">
                    	<?php /*?><?php echo form_error('idate', '<div class="error">', '</div>');  ?><?php */?>
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
      <div id="ajax-content-container">
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  
</div>
<!-- ./wrapper -->
<?php /*?><script>
    $(document).ready(function(){
        $( "#btn" ).click(function(event)
        {
            event.preventDefault();
            var userid= $("#userid").val();
alert(userid);
            $.ajax(
                {
                    type:'post',
                    url: '<?php echo base_url(); ?>Dashboard/specialemp_insert',
					dataType:"text",
                    data:{ userid:userid},
					      success: function(data) 
						  	{
       					  		$('#ajax-content-container').html(data);
								
      						},
	  					error: function(){
    					alert('error!');
  				}
                    
                });
        });
    });
</script><?php */?>


</body>
</html>


