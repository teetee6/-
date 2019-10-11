<!-- ajax로 비동기통신함.
(get방식으로 현재 입력된 데이터를 전달해주고)
(Json방식으로 받아옴.) -->

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"> <title>JQUERY</title>
		<script src="./js/jquery-1.10.2.js"></script>
		<script type="text/javascript">
			$(function(){

				$("#memId").blur(function() {
					$.ajax({					// ajax document참고하세요~~~   complete, error는 잘 안씀. 에러나면 아무것도 안 일어나게 하면 됨.
						url : "./check_id.ajax.php",					//이 5개정도면 충분
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
					<input type="text" name="memId" id="memId" value="" data-value="아이디">			<!-- 각 태그들의 속성은 type, id같이 이름이 있다. 근데, 우리가 임의로 이렇게 data-value 속성처럼 붙여줄수도 있다.-->
				<!-- 이 input요소는 아무것도 없지만, 내가 나중에 사용하려고 data-value속성을 만든거임.
			 	이런걸 custom속성이라고 함.(속성이름 아무거나 지으셈. 근데, "data-"를 앞에 꼭 붙여줘야함(웹 표준 규칙임) )-->
					<span id="idMsg"> </span> <br>
					<input type="password" name="memPw" id="memPw" value="" data-value="패스워드" >
					<span id="pwMsg"> </span> <br>
					<!-- 		<span id="subGo"> 전송 </span>		 -->
				  <button id="submitBtn"> 전송 </button>  	<!--button누르면 무조건 전송하니, 확인하기위해 id를 지어주자 -->
			</form>
	</body>
</html>
