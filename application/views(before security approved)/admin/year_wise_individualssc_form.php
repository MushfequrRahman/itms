<style>
.error{color:red;}
em{color:red;}
#ajax-content-container{background:#FFFFFF;}
@media print {
   #noprint {
      /*visibility: hidden;*/
	  display:none;
   }
   /*#graph{margin-left:-50px; width:50%; height:auto;}*/
   .nograph{ padding-bottom:200px;}
}
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
      

      
<div id="noprint">
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
                
  

                  <h3 class="box-title">Year Wise Sewing Score Card</h3>
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
				 <?php /*?><form role="form" autocomplete="off" action="<?php echo base_url();?>Dashboard/user_task_complete_list" method="post" enctype="multipart/form-data"><?php */?>
                 <?php /*?><div class="form-group">
					<label>Month Name<em>*</em></label>
					<select class="form-control" name="mn" id="mn">
                    	<option value="">Select....</option>
                        <?php
						foreach($allm as $row)
						{
					?>
                    		<option value="<?php echo $row['mn'];?>"><?php echo $row['mn'];?></option>
                    <?php
						}
					?>
                    </select>
                    <?php echo form_error('mn', '<div class="error">', '</div>');  ?>
				</div><?php */?>
                <div class="form-group">
					<label>Year<em>*</em></label>
					<select class="form-control" name="yr" id="yr">
                    	<option value="">Select....</option>
                        <?php
						foreach($ally as $row)
						{
					?>
                    		<option value="<?php echo $row['yr'];?>"><?php echo $row['yr'];?></option>
                    <?php
						}
					?>
                    </select>
                    <?php echo form_error('yr', '<div class="error">', '</div>');  ?>
				</div>				
                <div class="form-group">
					<label>User ID<em>*</em></label>
					<input type="text" class="form-control userid"  id="userid" placeholder="User ID">
                    
				</div>
                <?php /*?><div class="form-group">
					<label>Start Date<em>*</em></label>
					<input type="text" class="form-control pd"  id="pd" value="<?php echo date('d-m-Y');?>">
                    
				</div>
                <div class="form-group">
					<label>End Date<em>*</em></label>
					
                    <input type="text" class="form-control wd"  id="wd" value="<?php echo date('d-m-Y');?>">
				</div><?php */?>
               </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <input type="submit" class="btn btn-primary" name="submit" id="btn" value="Submit" />
                </div>
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
 </div>     
      <div id="ajax-content-container">
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
			var userid= $("#userid").val();
            var yr= $("#yr").val();
			

            $.ajax(
                {
                    type:'post',
                    url: '<?php echo base_url(); ?>Dashboard/year_wise_individualssc',
					dataType:"text",
                    data:{ userid:userid,yr:yr},
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


