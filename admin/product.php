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
    <h1 style="margin:50px;">Product</h1>
    <form method="POST" enctype="multipart/form-data">
        <table>
        <tr>
            <td>Main Category</td>
            <td><select class="form-control" id="cat" name="cat">
                    <option>Select category</option>
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
            <td><select class="form-control" id="subcat" name="subcat">
                   <option>Select subcategory</option>
                </select></td>
        </tr>
        <tr>
            <td>Product</td>
            <td><input type="text" class="form-control" name="txtName" required="" ></td>
        </tr>
         <tr>
            <td>Description</td>
            <td><textarea class="form-control" name="txtDesc" required="" ></textarea></td>
        </tr>
         <tr>
            <td>Available size</td>
            <td><input type="checkbox" name="txtsize[]" value="XS" >XS&nbsp;&nbsp;&nbsp;
            <input type="checkbox"  name="txtsize[]" value="S" >S&nbsp;&nbsp;&nbsp;
            <input type="checkbox" name="txtsize[]" value="M" >M&nbsp;&nbsp;&nbsp;
            <input type="checkbox"  name="txtsize[]" value="L" >L&nbsp;&nbsp;&nbsp;
            <input type="checkbox" name="txtsize[]" value="XL" >XL&nbsp;&nbsp;&nbsp;
            <input type="checkbox"  name="txtsize[]" value="XXL" >XXL&nbsp;&nbsp;&nbsp;
            <input type="checkbox"  name="txtsize[]" value="XXXL" >XXXL&nbsp;&nbsp;&nbsp;
            </td>
        </tr>
        
         <tr>
            <td>Fabric</td>
            <td><input type="text" class="form-control" value="---" name="txtFabric" required="" ></td>
        </tr>
         <tr>
            <td>Wash type</td>
            <td><input type="text" class="form-control" value="---" name="txtWash" required="" ></td>
        </tr>
         <tr>
            <td>Highlight</td>
            <td><input type="text" class="form-control" name="txtHighlight" required="" ></td>
        </tr>
         <tr>
            <td>Rate</td>
            <td><input type="number" class="form-control" name="txtRate" required="" ></td>
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
    $subcat=$_REQUEST['subcat'];
    $name=$_REQUEST['txtName'];
    $desc=$_REQUEST['txtDesc'];
    
    $fabric=$_REQUEST['txtFabric'];
    $wash=$_REQUEST['txtWash'];
    $highlight=$_REQUEST['txtHighlight'];
    $rate=$_REQUEST['txtRate'];
    
    
        
        $q="insert into tblproduct (subid,pName,pDesc,pFabric,pWash,pHighlight,pRate,pStatus) values('$subcat','$name','$desc','$fabric','$wash','$highlight','$rate','In stock')";
        $s= mysqli_query($conn, $q);
        if($s)  
        {
            foreach($_POST['txtsize'] as $check) {
                echo $check;
                 $q="insert into tblproductsize (pId,size) values((select max(pId) from tblproduct),'$check')";
                    $s= mysqli_query($conn, $q);
                    echo $q;
            }
                echo '<script>alert("Product added")</script>';
                echo '<script>location.href="images.php"</script>';
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