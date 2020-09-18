<?php
require 'session-common.php';
if(!isset($_SESSION['email'])){
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
      <link rel=stylesheet type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <script src="bootstrap-3.3.7-dist/jquery.min.js"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Settings</title>
      <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <nav class="navbar navbar-default navbar-fixed-top">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <a href="index.php" class="navbar-brand hed"><strong>E- Store</streong></a>
                               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                            <span class="icon-bar"></span>
                             <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                        </button>
                        </div>
                        <div class="collapse navbar-collapse" id="mynavbar">
                           <ul class="nav navbar-nav navbar-right nav1">
                                <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a> </li>  
                                <li><a href="settings.php"><span class="glyphicon glyphicon-cog"></span> Settings </a></li>
                                 <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout </a></li>                           
                            </ul>
                        </div>
                    </div>
                </nav>
            </div> 
        </div>
        <br><br><br><br><br>
        <div class="container">
        <div class="row">
            <div class="col-xs-6 col-md-offset-3">      
                <h3>Change Password</h3><br>
                <form action="setting-script.php" method="post">
                <div class="form-group">
                    <input type="password" name="old" class="form-control" placeholder="Old Password" required="true"><br>
                     <input type="password" name="new" class="form-control" placeholder="New Password" required="true"><br>
                     <input type="password" name="rnew" class="form-control" placeholder="Re-type New Password" required="true"><br>
                     <button class="btn btn-primary" value="change">Change</button>
                </div>
                </form>
                
            </div>
            </div>
        </div><br><br><br>
        <div class="visible-lg visible-md">
            
        <br><br><br><br><br><br><br><br><br><br><br><br>
        </div>
   <footer>
                <div class="container-fluid">
                    <div class="row">
                <div class="foot">
                    <div class="visible-sm visible-xs">
                         <div class="row">
                        <div class="col-xs-4">  <h3> Information</h3></div>
                        <div class="col-xs-4">    <h3> My Account</h3> </div>                        
                        <div class="col-xs-4">  <h3> Contact Us</h3></div>  
                    </div>
                <div class="row">
                    <div class="col-xs-4">  <h4><a href='about.php'>About Us</h4></a></div>
                    <div class="col-xs-4">   <h4><a href='cart.php'>Cart</h4></a></div>                       
                        <div class="col-xs-4">  <h4>Contact +91 123 0000000</h4></div>
                    </div>
                    <div class="row">
                          <div class="col-xs-4">  <h4><a href='contact.php'>Contact Us</h4></a></div>
                    <div class="col-xs-4">   <h4><a href='settings.php'>Settings</h4></a></div>  
                    </div>
                    </div>
                    <div class="visible-md visible-lg">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">  <h3> Information</h3></div>
                        <div class="col-md-4 col-sm-6">    <h3> My Account</h3> </div>                        
                        <div class="col-md-4 col-sm-6">  <h3> Contact Us</h3></div>                
                    </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6">  <h4><a href='about.php'>About Us</h4></a></div>
                    <div class="col-md-4 col-sm-6">   <h4><a href='cart.php'>Cart</h4></a></div>                       
                        <div class="col-md-4 col-sm-6">  <h4>Contact +91 123 0000000</h4></div>
                    </div>
                    <div class="row">
                          <div class="col-md-4 col-sm-6">  <h4><a href='contact.php'>Contact Us</h4></a></div>
                    <div class="col-md-4 col-sm-6">   <h4><a href='settings.php'>Settings</h4></a></div>     
                    </div>
                    </div>
                </div>
                </div>
                </div>
            </footer>
       
</body>
</html>