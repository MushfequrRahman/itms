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
               
                  <th>Factory </th>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Line</th>
                  <th>Efficiency</th>
                  <th>Varience</th>
                  <th>Cutt <br/>2Ship</br/>Loss</th>
                  <th>Worker-M/C Ratio</th>
                  <th>DHU<br/>(Sewing<br/>+<br/>Finishing)</th>
                  <th>5s Score</th>
                  <th>Worker Turn Over</th>
                  <th>Absenteeism <br/>of<br/> Worker</th>
                  <th>On <br/>Time <br/>Presence</th>
                  <th>Worker Feed Back</th>
                  <th>S.Leave</th>
                  <th>S.Absent</th>
                  <th>S.Late</th>
                </tr>
                </thead>
                <tbody>
                <?php 
				 $i=1;
				foreach($utl as $row)
				{ ?>
                <tr>
                  
                  <?php
				  $pd1 = strtotime($pd);
				  $wd1 = strtotime($wd);
				  $datediff = $wd1-$pd1;
				  $countday=round($datediff / (60 * 60 * 24));
				  ?>
                 
                  <?php /*?><td style="vertical-align:middle;"><?php echo $pd;?></td>
                  <td style="vertical-align:middle;"><?php echo $wd;?></td>
                  <td style="vertical-align:middle;"><?php echo $countday;?></td><?php */?>
                  <td style="vertical-align:middle;"><?php echo $row['factoryid'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['userid'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['ename'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['subsectionname'];?></td>
                  <?php
				  if($countday==0)
				  {
				  ?>
                  <td style="vertical-align:middle;"><?php echo $row['efficiency'];?></td>
                  <?php
				  }
				  else
				  {
					  ?>
                      <td style="vertical-align:middle;"><?php echo number_format(($row['efficiency']/$row['wod']),2);?></td>
                      <?php
				  }?>
                  <?php
				  if($countday==0)
				  {
				  ?>
                  <td style="vertical-align:middle;"><?php echo $row['varience'];?></td>
                  <?php
				  }
				  else
				  {
					  ?>
                      <td style="vertical-align:middle;"><?php echo number_format(($row['varience']/$row['wod']),2);?></td>
                      <?php
				  }?>
                  <?php
				  if($countday==0)
				  {
				  ?>
                  <td style="vertical-align:middle;"><?php echo $row['cutt2shiploss'];?></td>
                  <?php
				  }
				  else
				  {
					  ?>
                      <td style="vertical-align:middle;"><?php echo number_format(($row['cutt2shiploss']/$row['wod']),2);?></td>
                      <?php
				  }?>
                  <?php
				  if($countday==0)
				  {
				  ?>
                  <td style="vertical-align:middle;"><?php echo $row['wmcratio'];?></td>
                  <?php
				  }
				  else
				  {
					  ?>
                      <td style="vertical-align:middle;"><?php echo number_format(($row['wmcratio']/$row['wod']),2);?></td>
                      <?php
				  }?>
                  <?php
				  if($countday==0)
				  {
				  ?>
                  <td style="vertical-align:middle;"><?php echo $row['dhusf'];?></td>
                  <?php
				  }
				  else
				  {
					  ?>
                      <td style="vertical-align:middle;"><?php echo number_format(($row['dhusf']/$row['wod']),2);?></td>
                      <?php
				  }?>
                  
                  <td style="vertical-align:middle;"><?php echo $row['fivesscore'];?></td>
                  <?php
				  if($countday==0)
				  {
				  ?>
                  <td style="vertical-align:middle;"><?php echo $row['wto'];?></td>
                  <?php
				  }
				  else
				  {
					  ?>
                      <td style="vertical-align:middle;"><?php echo number_format(($row['wto']/$row['wod']),2);?></td>
                      <?php
				  }
				  ?>
                  <?php
				  if($countday==0)
				  {
				  ?>
                  <td style="vertical-align:middle;"><?php echo $row['woabsentism'];?></td>
                  <?php
				  }
				  else
				  {
					  ?>
                      <td style="vertical-align:middle;"><?php echo number_format(($row['woabsentism']/$row['wod']),2);?></td>
                      <?php
				  }
				  ?>
                  <?php
				  if($countday==0)
				  {
				  ?>
                  <td style="vertical-align:middle;"><?php echo $row['ontpre'];?></td>
                  <?php
				  }
				  else
				  {
					  ?>
                      <td style="vertical-align:middle;"><?php echo number_format(($row['ontpre']/$row['wod']),2);?></td>
                      <?php
				  }
				  ?>
                  
                  <td style="vertical-align:middle;"><?php echo $row['wofeedback'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['sleave'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['sabsent'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['slate'];?></td>
                </tbody>
               <?php } ?>
              </table>
            </div>
            
         

