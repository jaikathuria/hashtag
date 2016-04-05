    <?php
session_start();
include_once "connection.php";
if(!$_SESSION['login']==1){
    header("Location:login.php");
}
elseif($_SESSION['login']==1){
   $name=$_SESSION['user'];
    
    ?>
     <html lang="en">
    <head>
        <meta charset="utf-8">

        <title>Skyer Hashtag</title>

        <meta name="description" content="Skyer Hashtag">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">
         <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
        <link rel="stylesheet" id="css-main" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    </head>
                <body>
                      <div class="block">
                                <div class="block-header bg-gray-lighter">
                                    <ul class="block-options">
                                        <li>
                                            <button class="js-tooltip" title="Previous 15 Messages" type="button" onclick="reload()"><i class="fa fa-refresh"></i></button>
                                        </li>
                                        
                                    </ul>
                                    
                                </div>
                                <div class="block-content">

                                    <!-- Messages & Checkable Table (.js-table-checkable class is initialized in App() -> uiHelperTableToolsCheckable()) -->
                                    <div class="pull-r-l">
                                        <table class="js-table-checkable table table-hover table-vcenter">
                                            <tbody>
                                               
                                               <?php
                                                    
                                                    $query = "SELECT * FROM message WHERE t0 = '$name' ORDER BY sno DESC";
                                                    $result = mysqli_query($con,$query);
                                                    while($row = mysqli_fetch_object($result)){
                                                        echo "<tr><td class='font-w600' style='width: 140px;'>".$row->fr0m."</td><td><div class='text-muted push-5-t'>".$row->message."</div></td></tr>";
                                                        
                                                    }
        
                                                ?>
                                          
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- END Messages -->
                                </div>
                       </div>
                       <script>
                        function reload(){
                          location.reload();  
                        };
                    
                    </script>
                </body>
      </html>  
      <?php
}
?>