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

                <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
            <form role="form" autocomplete="off" action="<?php echo base_url();?>Dashboard/sscore_card_update" method="post" enctype="multipart/form-data">
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
                <?php /*?><td colspan="17"><input type="text" class="form-control pd" name="cdate" id="pd_" value="<?php echo date('d-m-Y'); ?>"><?php */?>
                </td>
                </tr>
                <?php
				foreach($ul as $row)
				{ ?>
                <input type="hidden" class="form-control" name="factoryid[]" id="factoryid" value="<?php echo $row['factoryid'];?>">
                <input type="hidden" class="form-control" name="cdate" id="cdate" value="<?php echo $row['cdate'];?>">
                
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
                  
                  <td style="vertical-align:middle; width:120px;"><input type="text" class="form-control"  readonly="readonly" name="subsectionname[]" id="subsectionname" value="<?php echo $row['subsectionname'];?>"></td>
                 
                  <td style="vertical-align:middle;"><input type="text" class="form-control" name="efficiency[]" id="efficiency" value="<?php echo $row['efficiency'];?>"></td>
                  <td style="vertical-align:middle;"><input type="text" class="form-control" name="varience[]" id="varience" value="<?php echo $row['varience'];?>"></td>
                  <td style="vertical-align:middle;"><input type="text" class="form-control" name="cutt2shiploss[]" id="cutt2shiploss" value="<?php echo $row['cutt2shiploss'];?>"></td>
                  <td style="vertical-align:middle;"><input type="text" class="form-control" name="wmcratio[]" id="wmcratio" value="<?php echo $row['wmcratio'];?>"></td>
                  <td style="vertical-align:middle;"><input type="text" class="form-control" name="dhusf[]" id="dhusf" value="<?php echo $row['dhusf'];?>"></td>
                  <td style="vertical-align:middle;"><input type="text" class="form-control" name="fivesscore[]" id="fivesscore" value="<?php echo $row['fivesscore'];?>"></td>
                  <td style="vertical-align:middle;"><input type="text" class="form-control" name="wto[]" id="wto" value="<?php echo $row['wto'];?>"></td>
                  <td style="vertical-align:middle;"><input type="text" class="form-control" name="woabsentism[]" id="woabsentism" value="<?php echo $row['woabsentism'];?>"></td>
                  <td style="vertical-align:middle;"><input type="text" class="form-control" name="ontpre[]" id="ontpre" value="<?php echo $row['ontpre'];?>"></td>
                  <td style="vertical-align:middle;"><input type="text" class="form-control" name="wofeedback[]" id="wofeedback" value="<?php echo $row['wofeedback'];?>"></td>
                  <td style="vertical-align:middle;"><input type="text" class="form-control" name="sleave[]" id="sleave" value="<?php echo $row['sleave'];?>"></td>
                  <td style="vertical-align:middle;"><input type="text" class="form-control" name="sabsent[]" id="sabsent" value="<?php echo $row['sabsent'];?>"></td>
                  <td style="vertical-align:middle;"><input type="text" class="form-control" name="slate[]" id="slate" value="<?php echo $row['slate'];?>"></td>
                  
                  
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
         
