<?php
define('TITLE','Sell Product');
define('PAGE','assests');
include('includes/header.php');
include('../dbconnection.php');
session_start();
if(isset($_SESSION['is_adminlogin'])){
$aEmail=$_SESSION['aEmail'];}
else{
 echo "<script> location.href='login.php'</script>";
}
$sql="SELECT * FROM customer_tb WHERE custid={$_SESSION['myid']}";
$result=$conn->query($sql);
if($result->num_rows==1){
    $row=$result->fetch_assoc();
    echo "<div class=ml-5 mt-5>
    <h3 class='text-center'>Customer Bill</h3>
    <table class='table'>
    <tbody>
    <tr>
      <th> Customer Id</th>
      <td>".$row['custid']."</td>
    </tr>

    <tr>
    <th> Customer name</th>
    <td>".$row['custname']."</td>
    </tr>

    <tr>
    <th> Address</th>
    <td>".$row['custadd']."</td>
  </tr>

  <tr>
  <th> Product</th>
  <td>".$row['cpname']."</td>
</tr>

<tr>
<th> Quantity </th>
<td>".$row['cpquantity']."</td>
</tr>

<tr>
<th> Product Each</th>
<td>".$row['cpeach']."</td>
</tr>

<tr>
<th>Total Cost</th>
<td>".$row['cptotal']."</td>
</tr>

<tr>
<th> Date</th>
<td>".$row['cpdate']."</td>
</tr>
<td><form class='d-print-none'><input class='btn btn-info' type='submit' value='Print' onclick='window.print()'></form></td>
<td><a href='assests.php' class='btn btn-secondary d-print-none'>Close</a></td>
</tr>
</tbody>
</table></div>";
}else{
    echo "Failed";
}
?>
<?php include('includes/footer.php')?>