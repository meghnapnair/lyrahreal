<?php
session_start();
include 'header.html';
include '../connection.php';

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
<table  style="margin:50px; max-width: 850px;">
    <tr>
        <th>ORDER ID</th>
        <th>DATE</th>
        <th>AMOUNT</th>
        <th>SHIPPING</th>
        <th>TOTAL</th>
        <th>PAYMENT STATUS</th>
        <th colspan="2">ORDER STATUS</th>
    </tr>
            <?php
                        $q="select tblordermaster.*,tblpayment.*,tblcustomer.* from tblordermaster,tblpayment,tblcustomer where tblordermaster.cEmail=tblcustomer.email and tblordermaster.oid=tblpayment.oid";
                        $s= mysqli_query($conn, $q);
                        while($r= mysqli_fetch_array($s))
                        {
                            
                            
                            echo '<tr><td>'.$r['oid'].'</td>';
                            echo '<td>'.$r['oDate'].'</td>';
                            echo '<td>'.$r['oTotal'].'</td>';
                            echo '<td>'.$r['shipping'].'</td>';
                            echo '<td>'.$r['pAmount'].'</td>';
                            echo '<td>'.$r['pStatus'].'</td>';
                            echo '<td>'.$r['oStatus'].'</td>';
                            echo '<td><a href="orderdetails.php?id='.$r['oid'].'">View order details</a></td></tr>';
                           
                        }
                   ?> 
        </table>
   
</div>

<?php
include 'footer.html';
?>