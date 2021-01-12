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
                            echo '<tr><td><a href="productdetails.php?id='.$r['pId'].'">Mark as In stock</a></td></tr>';
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
    <table  style="margin:-450px 100px 50px 600px;">
            
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