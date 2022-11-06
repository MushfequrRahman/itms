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
th,td{font-size:14px;text-align:center;}
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
                  <h3 class="box-title">Challanges List</h3>
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
             	<table id="tableData" class="table table-hover table-bordered">
              <thead style="background:#91b9e6;">
                <tr>
                  <th>SL</th>
                  <th>ID</th>
                  <th>Issue Type</th>
                  <th>Details</th>
                  <th>Zone</th>
                  <th>Place</th>
                  <th>Desired Result</th>
                  <th>FPR</th>
                  <th>Present Status</th>
                  <th>Remarks</th>
                  <th>Status</th>
                  <th>History</th>
                  <th>Member</th>
                  <th>Details</th>
        		  <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                <?php 
				$i=1;
				foreach($cl as $row)
				{ ?>
                <tr>
                  
                  <td style="vertical-align:middle;"><?php echo $i++;?></td>
                  <td style="vertical-align:middle;"><?php echo $row['chid'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['issuetype'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['details'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['zone'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['place'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['dl'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['ename'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['ps'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['remarks'];?></td>
                  <?php
				  if($row['chstatus']=='1')
				  	{
				  ?>
                  		<td style="vertical-align:middle;">Active</td>
                  <?php
					}
				  else
				  	{
				  ?>
                  		<td style="vertical-align:middle;">Close</td>
                  <?php
					}
				  ?>
                  <td style="vertical-align:middle;"><a href="<?php echo base_url();?>Dashboard/challanges_history/<?php echo $bn=$row['chid'];?>">History</a></td>
                  <td style="vertical-align:middle;"><a href="<?php echo base_url();?>Dashboard/challanges_member/<?php echo $bn=$row['chid'];?>">Add Member</a></td>
                  <td style="vertical-align:middle;"><a href="<?php echo base_url();?>Dashboard/challanges_details_list/<?php echo $bn=$row['chid'];?>">Details</a></td>
                  <td style="vertical-align:middle;"><a href="<?php echo base_url();?>Dashboard/challanges_list_up/<?php echo $bn=$row['chid'];?>"><i class="fa fa-edit" style="font-size:24px"></i></a></td>
                  
                  
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
