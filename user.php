<?php

include 'connect.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `crud` (`name`, `email`, `mobile`, `password`) VALUES ('$name', '$email', '$mobile', '$password')";
    $result = mysqli_query($con,$sql);
    if($result){
       // echo "Data inserted successfully";
       header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>crudoperation</title>
  </head>
  <body>
    <div class="container my-5" >
        <form method="post">
            <div class="form-group">
                <label >Name</label>
                <input type="text" class="form-control" placeholder="Enter your name:" name="name" autocompleete="off">
            </div>

            <div class="form-group">
                <label >Email</label>
                <input type="email" class="form-control" placeholder="Enter your email:" name="email" autocompleete="off">
            </div>

            <div class="form-group">
                <label >Mobile</label>
                <input type="text" class="form-control" placeholder="Enter your mobile number:" name="mobile" autocompleete="off">
            </div>

            <div class="form-group">
                <label >Password</label>
                <input type="text" class="form-control" placeholder="Enter your password:" name="password" autocompleete="off">
            </div>
            <br>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>

            
        </form>

    </div>

    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>