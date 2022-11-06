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
                  <h3 class="box-title">Suggestion Box</h3>
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
				 <form role="form" autocomplete="off" action="<?php echo base_url();?>Dashboard/suggession_insert" method="post" enctype="multipart/form-data">
                 <?php $userid=$this->session->userdata('userid'); ?>
                 <input type="hidden" class="form-control" name="userid" id="userid" value="<?php echo $userid; ?>">
                 <div class="form-group">
					<label>Date<em>*</em></label>
                 	<input type="text" class="form-control pd" name="sudate" value="<?php echo date('d-m-Y');?>">
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
					<label>Opener-1<em>*</em></label>
					<select class="form-control" name="openerid1" id="openerid1">
                    	<option value="">Select....</option>
                        <?php
						foreach($ol as $row)
						{
					?>
                    		<option value="<?php echo $row['openerid'];?>"><?php echo $row['ename'].'----'.$row['openerid'];?></option>
                    <?php
						}
					?>
                    </select>
                    
				</div>
                <div class="form-group">
					<label>Opener-2<em>*</em></label>
					<select class="form-control" name="openerid2" id="openerid2">
                    	<option value="">Select....</option>
                        <?php
						foreach($ol as $row)
						{
					?>
                    		<option value="<?php echo $row['openerid'];?>"><?php echo $row['ename'].'----'.$row['openerid'];?></option>
                    <?php
						}
					?>
                    </select>
                    
				</div>
                <div class="form-group">
					<label>Opener-3<em>*</em></label>
					<select class="form-control" name="openerid3" id="openerid3">
                    	<option value="">Select....</option>
                        <?php
						foreach($ol as $row)
						{
					?>
                    		<option value="<?php echo $row['openerid'];?>"><?php echo $row['ename'].'----'.$row['openerid'];?></option>
                    <?php
						}
					?>
                    </select>
                    
				</div>
                <div class="form-group">
					<label>Opener-4<em>*</em></label>
					<select class="form-control" name="openerid4" id="openerid4">
                    	<option value="">Select....</option>
                        <?php
						foreach($ol as $row)
						{
					?>
                    		<option value="<?php echo $row['openerid'];?>"><?php echo $row['ename'].'----'.$row['openerid'];?></option>
                    <?php
						}
					?>
                    </select>
                    
				</div>
                <!--<div class="form-group">
					<label>Opener-1<em>*</em></label>
					<select class="form-control" name="openerid1" id="openerid1">
                    	<option value="">Select....</option>
                    </select>
                </div>-->
                 <!--<div class="form-group">
					<label>Opener-2<em>*</em></label>
					<select class="form-control" name="openerid2" id="openerid2">
                    	<option value="">Select....</option>
                    </select>
                </div>-->
                <div class="form-group">
					<label>Box Number<em>*</em></label>
					<input type="text" class="form-control" name="box" placeholder="Box Number">
                    <?php echo form_error('box', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Location<em>*</em></label>
					<input type="text" class="form-control" name="location" placeholder="Location">
                    <?php echo form_error('location', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>By<em>*</em></label>
					<input type="text" class="form-control" name="nameby" placeholder="By">
                    <?php echo form_error('nameby', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Details<em>*</em></label>
					 <textarea class="form-control"  name="details" rows="5" id="details"></textarea>
                    <?php echo form_error('details', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
                  <label for="Image">Image</label>
                  <input type="file" name="pic_file">
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

    $('#factoryid').change(function(event){
        event.preventDefault();
		var factoryid = $('#factoryid').val();

        $.ajax({
            type:'get',
            url:"<?php echo base_url(); ?>Dashboard/show_opener",
			dataType:"json",
                    data:{ factoryid:factoryid},
            success:function(res)
            	{
         		 	
					$('#openerid1').find('option').not(':first').remove();
					$('#openerid2').find('option').not(':first').remove();
				 	// Add options
          			$.each(res,function(index,data){
				  	$('#openerid1').append('<option value="'+data['openerid']+'">'+data['ename']+'</option>');
					$('#openerid2').append('<option value="'+data['openerid']+'">'+data['ename']+'</option>');
          			});
				}
        	});
    	});
	});
</script><?php */?>

</body>
</html>


