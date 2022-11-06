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
                  <h3 class="box-title">Vehicle Tax Token List</h3>
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
            <div class="box-body table-responsive no-padding">
             	<table id="tableData" class="table table-hover table-bordered">
              <thead style="background:#91b9e6;">
                <tr>
                  <th>SL</th>
                  <th>File</th>
                  <th>ID</th>
                  <th>Tax Token</th>
                  <th>Vehicle Number</th>
                  <th>Company Address</th>
                  <th>Cost</th>
                  <th>Issue Date</th>
                  <th>Expire Date</th>
                </tr>
                </thead>
                <tbody>
                <?php 
				$i=1;
				foreach($ul as $row)
				{ ?>
                <tr>
                  
                  <td style="vertical-align:middle;"><?php echo $i++;?></td>
                  <?php 
				 if($row['taxtfile']=='')
                 {
					 ?>
                 <td style="vertical-align:middle;">No File</td>
                 <?php
				 }
				 else
				 {
					 ?>
                     <td style="vertical-align:middle;"><a target="_blank" href="<?php echo base_url().'assets/uploads/vehicle/'.$row['taxtfile'];?>"><i class="fa fa-file"></i></a></td>
                     <?php
				 }
				 ?>
                  <td style="vertical-align:middle;"><?php echo $row['vttid'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['taxtoken'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['vehicleno'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['company_address'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['cost'];?></td>
                  <td style="vertical-align:middle;"><?php echo date('d-m-Y',strtotime($row['issudate']));?></td>
                  <td style="vertical-align:middle;"><?php echo date('d-m-Y',strtotime($row['expiredate']));?></td>

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
