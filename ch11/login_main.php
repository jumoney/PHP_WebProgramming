<?php 
	require_once("tools.php");
	
	//사용자 아이디와 이름을 담은 세션 변수 읽기
	session_start_if_none();
	$id = sessionVar("uid");
	$name = sessionVar("uname");
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>

<?php if ($id) : // 로그인 상태일 때의 출력 ?>
<form action="<?= MEMBER_PATH ?>/logout.php" method="post">
	<?= $name ?>님 로그인
	<input type="submit" value="로그아웃">
	
	<input type="button" value="회원정보 수정" 
	onclick="location.href='<?= MEMBER_PATH ?>/member_update_form.php'">
	
</form>

<?php else :	// 로그인 되지 않은 상태일 때의 출력 ?>
<form action="<?= MEMBER_PATH ?>/login.php" method="post">
	아이디: <input type="text" name="id">&nbsp;&nbsp;
	비밀번호: <input type="password" name="pw">
	<input type="submit" value="로그인">
	
	<input type="button" value="회원가입"
		onclick="location.href=
		'<?= MEMBER_PATH ?>/member_join_form.php'">
</form>
<?php endif ?>

</body>
</html>