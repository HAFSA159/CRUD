<?php 
$conn=new mysqli('localhost','root','','crud');
if($conn){
    // echo "Connection successfull";
}else{
    die(mysqli_errno($conn));
}
?>