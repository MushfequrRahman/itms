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
                  <h3 class="box-title">Buyer Insert</h3>
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
				 <form role="form" autocomplete="off" action="<?php echo base_url();?>Dashboard/buyerwf_insert" method="post" enctype="multipart/form-data">
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
					<label>Buyer<em>*</em></label>
					<select class="form-control" name="bid" id="bid">
                    	<option value="">Select....</option>
                        <?php
						foreach($bl as $row)
						{
					?>
                    		<option value="<?php echo $row['bid'];?>"><?php echo $row['buyername'];?></option>
                    <?php
						}
					?>
                    </select>
				</div>
                
                <table id="tableData" class="table table-hover table-bordered">
              									<thead style="background:#91b9e6;">
              										
                									<tr>
                  										<th>AFL</th>
                                                        <th>AKL</th>
                                                        <th>ATL</th>
                                                        <th>BCL</th>
                                                        <th>BGL</th>
                                                        <th>BPL</th>
                                                        <th>BTL</th>
                                                        <th>BWL</th>
                                                        <th>JEL</th>
                                                        
                  									</tr>
                								</thead>
                                                <?php
						
					?>
               <?php /*?> <?php
						foreach($fl as $row)
						{
					?><?php */?>
									
                								<tbody>
                									<tr>
                                                    	<td><input type="checkbox" name="afl" value="1"></td>
														<td><input type="checkbox" name="akl" value="1"></td>
                                                        <td><input type="checkbox" name="atl" value="1"></td>
                                                        <td><input type="checkbox" name="bcl" value="1"></td>
                                                        <td><input type="checkbox" name="bgl" value="1"></td>
                                                        <td><input type="checkbox" name="bpl" value="1"></td>
                                                        <td><input type="checkbox" name="btl" value="1"></td>
                                                        <td><input type="checkbox" name="bwl" value="1"></td>
                                                        <td><input type="checkbox" name="jel" value="1"></td>
                                                   </tr>
                								</tbody>
                							
				
				
                <?php /*?><?php
						}
					?><?php */?>
				
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


