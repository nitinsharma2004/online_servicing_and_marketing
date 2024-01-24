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
    <style>
       .active{
    color:red;
    background-color:pink
  }
  a{
    color: white;
  }
  a:hover{
    color:green;
  }
  
    </style>
</head>
<body>
    <!--top navbar-->
  
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark pl-5 fixed-top">
    <a href="index.php" class="navbar-brand">Online Service and Mart</a>
<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenue">
            <span class="navbar-toggler-icon font-weight-dark"></span>
        </button>
        <div class=" collapse navbar-collapse" id="myMenue">
    <ul class="nav">
        <li class="nav-item"><a class="nav-link <?php if(PAGE=='requesterprofile'){echo 'active';}?>" href="requesterprofile.php"><i class="fa fa-user"></i><b>Profile</b>
        </a></li>
        <li class="nav-item"><a class="nav-link <?php if(PAGE=='submitrequest'){echo 'active';}?>" href="submitrequest.php"><i class="fa fa-paper-plane"></i><b>Submit Request</b>
        </a></li>
        <li class="nav-item"><a class="nav-link <?php if(PAGE=='checkstatus'){echo 'active';}?>" href="checkstatus.php"><i class="fa fa-align-center"></i><b>Check Status</b>
        </a></li>
        <li class="nav-item"><a class="nav-link <?php if(PAGE=='requesterchangepass'){echo 'active';}?>" href="requesterchangepass.php"><i class="fa fa-key"></i><b>Change Password</b>
        </a></li>
        <li class="nav-item"><a class="nav-link" href="../logout.php"><i class="fa fa-sign-out"></i><b>LogOut</b></a></li>

        </ul>
      </div>
    </nav><!--end side bar 11st column-->
   
