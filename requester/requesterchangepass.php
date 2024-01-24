<?php
define('TITLE','Change Password');
define('PAGE','requesterchangepass');
include('includes/header.php');
include('../dbconnection.php');
session_start();
if($_SESSION['is_login']){
    $rEmail= $_SESSION['rEmail'];
}
else{
    echo "<script> location.href='requesterlogin.php';</script>";
}
$rEmail= $_SESSION['rEmail'];
if(isset($_REQUEST['passupdate'])){
    if($_REQUEST['rPassword']==""){
        $smg='<div class="alert alert-warning mt-2" role="alert">All Fields Required</div>';
    }
else{
$rPass=$_REQUEST['rPassword'];
$sql="UPDATE requesterlogin_tb SET r_password='$rPass' WHERE r_email='$rEmail'";
if($conn->query($sql)==true){
     $smg='<div class="alert alert-success mt-2" role="alert">Updated Successfully</div>';
     }
        else{
       $smg='<div class="alert alert-danger mt-2" role="alert"> Unable To Updated </div>';
      }
    }
}
?>


<div class=" container text-center" style="margin-top:100px;"><!--start change password area 2nd column-->
<h3 class="mx-5 bg-info text-white text-center ">Chang Your Password</h3>
 <form action="" method="POST" class="mx-5 ">
    <div class="form-group">
  <label for="inputEmail">Email</label><input type="email" class="form-control" name="inputEmail" id="inputEmail" value="<?php echo $rEmail ?>" readonly>
    </div>
    <div class="form-group">
  <label for="inputnewpassword">New Password</label><input type="password" class="form-control" name="rPassword" id="inputnewpassword" placeholder="New Password" >
    </div>
 <button type="submit" class="btn btn-info mr-4 mt-4" name="passupdate">Update</button>
<button type="reset" class="btn btn-secondary mt-4">Reset</button>
<?php if(isset($smg)){echo $smg;}?>
 </form>
    </div><!--end change password area 2nd column-->
<?php
include('includes/footer.php');
?>