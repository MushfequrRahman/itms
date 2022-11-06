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

            
                <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
             	<table id="tableData" class="table table-hover table-bordered">
              <thead style="background:#91b9e6;">
                <tr>
                  <th>SL</th>
                  <th>Date</th>
                  <th>Factory</th>
                  <th>Name</th>
                  <th>Scope</th>
                  <th>Type</th>
        		  <th>Party</th>
                  <th>Buyer</th>
                  <th>Invoice date</th>
                  <th>Invoice Amount</th>
                  <th>Currency</th>
                  <th>Payment Date</th>
                  <th>Payment Amount</th>
                  <!--<th>Currency</th>-->
                  <th>Audit Company</th>
                  <th>Tenure Start Date</th>
                  <th>Tenure End Date</th>
                  <th>Co-Ordinated By</th>
                  <th>Remarks</th>
                  <th>Invoice File</th>
                  <th>Payment File</th>
                </tr>
                </thead>
                <tbody>
                <?php 
				$i=1;
				foreach($ul as $row)
				{ ?>
                <tr>
                  
                  <td style="vertical-align:middle;"><?php echo $i++;?></td>
                  <td style="vertical-align:middle;"><?php echo date("d-m-Y", strtotime($row['adate']));?></td>
                  <td style="vertical-align:middle;"><?php echo $row['factoryname'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['auditname'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['auditscopename'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['audittypename'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['apname'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['buyername'];?></td>
                  <?php
				  	if($row['idate']!=0)
					{
				  ?>
                  <td style="vertical-align:middle;"><?php echo date("d-m-Y", strtotime($row['idate']));?></td>
                  <?php
					}
					else
					{
						?>
                     <td style="vertical-align:middle;">&nbsp;</td>
                     <?php
					}
					?>
                  <td style="vertical-align:middle;"><?php echo $row['iamount'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['currency'];?></td>
                  <?php
				  	if($row['pdate']!=0)
					{
				  ?>
                  <td style="vertical-align:middle;"><?php echo date("d-m-Y", strtotime($row['pdate']));?></td>
                  <?php
					}
					else
					{
						?>
                     <td style="vertical-align:middle;">&nbsp;</td>
                     <?php
					}
					?>
                  <td style="vertical-align:middle;"><?php echo $row['pamount'];?></td>
                  <?php /*?><td style="vertical-align:middle;"><?php echo $row['curreny'];?></td><?php */?>
                  <td style="vertical-align:middle;"><?php echo $row['auditcomp'];?></td>
                  <?php
				  	if($row['tsdate']!=0)
					{
				  ?>
                  <td style="vertical-align:middle;"><?php echo date("d-m-Y", strtotime($row['tsdate']));?></td>
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
				  	if($row['tedate']!=0)
					{
				  ?>
                  <td style="vertical-align:middle;"><?php echo date("d-m-Y", strtotime($row['tedate']));?></td>
                  <?php
					}
					else
					{
						?>
                     <td style="vertical-align:middle;">&nbsp;</td>
                     <?php
					}
					?>
                  <td style="vertical-align:middle;"><?php echo $row['ename'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['remarks'];?></td>
                  <?php 
				 	if($row['invoice_file']=='')
                 	{
					 ?>
                 		<td style="vertical-align:middle;">No File</td>
                 <?php
				 	}
				 	else
				 	{
					 ?>
                     	<td style="vertical-align:middle;"><a target="_blank" href="<?php echo base_url().'assets/uploads/compliance_expense_invoice/'.$row['invoice_file'];?>"><i class="fa fa-file"></i></a></td>
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
                     	<td style="vertical-align:middle;"><a target="_blank" href="<?php echo base_url().'assets/uploads/compliance_expense_payment/'.$row['pic_file'];?>"><i class="fa fa-file"></i></a></td>
                     <?php
				 	}
				 ?>
                 
                </tr>
                </tbody>
               <?php } ?>
              </table>
            </div>
            
         
