<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="../public/css/common.css">
</head>
<body>
<header id="header">
	<nav>
		<ul>
			<li><a href="/">홈으로</a></li>
			<?php if ($isMember): ?>
			<li><a href="/member/logout">로그아웃</a></li>
			<?php else: ?>
			<li><a href="/member/join">회원가입</a></li>
			<li><a href="/member/login">로그인</a></li>
			<?php endif ?>
		</ul>
	</nav>
</header>