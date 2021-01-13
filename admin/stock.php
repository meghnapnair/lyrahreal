<?php
session_start(); //to start the session
include 'header.html';
include '../connection.php';
$id=$_GET['id'];
$status=$_GET['status'];
if($status==1)
    $status="In stock";
else if($status==0)
    $status="Out of stock";
else
    $status="Deleted";
$q="update tblproduct set pStatus='$status' where pId='$id'";
$s= mysqli_query($conn, $q);
if($s)
    echo '<script>location.href="product.php"</script>';
?>