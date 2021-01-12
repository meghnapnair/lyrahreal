<?php
session_start(); //to start the session
include 'header.html';
include '../connection.php';
$id=$_GET['id'];
$q="delete from tblimages  where imgid='$id'";
$s= mysqli_query($conn, $q);
if($s)
    echo '<script>location.href="images.php"</script>';
?>