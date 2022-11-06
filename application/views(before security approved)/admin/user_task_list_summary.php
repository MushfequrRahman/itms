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
                  <h3 class="box-title">Task Summary</h3>
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
                  <th>Name</th>
                  <th>Ongoing Task</th>
                  <th>Submitted(Within Deadline)</th>
                  <th>Submitted(Out Of Deadline)</th>
                  <th>Completed</th>
                  <th>Ratings</th>
                </tr>
                </thead>
                <tbody>
                <?php 
				 $i=1;
				foreach($utl as $row)
				{ ?>
                <tr>
                  
                  
                 
                  
                 
                  <td style="vertical-align:middle;"><?php echo $row['userid'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['ename'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['ongoing'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['wsubmitted'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['osubmitted'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['completed'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['ratings'];?></td>
                </tbody>
               <?php } ?>
              </table>
              <div id="piechart" style="width: 500px; height: 500px; margin:auto;"></div>
            </div>
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

<!--<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>-->
 <script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

    var data = google.visualization.arrayToDataTable([
      ['Task', 'Status'],
	  <?php
  		$ongoing=$row['ongoing'];
 		$wsubmitted=$row['wsubmitted'];
		$osubmitted=$row['osubmitted'];
 		$completed=$row['completed'];
	  	$per=array('Ongoing','Within Date Submitted','Out Of Date Submitted','Completed');
	  	$num=array($ongoing,$wsubmitted,$osubmitted,$completed);
	
	  	for($i=0;$i<count($per);$i++)
	  	{
		  echo "['".$per[$i]."', ".$num[$i]."],";
	  	}
	  
      ?>
      
    ]);
    
    var options = {
        title: 'Task List',
		//backgroundColor: "#ECF0F5",
        //width: 500,
        //height: 500,
    };
    
    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    
    chart.draw(data, options);
}
</script>