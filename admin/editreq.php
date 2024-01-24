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

if(isset($_REQUEST['edit'])){
    $sql="SELECT * FROM requesterlogin_tb WHERE r_login_id= {$_REQUEST['id']}";
    $result=$conn->query($sql);
    $ans=$result->fetch_assoc();
}
if(isset($_REQUEST['requpdate'])){
    if(($_REQUEST['r_login_id']=="")||($_REQUEST['r_name']=="")||($_REQUEST['r_email']=="")){
        $msg='<div class="alert alert-warning mt-2" role="alert"> Fill All Fields </div>';
    }else{
        $rid=$_REQUEST['r_login_id'];
        $rname=$_REQUEST['r_name'];
        $remail=$_REQUEST['r_email'];
        $sql="UPDATE requesterlogin_tb SET r_login_id='$rid',r_name='$rname',r_email='$remail' WHERE r_login_id='$rid'";
        if($conn->query($sql)==TRUE){
            $msg='<div class="alert alert-success mt-2" role="alert">Update Successfully</div>';
        }else{
            $msg='<div class="alert alert-danger mt-2" role="alert"> Unable To Update</div>';
        }
    }
}

?>
<div class=" container text-center jumbotron" style="margin-top:100px;">
<h3 class="text-center">Update Requester Detail</h3>
<form action="" method="POST">
<div class="form-group">
<label for="r_login_id">Requeste ID</label>
<input type="text" name="r_login_id" id="r_login_id" class="form-control" value="<?php if(isset($ans['r_login_id'])){echo $ans['r_login_id'];}?>" readonly>
</div>
<div class="form-group">
<label for="r_name">Name</label>
<input type="text" name="r_name" id="r_name" class="form-control" value="<?php if(isset($ans['r_name'])){echo $ans['r_name'];}?>" >
</div>
<div class="form-group">
<label for="r_email">Email</label>
<input type="email" name="r_email" id="r_email" class="form-control" value="<?php if(isset($ans['r_email'])){echo $ans['r_email'];}?>" >
</div>
<div class="text-center">
<button type="submit" class="btn btn-info" id="requpdate" name="requpdate">Update</button>
<a href="requester.php" class="btn btn-secondary">Close</a>
</div>
<?php if(isset($msg)){echo $msg;}?>
</form>
</div><!--end 2nd col-->


<?php include('includes/footer.php')?>