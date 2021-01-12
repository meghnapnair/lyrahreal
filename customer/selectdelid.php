<?php
include 'header.php';
include '../connection.php';
$did=$_GET['id'];
$oid=$_GET['oid'];
$q="update tblordermaster set dId='$did',oStatus='orderplaced' where oid='$oid'";
                $s= mysqli_query($conn, $q);
                echo $q;
//                if($s)
//                {
                    echo '<script>location.href="paymentoption.php?id='.$oid.'"</script>';
//               }
?>