<?php
define('TITLE','Work Report');
define('PAGE','workreport');
include('includes/header.php');
include('../dbconnection.php');
session_start();
if(isset($_SESSION['is_adminlogin'])){
$aEmail=$_SESSION['aEmail'];}
else{
 echo "<script> location.href='login.php'</script>";
}
?>
<!--start 2nd column-->
<div class=" container" style="margin-top:100px;">
<p class="bg-dark text-white p-2 text-center mt-3 mb-4 p-2"><b>Assigned Work Report</b></p>

<form action="" method="POST" class="d-print-none">
    <div class="form-row">
        <div  class="form-group col-md-2">
<input type="date" class="form-control" name="startdate" id="startdate">
</div><span>To</span>

<div  class="form-group col-md-2">
<input type="date" class="form-control" name="enddate" id="enddate">
</div>
<div class="form-group">
<input type="submit" class="btn btn-info" name="searchsubmit" value="Search">
    </div>
    </div>
</form>
<?php
if(isset($_REQUEST['searchsubmit'])){
    $startdate=$_REQUEST['startdate'];
    $enddate=$_REQUEST['enddate'];
 $sql="SELECT * FROM assignwork_tb WHERE assign_date BETWEEN '$startdate' AND '$enddate'";
$result=$conn->query($sql);
if($result->num_rows >0){
    echo '<p class="bg-dark text-white text-center p-2 mt-4">Details</p>';
    echo '<table class="table">';
    echo '<thead>';
    echo '<tr>';
    echo '<th scope="col"> Requester ID</th>';
    echo '<th scope="col"> Requester Info</th>';
    echo '<th scope="col"> Name </th>';
    echo '<th scope="col"> Address</th>';
    echo '<th scope="col">City</th>';
    echo '<th scope="col"> Mobile</th>';
    echo '<th scope="col"> Technician</th>';
    echo '<th scope="col">Assigned Date</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    while($row=$result->fetch_assoc()){
        echo '<tr>';
        echo '<td>'.$row['requester_id'].' </td>';
        echo '<td> '.$row['requester_info'].'</td>';
        echo '<td>'.$row['requester_name'].' </td>';
        echo '<td> '.$row['requester_add2'].'</td>';
        echo '<td> '.$row['requester_city'].'</td>';
        echo '<td>'.$row['requester_mobile'].' </td>';
        echo '<td>'.$row['assign_tech'].' </td>';
        echo '<td>'.$row['assign_date'].' </td>';
        echo '</tr>';
    }
    echo '<tr>';
     echo '<td>';
       echo '<input type="submit" class="btn btn-info d-print-none" value="Print" onclick="window.print()">';
     echo '</td>';
    echo '</tr>';
    echo '<tbody>';
    echo '</table >';
}
else{
    echo '<div class="alert alert-warning mt-2" role="alert"> No Record Found ! </div>';
}
}
?>
</div><!--end 2nd column-->
<?php include('includes/footer.php')?>