<!-- 마우스를 올렸을때, 이미지가 멈춤.  마우스를 뗐을때, 이미지가 다시 움직임 -->
<!-- 쓰레드처럼 Interval을 사용하면 됨-->
<!-- mouseover와 mouseout을 쓰자-->

<!DOCTYPE html>
<html>
	<head>
		<script src="./js/jquery-1.10.2.js"></script>
		<script type="text/javascript">
		  var loopVal; 													   				//setInterval의 return값을 loopVal에 담는다.
			$(function(){
				startInterval();												// setInterval로 바로 처음 시작할땐, 이미지 안뜨니까 이렇게 처음을 위해서.... startInterval()을 만들어줌...
				$("#chimg").mouseover(function() {       	//JQuery 이벤트로 mouseover 치면 .mousever쓰래요...
					clearInterval(loopVal);
				});

				$("#chimg").mouseleave(function() {
					startInterval();
				});
			});


			function startInterval() {
				loopVal = setInterval(function() {
					if($("#chimg").attr("src") == "./img/test.jpg" )
						$("#chimg").attr("src", "./img/web.jpg");
					else
						$("#chimg").attr("src", "./img/test.jpg");

				}, 1000);
			}
		</script>
		<meta charset="UTF-8">
		<title>JQUERY</title>
	</head>
	<body>
		<img src="./img/test.jpg" id="chimg" >
	</body>
</html>
