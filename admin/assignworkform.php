<?php
if(session_id()==''){
    session_start();
}
if(isset($_SESSION['is_adminlogin'])){
$aEmail=$_SESSION['aEmail'];}
else{
 echo "<script> location.href='login.php'</script>";
    
}
if(isset($_REQUEST['view'])){
$sql="SELECT * FROM submitrequest_tb WHERE requester_id={$_REQUEST['id']}";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
}
if(isset($_REQUEST['close'])){
    $sql="DELETE FROM submitrequest_tb WHERE requester_id={$_REQUEST['id']}";
    if($conn->query($sql)==TRUE){
        echo '<meta http-equiv="refresh" content="0;URL=?closed" />';
    }
    else{
        echo "Unable TO Delete";
    }
}
if(isset($_REQUEST['assign'])){
    if(($_REQUEST['requester_id']=="")||($_REQUEST['requester_info']=="")||($_REQUEST['requester_desc']=="")||($_REQUEST['requester_name']=="")||($_REQUEST['address1']=="")||($_REQUEST['address2']=="")||($_REQUEST['requester_city']=="")||($_REQUEST['requester_state']=="")||($_REQUEST['requester_zip']=="")||($_REQUEST['requester_email']=="")||($_REQUEST['requester_mobile']=="")||($_REQUEST['assigntech']=="")||($_REQUEST['requester_date']=="")){
        $msg='<div class="alert alert-warning mt-2" role="alert">All Fields Required</div>';
    }
   
        else{
            $rid=$_REQUEST['requester_id'];
            $rinfo= $_REQUEST['requester_info'];
            $rdesc= $_REQUEST['requester_desc'];
            $rname= $_REQUEST['requester_name'];
            $radd1= $_REQUEST['address1'];
            $radd2= $_REQUEST['address2'];
            $rcity= $_REQUEST['requester_city'];
            $rstate= $_REQUEST['requester_state'];
            $rzip= $_REQUEST['requester_zip'];
            $remail= $_REQUEST['requester_email'];
            $rmobile= $_REQUEST['requester_mobile'];
            $rassign= $_REQUEST['assigntech'];
            $rdate= $_REQUEST['requester_date'];
            $sql="INSERT INTO assignwork_tb(requester_id,requester_info,requester_desc,requester_name,requester_add1,requester_add2,requester_city,requester_state,requester_zip,requester_email,requester_mobile,assign_tech,assign_date)VALUES('$rid',' $rinfo',' $rdesc',' $rname',' $radd1',' $radd2',' $rcity','$rstate','$rzip','$remail','$rmobile','$rassign','$rdate')";
            if($conn->query($sql)==TRUE){
                $msg='<div class="alert alert-success col-sm-6 mt-2" >Work Assign Successfully</div>';
            
               }else{
                $msg='<div class="alert alert-danger col-sm-6 mt-2" >Unable To Assign Work</div>';
               }
    }
}
?>

<div class="col-sm-6 mt-5 jumbotron"><!--start service request form 3nd column-->
<form action="" class="mx-5"method="POST"><!--start form-->
<h5 class="text-center">Assign Work Order Request</h5>
<div class="form-group">
<label for="requester_id">Request Id</label><input type="text" class="form-control" id="requester_id" name="requester_id" value="<?php
if(isset($row['requester_id']))echo $row['requester_id'];?>" readonly>
</div>
<div class="form-group">
<label for="requester_Info">Request Info</label><input type="text" class="form-control" id="requester_Info" name="requester_info" value="<?php
if(isset($row['requester_info']))echo $row['requester_info'];?>">
</div>
<div class="form-group">
<label for="requester_desc">Description</label><input type="text" class="form-control" id="requester_desc"  name="requester_desc" value="<?php
if(isset($row['requester_desc']))echo $row['requester_desc'];?>">
</div>
<div class="form-group">
<label for="requester_name">Name</label><input type="text" class="form-control" id="requester_name" name="requester_name" value="<?php
if(isset($row['requester_name']))echo $row['requester_name'];?>">
</div>
<div class="form-row">
<div class="form-group col-md-6">
<label for="address1">Address Line 1</label><input type="text" class="form-control" id="address1" placeholder="House No." name="address1" value="<?php
if(isset($row['requester_add1']))echo $row['requester_add1'];?>">
</div>
<div class="form-group col-md-6">
<label for="address2">Address Line 2</label><input type="text" class="form-control" id="address2" placeholder="Colony" name="address2" value="<?php
if(isset($row['requester_add2']))echo $row['requester_add2'];?>">
</div>
</div>


<div class="form-row">
<div class="form-group col-md-4">
<label for="requester_city">City</label><input type="text" class="form-control" id="requester_city"  name="requester_city" value="<?php
if(isset($row['requester_city']))echo $row['requester_city'];?>">
</div>
<div class="form-group col-md-4">
<label for="requester_state">State</label><input type="text" class="form-control" id="requester_state" name="requester_state" value="<?php
if(isset($row['requester_state']))echo $row['requester_state'];?>">
</div>
<div class="form-group col-md-4">
<label for="requester_zip">Zip</label><input type="number" class="form-control" id="requester_zip" name="requester_zip" value="<?php
if(isset($row['requester_zip']))echo $row['requester_zip'];?>">
</div>
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label for="requester_email">Email</label><input type="email" class="form-control" id="requester_email"  name="requester_email" value="<?php
if(isset($row['requester_email']))echo $row['requester_email'];?>">
</div>
<div class="form-group col-md-6">
<label for="requester_mobile">Mobile</label><input type="number" class="form-control" id="requester_mobile" name="requester_mobile" value="<?php
if(isset($row['requester_mobile']))echo $row['requester_mobile'];?>">
</div>
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label for="assigntech">Assign to Technician</label><input type="text" class="form-control" id="assigntech"  name="assigntech">
</div>
<div class="form-group col-md-6">
<label for="requester_date">Date</label><input type="date" class="form-control" id="requester_date" name="requester_date">
</div>
</div>

<div class="float-right">
<button type="submit" class="btn btn-success" name="assign">Assign</button>
<button type="reset" class="btn btn-info">Reset</button>
</div>
<?php if(isset($msg)){echo $msg;}?>
</form>
</div><!--end service request form 3nd column-->
