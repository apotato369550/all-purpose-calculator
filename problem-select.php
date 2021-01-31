<?php
	$problemOptions = array(
		"mathematics" => array(
			"arithmetic" => array(
				"nth-term" => "Find the nth term of an arithmetic sequence",
				"series" => "Find the sum of an arithmetic sequence",
				"common-difference" => "Find the common difference of an arithmetic sequence"
			),
			"geometric" => array(
				"nth-term" => "Find the nth term of an geometric sequence",
				"series" => "Find the sum of an geometric sequence",
				"common-ratio" => "Find the common ratio of an geometric sequence",
				"infinite-sequence" => "Find the sum of an infinite geometric sequence"
			)
		),
		"science" => array(
			"waves" => array(
				"wave-speed" => "Calculate wave speed (in meters/second)",
				"wavelength" => "Calculate wavelength (in meters)",
				"wave-frequency" => "Calculate wave frequency (in Hertz)"
			),
			"magnets-electricity" => array(
				"magnetic-force" => "Calculate magnetic force (in Newtons)",
				"conductors-currents" => "Calculate the magnetic force of a current running through a conductor (also in Newtons)",
				"particle-magnitude" => "Calculate the the magnitude of a charged particle (in Coulomb)",
				"magnetic-field" => "Calculate the the strength of a magnetic field (in Tesla)",
				"electromotive-force" => "Calculate the electromotive force (in Newtons)",
				"tesla" => "Calculate tesla (T) units"
			),
			"light" => array(
				"refraction-index" => "Calculate the index of refraction of a given material",
				"refraction-angle" => "Calculate the angle of refraction of a ray of light"
			)
		)
	);
	
	if(isset($_GET["subject"]) and isset($_GET["lesson"])){
		$subject = $_GET["subject"];
		$lesson = $_GET["lesson"];
		
		if(empty($subject) or empty($lesson)){
			header("Location: index.php?error=unexpectederror");
			exit();
		}
		
		?>
		<form method="POST" action="includes/problem-selector.inc.php" class="problem">
			<label for="problem-selector" >Problem:</label>
			<select name="problem-selector" onchange="this.form.submit()">
			  <option value="">Select</option>
			  <?php
				if(isset($_GET["problem"])){
					$problem = $_GET["problem"];
					foreach($problemOptions[$subject][$lesson] as $option => $value){
						if($option == $problem){
							?> <option value="<?php echo $option ?>" selected><?php echo $value ?></option> <?php
						} else {
							?> <option value="<?php echo $option ?>"><?php echo $value ?></option> <?php
						}
					}
				} else {
					foreach($problemOptions[$subject][$lesson] as $option => $value){
						?> <option value="<?php echo $option ?>"><?php echo $value ?></option> <?php
					}
				}
				?>  
				<input type="hidden" value="<?php echo $subject ?>" name="subject">
				<input type="hidden" value="<?php echo $lesson ?>" name="lesson">
			</select>
		</form>	
		<?php
	} 
?>
