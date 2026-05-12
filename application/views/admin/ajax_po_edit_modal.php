<?php $row = $pl; ?>

<form id="poEditForm">

<input type="hidden"
name="userid"
value="<?php echo $this->session->userdata('userid');?>">

<input type="hidden"
name="spoid"
value="<?php echo $row['spoid'];?>">

<input type="hidden"
name="sipoid"
value="<?php echo $row['sipoid'];?>">

<input type="hidden"
name="mprid"
value="<?php echo $row['mprid'];?>">

<input type="hidden"
name="simprid"
value="<?php echo $row['simprid'];?>">

<div class="row">

    <div class="col-md-4">
        <label>PO Number</label>

        <input type="text"
        class="form-control"
        name="po"
        value="<?php echo $row['po'];?>">
    </div>

    <div class="col-md-4">
        <label>PO Date</label>

        <input type="text"
        class="form-control pd"
        name="podate"
        value="<?php echo date('d-m-Y',strtotime($row['pdate']));?>">
    </div>

    <div class="col-md-4">
        <label>Qty</label>

        <input type="text"
        class="form-control"
        name="pqty"
        value="<?php echo $row['pqty'];?>">
    </div>

</div>

<br>

<div class="row">

    <div class="col-md-4">
        <label>Price</label>

        <input type="text"
        class="form-control"
        name="pprice"
        value="<?php echo $row['pprice'];?>">
    </div>

    <div class="col-md-4">
        <label>Remarks</label>

        <textarea
        class="form-control"
        name="premarks"><?php echo $row['premarks'];?></textarea>
    </div>

    <div class="col-md-4">

        <label>Supplier</label>

        <select
        class="form-control"
        name="supplier">

            <?php foreach($sl as $s){ ?>

            <option
            value="<?php echo $s['supplierid'];?>"

            <?php
            if($s['supplierid'] == $row['supplier']){
                echo 'selected';
            }
            ?>>

            <?php echo $s['supplier'];?>

            </option>

            <?php } ?>

        </select>

    </div>

</div>

<br>

<div class="text-center">

    <button type="submit"
    class="btn btn-success">

    Update

    </button>

</div>

</form>

<script>

$(function(){

    $(".pd").datepicker({
        dateFormat:'dd-mm-yy'
    });

});

$('#poEditForm').submit(function(e){

    e.preventDefault();

    $.ajax({

        url : '<?php echo base_url();?>Dashboard/po_list_update',

        type : 'POST',

        data : $(this).serialize(),

        success:function(response){

            var res = JSON.parse(response);

            if(res.status == 'success'){

                alert('Successfully Updated');

                $('#editModal').modal('hide');

                location.reload();

            }else{

                alert('Update Failed');

            }

        }

    });

});

</script>