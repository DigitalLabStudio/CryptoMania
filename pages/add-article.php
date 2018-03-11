<?php
require '../include/db.php';
$text = "";
if (isset($_POST['submitarticle'])) {

    if (isset($_POST['login']) && isset($_FILES['imgfile']) && !empty($_FILES['imgfile']['name'])  && isset($_POST['email']) && strlen($_POST['category']) != 0 && isset($_POST['article']) && isset($_POST['title'])) {
         require '../include/add-img.php';
        $result = upload_file($_FILES['imgfile']);
        $img = 'null'; // В таблице поле должно иметь значение по умолчанию null

        if(isset($result['error'])){
            $error = $result['error'];
        }else{
            $img = '"'.$result['filename'].'"';
        }

        $addArticle = R::dispense('articles');
        $addArticle->title = $_POST['title'];
        $addArticle->text = $_POST['article'];
        $addArticle->login = $_POST['login'];
        $addArticle->article_category = $_POST['category'];
        $addArticle->mail = $_POST['email'];
        $addArticle->img = $result['filename'];

        $id = R::store($addArticle);

        $text = "<span style='color:green; font-size: 35px; line-height: 40px; margin: 10px;'>Your article was sent successfully !</span>";
    } else {
        $text = "<span style='color:red; font-size: 35px; line-height: 40px; magin: 10px;'>Error! Please try again.</span>";
    }

}
?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css"
          integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/bootstrap-css.css">
    <title>Криптомания</title>
</head>

<body class="single-page">
<div class="wrap-body">
    <?php require "../header.php"; ?>
    <section class="container mb-5 mt-5">
        <h2>Добавить статью</h2>
        <?php echo $text; ?>
        <form method="post" enctype="multipart/form-data" action="add-article.php">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="email" class="form-control" name="email"  required="required" placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                    <input type="login" name="login" class="form-control"  required="required" placeholder="Enter login">
                </div>
                <div class="form-group col-md-6">
                    <select size="1" required="required" class="form-control" name="category">
                        <option selected disabled>Выберите категорию</option>
                        <option value="1">Блокчейн и криптовалюты</option>
                        <option value="2">Майнинг</option>
                        <option value="3">Трейдинг</option>
                        <option value="4">ICO</option>
                        <option value="5">Аналитика и прогнозы</option>
                    </select>
                </div>
                <div class="form-group form-file col-md-6">
                    <input type="file" name="imgfile">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <input type="text" name="title" class="form-control" placeholder="Enter title" required="required">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <textarea autofocus  class="form-control" name="article" id="mess" placeholder="Message"></textarea>
                </div>
            </div>
            <input type="submit" class="btn btn-gold" name="submitarticle" value="Отправить">
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
