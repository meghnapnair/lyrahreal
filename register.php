<?php
session_start(); //to start the session
include 'connection.php';
if(isset($_REQUEST['btnSubmit']))
{
    $name=$_REQUEST['Name'];
    $email=$_REQUEST['Email'];
    $pwd=$_REQUEST['Password'];
    
    $q="select count(*) from tbllogin where uname='$email'";
    $s= mysqli_query($conn, $q);
    $r= mysqli_fetch_array($s);
    if($r[0]>0)    //to check whether the username exist
    {
        echo '<script>alert("Email already registered")</script>';
        echo '<script>location.href="index.php"</script>';
    }
    else
    {
        $q="insert into tblcustomer (name,email) values('$name','$email')";
        $s= mysqli_query($conn, $q);
        if($s)
        {
            $q="insert into tblprofile (name,email) values('$name','$email')";
        $s= mysqli_query($conn, $q);
            $q="insert into tbllogin (uname,pwd,utype) values('$email','$pwd','customer')";
            $s= mysqli_query($conn, $q);
            if($s)
            {
                echo '<script>alert("Registration successful")</script>';
                echo '<script>location.href="index.php"</script>';
            }
            else
            {
                echo '<script>alert("Sorry some error occured")</script>';
                echo '<script>location.href="index.php"</script>';
            }
        }
        else
        {
            echo '<script>alert("Sorry some error occured")</script>';
            echo '<script>location.href="index.php"</script>';
        }
    }
}
?>
