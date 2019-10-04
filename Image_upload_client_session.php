<?php
	include_once './common/set.php';    // 세션은 서버에서 계~속 실행되야 하니까, ./common/set.php파일에 박아두자.

	$id = "";
	$pw = "";

	if(isset($_SESSION["id"])) $id=$_SESSION["id"];
	if(isset($_SESSION["name"])) $name=$_SESSION["name"];
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

		<?php
		 if($id != "") {
		?>
					<?= $id ?>
		  		<?= $name ?>님 반갑습니다.
		<?php
			}
		?>



	</body>
</html>
