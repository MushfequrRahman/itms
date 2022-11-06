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
<script type="text/javascript">
$(function () {
    jQuery(".pd").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery(".wd").datepicker({dateFormat: 'dd-mm-yy'});
	})
</script> 
            
                <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
             	<table id="tableData" class="table table-hover table-bordered">
              	<thead style="background:#91b9e6;">
                <tr>
               
                  
                </tr>
                </thead>
                <tbody>
                <?php 
				 $i=1;
				foreach($utl as $row)
				{ ?>
                
                  
                  <?php
				  $pd1 = strtotime($pd);
				  $wd1 = strtotime($wd);
				  $datediff = $wd1-$pd1;
				  $countday=round($datediff / (60 * 60 * 24));
				  ?>
                   <tr>
                 <td>Image</td>
                  <?php
				  	if($row['image']!=='')
						{	
					?>
                  			<td style="vertical-align:middle;"><img style="width:50px; height:50px;" src="<?php echo base_url().'assets/uploads/users/'.$row['image'];?>" alt="User profile picture"></td>
                  <?php
						}
					else
						{
					?>
                    		<td style="vertical-align:middle;"><img style="width:50px; height:50px;" src="<?php echo base_url().'assets/uploads/users/pic.jpg';?>" alt="User profile picture"></td>
                    <?php
						}
						?>
                  </tr>
                 <tr>
                 <td>Factory </td>
                  <td style="vertical-align:middle;"><?php echo $row['factoryid'];?></td>
                  </tr>
                  <tr>
                 <td>ID </td>
                  <td style="vertical-align:middle;"><?php echo $userid=$row['userid'];?></td>
                  </tr>
                  <td>Name</td>
                  <td style="vertical-align:middle;"><?php echo $row['ename'];?></td>
                  </tr>
                  <td>Line </td>
                  <td style="vertical-align:middle;"><?php echo $row['subsectionname'];?></td>
                  </tr>
                   
                  
                  
                </tbody>
               <?php } ?>
              </table>
              <h4 style="text-align:center;">Marks Obtained</h4>
              <!--<h4 style="text-align:center;">Personal Score</h4>-->
              <table id="tableData" class="table table-hover table-bordered">
              	<thead style="background:#91b9e6;">
                <tr>
                <th>Title</th>
                <th>Type</th>
                <th>Figure</th>
                <th>Base</th>
                <th>Score</th>
                <!--<th>Total</th>-->
                </tr>
                </thead>
                <tbody>
                <tr>
                <td rowspan="5" style="vertical-align:middle;"><strong>Personal Score</strong></td>
                </tr>
                <!--<tr>
                <td rowspan="7" style="vertical-align:middle;"><strong>Line Score</strong></td>
                </tr>-->
                <?php 
				 
				foreach($utl as $row)
				{ ?>
                <tr>
                <td>Leave</td>
                <td><?php echo $row['sleave'];?></td>
                <td>1</td>
                <?php
				if($row['sleave'] < 0.5 && $row['sleave']!=='')
				{
					?>
                <td><?php echo $sleave=1;?></td>
                <?php
				}
				else
				{
				?>
                <td><?php echo $sleave=0;?></td>
                <?php
				}
				?>
                </tr>
                <?php
				}
				?>
                
                
                <?php 
				 
				foreach($utl as $row)
				{ ?>
                <tr>
                <td>Absent</td>
                <td><?php echo $row['sabsent'];?></td>
                <td>2</td>
                <?php
				if($row['sabsent'] == 0 && $row['sabsent']!== '')
				{
					?>
                <td><?php echo $sabsent=2;?></td>
                <?php
				}
				elseif($row['sabsent'] <= 0.5 && $row['sabsent']!== '')
				{
				?>
                <td><?php echo $sabsent=1;?></td>
                <?php
				}
				else
				{
				?>
     
                <td><?php echo $sabsent=0;?></td>
                <?php
				}
				?>
                </tr>
                <?php
				}
				?>
                
                
                <?php 
				 
				foreach($utl as $row)
				{ ?>
                <tr>
                <td>Late</td>
                <td><?php echo $row['slate'];?></td>
                <td>1</td>
                <?php
				if($row['slate'] == 0 && $row['slate'] <=3 && $row['slate']!=='')
				{
					?>
                <td><?php echo $slate=1;?></td>
                <?php
				}
				elseif($row['slate'] < 4)
				{
				?>
                <td><?php echo $slate=0;?></td>
                <?php
				}
				else
				{
				?>
     
                <td><?php echo $slate=0;?></td>
                <?php
				}
				?>
                </tr>
                <?php
				}
				?>
                
                <?php 
				 
				foreach($utl1 as $row)
				{ ?>
                <tr>
                <td>DC.Action</td>
                <td><?php echo $row['disposal'];?></td>
                <td>1</td>
                <?php
				if($row['disposal'] == 0)
				{
					?>
                <td><?php echo $disposal=1;?></td>
                <?php
				}
				
				else
				{
				?>
     
                <td><?php echo $disposal=0;?></td>
                <?php
				}
				?>
                </tr>
                <?php
				}
				?>
                <?php /*?><tr>
                <td rowspan="4"><?php $pts=$sleave+$sabsent+$slate;?></td>
                </tr><?php */?>
                <!--</tbody>
                </table>
                
                <h4 style="text-align:center;">Line Score</h4>
              <table id="tableData" class="table table-hover table-bordered">
              	<thead style="background:#91b9e6;">
                <tr>
                <th>Title</th>
                <th>Type</th>
                <th>Figure</th>
                <th>Base</th>
                <th>Score</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                <td rowspan="7" style="vertical-align:middle;"><strong>Line Score</strong></td>
                </tr>-->
                <tr>
                <td rowspan="7" style="vertical-align:middle;"><strong>Line Score</strong></td>
                </tr>
                <?php 
				 
				foreach($utl as $row)
				{ ?>
                <tr>
                <td>Efficiency</td>
                <?php
				  if($countday==0)
				  {
				  ?>
                  <td style="vertical-align:middle;"><?php echo $efficiency=$row['efficiency'];?></td>
                  <?php
				  }
				  else
				  {
					  ?>
                      <td style="vertical-align:middle;"><?php echo $efficiency=number_format(($row['efficiency']/$row['wod']),2);?></td>
                      <?php
				  }?>
                <td>40</td>
                
                  <?php
				  
					if($efficiency <10)
					{
				?>
                <td><?php echo $es=0;?></td>
                <?php
				  }
				  elseif($efficiency >= 10 && $efficiency <= 20.99)
				  {
				  ?>
                  <td><?php echo $es=10;?></td>
                  <?php
				  }
				  
				  
				  elseif($efficiency >= 21 && $efficiency <=30.99)
				  {
				  ?>
                  <td><?php echo $es=15;?></td>
                  <?php
				  }
				  
				  elseif($efficiency >= 31 && $efficiency <=40.99)
				  {
				  ?>
                  <td><?php echo $es=20;?></td>
                  <?php
				  }
				  
				  
				  elseif($efficiency >= 41 && $efficiency <=50.99)
				  {
				  ?>
                  <td><?php echo $es=25;?></td>
                  <?php
				  }
				  
				 
				  
				  
				  elseif($efficiency >= 51 && $efficiency <=60.99)
				  {
				  ?>
                  <td><?php echo $es=30;?></td>
                  <?php
				  }
				  
				  
				 
				  
				  
				  elseif($efficiency >= 61 && $efficiency <=64.99)
				  {
				  ?>
                  <td><?php echo $es=35;?></td>
                  <?php
				  }
				  
				  
				  
				 
				  
				  
				  elseif($efficiency >= 65)
				  {
				  ?>
                  <td><?php echo $es=40;?></td>
                  <?php
				  }
				  ?>
                </tr>
                <?php
				}
				?>
                
                
                <?php 
				 
				foreach($utl as $row)
				{ ?>
                <tr>
                <td>DHU</td>
                 <?php
				  if($countday==0)
				  {
				  ?>
                  <td style="vertical-align:middle;"><?php echo $dhusf=$row['dhusf'];?></td>
                  <?php
				  }
				  else
				  {
					  ?>
                      <td style="vertical-align:middle;"><?php echo $dhusf=number_format(($row['dhusf']/$row['wod']),2);?></td>
                      <?php
				  }?>
                  <td>20</td>
                   <?php
				  
					if($dhusf <11)
					{
				?>
                <td><?php echo $ds=20;?></td>
                <?php
				  }
				  elseif($dhusf >= 11 && $dhusf <= 15.99)
				  {
				  ?>
                  <td><?php echo $ds=15;?></td>
                  <?php
				  }
				  
				  
				  elseif($dhusf >= 16 && $dhusf <=20.99)
				  {
				  ?>
                  <td><?php echo $ds=10;?></td>
                  <?php
				  }
				  
				  elseif($dhusf>= 21 && $dhusf <=25.99)
				  {
				  ?>
                  <td><?php echo $ds=5;?></td>
                  <?php
				  }
				  
				  
				  elseif($dhusf >= 26)
				  {
				  ?>
                  <td><?php echo $ds=0;?></td>
                  <?php
				  }
				  
				 
				  
				  
				  ?>
                </tr>
                <?php
				}
				?>
                
                
                 <?php 
				 
				foreach($utl as $row)
				{ ?>
                <tr>
                <td>ABS</td>
                 <?php
				  if($countday==0)
				  {
				  ?>
                  <td style="vertical-align:middle;"><?php echo $abs=$row['woabsentism'];?></td>
                  <?php
				  }
				  else
				  {
					  ?>
                      <td style="vertical-align:middle;"><?php echo $abs=number_format(($row['woabsentism']/$row['wod']),2);?></td>
                      <?php
				  }
				  ?>
                  <td>20</td>
                   <?php
				  
					if($abs > 12.99)
					{
				?>
                <td><?php echo $as=0;?></td>
                <?php
				  }
				  elseif($abs >= 10 && $abs <= 12.99)
				  {
				  ?>
                  <td><?php echo $as=2.5;?></td>
                  <?php
				  }
				  
				  
				  elseif($abs >= 7 && $abs <=9.99)
				  {
				  ?>
                  <td><?php echo $as=5;?></td>
                  <?php
				  }
				  
				  elseif($abs>= 4 && $abs <=6.99)
				  {
				  ?>
                  <td><?php echo $as=10;?></td>
                  <?php
				  }
				  
				  
				  elseif($abs < 4)
				  {
				  ?>
                  <td><?php echo $as=15;?></td>
                  <?php
				  }
				  
				 
				  
				  
				  ?>
                  </tr>
                <?php
				}
				?>
                  
                <?php 
				 
				foreach($utl as $row)
				{ ?>
                <tr>
<td>Mig</td>
                 <?php
				  if($countday==0)
				  {
				  ?>
                  <td style="vertical-align:middle;"><?php echo $mig=$row['wmcratio'];?></td>
                  <?php
				  }
				  else
				  {
					  ?>
                      <td style="vertical-align:middle;"><?php echo $mig=number_format(($row['wmcratio']/$row['wod']),2);?></td>
                      <?php
				  }?>
                  <td>5</td>
                   <?php
				  
					if($mig > 15.99)
					{
				?>
                <td><?php echo $ms=0;?></td>
                <?php
				  }
				  elseif($mig >= 13 && $mig <= 15.99)
				  {
				  ?>
                  <td><?php echo $ms=1;?></td>
                  <?php
				  }
				  
				  
				  elseif($mig >= 10 && $mig <=12.99)
				  {
				  ?>
                  <td><?php echo $ms=2;?></td>
                  <?php
				  }
				  
				  elseif($mig>= 7 && $mig <=9.99)
				  {
				  ?>
                  <td><?php echo $ms=3;?></td>
                  <?php
				  }
				  
				  
				  elseif($mig>= 4 && $mig<=6.99)
				  {
				  ?>
                  <td><?php echo $ms=4;?></td>
                  <?php
				  }
				  
				 
				  
				  
				  
                  elseif($mig < 4)
				  {
				  ?>
                  <td><?php echo $ms=5;?></td>
                  <?php
				  }
				  
				 
				  
				  
				  ?>
                </tr>
                <?php
				}
				?>
                
                
                <?php 
				 
				foreach($utl as $row)
				{ ?>
                <tr>
<td>5s</td>
                
                  <td style="vertical-align:middle;"><?php echo $fs=$row['fivesscore'];?></td>
                 
                  <td>5</td>
                   <?php
				  
					if($fs < 4)
					{
				?>
                <td><?php echo $fss=0;?></td>
                <?php
				  }
				  elseif($fs >= 4 && $fs <= 4.2)
				  {
				  ?>
                  <td><?php echo $fss=1;?></td>
                  <?php
				  }
				  
				  
				  elseif($fs >= 4.3 && $fs <=4.4)
				  {
				  ?>
                  <td><?php echo $fss=2;?></td>
                  <?php
				  }
				  
				  elseif($fs>= 4.5 && $fs <=4.6)
				  {
				  ?>
                  <td><?php echo $fss=3;?></td>
                  <?php
				  }
				  
				  
				  elseif($fs>= 4.7 && $fs<=4.8)
				  {
				  ?>
                  <td><?php echo $fss=4;?></td>
                  <?php
				  }
				  
				 
				  
				  
				  
                  elseif($fs > 4.8)
				  {
				  ?>
                  <td><?php echo $fss=5;?></td>
                  <?php
				  }
				  
				 
				  
				  
				  ?>
                </tr>
                <?php
				}
				?>
                
                
                
                <?php 
				 
				foreach($utl as $row)
				{ ?>
                <tr>
<td>OTP</td>
                
                  <?php
				  if($countday==0)
				  {
				  ?>
                  <td style="vertical-align:middle;"><?php echo $otp=$row['ontpre'];?></td>
                  <?php
				  }
				  else
				  {
					  ?>
                      <td style="vertical-align:middle;"><?php echo $otp=number_format(($row['ontpre']/$row['wod']),2);?></td>
                      <?php
				  }
				  ?>
                 
                  <td>5</td>
                   <?php
				  
					if($otp < 15)
					{
				?>
                <td><?php echo $os=0;?></td>
                <?php
				  }
				  elseif($otp >= 15 && $fs <= 24.99)
				  {
				  ?>
                  <td><?php echo $os=1;?></td>
                  <?php
				  }
				  
				  
				  elseif($otp >= 25 && $otp <=34.99)
				  {
				  ?>
                  <td><?php echo $os=1.5;?></td>
                  <?php
				  }
				  
				  elseif($otp>= 35 && $otp <=44.99)
				  {
				  ?>
                  <td>2<?php echo $os=2;?></td>
                  <?php
				  }
				  
				  
				  elseif($otp>= 45 && $otp<=54.99)
				  {
				  ?>
                  <td><?php echo $os=2.5;?></td>
                  <?php
				  }
				  
				 
				  
				  
				  
                  elseif($otp>= 55 && $otp<=64.99)
				  {
				  ?>
                  <td><?php echo $os=3;?></td>
                  <?php
				  }
				  
				 
				  
				  
				  
                  elseif($otp>= 65 && $otp<=74.99)
				  {
				  ?>
                  <td><?php echo $os=3.5;?></td>
                  <?php
				  }
				  
				 
				  
				  
				  
                  elseif($otp>= 75 && $otp<=84.99)
				  {
				  ?>
                  <td><?php echo $os=4;?></td>
                  <?php
				  }
				  
				 
				  
				  
				  
                   elseif($otp>= 85 && $otp<=94.99)
				  {
				  ?>
                  <td><?php echo $os=4.5;?></td>
                  <?php
				  }
				  
				 
				  
				  
				  
                  elseif($otp>=95)
				  {
				  ?>
                  <td><?php echo $os=5;?></td>
                  <?php
				  }
				  
				 
				  
				  
				  ?>
                </tr>
                <?php
				}
				?>
                <tr>
                <td rowspan="6" style="vertical-align:middle;"><strong>Head Of The Department</strong></td>
                </tr>
                <?php 
				 
				foreach($utl2 as $row)
				{ ?>
                <tr>
<td>Command & Control</td>
 
 <td><?php echo $row['cc'];?></td>

				
                <td>5</td>
                <td><?php echo $row['cc'];?></td>
                
                <?php
                }
				?>
                </tr>
                <?php 
				 
				foreach($utl2 as $row)
				{ ?>
                <tr>
<td>Attitude</td>
 
 <td><?php echo $row['at'];?></td>

				
                <td>5</td>
                <td><?php echo $row['at'];?></td>
                
                <?php
                }
				?>
                </tr>
                <?php 
				 
				foreach($utl2 as $row)
				{ ?>
                <tr>
<td>Loyality</td>
 
 <td><?php echo $row['lo'];?></td>

				
                <td>5</td>
                <td><?php echo $row['lo'];?></td>
                
                <?php
                }
				?>
                </tr>
                <?php 
				 
				foreach($utl2 as $row)
				{ ?>
                <tr>
<td>Dependency</td>
 
 <td><?php echo $row['de'];?></td>

				
                <td>5</td>
                <td><?php echo $row['de'];?></td>
                
                <?php
                }
				?>
                </tr>
                <?php 
				 
				foreach($utl2 as $row)
				{ ?>
                <tr>
<td>Responsibility</td>
 
 <td><?php echo $row['re'];?></td>

				
                <td>5</td>
                <td><?php echo $row['re'];?></td>
                
                <?php
                }
				?>
                </tr>
                <tr>
               <td><strong>Result</strong></td>
                <td>Personal Score:<?php echo $pts=$sleave+$sabsent+$slate+$disposal;?>&nbsp;&nbsp;Line Score:<?php echo $lts=$es+$ds+$as+$ms+$fss+$os;?>&nbsp;&nbsp;HOD Score:<?php echo $hod=(($row['cc']+$row['at']+$row['lo']+$row['de']+$row['re'])/5);?></td>
                
                <td>Total:<?php echo $tfs=$pts+$lts+$hod;?></td>
                <?php
				if($tfs>=85)
				{
				?>
                <td>Grade:A</td>
                <?php
                }
				
                elseif($tfs>=76 && $tfs<=84)
				{
				?>
                <td>Grade:B</td>
                <?php
                }
				
				elseif($tfs>=51 && $tfs<=75)
				{
				?>
                <td>Grade:C</td>
                <?php
                }
				
                elseif($tfs>=31 && $tfs<=50)
				{
				?>
                <td>Grade:D</td>
                <?php
                }
				elseif($tfs>=0 && $tfs<=30)
				{
				?>
                <td>Grade:E</td>
                <?php
                }
				?>
                
                 <?php
				if($tfs>=60)
				{
				?>
                <td>5%</td>
                <?php
                }
				
                elseif($tfs>=70)
				{
				?>
                <td>8%</td>
                <?php
                }
				
				elseif($tfs>=80)
				{
				?>
                <td>10%</td>
                <?php
                }
				
                elseif($tfs>=85)
				{
				?>
                <td>12%</td>
                <?php
                }
				elseif($tfs>=90)
				{
				?>
                <td>15%</td>
                <?php
                }
				?>
                </tr>
                </tbody>
                </table>
                
                
                <?php /*?><table id="tableData" class="table table-hover table-bordered">
              	<thead style="background:#91b9e6;">
                <tr>
                <th>Title</th>
                <th>Command & Control</th>
                <th>Attitude</th>
                <th>Loyality</th>
                <th>Dependency</th>
                <th>Responsibility</th>
                <th>Total</th
                ></tr>
                </thead>
                <tbody>
                <?php 
				 
				foreach($utl2 as $row)
				{ ?>
                <tr>
                <td><strong>Head Of The Department</strong></td>
                <td><?php echo $row['cc'];?></td>
               	<td><?php echo $row['at'];?></td>
                <td><?php echo $row['lo'];?></td>
                <td><?php echo $row['de'];?></td>
                <td><?php echo $row['re'];?></td>
                <td><?php echo $hod=(($row['cc']+$row['at']+$row['lo']+$row['de']+$row['re'])/5);?></td>
                
                </tr>
                <?php
				}
				?>
                </tbody>
                </table>
                <table id="tableData" class="table table-hover table-bordered">
              	<thead style="background:#91b9e6;">
                <tr>
                <th>Title</th>
                <th>Personal Score</th>
                <th>Line Score</th>
                <th>Head Of The Department</th>
                <th>Total</th>
                <th>Grade</th>
                <th>Increment</th>
                </tr>
                </thead>
                <tbody>
                <?php 
				 
				foreach($utl2 as $row)
				{ ?>
                <tr>
                <td><strong>Result</strong></td>
                <td><?php echo $pts;?></td>
               	<td><?php echo $lts;?></td>
                <td><?php echo $hod;?></td>
                <td><?php echo $tfs=$pts+$lts+$hod;?></td>
                <?php
				if($tfs>=85)
				{
				?>
                <td>A</td>
                <?php
                }
				
                elseif($tfs>=76 && $tfs<=84)
				{
				?>
                <td>B</td>
                <?php
                }
				
				elseif($tfs>=51 && $tfs<=75)
				{
				?>
                <td>C</td>
                <?php
                }
				
                elseif($tfs>=31 && $tfs<=50)
				{
				?>
                <td>D</td>
                <?php
                }
				elseif($tfs>=0 && $tfs<=30)
				{
				?>
                <td>E</td>
                <?php
                }
				?>
                
                <?php
				if($tfs>=60)
				{
				?>
                <td>5%</td>
                <?php
                }
				
                elseif($tfs>=70)
				{
				?>
                <td>8%</td>
                <?php
                }
				
				elseif($tfs>=80)
				{
				?>
                <td>10%</td>
                <?php
                }
				
                elseif($tfs>=85)
				{
				?>
                <td>12%</td>
                <?php
                }
				elseif($tfs>=90)
				{
				?>
                <td>15%</td>
                <?php
                }
				?>
                
                </tr>
                <?php
				}
				?>
                </tbody>
                </table><?php */?>
               
                 
            </div>
            
         

