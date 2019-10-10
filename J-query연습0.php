<!-- 3초마다 이미지 바꿔지게 하자 -->

<!DOCTYPE html>
<html>
	<head>
		<script src="./js/jquery-1.10.2.js"></script>
		<script type="text/javascript">
			$(function(){
				setInterval(function() {
					if($("#chimg").attr("src") == "./img/test.jpg" )
						$("#chimg").attr("src", "./img/web.jpg");
					else
						$("#chimg").attr("src", "./img/test.jpg");

				}, 3000);
				clearInterval();
			});
		</script>
		<meta charset="UTF-8">
		<title>JQUERY</title>
	</head>
	<body>
		<img src="./img/test.jpg" id="chimg" >
	</body>
</html>
