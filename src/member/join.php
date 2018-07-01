<?php memberChk(); ?>
<fieldset>
	<h2 class="title">회원가입 페이지</h2>
	<form action="" method="post" class="form">
		<input type="hidden" name="action" value="join">
		<input type="text" name="id" class="form-controll" placeholder="아이디" required>
		<input type="password" name="pw" class="form-controll" placeholder="패스워드" required>
		<input type="text" name="name" class="form-controll" placeholder="이름" required>
		<button type="submit" class="btn">회원가입</button>
	</form>
</fieldset>