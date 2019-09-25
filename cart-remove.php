<?php
    require 'include/common.php';
    
    $item_id = $_GET['id'];
    $result_remove_query = mysqli_query($con, "Delete From cart where Items_id='$item_id';");
    
    header('location: cart.php');
    ?>