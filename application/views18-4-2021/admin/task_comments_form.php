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
                  <?php $commentsuserid=$this->session->userdata('userid');?>
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
				foreach($tc as $row)
				{
					?>
					<div><?php echo $row['commentsuserid']."    "."says--";?></div>
                    <div><?php echo $row['comments']."     ".$row['cdate']."   ".$row['ctime'];?></div>
                    <div><?php echo "<br/>";?>
                    <?php
				}
					 $assignerid1;
					 $userid1;
					 $createtaskid1;
					 $assigneetlid1;
				?>
				
					
				
                <div class="box-body ">
				<?php /*?> <form class="form" role="form" autocomplete="off" action="<?php echo base_url();?>Dashboard/task_comments_insert" method="post"><?php */?>
                	<input type="hidden" name="assignerid" id="assignerid" class="form-control" value="<?php echo $assignerid1;?>">
               		<input type="hidden" name="assigneeid" id="assigneeid" class="form-control" value="<?php echo $userid1;?>">
                    <input type="hidden" name="createtaskid" id="createtaskid" class="form-control" value="<?php echo $createtaskid1;?>">
                	<input type="hidden" name="assigneetlid" id="assigneetlid" class="form-control" value="<?php echo $assigneetlid1;?>">
                    <input type="hidden" name="assigneetlid" id="commentsuserid" class="form-control" value="<?php echo $commentsuserid;?>">
				<div class="form-group">
					<label>Comments<em>*</em></label>
					 <textarea class="form-control"  name="taskcomments" rows="5" id="taskcomments"></textarea>
                    <?php /*?><?php echo form_error('taskdescription', '<div class="error">', '</div>');  ?><?php */?>
				</div>
                
                
                <!--<div class="form-group">
                  <label for="employeefile">Task File</label>
                  <input type="file" name="pic_file">
				</div>-->
				
				
                
				
				
				<?php /*?><a href="<?php echo base_url();?>Dashboard/task_comments_insert/<?php echo $assignerid1;?>/<?php echo $userid1;?>/<?php echo $createtaskid1;?>/<?php echo $assigneetlid1;?>"><i class="fa fa-info-circle"></i></a><?php */?>

				 
				
				
                
  
               
               
    
                

             
                  <!-- /.users-list -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <input type="submit" class="btn btn-primary" name="submit" id="submit" value="Submit" />
                  <!--<button id="submit">submit</button>-->
                </div>
				<?php /*?> </form><?php */?>
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

    $('#submit').click(function(event){
        event.preventDefault();
		var assignerid = $('#assignerid').val();
		var assigneeid = $('#assigneeid').val();
		var createtaskid = $('#createtaskid').val();
		var assigneetlid = $('#assigneetlid').val();
		var taskcomments = $('#taskcomments').val();
		var commentsuserid = $('#commentsuserid').val();
		
        $.ajax({
            type:'post',
            url:"<?php echo base_url(); ?>Dashboard/task_comments_insert",
			dataType:"text",
                    data:{ assignerid:assignerid,assigneeid:assigneeid,createtaskid:createtaskid,assigneetlid:assigneetlid,taskcomments:taskcomments,commentsuserid:commentsuserid},
            success:function(res)
            	{
         		 	//alert(taskcomments);
					location.reload();  
          			
				}
        	});
    	});
	});
</script>

<div id="response"></div>

</body>
</html>


