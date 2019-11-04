<?php
	// session_start();
	// ob_start();
	require_once("sessionsanta.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>로그아웃 결과</title>
<meta charset="utf-8"/>
</head>
<body>
<?php
	require_once('dbconsanta.php');

	if(!isset($_SESSION['id'])){
		exit('<a href="mainsanta.php">로그인 상태가 아닙니다.</a></body></html>');
	}

	$_SESSION = array();

	if(isset($_COOKIE[session_name()])){
		setcookie(session_name(),'',time()+(60*60*24));
	}

	session_destroy();

	setcookie('id','',time()-(60*60));
	setcookie('email','',time()-(60*60));
	unset($_COOKIE["id"]);
	unset($_COOKIE["email"]);
	echo '로그아웃하였습니다.<br/><a href="indexsanta.php">홈으로</a>';
?>
</body>
</html>
