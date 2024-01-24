<?php
include('dbconnection.php');
if(isset($_REQUEST['rsignup'])){
    //checking for empty fields
    if(($_REQUEST['rname']=="")||($_REQUEST['remail']=="")||($_REQUEST['rpassword']=="")){
        $ans= '<div class="alert alert-warning mt-2" role="alert">All Filds Are Required</div>';
    } 
    else{
        //email already registered
$sql="SELECT r_email FROM requesterlogin_tb WHERE r_email='".$_REQUEST['remail']."'";

$result=$conn->query($sql);
if($result->num_rows==1){
   $ans='<div class="alert alert-warning mt-2" role="alert">email ID already registered</div>';
}
else{
    //assigning user values to variables
$rName=$_REQUEST['rname'];
$rEmail=$_REQUEST['remail'];
$rPassword=$_REQUEST['rpassword'];
$sql="INSERT INTO requesterlogin_tb(r_name,r_email,r_password) VALUES('$rName','$rEmail','$rPassword')";
if(mysqli_query($conn,$sql)==true){
    $ans='<div class="alert alert-success mt-2" role="alert">Account Successfully Created</div>';
}
else{
    echo '<div class="alert alert-danger mt-2" role="alert">Unable To Create</div>';
}
}
    }
}
?>
<div calss="container pt-5 " id="registration">
<h2 class="text-center heading" style="padding-top:40px;">Creat Your Account</h2>
<div class="row mt-4 mb-4 pl-5 sizee">
<div class="col-md-6 offset-md-3 colorform pl-5">
<form action="" class="shadow-lg p-4 rounded border border-dark " method="POST"  >
<div class="form-group">
<i class="fa fa-user"></i><label for="" class="font-weight-bold pl-2">Name</label>
<input type="text"class="form-control sizebox" placeholder="Name" name="rname">
</div>
<div class="form-group">
<i class="fa fa-user"></i><label for="" class="font-weight-bold pl-2">Email</label>
<input type="email"class="form-control sizebox" placeholder="Email" name="remail">
<small class="form-text">We will never share your email.</small>
</div>
<div class="form-group">
<i class="fa fa-key"></i><label for="" class="font-weight-bold pl-2">Password</label>
<input type="password"class="form-control sizebox" placeholder="Password" name="rpassword">
</div>
<button type="submit" class="btn btn-info mt-5 btn-block shadow=sm font-weight-bold" name="rsignup">Sign Up</button><br>
<em style="font-size:13px;">Note-by clicking sign up,you agree to our terms, data policy and cookie policy</em><br>
<?php if(isset($ans)){echo $ans;} ?>
</form>
</div>
</div>
</div>