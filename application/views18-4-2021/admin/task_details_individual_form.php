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
                  <h3 class="box-title">Task Tracker Insert</h3>
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12">
							<?php /*?><?php if($responce = $this->session->flashdata('Successfully')): ?>
								<div class="text-center">
									<div class="alert alert-success text-center"><?php echo $responce;?></div>
								</div>
							<?php endif;?><?php */?>
						</div>
					</div>
              
                </div>
                <!-- /.box-header -->
                <?php //echo $createtaskid;?>
                <?php
				foreach($tid as $row)
				{
					 $row['userid'];
				
				?>
					
				
                <div class="box-body ">
				 <form role="form" autocomplete="off" action="<?php echo base_url();?>Dashboard/task_details_individual_insert" method="post" enctype="multipart/form-data">
                 <input type="hidden" class="form-control" name="assignerid" value="<?php echo $row['assignerid'];?>">
                 <input type="hidden" class="form-control" name="assigneeid" value="<?php echo $row['userid'];?>">
                 <input type="hidden" class="form-control" name="createtaskid" value="<?php echo $row['createtaskid'];?>">
                 <div class="form-group">
                 <label>Assignee<em>*</em></label>
                 <input type="text" class="form-control" readonly name="aename" value="<?php echo $row['aename'];?>">
                  </div>
                  <div class="form-group">
					<label>Main Task Assigner<em>*</em></label>
					<input type="text" class="form-control" readonly value="<?php echo $row['taskassignername'];?>">
                    <?php echo form_error('taskname', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Main Task Name<em>*</em></label>
					<input type="text" class="form-control" readonly value="<?php echo $row['taskname'];?>">
                    <?php echo form_error('taskname', '<div class="error">', '</div>');  ?>
				</div>
                <?php
				}?>
                <div class="form-group">
					<label>Task Name<em>*</em></label>
					<input type="text" class="form-control" name="taskname" placeholder="Enter Task Name">
                    <?php echo form_error('taskname', '<div class="error">', '</div>');  ?>
				</div>
				<div class="form-group">
					<label>Task Description<em>*</em></label>
					 <textarea class="form-control"  name="taskdescription" rows="5" id="taskdescription"></textarea>
                    <?php echo form_error('taskdescription', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Create Date<em>*</em></label>
					<input type="text" class="form-control pd" name="createdate" value="<?php echo date('d-m-Y');?>">
                    <?php /*?><?php echo form_error('dobdate', '<div class="error">', '</div>');  ?><?php */?>
				</div>
                <div class="form-group">
					<label>Deadline Date<em>*</em></label>
					<input type="text" class="form-control pd" name="deadline" value="<?php echo date('d-m-Y');?>">
                    <?php /*?><?php echo form_error('dobdate', '<div class="error">', '</div>');  ?><?php */?>
				</div>
                
                <div class="form-group">
                  <label for="employeefile">Task File</label>
                  <input type="file" name="pic_file">
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







</body>
</html>


