<style>
.error{color:red;}
em{color:red;}
th,td{font-size:12px;}
.chk{width:20px; height:20px; text-align:center;}
/*.content-wrapper{height:5000px;}*/
table{
font-family: Verdana; 
color:black; 
font-size: 12px; 
font-style: normal;
/*font-weight: bold;*/
/*text-align:left; */
text-align: center; 
border-collapse: collapse; 
}
@media print {
    .wrapper {
    width: 100%;
    min-height: 100%;
    height: auto !important;
    position: absolute;
}
.content-wrapper{
    bottom: 50px;
    position: fixed;
    width: 100%;
    top: 50px;
}
.main-footer{
    bottom: 0px;
    position: fixed;
    width: 100%;
}
.top{display:none;}
.close{display:none;}
.modal-title{display:none;}
}
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
                <button type="button" onClick="location.href='<?php echo base_url();?>Dashboard/cap_fullr_form';" class="close" data-dismiss="modal">&times;</button>
                <?php /*?><a href="<?php echo base_url();?>Dashboard/cap_insert_form" class="close" data-dismiss="modal">&times </a><?php */?>
            </div>
            <div class="modal-body">
            <div class="top">
             <?php foreach($cr1 as $row1)
				{ ?>
                <a href="<?php echo base_url().'assets/uploads/preaudit/'.$row1['preauditpdf'];?>">Pre Audit File</a>
                <?php
				}
				?>
                 <?php foreach($cr2 as $row2)
				{ ?>
                <a href="<?php echo base_url().'assets/uploads/capreport/'.$row2['pdffile'];?>">CAP Report File</a>
                <?php
				}
				?>
</div>
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
                  
                 
                  				
                                
                  
                  <td style="vertical-align:middle;"><?php echo $row['ratings'];?></td>
                  <?php if($row['status']==1)
				  {?>
                  <td style="vertical-align:middle;"><?php echo "DONE";?></td>
                  <?php
				  }
				  else
				  {
				  ?>
                 <td style="vertical-align:middle;"><?php echo "ONGOING";?></td>
                 <?php
				  }
				  ?>
                </tr>
                </tbody>
                
               <?php } ?>
               </table>
               
               
              
                
                
        </div>
    </div>
</div>
</div>
    </div>
</div>
</body>
</html>