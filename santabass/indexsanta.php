<?php
	// session_start();
	// ob_start();
	require_once("sessionsanta.php");
?>
<!DOCTYPE HTML>
<!--
	Massively by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Santabass</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
	<?php
	require_once('dbconsanta.php');
	?>

		<!-- Wrapper -->
			<div id="wrapper" class="fade-in">

				<!-- Intro -->
					<div id="intro">
						<h1>This is<br />
						SANTABASS</h1>
						<p>A free website for people who loves mountain. For better experience,  for the best moment in your life.<br />
						Welcome and let's get ready for your next trip.</p>
						<ul class="actions">
							<li><a href="#header" class="button icon solo fa-arrow-down scrolly">Continue</a></li>
						</ul>
					</div>

				<!-- Header -->
					<header id="header">
						<a href="indexsanta.php" class="logo">Santabass</a>
					</header>

				<!-- Nav -->
					<?php
						require_once('navsanta.php');
					?>

				<!-- Main -->
					<div id="main">

						<!-- Featured Post -->
							<article class="post featured">
								<header class="major">
									<span class="date">June 2, 2019</span>
									<h2><a href="#">And this is a<br />
									Begining of a history</a></h2>
									<p>For our safe tracking and unforgettable memory.</p>
								</header>
								<h3>Visit My Github.</h3>
								<a href="https://github.com/mindori0105" class="image main"><img src="/santabass5/images/index.jpg" alt="mygithub" /></a>

							</article>


				<!-- Footer -->
					<?php
						require_once('footer.php');
					?>
				<!-- Copyright -->
					<div id="copyright">
						<ul><li>&copy; Minseok Choi</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li></ul>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
