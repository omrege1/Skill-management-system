<?php





if(isset($_POST['submit'])){
    $hostname="localhost";
    $username="root";
    $password="";
    $databasename="todo";
    $conn=new mysqli($hostname,$username,$password,$databasename);
    
    if($conn->connect_error){
        echo 'No';
        #die("connection failed" .$conn->connect_error);
    }
    session_start();
    $id=$_SESSION['username'];
    echo $id;
    $firstname =$_POST['fname'];
    $lastname =$_POST['lname'];
    $sql="UPDATE login SET firstname = '$firstname', lastname = '$lastname' WHERE username= '$id' ";
    #$res=mysqli_query($conn,$query);
        if($conn->query($sql)==TRUE){
            echo 'data inserted';
        }
            
        else{
           echo 'data not inserted';
        }
        
        session_destroy();
        $conn->close();
    }
    

?>





<form method="POST">
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname" value="<?php if(isset($_POST['fname'])) echo $_POST['fname']; ?>"><br><br>
  <label for="lname">Last name:</label>
  <input type="text" id="lname" name="lname" value="<?php if(isset($_POST['lname'])) echo $_POST['lname']; ?>"><br><br>
  <input type="submit" name="submit" value="Submit">
</form>


