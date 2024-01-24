<?php
 define('TITLE','Success');
include('../dbconnection.php');
session_start();
if($_SESSION['is_login']){
    $rEmail= $_SESSION['rEmail'];
}
else{
    echo "<script> location.href='requesterlogin.php';</script>";
}
$sql= "SELECT * FROM submitrequest_tb WHERE requester_id={$_SESSION['myid']}";
$result=$conn->query($sql);
if($result->num_rows==1){
    $row=$result->fetch_assoc();
    echo "<div class=' container text-center' style='margin-top:100px;'>
    <table class='table table-bordered'>
    <tbody>
    <tr>
    <th>Requester ID</th>
    <td>".$row['requester_id']."</td>
    </tr>

    <tr>
    <th>Requester Name</th>
    <td>".$row['requester_name']."</td>
    </tr>

    <tr>
    <th>Email ID</th>
    <td>".$row['requester_email']."</td>
    </tr>

    <tr>
    <th>Request Info</th>
    <td>".$row['requester_info']."</td>
    </tr>

    <tr>
    <th>Requester Description</th>
    <td>".$row['requester_desc']."</td>
    </tr>

    <tr>
    <td>
    <div class='d-print-none'><input class='btn btn-danger' type='submit' value='Print' onclick='window.print()'></div>
    <div class='text-center'><a href='submitrequest.php' class='btn btn-info mt-3 font-weight-bold'>Back to Home</a>

</div>
    </td>
    </tr>

    </tbody>
    </table>
    </div>
    ";
}
else{
    echo "Failed";
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
        <link rel="stylesheet" href="../css/custom.css">
    <title><?php echo TITLE?></title>
</head>
<body>
    <!--top navbar-->
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow"><a class="navbar-brand col-sm-3 col-md-2 mr-0" href="requesterprofile.php"> OSMS</a></nav>

   
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



