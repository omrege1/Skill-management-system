<?php
session_start();

$_SESSION['username']='username';


'''if(isset($_POST['submit'])){
    $name=$_POST["name"];
    header("Location: b.php");

    }'''


?>


<form method="POST" action="b.php">
  <label for="fname">First name:</label>
  <input type="text" name="fname"><br><br>
  <label for="lname">Last name:</label>
  <input type="text" name="lname"><br><br>
  <input type="submit" value="Submit" name="submit">
</form>