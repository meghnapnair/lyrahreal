<?php
session_start();
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
    <h1 style="margin:50px;"> Order details</h1>
<table  style="margin:50px; max-width: 550px;">
            
            <?php
                        $q="select tblproduct.*,tblsubcategory.subcategory,tblcategory.category,tblorderchild.*,tblordermaster.* from tblproduct,tblcategory,tblsubcategory,tblorderchild,tblordermaster where tblproduct.subid=tblsubcategory.subid and tblsubcategory.catid=tblcategory.catid and tblproduct.pId=tblorderchild.pId and tblorderchild.oid=tblordermaster.oid and tblordermaster.oid='$id'";
                        $s= mysqli_query($conn, $q);
                        while($r= mysqli_fetch_array($s))
                        {
                            
                            $qry="select imgpath from tblimages where pId='".$r['pId']."'";
                            $ss= mysqli_query($conn, $qry);
                            $row= mysqli_fetch_array($ss);
                            echo '<tr><td><img src="../'.$row[0].'" height="250px" width="200px";></td></tr>';
                            echo '<tr><td>PRODUCT :'.$r['pName'].'</td></tr>';
                            echo '<tr><td>DESCRIPTION :'.$r['pDesc'].'</td></tr>';
                            echo '<tr><td>FABRIC : '.$r['pFabric'].'</td></tr>';
                            echo '<tr><td>RATE :'.$r['pRate'].'</td></tr>';
                            echo '<tr><td>QUANTITY :'.$r['qty'].'</td></tr>';
                            
                        }
                        $q="select oStatus from tblordermaster where oid='$id'";
                        $s= mysqli_query($conn, $q);
                        $r=mysqli_fetch_array($s);
                        if($r[0]=="orderplaced")
                        echo '<tr><td><a href="deliver.php?id='.$id.'">Deliver item</a></td></tr>';
                   ?> 
        </table>
    
    
</div>
<?php
include 'footer.html';
?>