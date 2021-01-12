<?php
session_start();
include 'header.php';
include '../connection.php';
$oid=$_GET['id'];
$email=$_SESSION['email'];
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
    <h1 style="margin:50px;">Delivery address</h1>
    <form method="POST" enctype="multipart/form-data">
    <table>
       
       
        <tr>
            <td>Name</td>
            <td><input type="text" class="form-control" name="txtName" pattern="[a-zA-Z ]+" required="" ></td>
        </tr>
         
         <tr>
            <td>House name/no</td>
            <td><input type="text" class="form-control" name="txtHname"  ></td>
        </tr>
         <tr>
            <td>Street</td>
            <td><input type="text" class="form-control" name="txtStreet"  ></td>
        </tr>
         <tr>
            <td>Place</td>
            <td><input type="text" class="form-control" name="txtPlace" required="" ></td>
        </tr>
         <tr>
            <td>District</td>
            <td><input type="text" class="form-control" name="txtDistrict" required="" ></td>
        </tr>
         <tr>
            <td>State</td>
            <td><input type="text" class="form-control" name="txtState" required="" ></td>
        </tr>
         <tr>
            <td>Pin</td>
            <td><input type="number" class="form-control" name="txtPin" required="" ></td>
        </tr>
         <tr>
            <td>Landmark</td>
            <td><input type="text" class="form-control" name="txtLandmark" required="" ></td>
        </tr>
         <tr>
            <td>Contact</td>
            <td><input type="text" class="form-control" name="txtContact" pattern="[6789][0-9]{9}" required="" ></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" class="btn btn-danger" name="btnSubmit" ></td>
        </tr>
    </table>
        <script type="text/javascript" src="../js/jquery-2.2.3.min.js"></script>
        <script>
        $(document).ready(function() {
      $( "#cat" ).change(function () {
          debugger;
      var sid = $("#cat").val();
      $.ajax({
      url: "getsubcat.php?id="+sid,
      type:'POST',
      success: function(data) 
      { 
        var dt=$.trim(data);
        $("#subcat").html(dt);
//        alert(dt);
      },error:function(xhr,error)
        {
            alert(error); 
        }
      });
  });
  
  

});   
        </script>
</form>
</div>
<?php
if(isset($_REQUEST['btnSubmit']))
{
    $name=$_REQUEST['txtName'];
    $hname=$_REQUEST['txtHname'];
    $street=$_REQUEST['txtStreet'];
    $place=$_REQUEST['txtPlace'];
    $district=$_REQUEST['txtDistrict'];
    $state=$_REQUEST['txtState'];
    $pin=$_REQUEST['txtPin'];
    $landmark=$_REQUEST['txtLandmark'];
    $contact=$_REQUEST['txtContact'];
    
    
        
        $q="insert into tbldeliveryad (cEmail,dname,dHouse,dStreet,dPlace,dDistrict,dState,dPin,dLandmark,dContact) "
                . "values('$email','$name','$hname','$street','$place','$district','$state','$pin','$landmark','$contact')";
        $s= mysqli_query($conn, $q);
        if($s)  
        {
                $q="select max(dId) from tbldeliveryad";
                $s= mysqli_query($conn, $q);
                $r= mysqli_fetch_array($s);
                $did=$r[0];
                echo '<script>location.href="selectdelid.php?id='.$did.'&oid='.$oid.'"</script>';
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