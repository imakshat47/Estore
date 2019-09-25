<?php session_start();
if (isset($_SESSION['email'])) {
    header('location: home.php');
}?>
<!DOCTYPE html>
        <html><head>
    <?php include 'include/css.php';
   
    ?>
    </head>
    <body><header><?php include 'include/header.php';?></header>
<center>
<h2>Enter Details:</h2>
<div class="col-md-4 col-md-offset-4">
<form action="reset_pass.php" method="post" >
      <div class="form-group">
                            <input type="text" class="form-control" name="Name" placeholder="Name" required> 
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="Email" placeholder="Email Address" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Enter a valid email address">
                        </div> <br>
                       
            <button type="reset" value="Reset" class="btn btn-primary">Reset</button>
             <button type="submit"  value="Send" class="btn btn-primary">Submit</button>
</form></div>
</center>
</body>
</html>
