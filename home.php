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
    <div class="home_section left">
      <h3>What is Clash of Clans Empire?</h3>
      <p>Clash Of Clans Empire is a small website tool that gives you a little extra information about your account. This tool 
        allows you to utilize the progression tracker to give you the total amount of gold, elixir, and time requirements left
        for your upgrades. This way you can see how much more of your life you have to put into this game to max out your base!</p>
    </div>

    <div class="home_section right">
      <h3>Progress Tracker</h3>
      <p>The progression tracker is currently under development. Currently you are able to get the totals for all of your defensive
        buildings! Signin or make an account to gain access to this amazing tool to see how much work you have left Chief!</p>
    </div>
    <div class"clear"></div>
    <div class="home_section">
      <h3>More Features Coming!</h3>
      <p>In the future there will be capabilities for looking at all of your elixir upgrades and research as well. 
        Maybe even the Builder Base! Until then, you better get started on your upgrades now Chief!</p>
    </div>
  </div>
  <?php include_once 'footer.php'; ?>
</body>
</html>
