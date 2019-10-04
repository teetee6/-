<?php
	$a =10;
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
						<!-- 이렇게 중간에 출력할 것을 브라우저 측에서 간단히 하도록 하는 방법도 있다.
						 php에서 굳이 쓰려면 echo "<'span style="back   써서 좀 복잡해 질 수 있음.  --> 
	</body>
</html>
