<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
    
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Babylon Group</li>
        <?php if($this->session->userdata('userid') && $this->session->userdata('user_type')==='1'):?>
       
        <li class="treeview">
        	<a href="#">
            	<i class="fa fa-industry" aria-hidden="true"></i><span>Basic Info</span>
            	<span class="pull-right-container">
              		<i class="fa fa-angle-left pull-right"></i>
            	</span>
          	</a>
          	<ul class="treeview-menu">
            	<li class="treeview">
        			<a href="#">
            			<i class="fa fa-industry" aria-hidden="true"></i><span>Factory Info</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			<li><a href="<?php echo base_url();?>Dashboard/factory_insert_form"><i class="fa fa-circle-o"></i> Add Factory Info</a></li>
                		<li><a href="<?php echo base_url();?>Dashboard/factory_list"><i class="fa fa-circle-o"></i> Factory List</a></li>
            		</ul>
        		</li>
                <li class="treeview">
        			<a href="#">
            			<i class="fa fa-industry" aria-hidden="true"></i><span>Division Info</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			<li><a href="<?php echo base_url();?>Dashboard/division_insert_form"><i class="fa fa-circle-o"></i> Add Division Info</a></li>
                		<li><a href="<?php echo base_url();?>Dashboard/division_list"><i class="fa fa-circle-o"></i> Division List</a></li>
            		</ul>
        		</li>
                <li class="treeview">
        			<a href="#">
            			<i class="fa fa-industry" aria-hidden="true"></i><span>Department Info</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			<li><a href="<?php echo base_url();?>Dashboard/department_insert_form"><i class="fa fa-circle-o"></i> Add Department Info</a></li>
                		<li><a href="<?php echo base_url();?>Dashboard/department_list"><i class="fa fa-circle-o"></i> Department List</a></li>
            		</ul>
        		</li>
                <li class="treeview">
        			<a href="#">
            			<i class="fa fa-industry" aria-hidden="true"></i><span>Section Info</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			<li><a href="<?php echo base_url();?>Dashboard/section_insert_form"><i class="fa fa-circle-o"></i> Add Section Info</a></li>
                		<li><a href="<?php echo base_url();?>Dashboard/section_list"><i class="fa fa-circle-o"></i> Section List</a></li>
            		</ul>
        		</li>
                <li class="treeview">
        			<a href="#">
            			<i class="fa fa-industry" aria-hidden="true"></i><span>Sub Section Info</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			<li><a href="<?php echo base_url();?>Dashboard/subsection_insert_form"><i class="fa fa-circle-o"></i> Add Sub Section Info</a></li>
                		<li><a href="<?php echo base_url();?>Dashboard/subsection_list"><i class="fa fa-circle-o"></i> Sub Section List</a></li>
            		</ul>
        		</li>
                <li class="treeview">
        			<a href="#">
            			<i class="fa fa-id-card" aria-hidden="true"></i> <span>Religion Info</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			<li><a href="<?php echo base_url();?>Dashboard/religion_insert_form"><i class="fa fa-circle-o"></i> Add Religion Info</a></li>
                		<li><a href="<?php echo base_url();?>Dashboard/religion_list"><i class="fa fa-circle-o"></i> Religion List</a></li>
            		</ul>
        		</li>
                <li class="treeview">
        			<a href="#">
            			<i class="fa fa-id-card" aria-hidden="true"></i> <span>Gender Info</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			<li><a href="<?php echo base_url();?>Dashboard/gender_insert_form"><i class="fa fa-circle-o"></i> Add Gender Info</a></li>
                		<li><a href="<?php echo base_url();?>Dashboard/gender_list"><i class="fa fa-circle-o"></i> Gender List</a></li>
            		</ul>
        		</li>
                <li class="treeview">
        			<a href="#">
            			<i class="fa fa-id-card" aria-hidden="true"></i> <span>Maritual Status</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			<li><a href="<?php echo base_url();?>Dashboard/maritualstatus_insert_form"><i class="fa fa-circle-o"></i> Add Maritual Status</a></li>
                		<li><a href="<?php echo base_url();?>Dashboard/maritualstatus_list"><i class="fa fa-circle-o"></i> Maritual Status List</a></li>
            		</ul>
        		</li>
                <li class="treeview">
        			<a href="#">
            			<i class="fa fa-id-card" aria-hidden="true"></i> <span>Parent Designation</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			<li><a href="<?php echo base_url();?>Dashboard/parentdesignation_insert_form"><i class="fa fa-circle-o"></i> Add Parent Designation</a></li>
                		<li><a href="<?php echo base_url();?>Dashboard/parentdesignation_list"><i class="fa fa-circle-o"></i> Parent Designation List</a></li>
            		</ul>
        		</li>
                <li class="treeview">
        			<a href="#">
            			<i class="fa fa-id-card" aria-hidden="true"></i> <span>Child Designation</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			<li><a href="<?php echo base_url();?>Dashboard/childdesignation_insert_form"><i class="fa fa-circle-o"></i> Add Child Designation</a></li>
                		<li><a href="<?php echo base_url();?>Dashboard/childdesignation_list"><i class="fa fa-circle-o"></i>Child Designation List</a></li>
            		</ul>
       			</li>
                <li class="treeview">
        			<a href="#">
            			<i class="fa fa-id-card" aria-hidden="true"></i> <span>User Type</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			<li><a href="<?php echo base_url();?>Dashboard/usertype_insert_form"><i class="fa fa-circle-o"></i> Add User Type</a></li>
                		<li><a href="<?php echo base_url();?>Dashboard/usertype_list"><i class="fa fa-circle-o"></i>User Type List</a></li>
            		</ul>
        		</li>
                <li class="treeview">
        			<a href="#">
            			<i class="fa fa-id-card" aria-hidden="true"></i> <span>Employee Info</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			<li><a href="<?php echo base_url();?>Dashboard/user_insert_form"><i class="fa fa-circle-o"></i> Add User Info</a></li>
                		<li><a href="<?php echo base_url();?>Dashboard/user_import_excel"><i class="fa fa-circle-o"></i> Add From Excel</a></li>
                		<li><a href="<?php echo base_url();?>Dashboard/user_list"><i class="fa fa-circle-o"></i> User List</a></li>
            		</ul>
        		</li>
            </ul>
        </li>
        
        
        
        
        
        
        
        
        
        
        
     	
        <li class="treeview">
        	<a href="#">
            	<i class="fa fa-industry" aria-hidden="true"></i><span>Task Tracker</span>
            	<span class="pull-right-container">
              		<i class="fa fa-angle-left pull-right"></i>
            	</span>
          	</a>
          	<ul class="treeview-menu">
            	<li><a href="<?php echo base_url();?>Dashboard/createtask_insert_form"><i class="fa fa-circle-o"></i> Add Task Tracker Info</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/task_list"><i class="fa fa-circle-o"></i>Task List</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/user_task_complete_form"><i class="fa fa-circle-o"></i>User Task List Complete</a></li>
                
                <li><a href="<?php echo base_url();?>Dashboard/date_wise_total_completed_task_list_form"><i class="fa fa-circle-o"></i>Date Wise Completed Task</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/completed_task_list"><i class="fa fa-circle-o"></i>Completed Task List</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/tasktype_insert_form"><i class="fa fa-circle-o"></i>Task Type</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/tasktype_list"><i class="fa fa-circle-o"></i>Task Type List</a></li>
            </ul>
        </li>
        <li class="treeview">
        	<a href="#">
            	<i class="fa fa-industry" aria-hidden="true"></i><span>License Tracker</span>
            	<span class="pull-right-container">
              		<i class="fa fa-angle-left pull-right"></i>
            	</span>
          	</a>
          	<ul class="treeview-menu">
            	<li><a href="<?php echo base_url();?>Dashboard/license_insert_form"><i class="fa fa-circle-o"></i> Add License Info</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/license_list"><i class="fa fa-circle-o"></i>License List</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/licensetype_insert_form"><i class="fa fa-circle-o"></i>License Type</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/licensetype_list"><i class="fa fa-circle-o"></i>License Type List</a></li>
            </ul>
        </li>
        <li class="treeview">
        	<a href="#">
            	<i class="fa fa-music" aria-hidden="true"></i><span>Album</span>
            	<span class="pull-right-container">
              		<i class="fa fa-angle-left pull-right"></i>
            	</span>
          	</a>
          	<ul class="treeview-menu">
            	<?php /*?><li><a href="<?php echo base_url();?>Dashboard/department_insert_form"><i class="fa fa-circle-o"></i> Add Department</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/department_list"><i class="fa fa-circle-o"></i>Department list</a></li><?php */?>
                
            	<li><a href="<?php echo base_url();?>Dashboard/notice_album_form"><i class="fa fa-circle-o"></i>Add Notice Album</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/notice_list"><i class="fa fa-circle-o"></i>Notice Album list</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/policy_album_form"><i class="fa fa-circle-o"></i>Add Policy Album</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/policy_list"><i class="fa fa-circle-o"></i>Policy Album list</a></li>
               	<li><a href="<?php echo base_url();?>Dashboard/event_album_form"><i class="fa fa-circle-o"></i>Add Event</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/event_list"><i class="fa fa-circle-o"></i>Event List</a></li>
            </ul>
        </li>
        <li class="treeview">
        	<a href="#">
            	<i class="fa fa-music" aria-hidden="true"></i><span>Training Managment</span>
            	<span class="pull-right-container">
              		<i class="fa fa-angle-left pull-right"></i>
            	</span>
          	</a>
          	<ul class="treeview-menu">
            	<?php /*?><li><a href="<?php echo base_url();?>Dashboard/department_insert_form"><i class="fa fa-circle-o"></i> Add Department</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/department_list"><i class="fa fa-circle-o"></i>Department list</a></li><?php */?>
                
            	<li><a href="<?php echo base_url();?>Dashboard/training_material_form"><i class="fa fa-circle-o"></i>Add Training Mterial</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/trainingmaterial_list"><i class="fa fa-circle-o"></i>Training Material list</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/trainingtype_insert_form"><i class="fa fa-circle-o"></i>Training Type</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/trainingtype_list"><i class="fa fa-circle-o"></i>Training Type List</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/trainingcategory_insert_form"><i class="fa fa-circle-o"></i>Training Category</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/trainingcategory_list"><i class="fa fa-circle-o"></i>Training category List</a></li>
                
            </ul>
        </li>
        <li class="treeview">
        	<a href="#">
            	<i class="fa fa-music" aria-hidden="true"></i><span>SWOT</span>
            	<span class="pull-right-container">
              		<i class="fa fa-angle-left pull-right"></i>
            	</span>
          	</a>
          	<ul class="treeview-menu">
            	
                
            	<li><a href="<?php echo base_url();?>Dashboard/swot_insert_form"><i class="fa fa-circle-o"></i>Add SWOT Info</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/swot_pending_list"><i class="fa fa-circle-o"></i>SWOT Pending List</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/user_swot_form"><i class="fa fa-circle-o"></i>User Swot List</a></li>
                
            </ul>
        </li>
        <li class="treeview">
        	<a href="#">
            	<i class="fa fa-music" aria-hidden="true"></i><span>Employee Observation</span>
            	<span class="pull-right-container">
              		<i class="fa fa-angle-left pull-right"></i>
            	</span>
          	</a>
          	<ul class="treeview-menu">
            	
                
            	<li><a href="<?php echo base_url();?>Dashboard/eobservation_insert_form"><i class="fa fa-circle-o"></i>Add Observation Info</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/eobservation_pending_list"><i class="fa fa-circle-o"></i>Observation Pending List</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/euser_observation_form"><i class="fa fa-circle-o"></i>User Observation List</a></li>
                
            </ul>
        </li>
        
        
        
       
        <?php endif;?>
        												<!--USER-->
        
        <?php if($this->session->userdata('userid') && $this->session->userdata('user_type')==='2'):?>
     	
         
        
        
        
        
        
        
        
        
        
        
        
     	
        <li class="treeview">
        	<a href="#">
            	<i class="fa fa-industry" aria-hidden="true"></i><span>Task Tracker</span>
            	<span class="pull-right-container">
              		<i class="fa fa-angle-left pull-right"></i>
            	</span>
          	</a>
          	<ul class="treeview-menu">
            	<?php /*?><li><a href="<?php echo base_url();?>Dashboard/createtask_insert_form"><i class="fa fa-circle-o"></i> Add Task Tracker Info</a></li><?php */?>
                <li><a href="<?php echo base_url();?>Dashboard"><i class="fa fa-circle-o"></i>Task List</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/completed_task_list_user"><i class="fa fa-circle-o"></i>Completed Task List</a></li>
                <?php /*?><li><a href="<?php echo base_url();?>Dashboard/user_task_list"><i class="fa fa-circle-o"></i>User Task List</a></li><?php */?>
            </ul>
        </li>
        <li class="treeview">
        	<a href="#">
            	<i class="fa fa-industry" aria-hidden="true"></i><span>License Tracker</span>
            	<span class="pull-right-container">
              		<i class="fa fa-angle-left pull-right"></i>
            	</span>
          	</a>
          	<ul class="treeview-menu">
            	<?php /*?><li><a href="<?php echo base_url();?>Dashboard/license_insert_form"><i class="fa fa-circle-o"></i> Add License Info</a></li><?php */?>
                <li><a href="<?php echo base_url();?>Dashboard/license_list"><i class="fa fa-circle-o"></i>License List</a></li>
                <?php /*?><li><a href="<?php echo base_url();?>Dashboard/user_task_list"><i class="fa fa-circle-o"></i>User Task List</a></li><?php */?>
            </ul>
        </li>
        <li class="treeview">
        	<a href="#">
            	<i class="fa fa-music" aria-hidden="true"></i><span>Album</span>
            	<span class="pull-right-container">
              		<i class="fa fa-angle-left pull-right"></i>
            	</span>
          	</a>
          	<ul class="treeview-menu">
            	<?php /*?><li><a href="<?php echo base_url();?>Dashboard/department_insert_form"><i class="fa fa-circle-o"></i> Add Department</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/department_list"><i class="fa fa-circle-o"></i>Department list</a></li><?php */?>
                
            	<?php /*?><li><a href="<?php echo base_url();?>Dashboard/notice_album_form"><i class="fa fa-circle-o"></i>Add Notice Album</a></li><?php */?>
                <li><a href="<?php echo base_url();?>Dashboard/notice_list"><i class="fa fa-circle-o"></i>Notice Album list</a></li>
                <?php /*?><li><a href="<?php echo base_url();?>Dashboard/policy_album_form"><i class="fa fa-circle-o"></i>Add Policy Album</a></li><?php */?>
                <li><a href="<?php echo base_url();?>Dashboard/policy_list"><i class="fa fa-circle-o"></i>Policy Album list</a></li>
               	<?php /*?><li><a href="<?php echo base_url();?>Dashboard/event_album_form"><i class="fa fa-circle-o"></i>Add Event</a></li><?php */?>
                <li><a href="<?php echo base_url();?>Dashboard/event_list"><i class="fa fa-circle-o"></i>Event List</a></li>
            </ul>
        </li>
        <?php endif;?>
     </ul>
  </section>
    <!-- /.sidebar -->
  </aside>