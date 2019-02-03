<?php

	mysqli_connect("localhost", "root", "", "royalart");
	if (mysql_connect()==0) {
		echo "We couldn't connect you to database";
	}
	$name = ($_GET['name']);
	$mail = ($_GET['mail']);
	$choice = ($_GET['choice']);
	$msg = ($_GET['msg']);
	if (!empty($name)&&!empty($mail)&&!empty($choice)&&!empty($msg)) {
		echo "Table of content";
	} else {
		echo "Database is empty";
	}
	
 ?>