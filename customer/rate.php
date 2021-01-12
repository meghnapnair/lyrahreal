<?php
session_start();
$email=$_SESSION['email'];

include '../connection.php';
$pid=$_GET['pid'];
$rat=$_GET['r'];
$q="insert into tblrating (pId,email,rating) values('$pid','$email','$rat')";
$s= mysqli_query($conn, $q);
echo'<script>alert("Thank you for your rating")</script>';
                    echo '<script>location.href="orders.php"</script>';

?>