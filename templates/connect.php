<?php

    $connect=mysqli_connect("localhost","root","","todo") or die("Connection Failed");

    if(!empty($_POST['save']))
    {
        $username=$_POST['un'];
        $password=$_POST['pw'];
        $query="select * from login where username='$username' and password='$password'";
        $result=mysqli_query($connect,$query);
        $count=mysqli_num_rows($result);
        if($count>0)
        {
            echo '<script>alert("Login succesful")</script>';
        }
        else
        {
            echo '<script>alert("Login unsuccesful")</script>';
        }
    }

?>

<form method="post">
    Username <input type="text" name="un"/>
    <br/>
    Password<input type="text" name="pw"/>
    <br/>
    <input type="submit" name="save" value="Save the form"/>
</form>

