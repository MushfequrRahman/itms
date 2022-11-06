<style>
.error{color:red;}
em{color:red;}
th,td{font-size:12px;}
.chk{width:20px; height:20px; text-align:center;}
</style>
<script>
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
</script>


<body>
<div class="wrapper">



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
    <!-- Main content -->
    <section class="content">
<div id="myModal" class="modal fade">
    <div class="modal-dialog" style="width:1350px;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Cap Status Insert</h5>
                <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
                <?php /*?><a onclick="location.href='<?php echo base_url();?>Dashboard/cap_insert_form';" data-dismiss="modal">&times;</a><?php */?>
                <button type="button" onClick="location.href='<?php echo base_url();?>Dashboard/cap_status_form';" class="close" data-dismiss="modal">&times;</button>
                <?php /*?><a href="<?php echo base_url();?>Dashboard/cap_insert_form" class="close" data-dismiss="modal">&times </a><?php */?>
            </div>
            <div class="modal-body">

                <table id="tableData" class="table table-hover table-bordered table-striped text-center">
              <thead style="background:#91b9e6;">
                <tr>
                <!--<th>Check</th>-->
                <th>Sl</th>
                <th>Unit</th>
                <th>Buyer</th>
                  <th>Serial</th>
                  <th>Audit Party</th>
                  <th>Audit Type</th>
                  <th>Audit Scope</th>
                  <th>Findings</th>
                  <th>Observation</th>
                  <th>Cap</th>
                  <th>Responsible Person</th>
                  <th>Target Date</th>
                  <th>Completion Date</th>
                  <th>Pic</th>
                  <th>Ratings</th>
                  <th>Status</th>
                </tr>
                </thead>
                <form role="form" autocomplete="off" action="<?php echo base_url();?>Dashboard/cap_status_insert" method="post" enctype="multipart/form-data">
                <?php $i=1;?>
                 <?php foreach($cr as $row)
				{ ?>
                <tbody id="tbod">
               
                <tr>
                  <?php /*?><input type="hidden" class="form-control" name="preaid[]" value="<?php echo $row['preaid'];?>"><?php */?>
                  
                  <td style="vertical-align:middle;"><?php echo $j=$i++;?></td>
                  <td style="vertical-align:middle;"><?php echo $row['factoryname'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['buyername'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['fsl'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['auditparty'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['audittype'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['auditscope'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['findings'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['observation'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['cap'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['name'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['tardate'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['comdate'];?></td>
                  <td style="vertical-align:middle;"><img class="profile-user-img img-responsive img-thumbnail" src="<?php echo base_url().'assets/uploads/capreport/'.$row['capimage'];?>" alt="No Image"></td>
                  
                  <?php if($row['status']==0)
				  			{
				  ?>
                  				<input type="hidden" class="form-control" name="preaid[]" value="<?php echo $row['preaid'];?>">
                                <td style="vertical-align:middle;">
                                	<select name="ratings[]" class="form-control">
                                    <option value="0">0</option>
                                	<option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select></td>
                                <td style="vertical-align:middle;">
                                <select name="status[]" class="form-control">
                                	<option value="0">Ongoing</option>
                                    <option value="1">Done</option>
                                    
                                </select></td>
                  <?php
							}
						elseif($row['status']==1)
							{
				  ?>
                  <td style="vertical-align:middle;"><?php echo $row['ratings'];?></td>
                  <td style="vertical-align:middle;"><?php echo "Done";?></td>
                  <?php 
							}
				  ?>
                </tr>
                </tbody>
                
               <?php } ?>
               </table>
               <div class="text-center">
               <input type="submit" class="btn btn-primary" name="submit" value="SUBMIT" />
               </div>
               </form>
              
                
                
        </div>
    </div>
</div>
</div>
    </div>
</div>
</body>
</html>