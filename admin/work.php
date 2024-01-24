<?php
define('TITLE','Work Order');
define('PAGE','work');
include('includes/header.php');
include('../dbconnection.php');
session_start();
if(isset($_SESSION['is_adminlogin'])){
$aEmail=$_SESSION['aEmail'];}
else{
 echo "<script> location.href='login.php'</script>";
}
?>
<!-- start 2nd column -->
<div class=" container" style="margin-top:100px;">
<p class="bg-dark text-white p-2 text-center mt-3 mb-4 "><b>Assigned Work Details</b></p>
<?php
$sql="SELECT * FROM assignwork_tb ";
$result=$conn->query($sql);
if($result->num_rows>0){
    echo '<table class="table">';
    echo '<thead>';
    echo '<tr>';
    echo '<th scope="col">Requester id</th>';
    echo '<th scope="col">Requester Info</th>';
    echo '<th scope="col">Name</th>';
    echo '<th scope="col">Address</th>';
    echo '<th scope="col">City</th>';
    echo '<th scope="col">Mobile</th>';
    echo '<th scope="col">Technician</th>';
    echo '<th scope="col">Assigned Date</th>';
    echo '<th scope="col">Action</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody';
    while($row=$result->fetch_assoc()){
    echo '<tr>';
     echo '<td>'.$row['requester_id'].'</td>';
     echo '<td>'.$row['requester_info'].'</td>';
     echo '<td>'.$row['requester_name'].'</td>';
     echo '<td>'.$row['requester_add2'].'</td>';
     echo '<td>'.$row['requester_city'].'</td>';
     echo '<td>'.$row['requester_mobile'].'</td>';
     echo '<td>'.$row['assign_tech'].'</td>';
     echo '<td>'.$row['assign_date'].'</td>';
     echo '<td>';
      echo '<form action="viewassignwork.php" method="POST" class="d-inline mr-2" >';
      echo '<input type="hidden" name="id" value='.$row['requester_id'].'><button class="btn btn-info" name="view" value="View" type="submit" ><i class="fa fa-eye"></i></button>';
      echo '</form>';
      echo '<form action="" method="POST" class="d-inline">';
      echo '<input type="hidden" name="id" value='.$row['requester_id'].'><button class="btn btn-secondary" name="delete" value="delete" type="submit"><i class="fa fa-trash"></i></button>';
      echo '</form>';
    echo '</td>';
    echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
}
else{
    echo '0 result';
}
if(isset($_REQUEST['delete'])){
    $sql="DELETE FROM assignwork_tb WHERE requester_id={$_REQUEST['id']}";
    if($conn->query($sql)==TRUE){
        echo '<meta http-equiv="refresh" content="0;URL=?deleted"/>';
    }
    else{
        echo "Unable To Delete Data";
    }
}
?>
</div><!-- end 2nd column -->
<?php include('includes/footer.php')?>