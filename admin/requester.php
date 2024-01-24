<?php
define('TITLE','Requester');
define('PAGE','requester');
include('includes/header.php');
include('../dbconnection.php');
session_start();
if(isset($_SESSION['is_adminlogin'])){
$aEmail=$_SESSION['aEmail'];}
else{
 echo "<script> location.href='login.php'</script>";
   
}
?>
<div class=" container text-center" style="margin-top:100px;">
<p class="bg-dark text-white p-2"><b>List of Requester</b></p>
<?php
$sql="SELECT * FROM requesterlogin_tb";
$result=$conn->query($sql);
if($result->num_rows >0){
    echo '<table class="table">';
   echo '<thead>';
   echo '<tr>';
   echo '<th scope="col">Requester ID </th>';
   echo '<th scope="col">Name </th>';
   echo '<th scope="col">Email </th>';
   echo '<th scope="col">Action </th>';
   echo '<tr>';
   echo '</thead>';
   echo '<tbody>';
   while($row=$result->fetch_assoc()){
    echo '<tr>';
      echo '<td>'.$row["r_login_id"].'</td>';
      echo '<td>'.$row["r_name"].'</td>';
      echo '<td>'.$row["r_email"].'</td>';
      echo '<td>';
       echo '<form action="editreq.php" method="POST" class="d-inline">';
       echo '<input type="hidden" name="id" value='.$row["r_login_id"].'><button class="btn btn-info mr-3" type="submit" value="Edit" name="edit"><i class="fa fa-pencil"></i></button>';
       echo '</form>';
       echo '<form action="" method="POST" class="d-inline">';
       echo '<input type="hidden" name="id" value='.$row["r_login_id"].'><button class="btn btn-secondary mr-3" type="submit" value="Delete" name="delete"><i class="fa fa-trash"></i></button>';
       echo '</form>';
      echo '</td>';
    echo '</tr>';
   }
   echo '</tbody>';
    echo '</table>';
}
else{
  echo '0 results';
}
?>
</div>
<?php 
if(isset($_REQUEST['delete'])){
    $sql="DELETE FROM requesterlogin_tb WHERE r_login_id={$_REQUEST['id']}";
    if($conn->query($sql)==TRUE){
        echo '<meta http-equiv="refresh" content="0;URL=?deleted"/>';
    }
    else{
        echo "Unable To Delete Data";
    }
}
?>

</div><!--end row-->
<div class="float-right"><a href="insertreq.php" class="btn btn-info"><i class="fa fa-plus fa-2x"></i></a></div>
</div><!--end container-->


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
