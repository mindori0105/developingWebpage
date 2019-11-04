<?php
	$dbc = mysqli_connect("127.0.0.1","root","apmsetup","santabass")
		or die("Error : connect fail");
	mysqli_query($dbc,"set names utf8");
	$query = "select * from review";
	$result = mysqli_query($dbc,$query)
		or die("Error : query fail");
	$json = array();

	if(mysqli_num_rows($result)){
		while($row = mysqli_fetch_assoc($result)){
			$json["list"][] = $row;
		}
		mysqli_free_result($result);
	}
	echo json_encode($json);

	mysqli_close($dbc)
?>
