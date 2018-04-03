<?php
session_start();
require_once 'Dao.php';
$dao = new Dao();

if(isset($_SESSION['user_id'])){
  header("Location: progress-tracker-defense.php");
}
?>
<html>
  <head>
    <title>Progress Tracker</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" type="text/css" href="navigation.css" />
    <link rel="stylesheet" type="text/css" href="progress.css" />
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
  <?php $page = 'progress-tracker-home.php'; include_once 'navigation.php';?>
    <div class="content">
      <h1>Welcome to the Progress Tracker!</h1>
          <hr />
      <div class="home_section">
        <h3>How does the Progression Tracker Work?</h3>
      </div>
      <div class="home_section">
        <h3>Please Sign-In or Sign-Up!</h3>
      </div>
    </div>
<?php include_once 'footer.php'; ?>
  </body>
</html>