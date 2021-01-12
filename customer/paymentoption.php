<?php
session_start();
include 'header.php';
include '../connection.php';
$id=$_GET['id'];
$email=$_SESSION['email'];
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
    <h1 style="margin:50px;"> Select payment option</h1>

    <div style="margin: 50px; border-style: solid; width: 200px; padding: 10px; border-width: thin; border-radius: 5px; border-color: #C1C1C1;" >
        <form method="POST">
           
        <div style="padding: 10px;">
            <input type="submit" class="btn btn-danger" style="width:150px;" value="Pay on delivery" name="pod">
        </div>
        <div style="padding: 10px;">
            <input type="submit" class="btn btn-danger" style="width:150px" value="Online payment" name="online">
        </div>
        
        </form>
    </div>
    
</div>
<?php
if(isset($_POST['pod'])){
    
$q="insert into tblpayment(oid,pStatus) values('$id','POD')";
$s= mysqli_query($conn, $q);
if($s)
{
            echo '<script>location.href="orders.php"</script>';
}
else
echo $q;
}
if(isset($_POST['online'])){
    $q="select oTotal,shipping from tblordermaster where oid='$id'";
    $s= mysqli_query($conn, $q);
    $r= mysqli_fetch_array($s);
    $amt=$r[0]+$r[1];
    $q="insert into tblpayment(oid,pDate,pAmount,pStatus) values('$id',(select sysdate()),'$amt','Online payment')";
        $s= mysqli_query($conn, $q);
        if($s)
        {
            echo '<script>location.href="payment.php"</script>';
        }
}

?>
<?php
include 'footer.html';
?>