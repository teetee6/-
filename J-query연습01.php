<!-- ID위치에 3글자 미만으로 입력하면,
 		3글자 이상으로 입력하라고 함.-->
<!-- 가끔 새로고침해도 안되는경우 있음. 브라우저 캐시에 그전 코딩이 적용되어있어서 그럼.
크롬에서 clear cache 다운로드해서 클릭해서 쓰세여  -->

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"> <title>JQUERY</title>
		<script src="./js/jquery-1.10.2.js"></script>
		<script type="text/javascript">
			$(function(){
				$("#memId").blur(function(){		//id=memId인 애한테로 부터, 빠져나오는 순간!의 이벤트
						if( $(this).val().length <= 2 ) {
								// alert("3글자 이상 쓰세요");
								// $(this).attr("data-value")
								$("#idMsg").html("3글자 이상 입력하세요.").css("color", "red");
								$(this).focus();	//포커스도 맞춰주면 깔끔~  //3글자 미만 입력되면 빠져나왓는데도, 다시 포커스가 입력칸에 잡힘.
						}else{
								$("#idMsg").html("").css("color", "");
								$(this).attr("data-check", "ok")			// 이걸 만들어두면, 비록 저 data-check가 없지만, 3글자 이상일때 "전송"눌렀을떄, 소스요소로 보면 파악하게 될 수 있다.(data-check값)
						}
				});
				$("#LoginFrm").submit(function() {						//form이 전송되었을때! 이벤트
						$("#memId".attr("data-check") != "ok") {			// 전송했을때
							alert("아이디를 정확히 입력해주세요.");
							return false;
						}
				});
			});
		</script>
	</head>
	<body>
			<form action="./J-query연습01.php" id="LoginFrm">
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
