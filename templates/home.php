<?php

    $connect=mysqli_connect("localhost","root","","todo") or die("Connection Failed");

    if(!empty($_POST['save']))
    {
        $username=$_POST['un'];
        $password=$_POST['pw'];
        $query="select * from login where username='$username' and password='$password'";
        $result=mysqli_query($connect,$query);
        $count=mysqli_num_rows($result);
        if($count==1)
        {
            echo '<script>alert("Login succesful")</script>';
            header("Location: index.html");
        }
        else
        {
            echo '<script>alert("Login unsuccesful")</script>';
        }
    }

?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        header {
background-color: white ;
position: fixed;
left: 0;
right: 0;
top: 5px;
height: 30px;
display: flex;
align-items: center;
box-shadow: 0 0 25px 0 black;
}
header * {
display: inline;
}
header li {
margin: 20px;
}
header li a {
color: blue;
text-decoration: none;
}
        
        body {
            margin: 0;
            font-family: Arial;
            font-size: 17px;
        }
        
        #myVideo {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
        }
        
        .content {
            position: fixed;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            color: #f1f1f1;
            width: 100%;
            padding: 20px;
        }
        
        #myBtn {
            width: 200px;
            font-size: 18px;
            padding: 10px;
            border: none;
            background: #000;
            color: #fff;
            cursor: pointer;
        }
        
        #myBtn:hover {
            background: #ddd;
            color: black;
        }
    </style>
</head>

<body>
    <script src="test.js"></script>
    
<header>
<nav>
<ul>
<li>
<a href="Signup.html">Sign Up</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Home </a>
</li>
<li>
<a href="#"> About us </a>
</li>
<li>
<a href="#"> Contact </a>
</li>
</ul>
</nav>
</header>


    <div class="content">


        <h1 align="center" style="color:rosybrown">STUDENT REGISTRATION FORM</h1>
        <h3 align="center" style="color:lavenderblush;">


      
        </h3>
        <br/>

        <h1 align="center" style="color:lavenderblush;">


            <font face="Lato" colour="majanta" size="6">
                LOGIN
            </font>
        </h1>
          

        <center>
        <form method="post">
                Username <input type="text" name="un"><br><br>
                Password<input type="text" name="pw"><br><br>
    <           <input type="submit" name="save" value="Save the form">
            </form>
    </div>

    </script>


</body>

</html>