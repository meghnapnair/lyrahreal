<?php
session_start();
include 'header.php';
include '../connection.php';
//$id=$_GET['id'];
//$qty=$_GET['qty'];
$email=$_SESSION['email'];
$tot=0;
$q="insert into tblordermaster(cEmail,oDate,oStatus)values('$email',(select sysdate()),'partial')";
$s= mysqli_query($conn, $q);
if($s)
{
    $q="select max(oid) from tblordermaster";
        $s= mysqli_query($conn, $q);
        $r= mysqli_fetch_array($s);
        $oid=$r[0];
      $qry="select pId,qty,size from tblcart where cEmail='$email'";
        $res= mysqli_query($conn, $qry);
        while($row= mysqli_fetch_array($res) )
        {
            $id=$row[0];
    $q="insert into tblorderchild(oid,pId,qty,size)values('$oid','$row[0]','$row[1]','$row[2]')";
    $s= mysqli_query($conn, $q);
    
    if($s)
    {
        $q="select pRate from tblproduct where pId='$id'";
       
        $s= mysqli_query($conn, $q);
        $r= mysqli_fetch_array($s);
        $tot=$tot+($r[0]*$row[1]);
        
        $q="update tblordermaster set oTotal='$tot',shipping='100' where oid ='$oid'";
        
        $s= mysqli_query($conn, $q);
        
    }
        }
        $q="delete from tblcart where cEmail='$email'";
        $s= mysqli_query($conn, $q);
        echo '<script>location.href="cartdelivery.php"</script>';
}
?>
