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
    <h1 style="margin:50px;"> Order details</h1>
<table  style="margin:50px; max-width: 550px;">
            
            <?php
                        $q="select tblproduct.*,tblsubcategory.subcategory,tblcategory.category,tblorderchild.*,tblordermaster.* from tblproduct,tblcategory,tblsubcategory,tblorderchild,tblordermaster where tblproduct.subid=tblsubcategory.subid and tblsubcategory.catid=tblcategory.catid and tblproduct.pId=tblorderchild.pId and tblorderchild.oid='$id' and tblordermaster.oid=tblorderchild.oid";
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
                            if($r['oStatus']=="delivered")
                            $qry="select rating from tblrating where pId='".$r['pId']."' and email='$email'";
//                            echo $qry;
                            $res= mysqli_query($conn, $qry);
                            $count= mysqli_num_rows($res);
                            if($count>0)
                            {
                                $row= mysqli_fetch_array($res);
                                $rating=$row[0];
                                if($rating==1)
                                {
                                    echo '<tr><td><img src="../images/filledstar.png" height="50px" width="50px">';
                                    echo '<img src="../images/unfilledstar.png" height="60px" width="60px">';
                                    echo '<img src="../images/unfilledstar.png" height="60px" width="60px">';
                                    echo '<img src="../images/unfilledstar.png" height="60px" width="60px">';
                                    echo '<img src="../images/unfilledstar.png" height="60px" width="60px"></td></tr>';
                                }
                                if($rating==2)
                                {
                                   echo '<tr><td><img src="../images/filledstar.png" height="50px" width="50px">';
                                   echo '<img src="../images/filledstar.png" height="50px" width="50px">';
                                 echo '<img src="../images/unfilledstar.png" height="60px" width="60px">';
                                 echo '<img src="../images/unfilledstar.png" height="60px" width="60px">';
                                 echo '<img src="../images/unfilledstar.png" height="60px" width="60px"></td></tr>';
                                }
                                if($rating==3)
                                {
                                    echo '<tr><td><img src="../images/filledstar.png" height="50px" width="50px">';
                                    echo '<img src="../images/filledstar.png" height="50px" width="50px">';
                                    echo '<img src="../images/filledstar.png" height="50px" width="50px">';
                                    echo '<img src="../images/unfilledstar.png" height="60px" width="60px">';
                                    echo '<img src="../images/unfilledstar.png" height="60px" width="60px"></td></tr>';
                                }
                                if($rating==4)
                                {
                                    echo '<tr><td><img src="../images/filledstar.png" height="50px" width="50px">';
                                    echo '<img src="../images/filledstar.png" height="50px" width="50px">';
                                    echo '<img src="../images/filledstar.png" height="50px" width="50px">';
                                    echo '<img src="../images/filledstar.png" height="50px" width="50px">';
                                   echo '<img src="../images/unfilledstar.png" height="60px" width="60px"></td></tr>';
                                }
                                if($rating==5)
                                {
                                    echo '<tr><td><img src="../images/filledstar.png" height="50px" width="50px">';
                                    echo '<img src="../images/filledstar.png" height="50px" width="50px">';
                                    echo '<img src="../images/filledstar.png" height="50px" width="50px">';
                                    echo '<img src="../images/filledstar.png" height="50px" width="50px">';
                                    echo '<img src="../images/filledstar.png" height="50px" width="50px">';
                                }
                            }
                            else
                                echo '<tr><td><a href="rating.php?id='.$r['pId'].'">Rate now</a></td></tr>';
                        }
                   ?> 
        </table>
    
    
    
</div>
<?php
include 'footer.html';
?>