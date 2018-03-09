<?php
  require '../include/db.php';

 $text = "<span style='color:red; font-size: 35px; line-height: 40px; magin: 10px;'>Error! Please try again.</span>";

 if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['category']) && isset($_POST['article']) )
 {
  $addArticle = R::dispense('articles');

  $addText->title = $_POST['title'];
  $addText->text  = $_POST['article'];
  $addText->login = $_POST['login'];
  $addText->mail  = $_POST['mail'];

  $id = R::store($addText);

  $text = "<span style='color:blue; font-size: 35px; line-height: 40px; margin: 10px;'>Your article was sent successfully !</span>";
 }
 ?>
