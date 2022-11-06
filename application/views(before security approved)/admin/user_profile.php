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
th,td{font-size:14px;text-align:center;}
</style>
<script>
$(document).on({
    "contextmenu": function(e) {
        console.log("ctx menu button:", e.which); 

        // Stop the context menu
        e.preventDefault();
    },
    "mousedown": function(e) { 
        console.log("normal mouse down:", e.which); 
    },
    "mouseup": function(e) { 
        console.log("normal mouse up:", e.which); 
    }
});
$('body').bind('copy paste',function(e) {
    e.preventDefault(); return false; 
});
$(document).on('keydown', function(e) {
        if(e.ctrlKey && (e.key == "p" || e.charCode == 16 || e.charCode == 112 || e.keyCode == 80) ){
            alert("Sorry, you are not authorized to take a Print");
            e.cancelBubble = true;
            e.preventDefault();
            e.stopImmediatePropagation();
        }
    });
	window.onbeforeunload = function (e) {
    // Cancel the event
    e.preventDefault();

    // Chrome requires returnValue to be set
    e.returnValue = '';
};

//Prevent Ctrl+S (and Ctrl+W for old browsers and Edge)
document.onkeydown = function (e) {
    e = e || window.event;//Get event

    if (!e.ctrlKey) return;

    var code = e.which || e.keyCode;//Get key code

    switch (code) {
        case 83://Block Ctrl+S
        case 87://Block Ctrl+W -- Not work in Chrome and new Firefox
            e.preventDefault();
            e.stopPropagation();
            break;
    }
};
</script>

<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">

 
  <!-- Left side column. contains the logo and sidebar -->
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

    <!-- Main content -->
    <section class="content">
      
        
		

      

      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="col-md-12">
      
          <div class="row">
           
            <!-- /.col -->

            <div class="col-md-12">
              <!-- USERS LIST -->
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">User Profile</h3>
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12">
							<?php /*?><?php if($responce = $this->session->flashdata('Successfully')): ?>
								<div class="text-center">
									<div class="alert alert-success text-center"><?php echo $responce;?></div>
								</div>
							<?php endif;?><?php */?>
						</div>
					</div>
              
                </div>
                <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
            	<div class="row">
					<div class="col-sm-12 col-md-6 col-lg-6">
             			<table id="tableData" class="table table-hover table-bordered">
              				<thead style="background:#91b9e6;">
                				<tr>
                  					<th>CV</th>
                  					<!--<th>ID</th>
                  					<th>Name</th>-->
                               </tr>
                			</thead>
                			<tbody>
               				<?php 
								foreach($up as $row)
									{ 
							?>
                				<tr>
                  			<?php
				  						if($row['cv']!=='')
				  							{
				  			?>
                  								<td style="vertical-align:middle;"><img class="img-responsive" src="<?php echo base_url().'assets/uploads/users_cv/'.$row['cv'];?>" alt="User CV"></td>
                  			<?php
				  							}
				  						else
				  							{
				 			?>
                  								<td style="vertical-align:middle;">No File</td>
                  			<?php
				  					}
				  			?>
                 								<?php /*?><td style="vertical-align:middle;"><?php echo $row['userid'];?></td>
                								<td style="vertical-align:middle;"><?php echo $row['ename'];?></td><?php */?>
                  
                  
                				</tr>
                			</tbody>
               				<?php 
									} 
							?>
              			</table>
                        
            		</div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                    	<div class="col-sm-12 col-md-6 col-lg-6">
                    	<table id="tableData" class="table table-hover table-bordered">
              				<thead style="background:#91b9e6;">
                				<tr>
                  					<th>Personality</th>
                  					<!--<th>Traits</th>-->
                               </tr>
                			</thead>
                			<tbody>
                            	<tr>
                                	<td style="text-decoration:underline;">BT</td>
                                </tr>
                                <tr>
                                <?php
								foreach($up as $row)
								{
									?>
                                	<td style="color:green;"><?php echo $row['besttraits'];?></td>
                                <?php
								}
								?>
                                </tr>
                                <tr>
                                	<td style="text-decoration:underline;">WT</td>
                                </tr>
                                <tr>
                                	<?php
								foreach($up as $row)
								{
									?>
                                	<td style="color:red;"><?php echo $row['worsttraits'];?></td>
                                <?php
								}
								?>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6">
                    	<table id="tableData" class="table table-hover table-bordered">
              				<thead style="background:#91b9e6;">
                				<tr>
                  					
                  					<th>Traits</th>
                               </tr>
                			</thead>
                			<tbody>
                            	<tr>
                                	<?php
										foreach($up as $row)
											{
												$dob = date("d-M", strtotime($row['dob']));
												$dob = strtotime($dob);
												
												$twentymarch = strtotime('21-Mar');
												$twenthapril = strtotime('20-Apr');
												
												$twentyonapril = strtotime('21-Apr');
												$twentyonemay = strtotime('21-May');
												
												$twentytwomay = strtotime('22-May');
												$twentyonejune = strtotime('21-Jun');
												
												$twentytwojune = strtotime('22-Jun');
												$twentytwojuly = strtotime('22-Jul');
												
												$twentythreejuly = strtotime('23-Jul');
												$twentythreeaugust = strtotime('23-Aug');
												
												$twentyfouraugust = strtotime('24-Aug');
												$twentythreeseptember = strtotime('23-Sep');
												
												$twentyfourseptember = strtotime('24-Sep');
												$twentythreeoctober = strtotime('23-Oct');
												
												$twentyfouroctober = strtotime('24-Oct');
												$twentytwonovember = strtotime('22-Nov');
												
												$twentythreenovember = strtotime('23-Nov');
												$twentyonedecember = strtotime('21-Dec');
												
												$twentytwodecember = strtotime('22-Dec');
												$twenteethjanuary = strtotime('20-Jan');
												
												$twentyonejanuary = strtotime('21-Jan');
												$eighteenthfebruary = strtotime('18-Feb');
												
												$nineteenthfebruary= strtotime('19-Feb');
												$tweenthmarch = strtotime('20-Mar');
											
											}
									
												if($dob>=$twentymarch && $dob<=$twenthapril )
													{
									?>
                                						<td>They are generally self-willed and courageous. They may be seen as short-tempered individuals. They are clever and confident. 
<br/>
On some occasions, they act impatiently. Their impulsiveness and quick temper can go against them. If they overcome these weaknesses, they can achieve success in life, owing to their confidence and clarity of thought. 
														</td>
                                    <?php
													}
													
													if($dob>=$twentyonapril && $dob<=$twentyonemay)
													{
									?>
                                						<td>Those belonging to this zodiac sign are romantic. Their love for style and beauty is apparent in their way of living. They are warm at heart and prefer being secure in life. As friends, they are trustworthy and helpful.
<br/>
But they can be possessive about everything they have. This may translate to selfishness and greed. If on guard about these weak areas, a Taurus can make a good company and an excellent friend.
														</td>
                                    <?php
													}
													
													if($dob>=$twentytwomay && $dob<=$twentyonejune)
													{
									?>
                                						<td>People belonging to this sign are versatile and quick-witted. They are spontaneous in communication. They come across as intelligent people. Their love towards life is evident in their way of living!
<br/>
But they tend to worry too much on certain issues and fail in managing stress. They form opinions pretty quickly and sometimes appear to look at life superficially.
														</td>
                                    <?php
													}
													
													if($dob>=$twentytwojune && $dob<=$twentytwojuly)
													{
									?>
                                						<td>Those falling under this zodiac sign are sentimental. They have a loving and caring nature. They are cautious in their actions. They are very protective towards their loved ones. This nature makes them excellent and caring parents. Cancers often have an imaginative and artistic side to their life.
<br/>
Their moods vary. Their overly emotional nature needs to be worked on. On the whole, they are good human beings.
														</td>
                                    <?php
													}
													
													if($dob>=$twentythreejuly && $dob<=$twentythreeaugust)
													{
									?>
                                						<td>Leos are generous and open-minded. They are caring in nature. They possess a dominating nature coupled with the knack of taking everyone along. This combination of traits makes them true leaders. They may be egoistic and bossy. They tend to lose their temper quite easily.
<br/>
They are open-minded and openhanded, and show great love for magnificence and luxury. Leos are the real kings!
														</td>
                                    <?php
													}
													
													if($dob>=$twentyfouraugust && $dob<=$twentythreeseptember)
													{
									?>
                                						<td>They are very analytical. They tend to think overly on any given subject and form conclusions after a long thought process and deep analysis. They have unidirectional talents. They are absolute purists.
<br/>
Their overcritical nature can become a cause of trouble but otherwise they are intelligent and good decision makers.
														</td>
                                    <?php
													}
													
													if($dob>=$twentyfourseptember && $dob<=$twentythreeoctober)
													{
									?>
                                						<td>Their romantic nature is coupled with serenity. They are balanced in nature and know how to keep their cool at all occasions. At times, they find it difficult to express themselves. Though they appear aloof, they are attached to their near ones.
<br/>
They tend to get influenced by the views of others. It makes them indecisive. Apart from these lacunae, they are reasonable and thoughtful.
														</td>
                                    <?php
													}
													
													if($dob>=$twentyfouroctober && $dob<=$twentytwonovember)
													{
									?>
                                						<td>Scorpios are passionate individuals with a magnetic personality. They are forceful about going by their opinions. They have clarity of thought and expression. Due to their possessive nature, they become jealous quite easily. They are clever and courageous.
														</td>
                                    <?php
													}
													
													if($dob>=$twentythreenovember && $dob<=$twentyonedecember)
													{
									?>
                                						<td>They are intelligent and philosophical. They know how to lighten up the atmosphere. They are fun-loving in nature. Sometimes their excessive optimism makes them behave carelessly.
                                                        <br/>
                                                        Their moods and whims can be bothersome but on the whole, they are intelligent people with a good sense of humor.
														</td>
                                    <?php
													}
													
													if($dob>=$twentytwodecember && $dob<=$twenteethjanuary)
													{
									?>
                                						<td>They are prudent and practical. Their ambitious nature does not allow them to give up easily. They are vigilant. They plan very carefully. Perseverance and tolerance are their greatest qualities. They are generally upfront in fighting whatever comes in their way.
                                                        <br/>
                                                        They may come across as sadistic individuals who are orthodox and rigid.
														</td>
                                    <?php
													}
													
													if($dob>=$twentyonejanuary && $dob<=$eighteenthfebruary)
													{
									?>
                                						<td>They are of the intelligent type. A sense of humor, coupled with great intelligence and deep thinking makes them stand out. They make loyal and honest friends. They are independent thinkers with great originality in their thoughts and actions. 
                                                        <br/>
                                                        They may appear indifferent and less emotional. It is difficult to understand them.
														</td>
                                    <?php
													}
													
													if($dob>=$nineteenthfebruary && $dob<=$tweenthmarch)
													{
									?>
                                						<td>They are sensitive and sympathetic. They are kind and helpful. They can go out of their way to help their dear ones. This makes them wonderful friends.
                                                        <br/>
                                                        But the opinions of others can easily influence them due to which they may get carried away. They are not very determined or courageous. They are vague in thinking. But their idealism is their true differentiator.
														</td>
                                    <?php
													}
									?>
                                	
                                </tr>
                                
                                
                                
                            </tbody>
                        </table>
                        </div>
             			<table id="tableData" class="table table-hover table-bordered">
              				<thead style="background:#91b9e6;">
                				<tr>
                  					<th>SWOT Type</th>
                  					<th>SWOT Details</th>
                               </tr>
                			</thead>
                			<tbody>
               				<?php 
								foreach($up as $row)
									{ 
							?>
                				<tr>
                  			
                 								<td style="vertical-align:middle;"><?php echo $row['swot_type'];?></td>
                								<td style="vertical-align:middle;"><?php echo $row['sdetails'];?></td>
                  
                  
                				</tr>
                			</tbody>
               				<?php 
									} 
							?>
              			</table>
                        <table id="tableData" class="table table-hover table-bordered">
              				<thead style="background:#91b9e6;">
                				<tr>
                  					<th>Observation</th>
                  					
                               </tr>
                			</thead>
                			<tbody>
               				<?php 
								foreach($up1 as $row)
									{ 
							?>
                				<tr>
                  			
                 								<td style="vertical-align:middle;"><?php echo $row['odetails'];?></td>
                								
                  
                  
                				</tr>
                			</tbody>
               				<?php 
									} 
							?>
              			</table>
                        <table id="tableData" class="table table-hover table-bordered">
              				<thead style="background:#91b9e6;">
                				<tr>
                  					<th>Dispposal</th>
                  					<th>Remarks</th>
                               </tr>
                			</thead>
                			<tbody>
               				<?php 
								foreach($up1 as $row)
									{ 
							?>
                				<tr>
                  			
                 								<td style="vertical-align:middle;"><?php echo $row['disposal'];?></td>
                                                <td style="vertical-align:middle;"><?php echo $row['remarks'];?></td>
                								
                  
                  
                				</tr>
                			</tbody>
               				<?php 
									} 
							?>
              			</table>
                        
            		</div>
            	</div>
            </div>
            <!-- /.box-body -->
          </div>
          
                
                <!-- /.box-footer -->
              </div>
              <!--/.box -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->

        
          <!-- /.box -->
        </div>
        <!-- /.col -->

        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  
</div>
<!-- ./wrapper -->

</body>
</html>
