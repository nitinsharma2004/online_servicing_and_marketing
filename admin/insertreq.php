<?php
define('TITLE','Requester');
define('PAGE','requester');
include('includes/header.php');
include('../dbconnection.php');
session_start();
if(isset($_SESSION['is_adminlogin'])){
$aEmail=$_SESSION['aEmail'];}
else{
 echo "<script> location.href='login.php'</script>";
   
}
if(isset($_REQUEST['reqsubmit'])){
    if(($_REQUEST['r_name']=="")||($_REQUEST['r_email']=="")||($_REQUEST['r_password']=="")){
        $msg='<div class="alert alert-warning mt-2" role="alert"> Fill All Fields </div>';
    }else{
      
        $rname=$_REQUEST['r_name'];
        $remail=$_REQUEST['r_email'];
        $rpassword=$_REQUEST['r_password'];
        $sql="INSERT INTO requesterlogin_tb (r_name,r_email,r_password) VALUES ('$rname','$remail','$rpassword')";
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
<h3 class="text-center">Add New Request</h3>
<form action="" method="POST">
<div class="form-group">
<label for="r_name">Name</label>
<input type="text" name="r_name" id="r_name" class="form-control" >
</div>

<div class="form-group">
<label for="r_email">Email</label>
<input type="email" name="r_email" id="r_email" class="form-control"  >
</div>

<div class="form-group">
<label for="r_password">Password</label>
<input type="password" name="r_password" id="r_password" class="form-control"  >
</div>
<div class="text-center">
<button type="submit" class="btn btn-info" id="reqsubmit" name="reqsubmit">Submit</button>
<a href="requester.php" class="btn btn-secondary">Close</a>
</div>
<?php if(isset($msg)){echo $msg;}?>
</form>
</div><!--end 2nd col-->
<?php include('includes/footer.php')?>