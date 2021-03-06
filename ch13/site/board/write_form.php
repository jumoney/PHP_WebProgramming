<?php
	require_once("../tools.php");
	
	// 전달된 값 저장
	$page = requestValue("page");
	
	// 로그인한 사용자 아이디 저장
	// 이 아이디로 작성자 입력란을 채워 줌
	session_start_if_none();
	$loginId = sessionVar("uid");
?>

<!doctype html>
<html>
<head>
	<?php require("../html_head.php")?>
</head>
<body>

<div id="m-container">
	<?php require("../header.php")?>
	<?php require("../sidebar.php")?>
	
	<div id="m-content">
		<form method="post" action="write.php">
			<table class="msg">
				<tr>
					<th>제목</th>
					<td><input type="text" name="title" maxlength="80" 
							   class="msg-text">
					</td>
				</tr>
				
				<tr>
					<th class="msg-header">작성자</th>
					<td><input type="text" name="writer" maxlength="20" 
							   value="<?= $loginId ?>" readonly 
							   class="msg-text">
					</td>
				</tr>
				
				<tr>
					<th>내용</th>
					<td><textarea name="content" wrap="virtual"
								rows="10" class="msg-text"></textarea>
					</td>
				</tr>
			</table>
			
			<br>
			<div class="left">
				<input type="submit" value="글등록">
				<input type="button" value="목록보기"
					   onclick="location.href='<?=
								bdUrl("board.php", 0, $page) ?>'" >
			</div>
		</form>
	</div>
	
	<?php require("../footer.php")?>
</div>

</body>
</html>