<?php
session_start();
require_once 'Dao.php';
$dao = new Dao();

  $email = $_POST["email"];
  $salt = "youhavebeensalted123$";  
  $password = $_POST["password"] . $salt;
  
  $_SESSION['login-presets'] = array($_POST);
  $messages = array();
  $valid = true;
  if (empty($email)) {
    $messages[] = "Please enter in an E-mail";
    $valid = false;
  }
  if (empty($password)) {
    $messages[] = "Please enter in your password";
    $valid = false;
  }
  if (!$valid) {
    $_SESSION['messages'] = $messages;
    header("Location: login-page.php");
    exit;
  }
    $results = $dao->login();

  if(count($results) > 0 && $dao->verifyPassword($email, $password)){
    $_SESSION['user_id'] = $results['id'];
    header("Location: home.php");
  }else if(empty($results)){
    $messages[] = "Email Not Found";
    $_SESSION['messages'] = $messages;
    header("Location: login-page.php");
  }else if(count($results) > 0 &&  !$dao->verifyPassword($email, $password)){
    $messages[] = "Password was Incorrect";
    $_SESSION['messages'] = $messages;
    header("Location: login-page.php");
  }else{
    $messages[] = "Something Went Wrong";
    $_SESSION['messages'] = $messages;
    header("Location: login-page.php");
  }
exit;
