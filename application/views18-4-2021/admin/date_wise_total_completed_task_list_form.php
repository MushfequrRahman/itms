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
                  <h3 class="box-title">Date Task Complete Info</h3>
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
                 
                	<div class="form-group">
					<label>Issue Date<em>*</em></label>
					<input type="text" class="form-control pd"  id="pd" value="<?php echo date('d-m-Y');?>">
                    
				</div>
                <div class="form-group">
					<label>Cpmpleted Date<em>*</em></label>
					
                    <input type="text" class="form-control wd"  id="wd" value="<?php echo date('d-m-Y');?>">
				</div>
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
            var pd= $("#pd").val();
			var wd= $("#wd").val();

            $.ajax(
                {
                    type:'post',
                    url: '<?php echo base_url(); ?>Dashboard/date_wise_total_task_complete_list',
					dataType:"text",
                    data:{ pd:pd,wd:wd},
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


