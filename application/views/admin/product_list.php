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


    text-align: center;
  }

  th,
  td {
    font-size: 14px;
    text-align: center;
  }
</style>
<script type='text/javascript'>
	//<![CDATA[
	$(document).ready(function() {
		$('.filter').multifilter()
	})
	//]]>
</script>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <div class="content-wrapper">
      <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-12">
                <div class="box box-danger">
                  <div class="box-header with-border">
                    <h3 class="box-title">Product List</h3>
                    <div class="row">
                      <div class="col-sm-12 col-md-12 col-lg-12">
                        <?php if ($responce = $this->session->flashdata('Successfully')) : ?>
                          <div class="text-center">
                            <div class="alert alert-success text-center"><?php echo $responce; ?></div>
                          </div>
                        <?php endif; ?>
                      </div>
                    </div>
                  </div>
                  <div class="row">
										<div class='filters'>
											<div class="col-md-3">
												<div class='filter-container'>
													<input autocomplete='off' class='filter form-control' name='Category' placeholder='Category' data-col='Category' />
												</div>
											</div>
											<div class="col-md-3">
												<div class='filter-container'>
													<input autocomplete='off' class='filter form-control' name='Group Name' placeholder='Group Name' data-col='Group Name' />
												</div>
											</div>
											<div class="col-md-3">
												<div class='filter-container'>
													<input autocomplete='off' class='filter form-control' name='Sub Group Name' placeholder='Sub Group Name' data-col='Sub Group Name' />
												</div>
											</div>
											<div class="col-md-3">
												<div class='filter-container'>
													<input autocomplete='off' class='filter form-control' name='Product Name' placeholder='Product Name' data-col='Product Name' />
												</div>
											</div>
										</div>
									</div>
                  <br/>
                  <div class="box-body table-responsive no-padding">
                    <table id="tableData" class="table table-hover table-bordered">
                      <thead style="background:#91b9e6;">
                        <tr>
                          <th>SL</th>
                          <!--<th>Code</th>-->
                          <th>Category</th>
                          <th>Group Name</th>
                          <th>Sub Group Name</th>
                          <th>Product Code</th>
                          <th>Product Name</th>
                          <!--<th>Edit</th>-->
                        </tr>
                      </thead>
                      <tbody>

                        <?php
                        $i = 1;
                        foreach ($ul as $row) { ?>
                          <tr>
                            <td style="vertical-align:middle;"><?php echo $i++; ?></td>
                            <?php /*?><td style="vertical-align:middle;"><a href="<?php echo base_url();?>Dashboard/product_details_insert_form/<?php echo $bn=$row['pccode'];?>"><?php echo $row['pccode'];?></a></td><?php */ ?>
                            <td style="vertical-align:middle;"><?php echo $row['pcname']; ?></td>
                            <td style="vertical-align:middle;"><?php echo $row['pgname']; ?></td>
                            <td style="vertical-align:middle;"><?php echo $row['psgname']; ?></td>
                            <!-- <td style="vertical-align:middle;"><a href="<?php echo base_url();?>Dashboard/product_details_insert_form/<?php echo $bn=$row['pcode'];?>"><?php echo $row['pcode'];?></a></td> -->
                            <td style="vertical-align:middle;"><?php echo $row['pcode'];?></td>
                            <td style="vertical-align:middle;"><?php echo $row['pname']; ?></td>
                            <?php /*?> <td style="vertical-align:middle;"><a href="<?php echo base_url();?>Dashboard/product_category_list_up/<?php echo $bn=$row['pccode'];?>"><i class="fa fa-edit" style="font-size:24px"></i></a></td><?php */ ?>
                          </tr>
                          <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- <script type="text/javascript">
                  $(document).ready(function() {
                    $('#tableData').paging({
                      limit: 50
                    });
                  });
                </script> -->
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