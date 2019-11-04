<?php
header("content-type: image/jpg");
$dbhost = '127.0.0.1';
$dbuser = 'root';
$dbpass = 'apmsetup';
$dbname = 'santabass';
// @ 앞에 붙이면 waring 출력하지 않음
//$dbc = @mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
$dbc = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if ($dbc == null) {
$response->error = "Connection Error";
exit(json_encode($response));
}
$reviewid = $_GET['id'];
$query = "SELECT picture FROM review WHERE id = '$reviewid'";
$data = mysqli_query($dbc, $query);
$row = mysqli_fetch_row($data);
echo $row[0];
mysqli_free_result($data);
mysqli_close($dbc);
?>
