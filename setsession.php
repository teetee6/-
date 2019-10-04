<?php   include_once './common/set.php';    // 세션은 서버에서 계~속 실행되야 하니까, ./common/set.php파일에 박아두자.
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
			<?=$_SESSION["testing"]?>
			<?=$_SESSION["passing"]?>

	</body>
</html>
