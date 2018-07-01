<?php
	
	function query($sql){
		$db = new PDO("mysql:host=localhost;dbname=0519;charset=utf8;","root","");
		$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
		$res = $db->query($sql);
		if (!$res) {
			echo "<pre>";
			echo $sql;
			print_r($db->errorInfo());
			echo "</pre>";
		} else{
			return $res;
		}
	}

	function fetch($sql){
		return query($sql)->fetch();
	}


	function fetchAll($sql){
		return query($sql)->fetchAll();
	}


	function cnt($sql){
		return query($sql)->rowCount();
	}

