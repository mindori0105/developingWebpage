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
									<h2>Reviews</h2>
								</header>
								<!--write review-->
									<ul class="actions">
										<li><a href="writereviewformsanta.php" class="button primary">Write</a></li>
										<p>&nbsp</p><div id="refresh"><li class="button primary">Refresh</li></div>
									</ul>

								<!-- Table -->


									<!--<h3>Default</h3>-->

									<div class="table-wrapper">
										<table>
											<thead>
												<tr>
													<th>Reviewer</th>
													<th>Name</th>
													<th>Memo</th>

												</tr>
											</thead>
											<tbody>
												<tr>
													<td><img src="images/user01.jpg" style='width:80px;height:80px;' alt=""/></td>
													<td>Pal-Gong</td>
													<td><span class="image right"><img src="images/pic01.jpg" alt="" style='width:300px;height:auto;'/></span>It's near by city center. So it was really reachable. That was nice. And even there are many restaurants to eat meal with family. You should visit Pal-Gong MT this summer!! </td>
												</tr>
												<tr>
													<td><img src="images/user02.jpg" style='width:80px;height:80px;' alt=""/></td>
													<td>Ji-Li</td>
													<td><span class="image right"><img src="images/pic02.jpg" alt="" style='width:300px;height:auto;'/></span>My family went to Ji-Li MT to see the new-year's sun rise. Look at the picture.. Isn't it amazing? We made amazing memory there. I think we will go another MT to see the differnt sun rise. So if any of you know a good spot, leave reply for me please.^^</td>
													</tr>
												<tr>
													<td><img src="images/user03.jpg" style='width:80px;height:80px;' alt=""/></td>
													<td>Han-La</td>
													<td><span class="image right"><img src="images/pic03.jpg" alt="" style='width:300px;height:auto;'/></span>5 Days in Jeju Island was so good!. The weather was wonderful. People were so kind. And mostly, the view at the mountain was unforgettable. Yet, we haven't visit all part in the island. So I hope i can visit Jeju island again soon.</td>
												</tr>
											</tbody>

										</table>
									</div>



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
