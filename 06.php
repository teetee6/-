<?php
	$name = '홍길동';
	include_once './common/default_fun.php';
	include_once './common/set.php';
?>

<!DOCTYPE html>
<html>
	<head>
	<script type="text/javascript">

	</script>
		<meta charset="UTF-8">
		<title>Insert title here <?=$config['sysname']?> </title>
	</head>
	<body>
		<?php
			echo plus(10, 20);
			getName();
		?>

		<form action="./sub.php" method="post" name="form_name">
			<br>
			성별 : 남성 <input type = "radio" name="gender" value="남" />
			성별 : 여성 <input type = "radio" name="gender" value="여" />
			<br>   <!-- 라디오 -->

			이름 : <input type="text" name="name" value="홍길동" ><br><br>
			나이 : <input type="text" name="age" value="32" ><br><br>  <!-- 그냥 텍스트입력-->

			<ul>
				<li>영화감상 <input type="checkbox" name="hobby[]" value="영화감상"></li>
        <li>맛집탐방 <input type="checkbox" name=" hobby[]" value="맛집탐방"  checked></li>
        <li>독서 <input type="checkbox" name=" hobby[]" value="독서"></li>
        <li>요가 <input type="checkbox" name=" hobby[]" value="요가"></li>
        <li>축구 <input type="checkbox" name=" hobby[]" value="축구"></li>	
			</ul>

			<input type="submit" value="확인">

		</form>



		<a href="./sub.php?name=홍길동&age=32">클릭</a>	 <!--이게 get방식-->
	</body>
</html>
