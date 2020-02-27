<?php
include ('../templates/header.php');


?>
<?php 
    include('../config/dbconn.php');
    include('getaccounts.php');

   
// prepare sql and bind parameters
?>
    <form action="executeaccount.php" method="POST">
    <div class="input-field col s12">
    <input type="email" name="user_mail" >
    <label for="email">Email</label>
    <div class="input-field col s12">
    <input type="password" name="user_password">
    <label for="password">Password</label>
    <input type="submit" name="submit" value="register" a class="waves-effect waves-light btn"></a>
    </div>
    
    
    </form>
  </div>
  <a href= "account/login.php" title="Login" class="ngl btn-floating btn-large waves-effect #8d6e63 brown lighten-1"><i class="material-icons">input</i></a>
</div>


      
    </form>
  </div> 
<?
include ('../templates/footer.php');
?>
