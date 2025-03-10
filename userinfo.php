<?php
$con=mysqli_connect('localhost','root');

if($con){
    echo "connection successful";
}
else{
    echo "not connected";
}


mysqli_select_db($con,'dress_shopping_database');

$user=$_POST['user'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];

$query="insert into dress_shopping_table(user,email,mobile)
values('$user','$email','$mobile')";


mysqli_query($con,$query);




header('location:index.php');



?>