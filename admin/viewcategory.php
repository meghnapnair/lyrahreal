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
    <h1 style="margin:50px;">Our Categories</h1>
<table border="1" style="margin:50px;">
            <tr>
                <th>ID</th>
                <th>MAIN CATEGORY</th>
                <th colspan="3">SUBCATEGORY</th>
                
            </tr>
            <?php
                        $q="select tblcategory.category,tblsubcategory.* from tblcategory,tblsubcategory where tblcategory.catid=tblsubcategory.catid and tblsubcategory.status='active'";
                        $s= mysqli_query($conn, $q);
                        while($r= mysqli_fetch_array($s))
                        {
                            echo '<tr>';
                            echo '<td>'.$r['subid'].'</td>';
                            echo '<td>'.$r['category'].'</td>';
                            echo '<td>'.$r['subcategory'].'</td>';
                            echo '<td><a href="updatecategory.php?id='.$r['subid'].'">Update</a></td>';
                            echo '<td><a href="deletecategory.php?id='.$r['subid'].'">Delete</a></td>';
                            echo '</tr>';
                        }
                   ?> 
        </table>
</div>
<?php
include 'footer.html';
?>