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
                  <h3 class="box-title">Case List</h3>
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
                  <th>ID</th>
                  <th>Incident Date</th>
                  <th>Factory</th>
                  <th>Opponent</th>
                  <th>Lawyer</th>
                  <th>Case Details</th>
                  <th>Court Name</th>
                  <th>Case Type</th>
                  <th>Case Number</th>
                  <th>Admission Date</th>
                  <th>Hearing Date</th>
                  <th>Status</th>
                  <th>Edit</th>
                  <th>Details</th>
                </tr>
                </thead>
                <tbody>
                <?php 
				$i=1;
				foreach($cl as $row)
				{ ?>
                <tr>
                  <td style="vertical-align:middle;"><?php echo $i++;?></td>
                  <td style="vertical-align:middle;"><a href="<?php echo base_url();?>Dashboard/case_hearing_date_up/<?php echo $bn=$row['caseid'];?>"><?php echo $row['caseid'];?></a></td>
                  <td style="vertical-align:middle;"><?php echo date("d-m-Y", strtotime($row['idate']));?></td>
                  <td style="vertical-align:middle;"><?php echo $row['factoryid'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['opponent'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['lawyer'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['casedetails'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['courtname'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['casetype'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['casenumber'];?></td>
                  <td style="vertical-align:middle;"><a href="<?php echo base_url();?>Dashboard/case_admission_date_up/<?php echo $bn=$row['caseid'];?>"><?php echo date("d-m-Y", strtotime($row['adate']));?></a></td>
                  <?php
				  	if($row['hfdate']=='')
				  	{
				  ?>
                  		<td style="vertical-align:middle;">0000-00-00</td>
                  <?php
					}
					else
					{
				   ?>
                        <td style="vertical-align:middle;"><?php echo date("d-m-Y", strtotime($row['hfdate']));?></td>
                   <?php
					}
				  ?>
                  <?php
				  if($row['cstatus']=='1')
				  {
					?>
                    <td style="vertical-align:middle;">Running</td>
                   <?php
				  }
				  else
				  {
					?>
                  	<td style="vertical-align:middle;">Complete</td>
                    <?php
				  }
				  ?>
                  <td style="vertical-align:middle;"><a href="<?php echo base_url();?>Dashboard/case_list_up/<?php echo $bn=$row['caseid'];?>"><i class="fa fa-edit" style="font-size:24px"></i></a></td>
                  <td style="vertical-align:middle;"><a href="<?php echo base_url();?>Dashboard/case_details/<?php echo $bn=$row['caseid'];?>">Details</a></td>
                  
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
