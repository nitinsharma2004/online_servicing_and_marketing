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
        <!-- <link rel="stylesheet" href="../css/style.css"> -->
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


@media (max-width:997px) {
  .container{
    max-width:100%;
    overflow-x:auto;
  }
}





    </style>
</head>
<body>
   
    <nav class="navbar navbar-expand-md navbar-dark bg-dark pl-5 fixed-top">
<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenue">
            <span class="navbar-toggler-icon font-weight-dark"></span>
        </button>
        <div class=" collapse navbar-collapse" id="myMenue">

    <ul class="nav ">
        <li class="nav-item text-white"><a class="nav-link  <?php if(PAGE=='dashboard'){echo 'active';}?>" href="dashboard.php"><i class="fa fa-tachometer"></i><b>Home</b>
        </a></li>
        <li class="nav-item"><a class="nav-link  <?php if(PAGE=='work'){echo 'active';}?>" href="work.php"><i class="fa fa-paper-plane"></i><b> Work</b>
        </a></li>
        <li class="nav-item"><a class="nav-link  <?php if(PAGE=='request'){echo 'active';}?>" href="request.php"><i class="fa fa-align-center"></i><b>Assign Work</b>
        </a></li>
        <li class="nav-item"><a class="nav-link  <?php if(PAGE=='assests'){echo 'active';}?>" href="assests.php"><i class="fa fa-database"></i><b>Assest</b>
        </a></li>
        <li class="nav-item"><a class="nav-link  <?php if(PAGE=='technician'){echo 'active';}?>" href="technician.php"><i class="fa fa-align-center"></i><b>Worker Detail</b>
        </a></li>
        <li class="nav-item"><a class="nav-link   <?php if(PAGE=='requester'){echo 'active';}?>" href="requester.php"><i class="fa fa-user"></i><b>Requester Detail</b>
        </a></li>
        <li class="nav-item"><a class="nav-link  <?php if(PAGE=='soldproductreport'){echo 'active';}?>" href="soldproductreport.php"><i class="fa fa-table"></i><b>Sell Report</b>
        </a></li>
        <li class="nav-item"><a class="nav-link  <?php if(PAGE=='workreport'){echo 'active';}?>" href="workreport.php"><i class="fa fa-table"></i><b>Work Report</b>
        </a></li>
        <li class="nav-item"><a class="nav-link  <?php if(PAGE=='changepass'){echo 'active';}?>" href="changepass.php"><i class="fa fa-key"></i><b>Change Password</b>
        </a></li>
        <li class="nav-item"><a class="nav-link  <?php if(PAGE=='subscriber'){echo 'active';}?>" href="subdetail.php"><i class="fa fa-key"></i><b>subscribe detail </b>
        </a></li>
        <li class="nav-item"><a class="nav-link" href="../logout.php"><i class="fa fa-sign-out"></i><b>LogOut</b></a></li>

        </ul>
      </div>
   
    </nav><!--end side bar 11st column-->
    