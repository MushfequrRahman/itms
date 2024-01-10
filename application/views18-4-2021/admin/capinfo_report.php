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
<script type="text/javascript">
$(function () {
    jQuery("#pd_1").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#pd_2").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#pd_3").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#pd_4").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#pd_5").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#pd_6").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#pd_7").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#pd_8").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#pd_9").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#pd_10").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#pd_11").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#pd_12").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#pd_13").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#pd_14").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#pd_15").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#pd_16").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#pd_17").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#pd_18").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#pd_19").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#pd_20").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#pd_21").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#pd_22").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#pd_23").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#pd_24").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#pd_25").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#pd_26").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#pd_27").datepicker({dateFormat: 'dd-mm-yy'});
	})
</script> 
<script type="text/javascript">
$(function () {
    jQuery("#wd_1").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#wd_2").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#wd_3").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#wd_4").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#wd_5").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#wd_6").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#wd_7").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#wd_8").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#wd_9").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#wd_10").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#wd_11").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#wd_12").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#wd_13").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#wd_14").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#wd_15").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#wd_16").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#wd_17").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#wd_18").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#wd_19").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#wd_20").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#wd_21").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#wd_22").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#wd_23").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#wd_24").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#wd_25").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#wd_26").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery("#wd_27").datepicker({dateFormat: 'dd-mm-yy'});
	})
</script> 
<!--<script>
$(function() {
	$('#tbod').find('input[id^=pd_]').datepicker();

});
</script>-->
<!--<script type="text/javascript">
$(document).ready(function(){
    var html = '';
    //create 50 rows             
    for (var i = 0; i < 50; i++) {
        //create table row element
        html += '<tr><td class="Date"><input type="text" id="pd' + i +
            '" maxlength="8"></td></tr>';
    }
    $('#tbod').html(html).find('input[id^=pd]').datepicker(
        {dateFormat: 'mm/dd/yy'});
});

</script>-->
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
                <h5 class="modal-title">Cap Info Insert</h5>
                <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
                <?php /*?><a onclick="location.href='<?php echo base_url();?>Dashboard/cap_insert_form';" data-dismiss="modal">&times;</a><?php */?>
                <button type="button" onClick="location.href='<?php echo base_url();?>Dashboard/cap_insert_form';" class="close" data-dismiss="modal">&times;</button>
                <?php /*?><a href="<?php echo base_url();?>Dashboard/cap_insert_form" class="close" data-dismiss="modal">&times </a><?php */?>
            </div>
            <div class="modal-body">

                <table id="tableData" class="table table-hover table-bordered table-striped text-center">
              <thead style="background:#91b9e6;">
                <tr>
                <th>Check</th>
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
                  <th>Image</th>
                </tr>
                </thead>
                <form role="form" autocomplete="off" action="<?php echo base_url();?>Dashboard/capinfo_report_insert" method="post" enctype="multipart/form-data">
                <?php $i=1;?>
                 <?php foreach($cr as $row)
				{ ?>
                <tbody id="tbod">
               
                <tr>
                  <input type="hidden" class="form-control" name="preaid[]" value="<?php echo $row['preaid'];?>">
                  <td style="vertical-align:middle;"><input type="checkbox" class="form-control chk" name="chpreaid[]" value="<?php echo $row['preaid'];?>"></td>
                  <td style="vertical-align:middle;"><?php echo $j=$i++;?></td>
                  <td style="vertical-align:middle;"><?php echo $row['factoryname'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['buyername'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['fsl'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['auditparty'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['audittype'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['auditscope'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['findings'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['observation'];?></td>
                  <td><textarea class="form-control" rows="1" name="cap[]" placeholder="Cap"></textarea>
                      <?php echo form_error('cap[]', '<div class="error">', '</div>');  ?>
                  </td>
                  <?php /*?><td style="vertical-align:middle;"><input type="text" class="form-control" name="pr[]" placeholder="Responsible Person"></td><?php */?>
                  <td style="vertical-align:middle;"><select class="form-control" name="pr[]" id="pr">
                    	<option value="">Select....</option>
                        <?php
						foreach($ul as $row)
						{
					?>
                    		<option value="<?php echo $row['userid'];?>"><?php echo $row['name'];?></option>
                    <?php
						}
					?>
                    </select>
                    </td>
                  <td style="vertical-align:middle;"><input type="text" class="form-control pd" name="pd[]" id="pd_<?php echo $j;?>" value="<?php echo date('d-m-Y');?>"></td>
                  <td style="vertical-align:middle;"><input type="text" class="form-control wd" name="wd[]" id="wd_<?php echo $j;?>" value="<?php echo date('d-m-Y');?>"></td>
                  <td style="vertical-align:middle;"><div class="form-group">
                  <label for="preauitfile">Image</label>
                  <input type="file" name="pic_file[]">
                </div></td>
                </tr>
                </tbody>
                
               <?php } ?>
               </table>
               <div class="box-footer text-center">
               <input type="submit" class="btn btn-primary" name="submit" value="SUBMIT" />
               </div>
               </form>
              
                <?php /*?><form role="form" autocomplete="off" action="<?php echo base_url();?>Dashboard/capinfo_report_insert" method="post" enctype="multipart/form-data">
                <input type="text" class="form-control" name="fsl" placeholder="Enter Buyer Name" value="">
                <input type="submit" class="btn btn-primary" name="submit" value="Submit" />
                </form><?php */?>
                
        </div>
    </div>
</div>
</div>
    </div>
</div>
</body>
</html>