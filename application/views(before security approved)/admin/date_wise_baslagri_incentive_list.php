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
                  <!--<th>Group Name</th>-->
                  <th>User ID</th>
                  <th>User Name</th>
                  <th>Designation</th>
                  <th>Region</th>
                  <th>Area</th>
                  <th>Territory</th>
                  <th>Product</th>
                  <th>Sales Target</th>
                  <th>Collection Target</th>
                  <th>Sales Achievement</th>
                  <th>Collection Achievement</th>
                  <th>Date</th>
                  <!--<th>Sales Date</th>
                  <th>Collection Date</th>-->
                  
                </tr>
                </thead>
                <tbody>
                <?php 
				$i=1;
				foreach($ul as $row)
				{ ?>
                <tr>
                  
                  <td style="vertical-align:middle;"><?php echo $i++;?></td>
                  <?php /*?><td style="vertical-align:middle;"><?php echo $row['accid'];?></td><?php */?>
                  <td style="vertical-align:middle;"><?php echo $row['userid'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['ename'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['parentdesignationid'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['regionname'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['areaname'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['territoryname'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['slug'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['tamount'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['tcamount'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['salesach'];?></td>
                  
                  <td style="vertical-align:middle;"><?php echo $row['collectionach'];?></td>
                  <td style="vertical-align:middle;"><?php echo date("d-m-Y", strtotime($row['acdate']));?></td>
                  <?php /*?><?php
				  if($row['salachdate']!='0000-00-00')
				  {
				  ?>
                  <td style="vertical-align:middle;"><?php echo date("d-m-Y", strtotime($row['salachdate']));?></td>
                  <?php
                  }
                  else
				  {
                  ?>
                  <td style="vertical-align:middle;"></td>
                  <?php
                  }
				  ?>
                  <?php
				  if($row['collecachdate']!='0000-00-00')
				  {
				  ?>
                  <td style="vertical-align:middle;"><?php echo date("d-m-Y", strtotime($row['collecachdate']));?></td>
                  <?php
                  }
                  else
				  {
                  ?>
                  <td style="vertical-align:middle;"></td>
                  <?php
                  }
				  ?><?php */?>
                 <?php /*?> <?php $adate=date("d-m-Y", strtotime($row['adate']));?>
                  <td style="vertical-align:middle;"><?php echo $adate;?></td><?php */?>
                  
                </tr>
                </tbody>
               <?php } ?>
              </table>
            </div>
            
         
