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

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-8334951718893703",
          enable_page_level_ads: true
     });
</script>
    
</head>
<body class="single-page">
<?php
require "../include/db.php";
require "../header.php";
?>
<section class="container">
    <div class="row">
        <?php
        $per_page = 5;
        $page = 1;
        $category_array = ['blockchain_i_cryptovaluta' => 1,
            'mining' => 2,
            'trading' => 3,
            'ico' => 4,
            'analitika_i_prognozy' => 5];
        /** @var number $category */
        $category = $category_array[$_GET['category']];
        if (!isset($category)) {
            $category = 1;
        }
        if (isset($_GET['page'])) {
            $page = (int)$_GET['page'];
        }
        $total_count_q = R::getAll("SELECT COUNT(article_category) FROM `articles` WHERE `article_category`=" . $category . " AND checked = true");
        $total_count = $total_count_q[0]['COUNT(article_category)'];
        $total_pages = ceil($total_count / $per_page);
        if ($page <= 1 || $page > $total_pages) {
            $page = 1;
        }
        $offset = (($per_page * $page) - $per_page);
        $articles = R::getAll("SELECT * FROM `articles` WHERE article_category=" . $category . " AND checked = true ORDER BY id DESC LIMIT " . $offset . ',' . $per_page);
        foreach ($articles

                 as $article) {
            ?>
            <div class="col-md-12">
                <a href="article.php?id=<?php echo $article['id']; ?>">
                    <article class="article">
                        <div class="article-wrapper">
                            <div class="article-data">
                                <?php echo $article['date']; ?>
                            </div>
                            <h2 class="article-title text-center">
                                <?php echo $article['title']; ?>
                            </h2>
                            <div class="article-content">
                                <?php echo substr($article['text'], 0, 555) . "..."; ?>
                            </div>
                            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:block; text-align:center;"
     data-ad-layout="in-article"
     data-ad-format="fluid"
     data-ad-client="ca-pub-8334951718893703"
     data-ad-slot="8107576962"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
                        </div>
                    </article>
                </a>
            </div>
            <?php
        }
        echo '<div class="col-md-12"><nav><ul class="pagination">';
        if ($page > 1) {
            echo '<li class="page-item"><a class="page-link" href="articles.php?category_id=' . $category . '&page=' . ($page - 1) . '">&laquo Прошлая страница</a></li>';
        }
        if ($page < $total_pages) {
            echo '<li class="page-item"><a class="page-link" href="articles.php?category_id=' . $category . '&page=' . ($page + 1) . '">Cледующая страница &raquo</a></li>';
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
