<style>
.error{color:red;}
em{color:red;}
.typeahead{border-radius: 0;
box-shadow: none;
border-color: #d2d6de;display: block;
width: 100%;
height: 34px;
padding: 6px 12px;
font-size: 14px;
line-height: 1.42857143;
color: #555;
background-color: #fff;
background-image: none;
border: 1px solid #ccc;}
</style>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>-->
<link rel="stylesheet" href="https://twitter.github.io/typeahead.js/css/examples.css" /> 
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
 <script src="https://twitter.github.io/typeahead.js/js/handlebars.js"></script>
 <script src="https://twitter.github.io/typeahead.js/releases/latest/typeahead.bundle.js"></script>
<script type="text/javascript">
$(function () {
    jQuery(".pd").datepicker({dateFormat: 'dd-mm-yy'});
	jQuery(".wd").datepicker({dateFormat: 'dd-mm-yy'});
	})
</script>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      

      

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
                  <h3 class="box-title">Task Tracker Insert</h3>
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12">
							<?php if($responce = $this->session->flashdata('Successfully')): ?>
								<div class="text-center">
									<div class="alert alert-success text-center"><?php echo $responce;?></div>
								</div>
							<?php endif;?>
						</div>
					</div>
              
                </div>
                <!-- /.box-header -->
                
                <div class="box-body ">
				 <form role="form" autocomplete="off" action="<?php echo base_url();?>Dashboard/screatetask_insert" method="post" enctype="multipart/form-data">
                 <input type="hidden" name="userid" value="<?php echo $this->session->userdata('userid');?>">
                  <?php /*?><div class="form-group">
					<label>Factory Name<em>*</em></label>
					<select class="form-control" name="factoryid" id="factoryid">
                    	<option value="">Select....</option>
                        <?php
						foreach($allf as $row)
						{
					?>
                    		<option value="<?php echo $row['factoryid'];?>"><?php echo $row['factoryname'];?></option>
                    <?php
						}
					?>
                    </select>
                    <?php echo form_error('factoryid', '<div class="error">', '</div>');  ?>
				</div><?php */?>
                 <?php /*?><div class="form-group">
					<label>Division<em>*</em></label>
					<select class="form-control" name="divisionid" id="divisionid">
                    	<option value="">Select....</option>
                        
                    </select>
                    
				</div><?php */?>
				<?php /*?><div class="form-group">
					<label>Department<em>*</em></label>
						<select class="form-control" name="departmentid" id="departmentid">
                    		<option value="">Select....</option>
                        </select>
				</div><?php */?>
                <?php /*?><div class="form-group">
					<label>Section<em>*</em></label>
						<select class="form-control" name="sectionid" id="sectionid">
                    		<option value="">Select....</option>
                        </select>
				</div><?php */?>
                <?php /*?><div class="form-group">
					<label>Sub Section<em>*</em></label>
						<select class="form-control" name="subsectionid" id="subsectionid">
                    		<option value="">Select....</option>
                        </select>
				</div><?php */?>
                <div class="form-group">
					<label>Task Type<em>*</em></label>
					<select class="form-control" name="tasktypeid" id="tasktypeid">
                    	<option value="">Select....</option>
                        <?php
						foreach($allty as $row)
						{
					?>
                    		<option value="<?php echo $row['tasktypeid'];?>"><?php echo $row['tasktype'];?></option>
                    <?php
						}
					?>
                    </select>
                    <?php echo form_error('tasktypeid', '<div class="error">', '</div>');  ?>
				</div>
                <?php /*?><div class="form-group">
					<label>Assignee ID<em>*</em></label>
					<input type="text" class="form-control" name="auserid" id="add-autocomplete" placeholder="Enter Assignee ID">
                    <?php echo form_error('auid', '<div class="error">', '</div>');  ?>
				</div><?php */?>
                <div class="form-group">
                	<div id="prefetch">
						<label>Assignee ID<em>*</em></label>
						<input type="text" class="form-control typeahead" name="auserid" id="search_box" placeholder="Enter Assignee ID">
                    	<?php echo form_error('auid', '<div class="error">', '</div>');  ?>
                    </div>
				</div>
                <div class="form-group">
					<label>Task Name<em>*</em></label>
					<input type="text" class="form-control" name="taskname" placeholder="Enter Task Name">
                    <?php echo form_error('taskname', '<div class="error">', '</div>');  ?>
				</div>
				<div class="form-group">
					<label>Task Description<em>*</em></label>
					 <textarea class="form-control"  name="taskdescription" rows="5" id="taskdescription"></textarea>
                    <?php echo form_error('taskdescription', '<div class="error">', '</div>');  ?>
				</div>
                <div class="form-group">
					<label>Create Date<em>*</em></label>
					<input type="text" class="form-control pd" name="createdate" value="<?php echo date('d-m-Y');?>">
                    <?php /*?><?php echo form_error('dobdate', '<div class="error">', '</div>');  ?><?php */?>
				</div>
				<div class="form-group">
					<label>Deadline Date<em>*</em></label>
					<input type="text" class="form-control pd" name="deadline" value="<?php echo date('d-m-Y');?>">
                    <?php /*?><?php echo form_error('dobdate', '<div class="error">', '</div>');  ?><?php */?>
				</div>
				<div class="form-group">
                  <label for="employeefile">Task File</label>
                  <input type="file" name="pic_file">
				</div>
                
				
				
				

				 
				
				
                
  
               
               
    
                

             
                  <!-- /.users-list -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <input type="submit" class="btn btn-primary" name="submit" value="Submit" />
                </div>
                <!--<div id="prefetch">
   <input type="text" name="search_box" id="search_box" class="form-control input-lg typeahead" placeholder="Search Here" />
  </div>-->
				 </form>
                 
                <!-- /.box-footer -->
                <!--<div class="row">
    <div class="col-lg-12">
        <span id="success-msg"></span>
    </div>
</div>
 <form class="dynamic-autocomplete-frm" id="dynamic-dependent-frm">
    <input type="hidden" name="autocomplete" id="field-autocomplete">
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <input type="text" name="add_autocomplete" class="form-control" id="add-autocomplete" placeholder="Enter User Name">
            </div>
        </div>
    </div>-->
 
</form>
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
<script>
$(document).ready(function(){
  var sample_data = new Bloodhound({
   datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
   queryTokenizer: Bloodhound.tokenizers.whitespace,
   prefetch:'<?php echo base_url(); ?>Dashboard/fetch',
   remote:{
    url:'<?php echo base_url(); ?>Dashboard/fetch/%QUERY',
    wildcard:'%QUERY'
   }
  });
  

  $('#prefetch .typeahead').typeahead(null, {
   name: 'sample_data',
   display: 'userid',
   source:sample_data,
   limit:1000,
   templates:{
    suggestion:Handlebars.compile('<div class="row"><div class="col-md-2" style="padding-right:5px; padding-left:5px;"><img src="http://192.168.170.25/harmonizer/assets/uploads/users/{{image}}" class="img-thumbnail" width="48" /></div><div class="col-md-10" style="padding-right:5px; padding-left:5px;">{{ename}}</div></div>')
   }
  });
});
</script>
<script type="text/javascript">
 if (jQuery('input#add-autocomplete').length > 0) {
        jQuery('input#add-autocomplete').typeahead({
          displayText: function(item) {
			  let str1 = item.userid;
			  let str2 = item.ename;
			  
			  
			  let str4 = item.image;
			  let str3 = "--";
              let res = str1.concat(str4).concat(str3).concat(str2);
              return res
          },
          afterSelect: function(item) {
                this.$element[0].value = item.userid;
                jQuery("input#field-autocomplete").val(item.userid);
          },
          source: function (query, process) {
            jQuery.ajax({
                    url: "<?php echo base_url(); ?>Dashboard/getuserautocomplete",
                    data: {query:query},
                    dataType: "json",
                    type: "POST",
                    success: function (data) {
                        process(data)
                    }
                })
          }   
        });
    }
	</script>
<script type="text/javascript">
$(document).ready(function(){

    $('#factoryid').change(function(event){
        event.preventDefault();
		var factoryid = $('#factoryid').val();

        $.ajax({
            type:'get',
            url:"<?php echo base_url(); ?>Dashboard/show_divisionname",
			dataType:"json",
                    data:{ factoryid:factoryid},
            success:function(res)
            	{
         		 	$('#divisionid').find('option').not(':first').remove();;
				 	// Add options
          			$.each(res,function(index,data){
				  	$('#divisionid').append('<option value="'+data['divisionid']+'">'+data['divisionname']+'</option>');
          			});
				}
        	});
    	});
	});
</script>

<script type="text/javascript">
$(document).ready(function(){

    $('#divisionid').change(function(event){
        event.preventDefault();
		var factoryid = $('#factoryid').val();
		var divisionid = $('#divisionid').val();
        $.ajax({
            type:'get',
            url:"<?php echo base_url(); ?>Dashboard/show_departmentname",
			dataType:"json",
                    data:{ factoryid:factoryid,divisionid:divisionid},
            success:function(res)
            	{
         		 	$('#departmentid').find('option').not(':first').remove();;
				 	// Add options
          			$.each(res,function(index,data){
				  	$('#departmentid').append('<option value="'+data['deptid']+'">'+data['departmentname']+'</option>');
          			});
				}
        	});
    	});
	});
</script>

<script type="text/javascript">
$(document).ready(function(){

    $('#departmentid').change(function(event){
        event.preventDefault();
		var factoryid = $('#factoryid').val();
		var divisionid = $('#divisionid').val();
		var departmentid = $('#departmentid').val();
        $.ajax({
            type:'get',
            url:"<?php echo base_url(); ?>Dashboard/show_sectionname",
			dataType:"json",
                    data:{ factoryid:factoryid,divisionid:divisionid,departmentid:departmentid},
            success:function(res)
            	{
         		 	$('#sectionid').find('option').not(':first').remove();;
				 	// Add options
          			$.each(res,function(index,data){
				  	$('#sectionid').append('<option value="'+data['secid']+'">'+data['sectionname']+'</option>');
          			});
				}
        	});
    	});
	});
</script>

<script type="text/javascript">
$(document).ready(function(){

    $('#sectionid').change(function(event){
        event.preventDefault();
		var factoryid = $('#factoryid').val();
		var divisionid = $('#divisionid').val();
		var departmentid = $('#departmentid').val();
		var sectionid = $('#sectionid').val();
        $.ajax({
            type:'get',
            url:"<?php echo base_url(); ?>Dashboard/show_subsectionname",
			dataType:"json",
                    data:{ factoryid:factoryid,divisionid:divisionid,departmentid:departmentid,sectionid:sectionid},
            success:function(res)
            	{
         		 	$('#subsectionid').find('option').not(':first').remove();;
				 	// Add options
          			$.each(res,function(index,data){
				  	$('#subsectionid').append('<option value="'+data['subsecid']+'">'+data['subsectionname']+'</option>');
          			});
				}
        	});
    	});
	});
</script>

</body>
</html>


