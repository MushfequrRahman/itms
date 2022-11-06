<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
    
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Babylon Group</li>
        <?php if($this->session->userdata('userid') && $this->session->userdata('user_type')==='1'):?>
        <?php /*?><li class="treeview">
        	<a href="#">
            	<i class="fa fa-building-o" aria-hidden="true"></i>
 <span>Department Info</span>
            	<span class="pull-right-container">
              		<i class="fa fa-angle-left pull-right"></i>
            	</span>
          	</a>
          	<ul class="treeview-menu">
            	<li><a href="<?php echo base_url();?>Dashboard/empdept_insert_form"><i class="fa fa-circle-o"></i> Add Department Info</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/empdept_list"><i class="fa fa-circle-o"></i> Department List</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/empsection_insert_form"><i class="fa fa-circle-o"></i> Add Section Info</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/empsection_list"><i class="fa fa-circle-o"></i> Section List</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/designation_insert_form"><i class="fa fa-circle-o"></i> Add Designation Info</a></li>
                <li><a href="<?php echo base_url();?>Dashboard/designation_list"><i class="fa fa-circle-o"></i> Designation List</a></li>
            </ul>
        </li><?php */?>
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
                <li><a href="<?php echo base_url();?>Dashboard/user_task_list"><i class="fa fa-circle-o"></i>User Task List</a></li>
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
                <?php /*?><li><a href="<?php echo base_url();?>Dashboard/user_task_list"><i class="fa fa-circle-o"></i>User Task List</a></li><?php */?>
            </ul>
        </li>
        
        
        
        
       
        <?php endif;?>
        												<!--USER-->
        
        <?php if($this->session->userdata('userid') && $this->session->userdata('user_type')==='2'):?>
     	
        <li class="treeview">
        	<a href="#">
            	<i class="fa fa-users"></i> <span>Buyer Info</span>
            	<span class="pull-right-container">
              		<i class="fa fa-angle-left pull-right"></i>
            	</span>
          	</a>
          	<ul class="treeview-menu">
            	<?php /*?><li><a href="<?php echo base_url();?>Dashboard/buyer_insert_form"><i class="fa fa-circle-o"></i> Add Buyer Info</a></li><?php */?>
                <li><a href="<?php echo base_url();?>Dashboard/buyer_list"><i class="fa fa-circle-o"></i> Buyer List</a></li>
            </ul>
        </li>
        <li class="treeview">
        	<a href="#">
            	<i class="fa fa-industry" aria-hidden="true"></i> <span>Factory Info</span>
            	<span class="pull-right-container">
              		<i class="fa fa-angle-left pull-right"></i>
            	</span>
          	</a>
          	<ul class="treeview-menu">
            	<?php /*?><li><a href="<?php echo base_url();?>Dashboard/factory_insert_form"><i class="fa fa-circle-o"></i> Add Factory Info</a></li><?php */?>
                <li><a href="<?php echo base_url();?>Dashboard/factory_list"><i class="fa fa-circle-o"></i> Factory List</a></li>
            </ul>
        </li>
        <li class="treeview">
        	<a href="#">
            	<i class="fa fa-gavel" aria-hidden="true"></i> <span>Compliance Report-CAP</span>
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
                <?php /*?><li><a href="<?php echo base_url();?>Dashboard/cap_status_form"><i class="fa fa-circle-o"></i> Add Cap Status</a></li><?php */?>
                <li><a href="<?php echo base_url();?>Dashboard/cap_fullr_form"><i class="fa fa-circle-o"></i> Cap Report</a></li>
                <?php /*?><li><a href="<?php echo base_url();?>Dashboard/chart_form"><i class="fa fa-circle-o"></i> Chart</a></li><?php */?>
            </ul>
        </li>
        <?php endif;?>
     </ul>
  </section>
    <!-- /.sidebar -->
  </aside>