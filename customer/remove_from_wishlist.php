<?php
session_start(); //to start the session
include 'header.html';
include '../connection.php';
$id=$_GET['id'];
$q="delete from tblwishlist where wId='$id'";
$s= mysqli_query($conn, $q);
if($s)
    echo '<script>location.href="wishlist.php"</script>';
?>