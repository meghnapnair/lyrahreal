
<?php
include '../connection.php';
$id=$_GET['id'];
echo '<option>---Select---</option>';
    $q="select * from tblsubcategory where catid='$id'";
    $s=  mysqli_query($conn,$q);
    while($r=  mysqli_fetch_array($s))
    {
        echo '<option value="'.$r[0].'">'.$r[2].'</option>';
    }
?>