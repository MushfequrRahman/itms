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
                  <th>Fuel</th>
                  <th>Fuel Qty(Liter)</th>
                  <th>Date</th>
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
                  <td style="vertical-align:middle;"><?php echo $row['afuid'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['vfurn'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['fuel'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['vfuse'];?></td>
                  <td style="vertical-align:middle;"><?php echo  date("d-m-Y", strtotime($row['vfudate']));?></td>
                  <td style="vertical-align:middle;"><?php echo $row['vfumonth'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['vfuyear'];?></td>
                </tr>
                
               <?php } ?>
               </tbody>
              </table>
            </div>
            
         
