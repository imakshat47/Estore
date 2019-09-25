<?php
require 'include/common.php';
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html>

    <head>
        <?php include 'include/css.php'; ?>
        <title>Lifestyle Store</title>
    </head>

    <body>
        <header>
            <?php include 'include/header.php'; ?>
        </header>
    <content>
        <div class="container content_box">


            <table class="table table-striped table-alter table-responsive">
                <thead>
                    <tr>                       
                        <th> Item Number</th>
                        <th>Item Name</th>
                        <th>Price</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $user_id = $_SESSION['id'];
                    $total_sum = 0;
                    $p_no = 0;
                    $result_cart_query = mysqli_query($con, "Select * from cart c INNER JOIN product p ON p.Id=c.Items_id Where c.User_id='$user_id';"); 
                    while ($row = mysqli_fetch_array($result_cart_query)) {
                        $total_sum = $total_sum + $row['Price'];
                        $p_no ++;
                        ?>
                        <tr>                       
                            <th><?php echo $p_no; ?> </th>
                            <th><?php echo $row['Header']; ?> </th>
                            <th><?php echo $row['Price']; ?></th>
                            <th> <strong><?php echo '<a href="cart-remove.php?id='.$row['Items_id'].'">Remove</a>';?> </strong> </th>
                    </tr>
                    <?php } ?>
                    <tr>
                        <th></th>
                        <th><h4><b><center>Total</center></b></h4></th>
                        <th><h4><strong>Rs <?php echo $total_sum; ?>/-</strong></h4></th>
                        <th><a href="success.php"> <button class="btn btn-primary">Confirm Order</button></a> </th>
                    </tr>
                </tbody>
            </table>

        </div>
    
    </content>
   
</body>

</html>