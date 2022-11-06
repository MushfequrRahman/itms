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
                  
                  <th>ID</th>
                  <th>Question</th>
                  
                </tr>
                </thead>
                <tbody>
                <?php 
				$i=1;
				foreach($el as $row)
				{ ?>
                <tr>
                  
                  <td style="vertical-align:middle;"><?php echo $i++;?></td>
                 
                  <?php /*?><td style="vertical-align:middle;"><a target="_blank" href="<?php echo base_url();?>Dashboard/examquesans_insert_form/<?php echo $bn=$row['examquesid'];?>"><?php echo $row['examquesid'];?></a></td><?php */?>
                  <td style="vertical-align:middle;"><?php echo $row['examquesid'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['examques'];?></td>
                  
                  
                </tr>
                </tbody>
               <?php } ?>
              </table>
            </div>
            
         
