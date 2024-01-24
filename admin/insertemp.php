<?php
define('TITLE','Update Technician');
define('PAGE','technician');
include('includes/header.php');
include('../dbconnection.php');
session_start();
if(isset($_SESSION['is_adminlogin'])){
$aEmail=$_SESSION['aEmail'];}
else{
 echo "<script> location.href='login.php'</script>";
   
}
if(isset($_REQUEST['empsubmit'])){
    if(($_REQUEST['empname']=="")||($_REQUEST['empcity']=="")||($_REQUEST['empmobile']=="")||($_REQUEST['empemail']=="")){
        $msg='<div class="alert alert-warning mt-2" role="alert"> Fill All Fields </div>';
    }else{
      
        $ename=$_REQUEST['empname'];
        $ecity=$_REQUEST['empcity'];
        $emobile=$_REQUEST['empmobile'];
        $eemail=$_REQUEST['empemail'];
       
        $sql="INSERT INTO technician_db (empname,empcity,empmobile,empemail) VALUES ('$ename','$ecity','$emobile','$eemail')";
        if($conn->query($sql)==TRUE){
        $msg='<div class="alert alert-success mt-2" role="alert">Added Successfully</div>';
        }else{
            $msg='<div class="alert alert-danger mt-2" role="alert"> Unable To Add</div>';
        }
    }
}
?>
<!--start 2nd column-->
<div class=" container text-center jumbotron" style="margin-top:100px;">
<h3 class="text-center">Add New Technician</h3>
<form action="" method="POST">
<div class="form-group">
<label for="empname">Name</label>
<input type="text" name="empname" id="empname" class="form-control" >
</div>

<div class="form-group">
<label for="empcity">City</label>
<input type="text" name="empcity" id="empcity" class="form-control" >
</div>

<div class="form-group">
<label for="empmobile">Mobile</label>
<input type="number" name="empmobile" id="empmobile" class="form-control"  >
</div>

<div class="form-group">
<label for="empemail">Email</label>
<input type="email" name="empemail" id="empemail" class="form-control"  >
</div>

<div class="text-center">
<button type="submit" class="btn btn-info" id="empsubmit" name="empsubmit">Submit</button>
<a href="technician.php" class="btn btn-secondary">Close</a>
</div>
<?php if(isset($msg)){echo $msg;}?>
</form>
</div><!--end 2nd col-->
<?php include('includes/footer.php')?>