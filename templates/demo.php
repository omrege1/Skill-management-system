<?php

#$name=$_POST["un"];
#$id=$name;
#echo $name;
$hostname="localhost";
$username="root";
$password="";
$databasename="todo";
$conn=new mysqli($hostname,$username,$password,$databasename);
if(isset($_POST['save'])){
  

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
    $sql="UPDATE data SET Name = '$name', Phone = '$phone' ,  WHERE username= 'admin' ";
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
            <div class="form-group">
                <h4 class="mt-2">PERSONAL INFORMATION</h4>
                <label for="Name" >NAME</label>
                <input type="text" name="name" id="Name"class="form-control"/>
            </div>
        
            <div class="form-group mt-2 ">
               
                <label for="Phone Number" >PHONE NUMBER</label>
                <input type="text" name="phone" id="Phone Number"class="form-control"/>
            </div>
            
               
                
    <div class="container text-center mt-2">
            <button onclick="Generate_cv()"class="btn btn-primary btn-large">Generate Resume</button>
            <input type="button" name="save" class="btn btn-primary btn-sm"  value="Save">
    </div>
    </div>
</div>


<div class="container"id="cv_template">
    <div class="row">
        <div class="col-md-4 text-center left_background">
            <img src="joker.jpg" alt="" id="Template_photo" class="ing-fluid profile_pic">
            <div class="container mt-3 ">
                <p id="Template_name1">SUHAS KULKARNI</p>
                <p id="Template_phone_num">+91-9591680608</p>
                <p id ="Template_email" >suhas@gmail.com</p>
                <hr/>
                <p id="Template_linkedin"><a href="#1">www.linkedin.com/hp/</a></p>
                <p id="Template_github"><a href="#2">www.github.com/hp/</a></p>
            </div>
        </div>
        <div class="col-md-8 ">
            <H2 class="text-center mt-4"style="font-weight:1000px" id="Template_name2">SUHAS KULKARNI</H2>
            <div class="card">
                <div class="card-header left_background"><h4>OBJECTIVES</h4></div>
                <div class="card-body"id="Template_objectives"><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic ad dolor tempore deserunt neque veritatis. Obcaecati nulla qui natus! Architecto a esse nemo rem non temporibus optio porro nostrum quia delectus odit, vel qui illo deserunt corrupti impedit nam consectetur adipisci exercitationem sapiente magni molestias. Veniam sapiente rerum eum nesciunt?</p></div>
            </div>
            <div class="card mt-3">
                <div class="card-header left_background"><h4>WORK EXPERIENCE</h4></div>
                <div class="card-body"id="Template_exp"><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat eos temporibus cum quod corporis, non nobis molestiae rerum atque ratione quas, laboriosam facere maiores repellendus debitis iste dignissimos nostrum provident! Modi odio nam, ut mollitia voluptates repudiandae culpa perspiciatis, corporis saepe necessitatibus velit quasi, quibusdam obcaecati. Deserunt quos ipsa nulla.</p></div>
            </div>
            <div class="card mt-3">
                <div class="card-header left_background"><h4>SKILLS</h4></div>
                <div class="card-body">
                    <ul>
                        Proficient skill:<li id="Template_Skill1">&nbsp;&nbsp;</li>
                        Intermediate skill:<li id="Template_Skill2">&nbsp;&nbsp;</li>
                        Basic skill:<li id="Template_Skill3">&nbsp;&nbsp;</li>
                    </ul>
                
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-header left_background"><h4>LATEST QUALIFICATON</h4></div>
                <div class="card-body"id="Template_qual"><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat eos temporibus cum quod corporis, non nobis molestiae rerum atque ratione quas, laboriosam facere maiores repellendus debitis iste dignissimos nostrum provident! Modi odio nam, ut mollitia voluptates repudiandae culpa perspiciatis, corporis saepe necessitatibus velit quasi, quibusdam obcaecati. Deserunt quos ipsa nulla.</p></div>
            </div>
            

            <div class="card mt-3">
                <div class="card-header left_background"><h4>CERTIFICATIONS</h4></div>
                <div class="card-body"id="Template_cert"><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat eos temporibus cum quod corporis, non nobis molestiae rerum atque ratione quas, laboriosam facere maiores repellendus debitis iste dignissimos nostrum provident! Modi odio nam, ut mollitia voluptates repudiandae culpa perspiciatis, corporis saepe necessitatibus velit quasi, quibusdam obcaecati. Deserunt quos ipsa nulla.</p></div>
            </div>
            <div class="container mt-3 text-center">
                <input type="submit" name="save" value="Save">
            </div>
        </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
  crossorigin="anonymous"></script>
<script src="FINAL_script.js"></script>
</body>








