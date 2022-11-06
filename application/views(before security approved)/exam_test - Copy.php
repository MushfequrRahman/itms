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
	<body>
    	<div class="container">
        	<div class="row">
            	<div class="col-xs-12 col-sm-12 col-md-12">
                	<div class="row">
                    	<div class="col-xs-12 col-sm-12 col-md-12">
             				<?php 
								//$i=1;
								foreach($eln as $row)
									{ 
							?>
                						<?php //echo $i++;?>
                 						<?php echo $row['examname'];?>
                  						<?php break;?>
                			<?php 		
									} 
							?>
                        </div>
                   </div>
                   
                    	
             				<?php 
								//$i=1;
								foreach($el as $row)
									{
										 
							?>
                            <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                        <ul style="list-style-type:none;">
                						<?php //echo $i++;?>
                                        <?php
										if($row['type']==1 && $row['amid']==0)
										{
										?>
                 						<li><?php echo  $row['qno']."  ".$row['ques'];?></li>
                                        <?php
										}
										?>
                                        <?php
										if($row['type']==2 && $row['amid']!=0)
										{
										?>
                                        <li><?php echo $row['ques']."    ".$row['exqusid'];?></li>
                                        <?php /*?><li><?php echo $row['amid'];?></li><?php */?>
                                        <?php
										}
										?>
                                   
                                    </ul>   
                                      </div> 
                                      </div>  
                  						
                			<?php 		
									}
									 
							?>
                            
                            <?php 
								//$i=1;
								//$examques=array();
//								$examques1=array();
//								$ans=array();
//								foreach($el as $row)
//									{ 
//									//$r=$row['examques'];
//									array_push($examques,$row['examques']);
//									array_push($ans,$row['ans']);
//							
//									} 
//									$r=array_unique($examques);
//									//print_r ($r);
//									for($j=0;$j<2;$j++)
//									{
//									for($i=0;$i<=10;$i++)
//									{
//										if($r[$j]==$examques[$i])
//										{
//											echo $r[$j];
//										}
//										//echo $r[$i];
//										echo $ans1=$ans[$i];
//									}
//									}
									//echo $r[0];
							?>
                            
                       
                   
                   <?php /*?><div class="row">
                    	<div class="col-xs-12 col-sm-12 col-md-12">
             				<?php 
								//$i=1;
								foreach($el as $row)
									{ 
							?>
                						<?php //echo $i++;?>
                 						
                                        <?php echo $row['ans'];?>
                                        <?php echo $row['marks'];?>
                  						
                			<?php 		
									} 
							?>
                        </div>
                   </div><?php */?>
                </div>
           </div>
       </div>
	</body> 
</html>           
         
