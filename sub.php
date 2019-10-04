<?php
  $name = $_POST['name'];   // post할떈 @_POST   get할떈 @_GET    두가지 다 지원하는 $_REQUEST
  $age = $_REQUEST['age'];
  $gender = $_REQUEST['gender'];
  $hobby = $_POST['hobby'];   // 체크박스
?>

<!DOCTYPE html>
<html>
	<head>
	<script type="text/javascript">

	</script>
		<meta charset="UTF-8">
		<title><?=$name?>님 환영합니다</title>
	</head>
	<body>
    홍길동님 나이는 <?=$age?> 이군요.
    성별은 <?=$gender?> 입니다.

    <ul>
    <?php
      for($i=0; $i<count($hobby); $i++) {
    ?>
        <li>
          <?=$hobby[$i]?>
        </li>
    <?php
      }
    ?>
    </ul>

	</body>
</html>
