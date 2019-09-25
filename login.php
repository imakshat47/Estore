<?php require 'include/css.php'; 
     ?>
<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          
        </button>
          <h3 class="modal-title" id="loginModel">Login</h3>
      </div>
      <div class="modal-body">
          <div class="alert alert-info">
               <?php echo $_SESSION['login_message']; ?> 
        </div>
          <form action="log_in.php" method="POST">
              <div class="form-group">
                  <input type="email" class="form-control" name="Email" placeholder="Email Address" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Enter a valid email address"></div>
                   <div class="form-group">
                  <input type="password" class="form-control" name="Password" placeholder="Password" required  pattern=".{6,}" title="Must contain at least 6 or more characters">
              </div>   
              
          
          
      </div>
      <div class="modal-footer">
           <a href="forgot_pass.php" style="padding-right: 5px;"><strong><u>Forgot Password!!</u></strong></a>
          
          <a href="log_in.php"><button type="submit"  class="btn btn-md btn-primary"> Login</button></a>
          </form>
      </div>
    </div>
  </div>
</div>