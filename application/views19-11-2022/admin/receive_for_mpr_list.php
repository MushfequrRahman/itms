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
td{font-weight: 600; font-variant:small-caps;}
</style>
<script type="text/javascript">
  $(function() {
    jQuery(".pd").datepicker({
      dateFormat: 'dd-mm-yy'
    });
  })
</script>

            
                <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
            <form role="form" id="insert_form" autocomplete="off" method="post" action="<?php echo base_url();?>Dashboard/receive_create" enctype="multipart/form-data">
             	<table id="tableData" class="table table-hover table-bordered">
              <thead style="background:#91b9e6;">
              <tr>
              <input type="hidden" class="form-control" name="userid" id="userid" value="<?php echo $this->session->userdata('userid'); ?>">
              <?php /*?><td colspan="2" style="vertical-align:middle;"><input type="text" class="form-control" name="po" placeholder="PO No"></td>
              <td colspan="2" style="vertical-align:middle;"><input type="text" class="form-control" name="supplier" placeholder="Supplier"></td>
              <td colspan="2" style="vertical-align:middle;"><input type="text" class="form-control pd" readonly name="podate" value="<?php echo date('d-m-Y'); ?>"></td><?php */?>
              </tr>
                <tr>
                  <th>SL</th>
                  <!--<th>Select</th>-->
                  <th>MPR NO</th>
                  <th>Unit</th>
                  <!--<th>MPR Prepared By</th>-->
                  <th>Item</th>
                  <th>Model</th>
                  <th>Type</th>
                  <th style="display:none;">Item Code</th>
                  <th style="display:none;">PO Code</th>
                  <th>Qty</th>
                  <th>Description</th>
        		  <th>MPR Price</th>
                  <th>Remarks</th>
                  <th>User</th>
                  <th>Date</th>
                  <th>PO Remaining</th>
                  <!--<th>PO Unit Price</th>-->
                  <th>PO NO</th>
                  <th>GRN NO</th>
                  <th>Receive Qty</th>
                  <!--<th>PO Qty Price</th>-->
                  
                  <!--<th>Supplier</th>-->
                  <th>Date</th>
                  <th>Remarks</th>
                  <!--<th>Status</th>-->
                </tr>
                </thead>
                <tbody>
                
                <?php 
				$i=1;
				foreach($ul as $row)
				{ ?>
                <tr>
                  
                  <td style="vertical-align:middle;"><?php echo $i++;?></td>
                  <?php /*?><td style="vertical-align:middle;"><input type="checkbox" class="checkbox" name="simprid[]" value="<?php echo $row['simprid']; ?>"></td><?php */?>
                  <td style="vertical-align:middle;"><input type="text" readonly class="form-control" name="mprid" value="<?php echo $row['mprid'];?>"></td>
                  <td style="vertical-align:middle;"><?php echo $row['fid'];?></td>
                  <?php /*?><td style="vertical-align:middle;"><?php echo $row['name'].'--'.$row['departmentname'].'--'.$row['designation'];?></td><?php */?>
                  <td style="vertical-align:middle;"><?php echo $row['pcname'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['model'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['pcapop'];?></td>
                  <td style="vertical-align:middle;display:none;"><input type="text" readonly="readonly" class="form-control" name="item[]" value="<?php echo $row['simprid'];?>" /></td>
                  <td style="vertical-align:middle;display:none;"><input type="text" readonly="readonly" class="form-control" name="sipoid[]" value="<?php echo $row['sipoid'];?>" /></td>
                  <td style="vertical-align:middle;"><?php echo $row['qty']." ".$row['puom'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['description'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['price'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['remarks'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['uname'];?></td>
                  
                  <?php $mdate=date("d-m-Y", strtotime($row['mdate']));?>
                  <td style="vertical-align:middle;"><?php echo $mdate;?></td>
                  <td style="vertical-align:middle;"><?php echo $row['qty']-$row['pqty']." ".$row['puom'];?></td>
                  <?php /*?><td style="vertical-align:middle;"><?php echo $row['pprice'];?></td><?php */?>
                  <?php
				  if($row['pqty'] < $row['qty'])
				  {
					  ?>
                  <td style="vertical-align:middle;"><input type="text" class="form-control" name="po[]" placeholder="PO NO"></td>
                  <td style="vertical-align:middle;"><input type="text" class="form-control" name="grn[]" placeholder="GRN PO"></td>
                  <td style="vertical-align:middle;"><input type="text" class="form-control" name="rqty[]" placeholder="Qty"></td>
                  <!--<td style="vertical-align:middle;"><input type="text" class="form-control" name="pprice[]" placeholder="Price"></td>-->
                  
                  <!--<td style="vertical-align:middle;"><input type="text" class="form-control" name="supplier[]" placeholder=" supplier"></td>-->
                  <td style="vertical-align:middle;"><input type="text" class="form-control pd" readonly name="rdate[]" value="<?php echo date('d-m-Y'); ?>"></td>
                  <td><textarea class="form-control" rows="1" name="rremarks[]" id="rremarks"></textarea></td>
                  <?php /*?><td><select class="form-control" name="pstatus[]" id="pstatus">
                        <option value="1">Done</option>
                        <option value="2">Remaining</option>
                        <option value="3">Pending</option>
                    </select>
                    </td><?php */?>
                    <?php
				  }
				  else
				  {
				  ?>
                  <td style="vertical-align:middle;"><input type="text" class="form-control" readonly name="po[]" placeholder="PO NO"></td>
                  <td style="vertical-align:middle;"><input type="text" class="form-control" readonly name="grn[]" placeholder="GRN PO"></td>
                  <td style="vertical-align:middle;"><input type="text" class="form-control" readonly name="rqty[]" placeholder="Qty"></td>
                  <!--<td style="vertical-align:middle;"><input type="text" class="form-control" name="pprice[]" placeholder="Price"></td>-->
                  
                  <!--<td style="vertical-align:middle;"><input type="text" class="form-control" name="supplier[]" placeholder=" supplier"></td>-->
                  <td style="vertical-align:middle;"><input type="text" class="form-control pd" readonly name="rdate[]" value="<?php echo date('d-m-Y'); ?>"></td>
                  <td><textarea class="form-control" readonly rows="1" name="rremarks[]" id="rremarks"></textarea></td>
                  <?php /*?><td><select class="form-control" name="pstatus[]" id="pstatus">
                        <option value="1">Done</option>
                        <option value="2">Remaining</option>
                        <option value="3">Pending</option>
                    </select>
                    </td><?php */?>
                    <?php
				  }
				  ?>
                    
                </tr>
                </tbody>
               <?php } ?>
              
              </table>
              <div class="sbtn" style="text-align:center;">
               <input type="submit" class="btn btn-primary" name="submit" id="btn" value="Submit" />
               </div>
               </form>
            </div>
            
         
