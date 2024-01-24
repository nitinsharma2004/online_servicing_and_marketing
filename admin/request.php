<?php
define('TITLE','Request');
define('PAGE','request');
include('includes/header.php');
include('../dbconnection.php');
session_start();
if(isset($_SESSION['is_adminlogin'])){
$aEmail=$_SESSION['aEmail'];}
else{
 echo "<script> location.href='login.php'</script>";
  
}
?>
<div class="container-fluid " style="margin-top:100px;"><!--start second column-->
<div class="row">
  <div class="col-sm-5">
<?php
$sql="SELECT requester_id,requester_info,requester_desc,requester_date FROM submitrequest_tb";
$result=$conn->query($sql);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
     echo '<div class="card mx-5 mt-5">';
        echo '<div class="card-header">';
        echo 'Request Id:'.$row['requester_id'];
        echo '</div>';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">Request Info:'.$row['requester_info'];
        echo '</h5>';
        echo '<p class="card-text">'.$row['requester_desc'];
        echo '</p>';
        echo '<p class="card-text">Request Date:'.$row['requester_date'];
        echo '</p>';
        echo '<div class="float-right">';
          echo'<form action="" method="post">';
          echo '<input type="hidden" name="id" value='.$row["requester_id"].'>';
            echo '<input type="submit" class="btn btn-info mr-3" value="View" name="view">';
            echo '<input type="submit" class="btn btn-secondary" value="Close" name="close">';
          echo '</form>';
        echo '</div>';
        echo '</div>';
     echo '</div>';
    }
}
?>
</div>


<?php
include('assignworkform.php');
?>
</div>
</div><!--end second column-->
<?php
include('includes/footer.php');
?>