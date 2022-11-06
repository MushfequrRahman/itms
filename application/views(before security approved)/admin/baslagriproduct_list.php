<?php /*?><link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"><?php */?>
<?php /*?><script src="http://code.jquery.com/jquery-2.1.1.min.js" defer></script><?php */?>
<?php /*?><script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js" defer></script><?php */?>
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

.dropdown-submenu {
			    position: relative;
			}

			.dropdown-submenu>.dropdown-menu {
			    top: 0;
			    left: 100%;
			    margin-top: -6px;
			    margin-left: -1px;
			    -webkit-border-radius: 0 6px 6px 6px;
			    -moz-border-radius: 0 6px 6px;
			    border-radius: 0 6px 6px 6px;
			}

			.dropdown-submenu:hover>.dropdown-menu {
			    display: block;
			}

			.dropdown-submenu>a:after {
			    display: block;
			    content: " ";
			    float: right;
			    width: 0;
			    height: 0;
			    border-color: transparent;
			    border-style: solid;
			    border-width: 5px 0 5px 5px;
			    border-left-color: #ccc;
			    margin-top: 5px;
			    margin-right: -10px;
			}

			.dropdown-submenu:hover>a:after {
			    border-left-color: #fff;
			}

			.dropdown-submenu.pull-left {
			    float: none;
			}

			.dropdown-submenu.pull-left>.dropdown-menu {
			    left: -100%;
			    margin-left: 10px;
			    -webkit-border-radius: 6px 0 6px 6px;
			    -moz-border-radius: 6px 0 6px 6px;
			    border-radius: 6px 0 6px 6px;
			}
			#tableData {
  
 
  text-align:center;
}
th,td{font-size:14px;text-align:center;}
</style>
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
                  <h3 class="box-title">Product List</h3>
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
            <div class="box-body">
            <table id="tableData" class="table table-hover table-bordered">
              <thead style="background:#91b9e6;">
                <tr>
                  <th>ID</th>
                  <th>Parent ID</th>
                  <th>Name</th>
                  <th>Order Number</th>
                  <!--<th>Edit</th>-->
                </tr>
                </thead>
                <tbody>
                <?php foreach($ml as $row)
				{ ?>
                <tr>
                  <?php /*?><td><img class="profile-user-img img-responsive img-thumbnail" src="<?php echo base_url().'assets/uploads/buyer/'.$row['image'];?>" alt="User profile picture"></td><?php */?>
                  
                  <td style="vertical-align:middle;"><?php echo $row['id'];?></td>
                 
                  <td style="vertical-align:middle;"><?php echo $row['parent'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['name'];?></td>
                  <td style="vertical-align:middle;"><?php echo $row['number'];?></td>
                  <?php /*?><td style="vertical-align:middle;"><a href="<?php echo base_url();?>Dashboard/buyer_list_up/<?php echo $bn=$row['bid'];?>"><i class="fa fa-edit" style="font-size:24px"></i></a></td><?php */?>
                  
                </tr>
                </tbody>
               <?php } ?>
              </table>
    <h3>Dropdown</h3>
    <div class="dropdown m-b">
        <button class="btn" type="button" data-toggle="dropdown">
            Dropdown
            <span class="caret"></span>
        </button>

        <?php echo $this->multi_menu->render(array(
            'nav_tag_open'      => '<ul class="dropdown-menu" role="menu">',
            'parent_tag_open'   => '<li class="dropdown-submenu">',
            'parent_anchor_tag' => '<a href="%s" data-toggle="dropdown">%s</a>',
            'children_tag_open' => '<ul class="dropdown-menu">'
        )); ?>

    </div>


    <h3>Navbar</h3>
    <nav class="navbar navbar-default">
      <div class="navbar-header">
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <!--<a class="navbar-brand">Product</a>-->
      </div>

      <div class="collapse navbar-collapse">
        <?php echo $this->multi_menu->render(array(
            'nav_tag_open'        => '<ul class="nav navbar-nav">',            
            'parentl1_tag_open'   => '<li class="dropdown">',
            'parentl1_anchor'     => '<a tabindex="0" data-toggle="dropdown" href="%s">%s<span class="caret"></span></a>',
            'parent_tag_open'     => '<li class="dropdown-submenu">',
            'parent_anchor'       => '<a href="%s" data-toggle="dropdown">%s</a>',
            'children_tag_open'   => '<ul class="dropdown-menu">'
        )); ?>
      </div>
    </nav>

    <h3>Pills</h3>
    <?php echo $this->multi_menu->render(array(
        'nav_tag_open'        => '<ul class="nav nav-pills">',            
        'parentl1_tag_open'   => '<li class="dropdown">',
        'parentl1_anchor'     => '<a tabindex="0" data-toggle="dropdown" href="%s">%s<span class="caret"></span></a>',
        'parent_tag_open'     => '<li class="dropdown-submenu">',
        'parent_anchor'       => '<a href="%s" data-toggle="dropdown">%s</a>',
        'children_tag_open'   => '<ul class="dropdown-menu">',
        'item_active'         => 'Item-6'
    )); ?>
    
</div>
            </div>
            
           
          </div>
          
                
               
              </div>
             
            </div>
           
          </div>
         

        
         
        </div>
        

        
      </div>
      
    </section>
   
  </div>
  

  
</div>


</body>
</html>
