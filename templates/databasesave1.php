<?php

#$name=$_POST["un"];
#$id=$name;
#echo $name;
session_start();
if(isset($_POST['submit'])){
  

    #session_start();
    #$id=$_SESSION['username'];
    
    $hostname="localhost";
    $username="root";
    $password="";
    $databasename="todo";
    $conn=new mysqli($hostname,$username,$password,$databasename);
    
    if($conn->connect_error){
        echo 'No';
        #die("connection failed" .$conn->connect_error);
    }
    
    #session_start();
    $firstname =$_POST['fname'];
    $lastname =$_POST['lname'];
    $sql="UPDATE login SET firstname = '$firstname', lastname = '$lastname' WHERE username= 'admin' ";
    #$res=mysqli_query($conn,$query);
        if($conn->query($sql)==TRUE){
            echo 'data inserted';
        }
            
        else{
           echo 'data not inserted';
        }

        #session_destroy();
        
        }
        
      
    


?>









<form method="POST">
  <label for="fname">First name:</label>
  <input type="text" name="fname" value="<?php 
          $hostname="localhost";
          $username="root";
          $password="";
          $databasename="todo";
          $connect=new mysqli($hostname,$username,$password,$databasename);
          #session_start();
          #$id=$_SESSION['username'];
          $sql1="SELECT firstname FROM login WHERE username= 'admin' ";
          $result=mysqli_query($connect,$sql1);
          $count=mysqli_num_rows($result);
          if($count==1){
            $row=mysqli_fetch_assoc($result);
            echo $row['firstname'];} #session_destroy();?>"><br><br>

          <label for="lname">Last name:</label>

          <input type="text" id="lname" name="lname" value="<?php 
          $hostname="localhost";
          $username="root";
          $password="";
          $databasename="todo";
          $connect1=new mysqli($hostname,$username,$password,$databasename);
          #session_start();
          #$id=$_SESSION['username'];
          #$id=$i;
         
            
          $sql1="SELECT lastname FROM login WHERE username= 'admin' ";
          $result1=mysqli_query($connect1,$sql1);
          $count1=mysqli_num_rows($result1);
          if($count1==1){
            $row1=mysqli_fetch_assoc($result1);
            echo $row1['lastname'];}  ?>"> <br><br>
        <input type="submit" name="submit" value="Submit">
  </form>
