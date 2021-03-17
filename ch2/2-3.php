<!doctype html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>

오늘 날짜 : 
<?php
	/*
		여러 줄 주석 :
		첫 번째 PHP 코드 영역
	*/
	echo date("Y-m-d");
?>
<br>

현재 시간 :
<?php
	// 한줄 주석 : 두 번째 PHP 코드 영역
	echo date("H:i:s");		// 한줄 주석 : 현재 시간 출력
?>

<br><br>
/* HTML 영역에서는 
   PHP의 주석이 */
// 일반 텍스트로 인식됩니다.

<!-- HTML 영역에서는 HTML 주석을 사용하세요.-->

</body>
</html>