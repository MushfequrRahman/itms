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
								foreach($up as $row)
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
								foreach($up as $row)
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
