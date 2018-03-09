<?php
require "include/db.php";
$last_articles = R::find('articles', 'ORDER BY id DESC LIMIT 6');
$rating_articles = R::find('articles', 'ORDER BY views DESC LIMIT 6');
?>

<!doctype html>
<html lang="ru">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css"
          integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap-css.css">
    <title>Криптомания</title>

    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-8334951718893703",
            enable_page_level_ads: true
        });
    </script>

</head>

<body>
<?php require "header.php"; ?>
<main>
    <div class="news">
        <div class="container pt-3 pb-5 news-container">
            <div class="row">
                <div class="col-12 mb-4">
                    <h2 class="mb-3">Новые статьи</h2>
                    <div class="card-deck">
                        <?php
                        foreach ($last_articles as $article) {
                            ?>
                            <a class="card" href="pages/article.php?id=<?php echo $article['id'] ?>">
                                <img class="card-img-top" src="./article-img/<?php echo $article['img'] ?>"
                                     alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo mb_substr($article['title'], 0, 40, 'utf-8') ?></h5>
                                    <p class="card-text"><?php echo mb_substr(strip_tags($article['text']), 0, 94, 'utf-8') ?>
                                        ...</p>
                                </div>
                                <div class="card-footer">
                                    <small><?php echo $article['date'] ?></small>
                                </div>
                            </a>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="col-12">
                    <h2 class="mb-3">Популярные статьи</h2>
                    <div class="list-group">
                        <?php
                        foreach ($rating_articles as $article) {
                            ?>
                            <a href="pages/article.php?id=<?php echo $article['id'] ?>"
                               class="list-group-item list-group-item-action flex-column align-items-start ">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1"><?php echo mb_substr(strip_tags($article['title']), 0, 40, 'utf-8') ?></h5>
                                    <small><?php echo $article['date'] ?></small>
                                </div>
                                <p class="mb-1"><?php echo mb_substr(strip_tags($article['text']), 0, 94, 'utf-8') ?>
                                    ...</p>
                                <small>Автор: <?php echo $article['login'] ?></small>
                            </a>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid p-0 mb-3">
        <iframe src="forum/" width="100%" height="600px"></iframe>
    </div>
    <div class="container-fluid p-0 iframe-news">
        <!-- <iframe src="https://feed.mikle.com/widget/v2/57805/" height="600" width="100%">
      </iframe> -->
        <!-- start feedwind code -->
        <script type="text/javascript" src="https://feed.mikle.com/js/fw-loader.js" data-fw-param="57805/"></script>
        <!-- end feedwind code -->
    </div>
    <div class="graph pt-3 pb-5">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="title text-center">
                    <h2>Графики цен криптовалют</h2>
                </div>
                <div class="col-md-10">
                    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                    <script type="text/javascript">
                        new TradingView.widget({
                            "width": "100%",
                            "height": 610,
                            "symbol": "BITFINEX:BTCUSD",
                            "interval": "D",
                            "timezone": "Etc/UTC",
                            "theme": "Light",
                            "style": "1",
                            "locale": "ru",
                            "toolbar_bg": "rgba(0, 0, 0, 1)",
                            "enable_publishing": false,
                            "hide_side_toolbar": false,
                            "allow_symbol_change": true,
                            "hideideas": true,
                            "show_popup_button": true,
                            "popup_width": "",
                            "popup_height": "610"
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid p-0">
        <iframe src="https://www.google.com/maps/d/embed?mid=1e-LiTALbUMsP3VLwVOxcj7qqgaw" width="100%"
                height="480px"></iframe>
    </div>
</main>
<?php require "footer.php"; ?>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"
        integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4"
        crossorigin="anonymous"></script>
</body>

</html>
