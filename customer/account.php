<?php
session_start();

include 'header.php';
include '../connection.php';
$email=$_SESSION['email'];
$q="select * from tblprofile  where email='$email'";
        $s= mysqli_query($conn, $q);
$r= mysqli_fetch_array($s);
?>
<style>
    td,th{
        padding: 10px;
    }
     th{
        background-color: black;
        color: white;
    }
</style>
<div style="margin-top: 50px; margin-left: 150px; ">
    <h1 style="margin:50px;">Profile</h1>
    <a href="../index.php"><img style="margin:-150px 50px 10px 200px;" src="../images/logout.jpg" height="70px" width="70px;"></a>
    <form method="POST" enctype="multipart/form-data">
    <table>
        
        
         <tr>
            <td>Email</td>
            <td><input type="email" value="<?php echo $email; ?>" readonly="" class="form-control" name="txtSsize"  ></td>
        </tr>
         <tr>
            <td>Name</td>
            <td><input type="text" class="form-control" value="<?php echo $r['name']; ?>" name="txtName" pattern="[a-zA-Z ]+"   ></td>
        </tr>
         <tr>
            <td>Bio</td>
            <td><input type="text" class="form-control" value="<?php echo $r['bio']; ?>" name="txtBio"  ></td>
        </tr>
         <tr>
            <td>Occupation</td>
            <td><input type="text" class="form-control" value="<?php echo $r['occupation']; ?>" name="txtOccupation"  ></td>
        </tr>
         <tr>
            <td>Location</td>
            <td><input type="text" class="form-control" value="<?php echo $r['location']; ?>" name="txtLocation" ></td>
        </tr>
         <tr>
            <td>Contact</td>
            <td><input type="text" class="form-control" value="<?php echo $r['contact']; ?>" name="txtContact" pattern="[6789][0-9]{9}"  ></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" class="btn btn-danger" name="btnSubmit" ></td>
        </tr>
    </table>
        <script type="text/javascript" src="../js/jquery-2.2.3.min.js"></script>
       </form>
</div>
<?php
if(isset($_REQUEST['btnSubmit']))
{
    $name=$_REQUEST['txtName'];
    $bio=$_REQUEST['txtBio'];
    $occu=$_REQUEST['txtOccupation'];
    $loc=$_REQUEST['txtLocation'];
    $contact=$_REQUEST['txtContact'];
    
    $rate=$_REQUEST['txtRate'];
    
    
        
        $q="update tblprofile set name='$name', bio='$bio',occupation='$occu',location='$loc', contact='$contact' where email='$email'";
        $s= mysqli_query($conn, $q);
        if($s)  
        {
                echo '<script>alert("Profile updated")</script>';
                echo '<script>location.href="account.php"</script>';
        }
        else
        {
            echo '<script>alert("Sorry some error occured")</script>';
            echo $q;
        }
    
}
?>
<?php
include 'footer.html';
?>