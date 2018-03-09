<?php
require "../include/db.php";
session_start();
$article = R::find('articles', 'id=' . $_GET['id']);
//R::exec("UPDATE articles SET `text`='" . $_POST["article"] . "', `article_category`='" . $_POST["category"] . "' , `title`='" . $_POST["title"] . "' WHERE id = " . $_GET["article_id"]);
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>

    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-8334951718893703",
            enable_page_level_ads: true
        });
    </script>


</head>

<body class="single-page">
<?php ;
require "../header.php";
?>
<section class="container">
    <div class="row">
        <div class="col-md-12">
            <article class="article">
                <div class="article-wrapper">
                    <div class="article-data">
                        <?php echo $article[$_GET['id'] . '']['date']; ?>
                    </div>
                    <h2 class="article-title text-center mb-3">
                        <?php echo $article[$_GET['id'] . '']['title']; ?>
                    </h2>
                    <div class="article-content">

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

                        <?php echo $article[$_GET['id'] . '']['text']; ?>
                    </div>
                </div>
            </article>
        </div>
        <div class="col-md-12 comments">
            <div id="disqus_thread"></div>
            <script>

                /**
                 *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                 *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                /*
                var disqus_config = function () {
                this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                };
                */
                (function () { // DON'T EDIT BELOW THIS LINE
                    var d = document, s = d.createElement('script');
                    s.src = 'https://cryptomania-com-ua.disqus.com/embed.js';
                    s.setAttribute('data-timestamp', +new Date());
                    (d.head || d.body).appendChild(s);
                })();
            </script>
            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered
                    by Disqus.</a></noscript>

        </div>
    </div>
    </div>
</section>
<script id="dsq-count-scr" src="//cryptomania-com-ua.disqus.com/count.js" async></script>
<?php require '../footer.php' ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>
</body>
</html>
