<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
    
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Babylon Group</li>
        <?php if($this->session->userdata('userid') && $this->session->userdata('basicinfo_read')==='1' && $this->session->userdata('basicinfo_write')==='1')
		{?>
       
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
            			<li><a target="_blank" href="<?php echo base_url();?>Dashboard/buyer_insert_form"><i class="fa fa-circle-o"></i> Add Buyer Info</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/buyer_list"><i class="fa fa-circle-o"></i> Buyer List</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/country_insert_form"><i class="fa fa-circle-o"></i> Add Country Info</a></li>
 						<li><a target="_blank" href="<?php echo base_url();?>Dashboard/country_list"><i class="fa fa-circle-o"></i> Country List</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/buyerwf_insert_form"><i class="fa fa-circle-o"></i> Add Buyer With Factory Info</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/buyerwf_list"><i class="fa fa-circle-o"></i>Buyer Wise Factory List</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/buyerwcer_insert_form"><i class="fa fa-circle-o"></i> Add Certificate Info</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/buyerwcer_list"><i class="fa fa-circle-o"></i> Buyer Certificate List</a></li>
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
            			<li><a target="_blank" href="<?php echo base_url();?>Dashboard/factory_insert_form"><i class="fa fa-circle-o"></i> Add Factory Info</a></li>
                		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/factory_list"><i class="fa fa-circle-o"></i> Factory List</a></li>
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
            			<li><a target="_blank" href="<?php echo base_url();?>Dashboard/division_insert_form"><i class="fa fa-circle-o"></i> Add Division Info</a></li>
                		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/division_list"><i class="fa fa-circle-o"></i> Division List</a></li>
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
            			<li><a target="_blank" href="<?php echo base_url();?>Dashboard/department_insert_form"><i class="fa fa-circle-o"></i> Add Department Info</a></li>
                		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/department_list"><i class="fa fa-circle-o"></i> Department List</a></li>
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
            			<li><a target="_blank" href="<?php echo base_url();?>Dashboard/section_insert_form"><i class="fa fa-circle-o"></i> Add Section Info</a></li>
                		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/section_list"><i class="fa fa-circle-o"></i> Section List</a></li>
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
            			<li><a target="_blank" href="<?php echo base_url();?>Dashboard/subsection_insert_form"><i class="fa fa-circle-o"></i> Add Sub Section Info</a></li>
                		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/subsection_list"><i class="fa fa-circle-o"></i> Sub Section List</a></li>
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
            			<li><a target="_blank" href="<?php echo base_url();?>Dashboard/religion_insert_form"><i class="fa fa-circle-o"></i> Add Religion Info</a></li>
                		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/religion_list"><i class="fa fa-circle-o"></i> Religion List</a></li>
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
            			<li><a target="_blank" href="<?php echo base_url();?>Dashboard/gender_insert_form"><i class="fa fa-circle-o"></i> Add Gender Info</a></li>
                		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/gender_list"><i class="fa fa-circle-o"></i> Gender List</a></li>
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
            			<li><a target="_blank" href="<?php echo base_url();?>Dashboard/maritualstatus_insert_form"><i class="fa fa-circle-o"></i> Add Maritual Status</a></li>
                		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/maritualstatus_list"><i class="fa fa-circle-o"></i> Maritual Status List</a></li>
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
            			<li><a target="_blank" href="<?php echo base_url();?>Dashboard/parentdesignation_insert_form"><i class="fa fa-circle-o"></i> Add Parent Designation</a></li>
                		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/parentdesignation_list"><i class="fa fa-circle-o"></i> Parent Designation List</a></li>
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
            			<li><a target="_blank" href="<?php echo base_url();?>Dashboard/childdesignation_insert_form"><i class="fa fa-circle-o"></i> Add Child Designation</a></li>
                		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/childdesignation_list"><i class="fa fa-circle-o"></i>Child Designation List</a></li>
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
            			<li><a target="_blank" href="<?php echo base_url();?>Dashboard/usertype_insert_form"><i class="fa fa-circle-o"></i> Add User Type</a></li>
                		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/usertype_list"><i class="fa fa-circle-o"></i>User Type List</a></li>
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
            			<li><a target="_blank" href="<?php echo base_url();?>Dashboard/servicetype_insert_form"><i class="fa fa-circle-o"></i> Add Service Type</a></li>
                		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/servicetype_list"><i class="fa fa-circle-o"></i>Service Type List</a></li>
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
            			<li><a target="_blank" href="<?php echo base_url();?>Dashboard/userstatus_insert_form"><i class="fa fa-circle-o"></i> Add User Status</a></li>
                		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/userstatus_list"><i class="fa fa-circle-o"></i>User Status List</a></li>
            		</ul>
        		</li>
                <li class="treeview">
        			<a href="#">
            			<i class="fa fa-id-card" aria-hidden="true"></i> <span>User Access</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			<li><a target="_blank" href="<?php echo base_url();?>Dashboard/useraccess_insert_form"><i class="fa fa-circle-o"></i> Add User Access</a></li>
                		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/useraccess_update_form"><i class="fa fa-circle-o"></i>User Access Update</a></li>
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
            			<li><a target="_blank" href="<?php echo base_url();?>Dashboard/user_insert_form"><i class="fa fa-circle-o"></i> Add User Info</a></li>
                		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/user_import_excel"><i class="fa fa-circle-o"></i> Add From Excel</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/user_cv_form"><i class="fa fa-circle-o"></i> Add User CV</a></li>
                		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/user_list"><i class="fa fa-circle-o"></i> User List</a></li>
            		</ul>
        		</li>
            </ul>
        </li>
        <?php
		}
		elseif($this->session->userdata('userid') && $this->session->userdata('basicinfo_read')==='1')
		{
			?>
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
            			
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/buyer_list"><i class="fa fa-circle-o"></i> Buyer List</a></li>
                        
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/country_list"><i class="fa fa-circle-o"></i> Country List</a></li>
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
            			
                		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/factory_list"><i class="fa fa-circle-o"></i> Factory List</a></li>
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
            			
                		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/division_list"><i class="fa fa-circle-o"></i> Division List</a></li>
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
            			
                		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/department_list"><i class="fa fa-circle-o"></i> Department List</a></li>
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
            			
                		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/section_list"><i class="fa fa-circle-o"></i> Section List</a></li>
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
            			
                		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/subsection_list"><i class="fa fa-circle-o"></i> Sub Section List</a></li>
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
            			
                		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/religion_list"><i class="fa fa-circle-o"></i> Religion List</a></li>
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
            			
                		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/gender_list"><i class="fa fa-circle-o"></i> Gender List</a></li>
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
            			
                		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/maritualstatus_list"><i class="fa fa-circle-o"></i> Maritual Status List</a></li>
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
            			
                		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/parentdesignation_list"><i class="fa fa-circle-o"></i> Parent Designation List</a></li>
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
            			
                		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/childdesignation_list"><i class="fa fa-circle-o"></i>Child Designation List</a></li>
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
            			
                		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/usertype_list"><i class="fa fa-circle-o"></i>User Type List</a></li>
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
            			
                		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/servicetype_list"><i class="fa fa-circle-o"></i>Service Type List</a></li>
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
            			
                		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/userstatus_list"><i class="fa fa-circle-o"></i>User Status List</a></li>
            		</ul>
        		</li>
                <li class="treeview">
        			<a href="#">
            			<i class="fa fa-id-card" aria-hidden="true"></i> <span>User Access</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			<li><a target="_blank" href="<?php echo base_url();?>Dashboard/useraccess_insert_form"><i class="fa fa-circle-o"></i> Add User Access</a></li>
                		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/useraccess_update_form"><i class="fa fa-circle-o"></i>User Access Update</a></li>
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
            			
                		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/user_list"><i class="fa fa-circle-o"></i> User List</a></li>
            		</ul>
        		</li>
            </ul>
        </li>
        <?php
		}
		
		elseif($this->session->userdata('userid') && $this->session->userdata('basicinfo_write')==='1')
		{
			?>
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
            			<li><a target="_blank" href="<?php echo base_url();?>Dashboard/buyer_insert_form"><i class="fa fa-circle-o"></i> Add Buyer Info</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/buyer_list"><i class="fa fa-circle-o"></i> Buyer List</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/country_insert_form"><i class="fa fa-circle-o"></i> Add Country Info</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/country_list"><i class="fa fa-circle-o"></i> Country List</a></li>
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
            			<li><a target="_blank" href="<?php echo base_url();?>Dashboard/factory_insert_form"><i class="fa fa-circle-o"></i> Add Factory Info</a></li>
                		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/factory_list"><i class="fa fa-circle-o"></i> Factory List</a></li>
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
            			<li><a target="_blank" href="<?php echo base_url();?>Dashboard/division_insert_form"><i class="fa fa-circle-o"></i> Add Division Info</a></li>
                		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/division_list"><i class="fa fa-circle-o"></i> Division List</a></li>
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
            			<li><a target="_blank" href="<?php echo base_url();?>Dashboard/department_insert_form"><i class="fa fa-circle-o"></i> Add Department Info</a></li>
                		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/department_list"><i class="fa fa-circle-o"></i> Department List</a></li>
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
            			<li><a target="_blank" href="<?php echo base_url();?>Dashboard/section_insert_form"><i class="fa fa-circle-o"></i> Add Section Info</a></li>
                		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/section_list"><i class="fa fa-circle-o"></i> Section List</a></li>
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
            			<li><a target="_blank" href="<?php echo base_url();?>Dashboard/subsection_insert_form"><i class="fa fa-circle-o"></i> Add Sub Section Info</a></li>
                		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/subsection_list"><i class="fa fa-circle-o"></i> Sub Section List</a></li>
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
            			<li><a target="_blank" href="<?php echo base_url();?>Dashboard/religion_insert_form"><i class="fa fa-circle-o"></i> Add Religion Info</a></li>
                		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/religion_list"><i class="fa fa-circle-o"></i> Religion List</a></li>
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
            			<li><a target="_blank" href="<?php echo base_url();?>Dashboard/gender_insert_form"><i class="fa fa-circle-o"></i> Add Gender Info</a></li>
                		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/gender_list"><i class="fa fa-circle-o"></i> Gender List</a></li>
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
            			<li><a target="_blank" href="<?php echo base_url();?>Dashboard/maritualstatus_insert_form"><i class="fa fa-circle-o"></i> Add Maritual Status</a></li>
                		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/maritualstatus_list"><i class="fa fa-circle-o"></i> Maritual Status List</a></li>
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
            			<li><a target="_blank" href="<?php echo base_url();?>Dashboard/parentdesignation_insert_form"><i class="fa fa-circle-o"></i> Add Parent Designation</a></li>
                		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/parentdesignation_list"><i class="fa fa-circle-o"></i> Parent Designation List</a></li>
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
            			<li><a target="_blank" href="<?php echo base_url();?>Dashboard/childdesignation_insert_form"><i class="fa fa-circle-o"></i> Add Child Designation</a></li>
                		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/childdesignation_list"><i class="fa fa-circle-o"></i>Child Designation List</a></li>
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
            			<li><a target="_blank" href="<?php echo base_url();?>Dashboard/usertype_insert_form"><i class="fa fa-circle-o"></i> Add User Type</a></li>
                		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/usertype_list"><i class="fa fa-circle-o"></i>User Type List</a></li>
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
            			<li><a target="_blank" href="<?php echo base_url();?>Dashboard/servicetype_insert_form"><i class="fa fa-circle-o"></i> Add Service Type</a></li>
                		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/servicetype_list"><i class="fa fa-circle-o"></i>Service Type List</a></li>
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
            			<li><a target="_blank" href="<?php echo base_url();?>Dashboard/userstatus_insert_form"><i class="fa fa-circle-o"></i> Add User Status</a></li>
                		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/userstatus_list"><i class="fa fa-circle-o"></i>User Status List</a></li>
            		</ul>
        		</li>
                <li class="treeview">
        			<a href="#">
            			<i class="fa fa-id-card" aria-hidden="true"></i> <span>User Access</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			<li><a target="_blank" href="<?php echo base_url();?>Dashboard/useraccess_insert_form"><i class="fa fa-circle-o"></i> Add User Access</a></li>
                		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/useraccess_list"><i class="fa fa-circle-o"></i>User Access List</a></li>
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
            			<li><a target="_blank" href="<?php echo base_url();?>Dashboard/user_insert_form"><i class="fa fa-circle-o"></i> Add User Info</a></li>
                		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/user_import_excel"><i class="fa fa-circle-o"></i> Add From Excel</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/user_cv_form"><i class="fa fa-circle-o"></i> Add User CV</a></li>
                		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/user_list"><i class="fa fa-circle-o"></i> User List</a></li>
            		</ul>
        		</li>
            </ul>
        </li>
        <?php
		}
		?>
        
        
        
        
        
        															<!--TASK TRACKER-->
        
        
        
        
     	<?php if($this->session->userdata('userid') && $this->session->userdata('tasktracker_read')==='1' && $this->session->userdata('tasktracker_write')==='1')
		{?>
        <li class="treeview">
        	<a href="#">
            	<i class="fa fa-tasks" aria-hidden="true"></i><span>Task Tracker</span>
            	<span class="pull-right-container">
              		<i class="fa fa-angle-left pull-right"></i>
            	</span>
          	</a>
          	<ul class="treeview-menu">
            	<li><a target="_blank" href="<?php echo base_url();?>Dashboard/createtask_insert_form"><i class="fa fa-circle-o"></i> Add Group Task Tracker Info</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/screatetask_insert_form"><i class="fa fa-circle-o"></i> Add Single Task Tracker Info</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/task_list"><i class="fa fa-circle-o"></i>Total Task List</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/user_task_list"><i class="fa fa-circle-o"></i>User Task List</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/user_task_complete_form"><i class="fa fa-circle-o"></i>User Wise Report</a></li>
                
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/date_wise_total_completed_task_list_form"><i class="fa fa-circle-o"></i>Date Wise Completed Task</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/completed_task_list"><i class="fa fa-circle-o"></i>Completed Task List</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/tasktype_insert_form"><i class="fa fa-circle-o"></i>Task Type</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/tasktype_list"><i class="fa fa-circle-o"></i>Task Type List</a></li>
            </ul>
        </li>
        <?php
		}
		elseif($this->session->userdata('userid') && $this->session->userdata('tasktracker_read')==='1')
		{
		?>
        <li class="treeview">
        	<a href="#">
            	<i class="fa fa-tasks" aria-hidden="true"></i><span>Task Tracker</span>
            	<span class="pull-right-container">
              		<i class="fa fa-angle-left pull-right"></i>
            	</span>
          	</a>
          	<ul class="treeview-menu">
            	<?php /*?><li><a href="<?php echo base_url();?>Dashboard/createtask_insert_form"><i class="fa fa-circle-o"></i> Add Task Tracker Info</a></li><?php */?>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/task_list"><i class="fa fa-circle-o"></i>Total Task List</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/user_task_list"><i class="fa fa-circle-o"></i>User Task List</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/user_task_complete_form"><i class="fa fa-circle-o"></i>User Wise Report</a></li>
                
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/date_wise_total_completed_task_list_form"><i class="fa fa-circle-o"></i>Date Wise Completed Task</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/completed_task_list"><i class="fa fa-circle-o"></i>Completed Task List</a></li>
                <?php /*?><li><a href="<?php echo base_url();?>Dashboard/tasktype_insert_form"><i class="fa fa-circle-o"></i>Task Type</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/tasktype_list"><i class="fa fa-circle-o"></i>Task Type List</a></li><?php */?>
            </ul>
        </li>
        <?php
		}
		elseif($this->session->userdata('userid') && $this->session->userdata('tasktracker_write')==='1')
		{
		?>
        <li class="treeview">
        	<a href="#">
            	<i class="fa fa-tasks" aria-hidden="true"></i><span>Task Tracker</span>
            	<span class="pull-right-container">
              		<i class="fa fa-angle-left pull-right"></i>
            	</span>
          	</a>
          	<ul class="treeview-menu">
            	<?php /*?><li><a href="<?php echo base_url();?>Dashboard/createtask_insert_form"><i class="fa fa-circle-o"></i> Add Task Tracker Info</a></li><?php */?>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/task_list"><i class="fa fa-circle-o"></i>Total Task List</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/user_task_list"><i class="fa fa-circle-o"></i>User Task List</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/user_task_complete_form"><i class="fa fa-circle-o"></i>User Wise Report</a></li>
                
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/date_wise_total_completed_task_list_form"><i class="fa fa-circle-o"></i>Date Wise Completed Task</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/completed_task_list"><i class="fa fa-circle-o"></i>Completed Task List</a></li>
                <?php /*?><li><a href="<?php echo base_url();?>Dashboard/tasktype_insert_form"><i class="fa fa-circle-o"></i>Task Type</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/tasktype_list"><i class="fa fa-circle-o"></i>Task Type List</a></li><?php */?>
            </ul>
        </li>
        <?php
		}
		?>
        
        															<!--LICENSE TRACKER-->
        
        
        <?php
         if($this->session->userdata('userid') && $this->session->userdata('licensetracker_read')==='1' && $this->session->userdata('licensetracker_write')==='1')
		{?>
        <li class="treeview">
        	<a href="#">
            	<i class="fa fa-id-card" aria-hidden="true"></i><span>License/Certificate Tracker</span>
            	<span class="pull-right-container">
              		<i class="fa fa-angle-left pull-right"></i>
            	</span>
          	</a>
          	<ul class="treeview-menu">
            	<li><a target="_blank" href="<?php echo base_url();?>Dashboard/license_insert_form"><i class="fa fa-circle-o"></i> Add License Info</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/license_list"><i class="fa fa-circle-o"></i>License List</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/licensetype_insert_form"><i class="fa fa-circle-o"></i>License Type</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/licensetype_list"><i class="fa fa-circle-o"></i>License Type List</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/licensename_insert_form"><i class="fa fa-circle-o"></i>Add License Name</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/licensename_list"><i class="fa fa-circle-o"></i>License Name List</a></li>
            </ul>
        </li>
        <?php
		}
		elseif($this->session->userdata('userid') && $this->session->userdata('licensetracker_read')==='1')
		{?>
        <li class="treeview">
        	<a href="#">
            	<i class="fa fa-id-card" aria-hidden="true"></i><span>License/Certificate Tracker</span>
            	<span class="pull-right-container">
              		<i class="fa fa-angle-left pull-right"></i>
            	</span>
          	</a>
          	<ul class="treeview-menu">
            	
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/license_list"><i class="fa fa-circle-o"></i>License List</a></li>
                
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/licensetype_list"><i class="fa fa-circle-o"></i>License Type List</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/licensename_list"><i class="fa fa-circle-o"></i>License Name List</a></li>
            </ul>
        </li>
        
        <?php
		}
		elseif($this->session->userdata('userid') && $this->session->userdata('licensetracker_write')==='1')
		{?>
        <li class="treeview">
        	<a href="#">
            	<i class="fa fa-id-card" aria-hidden="true"></i><span>License/Certificate Tracker</span>
            	<span class="pull-right-container">
              		<i class="fa fa-angle-left pull-right"></i>
            	</span>
          	</a>
          	<ul class="treeview-menu">
            	<li><a target="_blank" href="<?php echo base_url();?>Dashboard/license_insert_form"><i class="fa fa-circle-o"></i> Add License Info</a></li>
                
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/licensetype_insert_form"><i class="fa fa-circle-o"></i>License Type</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/licensename_insert_form"><i class="fa fa-circle-o"></i>Add License Name</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/licensename_list"><i class="fa fa-circle-o"></i>License Name List</a></li>
            </ul>
        </li>
        <?php 
		}
		?>
        
        														<!--NOTICE ALBUM-->
                                                                
        <?php
         if($this->session->userdata('userid') && $this->session->userdata('noticealbum_read')==='1' && $this->session->userdata('noticealbum_write')==='1')
		{?>                                                        
        
        <li class="treeview">
        	<a href="#">
            	<i class="fa fa-music" aria-hidden="true"></i><span>Notice Album</span>
            	<span class="pull-right-container">
              		<i class="fa fa-angle-left pull-right"></i>
            	</span>
          	</a>
          	<ul class="treeview-menu">
            	
                
            	<li><a target="_blank" href="<?php echo base_url();?>Dashboard/notice_album_form"><i class="fa fa-circle-o"></i>Add Notice Album</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/notice_list"><i class="fa fa-circle-o"></i>Notice Album list</a></li>
                
            </ul>
        </li>
        <?php
		}
		elseif($this->session->userdata('userid') && $this->session->userdata('noticealbum_read')==='1')
		{
			?>
         <li class="treeview">
        	<a href="#">
            	<i class="fa fa-music" aria-hidden="true"></i><span>Notice Album</span>
            	<span class="pull-right-container">
              		<i class="fa fa-angle-left pull-right"></i>
            	</span>
          	</a>
          	<ul class="treeview-menu">
            	
                
            	<li><a target="_blank" href="<?php echo base_url();?>Dashboard/notice_list"><i class="fa fa-circle-o"></i>Notice Album list</a></li>
                
                
            </ul>
        </li>
        <?php
		}
		elseif($this->session->userdata('userid') && $this->session->userdata('noticealbum_write')==='1')
		{
			?>
             <li class="treeview">
        	<a href="#">
            	<i class="fa fa-music" aria-hidden="true"></i><span>Notice Album</span>
            	<span class="pull-right-container">
              		<i class="fa fa-angle-left pull-right"></i>
            	</span>
          	</a>
          	<ul class="treeview-menu">
            	
                
            	<li><a target="_blank" href="<?php echo base_url();?>Dashboard/notice_album_form"><i class="fa fa-circle-o"></i>Add Notice Album</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/notice_list"><i class="fa fa-circle-o"></i>Notice Album list</a></li>
                
            </ul>
        </li>
        <?php
		}
		?>
        
        
        													<!--POLICY ALBUM-->
        
         <?php
         if($this->session->userdata('userid') && $this->session->userdata('policyalbum_read')==='1' && $this->session->userdata('policyalbum_write')==='1')
		{?>    
        <li class="treeview">
        	<a href="#">
            	<i class="fa fa-music" aria-hidden="true"></i><span>Policy Album</span>
            	<span class="pull-right-container">
              		<i class="fa fa-angle-left pull-right"></i>
            	</span>
          	</a>
          	<ul class="treeview-menu">
            	
                
            	
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/policy_album_form"><i class="fa fa-circle-o"></i>Add Policy Album</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/policy_list"><i class="fa fa-circle-o"></i>Policy Album list</a></li>
               	<li><a target="_blank" href="<?php echo base_url();?>Dashboard/policy_type_form"><i class="fa fa-circle-o"></i>Add Policy Type</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/policy_type_list"><i class="fa fa-circle-o"></i>Policy Type list</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/policy_class_form"><i class="fa fa-circle-o"></i>Add Policy Class</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/policy_class_list"><i class="fa fa-circle-o"></i>Policy Class list</a></li>
            </ul>
        </li>
        <?php
		}
		 elseif($this->session->userdata('userid') && $this->session->userdata('policyalbum_read')==='1')
		{
		?>
        <li class="treeview">
        	<a href="#">
            	<i class="fa fa-music" aria-hidden="true"></i><span>Policy Album</span>
            	<span class="pull-right-container">
              		<i class="fa fa-angle-left pull-right"></i>
            	</span>
          	</a>
          	<ul class="treeview-menu">
            	
                
            	
                
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/policy_list"><i class="fa fa-circle-o"></i>Policy Album list</a></li>
               	<li><a target="_blank" href="<?php echo base_url();?>Dashboard/policy_type_list"><i class="fa fa-circle-o"></i>Policy Type list</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/policy_class_list"><i class="fa fa-circle-o"></i>Policy Class list</a></li>
            </ul>
        </li>
        <?php
		}
		elseif($this->session->userdata('userid') && $this->session->userdata('policyalbum_write')==='1')
		{
		?>
        <li class="treeview">
        	<a href="#">
            	<i class="fa fa-music" aria-hidden="true"></i><span>Policy Album</span>
            	<span class="pull-right-container">
              		<i class="fa fa-angle-left pull-right"></i>
            	</span>
          	</a>
          	<ul class="treeview-menu">
            	
                
            	
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/policy_album_form"><i class="fa fa-circle-o"></i>Add Policy Album</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/policy_list"><i class="fa fa-circle-o"></i>Policy Album list</a></li>
               	<li><a target="_blank" href="<?php echo base_url();?>Dashboard/policy_type_form"><i class="fa fa-circle-o"></i>Add Policy Type</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/policy_type_list"><i class="fa fa-circle-o"></i>Policy Type list</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/policy_class_form"><i class="fa fa-circle-o"></i>Add Policy Class</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/policy_class_list"><i class="fa fa-circle-o"></i>Policy Class list</a></li>
            </ul>
        </li>
        <?php
		}
		?>
        
       															 <!--EVENT ALBUM-->
        
        <?php
         if($this->session->userdata('userid') && $this->session->userdata('eventalbum_read')==='1' && $this->session->userdata('eventalbum_write')==='1')
		{?>    
        <li class="treeview">
        	<a href="#">
            	<i class="fa fa-music" aria-hidden="true"></i><span>Event Album</span>
            	<span class="pull-right-container">
              		<i class="fa fa-angle-left pull-right"></i>
            	</span>
          	</a>
          	<ul class="treeview-menu">
            	
                
            	
               	<li><a target="_blank" href="<?php echo base_url();?>Dashboard/event_album_form"><i class="fa fa-circle-o"></i>Add Event</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/event_list"><i class="fa fa-circle-o"></i>Event List</a></li>
            </ul>
        </li>
        <?php
		}
		elseif($this->session->userdata('userid') && $this->session->userdata('eventalbum_read')==='1')
		{
		?>
        <li class="treeview">
        	<a href="#">
            	<i class="fa fa-music" aria-hidden="true"></i><span>Event Album</span>
            	<span class="pull-right-container">
              		<i class="fa fa-angle-left pull-right"></i>
            	</span>
          	</a>
          	<ul class="treeview-menu">
            	
                
            	
               	<li><a target="_blank" href="<?php echo base_url();?>Dashboard/event_album_form"><i class="fa fa-circle-o"></i>Add Event</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/event_list"><i class="fa fa-circle-o"></i>Event List</a></li>
            </ul>
        </li>
        <?php
		}
		elseif($this->session->userdata('userid') && $this->session->userdata('eventalbum_write')==='1')
		{
		?>
        <li class="treeview">
        	<a href="#">
            	<i class="fa fa-music" aria-hidden="true"></i><span>Event Album</span>
            	<span class="pull-right-container">
              		<i class="fa fa-angle-left pull-right"></i>
            	</span>
          	</a>
          	<ul class="treeview-menu">
            	
                
            	
               	<li><a target="_blank" href="<?php echo base_url();?>Dashboard/event_album_form"><i class="fa fa-circle-o"></i>Add Event</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/event_list"><i class="fa fa-circle-o"></i>Event List</a></li>
            </ul>
        </li>
        <?php
		}
		?>
        
        													<!--TRAINING MANAGEMENT-->
        
        
        <?php
         if($this->session->userdata('userid') && $this->session->userdata('training_read')==='1' && $this->session->userdata('training_write')==='1')
		{?>   
        <li class="treeview">
        	<a href="#">
            	<i class="fa fa-graduation-cap" aria-hidden="true"></i><span>Training Managment</span>
            	<span class="pull-right-container">
              		<i class="fa fa-angle-left pull-right"></i>
            	</span>
          	</a>
          	<ul class="treeview-menu">
            	
                
            	<li><a target="_blank" href="<?php echo base_url();?>Dashboard/training_material_form"><i class="fa fa-circle-o"></i>Add Training Mterial</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/trainingmaterial_list"><i class="fa fa-circle-o"></i>Training Material list</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/trainingtype_insert_form"><i class="fa fa-circle-o"></i>Training Type</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/trainingtype_list"><i class="fa fa-circle-o"></i>Training Type List</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/trainingcategory_insert_form"><i class="fa fa-circle-o"></i>Training Category</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/trainingcategory_list"><i class="fa fa-circle-o"></i>Training category List</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/trainingscope_insert_form"><i class="fa fa-circle-o"></i>Training Scope</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/trainingscope_list"><i class="fa fa-circle-o"></i>Training Scope List</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/traininggroup_insert_form"><i class="fa fa-circle-o"></i>Training Group</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/traininggroup_list"><i class="fa fa-circle-o"></i>Training Group List</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/trainingtopic_insert_form"><i class="fa fa-circle-o"></i>Training Attendance</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/trainingtopic_list"><i class="fa fa-circle-o"></i>Training Attendace List</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/trainingtp_insert_form"><i class="fa fa-circle-o"></i>Add Topic</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/trainingtp_list"><i class="fa fa-circle-o"></i>Topic List</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/resourcep_insert_form"><i class="fa fa-circle-o"></i>Add Resource Person</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/resourcep_list"><i class="fa fa-circle-o"></i>Resource Person List</a></li>
            </ul>
        </li>
        <?php
		}
		elseif($this->session->userdata('userid') && $this->session->userdata('training_read')==='1')
		{
		?>
        <li class="treeview">
        	<a href="#">
            	<i class="fa fa-graduation-cap" aria-hidden="true"></i><span>Training Managment</span>
            	<span class="pull-right-container">
              		<i class="fa fa-angle-left pull-right"></i>
            	</span>
          	</a>
          	<ul class="treeview-menu">
            	
                
            	<?php /*?><li><a href="<?php echo base_url();?>Dashboard/training_material_form"><i class="fa fa-circle-o"></i>Add Training Mterial</a></li><?php */?>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/trainingmaterial_list"><i class="fa fa-circle-o"></i>Training Material list</a></li>
                <?php /*?><li><a href="<?php echo base_url();?>Dashboard/trainingtype_insert_form"><i class="fa fa-circle-o"></i>Training Type</a></li><?php */?>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/trainingtype_list"><i class="fa fa-circle-o"></i>Training Type List</a></li>
               <?php /*?> <li><a href="<?php echo base_url();?>Dashboard/trainingcategory_insert_form"><i class="fa fa-circle-o"></i>Training Category</a></li><?php */?>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/trainingcategory_list"><i class="fa fa-circle-o"></i>Training category List</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/resourcep_list"><i class="fa fa-circle-o"></i>Resource Person List</a></li>
            </ul>
        </li>
        <?php
		}
		elseif($this->session->userdata('userid') && $this->session->userdata('training_write')==='1')
		{
		?>
        <li class="treeview">
        	<a href="#">
            	<i class="fa fa-graduation-cap" aria-hidden="true"></i><span>Training Managment</span>
            	<span class="pull-right-container">
              		<i class="fa fa-angle-left pull-right"></i>
            	</span>
          	</a>
          	<ul class="treeview-menu">
            	
                
            	<li><a target="_blank" href="<?php echo base_url();?>Dashboard/training_material_form"><i class="fa fa-circle-o"></i>Add Training Mterial</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/trainingmaterial_list"><i class="fa fa-circle-o"></i>Training Material list</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/trainingtype_insert_form"><i class="fa fa-circle-o"></i>Training Type</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/trainingtype_list"><i class="fa fa-circle-o"></i>Training Type List</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/trainingcategory_insert_form"><i class="fa fa-circle-o"></i>Training Category</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/trainingcategory_list"><i class="fa fa-circle-o"></i>Training category List</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/resourcep_insert_form"><i class="fa fa-circle-o"></i>Add Resource Person</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/resourcep_list"><i class="fa fa-circle-o"></i>Resource Person List</a></li>
            </ul>
        </li>
        <?php
		}
		?>
        
        															<!--SWOT-->
        
        <?php
         if($this->session->userdata('userid') && $this->session->userdata('swot_read')==='1' && $this->session->userdata('swot_write')==='1')
		{?>   
        <li class="treeview">
        	<a href="#">
            	<i class="fa fa-cogs" aria-hidden="true"></i><span>SWOT</span>
            	<span class="pull-right-container">
              		<i class="fa fa-angle-left pull-right"></i>
            	</span>
          	</a>
          	<ul class="treeview-menu">
            	
                
            	<li><a target="_blank" href="<?php echo base_url();?>Dashboard/swot_insert_form"><i class="fa fa-circle-o"></i>Add SWOT Info</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/swot_pending_list"><i class="fa fa-circle-o"></i>SWOT Pending List</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/user_swot_form"><i class="fa fa-circle-o"></i>User Swot List</a></li>
                
            </ul>
        </li>
        <?php
		}
		elseif($this->session->userdata('userid') && $this->session->userdata('swot_read')==='1')
		{?>   
        <li class="treeview">
        	<a href="#">
            	<i class="fa fa-cogs" aria-hidden="true"></i><span>SWOT</span>
            	<span class="pull-right-container">
              		<i class="fa fa-angle-left pull-right"></i>
            	</span>
          	</a>
          	<ul class="treeview-menu">
            	
                
            	<?php /*?><li><a href="<?php echo base_url();?>Dashboard/swot_insert_form"><i class="fa fa-circle-o"></i>Add SWOT Info</a></li><?php */?>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/swot_pending_list"><i class="fa fa-circle-o"></i>SWOT Pending List</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/user_swot_form"><i class="fa fa-circle-o"></i>User Swot List</a></li>
                
            </ul>
        </li>
        <?php
		}
		elseif($this->session->userdata('userid') && $this->session->userdata('swot_write')==='1')
		{?>   
        <li class="treeview">
        	<a href="#">
            	<i class="fa fa-cogs" aria-hidden="true"></i><span>SWOT</span>
            	<span class="pull-right-container">
              		<i class="fa fa-angle-left pull-right"></i>
            	</span>
          	</a>
          	<ul class="treeview-menu">
            	
                
            	<li><a target="_blank" href="<?php echo base_url();?>Dashboard/swot_insert_form"><i class="fa fa-circle-o"></i>Add SWOT Info</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/swot_pending_list"><i class="fa fa-circle-o"></i>SWOT Pending List</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/user_swot_form"><i class="fa fa-circle-o"></i>User Swot List</a></li>
                
            </ul>
        </li>
        <?php
		}
		?>
<?php /*?>        <?php
         if($this->session->userdata('userid') && $this->session->userdata('eobservation_read')==='1' && $this->session->userdata('eobservation_write')==='1')
		{?> 
        <li class="treeview">
        	<a href="#">
            	<i class="fa fa-file" aria-hidden="true"></i><span>Employee Observation</span>
            	<span class="pull-right-container">
              		<i class="fa fa-angle-left pull-right"></i>
            	</span>
          	</a>
          	<ul class="treeview-menu">
            	
                
            	<li><a target="_blank" href="<?php echo base_url();?>Dashboard/eobservation_insert_form"><i class="fa fa-circle-o"></i>Add Observation Info</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/eobservation_pending_list"><i class="fa fa-circle-o"></i>Observation Pending List</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/euser_observation_form"><i class="fa fa-circle-o"></i>User Observation List</a></li>
                
                
            </ul>
        </li>
        <?php
		}
		elseif($this->session->userdata('userid') && $this->session->userdata('eobservation_read')==='1')
		{?> 
        <li class="treeview">
        	<a href="#">
            	<i class="fa fa-file" aria-hidden="true"></i><span>Employee Observation</span>
            	<span class="pull-right-container">
              		<i class="fa fa-angle-left pull-right"></i>
            	</span>
          	</a>
          	<ul class="treeview-menu">
            	
                
            	
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/eobservation_pending_list"><i class="fa fa-circle-o"></i>Observation Pending List</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/euser_observation_form"><i class="fa fa-circle-o"></i>User Observation List</a></li>
                
            </ul>
        </li>
        <?php
		}
		elseif($this->session->userdata('userid') && $this->session->userdata('eobservation_write')==='1')
		{?> 
        <li class="treeview">
        	<a href="#">
            	<i class="fa fa-file" aria-hidden="true"></i><span>Employee Observation</span>
            	<span class="pull-right-container">
              		<i class="fa fa-angle-left pull-right"></i>
            	</span>
          	</a>
          	<ul class="treeview-menu">
            	
                
            	<li><a target="_blank" href="<?php echo base_url();?>Dashboard/eobservation_insert_form"><i class="fa fa-circle-o"></i>Add Observation Info</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/eobservation_pending_list"><i class="fa fa-circle-o"></i>Observation Pending List</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/euser_observation_form"><i class="fa fa-circle-o"></i>User Observation List</a></li>
                
            </ul>
        </li>
        <?php
		}
		?><?php */?>
        
        														
                                                                <!--MATERIAL MOVEMENT-->
        
        
		<?php
         if($this->session->userdata('userid') && $this->session->userdata('materialmovement_read')==='1' && $this->session->userdata('materialmovement_write')==='1')
		{?> 
        <li class="treeview">
        	<a href="#">
            	<i class="fa fa-truck" aria-hidden="true"></i><span>Material Movement</span>
            	<span class="pull-right-container">
              		<i class="fa fa-angle-left pull-right"></i>
            	</span>
          	</a>
          	<ul class="treeview-menu">
            	
                
            	<?php /*?><li><a target="_blank" href="<?php echo base_url();?>Dashboard/challan_create_form"><i class="fa fa-circle-o"></i>Challan Create</a></li><?php */?>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/challanm_create_form"><i class="fa fa-circle-o"></i>Challan Create</a></li>
                
               <?php /*?> <li><a target="_blank" href="<?php echo base_url();?>Dashboard/date_wise_challan_list_form"><i class="fa fa-circle-o"></i>Challan List</a></li><?php */?>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/date_wise_challanm_list_form"><i class="fa fa-circle-o"></i>Challan List</a></li>
                <?php /*?><li><a target="_blank" href="<?php echo base_url();?>Dashboard/challan_back_create_form"><i class="fa fa-circle-o"></i>Challan Back</a></li><?php */?>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/challanm_back_create_form"><i class="fa fa-circle-o"></i>Challan Back</a></li>
                <?php /*?><li><a target="_blank" href="<?php echo base_url();?>Dashboard/date_wise_back_challan_list_form"><i class="fa fa-circle-o"></i> Challan Back List</a></li><?php */?>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/date_wise_back_challanm_list_form"><i class="fa fa-circle-o"></i> Challan Back List</a></li>
                <?php /*?><li><a target="_blank" href="<?php echo base_url();?>Dashboard/date_wise_back_challan_summary_form"><i class="fa fa-circle-o"></i> Challan Back Summary</a></li><?php */?>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/date_wise_back_challanm_summary_form"><i class="fa fa-circle-o"></i> Challan Back Summary</a></li>
                <?php /*?><li><a target="_blank" href="<?php echo base_url();?>Dashboard/date_wise_return_challan_list_form"><i class="fa fa-circle-o"></i>Return Challan List</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/challan_return_create_form"><i class="fa fa-circle-o"></i>Challan Return</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/challan_transfer_create_form"><i class="fa fa-circle-o"></i>Challan Transfer</a></li><?php */?>
                <?php /*?><li><a target="_blank" href="<?php echo base_url();?>Dashboard/challanr_create_form"><i class="fa fa-circle-o"></i>Challan Reconciliation </a></li><?php */?>
                
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/productunit_insert_form"><i class="fa fa-circle-o"></i>Add Product Unit</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/productunit_list"><i class="fa fa-circle-o"></i>Product Unit List</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/producttype_insert_form"><i class="fa fa-circle-o"></i>Add Product Type</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/producttype_list"><i class="fa fa-circle-o"></i>Product Type List</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/challantype_insert_form"><i class="fa fa-circle-o"></i>Add Challan Type</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/challantype_list"><i class="fa fa-circle-o"></i>Challan Type List</a></li>
            </ul>
        </li>
        <?php
		}
		elseif($this->session->userdata('userid') && $this->session->userdata('materialmovement_read')==='1')
		{?> 
        <li class="treeview">
        	<a href="#">
            	<i class="fa fa-truck" aria-hidden="true"></i><span>Material Movement</span>
            	<span class="pull-right-container">
              		<i class="fa fa-angle-left pull-right"></i>
            	</span>
          	</a>
          	<ul class="treeview-menu">
            	
                
            	<?php /*?><li><a href="<?php echo base_url();?>Dashboard/challan_create_form"><i class="fa fa-circle-o"></i>Challan Create</a></li><?php */?>
                
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/date_wise_challan_list_form"><i class="fa fa-circle-o"></i>Challan List</a></li>
               <?php /*?> <li><a href="<?php echo base_url();?>Dashboard/productunit_insert_form"><i class="fa fa-circle-o"></i>Add Product Unit</a></li><?php */?>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/productunit_list"><i class="fa fa-circle-o"></i>Product Unit List</a></li>
                <?php /*?><li><a href="<?php echo base_url();?>Dashboard/producttype_insert_form"><i class="fa fa-circle-o"></i>Add Product Type</a></li><?php */?>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/producttype_list"><i class="fa fa-circle-o"></i>Product Type List</a></li>
            </ul>
        </li>
        <?php
		}
		elseif($this->session->userdata('userid') && $this->session->userdata('materialmovement_write')==='1')
		{?> 
        <li class="treeview">
        	<a href="#">
            	<i class="fa fa-truck" aria-hidden="true"></i><span>Material Movement</span>
            	<span class="pull-right-container">
              		<i class="fa fa-angle-left pull-right"></i>
            	</span>
          	</a>
          	<ul class="treeview-menu">
            	
                
            	<li><a target="_blank" href="<?php echo base_url();?>Dashboard/challan_create_form"><i class="fa fa-circle-o"></i>Challan Create</a></li>
                
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/date_wise_challan_list_form"><i class="fa fa-circle-o"></i>Challan List</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/productunit_insert_form"><i class="fa fa-circle-o"></i>Add Product Unit</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/productunit_list"><i class="fa fa-circle-o"></i>Product Unit List</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/producttype_insert_form"><i class="fa fa-circle-o"></i>Add Product Type</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/producttype_list"><i class="fa fa-circle-o"></i>Product Type List</a></li>
            </ul>
        </li>
        <?php
		}
		elseif($this->session->userdata('userid') && $this->session->userdata('materialmovement_allunit_read')==='1')
		{?> 
        <li class="treeview">
        	<a href="#">
            	<i class="fa fa-truck" aria-hidden="true"></i><span>Material Movement</span>
            	<span class="pull-right-container">
              		<i class="fa fa-angle-left pull-right"></i>
            	</span>
          	</a>
          	<ul class="treeview-menu">
            	
                
            	<?php /*?><li><a href="<?php echo base_url();?>Dashboard/challan_create_form"><i class="fa fa-circle-o"></i>Challan Create</a></li><?php */?>
                
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/date_wise_allunit_challanm_list_form"><i class="fa fa-circle-o"></i>Challan List</a></li>
                <?php /*?><li><a href="<?php echo base_url();?>Dashboard/productunit_insert_form"><i class="fa fa-circle-o"></i>Add Product Unit</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/productunit_list"><i class="fa fa-circle-o"></i>Product Unit List</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/producttype_insert_form"><i class="fa fa-circle-o"></i>Add Product Type</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/producttype_list"><i class="fa fa-circle-o"></i>Product Type List</a></li><?php */?>
            </ul>
        </li>
        <?php
		}
		elseif($this->session->userdata('userid') && $this->session->userdata('materialmovement_challan_create')==='1')
		{?> 
        <li class="treeview">
        	<a href="#">
            	<i class="fa fa-truck" aria-hidden="true"></i><span>Material Movement</span>
            	<span class="pull-right-container">
              		<i class="fa fa-angle-left pull-right"></i>
            	</span>
          	</a>
          	<ul class="treeview-menu">
            	
                
            	<li><a target="_blank" href="<?php echo base_url();?>Dashboard/challanm_create_form"><i class="fa fa-circle-o"></i>Challan Create</a></li>
                
               <?php /*?> <li><a target="_blank" href="<?php echo base_url();?>Dashboard/date_wise_challan_list_form"><i class="fa fa-circle-o"></i>Challan List</a></li><?php */?>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/date_wise_challanm_list_form"><i class="fa fa-circle-o"></i>Challan List</a></li>
                <?php /*?><li><a target="_blank" href="<?php echo base_url();?>Dashboard/challan_back_create_form"><i class="fa fa-circle-o"></i>Challan Back</a></li><?php */?>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/challanm_back_create_form"><i class="fa fa-circle-o"></i>Challan Back</a></li>
                <?php /*?><li><a target="_blank" href="<?php echo base_url();?>Dashboard/date_wise_back_challan_list_form"><i class="fa fa-circle-o"></i> Challan Back List</a></li><?php */?>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/date_wise_back_challanm_list_form"><i class="fa fa-circle-o"></i> Challan Back List</a></li>
                <?php /*?><li><a target="_blank" href="<?php echo base_url();?>Dashboard/date_wise_back_challan_summary_form"><i class="fa fa-circle-o"></i> Challan Back Summary</a></li><?php */?>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/date_wise_back_challanm_summary_form"><i class="fa fa-circle-o"></i> Challan Back Summary</a></li>
            </ul>
        </li>
        <?php
		}
		?>
        
        
        																	<!--HR-->
                                                        
                                                        
        <?php
         if($this->session->userdata('userid') && $this->session->userdata('hr_read')==='1' && $this->session->userdata('hr_write')==='1')
		{?> 
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
        <?php
		}
		
         elseif($this->session->userdata('userid') && $this->session->userdata('hr_read')==='1' )
		{?> 
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
        <?php
		}
		elseif($this->session->userdata('userid') && $this->session->userdata('hr_write')==='1' )
		{
		?>
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
		<?php
		}
		?>
        
        														<!--CALENDAR-->
        
        <?php
         if($this->session->userdata('userid') && $this->session->userdata('calendar_read')==='1' && $this->session->userdata('calendar_write')==='1')
		{?> 
         <li class="treeview">
        			<a href="#">
            			<i class="fa fa-calendar" aria-hidden="true"></i><span>Calendar</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			<li><a href="<?php echo base_url();?>Calendar/calendar"><i class="fa fa-circle-o"></i>Calendar</a></li>
                		
            		</ul>
        </li>
        <?php
		}
		elseif($this->session->userdata('userid') && $this->session->userdata('calendar_read')==='1')
		{?> 
         <li class="treeview">
        			<a href="#">
            			<i class="fa fa-calendar" aria-hidden="true"></i><span>Calendar</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			<li><a href="<?php echo base_url();?>Calendar/calendar"><i class="fa fa-circle-o"></i>Calendar</a></li>
                		
            		</ul>
        </li>
        <?php
		}
		elseif($this->session->userdata('userid') && $this->session->userdata('calendar_write')==='1')
		{?> 
         <li class="treeview">
        			<a href="#">
            			<i class="fa fa-calendar" aria-hidden="true"></i><span>Calendar</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			<li><a href="<?php echo base_url();?>Calendar/calendar"><i class="fa fa-circle-o"></i>Calendar</a></li>
                		
            		</ul>
        </li>
        <?php
		}
		?>
        
        														<!--Compliance Report-CAP-->
        
        
        <?php
         if($this->session->userdata('userid') && $this->session->userdata('compliancecap_read')==='1' && $this->session->userdata('compliancecap_write')==='1')
		{?> 
        <li class="treeview">
        	<a href="#">
            	<i class="fa fa-gavel" aria-hidden="true"></i><span>Compliance Management <br/>System</span>
            	<span class="pull-right-container">
              		<i class="fa fa-angle-left pull-right"></i>
            	</span>
          	</a>
          	<ul class="treeview-menu">
            	<li><a target="_blank" href="<?php echo base_url();?>Dashboard/auditrp_insert_form"><i class="fa fa-circle-o"></i> Add Responsible Person</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/auditrp_list"><i class="fa fa-circle-o"></i>Audit Responsible Person list</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/auditcompany_insert_form"><i class="fa fa-circle-o"></i> Add Company</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/auditcomapny_list"><i class="fa fa-circle-o"></i>Audit Company list</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/auditname_insert_form"><i class="fa fa-circle-o"></i> Add Audit Name</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/auditname_list"><i class="fa fa-circle-o"></i>Audit Name list</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/auditparty_insert_form"><i class="fa fa-circle-o"></i> Add Audit Party</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/auditparty_list"><i class="fa fa-circle-o"></i>Audit Party list</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/audittype_insert_form"><i class="fa fa-circle-o"></i> Add Audit Type</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/audittype_list"><i class="fa fa-circle-o"></i>Audit Type list</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/auditscope_insert_form"><i class="fa fa-circle-o"></i> Add Audit Scope</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/auditscope_list"><i class="fa fa-circle-o"></i>Audit Scope list</a></li>
            	<li><a target="_blank" href="<?php echo base_url();?>Dashboard/preaudit_insert_form"><i class="fa fa-circle-o"></i> Add Pre Audit Info</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/cap_insert_form"><i class="fa fa-circle-o"></i> Add Cap Info</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/capfile_insert_form"><i class="fa fa-circle-o"></i> Add Cap Report</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/cap_status_form"><i class="fa fa-circle-o"></i> Add Cap Status</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/cap_fullr_form"><i class="fa fa-circle-o"></i> Cap Report</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/chart_form"><i class="fa fa-circle-o"></i> Chart</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/currency_insert_form"><i class="fa fa-circle-o"></i> Add Currency</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/currency_list"><i class="fa fa-circle-o"></i>Currency list</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/complianceexp_insert_form"><i class="fa fa-circle-o"></i> Add Expense Info</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/date_wise_complianceexp_report_form"><i class="fa fa-circle-o"></i>Expense Info</a></li>
            </ul>
        </li>
        <?php
		}
		elseif($this->session->userdata('userid') && $this->session->userdata('compliancecap_read')==='1')
		{?> 
        <li class="treeview">
        	<a href="#">
            	<i class="fa fa-gavel" aria-hidden="true"></i><span>Compliance Management <br/>System</span>
            	<span class="pull-right-container">
              		<i class="fa fa-angle-left pull-right"></i>
            	</span>
          	</a>
          	<ul class="treeview-menu">
            	<?php /*?><li><a href="<?php echo base_url();?>Dashboard/auditparty_insert_form"><i class="fa fa-circle-o"></i> Add Audit Party</a></li><?php */?>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/auditparty_list"><i class="fa fa-circle-o"></i>Audit Party list</a></li>
                <?php /*?><li><a href="<?php echo base_url();?>Dashboard/audittype_insert_form"><i class="fa fa-circle-o"></i> Add Audit Type</a></li><?php */?>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/audittype_list"><i class="fa fa-circle-o"></i>Audit Type list</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/auditscope_insert_form"><i class="fa fa-circle-o"></i> Add Audit Scope</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/auditscope_list"><i class="fa fa-circle-o"></i>Audit Scope list</a></li>
            	<?php /*?><li><a href="<?php echo base_url();?>Dashboard/preaudit_insert_form"><i class="fa fa-circle-o"></i> Add Pre Audit Info</a></li><?php */?>
                <?php /*?><li><a href="<?php echo base_url();?>Dashboard/cap_insert_form"><i class="fa fa-circle-o"></i> Add Cap Info</a></li><?php */?>
                <?php /*?><li><a href="<?php echo base_url();?>Dashboard/capfile_insert_form"><i class="fa fa-circle-o"></i> Add Cap Report</a></li><?php */?>
                <?php /*?><li><a href="<?php echo base_url();?>Dashboard/cap_status_form"><i class="fa fa-circle-o"></i> Add Cap Status</a></li><?php */?>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/cap_fullr_form"><i class="fa fa-circle-o"></i> Cap Report</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/chart_form"><i class="fa fa-circle-o"></i> Chart</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/date_wise_complianceexp_report_form"><i class="fa fa-circle-o"></i>Expense Info</a></li>
            </ul>
        </li>
        <?php
		}
		elseif($this->session->userdata('userid') && $this->session->userdata('compliancecap_write')==='1')
		{?> 
        <li class="treeview">
        	<a href="#">
            	<i class="fa fa-gavel" aria-hidden="true"></i><span>Compliance Management <br/>System</span>
            	<span class="pull-right-container">
              		<i class="fa fa-angle-left pull-right"></i>
            	</span>
          	</a>
          	<ul class="treeview-menu">
            	<li><a target="_blank" href="<?php echo base_url();?>Dashboard/auditparty_insert_form"><i class="fa fa-circle-o"></i> Add Audit Party</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/auditparty_list"><i class="fa fa-circle-o"></i>Audit Party list</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/audittype_insert_form"><i class="fa fa-circle-o"></i> Add Audit Type</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/audittype_list"><i class="fa fa-circle-o"></i>Audit Type list</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/auditscope_insert_form"><i class="fa fa-circle-o"></i> Add Audit Scope</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/auditscope_list"><i class="fa fa-circle-o"></i>Audit Scope list</a></li>
            	<li><a target="_blank" href="<?php echo base_url();?>Dashboard/preaudit_insert_form"><i class="fa fa-circle-o"></i> Add Pre Audit Info</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/cap_insert_form"><i class="fa fa-circle-o"></i> Add Cap Info</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/capfile_insert_form"><i class="fa fa-circle-o"></i> Add Cap Report</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/cap_status_form"><i class="fa fa-circle-o"></i> Add Cap Status</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/cap_fullr_form"><i class="fa fa-circle-o"></i> Cap Report</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/chart_form"><i class="fa fa-circle-o"></i> Chart</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/complianceexp_insert_form"><i class="fa fa-circle-o"></i> Add Expense Info</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/date_wise_complianceexp_report_form"><i class="fa fa-circle-o"></i>Expense Info</a></li>
            </ul>
        </li>
        <?php
		}
		?>
        
        														<!--SCORE CARD-->
        
        <?php
         if($this->session->userdata('userid') && $this->session->userdata('scorecard_read')==='1' && $this->session->userdata('scorecard_write')==='1')
		{?> 
        <li class="treeview">
        			<a href="#">
            			<i class="fa fa-star" aria-hidden="true"></i><span>Score Card</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			<li><a target="_blank" href="<?php echo base_url();?>Dashboard/ssupervisor_list"><i class="fa fa-circle-o"></i>Add Info</a></li>
                		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/date_wise_totalsscorecard_form"><i class="fa fa-circle-o"></i>Date Wise Total SC</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/date_wise_totalsummarysscorecard_form"><i class="fa fa-circle-o"></i>Date Wise Total Summary SC</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/date_wise_individualsummarysscorecard_form"><i class="fa fa-circle-o"></i>Individual Summary SC</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/date_wise_individualssc_form"><i class="fa fa-circle-o"></i>Individual Sewing SC</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/year_wise_individualssc_form"><i class="fa fa-circle-o"></i>Yearly Individual Sewing SC</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/date_wise_ssc_update_form"><i class="fa fa-circle-o"></i>Date Wise Update SC</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/sscorecard_import_excel"><i class="fa fa-circle-o"></i> Add From Excel</a></li>
            		</ul>
        </li>
        <?php
		}
		elseif($this->session->userdata('userid') && $this->session->userdata('scorecard_read')==='1')
		{?> 
        <li class="treeview">
        			<a href="#">
            			<i class="fa fa-star" aria-hidden="true"></i><span>Score Card</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			<?php /*?><li><a href="<?php echo base_url();?>Dashboard/ssupervisor_list"><i class="fa fa-circle-o"></i>Add Info</a></li><?php */?>
                		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/date_wise_totalsscorecard_form"><i class="fa fa-circle-o"></i>Date Wise Total SC</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/date_wise_totalsummarysscorecard_form"><i class="fa fa-circle-o"></i>Date Wise Total Summary SC</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/date_wise_individualsummarysscorecard_form"><i class="fa fa-circle-o"></i>Individual Summary SC</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/year_wise_individualssc_form"><i class="fa fa-circle-o"></i>Yearly Individual Sewing SC</a></li>
            		</ul>
        </li>
        <?php
		}
		elseif($this->session->userdata('userid') && $this->session->userdata('scorecard_write')==='1')
		{?> 
        <li class="treeview">
        			<a href="#">
            			<i class="fa fa-star" aria-hidden="true"></i><span>Score Card</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			<li><a target="_blank" href="<?php echo base_url();?>Dashboard/ssupervisor_list"><i class="fa fa-circle-o"></i>Add Info</a></li>
                		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/date_wise_totalsscorecard_form"><i class="fa fa-circle-o"></i>Date Wise Total SC</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/date_wise_totalsummarysscorecard_form"><i class="fa fa-circle-o"></i>Date Wise Total Summary SC</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/date_wise_individualsummarysscorecard_form"><i class="fa fa-circle-o"></i>Individual Summary SC</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/sscorecard_import_excel"><i class="fa fa-circle-o"></i> Add From Excel</a></li>
            		</ul>
        </li>
        <?php
		}
		?>
        
        														<!--DISCIPLINARY ACTION-->
        
        
        <?php
         if($this->session->userdata('userid') && $this->session->userdata('dcaction_read')==='1' && $this->session->userdata('dcaction_write')==='1')
		{?> 
        <li class="treeview">
        			<a href="#">
            			<i class="fa fa-ban" aria-hidden="true"></i><span>Disciplinary Action</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			<li><a target="_blank" href="<?php echo base_url();?>Dashboard/diciplinary_action_insert_form"><i class="fa fa-circle-o"></i>Add Info</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/dcapending_list"><i class="fa fa-circle-o"></i>Pending List</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/date_wise_dcacomplete_list_form"><i class="fa fa-circle-o"></i>Complete List</a></li>
                		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/add_dfacheadcomments_form"><i class="fa fa-circle-o"></i>ADD Comments OF Fac.Head</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/dfacheadcomments_list"><i class="fa fa-circle-o"></i>Comments OF Fac.Head List</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/add_dcatype_form"><i class="fa fa-circle-o"></i>ADD Action Type</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/dcatype_list"><i class="fa fa-circle-o"></i>Action Type List</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/add_dcadisposal_form"><i class="fa fa-circle-o"></i>ADD Disposal Type</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/dcadistype_list"><i class="fa fa-circle-o"></i>Disposal Type List</a></li>
            		</ul>
        </li>
        <?php
		}
		elseif($this->session->userdata('userid') && $this->session->userdata('dcaction_read')==='1')
		{?> 
        <li class="treeview">
        			<a href="#">
            			<i class="fa fa-ban" aria-hidden="true"></i><span>Disciplinary Action</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			<?php /*?><li><a href="<?php echo base_url();?>Dashboard/diciplinary_action_insert_form"><i class="fa fa-circle-o"></i>Add Info</a></li><?php */?>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/dcapending_list"><i class="fa fa-circle-o"></i>Pending List</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/date_wise_dcacomplete_list_form"><i class="fa fa-circle-o"></i>Complete List</a></li>
                		<?php /*?><li><a href="<?php echo base_url();?>Dashboard/add_dfacheadcomments_form"><i class="fa fa-circle-o"></i>ADD Comments OF Fac.Head</a></li><?php */?>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/dfacheadcomments_list"><i class="fa fa-circle-o"></i>Comments OF Fac.Head List</a></li>
                        <?php /*?><li><a href="<?php echo base_url();?>Dashboard/add_dcatype_form"><i class="fa fa-circle-o"></i>ADD Action Type</a></li><?php */?>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/dcatype_list"><i class="fa fa-circle-o"></i>Action Type List</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/dcadistype_list"><i class="fa fa-circle-o"></i>Disposal Type List</a></li>
            		</ul>
        </li>
        <?php
		}
		elseif($this->session->userdata('userid') && $this->session->userdata('dcaction_write')==='1')
		{?> 
        <li class="treeview">
        			<a href="#">
            			<i class="fa fa-ban" aria-hidden="true"></i><span>Disciplinary Action</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			<li><a target="_blank" href="<?php echo base_url();?>Dashboard/diciplinary_action_insert_form"><i class="fa fa-circle-o"></i>Add Info</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/dcapending_list"><i class="fa fa-circle-o"></i>Pending List</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/date_wise_dcacomplete_list_form"><i class="fa fa-circle-o"></i>Complete List</a></li>
                		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/add_dfacheadcomments_form"><i class="fa fa-circle-o"></i>ADD Comments OF Fac.Head</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/dfacheadcomments_list"><i class="fa fa-circle-o"></i>Comments OF Fac.Head List</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/add_dcatype_form"><i class="fa fa-circle-o"></i>ADD Action Type</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/dcatype_list"><i class="fa fa-circle-o"></i>Action Type List</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/add_dcadisposal_form"><i class="fa fa-circle-o"></i>ADD Disposal Type</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/dcadistype_list"><i class="fa fa-circle-o"></i>Disposal Type List</a></li>
            		</ul>
        </li>
        <?php
		}
		?>
        
        															<!--SUGGESTION BOX-->
        
        <?php
         if($this->session->userdata('userid') && $this->session->userdata('suggessionbox_read')==='1' && $this->session->userdata('suggessionbox_write')==='1')
		{?> 
        <li class="treeview">
        			<a href="#">
            			<i class="fa fa-lightbulb-o" aria-hidden="true"></i><span>Suggestion Box</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			<li><a target="_blank" href="<?php echo base_url();?>Dashboard/suggession_insert_form"><i class="fa fa-circle-o"></i>Add Info</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/supending_list"><i class="fa fa-circle-o"></i>Pending List</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/date_wise_sucomplete_list_form"><i class="fa fa-circle-o"></i>Complete List</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/date_wise_susummary_list_form"><i class="fa fa-circle-o"></i>Summary List</a></li>
                		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/opener_insert_form"><i class="fa fa-circle-o"></i>ADD Opener</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/opener_list"><i class="fa fa-circle-o"></i>Opener List</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/fpr_insert_form"><i class="fa fa-circle-o"></i>ADD FPR</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/fpr_list"><i class="fa fa-circle-o"></i>FPR List</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/grading_insert_form"><i class="fa fa-circle-o"></i>ADD Grading</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/grading_list"><i class="fa fa-circle-o"></i> ADD Grading List</a></li>
                        
            		</ul>
        </li>
       <?php
		}
		elseif($this->session->userdata('userid') && $this->session->userdata('suggessionbox_read')==='1')
		{?> 
        <li class="treeview">
        			<a href="#">
            			<i class="fa fa-lightbulb-o" aria-hidden="true"></i><span>Suggestion Box</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			<?php /*?><li><a href="<?php echo base_url();?>Dashboard/suggession_insert_form"><i class="fa fa-circle-o"></i>Add Info</a></li><?php */?>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/supending_list"><i class="fa fa-circle-o"></i>Pending List</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/date_wise_sucomplete_list_form"><i class="fa fa-circle-o"></i>Complete List</a></li>
                		<?php /*?><li><a href="<?php echo base_url();?>Dashboard/opener_insert_form"><i class="fa fa-circle-o"></i>ADD Opener</a></li><?php */?>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/opener_list"><i class="fa fa-circle-o"></i>Opener List</a></li>
                        <?php /*?><li><a href="<?php echo base_url();?>Dashboard/fpr_insert_form"><i class="fa fa-circle-o"></i>ADD FPR</a></li><?php */?>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/fpr_list"><i class="fa fa-circle-o"></i>FPR List</a></li>
                        <?php /*?><li><a href="<?php echo base_url();?>Dashboard/grading_insert_form"><i class="fa fa-circle-o"></i>ADD Grading</a></li><?php */?>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/grading_list"><i class="fa fa-circle-o"></i>Grading List</a></li>
            		</ul>
        </li>
       <?php
		}
		elseif($this->session->userdata('userid') && $this->session->userdata('suggessionbox_write')==='1')
		{?> 
        <li class="treeview">
        			<a href="#">
            			<i class="fa fa-lightbulb-o" aria-hidden="true"></i><span>Suggestion Box</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			<li><a target="_blank" href="<?php echo base_url();?>Dashboard/suggession_insert_form"><i class="fa fa-circle-o"></i>Add Info</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/supending_list"><i class="fa fa-circle-o"></i>Pending List</a></li>
                        <li><a href="<?php echo base_url();?>Dashboard/date_wise_sucomplete_list_form"><i class="fa fa-circle-o"></i>Complete List</a></li>
                		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/opener_insert_form"><i class="fa fa-circle-o"></i>ADD Opener</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/opener_list"><i class="fa fa-circle-o"></i>Opener List</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/fpr_insert_form"><i class="fa fa-circle-o"></i>ADD FPR</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/fpr_list"><i class="fa fa-circle-o"></i>FPR List</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/grading_insert_form"><i class="fa fa-circle-o"></i>ADD Grading</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/grading_list"><i class="fa fa-circle-o"></i>Grading List</a></li>
            		</ul>
        </li>
       <?php
		}
		?>
        
        
        														<!--PRODUCTION-->
        
        <?php
         if($this->session->userdata('userid') && $this->session->userdata('production_read')==='1' && $this->session->userdata('production_write')==='1')
		{?> 
        <li class="treeview">
        			<a href="#">
            			<i class="fa fa-lightbulb-o" aria-hidden="true"></i><span>Production</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			<li><a target="_blank" href="<?php echo base_url();?>Dashboard/cutting_insert_form"><i class="fa fa-circle-o"></i>Add Cutting Info</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/date_wise_cutting_report_form"><i class="fa fa-circle-o"></i>Date Wise Cutting Report</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/sewing_insert_form"><i class="fa fa-circle-o"></i>Add Sewing Info</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/date_wise_sewing_report_form"><i class="fa fa-circle-o"></i>Date Wise Sewing Report</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/finishing_insert_form"><i class="fa fa-circle-o"></i>Add Finishing Info</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/date_wise_finishing_report_form"><i class="fa fa-circle-o"></i>Date Wise Finishing Report</a></li>
            		</ul>
        </li>
       <?php
		}
		elseif($this->session->userdata('userid') && $this->session->userdata('production_read')==='1')
		{?> 
        <li class="treeview">
        			<a href="#">
            			<i class="fa fa-lightbulb-o" aria-hidden="true"></i><span>Production</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			
                       <li><a target="_blank" href="<?php echo base_url();?>Dashboard/date_wise_cutting_report_form"><i class="fa fa-circle-o"></i>Date Wise Cutting Report</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/date_wise_sewing_report_form"><i class="fa fa-circle-o"></i>Date Wise Sewing Report</a></li>
                		
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/date_wise_finishing_report_form"><i class="fa fa-circle-o"></i>Date Wise Finishing Report</a></li>
                        
            		</ul>
        </li>
       <?php
		}
		elseif($this->session->userdata('userid') && $this->session->userdata('production_write')==='1')
		{?> 
        <li class="treeview">
        			<a href="#">
            			<i class="fa fa-lightbulb-o" aria-hidden="true"></i><span>Production</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			<li><a target="_blank" href="<?php echo base_url();?>Dashboard/cutting_insert_form"><i class="fa fa-circle-o"></i>Add Cutting Info</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/date_wise_cutting_report_form"><i class="fa fa-circle-o"></i>Date Wise Cutting Report</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/sewing_insert_form"><i class="fa fa-circle-o"></i>Add Sewing Info</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/date_wise_sewing_report_form"><i class="fa fa-circle-o"></i>Date Wise Sewing Report</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/finishing_insert_form"><i class="fa fa-circle-o"></i>Add Finishing Info</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/date_wise_finishing_report_form"><i class="fa fa-circle-o"></i>Date Wise Finishing Report</a></li>
            		</ul>
        </li>
       <?php
		}
		?>
        
                														<!--VEHICLE TRACKER-->
        
        <?php
         if($this->session->userdata('userid') && $this->session->userdata('vehicletracker_read')==='1' && $this->session->userdata('vehicletracker_write')==='1')
		{?> 
        <li class="treeview">
        			<a href="#">
            			<i class="fa fa-lightbulb-o" aria-hidden="true"></i><span>Vehicle Tracker</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			<li><a target="_blank" href="<?php echo base_url();?>Dashboard/vehicle_insert_form"><i class="fa fa-circle-o"></i>Add Vehicle Info</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/vehicle_list"><i class="fa fa-circle-o"></i>Vehicle List</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/vinsurance_insert_form"><i class="fa fa-circle-o"></i>Add Insurance Info</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/vinsurance_list"><i class="fa fa-circle-o"></i>Insurance List</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/vtaxtoken_insert_form"><i class="fa fa-circle-o"></i>Add Tax Token Info</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/vtaxtoken_list"><i class="fa fa-circle-o"></i>Tax Token List</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/vfitness_insert_form"><i class="fa fa-circle-o"></i>Add Fitness Info</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/vfitness_list"><i class="fa fa-circle-o"></i>Fitness List</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/vfuel_insert_form"><i class="fa fa-circle-o"></i>Add Fuel Info</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/vfuel_list"><i class="fa fa-circle-o"></i>Fuel List</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/vroute_insert_form"><i class="fa fa-circle-o"></i>Add Route Info</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/vroute_list"><i class="fa fa-circle-o"></i>Route List</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/vehiclel_list"><i class="fa fa-circle-o"></i>Vehicle License List</a></li>
                        <li class="treeview">
        					<a href="#">
            					<i class="fa fa-industry" aria-hidden="true"></i><span>Fuel</span>
            						<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
          					</a>
                            <ul class="treeview-menu">
            					<li><a target="_blank" href="<?php echo base_url();?>Dashboard/addvreading_insert_form"><i class="fa fa-circle-o"></i>Add Meter Reading</a></li>
                                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/vreading_list_form"><i class="fa fa-circle-o"></i>Vehicle Meter Reading List</a></li>
                                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/addvfueluse_insert_form"><i class="fa fa-circle-o"></i>Add Fuel Use</a></li>
                                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/vfuse_list_form"><i class="fa fa-circle-o"></i>Vehicle Fuel Use List</a></li>
                                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/mvfuse_list_form"><i class="fa fa-circle-o"></i>Monthly Status</a></li>
                        	</ul>
                        </li>
            		</ul>
        </li>
       <?php
		}
		elseif($this->session->userdata('userid') && $this->session->userdata('vehicletracker_read')==='1')
		{?> 
        <li class="treeview">
        			<a href="#">
            			<i class="fa fa-lightbulb-o" aria-hidden="true"></i><span>Vehicle Tracker</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			<?php /*?><li><a href="<?php echo base_url();?>Dashboard/suggession_insert_form"><i class="fa fa-circle-o"></i>Add Info</a></li><?php */?>
                       <li><a target="_blank" href="<?php echo base_url();?>Dashboard/vehicle_list"><i class="fa fa-circle-o"></i>Vehicle List</a></li>
            		</ul>
        </li>
       <?php
		}
		elseif($this->session->userdata('userid') && $this->session->userdata('vehicletracker_write')==='1')
		{?> 
        <li class="treeview">
        			<a href="#">
            			<i class="fa fa-lightbulb-o" aria-hidden="true"></i><span>Vehicle Tracker</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
                    	<li><a target="_blank" href="<?php echo base_url();?>Dashboard/vehicle_insert_form"><i class="fa fa-circle-o"></i>Add Vehicle Info</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/vehicle_list"><i class="fa fa-circle-o"></i>Vehicle List</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/vinsurance_insert_form"><i class="fa fa-circle-o"></i>Add Insurance Info</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/vinsurance_list"><i class="fa fa-circle-o"></i>Insurance List</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/vtaxtoken_insert_form"><i class="fa fa-circle-o"></i>Add Tax Token Info</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/vtaxtoken_list"><i class="fa fa-circle-o"></i>Tax Token List</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/vfitness_insert_form"><i class="fa fa-circle-o"></i>Add Fitness Info</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/vfitness_list"><i class="fa fa-circle-o"></i>Fitness List</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/vfuel_insert_form"><i class="fa fa-circle-o"></i>Add Fuel Info</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/vfuel_list"><i class="fa fa-circle-o"></i>Fuel List</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/vroute_insert_form"><i class="fa fa-circle-o"></i>Add Route Info</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/vroute_list"><i class="fa fa-circle-o"></i>Route List</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/vehiclel_list"><i class="fa fa-circle-o"></i>Vehicle License List</a></li>
            		</ul>
        </li>
       <?php
		}
		?>
        
        															<!--IDEA HARBOR-->
        
        <?php
         if($this->session->userdata('userid') && $this->session->userdata('ideaharbor_read')==='1' && $this->session->userdata('ideaharbor_write')==='1')
		{?> 
        <li class="treeview">
        			<a href="#">
            			<i class="fa fa-lightbulb-o" aria-hidden="true"></i><span>Idea Harbor</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			<li><a target="_blank" href="<?php echo base_url();?>Dashboard/idea_insert_form"><i class="fa fa-circle-o"></i>Add Idea</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/date_wise_idea_list_form"><i class="fa fa-circle-o"></i>Idea List</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/ideagroup_insert_form"><i class="fa fa-circle-o"></i>Add Group</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/ideagroup_list"><i class="fa fa-circle-o"></i>Group List</a></li>
            		</ul>
        </li>
       <?php
		}
		elseif($this->session->userdata('userid') && $this->session->userdata('ideaharbor_read')==='1')
		{?> 
        <li class="treeview">
        			<a href="#">
            			<i class="fa fa-lightbulb-o" aria-hidden="true"></i><span>Idea Harbor</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			<li><a target="_blank" href="<?php echo base_url();?>Dashboard/date_wise_idea_list_form"><i class="fa fa-circle-o"></i>Idea List</a></li>
            		</ul>
        </li>
       <?php
		}
		elseif($this->session->userdata('userid') && $this->session->userdata('ideaharbor_write')==='1')
		{?> 
        <li class="treeview">
        			<a href="#">
            			<i class="fa fa-lightbulb-o" aria-hidden="true"></i><span>Idea Harbor</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			<li><a target="_blank" href="<?php echo base_url();?>Dashboard/idea_insert_form"><i class="fa fa-circle-o"></i>Add Idea</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/date_wise_idea_list_form"><i class="fa fa-circle-o"></i>Idea List</a></li>
            		</ul>
        </li>
       <?php
		}
		?>
        
        
        															<!--OD-->
        
        <?php
         if($this->session->userdata('userid') && $this->session->userdata('od_read')==='1')
		{?> 
        <li class="treeview">
        			<a href="#">
            			<i class="fa fa-lightbulb-o" aria-hidden="true"></i><span>OD Message</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			<li><a target="_blank" href="<?php echo base_url();?>Dashboard/od_insert_form"><i class="fa fa-circle-o"></i>Add Message</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/od_list"><i class="fa fa-circle-o"></i>Message List</a></li>
                    </ul>
        </li>
       <?php
		}
		
		
		?>
        
        
        																<!--BLOOD GROUP-->
        
        <?php /*?><?php
         if($this->session->userdata('userid') && $this->session->userdata('bloodgroup_read')==='1' && $this->session->userdata('bloodgroup_write')==='1')
		{?> 
        <li class="treeview">
        			<a href="#">
            			<i class="fa fa-lightbulb-o" aria-hidden="true"></i><span>Blood Group</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			<li><a target="_blank" href="<?php echo base_url();?>Dashboard/bloodgroup_insert_form"><i class="fa fa-circle-o"></i>Add Blood Group</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/bloodgroup_list"><i class="fa fa-circle-o"></i>Blood Group List</a></li>
                    </ul>
        </li>
       <?php
		}
		elseif($this->session->userdata('userid') && $this->session->userdata('bloodgroup_read')==='1')
		{?> 
        <li class="treeview">
        			<a href="#">
            			<i class="fa fa-lightbulb-o" aria-hidden="true"></i><span>Blood Group</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/bloodgroup_list"><i class="fa fa-circle-o"></i>Blood Group List</a></li>
                    </ul>
        </li>
       <?php
		}
		
		elseif($this->session->userdata('userid') && $this->session->userdata('bloodgroup_write')==='1')
		{?> 
        <li class="treeview">
        			<a href="#">
            			<i class="fa fa-lightbulb-o" aria-hidden="true"></i><span>Blood Group</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			<li><a target="_blank" href="<?php echo base_url();?>Dashboard/bloodgroup_insert_form"><i class="fa fa-circle-o"></i>Add Blood Group</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/bloodgroup_list"><i class="fa fa-circle-o"></i>Blood Group List</a></li>
                    </ul>
        </li>
       <?php
		}
		?><?php */?>
        
        															<!--Recruitment & Selecetion-->
                                                                    

        <?php
         if($this->session->userdata('userid') && $this->session->userdata('recruitment_read')==='1' && $this->session->userdata('recruitment_write')==='1')
		{?> 
        <li class="treeview">
        			<a href="#">
            			<i class="fa fa-lightbulb-o" aria-hidden="true"></i><span>Recruitment & Selecetion<br/> Management</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			<li><a href="#"><i class="fa fa-circle-o"></i>Worker Recruitment</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i>Staff Recruitment</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i>Worker Selection</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i>Staff Selection</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/talentpool_insert_form"><i class="fa fa-circle-o"></i>Add Talent Pool</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/talentpool_list"><i class="fa fa-circle-o"></i>Talent Pool List</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/information_collect_insert_form"><i class="fa fa-circle-o"></i>Add Information</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/information_collect_list"><i class="fa fa-circle-o"></i>Information Collect List</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/intern_tracking_insert_form"><i class="fa fa-circle-o"></i>Add Intern Tracking</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/intern_tracking_list"><i class="fa fa-circle-o"></i>Intern Tracking List</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/examname_insert_form"><i class="fa fa-circle-o"></i>Add Exam</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/examques_insert_form"><i class="fa fa-circle-o"></i>Add Exam Ques</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/examques_list_form"><i class="fa fa-circle-o"></i>Exam Question List</a></li>
                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/examqresult_list"><i class="fa fa-circle-o"></i>Exam Result List</a></li>
                    </ul>
        </li>
         <?php
		}
		elseif($this->session->userdata('userid') && $this->session->userdata('recruitment_read')==='1')
		{
		?>
        <li class="treeview">
        			<a href="#">
            			<i class="fa fa-lightbulb-o" aria-hidden="true"></i><span>Recruitment & Selecetion<br/> Management</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			<li><a href="#"><i class="fa fa-circle-o"></i>Worker Recruitment</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i>Staff Recruitment</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i>Worker Selection</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i>Staff Selection</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/talentpool_list"><i class="fa fa-circle-o"></i>Talent Pool List</a></li>
                    </ul>
        </li>
        <?php
		}
		elseif($this->session->userdata('userid') && $this->session->userdata('recruitment_write')==='1')
		{
		?>
         <li class="treeview">
        			<a href="#">
            			<i class="fa fa-lightbulb-o" aria-hidden="true"></i><span>Recruitment & Selecetion<br/> Management</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			<li><a href="#"><i class="fa fa-circle-o"></i>Worker Recruitment</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i>Staff Recruitment</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i>Worker Selection</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i>Staff Selection</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/talentpool_insert_form"><i class="fa fa-circle-o"></i>Add Talent Pool</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/talentpool_list"><i class="fa fa-circle-o"></i>Talent Pool List</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/information_collect_insert_form"><i class="fa fa-circle-o"></i>Add Information</a></li>
                    </ul>
        </li>
        <?php
		}
		?>
        
        												<!--INDUSTRIAL RELATION-->
                                                                    

        <?php
         if($this->session->userdata('userid') && $this->session->userdata('ir_read')==='1' && $this->session->userdata('ir_write')==='1')
		{?> 
        <li class="treeview">
        			<a href="#">
            			<i class="fa fa-lightbulb-o" aria-hidden="true"></i><span>Industrial Relation</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			<li><a target="_blank" href="<?php echo base_url();?>Dashboard/specialemp_insert_form"><i class="fa fa-circle-o"></i>ADD Special Employee</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/specialemp_list"><i class="fa fa-circle-o"></i>Special Employee List</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/watchlistemp_insert_form"><i class="fa fa-circle-o"></i>Add Watch List Employee</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/watchlistemp_list"><i class="fa fa-circle-o"></i>Watch List Employee</a></li>
                        
                    	<li class="treeview">
        					<a href="#">
            					<i class="fa fa-industry" aria-hidden="true"></i><span>Case</span>
            						<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
          					</a>
                            <ul class="treeview-menu">
            					<li><a target="_blank" href="<?php echo base_url();?>Dashboard/addcasetype_insert_form"><i class="fa fa-circle-o"></i>Add Case Type</a></li>
                        		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/casetype_list"><i class="fa fa-circle-o"></i>Case Type List</a></li>
                        		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/addcase_insert_form"><i class="fa fa-circle-o"></i>Add Case</a></li>
                        		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/case_list"><i class="fa fa-circle-o"></i>Case List</a></li>
                			</ul>
                        </li>
                        <li class="treeview">
        					<a href="#">
            					<i class="fa fa-industry" aria-hidden="true"></i><span>CSR</span>
            						<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
          					</a>
                            <ul class="treeview-menu">
            					<li><a target="_blank" href="<?php echo base_url();?>Dashboard/addcsr_insert_form"><i class="fa fa-circle-o"></i>Add CSR</a></li>
                        		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/csr_list"><i class="fa fa-circle-o"></i>CSR List</a></li>
                        		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/csr_short_list"><i class="fa fa-circle-o"></i>CSR Short List</a></li>
                        		<?php /*?><li><a target="_blank" href="<?php echo base_url();?>Dashboard/case_list"><i class="fa fa-circle-o"></i>Case List</a></li><?php */?>
                			</ul>
                        </li>
                        <li class="treeview">
        					<a href="#">
            					<i class="fa fa-industry" aria-hidden="true"></i><span>Buddy</span>
            						<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
          					</a>
                            <ul class="treeview-menu">
            					<li><a target="_blank" href="<?php echo base_url();?>Dashboard/addbuddy_insert_form"><i class="fa fa-circle-o"></i>Add Buddy</a></li>
                        		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/date_wise_buddy_list_form"><i class="fa fa-circle-o"></i>Buddy List</a></li>
                        		
                			</ul>
                        </li>
                    </ul>
        </li>
         <?php
		}
		elseif($this->session->userdata('userid') && $this->session->userdata('ir_read')==='1')
		{
		?>
        <li class="treeview">
        			<a href="#">
            			<i class="fa fa-lightbulb-o" aria-hidden="true"></i><span>Industrial Relation</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/specialemp_list"><i class="fa fa-circle-o"></i>Special Employee List</a></li>
                    </ul>
        </li>
        <?php
		}
		elseif($this->session->userdata('userid') && $this->session->userdata('ir_write')==='1')
		{
		?>
         <li class="treeview">
        			<a href="#">
            			<i class="fa fa-lightbulb-o" aria-hidden="true"></i><span>Industrial Relation</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			<li><a target="_blank" href="<?php echo base_url();?>Dashboard/specialemp_insert_form"><i class="fa fa-circle-o"></i>Special Employee</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/specialemp_list"><i class="fa fa-circle-o"></i>Special Employee List</a></li>
                    </ul>
        </li>
        <?php
		}
		?>
        
        															<!--BASL INCENTIVE-->
                                                                    

        <?php
         if($this->session->userdata('userid') && $this->session->userdata('basl_read')==='1' && $this->session->userdata('basl_write')==='1')
		{?> 
        <li class="treeview">
        			<a href="#">
            			<i class="fa fa-lightbulb-o" aria-hidden="true"></i><span>BASL Operation</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			<li class="treeview">
        					<a href="#">
            					<i class="fa fa-lightbulb-o" aria-hidden="true"></i><span>Location</span>
            					<span class="pull-right-container">
              						<i class="fa fa-angle-left pull-right"></i>
            					</span>
          					</a>
          					<ul class="treeview-menu">
            					<li><a target="_blank" href="<?php echo base_url();?>Dashboard/region_insert_form"><i class="fa fa-circle-o"></i>Add Region</a></li>
                        		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/region_list"><i class="fa fa-circle-o"></i>Region List</a></li>
                                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/area_insert_form"><i class="fa fa-circle-o"></i>Add Area</a></li>
                                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/area_list"><i class="fa fa-circle-o"></i>Area List</a></li>
                                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/territory_insert_form"><i class="fa fa-circle-o"></i>Add Territory</a></li>
                                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/territory_list"><i class="fa fa-circle-o"></i>Territory List</a></li>
                    		</ul>
        				</li>
                        <li class="treeview">
        					<a href="#">
            					<i class="fa fa-lightbulb-o" aria-hidden="true"></i><span>Position</span>
            					<span class="pull-right-container">
              						<i class="fa fa-angle-left pull-right"></i>
            					</span>
          					</a>
          					<ul class="treeview-menu">
            					<li><a target="_blank" href="<?php echo base_url();?>Dashboard/position_insert_form"><i class="fa fa-circle-o"></i>Add Position</a></li>
                        		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/position_list"><i class="fa fa-circle-o"></i>Position List</a></li>
                            </ul>
        				</li>
                        <li class="treeview">
        					<a href="#">
            					<i class="fa fa-lightbulb-o" aria-hidden="true"></i><span>User</span>
            					<span class="pull-right-container">
              						<i class="fa fa-angle-left pull-right"></i>
            					</span>
          					</a>
          					<ul class="treeview-menu">
            					<?php /*?><li><a target="_blank" href="<?php echo base_url();?>Dashboard/regionuser_insert_form"><i class="fa fa-circle-o"></i>Add Regional User</a></li><?php */?>
                                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/baslagriuser_insert_form"><i class="fa fa-circle-o"></i>Add User</a></li>
                        		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/baslagriuser_list"><i class="fa fa-circle-o"></i>User List</a></li>
                               
                    		</ul>
        				</li>
                        <li class="treeview">
        					<a href="#">
            					<i class="fa fa-lightbulb-o" aria-hidden="true"></i><span>Product</span>
            					<span class="pull-right-container">
              						<i class="fa fa-angle-left pull-right"></i>
            					</span>
          					</a>
          					<ul class="treeview-menu">
            					
                                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/baslagriproduct_insert_form"><i class="fa fa-circle-o"></i>Add Product</a></li>
                        		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/baslagriproduct_list"><i class="fa fa-circle-o"></i>Product List</a></li>
                               
                    		</ul>
        				</li>
                        <li class="treeview">
        					<a href="#">
            					<i class="fa fa-lightbulb-o" aria-hidden="true"></i><span>Taget & Achievement</span>
            					<span class="pull-right-container">
              						<i class="fa fa-angle-left pull-right"></i>
            					</span>
          					</a>
          					<ul class="treeview-menu">
            					
                                <?php /*?><li><a target="_blank" href="<?php echo base_url();?>Dashboard/baslagrisalestarget_insert_form"><i class="fa fa-circle-o"></i>Add Sales Target</a></li><?php */?>
                        		<?php /*?><li><a target="_blank" href="<?php echo base_url();?>Dashboard/baslagrisales_list"><i class="fa fa-circle-o"></i>Sales Target List</a></li><?php */?>
                                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/baslagrisctarget_insert_form"><i class="fa fa-circle-o"></i>Add Target</a></li>
                                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/baslagriac_insert_form"><i class="fa fa-circle-o"></i>Achievement & Collection</a></li>
                                <?php /*?><li><a target="_blank" href="<?php echo base_url();?>Dashboard/baslagrisalesachievement_insert_form"><i class="fa fa-circle-o"></i>Add Sales Achievement</a></li><?php */?>
                               <?php /*?> <li><a target="_blank" href="<?php echo base_url();?>Dashboard/baslagrisalesctarget_insert_form"><i class="fa fa-circle-o"></i>Add Sales Collection Target</a></li><?php */?>
                                <?php /*?><li><a target="_blank" href="<?php echo base_url();?>Dashboard/baslagricachievement_insert_form"><i class="fa fa-circle-o"></i>Add Sales Collection</a></li><?php */?>
                                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/date_wise_baslagri_incentive_list_form"><i class="fa fa-circle-o"></i>Incentive List</a></li>
                                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/date_wise_baslagri_incentive_summary_form"><i class="fa fa-circle-o"></i>Incentive Summary</a></li>
                                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/date_wise_baslagri_tincentive_summary_form"><i class="fa fa-circle-o"></i>Total Incentive Summary</a></li>
                               
                    		</ul>
        				</li>
                   </ul>
        </li>
         <?php
		}
		elseif($this->session->userdata('userid') && $this->session->userdata('basl_read')==='1')
		{
		?>
        <li class="treeview">
        			<a href="#">
            			<i class="fa fa-lightbulb-o" aria-hidden="true"></i><span>BASL Operation</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			<li class="treeview">
        					<a href="#">
            					<i class="fa fa-lightbulb-o" aria-hidden="true"></i><span>Location</span>
            					<span class="pull-right-container">
              						<i class="fa fa-angle-left pull-right"></i>
            					</span>
          					</a>
          					<ul class="treeview-menu">
            					<li><a target="_blank" href="<?php echo base_url();?>Dashboard/region_insert_form"><i class="fa fa-circle-o"></i>Add Region</a></li>
                        		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/region_list"><i class="fa fa-circle-o"></i>Region List</a></li>
                                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/area_insert_form"><i class="fa fa-circle-o"></i>Add Area</a></li>
                                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/area_list"><i class="fa fa-circle-o"></i>Area List</a></li>
                                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/territory_insert_form"><i class="fa fa-circle-o"></i>Add Territory</a></li>
                                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/territory_list"><i class="fa fa-circle-o"></i>Territory List</a></li>
                    		</ul>
        				</li>
                   </ul>
        </li>
        <?php
		}
		elseif($this->session->userdata('userid') && $this->session->userdata('basl_write')==='1')
		{
		?>
         <li class="treeview">
        			<a href="#">
            			<i class="fa fa-lightbulb-o" aria-hidden="true"></i><span>BASL Operation</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			<li class="treeview">
        					<a href="#">
            					<i class="fa fa-lightbulb-o" aria-hidden="true"></i><span>Location</span>
            					<span class="pull-right-container">
              						<i class="fa fa-angle-left pull-right"></i>
            					</span>
          					</a>
          					<ul class="treeview-menu">
            					<li><a target="_blank" href="<?php echo base_url();?>Dashboard/region_insert_form"><i class="fa fa-circle-o"></i>Add Region</a></li>
                        		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/region_list"><i class="fa fa-circle-o"></i>Region List</a></li>
                                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/area_insert_form"><i class="fa fa-circle-o"></i>Add Area</a></li>
                                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/area_list"><i class="fa fa-circle-o"></i>Area List</a></li>
                                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/territory_insert_form"><i class="fa fa-circle-o"></i>Add Territory</a></li>
                                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/territory_list"><i class="fa fa-circle-o"></i>Territory List</a></li>
                    		</ul>
        				</li>
                   </ul>
        </li>
        <?php
		}
		?>
        
        															<!--ADMIN-->
                                                                    

        <?php
         if($this->session->userdata('userid') && $this->session->userdata('admin_read')==='1' && $this->session->userdata('admin_write')==='1')
		{?> 
        <li class="treeview">
        			<a href="#">
            			<i class="fa fa-lightbulb-o" aria-hidden="true"></i><span>Admin</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
                        
                    	<li class="treeview">
        					<a href="#">
            					<i class="fa fa-industry" aria-hidden="true"></i><span>Facilities Challanges</span>
            						<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
          					</a>
                            <ul class="treeview-menu">
            					<li><a target="_blank" href="<?php echo base_url();?>Dashboard/issuetype_insert_form"><i class="fa fa-circle-o"></i>Add Issue Type</a></li>
                        		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/issuetype_list"><i class="fa fa-circle-o"></i>Issue Type List</a></li>
                                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/challanges_insert_form"><i class="fa fa-circle-o"></i>Add Challanges</a></li>
                                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/challanges_list"><i class="fa fa-circle-o"></i>Challanges List</a></li>
                        		
                			</ul>
                        </li>
                    </ul>
        </li>
         <?php
		}
		elseif($this->session->userdata('userid') && $this->session->userdata('admin_read')==='1')
		{
		?>
        <li class="treeview">
        			<a href="#">
            			<i class="fa fa-lightbulb-o" aria-hidden="true"></i><span>Facilities Challanges</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/issuetype_list"><i class="fa fa-circle-o"></i>Issue Type List</a></li>
                        <li><a target="_blank" href="<?php echo base_url();?>Dashboard/challanges_list"><i class="fa fa-circle-o"></i>Challanges List</a></li>
                    </ul>
        </li>
        <?php
		}
		elseif($this->session->userdata('userid') && $this->session->userdata('admin_write')==='1')
		{
		?>
         <li class="treeview">
        			<a href="#">
            			<i class="fa fa-lightbulb-o" aria-hidden="true"></i><span>Facilities Challanges</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            					<li><a target="_blank" href="<?php echo base_url();?>Dashboard/issuetype_insert_form"><i class="fa fa-circle-o"></i>Add Issue Type</a></li>
                        		<li><a target="_blank" href="<?php echo base_url();?>Dashboard/issuetype_list"><i class="fa fa-circle-o"></i>Issue Type List</a></li>
                                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/challanges_insert_form"><i class="fa fa-circle-o"></i>Add Challanges</a></li>
                                <li><a target="_blank" href="<?php echo base_url();?>Dashboard/challanges_list"><i class="fa fa-circle-o"></i>Challanges List</a></li>
                    </ul>
        </li>
        <?php
		}
		?>
        
        														<!--ONLY SHOWING-->
                                                                
                                                                
                                                                
                                                                
         
        <li class="treeview">
        			<a href="#">
            			<i class="fa fa-lightbulb-o" aria-hidden="true"></i><span>Land Management</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<?php /*?><ul class="treeview-menu">
            			<li><a href="<?php echo base_url();?>Dashboard/vehicle_insert_form"><i class="fa fa-circle-o"></i>Add Vehicle Info</a></li>
                   </ul><?php */?>
        </li>
        <li class="treeview">
        			<a href="#">
            			<i class="fa fa-lightbulb-o" aria-hidden="true"></i><span>Fire System Management</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<?php /*?><ul class="treeview-menu">
            			<li><a href="<?php echo base_url();?>Dashboard/vehicle_insert_form"><i class="fa fa-circle-o"></i>Add Vehicle Info</a></li>
                   </ul><?php */?>
        </li>
        <li class="treeview">
        			<a href="#">
            			<i class="fa fa-lightbulb-o" aria-hidden="true"></i><span>Medical Management</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<?php /*?><ul class="treeview-menu">
            			<li><a href="<?php echo base_url();?>Dashboard/vehicle_insert_form"><i class="fa fa-circle-o"></i>Add Vehicle Info</a></li>
                   </ul><?php */?>
        </li>
        <li class="treeview">
        			<a href="#">
            			<i class="fa fa-lightbulb-o" aria-hidden="true"></i><span>MP Planning</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			<li><a href="#"><i class="fa fa-circle-o"></i>Non Manufacturing Budget <br/>Creation</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i>Manufacturing Budget Creation</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i>Direct Skill Database</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i>In direct Skill Database</a></li>
                    </ul>
        </li>
        
        <li class="treeview">
        			<a href="#">
            			<i class="fa fa-lightbulb-o" aria-hidden="true"></i><span>Performance Management<br/> System</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			<li><a href="#"><i class="fa fa-circle-o"></i>Worker KPI Based System</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i>Score Card</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i>Staff</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i>Departmental</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i>Performance Alert</a></li>
                    </ul>
        </li>
        <!--<li class="treeview">
        			<a href="#">
            			<i class="fa fa-lightbulb-o" aria-hidden="true"></i><span>Incentive Management<br/> System</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			<li><a href="#"><i class="fa fa-circle-o"></i>Incentive Unit</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i>Incentive Policy</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i>Incentive Tracking System</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i>Incentive Generator</a></li>
                    </ul>
        </li>-->
        <li class="treeview">
        			<a href="#">
            			<i class="fa fa-lightbulb-o" aria-hidden="true"></i><span>Training Management<br/> System</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			<li><a href="#"><i class="fa fa-circle-o"></i>Topic Database</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i>Training Schedule</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i>Training Notification</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i>Training Material Album</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i>Training Report Creator</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i>Training Feedback <br/> Management</a></li>
                    </ul>
        </li>
        <li class="treeview">
        			<a href="#">
            			<i class="fa fa-lightbulb-o" aria-hidden="true"></i><span>Checklist Management<br/> System</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			<li><a href="#"><i class="fa fa-circle-o"></i>Checklist Database</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i>Checklist Creator</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i>Checklist Assignment</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i>Notification</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i>Alert</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i>Failur Notification</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i>Integration With KPI</a></li>
                    </ul>
        </li>
        <li class="treeview">
        			<a href="#">
            			<i class="fa fa-lightbulb-o" aria-hidden="true"></i><span>Compliance Management<br/> System</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			<li><a href="#"><i class="fa fa-circle-o"></i>Unit Profile</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i>Internal Audit</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i>CAP Management</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i>Buyer Compliance</a></li>
                    </ul>
        </li>
        <li class="treeview">
        			<a href="#">
            			<i class="fa fa-lightbulb-o" aria-hidden="true"></i><span>Fire Safety Management</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			<li><a href="#"><i class="fa fa-circle-o"></i>Equipment Database</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i>Accessories Database</a></li>
                    </ul>
        </li>
        <li class="treeview">
        			<a href="#">
            			<i class="fa fa-lightbulb-o" aria-hidden="true"></i><span>Security Management<br/> System</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			<li><a href="#"><i class="fa fa-circle-o"></i>Visitor Management</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i>Parcel Management</a></li>
                    </ul>
        </li>
        <li class="treeview">
        			<a href="#">
            			<i class="fa fa-lightbulb-o" aria-hidden="true"></i><span>Dispatch/Goods Tracking <br/> System</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			<li><a href="#"><i class="fa fa-circle-o"></i>Type Of Materials</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i>Tracking Materials</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i>Gap Notification</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i>Summary Transaction</a></li>
                    </ul>
        </li>
        <li class="treeview">
        			<a href="#">
            			<i class="fa fa-lightbulb-o" aria-hidden="true"></i><span>Transport Management <br/> System</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			<li><a href="#"><i class="fa fa-circle-o"></i>Transport Database</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i>Transport License</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i>Fuel Management</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i>Maintenance Management</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i>Rental Management</a></li>
                    </ul>
        </li>
        <li class="treeview">
        			<a href="#">
            			<i class="fa fa-lightbulb-o" aria-hidden="true"></i><span>Utility Management</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			<li><a href="#"><i class="fa fa-circle-o"></i>Equipment Database</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i>Machine Database</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i>Data Capture By Device</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i>Performance Data Generator</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i>Maintenance History</a></li>
                    </ul>
        </li>
        <li class="treeview">
        			<a href="#">
            			<i class="fa fa-lightbulb-o" aria-hidden="true"></i><span>Repair & Maint <br/> Management</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			<li><a href="#"><i class="fa fa-circle-o"></i>Machine Database</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i>Maint. Schedular</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i>Adhoce Maitenance Schedule</a></li>
                    </ul>
        </li>
        <li class="treeview">
        			<a href="#">
            			<i class="fa fa-lightbulb-o" aria-hidden="true"></i><span>Meeting Management</span>
            				<span class="pull-right-container">
              					<i class="fa fa-angle-left pull-right"></i>
            				</span>
          			</a>
          			<ul class="treeview-menu">
            			<li><a href="#"><i class="fa fa-circle-o"></i>Meeting Schedular</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i>Meeting Remainder</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i>Minutes OF Meeting Creator</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i>MoMintergration Task-Tracker <br/>Calendar</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i>Minutes Creator</a></li>
                    </ul>
        </li>
		
       
        
      
        
       
        <?php //endif;?>
        
        												
        
        
     </ul>
  </section>
    <!-- /.sidebar -->
  </aside>