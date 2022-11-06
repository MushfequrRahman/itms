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
div.scrollable-table-wrapper {
  height: 500px;
  overflow: auto;
}
  .header {
            position: sticky;
            top:0;
        }
</style>

            
                <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
            <div class="scrollable-table-wrapper">
             	<table id="tableData" class="table table-hover table-bordered">
					<thead style="background:#91b9e6;position: sticky;top: 0">
						<tr>
							<th>SL</th>
							<th>#Ref ID</th>
							<th>File</th>
							<th>Date</th>
							<th>Factory</th>
							<th>Opener-1</th>
							<th>Opener-2</th>
							<th>Opener-3</th>
							<th>Opener-4</th>
							<th>Box</th>
							<th>Location</th>
							<th>Name By</th>
							<th>Details</th>
							<th>Corrective Message</th>
							<th>Grading</th>
							<th>FPR</th>
							<th>Target Date</th>
							<th>Followup Date</th>
							<th>Remarks</th>
						</tr>
					</thead>
					<tbody>
					<?php
						if($this->session->userdata('user_type')!=1)
							{ 
								$i=1;
								foreach($utl as $row)
									{ 
										if($row['graid']==5)
											{
					?>
												<tr>
													<td style="vertical-align:middle;"><?php echo $i++;?></td>
													<td style="vertical-align:middle;"><?php echo $row['suid'];?></td>
													<?php 
														if($row['pic_file']=='')
															{
													?>
													<td style="vertical-align:middle;">No File</td>
													<?php
															}
														else
															{
													?>
													<td style="vertical-align:middle;"><a target="_blank" href="<?php echo base_url().'assets/uploads/suggession/'.$row['pic_file'];?>"><i class="fa fa-file"></i></a></td>
													<?php
															}
													?>
													<?php $sudate= date("d-m-Y", strtotime($row['sudate']));?>
													<td style="vertical-align:middle;"><?php echo $sudate;?></td>
													<td style="vertical-align:middle;"><?php echo $row['factoryid'];?></td>
													<td style="vertical-align:middle;"><?php echo $row['openerid1'].'<br/>'.$row['opener1'];?></td>
													<td style="vertical-align:middle;"><?php echo $row['openerid2'].'<br/>'.$row['opener2'];?></td>
													<td style="vertical-align:middle;"><?php echo $row['openerid3'].'<br/>'.$row['opener3'];?></td>
													<td style="vertical-align:middle;"><?php echo $row['openerid4'].'<br/>'.$row['opener4'];?></td>
													<td style="vertical-align:middle;"><?php echo $row['box'];?></td>
													<td style="vertical-align:middle;"><?php echo $row['location'];?></td>
													<td style="vertical-align:middle;"><?php echo $row['nameby'];?></td>
													<td style="vertical-align:middle;"><?php echo $row['details'];?></td>
													<td style="vertical-align:middle;"><?php echo $row['corrective'];?></td>
													<td style="vertical-align:middle;"><?php echo $row['grading'];?></td>
													<td style="vertical-align:middle;"><?php echo $row['fprid'].'<br/>'.$row['fpr'];?></td>
													<?php $targetdate= date("d-m-Y", strtotime($row['targetdate']));?>
													<td style="vertical-align:middle;"><?php echo $targetdate;?></td>
													<?php $followupdate= date("d-m-Y", strtotime($row['followupdate']));?>
													<td style="vertical-align:middle;"><?php echo $followupdate;?></td>
													<td style="vertical-align:middle;"><?php echo $row['remarks'];?></td>
												</tr>
						<?php 
											} 
									}
							}
						if($this->session->userdata('user_type')==1)
							{ 
								$i=1;
								foreach($utl as $row)
									{ 
				
						?>
												<tr>
													<td style="vertical-align:middle;"><?php echo $i++;?></td>
													<td style="vertical-align:middle;"><?php echo $row['suid'];?></td>
					<?php 
													if($row['pic_file']=='')
														{
					?>
															<td style="vertical-align:middle;">No File</td>
					<?php
														}
													else
														{
					?>
															<td style="vertical-align:middle;"><a target="_blank" href="<?php echo base_url().'assets/uploads/suggession/'.$row['pic_file'];?>"><i class="fa fa-file"></i></a></td>
                    <?php
														}
					?>
															<?php $sudate= date("d-m-Y", strtotime($row['sudate']));?>
															<td style="vertical-align:middle;"><?php echo $sudate;?></td>
															<td style="vertical-align:middle;"><?php echo $row['factoryid'];?></td>
															<td style="vertical-align:middle;"><?php echo $row['openerid1'].'<br/>'.$row['opener1'];?></td>
															<td style="vertical-align:middle;"><?php echo $row['openerid2'].'<br/>'.$row['opener2'];?></td>
															<td style="vertical-align:middle;"><?php echo $row['openerid3'].'<br/>'.$row['opener3'];?></td>
															<td style="vertical-align:middle;"><?php echo $row['openerid4'].'<br/>'.$row['opener4'];?></td>
															<td style="vertical-align:middle;"><?php echo $row['box'];?></td>
															<td style="vertical-align:middle;"><?php echo $row['location'];?></td>
															<td style="vertical-align:middle;"><?php echo $row['nameby'];?></td>
															<td style="vertical-align:middle;"><?php echo $row['details'];?></td>
															<td style="vertical-align:middle;"><?php echo $row['corrective'];?></td>
															<td style="vertical-align:middle;"><?php echo $row['grading'];?></td>
															<td style="vertical-align:middle;"><?php echo $row['fprid'].'<br/>'.$row['fpr'];?></td>
															<?php $targetdate= date("d-m-Y", strtotime($row['targetdate']));?>
															<td style="vertical-align:middle;"><?php echo $targetdate;?></td>
															<?php $followupdate= date("d-m-Y", strtotime($row['followupdate']));?>
															<td style="vertical-align:middle;"><?php echo $followupdate;?></td>
															<td style="vertical-align:middle;"><?php echo $row['remarks'];?></td>
													</tr>
					<?php 			} 
							}
					?>
					</tbody>
				</table>
            </div>
            </div>
            
        

