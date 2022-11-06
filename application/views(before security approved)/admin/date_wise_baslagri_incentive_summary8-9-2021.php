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
            <?php
			$arr = array();
			$user = array();
			$ename = array();
			$pd = array();
			$ph = array();
			$region = array();
			$area = array();
			$teritorry = array();
			$product = array();
			$tamount = array();
			$salesach = array();
			$tcamount=array();
			$collectionach=array();
			
			foreach($ul as $row)
					{
						array_push($user, $row['userid']);
            			array_push($ename, $row['ename']);
						array_push($pd, $row['parentdesignationid']);
						array_push($ph, $row['positionname']);
						array_push($region, $row['regionname']);
						array_push($area, $row['areaname']);
						array_push($teritorry, $row['territoryname']);
						array_push($product, $row['slug']);
						array_push($tamount, $row['tamount']);
						array_push($salesach, $row['salesach']);
						array_push($tcamount, $row['tcamount']);
						array_push($collectionach, $row['collectionach']);

            			if (!isset($arr[$row['userid']])) 
							{
                				$arr[$row['userid']]['rowspan'] = 0;
            				}
            			$arr[$row['userid']]['printed'] = 'no';
            			$arr[$row['userid']]['rowspan'] += 1;
					}
			
             	echo "<table id='tableData' class='table table-hover table-bordered'>
                			<tr>
                   				<th>User ID</th>
                    			<th>Name</th>
								<th>Designation</th>
                  				<th>Position</th>
								<th>Region</th>
                  				<th>Area</th>
                  				<th>Territory</th>
								<th>Product</th>
								<th>Sales Target</th>
								<th>Sales Achievement</th>
								<th>Sales Achievement(%)</th>
								<th>Collection Target</th>
                  				<th>Collection Achievement</th>
								<th>Collection Achievement(%)</th>
                			</tr>";
							for($i=0; $i < sizeof($teritorry); $i++) 
								{
            						$userID = $user[$i];
									$ename1=$ename[$i];
									$pd1=$pd[$i];
									$ph1=$ph[$i];
									$region1=$region[$i];
									$area1=$area[$i];
									$teritorry1=$teritorry[$i];
            						echo "<tr>";
										if ($arr[$userID]['printed'] == 'no') 
											{
               									echo "<td style='vertical-align:middle;' rowspan='".$arr[$userID]['rowspan']."'>".$userID."</td>";
                								$arr[$userID]['printed'] = 'no';
            								}
										if ($arr[$userID]['printed'] == 'no') 
											{
                								echo "<td style='vertical-align:middle;' rowspan='".$arr[$userID]['rowspan']."'>".$ename1."</td>";
                								$arr[$userID]['printed'] = 'yes';
            								}
            							//if ($arr[$userID]['printed'] == 'no') 
//											{
//                								echo "<td style='vertical-align:middle;' rowspan='".$arr[$userID]['rowspan']."'>".$pd1."</td>";
//                								$arr[$userID]['printed'] = 'no';
//            								}
//										if ($arr[$userID]['printed'] == 'no') 
//											{
//                								echo "<td style='vertical-align:middle;' rowspan='".$arr[$userID]['rowspan']."'>".$ph1."</td>";
//                								$arr[$userID]['printed'] = 'no';
//            								}
//										if ($arr[$userID]['printed'] == 'no') 
//											{
//                								echo "<td style='vertical-align:middle;' rowspan='".$arr[$userID]['rowspan']."'>".$region1."</td>";
//                								$arr[$userID]['printed'] = 'no';
//            								}
//										if ($arr[$userID]['printed'] == 'no') 
//											{
//                								echo "<td style='vertical-align:middle;' rowspan='".$arr[$userID]['rowspan']."'>".$area1."</td>";
//                								$arr[$userID]['printed'] = 'no';
//            								}
//										if ($arr[$userID]['printed'] == 'no') 
//											{
//                								echo "<td style='vertical-align:middle;' rowspan='".$arr[$userID]['rowspan']."'>".$teritorry1."</td>";
//                								$arr[$userID]['printed'] = 'yes';
//            								}
											echo "<td>".$pd[$i]."</td>";
											echo "<td>".$ph[$i]."</td>";
											echo "<td>".$region[$i]."</td>";
											echo "<td>".$area[$i]."</td>";
											echo "<td>".$teritorry[$i]."</td>";
											echo "<td>".$product[$i]."</td>";
											echo "<td>".$tamount[$i]."</td>";
											echo "<td>".$salesach[$i]."</td>";
											echo "<td>".(round(($salesach[$i]/$tamount[$i]),2)*100)."%"."</td>";
											echo "<td>".$tcamount[$i]."</td>";
											echo "<td>".$collectionach[$i]."</td>";
											echo "<td>".(round(($collectionach[$i]/$tcamount[$i]),2)*100)."%"."</td>";
									echo "</tr>";
        						}
        		echo "</table>";
        ?>
            </div>
            
         
