<?php
	if(isset($_GET["error"])){
		$error = $_GET["error"];
		$errors = array(
			"noneselected" => "You failed to select a valid option",
			"unexpectederror" => "An unexpected error occured. Please contact the system admin and ask for immediate assistance",
		);
		?>
			<p class="error"><?php echo $errors[$error]; ?></p>
		<?php
	}
?>