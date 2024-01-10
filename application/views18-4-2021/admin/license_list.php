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
th,td{font-size:11px;text-align:center;}
.zoom {
  /*padding: 50px;*/
  
  transition: transform .2s; /* Animation */
 /* width: 200px;*/
 /* height: 200px;
  margin: 0 auto;*/
}

.zoom:hover {
  transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
@keyframes up-right {
    0% {
        transform: scale(1);
        opacity: .25
    }
    50% {
        transform: scale (1, 5);
        opacity: 1;
    }
    100% {
        transform: scale(1);
        opacity: .25;
    }
}
.circle {
    border-radius: 50%;
    width: 30px;
    height: 30px;
    /*opacity: .25;*/
}
.red {
    background-color: red;
   /* position: absolute;*/
    top: 50%;
    left: 50%;
    -webkit-animation: up-right 1s infinite;
    -moz-animation: up-right 1s infinite;
    -o-animation: up-right 1s infinite;
    animation: up-right 1s infinite;
}
.yellow {
    background-color: yellow;
    /*position: absolute;*/
    top: 50%;
    left: 50%;
    -webkit-animation: up-right 1s infinite;
    -moz-animation: up-right 1s infinite;
    -o-animation: up-right 1s infinite;
    animation: up-right 1s infinite;
}
.green {
    background-color: green;
   /* position: absolute;*/
    top: 50%;
    left: 50%;
    /*-webkit-animation: up-right 1s infinite;
    -moz-animation: up-right 1s infinite;
    -o-animation: up-right 1s infinite;
    animation: up-right 1s infinite;*/
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
                  <h3 class="box-title">License Info</h3>
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
                  <th>Factory ID</th>
                  <th>License Name</th>
                  <th>Regulatory Authority</th>
                 
                  <th>Division</th>
                  <th>Department</th>
                  <th>License Type</th>
                  <th>Issue Date</th>
                  <th>Renewal Date</th>
                  <th>Remaining Day</th>
                  <th>Processing Time</th>
                  <th>Regulatory Fee</th>
                  <th>Mis.Exp</th>
                  <th>Status</th>
                  <?php if($this->session->userdata('user_type')==1)
				  {
					  ?>
                  <th>Edit</th>
                  <?php
				  }
				  ?>
                </tr>
                </thead>
                <tbody>
                <?php 
				$i=1;
				foreach($ll as $row)
				{ ?>
                <tr>
                  <td style="vertical-align:middle;"><?php echo $i++;?></td>
                  
                  
                 <?php /*?> <td style="vertical-align:middle;"><img class="profile-user-img img-responsive img-thumbnail zoom" src="<?php echo base_url().'assets/uploads/license/'.$row['licensefile'];?>" alt="User profile picture"></td><?php */?>
                 <?php 
				 if($row['licensefile']=='')
                 {
					 ?>
                 <td style="vertical-align:middle;">No File</td>
                 <?php
				 }
				 else
				 {
					 ?>
                     <td style="vertical-align:middle;"><a target="_blank" href="<?php echo base_url().'assets/uploads/license/'.$row['licensefile'];?>"><i class="fa fa-file"></i></a></td>
                     <?php
				 }
				 ?>
                 
                  <td style="vertical-align:middle;"><?php echo $row['factoryname'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['licensename'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['reauthority'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['divisionname'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['departmentname'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['licensetype'];?></td>
                  <?php
				  $row['issuedate'];
				  $renewaldate=$row['renewaldate'];
                  $issuedate1 = date("d-m-Y", strtotime($row['issuedate']));
				  $renewaldate1 = date("d-m-Y", strtotime($renewaldate=$row['renewaldate']));

?>
                  <td style="vertical-align:middle;"><?php echo $issuedate1;?></td>
                  <td style="vertical-align:middle;"><?php echo $renewaldate1;?></td>
                  <?php
                  	$now = time(); // or your date as well
					$renewaldate = strtotime($renewaldate);
					$datediff = $renewaldate-$now;
					$remain=round($datediff / (60 * 60 * 24));
?>
                  <td style="vertical-align:middle;"><?php echo $remain;?></td>
                  <td style="vertical-align:middle;"><?php echo $row['processingtime'];?></td>
                   
                  <td style="vertical-align:middle;"><?php echo $row['regulatoryfee'];?></td>
                 
                  <td style="vertical-align:middle;"><?php echo $row['misexp'];?></td>
                  <?php
				  	if($remain < 10)
					{
						
					?>
                    <td style="vertical-align:middle;"><div class="circle red"></div></td>
                    <?php
						}
				  
				  	else if($remain < 60)
					{
						
					?>
                    <td style="vertical-align:middle;"><div class="circle red"></div></td>
                    <?php
						}
						else
						{
				  ?>
                  <td style="vertical-align:middle;"><div class="circle green"></div></td>
                  <?php
						}
						?>
                  <?php if($this->session->userdata('user_type')==1)
				  {
					  ?>
                  <td style="vertical-align:middle;"><a href="<?php echo base_url();?>Dashboard/license_list_up/<?php echo $bn=$row['licenseid'];?>"><i class="fa fa-edit" style="font-size:24px"></i></a></td>
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
