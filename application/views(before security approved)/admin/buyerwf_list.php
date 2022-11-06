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
                  <h3 class="box-title">Buyer Wise Factory Info</h3>
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
                  <th>Buyer</th>
                  <th>AFL</th>
                  <th>AKL</th>
                  <th>ATL</th>
                  <th>BCL</th>
                  <th>BGL</th>
                  <th>BPL</th>
                  <th>BTL</th>
                  <th>BWL</th>
                  <th>JEL</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($bl as $row)
				{ ?>
                <tr>
                  <td><img class="profile-user-img img-responsive img-thumbnail" src="<?php echo base_url().'assets/uploads/buyer/'.$row['image'];?>" alt="User profile picture"></td>
                  
                  
                 <?php if($row['afl']==1)
				 {?>
                 <td style="vertical-align:middle"><i class="fa fa-check" aria-hidden="true"></i></td>
				<?php
				 }
				 else
				 {
					 ?>
                     <td>&nbsp;</td>
                 <?php
				 }
				 ?>
                  
                  <?php if($row['akl']==1)
				 {?>
                 <td style="vertical-align:middle"><i class="fa fa-check" aria-hidden="true"></i></td>
				<?php
				 }
				 else
				 {
					 ?>
                     <td>&nbsp;</td>
                 <?php
				 }
				 ?>
                  <?php if($row['atl']==1)
				 {?>
                 <td style="vertical-align:middle"><i class="fa fa-check" aria-hidden="true"></i></td>
				<?php
				 }
				 else
				 {
					 ?>
                     <td>&nbsp;</td>
                 <?php
				 }
				 ?>
                  <?php if($row['bcl']==1)
				 {?>
                 <td style="vertical-align:middle"><i class="fa fa-check" aria-hidden="true"></i></td>
				<?php
				 }
				 else
				 {
					 ?>
                     <td>&nbsp;</td>
                 <?php
				 }
				 ?>
                  <?php if($row['bgl']==1)
				 {?>
                 <td style="vertical-align:middle"><i class="fa fa-check" aria-hidden="true"></i></td>
				<?php
				 }
				 else
				 {
					 ?>
                     <td>&nbsp;</td>
                 <?php
				 }
				 ?>
                  <?php if($row['bpl']==1)
				 {?>
                 <td style="vertical-align:middle"><i class="fa fa-check" aria-hidden="true"></i></td>
				<?php
				 }
				 else
				 {
					 ?>
                     <td>&nbsp;</td>
                 <?php
				 }
				 ?>
                  <?php if($row['btl']==1)
				 {?>
                 <td style="vertical-align:middle"><i class="fa fa-check" aria-hidden="true"></i></td>
				<?php
				 }
				 else
				 {
					 ?>
                     <td>&nbsp;</td>
                 <?php
				 }
				 ?>
                  <?php if($row['bwl']==1)
				 {?>
                 <td style="vertical-align:middle"><i class="fa fa-check" aria-hidden="true"></i></td>
				<?php
				 }
				 else
				 {
					 ?>
                     <td>&nbsp;</td>
                 <?php
				 }
				 ?>
                  <?php if($row['jel']==1)
				 {?>
                 <td style="vertical-align:middle"><i class="fa fa-check" aria-hidden="true"></i></td>
				<?php
				 }
				 else
				 {
					 ?>
                     <td>&nbsp;</td>
                 <?php
				 }
				 ?>
                  <?php //$vdate = date("d-m-Y", strtotime($row['vdate']));?>
                 <?php /*?> <td style="vertical-align:middle;"><?php echo $vdate;?></td>
                  <td style="vertical-align:middle;"><a href="<?php echo base_url();?>Dashboard/buyerwf_list_up/<?php echo $bn=$row['bwfid'];?>"><i class="fa fa-edit" style="font-size:24px"></i></a></td><?php */?>
                  
                </tr>
                </tbody>
               <?php } ?>
              </table>
            </div>
            
            <!-- /.box-body -->
          </div>
          
                
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
