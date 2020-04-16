<?php


?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Registration to the ultimate MOB PORTAL </title>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  
  <link rel='stylesheet' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>

      <link rel="stylesheet" href="./style.css">

  
</head>

<body>

  <?php
  require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['username'])){
    $username = stripslashes($_REQUEST['username']); // removes backslashes
    $username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($con,$email);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con,$password);

    $trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date) VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='index.php'>Login</a></div>";
        }
    }else{
?>

<div class="mask">
  <div class="modal">
    <div class="circle" style="background: url(&quot;https://s3-us-west-2.amazonaws.com/s.cdpn.io/9589/profile/profile-512_1.jpg&quot;);"></div>
    <div class="registration">
      <h1>Registration</h1>
      <form method="post">
        <input type="text" name="username" placeholder="Username" required />
        <input type="email" name="email" placeholder="Email" required />
        <input type="password" name="password" placeholder="Password" required />


        
        <button class="btn btn-primary btn-block btn-large" type="submit">Register.</button>
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
