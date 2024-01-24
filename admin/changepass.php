
<?php
define('TITLE','Change Password');
define('PAGE','changepass');
include('includes/header.php');
include('../dbconnection.php');
session_start();
if(isset($_SESSION['is_adminlogin'])){
    $aEmail= $_SESSION['aEmail'];
}
else{
    echo "<script> location.href='login.php';</script>";
}
$aEmail= $_SESSION['aEmail'];
if(isset($_REQUEST['passupdate'])){
    if($_REQUEST['aPassword']==""){
        $smg='<div class="alert alert-warning mt-2" role="alert">All Fields Required</div>';
    }
else{
$aPass=$_REQUEST['aPassword'];
$sql="UPDATE adminlogin_tb SET a_password='$aPass' WHERE a_email='$aEmail'";
if($conn->query($sql)==true){
     $smg='<div class="alert alert-success mt-2" role="alert">Updated Successfully</div>';
     }
        else{
       $smg='<div class="alert alert-danger mt-2" role="alert"> Unable To Updated </div>';
      }
    }
}
?>
<div class=" container" style="margin-top:100px;"><!--start change password area 2nd column-->
<p class="bg-dark text-white p-2 text-center mt-3 mb-4 p-2 mx-5"><b>Change Your Password</b></p>

 <form action="" method="POST" class="mx-5 ">
    <div class="form-group">
  <label for="inputEmail">Email</label><input type="email" class="form-control" name="inputEmail" id="inputEmail" value="<?php echo $aEmail ?>" readonly>
    </div>
    <div class="form-group">
  <label for="inputnewpassword">New Password</label><input type="password" class="form-control" name="aPassword" id="inputnewpassword" placeholder="New Password" >
    </div>
 <button type="submit" class="btn btn-info mr-4 mt-4" name="passupdate">Update</button>
<button type="reset" class="btn btn-secondary mt-4">Reset</button>
<?php if(isset($smg)){echo $smg;}?>
 </form>
    </div><!--end change password area 2nd column-->

<?php include('includes/footer.php')?>