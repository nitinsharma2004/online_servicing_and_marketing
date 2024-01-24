<?php
define('TITLE','Submit Request');
define('PAGE','submitrequest');

include('includes/header.php');
include('../dbconnection.php');
session_start();
if($_SESSION['is_login']){
    $rEmail= $_SESSION['rEmail'];
}
else{
    echo "<script> location.href='requesterlogin.php'</script>";
}
if(isset($_REQUEST['submitrequest'])){
    //checking for empty fields
    if(($_REQUEST['requestinfo']=="")||($_REQUEST['requestdesc']=="")||($_REQUEST['requestname']=="")||($_REQUEST['requestaddress1']=="")||($_REQUEST['requestaddress2']=="")||($_REQUEST['requestcity']=="")||($_REQUEST['requeststate']=="")||($_REQUEST['requestzip']=="")||($_REQUEST['requestemail']=="")||($_REQUEST['requestmobile']=="")||($_REQUEST['requestdate']=="")){
        $answe='<div class="alert alert-warning   col-sm-6 mt-2" >All Fields Required</div>';
    }
    else{
       $rinfo= $_REQUEST['requestinfo'];
       $rdesc= $_REQUEST['requestdesc'];
       $rname= $_REQUEST['requestname'];
       $radd1= $_REQUEST['requestaddress1'];
       $radd2= $_REQUEST['requestaddress2'];
       $rcity= $_REQUEST['requestcity'];
       $rstate= $_REQUEST['requeststate'];
       $rzip= $_REQUEST['requestzip'];
       $remail= $_REQUEST['requestemail'];
       $rmobile= $_REQUEST['requestmobile'];
       $rdate= $_REQUEST['requestdate'];
       $sql="INSERT INTO submitrequest_tb(requester_info,requester_desc,requester_name,requester_add1,requester_add2,requester_city,requester_state,requester_zip,requester_email,requester_mobile,requester_date)VALUES(' $rinfo',' $rdesc',' $rname',' $radd1',' $radd2',' $rcity','$rstate','$rzip','$remail','$rmobile','$rdate')";
       if($conn->query($sql)==TRUE){
        $genid=mysqli_insert_id($conn);
        $answe='<div class="alert alert-success col-sm-6 mt-2" >Request Submit Successfully</div>';
        $_SESSION['myid']=$genid;
        echo "<script> location.href='submitrequestsucc.php'</script>";
       }else{
        $answe='<div class="alert alert-danger col-sm-6 mt-2" >Unable to Submit Your Request</div>';
       }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <div class=" container text-center" style="margin-top:100px;"><!--start service request form 2nd column-->
   <h2 class="mx-5 bg-info text-white text-center">Submit your Request</h2>

<form action="" class="mx-5"method="POST"><!--start form-->
<div class="form-group">
<label for="inputRequestInfo">Request Info</label><input type="text" class="form-control" id="inputRequestInfo" placeholder="Request Info" name="requestinfo">
</div>
<div class="form-group">
<label for="inputRequestDescription">Description</label><input type="text" class="form-control" id="inputRequestDescription" placeholder="Write Description" name="requestdesc">
</div>
<div class="form-group">
<label for="inputRequestName">Name</label><input type="text" class="form-control" id="inputRequestName" placeholder="Name" name="requestname">
</div>
<div class="form-row">
<div class="form-group col-md-6">
<label for="inputAddress1">Address Line 1</label><input type="text" class="form-control" id="inputAddress1" placeholder="House No." name="requestaddress1">
</div>
<div class="form-group col-md-6">
<label for="inputAddress2">Address Line 2</label><input type="text" class="form-control" id="inputAddress2" placeholder="Colony" name="requestaddress2">
</div>
</div>


<div class="form-row">
<div class="form-group col-md-6">
<label for="inputCity">City</label><input type="text" class="form-control" id="inputCity"  name="requestcity">
</div>
<div class="form-group col-md-4">
<label for="inputState">State</label><input type="text" class="form-control" id="inputState" name="requeststate">
</div>
<div class="form-group col-md-2">
<label for="inputZip">Zip</label><input type="number" class="form-control" id="inputZip" name="requestzip" placeholder="Enter Pin Code">
</div>
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail">Email</label><input type="email" class="form-control" id="inputEmail"  name="requestemail">
</div>
<div class="form-group col-md-2">
<label for="inputMobile">Mobile</label><input type="number" class="form-control" id="inputMobile" name="requestmobile" placeholder="Enter Your Number">
</div>
<div class="form-group col-md-2">
<label for="inputDate">Date</label><input type="date" class="form-control" id="inputDate" name="requestdate">
</div>
</div>

<button type="submit" class="btn btn-info" name="submitrequest">Submit</button>
<button type="reset" class="btn btn-secondary ">Reset</button>
<?php if(isset($answe)){echo $answe;}?>
</form><!--start form-->
</div><!--end service request form 2nd column-->


<!--only number for filds
<script>
    function isInputNumber(evt){
        var ch=string.formCharCode(evt.which);
        if(!(/[0-9]/.test(ch))){
            evt.preventDefault();
        }
    }
</script> -->

    <?php
include('includes/footer.php');
?>
