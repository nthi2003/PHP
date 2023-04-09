<?php

$host="localhost";
$user="root";
$password="";
$db="user";

$data=mysqli_connect($host,$user,$password,$db);
if($data===false){
    die("connecton error");
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $username=$_POST["username"];
    $password=$_POST["password"];
    
    $sql="SELECT * FROM `login` WHERE username='" .$username."' AND password='".$password."'
    ";
    $result=mysqli_query($data,$sql);

    $row=mysqli_fetch_array($result);

    if($row["usertype"]=="user"){
       echo "user";
    }
    elseif($row["usertype"]=="admin"){
        header("location:admin_page.php");
    }
    else{
        echo "username or password incorrect";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
<h1>Login</h1>
<div style="background-color:grey; width:500px">
  <form action="#" method="POST">
  <div >
        <label for="">username</label>
        <input type="text" name="username" required> 
    </div>
    <div>
        <label for="">password</label>
        <input type="password" name="password" required> 
    </div>

    <div>
        <input type="submit" value="Login">
    </div>
  </form>
</div>
</center>

</body>
</html>