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
						require_once("navsanta.php");
					?>

				<!-- Main -->
					<div id="main">

						<!-- Post -->
							<section class="post">
								<header class="row">
									<h2>Write Reviews</h2>
								</header>


								<!-- Table -->
									<?php
										require_once('dbconsanta.php');

										if(!isset($_SESSION['id'])){
												exit('<a href="indexsanta.php">로그인 상태가 아닙니다. 홈으로</a></body></html>');
										}

										if(empty($_POST['memo']) || empty($_FILES['picture']['tmp_name'])){
											exit('<a href="javascript:history.go(-1)">입력 폼을 채워주세요.</a></body></html>');
										}

										if(!isset($_FILES['picture'])){
											exit('<a href="javascript:history.go(-1)">이미지 업로드 에러가 발생했습니다.</a></body></html>');
										}

										$dbc = mysqli_connect($host, $user, $pass, $dbname)
														or die("Error Connecting to MySQL Server.");

										$id = $_SESSION['id'];
										$memo = mysqli_real_escape_string($dbc, trim($_POST['memo']));
										$image = addslashes(file_get_contents($_FILES['picture']['tmp_name']));

										mysqli_query($dbc, 'set names utf8');

										//$query = "insert into user values(null, '$email', SHA('$pass'), '$imagepath')";
										$query = "insert into review values (null, $id, now(), '$image', '$memo')";

										$result = mysqli_query($dbc, $query)
															or die("Error Querying database.");

										mysqli_close($dbc);

										echo "Review uploaded.. </br></br>";
										echo '<a href="indexsanta.php">홈으로</a>';
									?>
									<hr />

							</section>

					</div>

				<!-- Footer -->
					<footer id="footer">
						<section>
							<form method="post" action="#">
								<div class="fields">
									<div class="field">
										<label for="name">Name</label>
										<input type="text" name="name" id="name" />
									</div>
									<div class="field">
										<label for="email">Email</label>
										<input type="text" name="email" id="email" />
									</div>
									<div class="field">
										<label for="message">Message</label>
										<textarea name="message" id="message" rows="3"></textarea>
									</div>
								</div>
								<ul class="actions">
									<li><input type="submit" value="Send Message" /></li>
								</ul>
							</form>
						</section>
						<section class="split contact">
							<section class="alt">
								<h3>Address</h3>
								<p>D420 Kumoh National Technology of Institude<br />
								Gumi, South Korea 00000-0000</p>
							</section>
							<section>
								<h3>Phone</h3>
								<p><a href="#">(+82) 10-7195-4339</a></p>
							</section>
							<section>
								<h3>Email</h3>
								<p><a href="#">20141311@kumoh.ac.kr</a></p>
							</section>
							<section>
								<h3>Social</h3>
								<ul class="icons alt">
									<li><a href="https://www.facebook.com/choiminseoky" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="https://www.instagram.com/mindorii/" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="https://github.com/mindori0105" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
								</ul>
							</section>
						</section>
					</footer>

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
