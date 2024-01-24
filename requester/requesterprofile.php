<?php
define('TITLE','Requester Profile');
define('PAGE','requesterprofile');
include('includes/header.php');
include('../dbconnection.php');
session_start();
if($_SESSION['is_login']){
    $rEmail= $_SESSION['rEmail'];
}
else{
    echo "<script> location.href='requesterlogin.php';</script>";
}
$sql="SELECT r_name,r_email FROM requesterlogin_tb WHERE r_email='$rEmail'";
$result=$conn->query($sql);
if($result->num_rows==1){
    $row=$result->fetch_assoc();
    $rName=$row['r_name'];   
}       

if(isset($_REQUEST['nameupdate'])){
    if($_REQUEST['rName']==""){
        $answ='<div class="alert alert-warning mt-2" role="alert">All Fields Required</div>';
    }
    else{
       $rName= $_REQUEST['rName'];
       $sql="UPDATE requesterlogin_tb SET r_name='$rName' WHERE r_email='$rEmail'";
       if($conn->query($sql)==true){
        $answ='<div class="alert alert-success mt-2" role="alert">Updated Successfully</div>';
       }
       else{
       $answ='<div class="alert alert-danger mt-2" role="alert"> Unable To Updated </div>';
       }
    }
}
?>



    <div class=" container text-center" style="margin-top:100px;"><!--start profile area 2nd column-->
    <h2 class="mx-5 bg-dark text-white text-center">You Can Change Your Name In this Section</h2>
 <form action="" method="POST" class="mx-5 mt-4">
    <div class="form-group">
  <label for="rEmail">Email</label><input type="email" class="form-control" name="rEmail" id="rEmail" value="<?php echo $rEmail ?>" readonly>
    </div>
    <div class="form-group">
  <label for="rName">Name</label><input type="text" class="form-control" name="rName" id="rName" value="<?php echo $rName ?>">
    </div>
 <button type="submit" class="btn btn-info" name="nameupdate">Update</button><br>
 <?php if(isset($answ)){echo $answ;}?>
 </form>
    </div><!--end profile area 2nd column-->

    <?php
include('includes/footer.php');
?>