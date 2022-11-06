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
                  <th>SL</th>
                  <!--<th>ID</th>-->
                  <th>Vehicle No</th>
                  <th>Month Start Reading</th>
                  <th>Month End Reading</th>
        		  <th>Meter Reading</th>
                  <th>Fuel</th>
                  <th>Fuel Qty(Liter)</th>
                  <th>Month</th>
                  <th>Year</th>
                </tr>
                </thead>
                <tbody>
                <?php 
				$i=1;
				foreach($ul as $row)
				{ ?>
                <tr>
                  
                  <td style="vertical-align:middle;"><?php echo $i++;?></td>
                  <?php /*?><td style="vertical-align:middle;"><?php echo $row['aiid'];?></td><?php */?>
                  <td style="vertical-align:middle;"><?php echo $row['vrn'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['msr'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['mer'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['vr'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['fuel'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['vfuse'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['vmonth'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['vyear'];?></td>
                </tr>
                
               <?php } ?>
               </tbody>
              </table>
                
            </div>
            
<script>

  $(function(){

      //get the bar chart canvas

      var cData = JSON.parse(`<?php echo $chart_data; ?>`);

      var ctx = $("#bar-chart");

 

      //bar chart data

      var data = {

        labels: cData.label,

        datasets: [

          {

            label: cData.label,

            data: cData.data,

            backgroundColor: [

              "#DEB887",

              "#A9A9A9",

              "#DC143C",

              "#F4A460",

              "#2E8B57",

              "#1D7A46",

              "#CDA776",

              "#CDA776",

              "#989898",

              "#CB252B",

              "#E39371",

            ],

            borderColor: [

              "#CDA776",

              "#989898",

              "#CB252B",

              "#E39371",

              "#1D7A46",

              "#F4A460",

              "#CDA776",

              "#DEB887",

              "#A9A9A9",

              "#DC143C",

              "#F4A460",

              "#2E8B57",

            ],

            borderWidth: [1, 1, 1, 1, 1,1,1,1, 1, 1, 1,1,1]

          }

        ]

      };

 

      //options

      var options = {

        responsive: true,

        title: {

          display: true,

          position: "top",

          text: "Monthly Fule Consumption",

          fontSize: 10,

          fontColor: "#111"

        },

        legend: {

          display: false,

          position: "bottom",

          labels: {

            fontColor: "#333",

            fontSize: 12

          }

        }

      };

 

      //create bar Chart class object

      var chart1 = new Chart(ctx, {

        type: "bar",

        data: data,

        options: options

      });

 

  });

</script>
            
         
