<?php
  include_once './common/set.php';    // 세션은 서버에서 계~속 실행되야 하니까, ./common/set.php파일에 박아두자.
  function login($id, $pw) {     // 로그인 로직 --> DB로 연결
     return $id == "" || $pw == "" ? false : true;    //id,pw 하나라도 빈공간이면 false를 반납.
  }

  $id = "";
  $pw = "";
?>

 <form method="post" name="form_name">
    아이디 : <input type="text" name="inputID" value="ID를 쓰세요" ><br><br>
    비밀번호 : <input type="text" name="inputPW" ><br><br>
    <input type="submit" value="확인">
 </form>

<?php
    $id = $_POST['inputID'];
    $pw = $_POST['inputPW'];
     if(login($id, $pw)) {   //보통 비밀번호는 세션에 저장안함.
       $_SESSION["id"] = $id;
     }
     $_SESSION["pw"] = $pw;
     $_SESSION["name"] = "홍길동";
?>
