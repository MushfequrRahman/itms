   <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>

   <!--<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> -->

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
                  <h3 class="box-title">Vehicle Meter Reading Report</h3>
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
                <form role="form" autocomplete="off" action="<?php echo base_url();?>Dashboard/mvmfuse_list" method="post" enctype="multipart/form-data">
					<div class="form-group">
					<label>Month<em>*</em></label>
					<select class="form-control" name="mo" id="mo">
                    	<option value="">Select....</option>
                        <?php
						foreach($ulm as $row)
						{
					?>
                    		<option value="<?php echo $row['vmonth'];?>"><?php echo $row['vmonth'];?></option>
                    <?php
						}
					?>
                    </select>
				</div>				
                	<div class="form-group">
					<label>Year<em>*</em></label>
					<select class="form-control" name="yr" id="yr">
                    	<option value="">Select....</option>
                        <?php
						foreach($uly as $row)
						{
					?>
                    		<option value="<?php echo $row['vyear'];?>"><?php echo $row['vyear'];?></option>
                    <?php
						}
					?>
                    </select>
				</div>				
               </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <input type="submit" class="btn btn-primary" name="submit" id="btn" value="Submit" />
                </div>
                <!--<div class="box-footer text-center">
                  <input type="submit" class="btn btn-primary" name="submit" value="Submit" />
                </div>-->
				 </form>
				 <!--</form>-->
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
        <div class="chart-container">

    <div class="bar-chart-container">

      <canvas id="bar-chart"></canvas>

    </div>

  </div>

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
            var mo= $("#mo").val();
			var yr= $("#yr").val();
			
            $.ajax(
                {
                    type:'post',
                    url: '<?php echo base_url(); ?>Dashboard/mvmfuse_list',
					dataType:"text",
                    data:{ mo:mo,yr:yr},
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
</script>


</body>
</html>


