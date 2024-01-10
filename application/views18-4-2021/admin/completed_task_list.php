<style type="text/css">

.paging-nav {
  text-align: right;
  padding-top: 2px;
}

.paging-nav a {
  margin: auto 1px;
  text-decoration: none;
  display: inline-block;
  padding: 1px 7px;
  background: #91b9e6;
  color: white;
  border-radius: 3px;
}

.paging-nav .selected-page {
  background: #187ed5;
  font-weight: bold;
}

.paging-nav,
#tableData {
  
 
  text-align:center;
}
th,td{font-size:12px;text-align:center;}
</style>
<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">

 
  <!-- Left side column. contains the logo and sidebar -->
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

    <!-- Main content -->
    <section class="content">
      
        
		

      

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
                  <h3 class="box-title">Completed Task Info</h3>
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
            <div class="box-body table-responsive no-padding">
             	<table id="tableData" class="table table-hover table-bordered">
              <thead style="background:#91b9e6;">
                <tr>
                  <th>SL</th>
                  <th>File</th>
                  <!--<th>Main Task ID</th>-->
                  <!--<th>Main Task Name</th>-->
                  <!--<th>Asignee Task ID</th>-->
                  <th>Asignee Task Name</th>
                  <th>Description</th>
                  <!--<th>Assigner ID</th>-->
                  <th>Assigner Name</th>
                  <th>Assignee ID</th>
                  <th>Assignee Name</th>
                  <th>Create Date</th>
                  <th>Deadline</th>
                  <th>Execution Day</th>
                  <th>Submit Date</th>
                  <th>Close Date</th>
                  <th>Ratings</th>
                  <th>Comments</th>
                  <!--<th>Status</th>-->
                  <!--<th>Comments</th>-->
                </tr>
                </thead>
                <tbody>
                <?php 
				 $i=1;
				foreach($tid as $row)
				{ ?>
                <tr>
                  <td style="vertical-align:middle;"><?php echo $i++;?></td>
                  <?php /*?><td style="vertical-align:middle;"><?php echo $row['createtaskid'];?></td><?php */?>
                  <?php /*?><td style="vertical-align:middle;"><a href="<?php echo base_url();?>Dashboard/task_assignee_list/<?php echo $bn=$row['createtaskid'];?>"><?php echo $row['createtaskid'];?></a></td><?php */?>
                  <?php
				  if($row['pic_file']=='')
				  {
					  ?>
                      <td>No File</td>
                  <?php
				  }
				  else
				  {
				  ?>
                  <td><a target="_blank" href="<?php echo base_url().'assets/uploads/task/'.$row['pic_file'];?>"><i class="fa fa-file"></i></a></td>
                  <?php
				  }
				  ?>
                  <?php /*?><td style="vertical-align:middle;"><?php echo $row['createtaskid'];?></td><?php */?>
                  <?php /*?><td style="vertical-align:middle;"><?php echo $row['taskname'];?></td><?php */?>
                  <?php /*?><td style="vertical-align:middle;"><?php echo $row['assigneetlid'];?></td><?php */?>
                  <td style="vertical-align:middle;"><?php echo $row['assigneetaskname'];?></td>
                  <td style="vertical-align:middle;font-size:14px; font-weight:bold; text-align:justify;"><?php echo $row['assigneetaskdescription'];?></td>
                  <?php /*?><td style="vertical-align:middle;"><?php echo $row['assignerid'];?></td><?php */?>
                  <td style="vertical-align:middle;"><?php echo $row['ename'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['userid'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['assigneename'];?></td>
                  <?php
                  	$assignedate = date("d-m-Y", strtotime($row['assignedate']));
				    $deadline = date("d-m-Y", strtotime($row['deadline']));
					$prevday=date('Y-m-d', strtotime('-1 day', strtotime($deadline)));
					$assignedate1 = strtotime($assignedate);
					$deadline1 = strtotime($deadline);
					$datediff = $deadline1-$assignedate1;
					$curday=strtotime(date("d-m-Y"));
					$datediff1 = $deadline1-$curday;
					$executionday=round($datediff / (60 * 60 * 24));
					$remainingday=round($datediff1 / (60 * 60 * 24));
				  ?>
                  <td style="vertical-align:middle;"><?php echo $assignedate;?></td>
                  <?php /*?><td style="vertical-align:middle;"><?php echo $deadline;?></td><?php */?>
                 <?php /*?> <?php if($row['deadline']==date('Y-m-d'))
				  {
					  ?>
                  <td style="vertical-align:middle; background:#FF6;font-weight:bold;"><?php echo $deadline;?></td>
                  <?php
				  }
				  elseif(date('Y-m-d') > $row['deadline'])
				  {
				  ?>
                  <td style="vertical-align:middle; background: #900;font-weight:bold;"><?php echo $deadline;?></td>
                  <?php
				  }
                  elseif($prevday)
				  {
				  ?>
                  <td style="vertical-align:middle; background: #F90;font-weight:bold;"><?php echo $deadline;?></td>
                  <?php
				  }
				  else
				  {
				  ?>
                  <td style="vertical-align:middle;"><?php echo $deadline;?></td>
                  <?php
				  }
				  ?><?php */?>
                  <td style="vertical-align:middle;"><?php echo $deadline;?></td>
                  <td style="vertical-align:middle;"><?php echo $executionday;?></td>
                  <?php $assignee_submitted_date = date("d-m-Y", strtotime($row['assignee_submitted_date']));?>
                  <td style="vertical-align:middle;"><?php echo $assignee_submitted_date;?></td>
                  <?php $assigner_close_date = date("d-m-Y", strtotime($row['assigner_close_date']));?>
                  <td style="vertical-align:middle;"><?php echo $assigner_close_date;?></td>
                  <td style="vertical-align:middle;"><?php echo $row['ratings'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['comments'];?></td>
                  <?php /*?><td style="vertical-align:middle;"><?php echo $remainingday;?></td><?php */?>
                  <?php /*?><?php if($this->session->userdata('user_type')==2)
				  {?>
                  <?php if($row['assigneestatus']==1)
				  {?>
                  <td style="vertical-align:middle;"><a href="<?php echo base_url();?>Dashboard/assignee_task_list_update/<?php echo $row['assigneetlid'];?>">Active</a></td>
                  <?php
				  }?>
                  
                  <?php if($row['assigneestatus']==2)
				  {?>
                  <td style="vertical-align:middle;"><a href="<?php echo base_url();?>Dashboard/assignee_task_list_update/<?php echo $row['assigneetlid'];?>">Decesion Pending</a></td>
                  <?php
				  }
				  }
				  
				  
				  elseif($this->session->userdata('user_type')==1)
				  {?>
                  
                  <?php if($row['assigneestatus']==1)
				  {?>
                  <td style="vertical-align:middle;"><a href="<?php echo base_url();?>Dashboard/assignee_task_list_update_admin/<?php echo $row['assigneetlid'];?>">Active</a></td>
                  <?php
				  }?>
                  
                  <?php if($row['assigneestatus']==2)
				  {?>
                  <td style="vertical-align:middle;"><a href="<?php echo base_url();?>Dashboard/task_completed_form/<?php echo $row['assigneetlid'];?>">Decesion Pending</a></td>
                  <?php
				  }
				  }
				  ?><?php */?>
                  
                  <?php /*?><td style="vertical-align:middle;"><a href="<?php echo base_url();?>Dashboard/task_comments_form/<?php echo $row['assignerid'];?>/<?php echo $row['createtaskid'];?>/<?php echo $row['userid'];?>/<?php echo $row['assigneetlid'];?>"><i class="fa fa-info-circle"></i></a></td>
                </tr><?php */?>
                </tbody>
               <?php } ?>
              </table>
            </div>
            
            <!-- /.box-body -->
          </div>
          <script type="text/javascript">
            $(document).ready(function() {
                $('#tableData').paging({limit:50});
            });
        </script>
                
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
