<?php
session_start();
require_once 'Dao.php';
$dao = new Dao();

if(isset($_SESSION['user_id'])){
    header("Location: home.php");
}
    $confirm = '';
?>
<html>
  <head>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" type="text/css" href="navigation.css" />
    <link rel="stylesheet" type="text/css" href="login.css" />
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href='http://fonts.googleapis.com/css?family=Actor' rel='stylesheet' type='text/css'>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
  </head>
<body>
    <?php include_once 'banner.php';?>
    <?php $page = 'register.php'; include_once 'navigation.php';?>
    <div class="content">
      <div class="row"> 	
         <div id="sign-in" class="column">
         <h3>Create an Account</h3>
         <h5>Please Enter in your Information</h5>
            <?php
              if(isset($_SESSION['reg_con_message'])){
                $confirm = $_SESSION['reg_con_message'];
                echo "<div class='reg_con_message'>$confirm</div>";
              }
              if (isset($_SESSION['regmessages'])) {
                  foreach($_SESSION['regmessages'] as $regmessage) {
                    echo "<div class='regmessage'>$regmessage</div>";
                  }
              }else{?>
                <h5>Please Login Below</h5>
               <?php } 
                unset($_SESSION['regmessages']);
                unset($_SESSION['reg_con_message']);?>
           
           <form action="register-handler.php" method="POST">
             <input type="text" placeholder="Email" name="email">
             <input type="password" placeholder="Password" name="password">
             <input type="password" placeholder="Confirm Password" name="cpassword">
             <input type="submit">
           </form>
           <h4><a href="login-page.php">Already have an account? Login Here</a></h4>
         </div>
      </div>
    </div>
  <?php include_once 'footer.php'; ?>
</body>
</html>
