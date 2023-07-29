<?php

session_start();
$username=$_POST['username'];
$password=$_POST['password'];

$conn=new mysqli("localhost:3307","root","","acme_july");

$sql_obj=mysqli_query($conn,"select * from account where username='$username' and password='$password'");
$total_rows=mysqli_num_rows($sql_obj);

if($total_rows==0)
{
    echo" Invalid credentials!";
    $_SESSION['login_status']=false;
}
else{
    echo"<h1> Login success!</h1>";
    $_SESSION['login_status']=true;
    header('location:home.php');
}






?>