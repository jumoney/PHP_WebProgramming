<?php 
	require_once("tools.php");
	require_once("MemberDao.php");
	
	// 현재 로그인한 사용자의 회원정보 읽기
	session_start_if_none();
	$mdao = new MemberDao();
	$member = $mdao->getMember($_SESSION["uid"]);
?>

<!dodtype html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>

<form action="member_update.php" method="post">
	<table>
		<tr>
			<td>아이디</td>
			<td><input type="text" name="id" 
				value=<?= $member["id"] ?> 
				readonly></td>
		</tr>
		<tr>
			<td>비밀번호</td>
			<td><input type="password" name="pw" 
				value=<?= $member["pw"] ?>></td>
		</tr>
		<tr>
			<td>성명</td>
			<td><input type="text" name="name"
				value=<?= $member["name"] ?>></td>
		</tr>
	</table>
	<input type="submit" value="확인">
</form>

</body>
</html>