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
th,td{font-size:11px;text-align:center;}
.zoom {
  /*padding: 50px;*/
  
  transition: transform .2s; /* Animation */
 /* width: 200px;*/
 /* height: 200px;
  margin: 0 auto;*/
}

.zoom:hover {
  transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
@keyframes up-right {
    0% {
        transform: scale(1);
        opacity: .25
    }
    50% {
        transform: scale (1, 5);
        opacity: 1;
    }
    100% {
        transform: scale(1);
        opacity: .25;
    }
}
.circle {
    border-radius: 50%;
    width: 30px;
    height: 30px;
    /*opacity: .25;*/
}
.red {
    background-color: red;
   /* position: absolute;*/
    top: 50%;
    left: 50%;
    -webkit-animation: up-right 1s infinite;
    -moz-animation: up-right 1s infinite;
    -o-animation: up-right 1s infinite;
    animation: up-right 1s infinite;
}
.yellow {
    background-color: yellow;
    /*position: absolute;*/
    top: 50%;
    left: 50%;
    -webkit-animation: up-right 1s infinite;
    -moz-animation: up-right 1s infinite;
    -o-animation: up-right 1s infinite;
    animation: up-right 1s infinite;
}
.green {
    background-color: green;
   /* position: absolute;*/
    top: 50%;
    left: 50%;
    /*-webkit-animation: up-right 1s infinite;
    -moz-animation: up-right 1s infinite;
    -o-animation: up-right 1s infinite;
    animation: up-right 1s infinite;*/
}
.website-info { 
    display: none;
    background: #fff;
    border: 1px solid grey;
    position: absolute; 
    right: 0px; 
    top: 50px;
    z-index: 2000;
    width: 100%;
    overflow: hidden;
}
</style>
<script>
$(document).ready(function(){
    $('.trg-open.website-title').click(function (e) {
    e.stopPropagation();
    $('.website-info').hide('slide', {direction: 'right'}, 1400);
    $(this).next('.website-info').stop().show('slide', {direction: 'right'}, 1400);
   });
});
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
                  <h3 class="box-title">License/Certificate Info</h3>
                  
                <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
             	<table id="tableData" class="table table-hover table-bordered">
              <thead style="background:#91b9e6;">
                <tr>
                  <th>SL</th>
                  <th>ID</th>
                  <th>Image</th>
                  <th>License Name</th>
                  <th>License Type</th>
                  
                  
                 
                </tr>
                </thead>
                <tbody>
                <?php 
				$i=1;
				foreach($ll as $row)
				{ ?>
                <tr>
                  <td style="vertical-align:middle;"><?php echo $i++;?></td>
                  <td style="vertical-align:middle;"><?php echo $row['lnid'];?></td>
                  
                 <?php /*?> <td style="vertical-align:middle;"><img class="profile-user-img img-responsive img-thumbnail zoom" src="<?php echo base_url().'assets/uploads/license/'.$row['licensefile'];?>" alt="User profile picture"></td><?php */?>
                 <?php 
				 if($row['pic_file']=='')
                 {
					 ?>
                 <td style="vertical-align:middle;">No Image</td>
                 <?php
				 }
				 else
				 {
					 ?>
                     <td style="vertical-align:middle;"><img class="profile-user-img img-responsive img-thumbnail" src="<?php echo base_url().'assets/uploads/license/'.$row['pic_file'];?>" alt="User profile picture"></td>
                     <?php
				 }
				 ?>
                 
                  
                  <td style="vertical-align:middle;"><?php echo $row['license_name'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['licensetype'];?></td>
                  
                  
                </tr>
                <?php } ?>
                </tbody>
               
              </table>
            </div>
            
            <!-- /.box-body -->
          </div>
          <!--<script type="text/javascript">
            $(document).ready(function() {
                $('#tableData').paging({limit:50});
            });
        </script>-->
                
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
