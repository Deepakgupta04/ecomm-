<?php

$username = $_POST['username'];
$password = $_POST['password1'];
$mobile = $_POST['mobile'];

$conn=new mysqli("localhost:3307","root","","acme_july");
$sql_obj=mysqli_query($conn,"Select * from account Where Username='$username'");
$total_row=mysqli_num_rows($sql_obj);
if($total_row>0)
{
    echo "aldready exists";
    echo "<br>";
    echo "<a>Try again</a>";
    die;
}


$cmd="insert into account(Username,Password,Mobile) values('$username','$password','$mobile')";
echo "$cmd <br>";

$sql_result=mysqli_query($conn,$cmd);

if($sql_result)
{
    echo "<h1>Registration successfull!";
    echo "<br>";
    echo "<a href='login.html'>Login Here</a>";
}
else{
    echo "Registration Failed1";    
}

?>

