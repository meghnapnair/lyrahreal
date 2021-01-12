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
    <h1 style="margin:50px;">Images</h1>
    <form method="POST" enctype="multipart/form-data">
    <table>
        
       <tr>
            <td>Select images of product</td>
            <td><input type="file" class="form-control" name="txtFile" required="" ></td>
        </tr>
       
        
        
        <tr>
            <td></td>
            <td><input type="submit" class="btn btn-danger" name="btnSubmit" value="Upload"></td>
        </tr>
    </table>
        <table  style="margin:50px;">
           
            <?php
                        $q="select * from tblimages where pId in(select max(pId) from tblproduct)";
                        $s= mysqli_query($conn, $q);
                        while($r= mysqli_fetch_array($s))
                        {
                            echo '<tr>';
                            echo '<td><img src="../'.$r['imgpath'].'" height="200px" width="200px"></td>';
                            
                            echo '<td><a href="deleteimage.php?id='.$r['imgid'].'">Delete image</a></td>';
                            echo '</tr>';
                        }
                   ?> 
        </table>
   
</form>
</div>
<?php
if(isset($_REQUEST['btnSubmit']))
{
    $folder='../products/';
    $file=$folder.basename($_FILES['txtFile']['name']);
    move_uploaded_file($_FILES['txtFile']['tmp_name'],$file);
   $folder='products/';
    $file=$folder.basename($_FILES['txtFile']['name']);
    
    
    $q="select max(pId) from tblproduct";
    $s= mysqli_query($conn, $q);
    $r= mysqli_fetch_array($s);
    $pid=$r[0];
        
        $q="insert into tblimages (pId,imgpath) values('$pid','$file')";
        $s= mysqli_query($conn, $q);
        if($s)  
        {
            
                echo '<script>alert("Image uploaded")</script>';
                echo '<script>location.href="images.php"</script>';
            
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