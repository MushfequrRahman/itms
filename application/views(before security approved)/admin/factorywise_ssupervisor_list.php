<script type="text/javascript">
$(function () {
    jQuery(".pd").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery(".wd").datepicker({dateFormat: 'yy-mm-dd'});
	//jQuery("#pd_2").datepicker({dateFormat: 'dd-mm-yy'});
	})
</script>
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
<?php date_default_timezone_set('Asia/Dhaka');?>
                <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
            <form role="form" autocomplete="off" action="<?php echo base_url();?>Dashboard/sscore_card_insert" method="post" enctype="multipart/form-data">
             	<table id="tableData" class="table table-hover table-bordered">
              <thead style="background:#91b9e6;">
                <tr>
                  <!--<th>Date</th>-->
                  <th>SL</th>
                  <th>Image</th>
                  <th>ID</th>
                  <!--<th>Name</th>-->
                  <!--<th>Factory</th>
                  <th>Division</th>
                  <th>Department</th>-->
                  <!--<th>Section</th>-->
                  <th>Line</th>
                  <th>Subsection</th>
                  <!--<th>Religion</th>
                  <th>Maritual Status</th>
                  <th>Gender</th>-->
                  <!--<th>Salary</th>-->
                  <th>Efficiency</th>
                  <th>Varience</th>
                  <th>Cutt <br/>2Ship</br/>Loss</th>
                  <th>Worker-M/C Ratio</th>
                  <th>DHU<br/>(Sewing<br/>+<br/>Finishing)</th>
                  <th>5s Score</th>
                  <th>Worker Turn Over</th>
                  <th>Absenteeism <br/>of<br/> Worker</th>
                  <th>On <br/>Time <br/>Presence</th>
                  <th>Worker Feed Back</th>
                  <th>S.Leave</th>
                  <th>S.Absent</th>
                  <th>S.Late</th>
                </tr>
                </thead>
                
                <tbody>
                <?php 
				$i=1;
				?>
                
                <tr>
                <td colspan="17"><input type="text" class="form-control pd" name="cdate" id="pd_" value="<?php echo date('d-m-Y'); ?>">
                </td>
                </tr>
                <?php
				foreach($ul as $row)
				{ ?>
                <input type="hidden" class="form-control" name="factoryid[]" id="factoryid" value="<?php echo $row['factoryid'];?>">
                <input type="hidden" class="form-control" name="sectionid[]" id="sectionid" value="<?php echo $row['sectionid'];?>">
                <input type="hidden" class="form-control" name="subsectionid[]" id="subsectionid" value="<?php echo $row['subsectionid'];?>">
                <tr>
                
                  <td style="vertical-align:middle;"><?php echo $i++;?></td>
                  <?php /*?><td><img class="profile-user-img img-responsive img-thumbnail" src="<?php echo base_url().'assets/uploads/employee/'.$row['image'];?>" alt="User profile picture"></td><?php */?>
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
                  
                 
                  <td style="vertical-align:middle; width:120px;"><input type="text" class="form-control"  readonly="readonly" name="userid[]" id="userid" value="<?php echo $row['userid'];?>"></td>
                  <?php /*?><td style="vertical-align:middle;"><input type="text" class="form-control"  readonly="readonly" name="ename[]" id="ename" value="<?php echo $row['ename'];?>"></td><?php */?>
                  <?php /*?><td style="vertical-align:middle;"><?php echo $row['factoryname'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['divisionname'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['departmentname'];?></td><?php */?>
                  <?php /*?><td style="vertical-align:middle;"><input type="text" class="form-control"  readonly="readonly" name="sectionname[]" id="sectionname" value="<?php echo $row['sectionname'];?>"></td><?php */?>
                  <td style="vertical-align:middle; width:120px;"><input type="text" class="form-control"  readonly="readonly" name="subsectionname[]" id="subsectionname" value="<?php echo $row['subsectionname'];?>"></td>
                  <td style="vertical-align:middle; width:120px;"><input type="text" class="form-control"  readonly="readonly" id="subsectionid" value="<?php echo $row['subsectionid'];?>"></td>
                  <?php /*?><td style="vertical-align:middle;"><?php echo $row['religionname'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['maritualstatus'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['gender'];?></td><?php */?>
                  <?php /*?><td style="vertical-align:middle;"><input type="text" class="form-control"  readonly="readonly" name="salary[]" id="salary" value="<?php echo $row['salary'];?>"></td><?php */?>
                  <td style="vertical-align:middle;"><input type="text" class="form-control" name="efficiency[]" id="efficiency" value=""></td>
                  <td style="vertical-align:middle;"><input type="text" class="form-control" name="varience[]" id="varience" value=""></td>
                  <td style="vertical-align:middle;"><input type="text" class="form-control" name="cutt2shiploss[]" id="cutt2shiploss" value=""></td>
                  <td style="vertical-align:middle;"><input type="text" class="form-control" name="wmcratio[]" id="wmcratio" value=""></td>
                  <td style="vertical-align:middle;"><input type="text" class="form-control" name="dhusf[]" id="dhusf" value=""></td>
                  <td style="vertical-align:middle;"><input type="text" class="form-control" name="fivesscore[]" id="fivesscore" value=""></td>
                  <td style="vertical-align:middle;"><input type="text" class="form-control" name="wto[]" id="wto" value=""></td>
                  <td style="vertical-align:middle;"><input type="text" class="form-control" name="woabsentism[]" id="woabsentism" value=""></td>
                  <td style="vertical-align:middle;"><input type="text" class="form-control" name="ontpre[]" id="ontpre" value=""></td>
                  <td style="vertical-align:middle;"><input type="text" class="form-control" name="wofeedback[]" id="wofeedback" value=""></td>
                  <td style="vertical-align:middle;"><input type="text" class="form-control" name="sleave[]" id="sleave" value=""></td>
                  <td style="vertical-align:middle;"><input type="text" class="form-control" name="sabsent[]" id="sabsent" value=""></td>
                  <td style="vertical-align:middle;"><input type="text" class="form-control" name="slate[]" id="slate" value=""></td>
                  <?php /*?><td style="vertical-align:middle;"><?php echo $row['oemail'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['pemail'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['pmobile'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['emobile'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['dob'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['doj'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['hdistrict'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['epermanentaddress'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['bpermanentaddress'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['epresentaddress'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['bpresentaddress'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['nid'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['blodgroup'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['efficiency'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['identification'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['usertype'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['servicetype'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['userstatus'];?></td><?php */?>
                  
                </tr>
                </tbody>
               <?php } ?>
              </table>
              <div class="box-footer text-center">
                  						<input type="submit" class="btn btn-primary" name="submit" value="Submit" />
                					</div>
                                    </form>
            </div>
            
            <!-- /.box-body -->
         
