<style>
.error{color:red;}
em{color:red;}
</style>
<?php
	$challantype = '';
 	$itemunit = '';
	$producttype = '';
 	foreach($cl as $row)
 		{
  			$challantype .= '<option value="'.$row["challantypeid"].'">'.$row["challantype"].'</option>';
 		}
 
	foreach($pul as $row)
		{
			$itemunit .= '<option value="'.$row["productunitid"].'">'.$row["productunitname"].'</option>';
        }
		
	foreach($ptl as $row)
		{
			$producttype .= '<option value="'.$row["producttypeid"].'">'.$row["producttype"].'</option>';
        }
					
?>



<script type="text/javascript">
$(function () {
    jQuery(".pd").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery(".wd").datepicker({dateFormat: 'yy-mm-dd'});
	})
</script>
<script type="text/javascript">

$(document).ready(function(){

    var counter = 2;
		
    $("#addau").click(function () {
				
	if(counter>100){
            alert("Only 100 rollboxes allow");
            return false;
	}   
		
	var newTextBoxDiv = $(document.createElement('div'))
	     .attr("id", 'AuDiv' + counter);

	newTextBoxDiv.after().html(
	      '<div class="row"><table class="table table-bordered table-striped text-center"><tr><td><input type="text" class="form-control" name="item_name[]' + counter + 
	      '" id="item_name' + counter + '" placeholder="' + 'Enter Item Name' +'" ></td>' +
		  '<td><select class="form-control challantypeid" name="challantypeid[]' + counter + 
	      '" id="challantypeid' + counter + '"><option value="">Select Challan Type</option><?php echo $challantype; ?></select></td>'+
		  '<td><input type="text" class="form-control" name="sqty[]' + counter + 
	      '" id="sqty' + counter + '" placeholder="' + 'Enter Item Qty' +'" ></td>' +
		  '<td><select class="form-control item_unit" name="item_unit[]' + counter + 
	      '" id="item_unit' + counter + '"><option value="">Select Unit</option><?php echo $itemunit; ?></select></td>'+
		  '<td><select class="form-control producttypeid" name="producttypeid[]' + counter + 
	      '" id="producttypeid' + counter + '"><option value="">Select Product Type</option><?php echo $producttype; ?></select></td>'+
		  '<td><input type="text" class="form-control" name="chmid2[]' + counter + 
	      '" id="chmid2' + counter + '" placeholder="' + 'Enter Return ID' +'" ></td>'+
		  '<td><textarea class="form-control" rows="1" name="description[]' + counter + 
	      '" id="description' + counter + '" placeholder="' + 'Description' +'" ></textarea></td>'+
		  '<td><textarea class="form-control" rows="1" name="remarks[]' + counter + 
	      '" id="remarks' + counter + '" placeholder="' + 'Remarks' +'" ></textarea></td>'+
		  '</tr></table></div>');
            
	newTextBoxDiv.appendTo("#AuGroup");

				
	counter++;
	//console.log("#pd"+counter--);
	//jQuery("#pd"+counter--).datepicker({dateFormat: 'yy-mm-dd'});	
     });

     $("#removeau").click(function () {
	if(counter==1){
          alert("No more textbox to remove");
          return false;
       }   
        
	counter--;
			
        $("#AuDiv" + counter).remove();
			
     });
		
     
  });
</script>	 	 
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      

      

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
                  <h3 class="box-title">Challan Create</h3>
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
                <div class="box-body ">
				 <form role="form" id="insert_form" autocomplete="off" method="post" action="<?php echo base_url();?>Dashboard/challanm_create" enctype="multipart/form-data">
                <input type="hidden" class="form-control" name="userid" value="<?php echo $this->session->userdata('userid');?>">
                <div class="form-group">
					<label>Sent Factory Name<em>*</em></label>
                    <input type="text" class="form-control" readonly name="sfactoryid" value="<?php echo $this->session->userdata('factoryid');?>">
					
                    
				</div>
                <div class="form-group">
					<label>Challan Number<em>*</em></label>
					<input type="text" class="form-control" name="manualid" placeholder="Enter Challan Number">
                    <?php echo form_error('manualid', '<div class="error">', '</div>');  ?>
				</div>
                
               
                <div class="form-group">
					<label>Buyer Name<em>*</em></label>
					<select class="form-control" name="buyerid" id="buyerid">
                    	<option value="">Select....</option>
                        <?php
						foreach($bl as $row)
						{
					?>
                    		<option value="<?php echo $row['bid'];?>"><?php echo $row['buyername'];?></option>
                    <?php
						}
					?>
                    </select>
                    
				</div>				
                <div class="form-group">
					<label>Destination Factory Name<em>*</em></label>
					<select class="form-control" name="rfactoryid" id="rfactoryid">
                    	<option value="">Select....</option>
                        <?php
						foreach($allf as $row)
						{
					?>
                    		<option value="<?php echo $row['factoryid'];?>"><?php echo $row['factoryname'];?></option>
                    <?php
						}
					?>
                    </select>
                    
				</div>		
               
                <div id="AuGroup">
											<div class="row">
												<table class="table table-bordered table-striped text-center">
													<tr>
														<th><input type='button' value='Add Button' id='addau' class='btn btn-success'></th>
														<th>&nbsp;</th>
                                                        <th>&nbsp;</th>
                                                        <th>&nbsp;</th>
                                                        <th>&nbsp;</th>
                                                        <th>&nbsp;</th>
                                                        <th>&nbsp;</th>
														<th><input type='button' value='Remove Button' id='removeau' class='btn btn-danger'></th>
													</tr>
													<tr>
                                                    	<td><input type="text" class="form-control" name="item_name[]" id="item_name" placeholder="Enter Item Name"></td>
														<td><select class="form-control" name="challantypeid[]" id="challantypeid">
                    											<option value="">Select Challan Type</option>
                        											<?php
																		foreach($cl as $row)
																			{
																	?>
                    															<option value="<?php echo $row['challantypeid'];?>"><?php echo $row['challantype'];?></option>
                    												<?php
																			}
																	?>
                    											</select>
														</td>
                                                        <td><input type="text" class="form-control" name="sqty[]" id="sqty" placeholder="Enter Item Qty"></td>
														<td><select class="form-control" name="item_unit[]" id="item_unit">
                    											<option value="">Select Unit</option>
                        											<?php
																		foreach($pul as $row)
																			{
																	?>
                    															<option value="<?php echo $row['productunitid'];?>"><?php echo $row['productunitname'];?></option>
                    												<?php
																			}
																	?>
                    											</select>
														</td>
														<td><select class="form-control" name="producttypeid[]" id="producttypeid">
                    											<option value="">Select Product Type</option>
                        											<?php
																		foreach($ptl as $row)
																			{
																	?>
                    															<option value="<?php echo $row['producttypeid'];?>"><?php echo $row['producttype'];?></option>
                    												<?php
																			}
																	?>
                    											</select>
														
														</td>
                                                        <td><input type="text" class="form-control" name="chmid2[]" id="chmid2" placeholder="Enter Return ID"></td>
                                                        <td><textarea class="form-control" rows="1" name="description[]" id="description" placeholder="Description"></textarea>
														</td>
                                                        <td><textarea class="form-control" rows="1" name="remarks[]" id="remarks" placeholder="Remarks"></textarea>
														</td>
													</tr>
												</table>
											</div>
											
										</div>
                
                
                
               
               
				
				
				
               
   
   
  
				
				
				

				 
				
				
                
  
               
               
    
                

             
                  <!-- /.users-list -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <input type="submit" class="btn btn-primary" name="submit" value="Submit" />
                </div>
				 </form>
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


