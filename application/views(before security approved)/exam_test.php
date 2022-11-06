<style type="text/css">
.content-wrapper, .main-footer { margin:0;}
</style>
	<body class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">
			<div class="content-wrapper">
				<section class="content-header">
     				<?php 
						foreach($eln as $row)
							{ 
								echo "<h1 class='text-center'>".$row['examname']."</h1>";
                  				break;
                			
							} 
					?>
       			</section>
    			<section class="content">
                	<div class="col-md-3 col-sm-6 col-xs-12" style="float:none;margin:auto;">
                    <div class="box-body ">
                    <form role="form" autocomplete="off" action="<?php echo base_url();?>Home/examresult_insert" method="post" enctype="multipart/form-data">
                    <div class="form-group">
						<label>User ID<em>*</em></label>
						<input type="text" class="form-control" name="userid" placeholder="User ID">
               		</div>
                	<div class="form-group">
						<label>Mobile No<em>*</em></label>
						<input type="text" class="form-control" name="mobileno" placeholder="Mobile No">
                    </div>	
                		<?php 
							foreach($el as $row)
								{
						?>
                        			
                            		<ul style="list-style-type:none;">
                                        <?php
											if($row['type']==1 && $row['amid']==0)
												{
										?>
                 									<li><?php echo  $row['qno']." . ".$row['ques'];?></li>
                                        <?php
												}
										?>
                                        <?php
											if($row['type']==2 && $row['amid']!=0)
												{
										?>
                                        			<li style="margin:0 0 0 20px;"><input type="checkbox" name="ans[]" value="<?php echo $row['exqusid']?>">&nbsp;&nbsp;<?php echo $row['ques'];?></li>
                                        <?php
										}
										?>
                                   </ul>
                                   
                        <?php 		
								}
									 
						?>
                        <div class="text-center">
                  <input type="submit" class="btn btn-primary" name="submit" value="Submit" />
                </div>
                        </form>
                        </div>   
                  </div>     
        		</section>       
       		</div>
       </div>
      
	</body> 
</html>           
         
