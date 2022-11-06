<style>
.error{color:red;}
em{color:red;}
</style>
<!--<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>-->
 
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
                  <h3 class="box-title">Special Employee</h3>
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
				 <form role="form" autocomplete="off" action="<?php echo base_url();?>Dashboard/specialemp_insert" method="post" enctype="multipart/form-data">
                 
                	<div class="form-group">
						<label>User ID<em>*</em></label>
						<input type="text" class="form-control" name="userid" id="userid" placeholder="Enter User ID">
					</div>
                    <div class="form-group">
						<label>Factory<em>*</em></label>
						<input type="text" class="form-control" name="factory" id="factory" placeholder="Enter Factory">
					</div>
                    <div class="form-group">
						<label>Name<em>*</em></label>
						<input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
					</div>
                    <div class="form-group">
						<label>Section<em>*</em></label>
						<input type="text" class="form-control" name="section" id="section" placeholder="Enter Section">
					</div>
                    <div class="form-group">
						<label>Designation<em>*</em></label>
						<input type="text" class="form-control" name="designation" id="designation" placeholder="Enter Designation">
					</div>
                    <div class="form-group">
						<label>Permanent Address<em>*</em></label>
						<input type="text" class="form-control" name="peradd" id="peradd" placeholder="Enter Permanent Address">
					</div>
                    <div class="form-group">
						<label>Present Address<em>*</em></label>
						<input type="text" class="form-control" name="preadd" id="preadd" placeholder="Enter Present Address">
					</div>
                    <div class="form-group">
						<label>Mobile<em>*</em></label>
						<input type="text" class="form-control" name="mobile" id="mobile" placeholder="Enter Mobile">
					</div>
                    <div class="form-group">
						<label>NID<em>*</em></label>
						<input type="text" class="form-control" name="nid" id="nid" placeholder="Enter NID">
					</div>
                    <div class="form-group">
                  		<label for="employeefile">User Photo</label>
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


