





<?php

$hostname="localhost";
$username="root";
$password="";
$databasename="todo";
$connect=new mysqli($hostname,$username,$password,$databasename);

    if(isset($_POST['save']))
    {   session_start();
        $username=$_POST['un'];
        $password=$_POST['pw'];
        $_SESSION['username']=$username;
        $query="select * from login where username='$username' and password='$password'";
        $result=mysqli_query($connect,$query);
        $count=mysqli_num_rows($result);
        
        if($count==1)
        {
            echo '<script>alert("Login succesful")</script>';
            header("Location: demo.php");
            
            /*$firstname =$_POST['fname'];
            $lastname =$_POST['lname'];
            if(isset($_POST['submit']) && !empty($_POST['submit'])){
            $insertquery="insert into login(firstname,lastname) values('$firstname','$lastname')";
            $res=mysqli_query($connect,$insertquery);
            if($res){
                ?>
                <script>
                    alert("data inserted properly");
                </script>
                <?php
            }
        }
            else{
                ?>
                <script>
                    alert("data inserted properly");
                </script>
                <?php
            }
            */
        }
        
        else
        {
            echo '<script>alert("Login unsuccesful")</script>';
        }
        
    }

   

?>





<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<head>
    <style>
        body {
            font-family: "Lato", sans-serif;
        }
        
        
        
        .main-head{
            height: 150px;
            background: #FFF;
           
        }
        
        .sidenav {
            height: 100%;
            background-color: #000;
            overflow-x: hidden;
            padding-top: 20px;
        }
        
        
        .main {
            padding: 0px 10px;
        }
        
        @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
        }
        
        @media screen and (max-width: 450px) {
            .login-form{
                margin-top: 10%;
            }
        
            .register-form{
                margin-top: 10%;
            }
        }
        
        @media screen and (min-width: 768px){
            .main{
                margin-left: 40%; 
            }
        
            .sidenav{
                width: 40%;
                position: fixed;
                z-index: 1;
                top: 0;
                left: 0;
            }
        
            .login-form{
                margin-top: 30%;
            }
        
            .register-form{
                margin-top: 20%;
            }
        }
        
        
        .login-main-text{
            margin-top: 20%;
            padding: 60px;
            color: #fff;
        }
        
        .login-main-text h2{
            font-weight: 300;
        }
        
        .btn-black{
            background-color: #000 !important;
            color: #fff;
        }
    </style>
</head>
<div class="sidenav">
         <div class="login-main-text">
            <h2>Application<br> Login Page</h2>
            <p>Login or register from here to access.</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form method="post">
                  <div class="form-group">
                     <label><h2>User Name<h2></label>
                     <input type="text" name="un" class="form-control" placeholder="User Name" required>
                  </div>
                  <div class="form-group">
                     <label><h2>Password<h2></label>
                     <input type="text" name="pw" class="form-control" placeholder="Password" required>
                  </div>
                  <input type="submit" name="save" value="Submit" class="btn btn-black">&nbsp;
                  <button type="submit" class="btn btn-secondary">Register</button>
               </form>
            </div>
         </div>
      </div>