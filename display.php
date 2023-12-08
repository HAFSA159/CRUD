<?php 
include "connect.php";
?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Display</title>
</head>
<body>
    <div class="container">
    <button type="button" class="btn btn-primary my-5"><a href="user.php" class="text-light ">Add User</a></button>
    </div>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>

    <?php 
    $sql="Select * from `test`";
    $result=mysqli_query($conn,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $name=$row['name'];
            $email=$row['email'];
            $mobile=$row['mobile'];
            $pasword=$row['password'];
            echo'<tr>
                    <th scope="row">'.$id.'</th>
                    <td>'.$name.'</td>
                    <td>'.$email.'</td>
                    <td>'.$mobile.'</td> v
                    <td>'.$pasword.'</td>
                     <td>
                        <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" 
                        style="text-decoration: none;" class="text-light">Update</a></button>
                        <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" 
                        style="text-decoration: none;" class="text-light">Delete</a></button>
                    </td>
                </tr>';
        }
    }  
    
    ?>
  </tbody>
</table>
</body>
</html>