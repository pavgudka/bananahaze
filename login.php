<?php


?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login to the ultimate MOB PORTAL </title>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  
  <link rel='stylesheet' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>

      <link rel="stylesheet" href="./style.css">

  
</head>

<body>

  <?php
  require('db.php');
  session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
    
    $username = stripslashes($_REQUEST['username']); // removes backslashes
    $username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con,$password);
    
  //Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
    $result = mysqli_query($con,$query) or die(mysql_error());
    $rows = mysqli_num_rows($result);
        if($rows==1){
      $_SESSION['username'] = $username;
      header("Location: home.html"); // Redirect user to index.php
            }else{
        echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='index.php'>Login</a></div>";
        }
    }else{
?>

<div class="mask">
  <div class="modal">
    <div class="circle" style="background: url(&quot;https://s3-us-west-2.amazonaws.com/s.cdpn.io/9589/profile/profile-512_1.jpg&quot;);"></div>
    <div class="login">
      <h1>Login</h1>
      <form method="post">
        <input type="text" name="username" placeholder="username" required="required"/>
        <input type="password" name="password" placeholder="password" required="required"/>
        <button class="btn btn-primary btn-block btn-large" type="submit">Let me in.</button>
      </form>
      
    </div>
  </div>
</div>



<?php } ?>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.15.0/TweenMax.min.js'></script>

  

    <script  src="./script.js"></script>




</body>

</html>
