<?php
session_start();
include 'database.php';
$_SESSION['name']= $_POST['username'];
$name=$_SESSION['name'];
$pass= $_POST['pass'];

$sql= "SELECT username,password FROM user2 where username='$name' and password='$pass'";
$res= mysqli_query($conn,$sql);

if(mysqli_num_rows($res)==1){
    $sql2="SELECT typee FROM `user2` WHERE username='$name' AND password = '$pass'";
    $ex= mysqli_query($conn,$sql2);
    $res= mysqli_fetch_assoc($ex);
    
    if($res['typee']=='Blogger'){
    $_SESSION['account']= $res['typee'];}
    
    $_SESSION['login']='true';
    
    
    header("Location: Home.php");
}
else{
    $_SESSION['r']= 'Username or password invalid';
    header("Location: Login.php");
}