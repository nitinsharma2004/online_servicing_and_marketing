<?php
define('TITLE','Update Product');
define('PAGE','assests');
include('includes/header.php');
include('../dbconnection.php');
session_start();
if(isset($_SESSION['is_adminlogin'])){
$aEmail=$_SESSION['aEmail'];}
else{
 echo "<script> location.href='login.php'</script>";
}

if(isset($_REQUEST['pupdate'])){
    if(($_REQUEST['pname']=="")||($_REQUEST['pdop']=="")||($_REQUEST['pava']=="")||($_REQUEST['ptotal']=="")||($_REQUEST['poriginalcost']=="")||($_REQUEST['psellingcost']=="")){
        $msg='<div class="alert alert-warning mt-2" role="alert"> Fill All Fields </div>';
    }else{
        $pid=$_REQUEST['pid'];
        $pname=$_REQUEST['pname'];
        $pdop=$_REQUEST['pdop'];
        $pava=$_REQUEST['pava'];
        $ptotal=$_REQUEST['ptotal'];
        $poriginalcost=$_REQUEST['poriginalcost'];
        $psellingcost=$_REQUEST['psellingcost'];

        $sql="UPDATE assets  SET pname='$pname',pdop='$pdop',pava='$pava',ptotal='$ptotal',poriginalcost='$poriginalcost',psellingcost='$psellingcost' WHERE pid='$pid'";
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
   <h3 class="text-center">Update Requester Detail</h3> 
   <?php
if(isset($_REQUEST['edit'])){
    $sql="SELECT * FROM assets WHERE pid= {$_REQUEST['id']}";
    $result=$conn->query($sql);
    $ans=$result->fetch_assoc();
}
?>
<form action="" method="POST">
<div class="form-group">
<label for="pid">Product Id</label>
<input type="text" name="pid" id="pid" class="form-control" value="<?php if(isset($ans['pid'])){echo $ans['pid'];}?>" readonly>
</div>

<div class="form-group">
<label for="pname">Product Name</label>
<input type="text" name="pname" id="pname" class="form-control" value="<?php if(isset($ans['pname'])){echo $ans['pname'];}?>">
</div>

<div class="form-group">
<label for="pdop">Date Of Purchase</label>
<input type="date" name="pdop" id="pdop" class="form-control"  value="<?php if(isset($ans['pdop'])){echo $ans['pdop'];}?>">
</div>

<div class="form-group">
<label for="pava">Available</label>
<input type="text" name="pava" id="pava" class="form-control" value="<?php if(isset($ans['pava'])){echo $ans['pava'];}?>">
</div>

<div class="form-group">
<label for="ptotal">Total</label>
<input type="number" name="ptotal" id="ptotal" class="form-control"  value="<?php if(isset($ans['ptotal'])){echo $ans['ptotal'];}?>">
</div>


<div class="form-group">
<label for="poriginalcost">Original Cost</label>
<input type="number" name="poriginalcost" id="poriginalcost" class="form-control"  value="<?php if(isset($ans['poriginalcost'])){echo $ans['poriginalcost'];}?>">
</div>


<div class="form-group">
<label for="psellingcost">Selling Cost</label>
<input type="number" name="psellingcost" id="psellingcost" class="form-control"  value="<?php if(isset($ans['psellingcost'])){echo $ans['psellingcost'];}?>">
</div>

<div class="text-center">
<button type="submit" class="btn btn-info" id="pupdate" name="pupdate">Update</button>
<a href="assests.php" class="btn btn-secondary">Close</a>
</div>
<?php if(isset($msg)){echo $msg;}?>
</form>
</div><!--end 2nd col-->
<?php include('includes/footer.php')?>