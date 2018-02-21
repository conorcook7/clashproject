<html>
  <head>
    <title>Login/Sign-up</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" type="text/css" href="navigation.css" />
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
    
<div class="banner">
  <div class="logo img">
    <a href=""><img src="clash.svg" width="400" height="340"/></a>
  </div>
  <div class="name">
     <h1>Conor Cook</h1>
     <h3>&ldquo;Web Dev&rdquo; Novice</h3>
     <h3>Homework #4</h3>
  </div>
</div>
<div class="nav-bar-containter clear">
      <input type="checkbox" id="nav-bar-toggle">
      <header class="clear">
        <div id="menu-btn">
          <label for="nav-bar-toggle" class="toggle-btn"><i class="fa fa-bars"></i> Sign In</label>
        </div>

        <div class="login-btn-area"><a href="login-page.php">Login   <i class="fa fa-sign-in" aria-hidden="true"></i></a>
        </div>
      </header>

      <nav id="navigation" class="nav-bar">
        <a class="nav-bar-title"></i>Title<span class="nav-bar-exit"><label for="nav-bar-toggle"<i class="fa fa-times-circle" aria-hidden="true"></i></label></span></a>

        <a href="home.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
          
        <a class="hover active" href="login-page.php"><i class="fa fa-sign-in" aria-hidden="true"></i>Login</a>
          
        <a href="settings.php"><i class="fa fa-cog" aria-hidden="true"></i>Settings</a>
          
        <a href="progress-tracker-home.php"><i class="fa fa-tasks" aria-hidden="true"></i>Progress Tracker</a>
          
        <a href="profile.php"><i class="fa fa-user-circle-o" aria-hidden="true"></i>Profile</a>
        
        <a  href="privacy.php"><i class="fa fa-user-secret" aria-hidden="true"></i>Privacy</a>
      </nav>
</div>
    <div class="content">
      <h1>Welcome to the login page!</h1>
          <hr />
      <div class="row"> 	
            <div class="column"><h3>Do you already have an account?</h3>
              <p>Well currently there are no accounts available so good luck signing in.</p>
            </div>
            <div class="column">
              <h3>Need to make an account?</h3>
              <p>This functionality to make an account is coming soon.</p>
            </div>
      <div class="row">
            <div class="column">
              <h3>Forgot Password?</h3>
              <p>That sucks. I can't help you yet, maybe in a week</p>
              </div>
            </div>
        </div>
    </div>
    <div id="footer">
        <li class="first">&copy;2018  Conor Cook</li>
        <li><a href="">Boise State University</a></li>
        <li><a href="">College of Engineering</a></li>
        <li><a href="">Computer Science Department</a></li>
    </div>
  </body>
</html>
