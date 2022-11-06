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
                  
                  <th>ID</th>
                  <th>Ongoing Task</th>
                  <th>Description</th>
                  <th>Assign Date</th>
                  <th>Deadline</th>
                  <th>Execution Day</th>
                  <th>Remaining day</th>
                  <th>Status</th>
                  <th>Details</th>
                </tr>
                </thead>
                <tbody>
                <?php 
				 $i=1;
				foreach($tid as $row)
				{ ?>
                <tr>
                  
                  
                 
                  
                 
                   <td style="vertical-align:middle;"><?php echo $row['assigneetlid'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['assigneetaskname'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['assigneetaskdescription'];?></td>
                  <?php
				  $assignedate = date("d-m-Y", strtotime($row['assignedate']));
				    $deadline = date("d-m-Y", strtotime($row['deadline']));
                  $assignedate1 = strtotime($assignedate);
					$deadline1 = strtotime($deadline);
					$datediff = $deadline1-$assignedate1;
					$curday=strtotime(date("d-m-Y"));
					$datediff1 = $deadline1-$curday;
					$executionday=round($datediff / (60 * 60 * 24));
					$remainingday=round($datediff1 / (60 * 60 * 24));
				  ?>
                  <td style="vertical-align:middle;"><?php echo $assignedate;?></td>
                  <td style="vertical-align:middle;"><?php echo $deadline;?></td>
                  <td style="vertical-align:middle;"><?php echo $executionday;?></td>
                  <td style="vertical-align:middle;"><?php echo $remainingday;?></td>
                  <?php
				  if($row['assigneestatus']==1)
				  {
					  ?>
                      <td style="vertical-align:middle;">Ongoing</td>
                   <?php
				  }
				  elseif($row['assigneestatus']==2)
				  {
					?>
                      <td style="vertical-align:middle;">Pending</td>
                  <?php
				  }
				  ?>
                  <td style="vertical-align:middle;"><a href="<?php echo base_url();?>Dashboard/assignee_task_list/<?php echo $row['assigneeid'];?>/<?php echo $row['createtaskid'];?>"><i class="fa fa-info-circle"></i></a></td>
                </tbody>
               <?php } ?>
              </table>
            </div>
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


 <?php /*?><?php
 $ongoing=$row['ongoing'];
 $submitted=$row['submitted'];
 $completed=$row['completed'];
	  $per=array('ongoing','submitted','completed');
	  $num=array($ongoing,$submitted,$completed);
	  $chart=array($per,$num);
      foreach($chart as $row1)
	  {
            echo $row1['per'].$row1['num'];
          
      }
      ?>
<script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

    var data = google.visualization.arrayToDataTable([
      ['Language', 'Rating'],
      <?php
	  $data['per']=array('ongoing','submitted','completed');
	  $data['num']=array($row['ongoing'],$row['submitted'],$row['completed']);
	  $data['chart']=array($data['per'],$data['num']);
      foreach($chart as $row)
	  {
            echo "['".$row['per']."', ".$row['num']."],";
          
      }
      ?>
    ]);
    
    var options = {
        title: 'Most Popular Programming Languages',
        width: 900,
        height: 500,
    };
    
    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    
    chart.draw(data, options);
}
</script>
<div id="piechart"></div><?php */?>