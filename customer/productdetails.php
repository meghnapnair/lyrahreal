<?php
session_start();
include 'header.php';
include '../connection.php';
$id=$_GET['id'];
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
    <h1 style="margin:50px;"> Product details</h1>
<table  style="margin:50px; max-width: 550px;">
            
            <?php
                        $q="select tblproduct.*,tblsubcategory.subcategory,tblcategory.category from tblproduct,tblcategory,tblsubcategory where tblproduct.subid=tblsubcategory.subid and tblsubcategory.catid=tblcategory.catid and tblproduct.pId='$id'";
                        $s= mysqli_query($conn, $q);
                        while($r= mysqli_fetch_array($s))
                        {
                            
                           
                            echo '<tr><td>PRODUCT :'.$r['pName'].'</td></tr>';
                            echo '<tr><td>DESCRIPTION :'.$r['pDesc'].'</td></tr>';
                            echo '<tr><td>FABRIC : '.$r['pFabric'].'</td></tr>';
                            echo '<tr><td>RATE :'.$r['pRate'].'</td></tr>';
                            $qry="select avg(rating) from tblrating where pId='".$r['pId']."'";
                            $res= mysqli_query($conn, $qry);
                            $count= mysqli_num_rows($res);
                            if($count>0)
                            {
                                $row= mysqli_fetch_array($res);
                                $rating=$row[0];
                                if($rating==1)
                                {
                                    echo '<img src="../images/filledstar.png" height="50px" width="50px">';
                                    echo '<img src="../images/unfilledstar.png" height="60px" width="60px">';
                                    echo '<img src="../images/unfilledstar.png" height="60px" width="60px">';
                                    echo '<img src="../images/unfilledstar.png" height="60px" width="60px">';
                                    echo '<img src="../images/unfilledstar.png" height="60px" width="60px">';
                                }
                                if($rating==2)
                                {
                                    echo '<img src="../images/filledstar.png" height="50px" width="50px">';
                                    echo '<img src="../images/filledstar.png" height="50px" width="50px">';
                                 echo '<img src="../images/unfilledstar.png" height="60px" width="60px">';
                                 echo '<img src="../images/unfilledstar.png" height="60px" width="60px">';
                                 echo '<img src="../images/unfilledstar.png" height="60px" width="60px">';
                                }
                                if($rating==3)
                                {
                                    echo '<img src="../images/filledstar.png" height="50px" width="50px">';
                                    echo '<img src="../images/filledstar.png" height="50px" width="50px">';
                                    echo '<img src="../images/filledstar.png" height="50px" width="50px">';
                                    echo '<img src="../images/unfilledstar.png" height="60px" width="60px">';
                                    echo '<img src="../images/unfilledstar.png" height="60px" width="60px">';
                                }
                                if($rating==4)
                                {
                                    echo '<img src="../images/filledstar.png" height="50px" width="50px">';
                                    echo '<img src="../images/filledstar.png" height="50px" width="50px">';
                                    echo '<img src="../images/filledstar.png" height="50px" width="50px">';
                                    echo '<img src="../images/filledstar.png" height="50px" width="50px">';
                                    echo '<img src="../images/unfilledstar.png" height="60px" width="60px">';
                                }
                                if($rating==5)
                                {
                                    echo '<img src="../images/filledstar.png" height="50px" width="50px">';
                                    echo '<img src="../images/filledstar.png" height="50px" width="50px">';
                                    echo '<img src="../images/filledstar.png" height="50px" width="50px">';
                                    echo '<img src="../images/filledstar.png" height="50px" width="50px">';
                                    echo '<img src="../images/filledstar.png" height="50px" width="50px">';
                                }
                            }
                            
                        }
                   ?> 
        </table>
    <div style="margin: 50px; border-style: solid; width: 200px; padding: 10px; border-width: thin; border-radius: 5px; border-color: #C1C1C1;" >
        <form method="POST">
            <div style="padding: 10px;">
            Enter quantity: <select name="qty">
                <?php
                $i=1;
                while($i<=30)
                {
                    echo '<option>'.$i.'</option>';
                    $i=$i+1;
                }
                ?>
            </select>
        </div>
        <div style="padding: 10px;">
            <input type="submit" class="btn btn-danger" style="width:150px;" value="Add to cart" name="cart">
        </div>
        <div style="padding: 10px;">
            <input type="submit" class="btn btn-danger" style="width:150px" value="Buy now" name="buy">
        </div>
        <div style="padding: 10px;">
            <input type="submit" class="btn btn-danger" style="width:150px" value="Add to wishlist" name="wish">
        </div>
        </form>
    </div>
    <table  style="margin:-450px 100px 50px 600px;">
            
            <?php
                        $q="select * from tblimages where pId='$id'";
                        $s= mysqli_query($conn, $q);
                        while($r= mysqli_fetch_array($s))
                        {
                            
                            echo '<tr><td><a href="../'.$r['imgpath'].' target="_blank"><img src="../'.$r['imgpath'].'" height="300px" width="300px"></a></td></tr>';
                           
                        }
                   ?> 
        </table>
</div>
<?php
if(isset($_POST['wish'])){
    $qty=$_REQUEST['qty'];
    $q="insert into tblwishlist (pId,cEmail,qty) values('$id','$email','$qty')";
        $s= mysqli_query($conn, $q);
        if($s)
        {
            echo '<script>location.href="wishlist.php"</script>';
        }
}
if(isset($_POST['cart'])){
    $qty=$_REQUEST['qty'];
    $q="insert into tblcart (pId,cEmail,qty) values('$id','$email','$qty')";
        $s= mysqli_query($conn, $q);
        if($s)
        {
            echo '<script>location.href="cart.php"</script>';
        }
}
if(isset($_POST['buy'])){
    $qty=$_REQUEST['qty'];
    
            echo '<script>location.href="buy.php?id='.$id.'&qty='.$qty.'"</script>';
        
}
?>
<?php
include 'footer.html';
?>