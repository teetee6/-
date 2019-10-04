<?php 
	$data="첨하는 php 입니당";
	$data = explode(" ", $data);  // string문자가 알아서 배열로 되서, data로 저장됨.
?>
<!DOCTYPE html>
<html>
	<head>
	<script type="text/javascript">
		alert("<?php $data[0]?>");	// 서버->클라이언트로, 서버의 데이터를 전송은 가능함.( 그 역은 안됨)
		var data="안녕하세요";		//이건, 내 컴퓨터에서의 메모리를 차지하니, 서버로 공유는 안됨.

		if(confirm("허락하시겠습니까?")){
			alert("방갑습니다.");
		}else{
			alert("안녕히가세요.");
		}
	</script>
		<meta charset="UTF-8">
		<title>Insert title here</title>
	</head>
	<body>
		<?=print_r($data)?>
	</body>
</html>