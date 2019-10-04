<?php
	$a = @$_GET['num'];		// 골뱅이 넣으면, 변수 안넣어도 오류 안나도록 해줌.
	if($a=="") $a=10;
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
			if ($a % 2 == 0) {
		?>
					<span style="border-color: red;">짝수</span>
		<?php
			}
		?>
	</body>
</html>

<!-- // 127.0.0.1?num=20  검색하면 num값에 들어감.  -->
