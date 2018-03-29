<?php
session_start();
?>

<html>
  <head>
    <title>Profile</title>
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
  <?php $page = 'profile.php'; include_once 'navigation.php';?>
    <div class="content">
      <h1>Welcome to your very own Profile</h1>
          <hr />
      <div class="row">   
            <div class="column"><h3>What will this show?</h3>
              <p>This profile page will show many things hopefully. In particular, Town Hall Level, Xp amount, research levels, wins, trophy count etc.</p>
            </div>
            <div class="column">
              <h3>Priority level?</h3>
              <p>This is higher priority that the progress tracker so this will be done most likely much sooner.</p>
            </div>
      </div>
      <div class="row">
            <div class="column">
              <h3>Might be able to change certain settings?</h3>
              <p>I have lots of ideas for this page to keep your content up to date, so we will see how this works out.</p>
            </div>
    </div>
</div>
<?php include_once 'footer.php'; ?>
  </body>
</html>
