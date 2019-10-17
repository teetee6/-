<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"> <title>JQUERY</title>
		<script src="../js/jquery-1.10.2.js"></script>
		<script type="text/javascript">
			$(function(){

				$("#memId").blur(function() {
					$.ajax({					// ajax document참고하세요~~~   complete, error는 잘 안씀. 에러나면 아무것도 안 일어나게 하면 됨.
						url : "../check_id.ajax.php",					//이 5개정도면 충분
						type : "get",
						dataType : "json",			//text, html, json방식중 어떤 방식으로 받으시겠 습니까? 보통 json으로 받음.
						data : { 								//무슨 데이터를 전달해 줄거얌?
							"id" : $(this).val()
					  },
						success :  function(data) {
							 if(data.result != "ok") {			//json방식이면 .연산자로 받을 수 있음.
								 $("#idMsg").html("사용할 수 없는 아이디 입니다.").css("color", "red");
							 } else {
								 $("#idMsg").html("사용 가능한 아이디 입니다.").css("color", "blue");
							 }
						}
					});
				});

			});
		</script>
	</head>
	<body>
			<form action="./J-query연습02.php" id="LoginFrm">
					<input type="text" name="memId" id="memId" value="" data-value="아이디">
					<span id="idMsg"> </span> <br>
					<input type="password" name="memPw" id="memPw" value="" data-value="패스워드" >
					<span id="pwMsg"> </span> <br>
				  <button id="submitBtn"> 전송 </button>
			</form>
	</body>
</html>
