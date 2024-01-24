<?php
define('TITLE','Subscriber');
define('PAGE','subscriber');
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
    <h2 class="text-center bg-dark fw-bold text-white">List of Subscriber</h2>
<?php
$sql="SELECT * FROM subscribe";
$result=$conn->query($sql);
if($result->num_rows>0){
    echo '
    <table class="table border">
    <thead>
    <tr>
    <th scope="col">S.NO </th>
    <th scope="col">Email</th>
    </tr>
</thead>
<tbody>';
    while($row=$result->fetch_assoc()){
   echo '<tr>';
 echo '<td>'.$row["sid"].'</td>';
 echo '<td>'.$row["subemail"].'</td>';
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