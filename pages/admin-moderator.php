<?php
require "../include/db.php";
if (null == session_start()) {
    session_start();
}
if (!isset($_SESSION['logged_user'])) {
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css"
          integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/bootstrap-css.css">
    <title>Криптомания</title>
</head>

<body class="single-page">
<?php require "../header.php" ?>
<section class="container">
    <div class="row">
        <?php
        $per_page = 5;
        $page = 1;
        if (isset($_GET['page'])) {
            $page = (int)$_GET['page'];
        }
        $total_count_q = R::getAll("SELECT COUNT(article_category) FROM `articles` WHERE `checked`= false");
        $total_count = $total_count_q[0]['COUNT(article_category)'];
        $total_pages = ceil($total_count / $per_page);
        if ($page <= 1 || $page > $total_pages) {
            $page = 1;
        }
        $offset = (($per_page * $page) - $per_page);
        $articles = R::getAll("SELECT * FROM `articles` WHERE checked= false ORDER BY id DESC LIMIT  " . $offset . ',' . $per_page);
        foreach ($articles as $article) {
            ?>
            <div class="col-md-12">
                <article class="article">
                    <img width="300" height="auto" src="../article-img/<?php echo $article['img']; ?>" alt="">
                    <div class="article-wrapper">
                        <div class="article-data">
                            <?php echo $article['date']; ?>
                        </div>
                        <div class="article-category text-center">
                            <?php if ($article['article_category'] == '1') {
                                echo "Блокчейн и криптовалюты";
                            } ?>
                            <?php if ($article['article_category'] == '2') {
                                echo "Майнинг";
                            } ?>
                            <?php if ($article['article_category'] == '3') {
                                echo "Трейдинг";
                            } ?>
                            <?php if ($article['article_category'] == '4') {
                                echo "ICO";
                            } ?>
                            <?php if ($article['article_category'] == '5') {
                                echo "Аналитика и прогнозы";
                            } ?>
                        </div>
                        <h2 class="article-title text-center">
                            <?php echo $article['title']; ?>
                        </h2>
                        <div class="article-content">
                            <?php echo substr($article['text'], 0, 555) . "..."; ?>
                        </div>
                        <div class="admin-links mt-3 text-center">
                            <a class="btn btn-warning"
                               href="../include/checked.php?type=editor&article_id=<?php echo $article['id'] ?>&article_category=<?php echo $article['article_category'] ?>">Редактирвать
                                статью</a>
                            <a class="btn btn-info" href="article.php?id=<?php echo $article['id']; ?>">Открыть
                                полностью</a>
                            <a class="btn btn-success"
                               href="../include/checked.php?type=add&article_id=<?php echo $article['id'] ?>">Добавить
                                статью</a>
                            <a class="btn btn-danger"
                               href="../include/checked.php?type=delete&article_id=<?php echo $article['id'] ?>">Удалить
                                статью</a>
                        </div>
                    </div>
                </article>
            </div>
            <?php
        }
        echo '<div class="col-md-12"><nav><ul class="pagination">';
        if ($page > 1) {
            echo '<li class="page-item"><a class="page-link" href="admin-moderator.php?=page=' . ($page - 1) . '">&laquo Прошлая страница</a></li>';
        }
        if ($page < $total_pages) {
            echo '<li class="page-item"><a class="page-link" href="admin-moderator.php?page=' . ($page + 1) . '">Cледующая страница &raquo</a></li>';
        }
        echo '</ul></nav>'
        ?>
    </div>
</section>
<?php require '../footer.php' ?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>
</body>

</html>
