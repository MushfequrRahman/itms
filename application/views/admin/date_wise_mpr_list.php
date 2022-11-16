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

            
                <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
            <form action="<?php echo base_url() ?>Dashboard/date_wise_mpr_list_xls" class="excel-upl" id="excel-upl" enctype="multipart/form-data" method="post" accept-charset="utf-8">
    <div class="row padall">
      <div class="col-lg-12">
        <div class="float-right">
          <?php
          foreach ($ul as $row1) { ?>
            <?php /*?><input type="hidden" name="factoryid" value="<?php echo $row1['factoryid']; ?>" /><?php */?>
            <input type="hidden" name="pd" value="<?php echo $pd; ?>" />
            <input type="hidden" name="wd" value="<?php echo $wd; ?>" />
          <?php
          }
          ?>
          <input type="radio" checked="checked" name="export_type" value="xlsx"> .xlsx
          <input type="radio" name="export_type" value="xls"> .xls
          <input type="radio" name="export_type" value="csv"> .csv
          <button type="submit" name="import" class="btn btn-primary btn-xs">Export</button>
        </div>
      </div>
    </div>
  </form>
             	<table id="tableData" class="table table-hover table-bordered">
              <thead style="background:#91b9e6;">
                <tr>
                  <th>SL</th>
                  <th>MPR NO</th>
                  <th>Unit</th>
                  <th>MPR Prepared By</th>
                  <th>Item</th>
                  <th>Model</th>
                  <th>Type</th>
                  <!--<th style="display:none;">Item Code</th>-->
                  <th>Qty</th>
                  <th>Description</th>
        		  <th>Unit Price</th>
                  <th>Total Price</th>
                  <th>Remarks</th>
                  <th>User</th>
                  <th>Date</th>
                </tr>
                </thead>
                <tbody>
                <?php 
				$i=1;
				foreach($ul as $row)
				{ ?>
                <tr>
                  
                  <td style="vertical-align:middle;"><?php echo $i++;?></td>
                  <td style="vertical-align:middle;"><?php echo $row['mprid'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['fid'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['name'].'--'.$row['departmentname'].'--'.$row['designation'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['pcname'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['model'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['pcapop'];?></td>
                  <?php /*?><td style="vertical-align:middle; display:none;"><?php echo $row['simprid'];?></td><?php */?>
                  <td style="vertical-align:middle;"><?php echo $row['qty']." ".$row['puom'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['description'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['price'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['qty']*$row['price'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['remarks'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['uname'];?></td>
                  <?php $mdate=date("d-m-Y", strtotime($row['mdate']));?>
                  <td style="vertical-align:middle;"><?php echo $mdate;?></td>
                  
                  
                </tr>
                </tbody>
               <?php } ?>
              </table>
            </div>
            
         
