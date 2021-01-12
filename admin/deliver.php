<?php
session_start(); //to start the session
include 'header.html';
include '../connection.php';
$id=$_GET['id'];
$q="update tblordermaster set oStatus='delivered' where oid='$id'";
$s= mysqli_query($conn, $q);
if($s)
{
    
    echo '<script>location.href="orders.php"</script>';

}
?>