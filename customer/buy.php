<?php
session_start();
include 'header.php';
include '../connection.php';
$id=$_GET['id'];
$qty=$_GET['qty'];
$email=$_SESSION['email'];

$q="insert into tblordermaster(cEmail,oDate,oStatus)values('$email',(select sysdate()),'partial')";
$s= mysqli_query($conn, $q);
if($s)
{
    $q="select max(oid) from tblordermaster";
        $s= mysqli_query($conn, $q);
        $r= mysqli_fetch_array($s);
        $oid=$r[0];
    $q="insert into tblorderchild(oid,pId,qty)values('$oid','$id','$qty')";
    $s= mysqli_query($conn, $q);
    if($s)
    {
        $q="select pRate from tblproduct where pId='$id'";
        $s= mysqli_query($conn, $q);
        $r= mysqli_fetch_array($s);
        $tot=$r[0]*$qty;
        $q="update tblordermaster set oTotal='$tot',shipping='100',shipping='100' where oid ='$oid'";
        echo $q;
        $s= mysqli_query($conn, $q);
        if($s)
            echo '<script>location.href="buydetails.php"</script>';
    }
}
?>
