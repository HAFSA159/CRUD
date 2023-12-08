<?php
include"connect.php";
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql="INSERT INTO `test`(name,email,mobile,password)
     values('$name','$email','$mobile','$password')";
     $result=mysqli_query($conn,$sql);
     if($result){
        // echo "data added successfuly";
        header('location:display.php');
     }else{
        die(mysqli_errno($conn));
     }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Crud</title>
</head>
<body>

<div class="container my-5">
<form method="post">
<div class="from-group">
    <label>Name</label>
    <input type="text" name="name" class="form-control" 
    placeholder="enter your name" autocomplete="off" >
</div>
<div class="from-group">
    <label>Email</label>
    <input type="email" name="email" class="form-control" 
    placeholder="enter your email"  autocomplete="off" >
</div>
<div class="from-group">
    <label>Mobile</label>
    <input type="text" name="mobile" class="form-control" 
    placeholder="enter your mobile"  autocomplete="off">
</div>
<div class="from-group">
    <label>Password</label>
    <input type="password" name="password" class="form-control" 
    placeholder="enter your password" >
</div>

<button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 
</body>
</html>