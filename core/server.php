<?php
	
	$db = new PDO("mysql:host=localhost;dbname=0519;charset=utf8;","root","");
	$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
	//db설정

	//쿼리문 설정

	function query($sql = false){
		if ($sql) $this->sql = $sql;
		$res = $db->query($this->sql);
		if (!$res) {
			echo "<pre>";
			echo $this->sql;
			print_r($db->errorInfo());
			echo "</pre>";
		} else{
			return $res;
		}
	}