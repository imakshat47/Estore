<?php
require 'include/common.php';
if (isset($_SESSION['email'])) {
    header('location: home.php');
}
?>
<!Doctype html>
<html>
    <head>
<?php require 'include/css.php'; ?>
        <title>
            E-Store | Contact Us
        </title>
    </head>
    <body>
        <header>
<?php include 'include/header.php'; ?>
        </header>
    <content>
        <div class="container">
<?php include 'login.php'; ?>
            
                <div class="col-xs-10 col-md-8">
                    LIVE SUPPORT
                    <br>24 hours | 7 days a Week | 365 days a year Live Technical Support
                    

                </div>
           
            <div class="col-xs-8 col-md-4"><br>
                    <img src="img/contact.jpg" alt="Helper Image">
                </div>
                <div class="col-xs-6 col-md-6">
                    <br> CONTACT US <br><br>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Name">
                        </div><div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Email">
                        </div> <div class="form-group">
                            <input type="text" class="form-control" name="message" placeholder="Message">
                        </div>
                        <button class="btn btn-primary">Submit</button>

                    </form>
                </div>
            
            <div class="col-xs-6 col-md-4 col-md-offset-2"><br>
                    <h4> Company Information:</h4>
                    500 Lerem Ipsum Dolor Sit,<br>
                    22-56-2-9 Sit, Lorem,,<br>
                    USA <br>
                    Phone: (00) 222 666 444<br>
                    Fax: (000) 000 00 00 0<br>
                    Email: info@mycompany.com <br>
                    Follow on : Facebook, Twitter
                </div>
            </div>

       
    </content>

    <footer style="position: fixed; bottom: 0;">
<?php include 'include/footer.php'; ?>
    </footer>
</body>
</html>