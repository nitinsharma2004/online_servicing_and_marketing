<?php
define('TITLE','Update Technician');
define('PAGE','Technician');
include('includes/header.php');
include('../dbconnection.php');
session_start();
if(isset($_SESSION['is_adminlogin'])){
$aEmail=$_SESSION['aEmail'];}
else{
 echo "<script> location.href='login.php'</script>";
}
if(isset($_REQUEST['edit'])){
    $sql="SELECT * FROM technician_db WHERE empid = {$_REQUEST['id']}";
    $result=$conn->query($sql);
    $ans=$result->fetch_assoc();
}
if(isset($_REQUEST['empupdate'])){
    if(($_REQUEST['empname']=="")||($_REQUEST['empcity']=="")||($_REQUEST['empmobile']=="")||($_REQUEST['empemail']=="")){
        $msg='<div class="alert alert-warning mt-2" role="alert"> Fill All Fields </div>';
    }else{
        $eid=$_REQUEST['empid'];
        $ename=$_REQUEST['empname'];
        $ecity=$_REQUEST['empcity'];
        $emobile=$_REQUEST['empmobile'];
        $eemail=$_REQUEST['empemail'];
        $sql="UPDATE technician_db SET empname='$ename', empcity='$ecity',empmobile='$emobile',empemail='$eemail' WHERE empid='$eid'";
        if($conn->query($sql)==TRUE){
            $msg='<div class="alert alert-success mt-2" role="alert">Update Successfully</div>';
        }else{
            $msg='<div class="alert alert-danger mt-2" role="alert"> Unable To Update</div>';
        }
    }
}
?>
<!--start 2nd col-->
<div class=" container text-center jumbotron" style="margin-top:100px;">
<h3 class="text-center">Update technician Detail</h3>
<form action="" method="POST">
<div class="form-group">
<label for="empid">Requeste ID</label>
<input type="text" name="empid" id="empid" class="form-control" value="<?php if(isset($ans['empid'])){echo $ans['empid'];}?>" readonly>
</div>
<div class="form-group">
<label for="empname">Name</label>
<input type="text" name="empname" id="empname" class="form-control" value="<?php if(isset($ans['empname'])){echo $ans['empname'];}?>" >
</div>
<div class="form-group">
<label for="empcity">City</label>
<input type="text" name="empcity" id="empcity" class="form-control" value="<?php if(isset($ans['empcity'])){echo $ans['empcity'];}?>" >
</div>
<div class="form-group">
<label for="empmobile">Mobile</label>
<input type="text" name="empmobile" id="empmobile" class="form-control" value="<?php if(isset($ans['empmobile'])){echo $ans['empmobile'];}?>" >
</div>
<div class="form-group">
<label for="empemail">Email</label>
<input type="email" name="empemail" id="empemail" class="form-control" value="<?php if(isset($ans['empemail'])){echo $ans['empemail'];}?>" >
</div>
<div class="text-center">
<button type="submit" class="btn btn-info" id="empupdate" name="empupdate">Update</button>
<a href="technician.php" class="btn btn-secondary">Close</a>
</div>
<?php if(isset($msg)){echo $msg;}?>
</form>
</div><!--end 2nd col-->


<?php include('includes/footer.php')?>