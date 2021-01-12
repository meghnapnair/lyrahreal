<?php
session_start();
include 'header.php';
include '../connection.php';
$email=$_SESSION['email'];
$total=0;
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
    <h1 style="margin:50px;">Cart</h1>
<table  style="margin:50px; max-width: 550px;">
            
            <?php
            
                        $q="select tblproduct.*,tblcart.* from tblproduct,tblcart where tblproduct.pId=tblcart.pId and tblcart.cEmail='$email'";
                        $s= mysqli_query($conn, $q);
                        while($r= mysqli_fetch_array($s))
                        {
                            $total=$total+($r['pRate']*$r['qty']);
                            $qry="select * from tblimages where pId='".$r['pId']."'";
                            $res= mysqli_query($conn, $qry);
                            $row= mysqli_fetch_array($res);
                            echo '<tr><td><a href="productdetails.php?id='.$r['pId'].'"><img src="../'.$row['imgpath'].'" height="200px" width="200px"></a></td></tr>';
                            echo '<tr><td>PRODUCT :'.$r['pName'].'</td></tr>';
                            
                            echo '<tr><td>QUANTITY :'.$r['qty'].'</td></tr>';
                            echo '<tr><td>RATE :'.($r['pRate']*$r['qty']).'</td></tr>';
                            
                            echo '<tr><td><a href="remove_from_cart.php?id='.$r['cartId'].'">Remove from cart</a> | <a href="cartbuy.php?id='.$r['pId'].'&qty='.$r['qty'].'">Buy now</a></td></tr>';
                            
                        }
                   ?> 
        </table>
   <div style="margin: 50px; border-style: solid; width: 200px; padding: 10px; border-width: thin; border-radius: 5px; border-color: #C1C1C1;" >
        <form method="POST">
            <div style="padding: 10px;">
            Cart total: <?php
               echo $total;
                ?>
            </select>
        </div>
            <?php
            if($total>0)
            {
        echo '<div style="padding: 10px;">';
            echo '<input type="submit" class="btn btn-danger" style="width:150px;" value="Empty cart" name="cart">';
        echo '</div>';
            }
        ?>
        </form>
    </div>
</div>
<?php
if(isset($_REQUEST['cart']))
{
    echo '<script>location.href="cartbuy.php"</script>';
}
?>
<?php
include 'footer.html';
?>