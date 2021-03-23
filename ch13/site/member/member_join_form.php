<!dodtype html>
<html>
<head>
	<?php require("../html_head.php")?>
</head>
<body>

<div id="m-container">
	<?php require("../header.php")?>
	<?php require("../sidebar.php")?>
	
	<div id="m-content">
		<form action="member_join.php" method="post">
			<table>
				<tr>
					<td>아이디</td>
					<td><input type="text" name="id"></td>
				</tr>
				<tr>
					<td>비밀번호</td>
					<td><input type="password" name="pw"></td>
				</tr>
				<tr>
					<td>성명</td>
					<td><input type="text" name="name"></td>
				</tr>
			</table>
			<input type="submit" value="확인">
		</form>
	</div>
	
	<?php require("../footer.php")?>
</div>

</body>
</html>