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
                  <th>ID</th>
                  <th>Vehicle No</th>
                  <th>Month Start Reading</th>
                  <th>Month End Reading</th>
        		  <th>Meter Reading</th>
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
                  <td style="vertical-align:middle;"><?php echo $row['aiid'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['vrn'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['msr'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['mer'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['vr'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['vmonth'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['vyear'];?></td>
                </tr>
                
               <?php } ?>
               </tbody>
              </table>
            </div>
            
         
