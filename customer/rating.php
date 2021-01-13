<?php
session_start();
include 'header.html';
include '../connection.php';
$email=$_SESSION['email'];
$id=$_GET['id'];
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
    <h1 style="margin:50px;">Rating</h1>
    <form method="POST" enctype="multipart/form-data">
    <table>
        <tr>
            
       <tr>
            <td>Rate your product</td>
            <td>
                <a href="rate.php?pid=<?php echo $id; ?>&r=1"><img src="../images/unfilledstar.png" height="60px" width="60px"></a>
                <a href="rate.php?pid=<?php echo $id; ?>&r=2"><img src="../images/unfilledstar.png" height="60px" width="60px"></a>
                <a href="rate.php?pid=<?php echo $id; ?>&r=3"><img src="../images/unfilledstar.png" height="60px" width="60px"></a>
                <a href="rate.php?pid=<?php echo $id; ?>&r=4"><img src="../images/unfilledstar.png" height="60px" width="60px"></a>
                <a href="rate.php?pid=<?php echo $id; ?>&r=5"><img src="../images/unfilledstar.png" height="60px" width="60px"></a>
            </td>
        </tr>
       
        
        
        
    </table>
        <br><br>
</form>
</div>
<?php
include 'footer.html';
?>