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
			$tid = array();
			$product = array();
			$productid = array();
			$tamount = array();
			$salesach = array();
			$tcamount=array();
			$collectionach=array();
			//$tcollectionach=array();
			//$ttcamount=array();
			//$ttcamount1=0;
			foreach($ul as $row)
					{
						//$ttcamount+=$row['tcamount'];
						array_push($user, $row['userid']);
            			array_push($ename, $row['ename']);
						array_push($pd, $row['parentdesignationid']);
						array_push($ph, $row['positionname']);
						array_push($region, $row['regionname']);
						array_push($area, $row['areaname']);
						array_push($teritorry, $row['territoryname']);
						array_push($tid, $row['territoryid']);
						array_push($product, $row['slug']);
						array_push($productid, $row['productid']);
						array_push($tamount, $row['tamount']);
						array_push($salesach, $row['salesach']);
						array_push($tcamount, $row['tcamount']);
						//array_push($ttcamount, $row['ttcamount']);
						array_push($collectionach, $row['collectionach']);
						//array_push($tcollectionach, $row['tcollectionach']);

            			if (!isset($arr[$row['territoryid']])) 
							{
                				$arr[$row['territoryid']]['rowspan'] = 0;
            				}
            			$arr[$row['territoryid']]['printed'] = 'no';
            			$arr[$row['territoryid']]['rowspan'] += 1;
					}
			
             	echo "<table id='tableData' class='table table-hover table-bordered'>
						<thead style='background:#91b9e6;'>
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
								<th>Total Collection Target</th>
								<th>Total Collection Achievement</th>
								<th>Total Collection Achievement(%)</th>
								
						</thead>
                			</tr>";
							$data = array();
							for($i=0; $i < sizeof($product); $i++) 
								{
									$data[] = $tcamount[$i];
									$data1[] = $collectionach[$i];
								}
							for($i=0; $i < sizeof($product); $i++) 
								{
            						$userID = $user[$i];
									$tID = $tid[$i];
									$ename1=$ename[$i];
									$pd1=$pd[$i];
									$ph1=$ph[$i];
									$region1=$region[$i];
									$area1=$area[$i];
									$teritorry1=$teritorry[$i];
									 
									//$ttcamount[0]=$tcamount[0]+$tcamount[1];
            						echo "<tr>";
										if ($arr[$tID]['printed'] == 'no') 
											{
               									echo "<td style='vertical-align:middle;' rowspan='".$arr[$tID]['rowspan']."'>".$userID."</td>";
                								$arr[$tID]['printed'] = 'no';
            								}
										if ($arr[$tID]['printed'] == 'no') 
											{
                								echo "<td style='vertical-align:middle;' rowspan='".$arr[$tID]['rowspan']."'>".$ename1."</td>";
                								$arr[$tID]['printed'] = 'no';
            								}
										echo "<td>".$pd[$i]."</td>";
            							//if ($arr[$tID]['printed'] == 'no') 
//											{
//                								echo "<td style='vertical-align:middle;' rowspan='".$arr[$tID]['rowspan']."'>".$pd1."</td>";
//                								$arr[$tID]['printed'] = 'no';
//            								}
										if ($arr[$tID]['printed'] == 'no') 
											{
                								echo "<td style='vertical-align:middle;' rowspan='".$arr[$tID]['rowspan']."'>".$ph1."</td>";
                								$arr[$tID]['printed'] = 'no';
            								}
										if ($arr[$tID]['printed'] == 'no') 
											{
                								echo "<td style='vertical-align:middle;' rowspan='".$arr[$tID]['rowspan']."'>".$region1."</td>";
                								$arr[$tID]['printed'] = 'no';
            								}
										if ($arr[$tID]['printed'] == 'no') 
											{
                								echo "<td style='vertical-align:middle;' rowspan='".$arr[$tID]['rowspan']."'>".$area1."</td>";
                								$arr[$tID]['printed'] = 'no';
            								}
										if ($arr[$tID]['printed'] == 'no') 
											{
                								echo "<td style='vertical-align:middle;' rowspan='".$arr[$tID]['rowspan']."'>".$teritorry1."</td>";
                								$arr[$tID]['printed'] = 'no';
            								}
											//echo "<td>".$pd[$i]."</td>";
//											echo "<td>".$ph[$i]."</td>";
//											echo "<td>".$region[$i]."</td>";
//											echo "<td>".$area[$i]."</td>";
											//echo "<td>".$teritorry[$i]."</td>";
											echo "<td style='vertical-align:middle;'>".$product[$i]."</td>";
											echo "<td style='vertical-align:middle;'>".$tamount[$i]."</td>";
											echo "<td style='vertical-align:middle;'>".$salesach[$i]."</td>";
											echo "<td style='vertical-align:middle;'>".(round(($salesach[$i]/$tamount[$i]),2)*100)."%"."</td>";
											echo "<td style='vertical-align:middle;'>".$tcamount[$i]."</td>";
											echo "<td style='vertical-align:middle;'>".$collectionach[$i]."</td>";
											echo "<td style='vertical-align:middle;'>".(round(($collectionach[$i]/$tcamount[$i]),2)*100)."%"."</td>";
											if ($arr[$tID]['printed'] == 'no') 
											{
                								echo "<td style='vertical-align:middle;' rowspan='".$arr[$tID]['rowspan']."'>".array_sum($data)."</td>";
                								$arr[$tID]['printed'] = 'no';
            								}
											if ($arr[$tID]['printed'] == 'no') 
											{
                								echo "<td style='vertical-align:middle;' rowspan='".$arr[$tID]['rowspan']."'>".array_sum($data1)."</td>";
                								$arr[$tID]['printed'] = 'no';
            								}
											if ($arr[$tID]['printed'] == 'no') 
											{
                								echo "<td style='vertical-align:middle;' rowspan='".$arr[$tID]['rowspan']."'>".(round((array_sum($data1)/array_sum($data)),2)*100)."%"."</td>";
                								$arr[$tID]['printed'] = 'yes';
            								}
											
									echo "</tr>";
        						}
								//echo implode(",",$data);
								//echo array_sum($data);
								//echo $ttcamount1;
        		echo "</table>";
        ?>
            </div>
            
         
