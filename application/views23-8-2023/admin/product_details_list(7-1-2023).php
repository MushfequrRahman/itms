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
div.scrollable-table-wrapper {
  height: 500px;
  overflow: auto;
}
.header{position: sticky;top:0;}
.text-right-input{text-align:right;  width:100%; padding:0 10px 0 0;}
</style>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
    	<div class="content-wrapper">
    		<section class="content">
      			<div class="row">
       				<div class="col-md-12">
      					<div class="row">
           					<div class="col-md-12">
              					<div class="box box-danger">
                					<div class="box-header with-border">
                  						<h3 class="box-title">Product Details List</h3>
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
                                    <div class="text-right-input">
                                		<div class="row">
                                			<div class="col-md-3 col-md-offset-9">
                                				<input type='text' class="form-control" id='txt_searchall' placeholder='Enter Search Text'> 
                                			</div>
                                		</div> 
                                	</div>
                                	<br/>
                					<div class="box-body table-responsive no-padding">
                                    <div class="scrollable-table-wrapper">
             							<table id="tableData" class="table table-hover table-bordered">
              								<thead style="background:#91b9e6;position: sticky;top: 0;">
                								<tr>
                  									<th>SL</th>
                  									<th>Code/Assign</th>
                                                    <th>MPR</th>
                  									<th>Name</th>
                  									<th>Brand</th>
                                                    <th>Hard Drive</th>
                                                    <th>Monitor</th>
                                                    <th>UPS</th>
                                                    <th>IP Address</th>
                                                    <th>Mother Board</th>
                                                    <th>Serial Number</th>
                                                    <th>Processor</th>
                                                    <th>RAM</th>
                                                    <th>OS</th>
                                                    <th>MS Office</th>
                                                    <th>Antivirus</th>
                                                    <th>Internet</th>
                  									<th>Description</th>
                  									<th>Price</th>
                  									<th>Qty</th>
                  									<th>Vendor</th>
                  									<th>Purchase Date</th>
                  									<th>Warranty</th>
                  									<th>End Date</th>
                  									<th>Remaining Day</th>
                                                    <th>Status/Return</th>
                                                    <th>User</th>
                                                    <th>Image</th>
                                                    <th>Given Date</th>
                  									<th>Edit</th>
                                                    <th>Transfer</th>
                								</tr>
                							</thead>
                							<tbody>
                								<?php 
													$i=1;
													foreach($ul as $row)
														{ 
												?>
                											<tr>
                  												<td style="vertical-align:middle;"><?php echo $i++;?></td>
                                                                <?php
																	if($row['pastatus']==1)
																		{
																?>
                  															<td style="vertical-align:middle;"><?php echo $row['pcode'];?></td>
                                                                <?php
																		}
																	else
																		{
																?>
                                                                			<td style="vertical-align:middle;"><a href="<?php echo base_url();?>Dashboard/product_assign_form/<?php echo $bn=$row['pcode'];?>"><?php echo $row['pcode'];?></a></td>
                                                                <?php
																		}
																?>
                                                                <td style="vertical-align:middle;"><?php echo $row['mpr'];?></td>
                  												<td style="vertical-align:middle;"><?php echo $row['pcname'];?></td>
                  												<td style="vertical-align:middle;"><?php echo $row['brand'];?></td>
                                                                <td style="vertical-align:middle;"><?php echo $row['hdd'];?></td>
                                                                <td style="vertical-align:middle;"><?php echo $row['monitor'];?></td>
                                                                <td style="vertical-align:middle;"><?php echo $row['ups'];?></td>
                                                                <td style="vertical-align:middle;"><?php echo $row['ip'];?></td>
                                                                <td style="vertical-align:middle;"><?php echo $row['mb'];?></td>
                                                                <td style="vertical-align:middle;"><?php echo $row['sn'];?></td>
                                                                <td style="vertical-align:middle;"><?php echo $row['processor'];?></td>
                                                                <td style="vertical-align:middle;"><?php echo $row['ram'];?></td>
                                                                <td style="vertical-align:middle;"><?php echo $row['os'];?></td>
                                                                <td style="vertical-align:middle;"><?php echo $row['ms'];?></td>
                                                                <?php
																	if($row['avid']==1)
																		{
																?>
                                                                			<td style="vertical-align:middle;">Yes</td>
                                                                <?php
																		}
																	else
																		{
																?>
                                                                        	<td style="vertical-align:middle;">No</td>
                                                                <?php
																		}
																
																	if($row['iid']==1)
																		{
																?>
                                                                			<td style="vertical-align:middle;">Yes</td>
                                                                <?php
																		}
																	else
																		{
																?>
                                                                        	<td style="vertical-align:middle;">No</td>
                                                                <?php
																		}
																?>
                  												<td style="vertical-align:middle;"><?php echo $row['description'];?></td>
                  												<td style="vertical-align:middle;"><?php echo $row['price'];?></td>
                  												<td style="vertical-align:middle;"><?php echo $row['pqty']." ".$row['puom'];?></td>
                  												<td style="vertical-align:middle;"><?php echo $row['vendor'];?></td>
                  												<td style="vertical-align:middle;"><?php echo date("d-m-Y", strtotime($row['pdate']));?></td>
                  								<?php
                  												$convert = $row['warranty']; // days you want to convert
																$years = ($convert / 365) ; // days / 365 days
																$years = floor($years); // Remove all decimals
																$month = ($convert % 365) / 30.5; // I choose 30.5 for Month (30,31) ;)
																$month = floor($month); // Remove all decimals
																$days = ($convert % 365) % 30.5; // the rest of days
																// Echo all information set
																//echo 'DAYS RECEIVE : '.$convert.' days<br>';
																//echo $years.' years - '.$month.' month - '.$days.' days';
												?>
                  												<td style="vertical-align:middle;"><?php echo $years.' years - '.$month.' month - '.$days.' days';?></td>
                  												<?php $enddate=date("d-m-Y", strtotime("+".$row['warranty']." days", strtotime($row['pdate'])));?>
                  												<td style="vertical-align:middle;"><?php echo $enddate;?></td>
                 	 											<?php
                  												$now = time(); // or your date as well
																$enddate = strtotime($enddate);
																$datediff = $enddate-$now;
																$remain=round($datediff / (60 * 60 * 24));
																?>
                    											<td style="vertical-align:middle;"><?php echo $remain;?></td>
                                                                <?php
																	if($row['pastatus']==1)
																		{
																?>
                                                                <td style="vertical-align:middle;"><a href="<?php echo base_url();?>Dashboard/product_return_form/<?php echo $bn=$row['pcode'];?>">Using</a></td>
                                                                <?php
																		}
																else
																		{
																		?>
                                                                  <td style="vertical-align:middle;">Free</td>
                                                                  <?php
																		}
																  ?>
                                                                <?php
																	if($row['pastatus']==1)
																		{
																?>
                                                                <td style="vertical-align:middle; text-align:left;"><?php echo "<strong>ID:</strong>".$row['userid'];?><br/><?php echo "<strong>Name:</strong>".$row['name'];?></td>
                                                                <?php
																		}
																else
																		{
																		?>
                                                                  <td style="vertical-align:middle;">&nbsp;</td>
                                                                  <?php
																		}
																   ?>
                                                                   
                                                                   <?php
																	if($row['pastatus']==1)
																		{
																?>
                                                                <td style="vertical-align:middle;"><img class="profile-user-img img-responsive img-thumbnail" src="<?php echo base_url().'assets/uploads/users/'.$row['image'];?>" alt="User profile picture"></td>
                                                                <?php
																		}
																else
																		{
																		?>
                                                                  <td style="vertical-align:middle;">&nbsp;</td>
                                                                  <?php
																		}
																   ?>
                                                                   
                                                                    <?php
																	if($row['pastatus']==1)
																		{
																?>
                                                                <td style="vertical-align:middle;"><?php echo date("d-m-Y", strtotime($row['adate']));?></td>
                                                                <?php
																		}
																else
																		{
																		?>
                                                                  <td style="vertical-align:middle;">&nbsp;</td>
                                                                  <?php
																		}
																   ?>
                                                                   
                  												<td style="vertical-align:middle;"><a href="<?php echo base_url();?>Dashboard/product_details_list_up/<?php echo $bn=$row['pdiid'];?>"><i class="fa fa-edit" style="font-size:24px"></i></a></td>
                                                                <td style="vertical-align:middle;"><a href="<?php echo base_url();?>Dashboard/product_transfer_form/<?php echo $bn=$row['pdiid'];?>"><i class="fa fa-exchange" aria-hidden="true"></i></a></td>
															</tr>
											</tbody>
												<?php 
													} 
												?>
										</table>
                                    </div>
									</div>
								</div>
								<!--<script type="text/javascript">
									$(document).ready(function() {
									$('#tableData').paging({limit:50});
									});
								</script>-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
    </div>
    <script type='text/javascript'>

    $(document).ready(function(){


        // Search all columns

        $('#txt_searchall').keyup(function(){

            var search = $(this).val();


            $('table tbody tr').hide();


            var len = $('table tbody tr:not(.notfound) td:contains("'+search+'")').length;


            if(len > 0){

              $('table tbody tr:not(.notfound) td:contains("'+search+'")').each(function(){

                  $(this).closest('tr').show();

              });

            }else{

              $('.notfound').show();

            }

            

        });

    });

    // Case-insensitive searching (Note - remove the below script for Case sensitive search )

    $.expr[":"].contains = $.expr.createPseudo(function(arg) {

        return function( elem ) {

            return $(elem).text().toUpperCase().indexOf(arg.toUpperCase()) >= 0;

        };

    });

</script>
</body>
</html>
