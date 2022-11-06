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
                  <h3 class="box-title">Task Info</h3>
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
                  <th>Task ID/Add Member</th>
                  <th>Task Type</th>
                  <th>Task Description</th>
                  <!--<th>User Name</th>-->
                  <!--<th>Factory Name</th>-->
                  <!--<th>Division Name</th>-->
                  <!--<th>Department Name</th>
                  <th>Section Name</th>-->
                 <!-- <th>Sub Section Name</th>-->
                  <th>Deadline</th>
                  <th>Status</th>
                  <th>Details</th>
                </tr>
                </thead>
                <tbody>
                <?php
				$i=1; 
				foreach($tl as $row)
				{ ?>
                <tr>
                  <td style="vertical-align:middle;"><?php echo $i++;?></td>
                  <?php /*?><td style="vertical-align:middle;"><?php echo $row['createtaskid'];?></td><?php */?>
                  <td style="vertical-align:middle;"><a href="<?php echo base_url();?>Dashboard/task_assignee_list/<?php echo $bn=$row['createtaskid'];?>"><?php echo $row['createtaskid'];?></a></td>
                  <td style="vertical-align:middle;"><?php echo $row['tasktype'];?></td>
                  <td style="vertical-align:middle; font-size:14px; font-weight:bold; text-align:justify;"><?php echo $row['taskdescription'];?></td>
                  
                  <?php
				  $cdeadlinedate = date("d-m-Y", strtotime($row['cdeadlinedate']));
				  $prevday=date('Y-m-d', strtotime('-1 day', strtotime($cdeadlinedate)))
				  ?>
                  <?php if($row['cdeadlinedate']==date('Y-m-d'))
				  {
					  ?>
                  <td style="vertical-align:middle; background:#FF6;font-weight:bold;"><?php echo $cdeadlinedate;?></td>
                  <?php
				  }
				  elseif(date('Y-m-d') > $row['cdeadlinedate'])
				  {
				  ?>
                  <td style="vertical-align:middle; background: #900;font-weight:bold;"><?php echo $cdeadlinedate;?></td>
                  <?php
				  }
                  elseif($prevday)
				  {
				  ?>
                  <td style="vertical-align:middle; background: #F90;font-weight:bold;"><?php echo $cdeadlinedate;?></td>
                  <?php
				  }
				  else
				  {
				  ?>
                  <td style="vertical-align:middle";><?php echo $cdeadlinedate;?></td>
                  <?php
				  }
				  ?>
                  <td style="vertical-align:middle;"><a href="<?php echo base_url();?>Dashboard/task_details_update/<?php echo $bn=$row['createtaskid'];?>">Active</i></a></td>
                  <td style="vertical-align:middle;"><a href="<?php echo base_url();?>Dashboard/task_details/<?php echo $bn=$row['createtaskid'];?>"><i class="fa fa-edit" style="font-size:24px"></i></a></td>
                  
                </tr>
                </tbody>
               <?php } ?>
              </table>
            </div>
            
            <!-- /.box-body -->
          </div>
         <?php /*?> <script type="text/javascript">
            $(document).ready(function() {
                $('#tableData').paging({limit:50});
            });
        </script><?php */?>
                
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
