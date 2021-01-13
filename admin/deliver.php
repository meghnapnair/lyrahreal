<?php
session_start(); //to start the session
include 'header.html';
include '../connection.php';
$id=$_GET['id'];
$q="update tblordermaster set oStatus='delivered' where oid='$id'";
$s= mysqli_query($conn, $q);
if($s)
{
    $q="select pStatus from tblpayment where oid='$id'";
    $s= mysqli_query($conn, $q);
    $r= mysqli_fetch_array($s);
    if($r[0]=="POD")
    {
        $q="select oTotal from tblordermaster where oid='$id'";
    $s= mysqli_query($conn, $q);
    $r= mysqli_fetch_array($s);
    $amt=$r[0]+100;
    $q="update tblpayment set pAmount='$amt' where oid='$id'";
    $s= mysqli_query($conn, $q);
    echo '<script>location.href="orders.php"</script>';
    }

}
?>