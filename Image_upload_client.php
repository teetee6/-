<?php
	$id = "";
	$pw = "";
	if(isset($_COOKIE["id"]))	$id = $_COOKIE["id"];
	if(isset($_COOKIE["pw"]))	$id = $_COOKIE["pw"];
?>

<!DOCTYPE html>
<html>
	<head>
	<script type="text/javascript">

	</script>
		<meta charset="UTF-8">
		<title>Insert title here</title>
	</head>
	<body>

		<form name="form1" method="post"  action = "./Image_upload.php" enctype="multipart/form-data">
			<ul>
				<li> id : <input type="text" name="id" value="<?=$_COOKIE["id"]?>">	</li>
				<li> id : <input type="text" name="pw" value="<?=$_COOKIE["pw"]?>">	</li>
			</ul>

			<ul>
				<li>이미지 업로드 : <input type="file" name="upload">	</li>
				<li><input type="submit" value="확인"></li>
			</ul>
		</form>

	</body>
</html>
