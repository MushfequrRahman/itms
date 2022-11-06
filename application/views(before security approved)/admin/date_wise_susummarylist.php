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
							
							<th>Factory</th>
                            <th>Waiting</th>
                            <th>Running</th>
                            <th>Completed</th>
						</tr>
					</thead>
					<tbody>
                    <?php
						foreach($utl as $row)
							{
					?>
                    			<tr>
                                	<td><?php echo $row['factoryid'];?></td>
                                	<td><?php echo $row['waiting'];?></td>
                                    <td><?php echo $row['running'];?></td>
                                    <td><?php echo $row['completed'];?></td>
                                </tr>
                    <?php		
							}
					?>
					</tbody>
				</table>
            </div>
            
        

