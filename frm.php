<?php
$con=mysqli_connect("localhost", "root", "" ,"Prime Medical Spa");

if(isset($_REQUEST['submit'])) {
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$phone=$_REQUEST['phone'];
$massage=$_REQUEST['msg'];
$services=$_REQUEST['service'];
$b=implode("<br>--",$services);
$radio=$_REQUEST['radio'];
$query= "INSERT INTO `user`(`name`, `email`, `phone`, `massage`, `services` , `radio`) VALUES ('$name','$email','$phone','$massage','$b','$radio')";
$result=mysqli_query($con,$query);
if ($result == TRUE) {
  header('location:contact.php');
}
else {
  "no";
}
}
else {
  "no";
}
 ?>
