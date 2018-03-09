<?php

require "db.php";
session_start();
if( isset($_SESSION['logged_user'])) {

if($_GET['type'] == 'editor') {
   header("Location: ../pages/admin-editor.php?article_id=" . $_GET["article_id"] );
}

if ($_GET['type'] == 'delete') {
  R::exec( "DELETE FROM articles WHERE id=" . $_GET["article_id"] );
  header("Location: " . $_SERVER['HTTP_REFERER']);
}

if($_GET['type'] == 'add') {
  R::exec( "UPDATE articles SET checked = true WHERE id = " . $_GET["article_id"] );
  header("Location: " . $_SERVER['HTTP_REFERER']);
}


} else {
  header("Location: ../index.php");
}
 ?>
