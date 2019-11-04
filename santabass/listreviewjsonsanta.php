<?php
		$dbc = mysqli_connect("127.0.0.1","root","apmsetup","santabass")
			or die("Error : connect fail");
		mysqli_query($dbc,"set names utf8");
		$query = "select * from review";
		$result = mysqli_query($dbc,$query) 
			or die("Error Querying Review.");
		$json = array();
		while($row = mysqli_fetch_assoc($result)){
			$replyquery = "select replyid, userid, email, memo, time from reply, user
								where userid=user.id order by time desc limit 0, 30";
			$replyresult = mysqli_query($dbc, $replyquery) or die("Error Querying Reply.");
			replyjson = array();
			
			while($replyrow = mysqli_fetch_assoc($replyresult)){
					$replyjson['reply'][]=$replyrow;
			}
			$json['review'][]=$row + $replyjson;
			
			mysqli_free_result($replyresult);
		}
		mysqli_free_result($result);
		mysqli_close($dbc);
		
		echo json_encode($json);
?>