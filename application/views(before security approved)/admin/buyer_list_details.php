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
div.scrollable-table-wrapper {
  height: 500px;
  overflow: auto;
}
  .header {
            position: sticky;
            top:0;
        }
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
                  <h3 class="box-title">Buyer Info</h3>
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
            <div class="scrollable-table-wrapper">
             	<table id="tableData" class="table table-hover table-bordered">
              	
                <tbody>
                <?php foreach($ul as $row)
				{ ?>
                <tr>
                  <td style="vertical-align:middle;">Image</td>
                  <td style="vertical-align:middle;"><img class="profile-user-img img-responsive img-thumbnail" src="<?php echo base_url().'assets/uploads/buyer/'.$row['image'];?>" alt="User profile picture"></td>
                </tr>
                 <tr>
                  <td style="vertical-align:middle;">Buyer</td>
                  <td style="vertical-align:middle;"><?php echo $row['buyername'];?></td>
                </tr>
                <tr>
                  <td style="vertical-align:middle;">Origin</td>
                  <td style="vertical-align:middle;"><?php echo $row['origin'];?></td>
                </tr>
                <tr>
                  <td style="vertical-align:middle;">Local Address</td>
                  <td style="vertical-align:middle;"><?php echo $row['local_address'];?></td>
                </tr>
                 <tr>
                  <td style="vertical-align:middle;">Name(Local Compliance Contact Person)</td>
                  <td style="vertical-align:middle;"><?php echo $row['lcuser'];?></td>
                </tr>
                <tr>
                  <td style="vertical-align:middle;">Mobile(Local Compliance Contact Person)</td>
                  <td style="vertical-align:middle;"><?php echo $row['lcmobile'];?></td>
                </tr>
                <tr>
                  <td style="vertical-align:middle;">Email(Local Compliance Contact Person)</td>
                  <td style="vertical-align:middle;"><?php echo $row['lcemail'];?></td>
                </tr>
                <tr>
                  <td style="vertical-align:middle;">Name(Local Merchandiser Contact Person)</td>
                  <td style="vertical-align:middle;"><?php echo $row['buser'];?></td>
                </tr>
                <tr>
                  <td style="vertical-align:middle;">Mobile(Local Merchandiser Contact Person)</td>
                  <td style="vertical-align:middle;"><?php echo $row['lmmobile'];?></td>
                </tr>
                <tr>
                  <td style="vertical-align:middle;">Email(Local Merchandiser Contact Person)</td>
                  <td style="vertical-align:middle;"><?php echo $row['lmemail'];?></td>
                </tr>
                <tr>
                  <td style="vertical-align:middle;">Web</td>
                  <td style="vertical-align:middle;"><a target="_blank" href="http://<?php echo $row['webaddress'];?>"><?php echo $row['webaddress'];?></a></td>
                </tr>                                  
                </tbody>
               <?php } ?>
              </table>
              </div>
            </div>
            
            <!-- /.box-body -->
          </div>
          <?php /*?><script type="text/javascript">
            $(document).ready(function() {
                $('#tableData').paging({limit:50});
            });
        </script><?php */?>
                
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
