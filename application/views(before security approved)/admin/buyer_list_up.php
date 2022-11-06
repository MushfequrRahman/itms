<script type="text/javascript">
$(function () {
    jQuery(".pd").datepicker({dateFormat: 'yy-mm-dd'});
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
              <li class="active"><a href="#activity" data-toggle="tab">Buyer Details</a></li>
            
             
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
               
               <?php foreach($blup as $row)
				{ ?>
              <form role="form" action="<?php echo base_url();?>Dashboard/blup" method="post" enctype="multipart/form-data">
              <input type="hidden" class="form-control" name="bid" value="<?php echo $row['bid']; ?>">
              <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" name="buyername" value="<?php echo $row['buyername']; ?>">
                  <?php echo form_error('buyername', '<div class="error">', '</div>');  ?>
                </div>
				
				<div class="form-group">
					<label>Origin</label>
					<select class="form-control" name="cc" id="cc">
                    	<option value="<?php echo $row['country_code']; ?>"><?php echo $row['country_name']; ?></option>
                        <?php
						foreach($cl as $row3)
						{
					?>
                    		<option value="<?php echo $row3['country_code'];?>"><?php echo $row3['country_name'];?></option>
                    <?php
						}
					?>
                    </select>
				</div>
				<div class="form-group">
					<label>Local Address</label>
					<input type="text" class="form-control" name="local_address" value="<?php echo $row['local_address']; ?>">
                    <?php echo form_error('local_address', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>User ID(Local Compliance Contact Person)<em>*</em></label>
					<input type="text" class="form-control" name="lcuserid" value="<?php echo $row['lcuserid']; ?>">
                    <?php echo form_error('lcuserid', '<div class="error">', '</div>');  ?>
				</div>
				<div class="form-group">
					<label>Mobile(Local Compliance Contact Person)<em>*</em></label>
					<input type="text" class="form-control" name="lcmobile" value="<?php echo $row['lcmobile']; ?>">
                    <?php echo form_error('lcmobile', '<div class="error">', '</div>');  ?>
				</div>
				<div class="form-group">
					<label>Email(Local Compliance Contact Person)<em>*</em></label>
					<input type="text" class="form-control" name="lcemail" value="<?php echo $row['lcemail']; ?>">
                    <?php echo form_error('lcemail', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>User ID(Local Merchandiser Contact Person)<em>*</em></label>
					<input type="text" class="form-control" name="lmuserid" value="<?php echo $row['lmuserid']; ?>">
                    <?php echo form_error('lcuserid', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Mobile(Local Merchandiser Contact Person)<em>*</em></label>
					<input type="text" class="form-control" name="lmmobile" value="<?php echo $row['lmmobile']; ?>">
                    <?php echo form_error('lcmeobile', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Email(Local Merchandiser Contact Person)<em>*</em></label>
					<input type="text" class="form-control" name="lmemail" value="<?php echo $row['lmemail']; ?>">
                    <?php echo form_error('lmemail', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Web Address<em>*</em></label>
					<input type="text" class="form-control" name="webaddress" value="<?php echo $row['webaddress']; ?>">
                    <?php echo form_error('webaddress', '<div class="error">', '</div>');  ?>
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


