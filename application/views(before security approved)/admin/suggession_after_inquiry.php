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
<script type="text/javascript">
$(function () {
    jQuery(".pd").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery(".wd").datepicker({dateFormat: 'yy-mm-dd'});
	//jQuery("#pd_2").datepicker({dateFormat: 'dd-mm-yy'});
	})
</script>
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
            <div class="box-body">
             	
                <?php 
				
				foreach($ul as $row)
				{ ?>
                
                 <form role="form" autocomplete="off" action="<?php echo base_url();?>Dashboard/suggession_after_inquiry_insert" method="post" enctype="multipart/form-data">
                  <div class="form-group">
					<label>Ref ID<em>*</em></label>
                 	<input type="text" readonly class="form-control" name="suid"  value="<?php echo $row['suid']; ?>">
                  </div>
                  <?php $sudate= date("d-m-Y", strtotime($row['sudate']));?>
                  <div class="form-group">
					<label>Date<em>*</em></label>
                 	<input type="text" readonly class="form-control" value="<?php echo $sudate; ?>">
                  </div>
                  <div class="form-group">
					<label>Factory Name<em>*</em></label>
                 	<input type="text" readonly class="form-control" value="<?php echo $row['factoryid']; ?>">
                  </div>
                  <div class="form-group">
					<label>Opener-1 ID<em>*</em></label>
                 	<input type="text" readonly class="form-control" value="<?php echo $row['openerid1']; ?>">
                  </div>
                  <div class="form-group">
					<label>Opener-1 Name<em>*</em></label>
                 	<input type="text" readonly class="form-control" value="<?php echo $row['opener1']; ?>">
                  </div>
                  <div class="form-group">
					<label>Opener-2 ID<em>*</em></label>
                 	<input type="text" readonly class="form-control" value="<?php echo $row['openerid2']; ?>">
                  </div>
                  <div class="form-group">
					<label>Opener-2 Name<em>*</em></label>
                 	<input type="text" readonly class="form-control" value="<?php echo $row['opener2']; ?>">
                  </div>
                  
                  <div class="form-group">
					<label>Box<em>*</em></label>
                 	<input type="text" readonly class="form-control" value="<?php echo $row['box']; ?>">
                  </div>
                  <div class="form-group">
					<label>Location<em>*</em></label>
                 	<input type="text" readonly class="form-control" value="<?php echo $row['location']; ?>">
                  </div>
                  <div class="form-group">
					<label>By<em>*</em></label>
                 	<input type="text" readonly class="form-control" value="<?php echo $row['nameby']; ?>">
                  </div>
                  
                  <div class="form-group">
					<label>Details<em>*</em></label>
                 	<textarea readonly class="form-control"><?php echo $row['details']; ?></textarea>
                  </div>
                <div class="form-group">
					<label>Corrective Message<em>*</em></label>
                 	<textarea class="form-control" readonly name="corrective" rows="5"><?php echo $row['corrective']; ?></textarea>
                  </div> 
                <div class="form-group">
					<label>Grading<em>*</em></label>
					<input type="text" readonly class="form-control" value="<?php echo $row['grading']; ?>">
				</div> 
                <div class="form-group">
					<label>FPR<em>*</em></label>
					<input type="text" readonly class="form-control" value="<?php echo $row['fpr']; ?>">
				</div>
                <?php $targetdate= date("d-m-Y", strtotime($row['targetdate']));?>
                <div class="form-group">
					<label>Target Date<em>*</em></label>
                 	<input type="text" class="form-control" readonly value="<?php echo $targetdate; ?>">
                </div>
                <div class="form-group">
					<label>Followup Date<em>*</em></label>
                 	<input type="text" class="form-control pd" name="fudate" value="<?php echo date('d-m-Y');?>">
                </div>
                <div class="form-group">
					<label>Remarks<em>*</em></label>
                 	<textarea class="form-control" name="remarks" rows="5"></textarea>
                </div>
               <?php } ?>
               <div class="box-footer text-center">
                  <input type="submit" class="btn btn-primary" name="submit" value="Submit" />
                </div>
				 </form>
              
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
