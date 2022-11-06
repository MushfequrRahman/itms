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
<script type="text/javascript">
$(function () {
    jQuery(".pd").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery(".wd").datepicker({dateFormat: 'yy-mm-dd'});
	})
</script>
<script type="text/javascript">

$(document).ready(function(){

    var counter = 2;
		
    $("#addau").click(function () {
				
	if(counter>100){
            alert("Only 100 rollboxes allow");
            return false;
	}   
		
	var newTextBoxDiv = $(document.createElement('div'))
	     .attr("id", 'AuDiv' + counter);

	newTextBoxDiv.after().html(
	      '<div class="row"><table class="table table-bordered table-striped text-center"><tr><td><input type="file" multiple name="pic_file[]' + counter + 
	      '" id="pic_file' + counter + '" ></td>'+
		  '</tr></table></div>');
            
	newTextBoxDiv.appendTo("#AuGroup");

				
	counter++;
	//console.log("#pd"+counter--);
	//jQuery("#pd"+counter--).datepicker({dateFormat: 'yy-mm-dd'});	
     });

     $("#removeau").click(function () {
	if(counter==1){
          alert("No more textbox to remove");
          return false;
       }   
        
	counter--;
			
        $("#AuDiv" + counter).remove();
			
     });
		
     
  });
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
                  <h3 class="box-title">Training Material Insert</h3>
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
				 <form role="form" autocomplete="off" action="<?php echo base_url();?>Dashboard/trainingmaterial_insert" method="post" enctype="multipart/form-data">
                 
              
               <div class="form-group">
					<label>Training Type<em>*</em></label>
					<select class="form-control" name="trainingtypeid" id="trainingtypeid">
                    	<option value="">Select....</option>
                        <?php
						foreach($ul as $row)
						{
					?>
                    		<option value="<?php echo $row['trainingtypeid'];?>"><?php echo $row['trainingtype'];?></option>
                    <?php
						}
					?>
                    </select>
                    <?php echo form_error('trainingtypeid', '<div class="error">', '</div>');  ?>
				</div>
             
            
                
                <div class="form-group">
					<label>Name<em>*</em></label>
					<input type="text" class="form-control" name="trainingname" placeholder="Enter Training Name">
                    <?php echo form_error('trainingname', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Training Category<em>*</em></label>
					<select class="form-control" name="trainingcategoryid" id="trainingcategoryid">
                    	<option value="">Select....</option>
                        <?php
						foreach($ul1 as $row)
						{
					?>
                    		<option value="<?php echo $row['trainingcategoryid'];?>"><?php echo $row['trainingcategory'];?></option>
                    <?php
						}
					?>
                    </select>
                    <?php echo form_error('trainingcategoryid', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Date<em>*</em></label>
					<input type="text" class="form-control pd" name="tdate" value="<?php echo date('d-m-Y');?>">
                    <?php echo form_error('tdate', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<!--<label>Date<em>*</em></label>-->
					<input type="file" id="pic_file" name="pic_file[]" multiple>
                  <span>mp4|pdf</span>
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
<script type="text/javascript">
$(document).ready(function(){

    $('#floorname').change(function(event){
        event.preventDefault();
		var floorname = $('#floorname').val();

        $.ajax({
            type:'get',
            url:"<?php echo base_url(); ?>Dashboard/show_linename",
			dataType:"json",
                    data:{ floorname:floorname},
            success:function(res)
            	{
         		 	$('#linename').find('option').remove();
				 	// Add options
          			$.each(res,function(index,data){
				  	$('#linename').append('<option value="'+data['linename']+'">'+data['linename']+'</option>');
          			});
				}
        	});
    	});
	});
</script>

</body>
</html>


