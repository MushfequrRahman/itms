<style>
.timeline {
    border-left: 3px solid #727cf5;
    border-bottom-right-radius: 4px;
    border-top-right-radius: 4px;
    background: rgba(114, 124, 245, 0.09);
    margin: 0 auto;
    letter-spacing: 0.2px;
    position: relative;
    line-height: 1.4em;
    font-size: 1.03em;
    padding: 50px;
    list-style: none;
    text-align: left;
    max-width: 70%;
}

@media (max-width: 767px) {
    .timeline {
        max-width: 98%;
        padding: 25px;
    }
}

.timeline h1 {
    font-weight: 300;
    font-size: 1.4em;
}

.timeline h2,
.timeline h3 {
    font-weight: 600;
    font-size: 1rem;
    margin-bottom: 10px;
}

.timeline .event {
    border-bottom: 1px dashed #e8ebf1;
    padding-bottom: 25px;
    margin-bottom: 25px;
    position: relative;
}

@media (max-width: 767px) {
    .timeline .event {
        padding-top: 30px;
    }
}

.timeline .event:last-of-type {
    padding-bottom: 0;
    margin-bottom: 0;
    border: none;
}

.timeline .event:before,
.timeline .event:after {
    position: absolute;
    display: block;
    top: 0;
}

.timeline .event:before {
    left: -207px;
    content: attr(data-date);
    text-align: right;
    font-weight: 100;
    font-size: 0.9em;
    min-width: 120px;
}

@media (max-width: 767px) {
    .timeline .event:before {
        left: 0px;
        text-align: left;
    }
}

.timeline .event:after {
    -webkit-box-shadow: 0 0 0 3px #727cf5;
    box-shadow: 0 0 0 3px #727cf5;
    left: -55.8px;
    background: #fff;
    border-radius: 50%;
    height: 9px;
    width: 9px;
    content: "";
    top: 5px;
}

@media (max-width: 767px) {
    .timeline .event:after {
        left: -31.8px;
    }
}

.rtl .timeline {
    border-left: 0;
    text-align: right;
    border-bottom-right-radius: 0;
    border-top-right-radius: 0;
    border-bottom-left-radius: 4px;
    border-top-left-radius: 4px;
    border-right: 3px solid #727cf5;
}

.rtl .timeline .event::before {
    left: 0;
    right: -170px;
}

.rtl .timeline .event::after {
    left: 0;
    right: -55.8px;
}
</style>
<script type="text/javascript">
$(function () {
    jQuery(".pd").datepicker({dateFormat: 'yy-mm-dd'});
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
                  <h3 class="box-title">Event List</h3>
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
				 <?php /*?><form role="form" autocomplete="off" action="<?php echo base_url();?>Dashboard/event_list_show" method="post" enctype="multipart/form-data"><?php */?>
                 
              
                <?php /*?><div class="form-group">
					<label>Event Name<em>*</em></label>
					<select class="form-control" name="eventname" id="eventname">
                    	<option value="">Select....</option>
                        <?php
						foreach($alle as $row)
						{
					?>
                    		<option value="<?php echo $row['eventname'];?>"><?php echo $row['eventname'];?></option>
                    <?php
						}
					?>
                    </select>
                    
				</div><?php */?>
                
                
                
                
				
                
				
				
				

				 
				
				
                
  
               
               
    
                

             
                  <!-- /.users-list -->
                </div>
                <!-- /.box-body -->
                <!--<div class="box-footer text-center">
                  <input type="submit" id="btn" class="btn btn-primary" name="submit" value="Submit" />
                </div>-->
				 <?php /*?></form><?php */?>
                <!-- /.box-footer -->
                
              </div>
              <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Timeline</h6>
                    <div id="content">
                     
                        <ul class="timeline list-inline">
                       <?php 
				
				foreach($alle as $row)
				{ ?>
                            <li class="event list-inline-item" data-date="<?php echo $row['edate'];?>">
                            <h3><a class="myAnchor" href="#" value="<?php echo $bn=$row['eventname'];?>"><?php echo $bn=$row['eventname'];?></a></h3>
                                <?php /*?><h3><a id="btn" href="<?php echo base_url();?>Dashboard/event_list_show/<?php echo $bn=$row['eventname'];?>"><?php echo $row['eventname'];?></a></h3><?php */?>
                                <span><img class="profile-user-img img-responsive img-thumbnail zoom" src="<?php echo base_url().'assets/uploads/event/'.$row['eventfile'];?>" alt="event image"></span>
                                <span>It will reminds your memory on this day</span>
                            </li>
                           <?php } ?>
                           <!-- <li class="event" data-date="2:30 - 4:00pm">
                                <h3>Opening Ceremony</h3>
                                <p>Get ready for an exciting event, this will kick off in amazing fashion with MOP &amp; Busta Rhymes as an opening show.</p>
                            </li>
                            <li class="event" data-date="5:00 - 8:00pm">
                                <h3>Main Event</h3>
                                <p>This is where it all goes down. You will compete head to head with your friends and rivals. Get ready!</p>
                            </li>
                            <li class="event" data-date="8:30 - 9:30pm">
                                <h3>Closing Ceremony</h3>
                                <p>See how is the victor and who are the losers. The big stage is where the winners bask in their own glory.</p>
                            </li>-->
                        </ul>
                         
                    </div>
                </div>
                <div id="ajax-content-container">
</div>
            </div>
        </div>
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
        $('.myAnchor').on('click', function(e){
    var eventname = $(this).attr('value');
            $.ajax(
                {
                    type:'post',
                    url: '<?php echo base_url(); ?>Dashboard/event_list_show',
					dataType:"text",
                    data:{ eventname:eventname},
					      success: function(data) {
       $('#ajax-content-container').html(data);
	   //alert(eventname);
      },
	  error: function(){
    alert('error!');
  }
                    
                });
        });
    });
</script>


</body>
</html>


