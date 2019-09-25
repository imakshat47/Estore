<?php
    require 'include/common.php';
   
    $email =   mysqli_real_escape_string($con,$_POST['Email']);
    $name = mysqli_real_escape_string($con,$_POST['Name']);
    $contact = mysqli_real_escape_string($con,$_POST['Contact']);
    $password = mysqli_real_escape_string($con,$_POST['Password']);
    $city = mysqli_real_escape_string($con,$_POST['City']);
    $address = mysqli_real_escape_string($con,$_POST['Address']);
    $password = md5($password);
   // echo $password;
    $check_query ="SELECT email from users;";
    $check_query_result = mysqli_query($con,$check_query);
    if (!$check_query_result) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}
    while ($row=mysqli_fetch_array($check_query_result)){
        if ($row['email']==$email){
            header('location: signup.php');
            $_SESSION['message']="User Already Exist!!";
           // echo 'User Already Exist!!';
            exit();
        }
    }
   
            $query_select = "Insert into users (Name,Email,Password,Contact,City,Address) values('$name','$email','$password','$contact','$city','$address');";
            
            $result_select_query = mysqli_query($con,$query_select);
            
            //echo $email.$address.$name.$password.$city.$contact;
              
          /*  $select_query = "SELECT * from users;";
                $select_query_result = mysqli_query($con, $select_query);
                while ($row = mysqli_fetch_array($select_query_result)) {
                    echo $row[1];
                    echo $row[2];
                }  */                   
            $_SESSION['message']="New User Registered!"; 
            header('location: signup.php');                
    ?>