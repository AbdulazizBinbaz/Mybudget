
<?php
session_start();
include 'database.php';
$username= $_POST['usern'];
$email= $_POST['email'];
$password= $_POST['pass'];
$password2= $_POST['pass2'];
$account=$_POST['account'];

$_SESSION['name']=$username;


 $check= "SELECT USERNAME FROM USER2 WHERE username='$username'";

 
 $res= mysqli_query($conn,$check);
    
 








if(mysqli_num_rows($res)==0 &&  $password==$password2){
    $sqll="INSERT INTO user2 (username,email,password,typee) VALUES ('$username','$email','$password','$account')";
    $add= mysqli_query($conn,$sqll);
    

    $_SESSION['done']= "you've beeen registerd successfully";
    
    header("Location: Login.php");
    
}
else{
    $_SESSION[ 'wrong' ] = 'username is used or passwords not identical';
    header("Location: Register.php");
    
    
}

?>
