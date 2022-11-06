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
                  <!--<th>Territory</th>-->
                  <!--<th>Product</th>-->
                  <!--<th>Insecticide</th>
                  <th>Herbicide</th>
                  <th>Nutrient</th>-->
                  <!--<th>Product</th>-->
                  <!--<th>Sales Target</th>-->
                  <!--<th>Collection Target</th>-->
                  <!--<th>Sales</th>-->
                  <!--<th>Collection</th>-->
                  <th>Fungicide</th>
                  <th>Insecticide</th>
                  <th>Herbicide</th>
                  <th>Nutrient</th>
                  <!--<th>Achievement</th>-->
                  <th>Total Collection Target</th>
                  <th>Total Collection Achievement</th>
                  <th>Total Collection Achievement(%)</th>
                  <th>Incentive</th>
                  <!--<th>Date</th>
                  <th>Sales Date</th>
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
				//echo $row['productid'];
//				
				  //if($row['p10']==10)
//								{
            						 //$row['slug'];
									 //@$p10=(round(($row['salesach']/$row['tamount']),2)*100);
									 @$p10=$row['p10'];
								//}
						//if($row['p11']==11)
//								{
            						//echo $row['slug'];
									//echo @$p11=(round(($row['salesach']/$row['tamount']),2)*100);
									@$p11=$row['p11'];
						//		//}
//						if($row['p12']==12)
//								{
            						//@$p12=(round(($row['salesach']/$row['tamount']),2)*100);
									@$p12=$row['p12'];
								//}
						//if($row['p13']==13)
//								{
            						//@$p13=(round(($row['salesach']/$row['tamount']),2)*100);
									@$p13=$row['p13'];
								//}
				
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
                  <?php /*?><td style="vertical-align:middle;"><?php echo $row['territoryname'];?></td><?php */?>
                  <?php /*?><td style="vertical-align:middle;"><?php echo $row['slug'];?></td><?php */?>
                  <?php /*?><td style="vertical-align:middle;"><?php echo (round(($row['salesach']/$row['tamount']),2)*100);?></td><?php */?>
                  <?php /*?><td style="vertical-align:middle;"><?php echo $row['tamount'];?></td><?php */?>
                  <?php /*?><td style="vertical-align:middle;"><?php echo $row['tcamount'];?></td><?php */?>
                  <?php /*?><td style="vertical-align:middle;"><?php echo $row['salesach'];?></td><?php */?>
                  <?php /*?><td style="vertical-align:middle;"><?php echo $row['collectionach'];?></td><?php */?>
                  <td style="vertical-align:middle;"><?php echo $row['p10']."%";?></td>
                  <td style="vertical-align:middle;"><?php echo $row['p11']."%";?></td>
                  <td style="vertical-align:middle;"><?php echo $row['p12']."%";?></td>
                  <td style="vertical-align:middle;"><?php echo $row['p13']."%";?></td>
                  <td style="vertical-align:middle;"><?php echo $row['ttcamount'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['tcollectionach'];?></td>
                  
                  <?php $tca=$row['tca'];?>
                  <td style="vertical-align:middle;"><?php echo $tca."%";?></td>
                  
                  <!--Position 1-->
                  <?php /*?><?php
				  if($row['positionid']==1 && @$p10>=9 && @$p11>=9 && @$p12>=9 && @$p13>=8 && $tca >= 8 && $tca <= 90.99)
				  	{
				  ?>
                  <td style="vertical-align:middle;">0.5%</td>
                  <?php
					}
				  ?><?php */?>
                  
				  <?php
				  if($row['positionid']==1 && @$p10>=95 && @$p11>=95 && @$p12>=90 && @$p13>=85 && $tca >= 85 && $tca <= 90.99)
				  	{
				  ?>
                  <td style="vertical-align:middle;">0.5%</td>
                  <?php
					}
				  ?>
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
                  
                  <!--Position 3-->
                  
				  <?php
				  if($row['positionid']==3 && @$p10>=90 && @$p11>=90 && @$p12>=90 && @$p13>=85 && $tca >= 85 && $tca <= 90.99)
				  	{
				  ?>
                  <td style="vertical-align:middle;">0.10%</td>
                  <?php
					}
				  ?>
                  <?php
				  if($row['positionid']==3 && @$p10>=90 && @$p11>=90 && @$p12>=90 && @$p13>=85 && $tca >= 91 && $tca <= 100.99)
				  	{
				  ?>
                  <td style="vertical-align:middle;">0.15%</td>
                  <?php
					}
				  ?>
                  <?php
				  if($row['positionid']==3 && @$p10>=90 && @$p11>=90 && @$p12>=90 && @$p13>=85 && $tca >= 101 && $tca <= 109.99)
				  	{
				  ?>
                  <td style="vertical-align:middle;">0.20%</td>
                  <?php
					}
				  ?>
                  <?php
				  if($row['positionid']==3 && @$p10>=90 && @$p11>=90 && @$p12>=90 && @$p13>=85 && $tca >= 110)
				  	{
				  ?>
                  <td style="vertical-align:middle;">0.25%</td>
                  <?php
					}
				  ?>
                  
                  <!--Position 4-->
                  
				  <?php
				  if($row['positionid']==3 && @$p10>=90 && @$p11>=90 && @$p12>=90 && @$p13>=85 && $tca >= 85 && $tca <= 90.99)
				  	{
				  ?>
                  <td style="vertical-align:middle;">15000</td>
                  <?php
					}
				  ?>
                  <?php
				  if($row['positionid']==3 && @$p10>=90 && @$p11>=90 && @$p12>=90 && @$p13>=85 && $tca >= 91 && $tca <= 100.99)
				  	{
				  ?>
                  <td style="vertical-align:middle;">15000</td>
                  <?php
					}
				  ?>
                  <?php
				  if($row['positionid']==3 && @$p10>=90 && @$p11>=90 && @$p12>=90 && @$p13>=85 && $tca >= 101 && $tca <= 109.99)
				  	{
				  ?>
                  <td style="vertical-align:middle;">15000</td>
                  <?php
					}
				  ?>
                  <?php
				  if($row['positionid']==3 && @$p10>=90 && @$p11>=90 && @$p12>=90 && @$p13>=85 && $tca >= 110)
				  	{
				  ?>
                  <td style="vertical-align:middle;">15000</td>
                  <?php
					}
				  ?>
                  
                  <!--Position 5-->
                  
				  <?php
				  if($row['positionid']==3 && @$p10>=90 && @$p11>=90 && @$p12>=90 && @$p13>=85 && $tca >= 85 && $tca <= 90.99)
				  	{
				  ?>
                  <td style="vertical-align:middle;">30000</td>
                  <?php
					}
				  ?>
                  <?php
				  if($row['positionid']==3 && @$p10>=90 && @$p11>=90 && @$p12>=90 && @$p13>=85 && $tca >= 91 && $tca <= 100.99)
				  	{
				  ?>
                  <td style="vertical-align:middle;">30000</td>
                  <?php
					}
				  ?>
                  <?php
				  if($row['positionid']==3 && @$p10>=90 && @$p11>=90 && @$p12>=90 && @$p13>=85 && $tca >= 101 && $tca <= 109.99)
				  	{
				  ?>
                  <td style="vertical-align:middle;">30000</td>
                  <?php
					}
				  ?>
                  <?php
				  if($row['positionid']==3 && @$p10>=90 && @$p11>=90 && @$p12>=90 && @$p13>=85 && $tca >= 110)
				  	{
				  ?>
                  <td style="vertical-align:middle;">30000</td>
                  <?php
					}
				  ?>
                  
                </tr>
                </tbody>
               <?php } ?>
              </table>
            </div>
            
         
