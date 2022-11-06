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
            <table id='tableData' class='table table-hover table-bordered'>
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
				  		</thead>
                        <tbody>
                        
            <?php
			
			
				$i=1;
				foreach($ul as $row)
				{
					?>
                    <tr>
                    <td style="vertical-align:middle;"><?php echo $row['buserid'];?></td>
					<td style="vertical-align:middle;"><?php echo $row['buser'];?></td>
					<td style="vertical-align:middle;"><?php echo $row['userid'];?></td>
					<td style="vertical-align:middle;"><?php echo $row['muser'];?></td>
					
					<td style="vertical-align:middle;"><?php echo $row['buserdoj'];?></td>
					<td style="vertical-align:middle;"><?php echo $row['bedate'];?></td>
					<td style="vertical-align:middle;"><?php echo $row['duration'];?></td>
				<?php	
				
						
					
										if(date("Y-m-d") > $row['bedate'])
										{
											echo "<td style='vertical-align:middle;'>Completed</td>";
										}
										else
										{
											echo "<td style='vertical-align:middle;'>Running</td>";
										}
										
							
                
				?>
                </tr>
                
               <?php } ?>
               </tbody>
               </table>
            </div>
            
         
