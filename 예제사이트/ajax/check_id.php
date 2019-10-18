<?php
  !empty($_POST['id']) ? $id = $_POST['id'] : $id="";
  $ret['check'] = false;

  if($id != ""){
    $con = mysqli_connect("localhost", "user1", "12345", "sample");
    $sql = "select
                    id
            from
                    members
            where
                    id='{$id}'
            ";
    $result = mysqli_query($con, $sql);
    $num = mysqli_num_rows($result);

    if( $num == 0){
      $ret['check'] = true;
    }
  }

  $ret['id'] = "kkk";
	$ret['name'] = "홍길동";


	$hacjum["com"] = "A";
	$hacjum["server"] = "A+";
	$hacjum["db"] = "C";

	$arr[0] = $hacjum;
	$hacjum["com"] = "B";
	$hacjum["server"] = "C+";
	$hacjum["db"] = "D";
	$arr[1] = $hacjum;

	$ret['hacjum'] = $arr;

  echo json_encode($ret);   // json이 어떤 형식으로 나오나, 페이지에서 확인해보자.
?>
