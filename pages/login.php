<?php
// Free html5 templates : https://www.zerotheme.com

$text = "<span style='color:red; font-size: 35px; line-height: 40px; margin: 10px;'>Error! Please try again.</span>";

if (isset($_POST['submitcontact'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $subject = $_POST['subject'];

    $to = "youremail@gmail.com";
    $subject = "Zerotheme - Testing Contact Form";
    $message = " Name: " . $name . "\r\n Email: " . $email . "\r\n Message:\r\n" . $message;

    $from = "Zerotheme dot com";
    $headers = "From:" . $from . "\r\n";
    $headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n";

    if (@mail($to, $subject, $message, $headers)) {
        $text = "<span style='color:blue; font-size: 35px; line-height: 40px; margin: 10px;'>Your Message was sent successfully !</span>";
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css"
          integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap-css.css">
    <title>Криптомания</title>
</head>
<body class="single-page">
    <?php echo require "../header.php"; ?>
    <section class="container mb-5 mt-5">
        <h2>Авторизация</h2>
        <form method="post" action="../include/login.php">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <input type="text" class="form-control" required="required" name="login" placeholder="Enter login">
                </div>
                <div class="form-group col-md-4">
                    <input type="password" class="form-control" name="password" required="required"
                           placeholder="Enter password">
                </div>
            </div>
            <input type="submit" class="btn btn-gold" name="submitlogin" value="Отправить">
        </form>
    </section>
    <div class="login-footer">
        <?php require '../footer.php'; ?>

    </div>
</body>
</html>
