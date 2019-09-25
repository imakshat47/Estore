<?php require 'include/common.php';
    $email =   mysqli_real_escape_string($con,$_POST['Email']);
    $password = mysqli_real_escape_string($con,$_POST['Password']);
    $password = md5($password);
    $select_query = "SELECT * from users;";
    $result_select_query = mysqli_query($con,$select_query);
 
    while($row = mysqli_fetch_array($result_select_query)){
        if($row['Email']==$email){
    if($row['Password']==$password){
        $_SESSION['email']=$email;
        $_SESSION['id']=$row['Id'];
        header('location: home.php');
        exit();
    }
    else
        {
        header('location: index.php');
        $_SESSION['login_message']="Entered wrong email/password...";
    }
    
    }else{
         header('location: index.php');
        $_SESSION['login_message']="User Not Registered!!";
    }
    }
    ?>