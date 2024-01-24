<?php
define('TITLE','Dashboard');
define('PAGE','dashboard');
include('includes/header.php');
include('../dbconnection.php');
session_start();
if(isset($_SESSION['is_adminlogin'])){
$aEmail=$_SESSION['aEmail'];}
else{
 echo "<script> location.href='login.php'</script>";
}
$sql="SELECT max(requester_id) FROM submitrequest_tb";
$result=$conn->query($sql);
$row=$result->fetch_row();
$submit=$row[0];

$sql="SELECT max(rno) FROM assignwork_tb";
$result=$conn->query($sql);
$row=$result->fetch_row();
$assign=$row[0];

$sql="SELECT *FROM technician_db";
$result=$conn->query($sql);
$totaltech=$result->num_rows;

?>
    <div class="container mt-5"><!--start 2nd column-->
<div class="row text-center mx-5">
<div class="col-sm-4 mt-5">
<div class="card text-white bg-info mb-3"style="max-width:18rem;">
<div class="card-header">Request Received</div>
<div class="card-body">
<h4 class="card-tittle"><?php echo $submit;?></h4>
<a href="request.php" class="btn text-white">View</a>
</div>
</div>
</div>


<div class="col-sm-4 mt-5">
<div class="card text-white bg-warning mb-3"style="max-width:18rem;">
<div class="card-header">Assigned Work</div>
<div class="card-body">
<h4 class="card-tittle"><?php echo $assign;?></h4>
<a href="work.php" class="btn text-white">View</a>
</div>
</div>
</div>



<div class="col-sm-4 mt-5">
<div class="card text-white bg-success mb-3"style="max-width:18rem;">
<div class="card-header">Number Of Technician</div>
<div class="card-body">
<h4 class="card-tittle"><?php echo $totaltech;?></h4>
<a href="technician.php" class="btn text-white">View</a>
</div>
</div>
</div>

</div>
<div class="mx-5 mt-5 text-center">
<p class="bg-dark text-white p-2">List Of Requester</p>
<?php
$sql="SELECT * FROM requesterlogin_tb";
$result=$conn->query($sql);
if($result->num_rows>0){
    echo '
    <table class="table">
    <thead>
    <tr>
    <th scope="col">Requester ID</th>
    <th scope="col">Name</th>
    <th scope="col">Email</th>
    </tr>
</thead>
<tbody>';
    while($row=$result->fetch_assoc()){
   echo '<tr>';
 echo '<td>'.$row["r_login_id"].'</td>';
 echo '<td>'.$row["r_name"].'</td>';
 echo '<td>'.$row["r_email"].'</td>';
 echo '</tr>';
    }
   echo '</tbody>
    </table> ';
}
else{
    echo '0 Result';
}
?>
</div>
    </div><!--end 2nd column-->
<?php include('includes/footer.php')?>