
<?php
include '../connection.php';
$id=$_GET['id'];
echo '<option>Select subcategory</option>';
    $q="select * from tblsubcategory where catid='$id' and status='active'";
    $s=  mysqli_query($conn,$q);
    while($r=  mysqli_fetch_array($s))
    {
        echo '<option value="'.$r[0].'">'.$r[2].'</option>';
    }
?>