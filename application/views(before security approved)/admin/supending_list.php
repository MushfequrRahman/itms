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
                  <h3 class="box-title">Suggestion Box</h3>
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
              <thead style="background:#91b9e6;position: sticky;top: 0;">
                <tr>
                  <th>SL</th>
                  <th>#Ref ID</th>
                  <th>File</th>
                  <th>Date</th>
        		  <th>Factory</th>
                  <th>Opener-1</th>
                  <th>Opener-2</th>
                  <th>Opener-3</th>
                  <th>Opener-4</th>
                  <th>Box</th>
                  <th>Location</th>
                  <th>Name By</th>
                  <th>Details</th>
                  <th>Grading</th>
                  <th>FPR</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <?php 
				if($this->session->userdata('user_type')!=1)
				{
				$i=1;
				foreach($ul as $row)
				{ 
				if($row['graid']==5)
				{
					//if($this->session->userdata('user_type')!==1)
//					{
	
				?>
                <tr>
                  <td style="vertical-align:middle;"><?php echo $i++;?></td>
                  <?php 
				  if($row['sustatus']==1)
				  {?>
                  <td style="vertical-align:middle;"><a href="<?php echo base_url();?>Dashboard/suggession_inquiry/<?php echo $bn=$row['suid'];?>"><?php echo $row['suid'];?></a></td>
                   <?php
				  }
                  elseif($row['sustatus']==2)
				  {
				  ?>
                  <td style="vertical-align:middle;"><a href="<?php echo base_url();?>Dashboard/suggession_after_inquiry/<?php echo $bn=$row['suid'];?>"><?php echo $row['suid'];?></a></td>
                  <?php
				  }
				  ?>
                   <?php 
				 if($row['pic_file']=='')
                 {
					 ?>
                 <td style="vertical-align:middle;">No File</td>
                 <?php
				 }
				 else
				 {
					 ?>
                     <td style="vertical-align:middle;"><a target="_blank" href="<?php echo base_url().'assets/uploads/suggession/'.$row['pic_file'];?>"><i class="fa fa-file"></i></a></td>
                     <?php
				 }
				 ?>
                  <?php $sudate= date("d-m-Y", strtotime($row['sudate']));?>
                  <td style="vertical-align:middle;"><?php echo $sudate;?></td>
                  <td style="vertical-align:middle;"><?php echo $row['factoryid'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['openerid1'].'<br/>'.$row['opener1'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['openerid2'].'<br/>'.$row['opener2'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['openerid3'].'<br/>'.$row['opener3'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['openerid4'].'<br/>'.$row['opener4'];?></td>
                  
                  <td style="vertical-align:middle;"><?php echo $row['box'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['location'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['nameby'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['details'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['grading'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['fprid'].'<br/>'.$row['fpr'];?></td>
                  <?php 
				  if($row['sustatus']==1)
				  {?>
                  <td style="vertical-align:middle;">Waiting For Inquiry</td>
                  <?php
				  }
				  elseif($row['sustatus']==2)
				  {
				  ?>
                  <td style="vertical-align:middle;">Inquiry Running</td>
                  <?php
				  }}
				  ?>
                </tr>
                <?php } }?>
                
                
                <?php 
				if($this->session->userdata('user_type')==1)
				{
				$i=1;
				foreach($ul as $row)
				{ 
				//if($row['graid']==5)
//				{
					//if($this->session->userdata('user_type')!==1)
//					{
	
				?>
                <tr>
                  <td style="vertical-align:middle;"><?php echo $i++;?></td>
                  <?php 
				  if($row['sustatus']==1)
				  {?>
                  <td style="vertical-align:middle;"><a href="<?php echo base_url();?>Dashboard/suggession_inquiry/<?php echo $bn=$row['suid'];?>"><?php echo $row['suid'];?></a></td>
                   <?php
				  }
                  elseif($row['sustatus']==2)
				  {
				  ?>
                  <td style="vertical-align:middle;"><a href="<?php echo base_url();?>Dashboard/suggession_after_inquiry/<?php echo $bn=$row['suid'];?>"><?php echo $row['suid'];?></a></td>
                  <?php
				  }
				  ?>
                   <?php 
				 if($row['pic_file']=='')
                 {
					 ?>
                 <td style="vertical-align:middle;">No File</td>
                 <?php
				 }
				 else
				 {
					 ?>
                     <td style="vertical-align:middle;"><a target="_blank" href="<?php echo base_url().'assets/uploads/suggession/'.$row['pic_file'];?>"><i class="fa fa-file"></i></a></td>
                     <?php
				 }
				 ?>
                  <?php $sudate= date("d-m-Y", strtotime($row['sudate']));?>
                  <td style="vertical-align:middle;"><?php echo $sudate;?></td>
                  <td style="vertical-align:middle;"><?php echo $row['factoryid'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['openerid1'].'<br/>'.$row['opener1'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['openerid2'].'<br/>'.$row['opener2'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['openerid3'].'<br/>'.$row['opener3'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['openerid4'].'<br/>'.$row['opener4'];?></td>
                  
                  <td style="vertical-align:middle;"><?php echo $row['box'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['location'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['nameby'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['details'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['grading'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['fprid'].'<br/>'.$row['fpr'];?></td>
                  <?php 
				  if($row['sustatus']==1)
				  {?>
                  <td style="vertical-align:middle;">Waiting For Inquiry</td>
                  <?php
				  }
				  elseif($row['sustatus']==2)
				  {
				  ?>
                  <td style="vertical-align:middle;">Inquiry Running</td>
                  <?php
				  }
				  ?>
                </tr>
                <?php } }?>
                
                
                </tbody>
               
              </table>
              </div>
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
