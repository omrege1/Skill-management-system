


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
    <link rel="stylesheet"href="FINAL_style.css"/>
<body>

<div class="container" id="resume_form">
    <h2 class="text-center my-2">RESUME GENERATOR</h2>
    <div class="row">
        <div class="col-md-6">
            <form method="post">
            <div class="form-group">
                <h4 class="mt-2">PERSONAL INFORMATION</h4>
                <label for="Name" >NAME</label>
                <input type="text" name="name">
            </div>
        
            <div class="form-group mt-2 ">
               
                <label for="Phone Number" >PHONE NUMBER</label>
                <input type="text" name="phone">
                
            </div>
            
               
                
    <div class="container text-center mt-2">
            
            <input type="submit" name="save"  value="Save">
            </form>
    </div>
    </div>
</div>





</body>



<?php




if(isset($_POST['save'])){
  
    $nam =$_POST["name"];
    echo $nam;
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
    $name =$_POST['name'];
    $phone =$_POST['phone'];
    $sql="UPDATE data SET Name = '$name', Phone = '$phone' WHERE username='admin'; ";
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




