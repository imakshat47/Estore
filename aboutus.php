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
        <title>E-Store | About Us</title>
    </head>
    <body>
        <header>
<?php include 'include/header.php'; ?>
        </header>
    <content>
        <div class="container"  style="padding-bottom: 100px;">
<?php include 'login.php'; ?>
            <div class="col-md-4">
                <div class="panel-group">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                        Who we are
                        </div>
                        <div class="panel-body">
                            <div class="thumbnail">
                                <img src="img/about.jpg" class="img-responsive">
                            </div>
                            We here present you all kind of book just pick special ones... <br>
                            “A book is not only a friend, it makes friends for you. When you have possessed a book with mind and spirit, you are enriched. But when you pass it on you are enriched threefold.”

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel-group">
                    <div class="panel panel-info">
                        <div class="panel-heading">

                            History
                        </div>
                        <div class="panel-body">

                             It's the World's Library. It's a smart social networking site. It's a celebration of literature and a place where books get new life. BookCrossing is the act of giving a book a unique identity so, as the book is passed from reader to reader, it can be tracked and thus connecting its readers. There are currently 1,956,656 BookCrossers and 13,037,656 books travelling throughout 132 countries. Our community is changing the world and touching lives one book at a time.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel-group">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Opportunities
                        </div>
                        <div class="panel-body">
                            Very simply, we aim to connect people through books.
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </content>
    <footer style="position: fixed; bottom: 0;">
<?php include 'include/footer.php'; ?></footer>
</body>
</html>