<style>
.error{color:red;}
em{color:red;}
th,td{font-size:12px;text-align:center;}
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
                  <h3 class="box-title">License With Buyer Insert</h3>
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
				 <form role="form" autocomplete="off" action="<?php echo base_url();?>Dashboard/buyerwcer_insert" method="post" enctype="multipart/form-data">
                 <!--<div class="form-group">
                  <label for="employeefile">Buyer Photo</label>
                  <input type="file" name="pic_file">
                </div>-->
				<?php /*?><div class="form-group">
					<label>Name<em>*</em></label>
					<input type="text" class="form-control" name="buyername" placeholder="Enter Buyer Name" value="<?php echo set_value('buyername'); ?>">
                    <?php echo form_error('buyername', '<div class="error">', '</div>');  ?>
				</div><?php */?>
                <div class="form-group">
					<label>Factory Name<em>*</em></label>
					<select class="form-control" name="factoryid" id="factoryid">
                    	<option value="">Select....</option>
                        <?php
						foreach($fl as $row)
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
					<label>License Name<em>*</em></label>
					<select class="form-control" name="licensename" id="licensename">
                    	<option value="">Select....</option>
                        <?php
						foreach($li as $row)
						{
					?>
                    		<option value="<?php echo $row['lnid'];?>"><?php echo $row['license_name'];?></option>
                    <?php
						}
					?>
                    </select>
                    <?php echo form_error('licensename', '<div class="error">', '</div>');  ?>
				</div>
                
                <table id="tableData" class="table table-hover table-bordered">
              									<thead style="background:#91b9e6;">
              										
                									<tr>
                  										<th>SL</th>
                                                        <th>Select</th>
                                                        <th>Buyer</th>
                                                        <!--<th>Major</th>-->
                                                        
                  									</tr>
                								</thead>
                                                
                <?php
				$i=1;
						foreach($bl as $row)
						{
					?>
									
                								<tbody>
                									<tr>
                                                    	<td><?php echo $i++;?></td>
                                                    	<td><input type="checkbox" name="bid[]" value="<?php echo $row['bid'];?>">
                                                        <?php echo form_error('bid', '<div class="error">', '</div>');  ?></td>
														<td><input class="form-control" type="text" readonly name="bname" value="<?php echo $row['buyername'];?>"></td>
                                                        <!--<td><select class="form-control" name="mo[]" id="major">
                    											<option value="">Select</option>
                                                                <option value="1">Major</option>
                       											<option value="2">Optional</option>
                    										</select>
                                                        </td>-->
                                                        
                                                   </tr>
                								</tbody>
                							
				
				
                <?php
						}
					?>
				
				</table>
				

				 
				
				
                
  
               
               
    
                

             
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


</body>
</html>


