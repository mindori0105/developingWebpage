<?php
	require_once("session.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>리뷰 등록</title>
<meta charset = "utf-8"/>
</head>
<body>
<?php
		if(!isset($_SESSION['id'])){
			exit('<a href="indexsanta.php">로그인 상태가 아닙니다. 홈으로</a></body></html>');
		}
?>
	<h1>건담 리뷰 등록</h1>
	<form method="post" enctype="multipart/form-data" action="writereview.php">
		리뷰 메모:<br/>
		<textarea name="memo" cols="50" rows="10"></textarea>
		</br>
		리뷰 이미지 : <br/>
		<input type="file" name="picture"/>
		<br/>
		<br/>
		<input type="submit" value="Submit"/>
	</form>
	<!-- Footer -->
		<?php
			require_once('footer.php');
		?>
</body>
</html>
