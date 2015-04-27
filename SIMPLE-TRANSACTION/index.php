<?php

	$mysqli = new mysqli("localhost","root","","transactions");
	$mysqli->autocommit(false);
	$arr = $mysqli->query("Insert Into users(username) VALUES ('haseeb')");
	$arr2 = $mysqli->query("Insert Into trans(user_id,trans_name) VALUES ('1','haseeb')");
	if($arr2==false){
		$mysqli->rollback();
		echo "Undone";
	}
	else{
		$mysqli->commit();
		echo "Done";
	}

?>