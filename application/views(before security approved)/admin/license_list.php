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
.fared{color:red;}
.fagreen{color:green;}
div.scrollable-table-wrapper {
  height: 1000px;
  overflow: auto;
}
  .header {
            position: sticky;
            top:0;
        }
		.text-right-input{text-align:right;  width:100%; padding:0 10px 0 0;}
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
                  <a class="trg-open website-title" style="float:right">Summary</a>
        		  <div class="website-info is-collapsed" style="float:right">
            		<h5 style="padding:0 0 0 10px;">Summary</h5>
            		<table id="tableData" class="table table-hover table-bordered">
              <thead style="background:#91b9e6;">
                <tr>
                  <th>SL</th>
                  <th>Factory</th>
                  <th style="background:#900; color:#FFF;">Expire</th>
                  <th style="background:#960;">15 Days</th>
                  <th style="background:#FC0;">25 Days</th>
                  <th style="background:#FF9;">35 Days</th>
                  <th>45 Days</th>
                </tr>
                </thead>
                <tbody>
                <?php 
				$i=1;
				$e=0;
				$fi=0;
				$tw=0;
				$th=0;
				$fo=0;
				foreach($ls as $row)
				{ ?>
                <tr>
                  <td style="vertical-align:middle;"><?php echo $i++;?></td>
                  <td style="vertical-align:middle;"><strong><?php echo $row['factoryid'];?></strong></td>
                  <td style="vertical-align:middle; font-size:13px;"><?php echo $row['expired'];?></td>
                  <?php $e+=$row['expired'];?>
                  <td style="vertical-align:middle; font-size:12px;"><?php echo $row['fiveteendays'];?></td>
                  <?php $fi+=$row['fiveteendays'];?>
                  <td style="vertical-align:middle; font-size:12px;"><?php echo $row['twentyfivedays'];?></td>
                  <?php $tw+=$row['twentyfivedays'];?>
                  <td style="vertical-align:middle; font-size:12px;"><?php echo $row['thirtyfivedays'];?></td>
                  <?php $th+=$row['thirtyfivedays'];?>
                  <td style="vertical-align:middle; font-size:12px;"><?php echo $row['fourtyfivendays'];?></td>
                  <?php $fo+=$row['fourtyfivendays'];?>
                </tr>
                
                <?php
				}
				?>
                <tr>
                <td colspan="2"><strong>Total</td>
                <td><strong><?php echo $e;?></strong></td>
                <td><strong><?php echo $fi;?></strong></td>
                <td><strong><?php echo $tw;?></strong></td>
                <td><strong><?php echo $th;?></strong></td>
                <td><strong><?php echo $fo;?></strong></td>
                </tr>
                </tbody>
                </table>
        		  </div>
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12">
							<?php /*?><?php if($responce = $this->session->flashdata('Successfully')): ?>
								<div class="text-center">
									<div class="alert alert-success text-center"><?php echo $responce;?></div>
								</div>
							<?php endif;?><?php */?>
						</div>
					</div>
              <ol>
    <!--<h2>List Title</h2>-->
    <!--<li>
        <a class="trg-open website-title">Title 1</a>
        <div class="website-info is-collapsed">
            <h3>Title 1 Revealed</h3>
            <p>Cum sociis natoque penatibus et magnis dis parturient montes.</p>
        </div>
    </li>-->

        <!--<li>
        <a class="trg-open website-title">Title 2</a>
        <div class="website-info is-collapsed">
            <h3>Title 2 Revealed</h3>
            <p>Cum sociis natoque penatibus et magnis dis parturient montes.</p>
        </div>
    </li>
    
    <li>
        <a class="trg-open website-title">Title 3</a>
        <div class="website-info is-collapsed">
            <h3>Title 3 Revealed</h3>
            <p>Cum sociis natoque penatibus et magnis dis parturient montes.</p>
        </div>
    </li>-->
</ol>
                </div>
                <!-- /.box-header -->
                <div class="text-right">
                <span style="padding:0 10px 0 0;"><i class="fa fa-circle fared"></i>&nbsp;Below 60 Days</span>
                <span style="padding:0 10px 0 0;"><i class="fa fa-circle fagreen"></i>&nbsp;Above 60 Days</span>
                </div>
                <br/>
                                <div class="text-right-input">
                                	<div class="row">
                                		<div class="col-md-3 col-md-offset-9">
                                			<input type='text' class="form-control" id='txt_searchall' placeholder='Enter search text'> 
                                		</div>
                                	</div> 
                                </div>
                                <br/>
            <div class="box-body table-responsive no-padding">
            <div class="scrollable-table-wrapper">
             	<table id="tableData" class="table table-hover table-bordered">
              <thead style="background:#91b9e6;position: sticky;top: 0;">
                <tr>
                  <th>SL</th>
                  <th>File</th>
                  <th>Factory ID</th>
                  <th>License Name</th>
                  <th>Regulatory Authority</th>
                 
                  <th>Division</th>
                  <th>Department</th>
                  <th>License Type</th>
                  <th>Issue Date</th>
                  <th>Renewal Date</th>
                  <th>Remaining Day</th>
                  <th>Processing Time</th>
                  <?php if($this->session->userdata('user_type')!=11)
				  {
					  ?>
                  <th>Regulatory Fee</th>
                  <th>Mis.Exp</th>
                  <?php
				  }
				  ?>
                  <th>Status</th>
                  <?php if($this->session->userdata('user_type')==1)
				  {
					  ?>
                  <th>Edit</th>
                  <th>File Edit</th>
                  <?php
				  }
				  ?>
                </tr>
                </thead>
                <tbody>
                <?php 
				$i=1;
				foreach($ll as $row)
				{ ?>
                <tr>
                  <td style="vertical-align:middle;"><?php echo $i++;?></td>
                  
                  
                 <?php /*?> <td style="vertical-align:middle;"><img class="profile-user-img img-responsive img-thumbnail zoom" src="<?php echo base_url().'assets/uploads/license/'.$row['licensefile'];?>" alt="User profile picture"></td><?php */?>
                 <?php 
				 if($row['licensefile']=='')
                 {
					 ?>
                 <td style="vertical-align:middle;">No File</td>
                 <?php
				 }
				 else
				 {
					 ?>
                     <td style="vertical-align:middle;"><a target="_blank" href="<?php echo base_url().'assets/uploads/license/'.$row['licensefile'];?>"><i class="fa fa-file"></i></a></td>
                     <?php
				 }
				 ?>
                 
                  <td style="vertical-align:middle;"><?php echo $row['factoryname'];?></td>
                  <td style="vertical-align:middle;"><strong><?php echo $row['license_name'];?><strong></td>
                  <td style="vertical-align:middle;"><?php echo $row['reauthority'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['divisionname'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['departmentname'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['licensetype'];?></td>
                  <?php
				  $row['issuedate'];
				  $renewaldate=$row['renewaldate'];
                  $issuedate1 = date("d-m-Y", strtotime($row['issuedate']));
				  $renewaldate1 = date("d-m-Y", strtotime($renewaldate=$row['renewaldate']));

?>
                  <td style="vertical-align:middle;"><?php echo $issuedate1;?></td>
                  <td style="vertical-align:middle;"><?php echo $renewaldate1;?></td>
                  <?php
                  	$now = time(); // or your date as well
					$renewaldate = strtotime($renewaldate);
					$datediff = $renewaldate-$now;
					$remain=round($datediff / (60 * 60 * 24));
?>
                  <td style="vertical-align:middle;"><strong><?php echo $remain;?></strong></td>
                  <td style="vertical-align:middle;"><?php echo $row['processingtime'];?></td>
                   <?php if($this->session->userdata('user_type')!=11)
				  {
					  ?>
                  <td style="vertical-align:middle;"><?php echo $row['regulatoryfee'];?></td>
                 
                  <td style="vertical-align:middle;"><?php echo $row['misexp'];?></td>
                  <?php
				  }
				  ?>
                  <?php
				  	if($remain < 10)
					{
						
					?>
                    <td style="vertical-align:middle;"><div class="circle red"></div></td>
                    <?php
						}
				  
				  	else if($remain < 60)
					{
						
					?>
                    <td style="vertical-align:middle;"><div class="circle red"></div></td>
                    <?php
						}
						else
						{
				  ?>
                  <td style="vertical-align:middle;"><div class="circle green"></div></td>
                  <?php
						}
						?>
                  <?php if($this->session->userdata('user_type')==1)
				  {
					  ?>
                  <td style="vertical-align:middle;"><a href="<?php echo base_url();?>Dashboard/license_list_up/<?php echo $bn=$row['licenseid'];?>"><i class="fa fa-edit" style="font-size:24px"></i></a></td>
                  <td style="vertical-align:middle;"><a href="<?php echo base_url();?>Dashboard/licensefile_list_up/<?php echo $bn=$row['licenseid'];?>"><i class="fa fa-edit" style="font-size:24px"></i></a></td>
                  <?php
				  }
				  ?>
                </tr>
                </tbody>
               <?php } ?>
              </table>
            </div>
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
<script type='text/javascript'>

    $(document).ready(function(){


        // Search all columns

        $('#txt_searchall').keyup(function(){

            var search = $(this).val();


            $('table tbody tr').hide();


            var len = $('table tbody tr:not(.notfound) td:contains("'+search+'")').length;


            if(len > 0){

              $('table tbody tr:not(.notfound) td:contains("'+search+'")').each(function(){

                  $(this).closest('tr').show();

              });

            }else{

              $('.notfound').show();

            }

            

        });

    });

    // Case-insensitive searching (Note - remove the below script for Case sensitive search )

    $.expr[":"].contains = $.expr.createPseudo(function(arg) {

        return function( elem ) {

            return $(elem).text().toUpperCase().indexOf(arg.toUpperCase()) >= 0;

        };

    });

</script>
</body>
</html>
