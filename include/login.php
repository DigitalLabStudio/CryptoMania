<?php
require 'db.php';
session_start();
$data = $_POST;
session_start();
if( isset($data) ) {
  $errors = array();
  $user = R::findOne('users','login=?',array($data['login']));

  if( $user ) {
    if( password_verify($data['password'],$user->password)) {
      $_SESSION['logged_user'] = $user;
       header('Location: ../pages/admin-moderator.php');
    } else {
      $errors[] = 'Hеверно введен пароль!';
    }
  } else {
      $errors[] = 'Пользователь с таким логим не найден!';
    }
    if( !empty($errors)) {
      echo array_shift($errors);
    }
}
