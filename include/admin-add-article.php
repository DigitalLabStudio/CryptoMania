<?php
require "db.php";
session_start();
if (isset($_SESSION['logged_user']) and isset($_POST['savearticle'])) {
    R::exec("UPDATE articles SET `text`='" . $_POST["article"] . "', `article_category`='" . $_POST["category"] . "' , `title`='" . $_POST["title"] . "' WHERE id = " . $_GET["article_id"]);
    header("Location: " . $_SERVER['HTTP_REFERER']);
}


?>