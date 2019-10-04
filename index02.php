<?php
	$a = @$_GET['food'];
	if($a=="") $a='점심';
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
			 switch ($a) {
			 	case '아침':
			 		echo "$a 식사는 토스트입니다.";
			 		break;

				case '점심':
			 		echo "$a 식사는 토스트입니다.";
			 		break;

				case '저녁':
			 		echo "$a 식사는 토스트입니다.";
			 		break;
			 }
		?>

	</body>
</html>

<!-- // 127.0.0.1?a=저녁  검색하면 food변수에 값이 들어감.  -->
