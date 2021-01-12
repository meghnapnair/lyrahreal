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
    <h1 style="margin:50px;"> Your orders</h1>
<table  style="margin:50px; max-width: 550px;">
            
            <?php
                        $q="select tblordermaster.*,tblpayment.* from tblordermaster,tblpayment where tblordermaster.cEmail='$email' and tblordermaster.oid=tblpayment.oid";
                        $s= mysqli_query($conn, $q);
                        while($r= mysqli_fetch_array($s))
                        {
                            
                            
                            echo '<tr><td>ORDER ID : '.$r['oid'].'</tr>';
                            echo '<tr><td>DATE :'.$r['oDate'].'</td></tr>';
                            echo '<tr><td>AMOUNT :'.$r['oTotal'].'</td></tr>';
                            echo '<tr><td>SHIPPING :'.$r['shipping'].'</td></tr>';
                            echo '<tr><td>TOTAL :'.$r['pAmount'].'</td></tr>';
                            echo '<tr><td>PAYMENT STATUS :'.$r['pStatus'].'</td></tr>';
                            echo '<tr><td>ORDER STATUS :'.$r['oStatus'].'</td></tr>';
                            echo '<tr><td><a href="orderdetails.php?id='.$r['oid'].'">View order details</a></td></tr>';
                            echo '<tr><td>--------------------------------------------------------</td></tr>';
                        }
                   ?> 
        </table>
   
</div>

<?php
include 'footer.html';
?>