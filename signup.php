<?php
include 'include/common.php';
if(isset($_SESSION['email'])){
        header('location: home.php');
    }
?>
<!Doctype html>
<html>
    <?php require 'include/css.php'; ?>
    <head>
        <title>
            E-Store | Sign UP
        </title>
    </head>
    <body>
        <header>
            <?php include 'include/header.php'; ?>
        </header>
    <content>
        <div class="container" style="padding-bottom: 100px;">
            <?php include 'login.php'; ?>
            <div class="row">
                <div class="col-md-4 col-xs-10">
                    <img class="thumbnail responsive" src="img/signup.jpg" alt="Sign UP" height="400">
                </div>
                <div class="col-md-4 col-xs-8 col-xs-offset-2 cocol-md-offset-2">
                    <form action="sign_up.php" method="post">
                        <h2>Sign up</h2>                         
                        <div class="form-group d-block">                                                               

                            <?php
                            if (isset($_SESSION['message'])) {
                                echo $_SESSION['message'];
                            }
                            ?>

                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="Name" placeholder="Name" required> 
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="Email" placeholder="Email Address" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Enter a valid email address">
                        </div>                            
                        <div class="form-group">
                            <input type="password" class="form-control" name="Password" placeholder="Password" required  pattern=".{6,}" title="Must contain at least 6 or more characters">
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" name="Contact" placeholder="Contact" required  pattern=".{10,10}" title="Enter a valid number">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="City" placeholder="City" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="Address" placeholder="Address" required>
                        </div>
                        <button type="submit" class="btn btn-block btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </content>
        <footer style="position: fixed; bottom: 0;">
            <?php include 'include/footer.php'; ?>
        </footer>

    </body>
</html>