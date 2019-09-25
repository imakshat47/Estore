<?php
require 'include/common.php';
if (!isset($_SESSION['email'])) {
    header('location: index.php');

    function checkCart($item_id) {

        $user_id = $_SESSION['id'];
        $query_added_to_cart = "SELECT * FROM cart WHERE Items_id='$item_id' AND User_id ='$user_id' AND Status='Added to cart' ;";
        $result_carts = mysqli_query($con, $query_added_to_cart);
        $rowcounts = mysqli_num_rows($result_carts);
        if ($rowcounts >= 1) {
            return 1;
        } else {
            return 0;
        }
    }

}
?>
<!Doctype html>
<html>
    <?php include 'include/css.php'; ?>
    <head>
        <title>E-Store | Home</title>
    </head>
    <body>
        <header>
            <?php include 'include/header.php'; ?>
        </header>
    <content>
        <div class="container">
            <?php include 'login.php'; ?>
            <div class="row container_box">
                <?php

                function checkCart($item_id) {
                    require 'include/common.php';
                    $user_id = $_SESSION['id'];
                    $query_added_to_cart = "SELECT * FROM cart WHERE Items_id='$item_id' AND User_id ='$user_id' AND Status='Added to cart' ;";
                    $result_carts = mysqli_query($con, $query_added_to_cart);
                    $rowcounts = mysqli_num_rows($result_carts);
                    if ($rowcounts >= 1) {
                        return 1;
                    } else {
                        return 0;
                    }
                }

                $select_query = "SELECT Id, Header,Body,Price from product;";
                $select_query_result = mysqli_query($con, $select_query);
                $idd = 0;
                while ($row = mysqli_fetch_array($select_query_result)) {
                    $idd ++;
                    ?>
                    <div class="col-xs-4 ">
                        <div class="panel-group">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    #<?php echo $idd . '  ' . $row['Header']; ?>
                                </div>
                                <div class="panel-body">

                                    <?php echo '<img class="thumbnail responsive" src="img/book' . $idd . '.jpg" height="300" alt="Books">'; ?>

                                    <p class=" ">  <?php echo $row['Body']; ?></p> <br>

                                    <?php
                                    $id = $row['Id'];
                                    if (checkCart($id)) {
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } else {
                                        echo '<a href="cart-add.php?id=' . $id. '"  class="btn btn-primary btn-block">Add to cart</a>';
                                    }
                                    ?>                                 

                                </div>
                                <div class="panel-footer">
                                    Price: <?php echo $row['Price']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div> 
    </content>
</body>
</html>