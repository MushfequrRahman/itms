
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

 
  <!-- Left side column. contains the logo and sidebar -->
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
 

    <!-- Main content -->
   <section class="content">

      <div class="row">
        <div class="col-md-12">

          <!-- Profile Image -->
         
         
          
          <!-- /.box -->

          <!-- About Me Box -->
        
          <!-- /.box -->
        
        <!-- /.col -->
        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Product Details</a></li>
            
             
            </ul>
            <div class="tab-content">
              
               
               <?php foreach($plup as $row)
				{ ?>
              <form role="form" action="<?php echo base_url();?>Dashboard/productdetailslup" method="post" enctype="multipart/form-data">
              
              <div class="form-group">
                  
                  <input type="hidden" class="form-control" name="pdiid" value="<?php echo $row['pdiid']; ?>">
                  
                </div>
				<div class="form-group">
					<label>Code</label>
					<input type="text" class="form-control" readonly name="pcode" value="<?php echo $row['pcode']; ?>">
                </div>
				<div class="form-group">
					<label>Name</label>
					<input type="text" class="form-control" readonly name="pcname" value="<?php echo $row['pcname']; ?>">
                </div>
                <div class="form-group">
					<label>Factory</label>
					<select class="form-control" name="factoryid" id="factoryid">
                    	<option value="<?php echo $row['factoryid']; ?>"><?php echo $row['factoryid']; ?></option>
                        <?php
						foreach($fl as $row1)
						{
					?>
                    		<option value="<?php echo $row1['factoryid'];?>"><?php echo $row1['factoryid'];?></option>
                    <?php
						}
					?>
                    </select>
                    <?php /*?><?php echo $row['factoryname']; ?><?php */?>
                    <?php echo form_error('factoryid', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Brand</label>
					<input type="text" class="form-control" name="brand" value="<?php echo $row['brand']; ?>">
                    <?php echo form_error('brand', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Hard Drive</label>
					<input type="text" class="form-control" name="hdd" value="<?php echo $row['hdd']; ?>">
                    <?php echo form_error('hdd', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Monitor</label>
					<input type="text" class="form-control" name="monitor" value="<?php echo $row['monitor']; ?>">
                    <?php echo form_error('monitor', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>UPS</label>
					<input type="text" class="form-control" name="ups" value="<?php echo $row['ups']; ?>">
                    <?php echo form_error('ups', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>IP Address</label>
					<input type="text" class="form-control" name="ip" value="<?php echo $row['ip']; ?>">
                    <?php echo form_error('ip', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Mother Board</label>
					<input type="text" class="form-control" name="mb" value="<?php echo $row['mb']; ?>">
                    <?php echo form_error('mb', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Serial Number</label>
					<input type="text" class="form-control" name="sn" value="<?php echo $row['sn']; ?>">
                    <?php echo form_error('sn', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Processor</label>
					<input type="text" class="form-control" name="processor" value="<?php echo $row['processor']; ?>">
                    <?php echo form_error('processor', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>RAM</label>
					<input type="text" class="form-control" name="ram" value="<?php echo $row['ram']; ?>">
                    <?php echo form_error('brand', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>OS</label>
					<input type="text" class="form-control" name="os" value="<?php echo $row['os']; ?>">
                    <?php echo form_error('os', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>MS Office</label>
					<input type="text" class="form-control" name="ms" value="<?php echo $row['ms']; ?>">
                    <?php echo form_error('brand', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Antivirus</label>
					<select class="form-control" name="avid" id="avid">
                    	<?php
							if($row['avid']==1)
								{
						?>
                    				<option value="<?php echo $row['avid'];?>">Yes</option>
                                       <?php
														}
														else
														{
														?>
                                                        <option value="<?php echo $row['avid'];?>">No</option>
                                                        <?php
														}
														?>
                        							<?php
														foreach($al as $row1)
															{
													?>
                    											<option value="<?php echo $row1['avid'];?>"><?php echo $row1['status'];?></option>
                    								<?php
															}
													?>
                    							</select>
                    								<?php echo form_error('avid', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
												<label>Internet</label>
												<select class="form-control" name="iid" id="iid">
                    								<?php
														if($row['iid']==1)
														{
															?>
                    								<option value="<?php echo $row['iid'];?>">Yes</option>
                                                    <?php
														}
														else
														{
														?>
                                                        <option value="<?php echo $row['iid'];?>">No</option>
                                                        <?php
														}
														?>
                        							<?php
														foreach($il as $row2)
															{
													?>
                    											<option value="<?php echo $row2['iid'];?>"><?php echo $row2['status'];?></option>
                    								<?php
															}
													?>
                    							</select>
                    								<?php echo form_error('iid', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Description</label>
					<textarea class="form-control"  name="description" rows="5" id="description"><?php echo $row['description']; ?></textarea>
                    <?php echo form_error('description', '<div class="error">', '</div>');  ?>
				</div>
				<div class="form-group">
					<label>Price</label>
					<input type="text" class="form-control" name="price" value="<?php echo $row['price']; ?>">
                    <?php echo form_error('price', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Qty</label>
					<input type="text" class="form-control" name="pqty" value="<?php echo $row['pqty']; ?>">
                    <?php echo form_error('pqty', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>UOM</label>
					<select class="form-control" name="puomid" id="puomid">
                    	<option value="<?php echo $row['puomid'];?>"><?php echo $row['puom'];?></option>
                             <?php
								foreach($ul as $row1)
									{
							?>
                    					<option value="<?php echo $row1['puomid'];?>"><?php echo $row1['puom'];?></option>
                    		<?php
									}
							?>
                    </select>
				</div>
				<div class="form-group">
					<label>Vendor</label>
					<input type="text" class="form-control" name="vendor" value="<?php echo $row['vendor']; ?>">
                    <?php echo form_error('vendor', '<div class="error">', '</div>');  ?>
				</div>
				<div class="form-group">
					<label>Warranty</label>
					<input type="text" class="form-control" name="warranty" value="<?php echo $row['warranty']; ?>">
                    <?php echo form_error('warranty', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Purchase Date</label>
                    <?php $pdate=date("d-m-Y", strtotime($row['pdate']));?>
					<input type="text" class="form-control pd" name="pdate" value="<?php echo $pdate; ?>">
                    <?php echo form_error('pdate', '<div class="error">', '</div>');  ?>
				</div>
				
                
                
                
                 
				
                
				
				
				
				
               
    
                

             
                  <!-- /.users-list -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <input type="submit" class="btn btn-primary" name="submit" value="Submit" />
                </div>
				 </form>
					
				<?php } ?>	
              </div>
             

              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
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
$(function () {
    jQuery(".pd").datepicker({dateFormat: 'dd-mm-yy'});
	})
</script>

