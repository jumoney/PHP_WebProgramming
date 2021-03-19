<!dodtype html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	
<?php 
	// $_REQUEST["action"] 값에 따라 쿠기 생성 또는 삭제
	$action = isset($_REQUEST["action"]) ? $_REQUEST["action"] : "";
	
	if ($action) {
		if($action == "create")
			setcookie("userid", "test", time() + 60 *60 * 24);
		else if ($action == "delete")
			setcookie("userid");
			
		// 프로그램 실행이 끝난 뒤에야
		// 사용자 PC에 쿠키가 실제로 저장되고
		// 쿠기 값을 읽을 수 있으므로, 이 프로그램을 다시 실행
		header("Location: $_SERVER[SCRIPT_NAME]");
		exit();
	}
	
	// 쿠기 값 읽기
	$cookie = isset($_COOKIE["userid"]) ? $_COOKIE["userid"] : "";
?>

userid 쿠기의 값 : <?= $cookie ?><br>
<a href="?action=create">쿠키 생성</a><br>
<a href="?action=delete">쿠키 삭제</a>

</body>
</html>