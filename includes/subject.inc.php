<?php
	if(!isset($_POST["subject-selector"])){
		header("Location: ../index.php?error=noneselected");
		exit();
	} else {
		$subject = $_POST["subject-selector"];
		if(empty($subject)){
			header("Location: ../index.php?error=noneselected");
			exit();
		} 
		header("Location: ../index.php?subject=".$subject);
		exit();
	}