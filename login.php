<?php
session_start(); //to start the session
include 'connection.php';
if(isset($_REQUEST['btnSubmit']))
{
    $email=$_REQUEST['Name'];
    $pwd=$_REQUEST['Password'];
    $_SESSION['email']=$email;  
    $q="select count(*) from tbllogin where uname='$email'";
    $s= mysqli_query($conn, $q);
    $r= mysqli_fetch_array($s);
    if($r[0]==0)    //to check whether the username exist
    {
        echo '<script>alert("Username doesnt exist.Please check your Email id and Password")</script>';
    }
    else
    {
          //creating a session variable
        $q="select * from tbllogin where uname='$email'";
        $s= mysqli_query($conn, $q);
        $r= mysqli_fetch_array($s);
        if($r['pwd']==$pwd)  //to check the password entered by user with the password in database
        {
            
                if($r['utype']=="admin")  //to check the usertye/role of the user
                {
                    echo '<script>location.href="admin/adminhome.php"</script>';
                }
                else if($r['utype']=="customer")
                {
                    echo '<script>location.href="customer/customerhome.php"</script>';
                }
            
        }
        else
        {
            echo '<script>alert("Incorrect password")</script>';
            echo '<script>location.href="index.php"</script>';
        }
    }
}
?>
