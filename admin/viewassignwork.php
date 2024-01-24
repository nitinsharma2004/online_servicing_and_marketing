<?php
define('TITLE','Work Order');
define('PAGE','work');
include('includes/header.php');
include('../dbconnection.php');
session_start();
if(isset($_SESSION['is_adminlogin'])){
$aEmail=$_SESSION['aEmail'];}
else{
 echo "<script> location.href='login.php'</script>";
}
?>
<!--start 2nd column-->
<div class=" container text-center " style="margin-top:100px;">
<h3 class="text-center"><b>Assign Work Details</b></h3>
<?php
if(isset($_REQUEST['view'])){
    $sql="SELECT * FROM assignwork_tb  WHERE requester_id={$_REQUEST['id']}";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();?>
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
<form action="" class="mb-3 d-print-none d-inline">
    <input type="submit" class="btn btn-info" value="Print" onclick="window.print()"></form>
    <form action="work.php" class="mb-3 d-print-none d-inline">
    <input type="submit" class="btn btn-secondary" value="Close">
</form>
</div>

<?php }?>
</div><!--end 2nd column-->
<?php include('includes/footer.php')?>