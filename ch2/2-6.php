<!doctype html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>

<?php
	$a = 5;
	
	// 작은따옴표 안에 있는 모든 글자는 글자 그대로 해석됨
	$b = '값은 $a 입니다.<br>';
	echo $b;	// $b = '값은 $a 입니다.<br>'
	
	// 큰따옴표 안에 이 변수명이 있으면 그 변수의 값으로 치환됨
	$b = "값은 $a 입니다.<br>";
	echo $b;	// $b = "값은 5 입니다.<br>"
	
	// 변수명이 "$a입니다"로 인식됨
	$b = "값은 $a입니다.<br>";
	echo $b;	// $b = "값은.<br>"
	
	// 변수명을 분리하기 위해서는 중괄호를 사용
	$b = "값은 {$a}입니다.<br>";
	echo $b;	// $b = "값은 5입니다.<br>"
	

?>

</body>
</html>