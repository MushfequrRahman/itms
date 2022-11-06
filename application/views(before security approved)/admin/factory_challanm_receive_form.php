<style>
.error{color:red;}
em{color:red;}
#tableData {
  
 
  text-align:center;
}
th,td{font-size:12px;text-align:center;}
</style>
<script type="text/javascript">
$(function () {
    jQuery(".pd").datepicker({dateFormat: 'yy-mm-dd'});
	jQuery(".wd").datepicker({dateFormat: 'dd-mm-yy'});
	})
</script> 
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      

      

      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="col-md-12">
      
          <div class="row">
           
            <!-- /.col -->

            <div class="col-md-12">
              <!-- USERS LIST -->
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Challan Receive</h3>
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12">
							<?php if($responce = $this->session->flashdata('Successfully')): ?>
								<div class="text-center">
									<div class="alert alert-success text-center"><?php echo $responce;?></div>
								</div>
							<?php endif;?>
						</div>
					</div>
              
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
				 <form role="form" autocomplete="off" action="<?php echo base_url();?>Dashboard/challanm_receive" method="post" enctype="multipart/form-data">
                 
                <table id="tableData" class="table table-hover table-bordered">
              <thead style="background:#91b9e6;">
                <tr>
                  <th>SL</th>
                  <th>Token</th>
                  <th>Retun ID</th>
                  <th>Challn No</th>
                  <th>Sent Factory Name</th>
                  <th>Destination Buyer Name</th>
        		  <th>Destination Factory Name</th>
                  <!--<th>Location</th>-->
                  <th>Challan Type</th>
                  <th>Product Type</th>
                  <th>Item</th>
                  <th>Sent Quantity</th>
                  <th>Receive Quantity</th>
                  <th>Unit</th>
                  <th>Description</th>
                  <th>Remarks</th>
                  <!--<th>Create Date</th>
                  <th>Create Time</th>
                  <th>Receive Date</th>
                  <th>Receive Time</th>-->
                  
                </tr>
                </thead>
                <tbody>
                <?php 
				$i=1;
				foreach($ul as $row)
				{ 
				?>
                <input type="hidden" class="form-control" name="chmid[]" value="<?php echo $row['chmid'];?>">
                 <input type="hidden" class="form-control" name="chmid2[]" value="<?php echo $row['chmid2'];?>">
                <tr>
                  
                  <td style="vertical-align:middle;"><?php echo $i++;?></td>
                  <td style="vertical-align:middle;"><?php echo $row['chmid'];?></td>
                  <?php
				  	if($row['challantypeid']==2)
					{
					?>
                  <td style="vertical-align:middle;"><?php echo $row['chmid2'];?></td>
                  <?php
					}
					else
					{
					?>
                    <td></td>
                   <?php
					}
					?>
                  <td style="vertical-align:middle;"><?php echo $row['manualid'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['sfactoryid'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['buyername'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['rfactoryid'];?></td>
                  <?php /*?><td style="vertical-align:middle;"><?php echo $row['location'];?></td><?php */?>
                  <td style="vertical-align:middle;"><?php echo $row['challantype'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['producttype'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['item_name'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['sqty'];?></td>
                  <td style="vertical-align:middle;"><input type="text" class="form-control" name="rqty[]" placeholder="Enter Receive Qty"></td>
                  <td style="vertical-align:middle;"><?php echo $row['productunitname'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['description'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['remarks'];?></td>
                  <?php /*?><?php $sdate=date("d-m-Y", strtotime($row['sdate']));?>
                  <td style="vertical-align:middle;"><?php echo $sdate;?></td>
                  <td style="vertical-align:middle;"><?php echo $row['stime'];?></td>
                  <?php $rdate=date("d-m-Y", strtotime($row['rdate']));
				  if($row['rdate']=='0000-00-00')
				  {
					  ?>
                      <td style="vertical-align:middle;">00-00-0000</td>
				  <?php
				  }
				  else
				  {?>
                  <td style="vertical-align:middle;"><?php echo $rdate;?></td>
                  <?php
				  }
				  ?>
                  <td style="vertical-align:middle;"><?php echo $row['rtime'];?></td><?php */?>
                  
                </tr>
                </tbody>
               <?php } ?>
              </table>
				
				
				
                
				
				
				

				 
				
				
                
  
               
               
    
                

             
                  <!-- /.users-list -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <input type="submit" class="btn btn-primary" name="submit" value="Submit" />
                </div>
				 </form>
                <!-- /.box-footer -->
              </div>
              <!--/.box -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->

        
          <!-- /.box -->
        </div>
        <!-- /.col -->

        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  
</div>
<!-- ./wrapper -->
<script type="text/javascript">
$(document).ready(function(){

    $('#floorname').change(function(event){
        event.preventDefault();
		var floorname = $('#floorname').val();

        $.ajax({
            type:'get',
            url:"<?php echo base_url(); ?>Dashboard/show_linename",
			dataType:"json",
                    data:{ floorname:floorname},
            success:function(res)
            	{
         		 	$('#linename').find('option').remove();
				 	// Add options
          			$.each(res,function(index,data){
				  	$('#linename').append('<option value="'+data['linename']+'">'+data['linename']+'</option>');
          			});
				}
        	});
    	});
	});
</script>

</body>
</html>


