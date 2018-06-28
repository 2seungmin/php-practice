<?php
	if (isset($_POST['action'])) {
		extract($_POST);
		$a = $db->query("SELECT * FROM member where id='{$id}'")->fetch();
	}