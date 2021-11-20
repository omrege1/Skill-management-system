<?php

$hostname="localhost";
$username="root";
$password="";
$databasename="todo";
$connect=new mysqli($hostname,$username,$password,$databasename);

$query="SELECT * FROM login where skill='python'";
$result=mysqli_query($connect,$query);
$count=mysqli_num_rows($result);

if($count>0){
    $row1=mysqli_fetch_assoc($result);
    echo $row1['firstname'];} 



?>