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
                  <th>#Ref ID</th>
                  <th>Date</th>
                  <th>Factory</th>
                  <th>Reportar</th>
                  <th>Accused</th>
                  <th>Victim</th>
                  <th>Incident Details</th>
                  <th>Action Date</th>
                  <th>Action Type</th>
                  <th>Action Type Document</th>
                  <th>Disposal Document</th>
                </tr>
                </thead>
                <tbody>
                <?php 
				 $i=1;
				foreach($utl as $row)
				{ ?>
                <tr>
                  
                  
                 
                  
                  <td style="vertical-align:middle;"><?php echo $row['dcaid'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['dadate'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['factoryid'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['nameofreporterid'].'--'.$row['nameofreporter'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['accusedid'].'--'.$row['accusedname'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['victimid'].'-'.$row['victimname'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['abusedforneg'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['actiondate'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['dcatype'];?></td>
                  
                  
                  <?php 
				 if($row['actiontypedocu']=='')
                 {
					 ?>
                 <td style="vertical-align:middle;">No File</td>
                 <?php
				 }
				 else
				 {
					 ?>
                     <td style="vertical-align:middle;"><a target="_blank" href="<?php echo base_url().'assets/uploads/dcaction/'.$row['actiontypedocu'];?>"><i class="fa fa-file"></i></a></td>
                     <?php
				 }
				 ?>
                 <?php 
				 if($row['disposaldocu']=='')
                 {
					 ?>
                 <td style="vertical-align:middle;">No File</td>
                 <?php
				 }
				 else
				 {
					 ?>
                     <td style="vertical-align:middle;"><a target="_blank" href="<?php echo base_url().'assets/uploads/dcaction/'.$row['disposaldocu'];?>"><i class="fa fa-file"></i></a></td>
                     <?php
				 }
				 ?>
                </tbody>
               <?php } ?>
              </table>
            </div>
            
        

