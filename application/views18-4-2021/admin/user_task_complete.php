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

            
                <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
             	<table id="tableData" class="table table-hover table-bordered">
              <thead style="background:#91b9e6;">
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Ongoing Task</th>
                  <th>Submitted</th>
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
                  <td style="vertical-align:middle;"><?php echo $row['submitted'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['completed'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['ratings'];?></td>
                </tbody>
               <?php } ?>
              </table>
            </div>
            

 <?php
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
<div id="piechart"></div>