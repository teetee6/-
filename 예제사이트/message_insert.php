<meta charset='utf-8'>
<?php
    $send_id = $_GET["send_id"];

    $rv_id = $_POST['rv_id'];
    $subject = $_POST['subject'];
    $content = $_POST['content'];
	$subject = htmlspecialchars($subject, ENT_QUOTES);
	$content = htmlspecialchars($content, ENT_QUOTES);     // html에 입력된게, 위험한 입력값이 있을수 있으니 필터링해줌.
	$regist_day = date("Y-m-d (H:i)");  // 현재의 '년-월-일-시-분'을 저장

	if($send_id != $userid) {      // userid가 빈값이면, 로그인이 안됬다는 뜻임.
		echo("
			<script>
			alert('로그인 후 이용해 주세요! ');
			history.go(-1)
			</script>
			");
		exit;
	}

  include once "./db/db_cnn.php";
	// $con = mysqli_connect("localhost", "user1", "12345", "sample");
	$sql = "select * from members where id='$rv_id'";      // 보낼곳 아이디가 있는지?
	$result = mysqli_query($con, $sql);
	$num_record = mysqli_num_rows($result);    // row가 1개라도 있다면, 보낼 곳이 있다는 뜻.
  //최신방식은, "보내기" 눌렀을때 아이디있는지 확인이 아닌, 수신자 입력칸에서 빠져나왔을때 확인해주는 "비동기통신"임.

	if($num_record)
	{
		$sql = "insert
                message
            set
                send_id = '$send_id',
                rv_id = '$rv_id',
                subject = '$subject',
                content = '$content',
                regist_day = 'regist_day'
            ";
		$sql .= "values('$send_id', '$rv_id', '$subject', '$content', '$regist_day')";
		mysqli_query($con, $sql);  // $sql 에 저장된 명령 실행
	} else {
		echo("
			<script>
			alert('수신 아이디가 잘못 되었습니다!');
			history.go(-1)
			</script>
			");
		exit;
	}

  // 서버쪽에선 이렇게 break를(exit) 걸어둬서, 디버깅할 수 있음.
  // 클라이언트쪽에선 개발자도구로 디버깅.
  // echo $sql;
  // exit;


	mysqli_close($con);                // DB 연결 끊기

	echo "
	   <script>
	    location.href = 'message_box.php?mode=send';
	   </script>
	";
?>
