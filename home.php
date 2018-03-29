<?php 
session_start();
require_once 'Dao.php';
$dao = new Dao();
?>
<html>
  <head>
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" type="text/css" href="navigation.css" />
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
  $page = 'home.php'; include_once 'navigation.php';?>
  <div class="content">
    <h1>Welcome to Clash of Clans Empire!</h1>
      <hr />
    <div class="row"> 	
      <div class="column"><h3>What is this site?</h3>
        <p>This site is a tool to help highten your experience playing Clash of Clans. This tool will help you view your current progress and profile in a convenient fashion!</p>
        <p>There will be more coming!</p>
      </div>
      <div class="column">
        <h3>How does this site work?</h3>
        <p>In the future there will be a detailed set of instructions, please be patient!</p>
      </div>
    <div class="row">
      <div class="column">
       <h3>Have any recommendations?</h3>
       <p>If you have any specific requests or recommendations, please let me know!</p>
       <div id="contact">
         <p><a href="">conorcook@u.boisestate.edu</a></p>
         <div class="clear"></div>
       </div>
      </div>
      <div class="column">
       <h3>There is more on the horizon. Much more.</h3>
        <p>Like I said, before, please be patient as this website is a work in progress. It will be awesome.</p>
      </div>
     </div>
     <div class"clear"></div>
    </div>
  </div>
  <?php include_once 'footer.php'; ?>
</body>
</html>
