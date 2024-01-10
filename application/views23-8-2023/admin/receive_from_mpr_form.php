<style>
.error{color:red;}
em{color:red;}
</style>

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
                  <h3 class="box-title">PO List For Receive</h3>
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
				</div>		<?php */?>
        <form role="form" id="insert_form" autocomplete="off" method="post" action="<?php echo base_url(); ?>Dashboard/receive_for_mpr_list" enctype="multipart/form-data">
                	<div class="form-group">
					<label>PO No<em>*</em></label>
					<input type="text" class="form-control" name="mprid" id="mprid" placeholder="Enter PO No">
                    <div class="box-footer text-center">
                  <input type="submit" class="btn btn-primary" name="submit" id="btn" value="Submit" />
                </div>
                    
				</div>
                
               </div>
                <!-- /.box-body -->
                
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
<!-- <script>
    $(document).ready(function(){
        $( "#btn" ).click(function(event)
        {
            event.preventDefault();
            //var pd= $("#pd").val();
//			var wd= $("#wd").val();
			var mprid= $("#mprid").val();
            $.ajax(
                {
                    type:'post',
                    url: '<?php echo base_url(); ?>Dashboard/receive_for_mpr_list',
					dataType:"text",
                    data:{ mprid:mprid},
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
</script> -->


</body>
</html>


