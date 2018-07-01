<?php 
if (isset($_POST['action'])) {
	$_POST = array_map("htmlspecialchars", $_POST);
	extract($_POST);
	switch ($_POST['action']) {
		case 'join':
			$a = fetch("SELECT * FROM member where id='{$id}'");
			access($a, "중복된 아이디 입니다.");
			$sql = "INSERT INTO member set id='{$id}', pw='{$pw}', name='{$name}';";
			access(query($sql),"회원가입이 ㅇㅋ","/");
		break;
		case 'login':
			$a = fetch("SELECT * FROM member where id='{$id}' and pw='{$pw}'");
			access(!$a, "아이디 또는 비번 일치X");
			$_SESSION['member'] = $a;
			alert("로그인 하였습니다.");
			move('/');
		break;
	}
}