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
                  <h3 class="box-title">Return Challan Create</h3>
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
				 <form role="form" autocomplete="off" action="<?php echo base_url();?>Dashboard/challan_return_create" method="post" enctype="multipart/form-data">
                <input type="hidden" class="form-control" name="userid" value="<?php echo $this->session->userdata('userid');?>">
                <div class="form-group">
					<label>Sent Factory Name<em>*</em></label>
                    <input type="text" class="form-control" readonly name="sfactoryid" value="<?php echo $this->session->userdata('factoryid');?>">
                </div>
                <div class="form-group">
					<label>Challan Number<em>*</em></label>
					<input type="text" class="form-control" name="manualid" placeholder="Enter Challan Number">
                    <?php echo form_error('manualid', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Token Number<em>*</em></label>
					<input type="text" class="form-control" name="ccid" placeholder="Enter Token Number">
                    <?php echo form_error('ccid', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Quantity<em>*</em></label>
					<input type="text" class="form-control" name="rsqty" placeholder="Enter Quantity">
                    <?php echo form_error('qty', '<div class="error">', '</div>');  ?>
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
<?php /*?><script type="text/javascript">
$(document).ready(function(){

    $('#ctype').change(function(event)
		{
       	 	event.preventDefault();
			var ctype = $('#ctype').val();
			//alert(ctype);
			if(ctype==1)
				{
        			$.ajax
						(
							{
            					type:'get',
            					url:"<?php echo base_url(); ?>Dashboard/show_challan_buyername",
								dataType:"json",
                    			data:{ },
            					success:function(res)
            						{
         		 						//$('#divisionid').find('option');
										$('#buyerid').find('option').not(':first').remove();
				 						// Add options
          								$.each(res,function(index,data)
												{
				  									$('#buyerid').append('<option value="'+data['bid']+'">'+data['buyername']+'</option>');
          										}
											  );
									}
        						}
						);
    				}//if
					
					if(ctype==2)
						{
        					$.ajax
								(
									{
            							type:'get',
            							url:"<?php echo base_url(); ?>Dashboard/show_challan_factoryname",
										dataType:"json",
                    					data:{ },
            							success:function(res)
            								{
         		 								//$('#divisionid').find('option');
												$('#rfactotyid').find('option').not(':first').remove();
				 								// Add options
          										$.each(res,function(index,data)
													{
				  										$('#rfactoryid').append('<option value="'+data['factoryid']+'">'+data['factoryname']+'</option>');
          											}
											  	);
											}
        								}
								);
    					}//if
				
				
				
				
				
				
				
				}
				
				
			);
	
	});
</script><?php */?>

</body>
</html>


