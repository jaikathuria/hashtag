<?php
session_start();
include_once "connection.php";
if(!$_SESSION['login']==1){
    header("Location:login.php");
}
elseif($_SESSION['login']==1){
   $name=$_SESSION['user'];
    
    ?>

<!DOCTYPE html>
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

        <div id="page-container" >
            <!-- Side Overlay-->
       
            <!-- Header -->
  
            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="content">
                    <div class="row">
                        <div class="col-sm-5 col-lg-3">
                            <!-- Collapsible Inbox Navigation (using Bootstrap collapse functionality) -->
                            <button class="btn btn-block btn-primary visible-xs push" data-toggle="collapse" data-target="#inbox-nav" type="button">Navigation</button>
                            <div class="collapse navbar-collapse remove-padding" id="inbox-nav">
                                <!-- Account -->
                                <div class="block">
                                    <div class="block-header bg-gray-lighter">
                                        <ul class="block-options">
                                            <li>
                                                <button type="button"><i class="fa fa-user"></i></button>
                                            </li>
                                        </ul>
                                        <h3 class="block-title">Account</h3>
                                    </div>
                                    <div class="block-content">
                                        <ul class="nav nav-pills nav-stacked push">
                                            <li class="active">
                                                <a > &nbsp; <?php echo $name; ?></a>
                                            </li>
                                            
                                            <li>
                                                <a href="logout.php">&nbsp; Logout</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- END Account -->
                                <!-- Inbox Menu -->
                                <div class="block">
                                    <div class="block-header bg-gray-lighter">
                                        <ul class="block-options">
                                            <li>
                                                <button data-toggle="modal" data-target="#modal-compose" type="button"><i class="fa fa-pencil"></i> New Message</button>
                                            </li>
                                        </ul>
                                        <h3 class="block-title">Messages</h3>
                                    </div>
                                    <div class="block-content">
                                        <ul class="nav nav-pills nav-stacked push">
                                            <li id="inbox" class="active">
                                                <a>
                                                    <i class="fa fa-fw fa-inbox push-5-r"></i> Inbox
                                                </a>
                                            </li>
                                            
                                            <li id="sent" class="">
                                                <a >
                                                    <i class="fa fa-fw fa-send push-5-r"></i> Sent
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- END Inbox Menu -->

                                
                            </div>
                            <!-- END Collapsible Inbox Navigation -->
                        </div>
                        <div class="col-sm-7 col-lg-9 frame">
                            <iframe id="frame" width="100%" height="650vh" src="unread.php" ></iframe>
                        </div>
                    </div>
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <footer id="page-footer" class="content-mini content-mini-full font-s12 bg-gray-lighter clearfix">
                <div class="pull-right">
                    Created with <i class="fa fa-heart text-city"></i>
                </div>
                <div class="pull-left">
                    <a class="font-w600">Skyer Hashtag 1.0</a> &copy; <span class="js-year-copy"></span>
                </div>
            </footer>
            <!-- END Footer -->
        </div>

        <!-- Compose Modal -->
        <div class="modal fade" id="modal-compose" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-top">
                <div class="modal-content">
                    <div class="block block-themed block-transparent remove-margin-b">
                        <div class="block-header bg-success">
                            <ul class="block-options">
                                <li>
                                    <button data-dismiss="modal" type="button"><i class="fa fa-times"></i></button>
                                </li>
                            </ul>
                            <h3 class="block-title"><i class="fa fa-pencil"></i> New Message</h3>
                        </div>
                        <div class="block-content">
                            <form class="form-horizontal push-10-t push-10" action="msgprocess.php" method="post">
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="form-material form-material-success floating input-group">
                                            <input class="form-control" type="text" id="message-user" name="message-user">
                                            <label for="message-user">To</label>
                                            <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="form-material form-material-success floating">
                                            <textarea class="form-control" id="message-msg" name="message-msg" rows="6"></textarea>
                                            <label for="message-msg">Message</label>
                                        </div>
                                        <div class="help-block text-right">Feel free to use common tags: &lt;blockquote&gt;, &lt;strong&gt;, &lt;em&gt;</div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <button class="btn btn-sm btn-success" type="submit"><i class="fa fa-send push-5-r"></i> Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Compose Modal -->
        <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm">
                <div class="modal-content">
                        <div class="bg-primary">
                          <div class="col-xs-12 padding">
                              <h3> Done </h3>
                              <br>
                              <h5> Your Message has been sent</h5>
                          </div>
                          <div class="col-xs-8"></div>
                         <button class="btn btn-default" data-dismiss="modal"id="modalButton" type="button">Close</button>
                        </div>
                 </div>
            </div>
        </div>
        <div class="modal fade" id="failModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                            <div class="bg-warning">
                              <div class="col-xs-12 padding">
                                  <h3> Error</h3>
                                  <br>
                                  <h5>Your Message was not sent</h5>
                              </div>
                              <div class="col-xs-8"></div>
                             <button class="btn btn-default" data-dismiss="modal"id="modalButton" type="button">Close</button>
                          </div>
                    </div>
            </div>
        </div>


       
           <script src="assets/js/jquery.min.js"></script>
           <script src="assets/js/bootstrap.min.js"></script>
           <script src="assets/js/jquery.scrollLock.min.js"></script>
           <script src="assets/js/jquery.placeholder.min.js"></script>
           <script src="assets/js/app.js"></script>
           <script src="assets/js/jquery.validate.min.js"></script>
           <script src="assets/js/homepage.js"></script>
           
            <?php
                           if(isset($_GET['msg']))
                             {
                                 if($_GET['msg']=='notsend')
                                { 
           ?>
                <script>
                    $("#failModal").modal('show');
                </script>
           <?php		         }
                               else if($_GET['msg']=='send'){ 
           ?>
                <script>
                    $("#successModal").modal('show');
                </script>
           <?php		         }
                                 }
           ?>

    </body>
</html>
<?php 
}
?>