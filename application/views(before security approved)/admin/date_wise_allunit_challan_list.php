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
                  <th>Token</th>
                  <th>ID</th>
                  <th>Sent Factory Name</th>
                  <th>Destination Buyer Name</th>
        		  <th>Destination Factory Name</th>
                  <!--<th>Location</th>-->
                  <th>Challan Type</th>
                  <th>Product Type</th>
                  <th>Item</th>
                  <th>Sent Quantity</th>
                  <th>Receive Quantity</th>
                  <th>Unit</th>
                  <th>Create Date</th>
                  <th>Create Time</th>
                  <th>Receive Date</th>
                  <th>Receive Time</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <?php 
				$i=1;
				foreach($ul as $row)
				{ ?>
                <tr>
                  
                  <td style="vertical-align:middle;"><?php echo $i++;?></td>
                  
                  
                  
                  <td style="vertical-align:middle;"><?php echo $row['ccid'];?></td>
                  
                  <td style="vertical-align:middle;"><?php echo $row['manualid'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['sent_factoryid'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['buyername'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['receive_factoryid'];?></td>
                  <?php /*?><td style="vertical-align:middle;"><?php echo $row['location'];?></td><?php */?>
                  <td style="vertical-align:middle;"><?php echo $row['challantype'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['producttype'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['item'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['sqty'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['rqty'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['productunitname'];?></td>
                  <?php $sdate=date("d-m-Y", strtotime($row['sdate']));?>
                  <td style="vertical-align:middle;"><?php echo $sdate;?></td>
                  <td style="vertical-align:middle;"><?php echo $row['stime'];?></td>
                  <?php $rdate=date("d-m-Y", strtotime($row['rdate']));
				  if($row['rdate']=='0000-00-00')
				  {
					  ?>
                      <td style="vertical-align:middle;">00-00-0000</td>
				  <?php
				  }
				  else
				  {?>
                  <td style="vertical-align:middle;"><?php echo $rdate;?></td>
                  <?php
				  }
				  ?>
                  <td style="vertical-align:middle;"><?php echo $row['rtime'];?></td>
                  <?php 
				  	if($row['status']==1)
					{
				  ?>
                  <td style="vertical-align:middle;">Not Receive</td>
                  <?php
					}
				  else
				  {
				  ?>
                  <td style="vertical-align:middle;">Receive</td>
                 <?php
					}
				  ?>
                </tr>
                </tbody>
               <?php } ?>
              </table>
            </div>
            
         
