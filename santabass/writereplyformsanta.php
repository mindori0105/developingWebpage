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
				<?php
					require_once('navsanta.php');
				?>
				<!-- Main -->
					<div id="main">

						<!-- Post -->
							<section class="post">
								<header class="row">
									<h2>Write reply</h2>
								</header>


								<!-- Table -->
								<?php
										if(!isset($_SESSION['id'])){
											exit('<a href="indexsanta.php">로그인 상태가 아닙니다. 홈으로</a></body></html>');
										}
								?>

									<form method="post" enctype="multipart/form-data" action="writereviewsanta.php">

										Review reply:<br/>
										<textarea name="memo" cols="1" rows="5" placeholder="Write reply here."></textarea>
										</br>

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
