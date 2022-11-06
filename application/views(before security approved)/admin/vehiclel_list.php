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
th,td{font-size:10px;text-align:center;}
.fared{color:red;}
.fagreen{color:green;}
</style>
<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">

 
  <!-- Left side column. contains the logo and sidebar -->
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

    <!-- Main content -->
    <section class="content">
      
        
		

      

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
                  <h3 class="box-title">Vehicle License List</h3>
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12">
							<?php /*?><?php if($responce = $this->session->flashdata('Successfully')): ?>
								<div class="text-center">
									<div class="alert alert-success text-center"><?php echo $responce;?></div>
								</div>
							<?php endif;?><?php */?>
						</div>
					</div>
              
                </div>
                <!-- /.box-header -->
                <div class="text-right">
                					<span style="padding:0 10px 0 0;"><i class="fa fa-square fared"></i>&nbsp;Below 60 Days</span>
                					<span style="padding:0 10px 0 0;"><i class="fa fa-square fagreen"></i>&nbsp;Above 60 Days</span>
                				</div>
            <div class="box-body table-responsive no-padding">
             	<table id="tableData" class="table table-hover table-bordered">
              <thead style="background:#91b9e6;">
                <tr>
                  <th>SL</th>
                  <th>Brand</th>
                  <th>Model</th>
                  <th>Vehicle Number</th>
                  <!--<th>Vehicle Type</th>-->
                  <!--<th>Register No</th>-->
                  <!--<th>Register Year</th>-->
                  <!--<th>Color</th>-->
                  <!--<th>CC</th>-->
                  <!--<th>Engine No</th>
                  <th>Chasis No</th>-->
                  <!--<th>Tyre Size</th>-->
                  <!--<th>Wheel Size</th>-->
                  <!--<th>Weight</th>-->
                  <th>Fuel</th>
                  <!--<th>Seat No</th>-->
                  <th>Insurance No</th>
                  <th>Insurance Address</th>
                  <th>Insurance Issue Date</th>
                  <th>Insurance Expire Date</th>
                  <th>Ins.Remaining Day</th>
                  <th>Tax Token</th>
                  <th>Tax Token Issue Date</th>
                  <th>Tax Token Expire Date</th>
                  <th>Tax.Remaining Day</th>
                  <th>Fitness</th>
                  <th>Fitness Issue Date</th>
                  <th>Fitness Expire Date</th>
                  <th>Fitness.Remaining Day</th>
                  <!--<th>Price</th>-->
                  <!--<th>Owner Name</th>
                  <th>User Unit/Route</th>
                  <th>Registration Unit Name</th>
                  <th>Registration User Name</th>-->
                </tr>
                </thead>
                <tbody>
                <?php 
				$i=1;
				foreach($ul as $row)
				{ ?>
                <tr>
                  
                  <td style="vertical-align:middle;"><?php echo $i++;?></td>
                  <td style="vertical-align:middle;"><?php echo $row['brand'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['model'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['vehiclenumber'];?></td>
                  <?php /*?><td style="vertical-align:middle;"><?php echo $row['vehicletype'];?></td><?php */?>
                 <?php /*?> <td style="vertical-align:middle;"><?php echo $row['regisnumber'];?></td><?php */?>
                  <?php /*?><td style="vertical-align:middle;"><?php echo date('d-m-Y',strtotime($row['regisyr']));?></td><?php */?>
                  <?php /*?><td style="vertical-align:middle;"><?php echo $row['color'];?></td><?php */?>
                  <?php /*?><td style="vertical-align:middle;"><?php echo $row['cc'];?></td><?php */?>
                  <?php /*?><td style="vertical-align:middle;"><?php echo $row['engineno'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['chasisno'];?></td><?php */?>
                  <?php /*?><td style="vertical-align:middle;"><?php echo $row['tyresize'];?></td><?php */?>
                  <?php /*?><td style="vertical-align:middle;"><?php echo $row['wheelsize'];?></td><?php */?>
                 <?php /*?> <td style="vertical-align:middle;"><?php echo $row['weight'];?></td><?php */?>
                  <td style="vertical-align:middle;"><?php echo $row['fuel'];?></td>
                  <?php /*?><td style="vertical-align:middle;"><?php echo $row['seatno'];?></td><?php */?>
                  <td style="vertical-align:middle;"><?php echo $row['insurance'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['ica'];?></td>
                  <?php
				  if($row['iid']=='')
				  {
				 ?>
                  <td style="vertical-align:middle;">0000-00-00</td>
                  <?php
				  }
				  else
				  {
				  ?>
                  <td style="vertical-align:middle;"><?php echo date('d-m-Y',strtotime($row['iid']));?></td>
                  <?php
				  }
				  ?>
                  <?php
				  if($row['ied']=='')
				  {
				 ?>
                  <td style="vertical-align:middle;">0000-00-00</td>
                  <?php
				  }
				  else
				  {
				  ?>
                  <td style="vertical-align:middle;"><?php echo date('d-m-Y',strtotime($row['ied']));?></td>
                  <?php
				  }
				  ?>
                  <?php
				  	$now = time(); // or your date as well
					$ied = strtotime($row['ied']);
					$datediff1 = $ied-$now;
					$remain1=round($datediff1 / (60 * 60 * 24));
				  ?>
                  <?php
				  	if($remain1>=61)
					{
				  ?>
                  		<td style="vertical-align:middle; background:green; color:#FFFFFF;"><strong><?php echo $remain1;?></strong></td>
                  <?php
					}
					else
					{
						?>
                    	<td style="vertical-align:middle; background:red; color:#FFFFFF;"><strong><?php echo $remain1;?></strong></td>
                    <?php
					}
					?>
                  <td style="vertical-align:middle;"><?php echo $row['taxtoken'];?></td>
                  <?php
				  if($row['tid']=='')
				  {
				 ?>
                  <td style="vertical-align:middle;">0000-00-00</td>
                  <?php
				  }
				  else
				  {
				  ?>
                  <td style="vertical-align:middle;"><?php echo date('d-m-Y',strtotime($row['tid']));?></td>
                  <?php
				  }
				  ?>
                  <?php
				  if($row['ted']=='')
				  {
				 ?>
                  <td style="vertical-align:middle;">0000-00-00</td>
                  <?php
				  }
				  else
				  {
				  ?>
                  <td style="vertical-align:middle;"><?php echo date('d-m-Y',strtotime($row['ted']));?></td>
                  <?php
				  }
				  ?>
                   <?php
				  	$now = time(); // or your date as well
					$ted = strtotime($row['ted']);
					$datediff2 = $ted-$now;
					$remain2=round($datediff2 / (60 * 60 * 24));
				  ?>
                  <?php
				  	if($remain2>=61)
					{
				  ?>
                  		<td style="vertical-align:middle; background:green; color:#FFFFFF;"><strong><?php echo $remain2;?></strong></td>
                  <?php
					}
					else
					{
						?>
                    	<td style="vertical-align:middle; background:red; color:#FFFFFF;"><strong><?php echo $remain2;?></strong></td>
                    <?php
					}
					?>
                  <td style="vertical-align:middle;"><?php echo $row['fitness'];?></td>
                  <?php
				  if($row['fid']=='')
				  {
				 ?>
                  <td style="vertical-align:middle;">0000-00-00</td>
                  <?php
				  }
				  else
				  {
				  ?>
                  <td style="vertical-align:middle;"><?php echo date('d-m-Y',strtotime($row['fid']));?></td>
                  <?php
				  }
				  ?>
                  <?php
				  if($row['fed']=='')
				  {
				 ?>
                  <td style="vertical-align:middle;">0000-00-00</td>
                  <?php
				  }
				  else
				  {
				  ?>
                  <td style="vertical-align:middle;"><?php echo date('d-m-Y',strtotime($row['fed']));?></td>
                  <?php
				  }
				  ?>
                 <?php
				  	$now = time(); // or your date as well
					$fed = strtotime($row['fed']);
					$datediff3 = $fed-$now;
					$remain3=round($datediff3 / (60 * 60 * 24));
				  ?>
                  <?php
				  	if($remain3>=61)
					{
				  ?>
                  		<td style="vertical-align:middle; background:green; color:#FFFFFF;"><strong><?php echo $remain3;?></strong></td>
                  <?php
					}
					else
					{
						?>
                    	<td style="vertical-align:middle; background:red; color:#FFFFFF;"><strong><?php echo $remain3;?></strong></td>
                    <?php
					}
					?>
				 <?php /*?> <td style="vertical-align:middle;"><?php echo $row['price'];?></td><?php */?>
                  <?php /*?><td style="vertical-align:middle;"><?php echo $row['ownername'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['route'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['refactoryid'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['regisname'];?></td><?php */?>
                </tr>
                </tbody>
               <?php } ?>
              </table>
            </div>
            
            <!-- /.box-body -->
          </div>
          <script type="text/javascript">
            $(document).ready(function() {
                $('#tableData').paging({limit:50});
            });
        </script>
                
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

</body>
</html>
