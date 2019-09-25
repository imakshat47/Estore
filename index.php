<?php
require 'include/common.php';
if (isset($_SESSION['email'])) {
    header('location: home.php');
}
?>
<!Doctype html>
<html lang="en">
    <head>
<?php require 'include/css.php'; ?>
        <title>
            E-Store | Home
        </title>
    </head>

    <body>
        <header>
<?php include 'include/header.php'; ?>
        </header>

    <content>
        <div class="container" style="padding-bottom: 100px;">

            <?php include 'login.php'; ?>
            <?php
            $select_product_query = "SELECT * From product ;";
            $result_product_query = mysqli_query($con, $select_product_query);
            $idd = 0;
            while ($row = mysqli_fetch_array($result_product_query)) {
                $idd ++;
                ?>
                <div class=" col-xs-10  col-md-4 panel-group">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            #<?php echo $idd . '  ' . $row['Header']; ?>
                        </div>

                        <div class="panel-body">

    <?php echo '<img class="thumbnail responsive" src="img/book' . $idd . '.jpg" height="300" alt="Books">'; ?>
                            <p class=""> <?php echo $row['Body']; ?></p>
                            <a  data-toggle="modal" data-target="#loginModal"> <button class="btn btn-primary btn-block">Buy Now</button></a>                           
                        </div>
                        <div class="panel-footer">
                            Price: <?php echo $row['Price']; ?>
                        </div>
                    </div>
                </div> <?php } ?>

        </div>
    </content>
    <footer>
<?php include 'include/footer.php'; ?>
    </footer>
</body>


</html>
