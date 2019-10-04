<?php
	function plus($a, $b) {
		return $a+$b;
	}

  function getName() {
    global $name;
    echo $name."님 반갑습니다.";
  }

  function printSystem() {
    global $config;    //첨자 배열 ($config가 'sysname' 'domain'등의 변수를 가지고있음.)
    echo $config['sysname'];
  }
?>
