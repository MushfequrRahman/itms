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
                  <th>Date</th>
                </tr>
                </thead>
                <tbody>
                <?php 
				 $i=1;
				foreach($utl as $row)
				{ ?>
                <tr>
                  
                  
                 
                  
                  <td style="vertical-align:middle;"><?php echo $row['factoryid'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['userid'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['ename'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['subsectionname'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['efficiency'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['varience'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['cutt2shiploss'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['wmcratio'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['dhusf'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['fivesscore'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['wto'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['woabsentism'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['ontpre'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['wofeedback'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['sleave'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['sabsent'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['slate'];?></td>
                  <?php $cdate = date("d-m-Y", strtotime($row['cdate'])); ?>
                  <td style="vertical-align:middle;"><?php echo $cdate;?></td>
                </tbody>
               <?php } ?>
              </table>
            </div>
            
        

