<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"> <title>JQUERY</title>
		<script src="../js/jquery-1.10.2.js"></script>
		<script type="text/javascript">
			$(function(){
				$("#memId").blur(function(){
						if( $(this).val().length <= 2 ) {


								$("#idMsg").html("3글자 이상 입력하세요.").css("color", "red");
								$(this).focus();
						}else{
								$("#idMsg").html("").css("color", "");
								$(this).attr("data-check", "ok")			//data-check 속성 추가하고, 값은 ok로.
						}

					});

					/*
					아래 코드는 실행안됨.
					그 이유에 대해서 개인적인 생각으로는, data-check속성은, submit하면 사라져버림.
					따라서, submit하면 get방식으로 받아들이고 나서, 그 받아들인 값이 "ok"인지 비교하면 될듯 함.
					*/
					/*
					$("#LoginFrm").submit(function() {
							$("#memId".attr("data-check") != "ok") {
								return false;
							}
					});
					*/
				});

		</script>
	</head>
	<body>
			<form action="./J-query연습01.php" id="LoginFrm">
					<input type="text" name="memId" id="memId" value="" data-value="아이디">
					<span id="idMsg"> </span> <br>
					<input type="password" name="memPw" id="memPw" value="" data-value="패스워드" >
					<span id="pwMsg"> </span> <br>
				  <button id="submitBtn"> 전송 </button>
			</form>
	</body>
</html>
