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

    $firstname =$_POST['fname'];
    $lastname =$_POST['lname'];
    $sql="INSERT INTO  details (firstname,lastname) VALUES('$firstname','$lastname')";
    #$res=mysqli_query($conn,$query);
        if($conn->query($sql)==TRUE){
            echo 'data inserted';
        }
            
        else{
           echo 'data not inserted';
        }
        

        $conn->close();
    }


?>


<form method="POST" action="databasesave.php">
  <label for="fname">First name:</label>
  <input type="text" name="fname"><br><br>
  <label for="lname">Last name:</label>
  <input type="text" name="lname"><br><br>
  <input type="submit" value="Submit" name="submit">
</form>

