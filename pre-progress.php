<?php 
session_start();
require_once 'Dao.php';
$dao = new Dao();
?>
<html>
  <head>
    <title>Progress</title>
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
  <?php 
  include_once 'banner.php';
  $page = 'progress-tracker-home.php'; include_once 'navigation.php';?>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="script.js"></script>
    <div class="content">
      <h1>Welcome to the Progress Tracker!</h1>
          <hr />
      <div class="home_section">
        <h3>How does the Progression Tracker Work?</h3>
        <p>It is very simple! All you have to do is check what level your defenses are in the 
          game, then slide the slider of each defense you have to the appropriate level. 
        </p>
        <p>If you do not have as many defenses that are up there, just put zero for the level, 
          that indicates that you have not built it yet.
        </p>
        <p>Try It Out!!</p>
        <input id="try1" name="try1" type="range" min="0" max="15" step="1" onchange="trySlider2()" value="0">
        <output id="tryslide2"></output>
      </div>

      <!-- Shows this if you are logged in and have already processed your results-->
      <?php if(isset($_SESSION['overall-total-cost'])){?>
            <div class="home_section_2">
                <h3>Your results have been found, please go to the overall page!</h3>
                <form action="progress-tracker-overall.php">
                    <input type="submit" value="Get Results!">
                </form>
            </div>
      <?php }else{ ?>

      <!-- Shows this if you have not yet processed results-->
      <div class="home_section">
          <h3>Think you are ready chief?!</h3>
          <form action="progress-tracker-defense.php">
              <input type="submit" value="Get Started!">
          </form>
      </div> <?php } ?>
    </div>
  <?php include_once 'footer.php'; ?>
</body>
</html>
