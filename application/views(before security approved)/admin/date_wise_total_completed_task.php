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
            
         <?php /*?> <div id="visualization"></div>
</div>
<div id="piechart"></div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
// Draw the chart and set the chart values
function drawChart() {
var data = google.visualization.arrayToDataTable([
['Task', 'Page visit per Day'],
<?php
                    foreach ($chart_data1 as $row) {
                        extract((array)$row);
                        echo "['{$totaltask}', {$ratings}],";
                    } ?>
					
//['PHP', 8],
//['JAVA', 8],
//['SQL', 4],
//['Wordpress', 2],
//['JSP', 2]
]);
// Optional; add a title and set the width and height of the chart
//var options = {'title':'My Average page visit per Day', 'width':550, 'height':400};
var options = {

        responsive: true,

        title: {

          display: true,

          position: "top",

          text: "Monthly Registered Users Count",

          fontSize: 18,

          fontColor: "#111"

        },

        legend: {

          display: true,

          position: "bottom",

          labels: {

            fontColor: "#333",

            fontSize: 16

          }

        }

      };

// Display the chart inside the <div> element with id="piechart"
var chart = new google.visualization.PieChart(document.getElementById('piechart'));
chart.draw(data, options);
}
</script>
  <!-- javascript -->

   <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
   
   <script type="text/javascript" src="http://www.google.com/jsapi"></script>

   <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> <?php */?>  


