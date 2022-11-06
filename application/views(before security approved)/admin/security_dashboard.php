<meta http-equiv="refresh" content="1800" />
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
                  <h3 class="box-title">Challan List Info</h3>
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12">
                        <?php /*?><?php echo $this->session->userdata('factoryid');?><?php */?>
							<?php /*?><?php if($responce = $this->session->flashdata('Successfully')): ?>
								<div class="text-center">
									<div class="alert alert-success text-center"><?php echo $responce;?></div>
								</div>
							<?php endif;?><?php */?>
						</div>
					</div>
              
                </div>
                <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
             	<table id="tableData" class="table table-hover table-bordered">
              <thead style="background:#91b9e6;">
                <tr>
                  <th>SL</th>
                  <th>Token</th>
                  <th>Challn No</th>
                  <th>Sent Factory Name</th>
                  <th>Destination Buyer Name</th>
        		  <th>Destination Factory Name</th>
                  <!--<th>Location</th>-->
                  <!--<th>Challan Type</th>
                  <th>Product Type</th>
                  <th>Item</th>-->
                  <th>Sent Quantity</th>
                 <!-- <th>Receive Quantity</th>
                  <th>Unit</th>-->
                  <th>Create Date</th>
                  <th>Create Time</th>
                  <th>Receive Date</th>
                  <th>Receive Time</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <?php 
				$i=1;
				foreach($ul as $row)
				{ ?>
                <tr>
                  
                  <td style="vertical-align:middle;"><?php echo $i++;?></td>
                  <?php if($this->session->userdata('factoryid')==$row['rfactoryid'])
				  {
					  //if($row['status']==1 || $row['status']==2)
//					  {
				  ?>
                  <td style="vertical-align:middle;"><a href="<?php echo base_url();?>Dashboard/factory_challanm_receive_form/<?php echo $bn=$row['chmid'];?>"><?php echo $row['chmid'];?></a></td>
                  <?php
				  	}
					else
				  	{
				   ?>
                  <td style="vertical-align:middle;"><?php echo $row['chmid'];?></td>
                  <?php
				  	//}
				  }
				  ?>
                  <td style="vertical-align:middle;"><?php echo $row['manualid'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['sfactoryid'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['buyername'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['rfactoryid'];?></td>
                  <?php /*?><td style="vertical-align:middle;"><?php echo $row['location'];?></td><?php */?>
                 <?php /*?> <td style="vertical-align:middle;"><?php echo $row['challantype'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['producttype'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['item'];?></td><?php */?>
                  <td style="vertical-align:middle;"><?php echo $row['sqty'];?></td>
                 <?php /*?> <td style="vertical-align:middle;"><?php echo $row['rqty'];?></td><?php */?>
                  <?php /*?><td style="vertical-align:middle;"><?php echo $row['productunitname'];?></td><?php */?>
                  <?php $sdate=date("d-m-Y", strtotime($row['sdate']));?>
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
                  <td style="vertical-align:middle;"><?php echo $row['rtime'];?></td>
                  <?php 
				  	if($row['status']==1)
					{
				  ?>
                  <td style="vertical-align:middle;">Not Receive</td>
                  <?php
					}
				  else
				  {
				  ?>
                  <td style="vertical-align:middle;">Receive</td>
                 <?php
					}
				  ?>
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
