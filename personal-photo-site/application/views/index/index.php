<!DOCTYPE HTML>

<html>
	<head>
		<title>BUG 图片站</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-loading-0 is-loading-1 is-loading-2">

		<!-- Main -->
			<div id="main">

				<!-- Header -->
					<header id="header">
						<h1>BUG</h1>
						<p>目前测试专用</a></p>
						<ul class="icons">
							<!--<li><a href="#" class="icon fa-twitter"><span class="label"></span></a></li>-->
							<li><a href="/picshow" class="icon fa-instagram"><span class="label">照片墙</span></a></li>
							<!--<li><a href="#" class="icon fa-github"><span class="label"></span></a></li>
							<li><a href="#" class="icon fa-envelope-o"><span class="label"></span></a></li>-->
						</ul>
					</header>

				<!-- Thumbnail -->
					<section id="thumbnails">
					
					
					<?php for ( $i = 0; $i < count($bigimg); $i++):?>
						<article>
							<a class="thumbnail" href="uploads/<?php echo $bigimg[$i]['imgtype']; ?>/<?php echo $bigimg[$i]['filename']; ?>" data-position="left center" data-href="images/<?php echo $bigimg[$i]['imgtypemark']; ?>" >
							<img src="uploads/indexminimg/<?php echo $minimg[$i]['filename']; ?>" alt="/" ></a>
							<h2><?php echo $bigimg[$i]['imgtitle']; ?></h2>
							<p><?php echo $bigimg[$i]['imgintro']; ?></p>
						</article>
					<?php endfor; ?>			
					</section>
				<!-- Footer -->
					<footer id="footer">
						<ul class="copyright">
							<li>&copy; Powered.</li><li> by: <a href="">Sunday</a>.</li>
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
	</body>
</html>