<?php
include 'header.php';
include '../connection.php';
?>
<style>
    td,th{
        padding: 20px;
    }
</style>
<div style="margin-top: 50px; margin-left: 200px; ">
    <h1 style="margin:50px;">Latest collections</h1>
    <table  style="margin:50px; ">
            
            <?php
                        $q="select * from tblproduct order by pId desc";
                        $s= mysqli_query($conn, $q);
                        while($r= mysqli_fetch_array($s))
                        {
                            
                            $pid1=$r[0];
                            $pname1=$r[2];
                            $prate1=$r[9];
//                            continue ;
//                            $pid2=$r[0];
//                            echo $pid1.".";
//                            $pname2=$r[2];
//                            $prate2=$r[9];
//                            continue;
//                            $pid3=$r[0];
//                            echo $pid1."*";
//                            $pname3=$r[2];
//                            $prate3=$r[9];
                            
                            echo '<tr>';
                            $qry="select imgpath from tblimages where pid='$pid1'";
                            $res= mysqli_query($conn, $qry);
                            $row= mysqli_fetch_array($res);
                            echo '<td><img src="../'.$row['imgpath'].'" height="300px" width="300px"></td>';
                            echo '<td><h4>'.$pname1.'</h4><br/><b>₹'.$prate1.'+ shipping</b>';
                            echo '<br/><br/><a href="productdetails.php?id='.$pid1.'">View more...</a></td>';
//                            $qry="select imgpath from tblimages where pid='$pid2'";
//                            $res= mysqli_query($conn, $qry);
//                            $row= mysqli_fetch_array($res);
//                            echo '<td><img src="'.$row['imgpath'].'" height="300px" width="300px"></td>';
//                            $qry="select imgpath from tblimages where pid='$pid3'";
//                            $res= mysqli_query($conn, $qry);
//                            $row= mysqli_fetch_array($res);
//                            echo '<td><img src="'.$row['imgpath'].'" height="300px" width="300px"></td>';
//                            echo '</tr>';
//                            
//                            echo '<tr>';
//                            echo '<td>'.$pname1.'</td>';
////                            echo '<td>'.$pname2.'</td>';
////                            echo '<td>'.$pname3.'</td>';
//                            echo '</tr>';
//                            
//                            echo '<tr>';
//                            echo '<td>₹:'.$prate1.' + shipping</td>';
////                            echo '<td>₹:'.$prate2.' + shipping</td>';
////                            echo '<td>₹:'.$prate3.' + shipping</td>';
//                            echo '</tr>';
//                            
//                            echo '<tr>';
//                            echo '<td><a href="productdetails.php?id='.$pid1.'">View product details</a></td>';
////                            echo '<td><a href="productdetails.php?id='.$pid2.'">View product details</a></td>';
////                            echo '<td><a href="productdetails.php?id='.$pid3.'">View product details</a></td>';
                            echo '</tr>';
                            
                            
                            
                        }
                   ?> 
        </table>
</div>
<?php
include 'footer.html';
?>