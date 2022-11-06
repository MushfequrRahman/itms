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
                  <th>Group Name</th>
                  <th>User ID</th>
                  <th>User Name</th>
                  <th>Idea</th>
                  <th>File</th>
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
                  <td style="vertical-align:middle;"><?php echo $row['ideagroup'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['userid'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['ename'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['idea'];?></td>
                  <?php 
				 if($row['ifile']=='')
                 {
					 ?>
                 <td style="vertical-align:middle;">No File</td>
                 <?php
				 }
				 else
				 {
					 ?>
                     <td style="vertical-align:middle;"><a target="_blank" href="<?php echo base_url().'assets/uploads/idea/'.$row['ifile'];?>"><i class="fa fa-file"></i></a></td>
                     <?php
				 }
				 ?>
                  <?php $idate=date("d-m-Y", strtotime($row['idate']));?>
                  <td style="vertical-align:middle;"><?php echo $idate;?></td>
                  
                </tr>
                </tbody>
               <?php } ?>
              </table>
            </div>
            
         
