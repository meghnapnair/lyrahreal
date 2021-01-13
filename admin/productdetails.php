<?php
include 'header.html';
include '../connection.php';
$id=$_GET['id'];
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
                            
                            echo '<tr><td>ID :'.$r['pId'].'</td></tr>';
                            echo '<tr><td>CATEGORY:'.$r['category'].'</td></tr>';
                            echo '<tr><td>SUBCATEGORY :'.$r['subcategory'].'</td></tr>';
                            echo '<tr><td>PRODUCT :'.$r['pName'].'</td></tr>';
                            echo '<tr><td>DESCRIPTION :'.$r['pDesc'].'</td></tr>';
                            echo '<tr><td>FABRIC : '.$r['pFabric'].'</td></tr>';
                            echo '<tr><td>RATE :'.$r['pRate'].'</td></tr>';
                            echo '<tr><td>STATUS : '.$r['pStatus'].'</td></tr>';
                            if($r['pStatus']=='Out of stock')
                            echo '<tr><td><a href="stock.php?id='.$r['pId'].'&status=1">Mark as In stock</a></td></tr>';
                            if($r['pStatus']=='In stock')
                                
                            echo '<tr><td><a href="stock.php?id='.$r['pId'].'&status=0">Mark as out of stock</a></td></tr>';
                            echo '<tr><td><a href="stock.php?id='.$r['pId'].'&status=-1">Delete product</a></td></tr>';
                        }
                   ?> 
        </table>
    <table  style="margin:-450px 100px 200px 600px;">
            
            <?php
                        $q="select * from tblimages where pId='$id'";
                        $s= mysqli_query($conn, $q);
                        while($r= mysqli_fetch_array($s))
                        {
                            
                            echo '<tr><td><img src="../'.$r['imgpath'].'" height="300px" width="300px"></td></tr>';
                           
                        }
                   ?> 
        </table>
</div>
<?php
include 'footer.html';
?>