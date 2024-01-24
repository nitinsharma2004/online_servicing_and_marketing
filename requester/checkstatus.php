<?php
define('TITLE','Status');
define('PAGE','checkstatus');
include('includes/header.php');
include('../dbconnection.php');
session_start();
if($_SESSION['is_login']){
    $rEmail= $_SESSION['rEmail'];
}
else{
    echo "<script> location.href='requesterlogin.php';</script>";
}
?>
<!--start 2nd column-->
<div class=" container text-center " style="margin-top:100px;">
<h3 class=" mx-5 bg-info text-white text-center ">Search Your ID</h3>
<form action="" method="POST" class="form-inline mt-5 mx-5">
    <div class="form-group mr-3">
  <label for="checkid">Enter Request ID:</label>
  <input type="text" name="checkid" class="form-control" id="checkid" onkeypress="isInputNumber(event)">
    </div>
    <button type="submit" class="btn btn-info">Search</button>
</form>
<?php
if(isset($_REQUEST['checkid'])){
    if($_REQUEST['checkid']==""){
        $msg='<div class="alert alert-warning mt-2" role="alert">All Fields Required</div>';
    }
    else{
    $sql="SELECT * FROM assignwork_tb  WHERE requester_id={$_REQUEST['checkid']}";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
    if(($row['requester_id'] == $_REQUEST['checkid']))
    { ?>
<h3 class="text-center mt-5">Assign Work Detail</h3>
<table class="table table-bordered">
<tbody>
<tr>
    <td>Requester ID</td>
    <td><?php if(isset($row['requester_id'])){echo $row['requester_id'];}?></td>
</tr>
<tr>
    <td>Requester Information</td>
    <td><?php if(isset($row['requester_info'])){echo $row['requester_info'];}?></td>
</tr>
<tr>
    <td>Requester Description</td>
    <td><?php if(isset($row['requester_desc'])){echo $row['requester_desc'];}?></td>
</tr>
<tr>
    <td>Requester Name</td>
    <td><?php if(isset($row['requester_name'])){echo $row['requester_name'];}?></td>
</tr>
<tr>
    <td>Requester add1</td>
    <td><?php if(isset($row['requester_add1'])){echo $row['requester_add1'];}?></td>
</tr>
<tr>
    <td>Requester add2</td>
    <td><?php if(isset($row['requester_add2'])){echo $row['requester_add2'];}?></td>
</tr>
<tr>
    <td>Requester City</td>
    <td><?php if(isset($row['requester_city'])){echo $row['requester_city'];}?></td>
</tr>
<tr>
    <td>Requester state</td>
    <td><?php if(isset($row['requester_state'])){echo $row['requester_state'];}?></td>
</tr>
<tr>
    <td>Requester Zip</td>
    <td><?php if(isset($row['requester_zip'])){echo $row['requester_zip'];}?></td>
</tr>
<tr>
    <td>Requester Email</td>
    <td><?php if(isset($row['requester_email'])){echo $row['requester_email'];}?></td>
</tr>
<tr>
    <td>Requester Mobile</td>
    <td><?php if(isset($row['requester_mobile'])){echo $row['requester_mobile'];}?></td>
</tr>
<tr>
    <td>Assigned Date</td>
    <td><?php if(isset($row['assign_date'])){echo $row['assign_date'];}?></td>
</tr>
<tr>
    <td>Technician Name</td>
    <td><?php if(isset($row['assign_tech'])){echo $row['assign_tech'];}?></td>
</tr>
<tr>
    <td>Customer Sign</td>
    <td></td>
</tr>
<tr>
    <td>Technician Sign</td>
    <td></td>
</tr>
</tbody> 
</table>
<div class="text-center">
<form action="" class="mb-3 d-print-none">
    <input type="submit" class="btn btn-info" value="Print" onclick="window.print()">
    <input type="submit" class="btn btn-info" value="Close">
</form>
</div>
<?php } else{
     echo '<div class="alert alert-info mt-3" > Your Request Is Still Pending </div>';
    }
}
}?>
<?php if(isset($msg)){echo $msg;}?>
</div><!--end 2nd column-->
<script>
    function isInputNumber(evt){
        var ch=string.formCharCode(evt.which);
        if(!(/[0-9]/.test(ch))){
            evt.preventDefault();
        }
    }
</script> 
<?php
include('includes/footer.php');
?>