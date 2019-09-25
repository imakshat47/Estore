<?php
require 'include/common.php';
if (isset($_SESSION['email'])) {
    header('location: home.php');
}
$email = mysqli_real_escape_string($con, $_POST['Email']);
$name = mysqli_real_escape_string($con, $_POST['Name']);

// echo $name.$email;
$reset_query = "SELECT Password,Name from users where Name='$name' AND Email='$email';";
$result_reset_query = mysqli_query($con, $reset_query);
$row = mysqli_fetch_array($result_reset_query);
//echo $row['Name'].$row['Password'];
if ($name == $row['Name']) {
    $npassword = md5("111111");
    $update_query = "UPDATE users SET Password='$npassword' where Name='$name' AND Email='$email';";
    $update_result = mysqli_query($con, $update_query);
    ?>
<!Doctype html>
<html>
    <?php        include 'include/css.php';?>
    <body>
        <div class="jumbotron"><center>
            
            <h1 class="display-4">Hey,<br><?php echo 'Password changed to: 111111';?></h1><br>
            <p class="lead"> <?php echo 'Recommended to change Password!!';?></p>
<?php
            header( "refresh:5; url= setting.php" ); }
            else{?>
                <h1 class="display-4"> <?phpecho 'Wrong! credentials.';?></h1>
<?php
            header( "refresh:5; url=forgot_pass.php" );
            }?>
            </center></div>

    </body>
</html>