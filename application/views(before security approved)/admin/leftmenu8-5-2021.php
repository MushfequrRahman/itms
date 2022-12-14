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
            	<i class="fa fa-info" aria-hidden="true"></i><span>Basic Info</span>
            	<span class="pull-right-container">
              		<i class="fa fa-angle-left pull-right"></i>
            	</span>
          	</a>
          	<ul class="treeview-menu">
            	<li class="treeview">
        			<a href="#">
            			<i class="fa fa-users"></i> <span>Buyer Info</span>
            			<span class="pull-right-container">
              			<i class="fa fa-angle-left pull-right"></i>
            			</span>
          			</a>
          			<ul class="treeview-menu">
            			<li><a href="<?php echo base_url();?>Dashboard/buyer_insert_form"><i class="fa fa-circle-o"></i> Add Buyer Info</a></li>
                        <li><a href="<?php echo base_url();?>Dashboard/buyer_list"><i class="fa fa-circle-o"></i> Buyer List</a></li>
                        <li><a href="<?php echo base_url();?>Dashboard/country_insert_form"><i class="fa fa-circle-o"></i> Add Country Info</a></li>
                        <li><a href="<?php echo base_url();?>Dashboard/country_list"><i class="fa fa-circle-o"></i> Country List</a></li>
            		</ul>
       			</li>
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
            			<i class="fa fa-id-card" aria-hidden="true"></i> <span>Service Type</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			<li><a href="<?php echo base_url();?>Dashboard/servicetype_insert_form"><i class="fa fa-circle-o"></i> Add Service Type</a></li>
                		<li><a href="<?php echo base_url();?>Dashboard/servicetype_list"><i class="fa fa-circle-o"></i>Service Type List</a></li>
            		</ul>
        		</li>
                <li class="treeview">
        			<a href="#">
            			<i class="fa fa-id-card" aria-hidden="true"></i> <span>User Status</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			<li><a href="<?php echo base_url();?>Dashboard/userstatus_insert_form"><i class="fa fa-circle-o"></i> Add User Status</a></li>
                		<li><a href="<?php echo base_url();?>Dashboard/userstatus_list"><i class="fa fa-circle-o"></i>User Status List</a></li>
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
                        <li><a href="<?php echo base_url();?>Dashboard/user_cv_form"><i class="fa fa-circle-o"></i> Add User CV</a></li>
                		<li><a href="<?php echo base_url();?>Dashboard/user_list"><i class="fa fa-circle-o"></i> User List</a></li>
            		</ul>
        		</li>
            </ul>
        </li>
        
        
        
        
        
        
        
        
        
        
        
     	
        <li class="treeview">
        	<a href="#">
            	<i class="fa fa-tasks" aria-hidden="true"></i><span>Task Tracker</span>
            	<span class="pull-right-container">
              		<i class="fa fa-angle-left pull-right"></i>
            	</span>
          	</a>
          	<ul class="treeview-menu">
            	<li><a href="<?php echo base_url();?>Dashboard/createtask_insert_form"><i class="fa fa-circle-o"></i> Add Task Tracker Info</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/task_list"><i class="fa fa-circle-o"></i>Total Task List</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/user_task_list"><i class="fa fa-circle-o"></i>User Task List</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/user_task_complete_form"><i class="fa fa-circle-o"></i>User Wise Report</a></li>
                
                <li><a href="<?php echo base_url();?>Dashboard/date_wise_total_completed_task_list_form"><i class="fa fa-circle-o"></i>Date Wise Completed Task</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/completed_task_list"><i class="fa fa-circle-o"></i>Completed Task List</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/tasktype_insert_form"><i class="fa fa-circle-o"></i>Task Type</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/tasktype_list"><i class="fa fa-circle-o"></i>Task Type List</a></li>
            </ul>
        </li>
        <li class="treeview">
        	<a href="#">
            	<i class="fa fa-id-card" aria-hidden="true"></i><span>License Tracker</span>
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
            	<i class="fa fa-graduation-cap" aria-hidden="true"></i><span>Training Managment</span>
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
            	<i class="fa fa-cogs" aria-hidden="true"></i><span>SWOT</span>
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
            	<i class="fa fa-file" aria-hidden="true"></i><span>Employee Observation</span>
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
        <li class="treeview">
        	<a href="#">
            	<i class="fa fa-truck" aria-hidden="true"></i><span>Material Movement</span>
            	<span class="pull-right-container">
              		<i class="fa fa-angle-left pull-right"></i>
            	</span>
          	</a>
          	<ul class="treeview-menu">
            	
                
            	<li><a href="<?php echo base_url();?>Dashboard/challan_create_form"><i class="fa fa-circle-o"></i>Challan Create</a></li>
                <?php /*?><li><a href="<?php echo base_url();?>Dashboard/factory_challan_list"><i class="fa fa-circle-o"></i>Challan List</a></li><?php */?>
                <li><a href="<?php echo base_url();?>Dashboard/date_wise_challan_list_form"><i class="fa fa-circle-o"></i>Challan List</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/productunit_insert_form"><i class="fa fa-circle-o"></i>Add Product Unit</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/productunit_list"><i class="fa fa-circle-o"></i>Product Unit List</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/producttype_insert_form"><i class="fa fa-circle-o"></i>Add Product Type</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/producttype_list"><i class="fa fa-circle-o"></i>Product Type List</a></li>
            </ul>
        </li>
        
        
        <li class="treeview">
        	<a href="#">
            	<i class="fa fa-users" aria-hidden="true"></i><span>HR</span>
            	<span class="pull-right-container">
              		<i class="fa fa-angle-left pull-right"></i>
            	</span>
          	</a>
          	<ul class="treeview-menu">
            	<li><a href="<?php echo base_url();?>Dashboard/challan_create_form"><i class="fa fa-circle-o"></i>HR Strategy</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/challan_create_form"><i class="fa fa-circle-o"></i>HR Planning</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/challan_create_form"><i class="fa fa-circle-o"></i>HR Manual</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/challan_create_form"><i class="fa fa-circle-o"></i>HR SOP</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/challan_create_form"><i class="fa fa-circle-o"></i>HR Forms</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/challan_create_form"><i class="fa fa-circle-o"></i>HR Organogram</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/challan_create_form"><i class="fa fa-circle-o"></i>MP Budget</a></li>
                <li class="treeview">
        			<a href="#">
            			<i class="fa fa-industry" aria-hidden="true"></i><span>Functions</span>
            			<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
          			</a>
                   
          			<ul class="treeview-menu">
            			<li class="treeview">
        					<a href="#">
            					<i class="fa fa-industry" aria-hidden="true"></i><span>Recruitment</span>
            					<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
          					</a>
                            <ul class="treeview-menu">
            					<li class="treeview">
        							<a href="#">
            							<i class="fa fa-industry" aria-hidden="true"></i><span>Internal</span>
            							<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
          							</a>
                                    <ul class="treeview-menu">
            							<li><a href="<?php echo base_url();?>Dashboard/challan_create_form"><i class="fa fa-circle-o"></i>Succession Planning</a></li>
                					</ul>
                                </li>
                                <li><a href="<?php echo base_url();?>Dashboard/challan_create_form"><i class="fa fa-circle-o"></i>External</a></li>
                			</ul>
                        </li>
                        <li class="treeview">
        					<a href="#">
            					<i class="fa fa-industry" aria-hidden="true"></i><span>Selection</span>
            						<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
          					</a>
                            <ul class="treeview-menu">
            							<li><a href="<?php echo base_url();?>Dashboard/challan_create_form"><i class="fa fa-circle-o"></i>Buddy Management</a></li>
                			</ul>
                        </li>
                        <li class="treeview">
        					<a href="#">
            					<i class="fa fa-industry" aria-hidden="true"></i><span>CB</span>
            						<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
          					</a>
                            <ul class="treeview-menu">
            							<li><a href="<?php echo base_url();?>Dashboard/challan_create_form"><i class="fa fa-circle-o"></i>CB</a></li>
                			</ul>
                        </li>
                        <li class="treeview">
        					<a href="#">
            					<i class="fa fa-industry" aria-hidden="true"></i><span>IR</span>
            						<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
          					</a>
                            <ul class="treeview-menu">
            							<li><a href="<?php echo base_url();?>Dashboard/challan_create_form"><i class="fa fa-circle-o"></i>IR</a></li>
                			</ul>
                        </li>
                        <li class="treeview">
        					<a href="#">
            					<i class="fa fa-industry" aria-hidden="true"></i><span>Training & Development</span>
            						<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
          					</a>
                            <ul class="treeview-menu">
            							<li><a href="<?php echo base_url();?>Dashboard/challan_create_form"><i class="fa fa-circle-o"></i>Nerve Center</a></li>
                                        <li><a href="<?php echo base_url();?>Dashboard/challan_create_form"><i class="fa fa-circle-o"></i>Training Management <br/>System</a></li>
                                        <li><a href="<?php echo base_url();?>Dashboard/challan_create_form"><i class="fa fa-circle-o"></i>Probation Follow Up</a></li>
                                        <li><a href="<?php echo base_url();?>Dashboard/challan_create_form"><i class="fa fa-circle-o"></i>Intern Management</a></li>
                                        <li><a href="<?php echo base_url();?>Dashboard/challan_create_form"><i class="fa fa-circle-o"></i>Career Planning</a></li>
                                        <li><a href="<?php echo base_url();?>Dashboard/challan_create_form"><i class="fa fa-circle-o"></i>Future Leader <br/>Development Program</a></li>
                                        <li><a href="<?php echo base_url();?>Dashboard/challan_create_form"><i class="fa fa-circle-o"></i>Performance <br/>Management System</a></li>
                			</ul>
                        </li>
                		
            		</ul>
        		</li>
                <li class="treeview">
        			<a href="#">
            			<i class="fa fa-industry" aria-hidden="true"></i><span>Projects</span>
            			<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
          			</a>
                    <ul class="treeview-menu">
            							<li><a href="<?php echo base_url();?>Dashboard/challan_create_form"><i class="fa fa-circle-o"></i>Projects</a></li>
                   </ul>
                </li>
                <li class="treeview">
        			<a href="#">
            			<i class="fa fa-industry" aria-hidden="true"></i><span>Cultural Note</span>
            			<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
          			</a>
                    <ul class="treeview-menu">
            							<li><a href="<?php echo base_url();?>Dashboard/challan_create_form"><i class="fa fa-circle-o"></i>Cultural Note</a></li>
                   </ul>
                </li>
                <li class="treeview">
        			<a href="#">
            			<i class="fa fa-industry" aria-hidden="true"></i><span>Reports</span>
            			<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
          			</a>
                    <ul class="treeview-menu">
            							<li><a href="<?php echo base_url();?>Dashboard/challan_create_form"><i class="fa fa-circle-o"></i>Reports</a></li>
                   </ul>
                </li>
                <li class="treeview">
        			<a href="#">
            			<i class="fa fa-industry" aria-hidden="true"></i><span>Publications</span>
            			<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
          			</a>
                    <ul class="treeview-menu">
            							<li><a href="<?php echo base_url();?>Dashboard/challan_create_form"><i class="fa fa-circle-o"></i>Publications</a></li>
                   </ul>
                </li>
           </ul>
        </li>
         <li class="treeview">
        			<a href="#">
            			<i class="fa fa-calendar" aria-hidden="true"></i><span>Caledar</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			<li><a href="<?php echo base_url();?>Calendar/calendar"><i class="fa fa-circle-o"></i>Calendar</a></li>
                		
            		</ul>
        </li>
        <li class="treeview">
        	<a href="#">
            	<i class="fa fa-gavel" aria-hidden="true"></i><span>Compliance Report-CAP</span>
            	<span class="pull-right-container">
              		<i class="fa fa-angle-left pull-right"></i>
            	</span>
          	</a>
          	<ul class="treeview-menu">
            	<li><a href="<?php echo base_url();?>Dashboard/auditparty_insert_form"><i class="fa fa-circle-o"></i> Add Audit Party</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/auditparty_list"><i class="fa fa-circle-o"></i>Audit Party list</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/audittype_insert_form"><i class="fa fa-circle-o"></i> Add Audit Type</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/audittype_list"><i class="fa fa-circle-o"></i>Audit Type list</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/auditscope_insert_form"><i class="fa fa-circle-o"></i> Add Audit Scope</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/auditscope_list"><i class="fa fa-circle-o"></i>Audit Scope list</a></li>
            	<li><a href="<?php echo base_url();?>Dashboard/preaudit_insert_form"><i class="fa fa-circle-o"></i> Add Pre Audit Info</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/cap_insert_form"><i class="fa fa-circle-o"></i> Add Cap Info</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/capfile_insert_form"><i class="fa fa-circle-o"></i> Add Cap Report</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/cap_status_form"><i class="fa fa-circle-o"></i> Add Cap Status</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/cap_fullr_form"><i class="fa fa-circle-o"></i> Cap Report</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/chart_form"><i class="fa fa-circle-o"></i> Chart</a></li>
            </ul>
        </li>
        <li class="treeview">
        			<a href="#">
            			<i class="fa fa-star" aria-hidden="true"></i><span>Score Card</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			<li><a href="<?php echo base_url();?>Dashboard/ssupervisor_list"><i class="fa fa-circle-o"></i>Add Info</a></li>
                		<li><a href="<?php echo base_url();?>Dashboard/date_wise_totalsscorecard_form"><i class="fa fa-circle-o"></i>Date Wise Total SC</a></li>
                        <li><a href="<?php echo base_url();?>Dashboard/date_wise_totalsummarysscorecard_form"><i class="fa fa-circle-o"></i>Date Wise Total Summary SC</a></li>
                        <li><a href="<?php echo base_url();?>Dashboard/date_wise_individualsummarysscorecard_form"><i class="fa fa-circle-o"></i>Individual Summary SC</a></li>
            		</ul>
        </li>
        <li class="treeview">
        			<a href="#">
            			<i class="fa fa-ban" aria-hidden="true"></i><span>Disciplinary Action</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			<li><a href="<?php echo base_url();?>Dashboard/diciplinary_action_insert_form"><i class="fa fa-circle-o"></i>Add Info</a></li>
                        <li><a href="<?php echo base_url();?>Dashboard/dcapending_list"><i class="fa fa-circle-o"></i>Pending List</a></li>
                        <li><a href="<?php echo base_url();?>Dashboard/date_wise_dcacomplete_list_form"><i class="fa fa-circle-o"></i>Complete List</a></li>
                		<li><a href="<?php echo base_url();?>Dashboard/add_dfacheadcomments_form"><i class="fa fa-circle-o"></i>ADD Comments OF Fac.Head</a></li>
                        <li><a href="<?php echo base_url();?>Dashboard/dfacheadcomments_list"><i class="fa fa-circle-o"></i>Comments OF Fac.Head List</a></li>
                        <li><a href="<?php echo base_url();?>Dashboard/add_dcatype_form"><i class="fa fa-circle-o"></i>ADD Action Type</a></li>
                        <li><a href="<?php echo base_url();?>Dashboard/dcatype_list"><i class="fa fa-circle-o"></i>Action Type List</a></li>
            		</ul>
        </li>
        <li class="treeview">
        			<a href="#">
            			<i class="fa fa-lightbulb-o" aria-hidden="true"></i><span>Suggession Box</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			<li><a href="<?php echo base_url();?>Dashboard/suggession_insert_form"><i class="fa fa-circle-o"></i>Add Info</a></li>
                        <li><a href="<?php echo base_url();?>Dashboard/supending_list"><i class="fa fa-circle-o"></i>Pending List</a></li>
                        <li><a href="<?php echo base_url();?>Dashboard/date_wise_sucomplete_list_form"><i class="fa fa-circle-o"></i>Complete List</a></li>
                		<li><a href="<?php echo base_url();?>Dashboard/opener_insert_form"><i class="fa fa-circle-o"></i>ADD Opener</a></li>
                        <li><a href="<?php echo base_url();?>Dashboard/opener_list"><i class="fa fa-circle-o"></i>Opener List</a></li>
                        <li><a href="<?php echo base_url();?>Dashboard/fpr_insert_form"><i class="fa fa-circle-o"></i>ADD FPR</a></li>
                        <li><a href="<?php echo base_url();?>Dashboard/fpr_list"><i class="fa fa-circle-o"></i>FPR List</a></li>
                        <li><a href="<?php echo base_url();?>Dashboard/grading_insert_form"><i class="fa fa-circle-o"></i>ADD Grading</a></li>
                        <li><a href="<?php echo base_url();?>Dashboard/grading_list"><i class="fa fa-circle-o"></i>Grading List</a></li>
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
        <li class="treeview">
        			<a href="#">
            			<i class="fa fa-industry" aria-hidden="true"></i><span>Caledar</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			<li><a href="<?php echo base_url();?>Calendar/calendar"><i class="fa fa-circle-o"></i>Calendar</a></li>
                		
            		</ul>
        </li>
        
        
        <?php endif;?>
        
        															<!--MANAGER-->
        
        <?php if($this->session->userdata('userid') && $this->session->userdata('user_type')==='3'):?>
     	
         <li class="treeview">
        	<a href="#">
            	<i class="fa fa-music" aria-hidden="true"></i><span>Calendar</span>
            	<span class="pull-right-container">
              		<i class="fa fa-angle-left pull-right"></i>
            	</span>
          	</a>
          	<ul class="treeview-menu">
            	
                <li><a href="<?php echo base_url();?>Calendar/calendar"><i class="fa fa-circle-o"></i>Calendar</a></li>
            </ul>
        </li>
        <?php endif;?>
        
        																<!--TRAINING-->
        
        <?php if($this->session->userdata('userid') && $this->session->userdata('user_type')==='4'):?>
     	
         <li class="treeview">
        	<a href="#">
            	<i class="fa fa-graduation-cap" aria-hidden="true"></i><span>Training Managment</span>
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
            	<i class="fa fa-tasks" aria-hidden="true"></i><span>Task Tracker</span>
            	<span class="pull-right-container">
              		<i class="fa fa-angle-left pull-right"></i>
            	</span>
          	</a>
          	<ul class="treeview-menu">
            	<li><a href="<?php echo base_url();?>Dashboard/createtask_insert_form"><i class="fa fa-circle-o"></i> Add Task Tracker Info</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/task_list"><i class="fa fa-circle-o"></i>Total Task List</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/user_task_list"><i class="fa fa-circle-o"></i>User Task List</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/user_task_complete_form"><i class="fa fa-circle-o"></i>User Wise Report</a></li>
                
                <li><a href="<?php echo base_url();?>Dashboard/date_wise_total_completed_task_list_form"><i class="fa fa-circle-o"></i>Date Wise Completed Task</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/completed_task_list"><i class="fa fa-circle-o"></i>Completed Task List</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/tasktype_insert_form"><i class="fa fa-circle-o"></i>Task Type</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/tasktype_list"><i class="fa fa-circle-o"></i>Task Type List</a></li>
            </ul>
        </li>
        <li class="treeview">
        			<a href="#">
            			<i class="fa fa-calendar" aria-hidden="true"></i><span>Caledar</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			<li><a href="<?php echo base_url();?>Calendar/calendar"><i class="fa fa-circle-o"></i>Calendar</a></li>
                		
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
        <?php endif;?>
        
        																<!--SECURITY-->
        
        <?php if($this->session->userdata('userid') && $this->session->userdata('user_type')==='5'):?>
     	
         <li class="treeview">
        	<a href="#">
            	<i class="fa fa-industry" aria-hidden="true"></i><span>Material Movement</span>
            	<span class="pull-right-container">
              		<i class="fa fa-angle-left pull-right"></i>
            	</span>
          	</a>
          	<ul class="treeview-menu">
            	
                <li><a href="<?php echo base_url();?>Dashboard/challan_create_form"><i class="fa fa-circle-o"></i>Challan Create</a></li>
                <?php /*?><li><a href="<?php echo base_url();?>Dashboard/factory_challan_list"><i class="fa fa-circle-o"></i>Factory Wise Challan List</a></li><?php */?>
                <li><a href="<?php echo base_url();?>Dashboard/date_wise_challan_list_form"><i class="fa fa-circle-o"></i>Challan List</a></li>
            </ul>
        </li>
        <?php endif;?>
     </ul>
  </section>
    <!-- /.sidebar -->
  </aside>