<?php
session_start();

?>

<html>
  <head>
    <title>Privacy</title>
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
    
  <?php include_once 'banner.php';?>
  <?php $page = 'privacy.php'; include_once 'navigation.php';?>
    <div class="content">
      <h1>Privacy & Rights</h1>
          <hr />
    <ul class = "privacy">
      <li>Clash of Clans logos and information are all trademarks of Supercell.</li>
      <li>Images of characters, bases, etc. are all property of Supercell.</li>
      <li>The content displayed on this website is not affiliated with, endorsed, sponsored, or approved by Supercell.</li>
      <li>Supercell is not reliable or responsible for any information displayed.</li>
      <li>For more information, please see Supercell's Fan Content Policy: <a href="http://www.supercell.com/fan-content-policy">www.supercell.com/fan-content-policy.</a> </li>
      <li>Clash of Clans Empire Logo was created by Rachel Wilker.</li>
    </ul>
</div>
<?php include_once 'footer.php'; ?>
  </body>
</html>
