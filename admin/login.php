<?php
include('../dbconnection.php');
session_start();
if(!isset($_SESSION['is_adminlogin'])){
if(isset($_REQUEST['aEmail'])){
$aEmail=mysqli_real_escape_string($conn,trim($_REQUEST['aEmail']));
$aPassword=mysqli_real_escape_string($conn,trim($_REQUEST['aPassword']));
$sql="SELECT a_email,a_password FROM adminlogin_tb WHERE a_email ='".$aEmail."' AND a_password='".$aPassword."'limit 1";
$result=$conn->query($sql);
if($result->num_rows==1){
    $_SESSION['is_adminlogin']=true;
    $_SESSION['aEmail']=$aEmail;
 echo "<script> location.href='dashboard.php';</script>";
    exit;
}
else{
    $answer='<div class="alert alert-warning mt-2" role="alert">Enter valid Email And Password</div>';
}
}
}else{
    echo "<script> location.href='dashboard.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            .boundry{
                border:3px solid black;
                border-radius:20px;
                border-color:red;
                border-width:2px;
                padding:20px;
                background-color:white;
                
            }
            body{
            background:linear-gradient(to left bottom ,lightblue , lightpink,lightgreen, lightyellow,lightcyan,lightblue);
                min-height:100vh;
            }
        </style>
    <title>Login</title>
</head>
<body>
    <div class="mt-5 mb-3 text-center "style="font-size:30px;">
    <i class="fa fa-stethoscope"></i>
  <span>Online Service Management Service</span>
    </div>
    <p  class="text-center "style="font-size:20px;"><i class="fa fa-user-secret text-danger p-2"></i>Admin Area (Demo)</p>
    <div class="container">
<div class="row justify-content-center mt-5">
<div class="col-sm-6 col-md-4"><!--1st column-->
<form action="" class="boundry" method="POST">
<div class="form-group ">
<i class="fa fa-user"></i><label for="email" class="font-weight-bold pl-2">Email</label>
<input type="email"class="form-control" placeholder="Email" name="aEmail">
<small class="form-text">We will never share your email.</small>
</div>
<div class="form-group">
<i class="fa fa-key"></i><label for="passs" class="font-weight-bold pl-2">Password</label>
<input type="password"class="form-control" placeholder="Password" name="aPassword">
</div>
<button type="submit" class="btn btn-outline-info mt-4 font-weight-bold btn-block" >Login</button>
<?php
if(isset($answer)){echo $answer;}
?>
</form>
<div class="text-center"><a href="../index.php" class="btn btn-info mt-3 font-weight-bold">Back to Home</a>

</div>
</div><!--end 1st column-->
</div>
    </div>
    <!--javascript-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>