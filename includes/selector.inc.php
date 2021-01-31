<?php
	if(!isset($_POST["lesson-selector"]) or !isset($_POST["subject"])){
		header("Location: ../index.php?error=noneselected");
		exit();
	} else {
		$subject = $_POST["subject"];
		$lesson = $_POST["lesson-selector"];
		if(empty($subject)){
			header("Location: ../index.php?error=noneselected");
			exit();
		} 
		if(empty($lesson)){
			header("Location: ../index.php?subject=".$subject."&error=noneselected");
			exit();
		}
			header("Location: ../index.php?subject=".$subject."&lesson=".$lesson);
			exit();
		
	}