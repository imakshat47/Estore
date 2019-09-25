<?php
require 'include/common.php';
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html><html><head>
            <?php include 'include/css.php'; ?>
        <title>E-Store | Setting</title></head>
    <body><header>
<?php include 'include/header.php'; ?>
        </header>                         
    <content>

        <div class="col-sm-4 col-sm-offset-4 col-xs-8 col-xs-offset-2 container"><h2>Change Password</h2>
            <div class="alert alert-success">
                <strong><?php echo $_SESSION['change_pass']; ?></strong>
            </div><br>
            <form action="change_pass.php"method="POST">
                <div class="form-group"><input class="form-control"name="OldPass"placeholder="Old Password"type="password" required  pattern=".{6,}" title="Must contain at least 6 or more characters"></div>
                <div class="form-group">
                    <input class="form-control"name="NewPass"placeholder="New Password"type="password" required  pattern=".{6,}" title="Must contain at least 6 or more characters"></div>
                <div class="form-group"><input class="form-control"name="RePass"placeholder="Re-type New Password"type="password" required  pattern=".{6,}" title="Must contain at least 6 or more characters">
                </div>

                <button class="btn btn-primary"type="submit">Change</button></form></div></content>

</body></html>