<!-- JQuery를 이용해 나 자신에게 보내고 나 자신에게 받아 띄우자 -->

<?php
	$name = "";
	!empty($_GET["na"]) ?  $name = $_GET["na"]  :  $name;				//get으로 넘어올때 빈값이 아니면, $name에 값을 넣고...
?>

<!DOCTYPE html>
<html>
	<head>
		<script src="./js/jquery-1.10.2.js"></script>			 <!-- Jquery 불러오고(다운받아진 경로)... 코딩 순서: body에서 화면먼저 만듬 -> head에서 jquery 작성  -->
																												<!-- 나중에 js폴더에 common이란 js파일 만들고, 여기 함수 다 쑤셔널거임(subitfun()만...  document ready에 있는거 말고...)-->
																												<!-- 따로 뺀 그 js파일을 남이 못알아 보도록 ugly code까지 하면, 제 3자가 보기 힘들어지게 됨 -->
																												<!-- js에서 엔터치고 이렇게 작성한거 다 용량차지함. ugly code저거 하면 한줄로 쫘악 늘려주기까지 함-->
		<script type="text/javascript">
			$(function(){							// 이건 decoument ready죠(메모참조).   document가 다 읽히고 나서야, 이 함수가 잘 작동되야한다.
				$("#sbtn").click(function(){
					subitFun();
				});
			});

			function subitFun(){         //function subitFun()은 왜 document ready안에 안들어갔을까?? --> 사람이 실행해야 실행되니까
				if($("#na").val() == "") {
					alert("이름을 입력하세요.");
					return false;
				}
				$("#byfm").submit();
			}
		</script>
		<meta charset="UTF-8">
		<title>JQUERY</title>
	</head>

	<body>
		<h1 id="target2" class="target"  > <?=$name?>  </h1>
		<form action="./J-query연습.php"  id="byfm">
			<input type="text" name="na"  id="na"  value="<?=$name?>"  >
			<span  id="sbtn"  style="cursor: pointer; ">전송</span>
		</form>
	</body>

</html>
