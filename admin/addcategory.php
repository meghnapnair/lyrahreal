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
        color: white;
    }
</style>
<div style="margin-top: 50px; margin-left: 150px; ">
    <h1 style="margin:50px;">Category</h1>
    <form method="POST" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Main Category</td>
            <td><select class="form-control"  name="cat">
                   <?php
                        $q="select * from tblcategory";
                        $s= mysqli_query($conn, $q);
                        while($r= mysqli_fetch_array($s))
                        {
                            echo '<option value='.$r[0].'>'.$r[1].'</option>';
                        }
                   ?> 
                </select></td>
        </tr>
       <tr>
            <td>Subcategory</td>
            <td><input type="text" class="form-control" name="txtName" required="" ></td>
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
    
    
    $q="select count(*) from tblsubcategory where subcategory='$name' and catid='$cat' and status='active'";
    $s= mysqli_query($conn, $q);
    $r= mysqli_fetch_array($s);
    if($r[0]>0)    
    {
        echo '<script>alert("Already exist")</script>';
    }
    else
    {
        
        $q="insert into tblsubcategory (subcategory,status,catid) values('$name','active','$cat')";
        $s= mysqli_query($conn, $q);
        if($s)  
        {
            
                echo '<script>alert("Category added")</script>';
                echo '<script>location.href="addcategory.php"</script>';
            
        }
        else
        {
            echo '<script>alert("Sorry some error occured")</script>';
        }
    }
}
?>
<?php
include 'footer.html';
?>