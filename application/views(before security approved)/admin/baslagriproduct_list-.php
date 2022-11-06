
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<?php /*?><link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-submenu.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/docs.min.css"><?php */?>

<script src="http://code.jquery.com/jquery-2.1.1.min.js" defer></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js" defer></script>
<?php /*?><script src="<?php echo base_url(); ?>assets/js/bootstrap-submenu.min.js" defer></script>
<script src="<?php echo base_url(); ?>assets/js/docs.js" defer></script><?php */?>
<style type="text/css">
        
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
	    </style>
</head>
<body>
 

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

        <a class="navbar-brand">Project Name</a>
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
  
</body>
</html>
