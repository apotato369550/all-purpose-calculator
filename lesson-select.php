
<?php
	$lessonOptions = array(
		"mathematics" => array(
			"arithmetic" => "Arithmetic Sequence",
			"geometric" => "Geometric Sequence"
		),
		"science" => array(
			"waves" => "Wavespeed, Wavelength, and Frequency",
			"magnets-electricity" => "Magnets and Electricity",
			"light" => "Lights",
		)
	);

	if(isset($_GET["subject"])){
		?>
		<form method="POST" action="includes/selector.inc.php" class="lesson">
			<label for="lesson-selector" >Lesson:</label>
			<select name="lesson-selector" onchange="this.form.submit()">
			  <option value="">Select</option>
			  <?php
				
				if(isset($_GET["subject"])){
					$subject = $_GET["subject"];
					
					if(empty($subject)){
						header("Location: index.php?error=unexpectederror");
						exit();
					}
					
					if(isset($_GET["lesson"])){
						$lesson = $_GET["lesson"];
						foreach($lessonOptions[$subject] as $option => $value){
							if($option == $lesson){
								?> <option value="<?php echo $option ?>" selected><?php echo $value ?></option> <?php
							} else {
								?> <option value="<?php echo $option ?>"><?php echo $value ?></option> <?php
							}
						}
					} else {
						foreach($lessonOptions[$subject] as $option => $value){
							?> <option value="<?php echo $option ?>"><?php echo $value ?></option> <?php
						}
					}
					?> <input type="hidden" value="<?php echo $subject ?>" name="subject"> <?php
				}
			  ?>
			</select>
		</form>	
		<?php
	}
?>



