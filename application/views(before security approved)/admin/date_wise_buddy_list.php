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
			$userid = array();
			$muser = array();
			$buserid = array();
			$buser = array();
			$buserdoj = array();
			$bedate = array();
			$duration = array();
			
				$i=1;
				foreach($ul as $row)
				{ 
					array_push($userid, $row['userid']);
					array_push($muser, $row['muser']);
					array_push($buserid, $row['buserid']);
					array_push($buser, $row['buser']);
					array_push($buserdoj, $row['buserdoj']);
					array_push($bedate, $row['bedate']);
					array_push($duration, $row['duration']);
					if (!isset($arr[$row['buserid']])) 
							{
                				$arr[$row['buserid']]['rowspan'] = 0;
            				}
            			$arr[$row['buserid']]['printed'] = 'no';
            			$arr[$row['buserid']]['rowspan'] += 1;
				}
						
					echo "<table id='tableData' class='table table-hover table-bordered'>
						<thead style='background:#91b9e6;'>
                			<tr>
                   				<th>Buddy ID</th>
                  				<th>Buddy Name</th>
                  				<th>User ID</th>
                  				<th>User Name</th>
        		  				<th>Date Of Join</th>
                  				<th>End Date</th>
                  				<th>Duration</th>
				  				<th>Status</th>	
							</tr>
				  		</thead>";
                			
							for($i=0; $i < sizeof($buserid); $i++) 
								{
									
            						$userid1 = $userid[$i];
									$muser1 = $muser[$i];
									$buserid1 = $buserid[$i];
									$buser1 = $buser[$i];
									$buserdoj1 = $buserdoj[$i];
									$bedate1 = $bedate[$i];
									$duration1 = $duration[$i];
							echo "<tr>";
										if ($arr[$buserid1]['printed'] == 'no') 
											{
               									echo "<td style='vertical-align:middle;' rowspan='".$arr[$buserid1]['rowspan']."'>".$buserid1."</td>";
                								$arr[$buserid1]['printed'] = 'no';
            								}
										if ($arr[$buserid1]['printed'] == 'no') 
											{
                								echo "<td style='vertical-align:middle;' rowspan='".$arr[$buserid1]['rowspan']."'>".$buser1."</td>";
                								$arr[$buserid1]['printed'] = 'yes';
            								}
										echo "<td>".$userid[$i]."</td>";
										echo "<td>".$muser[$i]."</td>";
										echo "<td>".date("d-m-Y", strtotime($buserdoj[$i]))."</td>";
										echo "<td>".date("d-m-Y", strtotime($bedate[$i]))."</td>";
										echo "<td>".$duration[$i]."</td>";
										if(date("Y-m-d") > $bedate[$i])
										{
											echo "<td>Completed</td>";
										}
										else
										{
											echo "<td>Running</td>";
										}
										
							echo "</tr>";
								}
				
                echo "</table>";
                
                ?>
              
            </div>
            
         
