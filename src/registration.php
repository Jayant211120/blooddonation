<?php
$servername="localhost";
$username="root";
$password="";
$database="blooddonation";
$conn=mysqli_connect($servername,$username,$password,$database);
if(isset($_POST['send'])){
$username=$_POST['username'];
$email=$_POST['mail'];
$mobile=$_POST['mobile'];
$password=$_POST['pass'];
$repassword=$_POST['repass'];
$suggestion=$_POST['txtare'];

$sql="INSERT INTO `jayantv` VALUES('$username','$email','$mobile','$password','$repassword','$suggestion')";
if(mysqli_query($conn,$sql)){
    echo"<script>alert('Your Are Successfully Registered')</script>";
    header("location:loginhtml.php");
}
else{
echo"Your Data is not inserted".mysqli_error($conn);
header('location:index.php');
}
mysqli_close($conn);
}
?>