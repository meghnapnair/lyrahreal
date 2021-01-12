<?php
session_start(); //to start the session
include 'header.php';
include '../connection.php';
$id=$_GET['id'];
$q="delete from tblcart where cartid='$id'";
$s= mysqli_query($conn, $q);
if($s)
    echo '<script>location.href="cart.php"</script>';
?>