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
                  <h3 class="box-title">Incentive & Others Summary</h3>
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
				 
                    
                	<?php /*?><div class="form-group">
					<label>Start Date<em>*</em></label>
					<input type="text" class="form-control pd"  id="pd" value="<?php echo date('d-m-Y');?>">
                    
				</div>
                <div class="form-group">
					<label>End Date<em>*</em></label>
					
                    <input type="text" class="form-control wd"  id="wd" value="<?php echo date('d-m-Y');?>">
				</div><?php */?>
                <div class="form-group">
					<label>Month<em>*</em></label>
					<select class="form-control" name="mo" id="mo">
                    	<option value="">Select</option>
                        <?php
						foreach($mo as $row)
						{
					?>
                    		<option value="<?php echo $row['ttmonth'];?>"><?php echo $row['ttmonth'];?></option>
                    <?php
						}
					?>
                    </select>
                    <?php echo form_error('ttmonth', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Year<em>*</em></label>
					<select class="form-control" name="yr" id="yr">
                    	<option value="">Select</option>
                        <?php
						foreach($yr as $row)
						{
					?>
                    		<option value="<?php echo $row['ttyear'];?>"><?php echo $row['ttyear'];?></option>
                    <?php
						}
					?>
                    </select>
                    <?php echo form_error('ttyear', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Position<em>*</em></label>
					<select class="form-control" name="positionid" id="positionid">
                    	<option value="">Select</option>
                        <?php
						foreach($pl as $row)
						{
					?>
                    		<option value="<?php echo $row['positionid'];?>"><?php echo $row['positionname'];?></option>
                    <?php
						}
					?>
                    </select>
                    <?php echo form_error('positionid', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Territory<em>*</em></label>
					<select class="form-control" name="territoryid" id="territoryid">
                    	<option value="">Select</option>
                        <?php
						foreach($tl as $row)
						{
					?>
                    		<option value="<?php echo $row['territoryid'];?>"><?php echo $row['areaname']."----".$row['territoryname'];?></option>
                    <?php
						}
					?>
                    </select>
                    <?php echo form_error('territoryid', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>User<em>*</em></label>
					<select class="form-control" name="userid" id="userid">
                    	<option value="">Select</option>
                        <?php
						foreach($us as $row)
						{
					?>
                    		<option value="<?php echo $row['userid'];?>"><?php echo $row['userid']."----".$row['ename'];?></option>
                    <?php
						}
					?>
                    </select>
                    <?php echo form_error('userid', '<div class="error">', '</div>');  ?>
				</div>
               </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <input type="submit" class="btn btn-primary" name="submit" id="btn" value="Submit" />
                </div>
				 <!--</form>-->
                <!-- /.box-footer -->
                 <div id="ajax-content-container">
     			 </div>
                 <div id="ajax-content-container21">
     			 </div>
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
     <!-- <div id="ajax-content-container">
      </div>-->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  
</div>
<!-- ./wrapper -->
<script>
    $(document).ready(function(){
        $( "#btn" ).click(function(event)
        {
            event.preventDefault();
            //var pd= $("#pd").val();
			//var wd= $("#wd").val();
			var mo= $("#mo").val();
			var yr= $("#yr").val();
			var positionid= $("#positionid").val();
			var territoryid= $("#territoryid").val();
			var userid= $("#userid").val();
			
            $.ajax(
                {
                    type:'post',
                    url: '<?php echo base_url(); ?>Dashboard/date_wise_baslagri_incentive_summary',
					dataType:"text",
                    data:{ mo:mo,yr:yr,positionid:positionid,territoryid:territoryid,userid:userid},
					      success: function(data) 
						  	{
       					  		$('#ajax-content-container').html(data);
								//$('#ajax-content-container21').html(data);
								
      						},
	  					error: function(){
    					alert('error!');
  				}
                    
                });
        });
    });
</script>


</body>
</html>


