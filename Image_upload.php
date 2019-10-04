<!DOCTYPE html>
<html>
	<head>
	<script type="text/javascript">
	</script>
		<meta charset="UTF-8">
	</head>
	<body>


	<?php
		$file_dir = "./data/";		//여기가 서버 폴더쪽임
		$file_path = $file_dir.$_FILES["upload"]["name"];		  //  ./data/p.jpg

		if(move_uploaded_file($_FILES["upload"]["tmp_name"], $file_path)) {
			$img_path = $file_path;
			$size = getImagesize($file_path);
	?>

	<ul>
		<li><img src="<?= $img_path ?>" <?= $size[3] ?></li>		 <!--$size[3]의 내용을 확인해보세요~~ -->
		<li><?= $_POST["comment"] ?>	</li>
	</ul>

	<?php
		}else {
			echo "파일 업로드 오류가 발생했습니다!!!";
		}
	?>
	</body>
</html>
