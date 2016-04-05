<?php
session_start();
include_once "connection.php";
if(!$_SESSION['login']==1){
    header("Location:login.php");
}
elseif($_SESSION['login']==1){
   $name=$_SESSION['user'];
    
    ?>
    
    
    
    <html>
<head>
<body>
    
     <p id="send" style="display:none;">Message Send</p>
        <p id="notsend" style="display:none;">Message Not Send</p>

    <div id="old_messages">
        <input type="button" value="new" onclick="sendmessage()"><br>
<h3>Messages</h3>

<div>
<?php
    $count=0;
    $fix=1;
$query = "SELECT * FROM message WHERE st = 'unread'";
 $result = mysqli_query($con,$query);
while($row = mysqli_fetch_object($result)){
    
    if($row->t0==$name){
    $count++;
    $messageno[]=$row->sno;
    }
}   
    
    echo "<h4>".$count." Messages Unread</h4>";
    for($i=1;$i<($count+$fix);$i++){
        echo "<a href='msgshow.php?no=".$messageno[$i-$fix]."'>Message ".($i)."</a><br>";
    }
?>
    
</div>
        </div>
       
          <?php
                           if(isset($_GET['msg']))
                             {
                                 if($_GET['msg']=='send')
                                {  ?>
                                    <script>
                    document.getElementById('send').style.display="block";
                        </script>
                                <?php	
                                 }
                               elseif($_GET['msg']=='notsend')
                                    {  ?>
                                    <script>
                    document.getElementById('notsend').style.display="block";
                        </script>
                                <?php		}
                                    
                               
                                 }
                        ?>
    

<form id="message_form" style="display:none;" method="post" action="msgprocess.php">
    FROM<input type="text" name="from" value="<?php echo $name;?>" disabled>
    <br>
    TO <input type="text" name="to">
    <br>
    
Message <input type="textarea" name="message">
    <br>
<button type="submit">SEND</button>
<button type="button" onclick="showmessage()">Show Messages</button>
 </form>


   
   
   
    <script>
function sendmessage(){
    document.getElementById('message_form').style.display="block";
    document.getElementById('old_messages').style.display="none";
}
        function showmessage(){
    document.getElementById('message_form').style.display="none";
    document.getElementById('old_messages').style.display="block";
}
    </script>
    <br>
    <a  href="logout.php"><button>LOGOUT</button></a>

</body>
</head>
</html>
<?php  
}
?>