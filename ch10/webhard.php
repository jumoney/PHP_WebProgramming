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
		<th>파일명
			<a href="?sort=fname$dir=asc">^</a>
			<a href="?sort=fname&dir=desc">V</a>
		</th>
		<th>업로드
			<a href="?sort=ftime$dir=asc">^</a>
			<a href="?sort=ftime&dir=desc">V</a>
		</th>
		<th>크기</th>
		<th>삭제</th>
	</tr>
	<?php foreach ($result as $row) : ?>
	<tr>
		<td class="left"><a href="files/<?= $row["fname"] ?>"><?= $row["fname"] ?></a></td>
		<td><?= $row["ftime"] ?></td>
		<td class="right"><?= $row["fsize"] ?><?= $row["fsize"] ?>&nbsp;&nbsp;</td>
		<td><a href="del_file.php?num=<?= $row["num"] ?>&sort=<?= $sort ?>&dir=<?= $dir ?>">X</td>
	</tr>
	<?php endforeach ?>
</table>
</body>
</html>