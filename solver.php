<?php
	$options = array(
		"mathematics" => array(
			"arithmetic" => array(
				"nth-term" => array(
					"first-term" => array(
						"type" => "number",
						"text" => "Enter the first term"
					),
					"value-of-n" => array(
						"type" => "number",
						"text" => "Enter the value of n"
					),
					"common-difference" => array(
						"type" => "number",
						"text" => "Enter the common difference"
					),
				),
				"series" => array(
					"first-term" => array(
						"type" => "number",
						"text" => "Enter the first term"
					),
					"last-term" => array(
						"type" => "number",
						"text" => "Enter the last term"
					),
					"value-of-n" => array(
						"type" => "number",
						"text" => "Enter the value of n"
					),
					"common-difference" => array(
						"type" => "number",
						"text" => "Enter the common difference"
					),
				),
				"common-difference" => array(
					"sequence" => array(
						"type" => "text",
						"text" => "Enter a sequence"
					)
				)
			),
			"geometric" => array(
				"nth-term" => array(
					"first-term" => array(
						"type" => "number",
						"text" => "Enter the first term"
					),
					"value-of-n" => array(
						"type" => "number",
						"text" => "Enter the value of n"
					),
					"common-ratio" => array(
						"type" => "number",
						"text" => "Enter the common ratio"
					),
				),
				"series" => array(
					"first-term" => array(
						"type" => "number",
						"text" => "Enter the first term"
					),
					"value-of-n" => array(
						"type" => "number",
						"text" => "Enter the value of n"
					),
					"common-ratio" => array(
						"type" => "number",
						"text" => "Enter the common ratio"
					),
				),
				"common-ratio" => array(
					"sequence" => array(
						"type" => "text",
						"text" => "Enter a sequence"
					)
				),
				"infinite-sequence" => array(
					"first-term" => array(
						"type" => "number",
						"text" => "Enter the first term"
					),
					"common-ratio" => array(
						"type" => "number",
						"text" => "Enter the common ratio"
					)
				)
			)
		),
		"science" => array(
			"waves" => array(
				"wave-speed" => array(
					"wavelength" => array(
						"type" => "number",
						"text" => "Enter the wave's  wavelength (in meters)"
					),
					"wave-frequency" => array(
						"type" => "number",
						"text" => "Enter the wave's frequency (in hertz)"
					),
				),
				"wavelength" => array(
					"wave-frequency" => array(
						"type" => "number",
						"text" => "Enter the wave's frequency (in hertz)"
					),
					"wave-speed" => array(
						"type" => "number",
						"text" => "Enter the wave's speed (in meters/second)"
					),
				),
				"wave-frequency" => array(
					"wave-speed" => array(
						"type" => "number",
						"text" => "Enter the wave's speed (in hertz)"
					),
					"wavelength" => array(
						"type" => "number",
						"text" => "Enter the wave's  wavelength (in meters)"
					),
				)
			),
			"magnets-electricity" => array(
				"magnetic-force" => array(
					"particle-magnitude" => array(
						"type" => "number",
						"text" => "Enter the magnitude of the charged particle (in Coulomb)"
					),
					"magnetic-field" => array(
						"type" => "number",
						"text" => "Enter the strength of the magnectic field (in tesla)"
					),
					"particle-velocity" => array(
						"type" => "number",
						"text" => "Enter the speed of the charged particle (in meters/second)"
					),
					"angle" => array(
						"type" => "number",
						"text" => "Enter the angle of the magnetic force (in degrees)"
					),
				),
				"conductors-currents" => array(
					"magnetic-field" => array(
						"type" => "number",
						"text" => "Enter the strength of the magnectic field (in tesla)"
					),
					"wire-current" => array(
						"type" => "number",
						"text" => "Enter the speed of the current running through the wire (in amperes)"
					),
					"wire-length" => array(
						"type" => "number",
						"text" => "Enter the length of the wire (in meters)"
					),
				),
				"particle-magnitude" => array(
					"magnetic-force" => array(
						"type" => "number",
						"text" => "Enter the force of magnetism (in Newtons)"
					),
					"magnetic-field" => array(
						"type" => "number",
						"text" => "Enter the strength of the magnectic field (in tesla)"
					),
					"particle-velocity" => array(
						"type" => "number",
						"text" => "Enter the speed of the charged particle (in meters/second)"
					),
					"angle" => array(
						"type" => "number",
						"text" => "Enter the angle of the magnetic force (in degrees)"
					),
				),
				"magnetic-field" => array(
					"magnetic-force" => array(
						"type" => "number",
						"text" => "Enter the force of magnetism (in Newtons)"
					),
					"particle-magnitude" => array(
						"type" => "number",
						"text" => "Enter the magnitude of the charged particle (in Coulomb)"
					),
					"particle-velocity" => array(
						"type" => "number",
						"text" => "Enter the speed of the charged particle (in meters/second)"
					),
					"angle" => array(
						"type" => "number",
						"text" => "Enter the angle of the magnetic force (in degrees)"
					),
				),
				"electromotive-force" => array(
					"magnetic-field" => array(
						"type" => "number",
						"text" => "Enter the strength of the magnectic field (in tesla)"
					),
					"wire-length" => array(
						"type" => "number",
						"text" => "Enter the length of the wire (in meters)"
					),
					"wire-current" => array(
						"type" => "number",
						"text" => "Enter the speed of the current running through the wire (in amperes)"
					),
					"angle" => array(
						"type" => "number",
						"text" => "Enter the angle of the magnetic force (in degrees)"
					),
				),
				"tesla" => array(
					"ampere-meters" => array(
						"type" => "number",
						"text" => "Enter a value in for the current in Ampere meters"
					),
					"force-newtons" => array(
						"type" => "number",
						"text" => "Enter a value for force in newtons"
					),
				)
			),
			"light" => array(
				"refraction-index" => array(
					"light-medium" => array(
						"type" => "number",
						"text" => "Enter the speed of light in a medium (in km/s)"
					),
				),
				"refraction-angle" => array(
					"angle-incidence" => array(
						"type" => "number",
						"text" => "Enter the angle of incidence in degrees"
					),
					"refractive-index-1" => array(
						"type" => "number",
						"text" => "Enter the refractive index of material no. 1"
					),
					"refractive-index-2" => array(
						"type" => "number",
						"text" => "Enter the refractive index of material no. 2"
					),
				)
			)
		)
	);


	if(isset($_GET["subject"]) and isset($_GET["lesson"]) and isset($_GET["problem"])){
		$subject = $_GET["subject"];
		$lesson = $_GET["lesson"];
		$problem = $_GET["problem"];
		
		if(empty($subject) or empty($lesson) or empty($problem)){
			header("Location: index.php?error=unexpectederror");
			exit();
		}
		
		?>
			<div class="inputs">
				<p>Enter Values:</p>
				<input id="subject" type="hidden" value="<?php echo $subject ?>">
				<input id="lesson" type="hidden" value="<?php echo $lesson ?>">
				<input id="problem" type="hidden" value="<?php echo $problem ?>">
				<p id="answer"></p>
		<?php
		
		foreach($options[$subject][$lesson][$problem] as $option => $value){
			$id = $option;
			$type = $value["type"];
			$text = $value["text"];
			
			?>
				<input id="<?php echo $id ?>" type="<?php echo $type ?>" placeholder="<?php echo $text ?>">
			<?php
		}
		
		?>
				<button type="button" onclick="solve();">Solve it!</button>
			</div>
		<?php
		
		
	}
?>