<?php
require '../include/db.php';
$selected = $_GET["article_category"];
$article = R::find('articles', 'id=' . $_GET['article_id']);
$text = '';


session_start();
if (isset($_SESSION['logged_user']) and isset($_POST['savearticle'])) {
    R::exec("UPDATE articles SET `text`='" . $_POST["article"] . "', `article_category`='" . $_POST["category"] . "' , `title`='" . $_POST["title"] . "' WHERE id = " . $_GET["article_id"]);
    $text = "<span style='color:#212529; font-size: 35px; line-height: 40px; margin: 10px;'>Your Message was sent successfully !</span>";
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
    <link rel="stylesheet" href="/css/bootstrap-css.css">
    <title>Криптомания</title>
</head>
<body class="single-page">
<div class="wrap-body">
    <?php require "../header.php"; ?>
    <section class="container mb-3">
        <h2>Редактировать статью</h2>
        <form method="POST" action="admin-editor.php?article_id=<?php echo $_GET['article_id']; ?>">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <select size="1" required="required" name="category">
                        <option disabled>Выберите категорию</option>
                        <option <?php if ($selected == '1') {
                            echo("selected");
                        } ?> value="1">Блокчейн и криптовалюты
                        </option>
                        <option <?php if ($selected == '2') {
                            echo("selected");
                        } ?> value="2">Майнинг
                        </option>
                        <option <?php if ($selected == '3') {
                            echo("selected");
                        } ?> value="3">Трейдинг
                        </option>
                        <option <?php if ($selected == '4') {
                            echo("selected");
                        } ?> value="4">ICO
                        </option>
                        <option <?php if ($selected == '5') {
                            echo("selected");
                        } ?>value="5">Аналитика и прогнозы
                        </option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <input type="text" name="title" value="<?php echo $article[$_GET["article_id"]]["title"] ?>" class="form-control" placeholder="Enter title" required="required">
                </div>
                <div class="form-group col-md-12">
                    <?php echo $text; ?>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <textarea class="form-control" name="article" id="mess"
                              placeholder="Message"><?php echo $article[$_GET["article_id"]]["text"] ?></textarea>
                </div>
            </div>
            <input type="submit" class="btn btn-gold" name="savearticle" value="Сохранить">
        </form>
    </section>
    <?php require "../footer.php" ?>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="/js/ajex.js"></script>
<script>
    CKEDITOR.replace('mess', {
        uiColor: '#dddddd',
        toolbar: [
            ['Source', '-', 'Save', 'NewPage', 'Preview', '-', 'Templates'],
            ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Print'],
            ['Undo', 'Redo', '-', 'Find', 'Replace', '-', 'SelectAll', 'RemoveFormat'],
            ['Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField'],
            ['BidiLtr', 'BidiRtl'],
            ['Bold', 'Italic', 'Underline', 'Strike', '-', 'Subscript', 'Superscript'],
            ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', 'Blockquote', 'CreateDiv'],
            ['JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock'],
            ['Link', 'Unlink', 'Anchor'],
            ['Image', 'Flash', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 'PageBreak'],
            ['Styles', 'Format', 'Font', 'FontSize'],
            ['TextColor', 'BGColor'],
            ['Maximize', 'ShowBlocks', '-', 'About']

        ]
    });
</script>
</body>
</html>