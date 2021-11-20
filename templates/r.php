<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>
<table>
    <tr>
        <th> firstname</th>
    </tr>
    <?php
        $hostname="localhost";
        $username="root";
        $password="";
        $databasename="todo";
        $conn=new mysqli($hostname,$username,$password,$databasename);

        $query="SELECT * FROM login where skill like '%python%' ";
        $result= $conn->query($query);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                echo "<tr><td>" .$row["username"] ."<\td><\tr>";
            }
            echo "</table>";
        }
    ?>
</table>
<h1>My First Heading</h1>
<p>My first paragraph.</p>

</body>
</html>






<?php

$hostname="localhost";
$username="root";
$password="";
$databasename="todo";
$connect=new mysqli($hostname,$username,$password,$databasename);

$query="UPDATE data SET username = 'admin' WHERE id='1'; ";
$result=mysqli_query($connect,$query);
$count=mysqli_num_rows($result);

if($count>0){
    $row1=mysqli_fetch_assoc($result);
    echo $row1['usernamename'];} 



?>