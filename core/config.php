<?php 
	session_start();
	require_once(_CORE."server.php");

	//변수세팅
	$param = explode('/',$_GET['param']);
	$type = isset($param[0]) && $param[0] != "" ? $param[0] : "main";
	$page = isset($param[1]) && $param[1] != "" ? $param[1] : NULL;
	$isMember = isset($_SESSION['member']) ? true : false;

	function alert($msg) {
		echo "<script>alert('{$msg}')</script>";
	}
	function move($url = false) {
		echo "<script>";
			echo $url ? "location.href='{$url}'" : "history.back();";
		echo "</script>";
		exit;
	}
	function access($bool,$msg,$url = false) {
		if ($bool) {
			alert($msg);
			move($url);
		}
	}

	function loginChk() {
		access(!isset($_SESSION['member']),"비회원은 접근 불가능 합니다.");
	}
	function memberChk() {
		access(isset($_SESSION['member']),"이미 로그인 하셨습니다.");
	}

	require_once(_SRC."header.php");
	if (isset($page)) {
		require_once(_SRC."{$type}/action.php");
		if (file_exists(_SRC."{$type}/{$page}.php")) require_once(_SRC."{$type}/{$page}.php");
	} else{
		require_once(_SRC."main.php");
	}
	require_once(_SRC."footer.php");
	// require_once(_MEMBER."login.php");