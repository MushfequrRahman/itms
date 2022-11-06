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
                  <th>Position</th>
                  <th>Region</th>
                  <th>Area</th>
                  <th>Territory</th>
                  <!--<th>F</th>-->
                  <!--<th>Insecticide</th>
                  <th>Herbicide</th>
                  <th>Nutrient</th>-->
                  <!--<th>Product</th>-->
                  <th>Sales Target</th>
                  <th>Collection Target</th>
                  <th>Sales Achievement</th>
                  <th>Collection Achievement</th>
                  <th>Total Collection Achievement(%)</th>
                  <th>Incentive</th>
                  <!--<th>Date</th>-->
                  <!--<th>Sales Date</th>
                  <th>Collection Date</th>-->
                  
                </tr>
                </thead>
                <tbody>
                <?php 
				$i=1;
				//foreach($ul1 as $row1)
//				{ 
//				//echo $row1['slug'];
//				//if($row1['userid']=='HO111')
////				{
//				if($row1['productid']==10)
//								{
//            						// $row['slug'];
//									echo $row1['userid'];
//									  @$p10=(round(($row1['salesach']/$row1['tamount']),2)*100);
//								}
//						if($row1['productid']==11)
//								{
//            						//echo $row['slug'];
//									echo $row1['userid'];
//									 @$p11=(round(($row1['salesach']/$row1['tamount']),2)*100);
//								}
//						if($row1['productid']==12)
//								{
//            						echo $row1['userid'];
//									@$p12=(round(($row1['salesach']/$row1['tamount']),2)*100);
//								}
//						if($row1['productid']==13)
//								{
//            						echo $row1['userid'];
//									@$p13=(round(($row1['salesach']/$row1['tamount']),2)*100);
//								}
//				//}
//				}
				foreach($ul as $row)
				{ 
				echo $row['productid'];
				
				  if($row['productid']==10)
								{
            						 //$row['slug'];
									 @$p10=(round(($row['salesach']/$row['tamount']),2)*100);
								}
						if($row['productid']==11)
								{
            						//echo $row['slug'];
									echo @$p11=(round(($row['salesach']/$row['tamount']),2)*100);
								}
						if($row['productid']==12)
								{
            						@$p12=(round(($row['salesach']/$row['tamount']),2)*100);
								}
						if($row['productid']==13)
								{
            						@$p13=(round(($row['salesach']/$row['tamount']),2)*100);
								}
				
				?>
                <tr>
                  
                  <td style="vertical-align:middle;"><?php echo $i++;?></td>
                  <?php /*?><td style="vertical-align:middle;"><?php echo $row['accid'];?></td><?php */?>
                  <td style="vertical-align:middle;"><?php echo $row['userid'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['ename'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['parentdesignationid'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['positionname'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['regionname'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['areaname'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['territoryname'];?></td>
                  <?php /*?><td style="vertical-align:middle;"><?php echo $row['slug'];?></td><?php */?>
                  <?php /*?><td style="vertical-align:middle;"><?php echo (round(($row['salesach']/$row['tamount']),2)*100);?></td><?php */?>
                  <td style="vertical-align:middle;"><?php echo $row['tamount'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['tcamount'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['salesach'];?></td>
                  
                  <td style="vertical-align:middle;"><?php echo $row['collectionach'];?></td>
                  <?php $tca=(round(($row['tcollectionach']/$row['tcamount']),2)*100);?>
                  <td style="vertical-align:middle;"><?php echo $tca."%";?></td>
                  
                  <!--Position 1-->
                 <?php /*?> <?php
				  if($row['positionid']==1 && @$p10>=9 && @$p11>=9 && @$p12>=9 && @$p13>=5 && $tca >= 5 && $tca <= 90.99)
				  	{
				  ?>
                  <td style="vertical-align:middle;">0.5%</td>
                  <?php
					}
				  ?><?php */?>
				  <?php /*?><?php
				  if($row['positionid']==1 && @$p10>=95 && @$p11>=95 && @$p12>=90 && @$p13>=85 && $tca >= 85 && $tca <= 90.99)
				  	{
				  ?>
                  <td style="vertical-align:middle;">0.5%</td>
                  <?php
					}
				  ?><?php */?>
                  <?php
				  if($row['positionid']==1 && @$p10>=95 && @$p11>=95 && @$p12>=90 && @$p13>=85 && $tca >= 91 && $tca <= 100.99)
				  	{
				  ?>
                  <td style="vertical-align:middle;">0.75%</td>
                  <?php
					}
				  ?>
                  <?php
				  if($row['positionid']==1 && @$p10>=95 && @$p11>=95 && @$p12>=90 && @$p13>=85 && $tca >= 101 && $tca <= 109.99)
				  	{
				  ?>
                  <td style="vertical-align:middle;">1.00%</td>
                  <?php
					}
				  ?>
                  <?php
				  if($row['positionid']==1 && @$p10>=95 && @$p11>=95 && @$p12>=90 && @$p13>=85 && $tca >= 110)
				  	{
				  ?>
                  <td style="vertical-align:middle;">1.10%</td>
                  <?php
					}
				  ?>
                  
                  
                  <!--Position 2-->
                  
				  <?php
				  if($row['positionid']==2 && @$p10>=90 && @$p11>=90 && @$p12>=90 && @$p13>=85 && $tca >= 85 && $tca <= 90.99)
				  	{
				  ?>
                  <td style="vertical-align:middle;">0.20%</td>
                  <?php
					}
				  ?>
                  <?php
				  if($row['positionid']==2 && @$p10>=90 && @$p11>=90 && @$p12>=90 && @$p13>=85 && $tca >= 91 && $tca <= 100.99)
				  	{
				  ?>
                  <td style="vertical-align:middle;">0.30%</td>
                  <?php
					}
				  ?>
                  <?php
				  if($row['positionid']==2 && @$p10>=90 && @$p11>=90 && @$p12>=90 && @$p13>=85 && $tca >= 101 && $tca <= 109.99)
				  	{
				  ?>
                  <td style="vertical-align:middle;">0.40%</td>
                  <?php
					}
				  ?>
                  <?php
				  if($row['positionid']==2 && @$p10>=90 && @$p11>=90 && @$p12>=90 && @$p13>=85 && $tca >= 110)
				  	{
				  ?>
                  <td style="vertical-align:middle;">0.50%</td>
                  <?php
					}
				  ?>
                  
                </tr>
                </tbody>
               <?php } ?>
              </table>
            </div>
            
         
