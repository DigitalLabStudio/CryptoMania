<?php
	require "include/db.php";

 ?>

	<!DOCTYPE html>
	<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
	<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
	<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
	<!--[if (gte IE 9)|!(IE)]><!-->
	<html lang="en">
	<!--<![endif]-->

	<head>

		<!-- Basic Page Needs
  ================================================== -->
		<meta charset="utf-8">
		<title>Криптомания</title>

		<!-- Mobile Specific Metas
	================================================== -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<!-- CSS
	================================================== -->
		<link rel="stylesheet" href="css/zerogrid.css">
		<link rel="stylesheet" href="css/style.css">

		<!-- Custom Fonts -->
		<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


		<link rel="stylesheet" href="css/menu.css">
		<script src="js/jquery1111.min.js" type="text/javascript"></script>
		<script src="js/script.js"></script>

		<!-- Owl Carousel Assets -->
		<link href="owl-carousel/owl.carousel.css" rel="stylesheet">

		<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/Items/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
		<!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->

	</head>

	<body class="home-page">
		<div class="wrap-body">
			<?php require "header.php" ?>
			<!--////////////////////////////////////Container-->
			<section class="pt-35 content-box box-style-1">
				<div class="zerogrid width-full">
					<div>
						<!--Start Box-->

						<div class="box-header">
							<h2>Форум</h2>
						</div>
						<div class="box-content">
							<div class="row">
								<div class="col-full">
									<iframe src="punbb/index.php" width="100%" height="600px" name="punbb"></iframe>
								</div>
								</div>
							<!-- <div class="row">
								< ?php
								$comments = R::find('comments','ORDER BY id DESC LIMIT 2');
							 ?>

									< ?php
							 foreach ($comments as $comment) {
									?>


									<div class="col-1-2">
										<div class="wrap-col">
											<p>< ?php echo $comment['text']; ?></p>
												<hr class="hr">
												<div class="flex-row  сomment-info">
													<p class="author mr-15">
															<i class="fa fa-user-circle fa-2x" aria-hidden="true" ></i> <span>< ?php echo $comment['author']; ?></span>
													</p>
													<p class="date mr-15">
															 <i class="fa fa-clock-o fa-2x" aria-hidden="true"></i> <span>< ?php echo $comment['date']; ?></span>
													</p>
													<p class="date mr-15">
															 <a href="article.php?id=< ?php echo $comment['article_id']; ?>"><i class="fa fa-hand-o-right fa-2x" aria-hidden="true"></i> <span>Перейти к статье</span>	</a>
													</p>
												</div>
										</div>
									</div>

										< ?php
								}
								?>
							 </div>
							<div class="row">
								<blockquote>
									<p>Здесь будет комментарий недели или месяца что то в этом роде или что то другое .</p>
								</blockquote>
							</div> -->
						</div>
					</div>
				</div>
			</section>
			<section id="container">
				<div class="wrap-container">
					<!-----------------content-box-1-------------------->
					<section class="content-box box-1">
							<div class="wrap-box">
								<!--Start Box-->
								<div class="box-header">
									<h2>Новые статьи</h2>
								</div>
								<div class="box-content">
									<div class="col-full news-frame flex">
										<iframe src="https://feed.mikle.com/widget/v2/57805/" scrolling="no" width="100%" class="fw-iframe"  frameborder="0">
										</iframe>
									</div>
								</div>
							</div>
					</section>
					<!------------content-box-2-------------------->
					<section class="schedule content-box box-style-1 box-2">
						<div class="zerogrid">
							<div class="wrap-box">
								<div class="box-header">
									<h2>Графики цен криптовалют</h1>
								</div>
								<div class="box-content">
									<div class="row">
										<div class="col-1-1">
												<script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
												<script type="text/javascript">
													new TradingView.widget({
														"width":"100%",
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
<!--Start Box-->
								<!-- <div class="flex-row">
									< ?php
									$articles = R::find('articles','ORDER BY id DESC LIMIT 6');
								 ?>

										< ?php
								 foreach($articles as $article) {
										?>
										<div class="col-1-3">
												<div class="wrap-col">
													<a href='article.php?id=< ?php echo $article['id']; ?>'>
														<div class="post-thumbnail-wrap">
															<div class="portfolio-box">
																<img class="articles-img" src="images/< ?php echo $article['image']  ?>" alt="">
																<div class="portfolio-box-second">
																	<img class="articles-img" src="images/< ?php echo $article['image2']  ?>" alt="">
																</div>
															</div>
														</div>
														<div class="entry-header ">
															<h3 class="entry-title">< ?php  echo $article['title'] ?></h3>
															<div class="l-tags">
																< ?php echo mb_substr(strip_tags($article['text']),0,70,'utf-8') . "..."?>
															</div>
														</div>
													</a>
												</div>
											</div>

							< ?php
									}
								  ?>
								</div> -->
							</div>
						</div>
					</section>
					<section class="content-box box-3">
						<div class="zerogrid">
							<div class="wrap-box">
								<div class="box-header">
									<h2>Текущий курс криптовалют(к USD)</h2>
								</div>
								<div class="box-content">
									<div class="row">
										<div class="col-full widget">
													<img style="position: relative; z-index: 9999;" src = "media/bitcoin-ethereum-litecoin.jpg" alt = "" class = "img-responsive" width = "100%"/>
													<iframe style="margin-top: -45px; width: 100%; border: 0; overflow: hidden; background-color: transparent; height: 399px" scrolling= "no" src="https://fortrader.org/informers/getInformer?st=2&cat=15&title=undefined&mult=1&showGetBtn=0&w=0&colors=titleTextColor%3D454545%2CtitleBackgroundColor%3Df6f6f6%2CthTextColor%3Dffffff%2CthBackgroundColor%3D36354a%2CsymbolTextColor%3D454545%2CtableTextColor%3D454545%2CborderTdColor%3De8e8e8%2CtableBorderColor%3Df6f6f6%2CprofitTextColor%3D89bb50%2CprofitBackgroundColor%3Deaf7e1%2ClossTextColor%3Dff1616%2ClossBackgroundColor%3Df6e1e1%2CoddBackgroundTrColor%3Df6f6f6%2CevenBackgroundTrColor%3Df6f6f6%2CdataTextColor%3D787878%2CdataBackgroundColor%3Df6f6f6%2CinformerLinkTextColor%3D5e5e5e%2CinformerLinkBackgroundColor%3Dfff&items=25457%2C133%2C25470%2C25467%2C25468%2C25469&columns=bid">
													</iframe>
												</div>
									</div>
							</div>
						</div>
					</section>
					<!-----------------content-box-4-------------------->
					<section class="content-box box-style-1 box-4">
						<div class="zerogrid" style="width: 100%">
							<div class="wrap-box">

								<div class="box-header">
									<h2>Лучшие статьи</h2>
								</div>
								<!--Start Box-->
								<div class="row">
									<article>
										<div class="col-1-2">
											<img src="images/slide1.jpg" alt="">
										</div>
										<div class="col-1-2">
											<div class="entry-content t-center">
												<h3>The title on the article</h3>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra convallis auctor. Sed accumsan libero quis mi commodo et suscipit enim lacinia. Morbi rutrum vulputate est sed faucibus.consectetur adipiscing elit. Aliquam viverra convallis
													auctor. Sed accumsan libero quis mi commodo et suscipit enim lacinia.</p>
												<a class="button" href="single.html">Read More</a>
											</div>
										</div>
									</article>
								</div>
								<div class="row">
									<article>
										<div class="col-1-2 f-right">
											<img src="images/slide2.jpg" alt="">
										</div>
										<div class="col-1-2">
											<div class="entry-content t-center">
												<h3>The title on the article</h3>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra convallis auctor. Sed accumsan libero quis mi commodo et suscipit enim lacinia. Morbi rutrum vulputate est sed faucibus.consectetur adipiscing elit. Aliquam viverra convallis
													auctor. Sed accumsan libero quis mi commodo et suscipit enim lacinia.</p>
												<a class="button" href="single.html">Read More</a>
											</div>
										</div>
									</article>
								</div>
								<div class="row">
									<article>
										<div class="col-1-2">
											<img src="images/slide3.jpg" alt="">
										</div>
										<div class="col-1-2">
											<div class="entry-content t-center">
												<h3>The title on the article</h3>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra convallis auctor. Sed accumsan libero quis mi commodo et suscipit enim lacinia. Morbi rutrum vulputate est sed faucibus.consectetur adipiscing elit. Aliquam viverra convallis
													auctor. Sed accumsan libero quis mi commodo et suscipit enim lacinia.</p>
												<a class="button" href="single.html">Read More</a>
											</div>
										</div>
									</article>
								</div>
								<div class="row">
									<iframe src="https://www.google.com/maps/d/embed?mid=1e-LiTALbUMsP3VLwVOxcj7qqgaw" width="100%" height="480"></iframe>
								</div>
							</div>
						</div>
					</section>
				</div>
			</section>
			<!--////////////////////////////////////Footer-->
      <?php require 'footer.php' ?>
			<!-- carousel -->
			<script src="owl-carousel/owl.carousel.js"></script>
			<script>
				$(document).ready(function() {
					$("#owl-slide").owlCarousel({
						autoPlay: 3000,
						items: 1,
						itemsDesktop: [1199, 1],
						itemsDesktopSmall: [979, 1],
						itemsTablet: [768, 1],
						itemsMobile: [479, 1],
						navigation: true,
						navigationText: ['<i class="fa fa-chevron-left fa-5x"></i>', '<i class="fa fa-chevron-right fa-5x"></i>'],
						pagination: false
					});
				});

				$(document).ready( function() {
					console.log($(".fw-iframe").html());
					});


			</script>
		</div>
	</body>

	</html>
