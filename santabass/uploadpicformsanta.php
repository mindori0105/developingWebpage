<?php
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
		<title>Review - SANTABASS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<a href="indexsanta.php" class="logo">SANTABASS</a>
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul class="links">
							<li><a href="indexsanta.php">This is Santabass</a></li>
							<li><a href="signupsanta.html">Sign_up</a></li>
							<li><a href="loginsanta.html">Login</a></li>
							<li class="active"><a href="reviewsanta.html">Review</a></li>
							<li><a href="photossanta.html">Photos</a></li>
							<li><a href="eventsanta.html">Event_Information</a></li>
							<li><a href="freesanta.html">Free_Topic</a></li>
						</ul>
						<ul class="icons">
							<li><a href="https://www.facebook.com/choiminseoky" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="https://www.instagram.com/mindorii/" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="https://github.com/mindori0105" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">

						<!-- Post -->
							<section class="post">
								<header class="row">
									<h2>Upload Picture</h2>
								</header>


								<!-- Table -->
								<?php
										if(!isset($_SESSION['id'])){
											exit('<a href="indexsanta.php">로그인 상태가 아닙니다. 홈으로</a></body></html>');
										}
								?>

									<form method="post" enctype="multipart/form-data" action="uploadpicsanta.php">
										Upload Image : <br/>
										<input type="file" name="picture"/>
										<br/>
										<br/>
										<input type="submit" value="Submit"/>
									</form>
									<hr />

							</section>

					</div>

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
