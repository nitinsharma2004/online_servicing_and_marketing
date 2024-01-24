<?php
include('dbconnection.php');
if(isset($_REQUEST['sbut'])){
    if($_REQUEST['semail']==""){
        $ans= '<div class="alert alert-warning mt-2" role="alert">All Filds Are Required</div>';
    } 
    else{
$sql="SELECT subemail FROM subscribe WHERE subemail='".$_REQUEST['semail']."'";

$result=$conn->query($sql);
if($result->num_rows==1){
   $ans='<div class="alert alert-warning mt-2" role="alert">email ID already subscribed</div>';
}
else{
$sEmail=$_REQUEST['semail'];
$sql="INSERT INTO subscribe(subemail) VALUES('$sEmail')";
if(mysqli_query($conn,$sql)==true){
    $ans='<div class="alert alert-success mt-2" role="alert">Account Successfully subscribed</div>';
}
else{
    echo '<div class="alert alert-danger mt-2" role="alert">Unable To subscribe</div>';
}
}
    }
}

?>
<div class="content">
        <h1 class="heading">subscirbe now</h1>
        <p>to stay up-to-date with the latest news, exclusive offers, and valuable insights from online services company. By subscribing to our newsletter, you'll gain access to a wealth of information and resources in your inbox. Be the first to know about new product launches, upcoming events, and industry trends that can benefit you and your business. </p>
        <form action="" method="POST">
            <input type="email"  placeholder="enter your email"  class="email" name="semail">
            <input type="submit" value="subscirbe" class="btn" name="sbut">
        </form>
        <br>
        <?php if(isset($ans)){echo $ans;}?>

    </div>

