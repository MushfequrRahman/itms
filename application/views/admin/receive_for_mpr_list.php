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
    font-size: 10px;
    text-align: center;
  }

  td {
    font-weight: 500;
    font-size: 10px;
    /* font-variant: small-caps; */
  }

  top {
    /* display: none; */
  }

  .close {
    /* display: none; */
  }

  .modal-title {
    /* display: none;
  } */


    .slider {
      width: 100%;
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
<script type="text/javascript">
  $(function() {
    jQuery(".pd").datepicker({
      dateFormat: 'dd-mm-yy'
    });
  })
</script>
<script>
  $(document).ready(function() {
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


<!-- /.box-header -->
<!-- <div class="box-body table-responsive no-padding"> -->
<section class="content">
  <div id="myModal" class="modal fade">
    <div class="modal-dialog" style="width:1350px;">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Receive List</h5>

          <button type="button" onClick="location.href='<?php echo base_url(); ?>Dashboard/receive_from_mpr_form';" class="close" data-dismiss="modal">&times;</button>
          <?php /*?><a href="<?php echo base_url();?>Dashboard/cap_insert_form" class="close" data-dismiss="modal">&times </a><?php */ ?>
        </div>
        <div class="modal-body">


          <section class="center slider">
            <div>
              <!-- <form role="form" id="insert_form" autocomplete="off" method="post" action="<?php echo base_url(); ?>Dashboard/receive_create" enctype="multipart/form-data"> -->
              <table id="tableData" class="table table-hover table-bordered">
                <thead style="background:#91b9e6;">
                  <tr>
                    <input type="hidden" class="form-control" name="userid" id="userid" value="<?php echo $this->session->userdata('userid'); ?>">
                    <?php /*?><td colspan="2" style="vertical-align:middle;"><input type="text" class="form-control" name="po" placeholder="PO No"></td>
              <td colspan="2" style="vertical-align:middle;"><input type="text" class="form-control" name="supplier" placeholder="Supplier"></td>
              <td colspan="2" style="vertical-align:middle;"><input type="text" class="form-control pd" readonly name="podate" value="<?php echo date('d-m-Y'); ?>"></td><?php */ ?>
                  </tr>
                  <tr>
                    <th>SL</th>
                    <!--<th>Select</th>-->
                    <th style="width: 10%;">MPR NO</th>
                    <!-- <th>Unit</th> -->
                    <!--<th>MPR Prepared By</th>-->
                    <!-- <th>Category</th> -->
                    <th>Product</th>
                    <th>Model</th>
                    
                    <th style="display:none;">Item Code</th>
                    <th style="display:none;">PO Code</th>
                    <!-- <th>MPR Qty</th> -->
                    <!-- <th>Description</th> -->
                    <!-- <th>MPR Price</th> -->
                    <!-- <th>Remarks</th> -->
                    <!-- <th>User</th> -->
                    <!-- <th>Date</th> -->
                    <th>PO Qty</th>
                    <th style="width: 5%;">Remaining Qty</th>
                    <!--<th>PO Unit Price</th>-->
                    <th style="width: 12%;">PO NO</th>
                    <th style="width: 10%;">GRN NO</th>
                    <th style="width: 5%;">Receive Qty</th>

                    <!--<th>PO Qty Price</th>-->

                    <!--<th>Supplier</th>-->
                    <th>Receive Date</th>
                    <th>Invoice</th>
                    <th>Challan Date</th>
                    <th>Remarks</th>
                    <th>Submit</th>
                    <!--<th>Status</th>-->
                  </tr>
                </thead>
                

                <?php
                $i = 1;
                foreach ($ul as $row) { ?>
                  <tbody>
                  <div id="error"></div>
                    <tr id="trid<?php echo $i; ?>">

                      <td style="vertical-align:middle;"><?php echo $i++; ?></td>
                      <?php /*?><td style="vertical-align:middle;"><input type="checkbox" class="checkbox" name="simprid[]" value="<?php echo $row['simprid']; ?>"></td><?php */ ?>
                      <td style="vertical-align:middle;width: 10%;"><input type="text" readonly class="form-control" id="mprid" name="mprid" value="<?php echo $row['mprid']; ?>"></td>
                      <!-- <td style="vertical-align:middle;"><input type="text" readonly class="form-control" id="fid" name="fid" value="<?php echo $row['fid']; ?>"></td> -->
                      <?php /*?><td style="vertical-align:middle;"><?php echo $row['name'].'--'.$row['departmentname'].'--'.$row['designation'];?></td><?php */ ?>
                      <!-- <td style="vertical-align:middle;"><?php echo $row['pcname']; ?></td> -->
                      <td style="vertical-align:middle;"><?php echo $row['pname']; ?></td>
                      <td style="vertical-align:middle;"><?php echo $row['item']; ?></td>
                      
                      <td style="vertical-align:middle;display:none;"><input type="text" readonly="readonly" class="form-control" id="item<?php echo $i; ?>" name="item" value="<?php echo $row['simprid']; ?>" /></td>
                      <td style="vertical-align:middle;display:none;"><input type="text" readonly="readonly" class="form-control" id="sipoid<?php echo $i; ?>" name="sipoid" value="<?php echo $row['sipoid']; ?>" /></td>
                      <!-- <td style="vertical-align:middle;"><?php echo $row['qty'] . " " . $row['puom']; ?></td> -->
                      <!-- <td style="vertical-align:middle;"><?php echo $row['description']; ?></td>
                      <td style="vertical-align:middle;"><?php echo $row['price']; ?></td>
                      <td style="vertical-align:middle;"><?php echo $row['remarks']; ?></td>
                      <td style="vertical-align:middle;"><?php echo $row['uname']; ?></td>

                      <?php $mdate = date("d-m-Y", strtotime($row['mdate'])); ?>
                      <td style="vertical-align:middle;"><?php echo $mdate; ?></td> -->
                      <?php /*?><td style="vertical-align:middle;"><?php echo $row['qty']-$row['pqty']." ".$row['puom'];?></td><?php */ ?>
                      <td style="vertical-align:middle;"><?php echo $row['pqty'] . " " . $row['puom']; ?></td>
                      <!-- <td style="vertical-align:middle;" id="reqty<?php echo $i; ?>"><?php echo $row['pqty'] - $row['rqty']; ?></td>
                       -->
                      <td style="vertical-align:middle; width:5%;"><input type="text" readonly="readonly" class="form-control" id="reqty<?php echo $i; ?>" name="reqty" value="<?php echo $row['pqty'] - $row['rqty']; ?>"></td>
                      <?php /*?><td style="vertical-align:middle;"><?php echo $row['pprice'];?></td><?php */ ?>
                      <?php
                      if (($row['rqty'] < $row['pqty'])) {
                      ?>
                        <td style="vertical-align:middle; width:12%;"><input type="text" readonly="readonly" class="form-control" id="po<?php echo $i; ?>" name="po" value="<?php echo $row['po']; ?>"></td>
                        <td style="vertical-align:middle; width: 10%;"><input type="text" class="form-control" id="grn<?php echo $i; ?>" name="grn" placeholder="GRN PO"></td>
                        <td style="vertical-align:middle; width: 5%;"><input type="text" class="form-control" id="rqty<?php echo $i; ?>" name="rqty" placeholder="Qty"></td>
                        <!--<td style="vertical-align:middle;"><input type="text" class="form-control" name="pprice[]" placeholder="Price"></td>-->

                        <!--<td style="vertical-align:middle;"><input type="text" class="form-control" name="supplier[]" placeholder=" supplier"></td>-->
                        <td style="vertical-align:middle;"><input type="text" class="form-control pd" id="rdate<?php echo $i; ?>" readonly name="rdate" value="<?php echo date('d-m-Y'); ?>"></td>
                        <td style="vertical-align:middle;"><input type="text" class="form-control" id="invoice<?php echo $i; ?>" name="invoice" placeholder="Invoice"></td>
                        <td style="vertical-align:middle;"><input type="text" class="form-control pd" id="cdate<?php echo $i; ?>" readonly name="cdate" value="<?php echo date('d-m-Y'); ?>"></td>
                        <td><textarea class="form-control" rows="1" name="rremarks" id="rremarks<?php echo $i; ?>"></textarea></td>
                        <td style="vertical-align:middle;"><input type="submit" class="btn btn-primary" name="submit" id="btn<?php echo $i; ?>" value="Submit" /></td>
                        <?php /*?><td><select class="form-control" name="pstatus[]" id="pstatus">
                        <option value="1">Done</option>
                        <option value="2">Remaining</option>
                        <option value="3">Pending</option>
                    </select>
                    </td><?php */ ?>
                      <?php
                      } else {
                      ?>
                        <td style="vertical-align:middle;"><input type="text" class="form-control" readonly name="po[]" value="<?php echo $row['po']; ?>"></td>
                        <td style="vertical-align:middle;"><input type="text" class="form-control" readonly name="grn[]" placeholder="GRN PO"></td>
                        <td style="vertical-align:middle;"><input type="text" class="form-control" readonly name="rqty[]" placeholder="Qty">
                          
                        </td>
                        <!--<td style="vertical-align:middle;"><input type="text" class="form-control" name="pprice[]" placeholder="Price"></td>-->

                        <!--<td style="vertical-align:middle;"><input type="text" class="form-control" name="supplier[]" placeholder=" supplier"></td>-->
                        <td style="vertical-align:middle;"><input type="text" class="form-control pd" readonly name="rdate[]" value="<?php echo date('d-m-Y'); ?>"></td>
                        <td><textarea class="form-control" readonly rows="1" name="rremarks[]" id="rremarks"></textarea></td>

                        <?php /*?><td><select class="form-control" name="pstatus[]" id="pstatus">
                        <option value="1">Done</option>
                        <option value="2">Remaining</option>
                        <option value="3">Pending</option>
                    </select>
                    </td><?php */ ?>
                      <?php
                      }
                      ?>

                    </tr>
                  </tbody>
                <?php } ?>

              </table>
              <!-- <div class="sbtn" style="text-align:center;">
                  <input type="submit" class="btn btn-primary" name="submit" id="btn" value="Submit" />
                </div> -->
              <!-- </form> -->
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  $(document).ready(function() {
	  for(let i = 0; i < 50; i++) {
		   //var test = $("input[id='id_" + i + "']").val();
    $("#btn" + i + "").click(function(event) {
        event.preventDefault();
        //var pd= $("#pd").val();
        //			var wd= $("#wd").val();
        var userid = $("#userid").val();
        var mprid = $("#mprid").val();
        var fid = $("#fid").val();
        var item = $("#item" + i + "").val();
		
        var sipoid = $("#sipoid" + i + "").val();
        var po = $("#po" + i + "").val();
        var grn = $("#grn" + i + "").val();
		//alert(grn);
        var rqty = parseFloat($("#rqty" + i + "").val());
        var reqty = parseFloat($("#reqty" + i + "").val());
        var rremarks= $("#rremarks" + i + "").val();
        var rdate= $("#rdate" + i + "").val();
		var invoice= $("#invoice" + i + "").val();
		var cdate= $("#cdate" + i + "").val();
        var error = "";
        if (rqty > reqty) {
          error += "Receive Qty Must be Less Then Remaining Qty<br/>";
        }
        if (grn=='') {
          error += "Enter GRN<br/>";
        }
        //alert(reqty);


        if (error == '') 
        {
            $.ajax({
                type: 'post',
                url: '<?php echo base_url(); ?>Dashboard/receive_create',
                dataType: "text",
                data: 
                  {
                    userid:userid,mprid:mprid,fid:fid,item:item,sipoid:sipoid,po:po,grn: grn,rqty:rqty,rremarks:rremarks,rdate:rdate,invoice:invoice,cdate:cdate
                  },
                success: function(data) 
                  {
                    //$('#ajax-content-container').html(data);
					var ii=i-1;
                    $("#trid" + ii + "").delay(1000).hide("slow");
                    $("#error").delay(1000).hide("slow");
                  },
            //}

            // error: function(){
            // alert('error!');
          //}
            });
        }
        else {
          $('#error').html('<div class="alert alert-danger">' + error + '</div>');
        }
    });
  }
  });
</script>

<?php /*?><script>
  $(document).ready(function() {
    $("#btn2").click(function(event) {
        event.preventDefault();
        //var pd= $("#pd").val();
        //			var wd= $("#wd").val();
        var userid = $("#userid").val();
        var mprid = $("#mprid").val();
        var item = $("#item2").val();
        var sipoid = $("#sipoid2").val();
        var po = $("#po2").val();
        var grn = $("#grn2").val();
        var rqty = parseFloat($("#rqty2").val());
        var reqty = parseFloat($("#reqty2").val());
        var rremarks= $("#rremarks2").val();
        var rdate= $("#rdate2").val();
        var error = "";
        if (rqty > reqty) {
          error += "Receive Qty Must be Less Then Remaining Qty<br/>";
        }
        if (grn=='') {
          error += "Enter GRN<br/>";
        }
        //alert(reqty);


        if (error == '') 
        {
            $.ajax({
                type: 'post',
                url: '<?php echo base_url(); ?>Dashboard/receive_create',
                dataType: "text",
                data: 
                  {
                    userid:userid,mprid:mprid,item:item,sipoid:sipoid,po:po,grn: grn,rqty:rqty,rremarks:rremarks,rdate:rdate
                  },
                success: function(data) 
                  {
                    //$('#ajax-content-container').html(data);
                    $("#trid1").delay(1000).hide("slow");
                    $("#error").delay(1000).hide("slow");
                  },
            //}

            // error: function(){
            // alert('error!');
          //}
            });
        }
        else {
          $('#error').html('<div class="alert alert-danger">' + error + '</div>');
        }
    });
  });
</script>

<script>
  $(document).ready(function() {
    $("#btn3").click(function(event) {
        event.preventDefault();
        //var pd= $("#pd").val();
        //			var wd= $("#wd").val();
        var userid = $("#userid").val();
        var mprid = $("#mprid").val();
        var item = $("#item3").val();
        var sipoid = $("#sipoid3").val();
        var po = $("#po3").val();
        var grn = $("#grn3").val();
        var rqty = parseFloat($("#rqty3").val());
        var reqty = parseFloat($("#reqty3").val());
        var rremarks= $("#rremarks3").val();
        var rdate= $("#rdate3").val();
        var error = "";
        if (rqty > reqty) {
          error += "Receive Qty Must be Less Then Remaining Qty<br/>";
        }
        if (grn=='') {
          error += "Enter GRN<br/>";
        }
        //alert(reqty);


        if (error == '') 
        {
            $.ajax({
                type: 'post',
                url: '<?php echo base_url(); ?>Dashboard/receive_create',
                dataType: "text",
                data: 
                  {
                    userid:userid,mprid:mprid,item:item,sipoid:sipoid,po:po,grn: grn,rqty:rqty,rremarks:rremarks,rdate:rdate
                  },
                success: function(data) 
                  {
                    //$('#ajax-content-container').html(data);
                    $("#trid2").delay(1000).hide("slow");
                    $("#error").delay(1000).hide("slow");
                  },
            //}

            // error: function(){
            // alert('error!');
          //}
            });
        }
        else {
          $('#error').html('<div class="alert alert-danger">' + error + '</div>');
        }
    });
  });
</script>

<script>
  $(document).ready(function() {
    $("#btn4").click(function(event) {
        event.preventDefault();
        //var pd= $("#pd").val();
        //			var wd= $("#wd").val();
        var userid = $("#userid").val();
        var mprid = $("#mprid").val();
        var item = $("#item4").val();
        var sipoid = $("#sipoid4").val();
        var po = $("#po4").val();
        var grn = $("#grn4").val();
        var rqty = parseFloat($("#rqty4").val());
        var reqty = parseFloat($("#reqty4").val());
        var rremarks= $("#rremarks4").val();
        var rdate= $("#rdate4").val();
        var error = "";
        if (rqty > reqty) {
          error += "Receive Qty Must be Less Then Remaining Qty<br/>";
        }
        if (grn=='') {
          error += "Enter GRN<br/>";
        }
        //alert(reqty);


        if (error == '') 
        {
            $.ajax({
                type: 'post',
                url: '<?php echo base_url(); ?>Dashboard/receive_create',
                dataType: "text",
                data: 
                  {
                    userid:userid,mprid:mprid,item:item,sipoid:sipoid,po:po,grn: grn,rqty:rqty,rremarks:rremarks,rdate:rdate
                  },
                success: function(data) 
                  {
                    //$('#ajax-content-container').html(data);
                    $("#trid3").delay(1000).hide("slow");
                    $("#error").delay(1000).hide("slow");
                  },
            //}

            // error: function(){
            // alert('error!');
          //}
            });
        }
        else {
          $('#error').html('<div class="alert alert-danger">' + error + '</div>');
        }
    });
  });
</script>

<script>
  $(document).ready(function() {
    $("#btn5").click(function(event) {
        event.preventDefault();
        //var pd= $("#pd").val();
        //			var wd= $("#wd").val();
        var userid = $("#userid").val();
        var mprid = $("#mprid").val();
        var item = $("#item5").val();
        var sipoid = $("#sipoid5").val();
        var po = $("#po5").val();
        var grn = $("#grn5").val();
        var rqty = parseFloat($("#rqty5").val());
        var reqty = parseFloat($("#reqty5").val());
        var rremarks= $("#rremarks5").val();
        var rdate= $("#rdate5").val();
        var error = "";
        if (rqty > reqty) {
          error += "Receive Qty Must be Less Then Remaining Qty<br/>";
        }
        if (grn=='') {
          error += "Enter GRN<br/>";
        }
        //alert(reqty);


        if (error == '') 
        {
            $.ajax({
                type: 'post',
                url: '<?php echo base_url(); ?>Dashboard/receive_create',
                dataType: "text",
                data: 
                  {
                    userid:userid,mprid:mprid,item:item,sipoid:sipoid,po:po,grn: grn,rqty:rqty,rremarks:rremarks,rdate:rdate
                  },
                success: function(data) 
                  {
                    //$('#ajax-content-container').html(data);
                    $("#trid4").delay(1000).hide("slow");
                    $("#error").delay(1000).hide("slow");
                  },
            //}

            // error: function(){
            // alert('error!');
          //}
            });
        }
        else {
          $('#error').html('<div class="alert alert-danger">' + error + '</div>');
        }
    });
  });
</script>

<script>
  $(document).ready(function() {
    $("#btn6").click(function(event) {
        event.preventDefault();
        //var pd= $("#pd").val();
        //			var wd= $("#wd").val();
        var userid = $("#userid").val();
        var mprid = $("#mprid").val();
        var item = $("#item6").val();
        var sipoid = $("#sipoid6").val();
        var po = $("#po6").val();
        var grn = $("#grn6").val();
        var rqty = parseFloat($("#rqty6").val());
        var reqty = parseFloat($("#reqty6").val());
        var rremarks= $("#rremarks6").val();
        var rdate= $("#rdate6").val();
        var error = "";
        if (rqty > reqty) {
          error += "Receive Qty Must be Less Then Remaining Qty<br/>";
        }
        if (grn=='') {
          error += "Enter GRN<br/>";
        }
        //alert(reqty);


        if (error == '') 
        {
            $.ajax({
                type: 'post',
                url: '<?php echo base_url(); ?>Dashboard/receive_create',
                dataType: "text",
                data: 
                  {
                    userid:userid,mprid:mprid,item:item,sipoid:sipoid,po:po,grn: grn,rqty:rqty,rremarks:rremarks,rdate:rdate
                  },
                success: function(data) 
                  {
                    //$('#ajax-content-container').html(data);
                    $("#trid5").delay(1000).hide("slow");
                    $("#error").delay(1000).hide("slow");
                  },
            //}

            // error: function(){
            // alert('error!');
          //}
            });
        }
        else {
          $('#error').html('<div class="alert alert-danger">' + error + '</div>');
        }
    });
  });
</script>

<script>
  $(document).ready(function() {
    $("#btn7").click(function(event) {
        event.preventDefault();
        //var pd= $("#pd").val();
        //			var wd= $("#wd").val();
        var userid = $("#userid").val();
        var mprid = $("#mprid").val();
        var item = $("#item7").val();
        var sipoid = $("#sipoid7").val();
        var po = $("#po7").val();
        var grn = $("#grn7").val();
        var rqty = parseFloat($("#rqty7").val());
        var reqty = parseFloat($("#reqty7").val());
        var rremarks= $("#rremarks7").val();
        var rdate= $("#rdate7").val();
        var error = "";
        if (rqty > reqty) {
          error += "Receive Qty Must be Less Then Remaining Qty<br/>";
        }
        if (grn=='') {
          error += "Enter GRN<br/>";
        }
        //alert(reqty);


        if (error == '') 
        {
            $.ajax({
                type: 'post',
                url: '<?php echo base_url(); ?>Dashboard/receive_create',
                dataType: "text",
                data: 
                  {
                    userid:userid,mprid:mprid,item:item,sipoid:sipoid,po:po,grn: grn,rqty:rqty,rremarks:rremarks,rdate:rdate
                  },
                success: function(data) 
                  {
                    //$('#ajax-content-container').html(data);
                    $("#trid6").delay(1000).hide("slow");
                    $("#error").delay(1000).hide("slow");
                  },
            //}

            // error: function(){
            // alert('error!');
          //}
            });
        }
        else {
          $('#error').html('<div class="alert alert-danger">' + error + '</div>');
        }
    });
  });
</script>

<script>
  $(document).ready(function() {
    $("#btn8").click(function(event) {
        event.preventDefault();
        //var pd= $("#pd").val();
        //			var wd= $("#wd").val();
        var userid = $("#userid").val();
        var mprid = $("#mprid").val();
        var item = $("#item8").val();
        var sipoid = $("#sipoid8").val();
        var po = $("#po8").val();
        var grn = $("#grn8").val();
        var rqty = parseFloat($("#rqty8").val());
        var reqty = parseFloat($("#reqty8").val());
        var rremarks= $("#rremarks8").val();
        var rdate= $("#rdate8").val();
        var error = "";
        if (rqty > reqty) {
          error += "Receive Qty Must be Less Then Remaining Qty<br/>";
        }
        if (grn=='') {
          error += "Enter GRN<br/>";
        }
        //alert(reqty);


        if (error == '') 
        {
            $.ajax({
                type: 'post',
                url: '<?php echo base_url(); ?>Dashboard/receive_create',
                dataType: "text",
                data: 
                  {
                    userid:userid,mprid:mprid,item:item,sipoid:sipoid,po:po,grn: grn,rqty:rqty,rremarks:rremarks,rdate:rdate
                  },
                success: function(data) 
                  {
                    //$('#ajax-content-container').html(data);
                    $("#trid7").delay(1000).hide("slow");
                    $("#error").delay(1000).hide("slow");
                  },
            //}

            // error: function(){
            // alert('error!');
          //}
            });
        }
        else {
          $('#error').html('<div class="alert alert-danger">' + error + '</div>');
        }
    });
  });
</script>

<script>
  $(document).ready(function() {
    $("#btn9").click(function(event) {
        event.preventDefault();
        //var pd= $("#pd").val();
        //			var wd= $("#wd").val();
        var userid = $("#userid").val();
        var mprid = $("#mprid").val();
        var item = $("#item9").val();
        var sipoid = $("#sipoid9").val();
        var po = $("#po9").val();
        var grn = $("#grn9").val();
        var rqty = parseFloat($("#rqty9").val());
        var reqty = parseFloat($("#reqty9").val());
        var rremarks= $("#rremarks9").val();
        var rdate= $("#rdate9").val();
        var error = "";
        if (rqty > reqty) {
          error += "Receive Qty Must be Less Then Remaining Qty<br/>";
        }
        if (grn=='') {
          error += "Enter GRN<br/>";
        }
        //alert(reqty);


        if (error == '') 
        {
            $.ajax({
                type: 'post',
                url: '<?php echo base_url(); ?>Dashboard/receive_create',
                dataType: "text",
                data: 
                  {
                    userid:userid,mprid:mprid,item:item,sipoid:sipoid,po:po,grn: grn,rqty:rqty,rremarks:rremarks,rdate:rdate
                  },
                success: function(data) 
                  {
                    //$('#ajax-content-container').html(data);
                    $("#trid8").delay(1000).hide("slow");
                    $("#error").delay(1000).hide("slow");
                  },
            //}

            // error: function(){
            // alert('error!');
          //}
            });
        }
        else {
          $('#error').html('<div class="alert alert-danger">' + error + '</div>');
        }
    });
  });
</script>

<script>
  $(document).ready(function() {
    $("#btn10").click(function(event) {
        event.preventDefault();
        //var pd= $("#pd").val();
        //			var wd= $("#wd").val();
        var userid = $("#userid").val();
        var mprid = $("#mprid").val();
        var item = $("#item10").val();
        var sipoid = $("#sipoid10").val();
        var po = $("#po10").val();
        var grn = $("#grn10").val();
        var rqty = parseFloat($("#rqty10").val());
        var reqty = parseFloat($("#reqty10").val());
        var rremarks= $("#rremarks10").val();
        var rdate= $("#rdate10").val();
        var error = "";
        if (rqty > reqty) {
          error += "Receive Qty Must be Less Then Remaining Qty<br/>";
        }
        if (grn=='') {
          error += "Enter GRN<br/>";
        }
        //alert(reqty);


        if (error == '') 
        {
            $.ajax({
                type: 'post',
                url: '<?php echo base_url(); ?>Dashboard/receive_create',
                dataType: "text",
                data: 
                  {
                    userid:userid,mprid:mprid,item:item,sipoid:sipoid,po:po,grn: grn,rqty:rqty,rremarks:rremarks,rdate:rdate
                  },
                success: function(data) 
                  {
                    //$('#ajax-content-container').html(data);
                    $("#trid9").delay(1000).hide("slow");
                    $("#error").delay(1000).hide("slow");
                  },
            //}

            // error: function(){
            // alert('error!');
          //}
            });
        }
        else {
          $('#error').html('<div class="alert alert-danger">' + error + '</div>');
        }
    });
  });
</script>

<script>
  $(document).ready(function() {
    $("#btn11").click(function(event) {
        event.preventDefault();
        //var pd= $("#pd").val();
        //			var wd= $("#wd").val();
        var userid = $("#userid").val();
        var mprid = $("#mprid").val();
        var item = $("#item11").val();
        var sipoid = $("#sipoid11").val();
        var po = $("#po11").val();
        var grn = $("#grn11").val();
        var rqty = parseFloat($("#rqty11").val());
        var reqty = parseFloat($("#reqty11").val());
        var rremarks= $("#rremarks11").val();
        var rdate= $("#rdate11").val();
        var error = "";
        if (rqty > reqty) {
          error += "Receive Qty Must be Less Then Remaining Qty<br/>";
        }
        if (grn=='') {
          error += "Enter GRN<br/>";
        }
        //alert(reqty);


        if (error == '') 
        {
            $.ajax({
                type: 'post',
                url: '<?php echo base_url(); ?>Dashboard/receive_create',
                dataType: "text",
                data: 
                  {
                    userid:userid,mprid:mprid,item:item,sipoid:sipoid,po:po,grn: grn,rqty:rqty,rremarks:rremarks,rdate:rdate
                  },
                success: function(data) 
                  {
                    //$('#ajax-content-container').html(data);
                    $("#trid10").delay(1000).hide("slow");
                    $("#error").delay(1000).hide("slow");
                  },
            //}

            // error: function(){
            // alert('error!');
          //}
            });
        }
        else {
          $('#error').html('<div class="alert alert-danger">' + error + '</div>');
        }
    });
  });
</script>

<script>
  $(document).ready(function() {
    $("#btn12").click(function(event) {
        event.preventDefault();
        //var pd= $("#pd").val();
        //			var wd= $("#wd").val();
        var userid = $("#userid").val();
        var mprid = $("#mprid").val();
        var item = $("#item12").val();
        var sipoid = $("#sipoid12").val();
        var po = $("#po12").val();
        var grn = $("#grn12").val();
        var rqty = parseFloat($("#rqty12").val());
        var reqty = parseFloat($("#reqty12").val());
        var rremarks= $("#rremarks12").val();
        var rdate= $("#rdate12").val();
        var error = "";
        if (rqty > reqty) {
          error += "Receive Qty Must be Less Then Remaining Qty<br/>";
        }
        if (grn=='') {
          error += "Enter GRN<br/>";
        }
        //alert(reqty);


        if (error == '') 
        {
            $.ajax({
                type: 'post',
                url: '<?php echo base_url(); ?>Dashboard/receive_create',
                dataType: "text",
                data: 
                  {
                    userid:userid,mprid:mprid,item:item,sipoid:sipoid,po:po,grn: grn,rqty:rqty,rremarks:rremarks,rdate:rdate
                  },
                success: function(data) 
                  {
                    //$('#ajax-content-container').html(data);
                    $("#trid11").delay(1000).hide("slow");
                    $("#error").delay(1000).hide("slow");
                  },
            //}

            // error: function(){
            // alert('error!');
          //}
            });
        }
        else {
          $('#error').html('<div class="alert alert-danger">' + error + '</div>');
        }
    });
  });
</script>
<?php */?>