<?php require 'include/common.php';
 if (!isset($_SESSION['email'])) {
     header('location: index.php');
 }
?>
<!Doctype html>
<html>
    <head>
        <?php include 'include/css.php';?>
        <title>E-Store | Success</title>
    </head>
    <body>
        <header>
          
<nav class="navbar navbar-fixed-top navbar-default">
    <div class="container">
        <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span> 
            </button> 
          
                <a class="navbar-brand" href="home.php">E Store </a>
           
         

        </div>


        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">              
                   
                    <li><a href="setting.php"><span class="glyphicon glyphicon-user"></span> Setting</a></li>
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>                  
            </ul>
        </div>

    </div>



</nav>
        </header>
    <content>
         <center>
        <h2>
            <p style="margin-top: 150px;">
                    Your order is confirmed.<br> Thank you for shopping
                    with us.<br> <a href="home.php"> Click here</a> to purchase any other item.
            </p>
        </h2>
    </center>
    </content>
    
    </body>
</html>