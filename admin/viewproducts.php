<?php
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
    <h1 style="margin:50px;">Our Products</h1>
<table border="1" style="margin:50px;">
            <tr>
                <th>ID</th>
                <th>MAIN CATEGORY</th>
                <th>SUBCATEGORY</th>
                <th>PRODUCT</th>
                <th>FABRIC</th>
                <th>RATE</th>
                <th colspan="2">STATUS</th>
            </tr>
            <?php
                        $q="select tblproduct.*,tblsubcategory.subcategory,tblcategory.category from tblproduct,tblcategory,tblsubcategory where tblproduct.subid=tblsubcategory.subid and tblsubcategory.catid=tblcategory.catid group by tblcategory.category,tblsubcategory.subcategory";
                        $s= mysqli_query($conn, $q);
                        while($r= mysqli_fetch_array($s))
                        {
                            echo '<tr>';
                            echo '<td>'.$r['pId'].'</td>';
                            echo '<td>'.$r['category'].'</td>';
                            echo '<td>'.$r['subcategory'].'</td>';
                            echo '<td>'.$r['pName'].'</td>';
                            echo '<td>'.$r['pFabric'].'</td>';
                            echo '<td>'.$r['pRate'].'</td>';
                            echo '<td>'.$r['pStatus'].'</td>';
                            echo '<td><a href="productdetails.php?id='.$r['pId'].'">View details</a></td>';
                            echo '</tr>';
                        }
                   ?> 
        </table>
</div>
<?php
include 'footer.html';
?>