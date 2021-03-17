<!doctype html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>

<?php 
	$n = 1;
	echo $n, "<br>";	// 1 출력
	
	$n *= 10;
	echo $n, "<br>";	// 10 출력. 앞 문장에서 $n = $n * 10;
	
	echo ++$n, "<br>";	// 11 출력. 먼저 1 증가 시키고 나서 출력
	echo $n++, "<br>";	// 11 출력. 먼저 출력하고 나서 1 증가
	
	echo $n, "<br>";	// 12 출력. 앞 문장에서 1 증가되었으므로
?>

</body>
</html>