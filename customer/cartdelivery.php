<?php
session_start();
include 'header.php';
include '../connection.php';
$email=$_SESSION['email'];
$q="select max(oid) from tblordermaster";
$s= mysqli_query($conn, $q);
$r= mysqli_fetch_array($s);
$id=$r[0];
//echo $id;
?>
<style>
    .d td,th{
        padding: 10px;
    }
    th{
        background-color: black;
        color:white;
    }
</style>
<div style="margin-top: 50px; margin-left: 150px; ">
    <h1 style="margin:50px;"> Delivery address</h1>
    
    <div style="margin: 50px; border-style: solid; width: 250px; padding: 10px; border-width: thin; border-radius: 5px; border-color: #C1C1C1;" >
        <form method="POST">
            <div style="padding: 10px;">
            <input type="submit" class="btn btn-danger" style="width:200px;" value="Add delivery address" name="delivery">
            ----------------------------------------
        </div>
        <div>
            
           <?php
           $q="select * from tbldeliveryad where cEmail='$email'";
           $s= mysqli_query($conn, $q);
           $count= mysqli_num_rows($s);
           if($count>0)
           {
               
           echo'<table  style="margin:5px;">';
           while($r= mysqli_fetch_array($s))
           {
                echo '<tr><td>'.$r['dName'].'</td></tr>';
                echo '<tr><td>'.$r['dHouse'].'</td></tr>';
                echo '<tr><td>'.$r['dStreet'].'</td></tr>';
                echo '<tr><td>'.$r['dPlace'].'</td></tr>';
                echo '<tr><td>'.$r['dDistrict'].'</td></tr>';
                echo '<tr><td>'.$r['dState'].'</td></tr>';
                echo '<tr><td>'.$r['dPin'].'</td></tr>';
                echo '<tr><td>'.$r['dLandmark'].'</td></tr>';
                echo '<tr><td>'.$r['dContact'].'</td></tr>';
                echo '<tr><td><a href="selectdelid.php?id='.$r['dId'].'&oid='.$id.'">Select</a></td></tr>';
                echo '<tr><td></td></tr>';
                echo '<tr><td>------------------------------------------</td></tr>';
           }
           echo '</table>';
           }
           ?>
            
        </div>
        
        </form>
    </div>
   
</div>
<?php
if(isset($_POST['delivery'])){
    
            echo '<script>location.href="deliveryaddress.php?id='.$id.'"</script>';
       
}

?>
<?php
include 'footer.html';
?>