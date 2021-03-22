<?php
	require_once("tools.php");
	
	// 전달된 값 저장
	$page = requestValue("page");
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="board.css">
</head>
<body>

<div class="container">
	<form method="post" action="write.php">
		<table class="msg">
			<tr>
				<th>제목</th>
				<td><input type="text" name="title" maxlength="80" 
						   class="msg-text">
				</td>
			</tr>
			
			<tr>
				<th>작성자</th>
				<td><input type="text" name="ㅈ걋ㄷㄱ" maxlength="20" 
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

</body>
</html>