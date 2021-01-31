<?php
	if(!isset($_POST["problem-selector"])){
		header("Location: ../index.php?error=noneselected");
		exit();
	} else {
		$subject = $_POST["subject"];
		$lesson = $_POST["lesson"];
		$problem = $_POST["problem-selector"];
		if(empty($subject)){
			header("Location: ../index.php?error=noneselected");
			exit();
		}  
		if(empty($lesson)){
			header("Location: ../index.php?subject=".$subject."&error=noneselected");
			exit();
		}  
		if(empty($problem)){
			header("Location: ../index.php?subject=".$subject."&lesson=".$lesson."&error=noneselected");
			exit();
		}
		header("Location: ../index.php?subject=".$subject."&lesson=".$lesson."&problem=".$problem);
		exit();
	}
