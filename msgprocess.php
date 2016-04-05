<?php
session_start();
include_once "connection.php";
 $t0 = $_REQUEST['message-user'];
 $query = "SELECT * FROM users";
 $result = mysqli_query($con,$query);
 while($row = mysqli_fetch_object($result)){
    $flag=0;
    if($row->username==$t0){
    $flag=1;
    break;
    }
}
if($flag==1){
    $fr0m = $_SESSION['user'];
    $message = $_REQUEST['message-msg'];
    $query1 = "INSERT INTO message (t0, fr0m, message) VALUES ('$t0','$fr0m','$message')";
    $result1 = mysqli_query($con,$query1);
    if($result1){
        header("location:homepage.php?msg=send");
    }
    else{
       header("location:homepage.php?msg=notsend");  
    }

} 
else{
    header("location:homepage.php?msg=notsend"); 
}
    
?>