<?php
define('TITLE','Sell Product');
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
    if(($_REQUEST['cname']=="")||($_REQUEST['cadd']=="")||($_REQUEST['pname']=="")||($_REQUEST['pquantity']=="")||($_REQUEST['psellingcost']=="")||($_REQUEST['totalcost']=="")||($_REQUEST['inputdate']=="")){
        $msg='<div class="alert alert-warning mt-2" role="alert"> Fill All Fields </div>';
    }else{
        $pid=$_REQUEST['pid'];
        $pava=$_REQUEST['pava']- $_REQUEST['pquantity'];

        $custname=$_REQUEST['cname'];
        $custadd=$_REQUEST['cadd'];
        $cpname=$_REQUEST['pname'];
        $cpquantity=$_REQUEST['pquantity'];
        $cpeach=$_REQUEST['psellingcost'];
        $cptotal=$_REQUEST['totalcost'];
        $cpdate=$_REQUEST['inputdate'];
        $sql="INSERT INTO customer_tb (custname,custadd,cpname,cpquantity,cpeach,cptotal,cpdate) VALUES('$custname','$custadd','$cpname','$cpquantity','$cpeach','$cptotal','$cpdate')";
        if($conn->query($sql)==TRUE){
            $genid=  mysqli_insert_id($conn);
            session_start();
            $_SESSION['myid']=$genid;
       echo "<script> location.href='productsellsuccess.php';</script>";
        }
        $sqlup="UPDATE assets SET pava='$pava' WHERE pid='$pid'";
        $conn->query($sqlup);
    }
}
?>

<!--start 2nd col-->
<div class=" container  jumbotron" style="margin-top:100px;">
   <h3 class="text-center"><b>Customer BILL</b></h3> 
   <?php
if(isset($_REQUEST['issue'])){
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
<label for="cname">Customer Name</label>
<input type="text" name="cname" id="cname" class="form-control" value="<?php if(isset($ans['cname'])){echo $ans['cname'];}?>">
</div>

<div class="form-group">
<label for="cadd">Customer Address</label>
<input type="text" name="cadd" id="cadd" class="form-control" value="<?php if(isset($ans['cadd'])){echo $ans['cadd'];}?>">
</div>

<div class="form-group">
<label for="pname">Product Name</label>
<input type="text" name="pname" id="pname" class="form-control" value="<?php if(isset($ans['pname'])){echo $ans['pname'];}?>" readonly>
</div>

<div class="form-group">
<label for="pava">Available</label>
<input type="text" name="pava" id="pava" class="form-control" value="<?php if(isset($ans['pava'])){echo $ans['pava'];}?>" readonly>
</div>

<div class="form-group">
<label for="pquantity">Quantity</label>
<input type="number" name="pquantity" id="pquantity" class="form-control" value="<?php if(isset($ans['pquantity'])){echo $ans['pquantity'];}?>">
</div>

<div class="form-group">
<label for="psellingcost">Prize Of Product</label>
<input type="number" name="psellingcost" id="psellingcost" class="form-control"  value="<?php if(isset($ans['psellingcost'])){echo $ans['psellingcost'];}?>"readonly>
</div>

<div class="form-group">
<label for="totalcost"> Total Prize</label>
<input type="number" name="totalcost" id="totalcost" class="form-control"  value="<?php if(isset($ans['totalcost'])){echo $ans['totalcost'];}?>">
</div>

<div class="form-group col-md-4">
<label for="inputdate"> Date</label>
<input type="date" name="inputdate" id="inputdate" class="form-control"  value="<?php if(isset($ans['inputdate'])){echo $ans['inputdate'];}?>">
</div>

<div class="text-center">
<button type="submit" class="btn btn-info" id="psubmit" name="psubmit">Submit</button>
<a href="assests.php" class="btn btn-secondary">Close</a>
</div>
<?php if(isset($msg)){echo $msg;}?>
</form>
</div><!--end 2nd col-->
<?php include('includes/footer.php')?>