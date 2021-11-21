<?php

#$name=$_POST["un"];
#$id=$name;
#echo $name;
$hostname="localhost";
$username="root";
$password="";
$databasename="todo";
$conn=new mysqli($hostname,$username,$password,$databasename);
if($_GET){
    $user=$_GET['user'];
    #echo $user;
}
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
    $email=$_POST['email'];
    $address=$_POST['address'];
    $linkedn=$_POST['linkedn'];
    $git=$_POST['git'];
    $career=$_POST['career'];
    $work=$_POST['work'];
    $academic=$_POST['academic'];
    $skill1=$_POST['skill1'];
    $skill2=$_POST['skill2'];
    $skill3=$_POST['skill3'];
    $cer=$_POST['certifications'];
    $sql="UPDATE data SET Name = '$name', Phone = '$phone', Email='$email', Address='$address', Linkedn='$linkedn', Github='$git', Career='$career', Experience='$work', Qualification='$academic', Proficients='$skill1', Intermediates='$skill2', Basics='$skill3', Certifications='$cer'  WHERE username='$user' ";
    #$res=mysqli_query($conn,$query);
        if($conn->query($sql)==TRUE){
            #echo 'data inserted';
        }
            
        else{
           echo 'data not inserted';
        }

        
        #session_destroy();
        
        }

        if(isset($_POST['logout'])){
        header("Location: website.html");
    }
    
        
      
    


?>










<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <title>HorizonX</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
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
            <form method="POST" id="myfrm">
            <div class="form-group">
                <h4 class="mt-2">PERSONAL INFORMATION</h4>
                
                <label for="Name" >NAME</label>
                <input type="text" name="name" id="Name"class="form-control" value="<?php 
          $hostname="localhost";
          $username="root";
          $password="";
          $databasename="todo";
          $connect=new mysqli($hostname,$username,$password,$databasename);
          #session_start();
          #$id=$_SESSION['username'];
          if($_GET){
            $user=$_GET['user'];
            #echo $user;
        }
          $sql1="SELECT Name FROM data WHERE username= '$user' ";
          $result=mysqli_query($connect,$sql1);
          $count=mysqli_num_rows($result);
          if($count==1){
            $row=mysqli_fetch_assoc($result);
            echo $row['Name'];} #session_destroy();?>" required>
            </div>


            <div class="form-group mt-2 ">
               
                <label for="profile_pic" >SELECT YOUR PROFILE PHOTO</label>
                <input type="file" id="profile_pic" accept="image/jpeg/png/jpg" class="form-control" value="<?php 
          $hostname="localhost";
          $username="root";
          $password="";
          $databasename="todo";
          $connect=new mysqli($hostname,$username,$password,$databasename);
          #session_start();
          #$id=$_SESSION['username'];
          $sql1="SELECT firstname FROM login WHERE username= 'admin1' ";
          $result=mysqli_query($connect,$sql1);
          $count=mysqli_num_rows($result);
          if($count==1){
            $row=mysqli_fetch_assoc($result);
            echo $row['firstname'];} #session_destroy();?>">






            </div>
            <div class="form-group mt-2 ">
               
                <label for="Phone Number" >PHONE NUMBER</label>
                <input type="text" name="phone" id="Phone Number"class="form-control"value="<?php 
          $hostname="localhost";
          $username="root";
          $password="";
          $databasename="todo";
          $connect=new mysqli($hostname,$username,$password,$databasename);
          #session_start();
          #$id=$_SESSION['username'];
          if($_GET){
            $user=$_GET['user'];
            #echo $user;
        }
          $sql1="SELECT Phone FROM data WHERE username= '$user' ";
          $result=mysqli_query($connect,$sql1);
          $count=mysqli_num_rows($result);
          if($count==1){
            $row=mysqli_fetch_assoc($result);
            echo $row['Phone'];} #session_destroy();?>">
            </div>


            <div class="form-group mt-2 " >
               
                <label for="Email" >EMAIL</label>
                <input type="email" name="email" id="Email"class="form-control" value="<?php 
          $hostname="localhost";
          $username="root";
          $password="";
          $databasename="todo";
          $connect=new mysqli($hostname,$username,$password,$databasename);
          #session_start();
          #$id=$_SESSION['username'];
          if($_GET){
            $user=$_GET['user'];
            #echo $user;
        }
          $sql1="SELECT Email FROM data WHERE username= '$user' ";
          $result=mysqli_query($connect,$sql1);
          $count=mysqli_num_rows($result);
          if($count==1){
            $row=mysqli_fetch_assoc($result);
            echo $row['Email'];} #session_destroy();?>">
            </div>


            <div class="form-group mt-2 ">
               
                <label for="Address" >PERMANENT ADDRESS</label>
                <textarea  id="Address" name="address" class="form-control" rows="4"><?php 
          $hostname="localhost";
          $username="root";
          $password="";
          $databasename="todo";
          $connect=new mysqli($hostname,$username,$password,$databasename);
          #session_start();
          #$id=$_SESSION['username'];
          if($_GET){
            $user=$_GET['user'];
            #echo $user;
        }
          $sql1="SELECT Address FROM data WHERE username= '$user' ";
          $result=mysqli_query($connect,$sql1);
          $count=mysqli_num_rows($result);
          if($count==1){
            $row=mysqli_fetch_assoc($result);
            echo $row['Address'];} #session_destroy();?> </textarea> 
            </div>


            <div class="text-secondary mt-2">IMPORTANT LINKS</div>
            <div class="form-group mt-2 ">
               
                <label for="Linkedin_link" >LINKEDIN_LINK</label>
                <input type="text" name="linkedn" id="Linkedin_link"class="form-control" value="<?php 
          $hostname="localhost";
          $username="root";
          $password="";
          $databasename="todo";
          $connect=new mysqli($hostname,$username,$password,$databasename);
          #session_start();
          #$id=$_SESSION['username'];
          if($_GET){
            $user=$_GET['user'];
            #echo $user;
        }
          $sql1="SELECT Linkedn FROM data WHERE username= '$user' ";
          $result=mysqli_query($connect,$sql1);
          $count=mysqli_num_rows($result);
          if($count==1){
            $row=mysqli_fetch_assoc($result);
            echo $row['Linkedn'];} #session_destroy();?>">
            </div>


            <div class="form-group mt-2 ">
               
                <label for="Github_link" >GITHUB PROFILE</label>
                <input type="text" name="git" id="Github_link"class="form-control" value="<?php 
          $hostname="localhost";
          $username="root";
          $password="";
          $databasename="todo";
          $connect=new mysqli($hostname,$username,$password,$databasename);
          #session_start();
          #$id=$_SESSION['username'];
          if($_GET){
            $user=$_GET['user'];
            #echo $user;
        }
          $sql1="SELECT Github FROM data WHERE username= '$user' ";
          $result=mysqli_query($connect,$sql1);
          $count=mysqli_num_rows($result);
          if($count==1){
            $row=mysqli_fetch_assoc($result);
            echo $row['Github'];} #session_destroy();?>">
            </div>
            
        </div>
    
        <div class="col-md-6">
            <h4 class="mt-2">PROFESSIONAL INFORMATION</h4>
            <div class="form-group mt-2 ">
                <label for="Objectives" >CAREER OBJECTIVES</label>
                <textarea  id="Objectives" name="career" class="form-control" rows="3"><?php 
          $hostname="localhost";
          $username="root";
          $password="";
          $databasename="todo";
          $connect=new mysqli($hostname,$username,$password,$databasename);
          #session_start();
          #$id=$_SESSION['username'];
          if($_GET){
            $user=$_GET['user'];
            #echo $user;
        }
          $sql1="SELECT Career FROM data WHERE username= '$user' ";
          $result=mysqli_query($connect,$sql1);
          $count=mysqli_num_rows($result);
          if($count==1){
            $row=mysqli_fetch_assoc($result);
            echo $row['Career'];} #session_destroy();?></textarea> 
            </div>

            <div class="form-group mt-2 ">
                <label for="weField" >WORK EXPERIENCE</label>
                <textarea  class="form-control" name="work" id="weField" rows="2"><?php 
          $hostname="localhost";
          $username="root";
          $password="";
          $databasename="todo";
          $connect=new mysqli($hostname,$username,$password,$databasename);
          #session_start();
          #$id=$_SESSION['username'];
          if($_GET){
            $user=$_GET['user'];
            #echo $user;
        }
          $sql1="SELECT Experience FROM data WHERE username= '$user' ";
          $result=mysqli_query($connect,$sql1);
          $count=mysqli_num_rows($result);
          if($count==1){
            $row=mysqli_fetch_assoc($result);
            echo $row['Experience'];} #session_destroy();?></textarea>
            </div>
            
            <div class="form-group mt-2 " >
                <label for="aqField" >ACADEMIC QUALIFICATION</label>
                <textarea class="form-control" name="academic" id="aqField" rows="2"><?php 
          $hostname="localhost";
          $username="root";
          $password="";
          $databasename="todo";
          $connect=new mysqli($hostname,$username,$password,$databasename);
          #session_start();
          #$id=$_SESSION['username'];
          if($_GET){
            $user=$_GET['user'];
            #echo $user;
        }
          $sql1="SELECT Qualification FROM data WHERE username= '$user' ";
          $result=mysqli_query($connect,$sql1);
          $count=mysqli_num_rows($result);
          if($count==1){
            $row=mysqli_fetch_assoc($result);
            echo $row['Qualification'];} #session_destroy();?></textarea>
            </div>
           
            <div class="form-group mt-2 ">
               
                <label for="Skill1" >PROFICIENT SKILL</label>
                <input type="text" id="Skill1" name="skill1" class="form-control" value="<?php 
          $hostname="localhost";
          $username="root";
          $password="";
          $databasename="todo";
          $connect=new mysqli($hostname,$username,$password,$databasename);
          #session_start();
          #$id=$_SESSION['username'];
          if($_GET){
            $user=$_GET['user'];
            #echo $user;
        }
          $sql1="SELECT Proficients FROM data WHERE username= '$user' ";
          $result=mysqli_query($connect,$sql1);
          $count=mysqli_num_rows($result);
          if($count==1){
            $row=mysqli_fetch_assoc($result);
            echo $row['Proficients'];} #session_destroy();?>">
            </div>


            <div class="form-group mt-2 ">
               
                <label for="Skill2" >INTERMEDIATE SKILL</label>
                <input type="text" id="Skill2" name="skill2" class="form-control"value="<?php 
          $hostname="localhost";
          $username="root";
          $password="";
          $databasename="todo";
          $connect=new mysqli($hostname,$username,$password,$databasename);
          #session_start();
          #$id=$_SESSION['username'];
          if($_GET){
            $user=$_GET['user'];
            #echo $user;
        }
          $sql1="SELECT Intermediates FROM data WHERE username= '$user' ";
          $result=mysqli_query($connect,$sql1);
          $count=mysqli_num_rows($result);
          if($count==1){
            $row=mysqli_fetch_assoc($result);
            echo $row['Intermediates'];} #session_destroy();?>">
            </div>


            <div class="form-group mt-2 ">
               
                <label for="Skill3" >BASIC SKILL</label>
                <input type="text" id="Skill3" name="skill3" class="form-control" value="<?php 
          $hostname="localhost";
          $username="root";
          $password="";
          $databasename="todo";
          $connect=new mysqli($hostname,$username,$password,$databasename);
          #session_start();
          #$id=$_SESSION['username'];
          if($_GET){
            $user=$_GET['user'];
            #echo $user;
        }
          $sql1="SELECT Basics FROM data WHERE username= '$user' ";
          $result=mysqli_query($connect,$sql1);
          $count=mysqli_num_rows($result);
          if($count==1){
            $row=mysqli_fetch_assoc($result);
            echo $row['Basics'];} #session_destroy();?>">
            </div>
            


            <div class="form-group mt-2 " >
                <label for="cert_field" >CERTIFICATIONS</label>
                <textarea class="form-control" id="certField" name="certifications" rows="1"><?php 
          $hostname="localhost";
          $username="root";
          $password="";
          $databasename="todo";
          $connect=new mysqli($hostname,$username,$password,$databasename);
         
          #$id=$_SESSION['username'];
          if($_GET){
            $user=$_GET['user'];
            #echo $user;
        }
          $sql1="SELECT Certifications FROM data WHERE username= '$user' ";
          $result=mysqli_query($connect,$sql1);
          $count=mysqli_num_rows($result);
          if($count==1){
            $row=mysqli_fetch_assoc($result);
            echo $row['Certifications'];} ?></textarea>
            </div>
            

        </div>

    
       
    <div class="container text-center mt-5">
            <input type="submit" onclick="Generate_cv(); return false"class="btn btn-dark btn-large" value="GenerateResume">&nbsp;&nbsp;
            <input type="submit"  name="save" class="btn btn-dark btn-large"  value="Save">&nbsp;&nbsp;
            <input type="submit"  name="logout" class="btn btn-dark btn-large"  value="Logout">

           
           
    </div>
    
    
    </div>
    </form>

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
                <input type="button" onclick="print_cv()" value="Print" class="btn btn-dark btn-large" id="printbtn">
            
            </div>
        </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
  crossorigin="anonymous"></script>
<script src="FINAL_script.js"></script>
</body>








