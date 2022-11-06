
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
              <li class="active"><a href="#activity" data-toggle="tab">Challanges List</a></li>
            
             
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
               
               <?php foreach($ilup as $row)
				{ ?>
              <form role="form" action="<?php echo base_url();?>Dashboard/challangeslup" method="post" enctype="multipart/form-data">
              	<input type="hidden" class="form-control" name="chid" value="<?php echo $row['chid']; ?>">
              	<div class="form-group">
					<label>Type<em>*</em></label>
					<select class="form-control" name="issuetypeid" id="issuetypeid">
                    	<option value="<?php echo $row['issuetypeid'];?>"><?php echo $row['issuetype'];?></option>
                        <?php
						foreach($il as $row1)
						{
					?>
                    		<option value="<?php echo $row1['issuetypeid'];?>"><?php echo $row1['issuetype'];?></option>
                    <?php
						}
					?>
                    </select>
                    <?php echo form_error('issuetypeid', '<div class="error">', '</div>');  ?>
				 </div>
                <div class="form-group">
					<label>Details<em>*</em></label>
					 <textarea class="form-control"  name="details" rows="5" id="details"><?php echo $row['details'];?></textarea>
                    <?php echo form_error('details', '<div class="error">', '</div>');  ?>
				 </div>
                 <div class="form-group">
					<label>Zone<em>*</em></label>
					 <input type="text" class="form-control" name="zone" value="<?php echo $row['zone'];?>">
                    <?php echo form_error('zone', '<div class="error">', '</div>');  ?>
				 </div>
                 <div class="form-group">
					<label>Place<em>*</em></label>
					 <input type="text" class="form-control" name="place" value="<?php echo $row['place'];?>">
                    <?php echo form_error('place', '<div class="error">', '</div>');  ?>
				 </div>
                 <div class="form-group">
					<label>Desired Result<em>*</em></label>
					 <textarea class="form-control"  name="dl" rows="5" id="dl"><?php echo $row['dl'];?></textarea>
                    <?php echo form_error('dl', '<div class="error">', '</div>');  ?>
				 </div>
                 <div class="form-group">
					<label>FPR(First Person Responsible)<em>*</em></label>
					 <input type="text" class="form-control" name="fpr" value="<?php echo $row['fpr'];?>">
                    <?php echo form_error('fpr', '<div class="error">', '</div>');  ?>
				 </div>
				 <div class="form-group">
					<label>Present Status<em>*</em></label>
					 <textarea class="form-control"  name="ps" rows="5" id="ps"><?php echo $row['ps'];?></textarea>
                    <?php echo form_error('ps', '<div class="error">', '</div>');  ?>
				 </div>
                 
                 <div class="form-group">
					<label>Remarks<em>*</em></label>
					 <textarea class="form-control"  name="remarks" rows="5" id="remarks"><?php echo $row['remarks'];?></textarea>
                    <?php echo form_error('remarks', '<div class="error">', '</div>');  ?>
				 </div>
                <div class="form-group">
					<label>Status(Active=1 AND Close=0)<em>*</em></label>
					 <input type="text" class="form-control" name="chstatus" value="<?php echo $row['chstatus'];?>">
                    <?php echo form_error('chstatus', '<div class="error">', '</div>');  ?>
				 </div>
                
                
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


