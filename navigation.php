<?php
require_once 'Dao.php';
$dao = new Dao();

    if(isset($_SESSION['user_id'])){
    $results = $dao->getUser();
    $user = NULL;
    if(count($results) > 0){
      $user = $results;
    }}
?>

<div class="nav-bar-containter clear">
      <input type="checkbox" id="nav-bar-toggle">
      <header class="clear">
        <div id="menu-btn">
          <label for="nav-bar-toggle" class="toggle-btn"><i class="fa fa-bars"></i> 
            <?php 
            if($page == 'home.php'){
                echo 'Menu';
            } else if($page == 'login-page.php'){
                echo 'Login';
            } else if($page == 'settings.php'){
                echo 'Settings';
            } else if($page == 'progress-tracker-home.php'){
                echo 'Progress Tracker';
            }else if($page == 'profile.php'){
                echo 'Profile';
            } else if($page == 'privacy.php'){
                echo 'Privacy';
            } else if($page == 'register.php'){
                echo 'Register';
            }
            ?>
          </label>
        </div>

        <div class="login-btn-area">
          <?php if(!empty($user)): 
            $uname = substr($user['email'], 0, strpos($user['email'], '@'));
            ?>
                                            <!--Prevents from XXS where username is displayed -->
            <a href="#">Welcome, <?=htmlspecialchars($uname);?> !</a>
            <a class="logout-button" href="logout.php">Logout <i class="fa fa-sign-in" aria-hidden="true"></i></a>
          <?php else: ?>
            <a class="login-btn" href="login-page.php">Login <i class="fa fa-sign-in" aria-hidden="true"></i></a>
          <?php endif; ?>    
            
        </div>
      </header>

      <nav id="navigation" class="nav-bar">
        <!-- COMING IN LATER UPDATE <a class="nav-bar-title"></i>Title<span class="nav-bar-exit"><label for="nav-bar-toggle"<i class="fa fa-times-circle" aria-hidden="true"></i></label></span></a>-->

        <a class="<?php if($page == 'home.php'){echo 'hover active';}?>" href="home.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
          
        <?php if(!empty($user)):?>
         <a class="<?php if($page == 'login-page.php'){echo 'hover active';}?>" href="logout.php"><i class="fa fa-sign-in" aria-hidden="true"></i>Logout</a>
        <?php else: ?>
        <a class="<?php if($page == 'login-page.php'){echo 'hover active';}?>" href="login-page.php"><i class="fa fa-sign-in" aria-hidden="true"></i>Login</a>
        <?php endif; ?>
       
        <!-- COMING IN LATER UPDATE <a class="<?php if($page == 'settings.php'){echo 'hover active';}?>" href="settings.php"><i class="fa fa-cog" aria-hidden="true"></i>Settings</a>
        -->
        <a class="<?php if($page == 'progress-tracker-home.php'){echo 'hover active';}?>" href="progress-tracker-home.php"><i class="fa fa-tasks" aria-hidden="true"></i>Progress Tracker</a>
          
        <!-- COMING IN LATER UPDATE <a class="<?php if($page == 'profile.php'){echo 'hover active';}?>" href="profile.php"><i class="fa fa-user-circle-o" aria-hidden="true"></i>Profile</a>
          -->
        <a class="<?php if($page == 'privacy.php'){echo 'hover active';}?>" href="privacy.php"><i class="fa fa-user-secret" aria-hidden="true"></i>Privacy</a>
      </nav>
</div>