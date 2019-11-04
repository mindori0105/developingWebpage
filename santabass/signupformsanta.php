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
		<title>Sign Up - SANTABASS</title>
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
									<h2>Sign Up Page<br />
									Welcome!</h2>
								</header>

								<!-- Text stuff -->
									<form method="post" enctype="multipart/form-data" action = "signupsanta.php">
										<h4>이메일 : </h4>
										<input type="text"  name="email" placeholder="Enter your e-mail"/>
										<br/>
										<h4>비밀번호 : </h4>
										<input type="password" name="pass" placeholder="Enter your password"/>
										</br>
										<h4>비밀번호 확인 : </h4>
										<input type ="password" name="passcon" placeholder="Confirm your password"/>
										</br>
										<h4>사용자 이미지 : </h4>
										<input type ="file" name="userimg" />
										<br/>
										<input type ="submit" value="회원 가입"/>
									</form>

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
