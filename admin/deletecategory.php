<?php
session_start(); //to start the session
include 'header.html';
include '../connection.php';
$id=$_GET['id'];
$q="update tblsubcategory set status='deleted' where subid='$id'";
$s= mysqli_query($conn, $q);
if($s)
    echo '<script>location.href="addcategory.php"</script>';
?>