<?php	
	require("WebhardDao.php");
	$dao = new WebhardDao();
	
	$sort = isset($_REQUEST["sort"]) ? $_REQUEST["sort"] : "fname";
	$dir = isset($_REQUEST["dir"]) ? $_REQUEST["dir"] : "asc";
	
	$result = $dao->getFileList($sort, $dir);

?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<style>
		table { width: 700px; text-align: center; }
		th	  { background-color: cyan; }
		
		.left  { text-align: left   }
		.right { text-align: right; }
		
		a:link  { text-decoration: none; color: blue; }
		a:hover { text-decoration: none; color: red;  }
	</style>
</head>
<body>

<form action="add_file.php?sort=<?= $sort ?>&dir=<?= $dir ?>" enctype="multipart/form-data" method="post">
	업로드할 파일을 선택하세요.<br>
	<input type="file" name="upload"><br>
	<input type="submit" value="업로드">
</form>
<br>

<table>
	<tr>
		<td>파일명
			<a href="?sort">
		</td>
	</tr>
</table>
</body>
</html>