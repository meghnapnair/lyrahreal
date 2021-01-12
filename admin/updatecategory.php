<?php
session_start(); //to start the session
include 'header.html';
include '../connection.php';
$id=$_GET['id'];
$q="select * from tblsubcategory where subid='$id'";
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
    <h1 style="margin:50px;">Category</h1>
    <form method="POST" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Category</td>
            <td><select class="form-control"  name="cat">
                   <?php
                        $qq="select * from tblcategory";
                        $ss= mysqli_query($conn, $qq);
                        while($rr= mysqli_fetch_array($ss))
                        {
                            if($r['catid']==$rr[0])
                                echo '<option selected value='.$rr[0].'>'.$rr[1].'</option>';
                            else
                                echo '<option value='.$rr[0].'>'.$rr[1].'</option>';
                        }
                   ?> 
                </select></td>
        </tr>
       <tr>
            <td>Subcategory</td>
            <td><input type="text" class="form-control" value="<?php echo $r['subcategory']; ?>" name="txtName" required="" ></td>
        </tr>
       
        
        
        <tr>
            <td></td>
            <td><input type="submit" class="btn btn-danger" name="btnSubmit" ></td>
        </tr>
    </table>
   
</form>
</div>
<?php
if(isset($_REQUEST['btnSubmit']))
{
    $name=$_REQUEST['txtName'];
   
    $cat=$_REQUEST['cat'];
    
    
        
        $q="update tblsubcategory set subcategory='$name',catid='$cat' where subid='$id'";
        $s= mysqli_query($conn, $q);
        if($s)  
        {
            
                echo '<script>alert("Category updated")</script>';
                echo '<script>location.href="addcategory.php"</script>';
            
        }
        else
        {
            echo '<script>alert("Sorry some error occured")</script>';
        }
    
}
?>
<?php
include 'footer.html';
?>