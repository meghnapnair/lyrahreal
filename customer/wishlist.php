<?php
session_start();
include 'header.php';
include '../connection.php';
$email=$_SESSION['email'];
?>
<style>
    td,th{
        padding: 10px;
    }
    th{
        background-color: black;
        color:white;
    }
</style>
<div style="margin-top: 50px; margin-left: 150px; ">
    <h1 style="margin:50px;"> Your wishlist</h1>
<table  style="margin:50px; max-width: 550px;">
            
            <?php
                        $q="select tblproduct.*,tblwishlist.* from tblproduct,tblwishlist where tblproduct.pId=tblwishlist.pId and tblwishlist.cEmail='$email'";
                        $s= mysqli_query($conn, $q);
                        while($r= mysqli_fetch_array($s))
                        {
                            
                            $qry="select * from tblimages where pId='".$r['pId']."'";
                            $res= mysqli_query($conn, $qry);
                            $row= mysqli_fetch_array($res);
                            echo '<tr><td><a href="productdetails.php?id='.$r['pId'].'"><img src="../'.$row['imgpath'].'" height="200px" width="200px"></a></td></tr>';
                            echo '<tr><td>PRODUCT :'.$r['pName'].'</td></tr>';
                            echo '<tr><td>RATE :'.$r['pRate'].'</td></tr>';
                            echo '<tr><td>QUANTITY :'.$r['qty'].'</td></tr>';
                            echo '<tr><td>SIZE :'.$r['size'].'</td></tr>';
                            echo '<tr><td><a href="remove_from_wishlist.php?id='.$r['wId'].'">Remove from wishlist</a></td></tr>';
                        }
                   ?> 
        </table>
   
</div>

<?php
include 'footer.html';
?>