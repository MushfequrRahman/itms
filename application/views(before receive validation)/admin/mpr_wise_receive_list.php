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
            
             	<table id="tableData" class="table table-hover table-bordered">
              <thead style="background:#91b9e6;">
              <tr>
              
              <?php /*?><td colspan="2" style="vertical-align:middle;"><input type="text" class="form-control" name="po" placeholder="PO No"></td>
              <td colspan="2" style="vertical-align:middle;"><input type="text" class="form-control" name="supplier" placeholder="Supplier"></td>
              <td colspan="2" style="vertical-align:middle;"><input type="text" class="form-control pd" readonly name="podate" value="<?php echo date('d-m-Y'); ?>"></td><?php */?>
              </tr>
                <tr>
                  <th>SL</th>
                  <!--<th>Select</th>-->
                  <th>MPR NO</th>
                  <th>Unit</th>
                  <th>Name</th>
                  <!--<th>MPR Prepared By</th>-->
                  <th>Item</th>
                  <th>Model</th>
                  <th>Type</th>
                  <!--<th>Item Code</th>-->
                  <th>MPR Qty</th>
                  <th>Description</th>
                  <th>Remarks</th>
                  <th>Date</th>
                  <!--<th>Description</th>-->
        		  <!--<th>MPR Price</th>-->
                  <!--<th>Remarks</th>-->
                  <!--<th>User</th>
                  <th>Date</th>-->
                  <!--<th>PO</th>
                  <th>PO Qty</th>
                  <th>Price</th>
                  <th>Remarks</th>
                  <th>Date</th>-->
                  <!--<th>PO NO</th>-->
                  <th>GRN</th>
                  <th>Receive Qty</th>
                  <th>Date</th>
                  <!--<th>PO Qty</th>
                  <th>PO Qty Price</th>
                  
                  <th>Supplier</th>
                  <th>Date</th>
                  <th>Remarks</th>-->
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
                  <td style="vertical-align:middle;"><?php echo $row['mprid'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['fid'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['uname'];?></td>
                  <?php /*?><td style="vertical-align:middle;"><?php echo $row['name'].'--'.$row['departmentname'].'--'.$row['designation'];?></td><?php */?>
                  <td style="vertical-align:middle;"><?php echo $row['pcname'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['model'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['pcapop'];?></td>
                  
                  <td style="vertical-align:middle;"><?php echo $row['qty']." ".$row['puom'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['description'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['remarks'];?></td>
                  <td style="vertical-align:middle;"><?php echo date("d-m-Y", strtotime($row['mdate']));?></td>
                  <?php /*?><td style="vertical-align:middle;"><?php echo $row['description'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['price'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['remarks'];?></td><?php */?>
                  <?php /*?><td style="vertical-align:middle;"><?php echo $row['po'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['pqty']." ".$row['puom'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['pprice'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['premarks'];?></td>
                  <td style="vertical-align:middle;"><?php echo date("d-m-Y", strtotime($row['pdate']));?></td><?php */?>
                  <?php /*?><td style="vertical-align:middle;"><?php echo $row['po'];?></td><?php */?>
                  <?php /*?><td style="vertical-align:middle;"><?php echo $row['uname'];?></td><?php */?>
                  
                  <?php /*?><?php $mdate=date("d-m-Y", strtotime($row['mdate']));?>
                  <td style="vertical-align:middle;"><?php echo $mdate;?></td><?php */?>
                  <td style="vertical-align:middle;"><?php echo $row['grn'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['rqty']." ".$row['puom'];?></td>
                  <td style="vertical-align:middle;"><?php echo date("d-m-Y", strtotime($row['rdate']));?></td>
                  
                </tr>
                </tbody>
               <?php } ?>
              
              </table>
              
            </div>
            
         
