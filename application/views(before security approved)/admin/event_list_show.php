<style type="text/css">
.profile-user-img {
    margin: 0 auto;
    width: 150px;
    padding: 3px;
    border: 1px solid #d2d6de;
}
ul.gallery{    
margin-left: 3vw;     
margin-right:3vw;  
}    

.zoom {      
-webkit-transition: all 0.35s ease-in-out;    
-moz-transition: all 0.35s ease-in-out;    
transition: all 0.35s ease-in-out;     
cursor: -webkit-zoom-in;      
cursor: -moz-zoom-in;      
cursor: zoom-in;  
}     

.zoom:hover,  
.zoom:active,   
.zoom:focus {

-ms-transform: scale(3.5);    
-moz-transform: scale(3.5);  
-webkit-transform: scale(3.5);  
-o-transform: scale(3.5);  
transform: scale(3.5);    
position:relative;      
z-index:1000;  
}

/**To keep upscaled images visible on mobile, 
increase left & right margins a bit**/  
@media only screen and (max-width: 768px) {   
ul.gallery {      
margin-left: 15vw;       
margin-right: 15vw;
}

/**TIP: Easy escape for touch screens,
give gallery's parent container a cursor: pointer.**/
.DivName {cursor: pointer}
}

.error{color:red;}
em{color:red;}
th,td{font-size:12px;}
.chk{width:20px; height:20px; text-align:center;}
/*.content-wrapper{height:5000px;}*/
table{
font-family: Verdana; 
color:black; 
font-size: 12px; 
font-style: normal;
/*font-weight: bold;*/
/*text-align:left; */
text-align: center; 
border-collapse: collapse; 
}
@media print {
    .wrapper {
    width: 100%;
    min-height: 100%;
    height: auto !important;
    position: absolute;
}
.content-wrapper{
    bottom: 50px;
    position: fixed;
    width: 100%;
    top: 50px;
}
.main-footer{
    bottom: 0px;
    position: fixed;
    width: 100%;
}
.top{display:none;}
.close{display:none;}
.modal-title{display:none;}
}

.slider {
        width: 50%;
        margin: 100px auto;
    }

    .slick-slide {
      margin: 0px 20px;
    }

    .slick-slide img {
      width: 100%;
    }

    .slick-prev:before,
    .slick-next:before {
      color: black;
    }


    .slick-slide {
      transition: all ease-in-out .3s;
      opacity: .2;
    }
    
    .slick-active {
      opacity: .5;
    }

    .slick-current {
      opacity: 1;
    }
</style>
<script>
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
</script>
 <script type="text/javascript">
    $(document).on('ready', function() {
     
      
      
      $(".center").slick({
        dots: true,
        infinite: true,
        centerMode: true,
        slidesToShow: 1,
        slidesToScroll: 1
      });
     
      
    });
</script>


<body>




  <!-- Content Wrapper. Contains page content -->
  
    <!-- Content Header (Page header) -->
   
    <!-- Main content -->
    <section class="content">
<div id="myModal" class="modal fade">
    <div class="modal-dialog" style="width:1350px;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Event List</h5>
                
                <button type="button" onClick="location.href='<?php echo base_url();?>Dashboard/event_list';" class="close" data-dismiss="modal">&times;</button>
                <?php /*?><a href="<?php echo base_url();?>Dashboard/cap_insert_form" class="close" data-dismiss="modal">&times </a><?php */?>
            </div>
            <div class="modal-body">
            
                
               <section class="center slider">
    <div>
                <?php 
				
				foreach($alle as $row)
				{ ?>
                             <img class="profile-user-img img-responsive img-thumbnail zoom" src="<?php echo base_url().'assets/uploads/event/'.$row['eventfile'];?>" alt="event image">
                  
                  
                
               <?php } ?>
              
                    </div>
                    
  </section>
              
                
                
        </div>
    </div>
</div>
</div>
   

</body>
</html>          
				
                
				
				
				

				 
				
				
                
  
               
               
    
                

             
                 


