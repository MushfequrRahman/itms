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
                  <th>SWOT Type</th>
                  <th>Factory ID</th>
                  <th>User ID</th>
                  <th>By ID</th>
                  <th>Details</th>
                  <th>Date</th>
                </tr>
                </thead>
                <tbody>
                <?php 
				 $i=1;
				foreach($usl as $row)
				{ ?>
                <tr>
                  
                  
                 
                  
                 
                  <td style="vertical-align:middle;"><?php echo $i++;?></td>
                  <td style="vertical-align:middle;"><?php echo $row['swot_type'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['factoryid'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['userid'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['sbyid'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['sdetails'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['sdate'];?></td>
                </tbody>
               <?php } ?>
              </table>
            </div>
            


