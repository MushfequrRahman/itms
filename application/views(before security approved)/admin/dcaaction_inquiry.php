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
                  <h3 class="box-title">Disciplinary Action</h3>
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
                
                  <form role="form" autocomplete="off" action="<?php echo base_url();?>Dashboard/diciplinary_inquiry_insert" method="post" enctype="multipart/form-data">
                  <div class="form-group">
					<label>Ref ID<em>*</em></label>
                 	<input type="text" readonly class="form-control pd" name="dcaid"  value="<?php echo $row['dcaid']; ?>">
                  </div>
                  <?php $dadate= date("d-m-Y", strtotime($row['dadate']));?>
                  <div class="form-group">
					<label>Date<em>*</em></label>
                 	<input type="text" readonly class="form-control" value="<?php echo $dadate; ?>">
                  </div>
                  <div class="form-group">
					<label>Factory Name<em>*</em></label>
                 	<input type="text" readonly class="form-control" value="<?php echo $row['factoryid']; ?>">
                  </div>
                  <div class="form-group">
					<label>ID Of Reporter<em>*</em></label>
                 	<input type="text" readonly class="form-control" value="<?php echo $row['nameofreporterid']; ?>">
                  </div>
                  <div class="form-group">
					<label>Name Of Reporter<em>*</em></label>
                 	<input type="text" readonly class="form-control" value="<?php echo $row['nameofreporter']; ?>">
                  </div>
                  <div class="form-group">
					<label> ID of Primary Investigation By<em>*</em></label>
                 	<input type="text" readonly class="form-control" value="<?php echo $row['primaryinvestigationbyid']; ?>">
                  </div>
                  <div class="form-group">
					<label>Name of Primary Investigation By<em>*</em></label>
                 	<input type="text" readonly class="form-control" value="<?php echo $row['primaryinvestigationbyname']; ?>">
                  </div>
                  <?php 
				  if($row['pidate']=='0000-00-00')
				  	{
						$pidate='0000-00-00';
					}
				  else	
				  	{
				  		$pidate= date("d-m-Y", strtotime($row['pidate']));
					}
						?>
                  <div class="form-group">
					<label>Date Of Primary Investigation<em>*</em></label>
                 	<input type="text" readonly class="form-control" value="<?php echo $pidate; ?>">
                  </div>
                  <div class="form-group">
					<label>Accused ID<em>*</em></label>
                 	<input type="text" readonly class="form-control" value="<?php echo $row['accusedid']; ?>">
                  </div>
                  <div class="form-group">
					<label>Accused Name<em>*</em></label>
                 	<input type="text" readonly class="form-control" value="<?php echo $row['accusedname']; ?>">
                  </div>
                  <div class="form-group">
					<label>Victim ID<em>*</em></label>
                 	<input type="text" readonly class="form-control" value="<?php echo $row['victimid']; ?>">
                  </div>
                  <div class="form-group">
					<label>Victim Name<em>*</em></label>
                 	<input type="text" readonly class="form-control" value="<?php echo $row['victimname']; ?>">
                  </div>
                  <div class="form-group">
					<label>Incident Details<em>*</em></label>
                 	<textarea readonly class="form-control"><?php echo $row['abusedforneg']; ?></textarea>
                  </div>
                  <?php 
				  if($row['doinfachoddate']=='0000-00-00')
				  	{
						$doinfachoddate='0000-00-00';
					}
				  else	
				  	{
				  		 $doinfachoddate= date("d-m-Y", strtotime($row['doinfachoddate']));
					}
				  
				 ?>
                  <div class="form-group">
					<label>Date OF Info Fac.Head/HOD<em>*</em></label>
                 	<input type="text" readonly class="form-control" value="<?php echo $doinfachoddate; ?>">
                  </div>
                  <div class="form-group">
					<label>Comments Of Fac.Head/HOD<em>*</em></label>
					<select class="form-control" name="dflid" id="dflid">
                    	<option value="">Select....</option>
                        <?php
						foreach($dfl as $row)
						{
					?>
                    		<option value="<?php echo $row['dfacheadcommentsid'];?>"><?php echo $row['dfacheadcomments'];?></option>
                    <?php
						}
					?>
                    </select>
                    <?php echo form_error('dfacheadcommentsid', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Action Type<em>*</em></label>
					<select class="form-control" name="dcatypeid" id="dcatypeid">
                    	<option value="">Select....</option>
                        <?php
						foreach($dcl as $row)
						{
					?>
                    		<option value="<?php echo $row['dcatypeid'];?>"><?php echo $row['dcatype'];?></option>
                    <?php
						}
					?>
                    </select>
                    <?php echo form_error('dcatypeid', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Action Date<em>*</em></label>
                 	<input type="text" class="form-control pd" name="actiondate" placeholder="Enter Date">
                </div>
                <div class="form-group">
					<label>Accused Reply Date<em>*</em></label>
                 	<input type="text" class="form-control pd" name="accrdate" placeholder="Enter Date">
                </div>
                <div class="form-group">
					<label>Victim Reply Date<em>*</em></label>
                 	<input type="text" class="form-control pd" name="vicrdate" placeholder="Enter Date">
                </div>
                <div class="form-group">
					<label>Inquiry Officer<em>*</em></label>
                 	<input type="text" class="form-control" name="inqoff" placeholder="Enter Inquiry Officer ID">
                </div>
                <div class="form-group">
					<label>Letter To Inquiry Officer<em>*</em></label>
                 	<input type="text" class="form-control pd" name="letoinqoffdate" placeholder="Enter Date">
                </div>
                <div class="form-group">
					<label>Inquiry Date<em>*</em></label>
                 	<input type="text" class="form-control pd" name="inqdate" placeholder="Enter Date">
                </div>
                <div class="form-group">
					<label>Letter To Date<em>*</em></label>
                 	<input type="text" class="form-control pd" name="letoacudate" placeholder="Enter Date">
                </div>
                <div class="form-group">
					<label>Inquiry Report Date<em>*</em></label>
                 	<input type="text" class="form-control pd" name="inqredate" placeholder="Enter Date">
                </div>
                <div class="form-group">
					<label>Inquiry Comment<em>*</em></label>
					 <textarea class="form-control"  name="inqcom" rows="5" id="abusedforneg"></textarea>
                    <?php echo form_error('inqcom', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
                  <label for="employeefile">Document</label>
                  <input type="file" name="pic_file">
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
