<?php include 'include/common.php';
$opassword = mysqli_real_escape_string($con,$_POST['OldPass']);
$npassword = mysqli_real_escape_string($con,$_POST['NewPass']);
$rpassword = mysqli_real_escape_string($con,$_POST['RePass']);

$opassword = md5($opassword);
$npassword = md5($npassword);
$rpassword = md5($rpassword);

$user_id = $_SESSION['id'];
$sql = "SELECT Password FROM users WHERE Id = '$user_id' AND Password = '$opassword';";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
if ($row['Password']!=$opassword) {
   $_SESSION['change_pass']= "Wrong Old Password !!";
    //exit();
} elseif ($npassword == $rpassword) {
    $update_query = "UPDATE users SET Password='$npassword' where Id='$user_id';";
    $update_result = mysqli_query($con, $update_query);

    $_SESSION['change_pass']= "Password Changed !!";
} else {
    $_SESSION['change_pass']= "New Password not match !!";
}

header('location: setting.php'); ?>   