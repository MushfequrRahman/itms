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
			$phid = array();
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
			
			
			$arr21 = array();
			$user21 = array();
			$ename21 = array();
			$pd21 = array();
			$ph21 = array();
			$phid21 = array();
			$region21 = array();
			$area21 = array();
			$teritorry21 = array();
			$tid21 = array();
			$product21 = array();
			$productid21 = array();
			$tamount21 = array();
			$salesach21 = array();
			$tcamount21=array();
			$collectionach21=array();
			
			
			//$ccollectionach=array();
			//$ttcamount=array();
			//$ttcamount=0;
			//foreach($ul as $row1)
//					{
//						if($row1['territoryid']== 20)
//						{
			foreach($ul20 as $row)
					{
						//$ttcamount+=$row['tcamount'];
						array_push($user, $row['userid']);
            			array_push($ename, $row['ename']);
						array_push($pd, $row['parentdesignationid']);
						array_push($ph, $row['positionname']);
						array_push($phid, $row['positionid']);
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
						//array_push($ccollectionach, $row['ccollectionach']);
						if($row['productid']==10)
								{
            						@$p10=(round(($row['salesach']/$row['tamount']),2)*100);
								}
						if($row['productid']==11)
								{
            						@$p11=(round(($row['salesach']/$row['tamount']),2)*100);
								}
						if($row['productid']==12)
								{
            						@$p12=(round(($row['salesach']/$row['tamount']),2)*100);
								}
						if($row['productid']==13)
								{
            						@$p13=(round(($row['salesach']/$row['tamount']),2)*100);
								}
						//if($row['positionid']==1 && $p25>=80 && $p26>30)
//						{
//						}
							
						
						
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
								<th>Incentive</th>
								
						</thead>
                			</tr>";
							//$data = array();
//							$data1=array();
//							$tt=0;
//							$j=0;
//							for($i=0; $i < sizeof($product); $i++) 
//								{
//									$data[] = $tcamount[$i];
//									$data1[] = $collectionach[$i];
//									//$user[$i];
//									for($j=0;$j < sizeof($product); $j++)
//									{
//										if($user[$i]!==$user[$j])
//										{
//											//echo "A";
//											
//											//echo $user[$i];
//											break;
//										}
//										else
//										{
//											$tt=$tt+$tcamount[$i];
//											break;
//										}
//										//echo $tt;
//									}
//									//$tt=$tt+$tcamount[$i];
//									//echo $tt;
//								}
								//echo $tt;
								$ttcamount1=0;
								$ttcamount2=0;
								$tcollectionach1=0;
								$tcollectionach2=0;
							for($j=0; $j < count($user); $j++) 
								{
									$userIDD=$user[$j];
									
									//if($userIDD =="HO11")
//									{
										$ttcamount1=$ttcamount1+$tcamount[$j];
										$tcollectionach1=$tcollectionach1+$collectionach[$j];
									//}
									//if($userIDD =="HO111")
//									{
//										$ttcamount2=$ttcamount2+$tamount[$j];
//										$tcollectionach2=$tcollectionach2+$collectionach[$j];
//									}
								}
//								echo $ttcamount1;	
							for($i=0; $i < sizeof($product); $i++) 
								{
									$userIDD;
            						$userID = $user[$i];
									$tID = $tid[$i];
									$ename1=$ename[$i];
									$pd1=$pd[$i];
									$ph1=$ph[$i];
									$region1=$region[$i];
									$area1=$area[$i];
									$teritorry1=$teritorry[$i];
									$teritorry1=$teritorry[$i];
									$teritorry1=$teritorry[$i];
									//if($userID == $userIDD)
//									{
										//echo $ttcamount1=$ttcamount1+$tamount[$i];
//										$tcollectionach1=$tcollectionach1+$collectionach[$i];
//									}
									
									//$ttcamount1=$ttcamount[$i];
									//$ccollectionach1=$ccollectionach[$i];
									 
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
												//if($userID =="HO11")
//													{
//                										echo "<td style='vertical-align:middle;' rowspan='".$arr[$tID]['rowspan']."'>".$ttcamount1."</td>";
//													}
												//if($userID =="HO111")
//													{
                										echo "<td style='vertical-align:middle;' rowspan='".$arr[$tID]['rowspan']."'>".$ttcamount1."</td>";
													//}
                								$arr[$tID]['printed'] = 'no';
            								}
											if ($arr[$tID]['printed'] == 'no') 
											{
												//if($userID =="HO11")
//													{
                										echo "<td style='vertical-align:middle;' rowspan='".$arr[$tID]['rowspan']."'>".$tcollectionach1."</td>";
													//}
//												if($userID =="HO111")
//													{
//                										echo "<td style='vertical-align:middle;' rowspan='".$arr[$tID]['rowspan']."'>".$tcollectionach2."</td>";
//													}
                								$arr[$tID]['printed'] = 'no';
            								}
											if ($arr[$tID]['printed'] == 'no') 
											{
												//if($userID =="HO11")
//													{
                										echo "<td style='vertical-align:middle;' rowspan='".$arr[$tID]['rowspan']."'>".(round(($tcollectionach1/$ttcamount1),2)*100)."%"."</td>";
													//}
												//if($userID =="HO111")
//													{
//                										echo "<td style='vertical-align:middle;' rowspan='".$arr[$tID]['rowspan']."'>".(round(($tcollectionach2/$ttcamount2),2)*100)."%"."</td>";
//													}
                								$arr[$tID]['printed'] = 'no';
            								}
											///////// INCENTIVE /////////
											
											
											
											//if($userID =="HO11")
//													{
														if($row['positionid']==1 && @$p10>=95 && @$p11>=95 && @$p12>=90 && @$p13>=85 && (round(($tcollectionach1/$ttcamount1),2)*100) >= 85 && (round(($tcollectionach1/$ttcamount1),2)*100) <= 90.99)
															{
																if ($arr[$tID]['printed'] == 'no') 
																	{
						
																		echo "<td style='vertical-align:middle;' rowspan='".$arr[$tID]['rowspan']."'>"."0.5"."</td>";
                														$arr[$tID]['printed'] = 'yes';
            														}
															}
														if($row['positionid']==1 && @$p10>=95 && @$p11>=95 && @$p12>=90 && @$p13>=91 && (round(($tcollectionach1/$ttcamount1),2)*100) >= 91 && (round(($tcollectionach1/$ttcamount1),2)*100) <= 100.99)
															{
																if ($arr[$tID]['printed'] == 'no') 
																	{
													
																		echo "<td style='vertical-align:middle;' rowspan='".$arr[$tID]['rowspan']."'>"."0.75"."</td>";
                														$arr[$tID]['printed'] = 'yes';
            														}
															}
														if($row['positionid']==1 && @$p10>=95 && @$p11>=95 && @$p12>=90 && @$p13>=101 && (round(($tcollectionach1/$ttcamount1),2)*100) >= 101 && (round(($tcollectionach1/$ttcamount1),2)*100) <= 109.99)
															{
																if ($arr[$tID]['printed'] == 'no') 
																	{
													
																		echo "<td style='vertical-align:middle;' rowspan='".$arr[$tID]['rowspan']."'>"."1.0"."</td>";
                														$arr[$tID]['printed'] = 'yes';
            														}
															}
														if($row['positionid']==1 && @$p10>=95 && @$p11>=95 && @$p12>=90 && @$p13>=110 && (round(($tcollectionach1/$ttcamount1),2)*100) >= 110)
															{
																if ($arr[$tID]['printed'] == 'no') 
																	{
													
																		echo "<td style='vertical-align:middle;' rowspan='".$arr[$tID]['rowspan']."'>"."1.10"."</td>";
                														$arr[$tID]['printed'] = 'yes';
            														}
															}
												
														if($row['positionid']==2 && @$p10>=90 && @$p11>=90 && @$p12>=90 && @$p13>=85 && (round(($tcollectionach1/$ttcamount1),2)*100) >= 85 && (round(($tcollectionach1/$ttcamount1),2)*100) <= 90.99)
															{
																if ($arr[$tID]['printed'] == 'no') 
																	{
													
																		echo "<td style='vertical-align:middle;' rowspan='".$arr[$tID]['rowspan']."'>"."0.20"."</td>";
                														$arr[$tID]['printed'] = 'yes';
            														}
															}
														if($row['positionid']==2 && @$p10>=90 && @$p11>=90 && @$p12>=90 && @$p13>=85 && (round(($tcollectionach1/$ttcamount1),2)*100) >= 91 && (round(($tcollectionach1/$ttcamount1),2)*100) <= 100.99)
															{
																if ($arr[$tID]['printed'] == 'no') 
																	{
													
																		echo "<td style='vertical-align:middle;' rowspan='".$arr[$tID]['rowspan']."'>"."0.30"."</td>";
                														$arr[$tID]['printed'] = 'yes';
            														}
															}
														if($row['positionid']==2 && @$p10>=90 && @$p11>=90 && @$p12>=90 && @$p13>=85 && (round(($tcollectionach1/$ttcamount1),2)*100) >= 101 && (round(($tcollectionach1/$ttcamount1),2)*100) <= 109.99)
															{
																if ($arr[$tID]['printed'] == 'no') 
																	{
													
																		echo "<td style='vertical-align:middle;' rowspan='".$arr[$tID]['rowspan']."'>"."0.40"."</td>";
                														$arr[$tID]['printed'] = 'yes';
            														}
															}
														if($row['positionid']==2 && @$p10>=90 && @$p11>=90 && @$p12>=90 && @$p13>=85 && (round(($tcollectionach1/$ttcamount1),2)*100) >= 110)
															{
																if ($arr[$tID]['printed'] == 'no') 
																	{
													
																		echo "<td style='vertical-align:middle;' rowspan='".$arr[$tID]['rowspan']."'>"."0.50"."</td>";
                														$arr[$tID]['printed'] = 'yes';
            														}
															}
														if($row['positionid']==3 && @$p10>=90 && @$p11>=90 && @$p12>=90 && @$p13>=85 && (round(($tcollectionach1/$ttcamount1),2)*100) >= 85 && (round(($tcollectionach1/$ttcamount1),2)*100) <= 90.99)
															{
																if ($arr[$tID]['printed'] == 'no') 
																	{
													
																		echo "<td style='vertical-align:middle;' rowspan='".$arr[$tID]['rowspan']."'>"."0.10"."</td>";
                														$arr[$tID]['printed'] = 'yes';
            														}
															}
													if($row['positionid']==3 && @$p10>=90 && @$p11>=90 && @$p12>=90 && @$p13>=85 && (round(($tcollectionach1/$ttcamount1),2)*100) >= 91 && (round(($tcollectionach1/$ttcamount1),2)*100) <= 100.99)
															{
																if ($arr[$tID]['printed'] == 'no') 
																	{
													
																		echo "<td style='vertical-align:middle;' rowspan='".$arr[$tID]['rowspan']."'>"."0.15"."</td>";
                														$arr[$tID]['printed'] = 'yes';
            														}
															}
													if($row['positionid']==3 && @$p10>=90 && @$p11>=90 && @$p12>=90 && @$p13>=85 && (round(($tcollectionach1/$ttcamount1),2)*100) >= 101 && (round(($tcollectionach1/$ttcamount1),2)*100) <= 109.99)
															{
																if ($arr[$tID]['printed'] == 'no') 
																	{
													
																		echo "<td style='vertical-align:middle;' rowspan='".$arr[$tID]['rowspan']."'>"."0.20"."</td>";
                														$arr[$tID]['printed'] = 'yes';
            														}
															}
													if($row['positionid']==3 && @$p10>=90 && @$p11>=90 && @$p12>=90 && @$p13>=85 && (round(($tcollectionach1/$ttcamount1),2)*100) >= 110)
															{
																if ($arr[$tID]['printed'] == 'no') 
																	{
													
																		echo "<td style='vertical-align:middle;' rowspan='".$arr[$tID]['rowspan']."'>"."0.25"."</td>";
                														$arr[$tID]['printed'] = 'yes';
            														}
															}
													if($row['positionid']==4 && @$p10>=90 && @$p11>=90 && @$p12>=90 && (round(($tcollectionach1/$ttcamount1),2)*100) >= 85 && (round(($tcollectionach1/$ttcamount1),2)*100) <= 90.99)
															{
																if ($arr[$tID]['printed'] == 'no') 
																	{
													
																		echo "<td style='vertical-align:middle;' rowspan='".$arr[$tID]['rowspan']."'>"."15000"."</td>";
                														$arr[$tID]['printed'] = 'yes';
            														}
															}
													if($row['positionid']==4 && @$p10>=90 && @$p11>=90 && @$p12>=90 && @$p13>=85 && (round(($tcollectionach1/$ttcamount1),2)*100) >= 91 && (round(($tcollectionach1/$ttcamount1),2)*100) <= 100.99)
															{
																if ($arr[$tID]['printed'] == 'no') 
																	{
													
																		echo "<td style='vertical-align:middle;' rowspan='".$arr[$tID]['rowspan']."'>"."15000"."</td>";
                														$arr[$tID]['printed'] = 'yes';
            														}
															}
													if($row['positionid']==4 && @$p10>=90 && @$p11>=90 && @$p12>=90 && @$p13>=85 && (round(($tcollectionach1/$ttcamount1),2)*100) >= 101 && (round(($tcollectionach1/$ttcamount1),2)*100) <= 109.99)
															{
																if ($arr[$tID]['printed'] == 'no') 
																	{
													
																		echo "<td style='vertical-align:middle;' rowspan='".$arr[$tID]['rowspan']."'>"."15000"."</td>";
                														$arr[$tID]['printed'] = 'yes';
            														}
															}
													if($row['positionid']==4 && @$p10>=90 && @$p11>=90 && @$p12>=90 && @$p13>=85 && (round(($tcollectionach1/$ttcamount1),2)*100) >= 110)
															{
																if ($arr[$tID]['printed'] == 'no') 
																	{
													
																		echo "<td style='vertical-align:middle;' rowspan='".$arr[$tID]['rowspan']."'>"."15000"."</td>";
                														$arr[$tID]['printed'] = 'yes';
            														}
															}
													if($row['positionid']==5 && @$p10>=90 && @$p11>=90 && @$p12>=90 && @$p13>=85 && (round(($tcollectionach1/$ttcamount1),2)*100) >= 85 && (round(($tcollectionach1/$ttcamount1),2)*100) <= 90.99)
															{
																if ($arr[$tID]['printed'] == 'no') 
																	{
													
																		echo "<td style='vertical-align:middle;' rowspan='".$arr[$tID]['rowspan']."'>"."30000"."</td>";
                														$arr[$tID]['printed'] = 'yes';
            														}
															}
													if($row['positionid']==5 && @$p10>=90 && @$p11>=90 && @$p12>=90 && @$p13>=85 && (round(($tcollectionach1/$ttcamount1),2)*100) >= 91 && (round(($tcollectionach1/$ttcamount1),2)*100) <= 100.99)
															{
																if ($arr[$tID]['printed'] == 'no') 
																	{
													
																		echo "<td style='vertical-align:middle;' rowspan='".$arr[$tID]['rowspan']."'>"."30000"."</td>";
                														$arr[$tID]['printed'] = 'yes';
            														}
															}
													if($row['positionid']==5 && @$p10>=90 && @$p11>=90 && @$p12>=90 && @$p13>=85 && (round(($tcollectionach1/$ttcamount1),2)*100) >= 101 && (round(($tcollectionach1/$ttcamount1),2)*100) <= 109.99)
															{
																if ($arr[$tID]['printed'] == 'no') 
																	{
													
																		echo "<td style='vertical-align:middle;' rowspan='".$arr[$tID]['rowspan']."'>"."30000"."</td>";
                														$arr[$tID]['printed'] = 'yes';
            														}
															}
													if($row['positionid']==5 && @$p10>=90 && @$p11>=90 && @$p12>=90 && @$p13>=85 && (round(($tcollectionach1/$ttcamount1),2)*100) >= 110)
															{
																if ($arr[$tID]['printed'] == 'no') 
																	{
													
																		echo "<td style='vertical-align:middle;' rowspan='".$arr[$tID]['rowspan']."'>"."30000"."</td>";
                														$arr[$tID]['printed'] = 'yes';
            														}
															}
											 
												 	else
															{
																if ($arr[$tID]['printed'] == 'no') 
																	{
													
																		echo "<td style='vertical-align:middle;' rowspan='".$arr[$tID]['rowspan']."'>"."0"."</td>";
                														$arr[$tID]['printed'] = 'yes';
            														}
															}
													//} ///////// HO11/////////
													
													//if($userID =="HO111")
//													{
														//if($row['positionid']==1 && @$p10>=95 && @$p11>=95 && @$p12>=90 && @$p13>=85 && (round(($tcollectionach2/$ttcamount2),2)*100) >= 85 && (round(($tcollectionach2/$ttcamount2),2)*100) <= 90.99)
//															{
//																if ($arr[$tID]['printed'] == 'no') 
//																	{
//						
//																		echo "<td style='vertical-align:middle;' rowspan='".$arr[$tID]['rowspan']."'>"."0.5"."</td>";
//                														$arr[$tID]['printed'] = 'yes';
//            														}
//															}
														//if($row['positionid']==1 && @$p10>=95 && @$p11>=95 && @$p12>=90 && @$p13>=91 && (round(($tcollectionach2/$ttcamount2),2)*100) >= 91 && (round(($tcollectionach2/$ttcamount2),2)*100) <= 100.99)
//															{
//																if ($arr[$tID]['printed'] == 'no') 
//																	{
//													
//																		echo "<td style='vertical-align:middle;' rowspan='".$arr[$tID]['rowspan']."'>"."0.75"."</td>";
//                														$arr[$tID]['printed'] = 'yes';
//            														}
//															}
														//if($row['positionid']==1 && @$p10>=95 && @$p11>=95 && @$p12>=90 && @$p13>=101 && (round(($tcollectionach2/$ttcamount2),2)*100) >= 101 && (round(($tcollectionach2/$ttcamount2),2)*100) <= 109.99)
//															{
//																if ($arr[$tID]['printed'] == 'no') 
//																	{
//													
//																		echo "<td style='vertical-align:middle;' rowspan='".$arr[$tID]['rowspan']."'>"."1.0"."</td>";
//                														$arr[$tID]['printed'] = 'yes';
//            														}
//															}
														//if($row['positionid']==1 && @$p10>=95 && @$p11>=95 && @$p12>=90 && @$p13>=110 && (round(($tcollectionach2/$ttcamount2),2)*100) >= 110)
//															{
//																if ($arr[$tID]['printed'] == 'no') 
//																	{
//													
//																		echo "<td style='vertical-align:middle;' rowspan='".$arr[$tID]['rowspan']."'>"."1.10"."</td>";
//                														$arr[$tID]['printed'] = 'yes';
//            														}
//															}
												
														//if($row['positionid']==2 && @$p10>=90 && @$p11>=90 && @$p12>=90 && @$p13>=85 && (round(($tcollectionach2/$ttcamount2),2)*100) >= 85 && (round(($tcollectionach2/$ttcamount2),2)*100) <= 90.99)
//															{
//																if ($arr[$tID]['printed'] == 'no') 
//																	{
//													
//																		echo "<td style='vertical-align:middle;' rowspan='".$arr[$tID]['rowspan']."'>"."0.20"."</td>";
//                														$arr[$tID]['printed'] = 'yes';
//            														}
//															}
														//if($row['positionid']==2 && @$p10>=90 && @$p11>=90 && @$p12>=90 && @$p13>=85 && (round(($tcollectionach2/$ttcamount2),2)*100) >= 91 && (round(($tcollectionach2/$ttcamount2),2)*100) <= 100.99)
//															{
//																if ($arr[$tID]['printed'] == 'no') 
//																	{
//													
//																		echo "<td style='vertical-align:middle;' rowspan='".$arr[$tID]['rowspan']."'>"."0.30"."</td>";
//                														$arr[$tID]['printed'] = 'yes';
//            														}
//															}
														//if($row['positionid']==2 && @$p10>=90 && @$p11>=90 && @$p12>=90 && @$p13>=85 && (round(($tcollectionach2/$ttcamount2),2)*100) >= 101 && (round(($tcollectionach2/$ttcamount2),2)*100) <= 109.99)
//															{
//																if ($arr[$tID]['printed'] == 'no') 
//																	{
//													
//																		echo "<td style='vertical-align:middle;' rowspan='".$arr[$tID]['rowspan']."'>"."0.40"."</td>";
//                														$arr[$tID]['printed'] = 'yes';
//            														}
//															}
														//if($row['positionid']==2 && @$p10>=90 && @$p11>=90 && @$p12>=90 && @$p13>=85 && (round(($tcollectionach2/$ttcamount2),2)*100) >= 110)
//															{
//																if ($arr[$tID]['printed'] == 'no') 
//																	{
//													
//																		echo "<td style='vertical-align:middle;' rowspan='".$arr[$tID]['rowspan']."'>"."0.50"."</td>";
//                														$arr[$tID]['printed'] = 'yes';
//            														}
//															}
														//if($row['positionid']==3 && @$p10>=90 && @$p11>=90 && @$p12>=90 && @$p13>=85 && (round(($tcollectionach2/$ttcamount2),2)*100) >= 85 && (round(($tcollectionach2/$ttcamount2),2)*100) <= 90.99)
//															{
//																if ($arr[$tID]['printed'] == 'no') 
//																	{
//													
//																		echo "<td style='vertical-align:middle;' rowspan='".$arr[$tID]['rowspan']."'>"."0.10"."</td>";
//                														$arr[$tID]['printed'] = 'yes';
//            														}
//															}
													//if($row['positionid']==3 && @$p10>=90 && @$p11>=90 && @$p12>=90 && @$p13>=85 && (round(($tcollectionach2/$ttcamount2),2)*100) >= 91 && (round(($tcollectionach2/$ttcamount2),2)*100) <= 100.99)
//															{
//																if ($arr[$tID]['printed'] == 'no') 
//																	{
//													
//																		echo "<td style='vertical-align:middle;' rowspan='".$arr[$tID]['rowspan']."'>"."0.15"."</td>";
//                														$arr[$tID]['printed'] = 'yes';
//            														}
//															}
													//if($row['positionid']==3 && @$p10>=90 && @$p11>=90 && @$p12>=90 && @$p13>=85 && (round(($tcollectionach2/$ttcamount2),2)*100) >= 101 && (round(($tcollectionach2/$ttcamount2),2)*100) <= 109.99)
//															{
//																if ($arr[$tID]['printed'] == 'no') 
//																	{
//													
//																		echo "<td style='vertical-align:middle;' rowspan='".$arr[$tID]['rowspan']."'>"."0.20"."</td>";
//                														$arr[$tID]['printed'] = 'yes';
//            														}
//															}
													//if($row['positionid']==3 && @$p10>=90 && @$p11>=90 && @$p12>=90 && @$p13>=85 && (round(($tcollectionach2/$ttcamount2),2)*100) >= 110)
//															{
//																if ($arr[$tID]['printed'] == 'no') 
//																	{
//													
//																		echo "<td style='vertical-align:middle;' rowspan='".$arr[$tID]['rowspan']."'>"."0.25"."</td>";
//                														$arr[$tID]['printed'] = 'yes';
//            														}
//															}
													//if($row['positionid']==4 && @$p10>=90 && @$p11>=90 && @$p12>=90 && (round(($tcollectionach2/$ttcamount2),2)*100) >= 85 && (round(($tcollectionach2/$ttcamount2),2)*100) <= 90.99)
//															{
//																if ($arr[$tID]['printed'] == 'no') 
//																	{
//													
//																		echo "<td style='vertical-align:middle;' rowspan='".$arr[$tID]['rowspan']."'>"."15000"."</td>";
//                														$arr[$tID]['printed'] = 'yes';
//            														}
//															}
													//if($row['positionid']==4 && @$p10>=90 && @$p11>=90 && @$p12>=90 && @$p13>=85 && (round(($tcollectionach2/$ttcamount2),2)*100) >= 91 && (round(($tcollectionach2/$ttcamount2),2)*100) <= 100.99)
//															{
//																if ($arr[$tID]['printed'] == 'no') 
//																	{
//													
//																		echo "<td style='vertical-align:middle;' rowspan='".$arr[$tID]['rowspan']."'>"."15000"."</td>";
//                														$arr[$tID]['printed'] = 'yes';
//            														}
//															}
													//if($row['positionid']==4 && @$p10>=90 && @$p11>=90 && @$p12>=90 && @$p13>=85 && (round(($tcollectionach2/$ttcamount2),2)*100) >= 101 && (round(($tcollectionach2/$ttcamount2),2)*100) <= 109.99)
//															{
//																if ($arr[$tID]['printed'] == 'no') 
//																	{
//													
//																		echo "<td style='vertical-align:middle;' rowspan='".$arr[$tID]['rowspan']."'>"."15000"."</td>";
//                														$arr[$tID]['printed'] = 'yes';
//            														}
//															}
													//if($row['positionid']==4 && @$p10>=90 && @$p11>=90 && @$p12>=90 && @$p13>=85 && (round(($tcollectionach2/$ttcamount2),2)*100) >= 110)
//															{
//																if ($arr[$tID]['printed'] == 'no') 
//																	{
//													
//																		echo "<td style='vertical-align:middle;' rowspan='".$arr[$tID]['rowspan']."'>"."15000"."</td>";
//                														$arr[$tID]['printed'] = 'yes';
//            														}
//															}
													//if($row['positionid']==5 && @$p10>=90 && @$p11>=90 && @$p12>=90 && @$p13>=85 && (round(($tcollectionach2/$ttcamount2),2)*100) >= 85 && (round(($tcollectionach2/$ttcamount2),2)*100) <= 90.99)
//															{
//																if ($arr[$tID]['printed'] == 'no') 
//																	{
//													
//																		echo "<td style='vertical-align:middle;' rowspan='".$arr[$tID]['rowspan']."'>"."30000"."</td>";
//                														$arr[$tID]['printed'] = 'yes';
//            														}
//															}
													//if($row['positionid']==5 && @$p10>=90 && @$p11>=90 && @$p12>=90 && @$p13>=85 && (round(($tcollectionach2/$ttcamount2),2)*100) >= 91 && (round(($tcollectionach2/$ttcamount2),2)*100) <= 100.99)
//															{
//																if ($arr[$tID]['printed'] == 'no') 
//																	{
//													
//																		echo "<td style='vertical-align:middle;' rowspan='".$arr[$tID]['rowspan']."'>"."30000"."</td>";
//                														$arr[$tID]['printed'] = 'yes';
//            														}
//															}
													//if($row['positionid']==5 && @$p10>=90 && @$p11>=90 && @$p12>=90 && @$p13>=85 && (round(($tcollectionach2/$ttcamount2),2)*100) >= 101 && (round(($tcollectionach2/$ttcamount2),2)*100) <= 109.99)
//															{
//																if ($arr[$tID]['printed'] == 'no') 
//																	{
//													
//																		echo "<td style='vertical-align:middle;' rowspan='".$arr[$tID]['rowspan']."'>"."30000"."</td>";
//                														$arr[$tID]['printed'] = 'yes';
//            														}
//															}
													//if($row['positionid']==5 && @$p10>=90 && @$p11>=90 && @$p12>=90 && @$p13>=85 && (round(($tcollectionach2/$ttcamount2),2)*100) >= 110)
//															{
//																if ($arr[$tID]['printed'] == 'no') 
//																	{
//													
//																		echo "<td style='vertical-align:middle;' rowspan='".$arr[$tID]['rowspan']."'>"."30000"."</td>";
//                														$arr[$tID]['printed'] = 'yes';
//            														}
//															}
											 
												 	//else
//															{
//																if ($arr[$tID]['printed'] == 'no') 
//																	{
//													
//																		echo "<td style='vertical-align:middle;' rowspan='".$arr[$tID]['rowspan']."'>"."0"."</td>";
//                														$arr[$tID]['printed'] = 'yes';
//            														}
//															}
//													} ///////// HO111/////////
											
									echo "</tr>";
        						}
								
								
								//echo implode(",",$data);
								//echo array_sum($data);
								//echo $ttcamount1;
        		echo "</table>";
						//}
//					}
        ?>
        
       
        
				
            </div>
            
         
