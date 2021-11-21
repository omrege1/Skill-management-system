<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<div class="container ">
    <br/>
	<div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-8">
                            <form class="card card-sm" method="POST">
                                <div class="card-body row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <i class="fas fa-search h4 text-body"></i>
                                    </div>
                                    <!--end of col-->
                                    <div class="col">
                                        <input class="form-control form-control-lg form-control-borderless "  type="search" name="search" placeholder="Search skill" required>
                                    </div>
                                    <!--end of col-->
                                    <div class="col-auto">
                                        <button class="btn btn-lg btn-dark" type="submit" name="submit">Search</button>
                                    </div>
                                    <!--end of col-->
                                </div>
                            </form>
                        </div>
                        <!--end of col-->
                    </div>
</div>

<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<style>
    table {
        border-collapse: collapse;
        align: center;
        text-align: center;
    }
</style>
</head>
<body>
<table align="center" width="600" border="1" cellpadding="1" cellspacing="1">
    <tr>
        <th> Name</th>
        <th>email</th>
        <th>Basic skill</th>
        <th>Intermediate skill</th>
        <th>Proficient skill</th>
    </tr>
    <?php
        
        if(isset($_POST["search"]) && isset($_POST['submit'])  ){
        $hostname="localhost";
        $username="root";
        $password="";
        $databasename="todo";
        $conn=new mysqli($hostname,$username,$password,$databasename);

        $search=$_POST["search"];
        
        $query="SELECT * FROM data where Proficients like '%$search%' OR Intermediates like '%$search%' OR Basics like '%$search%' ";
        $result= $conn->query($query);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                echo "<tr><td>" . $row["Name"] ."</td><td>" . $row['Email'] ."</td><td>" . $row['Basics'] ."</td><td>" . $row['Intermediates'] ."</td><td>" . $row['Proficients'];
            }
            echo "</table>";
        }

        else{
            echo "No results";
        }
    }
    ?>