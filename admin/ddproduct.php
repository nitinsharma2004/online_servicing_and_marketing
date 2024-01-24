<?php
define('TITLE','Add New Product');
define('PAGE','assests');
include('includes/header.php');
include('../dbconnection.php');
session_start();
if(isset($_SESSION['is_adminlogin'])){
$aEmail=$_SESSION['aEmail'];}
else{
 echo "<script> location.href='login.php'</script>";
}
if(isset($_REQUEST['psubmit'])){
    if(($_REQUEST['pname']=="")||($_REQUEST['pdop']=="")||($_REQUEST['pava']=="")||($_REQUEST['ptotal']=="")||($_REQUEST['poriginalcost']=="")||($_REQUEST['psellingcost']=="")){
        $msg='<div class="alert alert-warning mt-2" role="alert"> Fill All Fields </div>';
    }else{
      
        $pname=$_REQUEST['pname'];
        $pdop=$_REQUEST['pdop'];
        $pava=$_REQUEST['pava'];
        $ptotal=$_REQUEST['ptotal'];
        $poriginalcost=$_REQUEST['poriginalcost'];
        $psellingcost=$_REQUEST['psellingcost'];

        $sql="INSERT INTO assets (pname,pdop,pava,ptotal,poriginalcost,psellingcost) VALUES ('$pname','$pdop','$pava','$ptotal','$poriginalcost','$psellingcost')";
        if($conn->query($sql)==TRUE){
        $msg='<div class="alert alert-success mt-2" role="alert">Added Successfully</div>';
        }else{
            $msg='<div class="alert alert-danger mt-2" role="alert"> Unable To Add</div>';
        }
    }
}
?>
<!--2nd column-->
<div class="container jumbotron" style="margin: top 100px;">
<h3 class="text-center">Add New Product</h3>
<form action="" method="POST">
<div class="form-group">
<label for="pname">Product Name</label>
<input type="text" name="pname" id="pname" class="form-control" >
</div>

<div class="form-group">
<label for="pdop">Date Of Purchase</label>
<input type="date" name="pdop" id="pdop" class="form-control"  >
</div>

<div class="form-group">
<label for="pava">Available</label>
<input type="text" name="pava" id="pava" class="form-control" >
</div>

<div class="form-group">
<label for="ptotal">Total</label>
<input type="number" name="ptotal" id="ptotal" class="form-control"  >
</div>


<div class="form-group">
<label for="poriginalcost">Original Cost</label>
<input type="number" name="poriginalcost" id="poriginalcost" class="form-control"  >
</div>


<div class="form-group">
<label for="psellingcost">Selling Cost</label>
<input type="number" name="psellingcost" id="psellingcost" class="form-control"  >
</div>

<div class="text-center">
<button type="submit" class="btn btn-info" id="psubmit" name="psubmit">Submit</button>
<a href="assests.php" class="btn btn-secondary">Close</a>
</div>
<?php if(isset($msg)){echo $msg;}?>
</form>
</div><!--end 2nd col-->
<?php include('includes/footer.php')?>