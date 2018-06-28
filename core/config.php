<?php
	session_start();
	require_once(_CORE."server.php");
	
	//param 설정
	$param = explode('/', $_GET['param']);
	$type = isset($param[0]) && $param[0] != "" ? $param[0] : "main";
	$page = isset($param[1]) && $param[1] != "" ? $param[1] : NULL;

	//함수 설정
	function alert($msg){
		echo "<script>alert('{$msg}');</script>";
	}

	function move($url = false){
		echo "<script>";
			echo $url ? "location.href='{$url}'" : "history.back();";
		echo "</script>";
		exit;
	}

	function access($bool,$msg,$url = false){
		if ($bool) {
			alert($msg);
			move($url);
		}
	}

	//$_POST['action']있으면 action.php load
	if ($type != "main" && isset($_POST['action'])) require_once(_SRC."{$type}/action.php");
	//mvc의 controller.php에 index 함수 같은거 (view페이지 로드)
	require_once(_SRC."header.php");
	if (isset($page)) {
		if (file_exists(_SRC."{$type}/{$page}.php")) require_once(_SRC."{$type}/{$page}.php");
	} else{
		require_once(_SRC."main.php");
	}
	require_once(_SRC."footer.php");