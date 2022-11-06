<script type="text/javascript">
$(function () {
    jQuery(".pd").datepicker({dateFormat: 'dd-mm-yy'});
	})
</script> 
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
              <li class="active"><a href="#activity" data-toggle="tab">Buyer Wise Factory Details</a></li>
            
             
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
               
               <?php foreach($bwflup as $row)
				{ ?>
              <form role="form" action="<?php echo base_url();?>Dashboard/bwflup" method="post" enctype="multipart/form-data">
              <input type="hidden" class="form-control" name="bwfid" value="<?php echo $row['bwfid']; ?>">
              <div class="form-group">
                  <label>Buyer Name</label>
                  <input type="text" class="form-control" readonly value="<?php echo $row['buyername']; ?>">
                  
                </div>
				 <div class="form-group">
                  <label>Factory Name</label>
                  <input type="text" class="form-control" readonly value="<?php echo $row['factoryid']; ?>">
                  
                </div>
				<?php /*?><div class="form-group">
					<label>Origin</label>
					<select class="form-control" name="cc" id="cc">
                    	<option value="<?php echo $row['country_code']; ?>"><?php echo $row['factoryid']; ?></option>
                        <?php
						foreach($cl as $row3)
						{
					?>
                    		<option value="<?php echo $row3['country_code'];?>"><?php echo $row3['vdate'];?></option>
                    <?php
						}
					?>
                    </select>
				</div><?php */?>
				<div class="form-group">
					<label>Validity</label>
                    <?php $vdate = date("d-m-Y", strtotime($row['vdate']));?>
					<input type="text" class="form-control pd" name="vdate" value="<?php echo $vdate; ?>">
                    <?php echo form_error('local_address', '<div class="error">', '</div>');  ?>
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


