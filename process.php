<?php
$username = $_REQUEST['login-username'];
$pass = $_REQUEST['login-password'];
include_once "connection.php";
$query = "SELECT * FROM users"; 



$result = mysqli_query($con,$query);

while($row = mysqli_fetch_object($result)){
    $flag=0;
    if(($row->username==$username) && ($row->password==$pass)){
    $flag=1;
    break;
    }

}


if($flag==0){
    header("Location:login.php?msg=dnm");
    }
else{
    session_start();
     $_SESSION['login']=1;
     $_SESSION['user']=$username;
     
    header("Location:homepage.php");
}



?>