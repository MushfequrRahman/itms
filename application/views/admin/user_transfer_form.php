<script type="text/javascript">
	$(function() {
		jQuery(".pd").datepicker({
			dateFormat: 'dd-mm-yy'
		});
	})
</script>

<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<div class="content-wrapper">
			<section class="content">

				<div class="row">
					<div class="col-md-12">
						<div class="col-md-12">
							<div class="nav-tabs-custom">
								<ul class="nav nav-tabs">
									<li class="active"><a href="#activity" data-toggle="tab">User Transfer</a></li>
								</ul>
								<div class="tab-content">
									<div class="active tab-pane" id="activity">

										<?php foreach ($ulup as $row) { ?>
											<form role="form" action="<?php echo base_url(); ?>Dashboard/user_transfer" method="post" enctype="multipart/form-data">
												<input type="hidden" class="form-control" name="ruserid" value="<?php echo $row['userid']; ?>">
												<div class="form-group">
													<label>Factory</label>
													<select class="form-control" name="factoryid" id="factoryid">
														<option value="<?php echo $row['factoryid']; ?>"><?php echo $row['factoryname']; ?></option>
														<?php
														foreach ($ul as $row1) {
														?>
															<option value="<?php echo $row1['factoryid']; ?>"><?php echo $row1['factoryname']; ?></option>
														<?php
														}
														?>
													</select>
													<?php /*?><?php echo $row['factoryname']; ?><?php */ ?>
													<?php echo form_error('factoryid', '<div class="error">', '</div>');  ?>
												</div>
												<div class="form-group">
													<!--<label>Department<em>*</em></label>-->
													<input type="hidden" class="form-control" name="departmentid" value="<?php echo $row['departmentid']; ?>">
													<?php /*?><select class="form-control" name="departmentid" id="departmentid">
                    		<option value="<?php echo $row['departmentid'];?>"><?php echo $row['departmentname'];?></option>
                             <?php
								foreach($ul1 as $row2)
									{
							?>
                    					<option value="<?php echo $row2['deptid'];?>"><?php echo $row2['departmentname'];?></option>
                    		<?php
									}
							?>
                        </select><?php */ ?>
												</div>
												<?php /*?><?php echo $row['departmentname'];?><?php */ ?>

												<div class="form-group">
													<!--<label>Name</label>-->
													<input type="hidden" class="form-control" name="name" value="<?php echo $row['name']; ?>">
													<?php echo form_error('name', '<div class="error">', '</div>');  ?>
												</div>

												<div class="form-group">
													<!--<label>Designation<em>*</em></label>-->
													<input type="hidden" class="form-control" name="designationid" value="<?php echo $row['desigid']; ?>">
													<?php /*?><select class="form-control" name="designationid" id="designationid">
                    	<option value="<?php echo $row['desigid'];?>"><?php echo $row['designation'];?></option>
                        <?php
							foreach($ul2 as $row3)
								{
						?>
                    					<option value="<?php echo $row3['desigid'];?>"><?php echo $row3['designation'];?></option>
                    	<?php
								}
						?>
                    </select>
                    <?php echo form_error('designationid', '<div class="error">', '</div>');  ?><?php */ ?>
												</div>
												<div class="form-group">
													<!--<label>Email<em>*</em></label>-->
													<input type="hidden" class="form-control" name="oemail" value="<?php echo $row['email']; ?>">
													<?php echo form_error('email', '<div class="error">', '</div>');  ?>
												</div>

												<div class="form-group">
													<!--<label>Mobile<em>*</em></label>-->
													<input type="hidden" class="form-control" name="mobile" value="<?php echo $row['mobile']; ?>">
													<?php echo form_error('mobile', '<div class="error">', '</div>');  ?>
												</div>

												<div class="form-group">
													<!--<label>User Type<em>*</em></label>-->
													<input type="hidden" class="form-control" name="usertypeid" value="<?php echo $row['usertypeid']; ?>">
													<?php /*?><select class="form-control" name="usertypeid" id="usertypeid">
                    	<option value="<?php echo $row['usertypeid'];?>"><?php echo $row['usertype'];?></option>
                        <?php
						foreach($ul3 as $row4)
						{
					?>
                    		<option value="<?php echo $row4['usertypeid'];?>"><?php echo $row4['usertype'];?></option>
                    <?php
						}
					?>
                    </select><?php */ ?>
													<?php /*?><?php echo $row['usertype'];?><?php */ ?>
													<?php /*?><?php echo form_error('usertypeid', '<div class="error">', '</div>');  ?><?php */ ?>
												</div>

												<div class="form-group">
													<!--<label>User Status<em>*</em></label>-->
													<input type="hidden" class="form-control" name="userstatusid" value="<?php echo $row['userstatusid']; ?>">
													<?php /*?><select class="form-control" name="userstatusid" id="userstatusid">
                    	<option value="<?php echo $row['userstatusid'];?>"><?php echo $row['userstatus'];?></option>
                        <?php
						foreach($ul4 as $row5)
						{
					?>
                    		<option value="<?php echo $row5['userstatusid'];?>"><?php echo $row5['userstatus'];?></option>
                    <?php
						}
					?>
                    </select><?php */ ?>
													<?php /*?><?php echo $row['userstatus'];?><?php */ ?>
													<?php /*?><?php echo form_error('userstatusid', '<div class="error">', '</div>');  ?><?php */ ?>
												</div>
												<div class="form-group">
													<label>User ID</label>
													<input type="text" class="form-control" name="userid" Placeholder="User ID">
													<?php echo form_error('userid', '<div class="error">', '</div>');  ?>
												</div>

												<div class="form-group">
													<!--<label>Password</label>-->
													<input type="hidden" class="form-control" name="etypeid" value="<?php echo $row['etypeid']; ?>">
													<?php echo form_error('etypeid', '<div class="error">', '</div>');  ?>
												</div>
												<div class="form-group">
													<!--<label>Password</label>-->
													<input type="hidden" class="form-control" name="password" value="<?php echo $row['password']; ?>">
													<?php echo form_error('password', '<div class="error">', '</div>');  ?>
												</div>
												<div class="form-group">
													<!--<label>Name</label>-->
													<input type="hidden" class="form-control" name="pic_file" value="<?php echo $row['image']; ?>">
												</div>

												<?php /*?><?php
					if($row['indate']=="0000-00-00")
					{
						$indate="0000-00-00";
						//$indate= date("d-m-Y", strtotime($indate));
					}
					else
					{
						$indate=$row['indate'];
						$indate= date("d-m-Y", strtotime($indate));
					}
				?>
				<div class="form-group">
					<label>Date Of Inactive<em>*</em></label>
					<input type="text" class="form-control pd" name="indate" value="<?php echo $indate; ?>">
                   
				</div><?php */ ?>
									</div>
									<div class="box-footer text-center">
										<input type="submit" class="btn btn-primary" name="submit" value="Submit" />
									</div>
									</form>
								<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>